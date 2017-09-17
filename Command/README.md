# Command パターン


```uml
@startuml

interface Command {
    {abstract} +execute()
}

class Queue {
    -commands
    -current_index
    +Queue()
    +addCommand()
    +run()
    +next()
}

class ConcreteCommand {
    -file
    +ConcreteCommand(File $file)
    +execute()
}
class File {
    -name
    +File(String name)
    +getName()
    +decompress()
    +compress()
    +create()
}

class Client {

}


Client -right-> File
Client -right-> ConcreteCommand :Create
ConcreteCommand -left-> File
ConcreteCommand -up-|> Command
Queue o-right-> Command

@enduml
```

### PHPはこちらを参考にした

- [PHPによるデザインパターン入門 \- Command～要求をクラスで表す \- Do You PHP はてな](http://d.hatena.ne.jp/shimooka/20141216/1418705218)
