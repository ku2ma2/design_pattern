# Interpreter パターン


```uml
@startuml

class Main {
}

class Context {
    +nextToken()
    +currentToken()
    +skipToken()
    +currentNumber()
}

interface Node {
    {abstract} +parse()
}
class ProgramNode {
    +commandListNode
    +parse()
}
class RepeatCommandNode {
    +number
    +commandListNode
    +parse()
}
class CommandListNode {
    +list
    +parse()
}
class CommandNode {
    +node
    +parse()
}
class PrimitiveCommandNode {
    +name
    +parse()
}

Main -left-> Context :Creates
Main -right-> Node :Uses

ProgramNode -up-|> Node
RepeatCommandNode -up-|> Node
CommandListNode -up-|> Node
CommandNode -up-|> Node
PrimitiveCommandNode -up-|> Node

ProgramNode o--down-> Node
RepeatCommandNode o--down-> Node
CommandListNode o--down-> Node
CommandNode o--down-> Node

@enduml
```

| 名前 | 解説 |
|:----|:----|
| Node | 構文木の「ノード」になるクラス |
| ProgramNode | <program>に対応するクラス |
| CommandListNode | <command list>に対応するクラス |
| CommandNode | <command>に対応するクラス |
| RepeatCommandNode | <repeat command>に対応するクラス |
| PrimitiveCommandNode | <primitive command>に対応するクラス |
| Context | 構文解析のための前後関係を表すクラス |
| ParseException | 構文解析中の例外クラス |
| Main | 動作テスト用のクラス |

### PHPはこちらを参考にした

- [PHP7でデザインパターン入門23/23 Interpreterパターン \- Do Something](http://tic40.hatenablog.com/entry/2017/06/26/080000)
