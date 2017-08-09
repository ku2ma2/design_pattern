# Facade パターン


```uml
@startuml

class Main {

}

class PageMaker {
    {static} +makeWelecomePage()
}

class HtmlWriter {
    +writer
    +title()
    +paragraph()
    +link()
    +mailto()
    +close()
}

class Database {
    {static} +getProperties()
}



Main -down-> PageMaker :Uses
PageMaker -down-> HtmlWriter :Uses
PageMaker -down-> Database :Uses


@enduml
```


| 名前 | 解説 |
|:----|:----|
| Database | メールアドレスからユーザ名を得るクラス |
| HtmlWriter | HTMLファイルを作成するクラス |
| PageMaker | メールアドレスからユーザのWebページを作成するクラス |
| Main | 動作テスト用のクラス |

