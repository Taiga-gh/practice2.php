1．ControllerとRoutingについてわからないことを書き出してメンターに質問してみましょう。
特にありません。

2．Controllerの役割について、説明してください。
Modelと連携をとってデータベースからデータを取得したり、データを保存する。
Modelから取得したデータを基にViewと連携してユーザーのブラウザに表示するデータを生成し、Viewにデータをユーザーのブラウザに送信するように指示を出す。

3．ControllerとRoutingの役割について、説明してください。
ユーザーから来たアクセスをRoutingが受け取り、Controllerに渡す。
厳密にはRoutingは来たアクセスをControllerの中のActionに渡している。

4.【応用】 artisanを使って、Admin/ProfileControllerを作成しましょう。
→　ProfileController.php　参照

5.【応用】 Admin/ProfileControllerに、以下のadd, create, edit, update それぞれのActionを追加してみましょう。
→　ProfileController.php　参照