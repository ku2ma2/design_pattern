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

Aggregate --> Iterator : Creates

@enduml
```
