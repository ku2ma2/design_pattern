# Factory Method パターン


```uml
@startuml

package facotory {
    abstract Item {
        +caption
        {abstract} +makeHTML()
    }
    abstract Link {
        +url
        {abstract} +makeHTML()
    }
    abstract Tray {
        +tray
        +add()
        {abstract} +makeHTML()
    }
    abstract Page {
        +title
        +author
        +add()
        +output()
        {abstract} +makeHTML()
    }
    abstract Factory {
        {abstract} +getFactory()
        {abstract} +createLink()
        {abstract} +createTray()
        {abstract} +createPage()
    }
}

package listfactory {

    class ListLink {
        +makeHTML()
    }
    class ListTray {
        +makeHTML()
    }
    class ListPage {
        +ListPage(String title, String author)
        +makeHTML()
    }
    class ListFactory {
        +createLink()
        +createTray()
        +createPage()
    }
}


Link -up-|> Item
Tray -up-|> Item
Tray o-up-> Item
Factory -up-> Link: Creates
Factory -up-> Tray: Creates
Factory -up-> Page: Creates

ListFactory -up-> ListLink: Creates
ListFactory -up-> ListTray: Creates
ListFactory -up-> ListPage: Creates
ListFactory -up-|> Factory
ListLink -up-|> Link
ListTray -up-|> Tray
ListPage -up-|> Page

@enduml
```

