# Iterator パターン


```uml
@startuml


interface Aggregate {
    {abstract} Iterator iterator()
}

interface Iterator {
    {abstract} boolean hasNext()
    {abstract} Object next()
}

Aggregate --> Iterator : Creates

@enduml
```
