<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleClimateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title = "Planet at a Turning Point: Climate Crisis, Policy Shifts & India's Green Future";
        
        $content = [
            [
                "id" => "c1",
                "type" => "heading",
                "level" => "h2",
                "content" => "Key Environmental Developments: A Defining Moment for Planet & Policy"
            ],
            [
                "id" => "c2",
                "type" => "paragraph",
                "content" => "The world is standing at a critical environmental crossroads. From melting ice caps to shifting species behavior, from India's growing climate vulnerabilities to global policy shifts, recent developments highlight both urgency and opportunity. The environmental narrative today is no longer about distant risks—it is about immediate realities shaping economies, ecosystems, and human survival."
            ],
            [
                "id" => "c3",
                "type" => "heading",
                "level" => "h2",
                "content" => "Climate Change & Biodiversity: A Planet Under Stress"
            ],
            [
                "id" => "c4",
                "type" => "paragraph",
                "content" => "The Earth's cryosphere—its frozen regions—is undergoing rapid and irreversible decline. Melting glaciers and polar ice are not just raising sea levels but disrupting entire ecological systems. As habitats shift, wildlife is being forced into unfamiliar and often dangerous territories. Instances like gray whales navigating into hazardous zones reflect a deeper ecological imbalance.\n\nSimultaneously, thawing Arctic permafrost is releasing vast reserves of ancient carbon, accelerating global warming in a dangerous feedback loop. These developments reinforce a stark reality: climate change is not linear—it is amplifying itself."
            ],
            [
                "id" => "c5",
                "type" => "heading",
                "level" => "h2",
                "content" => "India's Environmental Challenges: A Nation on the Frontline"
            ],
            [
                "id" => "c6",
                "type" => "heading",
                "level" => "h3",
                "content" => "Heat Crisis:"
            ],
            [
                "id" => "c7",
                "type" => "paragraph",
                "content" => "States like Kerala are emerging as hotspots for extreme humid heat, posing severe health risks and threatening productivity. Unlike dry heat, humid conditions limit the body's ability to cool itself, making them particularly dangerous."
            ],
            [
                "id" => "c8",
                "type" => "heading",
                "level" => "h3",
                "content" => "Pollution & Water Stress:"
            ],
            [
                "id" => "c9",
                "type" => "paragraph",
                "content" => "Alarmingly, nearly one-third of sewage treatment plants in Uttarakhand are reportedly discharging untreated waste into the Ganga, undermining years of river-cleaning initiatives and posing major public health risks."
            ],
            [
                "id" => "c10",
                "type" => "heading",
                "level" => "h3",
                "content" => "Wildlife Conservation Pressures:"
            ],
            [
                "id" => "c11",
                "type" => "paragraph",
                "content" => "India's ambitious biodiversity efforts are facing mixed outcomes. While the translocation of African cheetahs marks a historic conservation initiative, rising leopard mortality—especially in Madhya Pradesh—raises concerns about habitat stress and human-wildlife conflict."
            ],
            [
                "id" => "c12",
                "type" => "heading",
                "level" => "h3",
                "content" => "Infrastructure vs Ecology:"
            ],
            [
                "id" => "c13",
                "type" => "paragraph",
                "content" => "Large-scale projects like the Great Nicobar mega-infrastructure development are under scrutiny for their potential ecological impact. Balancing economic growth with biodiversity conservation remains one of India's toughest policy challenges."
            ],
            [
                "id" => "c14",
                "type" => "heading",
                "level" => "h2",
                "content" => "Global Policy & Technology: Steps Toward Sustainability"
            ],
            [
                "id" => "c15",
                "type" => "list",
                "style" => "unordered",
                "items" => [
                    "<strong>Plastic Treaty Progress:</strong> A new leadership appointment in global negotiations signals renewed momentum toward a legally binding treaty to combat plastic pollution.",
                    "<strong>Emissions Tracking Innovation:</strong> The adoption of new UN standards to measure brake particle emissions highlights a shift toward addressing previously overlooked sources of pollution.",
                    "<strong>Energy Transition Dynamics:</strong> India's withdrawal from hosting COP33 reflects shifting geopolitical and strategic priorities in global climate leadership."
                ]
            ],
            [
                "id" => "c16",
                "type" => "heading",
                "level" => "h2",
                "content" => "Scientific Discoveries: New Insights, New Warnings"
            ],
            [
                "id" => "c17",
                "type" => "list",
                "style" => "unordered",
                "items" => [
                    "Microplastics are now being traced to unexpected sources, including laboratory gloves, indicating how pervasive contamination has become.",
                    "Mosses are gaining attention as natural bio-indicators, offering cost-effective tools for pollution monitoring.",
                    "The release of carbon from thawing permafrost underscores the urgency of limiting global temperature rise."
                ]
            ],
            [
                "id" => "c18",
                "type" => "heading",
                "level" => "h2",
                "content" => "Key Trends & Transformational Shifts"
            ],
            [
                "id" => "c19",
                "type" => "heading",
                "level" => "h3",
                "content" => "India's Green Agricultural Transition:"
            ],
            [
                "id" => "c20",
                "type" => "paragraph",
                "content" => "There is a growing movement toward natural farming, reducing dependence on chemical fertilizers and fossil fuels. This shift could redefine sustainable agriculture globally."
            ],
            [
                "id" => "c21",
                "type" => "heading",
                "level" => "h3",
                "content" => "Industrial Decarbonization:"
            ],
            [
                "id" => "c22",
                "type" => "paragraph",
                "content" => "India's goal to cut steel sector emissions by 25% signals a major push toward cleaner industrial practices—critical for achieving net-zero ambitions."
            ],
            [
                "id" => "c23",
                "type" => "heading",
                "level" => "h3",
                "content" => "Climate Finance Evolution:"
            ],
            [
                "id" => "c24",
                "type" => "paragraph",
                "content" => "Developed nations have committed to significantly scaling up climate finance for developing countries by 2035. While the exact figures are still under discussion, this move is crucial for enabling adaptation and mitigation efforts globally."
            ],
            [
                "id" => "c25",
                "type" => "heading",
                "level" => "h3",
                "content" => "Water Governance:"
            ],
            [
                "id" => "c26",
                "type" => "paragraph",
                "content" => "Countries are increasingly aligning with international frameworks like the UN Water Convention, recognizing water security as central to climate resilience."
            ],
            [
                "id" => "c27",
                "type" => "heading",
                "level" => "h2",
                "content" => "Conclusion: From Crisis to Collective Action"
            ],
            [
                "id" => "c28",
                "type" => "paragraph",
                "content" => "The environmental landscape today is defined by complexity—where crises and solutions coexist. While the challenges are immense, so too are the opportunities for transformation.\n\nThe path forward demands integrated action:"
            ],
            [
                "id" => "c29",
                "type" => "list",
                "style" => "unordered",
                "items" => [
                    "Stronger global cooperation",
                    "Science-driven policymaking",
                    "Sustainable industrial innovation",
                    "Community-level resilience"
                ]
            ],
            [
                "id" => "c30",
                "type" => "paragraph",
                "content" => "For countries like India, the journey is particularly significant. As both a vulnerable nation and a rising global power, its environmental choices will shape not just its own future, but the trajectory of global sustainability."
            ],
            [
                "id" => "c31",
                "type" => "quote",
                "content" => "The message is clear: the time for incremental change has passed. What the world needs now is bold, decisive, and collective environmental leadership.",
                "author" => "Indrajit Ghosh"
            ],
            [
                "id" => "c32",
                "type" => "paragraph",
                "content" => "<strong>Indrajit Ghosh</strong><br>Chairman MSMECCII<br>20.04.2026"
            ]
        ];

        Article::updateOrCreate(
            ['slug' => Str::slug($title)],
            [
                'title' => $title,
                'author' => "Indrajit Ghosh",
                'category' => "Environment & Sustainability, Global Policy, Climate Change",
                'content' => json_encode($content),
                'thumbnail' => "https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?q=80&w=1200&auto=format&fit=crop",
                'excerpt' => "The world is standing at a critical environmental crossroads. Exploring India's climate vulnerabilities and the global push for a green future.",
                'is_published' => true,
                'published_at' => '2026-04-20 10:00:00',
            ]
        );
    }
}
