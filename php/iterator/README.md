# Iterator パターン


```uml
@startuml


interface Aggregate {
    {abstract} boolean iterator()
}

interface Iterator {
    {abstract} boolean hasNext()
    {abstract} boolean next()
}

Aggregate --> Iterator : Creates

@enduml
```
