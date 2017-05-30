# Adapter パターン


```uml
@startuml


Class Main #E0FFFF {
}

interface Print {
    {abstract} void printWeak()
    {abstract} void printString()
}

class PrintBanner {
    +PrintBanner(String string)
    +printWeak()
    +printString()
}

class Banner {
  -String string
  +Banner(String string)
  +showWithParen()
  +showWithAster()
}

Main -down-> Print : Uses
PrintBanner .left-|> Print
PrintBanner -right-|> Banner


@enduml
```

- なぜBannerで出力するのだろう？テストをしやすいという意味では Banner側は値を返すだけの方がやりやすい気がする。
