# Iterator パターン


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
