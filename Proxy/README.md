# Proxy パターン


```uml
@startuml

interface Printable {
    {abstract} +setPrintName(String name)
    {abstract} +getPrinterName()
    {abstract} +print(String string)
}

class PrinterProxy {
    -name
    -real
    -PrinterFactory()
    +setPrinterName()
    +getPrinterName()
    +print()
    -realize()
}

class Printer {
    -name
    +Printer()
    +setPrinterName(String name)
    +getPrinterName()
    +print(String string)
    -heavyJob(String msg)
}

class Main {
    
}

PrinterProxy .up.|> Printable
Printer .up.|> Printable
PrinterProxy o-right-> Printer: Uses
Main -right-> PrinterProxy: Uses


@enduml
```


| 名前 | 解説 |
|:----|:----|
| Printer | 名前付きのプリンタを表すクラス(本人) |
| Pritable | PrinterとPrinterProxyに共通のインターフェース |
| PrinterProxy | 名前付きのプリンタを表すクラス(代理人) |
| Main | 動作テスト用のクラス |
