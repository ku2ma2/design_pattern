# Strategy パターン


```uml
@startuml

class Player {
    -String name
    -Strategy strategy
    -int wincount
    -int losecount
    -int gamecount
    +Player(String name, Strategy strategy)
    +netHand()
    +win()
    +lose()
    +even()
    +toString()
}

interface Strategy {
    {abstract} +Hand nextHand()
    {abstract} +void study(boolean win)
}

class WinningStrategy {
    +nextHand()
    +study(boolean win)
}

class ProbStrategy {
    +nextHand()
    +study(boolean win)
    -getSum(int hv)
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

- [\[php\] デザインパターン練習 Strategy](https://ku2ma2.github.io/design_pattern/2017/07/22/php-strategy.html)
