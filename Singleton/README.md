# Singleton パターン


```uml
@startuml


class Singleton {
    -singleton
    -Singleton()
    {static} +getInstance()
}

@enduml
```

| 名前 | 解説 |
|:----|:-----|
| Singleton | インスタンスが1つしか存在しないクラス |
| main | 動作テスト用のクラス |

### PHP 実装

PHPではクラス変数を宣言時に新しいインスタンスを作成しての初期化ができないため、
該当書籍で問題5-3に指摘されているような厳密な形でのSingleton実装できていない。
traitでの実装を提案しているWebも見つけたが避けている

- [シングルトンの抽象化クラス＆トレイトを作成する \- Qiita](http://qiita.com/YusukeHigaki/items/36baa45851fd37bf56b8)
