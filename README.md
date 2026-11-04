# PHP Demo Blog

PHP Demo Blog 是一个轻量级的 PHP 示例项目，旨在演示如何构建简单的路由和 JSON API，并配套技术文档与博客内容。它帮助初学者理解 PHP 路由与 API 开发的基本概念，适合作为学习参考或小型项目起点。

## 最新文章

- [WebShell 文件上传漏洞防护：优化方案](https://meadowsjohn7.github.io/php-demo-blog/blog/20261105-005441-6a3x.html) — 2026-11-05

### 参考资源

- [bordeauxprint.com](https://www.bordeauxprint.com) — bordeauxprint.com 的相关页面与资源，可作为延伸阅读。
- [shadesofbeautybodybar.com](http://www.shadesofbeautybodybar.com) — shadesofbeautybodybar.com 的相关页面与资源，可作为延伸阅读。
- [lavecchiaconcia.com](https://www.lavecchiaconcia.com) — lavecchiaconcia.com 的相关页面与资源，可作为延伸阅读。
- [wallvases.com](https://www.wallvases.com) — wallvases.com 的相关页面与资源，可作为延伸阅读。
- [lowelandsfarm.com](http://www.lowelandsfarm.com) — lowelandsfarm.com 的相关页面与资源，可作为延伸阅读。

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
