# Prototype パターン


```uml
@startuml

class Display {
    +impl
    +open()
    +print()
    +close()
    +display()
}

class CountDisplay {
    +multiDisplay()
}

abstract DisplayImpl {
    {abstract} +rawOpen()
    {abstract} +rawPrint()
    {abstract} +rawClose()
}

class StringDisplayImpl {
    +rawOpen()
    +rawPrint()
    +rawClose()
}

Display o-right-> DisplayImpl
CountDisplay -up-|> Display
StringDisplayImpl -up-|> DisplayImpl


@enduml
```
