# State パターン


```uml
@startuml

class BigChar {
    -charname
    -fontdata
    +print()
}

class BigCharFactory {
    -pool
    -singleton
    -BigCharFactory()
    {static} +getInterface()
    +getBigChar()
}

class BigString {
    -bigchars
    +print()
}

class Main {
    
}

BigCharFactory o-up-> BigChar: Creates
BigString -up-> BigCharFactory: Uses
BigString o-up-> BigChar: Uses
Main -left-> BigString: Uses


@enduml
```


| 名前 | 解説 |
|:----|:----|
| BigChar | 「大きな文字」を表すクラス |
| BigCharFactory | BigCharのインスタンスを共有しながら生成するクラス |
| BigString | BigCharを集めて作った「大きな文字列」を表すクラス |
| Main | 動作テスト用のクラス |
