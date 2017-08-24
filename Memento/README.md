# Memento パターン


```uml
@startuml


class Main {
}

class Gamer {
    -money
    -fruits
    -random
    {static} -fruitsname
    +getMoney()
    +bet()
    +createMemento()
    +restoreMemento()
    +toString()
    -getFruit()
}

class Memento {
    ~money
    ~fruits
    +getMoney()
    ~Memento()
    ~addFruit()
}



Main -right-> Gamer :Requests
Gamer -down-> Memento :Creates
Main o-down-> Memento


@enduml
```


| 名前 | 解説 |
|:----|:----|
| Memento | Gamerの状態を表すクラス |
| Gamer | ゲームを行う主人公のクラス、Mementoのインスタンスを作る |
| Main | ゲーム進行クラス、Mementoのインスタンスを保存して起き、必要に応じてGamerの状態を復元する |
