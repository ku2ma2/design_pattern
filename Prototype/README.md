# Prototype パターン


```uml
@startuml

class Manager {
    -showcase
    +void register(String name, Product proto)
    +Product create(String protoname)
}

interface Product {
    {abstract} +void use(String s)
    {abstract} +Product createClone()
}

class UnderlinePen {
    -ulchar
    +void use(String s)
    +Product createClone()
}

class MessageBox {
    -decochar
    +void use(String s)
    +Product createClone()
}

Manager -right-> Product: Uses
UnderlinePen .up.|> Product
MessageBox .up.|> Product

@enduml
```
