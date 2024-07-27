# Laundry Daily Report Summary System

## Requirements

- PHP 8.1+
- Composer
- OpenAI API key

## Usage

Repository をクローン

```zsh
git clone git@github.com:mimosafa/slim-backend.git
```

```zsh
cd slim-backend
```

Branch を変更

```zsh
git checkout laundry/main
```

`.env` ファイルを作成
```zsh
cp .env.example .env
```

`.env` ファイルの`OPENAI_API_KEY` を定義
```shell
#
# Open AI API key
#
OPENAI_API_KEY=xx-xxx-xxxxxx...
```

ライブラリーのインストール
```zsh
composer install
```

ビルトインサーバーの起動
```zsh
php -S localhost:8080 -t public
```

http://localhost:8080 にアクセス
