# Observer パターン


```uml
@startuml


abstract NumberGenerator {
    -observers
    +addObserver()
    +deleteObserver()
    +notifyObservers()
    {abstract} +getNumber()
    {abstract} +execute()
}

class RandomNumberGenerator {
    -random
    -number
    +getNumber()
    +execute()
}

interface Observer {
    {abstract} +upadte(NumberGenerator generator)
}

class DigitObserver {
    +update()
}

class GraphObserver {
    +update()
}


NumberGenerator o-right-> Observer :Notifies
RandomNumberGenerator -up-|> NumberGenerator

DigitObserver .up.|> Observer
GraphObserver .up.|> Observer


@enduml
```


| 名前 | 解説 |
|:----|:----|
| Observer | 観察者を表すインターフェース |
| NumberGenerator | 数を生成するオブジェクトを表す抽象クラス |
| RandomNumberGenerator | ランダムに数を生成するクラス |
| DigitObserver | 数字で数を表示するクラス |
| GraphObserver | 簡易グラフで数を表示するクラス |
| Main | 動作テスト用クラス |

