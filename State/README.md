# State パターン


```uml
@startuml

interface Context {
    {abstract} +setClock()
    {abstract} +changeState()
    {abstract} +callSecurityCenter()
    {abstract} +recordLog()
}

class SafeFrame {
    -state
    +setClock()
    +changeState()
    +callSecurityCenter()
    +recordLog()
}

interface State {
    {abstract} +doClock()
    {abstract} +doUse()
    {abstract} +doAlerm()
    {abstract} +doPhone()
}

class DayState {
    -singleton
    -DayState()
    {static} +getInterface()
    +doClock()
    +doUse()
    +doAlerm()
    +doPhone()
}

class NightState {
    -singleton
    -NightState()
    {static} +getInterface()
    +doClock()
    +doUse()
    +doAlerm()
    +doPhone()
}

SafeFrame .up.|> Context
SafeFrame o-right-> State
DayState .up.|> State
NightState .up.|> State


@enduml
```


| 名前 | 解説 |
|:----|:----|
| State | 金庫の状態を表すインターフェース |
| DayState | Stateを実装しているクラス。昼間の状態を表す |
| NightState | Stateを実装しているクラス。夜間の状態を表す |
| Context | 金庫の状態変化を管理し、警備センターとの連絡を取るインターフェース |
| SafeFrame | Contextを実装しているクラス。ボタンや画面表示などのユーザーインターフェースを持つ |
| Main | 動作テスト用のクラス |
