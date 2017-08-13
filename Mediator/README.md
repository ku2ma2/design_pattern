# Mediator パターン


```uml
@startuml

class Mediator {
}

class ConcreteMediator {
}

class Colleague {
}

class ConcreteColleague1 {
}

class ConcreteColleague2 {
}


ConcreteMediator -up-|> Mediator
Colleague o-right-> Mediator

ConcreteMediator o-down-> ConcreteColleague1
ConcreteMediator o-down-> ConcreteColleague2

ConcreteColleague1 -up-|> Colleague
ConcreteColleague2 -up-|> Colleague

@enduml
```



