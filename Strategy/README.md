# Strategy パターン


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

class Hand {
    +static final int HANDVALUE_GUU
    +static final int HANDVALUE_CHO
    +static final int HANDVALUE_PAA
    +hand
    -name
    -handvalue
    -Hand(int handvalue)
    +Hand getHand(int handvalue)
    +Boolean isStrongerThan(Hand h)
    +Boolean isWeakerThan(Hand h)
    -int fight(Hand h)
    +string toString()
}

Player o-right-> Strategy
WinningStrategy .up.|> Strategy
ProbStrategy .up.|> Strategy


@enduml
```
