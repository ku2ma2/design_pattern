# Decorator パターン


```uml
@startuml

abstract Display {
    {abstract} +getColumn()
    {abstract} +getRows()
    {abstract} +getRowText()
    +show()
}

class StringDisplay {
    +string
    +getColumn()
    +getRows()
    +getRowText()
}

abstract Border {
    +display
}

class SideBorder {
    +getColumn()
    +getRows()
    +getRowText()
}
class FullBorder {
    +getColumn()
    +getRows()
    +getRowText()
    +makeLine()
}

StringDisplay -up-|> Display
Border -up-|> Display
Border o-up->Display
SideBorder -up-|> Border
FullBorder -up-|> Border


@enduml
```

| 名前 | 解説 |
|:----|:----|
| Display | 文字列表示用の抽象クラス |
| StringDisplay | 1行だけからなる文字列表示用のクラス |
| Border | 「飾り枠」を表す抽象クラス |
| SideBorder | 左右にのみ飾り枠をつけるクラス |
| FullBorder | 上下左右に飾り枠をつけるクラス |
| Main | 動作テスト用のクラス |

