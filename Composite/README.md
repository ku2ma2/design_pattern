# Composite パターン


```uml
@startuml

abstract Entry {
    {abstract} +getName()
    {abstract} +getSize()
    {abstract} +printList()
    +add()
}

class File {
    +name
    +size
    +getName()
    +getSize()
    +printList()
}

class Directory {
    +name
    +size
    +getName()
    +getSize()
    +printList()
    +add()
}

File -up-|> Entry
Directory -up-|> Entry
Directory o-up-> Entry


@enduml
```

| 名前 | 解説 |
|:----|:----|
| Entry | FileとDirectoryを同一視する抽象クラス |
| File | Fileを表すクラス |
| Directory | Directoryを表すクラス |
| FileTreatmentException | FileにEntryを追加しようとした時に起きる例外クラス |
| Main | 動作テスト用のクラス |

