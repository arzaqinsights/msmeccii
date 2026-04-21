<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleEwasteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title = "E-Waste Gold Rush: Unlocking a $91 Billion Opportunity in the Global Circular Economy";
        
        $content = [
            [
                "id" => "b1",
                "type" => "paragraph",
                "content" => "The world is standing at the edge of a silent industrial revolution—one not driven by oil, but by discarded electronics. From obsolete smartphones to end-of-life batteries, electronic waste (e-waste) has become the fastest-growing waste stream globally. As of early 2026, the numbers are staggering: 62 million tonnes of e-waste generated in 2022, projected to reach a massive 82 million tonnes by 2030. Yet, beneath this growing crisis lies an extraordinary opportunity—a multi-billion-dollar resource pool waiting to be unlocked."
            ],
            [
                "id" => "b2",
                "type" => "heading",
                "level" => "h2",
                "content" => "The Growing Gap: Waste vs. Recycling"
            ],
            [
                "id" => "b3",
                "type" => "paragraph",
                "content" => "Despite the surge in e-waste generation, only 22.3% of global e-waste was formally collected and recycled in 2022. This means nearly 80% of discarded electronics are either dumped, traded, or processed informally, leading to severe environmental and health risks.\n\nWhat makes this gap even more alarming is the pace: e-waste is increasing five times faster than recycling efforts. This imbalance is not just a sustainability issue—it is an economic loss of immense proportions."
            ],
            [
                "id" => "b4",
                "type" => "heading",
                "level" => "h2",
                "content" => "The Hidden Treasure: Urban Mining"
            ],
            [
                "id" => "b5",
                "type" => "paragraph",
                "content" => "E-waste is no longer just \"waste\"—it is a valuable urban mine. Embedded within discarded electronics are critical raw materials (CRMs) such as lithium, cobalt, nickel, gold, and palladium—materials essential for electric vehicles, renewable energy systems, and digital infrastructure.\n\nIn 2022 alone, the estimated value of recoverable materials in global e-waste stood between $62 billion and $91 billion. Shockingly, only about $28 billion worth of materials was actually recovered, leaving a vast untapped opportunity for businesses, investors, and governments.\n\nThis is where urban mining is redefining the recycling industry—transforming landfills into resource hubs and waste streams into profit streams."
            ],
            [
                "id" => "b6",
                "type" => "heading",
                "level" => "h2",
                "content" => "The Shift to Critical Raw Materials (CRM)"
            ],
            [
                "id" => "b7",
                "type" => "paragraph",
                "content" => "Traditionally, recycling focused heavily on precious metals like gold and silver. However, the global transition toward clean energy and digital technologies has shifted attention to CRMs—particularly lithium, cobalt, and nickel.\n\nInitiatives around 2025–2026 emphasize the urgent need to recover these materials to support:"
            ],
            [
                "id" => "b8",
                "type" => "list",
                "style" => "unordered",
                "items" => [
                    "Electric vehicle batteries",
                    "Renewable energy storage",
                    "Electronics manufacturing",
                    "Semiconductor industries"
                ]
            ],
            [
                "id" => "b9",
                "type" => "paragraph",
                "content" => "Securing these materials through recycling is now not just an environmental necessity, but a strategic economic priority for nations worldwide."
            ],
            [
                "id" => "b10",
                "type" => "heading",
                "level" => "h2",
                "content" => "Global Leaders Driving Change"
            ],
            [
                "id" => "b11",
                "type" => "heading",
                "level" => "h3",
                "content" => "🇪🇺 Europe: Setting the Benchmark"
            ],
            [
                "id" => "b12",
                "type" => "paragraph",
                "content" => "Europe leads globally with a 42.8% formal collection rate, the highest in the world. Advanced regulatory frameworks and initiatives are driving innovation in tracking, traceability, and recovery technologies.\n\nProjects are focusing on improving the efficiency of extracting critical materials, making Europe a global hub for circular economy innovation."
            ],
            [
                "id" => "b13",
                "type" => "heading",
                "level" => "h3",
                "content" => "🇯🇵 Japan: Technology at the Core"
            ],
            [
                "id" => "b14",
                "type" => "paragraph",
                "content" => "Japan is pioneering automated recycling systems that enhance the recovery of rare metals like palladium and lithium. Robotics and AI-driven sorting technologies are making recycling faster, safer, and more efficient—setting new industry standards."
            ],
            [
                "id" => "b15",
                "type" => "heading",
                "level" => "h3",
                "content" => "🇮🇳 India: Rapid Growth with Challenges"
            ],
            [
                "id" => "b16",
                "type" => "paragraph",
                "content" => "India, one of the top three e-waste generators globally, is witnessing significant momentum. The government has reported over ₹4,000 crore revenue from scrap, including e-waste, and has introduced updated waste policies such as the Solid Waste Management Rules 2026 effective April 1, 2026.\n\nHowever, the challenge remains significant—around 95% of the workforce in the recycling sector operates in the informal economy, often without safety measures, leading to environmental contamination and health hazards."
            ],
            [
                "id" => "b17",
                "type" => "heading",
                "level" => "h2",
                "content" => "The Informal Sector Dilemma"
            ],
            [
                "id" => "b18",
                "type" => "paragraph",
                "content" => "While the informal sector plays a critical role in collection and initial processing, it often uses unsafe methods such as open burning and acid leaching. This leads to:"
            ],
            [
                "id" => "b19",
                "type" => "list",
                "style" => "unordered",
                "items" => [
                    "Toxic emissions",
                    "Soil and water contamination",
                    "Severe health risks for workers"
                ]
            ],
            [
                "id" => "b20",
                "type" => "paragraph",
                "content" => "The future of e-waste management lies in integrating informal workers into formal systems, providing training, safety equipment, and structured supply chains."
            ],
            [
                "id" => "b21",
                "type" => "heading",
                "level" => "h2",
                "content" => "Innovation & Investment: The Way Forward"
            ],
            [
                "id" => "b22",
                "type" => "list",
                "style" => "unordered",
                "items" => [
                    "AI-powered sorting technologies",
                    "Automated dismantling systems",
                    "Advanced hydrometallurgical and bio-leaching processes",
                    "Blockchain-based traceability solutions"
                ]
            ],
            [
                "id" => "b23",
                "type" => "paragraph",
                "content" => "Major global platforms scheduled for June 2026 in Germany, are bringing together industry leaders, policymakers, and investors to accelerate large-scale solutions."
            ],
            [
                "id" => "b24",
                "type" => "heading",
                "level" => "h2",
                "content" => "Why This Matters for Businesses"
            ],
            [
                "id" => "b25",
                "type" => "list",
                "style" => "unordered",
                "items" => [
                    "Reduce dependency on imported raw materials",
                    "Lower production costs",
                    "Strengthen ESG (Environmental, Social, Governance) credentials",
                    "Unlock new revenue streams from recycled materials"
                ]
            ],
            [
                "id" => "b26",
                "type" => "paragraph",
                "content" => "From electronics manufacturers to EV companies and packaging industries, the shift toward circularity is becoming a business imperative."
            ],
            [
                "id" => "b27",
                "type" => "heading",
                "level" => "h2",
                "content" => "The Road Ahead: From Waste to Wealth"
            ],
            [
                "id" => "b28",
                "type" => "list",
                "style" => "unordered",
                "items" => [
                    "Strengthen formal recycling infrastructure",
                    "Encourage responsible consumption and disposal",
                    "Invest in advanced recovery technologies",
                    "Build inclusive ecosystems integrating informal workers"
                ]
            ],
            [
                "id" => "b29",
                "type" => "heading",
                "level" => "h2",
                "content" => "Final Thought"
            ],
            [
                "id" => "b30",
                "type" => "paragraph",
                "content" => "E-waste is no longer a problem to be managed—it is an opportunity to be seized. In a world racing toward sustainability and resource security, those who recognize the value hidden in waste will lead the next wave of industrial transformation."
            ],
            [
                "id" => "b31",
                "type" => "quote",
                "content" => "The question is not whether we can afford to invest in e-waste recycling— but whether we can afford not to.",
                "author" => "Indrajit Ghosh"
            ],
            [
                "id" => "b32",
                "type" => "paragraph",
                "content" => "<strong>Indrajit Ghosh</strong><br>Chairman<br>MSMECCII<br>21.04.2026"
            ]
        ];

        Article::updateOrCreate(
            ['slug' => Str::slug($title)],
            [
                'title' => $title,
                'author' => "Indrajit Ghosh",
                'category' => "Circular Economy, Industry Insights, E-Waste",
                'content' => json_encode($content),
                'thumbnail' => "https://images.unsplash.com/photo-1550009158-9ebf69173e03?q=80&w=1200&auto=format&fit=crop",
                'excerpt' => "E-waste is no longer just waste—it is a valuable urban mine. Unlock a $91 Billion Opportunity in the Global Circular Economy.",
                'is_published' => true,
                'published_at' => '2026-04-21 15:00:00',
            ]
        );
    }
}
