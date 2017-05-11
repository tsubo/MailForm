# MailForm

Laravel v5.4 で確認画面付きのコンタクトフォームを実装する例

## インストール

```
git clone https://github.com/tsubo/MailForm.git
cd MailForm
composer install
```

## 初期設定

### .env ファイルの作成とキー生成

```
cp .env.example .env
php artisan key:generate
```

### .env ファイル編集

Gmail の SMTP サーバーを使う場合の設定例

```
# SMTP 設定
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_ENCRYPTION=ssl
MAIL_USERNAME=your_email@gmail.com
MAIL_PASSWORD=your_password

# メール設定
MAIL_FROM_ADDRESS=your_email@gmail.com  # From アドレス
MAIL_FROM_NAME=your_name                # 送信者名
MAIL_CONTACT_TO=to_address@domain.com   # お問い合わせの宛先アドレス
```

## 動作確認

```
php artisan serve
```

