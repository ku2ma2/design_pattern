# Proxy パターン


```uml
@startuml

class Command {
    +Execute()
}

class Invoker {
}

class ConcreteCommand {
    -state
    +Execute()
}
class Receiver {
    +Action()
}

class Client {

}


Client -right-> Receiver
Client -right-> ConcreteCommand :Create
ConcreteCommand -left-> Receiver
ConcreteCommand -up-|> Command
Invoker o-right-> Command

@enduml
```

### PHPはこちらを参考にした

- [PHPによるデザインパターン入門 \- Command～要求をクラスで表す \- Do You PHP はてな](http://d.hatena.ne.jp/shimooka/20141216/1418705218)
