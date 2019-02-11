module.exports = {
    publicPath: process.env.NODE_ENV === 'production'
        ? '/account/dist/'
        : '/',
    pages: {
        index: {
            // точка входа для страницы
            entry: 'src/main.js',
            // исходный шаблон
            template: 'public/index.html',
            // в результате будет dist/index.html
            filename: process.env.NODE_ENV === 'production'
                ? 'index.php'
                : 'index.html',
            // когда используется опция title, то <title> в шаблоне
            // должен быть <title><%= htmlWebpackPlugin.options.title %></title>
            title: 'Index Page',
            // все фрагменты, добавляемые на этой странице, по умолчанию
            // это извлеченные общий фрагмент и вендорный фрагмент.
            chunks: ['chunk-vendors', 'chunk-common', 'index']
        }
    }
}