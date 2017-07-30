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
    +getBookAt(int index)
    +appendBook(Book book)
    +getLength()
    +iterator()
}
class BookShelfIterator {
    -BookShelf bookShelf
    -int index
    +hasNext()
    +next()
}

class Book {
  -name
  +Book(string name)
  +getName()
}

BookShelfIterator .up-> Iterator
BookShelf .up-> Aggregate
Aggregate -right-> Iterator : Creates
Book o-up- BookShelf


@enduml
```

- [\[php\] デザインパターン練習 Iterator](https://ku2ma2.github.io/design_pattern/2017/05/30/php-iterator.html)
