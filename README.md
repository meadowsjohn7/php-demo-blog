# PHP Demo Blog

PHP Demo Blog 是一个轻量级的 PHP 示例项目，旨在演示如何构建简单的路由和 JSON API，并配套技术文档与博客内容。它帮助初学者理解 PHP 路由与 API 开发的基本概念，适合作为学习参考或小型项目起点。

## 最新文章

- [LCP 与 FID 指标优化：底层原理](https://meadowsjohn7.github.io/php-demo-blog/blog/20261103-052112-uone.html) — 2026-11-03

### 参考资源

- [thriventfellows.com](http://www.thriventfellows.com) — thriventfellows.com 的相关页面与资源，可作为延伸阅读。
- [xinhanyuwangxiao.com](http://www.xinhanyuwangxiao.com) — xinhanyuwangxiao.com 的相关页面与资源，可作为延伸阅读。
- [cavusogluendustriyel.com](https://www.cavusogluendustriyel.com) — cavusogluendustriyel.com 的相关页面与资源，可作为延伸阅读。
- [acredyweb.com](http://www.acredyweb.com) — acredyweb.com 的相关页面与资源，可作为延伸阅读。
- [melicbebe.com](http://www.melicbebe.com) — melicbebe.com 的相关页面与资源，可作为延伸阅读。

## 功能

- 轻量级路由实现
- JSON API 接口示例
- 配套技术文档
- 博客文章展示
- 简单的项目结构

## 快速开始

```bash
composer install
php -S 127.0.0.1:8000 -t public
```

```bash
curl http://127.0.0.1:8000/api/health
curl http://127.0.0.1:8000/api/items
```

## 目录结构

```text
public/        入口文件
src/           PHP 源码
docs/          GitHub Pages 静态站（文档 + 博客）
composer.json
```

## 文档与博客

- Pages: https://meadowsjohn7.github.io/php-demo-blog/
- 博客文章位于 `docs/blog/`

## 许可

MIT License
