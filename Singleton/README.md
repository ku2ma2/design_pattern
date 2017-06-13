# Singleton パターン


```uml
@startuml


class Singleton {
    -singleton
    -Singleton()
    {static} +getInstance()
}

@enduml
```

| 名前 | 解説 |
|:----|:-----|
| Singleton | インスタンスが1つしか存在しないクラス |
| main | 動作テスト用のクラス |
