# Iterator パターン


```uml
@startuml


interface Aggregate {
    iterator
}

interface Iterator {
    hasNext
    next
}

Aggregate --> "Interator" : Creates

@enduml
```
