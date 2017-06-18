# Billder パターン


```uml
@startuml

class Main {
}

class Director {
    +builder
    +Director()
}

class Builder {
  {abstract} +makeTitle()
  {abstract} +makeString()
  {abstract} +makeItems()
  {abstract} +close()
}

class TextBuilder {
    +buffer
    +makeTitle()
    +makeString()
    +makeItems()
    +close()
    +getResult()
}

class HTMLBuilder {
    +filename
    +writer
    +makeTitle()
    +makeString()
    +makeItems()
    +close()
    +getResult()
}

Main -right-> Director :Uses
Director o-right-> Builder
Main -down-> TextBuilder :Uses
Main -down-> HTMLBuilder : Uses
TextBuilder -up-|> Builder
HTMLBuilder -up-|> Builder

@enduml
```

| 名前 | 解説 |
|:----|:-----|
| Builder | 文章を構成するためのメソッドを定めた抽象クラス |
| Director | 1つの文章を作るクラス |
| TextBuilder | プレーンテキスト(普通の文字列)を使って文章を作るクラス |
| HTMLBuilder | HTMLファイルを使って文章を作るクラス |
| Main | 動作テスト用のクラス | 