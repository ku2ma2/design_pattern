# Template パターン


```uml
@startuml

package framework {
    interface Factory {
        {abstract} +void create()
        {abstract} +void createProduct()
        {abstract} +void registerProduct()
    }
    interface Product {
        {abstract} +void use()
    }
}

package idcard {

    class IDCardFactory {
        +owners
        +createProduct()
        +registerProduct()
        +getOwners()
    }

    class IDCard {
        +owner
        +use()
        +getOwner()
    }
}


Factory -right-> Product: Creates
IDCardFactory -up-|> Factory
IDCardFactory -right-> IDCard: Creates
IDCard -up-|> Product

@enduml
```

| パッケージ | 名前 | 解説 |
|:---------|:----|:-----|
| framework | Product | 抽象メソッドuseのみ定義されている抽象クラス |
| framework | Factory | メソッドcreateを実装している抽象クラス |
| idcard | IDCard | メソッドuseを実装しているクラス |
| idcard | IDCardFactory | メソッドcreateProduct,registerProductを実装しているクラス |
| 無名 | Main | 動作テスト用のクラス | 
