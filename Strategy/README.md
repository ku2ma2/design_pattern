# Prototype パターン


```uml
@startuml

class Player {
    +strategy
    +netHand()
    +win()
    +lose()
    +even()
}

interface Strategy {
    {abstract} +nextHand()
    {abstract} +study()
}

class WinningStrategy {
    +nextHand()
    +study()
}

class ProbStrategy {
    +nextHand()
    +study()
}

Player o-right-> Strategy
WinningStrategy .up.|> Strategy
ProbStrategy .up.|> Strategy


@enduml
```
