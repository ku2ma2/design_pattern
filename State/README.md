# State パターン


```uml
@startuml

interface Context {
    {abstract} +setClock(int $hour)
    {abstract} +changeState(State $state)
    {abstract} +callSecurityCenter(string $msg)
    {abstract} +recordLog(string $msg)
}

class SafeFrame {
    -state
    +setClock()
    +changeState()
    +callSecurityCenter()
    +recordLog()
}

interface State {
    {abstract} +doClock(Context $context, int $hour)
    {abstract} +doUse(Context $context)
    {abstract} +doAlerm(Context $context)
    {abstract} +doPhone(Context $context)
}

class DayState {
    -singleton
    -DayState()
    {static} +getInterface()
    +doClock(Context $context, int $hour)
    +doUse(Context $context)
    +doAlerm(Context $context)
    +doPhone(Context $context)
    +toString()
}

class NightState {
    -singleton
    -NightState()
    {static} +getInterface()
    +doClock(Context $context, int $hour)
    +doUse(Context $context)
    +doAlerm(Context $context)
    +doPhone(Context $context)
    +toString()
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
