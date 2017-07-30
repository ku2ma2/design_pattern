# Chain Of Responsibility パターン


```uml
@startuml

abstract Visitor {
    {abstract} +visit(File)
    {abstract} +visit(Directory)
}

class ListVisitor {
    +currentdir
    +visit(File)
    +visit(Directory)
}

interface Element {
    +accept
}

abstract Entry {
    {abstract} +getName()
    {abstract} +getSize()
    +add()
    +iterator()
}

class File {
    +name
    +size
    +accept()
    +getName()
    +getSize()
}

class Directory {
    +name
    +dir
    +accept()
    +getName()
    +getSize()
    +add()
    +iterator()
}

ListVisitor -up-|> Visitor
Main -up-> ListVisitor :Uses

Entry .up.|> Element
File -up-|> Entry
Directory -up-|> Entry
Directory o-up-> Entry

Main -up-> File :Uses
Main -up-> Directory :Uses


@enduml
```


| 名前 | 解説 |
|:----|:----|
| Visitor | ファイルやディレクトリを訪れる訪問者を表す抽象クラス |
| Element | Visitorクラスのインスタンスを受け入れるデータ構造を表すインターフェース |
| ListVisitor | Vistorクラスのサブクラスで、ファイルやディレクトリの一覧を表示するクラス |
| Entry | FileとDirectoryのスーパークラスとなる抽象クラス(Acceptorインターフェースを実装) |
| File | ファイルを表すクラス |
| Directory | ディレクトリを表すクラス |
| FileTreatmentException | Fileに対してAddした場合に発生する例外クラス |
| Main | 動作テスト用のクラス |

