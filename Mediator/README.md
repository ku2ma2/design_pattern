# Mediator パターン


```uml
@startuml

interface Chatroom {
    +login(User user)
    +sendMessage(string from, string to, string mssage)
}

class ChatSocial {
    -array users
    +login(User $user)
    +sendMessage(string from, string to, string message)

}

abstract User {
    #chatroom;
    #name;
    +User(string name)
    +getName()
    +setChatroom(Chatroom chatroom)
    +getChatroom()

    {abstract} +sendMessage(string to, string message);
    {abstract} +receiveMessage(string from, string message);
}

class UserDefault {
    +sendMessage(string to, string message)
    +receiveMessage(string from, string message)
}

class UserAdmin {
    +sendMessage(string to, string message)
    +receiveMessage(string from, string message)
}


ChatSocial -up-|> Chatroom
User o-right-> Chatroom

ChatSocial o-down-> UserDefault
ChatSocial o-down-> UserAdmin

UserDefault -up-|> User
UserAdmin -up-|> User

@enduml
```



