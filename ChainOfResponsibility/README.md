# Chain Of Responsibility パターン


```uml
@startuml

class Main {

}

abstract Support {
    -name
    -next
    {abstract} +support()
    {abstract} +setNext()
    #resolve()
}

class NoSupport {
    #resolve()
}

class LimitSupport {
    -limit
    #resolve()
}

class OddSupport {
    #resolve()
}

class SpecialSupport {
    -number
    #resolve()
}


Main -right-> Support :Request
Support o-up-|> Support

NoSupport -up-|> Support
LimitSupport -up-|> Support
OddSupport -up-|> Support
SpecialSupport -up-|> Support


@enduml
```


| 名前 | 解説 |
|:----|:----|
| Trouble | 発生したトラブルを表すクラス、トラブル番号(number)を持つ |
| Support | トラブルを解決する抽象クラス |
| NoSupport | トラブルを解決する具象クラス(常に「解決しない」) |
| LimitSupport | トラブルを解決する具象クラス(指定した番号未満のトラブルを解決) |
| OddSupport | トラブルを解決する具象クラス(奇数番号のトラブルを解決) |
| SpecialSupport | トラブルを解決する具象クラス(指定番号のトラブルを解決) |
| Main | Supportたちの連鎖を作り、トラブルを起こす動作テスト用のクラス |

