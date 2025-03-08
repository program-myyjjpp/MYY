<?php

namespace App\Http\View\Composer;

use App\Services\ThemeCacheService;
use Illuminate\View\View;
use App\Services\SpiderDataService;
use Illuminate\Support\Facades\Request;

class NavigationComposer
{
    protected SpiderDataService $spiderDataService;
    private mixed $themeCacheService;

    public function __construct(SpiderDataService $spiderDataService, ThemeCacheService $themeCacheService)
    {
        $this->spiderDataService = $spiderDataService;
        $this->themeCacheService = $themeCacheService;
    }

    public function compose(View $view): void
    {
        // 获取缓存中的 banner 数据
        $sections = $this->themeCacheService->getCachedSections();


        $menus = $this->spiderDataService->getMenus(true);
        $information = $this->spiderDataService->getInformation();
        $latestArticlesWithMenu = $this->spiderDataService->getLatestArticlesWithMenu(50);
        $randomStrings = $this->spiderDataService->getRandomStrings();
        // 初始化 randomIndex
        $randomIndex = 0;

        // 获取当前请求的完整 URL 或 URI
        $currentUrl = Request::path(); // 这会获取如 'category/some-category'

        // 提取出栏目部分的URL
        $categoryUrl = explode('/', $currentUrl)[0]; // 假设URL结构始终正确

        // 查找当前激活的菜单项
        $currentMenu = $menus->first(function ($menu) use ($categoryUrl) {
            return trim($menu->link, '/') === $categoryUrl;
        });

        $view->with([
            'menus' => $menus,
            'information' => $information,
            'new_article' => $latestArticlesWithMenu,
            'menu_page' => $currentMenu, // 添加当前菜单项到视图数据中
            'random' => $randomStrings,
            'randomIndex' => $randomIndex,
            'sections' => $sections,

        ]);
    }
}

