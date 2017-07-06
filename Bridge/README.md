# Bridge パターン


```uml
@startuml

class Display {
    +Display(DisplayImpl impl)
    +impl
    +open()
    +print()
    +close()
    +display()
}

class CountDisplay {
    +CountDisplay(DisplayImpl impl)    
    +multiDisplay()
}

abstract DisplayImpl {
    {abstract} +rawOpen()
    {abstract} +rawPrint()
    {abstract} +rawClose()
}

class StringDisplayImpl {
    -String String
    -int width
    +StringDisplayImpl(String string)
    +rawOpen()
    +rawPrint()
    +rawClose()
    -printLine()
}

Display o-right-> DisplayImpl
CountDisplay -up-|> Display
StringDisplayImpl -up-|> DisplayImpl


@enduml
```


