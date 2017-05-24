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
class BookShelf {
    +books
    +last
    getBookAt()
    appendBook()
    getLength()
    iterator()
}
class BookShelfIterator {
    +bookShelf
    +index
    hasNext()
    next()
}

BookShelfIterator .up-> Iterator
BookShelf .up-> Aggregate
Aggregate -right-> Iterator : Creates


@enduml
```
