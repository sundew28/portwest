<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $nav = [
        [
            'name' => 'Coaching',
            'navigation_order_number' => 1,
            'type' => 1,
            'home_page' => 1,
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquet lectus proin nibh nisl condimentum id venenatis. Pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus. Et malesuada fames ac turpis egestas. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Lacus laoreet non curabitur gravida arcu ac. Diam phasellus vestibulum lorem sed risus ultricies tristique nulla. Odio ut sem nulla pharetra diam. Pellentesque elit eget gravida cum sociis natoque. Id eu nisl nunc mi.',
            'subs' => [
                [
                    'name' => 'Micro',
                    'type' => 2,
                    'subs' => [
                        [
                            'name' => 'Micro',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Games',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Scrum school',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Session Plans',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Coaching Skills (APES)',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Fun Activities',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Warm ups',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Handling',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Evasive Running',
                            'type' => 3,
                        ],
                    ]
                ],
                [
                    'name' => 'Mini',
                    'type' => 2,
                    'subs' => [
                        [
                            'name' => 'Mini',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Mini Blueprint',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Game Zone',
                            'type' => 3,
                        ],
                        [
                            'name' => 'AGLV\'s',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Coaching Skills (APES)',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Skill Activities',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Tackle ready / contact confident',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Coaching skill\'s',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Session plans',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Player Welfare',
                            'type' => 3,
                        ],
                    ]
                ],
                [
                    'name' => 'Blueprint',
                    'type' => 2,
                    'subs' => [
                        [
                            'name' => 'Blueprint',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Game zone',
                            'type' => 3,
                        ],
                        [
                            'name' => 'AGLV\'s',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Skill zone',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Tackle ready / contact confident',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Coaching skill\'s',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Activate',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Player welfare',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Scrum school',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Session design',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Understanding the game',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Technique zone / Thistle time',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Passing',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Kicking',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Lineout throw',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Scrum half',
                            'type' => 3,
                        ],
                    ]
                ],
                [
                    'name' => 'Technique Zone',
                    'type' => 2,
                    'subs' => [
                        [
                            'name' => 'Technique Zone',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Skill zone',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Game\'s',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Understanding the game',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Physical prep (session)',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Session design',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Player welfare',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Community sharing',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Performance analysis',
                            'type' => 3,
                        ],
                    ],
                ],
                [
                    'name' => 'Pro Coach Masterclass',
                    'type' => 2,
                    'subs' => [
                        [
                            'name' => 'Pro Coach Masterclass',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Bitesize blether',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Rugby development updates',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Game development conference',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Community of practice',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Performance analysis',
                            'type' => 3,
                        ],
                    ],
                ],

            ]
        ],
        [
            'name' => 'Match Officials',
            'navigation_order_number' => 2,
            'home_page' => 1,
            'type' => 1,
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquet lectus proin nibh nisl condimentum id venenatis. Pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus. Et malesuada fames ac turpis egestas. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Lacus laoreet non curabitur gravida arcu ac. Diam phasellus vestibulum lorem sed risus ultricies tristique nulla. Odio ut sem nulla pharetra diam. Pellentesque elit eget gravida cum sociis natoque. Id eu nisl nunc mi.',
            'subs' =>[
                [

                    'name' => 'Training and education',
                    'type' => 2,
                    'subs' => [
                        [
                            'name' => 'Training and education',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Mini refs',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Course content / Modules',
                            'type' => 3,

                        ],
                        [
                            'name' => 'ITMO refs',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Course content / Modules',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Aspiring mo',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Course content / Modules',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Player and MO welfare',
                            'type' => 3,

                        ],
                    ]

                 ],
            [
                'name' => 'Club refs',
                'type' => 2,
                'subs' => [
                    [
                        'name' => 'Breakdown blog',
                        'type' => 3,

                    ],
                    [
                        'name' => 'Ref skills L1',
                        'type' => 3,

                    ],
                    [
                        'name' => 'Player and MO welfare',
                        'type' => 3,

                    ],
                ]
            ],
            [
                'name' => 'Society Membership',
                'type' => 2,
                'subs' => [
                    [
                        'name' => 'Law lounge',
                        'type' => 3,

                    ],
                    [
                        'name' => 'Ref skills L2',
                        'type' => 3,

                    ],
                    [
                        'name' => 'Player and MO welfare',
                        'type' => 3,

                    ],
                ]
            ],
            [
                'name' => 'National panel',
                'type' => 2,
                'subs' => [
                    [
                        'name' => 'Law lounge',
                        'type' => 3,

                    ],
                    [
                        'name' => 'Ref skills L3',
                        'type' => 3,

                    ],
                    [
                        'name' => 'Player and MO welfare',
                        'type' => 3,

                    ],
                ]
            ],
            [
                'name' => 'The game',
                'type' => 2,
                'subs' => [
                    [
                        'name' => 'The game',
                        'type' => 3,

                    ],
                    [
                        'name' => 'Laws update',
                        'type' => 3,

                    ],
                    [
                        'name' => 'MO blueorint',
                        'type' => 3,

                    ],
                    [
                        'name' => 'Scrum school',
                        'type' => 3,

                    ],
                    [
                        'name' => 'GD conference',
                        'type' => 3,

                    ],
                ]
            ],
            [
                'name' => 'Physical development for MO',
                'type' => 2,
                'subs' => [
                ]
            ],
            ]

        ],
        [
            'name' => 'Physical Development',
            'navigation_order_number' => 2,
            'home_page' => 1,
            'type' => 1,
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquet lectus proin nibh nisl condimentum id venenatis. Pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus. Et malesuada fames ac turpis egestas. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Lacus laoreet non curabitur gravida arcu ac. Diam phasellus vestibulum lorem sed risus ultricies tristique nulla. Odio ut sem nulla pharetra diam. Pellentesque elit eget gravida cum sociis natoque. Id eu nisl nunc mi.',
            'subs' => [
                [
                    'name' => 'Mini',
                    'type' => 2,
                    'subs' => [
                        [
                            'name' => 'Mini',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Coaches corner',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Fundamental movements',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Game zone',
                            'type' => 3,

                        ],
                    ]
                ],
                [
                    'name' => 'Youth',
                    'type' => 2,
                    'subs' => [
                        [
                            'name' => 'Youth',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Gym based',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Female specific',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Pitch based',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Warm ups',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Coaches corner',
                            'type' => 3,

                        ],
                    ]
                ],
                [
                    'name' => 'Adult',
                    'type' => 2,
                    'subs' => [
                        [
                            'name' => 'Adult',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Gym based',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Female specific',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Pitch based',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Warm ups',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Coaches corner',
                            'type' => 3,

                        ],
                    ]
                ],
                [
                    'name' => 'Elite portal (UKSCALevel2)',
                    'type' => 2,
                    'subs' => [
                        [
                            'name' => 'Elite portal (UKSCALevel2)',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Spotlight discussions',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Research papers',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Pro-Coach masterclass',
                            'type' => 3,

                        ],
                        [
                            'name' => 'UKSCA journals',
                            'type' => 3,

                        ],
                    ]
                ],

            ]
        ],
        [
            'name' => 'Teachers and Schools',
            'navigation_order_number' => 2,
            'home_page' => 0,
            'type' => 1,
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquet lectus proin nibh nisl condimentum id venenatis. Pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus. Et malesuada fames ac turpis egestas. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Lacus laoreet non curabitur gravida arcu ac. Diam phasellus vestibulum lorem sed risus ultricies tristique nulla. Odio ut sem nulla pharetra diam. Pellentesque elit eget gravida cum sociis natoque. Id eu nisl nunc mi.',
            'subs' => [
                [
                    'name' => 'Rugby for learning',
                    'type' => 2,
                    'subs' => [
                        [
                            'name' => 'Rugby for learning',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Intro to rugby as a tool for learning',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Secondary resources',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Health and wellbeing',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Player welfare',
                            'type' => 3,

                        ],
                    ]
                ],
                [
                    'name' => 'Non contact rugby',
                    'type' => 2,
                    'subs' => [
                        [
                            'name' => 'Blueprint touch games',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Primary resources',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Secondary resources',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Tartan touch',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Player welfare',
                            'type' => 3,

                        ],
                    ]
                ],
                [
                    'name' => 'Contact rugby',
                    'type' => 2,
                    'subs' => [
                        [
                            'name' => 'Tackle ready / contact confident',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Female specific',
                            'type' => 3,

                        ],
                        [
                            'name' => 'AGLV\'s',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Blueprint',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Attack',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Defence',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Scrum school',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Lineout',
                            'type' => 3,

                        ],
                        [
                            'name' => 'The game',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Technique zone / Thistle time',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Passing',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Kicking',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Lineout throw',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Skill zone',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Player welfare',
                            'type' => 3,

                        ],

                    ]
                ],

            ]
        ],
        [
            'name' => 'Players',
            'navigation_order_number' => 2,
            'home_page' => 0,
            'type' => 1,
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquet lectus proin nibh nisl condimentum id venenatis. Pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus. Et malesuada fames ac turpis egestas. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Lacus laoreet non curabitur gravida arcu ac. Diam phasellus vestibulum lorem sed risus ultricies tristique nulla. Odio ut sem nulla pharetra diam. Pellentesque elit eget gravida cum sociis natoque. Id eu nisl nunc mi.',
            'subs' => [
                [
                    'name' => 'Pillars of performance',
                    'type' => 2,
                    'subs' => [
                        [
                            'name' => 'Pillars of performance',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Nutrition',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Physical performance',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Mental',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Performance analysis',
                            'type' => 3,

                        ],
                    ]
                ],
                [
                    'name' => 'The game',
                    'type' => 2,
                    'subs' => [
                        [
                            'name' => 'Technical',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Nutrition',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Tactical',
                            'type' => 3,
                        ],
                        [
                            'name' => 'Laws of the game',
                            'type' => 3,
                        ],
                    ]
                ],
                [
                    'name' => 'Key skills',
                    'type' => 2,
                    'subs' => [
                        [
                            'name' => 'Specialist skills',
                            'type' => 3,

                        ],
                        [
                            'name' => 'Core skills',
                            'type' => 3,

                        ],
                    ]
                ],

            ]
        ],
        [
            'name' => 'Parents and Volunteers',
            'navigation_order_number' => 2,
            'home_page' => 0,
            'type' => 1,
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquet lectus proin nibh nisl condimentum id venenatis. Pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus. Et malesuada fames ac turpis egestas. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Lacus laoreet non curabitur gravida arcu ac. Diam phasellus vestibulum lorem sed risus ultricies tristique nulla. Odio ut sem nulla pharetra diam. Pellentesque elit eget gravida cum sociis natoque. Id eu nisl nunc mi.',
            'subs' => [
                    [
                        'name' => 'Directors of rugby',
                        'type' => 2,
                        'subs' => [
                        ]
                    ],
                    [
                        'name' => 'Child protection officer',
                        'type' => 2,
                        'subs' => [
                        ]
                    ],
                    [
                        'name' => 'Helper / Volunteer',
                        'type' => 2,
                        'subs' => [
                        ]
                    ],
                    [
                        'name' => 'Club secretaries',
                        'type' => 2,
                        'subs' => [
                        ]
                    ],
                    [
                        'name' => 'Parents',
                        'type' => 2,
                        'subs' => [
                            [
                                'name' => 'Understanding talent',
                                'type' => 3,

                            ],
                            [
                                'name' => 'The players journey',
                                'type' => 3,

                            ],
                            [
                                'name' => 'PDH workshop',
                                'type' => 3,

                            ],
                        ]
                    ],

            ]
        ],
        [
            'name' => 'Developer and Workforce',
            'navigation_order_number' => 2,
            'home_page' => 0,
            'type' => 1,
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquet lectus proin nibh nisl condimentum id venenatis. Pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus. Et malesuada fames ac turpis egestas. Natoque penatibus et magnis dis parturient montes nascetur ridiculus mus. Lacus laoreet non curabitur gravida arcu ac. Diam phasellus vestibulum lorem sed risus ultricies tristique nulla. Odio ut sem nulla pharetra diam. Pellentesque elit eget gravida cum sociis natoque. Id eu nisl nunc mi.',
            'subs' => [
                    [
                        'name' => 'Development officer CPD',
                        'type' => 2,
                        'subs' => []
                    ],
                    [
                        'name' => 'Developer training',
                        'type' => 2,
                        'subs' => [
                            [
                                'name' => 'Coaching',
                                'type' => 3,

                            ],
                            [
                                'name' => 'Match officiating',
                                'type' => 3,

                            ],
                            [
                                'name' => 'Medical',
                                'type' => 3,

                            ],
                            [
                                'name' => 'Strength and conditioning',
                                'type' => 3,

                            ],
                        ]
                    ],
                    [
                        'name' => 'Community Coach CPD',
                        'type' => 2,
                        'subs' => []
                    ],
                    [
                        'name' => 'Coach mentoring',
                        'type' => 2,
                        'subs' => []
                    ],
                    [
                        'name' => 'Lead developer',
                        'type' => 2,
                        'subs' => []
                    ],
                ]
        ],

    ];

    public function run()
    {
        \DB::table('gl_categories')->truncate();
        foreach ($this->nav as $category) {
            $c = Category::create([
                'name' => $category['name'],
                'navigation' => 1,
                'parent_id' => null,
                'type' => 1,
                'navigation_order_number' => $category['navigation_order_number'],
                'home_page' => $category['home_page'],
                'desc' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquet lectus proin nibh nisl condimentum id venenatis.'
            ]);
            foreach ($category['subs'] as $subCategory) {
                dump($subCategory['name']);
                $s= Category::create([
                    'name' => $subCategory['name'],
                    'parent_id' => $c->id,
                    'navigation' => 1,
                    'type' => 2,
                    'desc' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquet lectus proin nibh nisl condimentum id venenatis.'
                ]);
                foreach ($subCategory['subs'] as $group) {
                    dump($group['name']);
                    Category::create([
                        'name' => $group['name'],
                        'parent_id' => $s->id,
                        'navigation' => 1,
                        'type' => 3,
                        'desc' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquet lectus proin nibh nisl condimentum id venenatis.'
                    ]);
                }
            }
        }
    }

}
