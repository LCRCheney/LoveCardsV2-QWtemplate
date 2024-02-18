<?php
return [
    //选择格式配置
    'Select' => [
        //推荐页面公告卡开关
        'ThemeNotify' => [
            'Name' => '公告卡开关',
            'Introduction' => '推荐页面公告卡的开关',
            'Default' => env('ThemeConfig.SelectThemeNotify', 1),
            'Element' => [
                0 => false,
                1 => true,
            ]
        ],
        //链接资源CDN开关
        'ThemeLinkCDN' => [
            'Name' => '资源CDN开关',
            'Introduction' => 'HTML中的部分Link资源CDN的开关',
            'Default' => env('ThemeConfig.SelectThemeLinkCDN', 0),
            'Element' => [
                0 => false,
                1 => true,
            ]
        ],
        //今日诗词
        'JRSC' => [
            'Name' => '今日诗词开关',
            'Introduction' => '今日诗词开关',
            'Default' => env('ThemeConfig.SelectJRSC', 1),
            'Element' => [
                0 => false,
                1 => true,
            ]
        ],
        //灯笼开关
        'DL' => [
            'Name' => '灯笼开关',
            'Introduction' => '灯笼开关',
            'Default' => env('ThemeConfig.SelectDL', 0),
            'Element' => [
                0 => false,
                1 => true,
            ]
        ],
        //音乐播放器开关
        'YY' => [
            'Name' => '音乐播放器开关',
            'Introduction' => '音乐播放器开关，使用开源项目 设置站：https://musicplayer.xfyun.club/ 开源：https://gitee.com/xfwlclub/xf-MusicPlayer',
            'Default' => env('ThemeConfig.SelectYY', 0),
            'Element' => [
                0 => false,
                1 => true,
            ]
        ],
        //樱花飘落开关
        'YH' => [
            'Name' => '樱花飘落开关',
            'Introduction' => '樱花飘落开关',
            'Default' => env('ThemeConfig.SelectYH', 0),
            'Element' => [
                0 => false,
                1 => true,
            ]
        ],
        //卡片联盟开关
        'KPLM' => [
            'Name' => '卡片联盟开关',
            'Introduction' => '加入卡片联盟后打开开关可显示卡片联盟的图标，欢迎各位积极加入卡盟，可以找群内管理审核加入喔！',
            'Default' => env('ThemeConfig.SelectKPLM', 1),
            'Element' => [
                0 => false,
                1 => true,
            ]
        ],
        //页脚开关
        'BQ' => [
            'Name' => '页脚开关',
            'Introduction' => '懂的都懂',
            'Default' => env('ThemeConfig.SelectBQ', 1),
            'Element' => [
                0 => false,
                1 => true,
            ]
        ],
        //用户中心开关
        'User' => [
            'Name' => '用户中心开关',
            'Introduction' => '是否在顶部显示用户中心按钮',
            'Default' => env('ThemeConfig.SelectUser', 1),
            'Element' => [
                0 => false,
                1 => true,
            ]
        ],
        //用户改善计划开关
        'UserGS' => [
            'Name' => '用户改善计划开关',
            'Introduction' => '打开后您的网站将会向统计网站发送数据(仅访问量)，用来分析模板，这可能会增加访问的时间，但我希望您打开这个功能,如果您想查看自己网站的流量，请联系我QQ1969947820，我可以为您开一个账号',
            'Default' => env('ThemeConfig.SelectUserGS', 1),
            'Element' => [
                0 => false,
                1 => true,
            ]
        ],
    ],

    //文本格式配置
    'Text' => [
        //页脚
        'ThemeBQ' => [
            'Name' => '页脚',
            'Introduction' => '懂的都懂,支持HTML代码，请勿插入来源不明的JS代码',
            'Default' => env('ThemeConfig.TextThemeBQ', 'Power+By+Cheney')
        ],
        //统计代码变量
        'ThemeStatistics' => [
            'Name' => '统计代码',
            'Introduction' => '该代码会插入&lt;head&gt;&lt;/head&gt;内',
            'Default' => env('ThemeConfig.TextThemeStatistics', '')
        ],
        //公告卡名字
        'ThemeNotifyTitle' => [
            'Name' => '公告卡标题',
            'Introduction' => '支持HTML代码，请勿插入来源不明的JS代码',
            'Default' => env('ThemeConfig.TextThemeNotifyTitle', '%E7%AB%99%E9%95%BF%E7%9A%84%E4%BE%BF%E7%AD%BE')
        ],
        //公告卡图片URL
        'ThemeNotifyUrl' => [
            'Name' => '公告卡图片URL',
            'Introduction' => '请填写一张图片的URL地址,以“http(s)://”开头',
            'Default' => env('ThemeConfig.TextThemeNotifyUrl', 'https%3A%2F%2Fimg1.imgtp.com%2F2023%2F05%2F05%2FrsGxwTe7.gif')
        ],
        //公告卡内容
        'ThemeNotifyContent' => [
            'Name' => '公告卡内容',
            'Introduction' => '支持HTML代码，请勿插入来源不明的JS代码',
            'Default' => env('ThemeConfig.TextThemeNotifyContent', '%E6%AC%A2%E8%BF%8E%E6%9D%A5%E5%88%B0LoveCardsV2%E7%9A%84%E9%A2%86%E5%9F%9F%EF%BC%8C%E5%9C%A8%E8%BF%99%E9%87%8C%E6%82%A8%E5%8F%AF%E4%BB%A5%E7%95%85%E6%89%80%E6%AC%B2%E8%A8%80%EF%BC%81')
        ],
    ],

    //鉴权
    'PageAuth' => [
        '/user/' => [
            'CookieUtokenCheck'
        ]
    ],

    //分配数据
    'PageAssignData' => [
        //页面
        '/index/index' => [
            'HotCardList',
            'TagList',
            'MyInfo',
        ],
        '/user/' => [
            'MyInfo',
        ],
        '/cards/index' => [
            'CommonCardList',
            'TagList',
            'MyInfo',
        ],
        '/cards/search' => [
            'SearchCardList',
            'TagList',
            'MyInfo',
        ],
        '/cards/tag' => [
            'TagCardList',
            'TagList',
            'MyInfo',
        ],
        '/cards/card' => [
            'Card',
            'TagList',
            'MyInfo',
        ],
        '/cards/add' => [
            'TagList',
            'MyInfo',
        ]
    ]
];
