# Template パターン


```uml
@startuml


interface AbstractDisplay {
    {abstract} +void open()
    {abstract} +void print()
    {abstract} +void close()
    +void display()
}

class CharDisplay {
    -ch
    +CharDisplay(char ch)
    +open()
    +print()
    +close()
}

class StringDisplay {
  -String string
  -int width
  +StringDisplay(String string)
  +open()
  +print()
  +close()
  -printLine()
}

CharDisplay -up-|> AbstractDisplay
StringDisplay -up-|> AbstractDisplay


@enduml
```
