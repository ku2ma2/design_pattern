# Abstract Factory パターン


```uml
@startuml

package facotory {
    abstract Item {
        +caption
        +Item(String caption)
        {abstract} +makeHTML()
    }
    abstract Link {
        +url
        +Link(String caption, String url)
        {abstract} +makeHTML()
    }
    abstract Tray {
        +tray
        +Tray(String caption)
        +add(Item item)
        {abstract} +makeHTML()
    }
    abstract Page {
        +title
        +author
        +Page(String title, String author)
        +add(Item item)
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
        +ListLink(String caption, String url)
        +makeHTML()
    }
    class ListTray {
        +ListTray(String caption)
        +makeHTML()
    }
    class ListPage {
        +ListPage(String title, String author)
        +makeHTML()
    }
    class ListFactory {
        +createLink(String caption, String url)
        +createTray(String caption)
        +createPage(String title, String author)
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

