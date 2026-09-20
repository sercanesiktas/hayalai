# Görsel — 21/38

`400 prompt`  ·  [← tüm kategoriler](../README.md#kategoriler)

---

## Newspaper Dress Editorial Prompt

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the same face from the reference image without changing facial features 
{
  "subject": {
    "description": "Young woman with soft, youthful features and long, wavy {argument name="hair color" default="honey-blonde"} hair.",
    "pose": "Frontal view, hands raised to the sides of her head running through her hair, looking directly at the camera with a neutral expression.",
    "clothing": "A strapless, form-fitting dress constructed entirely from overlapping strips of {argument name="clothing material" default="newspaper"} with visible black text and headlines."
  },
  "environment": {
    "background": "A wall completely covered in layers of old newspaper pages, creating a monochromatic, text-heavy backdrop.",
    "atmosphere": "Studio-style fashion photography, editorial aesthetic."
  },
  "lighting_and_color": {
    "lighting": "Soft, diffused front lighting; even illumination with minimal harsh shadows, highlighting the texture of the paper and the smoothness of the skin.",
    "color_palette": "Muted and monochromatic tones of beige, cream, and grey from the newsprint, contrasted with warm, natural skin tones and blonde hair."
  },
  "technical_details": {
    "camera_settings": "Shot on 85mm lens, f/2.8, sharp focus on the eyes, shallow depth of field slightly softening the background texture.",
    "quality": "High resolution, 8k, photorealistic, cinematic texture, detailed paper grain."
  }
}
```

## Fashion Editorial Portrait with Graphic Overlay Prompt

> Lüks, stüdyo ışıklı logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "image_quality": "High",
    "image_type": "Editorial/Fashion Photography with Graphic Overlay",
    "resolution_estimation": "High resolution, likely 1080x1350 or similar portrait aspect ratio",
    "file_characteristics": {
      "compression_artifacts": "Low",
      "noise_level": "Low",
      "lens_type_estimation": "Portrait lens (approx 85mm), shallow depth of field simulated or real"
    }
  },
  "global_context": {
    "scene_description": "A stylized fashion editorial composition featuring a side-profile portrait of a young woman with short, wavy brown hair. She is framed within a thin white rectangular outline against a dark, matte charcoal-grey background. To her left, outside the frame, is white typography including a logo and a quote. The lighting is soft and moody, highlighting her facial features and hair texture.",
    "environment_type": "Studio",
    "time_of_day": "Indiscernible/Controlled Studio Lighting",
    "weather_atmosphere": "Serene, Sophisticated, Melancholic, Elegant",
    "lighting": {
      "source": "Artificial Studio Softbox",
      "direction": "Front-left relative to the model (illuminating face profile) with subtle rim lighting on hair",
      "quality": "Soft, Diffused",
      "color_temperature": "Neutral to slightly warm on skin tones"
    },
    "color_palette": {
      "dominant_hex_estimates": [
        "#2C2F33",
        "#3A3D42",
        "#E8CBBF",
        "#5D4B42"
      ],
      "accent_colors": [
        "#FFFFFF",
        "#D48C7D"
      ],
      "contrast_level": "Medium-High (due to dark background vs pale skin/white text)"
    }
  },
  "composition": {
    "camera_angle": "Eye-level",
    "framing": "Medium close-up (Head and shoulders)",
    "depth_of_field": "Medium (Subject sharp, background uniform)",
    "focal_point": "The model's face in profile and the white typography",
    "symmetry_type": "Asymmetrical balance (Text on left, Subject on right)",
    "rule_of_thirds_alignment": "Model's face aligns with the right vertical third line; Text aligns with the upper-left intersection area"
  },
  "objects": [
    {
      "id": "obj_001",
      "label": "Background",
      "category": "Backdrop",
      "location": {
        "relative_position": "Full Frame",
        "bounding_box_percentage": {
          "x": 0.0,
          "y": 0.0,
          "width": 1.0,
          "height": 1.0
        }
      },
      "dimensions_relative": "Full canvas",
      "distance_from_camera": "Far",
      "pose_orientation": "Vertical plane",
      "material": "Matte paper or digital fill",
      "surface_properties": {
        "texture": "Smooth with very fine grain",
        "reflectivity": "None",
        "micro_details": "Uniform color",
        "wear_state": "New"
      },
      "color_details": {
        "base_color_hex": "#2C2F33",
        "secondary_colors": [],
        "gradient_or_pattern": "Subtle vignetting or lighting falloff towards cor"
    }
  }
}
```

## Futuristic Neo-Kimono Display Window Prompt (Part 1)

> Minimal, fütüristik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "type": "stunning_east_asian_woman_with_Japanese_gravure_idol_aesthetic",
    "framing": "medium_shot_waist_up_portrait_inside_a_luxury_display_window",
    "age_vibe": "youthful_innocent_early_20s_with_a_pure_and_healing_atmosphere",
    "features": {
      "face_structure": "small_oval_shaped_face_with_soft_youthful_contours_and_refined_chin",
      "eyes": "very_large_and_perfectly_round_doe-like_misty_dark_brown_eyes_with_a_soft_innocent_and_sparkling_gaze_looking_straight_into_the_camera_lens",
      "nose": "high_prominent_and_straight_nose_bridge_with_a_refined_delicate_tip",
      "hair": "chic_high_ponytail_in_pale_blonde_silky_and_straight_texture_with_light_airy_see_through_bangs",
      "expression": "pure_and_healing_expression_with_a_soft_dewy_half-smile_radiating_warmth_and_gentle_allure"
    },
    "skin_texture": {
      "description": "ultra-smooth_spotless_translucent_skin_with_a_moist_clear_texture_free_of_moles",
      "details": [
        "zero_blemish_perfectly_clear_and_smooth_surface",
        "no_moles_or_freckles",
        "soft_natural_skin_pores",
        "delicate_natural_pinkish_undertones"
      ],
      "makeup": "natural_translucent_makeup_wet-look_nude_pink_lip_gloss_and_soft_natural_eyebrows"
    },
    "pose_structural_lock": {
      "overall": "mannequin-like_poise_static_and_graceful_standing_on_a_minimalist_display_pedestal,_positioned_in_a_full_frontal_view_facing_the_camera_directly",
      "arms": "one_arm_slightly_bent_holding_a_structured_clutch_in_a_curated_fashion_pose",
      "hands": "delicate_fingers_showcasing_unique_rings_soft_grip_on_bag",
      "shoulders": "relaxed_posture_emphasizing_the_garments_architectural_shoulders"
    }
  },
  "apparel_specification": {
    "runway_outfit_main_piece": {
      "description": "Futuristic_deconstructed_neo-kimono_couture_ensemble",
      "material": "A_striking_contrast_of_traditional_silk_brocade_with_subtle_metallic_silver_patterns,_interfaced_with_panels_of_transparent_structured_thermoplastic_(TPU)_and_laser-cut_white_leather",
      "silhouette
```

## Surreal Product Composite: Subject Emerging from Cracked Phone Screen

> Fotogerçekçi, sinematik ürün fotoğrafı üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "resolution": "8K UHD",
  "style": "photorealistic AI-edited composite, cinematic realism",
  "scene_type": "surreal product-style composition",
  "camera": {
    "angle": "slightly elevated top-down angle",
    "focus": "sharp foreground with shallow depth of field",
    "lens_effects": [
      "natural depth of field",
      "high clarity",
      "macro-level liquid detail"
    ]
  },
  "environment": {
    "surface": "wooden table with visible grain texture",
    "lighting": {
      "type": "soft natural daylight",
      "direction": "from upper left",
      "shadows": "soft realistic shadows under objects"
    },
    "background": {
      "indoor": true,
      "elements": [
        "blurred interior background",
        "snowy outdoor scenery visible inside phone screen in one image"
      ]
    }
  },
  "main_object": {
    "smartphone": {
      "position": "lying flat on wooden table",
      "orientation": "vertical portrait orientation",
      "color": "black",
      "screen_state": "visibly cracked glass with radial fracture lines",
      "screen_interaction": "screen appears broken outward, allowing subject to emerge"
    }
  },
  "human_subject": {
    "visibility": "upper body visible through phone screen",
    "expression": "wide smile, visible teeth",
    "eye_direction": "looking toward the viewer",
    "gender_presentation": "female-presenting",
    "hair": {
      "color": "light brown",
      "style": "loose, shoulder-length"
    },
    "clothing_variants": [
      {
        "outfit": "casual indoor look",
        "details": "neutral top visible behind phone screen"
      },
      {
        "outfit": "winter clothing",
        "details": [
          "dark padded jacket",
          "light turtleneck sweater",
          "black gloves",
          "black fur hat"
        ]
      }
    ]
  },
  "action": {
    "primary_action": "soda being poured into a transparent plastic cup",
    "motion": "liquid splash frozen mid-air",
    "liquid_behavior": [
      "visible carbonation bubbles",
      "splash droplets",
      "overflow splash effect"
    ]
  },
  "beverage": {
    "type": "cola",
    "cup": {
      "material": "transparent plastic",
      "filled_with": "dark carbonated soda with ice",
      "logo": "{argument name="beverage brand" default="Pepsi"} logo clearly visible"
    },
    "bottle": {
      "material": "plastic",
      "label": "Pepsi branding visible",
      "condition": "condensation droplets on bottle surface",
      "held_by": "human hand entering frame from top right"
    }
  },
  "secondary_objects": [
    {
      "object": "book",
      "position": "left side of phone",
      "color": "light beige cover",
      "state": "closed"
    },
    {
      "object": "pen",
      "position": "near book on table",
      "color": "black",
      "orientation": "diagonal"
    }
  ],
  "effects": {
    "surreal_elements": [
      "subject emerging from phone screen",
      "phy"
    ]
  }
}
```

## Ultra Photorealistic Wet Skin Macro Portrait Prompt

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "Ultra Photorealistic Portrait",
  "subject": {
    "demographics": "Young woman",
    "perspective": "Side profile view (facing left)",
    "appearance": {
      "skin": {
        "texture": "Hyper-realistic, wet skin texture with visible pores, natural flushed redness on cheeks",
        "details": "Multiple clear water droplets clinging to the face, white soapy foam/suds along the jawline, neck, and collarbone",
        "wetness": "A single distinct water droplet dripping from the chin"
      },
      "hair": {
        "color": "Silver / Platinum Blonde",
        "style": "Slicked back, completely wet, strands defined by water",
        "texture": "Fine, straight"
      },
      "face": {
        "eyes": "Closed, relaxed eyelids",
        "brows": "Natural, unshaped",
        "lips": "Soft, natural pink, slightly parted",
        "expression": "Serene, calm, spa-like relaxation"
      }
    }
  },
  "pose": {
    "head_position": "Turned 90 degrees to the left showing full profile",
    "body": "Shoulders bare (suggesting nudity or strapless top), neck elongated",
    "action": "Standing or sitting still while bathing/washing face"
  },
  "styling": {
    "makeup": "No makeup / fresh face aesthetic",
    "elements": "White soap suds/foam running down the neck and chest",
    "vibe": "Clean beauty, skincare campaign, raw and organic"
  },
  "environment": {
    "setting": "Minimalist studio or bathroom setting",
    "background": "Solid neutral beige / tan color",
    "details": "Clean, uncluttered, focus entirely on the subject"
  },
  "lighting": {
    "type": "Soft diffused studio lighting",
    "quality": "Even illumination, soft highlights on the wet skin and water droplets",
    "shadows": "Gentle modeling shadows under the jaw and ear",
    "direction": "Side lighting accentuating the profile"
  },
  "camera_settings": {
    "shot_type": "Close-up portrait / Headshot",
    "lens": "85mm or 105mm Macro lens",
    "aperture": "f/2.8 to f/4.0 (keeping the face sharp while softening the hair slightly)",
    "focus": "Sharp focus on the eyelashes and water droplets on the cheek",
    "shutter_speed": "1/200s (to freeze the dripping water)"
  },
  "technical_details": {
    "resolution": "8k",
    "quality_tags": [
      "Ultra-detailed",
      "Macro photography",
      "Subsurface scattering",
      "Wet skin shader",
      "Ray tracing",
      "Unreal Engine 5 render style",
      "Raw photo quality"
    ],
    "mood": "Intimate, cleansing, peaceful, sensory"
  }
}
```

## AI-Generated Face Cinematic Portrait Prompt (Dual-Tone Lighting)

> Sinematik, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic close-up editorial portrait of a slim young adult man with distinctly AI-generated facial features. He wears a sleek black suit paired with a dark blazer and a black turtleneck. The subject holds a confident, direct gaze into the camera with a subtle, effortless smirk. The background is a seamless, vivid orange studio backdrop.
Shot on an 85mm lens, f/4, ISO 100, shutter speed 1/200s. Cinematic dual-tone lighting setup: a warm orange key light softly illuminating the face, complemented by cool blue rim highlights defining the jawline and shoulders. High fashion editorial aesthetic, sharp focus on the subject, smooth tonal gradients, premium studio photography look, modern, polished, and dramatic.
```

## Wild Style Fashion Editorial Portrait

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_generation",
  "style": "hyper-realistic fashion editorial portrait",
  "subject": {
    "gender": "young woman",
    "facial_features": "unchanged, realistic skin texture",
    "expression": {
      "eye_contact": "direct",
      "mood": "calm, confident, self-assured",
      "lips": "slightly parted"
    }
  },
  "hair": {
    "type": "wave hair",
    "length": "medium-length",
    "volume": "voluminous",
    "style": "{argument name="hair style" default="wild"} ",
    "bangs": "soft bangs framing the forehead",
    "texture": "fluffy, airy, sunlit",
    "details": "visible texture and natural movement"
  },
  "pose": {
    "position": "sitting",
    "legs": "one knee slightly raised",
    "body_language": "leaning forward toward the camera",
    "arms": {
      "one_arm": "resting on thigh",
      "other_arm": "subtly supporting posture"
    },
    "camera_angle": "slightly low angle",
    "vibe": "confident and relaxed"
  },
  "outfit": {
    "top": {
      "type": "sleeveless black ribbed crop top",
      "neckline": "high neckline",
      "fit": "fitted silhouette",
      "style": "minimalist, edgy"
    },
    "bottom": {
      "type": "high-waisted black loose-fit trousers",
      "fabric": "soft matte fabric",
      "style": "modern bohemian meets streetwear"
    }
  },
  "accessories": {
    "waist": {
      "item": "layered silver chain belt",
      "details": "ethnic and vintage-inspired medallions",
      "centerpiece": "turquoise stone",
      "style": "boho-luxury statement"
    },
    "jewelry": [
      "medium-sized silver hoop earrings",
      "thin silver chain necklace",
      "minimal silver rings"
    ]
  },
  "makeup": {
    "style": "soft glam editorial",
    "skin": "flawless matte skin with visible natural freckles",
    "blush": "warm peach blush on cheeks and nose",
    "contour": "subtle contouring",
    "brows": "defined natural brows",
    "eyes": {
      "eyeshadow": "soft brown with smooth blending",
      "eyeliner": "light eyeliner",
      "lashes": "long natural lashes"
    },
    "lips": "bold deep red matte lipstick (main focal point)"
  },
  "lighting": {
    "type": "golden hour sunlight",
    "direction": "side lighting",
    "effects": [
      "warm highlights on curls and skin",
      "soft cinematic shadows"
    ]
  },
  "background": {
    "location": "indoor",
    "style": "artistic",
    "tones": "muted"
  },
  "camera": {
    "lens": "85mm",
    "aperture": "f/1.8",
    "depth_of_field": "shallow",
    "look": "cinematic",
    "resolution": "high"
  },
  "photography_style": [
    "ultra-detailed",
    "high-fashion editorial",
    "realistic skin texture",
    "cinematic lighting",
    "Vogue-style mood"
  ]
}
```

## Grounded Realism Street Portrait Prompt

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": "Urban street portrait on a quiet city sidewalk",
  "subject": {
    "gender": "female",
    "age_range": "late 20s to early 30s",
    "expression": "neutral, introspective, calm confidence",
    "pose": "standing casually, leaning slightly against a brick wall, weight shifted to one leg, arms relaxed",
    "gaze": "looking directly at camera, unfazed, understated presence"
  },
  "wardrobe": {
    "outerwear": "black leather jacket with natural wear and soft creases",
    "top": "dark charcoal ribbed tank top",
    "bottom": "high-waisted tailored wool trousers in muted grey",
    "accessories": "small dark leather crossbody bag, minimal jewelry",
    "styling_notes": "effortless, functional, lived-in fashion, no trend exaggeration"
  },
  "hair_and_makeup": {
    "hair": "natural medium-length hair, loose and slightly wind-touched, no styling product shine",
    "makeup": "minimal or none, natural skin texture visible, subtle under-eye shadows, real pores"
  },
  "environment": {
    "location": "narrow city street with brick wall and storefronts",
    "background": "softly out-of-focus bicycles and pedestrians in the distance",
    "era_feel": "timeless contemporary, everyday realism"
  },
  "lighting": {
    "type": "natural overcast daylight",
    "direction": "soft frontal with gentle side falloff",
    "contrast": "low to medium contrast",
    "notes": "no harsh highlights, no dramatic rim light"
  },
  "camera": {
    "lens": "50mm full-frame look",
    "framing": "full-body portrait, eye-level perspective",
    "depth_of_field": "moderately shallow, subject separated subtly from background",
    "movement": "static, documentary stillness"
  },
  "color_and_texture": {
    "color_palette": "muted earth tones, soft greys, natural skin tones",
    "texture": "visible fabric weave, brick texture, light film grain",
    "grading": "neutral, slightly cool, filmic, no teal-orange"
  },
  "aesthetic_constraints": [
    "no plastic skin",
    "no beauty retouching",
    "no cinematic exaggeration",
    "no fashion editorial posing",
    "no artificial glow",
    "avoid AI symmetry"
  ],
  "overall_vibe": "quiet confidence, observational, grounded realism, modern street portrait"
}
```

## LANEIGE Water Sleeping Mask Product Video Prompt (Slow Motion)

> Minimal, lüks logo üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Begin in a deep midnight-blue studio environment with a smooth matte surface, soft directional moonlight casting clean architectural shadows across the scene; the camera starts low and close, performing a slow, deliberate push-in as the open jar of LANEIGE Water Sleeping Mask EX sits centered and grounded, the translucent blue jar pristine with the logo crisp and readable; motion builds as the gel cream inside subtly rises and folds in ultra-slow motion, forming a silky peak that glistens under evolving highlights, emphasizing hydration and texture without exaggeration; faint, cool mist drifts horizontally at surface level, controlled and minimal, while micro-reflections glide across the jar walls and lid rim; the camera transitions into a refined macro glide with a restrained micro-orbit, revealing the gel’s glassy translucence, smooth viscosity, and premium formulation detail as light softly wraps the product; lighting remains cool, calming, and intentional with a gentle rim light separating the jar from the background and no harsh contrast; end on a composed hero frame with the jar perfectly centered, gel peak settled in a sculptural form, shadows stabilized, and the scene locked into a luxurious, sleep-focused skincare commercial finish with zero generic looping or filler motion.

Image 2 Prompt:-

Create a dramatic luxury skincare film featuring a single amber glass pump bottle standing perfectly centered on a stone pedestal in a natural forest-inspired set. Moss, small rocks, and soft pine branches frame the scene. The mood is cinematic, moody, and premium—like a high-budget luxury beauty campaign.
```

## Urban Streetwear Portrait Prompt

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Sunlit urban streetwear portrait of a stylish young western woman sitting casually on a concrete sidewalk in front of a closed metal garage door with retro {argument name="graffiti style" default="Street Fighter 2"} inspired graffiti. SHe wears a bright {argument name="shirt color" default="yellow"} oversized shirt with layered silver chains, baggy jeans with worn graphic patches, and yellow white sneakers. Vintage 90s headphones on, calm and confident expression. Soft natural light with subtle glow, cinematic urban editorial mood, slightly high angle, realistic skin tones, textured details.
```

## Sunlit Urban Streetwear Portrait with Retro Graffiti

> Sinematik, retro moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Sunlit urban streetwear portrait of a stylish young man sitting casually on a concrete sidewalk in front of a closed metal garage door with retro {argument name="graffiti theme" default="Street Fighter 2"} inspired graffiti. He wears a {argument name="shirt color" default="bright yellow"} oversized shirt with layered silver chains, baggy jeans with worn graphic patches, and yellow white sneakers. Vintage 90s headphones on, calm and confident expression. Soft natural light with subtle glow, cinematic urban editorial mood, slightly high angle, realistic skin tones, textured details.
```

## High-Fashion African Female Editorial Portrait Prompt

> Minimal, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "render_goal": "High-fashion close-up editorial portrait",
  "subject": {
    "pose": "{argument name="subject ethnicity" default="African"} female close-up with relaxed shoulders",
    "expression": "composed elegant smile"
  },
  "wardrobe": "clean couture neckline in {argument name="clothing color" default="soft ivory"}",
  "environment": {
    "location": "studio with warm lighting",
    "props": "fine translucent dust particles floating gently near face"
  }
}
```

## Cinematic Winter Portrait Prompt

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "Objective": "Create a cinematic winter portrait blending cold outdoor realism with warm, cozy background contrast",
  "PersonaDetails": {
    "Subject": {
      "Type": "Young woman",
      "Expression": "Moody yet serene, calm and introspective",
      "Gaze": "Looking gently toward the camera",
      "Eyes": "Expressive, light-colored",
      "Skin": "Soft fair skin with natural texture",
      "Makeup": "Minimal, natural winter makeup",
      "Hair": {
        "Style": "Long, wavy {argument name="hair color" default="light-brown"} hair",
        "Details": "Flowing naturally from beneath a hooded scarf"
      }
    }
  },
  "Wardrobe": {
    "Outerwear": "Classic {argument name="coat color" default="black"} wool coat",
    "Accessories": {
      "Scarf": "Black knitted hooded scarf wrapped elegantly around head and neck"
    },
    "PoseDetail": "Hands tucked into coat pockets"
  },
  "SceneDescription": {
    "Environment": "Outdoor winter setting",
    "Weather": "Gentle snowfall",
    "AtmosphericDetails": {
      "Snowflakes": "Floating through the air, some softly out of focus in the foreground",
      "Background": "Softly blurred warm bokeh lights creating cozy contrast"
    }
  },
  "Composition": {
    "Framing": "Waist-up cinematic portrait",
    "DepthOfField": "Shallow depth of field",
    "Focus": "Sharp focus on face with layered foreground and background blur"
  },
  "LightingAndColor": {
    "Lighting": "Soft natural winter daylight",
    "DynamicRange": "High dynamic range with preserved highlights and shadows",
    "ColorPalette": "Cool winter neutrals contrasted with warm golden bokeh"
  },
  "ArtDirection": {
    "Style": "Professional fashion photography",
    "Aesthetic": "Cinematic, moody, elegant winter realism",
    "DetailLevel": "Ultra-realistic textures in skin, hair, wool fabric, and snow"
  },
  "PhotographyStyle": {
    "Genre": "Outdoor fashion portrait photography",
    "LensLook": "85mm lens perspective",
    "ImageQuality": "4K resolution, photorealistic clarity"
  },
  "Mood": {
    "Tone": "Quiet, serene, contemplative",
    "SeasonalFeel": "Cold winter calm with subtle warmth"
  },
  "NegativePrompt": [
    "harsh lighting",
    "oversaturated colors",
    "studio lighting",
    "heavy makeup",
    "plastic skin",
    "cartoon",
    "anime",
    "blurry subject"
  ],
  "ResponseFormat": {
    "Type": "Single image",
    "Orientation": "Portrait",
    "AspectRatio": "2:3"
  }
}
```

## Vintage Studio Portrait with Identity Preservation Prompt

> Minimal, retro manzara üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
MAIN SUBJECT (IDENTITY)

Use the person from the reference photo as the main subject. Keep their exact facial features, hairstyle, skin tone, and expression perfectly unchanged preserve all realism, emotional depth, and subtle facial lighting. Allow changes only in camera position, background motion, and atmosphere.

SCENE & COMPOSITION

Vertical medium-shot studio portrait. The man sits on a simple wooden or metal stool, gentle half-profile torso turn. One leg crossed over the other for a relaxed, composed posture; hands resting naturally. Overall mood: quiet, calm, restrained.

CLOTHING

Shirt (top layer): Oversized shirt in faded olive, dusty khaki, or washed military green. Soft textured cotton, sleeves rolled to mid-forearm, natural subtle wrinkles. T-shirt (underlayer): Washed charcoal matte tee, no logos, slightly fitted under the shirt. Trousers: Wide-leg trousers in deep charcoal or washed black; matte heavy-duty cotton or wool blend, straight lines, minimal folds. Accessories: None or very minimal-eg. simple old-style metal watch.

BACKGROUND

Heavy matte fabric backdrop (velvet or thick cotton) in deep forest green, warm olive, or muted army green. Soft draping with subtle folds; warm gradient fall-off toward the edges.

LIGHTING

Warm nostalgic studio lighting (4500-5000K). Large softbox for wraparound illumination. Soft golden skin highlights, lifted shadows for a matte non-contrasty look. Mild rim light along cheek and hair; faint vignette around edges. Mood inspired by 70s early 90s studio portraits.

CAMERA/OPTICAL LOOK

85mm vintage portrait lens, f/2.8 depth of field. Soft micro-contrast, slight halation, very fine film grain, matte warm-muted profile.

COLOR/STYLE

Warm nostalgic palette with muted military tones: golden skin, faded olive, dusty khaki, charcoal. Matte texture, lifted blacks, compressed highlights, subtle organic film grain. Overall: soft warm film portrait with restrained post-war aesthetic, Kodak Portra-inspired
```

## Artisan Pizza Cheese Pull Macro Shot Prompt

> Fotogerçekçi, sinematik yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "content_goal":
 "viral food photography post",
  "image_type": 
"professional food photography",
  "food_concept": {
    "item": 
"{argument name="food item" default="pizza slice"}",
    "style": 
"premium artisan pizza",
    "serving_state": 
"freshly lifted slice with cheese pull",
    "temperature_feel": 
"hot, freshly baked"
  },
  "visual_style": {
    "aesthetic": "cinematic food editorial",
    "vibe": "crave-worthy, indulgent, luxurious",
    "realism": "ultra-realistic"
  },
  "composition": {
    "framing": "close-up macro with partial pizza visible",
    "angle": "45-degree side angle",
    "focus_point": "cheese stretch and toppings",
    "depth_of_field": "shallow background blur"
  },
  "pizza_details": {
    "crust": "golden-brown, crispy edges with soft interior",
    "cheese": "melted mozzarella with long stretchy pull",
    "sauce": "rich red tomato sauce",
    "toppings": [
      "{argument name="topping 1" default="pepperoni slices"}",
      "fresh basil leaves",
      "olive oil glaze"
    ],
    "texture": "glossy cheese, crisp crust, juicy toppings"
  },
  "lighting": {
    "type": "soft directional studio lighting",
    "direction": "side light for texture definition",
    "highlight": "cheese shine and crust detail",
    "shadow": "soft natural shadows"
  },
  "color_palette": {
    "primary_colors": [
      "cheese yellow",
      "tomato red",
      "golden brown"
    ],
    "contrast_level": "medium-high",
    "mood": "warm, appetizing, mouth-watering"
  },
  "environment": {
    "surface": "rustic wooden table or marble slab",
    "background": "dark blurred restaurant or kitchen",
    "props": [
      "pizza cutter",
      "linen napkin",
      "wooden board"
    ]
  },
  "camera_details": {
    "lens": "macro or 50mm food lens",
    "focus": "extreme sharpness on slice",
    "resolution": "high-end commercial quality",
    "noise": "none"
  },
  "sensory_impact": {
    "visual_effect": "cheese pull in motion",
    "viewer_reaction": "instant craving",
    "emotional_trigger": "comfort food desire"
  },
  "quality_control": {
    "food_realism": "authentic pizza texture",
    "ai_artifacts": "none",
    "professional_finish": "restaurant advertisement grade"
  },
  "intended_use": {
    "primary": "viral food post on X",
    "secondary": "restaurant promo, food brand content"
  }
}
```

## Bugatti Garage Portrait with Green Neon

> Fotogerçekçi, fütüristik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A ultra close-up of a confident young woman with long, straight jet-blonde hair featuring sharp blunt bangs stands poised in an indoor parking garage at night, captured from a low angle as she rests one hand on the roof of a sleek {argument name="car color" default="orange"} BUGATTI Veyron with glowing {argument name="neon color" default="green"} underglow headlights and illuminated grille. She has subtle makeup with long lashes and glossy nude lips, and a form-fitting white long-sleeve turtleneck bodysuit made of smooth, matte fabric that hugs her curvaceous hourglass figure, paired with sheer black fishnet or lace-patterned pantyhose with intricate floral designs running down her toned legs, and glossy red pointed-toe stiletto high heels. Her pose is elegant and teasing, body slightly turned to show her silhouette against the car, exuding a mysterious and seductive vibe. The garage background features concrete walls with small chain-link fenced windows, dim overhead lighting casting soft shadows, and the car's shiny black paint reflecting green neon glows. Ultra-realistic skin and fabric texture details, high-contrast moody garage lighting with green accents, highly detailed fishnet patterns, hair strands, glasses reflection, BUGATTI grille and headlights, and subtle concrete textures.
```

## Cinematic Flash Photography Night Editorial

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "Cinematic Flash Photography Portrait (Reference Character)",
  "style": [
    "hyper-realistic",
    "flash photography aesthetic",
    "vogue night editorial",
    "high contrast",
    "sharp details"
  ],
  "subject": {
    "identity": "Use the same woman from the provided reference image",
    "consistency": [
      "maintain identical facial structure",
      "preserve skin tone and complexion",
      "match eye shape, nose, lips, and facial proportions",
      "retain hair color, texture, and length from reference"
    ],
    "age": "young adult (as inferred from reference image)",
    "pose": "seated relaxed on a dark leather sofa, leaning back slightly, legs crossed elegantly, direct confident eye contact",
    "expression": "magnetic, unbothered, slightly parted lips, 'cool girl' aesthetic",
    "hair_accessories": "hair styled in messy chic waves, slightly windswept look"
  },
  "outfit": {
    "top": "{argument name="top material" default="black satin"} structured bodice with deep v-neckline and lace trim detailing",
    "bottom": "matching black micro-skirt with small side slit",
    "accessories": [
      "black translucent tights (20 denier)",
      "layered silver chokers",
      "oversized blazer draped loosely off the shoulders (exposing the bodice)"
    ],
    "fit_guidance": "clothing should be form-fitting and emphasize the silhouette"
  },
  "environment": {
    "location": "backstage VIP room or dark luxury lounge",
    "background": "dark textured walls, velvet curtains, subtle reflection of neon sign ({argument name="neon color" default="red or pink"}) in background blur",
    "lighting": "direct camera flash style (paparaazi style) highlighting the subject against a dark background, creating a high-contrast moody look"
  },
  "camera": {
    "shot_type": "medium-full shot",
    "angle": "eye-level",
    "lens": "35mm wide aperture",
    "focus": "sharp focus on subject, slight vignette at edges"
  },
  "color_palette": [
    "jet black",
    "silver",
    "fleshtone",
    "deep crimson (background accent)"
  ],
  "mood": "edgy, confident, rebellious, glamorous",
  "quality_tags": [
    "photorealistic",
    "detailed fabric texture",
    "nightlife photography",
    "fashion statement",
    "identity-accurate reference rendering"
  ],
  "reference_image_instructions": [
    "do not alter facial identity",
    "focus on realism",
    "maintain character likeness strictly"
  ]
}
```

## High-End Cocktail Visual Marketing Prompt

> Minimal, lüks yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A high-end studio photograph of a [{argument name="cocktail name" default="YOUR COCKTAIL"}], shot from a high-angle slightly top-down perspective. The drink is served in its appropriate traditional glass with an elegant design and professional garnish. Artfully scattered around the base of the glass are fresh fruits and ingredients associated with the cocktail recipe. The scene features a warm, summery atmosphere with a light orange-tinted background. Artistic soft shadows of tropical palm leaves are cast across the frame, creating a vacation vibe. Realistic condensation on the glass, soft golden hour lighting, 8k resolution, professional food photography, sharp focus, clean and sophisticated composition.
```

## Avant-Garde Architectural Fashion Editorial

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "concept": "Avant-Garde Architectural Fashion",
  "visual_elements": "Translucent parametric exoskeleton dress, iridescent organza layers, platinum white bob cut, minimalist makeup, raw concrete background",
  "style": "High-fashion editorial, brutalist aesthetic, soft cinematic lighting, photorealistic, 35mm film grain",
  "ar": "--ar 3:4"
}
```

## High-Fashion Portrait on a Grand Staircase

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_analysis": {
    "type": "Photorealistic Portrait",
    "style": "High-fashion, Elegant, Luxury aesthetic"
  },
  "subject": {
    "demographics": "Young woman, estimated early 20s",
    "physique": "Slim, fit figure with fair skinned tone",
    "hair": "Long, dark brown, sleek and straight with a center part, draping behind shoulders",
    "face": "Soft glam makeup, defined eyebrows, neutral to soft expression, looking slightly off-camera to the left"
  },
  "attire": {
    "garment": "White off-the-shoulder mini dress",
    "material": "Satin or silk finish with a sheen",
    "design_details": [
      "Sweetheart neckline with a prominent bow tied at the center bust",
      "Ruched/corset-style fitted bodice",
      "Puffed, bubble-hem skirt (voluminous and short)",
      "Draped short sleeves resting on upper arms"
    ],
    "footwear": "Clear (transparent) strap high-heeled sandals showing white pedicure",
    "accessories": "Minimalist silver stud earrings, simple rings"
  },
  "pose": {
    "stance": "Standing on a staircase, weight shifted to the back leg, front leg stepped down and slightly forward",
    "arms": "Relaxed at sides, fingers gently grazing the hem of the bubble skirt",
    "angle": "Full-body shot, slightly low angle to accentuate leg length"
  },
  "environment": {
    "location": "Grand interior staircase within a luxury building or mansion",
    "architecture": [
      "Beige/Cream marble steps",
      "Ornate black wrought-iron railing with a polished wooden handrail on the left",
      "Classic white wall paneling and molding",
      "Black and white checkered marble flooring at the base"
    ],
    "decor": [
      "Framed oil painting hanging on the upper wall",
      "White plaster relief sculpture (draped fabric style) mounted on the wall directly behind the subject",
      "Red upholstered chair visible in the upper background"
    ]
  },
  "lighting_and_atmosphere": {
    "lighting": "Warm, soft indoor ambient lighting",
    "shadows": "Subtle shadows cast against the wall and stairs, highlighting the texture of the dress",
    "mood": "Sophisticated, chic, opulent"
  },
  "technical_specifications": {
    "quality": "4K Ultra HD, Photorealistic, Masterpiece",
    "resolution": "High definition, sharp focus",
    "texture_detail": "High fidelity fabric textures, skin texture, and marble reflections",
    "camera_settings": "DSLR, portrait focal length (e.g., 85mm), shallow depth of field background"
  }
}
```

## Moody London Rooftop Fashion Editorial

> Moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A Photo Of A Young Man Wearing Baggy Black Pants And The Jacket And Shoes Shown In The Reference Images, Posing In Front Of His Rolls-royce On A Parking Lot Rooftop With The London Skyline Behind Him At Night. The Image Has A Moody, Atmospheric, And Foggy Aesthetic, Shot In The Style Of A Fashion Editorial Taken From An Elevated Perspective Using A Canon Eos R5
```

## Cinematic Fashion Editorial with Flowing Red Fabric

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "request_metadata": {
    "tool": "Nano Banana Pro",
    "task_type": "photoreal_fashion_editorial_cinematic_portrait",
    "quality_preset": "ultra",
    "aspect_ratio": "9:16"
  },
  "references": {
    "female_reference_image": {
      "slot": 1,
      "purpose": "MAIN_SUBJECT_IDENTITY_LOCK",
      "strict_identity_lock": true
    }
  },
  "hard_constraints": [
    "Exactly 1 person only (female).",
    "Face must match the uploaded reference with maximum similarity.",
    "Preserve natural facial structure, skin texture, and age.",
    "No beautify filters, no face morphing."
  ],
  "camera": {
    "style": "high-end fashion editorial photo",
    "lens": "85mm portrait lens",
    "aperture": "f/2.0",
    "focus": "sharp on face and upper body, soft falloff on fabric edges",
    "white_balance": "warm cinematic red-neutral balance"
  },
  "lighting": {
    "type": "studio cinematic lighting",
    "sources": [
      "soft key light from front-left shaping the face",
      "backlight creating a glowing rim through the red fabric",
      "subtle fill to preserve skin texture without flattening"
    ],
    "shadow_style": "soft dramatic shadows with depth"
  },
  "prompt": {
    "scene_summary": "A cinematic fashion editorial portrait of a woman wearing a flowing {argument name="dress color" default="deep-red"} couture dress with layered sheer fabric. She stands in a graceful three-quarter pose, body turned away while her head looks back over her shoulder toward the camera. Long translucent red fabric billows dramatically around her like wings, suspended in motion, creating an elegant and powerful silhouette. The background is a smooth red-to-purple gradient studio backdrop. Lighting passes through the fabric, creating glowing highlights and soft shadows. The mood is sensual, elegant, and high-fashion, with a refined cinematic atmosphere. Skin texture remains natural and realistic, makeup is elegant and minimal, and jewelry is subtle but refined.",
    "composition": {
      "framing": "full body vertical portrait, subject centered slightly right",
      "camera_angle": "eye-level, slight diagonal body orientation",
      "motion": "fabric captured mid-air with realistic flow and softness"
    },
    "styling_notes": [
      "strapless or open-back red couture gown",
      "sheer red fabric flowing outward like wings",
      "elegant earrings, no excessive accessories",
      "clean studio floor with minimal visual noise"
    ]
  },
  "negative_prompt": [
    "extra people",
    "extra limbs",
    "deformed hands",
    "extra fingers",
    "blurred face",
    "identity drift",
    "face swap artifacts",
    "plastic skin",
    "over-smoothing",
    "cartoon",
    "anime",
    "cgi look",
    "text",
    "logo",
    "watermark"
  ]
}
```

## Scissor Man Figure Generation (Plastic Model and Flocked)

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Visualizing '{argument name="character" default="Scissor Man"}' with nano banana pro! ✂️ I created two patterns each for the plastic model style and the fluffy flocked figure style.
```

## Cinematic Studio Portrait of Ana de Armas with Chibi Figure

> Fotogerçekçi, sinematik 3B sahne üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "aspect_ratio": "1:1",
  "scene_type": "cinematic_studio_portrait",
  "environment": {
    "background_color": "warm_muted_gray",
    "surface": "natural_textured_stone_table",
    "mood": "intimate_evening_cafe",
    "atmosphere": "cozy_moody"
  },
  "primary_subject": {
    "identity": "{argument name="subject identity" default="Ana de Armas"}",
    "pose": "seated_relaxed",
    "expression": "soft_calm_confident",
    "appearance": {
      "hair": "black_shoulder_length_soft_layers",
      "makeup": "subtle_evening_makeup",
      "outfit": "{argument name="subject outfit" default="dark_brown_satin_blouse"}"
    },
    "focus": "sharp_subject_isolation"
  },
  "props": {
    "main_drink": {
      "type": "cold_brew_coffee",
      "glass": "clear_glass_with_ice",
      "straw": "metal_straw"
    },
    "stylized_figure": {
      "style": "high_quality_3d_chibi_collectible",
      "design": {
        "head": "oversized_rounded",
        "eyes": "large_expressive",
        "cheeks": "soft_blush",
        "features": "simplified_cute"
      },
      "likeness": "same_as_primary_subject",
      "pose": "holding_miniature_cold_brew_glass",
      "material": "glossy_with_soft_reflections"
    }
  },
  "lighting": {
    "type": "soft_cinematic",
    "direction": "angled_key_with_gentle_falloff",
    "highlights": "subtle_reflections_on_glass_and_chibi",
    "shadows": "smooth_and_moody"
  },
  "camera": {
    "depth_of_field": "shallow",
    "focus_priority": "real_subject_then_chibi",
    "look": "cinematic_photography"
  },
  "style_notes": [
    "realistic_human_combined_with_stylized_3d_character",
    "premium_collectible_toy_aesthetic",
    "warm_color_grading",
    "cozy_evening_tone",
    "ultra_detailed",
    "photoreal_subject"
  ]
}
```

## Ultra-realistic studio portrait of a young woman

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic, photorealistic studio portrait of an extremely beautiful young adult woman (18–20 years old). She has long, straight {argument name="hair color" default="blonde"} hair with a natural silky texture, delicately framing her face. Facial features are soft and refined with a balanced, feminine bone structure; small straight nose; smooth jawline; and subtle cheek definition. Large, sparkling light-blue eyes with realistic catchlights, long natural lashes, and softly defined brows. Perfect clear skin with natural pores and lifelike texture, soft peach undertones, no blemishes. Minimal, natural makeup: light foundation, gentle blush, soft nude lips, faint eye makeup enhancing realism. Gentle, dreamy expression with relaxed eyes and slightly parted lips.
She is wearing a black ribbed deep V-neck cropped tank top, paired with an oversized white button-up shirt worn open and loosely slipping off her shoulders. High-waisted light blue jeans with a modern casual fit. Trendy, effortless fashion styling. Standing pose, relaxed posture, one hand raised into her hair in a natural candid gesture.
Soft, diffused natural studio lighting that flatters the face, subtle highlights on hair and skin, smooth shadows, no harsh contrast. Neutral gray studio background with slight gradient for depth. Sharp focus on the face, shallow depth of field. Ultra-high detail, lifelike proportions, professional fashion photography, cinematic realism, 8K quality, highly detailed facial features, crisp clarity, natural color grading.
```

## Action Figure Product Advertisement Image

> Minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Advertisement image for an action figure product introduction
```

## Luxury Poolside Gothic Misa Amane Cosplay Editorial

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "Luxury Poolside Fashion Portrait (Pure Gothic Misa Amane Cosplay, Reference Character)",
  "style": [
    "ultra-realistic",
    "high-fashion editorial",
    "fully photographic realism",
    "soft natural lighting",
    "cinematic depth of field",
    "8K detail"
  ],
  "subject": {
    "identity": "Use the same woman from the provided reference image",
    "consistency": [
      "maintain identical facial structure",
      "preserve skin tone and complexion",
      "match eye shape, nose, lips, and facial proportions",
      "retain natural facial features without anime stylization"
    ],
    "character_cosplay": "Misa Amane (Death Note)",
    "cosplay_guidance": [
      "pure gothic fashion interpretation of Misa Amane",
      "cosplay through wardrobe, styling, and attitude only",
      "no anime rendering, no illustration effects"
    ],
    "age": "young adult (as inferred from reference image)",
    "pose": "standing confidently near a swimming pool, slight hip tilt, relaxed yet alluring posture",
    "expression": "soft, confident, subtly seductive expression inspired by gothic idol aesthetics",
    "hair": {
      "style": "long hair styled in loose gothic waves or subtle twin-tail variation",
      "color": "adapt toward platinum or pale blonde tones only if compatible with reference, otherwise preserve reference hair color",
      "accessories": [
        "black gothic ribbons or lace headband"
      ]
    }
  },
  "outfit": {
    "top": "{argument name="top color" default="black"} gothic corset-style bikini top with lace, leather, or satin textures",
    "bottom": "black gothic wrap skirt or mini skirt with lace trim and soft flowing fabric",
    "accessories": [
      "black choker with metallic or cross detailing",
      "lace wrist cuffs or fingerless gloves",
      "subtle Death Note–inspired gothic jewelry motifs"
    ],
    "fit_guidance": "outfit should conform naturally to the reference character’s body shape while maintaining gothic cosplay accuracy"
  },
  "environment": {
    "location": "luxury villa poolside",
    "background": "clear turquoise swimming pool creating contrast against black gothic fashion, white modern villa architecture, soft flowing curtains",
    "lighting": "natural daylight with soft shadows, carefully balanced to preserve dark fabric detail and skin realism"
  },
  "camera": {
    "shot_type": "mid-length portrait",
    "angle": "eye-level",
    "lens": "85mm portrait lens",
    "focus": "sharp focus on reference character, softly blurred background"
  },
  "color_palette": [
    "black",
    "charcoal",
    "deep shadow tones",
    "turquoise",
    "white",
    "natural skin tones"
  ],
  "mood": "dark gothic elegance, confident idol presence, luxurious fashion editorial",
  "quality_tags": [
    "photorealistic",
    "high detail skin texture",
    "editorial cosplay photography",
    "pure gothic fashion",
    "identity-accurate reference rendering",
    "clean composition"
  ],
  "refer"
}
```

## Premium Esports Gamer Portrait Prompt

> Sinematik, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Esports gamer, premium style portrait, fiery glow lighting, {argument name="background color" default="red-orange"} gradient background, minimal or no patterns, dramatic lighting, high-end aesthetic, ultra-detailed face and gear, professional gaming headset, cinematic tone, sharp contrast, sleek and modern look, energetic pose, intense focus, dynamic depth, smooth glossy elements, trending on Behance, studio-quality render, 8K resolution
```

## Detailed JSON prompt for generating a viral athletic jump freeze photo

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "content_goal": 
"{argument name="content goal" default="viral athletic jump freeze post"}",
  "image_type":
 "jump freeze action photography",
  "visual_style": 
"cinematic sports editorial, high-impact, premium",
  "motion_concept": {
    "action_type":
 "jump freeze",
    "timing": 
"captured at peak height",
    "motion_state": 
"completely frozen mid-air",
    "energy":
 "explosive yet controlled"
  },
  "pose_details": {
    "pose_name":
 "jump freeze flex pose",
    "body_position": 
"mid-air jump with legs extended or flexed symmetrically",
    "core_engagement":
 "tight core with visible strength",
    "arm_position": 
"balanced, expressive, athletic alignment",
    "freeze_quality": 
"sharp, suspended, gravity-defying"
  },
  "subject": {
    "description":
 "athletic feminine body performing a powerful jump freeze",
    "physique": "lean, flexible, toned",
    "body_language": "confident, fearless, strong",
    "expression": "focused intensity with calm control"
  },
  "facial_details": {
    "emotion": "determination mixed with ease",
    "micro_details": "relaxed face, steady eyes, natural expression"
  },
  "wardrobe": {
    "clothing": "professional athletic performance wear",
    "fit": "body-contoured to emphasize motion lines",
    "fabric": "stretch performance fabric, non-reflective",
    "color_tones": "{argument name="wardrobe color" default="solid neutral or bold single color"}"
  },
  "environment": {
    "location": "minimal studio or clean gym space",
    "background": "plain or gradient backdrop",
    "atmosphere": "focused, powerful, distraction-free"
  },
  "lighting": {
    "type": "high-speed studio lighting",
    "quality": "crisp, clean, cinematic",
    "direction": "side and top lighting",
    "effect": "freeze motion sharply with defined muscle highlights"
  },
  "camera_details": {
    "angle": "slightly low angle for power emphasis",
    "framing": "full body mid-air capture",
    "lens_feel": "sports editorial realism",
    "focus": "ultra-sharp subject with zero motion blur"
  },
  "color_palette": {
    "primary_colors": ["neutral background", "natural skin tone"],
    "contrast_level": "high",
    "mood": "bold, energetic, inspiring"
  },
  "emotional_impact": {
    "viewer_reaction": "scroll-stopping shock and admiration",
    "message": "power, balance, and control in one moment"
  },
  "quality_control": {
    "realism": "ultra-realistic photography",
    "detail_level": "high-definition muscle and fabric texture",
    "ai_artifacts": "none",
    "professional_standard": "editorial-grade"
  },
  "intended_use": {
    "primary": "viral jump freeze post on X",
    "secondary": "fitness branding, athletic inspiration"
  }
}
```

## Ultra-Detailed New Chinese Aesthetic Portrait Prompt (Zhao Lusi Style)

> Sinematik, retro yemek görseli üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
As a world-class fashion photographer (fusing the cinematic quality of Steven Meisel + the soft light aesthetic of Paolo Roversi + the emotional capture of Harley Weir), create a defining New Chinese aesthetic autumn art film for the [Female Character in Reference Image 1]. The focus of the film is on cinematic close-ups, texture details, and poetic narrative.

Core Character Features (100% strict restoration of Reference Image 1):
Face and Hairstyle:

Face Shape: Soft oval face, delicate and three-dimensional East Asian features
Eyes: Deep brown eyes, double eyelids, calm and penetrating gaze
Nose Bridge: Straight and delicate, rounded nose tip
Lips: Moderately full, natural and soft lip color
Skin Quality: Delicate and healthy East Asian skin tone, smooth skin
Hair: Black long straight hair (texture and color from Reference Image 1), smooth and shiny, naturally falling to the shoulders or chest
Hairstyle Treatment: Can be slightly adjusted to the loose braid style of Reference Image 2 (reddish-brown tone optional, or kept black), with some strands slightly blowing in the wind to increase dynamism

Temperament and Expression:

Core Temperament: Calm, elegant, reserved yet confident
Eyes: Can choose to look directly at the camera (showing strong communication) or gaze into the distance (creating a literary contemplative mood)
Facial Expression: Calm and composed, with a hint of pensive literary atmosphere
Overall Tone: The intellectual beauty and relaxed feeling of modern Oriental women

Scene Setting and Composition (referencing the New Chinese aesthetic autumn atmosphere of Reference Image 2):
Environment and Background:

Core Scene: Outdoor autumn scene + vintage wooden long chair + Chinese architectural elements
Foreground Elements:

Vintage wooden long chair (with rusty metal brackets)
Chinese carved stone pillars or railings
Stacked books (multiple colorful cover books)
Paper boxes, pastries, and other literary props

Background Elements:

Golden yellow autumn leaves background (sycamore, ginkgo, etc.)
Blurred treatment to create dreamy depth of field
Warm-toned autumn sunlight filtering through the leaves

Dynamic Elements:

Breeze blowing hair strands (some strands slightly lifted)
Falling autumn leaves (optional)

Composition Method:

Main Composition: Subject centered or slightly off-center, the person is the absolute core
Shot Selection:

Medium Shot/Full Body: To show the complete cheongsam styling and environmental atmosphere (similar to Reference Image 2)
Close-up/Half Body: Focusing on facial expression and hand details (fusing the cinematic close-up technique of Prompt 2)

Perspective: Eye-level or slightly low-angle, enhancing the person's elegance

Clothing Styling (fusing New Chinese Aesthetic):
Core Clothing:

Main Attire: Light apricot or beige short-sleeved cheongsam (Reference Image 2 style)
Fabric Texture:

Silk or satin, with translucency and sheen
Skirt body has Chinese bas-relief patterns or embroidery (phoenix, auspicious clouds, flowers, etc.)
Mandarin collar design, showing Oriental elegance

Skirt Length: Knee-length or calf-length, convenient for showing a relaxed sitting posture

Accessory Details:

Earrings: Delicate Oriental style earrings (jade, pearl, metal carving, etc.)
Hands: Simple accessories like rings or bracelets can be chosen
Hair Accessories: Hairpins, hair sticks, or ribbons (if using a braided style)

Posture and Interaction (fusing the literary feel of Reference Image 2):
Core Posture:

Sitting: Sitting sideways on the vintage wooden long chair, body slightly leaning forward or resting
Hand Movements:

One hand holding an open book (pages half-open, fingers lightly touching the page)
One hand holding a pastry or teacup (fingertips gently pinching, showing elegant gestures)
Or hands naturally resting on the knees/book

Legs: Crossed or together, showing the reserved posture of Oriental women
Head: Slightly turned or tilted up, gazing into the distance or at the camera

Emotional Expression:

Overall Atmosphere: Lazy, relaxed "Autumn Reading" state
Eyes: Contemplative, relaxed, with a poetic literary feel
Body Language: Relaxed and natural, avoiding an overly posed feeling

Props and Details (enhancing narrative sense):
Core Props:

Books:

Multiple colorful cover books stacked next to the long chair
Holding an open book (showing the moment of reading)
Book covers can be literary/classical style

Pastries:

Light green or warm-toned Chinese pastries (like mung bean cake, osmanthus cake)
Placed in a paper box or small dish

Tea Set (Optional):

Chinese teacup or teapot
Enhancing the New Chinese lifestyle aesthetic atmosphere

Lighting Design (Cinematic Natural Light Application):
Main Light Source (Autumn Natural Light):

Time: Golden Hour (1-2 hours before sunset)
Light Quality: Soft diffused light, filtering through autumn leaves
Direction: Side light or side-back light (45-60 degrees)
Effect:

Creating soft light and shadow transitions on the person's face
Highlighting the translucency and sheen of the cheongsam fabric
Creating a halo (rim light effect) on the edges of the hair

Auxiliary Light Source:

Reflector: Using a reflector on the shadow side to fill light, maintaining facial details
Environmental Reflected Light: Using the golden yellow reflection of autumn leaves to create warm-toned light

Light and Shadow Processing:

Contrast: Medium contrast, maintaining soft transitions
Color Temperature: Warm tones (3500K-4500K), creating a warm autumn atmosphere
Bokeh: Natural light spots (bokeh) can appear in the background, enhancing the dreamy feel

Color Grading Scheme (New Chinese Warm Tone System):
Overall Tone:

Main Tone: Dominated by warm colors (golden yellow, light apricot, warm brown, off-white)
Auxiliary Colors: Low-saturation color accents (book covers, pastries)
Background Color: Golden yellow autumn leaves (creating a dreamy warm tone after blurring)

Color Layering:

Character Layer:

Skin Tone: Natural healthy East Asian skin tone, slightly warm-toned
Clothing: Light apricot or beige cheongsam, medium saturation
Hair: Black or reddish-brown (depending on choice)

Prop Layer:

Books: Colorful covers (red, blue, green, etc.), reduced saturation
Pastries: Light green, off-white, and other fresh tones

Background Layer:

Autumn Leaves: Golden yellow, orange yellow, warm brown gradient
Blurred treatment, forming soft color blocks

Color Coordination:

Contrast: Warm-toned person + golden yellow background (harmonious unity)
Accents: Low-saturation colored props as visual points of interest
Overall: Vintage, literary, warm autumn aesthetic

Technical Aesthetics (Hyper-realistic Cinematic Texture):
Photography Technique:

Camera Settings:

Large aperture (f/1.4 - f/2.8) to create shallow depth of field
Medium telephoto lens (85mm - 135mm) to compress space and highlight the subject
Moderate ISO, maintaining image purity

Depth of Field Control:

Subject (person) is sharp and clear
Foreground (books, etc.) is slightly blurred
Background (autumn leaves) is heavily blurred, forming dreamy bokeh

Texture Presentation (Hyper-realistic Details):

Skin Texture:

Visible pores, fine lines, and skin texture details
Skin translucency under natural light

Hair Texture:

The sheen and flow direction of every strand of hair
The dynamic feeling of being blown by the wind

Fabric Texture:

The silk sheen and bas-relief patterns of the cheongsam
The wrinkles and drape of the fabric

Prop Details:

The paper texture and writing on the book
The surface texture and sheen of the pastry
The texture and rust on the wooden long chair

Film Aesthetic:

Grain: Medium intensity film grain (simulating 35mm film)
Color Rendering: Warm tone rendering of Fuji or Kodak film
Contrast: Soft contrast, avoiding excessive sharpening

Composition and Narrative (Cinematic Visual Language):
Screen Composition:

Golden Ratio: Person positioned at the golden ratio point of the screen
Visual Guide Lines:

Lines of the long chair guide the sight to the person
Stacked books form visual layers
Autumn leaves background create depth

Negative Space Treatment: Appropriate negative space, enhancing the screen's breathability

Narrative Layers:

Foreground: Books, props (creating spatial sense)
Middle Ground: Main subject (core narrative)
Background: Autumn environment (emotional setting)

Emotional Expression:

Theme: "Relaxed Time Reading in Autumn" - the poetic fusion of New Chinese aesthetic and modern literary life
Symbols:

Cheongsam = Oriental elegance
Books = Intellect and literature
Autumn Scenery = The gentleness of time
Pastries = The relaxed feeling of life

Close-up Shot Options (Optional):
Shot 1 - Facial Close-up:

Focus: Eyes and facial expression
Composition: Tight crop above the shoulders
Details: Skin texture, emotional gaze, earring details

Shot 2 - Hand Close-up:

Focus: Action of holding the book and pastry
Composition: Hand + part of the book pages + pastry
Details: Elegant posture of the fingers, book page texture, pastry sheen

Shot 3 - Full Body/Medium Shot:

Focus: Overall styling and environmental atmosphere
Composition: Showing the full cheongsam, sitting posture, autumn background
Details: Cheongsam bas-relief texture, environmental props, autumn leaves blurring

Final Output Effect:
Visual Presentation:

Cinematic New Chinese aesthetic autumn portrait blockbuster
Harmonious color system dominated by warm tones
Hyper-realistic texture details (skin, fabric, props)
Dreamy atmosphere created by shallow depth of field
Soft light and shadow created by natural light

Emotional Atmosphere:

Lazy, relaxed autumn literary feel
The elegance and modernity of the New Chinese aesthetic
Poetic "leisure reading time" narrative
Warm, healing visual experience

Technical Standards:

8K ultra-high resolution
Cinematic color grading and post-processing
Film texture warm tone rendering
Professional portrait photography lighting control
```

## High-Fidelity Image Generation Prompt for Kylie Cosmetics Scene

> Manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_generation_request": {
    "scene_description": {
      "subject": {
        "main": "A young girl",
        "action": "Applying the latest {argument name="cosmetics brand" default="Kylie Cosmetics"} lip kit",
        "details": [
          "Snowflakes melting on her lashes",
          "Soft matte lips in a {argument name="lip color" default="rosy nude"} shade"
        ],
        "clothing": "{argument name="clothing detail" default="Pink Ralph Lauren winter jacket collar framing her face"}"
      },
      "setting": "Snowy alpine mountain"
    },
    "technical_enhancements": {
      "surface_and_texture": [
        "High-fidelity micro-detail",
        "Accurate material response",
        "Natural specularity",
        "Realistic micro-shadows",
        "Fine surface imperfections",
        "True-to-material depth",
        "Tactile realism"
      ],
      "rendering_rules": [
        "Add skin realism",
        "Fix any small broken details",
        "Keep original color grading"
      ],
      "exclusions": [
        "Plastic skin appearance"
      ]
    },
  }
}
```

## Black and White Fashion Portrait with Exact Facial Structure

> Moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use 100% of the uploaded reference image for the exact face, identity, and facial structure — do not alter facial features. A high-contrast black-and-white fashion portrait of a handsome young man in his late 20s with black hair and a well-groomed black beard, looking over his shoulder toward the camera. He wears a stylish black leather jacket with visible grain texture and modern rectangular sunglasses with {argument name="lens tint" default="deep red"}-tinted lenses.
```

## Image-to-Image Fusion for Ana de Armas Identity Transfer

> Fotogerçekçi mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "request_configuration": {
    "workflow": "image_to_image_fusion",
    "priority": "identity_preservation"
  },
  "source_references": {
    "primary_subject": {
      "id": "image_1",
      "target_element": "facial_identity",
      "subject_name": "Ana de Armas",
      "constraints": "zero_morphing_policy"
    },
    "attire_reference": {
      "id": "image_2",
      "target_element": "full_outfit",
      "transfer_attributes": ["fabric_texture", "color_palette", "layering"]
    }
  },
  "generation_parameters": {
    "subject_specs": {
      "identity": {
        "face": "Ana de Armas (reference image 1)",
        "features": "locked",
        "skin_texture": "hyper-realistic, detailed pores, natural blemishes"
      },
      "anatomy": {
        "pose": "dynamic three-quarter turn, hand resting on hip",
        "body_type": "consistent with Ana de Armas"
      },
      "styling": {
        "outfit": "cloned from image 2",
        "hair": "voluminous, natural wave, catching backlight"
      }
    },
    "environment_specs": {
      "setting": {
        "location": "upscale outdoor terrace",
        "background_depth": "deep_blur",
        "elements": ["soft architectural lines", "golden hour warmth", "vibrant greenery"]
      },
      "lighting": {
        "mode": "vibrant_high_key",
        "primary_source": "bright natural sunlight",
        "secondary_source": "soft rim lighting to separate subject from background",
        "hdr_profile": "ultra-high dynamic range"
      }
    },
    "camera_specs": {
      "optics": "85mm prime lens",
      "aperture": "f/1.8",
      "focus": "sharp on eyes",
      "quality_level": "4K UHD"
    }
  },
  "negative_prompt_constraints": [
    "facial distortion",
    "altered features",
    "low resolution",
    "dull lighting",
    "flat textures"
  ]
}
```

## Cozy, Surreal Kitten Overload Portrait

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A cozy dreamy high-fashion editorial portrait. A person fully surrounded by dozens of ultra-fluffy kittens of different breeds, filling the entire frame like a soft living cloud. Extremely long, dense, airy fur, plush texture, maximum volume, soft halos around each kitten. A mix of British Shorthair, Scottish Fold, Maine Coon kittens, Ragdoll, Persian and Norwegian Forest kittens. All kittens are small, clean, healthy, baby-like proportions, big eyes, round faces, in white, cream, beige, gray and soft ginger tones, with hyper-realistic fur details. The person is lying calmly in the center, as if resting near a fireplace, eyes gently closed or with a soft peaceful smile, deep cozy holiday mood. Wearing a warm red New Year-inspired cozy sweater: oversized chunky knit, soft wool or cashmere texture, thick yarn, rich deep red color, relaxed fit, elegant and festive, hygge aesthetic, no logos. Warm fireplace lighting, glowing amber light, gentle shadows, cinematic warmth, soft fur highlights. lights. Delicate Christmas garlands with warm fairy lights softly surrounding the scene, creamy bokeh lights in the background, magical winter atmosphere. Top-down composition, symmetrical, cinematic fashion photography, Vogue editorial style, ultra-detailed, photorealistic, shallow depth of field, 85mm lens look, high resolution. Face preservation: keep facial structure from reference photo natural skin texture realistic proportions Quality: ultra high quality, editorial photography, soft focus, luxury aesthetic, ultra-cozy surreal winter mood. Christmas warmth, bygge, softness overload
```

## High-fashion close-up portrait of a woman with simple elegance

> Minimal, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Calm eyes, simple elegance 🤍✨
A high-fashion close-up portrait of a woman with relaxed shoulders and a gentle, composed smile. She wears a soft {argument name="clothing color" default="ivory"} couture top with a clean neckline, set in a {argument name="lighting" default="warm-lit"} studio with delicate, translucent dust particles floating softly around her face.
```

## Four-Image Collage Prompt for Nightlife Scene

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene_type": "nightlife_lifestyle",
  "setting": {
    "location": "outdoor restaurant or lounge patio",
    "time": "night",
    "environment": "urban, intimate, upscale",
    "lighting": "warm ambient lighting from patio heaters and string lights"
  },
  "composition": {
    "format": "four-image collage",
    "layout": "2x2 grid",
    "continuity": "same subject, outfit, and location across all frames"
  },
  "subject": {
    "type": "person",
    "appearance": {
      "hair": {
        "color": "blonde",
        "length": "long",
        "style": "loose, softly waved"
      }
    },
    "clothing": {
      "outerwear": "black leather jacket",
      "top": "black cut-out crop top",
      "bottom": "black fitted mini skirt"
    },
    "expressions": [
      "confident",
      "relaxed",
      "contemplative",
      "posed"
    ],
    "poses": [
      "standing with wine glass",
      "seated holding wine glass",
      "leaning with hands near waist",
      "resting chin on hand"
    ]
  },
  "objects": [
    {
      "type": "wine_glass",
      "content": "red wine",
      "held": true
    },
    {
      "type": "patio_heater",
      "description": "tall outdoor gas heater emitting warm light"
    },
    {
      "type": "met"
```

## Messy Closet Selfie Portrait Prompt

> Moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "descriptive_portrait",
  "subject_details": {
    "demographics": "Young female, pale skin with cool undertones, slender frame.",
    "facial_features": {
      "expression": "Looking up at the phone with a playful frown/pout ('tired but cute'), blowing a strand of hair out of her face.",
      "eyes": "Grey eyes with winged eyeliner.",
      "hair": "Platinum blonde bob cut, messy and tousled."
    },
    "apparel": {
      "dress": "A mismatched set: a leopard print bikini top and high-waisted black sequined shorts.",
      "accessories": "Multiple rings on fingers and large hoop earrings.",
      "footwear": "One black combat boot on, the other foot bare with painted toenails."
    }
  },
  "pose_and_action": {
    "body_position": "Lying on her back on a plush carpeted floor, surrounded by piles of clothes. Legs kicked up in the air, crossed at the ankles.",
    "hands": "Holding the smartphone directly above her face with both hands for a top-down selfie.",
    "camera_angle": "High-angle, top-down reflection from a ceiling mirror or looking down into a large floor mirror."
  },
  "background_environment": {
    "location": "Messy walk-in closet floor.",
    "lighting_source": "Even, bright overhead track lighting.",
    "objects": {
      "clutter": "Piles of discarded jeans, tops, shoes, hangers, and bags spread all over the floor around her."
    }
  },
  "technical_specs": {
    "style": "Fashion editorial aesthetic, organized chaos, high detail, sharp focus.",
    "aspect_ratio": "4:5"
  }
}
```

## New Chinese Style Autumn Zen Cinematic Portrait Prompt

> Fotogerçekçi, sinematik yemek görseli üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
New Chinese Style Autumn Zen Cinematic Photo Prompt (Single Shot Full Version)
As a world-class cinematographer (integrating the dramatic lighting of Steven Meisel + the poetic atmosphere of Paolo Roversi + the emotional depth of Harley Weir), create a definitive New Chinese Style autumn cinematic blockbuster for [{argument name="Reference Image 1 Female Character" default="Reference Image 1 Female Character"}]. Single shot, focusing on dramatic composition, hyper-realistic texture, and poetic narrative.

Key Character Features (100% strict restoration of Reference Image 1):
Facial Features:

Face Shape: Soft oval face, delicate and defined East Asian features
Eyes: Deep brown eyes, double eyelids, calm and penetrating gaze
Nose Bridge: Straight and refined, rounded nose tip
Lips: Moderately full, natural lip color (can be adjusted to soft rose or warm red)
Skin Texture: Delicate and healthy East Asian skin tone, smooth and translucent skin
Eyebrows: Natural and flowing shape

Hairstyle Settings:

Color: Black long straight hair (hair color of Reference Image 1)
Style: Can be adjusted to loose braid or half-braid style (referencing the reddish-brown braid style of Reference Image 2, but maintaining black hair color)
Texture: Smooth and soft hair quality, some strands naturally falling
Movement: Hair slightly fluttering in a gentle breeze

Overall Temperament:

Calm, elegant, introverted yet confident
Possessing the intellectual beauty and poetic sense of modern Oriental women
Integrating traditional elegance with contemporary ease

Single Shot Composition and Shot Type:
Image Type: Medium-long shot full-body portrait

Showing the complete relationship between the character's full styling and the environmental atmosphere
The subject is located in the lower middle of the frame, forming the visual tension of a vertical composition
Eye-level or slightly high-angle perspective, enhancing spatial depth

Specific Composition (referencing Reference Image 2):

Upper Part: Golden yellow ginkgo tree canopy (dense and lush, forming a natural "frame" effect)
Middle Part: Dark red wooden traditional building background (dark tone, strong light-dark contrast)
Lower Middle Part: Character subject (standing sideways, visual core)
Lower Part: Ground covered with golden yellow ginkgo leaves + old stone steps

Visual Layers:

Foreground: Scattered ginkgo leaves (ground)
Midground: Character subject + steps
Background: Dark-toned traditional architecture + ginkgo tree canopy

Character Pose and Expression (Single Moment):
Body Posture:

Standing sideways in front of the steps covered with ginkgo leaves
Body slightly turned sideways (about 45 degrees), showing the side silhouette of the clothing
Hands naturally hanging down or lightly holding a transparent floral bag (containing flowers)
One hand can lightly touch the skirt hem or be naturally behind the back

Facial Expression and Gaze:

Head slightly raised, gaze looking into the distance or slightly upwards
Expression is relaxed and thoughtful, conveying a quiet Zen atmosphere
Eyes are gentle and firm, with a poetic sense of detachment
Corners of the mouth are naturally relaxed, not deliberately smiling

Overall State:

A static moment, as if time is frozen
Conveying the life concept of "seeking tranquility amidst the hustle and bustle"
Body language presents the reserve and elegance of Oriental women

Clothing Style (New Chinese Aesthetic):
Main Attire:

Style: Light apricot or off-white New Chinese style long dress (modern improved version)
Design Elements:

Short-sleeved or sleeveless design
Mandarin collar or round neck
Skirt body with traditional pattern texture (cloud patterns, water patterns, floral patterns, etc.)
Skirt hem has strong drape, length to the ankle

Fabric:

Silk, Xiangyun silk, or high-grade cotton and linen
With delicate traditional pattern texture
Fabric has a soft luster and translucent feel

Accessories (Simple Oriental Style):

Exquisite Oriental earrings (jade, pearl, or metal carving, such as the crystal earrings in Reference Image 1)
Optional simple bracelet or ring
Hair accessories (hairpin or ribbon, if using a braided style)

Props:

Transparent floral bag (containing fresh flowers, combining modern elements with nature)
Or other props conforming to the scene's Oriental aesthetic

Scene Setting (Complete reference to Reference Image 2):
Environmental Elements:
Ground Layer (Lower Part):

Ground covered with golden yellow ginkgo fallen leaves
Old stone steps (with traces of time, moss, or weathering effect)
Scattered ginkgo leaves form a natural foreground layer

Architecture Layer (Middle Background):

Dark red wooden traditional building wall or porch
Dark tone treatment (deep brown, dark red, or near black)
Visible traditional wooden structure, carvings, or door and window details
Forming a strong light-dark contrast background

Canopy Layer (Upper Part):

Dense golden yellow ginkgo tree canopy
Naturally hanging down from the top of the frame, forming a "frame" effect
Leaves are rich in layers, light scattering through the leaves

Optional Elements:

Text identification can be added to the top of the frame (such as "上城士電影" or other Chinese identification), enhancing the cinematic feel

Lighting Design (Dramatic Cinematic Lighting):
Core Light Source: Natural light + high contrast processing
Main Light Source:

Type: Soft scattered light in autumn (Golden Hour or overcast diffused light)
Direction: Falling from above or side-above (through ginkgo leaves)
Color Temperature: Warm tone (3500K-4500K), creating an autumn warmth

Light and Shadow Processing (Key Technique):

Dark Background + Bright Subject:

Background (traditional architecture) treated as dark tone (underexposed by 1-2 stops)
Character subject appropriately brightened (normal or slightly overexposed), forming a strong contrast
This light-dark contrast creates drama and cinematic feel

Edge Light/Rim Light:

Soft halo effect on the character's outline
Enhancing the separation between the character and the background

Light Quality:

Light passing through ginkgo leaves forms dappled light and shadow
Ground ginkgo leaves reflect warm-toned light
Character's face and clothing are illuminated by soft diffused light

Color System (Warm-Toned Cinematic Aesthetic):
Main Color Palette:

Dominated by warm colors: golden yellow, light apricot, warm brown, deep red, off-white
Strong light-dark contrast: bright areas (character, ginkgo leaves) vs. dark areas (architectural background)
Saturation: Moderately soft, avoiding excessive vibrancy

Color Layering:

Character Layer:

Skin Tone: Natural healthy East Asian skin tone, slightly warm-toned
Clothing: Light apricot or off-white long dress
Hair: Black (forming layers with the dark background)

Environment Layer:

Upper Part: Golden yellow ginkgo tree canopy (high brightness, high saturation)
Middle Part: Dark red wooden architecture (low brightness, low saturation)
Lower Part: Golden yellow ginkgo fallen leaves (medium brightness)

Prop Layer:

Transparent floral bag: Transparent texture + colored accents from internal flowers

Color Contrast:

Warm-cool contrast: Dark-toned architecture (leaning cool) vs. warm-toned character and ginkgo
Light-dark contrast: Dark background vs. bright subject (core of cinematic feel)
Saturation contrast: High saturation ginkgo vs. soft clothing

Technical Aesthetic (Hyper-realistic Cinematic Texture):
Photography Parameters:

Aperture: Medium aperture (f/4 - f/5.6), maintaining clarity from foreground to character, moderate background blur
Lens: Medium to medium-telephoto (50mm - 85mm)
Depth of Field Control:

Foreground (ground ginkgo leaves): Clear
Character subject: Extremely clear
Background (architecture, canopy): Moderately clear but distinct layers

Hyper-realistic Texture Presentation:

Skin Texture:

Visible pores, fine lines, and skin details
Translucency and natural sheen of skin under light

Hair Texture:

Flow and luster of each strand of hair
Texture and layers of the braid (if using a braided style)

Clothing Fabric:

Traditional pattern texture of the long dress
Wrinkles, drape, and luster of the fabric
Texture difference between silk or cotton/linen

Environmental Texture:

Vein texture and edge details of ginkgo leaves
Traces of time on stone steps (moss, weathering, cracks)
Texture and carving details of wooden architecture
Transparent texture and reflection of the transparent floral bag

Film Aesthetic:

Grain: Strong film grain (simulating 35mm or medium format film)
Color Rendering: Warm-toned rendering of Fuji Velvia or Kodak Portra
Contrast: High contrast (deep shadows, translucent highlights)
Tone Curve: S-curve, enhancing cinematic feel

Compositional Aesthetic (Cinematic Visual Language):
Vertical Composition Logic:

Top: Bottom = 1:2 (ginkgo canopy occupies about 1/3 of the top, character and ground occupy 2/3)
Golden Ratio: Character positioned near the golden ratio points of the frame

Framing Effect:

Ginkgo canopy hangs from above, forming a natural "frame"
Dark-toned architecture forms boundaries on both sides, focusing the gaze on the character

Visual Guide Lines:

Lines of the steps guide the gaze to the character
Spread of ginkgo leaves creates depth
Vertical lines of the architecture enhance frame stability

Negative Space and Breathing Room:

Dark-toned background serves as "negative space," allowing the frame to breathe
Avoiding excessive filling, maintaining a quiet atmosphere

Narrative Theme and Emotion:
Core Theme:
"New Chinese Style Autumn Zen" — the fusion of traditional architecture, natural autumn scenery, and modern improved Chinese style clothing, using cinematic light-dark contrast to create a poetic scene of "the integration of traditional aesthetics and contemporary life"
Visual Symbol Interpretation:

Ginkgo leaves: Representing the gentleness of autumn, the sedimentation of time, the cycle of life
New Chinese style long dress: Metaphor for the modern rebirth of traditional aesthetics, the contemporary expression of Oriental elegance
Dark-toned architecture + bright subject: Conveying the life concept of "seeking tranquility amidst the hustle and bustle," inner peace and strength
Sideways gaze into the distance: Symbolizing longing for the future, inner thought and contemplation

Emotional Atmosphere:

Quiet, poetic, Zen
```

## High Contrast Black and White Studio Portrait Prompt

> Sinematik, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A high resolution black and white portrait of a girl wearing a sharp black turtle neck and chic small gold earrings along with Korean bun. She stands confidently in minimal studio setting slightly to the side dramatic studio lighting creates bold geometric shadows on her face and background strong cross beams of light. Cut through the shadows her expression is calm introspective and slightly distant the image has cinematic, high quality nor tone with high contrast and fine detail on her face and suits texture soft brokeh background portrait (9:16) 8K resolution
```

## Intimate Fashion Portrait at a Luxury Pool Edge

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_type": "Lifestyle Photography, Intimate Fashion Portraiture",
  "meta": {
    "aspect_ratio": "4:3",
    "quality": "Cinematic, UHD 8K, Professional Studio Quality",
    "camera": "Full-Frame DSLR/Mirrorless Camera (e.g., Sony A1, Canon R5)",
    "resolution": "16K, Ultra High Definition (UHD)",
    "lens": "Mid-Telephoto Prime Lens (85mm to 105mm)",
    "style": "Hyperrealistic Photography, Cinematic Glamour, High Fashion Magazine Aesthetic"
  },
  "scene": {
    "location": "Edge of a modern outdoor swimming pool or hot tub",
    "environment": "Minimalist luxury architecture, wide border made of matte light-gray concrete or stone, subtle dark green foliage in the background",
    "time": "Late Golden Hour / Dusk (Dämmerung)",
    "atmosphere": "Intimate, sensual, warm, tranquil, affluent"
  },
  "camera_perspective": {
    "pov": "Medium Shot (from waist/chest to mid-thigh)",
    "angle": "Slightly Elevated/High Angle (from the pool's edge viewpoint)",
    "framing": "Tight, Harmonic Composition, focused on subject interaction",
    "lens_effect": "Ultra-Shallow Depth of Field (DoF), extreme creamy soft bokeh (f/2.0)",
    "focus_priority": "Razor-sharp focus on faces and the interaction zone (hand on waist)"
  },
  "subject": {
    "gender": "Female",
    "age": "Early 20s to Mid 20s",
    "ethnicity": "Photogenic, emphasis on deep tan",
    "body": {
      "type": "Athletic, toned, sleek",
      "waist": "Slim",
      "chest": "Defined décolletage (right subject)",
      "hips": "Defined",
      "ass": "Accentuated contour (left subject)",
      "skin": "Deeply tanned, flawless but hyper-detailed texture, subtle sheen of bronzing oil"
    },
    "pose": {
      "position": "Sitting on the wide pool coping/edge, facing inwards",
      "stance": "Harmonic V-composition",
      "upper_body": "Left Subject: Defined back and profile. Right Subject: Three-quarter profile and full décolletage.",
      "lower_body": "Legs submerged or dangling slightly above water",
      "legs": "Toned",
      "arms": "Left subject's left hand rests gently on the right subject's waist, lightly pulling the corset laces.",
      "shoulders": "Off-the-shoulder, defined contours visible via rim light",
      "energy": "Intimate, tender, flirtatious"
    },
    "expression": {
      "eyes": "Intense, familiar eye contact between subjects",
      "gaze": "Direct and intimate",
      "mouth": "Subtle, light, coquettish smile/smirk",
      "face_vibe": "Radiant, natural makeup, healthy glow"
    },
    "hair": {
      "color": "Left: {argument name="left subject hair color" default="Bright Platinum Blonde"}. Right: Warm Honey Blonde with highlights.",
      "style": "Wavy, slightly tousled, high ponytail on both",
      "behavior": "Slightly damp/messy"
    },
    "outfit": {
      "top": {
        "type": "Two-piece swimsuit/loungewear crop tops",
        "pattern": "Solid",
        "colors": [
          "Pure White",
          "Bright White"
        ],
        "fabric": "Fine ribbed str"
    }
  }
}
```

## Tactile Wax Seal Logos

> Minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Tactile wax seal logos
```

## Extreme Top-Down Skyscraper Edge Portrait Prompt

> Sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "Cinematic film still, **extreme top-down MEDIUM shot**. The woman is positioned at the center of the frame, **looking directly up into the camera lens with intense eye contact**. Her figure is prominent and fills a significant portion of the frame. **Replicate the exact hairstyle, clothing, and accessories from the reference image faithfully.** She is sitting on the edge of the tallest skyscraper. The rooftop environment features rough concrete textures and chaotic steel structures. Far below, the blurred city buildings create a dizzying urban vertigo mood. **Dramatic warm natural daylight, high contrast, with sunlight reflecting in her eyes.** Muted industrial tones with visible film grain, Kodak Portra 800 aesthetic. Ultra-detailed, sharp focus on her face and eyes, 8K realism. --ar 3:4",
  "negative_prompt": "looking away, eyes closed, looking down, wide shot, tiny subject, person too small, changing hairstyle, different clothing, low quality, distorted face",
  "style": "high-fashion editorial, cinematic film still, analog film aesthetic",
  "camera": "Top-down medium shot, looking directly up at camera",
  "aspect_ratio": "3:4",
  "lighting": "natural daylight, high contrast, catchlights in eyes"
}
```

## Hyper-Photorealistic Greek Portrait Prompt (Golden Hour)

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_type": "Professional RAW Color Photograph",
  "shot": "Medium Close-up (MCU)",
  "shot_details": "High Dynamic Range (HDR) portraiture, hyper-detailed textural fidelity, studio quality lighting setup",
  "style": "Hyper-Photorealistic Cinematic Portraiture, Octane Render, Ray Tracing",
  "quality": "32k resolution, UHD, extreme textural detail, professional gallery quality",
  "color_grade": "Warm, highly saturated Cycladic palette, stark contrast between radiant white and deep Aegean blue, golden hour luminosity, High Dynamic Range (HDR)",
  "meta": {
    "resolution": "32k UHD"
  },
  "camera": {
    "device": "{argument name="camera device" default="Sony a7 R V"} Mirrorless Full-Frame Camera",
    "lens": "85mm prime lens",
    "aperture": "f/1.4 (Wide Open)",
    "angle": "Eye-level shot (Eye-level angle)",
    "framing": "Medium Close-up (Head and shoulders to mid-chest)",
    "pov": "Direct, centered perspective",
    "focus": "Precise, tack-sharp focus locked specifically on the subject's pupils",
    "lens_effect": "Extreme Shallow Depth of Field (DoF), creamy bokeh background, subtle atmospheric haze, subtle organic film grain"
  },
  "lighting": {
    "description": "Dramatic cinematic volumetric backlighting and fill",
    "type": "Natural Daylight, Golden Hour",
    "source": "Low, warm sun positioned behind the subject",
    "primary": "Intense Golden Hour Backlight",
    "secondary": "Soft, reflective fill light bouncing off the brilliant white Cycladic stone architecture onto the face",
    "highlights": "Luminous, saturated golden rim lighting defining hair and shoulders",
    "shadows": "Deep, but soft shadows characteristic of high-end portrait fill"
  },
  "scene": {
    "location": "{argument name="location" default="Santorini, Greece"} (Cycladic Islands)",
    "environment": "Exterior, worn steps of a traditional, bright whitewashed Cycladic stone building",
    "time": "Late afternoon (Golden Hour)",
    "atmosphere": "Clear warm summer day, subtle atmospheric heat haze softening the distant sea"
  },
  "subject": {
    "gender": "Female",
    "age": "Mid 20s to Early 30s",
    "ethnicity": "Greek/Hellenic (Mediterranean)",
    "appearance": "Strikingly beautiful, natural, petite features",
    "body": {
      "type": "Slender, petite",
      "chest": "Subtle, elegant cleavage visible"
    },
    "expression": {
      "gaze": "Directly into the camera, engaging",
      "mouth": "Warm, authentic, genuine smile radiating joy",
      "face_vibe": "Relaxed, serene, joyful"
    },
    "pose": {
      "description": "Natural, relaxed standing posture, head slightly tilted towards the camera",
      "energy": "Engaging and inviting"
    }
  },
  "wardrobe": "Authentic Traditional Hellenic Peplos and Himation attire",
  "outfit_details": {
    "top": {
      "type": "Peplos (draped tunic)",
      "color": "Pure white (linen/muslin)",
      "details": "Richly textured fabric, elegant, intricate draping securing the chiton over the shoulder, de"
```

## Cinematic Winter Fashion Prompt (Sophie Rain Likeness)

> Sinematik, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_generation_request": {
    "aspect_ratio": "3:4",
    "style": "Cinematic Close-up Fashion Photography",
    "quality": "8K / Ultra-High Detail",
    "subject": {
      "identity": "Young adult woman, {argument name="subject likeness" default="Sophie Rain"}-inspired likeness",
      "pose": {
        "description": "Dynamic balletic stance, spontaneous and joyful",
        "position": "Balancing on one leg, other leg bent and lifted high, body slightly tilted",
        "arms": "One arm raised catching snowflakes with open palm, other arm following the flow of movement"
      },
      "expression": {
        "mood": "Genuinely happy and lively",
        "features": "Wide natural smile, slightly parted lips, eyes sparkling with emotion, cheeks flushed from cold"
      },
      "physical_details": {
        "skin": "Realistic texture, fine pores, subtle asymmetry, soft highlights, no plastic smoothing",
        "hair": "Long blonde hair flowing from beanie, damp strands clinging to cheeks/forehead from melting snow"
      }
    },
    "apparel": {
      "theme": "Monochrome Red-white winter look",
      "layers": [
        {
          "item": "Oversized open puffer jacket",
          "details": "Thick creamy-white, fluffy texture, visible stitching, realistic down volume and compression folds"
        },
        {
          "item": "Cropped hoodie",
          "details": "Glossy red latex with V deep cleavage making visible her big bust, gentle wrinkles, worn underneath jacket"
        },
        {
          "item": "High-waisted red latex leggings,
          "details": "Glossy stretch fabric, cremisi-red, subtle tension at knees and hips"
        }
      ],
      "accessories": [
        {
          "item": "Knit beanie",
          "details": "Extra-fluffy, visible yarn texture, red"
        },
        {
          "item": "Mittens",
          "details": "Long creamy-white fluffy fibers, catching falling snowflakes"
        }
      ],
      "footwear": {
        "style": "Pink Moon-boot inspired lace-up winter boots",
        "details": "White fur-lined, realistic rubber soles, snow buildup around the edges"
      }
    },
    "environment": {
      "setting": "Nighttime exterior of a modern luxury building hotel in {argument name="location" default="zermatt"}",
      "architecture": "Sharp geometric wood with triangular patterns",
      "props": "Luxury green lime Lamborghini Urus SUV with red alloy wheels parked nearby, partially covered in frost and snow",
      "ground": "Thick uneven snow blanket with visible footprints and compression points",
      "weather": "Heavy dense snowfall, large snowflakes frozen in mid-motion with slight blur"
    },
    "lighting_and_atmosphere": {
      "primary_lighting": "Cold blue-white ambient winter light",
      "secondary_lighting": "Warm orange glow from building interior/windows",
      "visual_effects": [
        "Cinematic color separation",
        "Soft bokeh highlights in background",
      ]
```

## Hard Flash Backless Dress Night Photo Prompt

> Fotogerçekçi afiş üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"subject": {
"description": "Young adult female with tanned, bronzed skin and long, dark brunette hair parted in the middle. She has distinct, sharp facial features including high cheekbones, a straight nose, arched eyebrows, and full, glossy lips. She is wearing a floor-length black maxi dress with very thin spaghetti straps. The dress features an extremely low, open back that exposes the entire back down to the lumbar region, revealing the spinal groove and shoulder blades.",
"anatomy_constraints": {
"body_type": "Fit but soft, realistic proportions",
"skin_texture": "High fidelity pores, slight sheen from flash, natural skin imperfections, visible mole/freckle on upper back",
"bust_volume": "Natural fullness implied by side profile visibility, gravity-affected soft tissue",
"back_details": "Visible scapula definition, distinct spinal indentation, smooth muscle tone"
}
},
"pose": {
"type": "Seated twist, looking back",
"description": "The subject is sitting on stone steps, body oriented away from the camera (posterior view). She is twisting her torso significantly to the left to look back over her left shoulder directly at the lens. Her back is arched, accentuating the curve of the spine. The left arm is resting on the leg/knee area (mostly obscured), and the right arm is relaxed. The neck is turned sharply to maintain eye contact.",
"alignment": "Head turned left, eyes locked on camera, chin slightly lowered"
},
"environment": {
"setting": "Outdoors at night, residential or garden staircase",
"elements": [
"Beige/light grey stone steps with dark grout lines",
"Low stone retaining wall",
"Dark green leafy bushes and hedging in the immediate background",
"Night sky (implied dark void)"
]
},
"camera": {
"shot_type": "Medium shot, slightly high angle",
"perspective": "Looking down at the subject, close proximity",
"focal_length": "35mm to 50mm equivalent",
"depth_of_field": "Deep enough to keep face and back in focus, slight fall-off in background foliage"
},
"lighting": {
"type": "Direct on-camera flash (hard flash photography)",
"characteristics": [
"High contrast",
"Sharp, defined shadows cast on the wall behind the subject",
"Bright specular highlights on the shoulder, cheekbone, tip of nose, and forehead",
"Reflective sheen on the skin due to flash intensity",
"Vignetting at the edges due to flash fall-off"
]
},
"mood_and_expression": {
"mood": "Alluring, mysterious, confident, nightlife aesthetic",
"expression": "Sultry, neutral to slightly parted lips, intense direct gaze",
"eye_contact": "Direct, piercing"
},
"style_and_realism": {
"style": "Flash photography, paparazzi style, candid social media aesthetic, raw realism",
"fidelity": "Photorealistic, unpolished texture, high ISO noise simulation"
},
"colors_and_tone": {
"palette": [
"Deep blacks (dress, background shadows)",
"Warm bronzed skin tones",
"Beige/cream stone colors",
"Deep forest greens (foliage)"
],
"tonality": "Warm ski"
```

## Red Carpet Juxtaposition Prompt: Margot Robbie as Wednesday and Jenna Ortega as Barbie

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A glamorous luxury red carpet event at night, photographers and soft flashes in the background, velvet ropes, polished marble flooring, and warm ambient lights reflecting off metallic surfaces. Two famous actresses pose side by side for the cameras, captured in a casual red-carpet photography style, natural and candid rather than staged.

{argument name="actress 1 name" default="Margot Robbie"} (left):
She is wearing a dark gothic black dress inspired by Wednesday’s outfit—a fitted black gown with sheer long sleeves, high neckline with subtle ruffle detailing, corset-like structure, and elegant Victorian undertones. The fabric is matte black with delicate transparency on the sleeves. Her styling is dreadful and intense, with a cold, piercing gaze, minimal expression, pale makeup, dark eye emphasis, and a restrained, ominous presence. Her posture is rigid and composed, radiating quiet menace and confidence.

{argument name="actress 2 name" default="Jenna Ortega"} (right):
She is dressed in Barbie-inspired clothing, wearing a bright pink gingham-style dress with a cinched waist, playful silhouette, and soft, feminine detailing. The look is cheerful and vibrant, paired with light makeup, glossy lips, and a warm smile. Her body language is open and joyful, slightly angled toward the cameras, embodying optimism and charm.

The contrast between the two is striking: dark vs bright, dreadful vs cheerful, gothic elegance vs playful glamour.

Lighting is natural red-carpet flash mixed with warm ambient lights, realistic skin texture, subtle motion blur from photographers, shallow depth of field isolating the subjects. The image feels like an authentic celebrity moment captured between poses.

Aspect ratio: 3:4

Style & Mood

High-end red carpet, cinematic contrast, fashion juxtaposition, casual celebrity photography, modern pop-culture crossover.

Photography Details

Eye-level angle, candid stance, 35mm lens look, realistic flash lighting, photorealistic, editorial but natural.
Negative Prompt

Over-posed studio look, exaggerated expressions, cartoon style, harsh shadows, costume exaggeration, low resolution, distorted faces.
```

## Mugshot Portrait with Custom Slate Text Prompt

> Sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"parameters": {    
 "aspect_ratio": "2:3",    
 "version": "6.0",     
"style_type": "Realistic photograph, cinematic lighting, high detail, gritty texture" 
  },  
 "subject_description": {     
"demographics": "Beautiful young woman, fair skin.",     "hair": "Dark long length black hair, some strands falling over her forehead.",     
"details": "Some smudges of black soot and dirt on her face, neck, and hand (not in much amount)."  
 },  
 "attire": {     "outerwear": "Bright orange prisoner jumpsuit (boiler suit), slightly oversized. Distressed and dirty, covered in black soot stains.",     
"details": 
"The number '000' is printed in large black font on the right side of the chest.",    
 "under_layer": "Grey crew-neck t-shirt visible underneath.",    
 "accessories": "Silver rings on fingers."   },   "pose_and_expression":
 {     
"stance": "Standing in a mugshot lineup stance. Making direct eye contact with the camera.", 
    "expression": "Deadpan, serious, nonchalant, looking unimpressed or bored.",     
"right_hand_action": "Raised casually, fingers touching the hair behind her right ear/neck area.",     "left_hand_action": 
"Holding a black and white clapperboard/slate in front of her chest."  
 },
  "props": {     "slate_board_content": {      
 "main_text": "🚫 ARRESTED 🚫 For illegally {argument name="crime description" default="Money"}",       "date": "{argument name="date" default="12-28 25-26"}"    
 } 
  }, 
  "environment":
 {   
  "setting": "A gritty, dilapidated room. The wall behind is peeling, cracked, and textured, resembling an abandoned concrete building or a ruined police station.",    
 "background_elements": [      
 "Height chart on the wall.",       "The word 'POLCIE' written at the top left of the wall."   
  ] 
  } 
}
```

## Cyberpunk Neon Alley Fashion Portrait Prompt

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene_overview": {
    "setting": "Narrow urban alley at night",
    "environment": "Rainy, wet ground with reflective puddles",
    "atmosphere": "Cyberpunk, futuristic, neon-lit, moody and cinematic"
  },
  "primary_subject": {
    "type": "Human female",
    "pose": "Standing and leaning slightly against a graffiti-covered wall",
    "expression": "Calm, confident, slightly serious",
    "gaze": "Directly facing the camera",
    "emotion": "Cool, composed, futuristic elegance"
  },
  "appearance": {
    "hair": {
      "color": "Icy blue with silver tones",
      "style": "Wavy, shoulder-length, softly tousled"
    },
    "skin_tone": "Fair with smooth complexion",
    "makeup": {
      "style": "Minimal yet sharp",
      "details": "Defined eyes, natural lips"
    },
    "accessories": {
      "earrings": "Long, dangling metallic earrings"
    }
  },
  "clothing": {
    "outfit_type": "Full-body futuristic jumpsuit",
    "material": "Glossy, holographic, translucent vinyl-like fabric",
    "color_palette": [
      "Iridescent blue",
      "Pink",
      "Purple",
      "Silver reflections"
    ],
    "design_details": {
      "collar": "High-neck, mandarin-style",
      "closures": "Decorative frog-button style fasteners",
      "fit": "Form-fitting, sleek silhouette"
    }
  },
  "secondary_subject": {
    "type": "Cat illustration / mural",
    "location": "Painted on the wall beside the woman",
    "style": "Neon-outline graffiti",
    "color": {
      "fur": "White with soft blue glow",
      "eyes": "Bright cyan",
      "outline": "Electric neon blue"
    },
    "expression": "Alert and calm",
    "effect": "Appears semi-holographic due to glow"
  },
  "lighting": {
    "primary_light": "Neon signage glow from background",
    "secondary_light": "Soft ambient reflections from wet ground",
    "color_temperature": [
      "Cool blue",
      "Teal",
      "Pink highlights"
    ],
    "effects": [
      "Glow",
      "Reflections",
      "Soft bokeh"
    ]
  },
  "background": {
    "elements": [
      "Out-of-focus neon signs",
      "Urban walls with layered graffiti",
      "Rain streaks"
    ],
    "depth_of_field": "Shallow, strong background blur",
    "perspective": "Street-level, cinematic framing"
  },
  "art_style": {
    "genre": "Cyberpunk fashion photography",
    "influences": [
      "Futuristic street fashion",
      "Neo-noir",
      "Sci-fi urban aesthetic"
    ],
    "mood": "Stylish, mysterious, futuristic"
  },
  "camera_details": {
    "shot_type": "Medium-full portrait",
    "angle": "Eye-level",
    "focus": "Sharp on subject, blurred background",
    "lens_effects": [
      "Bokeh",
      "Light bloom"
    ]
  },
  "color_palette_overall": {
    "dominant_colors": [
      "Neon blue",
      "Iridescent cyan",
      "Purple",
      "Pink"
    ],
    "contrast": "High contrast between subject and background"
  },
  "prompt_tags": [
    "cyberpunk",
  ]
```

## Fashion Portrait with Puss in Boots 3D Character

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A relaxed, premium fashion portrait in a studio setting. A real human model with a confident, charming smile and a preserved face rests an arm naturally on the shoulder of a true human scale photorealistic 3D animated character, {argument name="animated character" default="Puss in Boots"}. The human wears an oatmeal beige knitted sweater, high-waisted dark jeans, and clean white sneakers. {argument name="animated character" default="Puss in Boots"}, rendered with highly realistic ginger fur texture, expressive large eyes, and his signature leather hat, boots, and belt, stands with a suave, confident posture. The background is a clean warm taupe or neutral studio backdrop. Soft studio lighting with subtle rim light enhances the detailed fur texture and creates a natural chemistry between the subjects. 3/4 framing, high-end fashion editorial.
```

## Luxury Hotel Fashion Portrait Prompt with Kuromi Clip

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the same face from the reference image without changing any facial features.

A photorealistic fashion portrait of a beautiful young western woman with fair skin and long ginger-blonde hair styled in a voluminous messy updo bun. She has large light blue-green eyes, dramatic long eyelashes, sharp winged eyeliner, and glossy pink-peach lips. She wears a tiny black {argument name="hair clip brand" default="Kuromi"} hair clip with purple accents, a delicate crescent moon tattoo on her upper chest, and a small heart-shaped pendant necklace.

She is dressed in a tight off-shoulder dusty-rose pink velvet minidress with a ruched twisted bust, very low neckline, deep cleavage, short puff sleeves, fisnhets, and a form-fitting bodycon silhouette. She poses sensually with one hand gently touching her neck and cheek, looking slightly upward with a dreamy, seductive expression.

The scene is set in {argument name="hotel name" default="burj al arab"} luxury hotel bedroom with dark walls, subtle mirror reflections, soft fog in the air, and warm cinematic lighting with golden rim light. Shallow depth of field, soft bokeh background, ultra-detailed realistic skin texture, high-end makeup, sharp focus, shot on an 85mm lens, RAW photo, 8k quality.
```

## Ultra-Realistic 3D Automotive Brand Render

> Fotogerçekçi, sinematik logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
An ultra-realistic, high-fidelity 3D render of the word [{argument name="car brand name" default="CAR_BRAND"}] crafted using the brand’s exact official typography, seamlessly integrated into a symbolic environment that authentically reflects the heritage, engineering ethos, and cultural identity of [{argument name="car brand name" default="CAR_BRAND"}]. Centered in the scene is a photorealistic, production-accurate vehicle from [{argument name="car brand name" default="CAR_BRAND"}] — instantly recognizable and meticulously detailed down to badges, grilles, and wheel design. The setting is grounded in reality, with natural lighting, accurate weather conditions, and physically based materials. Top-right corner: the official [{argument name="car brand name" default="CAR_BRAND"}] logo, cleanly overlaid with subtle transparency. Rendered with cinematic depth of field, ray-traced reflections, and studio-grade realism indistinguishable from a professional automotive photograph.
```

## Cinematic Cyberpunk Portrait with Split Neon Lighting

> Sinematik, minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"image_type": "studio portrait",
"composition": {
"framing": "tight head-and-shoulders close-up",
"camera_angle": "eye-level",
"orientation": "vertical",
"symmetry": "near-perfect central symmetry",
"focus": "sharp focus on eyes and facial features",
"depth_of_field": "shallow, background fully blurred to black"
},
"subject": {
"pose": "frontal, facing camera directly",
"expression": "calm, confident, intense gaze",
"eye_direction": "looking straight into lens",
"facial_features": {
"skin_texture": "visible pores and fine lines, realistic skin detail",
"eyes": "light-colored eyes emphasized by catchlights"
},
"hair": {
"style": "medium-length, brushed back",
"texture": "natural, slightly tousled",
"color": "dark brown with subtle gray highlights"
}
},
"wardrobe": {
"top": "white crew-neck t-shirt",
"outerwear": "dark jacket or coat with soft texture",
"accessories": "thin chain necklace partially visible"
},
"lighting": {
"style": "cinematic, high-contrast neon lighting",
"key_light": {
"position": "front-left",
"color": "{argument name="key light color" default="cool cyan/blue"}",
"effect": "dominant illumination across face and torso"
},
"rim_light": {
"position": "rear-right",
"color": "{argument name="rim light color" default="saturated red/magenta"}",
"effect": "strong edge highlight on hair and face contour"
},
"fill_light": "minimal to none",
"contrast_level": "high",
"mood": "dramatic, futuristic, intense"
},
"color_palette": {
"dominant_colors": ["cyan blue", "deep red", "black"],
"color_temperature": "mixed cool and warm neon tones",
"saturation": "high saturation on lighting, neutral clothing tones",
"color_grading": "stylized cyberpunk-inspired grading"
},
"background": {
"environment": "studio",
"details": "pure black background with no visible texture or objects",
"separation": "strong subject-background separation via rim lighting"
},
"technical_details": {
"camera_style": "professional studio photography",
"lens_effect": "slight compression typical of portrait lens",
"estimated_focal_length": "85mm equivalent",
"image_sharpness": "high",
"noise": "minimal",
"dynamic_range": "controlled highlights with deep shadows"
},
"artistic_style": {
"genre": "cinematic portrait",
"influences": ["cyberpunk", "neo-noir", "editorial fashion"],
"visual_aesthetic": "bold, modern, high-impact",
"post_processing": {
"skin_retouching": "subtle, realistic",
"color_enhancement": "strong split-toning blue/red",
"clarity": "enhanced micro-contrast"
}
},
"overall_impression": {
"tone": "powerful and enigmatic",
"intended_use": "editorial, album cover, cinematic poster, AI style reference",
"style_recreation_keywords": [
"cinematic neon portrait",
"blue and red split lighting",
"black background",
"intense direct gaze",
"cyberpunk color grading",
"high-contrast studio lighting"
]
}
}
```

## Low-Angle Streetwear Portrait with Architectural Text

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create an ultra-realistic portrait using the uploaded photos, keeping my face perfectly accurate with no changes to structure or expression.
I’m standing in a modern studio, leaning casually against a large white sculptural installation of the text “{argument name="year text" default="2026"}” arranged vertically, with each letter stacked upward like a tall architectural totem. The sculpture is the same height as me so the composition feels balanced and powerful. I’m leaning one shoulder lightly against the vertical “{argument name="year text" default="2026"}” structure.
My body faces slightly to the side with most of my weight resting on one leg in a relaxed, confident stance. Both hands rest comfortably inside my cargo pockets. My head tilts a little as I look calmly toward the camera
I’m wearing an oversized NIKE  WHITE t-shirt. I’ve paired it with black OVERSIZED cargo pants and clean white NIKE AIR FORCE sneakers with visible laces and defined soles. I’m also wearing black gradient sunglasses.
The shot is taken from a low angle to boost presence and make the vertical {argument name="year text" default="2026"} sculpture feel bold and architectural beside me.
Lighting is controlled and directional, creating soft shadows across the sculpture and subtle highlights on my face and outfit. The backdrop is a clean dark grey studio background with crisp white details.
The camera look matches an 85mm portrait lens for cinematic depth, gentle compression, and natural proportions.
The final mood is modern, editorial, and confident, blending streetwear presence with architectural design in a striking low-angle portrait.
```

## Nightlife Collage Prompt (Sadie Sink Likeness)

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene_type": "nightlife_lifestyle",
  "setting": {
    "location": "outdoor restaurant or lounge patio",
    "time": "night",
    "environment": "urban, intimate, upscale",
    "lighting": "warm ambient lighting from patio heaters and string lights"
  },
  "composition": {
    "format": "four-image collage",
    "layout": "2x2 grid",
    "continuity": "same subject, outfit, and location across all frames"
  },
  "subject": {
    "type": "person",
    "appearance": {
      "hair": {
        "color": "blonde",
        "length": "long",
        "style": "loose, softly waved"
      }
    },
    "clothing": {
      "outerwear": "White leather jacket",
      "top": "White cut-out hot crop top",
      "bottom": "White fitted mini skirt"
    },
    "expressions": [
      "confident",
      "relaxed",
      "contemplative",
      "posed"
    ],
    "poses": [
      "standing with wine glass",
      "seated holding wine glass",
      "leaning with hands near waist",
      "resting chin on hand"
    ]
  },
  "objects": [
    {
      "type": "wine_glass",
      "content": "red wine",
      "held": true
    },
    {
      "type": "patio_heater",
      "description": "tall outdoor gas heater emitting warm light"
    },
    {
      "type": "met"
```

## Avant-Garde Streetwear and Vintage Auto Prompt

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "concept": "Avant-Garde Streetwear & Vintage Auto",
  "visual_elements": "Woman in architectural blazer and metallic boots, leaning on a matte black vintage sports car, sunset reflections",
  "style": "Vogue editorial, cinematic lighting, 35mm film grain, hyper-realistic",
  "ar": "--ar 4:5"
}
```

## Paparazzi Flash Crowd Scene Prompt (Identity Preservation)

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "A hyper-realistic, ultra-detailed 8K cinematic photograph captured from a high-angle perspective using a wide-angle lens, looking directly downward into a dense, almost circular crowd, creating a strong sense of enclosure and spotlight focus.\
\
At the center stands a confident man wearing a dark tailored suit with a dark collared shirt and round sunglasses. Use the uploaded face strictly as reference to preserve the exact identity and facial features. His right hand is raised toward the camera with the palm facing outward in a clear 'stop' or 'talk to the hand' gesture, conveying authority and control.\
\
He is completely surrounded by a tightly packed crowd of smiling women, forming a near-perfect circle around him. The women are dressed in dark, elegant, or subtly shimmering evening attire. Their faces and shoulders densely fill the mid-ground, many looking toward the central man or directly at the camera, enhancing the sense of attention and chaos.\
\
In the immediate foreground at the bottom of the frame, multiple photographers are visible holding professional DSLR cameras equipped with large external flash units. The flashes are actively firing, producing intense, direct frontal lighting on the central figures.\
\
Lighting and mood: Dramatic, high-contrast paparazzi-style lighting with blown-out highlights on faces and clothing, sharp rim lighting on some figures, and deep, near-black shadows in the background. The lighting emphasizes a glamorous yet chaotic paparazzi frenzy.\
\
Visual quality: Extremely sharp focus on the main subjects, hyper-detailed textures on skin, fabric, sunglasses, and camera equipment. Cinematic color grading, realistic skin tones, shallow depth of field where appropriate, premium editorial photography aesthetic.",
  "negative_prompt": "low resolution, blur, soft focus, cartoon, illustration, CGI, distorted anatomy, extra limbs, extra fingers, washed-out colors, flat lighting, studio setup, empty background, watermark, logo, text",
  "aspect_ratio": "2:3",
  "style": "hyper-realistic cinematic",
  "lighting": "high-contrast paparazzi flash lighting",
  "camera": "DSLR, wide-angle lens, high-angle shot",
  "resolution": "8K",
  "quality": "ultra high"
}
```

## Metallic Purple Street Fashion Prompt

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_configuration": {
    "subject": {
      "demographics": "Young woman, early 20s",
      "appearance": "Platinum blonde to silver long hair worn down, fair skin, dark eyes, soft natural smile, attractive features",
      "pose": "Standing relaxed, one hand gently raised, facing camera, direct eye contact"
    },
    "apparel": {
      "outfit_type": "Two-piece matching set",
      "material": "Metallic, high-gloss, shiny purple fabric (lamé or spandex blend)",
      "top": "Cropped top with short puff sleeves, sweetheart neckline, and a front tie-knot",
      "bottom": "Ruched mini skirt in matching metallic purple",
      "accessories": "Long pink manicured nails, minimal jewelry"
    },
    "environment": {
      "location": "Outdoors",
      "background": "Textured red brick wall",
      "context": "Casual street fashion photoshoot"
    },
    "technical_details": {
      "lighting": "Bright natural sunlight (golden hour), casting side shadows against the brick wall",
      "camera": "Medium shot, eye-level, sharp focus",
      "style": "Photorealistic, 8k resolution, influencer aesthetic, high definition, vibrant colors"
    }
  }
}
```

## High-Fidelity Texture Test: Girl with Kylie Lip Kit in Snow

> Manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_generation_request": {
    "scene_description": {
      "subject": {
        "main": "A young girl",
        "action": "Applying the latest Kylie Cosmetics lip kit",
        "details": [
          "Snowflakes melting on her lashes",
          "Soft matte lips in a rosy nude shade"
        ],
        "clothing": "Pink Ralph Lauren winter jacket collar framing her face"
      },
      "setting": "Snowy alpine mountain"
    },
    "technical_enhancements": {
      "surface_and_texture": [
        "High-fidelity micro-detail",
        "Accurate material response",
        "Natural specularity",
        "Realistic micro-shadows",
        "Fine surface imperfections",
        "True-to-material depth",
        "Tactile realism"
      ],
      "rendering_rules": [
        "Add skin realism",
        "Fix any small broken details",
        "Keep original color grading"
      ],
      "exclusions": [
        "Plastic skin appearance"
      ]
    },
    "metadata": {
      "aspect_ratio": "2:3"
    }
  }
}
```

## Oversized Shirt Fashion Editorial Prompt

> Minimal, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
subject({argument name="subject type" default="muse"}, early 20s, fit hourglass figure, slim waist, full bust, toned limbs)
action(one hand gripping shirt hem, dynamic windblown pose, active body tension, candid movement moment)
appearance(long voluminous dark wavy hair blowing in wind, messy chic, milky white porcelain skin, fair glowing complexion, sultry expression, glossy lips parted, direct confident gaze, minimal makeup)
outfit(oversized white shirt worn alone, translucent silk, open front, completely unbuttoned, naturally draped, hanging loosely, fabric clinging to curves, rolled cuffs, exposing collarbone, bare legs, billowing in wind, seamless silhouette)
environment(high-end architectural sanctuary, limestone textures, beige geometric structures, vertical architectural lines, zero perspective distortion, soft serene gallery aesthetics)
lighting(soft diffused indoor light, ambient glow, front-facing face illumination, gentle depth shadows)
style(fashion lifestyle editorial portrait, medium shot, thighs up, eye-level, sharp focus, 85mm lens telephoto compression, tilt-shift aesthetic for vertical lines)
aesthetic(pure & desire, ethereal, soft sultry, high-key elegance)

ar = 2:3
[Subject] = {argument name="subject identity" default="K-pop idol"}
```

## Early 2000s Flash Photo Identity Blend Prompt

> Retro görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Raw early-2000s flash-lit photo, vintage digicam aesthetic; man and woman (keep original faces from both uploaded photos exactly, do not alter facial features in any way, no face changes even 1%) standing back to back on a sidewalk near a street corner; outfits: layered casual looks denim jacket over white tank on her, dark jacket over ribbed tank on him; pose: bodies touching lightly at the back, hands hanging loosely, heads turned slightly away from camera; expression: serious, reserved, emotionally closed; lighting: aggressive direct flash flattening the scene, strong contrast between subjects and background; background: crosswalk, street sign, faded storefronts; composition: waist-up framing, awkward crop, candid street-photo energy; visible skin texture, natural pores, harsh flash emphasizing imperfections; grain, digital artifacts, early-2000s snapshot realism.
```

## Cinematic Portrait of Man in Streetwear

> Sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic portrait of a handsome man with a short styled haircut and trimmed beard, wearing a plain {argument name="shirt color" default="brown"} t-shirt and round black sunglasses, standing in side profile against a {argument name="background" default="textured concrete wall"}, warm golden-hour sunlight, shallow depth of field, muted earthy tones, natural light, sharp focus, modern fashion photography, 35mm lens, high detail, realistic.
```

## Cinematic Macro Shot of Sizzling Cheeseburger

> Fotogerçekçi, sinematik yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A hyper-realistic, cinematic close-up of a sizzling gourmet cheeseburger. The thick, juicy beef patty features a heavy, glossy char and is blanketed in vibrant orange cheddar cheese that melts and oozes down the sides in thick, viscous streams over a toasted brioche bun. The atmosphere is dramatic and smoky, with thick wisps of white and blue steam swirling upwards, surrounded by floating bright orange sparks, glowing embers, and frozen droplets of grease suspended in the air. The lighting is high-contrast and dramatic against a deep black background, emphasizing the glistening textures. Shot with a macro lens, shallow depth of field, and 8k resolution commercial food photography style.
```

## Analog Film Lifestyle Portrait on Bed

> Sinematik, retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic editorial lifestyle photograph with an analog film aesthetic, featuring [{argument name="subject name" default="Ana de Armas"}]. She is lying prone on a bed in a cozy, intimate bedroom, evoking nostalgic indie music and early-2000s editorial vibes. She has fair skin, soft yet expressive facial features, natural makeup with subtle emphasis on the eyes and lips, and medium-length auburn hair with loose layers and a slightly tousled, effortless texture. Her expression is calm, introspective, and gently alluring, looking directly into the camera.
She wears a fitted white cotton tank top and mid-rise blue denim shorts, styled casually and naturally, paired with white mid-calf socks featuring small black graphic details. Black over-ear headphones rest on her head. Her upper body is supported by her elbows; one hand lightly touches her lips, while the other holds a small 7-inch vinyl record close to her face. Her legs are bent upward behind her and softly crossed, forming a relaxed S-curve posture.
The bed is covered with white bedding that fills most of the frame as negative space. Scattered organically around her are multiple vinyl records, record sleeves, a black notebook covered in stickers, and small music accessories, arranged in an unstructured editorial layout. A wooden headboard and bedside table appear softly in the background.
Shot from a slightly elevated angle at close range, creating intimacy. Warm indoor lighting, soft shadows, low contrast, natural color palette with warm whites, skin tones, denim blue, and deep vinyl black. Subtle film grain, tactile textures, asymmetrical composition, editorial magazine photography, authentic indie bedroom culture, nostalgic and emotionally immersive mood.
```

## Micro Diorama of Chefs Building a French Patisserie

> Fotogerçekçi, lüks yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Micro diorama photography, miniature world concept:

Tiny gourmet chefs wearing adorable miniature chef uniforms - toque blanche hats, striped aprons, tiny cooking utensils, embroidered kitchen towels

The characters are building a miniature French patisserie on top of a multi-layered mille-feuille dessert, featuring:
- A miniature chocolate fountain with tiny droplets cascading
- Miniature Éclair and Macaron towers, arranged artfully
- Small glowing sugar sculptures emitting magical sparkle effects
- Delicate spun sugar strands connecting between sculptures and decorations, warm twinkling glow
- Flaky pastry layers resembling mountain ranges
- Miniature chairs and tiny crystal glasses

Multiple chefs visible in different poses - some whisking tiny creams, some arranging macarons, some pouring chocolate

Background: dreamy French countryside with lavender fields, soft bokeh effect

Lighting: soft golden warm light, magical patisserie atmosphere, gentle rim lighting on characters

Style: hyper-realistic miniature photography, tilt-shift effect, shallow depth of field, macro lens perspective, whimsical and heartwarming mood --ar 1:1. A stylish handwritten signature "Étoile" is elegantly and small letters placed at the Bottom Right corner.. A stylish handwritten signature Willy is elegantly and small letters placed at the Bottom Right corner.
```

## Hyper-Realistic Candid Shopping Photo with Identity Lock

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_generation_prompt",
  "style": "ultra-realistic lifestyle photography, cinematic yet natural",
  "aspect_ratio": "3:4",
  "identity_preservation": {
    "use_reference_image": true,
    "strict_identity_lock": true,
    "alter_face": false,
    "alter_proportions": false,
    "notes": "Strict adherence to the facial reference photo. Preserve exact facial features, proportions, skin texture, and natural expression."
  },
  "environment": {
    "location": "modern premium supermarket",
    "layout": "wide aisle with fully stocked shelves on both sides",
    "details": [
      "realistic product packaging",
      "clean organized shelves",
      "premium market atmosphere"
    ]
  },
  "subject": {
    "gender": "female",
    "body_type": "fit, natural physique",
    "pose": {
      "action": "walking naturally between shelves",
      "hands": {
        "left": "casually holding a shopping basket",
        "right": "reaching toward a product on the shelf"
      }
    },
    "expression": "relaxed, confident, candid",
    "wardrobe": {
      "top": "clean white t-shirt",
      "bottom": "fitted blue jeans",
      "footwear": "minimal white sneakers"
    }
  },
  "lighting": {
    "type": "soft overhead supermarket lighting",
    "effects": [
      "realistic reflections on product packaging",
      "true-to-life color rendering",
      "natural skin tones"
    ]
  },
  "camera": {
    "shot_type": "full-body",
    "distance": "slight distance",
    "angle": "eye-level",
    "depth_of_field": "shallow depth of field with foreground sharp and background shelves slightly blurred",
    "quality": "photographic realism"
  },
  "quality": {
    "realism": "maximum realism",
    "details": "high detail in clothing, skin, and environment",
    "style": "cinematic but natural, no stylization"
  },
  "constraints": [
    "No stylization",
    "No distortion",
    "No beauty filters",
    "No artificial poses",
    "No text, logos, or watermarks",
    "No exaggerated lighting"
  ],
  "output_goal": "Create a hyper-realistic, candid full-body photo of a woman shopping in a modern premium supermarket aisle, preserving her exact facial identity and proportions with a natural, cinematic photographic look."
}
```

## Vogue Editorial Fashion Shoot in NYC

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Shot on Hasselblad medium format camera, 85mm lens, f/2.8 aperture, ultra-realistic full body side profile shot of a stunning young woman in her early 20s Eurasian beauty with perfect symmetrical facial features, flawless glowing skin, sharp defined jawline, high cheekbones, large expressive almond-shaped hazel eyes with dramatic long thick eyelashes and perfect winged eyeliner, perfectly shaped arched eyebrows, full glossy nude-pink lips, subtle rosy natural blush, long flowing wavy auburn hair styled cascading over her shoulders, walking confidently across a busy New York City crosswalk, arm in arm with a handsome, impeccably dressed man, looking at each other with loving eyes; the man in his early 30s, Western European features, chiseled face, dark hair neatly styled, wearing a tailored dark grey suit, crisp white shirt, elegant black overcoat, and polished leather shoes; yellow taxi cabs blurred in motion behind them, towering glass skyscrapers and luxury brand storefronts in background, pedestrians in business attire walking in distance, steam rising from subway grate, autumn leaves scattered on pavement. She is wearing a luxurious oversized structured {argument name="coat color" default="camel"} Burberry wool coat with wide lapels, underneath a crisp white high-collar silk blouse with pussy bow detail, paired with tailored high-waisted charcoal gray wide-leg Gucci trousers, classic black patent leather Manolo Blahnik pointed-toe stiletto heels with red soles. Accessories include a large structured black Hermes Birkin bag in one hand, oversized black Chanel cat-eye sunglasses with gold CC logo on temples, elegant wide-brimmed black felt fedora hat tilted slightly, delicate gold Cartier love bracelet, diamond stud earrings, thin gold watch peeking from sleeve. Side angle full body shot taken from street level, dynamic walking pose with coat flowing slightly from movement, one heel lifted mid-step, confident powerful posture, Anna Wintour protégé vibes; golden hour morning light casting long shadows, cinematic color grading with slight teal and orange tones, shallow depth of field with sharp focus on subjects and soft bokeh on background traffic, photorealistic 8K resolution, highly detailed fabric textures showing cashmere weave and leather grain, editorial Vogue magazine fashion photography style, busy metropolitan atmosphere, high-end luxury fashion campaign aesthetic.. A stylish handwritten signature Willy is elegantly and small letters placed at the Bottom Right corner.
```

## Neo-Noir Cinematic Street Photography in Subway

> Sinematik, minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "model": "Nano Banana Pro",
  "scene": "Underground metro platform at night with a train rushing past",
  "subject": {
    "type": "Young woman",
    "pose": "Standing near the platform edge, body facing forward, head turned slightly toward the camera",
    "expression": "Thoughtful, distant, quietly alert",
    "gaze": "Looking sideways toward the camera, unfixed, introspective",
    "emotion": "Isolation, reflection, restrained tension"
  },
  "appearance": {
    "hair": {
      "color": "Dark brown to black",
      "style": "Loose, straight, natural fall"
    },
    "skin": "Natural complexion with soft shadows",
    "makeup": "Minimal, realistic, understated"
  },
  "attire": {
    "outerwear": "Oversized dark jacket",
    "style_note": "Functional, muted, urban anonymity"
  },
  "environment": {
    "location": "City subway platform",
    "background_elements": [
      "Blurred metro train in motion",
      "Neon signage",
      "Platform lights",
      "Wet reflective floor surface",
      "Metal railings and tiled platform edge"
    ],
    "atmosphere": "Cold, nocturnal, transient"
  },
  "lighting": {
    "primary": "Artificial fluorescent platform lighting",
    "secondary": "Neon signage glow",
    "effect": "Cool-toned highlights with soft facial shadows"
  },
  "camera": {
    "angle": "Eye-level, slightly behind the subject",
    "lens": "35mm cinematic street lens",
    "shutter_effect": "Motion blur on passing train",
    "depth_of_field": "Moderate, subject sharp with moving background blur",
    "framing": "Vertical, cinematic street composition"
  },
  "color_palette": {
    "dominant": ["teal", "cool blue", "deep black"],
    "accents": ["neon pink", "electric yellow"]
  },
  "mood": "Lonely, cinematic, suspended in time",
  "style": {
    "aesthetic": "Neo-noir street photography",
    "realism": "Photorealistic",
    "inspiration": "Urban cinema, night transit, modern solitude",
    "post_processing": "Cool cinematic grading, slight grain, high contrast shadows"
  },
  "details": {
    "motion_contrast": "Still subject against fast-moving train",
    "floor_reflections": "Wet surface reflecting neon lights",
    "sound_implied": "Rushing train, distant city hum"
  },
  "themes": [
    "Urban loneliness",
    "Waiting",
    "Movement vs stillness",
    "Anonymous city life"
  ],
  "quality": "Ultra-detailed, cinematic night street photograph with motion depth"
}
```

## High-Fashion Editorial Portrait with Dust Particles

> Minimal, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "render_goal": "High-fashion close-up editorial portrait",
  "subject": {
    "pose": "female close-up with relaxed shoulders",
    "expression": "composed elegant smile"
  },
  "wardrobe": "clean couture neckline in soft ivory",
  "environment": {
    "location": "studio with warm lighting",
    "props": "fine translucent dust particles floating gently near face"
  }
}
```

## Dreamy Double Exposure Portrait with Sunset Light

> Sinematik, retro moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic, dreamy portrait of a young woman in a black fitted dress standing at a rustic outdoor flower stand, holding a bouquet of {argument name="flower color" default="soft orange and pink"} roses. Her long dark hair is blowing gently in the wind, warm golden sunset light illuminating her face and hair. There is a subtle double-exposure / motion blur effect showing a ghosted second profile of her face behind her, creating an ethereal, surreal feeling. The background is softly blurred with greenery and wooden textures, shallow depth of field, soft bokeh, film grain, vintage cinematic color grading, warm tones, 85mm lens look, f/1.8, ultra-detailed, high realism, soft natural light, editorial fashion photography style.
```

## Ethereal Fantasy Portrait with Swans and Golden Hour Light

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Ethereal fantasy portrait of a young woman lying on grass by a dark pond, delicate porcelain skin with subtle natural glow, long flowing platinum blonde hair spread out dramatically on ground like halo, eyes gently closed in serene peace, long lashes, full soft pink lips, wearing elaborate off-white ivory lace ballgown with deep V-neck, ruffled layers, puffed sleeves, intricate floral lace details, full voluminous skirt fanning out around her, white elbow-length satin gloves, surrounded by {argument name="number of swans" default="5-6"} elegant white swans floating gracefully in shallow water, one swan close to her head, others forming a natural circle, lush green reeds and grass, dappled soft golden hour sunlight filtering through trees creating magical highlights and rim light on hair dress and swan feathers, shallow depth of field, strong dreamy cinematic bokeh on water and background, photorealistic high fashion editorial with pre-raphaelite romantic vibe, high detail lace transparency hair strands swan feathers skin pores and natural imperfections, ultra detailed, 8k resolution
```

## Shakira-Inspired Winter Fashion Dance Prompt

> Sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_generation_request": {
    "aspect_ratio": "3:4",
    "style": "Cinematic Fashion Photography",
    "quality": "8K / Ultra-High Detail",
    "subject": {
      "identity": "Young adult woman, {argument name="subject inspiration" default="Shakira-inspired likeness"}",
      "pose": {
        "description": "Dynamic balletic stance, spontaneous and joyful",
        "position": "Balancing on one leg, other leg bent and lifted high, body slightly tilted",
        "arms": "One arm raised catching snowflakes with open palm, other arm following the flow of movement"
      },
      "expression": {
        "mood": "Genuinely happy and lively",
        "features": "Wide natural smile, slightly parted lips, eyes sparkling with emotion, cheeks flushed from cold"
      },
      "physical_details": {
        "skin": "Realistic texture, fine pores, subtle asymmetry, soft highlights, no plastic smoothing",
        "hair": "Long dark hair flowing from beanie, damp strands clinging to cheeks/forehead from melting snow"
      }
    },
    "apparel": {
      "theme": "Monochrome creamy-white winter look",
      "layers": [
        {
          "item": "Oversized puffer jacket",
          "details": "Thick creamy-white, fluffy texture, visible stitching, realistic down volume and compression folds"
        },
        {
          "item": "Cropped hoodie",
          "details": "Creamy-white soft cotton, gentle wrinkles, worn underneath jacket"
        },
        {
          "item": "High-waisted leggings",
          "details": "Matte stretch fabric, creamy-white, subtle tension at knees and hips"
        }
      ],
      "accessories": [
        {
          "item": "Knit beanie",
          "details": "Extra-fluffy, visible yarn texture, creamy-white"
        },
        {
          "item": "Mittens",
          "details": "Long creamy-white fluffy fibers, catching falling snowflakes"
        }
      ],
      "footwear": {
        "style": "Moon-boot inspired lace-up winter boots",
        "details": "White fur-lined, realistic rubber soles, snow buildup around the edges"
      }
    },
    "environment": {
      "setting": "Nighttime exterior of a modern luxury building",
      "architecture": "Sharp geometric wood with triangular patterns",
      "props": "Black luxury SUV parked nearby, partially covered in frost and snow",
      "ground": "Thick uneven snow blanket with visible footprints and compression points",
      "weather": "Heavy dense snowfall, large snowflakes frozen in mid-motion with slight blur"
    },
    "lighting_and_atmosphere": {
      "primary_lighting": "Cold blue-white ambient winter light",
      "secondary_lighting": "Warm orange glow from building interior/windows",
      "visual_effects": [
        "Cinematic color separation",
        "Soft bokeh highlights in background",
        "Shallow depth of field",
        "Reflections softened by frost"
      ]
    },
    "technical_specs":"
```

## Industrial Shipping Container Streetwear Portrait Prompt

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the same face from the reference image without changing facial features 

{
  "image_description": "A high-angle, low-perspective full-body portrait of a young western woman with blonde hair sitting on the edge of a red industrial shipping container.",
  "subject": {
    "person": "Young western woman, fit build, serious expression, looking away from the camera toward the horizon.",
    "hair_style": "long blonde",
    "clothing": {
      "jacket": "Light grey quilted puffer bomber jacket with a diamond pattern.",
      "undershirt": "Plain crisp white crew-neck t-shirt.",
      "pants": "Classic medium-wash blue denim jeans, straight fit.",
      "footwear": "Clean, bright white leather low-top sneakers."
    },
    "pose": "Sitting relaxed on the edge of a metal container, legs dangling, leaning slightly back on his right hand."
  },
  "setting": {
    "location": "Industrial shipping yard or port.",
    "background_elements": [
      "Stacked corrugated red metal shipping containers.",
      "A vertical red container behind the subject creates a strong leading line.",
      "Yellow stencil lettering visible on the container beneath the subject."
    ],
    "atmosphere": "Urban, gritty yet clean, modern streetwear aesthetic."
  },
  "composition_and_lighting": {
    "camera_angle": "Low angle looking up, creating a sense of scale and height.",
    "lighting": "Natural, diffused daylight; soft shadows; overcast sky providing even illumination.",
    "color_palette": [
      "Primary: Bold industrial red",
      "Secondary: Denim blue, light grey, and crisp white",
      "Background: Muted grey/white sky"
    ],
    "lens_effects": "Deep depth of field with sharp focus on the subject and the immediate container texture."
  },
  "technical_tags": "Street photography, architectural lines, hyper-realistic, 8k resolution, cinematic lighting, industrial fashion shoot."
}
```

## Minimalist Scandinavian Editorial Portrait Series

> Minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "Objective": "Create a minimalist fashion studio portrait series with a calm, Scandinavian editorial mood",
  "PersonaDetails": {
    "Subject": {
      "Type": "Young woman",
      "Hair": "Short, softly waved dark-brown hair",
      "Accessories": "Thin round eyeglasses",
      "Expression": "Calm, introspective",
      "Skin": "Natural skin texture with minimal retouching"
    }
  },
  "Wardrobe": {
    "Top": "Chunky camel-colored knit turtleneck sweater",
    "Bottom": "Beige trousers",
    "Style": "Timeless autumn fashion"
  },
  "SceneDescription": {
    "Environment": "Minimalist studio",
    "Background": "Neutral off-white backdrop",
    "OverallFeel": "Clean, airy, understated"
  },
  "PortraitSeries": {
    "SeriesType": "Four-image set",
    "Poses": [
      {
        "Description": "Seated pose with hands gently clasped under the chin",
        "Mood": "Quiet, reflective"
      },
      {
        "Description": "Front-facing portrait with eyes lowered",
        "Mood": "Soft, contemplative"
      },
      {
        "Description": "Three-quarter side profile with arms crossed",
        "Mood": "Poised, thoughtful"
      },
      {
        "Description": "Close-up portrait with sweater sleeve raised near the face",
        "Mood": "Intimate, tactile"
      }
    ]
  },
  "Composition": {
    "Framing": "Varied framing from close-up to mid-length",
    "NegativeSpace": "Generous, balanced negative space",
    "DepthOfField": "Shallow depth of field for gentle separation"
  },
  "LightingAndColor": {
    "Lighting": "Soft, diffused studio lighting",
    "Highlights": "Subtle, natural highlights",
    "ColorPalette": "Muted warm neutrals (camel, beige, off-white)"
  },
  "ArtDirection": {
    "Style": "Scandinavian editorial photography",
    "Aesthetic": "Minimalist, timeless, understated luxury",
    "TextureEmphasis": "Knit fabric and natural skin detail"
  },
  "PhotographyStyle": {
    "Genre": "Professional fashion studio photography",
    "RealismLevel": "High realism with restrained processing",
    "Finish": "Clean, modern, magazine-ready"
  },
  "Mood": {
    "Tone": "Calm, introspective, serene",
    "SeasonalFeel": "Autumn warmth and quiet elegance"
  },
  "NegativePrompt": [
    "busy background",
    "harsh lighting",
    "bold colors",
    "heavy makeup",
    "over-retouching",
    "glossy fashion look",
    "street photography"
  ],
  "ResponseFormat": {
    "Type": "Portrait series",
    "ImageCount": 4,
    "Orientation": "Portrait",
    "AspectRatio": "2:3"
  }
}
```

## Rear-Side Bikini Portrait in Tropical Overcast

> Fotogerçekçi logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"subject": {
"description": "Young woman with a fit, curvaceous physique and tanned skin tone.",
"hair": "Long, dark chocolate brown hair, parted in the middle, falling in loose, natural waves down the back and over the left shoulder.",
"face": "Defined jawline, high cheekbones, full lips, neutral-to-soft expression, looking directly at the viewer over the left shoulder. Natural makeup look.",
"outfit": {
"garment": "Navy blue two-piece bikini.",
"top": "Spaghetti strap bikini top, structured fit, navy blue color.",
"bottom": "High-cut, cheeky bikini bottom in navy blue with a small white cross logo centered on the upper back.",
"accessories": "Pearl drop earrings with silver hardware, dark beaded bracelet on the right wrist."
},
"anatomy_constraints": {
"body_type": "Fit, hourglass figure with natural curves.",
"bust_volume": "Natural, gravity-affected volume, visible projection in profile/semi-profile.",
"skin_texture": "Realistic skin texture with natural imperfections, moles, and shading; no plastic smoothing."
}
},
"pose": {
"type": "Standing rear-side view (approx. 7 o'clock angle).",
"details": "Subject is standing with back angled towards the camera, turning head completely over the left shoulder to make direct eye contact. Body weight settled on the left leg, creating a subtle hip tilt. Right arm is relaxed straight down by the side; left arm is partially obscured by the torso. Posture is upright but relaxed.",
"orientation": "Back-to-camera, face turned to viewer."
},
"environment": {
"setting": "Outdoor tropical garden or beach edge.",
"ground": "White/beige sand with scattered dry leaves and debris.",
"background_elements": "Lush green tropical vegetation, palm fronds, ferns, and trees with hanging Spanish moss. A light brown wicker/rattan chair is visible in the background on the right side.",
"sky": "Overcast, bright white sky visible through the tree canopy."
},
"camera": {
"shot_type": "Medium shot (from mid-thigh/knees up).",
"perspective": "Eye-level, slightly low angle emphasizing stature.",
"focal_length": "50mm to 85mm equivalent (portrait lens).",
"depth_of_field": "Shallow depth of field; subject is sharp, background is softly blurred (bokeh) but distinguishable."
},
"lighting": {
"type": "Natural overcast daylight.",
"quality": "Soft, diffuse, even illumination. No harsh shadows.",
"direction": "Global diffuse light, minimal directional contrast.",
"shadows": "Soft ambient occlusion under the hair and around garment edges."
},
"mood_and_expression": {
"mood": "Relaxed, alluring, natural.",
"expression": "Calm confidence, direct gaze, slightly parted lips."
},
"style_and_realism": {
"style": "High-fidelity photorealism, candid portraiture.",
"rendering": "Unprocessed raw photo aesthetic, accurate texture rendering (fabric, skin, sand, foliage)."
},
"colors_and_tone": {
"palette": "Navy blue (swimwear), lush greens (foliage), warm tan (skin), sandy beige (ground)"}
```

## Ultra-Photorealistic Studio Portrait with Specific Attire

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "metadata": {
    "version": "2.0",
    "aspect_ratio": "3:4",
    "style": "ultra-photorealistic"
  },
  "subject": {
    "identity": {
      "base_model_reference": "{argument name="base model reference" default="Ana de Armas"}",
      "ethnicity": "East Asian",
      "age_group": "young adult",
      "skin": {
        "tone": "light",
        "texture": "natural skin pores, fine details"
      }
    },
    "features": {
      "hair": {
        "color": "dark brown/black",
        "style": "long, wavy, parted in the middle",
        "texture": "voluminous, soft shine"
      },
      "eyes": {
        "color": "brown",
        "eyewear": "black square-frame glasses",
        "gaze": "direct to camera"
      },
      "makeup": {
        "style": "natural/minimalist",
        "details": [
          "defined eyes",
          "pink lip gloss"
        ]
      }
    },
    "posture": {
      "pose": "standing, facing forward",
      "head_angle": "straight",
      "arm_placement": {
        "right": "hand resting on shirt collar",
        "left": "relaxed by side"
      },
      "expression": "neutral, confident, poised"
    }
  },
  "attire": {
    "upper_body": {
      "item": "long-sleeve button-up crop top",
      "color": "white",
      "fabric_detail": "crisp cotton"
    },
    "lower_body": {
      "item": "mini-skirt with front slit",
      "color": "tan",
      "accessories": {
        "belt": "dark brown leather",
        "buckle": "silver"
      }
    },
    "legwear": {
      "type": "thigh-high stockings",
      "opacity": "sheer",
      "color": "black"
    }
  },
  "environment": {
    "setting": "studio",
    "background": {
      "wall_color": "light beige",
      "wall_texture": "smooth plaster",
      "elements": "minimalist/none"
    },
    "lighting": {
      "type": "soft studio lighting",
      "direction": "upper right",
      "shadows": "soft drop shadow on rear wall"
    }
  },
  "camera_settings": {
    "composition": {
      "shot_type": "three-quarter portrait",
      "angle": "eye-level"
    },
    "optics": {
      "lens": "85mm prime",
      "aperture": "f/2.8",
      "focus": "sharp focus on subject",
      "depth_of_field": "shallow bokeh background"
    }
  }
}
```

## Surreal Aerial View of Giant Coffee Cup on Palm Jumeirah

> Logo üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
An aerial photograph captures a surreal scene where a giant white foam cup, branded with the '{argument name="brand name" default="SC Social Connects"}' logo from image_8.png, is placed on the central trunk of the Palm Jumeirah in Dubai. A hand holds a glass and metal coffee pot, pouring steaming coffee into the oversized cup. The Palm's fronds, marina, and Dubai's skyline are bathed in warm, golden sunset light, with long shadows and reflections on the water.
```

## Ultra-Photorealistic Studio Portrait with Fashion Details

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "metadata": {
    "version": "2.0",
    "aspect_ratio": "3:4",
    "style": "ultra-photorealistic"
  },
  "subject": {
    "identity": {
      "base_model_reference": "Ana de Armas",
      "ethnicity": "East Asian",
      "age_group": "young adult",
      "skin": {
        "tone": "light",
        "texture": "natural skin pores, fine details"
      }
    },
    "features": {
      "hair": {
        "color": "dark brown/black",
        "style": "long, wavy, parted in the middle",
        "texture": "voluminous, soft shine"
      },
      "eyes": {
        "color": "brown",
        "eyewear": "black square-frame glasses",
        "gaze": "direct to camera"
      },
      "makeup": {
        "style": "natural/minimalist",
        "details": [
          "defined eyes",
          "pink lip gloss"
        ]
      }
    },
    "posture": {
      "pose": "standing, facing forward",
      "head_angle": "straight",
      "arm_placement": {
        "right": "hand resting on shirt collar",
        "left": "relaxed by side"
      },
      "expression": "neutral, confident, poised"
    }
  },
  "attire": {
    "upper_body": {
      "item": "long-sleeve button-up crop top",
      "color": "white",
      "fabric_detail": "crisp cotton"
    },
    "lower_body": {
      "item": "mini-skirt with front slit",
      "color": "tan",
      "accessories": {
        "belt": "dark brown leather",
        "buckle": "silver"
      }
    },
    "legwear": {
      "type": "thigh-high stockings",
      "opacity": "sheer",
      "color": "black"
    }
  },
  "environment": {
    "setting": "studio",
    "background": {
      "wall_color": "light beige",
      "wall_texture": "smooth plaster",
      "elements": "minimalist/none"
    },
    "lighting": {
      "type": "soft studio lighting",
      "direction": "upper right",
      "shadows": "soft drop shadow on rear wall"
    }
  },
  "camera_settings": {
    "composition": {
      "shot_type": "three-quarter portrait",
      "angle": "eye-level"
    },
    "optics": {
      "lens": "85mm prime",
      "aperture": "f/2.8",
      "focus": "sharp focus on subject",
      "depth_of-field": "shallow bokeh background"
    }
  }
}
```

## Monochromatic Orange High-Fashion Editorial Prompt

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "project_meta": {
    "title": "Monochromatic Orange High-Fashion Editorial",
    "style": "Ultra-photorealistic, 8K, luxury magazine aesthetic",
    "mood": "Bold, glamorous, confident, seductive"
  },
  "environment": {
    "setting": "Minimalist professional studio",
    "background": "Solid seamless vibrant {argument name="color" default="orange"} backdrop and floor",
    "props": "None (clean surface)",
    "lighting": "Soft frontal key light, warm calibration, controlled shadows"
  },
  "subject": {
    "likeness": "{argument name="celebrity likeness" default="Sydney Sweeney"}-inspired (not identical)",
    "demographics": "Female, mid-20s, slim toned physique",
    "features": {
      "skin": "Natural white, glossy bronzed highlights, realistic texture",
      "hair": "Long light blonde, voluminous, side-parted",
      "face": "Soft oval, full lips, bright expressive eyes",
      "makeup": "High-glam, sculpted contour, smoky eyes, glossy nude lips"
    }
  },
  "wardrobe": {
    "dress": "Strapless mini dress, dense soft orange feather texture",
    "shoes": "Matching orange pointed-toe stilettos",
    "jewelry": "Gold hoop earrings, thin chain, stacked bangles, rings"
  },
  "technical": {
    "gear": "Full-frame DSLR, 85mm prime lens",
    "settings": "Aperture f/4, ISO 100, Shutter 1/125s",
    "focus": "Tack-sharp on subject, subtle background separation"
  },
  "composition": {
    "angles": "Eye-level to subtle low-angle",
    "framing": ["Full-body", "Three-quarter", "Tight portrait"],
    "poses": [
      "Kneeling with legs folded",
      "Seated with one knee raised",
      "Standing with hip pop",
      "Leaning back supported by hands",
      "Looking over shoulder"
    ]
  },
  "consistency_rules": {
    "fixed_elements": ["Character identity", "Feather dress", "Orange background"],
    "variable_elements": ["Pose", "Camera angle", "Framing"]
  }
}
```

## Cinematic Fitness Editorial Flex Pose Prompt

> Sinematik, minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_type":
 "athletic flex pose editorial photography",
  "visual_style": 
"high-end fitness editorial, cinematic, premium",
  "composition": {
    "framing":
 "full body, powerful stance emphasizing muscle definition",
    "camera_angle": 
"slightly low angle to enhance strength and dominance",
    "perspective": 
"cinematic perspective with strong body presence"
  },
  "subject": {
    "description": 
"athletic feminine body performing a controlled flex pose",
    "pose": 
"strong flex pose with engaged core, defined arms and legs, balanced posture",
    "body_language":
 "confident, controlled, disciplined strength",
    "expression": 
"calm, focused, effortless power"
  },
  "facial_details": {
    "emotion": "self-control, confidence",
    "micro_details": "relaxed jaw, steady eyes, natural intensity"
  },
  "wardrobe": {
    "clothing": "minimal athletic wear highlighting muscle lines",
    "textures": "matte, stretch performance fabric",
    "color_tones": "neutral, muted, dark or earthy tones"
  },
  "environment": {
    "location": "minimal indoor studio or clean gym space",
    "background": "plain, distraction-free, editorial backdrop",
    "atmosphere": "focused, intense, professional"
  },
  "lighting": {
    "type": "cinematic studio lighting",
    "quality": "high contrast with soft falloff",
    "direction": "side and rim lighting to sculpt muscles"
  },
  "color_palette": {
    "primary": ["charcoal", "warm beige", "muted skin tones"],
    "mood": "powerful, disciplined, modern"
  },
  "camera_details": {
    "lens": "35mm–50mm cinematic look",
    "focus": "sharp focus on body definition",
    "realism": "ultra-realistic, editorial quality"
  },
  "overall_mood": "quiet power, control, strength without aggression",
  "intended_use": "viral flex pose post on X (Twitter), fitness branding, editorial content"
}
```

## Product as Architecture Miniature Urban Scene

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A dreamlike miniature urban scene where an oversized [{argument name="brand product" default="BRAND PRODUCT"}] is reimagined as a charming café, blending product design with architecture in a playful yet premium way.

The product forms the upper structure of the building, while the ground level transforms into a cozy café storefront, glowing with warm, inviting light.

Transparent glass windows reveal a detailed miniature interior with tiny tables, stools, and subtle décor, emphasizing craftsmanship and scale.

The surrounding street is thoughtfully styled with delicate street lamps, small urban details, and clean pavement, creating a welcoming neighborhood atmosphere.

Soft, cinematic lighting enhances the whimsical mood, with gentle highlights and natural shadows.
Ultra-detailed, hyperrealistic miniature rendering, premium advertising aesthetic, surreal yet believable scale, refined art direction, high resolution.
```

## Vogue Style Red Puffer Jacket Portrait Prompt

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic fashion portrait of a young woman with a short wavy bob haircut and wispy bangs, wearing round orange-tinted sunglasses, pearl drop earrings, a black turtleneck and a bold red puffer jacket, soft glossy lips, natural makeup, wind gently moving her hair, photographed from a low angle, shallow depth of field, ultra realistic, 85mm lens, f1.8, warm golden hour sunlight, clean blue sky background, editorial fashion photography, high detail skin texture, soft shadows, cinematic color grading, Vogue style, ultra sharp focus, professional studio quality
```

## Cinematic London Underground Commuter Portrait Prompt

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "render_goal": "Create a photorealistic, cinematic candid portrait in an urban transit setting",
  "scene": {
    "location": "London underground subway platform",
    "time": "early Wednesday morning, March",
    "atmosphere": "calm commuter flow, quiet urban rhythm"
  },
  "subject": {
    "gender": "female",
    "age_range": "early to mid 20s",
    "appearance": {
      "expression": "soft, thoughtful, introspective",
      "gaze": "looking slightly to the side",
      "makeup": "well-defined, polished makeup with a bold yet elegant finish"
    },
    "clothing": {
      "style": "light, modern spring outfit",
      "details": "fitted or minimal layers, confident and stylish, no heavy outerwear"
    },
    "pose": "sitting alone on a subway bench, relaxed posture, natural body language"
  },
  "camera": {
    "framing": "medium close-up focusing on face and upper body",
    "focus": "razor-sharp subject focus",
    "depth_of_field": "very shallow with strong background blur",
    "motion_effects": "subtle motion blur on moving commuters"
  },
  "lighting": {
    "type": "soft natural morning light mixed with subway ambient lighting",
    "mood": "balanced, gentle highlights with controlled shadows"
  },
  "background": {
    "elements": [
      "commuters standing and walking",
      "blurred platform details",
      "distant train lights"
    ],
    "style": "smooth bokeh, minimal distractions"
  },
  "aesthetic": {
    "style": "photorealistic, cinematic realism",
    "vibe": "minimal, introspective, unstaged",
    "color_tone": "clean, neutral tones with subtle contrast"
  },
  "quality": {
    "detail_level": "high",
    "texture": "natural skin texture, realistic fabric detail",
    "output": "ultra-realistic, clean finish"
  }
}
```

## Cristiano Ronaldo Cinematic Portrait Prompt

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A high-fashion cinematic portrait of a man with a groomed beard and pompadour hairstyle, sitting on a black metal barstool. He is wearing a black turtleneck, brown corduroy trousers with rolled cuffs, and polished black leather Chelsea boots. The background is a minimalist studio with a white floor and a large tan-colored backdrop. Dramatic golden hour sunlight streams in, creating a distinct "chiaroscuro" rectangular window-pane light pattern on the wall behind him. 8k resolution, shot on {argument name="lens type" default="35mm"} lens, warm color palette, elegant and moody atmosphere.
```

## Monochrome Editorial Portrait: Man and Horse

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "model": "Nano Banana Pro",
  "scene": "Open field landscape under an overcast sky, minimal natural surroundings",
  "subject": {
    "type": "Young man",
    "pose": "Seated on a wooden chair, legs relaxed apart, holding a horse lead calmly",
    "expression": "Detached, introspective, controlled",
    "gaze": "Looking downward, partially obscured by sunglasses",
    "emotion": "Quiet dominance, solitude, inner gravity"
  },
  "appearance": {
    "hair": {
      "color": "Dark",
      "style": "Short, slightly tousled curls"
    },
    "facial_features": {
      "beard": "Light stubble",
      "accessories": ["Dark sunglasses"]
    },
    "skin": "Natural texture, matte finish"
  },
  "attire": {
    "outerwear": "Oversized dark padded jacket",
    "innerwear": "Dark hoodie",
    "pants": "Relaxed-fit dark trousers",
    "footwear": "Black leather boots",
    "style_note": "Minimalist, masculine, utilitarian fashion"
  },
  "secondary_subject": {
    "type": "Black horse",
    "position": "Standing beside the man, head lowered slightly",
    "interaction": "Held calmly by a loose lead",
    "symbolism": "Strength, instinct, controlled power"
  },
  "environment": {
    "location": "Open grassy field",
    "background": [
      "Rolling hills",
      "Soft distant landscape",
      "No urban elements"
    ],
    "atmosphere": "Quiet, isolated, contemplative"
  },
  "lighting": {
    "type": "Natural diffused daylight",
    "conditions": "Overcast sky",
    "effect": "Soft shadows, low contrast, even tonal range"
  },
  "camera": {
    "angle": "Eye-level to slightly low-angle",
    "lens": "50mm cinematic portrait lens",
    "depth_of_field": "Moderate, subject and horse in focus, background gently blurred",
    "framing": "Vertical, full-body portrait with symbolic spacing"
  },
  "color_palette": {
    "mode": "Black and white",
    "tones": ["deep blacks", "soft grays", "muted highlights"]
  },
  "mood": "Stoic, restrained, powerful",
  "style": {
    "aesthetic": "Fine-art editorial portrait",
    "realism": "Photorealistic",
    "inspiration": "Minimalism, masculinity, symbolism",
    "post_processing": "High-quality monochrome grading, subtle film grain, soft contrast"
  },
  "details": {
    "chair": "Simple wooden chair, understated",
    "lead_tension": "Loose, intentional calm",
    "motion": "Stillness dominates the frame"
  },
  "themes": [
    "Controlled power",
    "Man and instinct",
    "Silence as authority",
    "Strength without display"
  ],
  "quality": "Ultra-detailed, cinematic black-and-white portrait with editorial depth"
}
```

## Cinematic Night Street Portrait of Indian Man

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A hyper-realistic, cinematic photograph of a very handsome fair-skinned indian man walking with a slightly side-angled pose (3/4 profile) through an urban night street, captured mid-motion. He wears a light blue striped overshirt with sleeves rolled up, a white tank top underneath, loose grey trousers, and white sneakers. His left hand is outside the pocket, naturally swinging forward, and the watch on his wrist is clearly and prominently visible, reflecting neon highlights. The background shows dynamic motion blur trails in orange, amber, and teal, conveying speed and cinematic energy. Lighting is dramatic and directional, focused slightly from the top front-left, casting realistic shadows and subtle reflections on the wet pavement. The watch and his face should both be in sharp focus while the background sofity

blurs. --chaos 10--ar 9:16
```

## Luxury Office Portrait Prompt (Image-to-Image)

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the uploaded photo as a reference for the face of the full-body figure placed in the foreground and for the large portrait displayed in the background. The woman is sitting confidently at a table in a luxurious private office, creating a sophisticated atmosphere like a movie scene. The attire is a simple, elegant black one-piece dress. Soft sunlight streams in, finishing the scene in a calm, high-end fashion editorial style.
```

## Cozy Knitwear and Lace Contrast Prompt

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{ "casting_log": { "subject_archetype": "Sweet, cozy, but undeniably sexy.", "apparel_strategy": "Layering lingerie under cozy knitwear creates a powerful 'at home' contrast that is highly suggestive." }, "execution_params": { "aspect_ratio": "4:3", "focus_point": "Eyes and exposed shoulder/lingerie strap" }, "google_prompt": "A candid photograph of a sweet-faced East Asian woman lounging on a plush sofa, curled up under a blanket. She is wearing a **delicate black lace bralette** under a chunky, open cream-colored knit cardigan. The cardigan sits off one shoulder, revealing the lingerie strap and her sharp collarbone. She is holding a book but looking up at the camera with a gentle, relaxed smile. The pose is cozy but revealing. Soft, natural indoor light. The focus is soft and intimate, emphasizing the textures of the knit and lace. It feels like a lazy Sunday morning snapshot." }
```

## Vintage Editorial Collage from Reference Image

> Retro moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Transform this image [Upload Your Image] into a 64K DSLR shot resolution of A moody, vintage-inspired fashion editorial presented as a vertical collage of multiple frames, blending black-and-white and warm, desaturated color photography. The subject is a young man (same face as the uploaded image) in confident, with voluminous, hair, captured in expressive, fluid poses that emphasize movement, attitude, For male:

and emotional intensity. 
The primary frame features a dramatic black-and-white portrait of the man (same face as the uploaded image) leaning forward with his hand lifting his hair, his body angled dynamically toward the camera. he wears a fitted black outfit with, sculpting hid silhouette. His gaze is intense and direct, conveying strength, mystery, and raw confidence. Soft motion blur and film grain add a classic, analog feel.
Secondary frames include intimate close-ups of his face—one with strands of hair partially covering his eyes, highlighting natural texture, skin detail, and sensuality.  
Other frames place his in an urban city street environment, shot during daytime with warm, nostalgic color grading. he walks confidently through a busy street lined with tall buildings, blurred pedestrians, traffic cones, and distant vehicles. In one image, he pauses mid-stride, one hand raised to his hair, wearing a black suit that flows with movement. The city background is softly out of focus, emphasizing his presence amid urban chaos. The overall color palette is earthy and cinematic—warm browns, sepia highlights, muted blacks, and soft creams—contrasted with deep shadows. Grain, slight softness, and shallow depth of field give the images a timeless, editorial film aesthetic. The mood is cool, confidential, and asthetic, evoking themes of independence, city life,
femininity, and effortless power. The collage feels like a high-fashion magazine spread inspired by 1970s–1990s street photography and classic fashion editorials.
Style & Camera Tags: Cinematic fashion photography, editorial collage, analog film look, vintage color grading, black and white portrait, urban street fashion, shallow depth of field, natural light, film grain, motion blur, high-end magazine aesthetic, emotional storytelling, 64K realism. Octane render & Unreal Engine
```

## Monochrome Hypebeast Editorial with Airborne Action

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject_gender_placeholder": "[CHOOSE: woman]",
  "aesthetic_lodestar": "cinematic luxury hypebeast editorial, strictly monochrome, shadowless stasis, deep rich blacks, single-frame photograph",
  "composition": {
    "frame": "minimalist controlled studio, clinical stark clarity, extremely dynamic camera angles capturing the action from aggressive low or high perspectives. No grid layouts, solitary subject focus.",
    "background": "pure, seamless, blown-out white infinite void, completely free of floor or wall shadows",
    "focus": "razor-sharp deep focus across the entire subject in motion"
  },
  "subject_action": {
    "pose": "impossible, gravity-defying airborne contortions and explosive mid-air leaps, frozen at the absolute peak of movement with extreme bodily tension",
    "energy": "maximum athletic tension meets high-fashion structure, controlled chaos suspended in time, creating sculptural, almost unbelievable silhouettes against the void"
  },
  "wardrobe_styling": {
    "vibe": "creative street fashion x avant-garde tailoring, non-provocative, clean and impactful silhouettes with varied layering",
    "garment_variations": [
      "Open cardigan sweaters layered over premium t-shirts",
      "Oversized knitwear and structured lounger sweaters",
      "Technical bomber jackets or varsity jackets",
      "Japanese minimalist silhouettes (unstructured, flowing, layered)",
      "Premium denim jackets and jeans styles",
      "Japanese Americana wear and styles",
      "Moncler puffer jackets",
      "Statement structured outerwear (as previously defined)"
    ],
    "brands_reference": ["Supreme", "Fear of God", "Maison Margiela", "Martine Rose", "UMBRO", "Aimé Leon Dore", "RHUDE", "Maison Kitsuné", "NikeLab", "Moncler", "Issey Miyake"],
    "accessories": {
      "general": "scarves, neck bandanas, paisley bandanas hanging from pockets (used sparingly when sensible)",
      "womens_specific": "Avant-Garde style bags, Saint Laurent structured totes or crossbodies, designer baseball caps, trucker caps, premium wool beanies (applied only if subject is woman)",
 "details": "only apply head gear objects on the subject's head, nowhere else"
    },
    "key_details": "focus on singular statement outfits without excessive bulk, oversized cuts contrasting with sharp tailoring, prominent branding, varied fabric weights rendered through pure texture without shadow"
  },
  "footwear_focus": {
    "models": ["Nike SB Dunk", "Off-White™ x Nike deconstructed models", "Converse Chuck 70 premium high-top", "Vans Vault Slip-On", “Adidas Samba”, “New Balance 327”, “ASICS Onitsuka Tiger Sneakers”],
    "details": "the only object on the subject's feet, highly visible and pristine, forming the anchor point of the dynamic motion"
  },
  "visual_color_treatment": {
    "base_spectrum": "pure, uncompromising black and white with ultra-deep, rich black tones",
    "blend_mode": "cohesive fusion of extreme textural"
  }
}
```

## Dreamy Golden Hour Park Portrait Prompt

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
masterpiece, best quality, ultra realistic portrait of an extremely beautiful 21-year-old woman, delicate symmetrical facial features, large expressive hazel eyes with long lashes, soft natural rosy flush on cheeks, full glossy lips in subtle nude-pink, slight dreamy pout and gentle head tilt looking slightly off-camera, long voluminous wavy chestnut-brown hair cascading naturally over shoulders with soft flyaways catching light, flawless smooth skin with subtle pores and micro-textures, wearing tight white cropped cotton t-shirt with deep plunging sweetheart neckline, thin fabric slightly stretched over chest, large oversized vibrant red satin bow attached at center as focal accent, high-waisted matte black seamless leggings hugging legs, sitting relaxed on weathered wooden park bench with legs casually apart and one hand resting on thigh, urban park background with slender white birch trees, green foliage and dappled sunlight, golden hour late afternoon warm sunlight filtering through leaves creating soft rim light and gentle highlights on hair and skin, cinematic color grading with subtle teal-orange tones, shallow depth of field, dreamy bokeh, photorealistic, hyperdetailed 8k, shot on Sony A1 with 85mm f/1.2 lens, natural outdoor lighting, film grain,
```

## Hyper-Realistic Steam Figure of a Person

> Fotogerçekçi, sinematik illüstrasyon üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic cinematic photograph of a {argument name="kettle type" default="kettle_type"} kettle placed on a {argument name="bench style" default="bench_style"} bench inside a {argument name="environment type" default="environment_type"}. Lighting is {lighting_style}, highlighting fine metal textures, reflections, and condensation droplets. The kettle is boiling intensely, releasing thick steam from the spout.
The steam forms a full-body figure of {PERSON_NAME}, based on the uploaded reference image. The figure is immediately recognisable, with accurate facial structure, body proportions, and posture. The full body is visible from head to toe.
The steam figure is wearing a {shirt_colour} oversized shirt, {pants_type}, {shoe_type}, and a {accessory_type}. Clothing folds, seams, and silhouettes are clearly defined using varying steam density. Jewellery and accessories catch light with brighter highlights inside the steam.
The steam body stands in a {pose}, with a {facial_expression} expression. Steam density increases around the face, hands, clothing edges, and accessories to ensure instant recognition. The figure dominates the frame while remaining fully made of realistic volumetric steam.
Photorealistic steam physics, cinematic depth of field, high-impact realism. Surreal concept grounded in physical believability.
No text, no logos, no illustration style, no cartoon look.
Aspect ratio: {aspect_ratio}
Style: hyper-realistic, cinematic, premium aesthetic.
```

## Street Style Portrait with Identity Lock and Specific Pose

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create an ultra-realistic photo of the uploaded person in a low squatting pose on an outdoor asphalt surface. The person is wearing an oversized white t-shirt, sheer black tights, and pointed beige high heels. One hand is holding a clear plastic cup with iced coffee and a straw, while the other hand holds a black smartphone. Dark nail polish and a silver ring on the fingers are clearly visible. The hairstyle, hair length, and hair color must remain exactly the same, with soft waves and a defined front curl. The face, identity, and all facial features must stay completely unchanged. The person is wearing black oval sunglasses and small earrings. Natural daylight, realistic shadows, street-style aesthetic, sharp focus, high detail, cinematic yet casual mood, no changes to clothing, accessories, pose, or proportions.
```

## Photoreal Playful Couple Car Selfie Triptych

> Fotogerçekçi mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photoreal_playful_couple_car_selfie_triptych",
      "version": "v1.0_CAR_SELFIE_3FRAME_PLAYFUL_EN",
      "priority": "highest"
    },
    "references": {
      "reference_image_1": {
        "source": "UPLOAD_REFERENCE_IMAGE (OPTIONAL)",
        "purpose": "POSE_SEQUENCE_MOOD_REFERENCE",
        "strict_lock": false,
        "preserve_pose_sequence": true,
        "preserve_framing": true,
        "preserve_lighting_mood": true
      }
    },
    "output_settings": {
      "aspect_ratio": "9:16",
      "orientation": "portrait",
      "resolution_target": "ultra_high_res",
      "render_style": "ultra_photoreal_candid_lifestyle",
      "sharpness": "crisp_but_natural",
      "film_grain": "subtle_analog",
      "color_grade": "natural_daylight_soft",
      "dynamic_range": "high",
      "skin_tone": "natural_true_to_life"
    },
    "camera": {
      "camera_style": "handheld smartphone selfie look (high quality)",
      "lens": "24mm_equivalent",
      "aperture": "f/2.0",
      "shutter_speed": "1/500",
      "iso": 320,
      "white_balance": "daylight",
      "focus_mode": "continuous_af",
      "focus_priority": "front_subject_eyes"
    },
    "global_scene": {
      "setting": "car interior, front seats, window view with open road and sky",
      "time_of_day": "late_afternoon_to_dusk",
      "lighting": "soft natural daylight entering from windows, gentle facial shadows, no harsh flash",
      "mood": "playful, intimate, spontaneous, road-trip energy"
    },
    "subjects": {
      "group": {
        "count": 2,
        "description": "modern couple, youthful and playful (do not match any real person's identity)",
        "wardrobe": {
          "male": "casual light t-shirt, minimal logos, relaxed fit",
          "female": "casual hoodie or sweater, relaxed fit"
        },
        "accessories": "glasses optional, seatbelts visible",
        "hands_and_nails": "natural nails only, realistic hand anatomy"
      }
    },
    "strip_composition": {
      "layout": "vertical_triptych_3_frames_single_image",
      "dividers": "thin horizontal separators between frames, clean edges, no text",
      "continuity": "same couple, same car, same lighting across all frames"
    },
    "poses_sequence": {
      "frame_1_top": "playful exaggerated expression: both open mouths laughing or mock-biting, female hand gently on male cheek; high energy",
      "frame_2_middle": "affectionate kiss on cheek, faces close, relaxed smiles",
      "frame_3_bottom": "soft cuddle pose, cheeks touching, subtle smiles looking at camera"
    },
    "composition": {
      "framing": "tight close-up selfie in each frame, faces fill most of the frame",
      "depth_of_field": "moderate DOF, faces sharp, background softly blurred",
      "motion": "freeze candid movement cleanly, no motion blur",
      "no_extra_people": true
    },
    "style_co
```

## Candid Urban Portrait (Paparazzi Feel)

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "aspect_ratio": "9:16",
    "quality": "ultra_photorealistic",
    "resolution": "8k",
    "camera": "DSLR with slight paparazzi feel",
    "lens": "35mm",
    "style": "raw social media realism, natural skin texture, subtle grain, zero plastic look"
  },
  "scene": {
    "location": "underground parking garage rooftop exit",
    "time": "sunset transitioning to blue hour",
    "environment": [
      "concrete walls with yellow-black hazard stripes",
      "open rooftop edge revealing city skyline",
      "warm sunset glow mixing with cool city lights",
      "slight wind moving loose elements"
    ],
    "atmosphere": "urban, spontaneous, caught-in-the-moment energy"
  },
  "lighting": {
    "type": "mixed natural + city ambient",
    "key_light": "low warm sunset light from side",
    "fill_light": "cool reflected city light",
    "effect": "soft highlights on curves, realistic shadow falloff, cinematic but accidental"
  },
  "camera_perspective": {
    "pov": "third-person candid",
    "angle": "slightly low, off-center",
    "framing": "mid-thigh to head",
    "motion": "minor handheld imperfection, not symmetrical"
  },
  "subject": {
    "gender": "female",
    "vibe": "young adult, confident but unposed",
    "ethnicity": "mixed Asian-European",
    "body": {
      "type": "slim-curvy",
      "waist": "tight and defined",
      "hips": "round and naturally full",
      "chest": "full but natural",
      "legs": "toned thighs with subtle tension from stance"
    },
    "hair": {
      "color": "deep chestnut brown",
      "style": "loose high ponytail",
      "behavior": "wind catching loose strands mid-motion"
    },
    "face": {
      "expression": "half-smile, half-challenge",
      "eyes": "glancing back at camera mid-step",
      "makeup": "minimal glow, glossy lips, light liner",
      "skin": "real texture, slight warmth from sunset"
    },
    "outfit": {
      "top": {
        "type": "ribbed sleeveless fitted top",
        "color": "{argument name="top color" default="soft off-white"}",
        "fit": "tight, no bra, fabric under slight stretch"
      },
      "bottom": {
        "type": "high-waisted stretch pants",
        "color": "{argument name="pants color" default="charcoal grey"}",
        "fit": "hugging hips and thighs, natural fabric tension"
      }
    },
    "action": {
      "movement": "walking forward then turning upper body back",
      "micro_details": [
        "one hand adjusting waistband",
        "hip mid-shift creating natural curve",
        "ponytail swinging with motion"
      ]
    }
  },
  "realism_rules": {
    "avoid": [
      "perfect symmetry",
      "over-smoothed skin",
      "posed influencer look"
    ],
    "priority": "looks like a real moment someone snapped too late on purpose"
  }
}
```

## Street Style Squatting Pose with Iced Coffee

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create an ultra-realistic photo of the uploaded person in a low squatting pose on an outdoor asphalt surface. The person is wearing an oversized white t-shirt, sheer black tights, and pointed beige high heels. One hand is holding a clear plastic cup with iced coffee and a straw, while the other hand holds a black smartphone. Dark nail polish and a silver ring on the fingers are clearly visible. The hairstyle, hair length, and hair color must remain exactly the same, with soft waves and a defined front curl. The face, identity, and all facial features must stay completely unchanged. The person is wearing black oval sunglasses and small earrings. Natural daylight, realistic shadows, street-style aesthetic, sharp focus, high detail, cinematic yet casual mood, no changes to clothing, accessories, pose, or proportions.
```

## Ultra Photorealistic Shower Portrait with Water Droplets

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "Ultra Photorealistic Portrait",
  "subject": {
    "demographics": "Young woman",
    "perspective": "Side profile view (facing left)",
    "appearance": {
      "skin": {
        "texture": "Hyper-realistic, wet skin texture with visible pores, natural flushed redness on cheeks",
        "details": "Multiple clear water droplets clinging to the face, white soapy foam/suds along the jawline, neck, and collarbone",
        "wetness": "A single distinct water droplet dripping from the chin"
      },
      "hair": {
        "color": "blonde/brown undertone",
        "style": "big afro",
        "texture": "voluminous, defined curls"
      },
      "face": {
        "eyes": "Closed, relaxed eyelids",
        "brows": "Natural, unshaped",
        "lips": "Soft, natural pink, slightly parted",
        "expression": "Serene, calm, spa-like relaxation"
      }
    }
  },
  "pose": {
    "head_position": "Turned 90 degrees to the left showing full profile",
    "body": "Shoulders bare (suggesting nudity or strapless top), neck elongated",
    "action": "Standing or sitting still while bathing/washing face"
  },
  "styling": {
    "makeup": "No makeup / fresh face aesthetic",
    "elements": "White soap suds/foam running down the neck and chest",
    "vibe": "Clean beauty, skincare campaign, raw and organic"
  },
  "environment": {
    "setting": "Minimalist studio or bathroom setting",
    "background": "Solid neutral beige / tan color",
    "details": "Clean, uncluttered, focus entirely on the subject"
  },
  "lighting": {
    "type": "Soft diffused studio lighting",
    "quality": "Even illumination, soft highlights on the wet skin and water droplets",
    "shadows": "Gentle modeling shadows under the jaw and ear",
    "direction": "Side lighting accentuating the profile"
  },
  "camera_settings": {
    "shot_type": "Close-up portrait / Headshot",
    "lens": "85mm or 105mm Macro lens",
    "aperture": "f/2.8 to f/4.0 (keeping the face sharp while softening the hair slightly)",
    "focus": "Sharp focus on the eyelashes and water droplets on the cheek",
    "shutter_speed": "1/200s (to freeze the dripping water)"
  },
  "technical_details": {
    "ar": "9:16",
    "resolution": "8k",
    "quality_tags": [
      "Ultra-detailed",
      "Macro photography",
      "Subsurface scattering",
      "Wet skin shader",
      "Ray tracing",
      "Unreal Engine 5 render style",
      "Raw photo quality"
    ],
    "mood": "Intimate, cleansing, peaceful, sensory"
  }
}
```

## Golden Hour Lifestyle Portrait with Hanging Doll

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"scene": "A cozy indoor setting during golden hour, featuring a young woman holding up a small hanging doll figure.",
"subject": {
"character": "Young woman",
"face": {
"structure": "Oval shape with defined cheekbones and jawline",
"skin": "Light to medium tone, smooth, illuminated by warm sun",
"eyes": {
"shape": "Almond",
"color": "Dark brown",
"expression": "Gazing gently at the object in hand"
},
"mouth": {
"lips": "Natural pink, closed in a soft, subtle smile"
},
"makeup": "Natural look, groomed eyebrows, light mascara, subtle lip tint"
},
"hair": {
"color": "{argument name="hair color" default="Dark brown / Soft black"}",
"length": "Shoulder-length bob",
"texture": "Straight and smooth",
"style": "Loose with wispy bangs covering the forehead",
"shine": "High shine reflecting the sunlight"
},
"accessories": {
"necklace": "Thin silver chain with a small delicate pendant"
}
},
"object_held": {
"type": "Hanging doll ornament",
"details": "{argument name="doll details" default="Small figure with blonde hair, yellow braid, blue shirt, grey shorts, surprised expression, held by a yellow string"}"
},
"pose": {
"overall": "Standing casually, engaging with a handheld object",
"position": {
"base": "Standing",
"orientation": "Body angled slightly to the right, facing towards the camera"
},
"torso": {
"direction": "Slightly turned",
"posture": "Upright and relaxed"
},
"arms": {
"right": "Elbow bent, hand raised to shoulder height holding the doll",
"left": "Bent with hand resting confidently on the hip"
},
"head": {
"turn": "Turned slightly to the right looking at the doll",
"expression": "Amused and serene"
}
},
"outfit": {
"top": {
"type": "Sweater",
"color": "{argument name="sweater color" default="Beige / Camel"}",
"pattern": "Black polka dots",
"style": "Crew neck, long sleeves, ribbed cuffs, relaxed fit"
},
"bottom": {
"type": "Jeans",
"color": "Dark grey / Faded black",
"style": "High-waisted, denim, fitted at the waist"
}
},
"body": {
"type": "Slim / Average build",
"skin": "Light/Tan"
},
"environment": {
"location": "Bedroom or home study",
"furniture": {
"shelves": "White shelving unit in the background filled with decorative items",
"desk": "White desk or vanity visible on the left"
},
"decor": {
"items": "Plush toys (squishmallows), glass jars, candles, framed art",
"palette": "Pastel pinks and whites"
},
"background": {
"wall": "White walls casting soft shadows"
}
},
"lighting": {
"type": "Natural Sunlight (Golden Hour)",
"quality": {
"intensity": "Strong warm glow",
"direction": "Coming from the left (likely a window)"
},
"on_subject": {
"skin": "Warm highlights on the face and right hand",
"hair": "Glossy sheen on the dark hair",
"shadows": "Soft shadows cast to the right side of the image"
}
},
"photography": {
"angle": "Eye level",
"framing": "Medium shot (waist up)",
"focus": "Sharp focus on the subject and the doll, slightly softer background",
"style": "Lifestyle, warm aesthetic, influencer style"
},
"color_palette": {
"subject": {
"hair": "Dark Brown",
"top": "Beige and Black",
"jeans": "Charcoal"
}
}
```

## Macro Wet Skin Beauty Portrait Prompt

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "Ultra Photorealistic Portrait",
  "subject": {
    "demographics": "Young woman",
    "perspective": "Side profile view (facing left)",
    "appearance": {
      "skin": {
        "texture": "Hyper-realistic, wet skin texture with visible pores, natural flushed redness on cheeks",
        "details": "Multiple clear water droplets clinging to the face, white soapy foam/suds along the jawline, neck, and collarbone",
        "wetness": "A single distinct water droplet dripping from the chin"
      },
      "hair": {
        "color": "Silver / Platinum Blonde",
        "style": "Slicked back, completely wet, strands defined by water",
        "texture": "Fine, straight"
      },
      "face": {
        "eyes": "Closed, relaxed eyelids",
        "brows": "Natural, unshaped",
        "lips": "Soft, natural pink, slightly parted",
        "expression": "Serene, calm, spa-like relaxation"
      }
    }
  },
  "pose": {
    "head_position": "Turned 90 degrees to the left showing full profile",
    "body": "Shoulders bare (suggesting nudity or strapless top), neck elongated",
    "action": "Standing or sitting still while bathing/washing face"
  },
  "styling": {
    "makeup": "No makeup / fresh face aesthetic",
    "elements": "White soap suds/foam running down the neck and chest",
    "vibe": "Clean beauty, skincare campaign, raw and organic"
  },
  "environment": {
    "setting": "Minimalist studio or bathroom setting",
    "background": "Solid neutral beige / tan color",
    "details": "Clean, uncluttered, focus entirely on the subject"
  },
  "lighting": {
    "type": "Soft diffused studio lighting",
    "quality": "Even illumination, soft highlights on the wet skin and water droplets",
    "shadows": "Gentle modeling shadows under the jaw and ear",
    "direction": "Side lighting accentuating the profile"
  },
  "camera_settings": {
    "shot_type": "Close-up portrait / Headshot",
    "lens": "85mm or 105mm Macro lens",
    "aperture": "f/2.8 to f/4.0 (keeping the face sharp while softening the hair slightly)",
    "focus": "Sharp focus on the eyelashes and water droplets on the cheek",
    "shutter_speed": "1/200s (to freeze the dripping water)"
  },
  "technical_details": {
    "resolution": "8k",
    "quality_tags": [
      "Ultra-detailed",
      "Macro photography",
      "Subsurface scattering",
      "Wet skin shader",
      "Ray tracing",
      "Unreal Engine 5 render style",
      "Raw photo quality"
    ],
    "mood": "Intimate, cleansing, peaceful, sensory"
  }
}
```

## Professional Studio Photoshoot Prompt (Sydney Sweeney Inspired)

> Fotogerçekçi, sinematik manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_description": {
    "title": "Professional Studio Photoshoot",
    "subjects": [
      {
        "name": "{argument name="main model" default="Sydney Sweeney inspired character"}",
        "pose": "Standing, confident posture",
        "hair": "Long blonde wavy hair, center-parted",
        "outfit": {
          "type": "Evening Dress",
          "color": "Vibrant Red",
          "style": "Strapless, bodycon fit, sweetheart neckline"
        },
        "details": "High-end makeup, elegant necklace"
      },
      {
        "name": "Companion model",
        "pose": "Sitting on a studio stool, leaning slightly forward",
        "hair": "Long blonde hair, styled in soft curls",
        "outfit": {
          "type": "Sleeveless Dress",
          "color": "Deep Forest Green / Black (as requested)",
          "style": "Tight fit, elegant straps, cocktail length"
        },
        "details": "Delicate gold necklace, looking directly at the camera"
      }
    ],
    "environment": {
      "location": "Professional Photography Studio",
      "background_elements": [
        "Studio crew members",
        "Professional video cameras on dollies",
        "Large softbox lights",
        "Backstage equipment and stands"
      ],
      "lighting": "Cinematic lighting, warm highlights, soft shadows, dramatic atmosphere"
    },
    "technical_specs": {
      "camera_angle": "Eye level",
      "focus": "Sharp focus on subjects, blurred background (bokeh effect)",
      "color_palette": "Rich tones, high contrast, professional color grading",
      "quality": "Ultra-realistic, 8k resolution, highly detailed textures"
    }
  }
}
```

## Four-Panel Trading Workspace Lifestyle Collage at Sunset

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": "Modern high-rise trading workspace at sunset",
  "setting": {
    "location": "High-rise apartment or office",
    "time_of_day": "Golden hour / sunset",
    "environment": "Floor-to-ceiling windows with city skyline view"
  },
  "subject": {
    "type": "person",
    "gender_presentation": "female",
    "appearance": {
      "hair": "long blonde hair",
      "outfit": "cream and light-yellow striped fitted dress",
      "pose_variations": [
        "standing at desk looking at monitors",
        "seated in office chair facing camera",
        "leaning forward typing on keyboard",
        "turned slightly toward camera with relaxed expression"
      ],
      "expression": "confident, focused, calm"
    }
  },
  "objects": {
    "desk_items": [
      "multiple widescreen monitors",
      "laptop",
      "keyboard",
      "mouse",
      "white notepad",
      "blue water bottle",
      "{argument name="desk plushie" default="small pink penguin plush"}"
    ],
    "screens_content": [
      "financial trading charts",
      "candlestick graphs",
      "market indicators",
      "technical analysis dashboards"
    ]
  },
  "composition": {
    "layout": "four-panel collage",
    "camera_angles": [
      "medium shot",
      "side profile",
      "seated frontal view",
      "close-up working angle"
    ],
    "lighting": "natural warm sunset light with soft indoor lighting"
  },
  "mood": [
    "professional",
    "high-performance",
    "modern",
    "aspirational"
  ],
  "themes": [
    "financial intelligence",
    "trading culture",
    "focus and discipline",
    "tech-driven workflow",
    "urban success"
  ],
  "use_cases": [
    "marketing visuals",
    "fintech branding",
    "AI trading platform promotion",
    "social media content",
    "lifestyle-tech crossover"
  ]
}
```

## Editorial Street Photography Candid Capture

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Natural street portrait inspired by Scott Schuman, woman walking toward camera without awareness, editorial realism, shallow depth of field, cinematic candid capture
Lens: 85mm f/1.8
LUT: Portra Natural Skin
Harmony: skin-tone dominant palette
sRef: Paris street fashion candid
Tokens: invisible photographer, authenticity.
Hidden Tokens: ultra-realistic, cinematic depth, editorial street photography, authentic fashion moment, professional color grading, subtle film grain, natural skin texture, timeless wardrobe, observational realism, zolo meta-realism optimized.
Ratio: 3:4.
```

## Caution Tape Fashion Photography Prompt

> Fotogerçekçi moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "Ultra-Realistic Fashion Photography",
  "subject": {
    "demographics": "Young adult woman, approx 20-24 years old",
    "appearance": {
      "hair": "Long, dark brunette hair, loose waves, center part, falling over shoulders",
      "skin": "Fair to light complexion, smooth texture",
      "face": "Soft features, neutral to slight smile, direct eye contact",
      "body_type": "Curvy, fit physique"
    }
  },
  "fashion": {
    "outfit_theme": "Caution Tape / Industrial Print Set",
    "garments": {
      "top": "Strapless {argument name="outfit color" default="yellow"} tube top / bandeau featuring a 'PELIGRO' (Danger) caution tape print pattern with black stripes and red text",
      "bottom": "Matching yellow mini skirt with repeating caution tape 'PELIGRO' print",
      "material": "Stretch fabric, form-fitting"
    },
    "footwear": "High-heeled clear platform sandals (Lucite heels) with transparent straps"
  },
  "pose": {
    "stance": "Full-body standing shot, facing directly forward",
    "posture": "Upright, legs straight, arms relaxed at sides",
    "expression": "Calm, confident, soft gaze"
  },
  "environment": {
    "location": "Modern, bright bedroom",
    "background_elements": [
      "Large bed with white duvet and plush pillows",
      "Beige tufted headboard",
      "Floor-to-ceiling beige curtains in the background",
      "Soft beige area rug on wooden floor"
    ],
    "lighting": "Soft, diffused natural daylight coming from the side window, creating gentle shadows"
  },
  "technical_details": {
    "style": "Photorealistic, 8k, RAW photo",
    "camera_settings": {
      "shot_type": "Full shot",
      "focus": "Sharp focus on subject, slight bokeh (blur) on background bedroom furniture",
      "color_grading": "Natural, neutral tones with the yellow of the outfit popping as the accent color"
    }
  }
}
```

## Four-Image Summer Lifestyle Editorial Collage Prompt (Duplicate)

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": {
    "location": "casual upscale restaurant booth",
    "environment": "light wood table and bench seating, white walls, round window detail",
    "lighting": "soft natural daylight, evenly diffused",
    "time_of_day": "daytime",
    "ambience": "relaxed, bright, European summer dining vibe"
  },
  "subject": {
    "description": "young woman seated at a restaurant table",
    "hair": "long blonde hair, straight with a natural center part",
    "makeup": "natural, fresh makeup with soft blush and neutral lips",
    "expressions": [
      "looking off to the side with subtle smile",
      "calm gaze while sipping wine",
      "downward thoughtful expression",
      "warm, candid smile while touching hair"
    ],
    "pose_style": "effortless, candid, lifestyle-focused"
  },
  "wardrobe_and_accessories": {
    "outfit": "strapless {argument name="top color" default="yellow-and-white"} striped top with lace trim",
    "jewelry": [
      "small gold hoop earrings",
      "delicate gold necklace"
    ],
    "nails": "short white manicure"
  },
  "props": {
    "drink": "glass of {argument name="drink type" default="white wine"}",
    "table_items": [
      "menu",
      "folded white napkin with red stripe",
      "water glasses"
    ]
  },
  "composition": {
    "layout": "four-image collage",
    "framing": [
      "side-profile seated portrait",
      "front-facing half-body shot",
      "downward gaze lifestyle shot",
      "smiling candid portrait"
    ],
    "camera_angle": "eye level",
    "focus": "sharp subject with clean, uncluttered background",
    "aesthetic": "summer lifestyle editorial, Instagram-ready"
  },
  "camera": {
    "lens": "35mm",
    "aperture": "f/2.8",
    "iso": 200,
    "shutter_speed": "1/125",
    "white_balance": "daylight"
  },
  "style_keywords": [
    "summer dining",
    "natural light",
    "casual elegance",
    "lifestyle photography",
    "editorial candid"
  ]
}
```

## Cinematic Futuristic Studio Portrait Template

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "render_goal": "Cinematic futuristic studio portrait with strong visual focus on the subject",
  "subject": {
    "gender": "{argument name="gender" default="male"}",
    "reference_match": "same facial structure, body type, and proportions as the provided reference",
    "pose": "confident, composed stance with relaxed authority",
    "expression": "calm, self-assured, intense yet controlled"
  },
  "environment": {
    "location": "modern futuristic studio",
    "design": "minimal, clean architecture with subtle geometric elements",
    "background": "dark neutral tones, uncluttered, abstract futuristic textures"
  },
  "lighting": {
    "style": "minimal cinematic lighting",
    "key_light": "soft but directional, sculpting facial features",
    "fill_light": "very subtle or absent",
    "rim_light": "thin edge light to separate subject from background",
    "mood": "dramatic, premium, high-fashion sci-fi aesthetic"
  },
  "camera": {
    "framing": "mid-shot to three-quarter portrait",
    "angle": "eye-level or slightly low for power",
    "lens": "85mm cinematic portrait lens",
    "depth_of_field": "shallow, strong background blur"
  },
  "styling": {
    "outfit": "{argument name="outfit" default="modern futuristic fashion, tailored silhouette, matte or tech-inspired fabric"}",
    "colors": "monochrome or muted metallic accents",
    "accessories": "minimal, sleek, futuristic"
  },
  "visual_quality": {
    "focus": "razor-sharp focus on the subject",
    "texture": "ultra-realistic skin and fabric details",
    "resolution": "8k, ultra-detailed",
    "color_grading": "cool cinematic tones with subtle contrast"
  },
  "overall_vibe": "high-end editorial, futuristic confidence, cinematic realism"
}
```

## 3D Render of Edible Letters Candy

> Fotogerçekçi, sinematik 3B sahne üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A smooth, ultra-realistic 3D render of the word {argument name="your word" default="[YOUR WORD]"} shaped like a delicious candy — style adapts based on word — surrounded by a minimal candy world — high-Kelvin lighting — cinematic ray tracing — soft shadows — glossy details — hyper-real textures — square format
```

## Four-Panel Collage of Trader in High-Rise Office

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": "Modern high-rise trading workspace at sunset",
  "setting": {
    "location": "High-rise apartment or office",
    "time_of_day": "Golden hour / sunset",
    "environment": "Floor-to-ceiling windows with city skyline view"
  },
  "subject": {
    "type": "person",
    "gender_presentation": "female",
    "appearance": {
      "hair": "long blonde hair",
      "outfit": "cream and light-yellow striped fitted dress",
      "pose_variations": [
        "standing at desk looking at monitors",
        "seated in office chair facing camera",
        "leaning forward typing on keyboard",
        "turned slightly toward camera with relaxed expression"
      ],
      "expression": "confident, focused, calm"
    }
  },
  "objects": {
    "desk_items": [
      "multiple widescreen monitors",
      "laptop",
      "keyboard",
      "mouse",
      "white notepad",
      "blue water bottle",
      "small pink penguin plush"
    ],
    "screens_content": [
      "financial trading charts",
      "candlestick graphs",
      "market indicators",
      "technical analysis dashboards"
    ]
  },
  "composition": {
    "layout": "four-panel collage",
    "camera_angles": [
      "medium shot",
      "side profile",
      "seated frontal view",
      "close-up working angle"
    ],
    "lighting": "natural warm sunset light with soft indoor lighting"
  },
  "mood": [
    "professional",
    "high-performance",
    "modern",
    "aspirational"
  ],
  "themes": [
    "financial intelligence",
    "trading culture",
    "focus and discipline",
    "tech-driven workflow",
    "urban success"
  ],
  "use_cases": [
    "marketing visuals",
    "fintech branding",
    "AI trading platform promotion",
    "social media content",
    "lifestyle-tech crossover"
  ]
}
```

## Lifestyle Café Photography Portrait

> Lüks yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image",
  "style": "lifestyle café photography, casual and aesthetic",
  "scene": {
    "setting": "modern café interior",
    "environment": {
      "furniture": "wooden tables and chairs",
      "floor": "polished concrete",
      "background": "people seated and working casually",
      "lighting": "warm indoor ambient light"
    }
  },
  "subject": {
    "count": 1,
    "position": "center frame, seated at table",
    "pose": "relaxed, one leg bent on chair, holding drink",
    "expression": "calm, confident, direct gaze",
    "appearance": {
      "hair": {
        "color": "brown blonde",
        "style": "long, loose, center-parted"
      },
      "features": {
        "eyes": "hazel brown",
        "skin_details": "natural freckles"
      }
    },
    "clothing": {
      "outfit": "{argument name="outfit color" default="beige"} activewear set",
      "footwear": "light-colored sneakers with white socks",
      "accessories": [
        "gold necklace",
        "bracelet",
        "ring"
      ]
    }
  },
  "activity": {
    "action": "drinking a brown beverage",
    "drink": "brown iced drink in glass with straw"
  },
  "objects_on_table": [
    "designer handbag",
    "sunglasses",
    "small plate with green residue"
  ],
  "composition": {
    "orientation": "portrait",
    "framing": "medium-full body shot",
    "focus": "subject with café context"
  },
  "color_palette": {
    "dominant_colors": ["beige", "tan", "wood brown"],
    "accent_colors": ["green", "black", "gold"]
  },
  "overall_tone": "relaxed, stylish, everyday luxury"
}
```

## Four-Panel Trading Workspace Lifestyle Collage Prompt

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": "Modern high-rise trading workspace at sunset",
  "setting": {
    "location": "High-rise apartment or office",
    "time_of_day": "Golden hour / sunset",
    "environment": "Floor-to-ceiling windows with city skyline view"
  },
  "subject": {
    "type": "person",
    "gender_presentation": "female",
    "appearance": {
      "hair": "long blonde hair",
      "outfit": "cream and light-yellow striped fitted dress",
      "pose_variations": [
        "standing at desk looking at monitors",
        "seated in office chair facing camera",
        "leaning forward typing on keyboard",
        "turned slightly toward camera with relaxed expression"
      ],
      "expression": "confident, focused, calm"
    }
  },
  "objects": {
    "desk_items": [
      "multiple widescreen monitors",
      "laptop",
      "keyboard",
      "mouse",
      "white notepad",
      "blue water bottle",
      "small pink penguin plush"
    ],
    "screens_content": [
      "financial trading charts",
      "candlestick graphs",
      "market indicators",
      "technical analysis dashboards"
    ]
  },
  "composition": {
    "layout": "four-panel collage",
    "camera_angles": [
      "medium shot",
      "side profile",
      "seated frontal view",
      "close-up working angle"
    ],
    "lighting": "natural warm sunset light with soft indoor lighting"
  },
  "mood": [
    "professional",
    "high-performance",
    "modern",
    "aspirational"
  ],
  "themes": [
    "financial intelligence",
    "trading culture",
    "focus and discipline",
    "tech-driven workflow",
    "urban success"
  ],
  "use_cases": [
    "marketing visuals",
    "fintech branding",
    "AI trading platform promotion",
    "social media content",
    "lifestyle-tech crossover"
  ]
}
```

## 3x3 Grid Female Pose Collage Highlighting Dynamic Fashion and Light Effects

> Moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
3x3 grid female pose collage, Nano Banana prompt highlighting dynamic fashion and light and shadow effects
```

## Premium Beverage Package Design Prompt

> Lüks yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Premium beverage package design
```

## Photorealistic Intimate Portrait of a Woman Drinking a Cocktail

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Close-up intimate portrait of a young woman, 20-23 years old, delicate ethereal beauty with pale porcelain skin and subtle natural freckles, striking light blue eyes with intense direct gaze at camera, full pouty lips sipping from a large cocktail glass with orange-yellow drink, fresh lemon slice and ice, long platinum blonde hair in two neat french braids falling over shoulders, soft romantic expression with slight smile, wearing off-shoulder cream/beige lace camisole top with delicate bow details and thin straps, cozy dimly lit restaurant interior background with warm ambient lighting from hanging lamps, wooden tables, menu/book open on table in foreground, shelves of wine bottles behind bar, framed pictures on walls, blurred people in background, golden tungsten glow mixed with soft candle-like lights creating gentle rim light on hair and face, shallow depth of field, strong cinematic bokeh, photorealistic fashion/glamour photography, high detail skin texture with pores and natural imperfections, realistic glass reflections and liquid texture, shot on high-end mirrorless camera, 85mm lens at f/1.8, ultra detailed, 8k resolution
```

## Extreme Close-Up Winter Portrait with Snow

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_structure": {
    "subject": {
      "demographics": "Young  woman, mid-20s",
      "facial_features": {
        "skin": "Pale porcelain skin with visible natural texture, pores, and light freckles. Rosy flushed cheeks and nose indicating cold temperature. Hyper-realistic skin details.",
        "eyes": "Striking hazel-green irises, sharp focus, direct eye contact. Long eyelashes catching tiny white snowflakes and frost particles.",
        "hair": "Jet black, straight hair, slightly windblown with loose strands crossing the face. Sprinkled with fresh white snowflakes.",
        "expression": "Neutral to soft allure, lips slightly parted, serene and intimate."
      }
    },
    "attire_and_styling": {
      "clothing": "Chunky, coarse-knit wool scarf or high-collar sweater in brownish-grey earth tones.",
      "texture_details": "Fabric fibers visible, accumulation of fresh, fluffy snow on the knitwear.",
      "makeup": "Minimalistic 'no-makeup' look, natural lip color, emphasis on natural flush."
    },
    "environment": {
      "setting": "Outdoor winter scene, snowy day.",
      "atmosphere": "Falling snow, cold air, ethereal winter vibe.",
      "foreground_elements": "Large, out-of-focus snowflakes (bokeh) floating close to the lens."
    },
    "lighting": {
      "type": "Soft, diffuse natural overcast light.",
      "quality": "Even illumination, no harsh shadows, soft catchlights in eyes.",
      "color_tone": "Cool tones with contrasting warm skin flush."
    },
    "camera_settings": {
      "shot_type": "Extreme close-up portrait (macro focus on eyes).",
      "lens": "85mm or 105mm portrait lens.",
      "aperture": "f/1.8 to f/2.8 (shallow depth of field).",
      "focus": "Razor-sharp focus on irises and eyelashes, blurred foreground snow and background.",
      "style": "Cinematic photography, high resolution, 8k."
    },
    "technical_modifiers": [
      "Ultra Photorealistic",
      "Unreal Engine 5 render style",
      "Subsurface scattering",
      "Volumetric lighting",
      "Ray tracing",
      "Fine art portrait",
      "Detailed texture",
      "Raw photo"
    ],
    "mood": "Intimate, serene, chilly, ethereal, captivating."
  }
}
```

## Cinematic Golden-Hour City View Portrait

> Sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic golden-hour photograph of a young woman standing on a wooden viewpoint balcony overlooking a city, leaning casually against the railing. She wears an oversized grey knitted sweater, a long brown skirt, and brown ankle boots, with a small leather crossbody bag. A white folding bicycle rests beside her, and an orange cat sleeps peacefully on the wooden railing next to her. In the background, soft-focus hills with a tall communication tower rise above the city. Warm sunset light, pastel sky with gentle clouds, shallow depth of field, calm and dreamy mood, realistic photography, high detail, natural colors, 35mm lens, soft bokeh.
```

## Conceptual Luxury Fashion Portrait with Shadow Sculpting

> Minimal, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "render_goal": "Conceptual luxury fashion portrait",
  "subject": {
    "pose": "female standing confidently under strong directional light",
    "expression": "subtle confident smile"
  },
  "wardrobe": "minimal black couture gown with cutout layers formed by {argument name="sculpting element" default="shadows"}",
  "environment": {
    "location": "studio with dramatic lighting",
    "props": "architectural shadows shaping the dress silhouette"
  }
}
```

## Elevator Mirror Selfie (Streetwear Chic)

> Fotogerçekçi moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "demographics": "Young woman, appearing to be in her early 20s with a slim, toned physique.",
    "skin": {
      "tone": "Fair, porcelain complexion.",
      "texture": "Smooth with natural highlights on the cheekbones and collarbone."
    },
    "hair": {
      "color": "{argument name="hair color" default="Vibrant copper/auburn red"}.",
      "length": "Long, voluminous curls swept over the right shoulder.",
      "texture": "Tousled, natural waves with defined individual strands."
    },
    "face": {
      "expression": "Confident, slightly detached 'model-off-duty' look; lips parted slightly, gaze directed away from the lens.",
      "makeup": "Winged black eyeliner, defined brows, soft blush, and a satin berry-pink lip color."
    },
    "hands": {
      "left_hand": "Holding a smartphone (iPhone Pro model with a grey case) up to take a mirror selfie.",
      "right_hand": "Relaxed at the side, fingers naturally curled.",
      "nails": "Manicured with a soft pink/nude polish."
    }
  },
  "clothing": {
    "top": {
      "item": "Halter-neck satin crop top.",
      "color": "Black.",
      "fabric": "High-sheen silk or satin.",
      "design": "Wrapped/twisted front detail, sleeveless, exposing the midriff."
    },
    "bottoms": {
      "item": "Denim jeans.",
      "color": "{argument name="jeans color" default="Faded black/dark grey"}.",
      "fit": "Low-rise, relaxed fit.",
      "details": "Visible silver button fly, belt loops, and a large faint 'W' logo printed on the right thigh."
    }
  },
  "pose": {
    "type": "Standing mirror selfie.",
    "posture": "Hips shifted to the side (contrapposto), torso slightly angled to accentuate the waistline.",
    "framing": "3/4 shot, from the thighs up."
  },
  "environment": {
    "location": "Elevator interior.",
    "background": {
      "material": "Brushed stainless steel panels.",
      "features": "Horizontal metal handrail behind the subject, vertical panel seams."
    },
    "atmosphere": "Urban, enclosed, reflective metallic surfaces."
  },
  "lighting": {
    "source": "Overhead artificial elevator lighting.",
    "quality": "Diffused top-down light.",
    "highlights": "Specular highlights on the satin top, forehead, and shoulder.",
    "shadows": "Soft shadows under the jawline and hair."
  },
  "styling_and_mood": {
    "aesthetic": "Streetwear chic, 'baddie' aesthetic, night-out casual.",
    "mood": "Cool, confident, effortlessly stylish.",
    "colors": "High contrast; deep blacks and metallics vs. bright red hair and fair skin."
  },
  "camera_and_technical": {
    "camera_type": "Smartphone rear camera simulation (e.g., iPhone 15 Pro Max).",
    "lens": "24mm wide-angle.",
    "aperture": "f/1.8.",
    "focus": "Sharp focus on the subject, slight reflection blur on the metal.",
    "rendering": {
      "style": "Photorealistic, social media snapshot.",
      "resolution": "8K",
      "quality": "High fidelity textures (denim, satin, skin, hair)."
    }
  }
}
```

## Minimalist Personal Branding Mockup

> Minimal, elle çizilmiş logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A clean, modern personal branding mockup featuring a cohesive visual identity for a female creator or entrepreneur. The scene includes a minimalist brand kit displayed on a soft neutral background: a framed portrait with elegant typography, a circular logo with a hand-drawn line-art face illustration, and branded merchandise such as a white t-shirt, tote bag, and ceramic mug printed with the same logo. A grid-style social media layout showcases portrait photography, behind-the-scenes content, quotes, and solid color brand tiles in warm {argument name="color palette" default="beige, cream, and muted terracotta"} tones. Google Gemini The overall aesthetic is creative, modern, and minimal, with soft natural lighting, premium lifestyle photography, balanced composition, Scandinavian-inspired design, high-end branding presentation, editorial feel, and consistent typography. Ideal for a personal brand, content creator, or lifestyle entrepreneur identity showcase.
```

## High-Fashion Porcelain Transformation Portrait

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "render_goal": "High-fashion transformation portrait",
  "subject": {
    "pose": "female stepping forward as if emerging from stillness",
    "expression": "soft confident smile, calm elegance"
  },
  "wardrobe": "porcelain-inspired couture dress in {argument name="dress color" default="ivory and soft blush"}, sculpted texture breaking into smooth fabric",
  "environment": {
    "location": "minimal studio backdrop",
    "props": "fine porcelain fragments dissolving into fabric motion, subtle dust particles"
  },
  "style_notes": "cinematic realism, no fantasy glow, editorial lighting"
}
```

## Four-Image Summer Lifestyle Editorial Collage Prompt

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": {
    "location": "casual upscale restaurant booth",
    "environment": "light wood table and bench seating, white walls, round window detail",
    "lighting": "soft natural daylight, evenly diffused",
    "time_of_day": "daytime",
    "ambience": "relaxed, bright, European summer dining vibe"
  },
  "subject": {
    "description": "young woman seated at a restaurant table",
    "hair": "long blonde hair, straight with a natural center part",
    "makeup": "natural, fresh makeup with soft blush and neutral lips",
    "expressions": [
      "looking off to the side with subtle smile",
      "calm gaze while sipping wine",
      "downward thoughtful expression",
      "warm, candid smile while touching hair"
    ],
    "pose_style": "effortless, candid, lifestyle-focused"
  },
  "wardrobe_and_accessories": {
    "outfit": "strapless {argument name="top color" default="yellow-and-white"} striped top with lace trim",
    "jewelry": [
      "small gold hoop earrings",
      "delicate gold necklace"
    ],
    "nails": "short white manicure"
  },
  "props": {
    "drink": "glass of {argument name="drink type" default="white wine"}",
    "table_items": [
      "menu",
      "folded white napkin with red stripe",
      "water glasses"
    ]
  },
  "composition": {
    "layout": "four-image collage",
    "framing": [
      "side-profile seated portrait",
      "front-facing half-body shot",
      "downward gaze lifestyle shot",
      "smiling candid portrait"
    ],
    "camera_angle": "eye level",
    "focus": "sharp subject with clean, uncluttered background",
    "aesthetic": "summer lifestyle editorial, Instagram-ready"
  },
  "camera": {
    "lens": "35mm",
    "aperture": "f/2.8",
    "iso": 200,
    "shutter_speed": "1/125",
    "white_balance": "daylight"
  },
  "style_keywords": [
    "summer dining",
    "natural light",
    "casual elegance",
    "lifestyle photography",
    "editorial candid"
  ]
}
```

## Corporate Chic Portrait in an Executive Office

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": {
    "subject": {
      "description": "Young professional woman with a stylish, corporate chic aesthetic",
      "appearance": {
        "age": "20-25 years old",
        "hair": {
          "color": "Ash blonde with honey highlights",
          "style": "Long, voluminous blowout, deep side part with a sweeping wave over the top",
          "texture": "Soft, thick, and wavy"
        },
        "face": {
          "skin": "Fair complexion, flawless texture, soft natural glow",
          "features": "Soft jawline, dark eyes",
          "makeup": "Natural glam, rose-tinted lips, subtle blush, defined eyebrows",
          "expression": "Calm, confident, slightly approachable half-smile"
        }
      },
      "pose": {
        "posture": "Standing relaxed, leaning back against a vertical surface",
        "hands": "Right hand tucked casually into pant pocket, left hand resting gently on the wooden edge",
        "angle": "Eye-level portrait"
      }
    },
    "attire": {
      "outfit": "Modern business suit",
      "jacket": "Tailored sharp black blazer, fitted silhouette",
      "top": "Crisp white button-down shirt, unbuttoned at the top to mid-chest for a relaxed look, collar popped slightly",
      "bottoms": "Matching black dress trousers",
      "accessories": "Thin, delicate gold chain necklace"
    },
    "environment": {
      "setting": " upscale home library or executive office",
      "background": "Wooden bookshelves filled with hardcover books",
      "details": "Rich wood tones (oak or walnut), orderly rows of books",
      "depth": "Background is slightly out of focus (bokeh) to emphasize the subject"
    },
    "lighting": {
      "type": "Soft, diffused natural light",
      "source": "Window light coming from the front-left",
      "effect": "Even illumination on the face, soft highlights on the hair waves, gentle shadows adding depth to the clothing folds"
    },
    "technical_specs": {
      "style": "Photorealistic portrait",
      "camera_model": "Sony A7R V or similar high-end mirrorless",
      "lens": "85mm f/1.8 portrait lens",
      "resolution": "8k ultra-high definition",
      "aspect_ratio": "9:16",
      "quality_tags": [
        "masterpiece",
        "best quality",
        "ultra-detailed",
        "hyper-realistic",
        "raw photo",
        "cinematic lighting",
        "fine art texture"
      ]
    }
  }
}
```

## Edible Cityscape Diorama (Double Inference)

> Yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Anchor: {argument name="country city name" default="[Country/City Name]"}::4
Morphology: Miniature architectural cityscape, skyline constructed entirely from edible ingredients, tiny skyscrapers and houses mimicking {argument name="country city architecture" default="[Country/City]"} architectural styles but formed from food, culinary structural engineering, hyper-detailed diorama::3
Material Physics: {argument name="country city gastronomy" default="[Country/City]"} national gastronomy as construction material, native cuisine textures replacing concrete and glass, masonry made of regional staples, savory and sweet ingredient structural integrity, authentic local food palette::3
Illumination: Soft focus macro lighting, ambient occlusion, mouth-watering highlights::2
Render Stack: Tilt-shift photography, macro lens, f/2.8, 8k, scale model aesthetic, unreal engine 5 render::1
Negative: [Real concrete, real metal, plastic, inedible, humans, cutlery, plates, blurry]:: -1
```

## Hyper-Realistic Cinematic Beach Portrait Prompt (Duplicate)

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "render_goal": "Create a hyper-realistic, cinematic beach portrait with a relaxed luxury aesthetic",
  "subject": {
    "gender": "{argument name="subject gender" default="female"}",
    "appearance_match": "same facial structure, skin tone, hair type, and overall vibe as the reference image",
    "expression": "calm, confident, naturally beautiful, soft relaxed smile",
    "pose": "lying comfortably on a stylish beach chair or woven hammock, body relaxed, elegant posture"
  },
  "outfit": {
    "style": "tastefully designed beachwear",
    "description": "attractive, well-fitted outfit suitable for a beach setting, elegant and stylish, flattering silhouette, premium fabric",
    "colors": "soft summer tones or neutral beach colors"
  },
  "scene": {
    "location": "serene beach with soft sand and subtle ocean hints in the background",
    "environment": "clean, minimal surroundings, no crowd, no distractions"
  },
  "lighting": {
    "type": "natural golden-hour sunlight",
    "quality": "soft, warm, evenly balanced",
    "focus": "light wraps gently around her face and body, enhancing skin texture and details"
  },
  "camera": {
    "shot_type": "medium-to-close portrait",
    "angle": "slightly above eye level",
    "lens": "85mm cinematic lens look",
    "depth_of_field": "very shallow, heavy background blur"
  },
  "composition": {
    "focus": "razor-sharp focus on the girl only",
    "background": "creamy bokeh, softly blurred beach and ocean",
    "aesthetic": "luxury, calm, aspirational"
  },
  "quality": {
    "style": "ultra-realistic, cinematic",
    "resolution": "4K",
    "details": "high skin detail, natural textures, realistic lighting",
    "color_grading": "soft warm tones, clean and premium look"
  },
  "negative_prompt": [
    "extra people",
    "harsh shadows",
    "overexposed highlights",
    "plastic skin",
    "distorted anatomy",
    "low resolution",
    "cartoon style"
  ]
}
```

## Kawaii Japanese Anime-Style POP Typography Sticker

> Minimal illüstrasyon üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a kawaii Japanese anime-style POP typography sticker. TEXT (exact, no extra characters): "{argument name="Text" default="そして未来へ"}" (If two lines are needed, keep the same text but insert a line break with \
.) Style: - Thick, rounded bubble letters (kawaii, soft corners, bold strokes). - Pastel gradient fills alternating pink and lavender per character. - Subtle glitter / dot sparkle texture inside the letters. - Glossy highlights on the top-left of each letter (soft white shine). - Outline: very thick pure white outline + a thin outer outline ({argument name="Outer Outline Color" default="pink or purple"}) for a double-stroke sticker look. - Add a few small 4-point sparkle stars around the text and one small heart near the bottom-right (matching pastel colors). - Slight soft drop shadow under the sticker (very subtle). Composition: - Centered, clean margins, dynamic “jumping” letter sizes and playful tilt, but keep every character perfectly readable.
```

## Voluptuous Gym Mirror Selfie in Alo Yoga Gear

> Fotogerçekçi logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"subject": {
"description": "Young woman with tan complexion and dark brown, long wavy hair parted in the center. She has a voluptuous, hourglass physique with a prominent bust, narrow defined waist, wide hips, and toned thick thighs. Facial features include full lips, groomed brows, and soft makeup. Small fine-line tattoos are visible on the fingers of her left hand.",
"outfit": {
"top": "White Alo Yoga sports bra with a scoop neckline, thin straps, and the 'alo' logo centered on the band. The fit is tight, emphasizing substantial bust volume and cleavage.",
"bottom": "Black high-waisted Alo Yoga biker shorts with the 'alo' logo on the left thigh. The fit is skin-tight, highlighting the curvature of the hips and thighs.",
"accessories": "Small gold rectangular pendant necklace on a thin chain."
},
"anatomy_constraints": {
"bust_volume": "Clearly above average, full, and heavy with natural gravity influence.",
"proportions": "Exact fidelity to the reference: prominent chest projection, significant bust-to-waist ratio, and curvy hip-to-waist ratio.",
"skin_texture": "Realistic skin texture with natural soft shadows, no artificial smoothing."
}
},
"pose": {
"type": "Standing mirror selfie",
"orientation": "Front-facing body, head slightly tilted.",
"arms": "Right arm hanging naturally at the side. Left arm bent at the elbow, raised to hold a black iPhone in front of the chest, capturing the reflection.",
"hand_details": "Left hand gripping the phone, fingers visible with light manicure and finger tattoos.",
"spine_and_posture": "Upright posture, shoulders slightly back, hips squared to the mirror."
},
"environment": {
"setting": "Upscale gym or pilates studio.",
"background_elements": [
"Light beige wood-paneled walls.",
"Large wall mirrors reflecting the back of the room.",
"Reflected row of black treadmills.",
"Black rubber gym flooring."
],
"foreground_elements": [
"Dumbbell rack with black weights visible on the left side.",
"Wooden pilates reformer machine frame visible on the right side."
]
},
"camera": {
"shot_type": "Medium shot, mirror selfie perspective.",
"angle": "Eye-level relative to the reflection.",
"focal_length": "Standard smartphone wide lens (approx 24-28mm equivalent).",
"focus": "Sharp focus on the subject, slightly softer focus on the reflected background.",
"framing": "Upper thighs to slightly above head, centered subject."
},
"lighting": {
"type": "Soft, diffuse indoor functional lighting.",
"direction": "Overhead and ambient.",
"quality": "Even illumination, minimal harsh shadows, flattering highlighting on the skin (shoulders, chest, forehead).",
"shadows": "Soft natural shadows under the bust, chin, and limbs."
},
"mood_and_expression": {
"mood": "Casual, confident, focused.",
"expression": "Neutral to slightly sultry, gaze directed at the phone screen/mirror."
},
"style_and_realism": {
"style": "Photorealistic, unstyled raw social media snaps"}
```

## Clean Modern Gym Mirror Selfie

> Fotogerçekçi, minimal mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Same as reference image (100% facial and body fidelity preserved).
A clean, modern gym mirror selfie captured on a Google Pixel smartphone. The subject wears a cool, minimal gym outfit featuring white sneakers, fitted activewear, and a confident relaxed stance. A gym bag rests on the floor beside them, with visible protein shaker bottle and dumbbells nearby. The environment is a sleek gym interior with muted lighting, metallic equipment reflections, rubber flooring, and soft overhead lights. Composition emphasizes symmetry, sharp focus on subject, subtle background blur, realistic shadows, crisp textures, natural skin tones, and smartphone photography realism. Ultra-high resolution, lifestyle fitness aesthetic.
```

## High-Fashion Corduroy Mini Dress Studio Portrait Prompt

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "type": "photorealistic_studio_portrait",
    "quality": "8k",
    "aspect_ratio": "3:4",
    "style": "high-fashion editorial, clean studio photography, sharp realism"
  },
  "subject": {
    "demographics": {
      "gender": "female",
      "age": "young adult (20s)",
      "ethnicity": "caucasian",
      "skin_tone": "fair to light"
    },
    "hair": {
      "color": "medium brown",
      "length": "long, reaching mid-back",
      "style": "straight and silky, center part, falling naturally over the back and shoulder",
      "texture": "fine, smooth"
    },
    "face": {
      "expression": "alluring but neutral, lips slightly parted, gaze directed towards camera",
      "makeup": "soft natural glam, defined brows, neutral eyeshadow, berry-tinted lips"
    },
    "body": {
      "pose": "dynamic standing pose, body angled 45-degrees to the side, leaning slightly forward from the waist",
      "hands": "both hands gripping the fabric of the dress at the waist/midriff area, creating tension in the pose"
    }
  },
  "outfit": {
    "garment": "mini dress",
    "material": "corduroy (ribbed velvet fabric)",
    "color": "{argument name="dress color" default="deep burgundy / wine red"}",
    "fit": "fitted bodice, slight A-line skirt",
       "breasts overflowing from low neckline"
    "details": [
      "thin spaghetti straps",
      "sweetheart neckline with deep plunge",
      "silver button-front closure down the center",
      "visible texture of the corduroy fabric"
    ]
  },
  "scene": {
    "location": "minimalist indoor studio",
    "background": "plain white/off-white wall",
    "shadows": "hard, distinct shadow of the subject cast on the wall behind her, indicating strong directional lighting"
  },
  "lighting": {
    "type": "hard studio lighting",
    "direction": "front-left (high angle)",
    "quality": "high contrast, creating crisp highlights on the skin and deep shadows on the wall",
    "ambience": "bright, clean, neutral"
  },
  "camera": {
    "shot_type": "medium shot (from knees/thighs up to head)",
    "angle": "slightly above eye-level, looking down very subtly",
    "focal_length": "50mm or 85mm portrait lens",
    "focus": "razor sharp focus on face and dress texture",
    "depth_of_field": "deep (subject and immediate background shadow are relatively sharp)"
  }
}
```

## Film Noir Portrait with Cigar and Burning Card

> Sinematik, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Cinematic close-up portrait of a young woman with a confident, slightly arrogant expression, captured in a realistic fashion-editorial style. Natural facial proportions, subtle asymmetry, visible skin texture with pores, micro-imperfections, soft tonal transitions. Pale skin with realistic light falloff, matte nude lips with natural texture, relaxed jaw tension.
She is smoking a thick cigar: her right hand holds it close to her lips, the ember glowing softly, with dense smoke swirling and naturally swirling around her face, partially diffusing the light. In her left hand, she holds a {argument name="playing card" default="Queen of Hearts"} playing card, the lower edge realistically burning — uneven bright orange flames, curling paper edges, fine ash details, thin smoke mixing with cigar smoke.
She wears small oval black tinted sunglasses with thin gold frames, fully obscuring her eyes, adding mystery. Clothing: deep black tailored blazer with a deep V neckline, revealing collarbones and natural skin folds. Accessories include multiple gold rings with slight wear, a refined gold bracelet with pearl details on the left wrist, and small elegant earrings.
Lighting is cinematic and moody: warm golden key light from the front-side highlights skin texture, hands, jewelry and smoke, with controlled deep shadows for contrast; subtle rim light separates her silhouette from the background. Background is fully dark, softly blurred, no visible environment.
Shot as a high-end cinematic portrait, 50–85mm lens look, shallow depth of field, sharp focus on face and hands, realistic smoke physics, rich but restrained contrast, film-noir atmosphere, photorealistic, high detail without over-sharpening, natural color grading, no beauty retouching, no plastic skin.
```

## Fashion Try-On Room Selfie Prompt

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
"A beautiful young woman with fair skin, long straight light brown hair with subtle highlights, blue-green eyes, full lips, and a subtle seductive expression, sitting on the floor in a modern clothing store fitting room or showroom. She is wearing a fitted black long-sleeve ribbed crop top with an asymmetric off-shoulder design, high choker neckline, and a long thin strap that she is holding loosely in one hand. Paired with high-waisted faded gray skinny jeans that hug her figure. Pose is relaxed yet confident: one knee up, the other leg extended, slight lean forward, gazing directly at the camera. Background shows racks of hanging clothes in neutral tones like beige, black, and brown, soft indoor lighting, clean minimalist store interior, highly detailed, photorealistic, sharp focus, fashion photography style, masterpiece, best quality, ultra realistic, 8k --ar 9:16 --stylize 250 --v 6 --q 2 --style raw"
```

## Ultra-Photorealistic Bikini Portrait in Natural Light (JSON)

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "aspect_ratio": "9:16",
    "quality": "ultra_photorealistic",
    "camera": "iPhone 15 Pro Max",
    "lens": "24mm wide",
    "style": "raw iPhone outdoor photo, natural skin texture, zero plastic look, subtle handheld imperfection"
  },

  "scene": {
    "location": "private backyard patio",
    "environment": [
      "light gray stone tiles",
      "minimal modern garden plants",
      "sun lounger with fabric surface",
      "soft natural shadows on the ground"
    ],
    "time": "early afternoon",
    "atmosphere": "quiet, warm, intimate but casual outdoor moment"
  },

  "lighting": {
    "type": "natural sunlight",
    "direction": "top-front sunlight",
    "color_temperature": "neutral daylight",
    "effect": "soft highlights on chest and thighs, gentle shadow under breasts, natural skin glow without shine"
  },

  "camera_perspective": {
    "pov": "third person standing close",
    "angle": "slightly above chest level, looking down",
    "distance": "close-medium",
    "framing": "mid-thigh to top of head",
    "stability": "slight handheld feel, not perfectly centered"
  },

  "subject": {
    "gender": "female",
    "vibe": "young adult, soft confident energy",
    "ethnicity": "{argument name=\"ethnicity\" default=\"Chinese\"}",

    "body": {
      "type": "athletic full hourglass",
      "chest": "very full, naturally heavy breasts with realistic gravity, close-set, soft underboob shadow, no exaggerated lift",
      "waist": "narrow and toned, smooth inward curve",
      "hips": "wide and rounded, proportional to chest",
      "legs": "athletic thighs, soft inner thigh contact, natural fullness",
      "stomach": "flat and toned, athletic definition",
      "overall_balance": "athletic full hourglass, realistic weight distribution"
    },

    "skin": {
      "tone": "fair light skin",
      "texture": "visible natural skin texture, no airbrushing",
      "details": "slight redness on cheeks and chest from sun exposure"
    },

    "hair": {
      "color": "platinum blonde",
      "length": "long",
      "style": "straight with slight natural movement",
      "part": "center part",
      "behavior": "falls naturally over shoulders, not styled"
    },

    "face": {
      "expression": "eyes closed with a soft, relaxed smile",
      "vibe": "peaceful, subtly flirty without posing",
      "makeup": "minimal makeup, natural lashes, light blush",
      "features": "soft youthful Chinese facial structure, rounded cheeks"
    },

    "pose": {
      "position": "sitting on a sun lounger",
      "upper_body": "leaning slightly forward, shoulders relaxed",
      "arms": "hands placed behind her on the lounger for support",
      "chest_behavior": "breasts naturally pressed together due to posture, realistic compression",
      "legs": "thighs together, knees slightly apart",
      "posture": "casual, not posed, gravity-driven body language"
    },

    "outfit": {
      "type": "white bikini",
      "top": {
        "style": "triangle"
```

## High-Fashion Editorial Portrait with Pink Coat

> Minimal, lüks moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "description": "Subject's facial features, hairstyle, hair color, and makeup must EXACTLY match the provided reference image.",
    "pose": "Elegant crouching or squatting pose, one hand gracefully touching the chin, looking directly at the camera (maintained from original, unless reference image dictates otherwise)",
    "features": "[STRICT REQUIREMENT] Facial structure, skin tone, and specific makeup details replicate the reference image precisely."
  },
  "fashion_and_apparel": {
    "outerwear": "[CRITICAL KEEP] Oversized, structured electric {argument name="coat color" default="pink"} wool trench coat or blazer draped over the shoulders",
    "inner_wear": "[STRICT REQUIREMENT] The white satin/silk bodysuit with scoop neckline and sheer corset detailing must EXACTLY replicate the clothing in the reference image.",
    "accessories": [
      "None, unless present in the reference image inner wear structure."
    ],
    "footwear": "Classic black pointed-toe stiletto pumps"
  },
  "composition_and_setting": {
    "background": "Minimalist, solid light {argument name="background color" default="pink"} or off-white studio backdrop",
    "framing": "Full body shot, centered composition",
    "perspective": "Eye-level or slightly low angle to emphasize the pose and silhouette"
  },
  "lighting_and_aesthetic": {
    "style": "High-fashion editorial, noir-chic, timeless glamour",
    "lighting": "Spotlight effect creating a circular halo on the background behind the head; soft directional key light from the front-top to ensure facial details match reference while highlighting the pink coat fabric",
    "color_palette": "Monochromatic background elements, contrasting sharply with the vibrant electric pink coat and the white inner wear."
  },
  "technical_details": {
    "camera_feel": "Shot on 85mm lens, sharp focus on subject's face and clothing details, high resolution, clean studio photography"
  }
}
```

## Photorealistic Mirror Selfie with Eye Patches and Turban

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A highly realistic mirror selfie of a young woman taken through the reflection of a round tabletop mirror with a chrome metal frame and stand. The composition feels intimate and natural, like a quiet personal care moment.
She is wearing a thin white spaghetti-strap tank top. Her head is wrapped in a soft grey-beige terry towel styled as a turban, fully covering her hair. Under her left eye, a single pair of gold hydrogel eyepatches is applied — semi-circular, slightly reflective with a subtle metallic sheen.
Her face appears makeup-free or with very minimal natural makeup. Skin looks fresh, hydrated, and real, with visible natural texture, soft pores, slight tonal variations, and gentle under-eye shadows. Lips have a neutral tone with a light natural gloss. She wears small gold hoop earrings.
She holds a black iPhone with a triple-camera module (similar to iPhone 11 Pro or newer) in her right hand, angled toward the mirror. Her expression is calm and relaxed, slightly tired but peaceful, with her gaze directed slightly downward at the phone screen.
Environment & background:
Behind her is a grey concrete-textured wall. On the left side of the frame, a window allows soft natural daylight to enter, creating gentle, diffused illumination with a slightly cool tone.
On the table in front of the mirror:
On the left: a clear glass diffuser bottle with wooden sticks, labeled “ASOMA”.
On the right: a brown glass candle jar, partially burned, with visible wax residue.
Mood & lighting:
Soft natural daylight, subtle shadows, no harsh highlights. Scandinavian / loft-style bathroom atmosphere, minimalistic, cozy, quiet. Color palette consists of muted greys, warm beige, soft whites, and restrained gold accents.
Photographic realism, candid lifestyle photography feel, shallow depth of field, natural lens perspective (50–85mm equivalent), true-to-life proportions, no beauty retouching, no plastic skin, no exaggerated features, high detail, realistic reflections, authentic mirror distortion, editorial-quality realism.
```

## Modern Loft Lifestyle Editorial Portrait Prompt

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "model": "Nano Banana Pro",
  "scene": "Modern loft living room with large industrial windows",
  "subject": {
    "type": "Young woman",
    "pose": "Reclining casually on a fabric sofa, one arm resting along the backrest, legs relaxed",
    "expression": "Calm, self-assured, quietly confident",
    "gaze": "Direct eye contact with the camera",
    "emotion": "Ease, confidence, natural presence"
  },
  "appearance": {
    "hair": {
      "color": "Dark brown",
      "style": "Loose, long waves with natural volume"
    },
    "skin": "Natural complexion with subtle freckles and realistic texture",
    "makeup": "Minimal, clean, natural tones"
  },
  "attire": {
    "top": "Vintage-style cropped graphic t-shirt",
    "bottoms": "High-waisted relaxed-fit {argument name="jeans color" default="blue"} jeans",
    "footwear": "White casual sneakers",
    "accessories": [
      "Layered gold necklaces"
    ],
    "style_note": "Effortless modern street-lifestyle fashion"
  },
  "environment": {
    "location": "Urban loft apartment",
    "background": [
      "Exposed brick walls",
      "Large black-framed windows",
      "City skyline softly visible outside",
      "Indoor potted plant",
      "Abstract framed artwork leaning against walls"
    ],
    "atmosphere": "Airy, contemporary, lived-in"
  },
  "lighting": {
    "primary": "Soft natural daylight from large windows",
    "effect": "Balanced illumination with gentle facial shadows",
    "contrast": "Low to moderate, natural realism"
  },
  "camera": {
    "angle": "Eye-level lifestyle portrait",
    "lens": "35mm lifestyle lens",
    "depth_of_field": "Moderate, subject in focus with softly blurred background",
    "framing": "Horizontal composition, relaxed editorial framing"
  },
  "color_palette": {
    "dominant_colors": ["neutral beige", "denim blue"],
    "accents": ["warm skin tones", "muted green", "soft brick red"]
  },
  "mood": "Relaxed, confident, contemporary",
  "style": {
    "aesthetic": "Lifestyle editorial photography",
    "realism": "Photorealistic",
    "texture": "Visible denim grain, fabric upholstery detail",
    "post_processing": "Natural color grading, subtle warmth, no heavy filters"
  },
  "details": {
    "sofa": "Light neutral fabric couch with soft texture",
    "windows": "Tall industrial-style windows with diffused city light",
    "motion": "Still, candid moment"
  },
  "themes": [
    "Modern femininity",
    "Comfort and confidence",
    "Everyday luxury",
    "Authentic presence"
  ],
  "quality": "Ultra-detailed, high dynamic range, professional lifestyle photography"
}
```

## Cinematic Portrait with 3D Chibi Miniature Prompt

> Fotogerçekçi, sinematik 3B sahne üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
ME AND MY LITTLE 3D CHIBI IN THE OFFICE

Ultra-realistic cinematic portrait of an adult person, with the face fully visible, natural human skin texture with pores and subtle imperfections, and realistic hair strands. The real person is seated in a dental chair in a pink dental office, holding a small 3D miniature of themselves, delicately sitting with crossed legs in a relaxed pose on the palm of one hand. 4:3 horizontal ratio. Features dental office attire with a rose-colored coat and holding a dental mirror in hand.

The real person looks at the miniature with clear surprise and slight amusement, raised eyebrows, a soft smile, and expressive eyes. The facial expression appears spontaneous and authentic. The miniature closely resembles the real person in facial structure, hairstyle, and clothing, but rendered in a soft, high-quality 3D chibi style. The miniature has a funny and exaggerated facial expression, lively eyes, and playful moving arms and legs. The stylization is clean and modern, not like a toy, doll, or artificial figure.

Both characters wear matching outfits: medium distressed jeans, {argument name="coat color" default="rose-colored"} coat with 3/4 bell sleeves finished with lace on cuffs and hems, embroidered with white lace and golden center details, and light white sneakers. Hair according to reference. Makeup: luminous and well-defined skin, light rosy blush, intense eyeshadow in neutral tones, black mascara on eyelashes, and matte pink lips. The scale difference between the realistic woman and the 3D chibi figure is obvious and visually amusing.

The background is a realistic office scene with white cabinets containing painting and creative items, a white desk, and a plastic swivel chair, with slight blur and strong depth of field. Professional cinematic lighting with clear separation of objects, soft highlights on the skin, and subtle rim light around both figures.

Ultra-detailed textures for the real person. Clean 3D textures with a realistic style for the miniature. Balanced between realism and humor. No surreal distortions.
```

## East Asian Woman with Milk Glass and Louis Vuitton Bag

> Fotogerçekçi, minimal mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Photorealistic portrait of a beautiful young East Asian woman in her early 20s, delicate heart-shaped face, fair porcelain skin with subtle natural glow, large expressive dark brown eyes with light makeup (thin eyeliner and mascara), straight thin eyebrows, small straight nose, full natural pink lips with a bright genuine smile showing teeth, long straight dark brown hair with slight natural sheen, center-parted, falling past shoulders, hair slightly tousled by breeze.

She is turned three-quarters to her back, looking back directly at the camera over her right shoulder with a playful and confident expression. Wearing a fitted white long-sleeve crew-neck top made of soft cotton, tucked in neatly, paired with a very short black pleated tennis-style mini skirt (about mid-thigh length) with a thin beige/gold piping trim at the high waistband. On her feet: clean white knee-high boots with a slight platform.

In her right hand (raised near her face): holding a clear glass of cold white milk with visible condensation on the glass. In her left hand (hanging down): carrying an authentic small Louis Vuitton Alma BB handbag in classic monogram canvas with tan leather handles, held by the top handle.

Background: indoors, standing in front of an elegant frosted glass door with intricate black wrought-iron decorative overlay featuring swirling patterns and fleur-de-lis motifs. Soft diffused natural daylight from the side, no harsh shadows, clean and modern interior vibe.

High resolution, sharp focus throughout, realistic skin texture, detailed fabric folds on skirt and top, accurate Louis Vuitton monogram pattern, professional photography style, fashionable and cute aesthetic, 8k quality, photorealistic, masterpiece.
```

## Y2K Indie Sleaze Editorial Portrait

> Retro, stüdyo ışıklı logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
She kneels in a pristine white studio, shot from a low mid angle with a slight upward tilt that emphasizes quiet dominance. She wears a Y2K inspired brown and olive raglan tee with a worn retro star logo reading sssap, paired with oversized distressed wide leg denim cargos and chunky black streetwear shoes. Her messy ponytail and loose strands frame a sharp, defiant gaze, softened by large black wired headphones adding a cyber edge. Soft diffused studio lighting reveals fabric texture and subtle shadows, while her provocative yet controlled expression channels {argument name="aesthetic style" default="indie sleaze mixed with Harajuku editorial rebellion"}.
```

## Dua Lipa Skincare Editorial Collage

> Minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": {
    "location": "modern bathroom vanity",
    "environment": "clean white walls, glass shower enclosure, chrome fixtures",
    "lighting": "soft natural indoor lighting with even highlights",
    "time_of_day": "daytime",
    "ambience": "minimal, fresh, skincare-focused"
  },
  "subject": {
    "description": "young woman performing skincare routine at bathroom mirror",
    "hair": "long dark blonde hair, straight, center-parted",
    "makeup": "minimal makeup, natural skin finish",
    "expressions": [
      "focused and calm while applying cream",
      "neutral gaze into mirror",
      "gentle concentration while massaging product",
      "warm smile holding skincare jar"
    ],
    "actions": [
      "holding {argument name="product type" default="skincare jar"}",
      "applying cream to cheek",
      "massaging product into face",
      "presenting product toward mirror"
    ]
  },
  "wardrobe_and_accessories": {
    "outfit": "strapless light-toned top or towel",
    "jewelry": [
      "small hoop earrings",
      "delicate necklace"
    ]
  },
  "props": {
    "skincare_products": [
      "white skincare jar",
      "matching lotion bottle with pump"
    ],
    "mirror": "round tabletop vanity mirror",
    "bathroom_fixtures": [
      "chrome towel ring"
    ]
  },
  "composition": {
    "layout": "four-image collage",
    "framing": [
      "mirror-facing portrait",
      "product application close-up",
      "hands-on skincare routine shot",
      "smiling product-hold pose"
    ],
    "camera_angle": "eye level",
    "focus": "sharp subject and product, clean background",
    "aesthetic": "skincare editorial, clean beauty, lifestyle branding"
  },
  "camera": {
    "lens": "35mm",
    "aperture": "f/2.8",
    "iso": 200,
    "shutter_speed": "1/125",
    "white_balance": "neutral daylight"
  },
  "style_keywords": [
    "clean beauty",
    "skincare routine",
    "minimal bathroom",
    "natural glow",
    "lifestyle editorial"
  ]
}
```

## High-Resolution 3x3 Grid Photo Collage for Female Travel Photography

> Fotogerçekçi, lüks moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A high-resolution 3x3 grid photo collage featuring nine different dynamic poses, using an uploaded female face photo as a reference. The background is a vibrant azure sky dotted with white clouds, with strong chiaroscuro natural sunlight creating clear shadows. The subject is wearing a {argument name="clothing" default="knitted top and a skirt"} and a {argument name="accessory" default="delicate silver necklace"}. The photography utilizes various focal lengths, seamlessly switching from 35mm wide-angle full-body shots to 85mm close-up portraits. The poses are diverse, including: a powerful stance with legs apart and hands clasped over the head; a perspective shot with the palm pointing directly at the camera; a playful close-up featuring an "OK" hand gesture over one eye; a cheerful medium shot with hands cupping the cheeks; and a melancholic pose with one hand covering half the face. The image quality is up to 8K resolution, presenting an ultra-realistic effect, showcasing delicate skin texture, subsurface scattering, realistic fabric folds, and individually defined strands of hair, achieving the refined aesthetic of a high-end commercial fashion lookbook or lifestyle campaign.
```

## Dramatic Low-Key Portrait with Glowing Gemstones

> Portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A striking, low-key portrait of a {argument name="reference image" default="[reference image]"} with deep black skin, wearing a dark hooded garment that blends into a near-black background. The subject's eyes are closed, conveying a sense of serenity or meditation. The central focus is an ornate, multi-tiered necklace featuring white and yellow gemstones that appear to glow against the subject's skin. The lighting is highly dramatic, utilizing a top-down soft glow on the hood and a localized radiance emanating from the jewelry.
```

## Quiet Luxury Winter Editorial Prompt

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
quiet luxury winter editorial: plush texture, soft cinematic light, clean backdrop, and that confident stance that makes the whole frame feel expensive.
```

## Y2K Supermarket POV Action Shot Prompt

> Fütüristik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_generation_prompt": {
    "scene": {
      "type": "POV Action Shot (Fisheye)",
      "setting": "Neon-lit Supermarket Aisle",
      "background": {
        "furniture": "Metal shopping cart (trolley)",
        "decor": "Blurry shelves filled with colorful cereal boxes and Sarıyer Kola bottles and cans — jet black cola liquid clearly visible through packaging, bold red packaging and labels, glossy red accents, no other cola brands present",
        "atmosphere": "Late night mischief, fluorescent buzz, chaotic fun"
      },
      "props": "Holding a giant bag of spicy chips, blue raspberry slushie drink"
    },
    "subject": {
      "gender": "Female",
      "age": "20 years old",
      "body_type": "Fit and curvy, soft skin texture",
      "skin_tone": "Light tan with warm undertone",
      "vibe": "Rebellious, cheeky, brat aesthetic, energetic"
    },
    "face": {
      "structure": "Cute heart-shaped face",
      "skin": "Dewy finish, playful expression",
      "eyes": {
        "shape": "Almond shaped",
        "color": "Bright blue",
        "expression": "Winking playfully at the camera"
      },
      "lips": {
        "shape": "Pouty",
        "color": "Glossy cherry red",
        "expression": "Blowing a pink bubblegum bubble"
      },
      "makeup": {
        "style": "Y2K aesthetics",
        "details": "Glitter on eyelids, sharp eyeliner, glossy lips"
      }
    },
    "hair": {
      "color": "{argument name="hair color" default="Golden Blonde"}",
      "tone": "Warm honey highlights",
      "length": "Long",
      "style": "High twin pigtails with colorful scrunchies",
      "texture": "Slightly messy waves"
    },
    "pose": {
      "type": "Cramped / Sitting inside object",
      "stance": "Sitting scrunched up inside the metal shopping cart",
      "posture": "Leaning forward towards the lens",
      "legs": "One leg hanging out of the cart, the other bent inside",
      "arms": {
        "right": "Clutching the bag of chips to her chest",
        "left": "Holding the slushie cup close to the camera lens (forced perspective)"
      },
      "head": {
        "angle": "Tilted slightly, chin down",
        "focus": "Looking up through lashes at the camera"
      }
    },
    "outfit": {
      "top": {
        "type": "Striped Tube Top",
        "fit": "Tight",
        "detail": "{argument name="top pattern" default="Rainbow horizontal stripes"}",
        "style": "Retro 2000s"
      },
      "bottom": {
        "type": "Denim Overalls (Dungarees)",
        "style": "Streetwear",
        "fit": "Loose fit, one strap unbuckled hanging down",
        "length": "Long pants rolled up"
      },
      "footwear": {
        "type": "High-top canvas sneakers",
        "detail": "Classic black and white",
        "style": "Worn-in look"
      },
      "accessories": {
        "items": "Chunky silver chain necklace, colorful plastic rings"
      }
    },
    "lighting": {
      "type": "Direct Flash Photography",
      "source": "On-camera flash",
      "quality": "Hard shadows, over
```

## Ultra Photorealistic Nightlife Portrait Prompt

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "Ultra Photorealistic Nightlife Portrait",
  "subject": {
    "demographics": "Young female with a 'baddie' / influencer aesthetic",
    "appearance": {
      "skin": "Fair complexion, smooth texture with realistic skin pores and subtle highlights",
      "hair": "Long, straight platinum blonde hair with distinct {argument name="hair highlight color" default="hot pink"} face-framing highlights (money pieces)",
      "face": "Symmetrical features, sharp jawline",
      "makeup": "Soft glam look, winged eyeliner, sculpted brows, nude glossy lips with specular highlights"
    },
    "pose": {
      "body_position": "Sitting in the backseat of a car, slightly angled to the right",
      "hands": "Resting naturally on the car seat and lap",
      "gaze": "Direct eye contact with the camera, confident and alluring expression"
    }
  },
  "fashion": {
    "outfit_type": "Matching white faux-fur co-ord set",
    "garments": [
      {
        "item": "Cropped jacket/top",
        "details": "Long sleeves, fluffy white faux fur texture, collared neckline, silver zipper partially zipped"
      },
      {
        "item": "Mini skirt",
        "details": "Matching fluffy white faux fur, high-waisted, fitted"
      }
    ],
    "styling_details": "Exposed midriff showing toned stomach, minimal jewelry (delicate necklace)",
    "fabric_texture": "High-detail plush fur rendering, realistic fabric softness"
  },
  "environment": {
    "location": "Luxury vehicle interior (backseat)",
    "foreground_elements": "Black leather car seats with visible stitching and texture, car door panel",
    "background_elements": "Car window showing a dark night scene",
    "ambiance": "Nightlife, exclusive, transit to an event"
  },
  "lighting": {
    "type": "Direct Flash Photography / Paparazzi Style",
    "characteristics": [
      "High contrast",
      "Subject brightly illuminated",
      "Dark fall-off in the background",
      "Hard shadows behind the subject against the seat",
      "Reflective catchlights in eyes"
    ],
    "environment_lighting": "Subtle bokeh of yellow and white streetlights visible through the rear window"
  },
  "camera_settings": {
    "style": "Flash portrait",
    "focal_length": "35mm (capturing subject and car interior context)",
    "aperture": "f/4.0 (sharp subject focus)",
    "shutter_speed": "1/125s",
    "iso": "400",
    "composition": "Medium shot, eye-level, centered subject"
  },
  "technical_specifications": {
    "quality_tags": [
      "8k resolution",
      "Raw photo",
      "Hyper-realistic skin texture",
      "Ray tracing",
      "Unreal Engine 5 render style",
      "Detailed fur simulation",
      "Flash photography aesthetic"
    ]
  }
}
```

## Pink Aesthetic High-Fashion Portrait Prompt

> Minimal, retro moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the same face from the reference image without changing facial features 
{
  "subject": {
    "description": "A glamorous western woman with long, voluminous, wavy strawberry blonde hair",
    "pose": "Elegant crouching or squatting pose, one hand gracefully touching the chin, looking directly at the camera with a neutral, sophisticated expression",
    "features": "Fair skin, winged eyeliner, soft pink matte lipstick, defined facial structure"
  },
  "fashion_and_apparel": {
    "outerwear": "Oversized, structured {argument name="coat color" default="pink"} wool trench coat or blazer draped over the shoulders",
    "inner_wear": "Black satin or silk bodysuit with a scoop neckline and sheer corset detailing at the waist",
    "accessories": [
      "Opera-length pink satin gloves",
      "Gold vintage-style chunky button earrings"
    ],
    "footwear": "Classic black pointed-toe stiletto pumps"
  },
  "composition_and_setting": {
    "background": "Minimalist, solid light {argument name="background color" default="pink"} or off-white studio backdrop",
    "framing": "Full body shot, centered composition",
    "perspective": "Eye-level or slightly low angle to emphasize the pose and silhouette"
  },
  "lighting_and_aesthetic": {
    "style": "High-fashion editorial, noir-chic, timeless glamour",
    "lighting": "Spotlight effect creating a circular halo on the background behind the head; soft directional key light from the front-top to create subtle shadows and highlight fabric textures",
    "color_palette": "Monochromatic black and grey with warm accents from hair and skin tones"
  },
  "technical_details": {
    "camera_feel": "Shot on 85mm lens, sharp focus on subject, soft fall-off on background, high resolution, clean studio photography"
  }
}
```

## Cinematic Couple Embrace in Lake Prompt (Wet Fabric Physics)

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photoreal_cinematic_couple_in_lake_intimate_water_embrace",
      "version": "v1.0_LAKE_EMBRACE_WET_FABRIC_FILM_LOOK_EN",
      "priority": "highest"
    },
    "references": {
      "reference_image_1": {
        "source": "UPLOAD_REFERENCE_IMAGE (REQUIRED)",
        "purpose": "POSE_COMPOSITION_MOOD_LOCK",
        "strict_lock": true,
        "preserve_pose_relationship": true,
        "preserve_water_level": true,
        "preserve_color_mood": true
      }
    },
    "output_settings": {
      "aspect_ratio": "4:5",
      "orientation": "portrait",
      "resolution_target": "ultra_high_res",
      "render_style": "ultra_photoreal_cinematic_film_still",
      "sharpness": "crisp_subject_soft_background",
      "film_grain": "subtle_35mm_film_grain",
      "color_grade": "moody_green_warm_film",
      "dynamic_range": "high",
      "skin_tone": "natural_true_to_life"
    },
    "camera": {
      "camera_style": "cinematic portrait",
      "lens": "85mm",
      "aperture": "f/2.0",
      "shutter_speed": "1/800",
      "iso": 500,
      "white_balance": "overcast_daylight",
      "focus_mode": "eye_af",
      "focus_priority": "faces_then_hands"
    },
    "global_scene": {
      "setting": "calm dark-green lake water, subtle ripples, no visible shore, minimal distractions",
      "time_of_day": "overcast afternoon",
      "lighting": "soft diffused light, gentle contrast, realistic specular highlights on wet skin and wet fabric",
      "mood": "intimate, romantic, raw, cinematic"
    },
    "subjects": {
      "group": {
        "count": 2,
        "description": "romantic couple embraced in the lake water, physically realistic interaction",
        "male_subject": {
          "wardrobe": "{argument name="male shirt color" default="white"} button-up shirt, soaked and semi-transparent in places, fabric clinging naturally, no logos",
          "pose": "submerged to chest level, arms supporting the woman at her waist/hips, smiling up at her",
          "wetness_detail": "wet hair, droplets on face, wet shirt creases, waterline marks on fabric"
        },
        "female_subject": {
          "wardrobe": "cream/ivory satin or soft fabric dress, fully wet, heavier drape, clinging folds, realistic translucency (non-explicit), no modern lingerie look",
          "pose": "sitting/leaning on the man's thigh/hip support, torso forward, face close to his, intimate gaze",
          "wetness_detail": "wet hair strands, water droplets on shoulders/arms, dress hem submerged with floating folds"
        }
      }
    },
    "physics_realism": {
      "water_interaction": "realistic ripples radiating from bodies, small splashes at contact points, meniscus around fabric and skin, buoyancy consistent with pose",
      "fabric_behavior": "wet fabric weight visible, realistic fold tension, no stiff cloth",
      "skin_and_hair": "wet sheen on skin, natural pores, stray wet hair stra"
    }
  }
}
```

## Architectural Editorial Triptych Collage Prompt (Sadie Sink)

> Lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "project_metadata": {
    "title": "Sadie Sink Architectural Editorial",
    "style_category": "High-Fashion Editorial Collage",
    "aspect_ratio": "3:4",
    "composition_logic": "Dynamic Multi-Frame Grid"
  },
  "composition_engine": {
    "layout_specification": {
      "type": "Triptych Collage",
      "arrangement": "One dominant vertical frame (right), two equal-sized stacked square frames (left)",
      "alignment": "Strict geometric borders, 2px white gutters",
      "focal_points": "Alternating eye-level and slightly low-angle perspectives"
    },
  "visual_hierarchy": {
      "primary_element": "Subject identity consistency",
      "secondary_element": "Color blocking (White vs. Crimson Red)",
      "tertiary_element": "Architectural textures (Stone and Wood)"
    }
  },
  "subject_profile": {
    "identity": "{argument name="subject name" default="Sadie Sink"} ",
    "physical_attributes": {
      "physique": "Slim but toned, natural proportions",
      "skin": "Dehydrated, natural texture, soft glow, warm undertones",
      "hair": {
        "color": "Honey blonde with light brown lowlights",
        "length": "Chest-length",
        "texture": "Loose beach waves, wind-swept volume",
        "styling": "Elegant side-part"
      }
    },
    "performance": {
      "expressions": "High-fashion vacant stare, subtle parted lips, confident chin tilt",
      "poses": [
        "Frame 1 (Tall): Full length, leaning against a stone column, hip cocked",
        "Frame 2 (Top Left): Mid-shot, hands behind head, elbows flared to frame the face",
        "Frame 3 (Bottom Left): Close-up, slight shoulder shrug, hand touching the red door frame"
      ]
    }
  },
  "wardrobe_architecture": {
    "ensemble": "Two-piece resort-wear set",
    "top_layer": {
      "style": "Deconstructed Victorian-inspired corset",
      "fabric": "Heavyweight matte linen",
      "details": [
        "Exposed boning channels",
        "Delicate lace-up side ties",
        "Asymmetrical raw-edge hem",
        "Spaghetti straps"
      ]
    },
    "bottom_layer": {
      "style": "Voluminous tiered maxi-skirt",
      "fabric": "Semi-sheer silk chiffon over opaque cotton",
      "movement": "Caught in mid-flow, ethereal transparency at the edges"
    },
    "adornments": {
      "jewelry": [
        "Stacked 18k gold bangles on right wrist",
        "Dainty gold lariat necklace",
        "Minimalist gold huggie earrings"
      ]
    }
  },
  "environment_design": {
    "location": "Old World Mediterranean Courtyard",
    "key_assets": {
      "doors": "Vibrant, weathered deep {argument name="door color" default="red"} wooden double doors with brass hardware",
      "walls": "Sun-bleached limestone and ancient stone pillars",
      "atmosphere": "Dusty, romantic, historic European vibe"
    },
    "depth_mapping": {
      "bokeh_strength": "Medium-low (f/4.0 equivalent)",
      "background_detail": "Softly blurred but architectural shapes remain recognizable"
    }
  },
```

## High-Contrast Close-Up with Strict Identity and Texture Focus

> Minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
(3:4). A raw, high-contrast close-up [Snapshot] captured with an iPhone 17 Pro. NO ARTIFICIAL BOKEH. The entire frame is SHARP and in focus, from the fuzzy textile fibers to the skin texture.

Subject & Identity Locking:

Identity: Strictly preserve the exact face and unique features of the woman in Image 1 (Selfie).
Bio-Fidelity: Render high-fidelity "TrueLens" skin physics: visible micro-pores, a natural "satin-finish" healthy hydration glow, and fine vellus hair catching the light.
Silhouette Calibration (CRITICAL): Prioritize the dominant structural bust volume and the aggressive hourglass structural tapering at the waist. Focus on the high-impact anatomical depth and symmetry of the upper torso.
Outfit & Textural Interaction:

Clothing: She wears an oversized, heavy-weight Black Fuzzy Mohair Cardigan with a deep, open front.
Inner Detail: Beneath the cardigan, she wears a minimalist black garment featuring two ultra-thin 2mm black "V" shaped elastic straps that frame her décolletage.
Physicality & Tension: Her RIGHT HAND (featuring white manicured nails) is reaching forward, grabbing and pulling the fuzzy fabric of the cardigan together, creating realistic tension lines and textural bunching. The thin black straps show extreme elastic tension, creating a subtle, natural indentation against her fit form.
Pose & Composition:

Pose: A tight, front-on close-up shot focused on the upper torso and décolletage. Her long, dark chestnut hair is draped over her shoulders, framing the scene.
Geometry: The high-angle perspective highlights the structural volume and the 3D depth created by the contrast between the dark fuzzy fabric and her radiant skin.
Environment & Lighting:

Lighting: Brutal, Direct Afternoon Sunlight. The sun creates high-contrast highlights on the mohair fibers and her skin, casting sharp, defined shadows under the bust and within the folds of the cardigan.
Background (SHARP): A minimalist, neutral grey-toned matte wall. Every texture and grain of the wall is perfectly IN FOCUS. No artificial depth-of-field.
Quality: Raw unedited social-media "fit-check" aesthetic, high dynamic range, visible digital grain in the deep shadows, 8k resolution.
```

## Cinematic Street Photography Editorial Portrait

> Sinematik, retro moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Medium-up editorial portrait shot at eye-level, focusing on a man looking directly into the camera. He is standing in front of a grey textured stone building with an arched doorway in the background. The man is wearing a {argument name="coat type" default="[COAT]"}. Underneath, he wears a white dress shirt, a brown patterned tie, and a dark V-neck sweater.

Accessories include a dark navy wool flat cap, gold- rimmed aviator sunglasses with brown lenses, and black leather gloves. His hands are tucked into the large side pockets of the coat. To the left, a vintage black outdoor lantern is mounted on the stone wall with dry vines climbing around it.

Soft overcast natural lighting, cinematic street photography, high-end fashion editorial style, sharp focus on facial features and fabric textures, 8k resolution.
```

## High-End Fashion Editorial Portrait on Black Background

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": "professional studio photoshoot with a full black seamless background",
  "subject": {
    "gender": "adult woman",
    "pose": "confident, strong stance identical to the reference pose",
    "expression": "self-assured, poised, bold eye contact",
    "body_language": "upright posture, relaxed shoulders, confident presence"
  },
  "outfit": {
    "style": "elegant, bold, fashion-forward",
    "details": "sleeveless fitted top with a matching skirt extending just to the knees",
    "fit": "tailored and flattering without exaggeration",
    "color": "rich, attractive solid color that contrasts against black"
  },
  "lighting": {
    "setup": "minimal studio lighting",
    "style": "single key light with soft falloff",
    "focus": "fully isolated on the subject",
    "shadows": "controlled, cinematic shadows for depth"
  },
  "camera": {
    "framing": "medium to three-quarter shot",
    "angle": "eye-level, fashion editorial style",
    "lens": "85mm look with shallow depth of field"
  },
  "aesthetic": "high-end fashion editorial, confident, powerful, elegant",
  "quality": "ultra-detailed, sharp focus, realistic textures, studio-grade clarity, 4K",
  "background": "pure black, no gradients, no distractions"
}
```

## Moody Fashion Editorial Rainy Night Prompt

> Minimal moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
(Vertical 9:16 smartphone aspect ratio). A raw, high-contrast [Moody Fashion Editorial] snapshot taken with an iPhone 17 Pro on a rainy night. DIRECT HARD SMARTPHONE FLASH. NO ARTIFICIAL BOKEH. Everything is SHARP and in focus from the frozen raindrops to the distant blossoms.

Subject & Identity Locking:

Identity: Strictly preserve the exact face and unique features of the woman in Image 1 (Selfie).
Bio-Fidelity: Render high-fidelity "TrueLens" skin physics: visible micro-pores, natural "satin-finish" night hydration (mixed with rainwater), and a healthy cold-induced rosy flush on the cheeks. Fine vellus hair is visible along the jawline.
Hair: Wet-look chestnut hair, slightly wavy and clumping naturally into strands that frame her face and neck.
Silhouette Calibration: Amplify the dominant structural bust volume and the substantial, thick-toned leg presence. Focus on the aggressive hourglass structural tapering at the waist, highlighted by the cropped fit of the jacket.
Outfit & Textural Interaction:

Clothing: A minimalist {argument name="jacket color" default="Chocolate Brown"} Leather Moto Jacket (worn slightly open) and a matching High-Waisted Leather Micro-Mini Skirt.
Tension: The stiff leather shows extreme material tension over her fit form, with realistic micro-cracks in the grain and high-key highlights from the flash.
Matter Physics: The subject holds a transparent clear umbrella covered in heavy, crystalline raindrops. The flash freezes the "story" of every drop in mid-air.
Pose & Composition:

Pose: Standing outdoors under a blooming cherry blossom tree. She is leaning slightly toward the lens, reaching one hand out to touch the edge of the umbrella, creating a sense of intimate depth and anatomical volume.
Perspective: Handheld smartphone POV, captured at a medium-distance to showcase her fit silhouette and the atmospheric environment.
Environment & Lighting:

Lighting: Hard Direct Smartphone Flash. The flash creates a brilliant "halo" effect on the wet cherry blossoms and reflects intensely off the transparent umbrella, casting a sharp, pitch-black shadow of her form into the dark night.
Background (SHARP): A dark, moody outdoor setting. The detailed textures of the pink cherry blossoms, the wet asphalt of the street, and the distant streetlights are all perfectly IN FOCUS. No artificial blur.
Quality: Raw unedited social-media leak aesthetic, high dynamic range, visible digital grain in the deep shadows (ISO 1600 style), 8k resolution.
```

## Black and White Studio Portrait Collage (3x3 Grid)

> Minimal, stüdyo ışıklı moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Studio portrait collage in a 3x3 vertical grid, featuring the same woman in all frames. A slim woman in her mid 20swith dark brown, shoulder length hair and natural makeup, wearing a black knit sweater. Each frame shows a different expression and pose, from calm and confident to playful and thoughtful. Shot at eye level with soft studio lighting, medium close-up framing, and a clean dark background. Black and white, editorial fashion style, sharp focus, smooth tones, minimal retouching, high resolution.
```

## High-Fashion Editorial Collage in Mediterranean Courtyard

> Lüks moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "project_metadata": {
    "title": "Architectural Editorial",
    "style_category": "High-Fashion Editorial Collage",
    "aspect_ratio": "3:4",
    "composition_logic": "Dynamic Multi-Frame Grid"
  },
  "composition_engine": {
    "layout_specification": {
      "type": "Triptych Collage",
      "arrangement": "One dominant vertical frame (right), two equal-sized stacked square frames (left)",
      "alignment": "Strict geometric borders, 2px white gutters",
      "focal_points": "Alternating eye-level and slightly low-angle perspectives"
    },
    "visual_hierarchy": {
      "primary_element": "Subject identity consistency",
      "secondary_element": "Color blocking (White vs. Crimson Red)",
      "tertiary_element": "Architectural textures (Stone and Wood)"
    }
  },
  "subject_profile": {
    "identity": "the person of the picture I uploaded",
    "physical_attributes": {
      "physique": "Slim but toned, natural proportions",
      "skin": "fair and smooth,natural texture, soft glow, warm undertones",
      "hair": {
        "color": "black",
        "length": "Chest-length",
        "texture": "Loose beach waves, wind-swept volume",
        "styling": "Elegant side-part"
      }
    },
    "performance": {
      "expressions": "High-fashion vacant stare, subtle parted lips, confident chin tilt",
      "poses": [
        "Frame 1 (Tall): Full length, leaning against a stone column, hip cocked",
        "Frame 2 (Top Left): Mid-shot, hands behind head, elbows flared to frame the face",
        "Frame 3 (Bottom Left): Close-up, slight shoulder shrug, hand touching the red door frame"
      ]
    }
  },
  "wardrobe_architecture": {
    "ensemble": "Two-piece resort-wear set",
    "top_layer": {
      "style": "Deconstructed Victorian-inspired corset",
      "fabric": "Heavyweight matte linen",
      "details": [
        "Exposed boning channels",
        "Delicate lace-up side ties",
        "Asymmetrical raw-edge hem",
        "Spaghetti straps"
      ]
    },
    "bottom_layer": {
      "style": "Voluminous tiered maxi-skirt",
      "fabric": "Semi-sheer silk chiffon over opaque cotton",
      "movement": "Caught in mid-flow, ethereal transparency at the edges"
    },
    "adornments": {
      "jewelry": [
        "Stacked 18k gold bangles on right wrist",
        "Dainty gold lariat necklace",
        "Minimalist gold huggie earrings"
      ]
    }
  },
  "environment_design": {
    "location": "Old World Mediterranean Courtyard",
    "key_assets": {
      "doors": "Vibrant, weathered deep red wooden double doors with brass hardware",
      "walls": "Sun-bleached limestone and ancient stone pillars",
      "atmosphere": "Dusty, romantic, historic European vibe"
    },
    "depth_mapping": {
      "bokeh_strength": "Medium-low (f/4.0 equivalent)",
      "background_detail": "Softly blurred but architectural shapes remain recognizable"
    }
  },
  "lightin
```

## Elegant Metamorphosis Fashion Portrait Prompt

> Minimal, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "render_goal": "Elegant metamorphosis fashion portrait",
  "subject": {
    "pose": "{argument name="pose" default="female standing gracefully with one leg forward"}",
    "expression": "serene confident smile"
  },
  "wardrobe": "minimal couture gown in {argument name="gown color" default="pale lavender"} with silk elements transforming into butterfly-wing textures",
  "environment": {
    "location": "neutral editorial backdrop",
    "props": "soft silk wing fragments floating naturally, no glow"
  }
}
```

## Surreal Epic Coca-Cola Waterfall Landscape

> Fotogerçekçi, sinematik manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A surreal epic landscape where a giant Coca-Cola can pours cola like a roaring water-fall into a deep canyon. Massive mist clouds, dramatic depth, tiny trees and roads below to show scale. Bright red branding contrasts against blue water and sky. Ultra-sharp focus, dynamic motion, cinematic wide-angle, premi-um commercial ad style, hyper-realistic, 8K.
```

## High-Fashion Pink Editorial Portrait Prompt

> Minimal, retro moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the same face from the reference image without changing facial features 

{
  "subject": {
    "description": "A glamorous western woman with long, voluminous, straight black hair",
    "pose": "Elegant crouching or squatting pose, one hand gracefully touching the chin, looking directly at the camera with a neutral, sophisticated expression",
    "features": "Fair skin, winged eyeliner, soft pink matte lipstick, defined facial structure"
  },
  "fashion_and_apparel": {
    "outerwear": "Oversized, structured {argument name="coat color" default="electric pink"} wool trench coat or blazer draped over the shoulders",
    "inner_wear": "White satin or silk bodysuit with a scoop neckline and sheer corset detailing at the waist",
    "accessories": [
      "Opera-length pink satin gloves",
      "Gold vintage-style chunky button earrings"
    ],
    "footwear": "Classic black pointed-toe stiletto pumps"
  },
  "composition_and_setting": {
    "background": "Minimalist, solid light pink or off-white studio backdrop",
    "framing": "Full body shot, centered composition",
    "perspective": "Eye-level or slightly low angle to emphasize the pose and silhouette"
  },
  "lighting_and_aesthetic": {
    "style": "High-fashion editorial, noir-chic, timeless glamour",
    "lighting": "Spotlight effect creating a circular halo on the background behind the head; soft directional key light from the front-top to create subtle shadows and highlight fabric textures",
    "color_palette": "Monochromatic black and grey with warm accents from hair and skin tones"
  },
  "technical_details": {
    "camera_feel": "Shot on 85mm lens, sharp focus on subject, soft fall-off on background, high resolution, clean studio photography"
  }
}
```

## Outdoor Fashion Portrait in Flower Meadow Prompt

> Moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create an eye-catching outdoor fashion portrait in a lively flower meadow under bright daylight. Capture the shot with a digital camera using strong direct flash to highlight textures and add dramatic contrast. The camera is positioned low and slightly angled upward to amplify the visual impact. The subject has long, flowing dark brown wavy hair, wearing a plush, oversized {argument name="coat color" default="lavender"} faux fur coat that drapes naturally. Surround her with large, vividly colored poppies in shades of yellow, pink, and orange, scattered throughout the foreground and background for depth. A clear blue sky forms the backdrop, enhancing the contrast between the flowers and the outfit. Convey a playful, high-fashion editorial vibe with whimsical energy and bold color saturation. Focus on texture, dimension, and surreal yet stylish aesthetics through dramatic lighting and composition.
```

## Life-Size Holding Miniature Self Prompt

> Fotogerçekçi, sinematik 3B sahne üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A hyper-realistic 8K cinematic studio scene, shot with a 35mm lens and shallow depth of field. A life-size woman is on the right side of the frame, shown from the chest up, holding a much smaller, stylized, cartoonish version of herself. Both figures represent exactly the same person from the attached reference photo, with no alteration of identity.  Faithfully preserve all facial features, bone structure, face shape, natural proportions, nose, mouth, eyes, eyebrows, jawline, real skin texture, skin tone, long brown hair, natural asymmetries, and overall visual identity exclusively from the reference photo, without idealization, beauty enhancement, artificial smoothing, or aesthetic modification.  The life-size woman looks downward at the miniature with a slightly confused and amused expression: softly furrowed eyebrows and a subtly open mouth. She wears an oversized {argument name="shirt color" default="gray"} t-shirt with a colorful {argument name="shirt graphic" default="SpongeBob"} print, reproduced with absolute fidelity: loose fit, realistic fabric behavior, visible micro-texture, natural folds, detailed seams, and a crisp, accurate SpongeBob graphic. Her right hand is highly detailed and photorealistic, firmly holding the top of the miniature figure’s head.  The miniature figure is suspended in the air in the center-left of the frame. She is the same woman from the reference photo on a reduced scale, with identical facial features, hair, skin tone, and identity, but rendered with cartoonish proportions: an oversized head and very small body. She wears the exact same oversized gray SpongeBob t-shirt, perfectly identical in color, print, and design. Her expression is exaggerated and caricatured, showing terror or rage: mouth wide open screaming, bulging eyes, and deeply furrowed brows.  Lighting is dramatic and cinematic: a soft, diffused key light from the front-left creating gentle highlights and shadows, with a subtle rim light on the right side of the life-size woman to define her silhouette. The background is dark, neutral, and lightly textured, keeping full focus on the subjects.  Ultra-high micro-detail in skin pores, hair strands, fabric fibers, seams, and materials. Strong contrast between extreme photorealism and controlled caricature, while never losing the original identity or clothing accuracy.
```

## Photorealistic Portrait of a Nurse in a Modern Hospital

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Eye-level close-up portrait of an attractive blonde female nurse in her mid-20s, fair and even-toned skin with natural texture, light professional makeup with soft blush, subtle eyeliner, and natural lip color. She has a slight confident smirk, calm expressive eyes looking directly into the camera, creating a natural and engaging connection with the viewer. Her blonde hair is tied back in a neat ponytail, with a few loose stray strands around her temples and forehead for realism.
She is wearing a pale green short-sleeve scrub uniform, clean and professional, gently form-fitting without exaggeration, with tasteful neckline detail. Her posture is relaxed and confident, shoulders slightly back, hands clasped behind her back (not visible in frame but implied by posture).
The camera is positioned exactly at eye level, straight-on angle, close framing from upper chest to just above the head, emphasizing facial features and expression. No tilt or distortion. Natural perspective, realistic proportions.
Background shows a modern, clean hospital hallway with white and soft pastel tones, fluorescent ceiling lights forming soft bokeh highlights. Medical signage and corridor details are blurred using shallow depth of field to keep full attention on the subject.
Lighting is cinematic yet realistic: soft key light illuminating the face evenly, gentle highlights on cheekbones and hair, subtle shadows for depth. Photorealistic skin detail, sharp focus on eyes, high resolution, cinematic color grading, professional photography style, 85mm lens look, f/1.8 depth of field, ultra-realistic, sharp, clean, modern.
```

## Commercial Lifestyle Photograph with Garment Preservation Prompt

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "task_configuration": {
    "type": "GENERATE",
    "sub_type": "commercial_lifestyle_photograph",
    "reference_logic": "STRICT_GARMENT_PRESERVATION_FROM_INPUT",
    "aesthetic": "high_end_fashion_campaign",
    "output_quality": "high_resolution_photorealistic"
  },
  "subject_definition": {
    "identity": {
      "demographic": "white American female model",
      "physique": "fit",
      "appearance": "beautiful, naturally styled"
    },
    "skin_and_features": {
      "realism_rule": "macro_level_human_realism; NO artificial smoothing or filtering",
      "texture_details": [
        "visible natural pores",
        "light blemishes and imperfections",
        "soft expression lines around eyes/mouth",
        "light freckles across nose/cheeks",
        "natural skin highlights and subsurface scattering"
      ],
      "makeup": "minimal, natural or bare skin look"
    },
    "attire_constraints": {
      "source": "garment_from_input_reference_image",
      "preservation_rules": [
        "exact color dye and pattern",
        "exact fabric weave and texture",
        "exact thread stitching details",
        "exact fit, drape, and silhouette on the body"
      ],
      "modification_permission": "NONE"
    },
    "pose": {
      "framing": "full_body_standing",
      "style": "natural, relaxed, confident",
      "orientation": "facing camera to showcase garment front"
    }
  },
  "environment_definition": {
    "location_type": "outdoor_urban_sidewalk",
    "specific_context": "outside a stylish cafe or artisan building facade",
    "contextual_logic": "architecture and decor must visually complement the style of the reference clothing",
    "atmosphere": "elevated, authentic city life, cinematic quality",
    "background_elements": [
      "textured building materials (brick, stone, wood)",
      "cafe seating or planter boxes",
      "pavement textures"
    ]
  },
  "composition_and_layout": {
    "camera_principles": [
      "commercial fashion standards",
      "golden ratio alignment of subject",
      "product-centered focus",
      "grid alignment"
    ],
    "framing_scale": "wide full shot (head to toe)",
    "spatial_margins": {
      "top_margin": "generous clear space above head for potential typography/cropping",
      "side_margins": "balanced clear space",
      "bottom_margin": "clear space below feet"
    }
  },
  "lighting_and_optics": {
    "source": "natural daylight",
    "quality": "soft, diffused sunlight or open shade",
    "color_temperature": "warm undertones",
    "shadows": "clean, natural falloff defining form without harshness"
  },
  "constraints_and_prohibitions": {
    "must_not_render": [
      "airbrushed skin",
      "plastic textures",
      "studio backdrop",
      "altered clothing design",
      "overly posed look"
    ]
  }
}
```

## Elegant Three-Quarter Portrait with Identity Lock

> Lüks mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
    "subject": {
        "skin": "hyper-detailed realistic skin:1.3, visible pores, fair smooth complexion, subtle neutral-warm undertones, natural skin texture, light natural glow on collarbones and shoulders, very faint natural flush on cheeks",
        "facial_features": {
            "core_face": "Use the same face from the reference image without changing facial features"
        },
        "hair": "extremely long straight black hair, silky and glossy, center-parted, hair cascading smoothly over shoulders and down to lower back, slight natural movement",
        "body_figure": {
            "figure_type": "slender delicate hourglass figure:1.1, graceful feminine silhouette",
            "chest": "moderate bust, natural gentle cleavage accentuated by strapless structured bodice",
            "waist_and_hips": "slim defined waist, smooth transition to softly flared hips",
            "legs": "long slim legs, elegant proportion, partially visible below knee-length hem"
        },
        "position_and_proportion": {
            "framing": "three-quarter to almost full-body portrait, subject occupies approximately 80-85% of frame height",
            "composition_rule": "slightly off-center composition with subject leaning gently against wall on left side of frame, creating natural diagonal flow",
            "main_focus": "overall elegant silhouette, delicate dress texture and layering, face and upper body as primary focus"
        }
    },
    "pose_and_action": {
        "body_pose": "standing relaxed against wall, weight mostly on left leg, right leg slightly bent and crossed in front, natural gentle S-curve posture",
        "arms": "hands delicately clasped together in front of lower abdomen, fingers lightly interlocked, showing natural tension and softness",
        "head_position": "facing camera directly with slight downward tilt, soft and feminine expression",
        "weight_distribution": "natural body weight on back leg, relaxed shoulders, subtle forward hip tilt creating elegant curve"
    },
    "apparel_and_materials": {
        "dress": "luxury strapless mini cocktail dress, soft {argument name="dress color" default="champagne beige"} color, multi-layered design: fitted ruched satin-like bodice with subtle vertical pleating, voluminous tulle skirt with multiple sheer layers, ruffled tulle hem with fluffy textured frills, delicate gathered detailing throughout skirt",
        "shoes": "not clearly visible (likely nude or neutral heels)",
        "accessories": "slim silver ring on left hand, minimal jewelry overall"
    },
    "scene_and_environment": {
        "location": "modern luxury hotel/apartment corridor",
        "background": "rich dark brown wood-paneled walls with vertical paneling, warm matte finish, clean minimalist high-end interior",
        "details": "recessed ceiling lighting, subtle wall shadows, d"
    }
}
```

## Recontextualized Backpack Espresso Machine Concept Prompt

> Fotogerçekçi, minimal mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
BAGEL LABS

Recontextualized Everyday Object Series

OBJECT CATEGORY

Travel / Utility Hybrid (formerly Barware & Kitchen → recontextualized for mobility)

CHOSEN OBJECT

A backpack-integrated espresso machine and coffee cup —
an instantly recognizable travel object reimagined as a luxury, transparent, technological artifact.

THE CONCEPT

Recontextualize a backpack as a portable coffee ritual system.

A fully transparent, precision-engineered glass backpack houses a complete espresso machine inside its structure. The internal systems—hot water circulation, pressure chambers, grinder, bean hopper, extraction pathway, and embedded circuitry—are fully visible through the optical glass shell.

The backpack is not worn.
It stands upright on a minimal pedestal, presented as an object.

A glass coffee cup docks into a recessed port at the lower front of the backpack, where fresh espresso is actively pouring mid-flow. The moment is frozen at peak precision: mobility meets ritual, technology meets calm.

MATERIALS & FINISH
BACKPACK BODY

Precision-molded optical glass shell, subtle {argument name="glass tint" default="green-tinted"} transparency

Architectural rigidity, engineered thickness

Backpack silhouette remains recognizable: shoulder straps, spine curve, base structure — all rendered in transparent or neutral technical materials

INTERNAL COMPONENTS (VISIBLE)

Hot water tubes and pressure lines in brushed titanium and warm grey

Coffee bean hopper visible at the upper spine, filled with realistic roasted beans

Grinding and extraction mechanisms exposed, clean, symmetrical, and highly engineered

Internal layout reads like a mechanical blueprint in 3D space

CIRCUITRY (STRUCTURAL, NOT DECORATIVE)

Embedded PC-style circuitry integrated into the internal frame

Circuit paths in restrained BAGEL LABS orange

Supporting elements in graphite and titanium tones

Circuits behave like a nervous system—logical, physical, purposeful

No glow, no LEDs, no sci-fi effects

STRAPS & ERGONOMICS

Shoulder straps in translucent technical polymer or matte titanium structure

Strap attachment points are mechanical, exposed, and precise

No fabric, no padding, no softness — engineered luxury only

COFFEE CUP

Matching optical glass cup with weighted base

Minimalist silhouette

Subtle BAGEL LABS logomark engraved near the base

Cup positioned directly beneath the extraction port, receiving coffee mid-pour

BRAND INTEGRATION

BAGEL LABS logomark engraved into the glass backpack body (rear or side plane)

Matching etched mark on the cup

No stickers, no printed logos, no surface graphics

ACTION / MOMENT

Espresso is actively flowing from the backpack-integrated machine into the glass cup

Liquid motion captured mid-stream

Realistic crema formation and color gradient visible through glass

Motion feels intentional, controlled, and engineered

PRESENTATION (NO PA
```

## Clothing Item Cut-Out Sticker Prompt

> Moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Collect each clothing item worn by the girl in the first photo and place them on top of the same photo as flat, cut-out stickers. Keep every piece neatly outlined like a collage sticker. Next to each stickered clothing item, write its name in a soft pencil-style handwritten label, creating an aesthetic fashion-notebook look.
```

## Winter Full Hourglass Portrait with Puffer Jacket Prompt

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "description": "Beautiful young Chinese female with fair skin and long, straight natural dark hair (dark brown to black). She has an athletic full hourglass figure. She is wearing a tight white ribbed bodysuit that is high-cut at the hips, revealing the natural curve of her hips. She wears low-rise white sweatpants positioned below the waist. A white puffer jacket is worn open and draped loosely off her shoulders. She has large, white fluffy earmuffs on her head.",
    "anatomy_and_proportions": {
      "bust": "Prominent, full, and heavy bust volume appearing naturally affected by gravity. Visual mass is significant and projects forward. Subtle fabric tension is visible through the ribbed material, without artificial lifting.",
      "body_type": "Athletic full hourglass physique with visible muscle tone and soft tissue realism. High hips with natural body curvature.",
      "skin": "Fair, clear East Asian skin tone with realistic texture and subtle pores. Not airbrushed or plastic."
    }
  },
  "pose": {
    "stance": "Standing facing directly forward towards the camera. Weight distributed evenly.",
    "arms": "Arms relaxed by her sides, slightly pushed outward by the bulk of the puffer jacket.",
    "head": "Head straight, face forward, gaze locked directly on the viewer.",
    "expression": "Neutral to slightly pouty expression, calm and composed.",
    "orientation": "Frontal view, no rotation."
  },
  "environment": {
    "setting": "Outdoor winter scene with heavy snow coverage.",
    "background_elements": [
      "A rustic wooden log cabin with snow on the roof visible on the left side.",
      "Tall pine trees covered in snow in the background.",
      "White snow covering the ground.",
      "Cold winter atmosphere."
    ]
  },
  "camera": {
    "shot_type": "Medium shot, capturing from the mid-thighs up.",
    "angle": "Eye-level, straight on.",
    "focal_length": "50mm to 85mm portrait lens.",
    "depth_of_field": "Slight bokeh on the background trees and cabin, while keeping environmental context legible.",
    "framing": "Subject centered horizontally within a vertical frame.",
    "perspective": "Natural perspective, no wide-angle distortion."
  },
  "lighting": {
    "type": "Natural overcast daylight.",
    "quality": "Soft, diffuse, and even lighting with no harsh facial shadows.",
    "direction": "Global illumination consistent with a cloudy snowy day.",
    "tone": "Cool winter tones with bright white reflections from surrounding snow."
  },
  "mood_and_expression": {
    "mood": "Chill, wintery, cozy yet confident.",
    "expression": "Direct, calm, self-assured."
  },
  "style_and_realism": {
    "style": "Raw photorealism, phone camera aesthetic.",
    "rendering": "High fidelity, unpolished realism capturing distinct material textures such as ribbed fabric, puffer jacket material, faux fur earmuffs, and natural human skin.",
    "fidelity": "Physics-based rendering of "
  }
}
```

## Modern Lifestyle Mirror Selfie Prompt

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "descriptive_image_generation",
  "image_ratio": "2:3",
  "subject": {
    "gender": "Female",
    "age_range": "early 20s",
    "hair": "Long dark brown hair tied in a high ponytail",
    "accessories": "White fabric headband",
    "skin_tone": "Fair to light-medium",
    "expression": "Soft confident expression, subtle smile",
    "pose": "Standing with one foot propped on a stool, body slightly angled, holding a {argument name="smartphone color" default="pink"} smartphone for a mirror selfie"
  },
  "attire": {
    "top": "White halter-style crop top",
    "bottom": "Short brown micro mini skirt",
    "hosiery": "White thigh-high stockings with lace trim",
    "footwear": "White pointed-toe high heels"
  },
  "props": {
    "phone": "Pink smartphone",
    "furniture": "Light wood stool"
  },
  "environment": {
    "location": "Bright minimalist indoor room",
    "flooring": "Light wood flooring",
    "background_elements": [
      "Full-length mirror",
      "Large green potted plant",
      "Neutral walls"
    ]
  },
  "lighting": {
    "type": "Soft natural daylight",
    "quality": "Even, diffused, flattering"
  },
  "camera": {
    "shot_type": "Full-body mirror selfie",
    "angle": "Eye-level",
    "focus": "Sharp focus on subject, clean background"
  },
  "style": {
    "aesthetic": "Modern, clean, lifestyle fashion photography",
    "realism": "High realism, photorealistic",
    "quality": "Ultra-detailed, high resolution"
  },
  "negative_prompts": [
    "face distortion",
    "extra limbs",
    "blurry image",
    "low resolution",
    "overexposed lighting",
    "unnatural body proportions",
    "AI artifacts"
  ]
}
```

## Glamorous New Year's Eve Fashion Shoot

> Lüks, stüdyo ışıklı moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_data": {
    "subject": {
      "description": "A beautiful young women.",
      "expression": "Soft smile, looking directly at the camera.",
      "pose": "Seated in an elegant posture, one hand gently touching the chin/jawline, the other hand resting on the thigh, legs angled with crossed ankles."
    },
    "attire": {
      "clothing": "A sparkling silver sequined jumpsuit with spaghetti straps, fitted trousers.",
      "outerwear": "A large, luxurious white faux fur coat draped loosely off the shoulders.",
      "shoes": "Silver metallic strappy high-heeled sandals.",
      "accessories": "Gold wristwatch on the left wrist."
    },
    "environment": {
      "background": "Solid vibrant {argument name="background color" default="red"} studio backdrop.",
      "decor_top": "Silver foil helium balloons spelling out '{argument name="year" default="2026"}' hanging centered at the top.",
      "decor_ground": "Two silver disco balls placed on the floor (one on the left, one on the right), red rectangular confetti scattered across the red floor."
    },
    "technical_details": {
      "lighting": "Professional studio lighting, softbox illumination, bright and even, no harsh shadows.",
      "style": "Commercial fashion photography, New Year's Eve celebration theme, glamorous, festive, high-definition, 8k resolution.",
      "shot_type": "Full body shot, eye-level angle."
    },
    "negative_prompt": "blurry, low resolution, bad anatomy, distorted text, wrong year, dark, gloomy, illustration, painting, cartoon, extra limbs, closed eyes."
  }
}
```

## Timeless Interior Fashion Portrait Prompt

> Minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "render_goal": "Timeless interior fashion portrait",
  "subject": {
    "pose": "female standing beside a grand piano",
    "expression": "gentle composed smile"
  },
  "wardrobe": "matte silk gown in {argument name="gown color" default="soft charcoal"}",
  "environment": {
    "location": "private music room",
    "props": "polished wood, low warm lighting"
  }
}
```

## Nighttime Lifestyle Couple Portrait with Direct Flash Prompt

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{ "image_type": "photograph", "genre": "nighttime lifestyle portrait", "composition": { "framing": "medium-full shot", "orientation": "vertical", "subjects_position": "two subjects centered, standing closely side by side with bodies touching", "camera_angle": "eye-level", "pose": "intimate and relaxed; female subject embracing male subject at chest and waist", "cropping": "cropped slightly below knees", "depth_of_field": "shallow to moderate; subjects in focus, background fades into darkness" }, "subjects": [ { "gender_presentation": "female", "approximate_age": "young adult", "build": "slim", "facial_features": "long wavy dark brown hair, softly contoured cheeks, defined eyebrows, natural makeup with glossy lips", "expression": "calm, subtle smile", "gaze": "looking directly at camera", "clothing": { "type": "fitted sleeveless dress", "pattern": "{argument name="dress pattern" default="bold abstract psychedelic swirl pattern"}", "colors": [ "red", "blue", "green", "orange", "white", "black" ], "fit": "body-hugging, ankle-length" }, "accessories": { "jewelry": "bracelet, ring", "nails": "long, red polished nails" } }, { "gender_presentation": "male", "approximate_age": "young adult", "build": "average to athletic", "facial_features": "curly dark hair, light stubble, soft jawline", "expression": "neutral to slight smile", "gaze": "looking directly at camera", "clothing": { "top": "white lightweight linen button-up shirt, partially unbuttoned", "bottom": "light beige or off-white linen pants", "style": "resort casual, relaxed" }, "accessories": { "wristwear": "dark bracelet", "handheld_object": "short glass tumbler with dark beverage" } } ], "interaction": { "relationship_cues": "romantic, affectionate", "body_language": "close embrace, relaxed shoulders, physical contact at torso and waist" }, "environment": { "setting": "outdoor nighttime location", "background": "dark foliage and greenery", "visibility": "background mostly obscured by darkness", "ground": "grass lawn", "context": "evening social event or party" }, "lighting": { "type": "direct on-camera flash", "key_light": "strong frontal flash", "fill": "minimal ambient light", "color_temperature": "neutral flash with warm skin tones", "shadows": "hard falloff into dark background, minimal shadow detail behind subjects", "skin_tone_rendering": "bright, smooth, slightly reflective highlights" }, "color_palette": { "dominant_colors": [ "black", "white", "green" ], "accent_colors": [ "red", "blue", "orange" ], "contrast_level": "high due to flash against dark background", "overall_mood": "romantic, stylish, intimate" }, "technical_details": { "camera_type": "smartphone or consumer digital camera", "lens_effect": "standard focal length", "focus": "sharp focus on subjects", "exposure": "subjects slightly overexposed relative to background", "noise": "low on subjects, minimal visible grain", "flash_usage": "enabled and dominant" }, "stylistic_characte
```

## Photorealistic Travel Portrait with Identity Lock

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_generation_prompt",
  "aspect_ratio": "3:4",
  "style": "photorealistic travel portrait, cinematic daylight",
  "identity_preservation": {
    "use_reference_image": true,
    "strict_identity_lock": true,
    "alter_face": false,
    "alter_features": false,
    "notes": "Preserve the subject’s face, hair, and natural features exactly as in the reference image."
  },
  "subject": {
    "gender": "female",
    "pose": {
      "body": "standing by a riverside railing",
      "orientation": "body slightly angled toward the river",
      "head": "turned to face the camera"
    },
    "expression": "natural, calm, soft smile",
    "appearance": {
      "hair": "long, loose, naturally wavy",
      "wardrobe": "black long coat, elegant and minimal"
    }
  },
  "environment": {
    "location": "{argument name="location" default="London riverside promenade"}",
    "landmarks": [
      "Tower Bridge clearly visible",
      "River Thames",
      "modern London skyline in the distance"
    ],
    "time_of_day": "clear daytime",
    "weather": "sunny with blue sky"
  },
  "lighting": {
    "type": "natural daylight",
    "direction": "side and front sunlight",
    "effects": [
      "soft shadows",
      "natural highlights on hair and coat",
      "clear architectural detail"
    ]
  },
  "camera": {
    "shot_type": "medium-full shot",
    "angle": "eye-level",
    "focus": "sharp focus on subject",
    "depth_of_field": "moderate, background slightly softened",
    "quality": "HD / ultra-clear"
  },
  "quality": {
    "resolution": "high definition",
    "realism": "photorealistic",
    "detail_level": "high detail in architecture, water, and textures"
  },
  "constraints": [
    "Do not change facial features",
    "Do not alter clothing style",
    "No text, logos, or watermarks",
    "No artificial filters",
    "No distortion of landmarks"
  ],
  "output_goal": "Create an HD, photorealistic image of the same woman at Tower Bridge, keeping the original setting and outfit, but with her head turned to look directly at the camera in natural daylight."
}
```

## Cinematic Wet Hair Portrait Prompt

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic low-key portrait of a young woman with wet, tousled dark hair framing her face, water droplets on her skin, intense {argument name="eye color" default="green"} eyes staring directly into the camera, dramatic moody lighting with warm rim light from behind and soft shadows across her face, shallow depth of field, ultra-realistic skin texture, 85mm lens look, f1.8, dark background, film still aesthetic, high contrast, emotional, atmospheric, photorealistic, 8k detail
```

## Luxurious Perfume Campaign Editorial Prompt

> Sinematik, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Luxurious perfume campaign editorial, dynamic 4-panel grid composition, 9:16 aspect ratio.

BACKGROUND: Deep burgundy foundation - rich wine ({argument name="background color" default="#3F0D19"}) as dominant canvas, alternating with ruby panels (#672232), strategic blocks of velvet plum (#2C0911) creating subtle tonal depth.
LAYOUT: Asymmetric editorial grid - full-bleed hero shot commanding 60% of canvas, detail images in varying sizes, intentional contrast between negative space and illuminated product details.
FASHION IMAGES: Cinematic glamour styling - a {argument name="subject ethnicity" default="Korean"} woman emerging from shadow, butterfly lighting revealing curves and product details - Hourglass figure with luminous skin, crimson silk gown with lace details, dewy skin, glossy lips, seductive gaze, shot on Canon EOS R5 with 85mm f/1.2 lens, Rembrandt lighting, dramatic shadows.
TYPOGRAPHY: Elegant contrast - collection title "{argument name="collection title" default="SCARLET NIGHT"}" in refined rose gold (#B76E79) serif with subtle metallic sheen (Bodoni style), product names in warm ivory (#F8F0E3).
COLOR STORY: Strictly burgundy and rose gold - burgundy absorbs, rose gold illuminates.
Style: Gucci glamour, Dior drama, cinematic luxury, mystery as sophistication, rose gold as accent.
FOOTER: Refined rose gold line above, "ROUGE & OR COLLECTION" in small elegant rose gold capitals on dark background. 

Style keywords: premium fragrance, Korean beauty, cinematic editorial, sensual, opulent. A stylish handwritten signature Willy is elegantly and small letters placed at the Bottom Right corner.
```

## Gourmet Cake Editorial Hero Prompt

> Minimal, lüks arayüz tasarımı üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Appetizing food editorial landing page hero, featuring a captivating {argument name="subject ethnicity" default="Eurasian"} woman, sensual and glamorous, showcasing a vertical multi-layered gourmet cake visualization. The cake is constructed as seven miniature luxury food scenes, each representing a different cuisine and dining style. The layers include a French patisserie display under soft studio lighting, a Japanese sushi bar with intricate plating, an Italian trattoria with rustic ingredients, a Nordic minimalist breakfast, a vibrant Mexican street food stall, a traditional Korean royal banquet, and a dark luxury chocolate dessert bar. Each scene is labeled with cuisine type, dish name, and styling notes in elegant typography, designed like edible jewelry pieces. The backdrop features soft Rembrandt lighting with a subtle vignette, creating a dreamy, editorial atmosphere. Shot with Canon EOS R5, 100mm macro, shallow depth of field creating creamy bokeh. The composition includes subtle pairing suggestions floating as holographic elements - {argument name="pairing 1" default="champagne for French"}, sake for Japanese. The entire setup resembles a luxury food boutique display, perfect for social media sharing, combining high culinary precision with seductive sophistication and cutting-edge aesthetic appeal. The woman wears a figure-hugging chocolate gown and pearl necklace. Color palette: Warm Earth Tones (Mocha, Sienna, Umber, Gold) transitioning to Cool Pastels & Whites (Vanilla, Cream, Ivory). A stylish handwritten signature Willy is elegantly and small letters placed at the Bottom Right corner.. A stylish handwritten signature Willy is elegantly and small letters placed at the Bottom Right corner
```

## Ultra-Realistic Wildlife Photography with Cheetah Cub

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic wildlife photography scene: An elegant woman in a minimal earthy-toned wrap dress with thin straps, lying flat on the grassy ground while holding a professional DSLR camera with a large telephoto lens, intently focusing on wildlife. A playful cheetah cub sits on her shoulder, curiously gazing into the distance. Golden hour natural light bathes the African savannah background, with cinematic depth of field, vibrant colors, and 8K ultra-detailed realism,4:5 image ratio.
```

## High-Fashion Editorial Portrait in Pink and Black

> Minimal, retro moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the same face from the reference image without changing facial features 

{
  "subject": {
    "description": "A glamorous western woman with long, voluminous, wavy strawberry blonde hair",
    "pose": "Elegant crouching or squatting pose, one hand gracefully touching the chin, looking directly at the camera with a neutral, sophisticated expression",
    "features": "Fair skin, winged eyeliner, soft pink matte lipstick, defined facial structure"
  },
  "fashion_and_apparel": {
    "outerwear": "Oversized, structured {argument name="outerwear color" default="pink"} wool trench coat or blazer draped over the shoulders",
    "inner_wear": "Black satin or silk bodysuit with a scoop neckline and sheer corset detailing at the waist",
    "accessories": [
      "Opera-length {argument name="gloves color" default="pink"} satin gloves",
      "Gold vintage-style chunky button earrings"
    ],
    "footwear": "Classic black pointed-toe stiletto pumps"
  },
  "composition_and_setting": {
    "background": "Minimalist, solid light pink or off-white studio backdrop",
    "framing": "Full body shot, centered composition",
    "perspective": "Eye-level or slightly low angle to emphasize the pose and silhouette"
  },
  "lighting_and_aesthetic": {
    "style": "High-fashion editorial, noir-chic, timeless glamour",
    "lighting": "Spotlight effect creating a circular halo on the background behind the head; soft directional key light from the front-top to create subtle shadows and highlight fabric textures",
    "color_palette": "Monochromatic black and grey with warm accents from hair and skin tones"
  },
  "technical_details": {
    "camera_feel": "Shot on 85mm lens, sharp focus on subject, soft fall-off on background, high resolution, clean studio photography"
  }
}
```

## All-White Athletic Celebrity Grid Prompt

> Fotogerçekçi, minimal mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "Ultra Photorealistic 2x2 Grid Collage",
  "format": {
    "layout": "2x2 grid split screen",
    "aspect_ratio": "9:16",
    "panel_count": 4
  },
  "art_style": {
    "aesthetic": "High-end lifestyle photography, 'clean girl' aesthetic, paparazzi style, celebrity street style",
    "visual_tone": "Bright, airy, organic, healthy, candid"
  },
  "environment": {
    "location": "Upscale outdoor resort walkway or modern garden patio",
    "architecture": "Modern white structural pergola/beams overhead, sleek concrete planters",
    "flooring": "Grey rectangular stone paving tiles",
    "foliage": "Lush green manicured bushes, trees, and vines in the background",
    "weather": "Sunny summer day"
  },
  "lighting": {
    "type": "Natural daylight",
    "quality": "Soft diffused sunlight filtered through pergola, creating gentle shadows (dappled light), bright high-key lighting",
    "direction": "Overhead/Global illumination"
  },
  "global_styling": {
    "outfit": "Matching all-white athletic set",
    "garments": [
      "White ribbed cropped sports bra/tank top with scoop neck",
      "White high-waisted fitted biker shorts"
    ],
    "footwear": "Clean white chunky sneakers with white crew socks",
    "accessories": "Small black minimalist shoulder bag (worn on shoulder)"
  },
  "subjects_breakdown": {
    "panel_1_top_left": {
      "subject_likeness": "Resembling {argument name="subject 1" default="Sadie Sink"}",
      "hair": "Long, wavy strawberry blonde/ginger hair, center part",
      "pose": "Standing facing forward, right hand at side, left hand holding drink",
      "expression": "Soft subtle smile, looking at camera"
    },
    "panel_2_top_right": {
      "subject_likeness": "Resembling {argument name="subject 2" default="Sydney Sweeney"}",
      "hair": "Long straight blonde hair",
      "pose": "Leaning back against a concrete planter wall, one leg slightly bent",
      "action": "Sipping from the straw of the drink",
      "expression": "Relaxed, candid"
    },
    "panel_3_bottom_left": {
      "subject_likeness": "Resembling Ana De Armas",
      "hair": "Medium-Short blonde hair, loose",
      "pose": "Walking forward towards camera, arms relaxed",
      "action": "Holding drink in left hand",
      "expression": "Happy, bright smile"
    },
    "panel_4_bottom_right": {
      "subject_likeness": "Resembling Billie Eilish",
      "hair": "Bleached blonde shag/wolf cut with layers and bangs",
      "pose": "Deep squat/crouch pose (street style)",
      "action": "Holding drink with both hands near knees",
      "expression": "Neutral, cool, looking slightly upward/away"
    }
  },
  "props": {
    "item": "Iced matcha latte or green smoothie",
    "details": "Clear plastic takeaway cup with lid and straw, bright green liquid"
  },
  "camera_settings": {
    "camera": "Sony A7R IV or Canon EOS R5",
    "lens": "35mm (for full body environmental context) or 50mm",
    "aperture": "f/2.8 to f/4
```

## Photorealistic Vietnamese Afternoon Tea Scene

> Fotogerçekçi, sinematik yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Shot on Canon EOS R5, 50mm f/1.2 lens, elegant afternoon tea scene in a bright sunroom, Vietnamese woman's hands pouring green tea from a celadon teapot with a crane motif into a matching teacup, visible steam rising, three-tiered glass cake stand displaying matcha scones with yuzu zest and mochi fruit tarts on top tier and dragon fruit finger sandwiches on bottom tier, sesame cookies on saucer, white orchid arrangement in ceramic vase, matching green tea set, marble table with silk napkin, open sliding doors showing vivid tropical garden with lanterns bokeh, bright pendant lamp illuminating background, comfortable rattan chair with silk pillow, refined cozy atmosphere, diffused ambient lighting, photorealistic food photography, shallow depth of field, cinematic composition, serene aesthetic, golden hour indoor lighting.. A stylish handwritten signature Willy is elegantly and small letters placed at the Bottom Right corner
```

## High-End Fashion Lookbook Photograph Prompt (Outdoor)

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "task_configuration": {
    "type": "GENERATE",
    "sub_type": "commercial_lifestyle_photograph",
    "reference_logic": "STRICT_GARMENT_PRESERVATION_FROM_INPUT",
    "aesthetic": "high_end_fashion_campaign_lookbook",
    "output_quality": "high_resolution_photorealistic"
  },
  "subject_definition": {
    "identity": {
      "demographic": "{argument name="demographic" default="white American female"}",
      "physique": "fit",
      "appearance": "beautiful, naturally styled"
    },
    "skin_and_features": {
      "realism_rule": "macro_level_human_realism; NO artificial smoothing or filtering",
      "texture_details": [
        "visible natural pores",
        "light blemishes and imperfections",
        "soft expression lines around eyes/mouth",
        "light freckles across nose/cheeks",
        "natural skin highlights and subsurface scattering"
      ],
      "makeup": "minimal, natural "
    },
    "attire_constraints": {
      "source": "garment_from_input_reference_image",
      "preservation_rules": [
        "exact color dye and pattern",
        "exact fabric weave and texture",
        "exact thread stitching details",
        "exact fit, drape, and silhouette on the body"
      ],
      "modification_permission": "NONE"
    },
    "pose": {
      "framing": "full_body_standing",
      "style": "natural, relaxed, confident",
      "orientation": "facing camera to showcase garment front"
    }
  },
  "environment_definition": {
    "location_type": "{argument name="location type" default="cinematic_outdoor_setting"}",
    "contextual_logic": "must locate an upscale, natural environment that thematically complements the specific style of the reference clothing (e.g., curated urban garden, textured architectural promenade, or coastal path)",
    "atmosphere": "elevated, serene, authentic daylight",
    "background_blur": "moderate bokeh to keep focus on subject"
  },
  "composition_and_layout": {
    "camera_principles": [
      "commercial fashion standards",
      "golden ratio alignment of subject",
      "product-centered focus"
    ],
    "framing_scale": "wide full shot",
    "spatial_margins": {
      "top_margin": "generous clear space above head for potential typography/cropping",
      "side_margins": "balanced clear space",
      "bottom_margin": "clear space below feet"
    }
  },
  "lighting_and_optics": {
    "source": "natural daylight",
    "quality": "soft, diffused sunlight or open shade",
    "color_temperature": "warm undertones",
    "shadows": "clean, natural falloff defining form without harshness"
  },
  "constraints_and_prohibitions": {
    "must_not_render": [
      "airbrushed skin",
      "plastic textures",
      "studio backdrop",
      "altered clothing design",
      "overly posed look"
    ]
  }
}
```

## Rooftop Terrace Fashion Shot Prompt

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": {
    "subject_details": {
      "description": "young woman with long {argument name="hair color" default="honey blonde"} wavy hair",
      "outfit": "fitted black ribbed halter-neck mini dress, backless design",
      "footwear": "black suede high-heeled sandals with ankle straps",
      "accessories": "small black leather shoulder bag with thin strap",
      "pose": "full body profile shot, leaning gently against a glass balcony railing, looking back over shoulder towards camera, legs crossed at ankles",
      "expression": "soft confident gaze, slight smile"
    },
    "environment": {
      "location": "modern high-rise rooftop terrace",
      "foreground": "glass safety railing with metal fixtures, grey tiled flooring",
      "background": "dense urban city skyline, skyscrapers in distance, blurred depth of field"
    },
    "lighting": {
      "type": "bright natural daylight",
      "direction": "soft sunlight illuminating face and hair",
      "atmosphere": "clean, airy, cinematic urban lighting"
    },
    "technical_settings": {
      "style": "photorealistic, raw photo, 8k uhd",
      "camera_effects": "bokeh background, sharp focus on subject, high shutter speed",
      "quality_tags": "masterpiece, best quality, ultra detailed skin texture, realistic fabric texture",
      "aspect_ratio": "vertical 9:16"
    }
  }
}
```

## Ultra-Realistic Cinematic Beverage Product Photography

> Fotogerçekçi, sinematik ürün fotoğrafı üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic cinematic beverage product photography of a vibrant red aluminum juice can captured from a dramatic top-down three-quarter angle, the can lying diagonally on its side as if just knocked over, with the opening facing toward the camera and a burst of clear liquid splashing outward in a sweeping arc across the frame; the can features bold white “Juice” typography and strawberry illustrations, partially wet with condensation and splash residue; glossy liquid spreads across a reflective surface below, forming dynamic ripples and elongated reflections that lead the eye through the composition; fresh ripe strawberries—whole, sliced, and halved—are scattered asymmetrically around the can, some resting in the liquid pool, others frozen mid-air as if tossed, with varying scale and depth for cinematic layering; background is a smooth coral-to-rose gradient studio backdrop viewed at an angle, enhancing depth and motion; lighting is dramatic cinematic lighting with a strong side key light creating sharp highlights on the can rim and liquid splash, rim lighting separating strawberries from the background, and deep soft shadows adding contrast and mood; color palette is bold and saturated with strawberry red, crimson liquid, fresh green leaves, and warm pink tones; composition is dynamic and off-center with diagonal energy, shallow depth of field isolating the can while foreground splashes remain crisp and background elements softly fall off; mood is energetic, high-impact, and cinematic, evoking premium blockbuster-style beverage advertising with hyper-realistic fluid dynamics, ultra-detailed textures, dramatic contrast, and 8K ultra-high-definition realism.
```

## Punk-Couture Red Carpet Portrait Prompt (Sydney Sweeney Likeness)

> Fotogerçekçi moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "structured_prompt": {
    "shot_type": "Medium shot, red carpet celebrity photography, high-fashion editorial portrait",
    "subject_description": {
      "demographics": "Young female celebrity, early 20s, resemblance to {argument name="celebrity likeness" default="Sydney Sweeney"}",
      "physique": "Fit, slender figure, fair skin tone",
      "facial_features": "Soft almond-shaped blue eyes, rosy cheeks, soft pink lips, gentle expression"
    },
    "hair_and_makeup": {
      "hair_style": "Chin-length textured blonde bob, wavy and tousled, middle part, soft highlights",
      "makeup_look": "Fresh-faced glam, glowing skin, defined lashes, nude-pink lipstick, subtle blush"
    },
    "apparel": {
      "outfit_style": "Punk-couture, grunge-glam, Vivienne Westwood inspired aesthetic",
      "top_details": "Structured corset bodice in purple and black tartan plaid, multiple black leather buckle straps across the chest, silver hardware, silver gothic cross charm attached to center strap, ruffled neckline",
      "bottom_details": "Voluminous mini skirt with jagged handkerchief hem, mixed purple plaid and solid black fabric, purple satin bows, black lace tulle underlay/trim",
      "accessories": "Delicate diamond tennis necklace, silver rings, small stud earrings"
    },
    "pose_and_framing": {
      "pose": "Standing facing forward, hands resting gently on the upper thighs/skirt, confident but relaxed posture",
      "framing": "Waist-up to knee-up crop, centered composition"
    },
    "environment_and_lighting": {
      "background": "Solid matte {argument name="background color" default="black"} studio backdrop",
      "lighting_style": "Direct flash photography, high-contrast celebrity event lighting, sharp shadows, evenly lit subject"
    },
    "technical_specs": {
      "camera": "Canon EOS R5",
      "lens": "85mm portrait lens",
      "resolution": "8k, ultra-photorealistic, highly detailed textures",
      "render_style": "Unreal Engine 5, Octane Render, sharp focus, magazine quality"
    }
  }
}
```

## K-Drama Romantic Lakeside Embrace Prompt

> Sinematik manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A romantic Asian couple in an intimate embrace at a scenic lakeside terrace, tall handsome Korean man with short black hair styled up, wearing black henley long-sleeve shirt and black pants, looking down lovingly at the woman, beautiful Korean woman with long brown hair, wearing {argument name="cardigan color" default="lavender purple"} fuzzy mohair cardigan over floral print dress, looking up at him with adoring smile, his arm around her waist, her hands on his chest, wooden railing in foreground, stunning Swiss lake scenery with misty mountains and green meadows in background, soft overcast natural lighting, K-drama romantic scene aesthetic, cinematic composition, shallow depth of field with bokeh background, warm emotional atmosphere, film still quality, 85mm portrait lens, natural color grading.
```

## High-Contrast Black and White Fashion Photography

> Minimal moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Black-and-white fashion photo of a man seated on a simple metal stool in a white studio. He wears a black t-shirt, black trousers, and black boots. One leg is extended straight toward the camera with the boot sole dominating the foreground, the other leg bent. Hands rest loosely on thighs, torso relaxed, low-angle wide-lens perspective.

Image 2:- High-contrast black-and-white studio photo of a man seated on the floor wearing a black sweater, black trousers, and black leather ankle boots. Legs are bent and open toward the camera, with one boot sole prominently facing the lens. Upper body slightly reclined, calm expres sion. Clean white background, dramatic low-angle composition. Don't change the face. (Use the attached image)
```

## Harsh Flash Fashion Portrait in Flower Field Prompt

> Moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use this photo attached to create a striking outdoor fashion portrait set in a vibrant flower field during daylight, captured with a digital camera using a harsh flash. The camera angle is low and slightly tilted upward, intensifying the scene's energy and drama. The subject has long, loose, dark brown wavy hair cascading over a voluminous, soft, shaggy {argument name="coat color" default="lavender"} faux fur coat that drapes naturally over the body. Surrounding the subject are large, colorful poppies in {argument name="flower colors" default="yellow, pink, and orange"}, some in the foreground and others in the background, creating an immersive field-of-flowers effect. The sky is clear and blue, providing a crisp, contrasting backdrop. The mood is bold, editorial, and whimsical, making the vibrant colors of the outfit and flowers pop starkly against the serene sky. The overall composition should evoke a playful yet high-fashion atmosphere with a hint of surrealism, emphasizing texture and color through the use of direct flash photography.
```

## Modern Lifestyle Portrait with Strict Identity Lock

> Fotogerçekçi, minimal yemek görseli üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_generation_prompt",
  "language": "en",
  "aspect_ratio": "3:4",
  "style": "contemporary lifestyle photography, clean modern aesthetic",
  "identity_preservation": {
    "use_reference_image": true,
    "strict_identity_lock": true,
    "alter_face": false,
    "alter_features": false,
    "notes": "Use the uploaded reference image. Preserve 100% of the face, facial structure, skin texture, proportions, and natural expression exactly as provided."
  },
  "environment": {
    "location": "modern indoor space",
    "elements": [
      "light marble countertop",
      "polished concrete (cement) wall in the background"
    ],
    "atmosphere": "clean, modern, relaxed"
  },
  "composition": {
    "shot_type": "medium shot",
    "angle": "slight side angle",
    "pose": "relaxed, leaning casually against the marble counter",
    "gaze": "looking toward the camera with a natural smile"
  },
  "subject": {
    "gender": "female",
    "expression": "natural, joyful smile",
    "pose_details": {
      "body_position": "standing and leaning lightly on the counter",
      "hands": "holding a transparent glass with a {argument name="beverage color" default="green"} beverage"
    },
    "wardrobe": {
      "top": {
        "description": "white full-length shirt",
        "fit": "comfortable and modest",
        "coverage": "fully covers the belly and waist, not cropped, opaque fabric"
      },
      "bottom": {
        "description": "high-waisted, wide-leg {argument name="jeans color" default="blue"} jeans"
      }
    },
    "accessories": [
      "gold earrings",
      "gold bracelet"
    ]
  },
  "lighting": {
    "type": "soft and balanced indoor lighting",
    "effect": "highlights the clean environment and the subject’s cheerful expression without harsh shadows"
  },
  "camera": {
    "style": "DSLR full-frame",
    "lens": "35mm f/2.0",
    "focus": "sharp focus on the subject with gentle background softness",
    "look": "professional lifestyle photography"
  },
  "quality": {
    "resolution": "high resolution",
    "realism": "photorealistic",
    "details": "natural skin texture, realistic fabric and material textures"
  },
  "constraints": [
    "Do not alter the face or facial features",
    "No belly or midriff visible",
    "No transparent clothing",
    "No artificial filters",
    "No text, logos, or watermarks",
    "No distorted anatomy"
  ],
  "output_goal": "Create a photorealistic, modern indoor lifestyle portrait of a woman using her exact face from the reference image, wearing a full white shirt that fully covers the belly, in a clean contemporary setting with a relaxed and joyful mood."
}
```

## Luxury Fashion Editorial Staircase Collage Prompt

> Minimal, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": {
    "location": "modern indoor staircase",
    "environment": "light marble steps, white walls, stainless steel handrails",
    "lighting": "direct on-camera flash with soft ambient fill, clean shadows",
    "time_of_day": "evening",
    "set_style": "minimal, upscale residential interior"
  },
  "subject": {
    "description": "fashion model posing on staircase",
    "hair": "long brown hair in loose waves, center part",
    "makeup": "glam evening makeup, bronzed complexion, defined eyes, glossy lips",
    "expression": "confident, composed, editorial gaze",
    "poses": [
      "seated on steps with legs crossed, chin resting on hand",
      "standing sideways on stairs looking back at camera",
      "seated upright with relaxed smile",
      "standing with one hand in hair, body angled"
    ]
  },
  "wardrobe_and_accessories": {
    "outfit": "fitted {argument name="dress color" default="brown"} mini dress",
    "shoes": "black open-toe heels",
    "bag": "black designer shoulder bag",
    "jewelry": [
      "gold wristwatch",
      "bracelet",
      "rings"
    ]
  },
  "composition": {
    "layout": "four-image collage",
    "framing": [
      "three-quarter body shot",
      "full-body shot",
      "seated portrait",
      "standing portrait"
    ],
    "camera_angle": "eye level to slightly above",
    "focus": "sharp subject, neutral background",
    "aesthetic": "luxury fashion editorial, Instagram-ready"
  },
  "camera": {
    "lens": "35mm",
    "aperture": "f/2.8",
    "iso": 400,
    "shutter_speed": "1/60",
    "flash": "on-camera flash"
  },
  "style_keywords": [
    "modern luxury",
    "evening fashion",
    "editorial photoshoot",
    "minimal interior",
    "high-end lifestyle"
  ]
}
```

## Luxury Fashion Editorial Collage on Modern Staircase

> Minimal, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": {
    "location": "modern indoor staircase",
    "environment": "light marble steps, white walls, stainless steel handrails",
    "lighting": "direct on-camera flash with soft ambient fill, clean shadows",
    "time_of_day": "evening",
    "set_style": "minimal, upscale residential interior"
  },
  "subject": {
    "description": "fashion model posing on staircase",
    "hair": "long brown hair in loose waves, center part",
    "makeup": "glam evening makeup, bronzed complexion, defined eyes, glossy lips",
    "expression": "confident, composed, editorial gaze",
    "poses": [
      "seated on steps with legs crossed, chin resting on hand",
      "standing sideways on stairs looking back at camera",
      "seated upright with relaxed smile",
      "standing with one hand in hair, body angled"
    ]
  },
  "wardrobe_and_accessories": {
    "outfit": "fitted brown mini dress",
    "shoes": "black open-toe heels",
    "bag": "black designer shoulder bag",
    "jewelry": [
      "gold wristwatch",
      "bracelet",
      "rings"
    ]
  },
  "composition": {
    "layout": "four-image collage",
    "framing": [
      "three-quarter body shot",
      "full-body shot",
      "seated portrait",
      "standing portrait"
    ],
    "camera_angle": "eye level to slightly above",
    "focus": "sharp subject, neutral background",
    "aesthetic": "luxury fashion editorial, Instagram-ready"
  },
  "camera": {
    "lens": "35mm",
    "aperture": "f/2.8",
    "iso": 400,
    "shutter_speed": "1/60",
    "flash": "on-camera flash"
  },
  "style_keywords": [
    "modern luxury",
    "evening fashion",
    "editorial photoshoot",
    "minimal interior",
    "high-end lifestyle"
  ]
}
```

## Ultra-Realistic Winter Fashion Portrait in Norway

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "Ultra-realistic outdoor winter fashion portrait of a young woman crouching in fresh snow. She is wearing a fitted short red latex long-sleeve mini dress with V deep neckline paired with fur snow brown boots. Her makeup is soft and natural. She has long, wavy blonde hair flowing naturally and wear glasses. One finger is gently touching her lips, giving a playful yet thoughtful expression. The background features snow-covered pine trees with a foggy winter atmosphere and a enchanting cabin. Overcast natural lighting creates soft shadows. Shallow depth of field isolates the subject with a cinematic composition. High detail, sharp focus, Instagram aesthetic, 85mm lens look, soft contrast, and cold color tones dominate the scene.",
  
  "style": "ultra-realistic, cinematic, winter fashion",
  "environment": "outdoor, snowy forest, foggy winter atmosphere",
  "lighting": "overcast natural light, soft shadows",
  "camera": {
    "lens": "85mm",
    "depth_of_field": "shallow",
    "focus": "sharp"
  },
  "color_palette": "cold tones, soft contrast",
  "quality": "high detail, ultra realistic, instagram aesthetic",
  "aspect_ratio": "4:5"
}
```

## Consistent Product Photography for Dog Chews (3 Scenes)

> Ürün fotoğrafı üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
<prompt_1>
Close-up lifestyle photography, human hand offering golden brown dog chew to eager dog, white supplement jar with orange label softly blurred in background. Warm indoor setting, natural window light creating soft glow. Intimate bonding moment, shallow depth of field on treat and dog's face, warm orange and cream tones.
</prompt_1>

<prompt_2>
Lifestyle pet photography, happy dog sitting in sunny backyard grass, white supplement jar with orange label placed beside orange bowl filled with golden chews. Golden hour sunlight, warm natural tones. Healthy active lifestyle feel, shallow depth of field, authentic outdoor moment.
</prompt_2>

<prompt_3>
Lifestyle photography, hands unboxing delivery package revealing white supplement jar with orange label, excited dog sniffing curiously nearby. Kitchen counter setting, natural daylight. Authentic unboxing moment, warm tones, shallow depth of field on product reveal.
</prompt_3>
```

## Kyaraben (Character Bento Box) Generation Prompt

> Yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
[Character Setting Part]
(Please rewrite this part for the character you want to draw.)
{argument name="character setting" default="Brown hair, short twin tails, red eyes, slightly pointed teeth (giza teeth)."}

[Fixed Part]
High-quality food photograph of Japanese "Kyaraben" (Character Bento Box).
Vertical aspect ratio.

Composition:
A cute bento box is placed on a tablecloth, photographed from directly above in a flat lay composition.

Main Character Representation:
The face of the character described in the [Character Setting Part] above is placed to occupy the front half of the bento box.
The character must be represented using real "bento ingredients," not food samples or illustrations.
The skin texture should resemble rice or thin omelet, the lines should resemble nori (seaweed), and decorations should have the texture of ingredients like cheese or ham.

Side Dish Arrangement:
Typical and colorful bento side dishes are packed tightly around the character's head and in the back space.

Glossy meatballs or hamburger patties

Vibrant green broccoli or edamame

Red octopus-shaped wieners

Boiled eggs or tamagoyaki (rolled omelet)

Decorative picks (leaf or flower shapes)

Environment and Lighting:
The background is a bright tablecloth in pastel colors like light blue or pink, with polka dots or checks.
Natural light shines in, giving the food a delicious sheen and soft shadows.
Overall, the saturation is high, creating an appetizing, cute, and pop atmosphere.
```

## Biomorphic Art and Realism AI Woman Prompt

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "style": "Biomorphic Art + Realism",
  "mood": "Confident, Empowered, Unique",
  "prompt": "/imagine prompt: A powerful and self-confident AI woman with a fierce direct gaze, wearing an avant-garde 2026 trend outfit featuring structural biomorphic silhouettes, sculptural liquid-chrome details, vibrant {argument name="color 1" default="solar-orange"} and deep {argument name="color 2" default="emerald teal"} fabrics, intricate organic textures, bold power-dressing pose, hyper-realistic skin with subtle pearlescent sheen, vivid saturated colors, minimalist futuristic marble hall background, 8k, photorealistic, masterpiece, sharp focus, cinematic studio lighting, shot on 85mm lens, --ar 4:5 --v 6.0 --stylize 300"
}
```

## Candid Golden Hour Coffee Shop Portrait

> Sinematik, fütüristik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A high-quality photo of {argument name="influencer name" default="Taylor"}, an influencer with vibrant ginger hair and heavy freckles, Sitting relaxed at a wooden table, holding a coffee cup with both hands, looking away candidly. Location: Cozy urban coffee shop, blurred background with neon sign. Lighting: Golden hour, soft warm sunlight coming from side. Shot: Eye-level, shallow depth of field (f/1.8), shot on film, kodak portra 400, soft lighting, depth of field. Style: cinematic, high-fashion, candid lifestyle, effortless chic, expensive, cozy, urban, morning routine, warm. Features: heavy natural freckles, high cheekbones, soft nose.
```

## Deep Focus Winter Lifestyle Photo in a Ski Gondola

> Minimal mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "project": "Ski_Gondola_Egirl_Flux_V4.2",
    "target_engine": "Flux.1 [dev] / Nano Banana Pro",
    "version": "4.2.0 (Everything in Focus - f/11)",
    "created_at": "2025-12-18T15:35:00Z"
  },
  "engine_configuration": {
    "model": {
      "base": "flux1-dev.safetensors",
      "quantization": "fp8 / nf4",
      "vae": "ae.safetensors"
    },
    "lora_slots": [
      {
        "name": "Realism_LoRA_v2 (Optional)",
        "strength": 0.5,
        "note": "Enhances porcelain skin tone, nylon textures, and snow reflections."
      }
    ],
    "sampling": {
      "sampler_name": "euler",
      "scheduler": "simple",
      "steps": 28,
      "guidance_scale": 2.5,
      "shift": 1.0
    },
    "dimensions": {
      "width": 1024,
      "height": 1536,
      "aspect_ratio": "2:3",
      "megapixel_class": "1.5MP"
    }
  },
  "prompt_construction": {
    "narrative_layer": {
      "style": "Winter Lifestyle / Travel Photography",
      "instruction": "Capture a sharp, high-contrast shot inside a ski gondola, balancing the interior subject with the bright snowy mountain view outside.",
      "subject_flow": "A pale young woman with black wolf-cut hair wearing a white puffer jacket sitting in a cable car, touching her hair."
    },
    "texture_layer": {
      "skin_physics": "pale porcelain skin, glossy lips, dramatic e-girl eyeliner, smooth finish",
      "fabric_physics": "shiny nylon texture of white puffer jacket, technical matte fabric of black ski pants, reflective lens of ski goggles",
      "environment_physics": "SHARP DETAILS ON BACKGROUND: clear glass window, white snow texture on mountains, dark green pine trees, blue sky"
    },
    "camera_physics": {
      "lens_imperfections": "high contrast, sharp daylight, slight reflection on glass",
      "focus": "DEEP DEPTH OF FIELD (f/11) - NO BLUR. The woman, the gondola interior, and the distant snowy mountains are all sharp.",
      "settings": "Sony A7R V, 35mm Lens, 1/1000s, ISO 100 (Bright Snow Daylight)"
    },
    "color_grading": {
      "white_balance": "Cool Daylight (Blue Sky/White Snow dominance)",
      "shadows": "Deep, defined shadows inside the cabin",
      "highlights": "Bright, crisp highlights on snow and jacket"
    }
  },
  "final_prompt_string": "A candid raw lifestyle photograph shot on Sony A7R V 35mm f/11. Deep depth of field, everything in focus. A young woman (19-25) with pale porcelain skin and shoulder-length black hair with bangs (wolf cut) sitting inside a ski gondola. She wears a shiny white cropped puffer jacket, black ski pants, and black ski goggles on her head. She touches her hair behind her ear and looks at the camera with a calm expression. Dramatic e-girl makeup with winged eyeliner and glossy lips. Bright winter sunlight illuminates her face. Background is sharp and detailed: Through the large glass window, a panoramic view of snowy Alpine mountains, ski tracks, pine trees, and a clear blue sky is"
```

## Luxury Fashion Editorial Collage on Modern Staircase (Duplicate)

> Minimal, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": {
    "location": "modern indoor staircase",
    "environment": "light marble steps, white walls, stainless steel handrails",
    "lighting": "direct on-camera flash with soft ambient fill, clean shadows",
    "time_of_day": "evening",
    "set_style": "minimal, upscale residential interior"
  },
  "subject": {
    "description": "fashion model posing on staircase",
    "hair": "long brown hair in loose waves, center part",
    "makeup": "glam evening makeup, bronzed complexion, defined eyes, glossy lips",
    "expression": "confident, composed, editorial gaze",
    "poses": [
      "seated on steps with legs crossed, chin resting on hand",
      "standing sideways on stairs looking back at camera",
      "seated upright with relaxed smile",
      "standing with one hand in hair, body angled"
    ]
  },
  "wardrobe_and_accessories": {
    "outfit": "fitted {argument name=\"dress color\" default=\"brown\"} mini dress",
    "shoes": "black open-toe heels",
    "bag": "black designer shoulder bag",
    "jewelry": [
      "gold wristwatch",
      "bracelet",
      "rings"
    ]
  },
  "composition": {
    "layout": "four-image collage",
    "framing": [
      "three-quarter body shot",
      "full-body shot",
      "seated portrait",
      "standing portrait"
    ],
    "camera_angle": "eye level to slightly above",
    "focus": "sharp subject, neutral background",
    "aesthetic": "luxury fashion editorial, Instagram-ready"
  },
  "camera": {
    "lens": "35mm",
    "aperture": "f/2.8",
    "iso": 400,
    "shutter_speed": "1/60",
    "flash": "on-camera flash"
  },
  "style_keywords": [
    "modern luxury",
    "evening fashion",
    "editorial photoshoot",
    "minimal interior",
    "high-end lifestyle"
  ]
}
```

## Minimalist Studio Portrait with High Contrast

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A minimalist studio portrait of a man standing front-facing against a solid vibrant yellow background. He is wearing a black beanie, matte black sunglasses, and a black face mask covering his nose and mouth, creating a mysterious anonymous look. He has on a black padded winter jacket zipped up fully. The lighting is dramatic and directional, with strong contrast and soft shadows, emphasizing texture in the jacket and clean facial contours. Ultra-sharp focus, high contrast, modern fashion editorial style, cinematic lighting, symmetrical composition, professional studio photography, 4K realism.
```

## Luxury Furniture Product Photography

> Minimal, lüks ürün fotoğrafı üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{argument name="furniture piece" default="[FURNITURE PIECE]"} {argument name="color or feature" default="[Color / Feature]"} in minimalist room, late afternoon sun streaming through large windows, long shadows across floor, warm and cool tone interplay, architectural photography, serene atmosphere, lived-in luxury.
```

## Candid Celebrity Snapshot Portrait at a Gala

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_configuration": {
    "type": "photorealistic_portrait",
    "quality_tier": "8k_ultra_hd",
    "aspect_ratio": "9:16",
    "style_intent": "candid celebrity snapshot"
  },
  "subject_details": {
    "demographics": "Young woman, early 20s, Caucasian",
    "physique": "Slim, elegant posture",
    "hair": {
      "color": "Dark ash brown",
      "style": "Long, voluminous blowout, loose layers falling over shoulders",
      "texture": "Silky, high sheen, wind-swept movement"
    },
    "face": {
      "expression": "Candid, looking away to the side, slightly parted lips, unaware of the camera",
      "features": "Soft jawline, straight nose, rosy cheeks, natural glam makeup",
      "eyes": "Looking off-camera to the left, caught in the moment"
    }
  },
  "wardrobe_schema": {
    "garment": {
      "type": "Cowl-neck slip dress",
      "color": "Soft white / Ivory",
      "fabric": "Silk or satin, smooth drape",
      "fit": "Relaxed but form-fitting upper body"
    },
    "key_details": {
      "straps": "Thick braided gold chain shoulder straps",
      "accessories": "Minimal, focus on the dress hardware"
    }
  },
  "environment_context": {
    "setting": "Crowded high-end event or gala",
    "background": "Blurred figures of other people, indistinct faces, soft neutral bokeh",
    "depth": "Shallow depth of field, sharp focus on subject only"
  },
  "lighting_parameters": {
    "type": "Soft diffused event lighting",
    "direction": "Front-left illumination",
    "mood": "Cinematic, soft contrast, natural skin tones",
    "shadows": "Gentle soft shadows defining the collarbone and neck"
  },
  "technical_specifications": {
    "camera": "Sony A7R IV or similar full-frame mirrorless",
    "lens": "85mm f/1.4 portrait lens",
    "resolution": "Highest, vertically oriented",
    "rendering": "Unreal Engine 5 level realism, ray tracing, textural clarity"
  }
}
```

## Fujifilm Editorial Portrait Grid with Strict Identity Lock

> Fotogerçekçi moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photoreal_editorial_movement_grid_fujifilm_identity_lock",
      "version": "v1.1_FUJI_EDITORIAL_3X3_GRID_IDENTITY_1TO1_EN",
      "priority": "highest"
    },
    "references": {
      "reference_image_1": {
        "source": "UPLOAD_REFERENCE_IMAGE (REQUIRED)",
        "purpose": "MAIN_SUBJECT_IDENTITY_LOCK_PLUS_STYLE",
        "strict_lock": true,
        "preserve_face_identity": true,
        "preserve_facial_proportions": true,
        "preserve_eye_shape_nose_lips_jawline": true,
        "preserve_skin_tone": true,
        "no_beautify_no_face_morph": true,
        "no_age_shift": true
      }
    },
    "identity_rules": {
      "preserve_identity": true,
      "identity_lock_strength": 0.995,
      "face_similarity_priority": "MAX",
      "no_identity_blending": true,
      "no_face_swap_artifacts": true,
      "keep_same_subject_across_all_frames": true,
      "same_face_every_frame": true
    },
    "output_settings": {
      "aspect_ratio": "1:1",
      "resolution_target": "ultra_high_res",
      "render_style": "ultra_photoreal_editorial_fashion",
      "sharpness": "soft_but_detailed",
      "film_grain": "natural_fine_film_grain",
      "color_grade": "fujifilm_classic_neg_warm",
      "dynamic_range": "medium_high",
      "skin_tone": "warm_natural"
    },
    "camera": {
      "camera_brand": "Fujifilm",
      "camera_model": "Fujifilm X-T5",
      "lens": "Fujinon XF 35mm f/1.4",
      "aperture": "f/2.0",
      "shutter_speed": "1/500",
      "iso": 500,
      "white_balance": "daylight_warm",
      "film_simulation": "Classic Negative",
      "focus_mode": "continuous_af",
      "focus_priority": "eyes",
      "note": "prioritize face sharpness while keeping a gentle editorial softness"
    },
    "global_scene": {
      "setting": "minimal warm studio with beige / sand backdrop",
      "lighting": {
        "key_light": "large soft window light from one side",
        "fill_light": "very subtle ambient fill",
        "shadow_style": "soft but defined shadows, visible depth on collarbones and jawline",
        "contrast": "gentle cinematic contrast",
        "highlights": "controlled, no clipping"
      },
      "mood": "sensual, free, editorial, intimate, movement-focused"
    },
    "subject": {
      "type": "human",
      "description": "use the exact same person as the reference image; face must match 1:1 with maximum similarity",
      "wardrobe": {
        "top": "white ribbed tank or crop top, slightly worn texture",
        "bottom": "loose light-wash denim jeans, relaxed fit",
        "styling_rules": "no logos, minimal accessories, timeless clean styling"
      },
      "hair": "keep hair length and overall vibe consistent with reference; allow natural motion",
      "makeup": "natural clean makeup, no glam transformation",
      "hands_and_nails": "natural nails only, no polish"
    },
    "grid_co
```

## Recontextualized Glass Espresso Machine Product Shot

> Minimal, lüks ürün fotoğrafı üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
BAGEL LABS.
Act as a creative director curating a wide-ranging, eclectic collection of “recontextualized everyday objects.”

DIVERSE OBJECT SELECTION (MANDATORY VARIETY):
Randomly select ONE object from these distinct categories to ensure diversity:
Analog Office & Desk:
Sport & Leisure:
Barware & Kitchen:
Utility & Tools:
Grooming:
Travel:

SELECTED CATEGORY:
Barware & Kitchen

CHOSEN OBJECT:
A coffee machine and coffee cup — instantly recognizable, reimagined as a luxury technological artifact.

THE CONCEPT:
Recontextualize the everyday coffee machine as a transparent, high-precision object of engineered beauty.  
A fully glass espresso machine reveals its internal systems: hot water circulation, pressure chambers, coffee bean hopper, grinding mechanism, and extraction pathway. Integrated computer circuitry runs through the machine like a nervous system, visually linking ritual, data, and energy.

Fresh coffee is actively pouring from the machine into a matching glass cup, captured mid-flow. The moment feels frozen, precise, and intentional—ritual meets technology.

MATERIALS & FINISH:
- COFFEE MACHINE BODY:
  Precision-molded optical glass with subtle green-tinted transparency. Internal structure is fully visible and meticulously organized.
- INTERNAL COMPONENTS:
  - Hot water tubes and pressure lines clearly visible, rendered in brushed titanium and warm grey.
  - Coffee bean chamber visible at the top with realistic roasted beans.
  - Grinding and extraction mechanisms exposed, engineered and clean.
- CIRCUITRY:
  Integrated PC-style circuitry embedded within the machine’s internal architecture.
  - Circuit paths in muted industrial orange.
  - Supporting components in graphite and titanium tones.
  Circuits are physical and structural, not glowing or decorative.
- COFFEE CUP:
  Matching optical glass cup with weighted base and refined silhouette.
  Subtle BAGEL LABS logomark engraved near the base.
- BRAND INTEGRATION:
  BAGEL LABS logomark engraved into the glass body of the machine (side or rear plane), and subtly etched on the cup.
  No stickers. No printed logos.

ACTION / MOMENT:
Coffee is visibly flowing from the machine into the glass cup.
Liquid motion is realistic and smooth.
Crema and color gradient are visible through the glass, emphasizing transparency and material depth.

PRESENTATION (NO BOXES):
The coffee machine and cup stand fully exposed on a minimal pedestal or surface.
No packaging, no housing, no covers.
All components are visible by design.

PHOTOGRAPHY & LIGHTING:
Style: High-end product editorial (Wallpaper* / Dezeen).
Lighting: Soft, studio high-key lighting with carefully controlled reflections to highlight glass thickness, liquid motion, and internal depth. No harsh shadows.
Background: Clean, seamless light grey or white cyclorama.

COLOR & GRADING:
Primary tones: transparent glass with subtle green tint, warm greys, titanium neutrals.
Accent: restrained
```

## Cinematic Lifestyle Portrait in a Luxury Car

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "structured_prompt": {
    "medium": "Ultra-realistic cinematic lifestyle portrait, editorial photography, 8k resolution.",
    "subject_identity": "Adult woman (21+), 1:1 identity preservation, natural facial structure, realistic skin texture with visible pores, micro-texture, tiny capillaries, and natural unevenness. No smoothing.",
    "hair": "Long hair, precise center part, voluminous roots, glossy healthy texture, soft movement.",
    "makeup": "Bright editorial baby-face aesthetic, straight defined brows, light brown eyeshadow, clean lifted winged eyeliner, long separated lashes, soft pink blush high on cheeks and across nose, subtle wet highlight, glossy rose-pink gradient lips (softly overlined).",
    "outfit": "Tailored outfit based on reference, tasteful neckline emphasis, no jewelry.",
    "pose_and_action": "Seated in back seat of car, body angled open to camera, relaxed confident posture. One hand lifting a single pale pink rose to face, flower touching nose/lips. Head tilted back, soft teasing smile, intimate direct eye contact.",
    "environment": "Luxury car interior, black leather seats with visible stitching, dark window background indicating evening/night.",
    "lighting": "Soft warm flash mixed with subtle ambient car lighting, gentle highlights on collarbones/lips/nose tip, minimal shadows, seductive nighttime mood.",
    "camera_settings": "Close-up to medium shot, slight low angle, shallow depth of field, sharp focus on eyes/face."
  },
  "combined_prompt_string": "Ultra-realistic cinematic lifestyle portrait of an adult woman seated in a luxury car back seat, nighttime. 1:1 identity preservation, realistic skin texture with visible pores. Hair is long with a precise center part and glossy volume. Makeup features winged eyeliner, high pink blush, and glossy gradient rose-pink lips. Pose: body angled towards camera, confident and relaxed, holding a single pale pink rose to her nose and lips, head tilted back with a teasing smile and intimate eye contact. Outfit: tailored and elegant. Lighting: soft warm flash, ambient low-light, highlights on collarbones and face. Background: Black leather interior, dark window. Shot from a low angle, shallow depth of field, 8k, editorial style.",
  "negative_prompt": "Face changes, different identity, symmetry correction, beauty filters, over-retouching, plastic skin, CGI, 3D render, doll face, anime style, explicit nudity, exaggerated glam, harsh contouring, heavy eyeliner, jewelry, earrings, necklace, extra flowers, messy hair, daylight exterior, bright sun, wide angle, distorted hands."
}
```

## Pixar-Level Commercial Scene: Teddy Bear in a Soda Can

> Sinematik, fütüristik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cute, cinematic brand fantasy scene featuring a fluffy white teddy bear mascot emerging from a chilled soda Coca-Cola can, holding a colorful striped straw.

The can is placed inside a glowing refrigerator filled with neatly stacked glass soda bottles. Soft neon lighting, pastel reflections, condensation droplets on metal, playful yet premium advertising style. Shallow depth of field, ultra-detailed fur texture, glossy highlights, vibrant red-and-white color pal-ette, whimsical mood, Pixar-level realism, stu-dio-quality lighting, high contrast, square composi-tion, 1080×1080, ultra-HD, commercial brand photog-raphy.
```

## Cinematic Street Photo in Neon Rain

> Sinematik, fütüristik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "Objective": "Create a cinematic candid street photograph capturing a quiet, emotional moment in a neon-lit city at night",
  "PersonaDetails": {
    "Subject": {
      "Type": "Young woman",
      "Pose": "Standing in a crowded street, turning her head over her shoulder",
      "Gaze": "Looking directly at the camera",
      "Expression": "Calm, introspective, slightly melancholic",
      "Hair": "Long dark hair, gently damp from rain",
      "Wardrobe": {
        "Outerwear": "Soft beige coat"
      }
    }
  },
  "SceneDescription": {
    "Location": "Crowded neon-lit city street at night",
    "Weather": "Light rain",
    "BackgroundElements": [
      "Blurred pedestrians in motion",
      "Glowing neon signs",
      "Colorful city lights",
      "Wet streets with reflective bokeh highlights"
    ],
    "Atmosphere": "Moody, reflective, urban night energy"
  },
  "Composition": {
    "Framing": "Waist-up candid framing",
    "Moment": "Unposed, mid-turn capture",
    "DepthOfField": "Shallow depth of field",
    "Focus": "Sharp subject with soft foreground and background blur"
  },
  "LightingAndColor": {
    "Lighting": "Low-light ambient city illumination",
    "NeonInfluence": "Soft neon spill lighting on subject",
    "ColorGrading": "Teal and orange cinematic grading",
    "SkinTones": "Natural and realistic"
  },
  "EnvironmentalEffects": {
    "Rain": "Visible rain streaks and droplets",
    "Reflections": "Bokeh reflections on wet pavement",
    "Glow": "Subtle neon glow and light bloom"
  },
  "PhotographyStyle": {
    "Genre": "Cinematic street photography",
    "Aesthetic": "Film still realism",
    "LensLook": "85mm lens perspective",
    "CameraConditions": "Low-light night photography",
    "DetailLevel": "Ultra-detailed, photorealistic"
  },
  "Mood": {
    "Tone": "Quiet, emotional, melancholic",
    "Energy": "Dreamy yet grounded urban realism"
  },
  "NegativePrompt": [
    "daylight",
    "posed portrait",
    "studio lighting",
    "overexposed highlights",
    "oversaturated neon",
    "cartoon",
    "anime",
    "blurry subject"
  ],
  "ResponseFormat": {
    "Type": "Single image",
    "Orientation": "Portrait",
    "AspectRatio": "2:3"
  }
}
```

## Surrealist Diptych of Sesame and Almond Oil Landscapes

> Lüks manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "composition": {
    "layout": "Dual-panel vertical diptych",
    "symmetry": "Mirror-image structural composition with contrasting color palettes",
    "perspective": "High-angle, whimsical landscape with a central focal bottle",
    "central_focal_point": "An oversized, elegant glass bottle positioned in the upper center of each panel"
  },
  "left_panel": {
    "theme": "Warmth, Harvest, Golden Sesame",
    "title_text": "SESAME SILK",
    "color_palette": ["Amber", "Golden Brown", "Bronze", "Deep Ochre", "Sunset Orange"],
    "elements": {
      "liquid_source": "A crown of golden sesame seeds pouring thick, amber-colored oil into the bottle",
      "landscape": "Rolling hills of toasted grains and autumn-toned foliage",
      "river": "A winding river of viscous, golden oil flowing from the base of the bottle",
      "flora_and_fauna": ["Sliced avocados", "Whole coconuts", "Scattered sesame seeds", "Small blue wildflowers for accent"],
      "human_activity": "Tiny stylized figures in traditional garments harvesting, boating on the oil river, and interacting with giant seeds"
    }
  },
  "right_panel": {
    "theme": "Freshness, Vitality, Almond Ambrosia",
    "title_text": "ALMOND AMBROSIA",
    "color_palette": ["Emerald Green", "Sky Blue", "Pale Gold", "Deep Purple", "Teal"],
    "elements": {
      "liquid_source": "A crown of purple grapes and almonds pouring creamy white almond milk into the bottle",
      "landscape": "Lush, vibrant tropical forest with dense green canopy and flowering vines",
      "river": "A winding, sparkling blue water river flowing from the base of the bottle",
      "flora_and_fauna": ["Clusters of purple grapes", "Sliced avocados", "Coconuts", "Lush green leaves", "Blue forget-me-not flowers"],
      "human_activity": "Tiny figures rowing wooden boats, swimming, and gathering fruit along the riverbanks"
    }
  },
  "artistic_style": {
    "genre": "Surrealist Illustration / Storybook Fantasy",
    "technique": "Detailed digital painting with soft, atmospheric lighting and glowing highlights",
    "influences": ["Maxfield Parrish for lighting", "Folk art for character design", "Commercial beverage advertisement art"],
    "details": "Intricate textures on seeds and leaves, soft volumetric glow behind the bottles, and a sense of scale-distortion (miniature people vs. giant fruit)"
  }
}
```

## Ultra-Realistic Cinematic Portrait with Identity Lock

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": {
    "reference_image": "uploaded face reference",
    "style": "Ultra-realistic cinematic lifestyle portrait",
    "subject": {
      "identity": {
        "description": "Adult woman (21+), strict 1:1 identity preservation from reference image.",
        "details": "Exact facial structure, proportions, eye shape and color, lips, nose, natural asymmetry, skin tone, and moles. No face morphing, beautification, or AI changes."
      },
      "pose": "Seated in the back seat, body turned openly toward the camera, shoulders angled, posture relaxed and confident. Head slightly tilted back. One hand gently lifts a single pale pink rose, softly touching nose and lips.",
      "expression": "Soft teasing smile, subtly flirtatious but elegant. Eyes look directly into the camera with an intimate, self-assured presence."
    },
    "outfit": {
      "source": "Strictly from the reference image.",
      "styling": "Tasteful emphasis on the neckline through pose and lighting only. No explicit nudity."
    },
    "hair": {
      "style": "Long hair with a precise center part.",
      "texture": "Noticeably fuller volume, soft lift at the roots. Smooth, glossy, healthy with gentle movement and visible individual strands."
    },
    "makeup": {
      "style": "Bright editorial baby-face aesthetic with high-fashion polish. Fresh, youthful, luminous, not heavy glam.",
      "details": {
        "brows": "Softly straight, clearly defined.",
        "eyes": "Light brown/taupe eyeshadow base, clean lifted eyeliner with an elegant visible wing, long separated upper lashes.",
        "blush": "Soft pink placed high on the cheeks and lightly across the nose bridge.",
        "highlight": "Subtle wet highlight on cheekbones, nose tip, cupid’s bow, and inner eye corners.",
        "lips": "Glossy rose-pink gradient, softly overlined in the center, full and juicy."
      }
    },
    "skin": "Ultra-realistic human skin with visible pores, micro-texture, tiny capillaries, and natural unevenness. Soft healthy sheen only. No blur, smoothing, plastic effect, or beauty filters.",
    "accessories": {
      "items": ["One long-stem pale pink rose with green leaves"],
      "excluded": ["No jewelry"]
    },
    "environment": {
      "location": "Luxury car interior.",
      "details": "Black leather seats, visible headrest stitching. Dark window background suggesting evening or nighttime."
    },
    "lighting": "Soft warm flash combined with subtle ambient car lighting. Gentle highlights on collarbones, upper chest, and lips. Minimal shadows. Cozy, seductive nighttime mood without harsh contrast.",
    "camera": {
      "shot_type": "Close-up to medium portrait.",
      "angle": "Slightly lower camera angle.",
      "focus": "Shallow depth of field, sharp focus on the face.",
      "quality": "Natural proportions, ultra-realistic photography, cinematic editorial luxury lifestyle feel. No filters, no AI-art look.",
      "aspect_r"
    }
  }
```

## Hyper-Realistic Wet Look Close-Up Portrait

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "structured_prompt": {
    "shot_style": "Ultra-photorealistic close-up portrait, Hyper-realistic editorial photography, raw style, ultra-detailed, 8k resolution, Vogue/Harper’s Bazaar professional aesthetic, perfectly balanced composition.",
    "subject": "A world-class supermodel-level young woman.",
    "facial_structure": "Perfectly symmetrical facial structure, high cheekbones, sharp jawline, elegant straight nose, full natural lips.",
    "eyes": "Mesmerizing green-hazel eyes with deep clarity, realistic reflections, and captivating gaze.",
    "hair": "Dark blonde wet hair naturally clinging to face and neck.",
    "skin_and_texture": "Flawless skin with visible pores and subtle texture. Tiny, delicate water droplets evenly scattered across the face, glistening naturally and attractively, adding high-fashion wet beauty effect. Subtle sheen of sweat enhances realism. Soft, moist lips with natural texture.",
    "lighting": "Soft cinematic lighting, cool-toned cinematic lighting, soft shadows.",
    "background": "Light grey and white bokeh background."
  },
  "negative_prompt": {
    "anatomy": "average face, asymmetrical features, flat or round face, bad anatomy, distorted eyes",
    "texture": "plastic/fake skin, heavy makeup, large or messy water droplets, artificial beauty",
    "quality": "low quality, blurry, pixelated, overexposed, harsh shadows, dull or lifeless eyes",
    "style": "cartoon, anime, illustration, 3d render, painting"
  },
  "parameters": {
    "aspect_ratio": "9:16",
    "steps": 50,
    "cfg_scale": 9.5,
    "style": "Photorealistic"
  }
}
```

## High-End Fashion Campaign with Strict Garment Preservation

> Sinematik, lüks moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "task_configuration": {
    "type": "GENERATE",
    "sub_type": "commercial_lifestyle_photograph",
    "reference_logic": "STRICT_GARMENT_PRESERVATION",
    "aesthetic": "high_end_fashion_campaign",
    "output_format": "high_resolution_photograph"
  },
  "subject_definition": {
    "identity": {
      "demographic": "white American female model",
      "physique": "fit",
      "appearance": "beautiful, realistic"
    },
    "skin_and_features": {
      "texture": "realistic human skin, visible pores, light blemishes",
      "details": ["soft expression lines", "light freckles", "natural skin highlights"],
      "makeup": "natural or bare skin look",
      "avoid": ["smoothing", "artificial appearance"]
    },
    "attire_constraints": {
      "source": "input_reference_image_clothing",
      "preservation_rules": [
        "exact color match",
        "exact fabric texture",
        "exact stitching details",
        "exact fit and silhouette"
      ],
      "modification_permission": "NONE"
    },
    "pose": {
      "stance": "standing naturally, full body visible",
      "orientation": "facing camera or slight angle",
      "intent": "showcase clothing fit and style"
    }
  },
  "environment_definition": {
    "location": "{argument name=\"location\" default=\"cinematic outdoor setting\"}",
    "contextual_logic": "complementary to clothing style (e.g., upscale urban street, stylish park, coastal path)",
    "atmosphere": "natural, elevated, real world",
    "elements": ["clean architecture", "natural foliage", "textured ground"]
  },
  "composition_and_layout": {
    "framing_principles": [
      "commercial fashion photography standards",
      "grid alignment",
      "golden ratio composition",
      "product-centered focus"
    ],
    "shot_scale": "full body photograph",
    "margins": {
      "top": "generous margin above head for cropping/text",
      "sides": "clear margin",
      "bottom": "clear margin below feet"
    }
  },
  "lighting_and_optics": {
    "source": "natural daylight",
    "quality": "soft, diffused sunlight or light shade",
    "characteristics": ["clean shadows", "warm undertones", "realistic facial contouring"],
    "focus": "sharp focus on model and garment",
    "depth_of_field": "shallow to medium, slightly blurred background"
  },
  "material_and_texture": {
    "skin_rendering": "photorealistic, raw texture",
    "garment_rendering": "high fidelity to reference material properties",
    "environment_rendering": "realistic outdoor textures"
  }
}
```

## High-Fashion Fantasy Editorial with Floating Petals

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "render_goal": "High-fashion fantasy editorial",
  "subject": {
    "pose": "female gracefully reaching toward floating rose petals",
    "expression": "serene, enchanting, otherworldly"
  },
  "wardrobe": "translucent silk gown with delicate rose petals growing along the hem and sleeves",
  "environment": {
    "location": "{argument name=\"location\" default=\"grand candlelit hall\"} with dark romantic tones",
    "props": "floating rose petals, soft golden and red light accents, faint magical glow"
  },
  "composition": "centered with cinematic depth, dreamy bokeh, ethereal elegance",
  "style": "ultra-realistic, editorial, 4K quality, high contrast, soft cinematic lighting"
}
```

## Sharing Reference Models and Outfit Prompts

> Görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Model: Model-02
Outfit Prompt: 004
```

## Miniature Diorama of Confused Alien in a Suburban Backyard

> Minimal 3B sahne üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Professional photography, medium-wide shot. A massive, realistic diorama world filling the entire workspace horizon, depicting a cross-section of a suburban backyard where a confused alien is hilariously misusing everyday Earth objects. The structure features a typical wooden fence and garden shed merged with a UFO partially hidden behind bushes (with soft LED underglow). Intricate details include a miniature green alien figurine wearing a flower pot as a hat, attempting to "walk" a vacuum cleaner on a leash like a dog, using a garden hose as a telephone, sitting in a birdbath fully clothed reading a pizza menu upside-down, and trying to plant TV remote controls in soil like seeds. A confused golden retriever figurine watches with head tilted. On the patio, miniature human figures peek through window curtains looking shocked and bewildered. The lawn features misplaced items: umbrella stuck in ground upside-down filled with cereal, lawn chair hanging from tree branch, sprinkler shooting water straight up. The background consists entirely of physical 3D forms, featuring sculpted foam neighboring houses with lights on, clay trees, and a painted evening sky with tiny stars, with absolutely no flat backdrops. A realistic human artisan is positioned in the back-right background, actively working on the scene, using fine tweezers to adjust the tiny vacuum cleaner "leash," grinning widely at the absurdity. Dual-layer workspace lighting combines with warm evening suburban lighting plus soft UFO glow (blue-green LED) to highlight the contrast between normal suburban textures and surreal alien confusion. Compose the scene for a 9:16 vertical aspect ratio with balanced framing and no cropped elements. Ensure all primary subjects, key actions, and facial features remain within a central safe zone, avoiding edge cropping across the selected aspect ratio. If a human creator or artisan is present in the scene, render the person as a realistic individual. Use the uploaded image reference as the exact facial identity of the creator. Maintain consistent facial structure, proportions, and likeness. Do not reinterpret, stylize, or substitute the face.
```

## Wildlife Photographer Mood Board in African Savanna

> Minimal, lüks manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A design inspiration mood board showcasing the beauty of a wildlife photographer in the African savanna, capturing the majesty of zebras against the sunrise.

FRAME 1 (top-left, large, photo): Korean wildlife photographer in stylish safari outfit, focused on viewfinder, open-top vehicle, zebras in distance. Shot on Sony Alpha 1, long telephoto lens.
FRAME 2 (top-center, color palette): Color swatches: Crimson (#DC143C), Coral (#FF7F50), Gold (#FFD700), Ochre (#C04000), Tan (#F0E68C), Safari beige (#FAF0E6), Olive green (#556B2F).
FRAME 3 (top-right, texture samples): Safari beige linen fabric swatch, weathered acacia bark texture, zebras fur close-up.
FRAME 4 (center-left, font pairing): "Savanna Whispers" in Playfair Display (serif, elegant), subtext in Montserrat (sans-serif, clean).
FRAME 5 (center, zebra silhouette): Striking silhouette of zebras silhouetted against the intense sunrise in pure black (#000000).
FRAME 6 (center-right, acacia tree): Lone acacia tree against the golden sky using rule of thirds.
FRAME 7 (bottom-left, landscape vista): The vast expanse of Masai Mara, ochre (#C04000) to light tan (#F0E68C) grass, weathered rock formations dot the landscape.
FRAME 8 (bottom-center, wildlife): Cheetah perched on a mound, secretary bird, distant gazelles grazing.
FRAME 9 (bottom-right, safari vehicle detail): Close up of rugged Land Cruiser with stylish handwritten signature "Elle" elegantly placed at the bottom right corner in warm savanna gold (#D2691E).
COMPOSITION: Each frame with a tilted photo, tape, and a marker text.
ATMOSPHERE: Magic of the African dawn.

STYLE: Design inspiration board, aesthetic collage, visual reference board, professional photography, high quality, detailed, sharp focus, cinematic, editorial, commercial, well-lit, proper exposure, balanced lighting.. A stylish handwritten signature Willy is elegantly and small letters placed at the Bottom Right corner.
```

## Hyper-Detailed Origami Portrait Sculpture

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a hyper-detailed origami-style sculpture of a person, folded entirely from high-quality paper with crisp, precise edges and realistic paper fiber texture.

The origami folds are intricate and geometric, carefully structured to capture the subject’s recognizable facial features, proportions, and expression while remaining true to authentic paper-folding logic.

Use exactly the same color palette as the reference photo — no black tones, no color substitutions.

The figure is placed on a clean studio surface, with soft, natural shadows that ground the sculpture and enhance depth.

Minimalist collectible art aesthetic, premium design object feel.

Ultra-photorealistic rendering, sharp focus, high material realism, subtle highlights on paper creases, no illustration or cartoon style.
Square composition, 1080 × 1080 resolution.
```

## Cityscape Morphology from Material Concepts

> Mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
(Paris, PC) Anchor: [{argument name="location" default="Location"}] :: [{argument name="material concept" default="Material Concept"}]::4
Morphology: Miniature architectural cityscape of [Location], entire skyline constructed via the assemblage of [Material Concept] components, skyscrapers and structures formed from the constituent parts of [Material Concept], thematic structural engineering, hyper-detailed diorama::3
Material Physics: Physical properties of [Material Concept] applied to architecture, [Material Concept] textures replacing concrete and glass, innate material logic of [Material Concept], high-fidelity surface details::3
Illumination: Lighting exhibiting the surface properties of [Material Concept], ambient occlusion, volumetric atmosphere matching the material theme::2
Render Stack: Tilt-shift photography, macro lens, f/2.8, 8k, scale model aesthetic, detailed texture mapping, Unreal Engine 5 render::1
Negative: [Human presence, massive scale, blurry, low resolution, bad geometry, distortions, flat 2D, text, watermark]:: -1
```

## Omikuji (Fortune Slip) Generation Prompt with Character Integration

> Afiş üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A realistic snapshot photograph of a person's hand holding a single Omikuji (fortune slip) that has just emerged from an "Omikuji Vending Machine" installed on the grounds of a Japanese shrine.

Composition:
- A natural snapshot composition taken from a slightly high angle.
- The Omikuji is prominently displayed in the foreground, with the Omikuji machine itself visible in the background.
- The Omikuji machine has a poster displaying the reference character.
- The background features a shrine atmosphere suitable for Hatsumode (first shrine visit of the New Year) (Torii gate, wood, Shimenawa rope, New Year decorations), slightly arranged to match the world view of the reference image. People in New Year's attire are also visible.
- The character used for the Omikuji machine poster and the illustrations on the Omikuji slip must perfectly mimic the reference image.

◆ Character Name
- If not specified, read the appearance, atmosphere, color, and personality of the reference image and automatically generate a Japanese-style character name with strong humor.

◆ Omikuji Paper (Texture)
- Has a fibrous, Washi paper-like texture, with clear creases from being folded.
- Slightly wrinkled, giving an authentic feel.
- Each area is sectioned off by a Japanese modern and stylish frame that reflects the characteristics of the reference character.
- Natural shadows of the fingers holding the paper are cast, and the light source direction is clear.

◆ Omikuji Title (Generated from Reference Image)
- Generate a title based on the personality, color, and world view of the reference character.
- Printed largely at the top of the paper.
- The font is a Japanese logo style, but the color matches the tone of the reference image.

- Small illustrations or icons of the reference character are placed in 2-3 locations on the Omikuji paper.

◆ Omikuji Content (Standard Format)
- The fortune for the year (must be randomly selected from {argument name="fortune level en" default="Great Luck to Great Misfortune"}) + 5-6 items printed in Japanese, wildly arranged to suit the atmosphere of the reference image.
- Each item includes a fortune rating and a brief comment of about 30 characters.
- The text is in an authentic Omikuji style, humorously exaggerating the characteristics of the reference character.
- Item names are freely arranged based on the reference character's personality.
- Illustrations of the reference character in suitable situations are included for a few distinctive items.

◆ Omikuji Machine (Background)
- A large image is displayed on the machine. The image includes:
- The reference character arranged in New Year's attire.
- The Omikuji name displayed largely.
- Catchphrases, etc., that freely leap from the characteristics read from the reference image.
- Display rich text and characters. The font design matches the atmosphere of the reference image.
```

## Ultra-Photorealistic Flash Photography Portrait Prompt

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_metadata": {
    "style": "Flash Photography / Lifestyle Portrait",
    "resolution": "8K",
    "aspect_ratio": "2:3",
    "quality": "Ultra-Photorealistic RAW"
  },
  "subject": {
    "demographics": "Sydney Sweeney, young actress with a fit physique",
    "hair": {
      "color": "Platinum blonde with natural dark root shadow",
      "style": "Long, voluminous loose waves, deep side part",
      "interaction": "Right hand running through hair near temple, lifting volume"
    },
    "face": {
      "skin_texture": "High fidelity, visible pores on cheeks, slight T-zone sheen",
      "expression": "Relaxed, confident smile, soft gaze directed at camera",
      "makeup": "Natural glam, defined eyebrows, mascara, rose-tinted blush, glossy nude-pink lip"
    },
    "body": {
      "pose": "Seated on sofa, leaning back into corner, legs crossed at the calves",
      "skin_details": "Smooth texture on legs, realistic skin tone with flash highlights on shin and thigh"
    }
  },
  "clothing": {
    "main_garment": {
      "type": "Long-sleeve romper / playsuit",
      "pattern": "Classic tartan plaid (red, navy blue, white lines)",
      "fabric": "Soft brushed cotton flannel",
      "details": "Button-down front placket, open collar, fitted cuffs"
    },
    "footwear": {
      "type": "Thick knit socks",
      "color": "Heather grey / marled grey",
      "texture": "Ribbed wool blend, slouchy fit around ankles"
    }
  },
  "environment": {
    "location": "Modern residential living room",
    "foreground_furniture": {
      "item": "White sectional sofa",
      "texture": "Woven fabric upholstery, plush cushions, slight creasing from weight"
    },
    "background_decor": {
      "left_side": "Floating wooden shelf, three white ceramic planters with green foliage (Snake plant, Pothos, Money tree)",
      "right_side": "Side table, ceramic table lamp with beige linen shade (illuminated)"
    },
    "walls": "Neutral cool grey matte paint"
  },
  "lighting": {
    "setup": "Direct on-camera flash mixed with warm ambient practical",
    "key_light": "Hard frontal flash, creating distinct drop shadow of subject against the white sofa",
    "ambient_light": "Warm tungsten glow (2700K) from the background lamp",
    "reflections": "Catchlights in eyes, specular highlight on lower leg"
  },
  "camera_gear": {
    "camera": "Sony A7R V",
    "lens": "35mm f/2.8 GM",
    "settings": {
      "aperture": "f/5.6 (deep depth of field)",
      "shutter": "1/60",
      "iso": "400"
    }
  },
  "technical_specs": [
    "RAW",
    "Uncompressed",
    "8k resolution",
    "Hyper-realistic textures",
    "Direct flash aesthetic",
    "Chromatic aberration free",
    "Sharp focus",
    "Subsurface scattering",
    "Global illumination"
  ],
  "negative_prompt": [
    "bokeh",
    "blur",
    "depth of field",
    "hazy",
    "painting",
    "illustration",
    "3d render",
    "cartoon",
    "smooth skin",
    "airbrushed",
]
```

## Cinematic Night Urban Portrait with Luxury SUV

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic night-time urban portrait of a confident, handsome man leaning against a black luxury SUV on a modern city highway. He is wearing a black blazer over a white unbuttoned dress shirt and light blue tailored trousers, one hand in his pocket, the other resting on the car. Clean haircut, light stubble, sharp masculine features. Skyscrapers with glowing windows in the background, streetlights creating bokeh, long light trails from passing traffic. Moody, high-contrast lighting, shallow depth of field, professional fashion photography, ultra-realistic, {argument name="lens" default="85mm"} lens, f/1.8, cinematic color grading, luxury lifestyle aesthetic.
```

## Life-Log Style Portrait with Warm Cinematic Lighting

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Masterpiece, best quality, 8k resolution, photorealistic. A cheerful young woman in uploaded image standing in the center of a bright, sunlit modern bakery. She is wearing a brown oversized knit cardigan with white Nordic reindeer patterns, a matching brown beanie, and creamy beige wide-leg trousers. She is holding a brown paper bag filled with fresh baguettes in one arm and a small brown teddy bear in her other hand. Warm morning sunlight streaming through large windows, soft cinematic lighting, warm color palette (brown, beige, white). Shallow depth of field, blurred background of bakery shelves filled with bread. Medium shot, symmetric composition, cozy and healing atmosphere. --ar 4:5 --v 6.0
```

## Luxury Yacht Lifestyle Photo Collage Prompt

> Minimal, lüks mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_type": "photo collage",
  "number_of_frames": 3,
  "overall_theme": "luxury summer lifestyle, yacht leisure, coastal glamour",
  "setting": {
    "location": "onboard a luxury yacht",
    "environment": {
      "water": "deep blue sea with visible wake and splashes",
      "background": "rocky coastal cliffs with greenery and a few distant white buildings",
      "weather": "clear, sunny day",
      "lighting": "natural bright sunlight, high contrast, sharp shadows"
    }
  },
  "subject": {
    "count": 1,
    "gender_presentation": "female",
    "approximate_age_range": "young adult",
    "appearance": {
      "skin_tone": "light to lightly tanned",
      "body_type": "slim, athletic, toned",
      "hair": {
        "color": "blonde",
        "length": "long",
        "style": "loose, slightly wavy"
      }
    },
    "clothing": {
      "outfit": "black bikini",
      "style": "minimal, modern",
      "fit": "form-fitting"
    },
    "accessories": "none visible",
    "footwear": "barefoot"
    }
  },
  "poses_by_frame": {
    "frame_1": {
      "pose": "reclining sideways",
      "details": "one arm bent behind the head, body stretched along the yacht cushion",
      "expression": "relaxed, eyes closed or softly focused",
      "camera_angle": "side view, slightly elevated"
    },
    "frame_2": {
      "pose": "lying on back",
      "details": "arms stretched overhead, legs bent slightly",
      "expression": "calm, eyes closed, serene",
      "camera_angle": "top-down to slightly angled"
    },
    "frame_3": {
      "pose": "lying on stomach",
      "details": "elbows resting on cushion, feet lifted and crossed",
      "expression": "smiling, playful, direct engagement with camera",
      "camera_angle": "rear three-quarter angle"
    }
  },
  "surface_and_objects": {
    "yacht_details": {
      "material": "white leather or vinyl cushions",
      "design": "clean, modern, luxury finish",
      "color_palette": "white upholstery contrasting with blue sea"
    }
  },
  "color_palette": {
    "dominant_colors": [
      "white",
      "deep blue",
      "black",
      "sand beige"
    ],
    "accent_colors": [
      "turquoise highlights in water",
      "green from coastal vegetation"
    ]
  },
  "mood_and_aesthetic": {
    "mood": "relaxed, confident, glamorous",
    "aesthetic": "luxury travel, summer sensuality, high-end lifestyle",
    "energy": "calm yet playful"
  },
  "composition": {
    "layout": "vertical collage with three horizontal frames",
    "focus": "subject centered in each frame",
    "depth": "foreground subject with scenic coastal background",
    "sharpness": "high clarity and detail"
  },
  "photography_style": {
    "style": "editorial lifestyle photography",
    "lighting_type": "natural daylight",
    "post_processing": "light color enhancement, crisp contrast, clean tones"
  },
  "intended_use": [
    "fashion or swimwear editorial",
    "luxury travel promotion",
    "so"
```

## Ultra-Realistic Winter Fashion Portrait

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "Ultra-realistic outdoor winter fashion portrait of a young Asian woman crouching in fresh snow. She is wearing a fitted  short black dress paired with fur-lined snow boots. Her makeup is soft and natural. She has long, wavy black hair flowing naturally. One finger is gently touching her lips, giving a playful yet thoughtful expression. The background features snow-covered pine trees with a foggy winter atmosphere. Overcast natural lighting creates soft shadows. Shallow depth of field isolates the subject with a cinematic composition. High detail, sharp focus, Instagram aesthetic, 85mm lens look, soft contrast, and cold color tones dominate the scene.",
  
  "style": "ultra-realistic, cinematic, winter fashion",
  "environment": "outdoor, snowy forest, foggy winter atmosphere",
  "lighting": "overcast natural light, soft shadows",
  "camera": {
    "lens": "85mm",
    "depth_of_field": "shallow",
    "focus": "sharp"
  },
  "color_palette": "cold tones, soft contrast",
  "quality": "high detail, ultra realistic, instagram aesthetic",
  "aspect_ratio": "4:5"
Use the face without any change.
}
```

## Cinematic Panning Studio Portrait with Motion Blur

> Sinematik, stüdyo ışıklı portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A panning studio portrait of a mysterious female figure captured in side profile, her head subtly turned forward as motion blur streaks softly through her hair and jawline. She wears a matte charcoal wool coat with softened edges, standing against a solid Pantone 137 C orange background that fills the frame entirely. The image features intentional horizontal motion blur from a slow shutter pan, preserving facial structure while allowing peripheral smearing. Soft studio lighting with diffused highlights, low contrast, and lifted blacks creates a faded analog film look with fine grain and muted saturation. Shot on a full-frame camera using a 50mm lens at f/2.8, ISO 200, shutter speed 1/15s, vertical orientation, tight portrait framing, shallow depth of field. The mood is cinematic, introspective, and modern editorial visual language aligned with 032c and A24 aesthetics.
```

## Realistic Lifestyle Portrait Prompt

> Fotogerçekçi mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta_data": {
   "intent": "Realistic outdoor portrait of a cheerful model."
  },
  "task_configuration": {
    "type": "GENERATE",
    "sub_type": "photograph",
    "aesthetic": "realistic_lifestyle"
  },
  "subject_definition": {
    "identity": {
      "type": "model",
      "age_appearance": "{argument name="age" default="25 years old"}",
      "gender": "female"
    },
    "appearance": {
      "hair": "{argument name="hair style" default="blonde wavy, shoulder-length"}",
      "expression": "cheerful, smiling wide"
    },
    "attire": {
      "top": "salmon-colored button-down shirt with subtle pattern, sleeves rolled",
      "bottom": "ripped blue denim jeans",
      "accessories": [
        "dark sunglasses worn on face",
        "layered gold necklaces",
        "gold hoop earrings",
        "gold bracelets"
      ]
    },
    "pose": {
      "stance": "standing full-body",
      "posture": "relaxed, confident"
    }
  },
  "environment_definition": {
    "location": "European-style cobblestone street",
    "background_elements": {
      "architecture": "old stone building with multiple arches",
      "decor": "large terracotta planters filled with colorful geraniums and ivy"
    },
    "atmosphere": "warm, sunny day"
  },
  "composition_and_layout": {
    "framing": "full_body photograph",
    "camera_angle": "eye-level",
    "depth": "shallow depth of field, background slightly blurred"
  },
  "lighting_and_optics": {
    "source": "natural daylight, late afternoon",
    "quality": "warm, golden, diffused",
    "shadows": "soft, long"
  },
  "material_and_texture": {
    "realism_level": "photorealistic",
    "textures": [
      "woven cotton shirt",
      "worn denim",
      "weathered cobblestone",
      "rough stone architecture"
    ]
  }
}
```

## High-Contrast Fashion Editorial Portrait of a Man

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "Ultra-realistic high-end fashion editorial portrait of an adult man, 100% using the uploaded reference image for exact face, identity, facial structure, and expression (no changes or stylization). The subject is leaning casually against a tall white rectangular pedestal in a minimal studio environment. Pose must match the reference exactly: body angled sideways, left hip resting on the pedestal, one hand casually placed inside the trouser pocket, the other relaxed by the thigh. One leg straight on the ground, the other slightly bent at the knee, feet crossed naturally at the ankles.\
\
He is wearing a tailored light grey textured suit with slim-fit trousers and a matching blazer, paired with a white button-down shirt worn casually open at the collar (no tie). Black leather loafers with a visible ankle gap, clean and elegant styling.\
\
Facial details preserved from the reference: sharp masculine jawline, light stubble beard, defined cheekbones, neatly styled dark hair swept back. Expression is serious and calm, eyes looking slightly off-camera to the side.\
\
Lighting is dramatic with hard side lighting from a single direction, creating strong, sharp shadows and a clear silhouette shadow of the subject projected onto the wall behind him. High-contrast light-and-shadow geometry enhances the cinematic editorial mood.\
\
Background consists of a smooth dark grey studio wall and floor, minimalist and distraction-free, with no props other than the pedestal. Luxury fashion magazine aesthetic, ultra-sharp focus, realistic skin texture, fine fabric details, cinematic contrast. DSLR photography look with an 85mm lens, shallow depth of field, muted neutral color grading. Vertical composition, premium editorial quality, 8K photorealism.",
  "aspect_ratio": "4:5",
  "resolution": "8K",
  "camera_lens": "85mm",
  "style": "luxury fashion editorial, cinematic",
  "lighting": "dramatic hard side lighting, high contrast",
  "quality": "ultra-realistic, premium",
  "reference_image": "strictly use uploaded image only"
}
```

## Cinematic Studio Shot of a Soccer Commercial Set

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Wide cinematic shot of a soccer commercial professional film set inside The Volume: director confidently calling 'Cut!' as camera dollies back from a high-speed car chase scene, revealing massive curved LED walls displaying a dynamic soccer ambiance as if we were in the stadium, Arri Alexa on dolly track, crew standing by quietly, practical lights syncing with digital environment, volumetric god rays, anamorphic lens characteristics with subtle flares, photorealistic, subtle 35mm film grain, calm and controlled energy, high resolution
```

## Candid Street Photography with Documentary Realism

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "Objective": "Create a realistic candid street photograph with cinematic documentary realism",
  "PersonaDetails": {
    "Subject": {
      "Type": "Young woman",
      "Pose": "Standing at a city crosswalk, captured mid-turn",
      "Gaze": "Looking directly toward the camera",
      "Expression": "Calm, introspective, slightly distant",
      "Hair": "Loosely tied back with soft strands framing the face",
      "Wardrobe": {
        "Outerwear": "Beige trench coat",
        "Accessories": "Thin gold chain shoulder bag"
      }
    }
  },
  "SceneDescription": {
    "Location": "Busy urban crosswalk",
    "BackgroundElements": [
      "Pedestrians in motion",
      "Yellow taxis",
      "Tall city buildings"
    ],
    "Motion": "Subtle background movement suggesting city life"
  },
  "Composition": {
    "Framing": "Waist-up candid framing",
    "Moment": "Unposed, spontaneous mid-turn capture",
    "DepthOfField": "Shallow depth of field",
    "Focus": "Ultra-sharp subject with background motion blur"
  },
  "LightingAndColor": {
    "Lighting": "Natural overcast daylight",
    "ColorPalette": "Muted neutral tones",
    "Bokeh": "Soft cinematic bokeh"
  },
  "PhotographyStyle": {
    "Genre": "Street photography",
    "Aesthetic": "Documentary-style realism",
    "LensLook": "85mm lens perspective",
    "DetailLevel": "High detail, photorealistic textures"
  },
  "Mood": {
    "Tone": "Quiet, reflective, urban",
    "Atmosphere": "Authentic, lived-in city moment"
  },
  "ArtDirection": {
    "Style": "Photorealistic",
    "RealismLevel": "True-to-life, candid capture",
    "Processing": "Minimal, natural post-processing"
  },
  "NegativePrompt": [
    "posed look",
    "fashion editorial",
    "studio lighting",
    "oversaturated colors",
    "heavy retouching",
    "cartoon",
    "anime",
    "blurry subject"
  ],
  "ResponseFormat": {
    "Type": "Single image",
    "Orientation": "Portrait",
    "AspectRatio": "2:3"
  }
}
```

## 2000s Compact Digital Camera Texture Prompt

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Reproduce the unique texture of a 2000s-era compact digital camera (digicam) onto the uploaded photo. Maintain the original subject, pose, background, and composition exactly as they are. The overall atmosphere should be quiet, intimate, and cinematic. Merge soft melancholy with the natural beauty found in fashion magazines.

The lighting should be natural light from the Golden Hour. Apply strong directional light from the top-left to cast dramatic shadows on the face and chest. Enhance the contrast between bright areas and soft shadows to increase the dreamlike yet realistic texture. The lighting should emphasize a warm, bright skin tone with a healthy glow.

Add gentle film grain and render with minimal retouching. Suppress highlights and apply color grading based on warm whites with a slightly pastel tint. Skin should avoid overexposure, maintaining a natural, bright, gentle peach tone. The photo should retain the visual characteristics of a {argument name="camera model en" default="Canon EOS Kiss series"}, emphasizing sharp yet soft details, natural texture, and warm dynamic range. If the image is blurry, perform upscaling.

Strict adherence: The face and the "subject's hair."
```

## Minimalist Lifestyle Portrait with Cinematic Lighting

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Masterpiece, best quality, 8k resolution, highly detailed. A stunning woman in uploaded image with long flowing black hair, wearing a black silk camisole and matching wide-leg silk trousers, sitting gracefully on the edge of a pristine white bed. One knee raised, hand gently brushing through hair. Radiant genuine smile, sparkling eyes. Minimalist modern hotel room interior, beige walls, soft natural window lighting, cinematic lighting, soft shadows. A straw tote bag with an orange scarf beside her on the floor. Shot on 35mm lens, f/2.8, photorealistic, elegant aesthetic, effortless chic. --ar 3:4 --v 6.0
```

## High-Fashion Winter Balcony Portrait in White Fur

> Moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject_pose": "A young woman standing in a relaxed, confident pose, leaning her back against the wooden balcony railing. She has one leg straight and the other leg bent at the knee, resting her foot slightly behind her on the lower rail structure. Her body is angled slightly towards the camera, and one hand is holding a bag handle down by her side.",
  "outfit": "She is wearing a glamorous all-white winter set consisting of a soft, fluffy white fur crop top that reveals her midriff, and a matching white mini skirt with a thick, plush fur trim at the hem. She is also wearing a large, round white fur hat that covers her forehead.",
  "background": "The scene is set on a wooden balcony with a breathtaking winter view. Behind the woman, there are tall pine trees heavily covered in snow and a majestic, snow-capped mountain range stretching into the distance under a cold sky.",
  "lighting": "Soft, natural ambient light typical of a winter evening, creating a cool tone with no harsh shadows, highlighting the texture of the white fur.",
  "atmosphere": "Cold, luxurious, and cozy winter aesthetic with a high-fashion influencer vibe."
}
```

## Photorealistic cinematic image prompt for a woman enjoying an evening on a balcony

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-high resolution, 8K image, Highly detailed, realistic, PNG format. A photorealistic medium shot of a beautiful young woman sitting on a balcony at night, wearing a {argument name="attire" default="champagne satin slip dress"}. She is holding a glass of {argument name="drink" default="red wine"}, smiling with her eyes closed in pure enjoyment. Warm paper lantern string lights glow in the background along with city bokeh. In the foreground, a wooden table holds a wine bottle and plates. Cinematic lighting, elegant atmosphere.
```

## Hyper-realistic cinematic close-up of a pepperoni pizza slice with dramatic cheese pull

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A hyper-realistic, cinematic close-up of a freshly baked {argument name="pizza type" default="pepperoni"} pizza slice being lifted from the pie, with long, dramatic cheese pulls stretching down in silky strands.
Golden, slightly charred crust with visible texture, bubbling mozzarella, glossy {argument name="topping detail" default="pepperoni slices"}, fresh basil leaves on top, and juicy cherry tomatoes scattered across the pizza.
Soft steam rising from the hot slice, creating a warm, mouth-watering atmosphere.
Shot on a DSLR, 50mm lens, shallow depth of field, sharp focus on the cheese stretch, background softly blurred.
Warm studio lighting with natural highlights, rich colors, realistic shadows, premium food-advertisement look.
```

## Cinematic UGC Ad Generation for Beverages

> Fotogerçekçi, sinematik yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Cinematic lifestyle video shot on a city street with soft background blur. A stylish woman with natural curly hair, wearing a black turtleneck, holds a {argument name="beverage container" default="red soda can"} near her lips. She takes a confident sip, lowers the can slightly, smiles subtly, and looks directly into the camera. With a calm, stylish tone, she says: “{argument name="dialogue" default="Thunder in a drink — cheers."}”
Natural daylight, shallow depth of field, smooth handheld camera movement, realistic facial expressions, soft cinematic lighting, premium beverage commercial aesthetic. Clean audio, natural lip sync, subtle wind movement in hair, realistic hand motion. Shot in ultra-realistic quality, 4K, 24fps, cinematic color grading, modern urban vibe, 1:1 aspect ratio.
```

## Ultra-realistic high-fashion studio photography of a woman in black latex

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic high-fashion studio photography of a young adult woman standing in a full-body pose against a seamless pure white studio background. Her body proportions are natural and anatomically realistic, with subtle asymmetry and believable weight distribution. She stands confidently with hands resting on her hips, elbows slightly pulled back; one leg is gently bent at the knee, creating a natural hip curve and relaxed stance.
Her long straight black hair is smoothly slicked back,falling past the shoulders with a natural sheen. Facial features are well-defined yet realistic: pronounced cheekbones, full lips with a soft glossy finish, and balanced facial proportions. Makeup is clean and editorial—subtle skin correction, visible natural skin texture (pores, micro-imperfections), even tone without a plastic look, and a sharp black eyeliner accentuating the eyes.
She looks directly into the camera with calm, self-assured eye contact and a composed, slightly dominantexpression—confident but not exaggerated.
Outfit: A strapless black glossy latex or PVC crop top, tightly fitted over the torso, realistically interacting with the body, showing natural tension, highlights, and light reflections. Matching high-waisted black glossy latex shorts, very short in length, hugging the hips and upper thighs with realistic material stretch and specular highlights. Thigh-high black glossy latex boots, reaching the upper thighs, form-fitting with smooth reflectivesurfaces and subtle material creases at natural bend points.
Lighting & Camera: Professional studio lighting with soft key light and controlled fill, designed to emphasize realistic specular highlights on the latex while preserving natural body contours and depth. No harsh shadows. Shot with a fashion photography mindset, 50–85mm lens look, shallow but realistic depth of field, high optical sharpness without over-processing.Overall mood: Futuristic, high-fashion, bold and confident editorial aesthetic. Fully human, photorealistic appearance. Clean white background with no distractions, no artificial glow, no CGI look, no exaggerated perfection.
```

## Paparazzi-Style Flash Portrait (Alexandra Daddario)

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "description": ‘’Alexandra Daddario, fit physique, looking back over left shoulder towards the camera.",
    "hair": "Long, dark brown, straight to slightly wavy hair, parted in the middle, falling over the back.",
    "face": "Light complexion with prominent natural freckles on cheeks and nose. Light hazel-green eyes with defined lashes. High-gloss, dewy skin finish (glass skin) with visible pores and texture. Glossy brownish-red lipstick. Sharp jawline.",
    "skin_texture": "Hyper-realistic skin texture, visible pores, natural skin imperfections, freckles on face and shoulder, high specular highlights from flash."
  },
  "clothing": {
    "outfit": "Black form-fitting dress, backless design with a single off-the-shoulder strap visible on the left arm. Sleek, matte fabric.",
    "accessories": "Gold bangle bracelet, layered gold chain bracelets on left wrist, gold rings on fingers."
  },
  "environment": {
    "setting": "Indoor setting against a textured, exposed red and brown brick wall.",
    "background_details": "Razor-sharp details on the brickwork and mortar. No blur. Distinct, hard shadow of the subject cast directly onto the wall behind her.",
    "mood": "Edgy, nightlife, candid celebrity snapshot style, confident."
  },
  "lighting": {
    "type": "Hard, direct on-camera flash.",
    "qualities": "High contrast, harsh shadows, bright specular highlights on the cheekbones, forehead, and shoulder. Cool-neutral color temperature.",
    "shadows": "Sharp, defined shadow cast on the brick wall immediately behind the subject."
  },
  "camera_gear": {
    "style": "Flash photography / Paparazzi style.",
    "lens": "35mm or 50mm prime lens.",
    "settings": "Aperture f/8 to f/11 (to maintain sharpness on both subject and wall), ISO 100, Shutter Speed 1/200s.",
    "sensor": "Full-frame high-resolution digital sensor (e.g., Sony A7R or similar)."
  },
  "technical_specs": [
    "8K Ultra HD",
    "RAW photograph",
    "Uncompressed",
    "Hyper-realistic",
    "Sharp focus edge-to-edge",
    "Deep depth of field",
    "No bokeh",
    "Highly detailed textures"
  ],
  "negative_prompt": [
    "blur",
    "bokeh",
    "out of focus background",
    "haze",
    "soft focus",
    "airbrushed skin",
    "cartoon",
    "3d render",
    "illustration",
    "distorted fingers",
    "low resolution",
    "grainy"
  ]
}
```

## Luxury Modern Western Editorial

> Sinematik, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "A striking and standout woman with strong emphasis on the face, featuring long dark brown hair cascading over her shoulders. She carries a soft, seductive Western charm and wears a modern denim bikini with a structured top, a brown leather strap, and a matching high-waisted denim bikini bottom. The outfit is enhanced with an elegant belt, and a white-and-brown patterned scarf with tassels that cleverly drapes across her left hip, secured by the belt. She completes the look with a classic dark brown cowboy hat, playfully adjusting it with both hands. A delicate necklace with a small pendant rests around her neck.\
\
The background is a lively outdoor setting beneath a clear blue sky with soft, fluffy white clouds and a vast open landscape. Green mountains or rolling hills appear in the distance, creating a rustic yet beautiful atmosphere with a rugged, open feel.\
\
Bright natural sunlight creates striking highlights on her skin, the denim fabric, and the cowboy hat. The interplay of light and shadow enhances depth, dimension, and fine details of her accessories. The color palette blends earthy browns, cool denim blues, the blue sky, and vivid greens from the distant landscape, evoking a luxurious, modern Western aesthetic reminiscent of high-fashion {argument name="editorial style" default="Dior"} editorials. She stands out in a truly unique way.\
\
The image should have exceptional sharpness and detail, capturing every strand of hair, delicate denim stitching, the texture of the cowboy hat, scarf patterns, and fine accessory details. No tattoos visible. The final image should resemble a high-end fashion magazine cover with pure clarity and beauty. She looks directly into the camera. Maintain facial features as accurately as possible.",
  "style": "luxury modern western, high-fashion editorial",
  "lighting": "bright natural sunlight, cinematic highlights and shadows",
  "camera": {
    "focus": "sharp focus on face",
    "quality": "ultra high resolution",
    "detail_level": "exceptional clarity"
  },
  "constraints": {
    "no_tattoos": true,
    "maintain_facial_features": true
  }
}
```

## Cinematic Balcony Ballgown Portrait at Golden Hour

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_generation_prompt": {
    "subject": {
      "description": "Young woman with a radiant and joyful smile",
      "hair": "Brown hair styled in an elegant formal updo",
      "accessories": "Dangling pearl or gold earrings, delicate necklace",
      "pose": "Sitting at a round balcony table, facing the camera, one hand resting gently near a teacup"
    },
    "apparel": {
      "item": "Ballgown",
      "material": "High-quality satin or silk",
      "color": "{argument name="dress color" default="Dusty pink or mauve"}",
      "details": "Fitted pleated bodice, voluminous skirt with heavy draping, sleeveless design"
    },
    "environment": {
      "location": "Luxury balcony overlooking the sea",
      "background_elements": "Vast ocean, distant coastline or islands similar to {argument name="location style" default="Santorini or Amalfi Coast"}, a sailboat drifting on the water",
      "furniture": "Black wrought iron chair, round table with white tablecloth",
      "table_setting": "Fine china teacup and saucer, glass of orange juice, pastries"
    },
    "lighting": {
      "type": "Golden hour sunset",
      "characteristics": "Warm backlighting, sun flare in the top left corner, soft haziness, shimmering reflection on the water"
    },
    "style": {
      "aesthetic": "Cinematic lifestyle photography",
      "quality": "Ultra-realistic, 8k, high resolution, sharp focus on subject, bokeh background, commercial photography style"
    }
  }
}
```

## Hyper-Detailed Hand Embroidery Portrait Prompt

> Fotogerçekçi, stüdyo ışıklı portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the uploaded image as the strict character reference.
Preserve the character’s facial structure, expression, skin tone, hairstyle, outfit, proportions, and pose exactly as shown.

Do not modify, beautify, stylize, or reinterpret the face in any way beyond embroidery translation.
Render the character as hyper-detailed hand embroidery artwork, using realistic satin stitches, long-and-short stitches, and dense fill stitches to create natural depth, fabric texture, and thread sheen.

Visible embroidery threads, precise stitch direction following facial contours, smooth gradients formed through thread layering, high stitch density, museum-quality textile craftsmanship.

{argument name="background" default="Neutral fabric background"}, soft studio lighting, ultra-sharp macro detail, photorealistic embroidery realism, no illustration or cartoon style.
```

## Gen-Z Fashion Editorial Studio Portrait

> Minimal, lüks moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene_description": "Modern studio photoshoot of a stylish young woman, identical to the reference, with a confident yet effortless Gen-Z fashion vibe. Her look feels polished, trend-forward, and naturally cool, the kind of style that stands out without looking overdone.",
  "subject_details": {
    "appearance": "Woman identical to the reference image, calm and confident expression with a subtle, relaxed Gen-Z attitude.",
    "clothing": "Chic, fashion-forward streetwear, tailored yet relaxed silhouette, layered pieces (like a cropped jacket or sleek blazer over a fitted top), high-waisted trousers or a stylish skirt, premium fabrics with subtle textures, overall elevated and trend-driven.",
    "accessories": "Statement yet minimal accessories, transparent or stylish modern glasses, subtle jewelry (like hoops or layered necklaces), and details that add sophistication without clutter.",
    "pose": "Natural editorial pose, weight shifted slightly to one side, relaxed posture, hands gently in pockets or resting casually, confident and candid fashion-magazine style."
  },
  "environment": {
    "background": "Minimal, seamless studio backdrop in {argument name="background color" default="soft grey or off-white"} to keep all attention on her and the outfit.",
    "lighting": "Soft diffused studio light with gentle falloff, subtle shadows, clean and slightly moody editorial lighting to highlight textures and styling."
  },
  "camera_settings": {
    "focus": "Crisp focus on the face and styling details, shallow depth of field for a fashion-forward portrait look.",
    "composition": "Mid-shot or slight three-quarter portrait, off-center framing for a modern editorial feel.",
    "quality": "Ultra-high resolution, refined tones, smooth textures, professional fashion magazine quality."
  },
  "mood": "Stylish, confident, modern Gen-Z fashion energy, minimal studio setup with a strong editorial edge."
}
```

## Black and White Intimate Sensual Lingerie Scene

> Sinematik, minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_type": "photograph",
  "style": {
    "genre": "intimate lifestyle / fine-art sensual",
    "color_palette": "black and white, high contrast",
    "mood": ["sensual", "intimate", "romantic", "cinematic"],
    "aesthetic": "moody, elegant, editorial"
  },
  "subjects": [
    {
      "type": "human",
      "count": 2,
      "gender_presentation": "feminine",
      "pose": "one subject seated on a sofa, the other straddling and leaning forward",
      "interaction": "close physical embrace, hands resting on waist and back",
      "expression_visibility": "faces partially obscured by hair and angle",
      "hair": "long, wavy, loose, flowing forward"
    }
  ],
  "clothing_and_accessories": {
    "upper_body": "minimal, form-fitting dark lingerie",
    "lower_body": "dark bodysuit and stockings",
    "footwear": "high-heeled shoes",
    "textures": ["smooth fabric", "sheer stockings"]
  },
  "body_language": {
    "posture": "leaning inward, curved spine, close proximity",
    "emotion_conveyed": ["desire", "intimacy", "confidence"],
    "hands": "one hand placed on thigh/hip, the other around the waist"
  },
  "environment": {
    "location": "indoor living room",
    "furniture": ["soft upholstered sofa"],
    "background_elements": [
      "shelves with decorative objects",
      "multiple lit candles",
      "curtains"
    ],
    "setting_feel": "warm, private, softly styled"
  },
  "lighting": {
    "type": "low-key ambient lighting",
    "source": ["candles", "soft interior light"],
    "shadows": "soft but deep, emphasizing contours",
    "highlighting": "subtle highlights on skin and fabric"
  },
  "composition": {
    "framing": "medium shot",
    "angle": "slightly elevated, side perspective",
    "focus": "subjects in foreground",
    "depth_of_field": "shallow, softly blurred background"
  },
  "camera_details": {
    "lens_style": "portrait lens",
    "sharpness": "high subject clarity",
    "grain": "subtle film grain"
  },
  "overall_prompt_description": "A black-and-white intimate lifestyle photograph capturing two feminine-presenting subjects in a close, sensual embrace on a sofa. The scene is softly lit by candles, creating a cinematic, moody atmosphere. Elegant lingerie, flowing hair, and expressive body language emphasize intimacy, confidence, and romantic tension within a warm, private indoor setting."
```

## Magical Fairytale Theme Park Selfie

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "Objective": "Create a joyful, cinematic fantasy photograph set in a magical fairytale theme park"
      "Type": "Young woman",
      "Pose": "Taking a selfie at arm’s length",
      "Expression": "Warm, joyful smile",
      "Clothing": "Light blue dress",
      "Action": "Holding a smartphone, facing the camera"
    },
    "SecondarySubject": {
      "Type": "Anthropomorphic fox mascot",
      "Appearance": "Cute, friendly fox character",
      "Clothing": "Red jacket",
      "Pose": "Standing beside the woman, giving a thumbs-up",
      "Emotion": "Playful and welcoming"
    }
  },
  "SceneDescription": {
    "Location": "Magical fairytale theme park",
    "Foreground": "Woman and fox mascot posing for a selfie",
    "Background": {
      "Landmark": "Grand fairytale castle at the end of the street",
      "Street": "Charming cobblestone road",
      "Architecture": "Classic European-style buildings",
      "LightingElements": "Glowing vintage street lamps"
    },
    "AtmosphericDetails": {
      "FloatingElements": "Soap bubbles drifting through the air",
      "MagicalAccents": "Some bubbles contain tiny whimsical silhouettes",
      "Mood": "Whimsical, joyful, storybook magic"
    }
  },
  "LightingAndMood": {
    "TimeOfDay": "Golden hour",
    "LightingStyle": "Warm highlights with gentle shadows",
    "Sky": "Soft pastel tones",
    "OverallMood": "Dreamy, uplifting, cinematic fantasy realism"
  },
  "PhotographyStyle": {
    "Genre": "Theme park photography",
    "Composition": "Cinematic framing with strong depth",
    "DepthOfField": "Shallow depth of field",
    "DetailLevel": "Ultra-detailed textures",
    "ColorGrading": "Vibrant yet soft, pastel-enhanced",
    "Resolution": "High resolution, sharp focus on subjects"
  },
  "ArtDirection": {
    "Style": "Dreamy fantasy realism",
    "VisualTone": "Joyful, magical, immersive",
    "RealismBalance": "Photorealistic with subtle fantasy elements"
  },
  "NegativePrompt": [
    "dark mood",
    "horror",
    "low resolution",
    "blurry faces",
    "harsh shadows",
    "oversaturated colors",
    "distorted anatomy",
    "uncanny characters"
  ],
  "ResponseFormat": {
    "Type": "Single image",
    "Orientation": "Portrait",
    "AspectRatio": "2:3"
  }
}
```

## Food Explosion Poster Generator

> Fotogerçekçi, minimal afiş üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
premium, studio food poster of {argument name="dish name" default="sushi"}, bursting style at the viewer, deep black backdrop, dramatic lighting, rich DOF, ultra-real textures, clean frame, ultra-realistic, photorealistic, 8k, high detail
```

## Photorealistic Poolside Bikini Pose with Technical Specs

> Fotogerçekçi portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "target_tool": "Nano Banana Pro",
    "timestamp": "2026-01-05T10:02:32+05:30",
    "image_dna": {
      "type": "Photo",
      "sensor": "iPhone 15 Pro / Sony A7III",
      "lock": "Orientation preserved 1:1"
    }
  },
  "spatial": {
    "facing": "Front-facing",
    "body": "Torso/hips squared to camera, knees splayed (butterfly position)",
    "camera_rel": "Centered, slightly elevated above eye-level"
  },
  "optics": {
    "focal_len": "50mm (Portrait)",
    "aperture": "f/2.8",
    "character": "Modern Sharpness, slight bloom",
    "flaws": ["Highlight bloom on hair", "Minor chromatic aberration on water"]
  },
  "environment": {
    "lighting": {
      "source": "Hard Daylight/Sun (Top-Right)",
      "bounce": "CRITICAL: Blue water bounce on right leg, warm grey paver bounce on legs",
      "shadows": "Hard, cast Left"
    },
    "physics": {
      "weather": "Dry heat, static hair",
      "materials": "Nylon tension, wet reflective water"
    }
  },
  "subject": {
    "id": "MAIN_SUBJECT",
    "pose": {
      "rig": "Seated on pool edge. Legs loosely crossed. Right arm straight on coping. Left hand on thigh.",
      "gaze": "Eyes to lens, head tilted down",
      "physics": "Glute compression, hand weight bearing"
    },
    "visuals": {
      "skin": "Natural tone, specular highlights (forehead/nose/shoulder)",
      "clothing": "{argument name="bikini description" default="Brown Bikini, White Polka Dots, Pink Ruffled Trim"}. Straps digging slightly."
    },
    "placeholders": {
      "skin": "[[USE_REFERENCE_SKIN]]",
      "face": "[[USE_REFERENCE_FACE]]",
      "hair": "[[USE_REFERENCE_HAIR]]"
    }
  },
  "context": {
    "off_screen": "Refracted caustics in pool (left), implied patio cover (behind)"
  },
  "generation": {
    "ar": "5:6",
    "positive": "Photorealistic, seated pose, poolside, bright sunlight, brown polka dot bikini, tattoos, paved ground, blue water, 8k",
    "negative": "Wrong direction, mirrored, oversaturated, plastic skin, cartoon, dark lighting, winter"
  }
}
```

## Ultra-Luxury Fashion Editorial Portrait

> Sinematik, retro moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": {
    "style": "ultra-luxury fashion editorial portrait",
    "shot_type": "full-body",
    "subject": {
      "gender": "female",
      "appearance": {
        "pose": "sitting confidently on a white marble fireplace mantel",
        "legs": "crossed elegantly",
        "expression": "powerful and confident",
        "hair": {
          "length": "long",
          "texture": "straight and silky",
          "color": "light brown",
          "part": "center",
          "styling": "perfectly styled"
        },
        "accessories": {
          "sunglasses": "oversized black sunglasses",
          "handbag": "small vintage-style designer monogram handbag"
        },
        "makeup": {
          "style": "bold nude makeup",
          "contour": "sharp contour",
          "lips": "glossy"
        }
      },
      "outfit": {
        "top": "black lace corset bodysuit with deep neckline",
        "tights": "sheer designer monogram tights",
        "shoes": "black pointed high heels",
        "outerwear": "{argument name="coat color" default="rich brown"} faux-fur coat draped loosely over shoulders"
      }
    },
    "environment": {
      "location": "elegant Parisian-style interior",
      "background_elements": [
        "classic white wall panels",
        "gold-framed mirror",
        "champagne bottles on the mantel"
      ],
      "vibe": "luxury and high fashion"
    },
    "photography": {
      "lighting": "cinematic soft lighting",
      "contrast": "high contrast",
      "focus": "sharp focus",
      "depth_of_field": "shallow",
      "quality": "fashion magazine quality",
      "style_reference": "Vogue editorial",
      "realism": "ultra-realistic",
      "resolution": "4K"
    },
    "aesthetic": [
      "premium luxury aesthetic",
      "Instagram model photography",
      "clean composition"
    ],
    "constraints": {
      "text": "none",
      "watermark": "none"
    }
  }
}
```

## Inverted Cityscape Car Chase Prompt for Nano Banana Pro

> Sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "core": "{argument name="subject" default="bright orange low-profile streamlined sports car"}",
    "action_pose": "accelerating rapidly along a right-upward spiral arc, body slightly leaning forward, wheels showing motion blur"
  },
  "environment_set_design": {
    "overall_environment": "aerial spiral highway above New York City",
    "details_props": [
      {
        "object": "spiral asphalt suspended racetrack",
        "surface": "gray asphalt texture with white arrows and road markings",
        "position": "foreground extending diagonally to the right and upward"
      },
      {
        "object": "stationary skyscraper clusters",
        "arrangement": "vertically mirrored symmetrical layout along horizontal central axis, upper half inverted skyscrapers and blocks linked with lower half upright city buildings",
        "density": "dense geometric architectural blocks on both sides"
      }
    ]
  },
  "composition_camera": {
    "camera_angle": "high aerial top-down view",
    "composition_logic": "spiral highway and white guide lines form diagonal leading lines, main subject positioned at right golden ratio section",
    "shot_type_focal_length": "medium close-up, equivalent 35-50mm mid focal length",
    "focus_point": "front half of car body and front wheels, background buildings moderately blurred to emphasize subject"
  },
  "atmosphere_mood": {
    "overall_mood": "dynamic, tense, cinematic realism",
    "time_of_day": "morning",
    "weather_air": "clear sky, warm sunlight, no clouds"
  },
  "lighting_color": {
    "lighting_setup": "key light is direct sunlight from front-side, city buildings reflect natural fill light",
    "light_color": "natural daylight white with warm tint"
  },
  "photography_technical": {
    "aperture": "f/1.4",
    "camera": "ARRI ALEXA Plus",
    "lens": "Zeiss prime lens"
  },
  "art_style": {
    "reference": "{argument name="art style" default="Blade Runner 2049"}",
    "render_quality": "cinematic still frame archive style"
  },
  "color_grading": {
    "grading_strategy": "overall cool blue tone with warm golden highlights, shadows in charcoal gray to enhance contrast",
    "film_simulation_lut": "cinematic LUT with cool tones and neutral darks",
    "highlight_tone": "cool blue",
    "shadow_tone": "deep blue and charcoal gray",
    "saturation_contrast": "medium saturation overall, high contrast"
  },
  "negative_prompts": {
    "avoid": ["noise", "film grain", "clouds"]
  }
}
```

## Low-Angle Full-Body Portrait on Concrete Steps

> Mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a high-resolution low-angle, full-body shot of a beautiful woman (as attached image) with long brown hair and glossy pink lipstick sitting on outdoor concrete steps against a backdrop of a tall apartment building. She is wearing an oversized grey and brown plaid flannel shirt over a black top, dark trousers, and chunky white sneakers, accessorized with round sunglasses and a silver chain necklace. The lighting is soft and moody,
```

## Miniature Construction Site Ad for a Product

> Fotogerçekçi 3B sahne üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A miniature construction crew assembling {argument name="product" default="[PRODUCT]"} like a skyscraper. Cranes, scaffolding, sparks flying. Playful but hyper-real, brand-campaign ready.
```

## Ultra-Realistic Man Holding Cartoon Miniature of Self

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create an image using the attached photo as the reference for the man’s face. Ultra-realistic portrait of a real-life person (face fully visible, natural skin texture, realistic hair, wearing a casual fashion tech-wear outfit), holding a tiny 3D cartoon version of himself by the back, looking at it with an amazed and slightly amused expression. The tiny cartoon version closely resembles the real person, with an exaggerated funny expression, oversized cartoon head, flailing arms and legs, smooth 3D stylized look (not doll-like), wearing a matching outfit. Dramatic deep background with cinematic lighting and depth, ultra-detailed textures for the real person, highly detailed 3D cartoon miniature but realistic in style, clean and natural comedic scene, 8K quality, fun and meme-worthy. 2:3 aspect ratio
```

## Cinematic Greenhouse Portrait at Golden Hour

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Cinematic photorealistic portrait of a stunning 20-year-old Scandinavian woman, long flowing golden blonde wavy hair cascading over shoulders, piercing ice-blue eyes, flawless porcelain skin with soft rosy cheeks, subtle natural makeup, gentle knowing smile, seated confidently at a white linen dining table in a luxurious greenhouse-style restaurant atrium, lush tropical plants like {argument name="tropical plant type" default="monstera deliciosa, strelitzia, ferns"} creating jungle backdrop, wearing elegant white cotton eyelet lace mini dress with short puffed sleeves, intricate cut-out embroidery, fitted bodice, arms resting crossed on table in relaxed pose, warm golden hour sunlight filtering through glass roof and leaves, soft volumetric god rays, subtle bokeh highlights, high contrast, rich greens contrasting white dress, hyper-detailed skin pores and hair strands, ultra-realistic, 50mm f/1.8 lens, ARRI Alexa style, cinematic lighting, masterpiece, best quality, 32k, sharp details, photorealistic textures, volumetric light, natural soft shadows
```

## Fashion Portrait in Burgundy and Camel

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_generation_prompt": {
    "subject": {
      "description": "A beautiful young woman walking confidently on a paved city sidewalk",
      "hair": "Long, straight, dark brown hair blowing slightly in the wind",
      "expression": "Soft smile, looking directly at the camera",
      "pose": "Full body shot, walking forward, one hand in coat pocket, other hand holding a bag"
    },
    "attire": {
      "inner_wear": "Fitted {argument name="inner wear color" default="burgundy red"} mini dress with a V-neckline",
      "outer_wear": "Long classic {argument name="outer wear color" default="camel-colored"} trench coat worn open",
      "footwear": "Dark brown suede knee-high boots with block heels",
      "accessories": "Small brown structured leather handbag, simple pendant necklace with amber stone"
    },
    "environment": {
      "setting": "Upscale urban street during the day",
      "background": "Grand classic stone building facade with large windows and columns",
      "details": "Green bushes with blooming pink roses lining the building base"
    },
    "technical_specifications": {
      "quality": "Ultra-high resolution, 8K image, Highly detailed, realistic",
      "format_instruction": "PNG format",
      "lighting": "Soft natural daylight, even illumination",
      "style": "Photorealistic, fashion photography, cinematic depth of field",
      "camera": "Eye-level angle, sharp focus on subject"
    }
  }
}
```

## Hyper-realistic New Chinese Style Portrait with Gobo Lighting

> Fotogerçekçi, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
1. Macro Style and Medium
- Core Medium: High-end Commercial Photography
- Aesthetic School: New Chinese Style, Festive Fashion Blockbuster

2. Subject and IP Identity
- Core Subject: Close-up profile of young East Asian woman
- IP/Celebrity Lock: Wearing a {argument name="attire" default="Red Cheongsam"}, adorned with a pearl necklace and red floral earrings

3. World Logic and Physics
- Physical Laws: Real optical projection, facial light and shadow conforming to facial contours
- Spatial Composition: Eye-level perspective, extremely close proximity

4. Data and Information Layer
- Text Extraction: No text
- Brand and Symbol: {argument name="foreground element" default="Red paper-cut art foreground"} - including crane, butterfly, and peony patterns

5. Material and Texture
- Core Material: Hyper-realistic skin texture, Matte cardstock, Warm, moist pearls
- Tactile Details: Visible vellus hair backlit, Subsurface scattering effect

6. Lighting and Atmosphere
- Lighting Model: Gobo lighting/Projected shadows - complex cutout patterns of light and shadow cast on the face
- Overall Atmosphere: Warm golden hour side backlight, high-saturation festive red tone, dreamy yet clear

7. Technical Parameters
- Lens and Rendering: 85mm-100mm Macro lens, Shallow depth of field, Bokeh foreground
- Composition Instruction: Framed composition, --ar 3:4
```

## 3x3 Editorial Grid with Pink Heart Balloon and Identity Lock

> Fotogerçekçi portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "request_metadata": {
    "model": "Nano Banana Pro",
    "content_type": "photoreal_editorial_pink_heart_balloon_3x3_grid",
    "quality_preset": "ultra",
    "format_aspect_ratio": "1:1",
    "output": "3x3_grid"
  },
  "references": {
    "reference_images": {
      "female_reference": "UPLOAD_FEMALE_REFERENCE_IMAGE (REQUIRED)"
    },
    "reference_rules": {
      "exactly_one_reference_only": true,
      "preserve_identity_female": true,
      "identity_lock_strength_female": 0.995,
      "face_similarity_priority": "MAX",
      "preserve_facial_proportions": true,
      "preserve_eye_shape_nose_lips_jawline": true,
      "no_identity_blending": true,
      "no_beautify_no_face_morph": true
    }
  },
  "layout": {
    "type": "3x3_grid",
    "description": "Same woman in all 9 frames. Same outfit, same background, same lighting, same lens/grade. Only pose, hand placement, and gaze change per frame.",
    "grid_style": {
      "borders": "thin white separators",
      "consistency_rule": "identical color grading and softness across all frames"
    },
    "frame_labels": [
      "1) Balloon hugged at chest, shy gaze",
      "2) Balloon angled near shoulder, soft smile",
      "3) Balloon raised overhead, playful look",
      "4) Balloon close to face, dreamy gaze",
      "5) Balloon centered at chest, classic editorial",
      "6) Balloon overhead, confident stance",
      "7) Balloon cradled low, eyes closed",
      "8) Balloon above head, hair touch",
      "9) Balloon overhead, profile glance"
    ]
  },
  "global_scene": {
    "environment": {
      "background": "plain warm off-white studio wall, smooth texture, no props, no text"
    },
    "lighting": {
      "type": "soft studio light",
      "setup": "large diffused key + gentle fill",
      "quality": "low contrast, flattering highlights, no harsh shadows"
    },
    "style": {
      "look": "clean editorial",
      "diffusion": "very subtle soft haze",
      "grain": "very subtle film grain",
      "retouching": "minimal; keep natural skin texture"
    },
    "camera": {
      "lens": "50mm editorial portrait feel",
      "aperture": "f/2.8 feel",
      "sharpness": "crisp subject with soft diffusion"
    },
    "consistency_locks": {
      "same_outfit": true,
      "same_background": true,
      "same_lighting": true,
      "same_color_grade": true
    }
  },
  "subject_profile": {
    "gender": "female",
    "age_group": "young_adult",
    "identity": "EXACT same face as the reference (no drift)",
    "hair": {
      "style": "long, soft waves",
      "color": "soft blonde / golden blonde, consistent across all frames (do not change face identity)"
    },
    "makeup": {
      "style": "soft glam",
      "skin": "natural texture",
      "lips": "soft rose-pink satin",
      "eyes": "defined but soft"
    },
    "wardrobe": {
      "dress": "{argument name="dress color" default="pink"} satin slip dress/top, elegant and fully opaque, thin straps, subtle sheen (satin refle"
    }
  }
}
```

## High-Fidelity Candid Café Portrait with Sharp Focus

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
(Ratio 4:5). A raw, high-contrast candid photograph taken with an iPhone 17 Pro. The shot is captured by a third person at a medium distance in a luxury high-end café. NO ARTIFICIAL BOKEH. Everything is SHARP and in focus from the subject's skin to the espresso machine in the background. 
Subject & Identity Locking:
•Identity: Strictly preserve the exact face and unique features of the woman in Image 1 (Selfie).
•Bio-Fidelity: Render high-fidelity skin physics: visible micro-pores, natural "satin-finish" healthy hydration glow, and fine vellus hair catching the window light ONLY along the jawline.
•Expression: Looking directly at the photographer with a radiant, playful, and confident "Pinterest-style" smile. Her hair is voluminous and perfectly styled in chestnut waves.
•Silhouette Calibration: Amplify the dominant structural bust volume and the substantial, thick-toned leg presence. Focus on the aggressive hourglass structural tapering at the waist.
Outfit & Material Realism:
•Clothing: A skin-tight, {argument name="top color" default="Ivory"} Ribbed-Knit Long-Sleeved Top with a minimalist mock-neck, paired with a fitted dark-grey jersey micro-skirt.
•Tension: The ribbed fabric shows extreme elastic tension and textural expansion, highlighting the symmetrical anatomical depth of her fit silhouette. Realistic indentations are visible where the skirt's waistband meets her midriff.
Pose & Composition:
•Pose: She is seated at a round, white marble bistro table. She is leaning forward on her elbows, which are resting on the marble surface, creating a dynamic posture that accentuates her S-curve.
•Matter Physics: Realistic skin-to-surface compression (thigh squish) is visible against the woven rattan chair.
Environment & Lighting:
•Lighting: Hard Directional Sunlight streaming through a large café window. The light creates high-contrast highlights on her skin and the marble table, casting sharp, defined shadows that define her form.
•Background (SHARP): A detailed luxury café interior. On the table, an aesthetic cappuccino with latte art and a half-eaten croissant on a ceramic plate are visible. In the background, wooden shelves with coffee beans, a chrome espresso machine, and other diners are all perfectly IN FOCUS. No artificial blur.
Quality: Raw unedited "candid date" social-media dump aesthetic, high dynamic range, visible digital grain in the deep shadows, 8k resolution.
```

## Chinese Xianxia Fantasy Portrait with Cold Tones and Magic Effects

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Layer 1: Subject and Core Aesthetic
Masterpiece, ultra-realistic portrait of an unparalleled beauty with strong Oriental charm, slender and ethereal figure, embodiment of Chinese Xianxia (immortal hero) fantasy, high-fashion cinematic feel.

Layer 2: Facial Details and Expression
Delicate skin, naturally translucent with a rosy glow, vibrant healthy complexion, semi-transparent ceramic skin, deep and moving eye contact, breaking the fourth wall, gazing deeply directly into the lens.

Layer 3: Attire and Styling
Exquisite and flowing silk Hanfu robe, main tone is {argument name="attire main color" default="silver and light blue"}, but rich color layers show through the layered translucent fabric, exquisite multi-color embroidery details, traditional luxurious jade hair accessories, shimmering silk texture.

Layer 4: Scene and Atmosphere
Majestic misty mountain background, frost-covered peaks, cold and ethereal atmosphere, dense fog, visual cues of sub-zero temperature, grand cinematic proportions.

Layer 5: Interaction and Composition
Dynamic perspective, her bare hand elegantly reaches towards the camera, fingers almost touching the lens, deep depth of field, extreme foreground bokeh, intimate interactive feeling.

Layer 6: Magic Elements and Special Effects
Swarms of shimmering {argument name="magical creature" default="silver spirit butterflies"} (centers dotted with warm amber light), floating crystal petals with faintly warm centers, sparkling white particles mixed with dreamy golden sparks, magical glow, transcendent aura.

Layer 7: Lighting and Technical Specifications
Cinematic cool-tone lighting, overall cool-tone atmosphere, but accompanied by delicate warm-tone contrast accents, 8k resolution, ray tracing, Subsurface Scattering (SSS) effect for skin texture, sharp focus on the eyes, soft diffused moonlight, professional color grading.
```

## Sadie Sink Fitness Lifestyle Commercial

> Minimal yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene_type": "lifestyle_fitness",
  "setting": {
    "location": "modern home kitchen",
    "environment": "clean, minimal, bright",
    "lighting": "natural daylight from window"
  },
  "subject": {
    "type": "person",
"Identification": "{argument name=\"subject name\" default=\"Sadie Sink\"}" 
    "position": "leaning against kitchen island",
    "pose": "elbow resting on counter, head resting on hand, winking at camera",
    "expression": "playful and confident",
    "appearance": {
      "hair": {
        "color": "blonde",
        "length": "long",
        "style": "straight, loose"
      }
    },
    "clothing": {
      "top": "{argument name=\"top color\" default=\"Bright Red\"} glitter fitted crop top",
      "bottom": "Bright Red fitted athletic shorts"
    }
  },
  "objects": [
    {
      "type": "protein_powder_container",
      "brand_visible": "Top Secret",
      "label": "The Organic Whey",
      "color": "white container with black label",
      "placement": "on kitchen counter"
    },
    {
      "type": "beverage",
      "description": "orange-colored drink in glass",
      "placement": "on kitchen counter"
    }
  ],
  "camera": {
    "angle": "eye-level",
    "framing": "three-quarter body shot",
    "orientation": "portrait"
  },
  "activity": "posing with fitness supplement in a home setting",
  "mood": "energetic, playful, aspirational",
  "image_style": "fitness lifestyle photography",
  "color_palette": [
    "black",
    "white",
    "neutral kitchen tones",
    "orange accent"
  ]
} 3:4
```

## Ultra-Realistic Beach Portrait with Identity Lock

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_generation",
  "style": "ultra_realistic_lifestyle_travel_photography",
  "resolution": "8K",
  "aspect_ratio": "3:4",
  "identity_reference": {
    "use_uploaded_photo": true,
    "face_preservation": "strict",
    "no_facial_modification": true,
    "no_identity_change": true
  },
  "subject": {
    "gender": "young woman",
    "pose": "lying relaxed on the beach in a close, casual portrait, face resting gently on one hand",
    "expression": "serene, calm, vacation mood",
    "hair": {
      "color": "brown",
      "style": "short chanel bob with soft lighter highlights, loose and natural",
      "texture": "smooth and realistic"
    },
    "eyes": "brown",
    "skin": "naturally tanned with warm sunlit glow",
    "makeup": "minimal, natural look with light lip gloss"
  },
  "clothing_and_accessories": {
    "sunglasses": "round sunglasses with thin metallic frame and dark reflective lenses",
    "hat": "wide-brim straw hat decorated with {argument name="hat decoration" default="seashells and starfish"} on the side",
    "jewelry": [
      "gold bracelets with seashell details on the wrist",
      "ring with a bright reflective stone on the finger"
    ]
  },
  "environment": {
    "location": "sunny tropical beach",
    "background": "softly blurred blue ocean with gentle waves, a small boat visible in the distance",
    "ground": "fine sand, lightly covering the feet"
  },
  "pose_details": {
    "legs": "bent backward in a relaxed vacation pose",
    "body_language": "tranquil, relaxed, holiday atmosphere"
  },
  "lighting": {
    "type": "natural sunlight",
    "quality": "warm, soft, realistic",
    "effect": "gentle shadows from the hat, glowing highlights on skin"
  },
  "camera": {
    "shot_type": "close-up lifestyle portrait",
    "lens": "50mm DSLR",
    "focus": "sharp focus on face, sunglasses, jewelry, and skin texture",
    "depth_of-field": "soft background blur"
  },
  "color_palette": {
    "tones": "warm summer colors, natural skin tones, ocean blues, sandy neutrals"
  },
  "aesthetic": {
    "mood": "tropical, relaxed, vacation feeling",
    "style": "high-end travel lifestyle photography",
    "realism": "extreme photorealism with crisp skin, hair, sand, and reflections"
  },
  "constraints": {
    "no_artificial_stylization": true,
    "no_face_distortion": true,
    "no_expression_change": true
  }
}
```

## LINE Sticker Sheet Generation Prompt

> Illüstrasyon üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Using the cat character in this attached image, please create a list image depicting {argument name="Number of Stickers" default="12 types"} of LINE stickers. Please create {argument name="Number of Stickers" default="12 types"} of sticker illustrations, each set with text.
```

## Americana Dive Bar Editorial Scene

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "ultra_photoreal_cinematic_editorial_scene",
      "version": "v1.0_AMERICANA_POOL_BAR_EDITORIAL",
      "priority": "high"
    },
    "output_settings": {
      "aspect_ratio": "2:3",
      "orientation": "portrait",
      "resolution": "ultra_high_res",
      "render_style": "cinematic_photorealism",
      "sharpness": "natural",
      "film_grain": "subtle_analog",
      "color_grade": "warm_vintage_film",
      "retouch_level": "editorial_minimal",
      "noise_reduction": "low"
    },
    "hard_constraints": [
      "Exactly TWO human subjects (one male, one female).",
      "Photorealistic only.",
      "No text, no readable logos, no watermarks.",
      "Natural anatomy and proportions.",
      "Cinematic lighting with realistic shadows."
    ],
    "creative_prompt": {
      "scene_summary": "A cinematic, photorealistic scene set inside a vintage American dive bar. A man and a woman stand intimately close at a classic green-felt pool table. The atmosphere is warm, nostalgic, and slightly gritty, evoking Americana editorial photography.\
\
Male subject:\
- Slim build, rugged casual style.\
- Wearing a white tank top under an open, slightly worn denim jacket.\
- Light blue jeans.\
- Brown patterned bandana tied around his head.\
- Light stubble, relaxed but confident demeanor.\
- Holding a pool cue loosely in one hand.\
\
Female subject:\
- Slim, elegant yet casual appearance.\
- Wearing a black sleeveless top tucked into high-waisted light denim jeans.\
- Wide brown leather belt.\
- White cowboy hat.\
- Patterned bandana scarf tied around her neck.\
- Natural makeup, soft confident expression.\
\
Pose & interaction:\
- The man stands slightly behind and to the side of the woman.\
- One of his arms rests gently around her waist.\
- The woman leans lightly against the pool table, one hand resting on its edge.\
- They look into each other’s eyes with subtle intimacy and tension.\
\
Environment & props:\
- Green felt pool table in the foreground with a few billiard balls visible.\
- Wooden walls, cabinets, and vintage bar interior details.\
- Softly glowing neon beer signs in the background, out of focus.\
- Classic Americana dive-bar mood.\
\
Lighting:\
- Low-key cinematic lighting.\
- Warm tungsten light from above and side.\
- Soft highlights on skin, deep shadows with smooth falloff.\
- Filmic contrast, no harsh specular highlights.\
\
Camera:\
- 35mm lens look.\
- Medium shot, waist-up framing.\
- Shallow depth of field with blurred background.\
- Natural perspective, no distortion."
    },
    "negative_prompt": [
      "cartoon",
      "illustration",
      "anime",
      "cgi",
      "plastic skin",
      "over-retouched faces",
      "distorted anatomy",
      "extra limbs",
      "extra fingers",
      "blurred faces",
      "harsh flash",
      "modern nightclub lighting",
      "text",
      "logo",
      "
    ]
  }
}
```

## Fitness Lifestyle Shot of Ana de Armas in Kitchen

> Minimal yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene_type": "lifestyle_fitness",
  "setting": {
    "location": "modern home kitchen",
    "environment": "clean, minimal, bright",
    "lighting": "natural daylight from window"
  },
  "subject": {
    "type": "person",
    "position": "leaning against kitchen island",
    "pose": "elbow resting on counter, head resting on hand, winking at camera",
    "expression": "playful and confident",
    "appearance": {
      "hair": {
        "color": "blonde",
        "length": "long",
        "style": "straight, loose"
      }
    },
    "clothing": {
      "top": "White fitted crop top",
      "bottom": "black loose athletic shorts"
    }
  },
  "objects": [
    {
      "type": "protein_powder_container",
      "brand_visible": "Top Secret",
      "label": "The Organic Whey",
      "color": "{argument name="container color" default="white"} container with black label",
      "placement": "on kitchen counter"
    },
    {
      "type": "beverage",
      "description": "orange-colored drink in glass",
      "placement": "on kitchen counter"
    }
  ],
  "camera": {
    "angle": "eye-level",
    "framing": "three-quarter body shot",
    "orientation": "portrait"
  },
  "activity": "posing with fitness supplement in a home setting",
  "mood": "energetic, playful, aspirational",
  "image_style": "fitness lifestyle photography",
  "color_palette": [
    "White",
    "Black",
    "neutral kitchen tones",
    "orange accent"
  ]
}
```

## Sadie Sink Fitness Lifestyle Photo JSON Prompt

> Minimal yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene_type": "lifestyle_fitness",
  "setting": {
    "location": "modern home kitchen",
    "environment": "clean, minimal, bright",
    "lighting": "natural daylight from window"
  },
  "subject": {
    "type": "person",
    "position": "leaning against kitchen island",
    "pose": "elbow resting on counter, head resting on hand, winking at camera",
    "expression": "playful and confident",
    "appearance": {
      "hair": {
        "color": "blonde",
        "length": "long",
        "style": "straight, loose"
      }
    },
    "clothing": {
      "top": "black fitted crop top",
      "bottom": "black fitted athletic shorts"
    }
  },
  "objects": [
    {
      "type": "protein_powder_container",
      "brand_visible": "Top Secret",
      "label": "The Organic Whey",
      "color": "white container with black label",
      "placement": "on kitchen counter"
    },
    {
      "type": "beverage",
      "description": "orange-colored drink in glass",
      "placement": "on kitchen counter"
    }
  ],
  "camera": {
    "angle": "eye-level",
    "framing": "three-quarter body shot",
    "orientation": "portrait"
  },
  "activity": "posing with fitness supplement in a home setting",
  "mood": "energetic, playful, aspirational",
  "image_style": "fitness lifestyle photography",
  "color_palette": [
    "black",
    "white",
    "neutral kitchen tones",
    "orange accent"
  ]
}
```

## Asymmetric Grid Editorial Portrait with Detail Shots

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
LAYOUT: 1+2 asymmetric grid **Hero Image:** Photorealistic portrait of an Eurasian woman with shoulder-length black wavy hair, wearing round brown sunglasses and a cream-colored faux fur coat over a black cashmere turtleneck, blurred urban street background, warm earth tones, cinematic split lighting, 8k, highly detailed texture --ar 9:16 **Detail 1:** Macro shot of the faux fur texture, soft golden light, extreme detail --ar 1:1 **Detail 2:** Close-up of the round sunglasses reflecting the blurred city lights, shallow depth of field --ar 1:1. A stylish handwritten signature {argument name="signature name" default="Willy"} is elegantly and small letters placed at the Bottom Right corner.
```

## New Chinese Style Portrait with Image Consistency Requirement

> Sinematik, minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Ensure the person in the image maintains the facial features of the photo 

Subject:
Young East Asian woman, close-up portrait.
Expression: Gently smiling, face directly towards the camera
Features: Delicate and translucent skin texture, natural and clear makeup.

Hair, Makeup & Accessories:
Hair: Black hair combed back and pinned up.
Hair accessories: Hair is carefully decorated with traditional Chinese paper-cut artwork in {argument name="hair accessory color" default="red"}, with simple and elegant patterns.
Jewelry: Wearing a single strand pearl necklace, with small gold stud earrings on the earlobes.

Attire:
{argument name="attire style" default="Red silk Qipao"} (Qipao), with traditional mandarin collar and frog button details.

Lighting:
Warm side light (Golden Hour), light source entering from the left side of the frame.
Light casts soft, warm shadows on the face and neck, creating a sense of dimension and luminescence.
High contrast, warm, festive, and intimate atmosphere.

Composition & Environment:
Vertical orientation.
Foreground: The left side of the frame is surrounded by a defocused (Bokeh) frame of thicker red paper-cut art (floral branch pattern), adding depth.
Background: Deep red, pure, and blurred background. Also includes some light and shadow effects.
Shallow depth of field, focus sharply concentrated on the person's face and eyes.

Style & Medium:
High-quality commercial portrait photography, cinematic lighting effects.
New Chinese Style aesthetic, festive atmosphere (Chinese New Year).
8k resolution, ultra-high definition details.
```

## High-Fashion Winter Editorial on Ice Block

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
High-fashion winter editorial portrait of a young woman sitting on a sculpted block of ice in a vast snowy alpine landscape. She is wearing a {argument name="jacket color" default="black"} oversized puffer jacket, white wide-leg snow pants, white luxury winter boots with red laces, and a plush white fur hat covering her ears. Her pose is relaxed yet powerful, legs apart, with one gloved hand resting gently against her cheek. The environment features dramatic snow-covered alpine mountains in the distance, smooth rolling snowdrifts in the foreground, and an overcast sky providing soft, diffused natural light. Cool blue and white color palette, ultra-clean minimal composition, cinematic mood, premium luxury fashion editorial aesthetic, sharp focus, realistic fabric and ice textures, editorial photography style, 85mm lens look, shallow depth of field, ultra-high resolution, photorealistic.",
"style": "fashion editorial photography",
"lighting": "soft diffused natural light, overcast winter sky",
"camera": {
"lens": "85mm",
"depth_of_field": "shallow",
"focus": "sharp subject focus"
},
"color_palette": [
"cool blue",
"white",
"soft gray",
"deep black"
],
"quality": "ultra-high resolution",
"realism": "photorealistic",
"composition": "minimal, centered subject, cinematic framing.
```

## High-End Commercial Portrait with New Chinese Aesthetic

> Fotogerçekçi, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
1. Macro Style and Medium
- Core Medium: High-end Commercial Photography
- Aesthetic School: New Chinese Style, Festive Fashion Editorial

2. Subject and IP Identity
- Core Subject: Close-up profile of a young East Asian woman
- IP/Celebrity Lock: Wearing a {argument name="clothing color" default="red"} Cheongsam, adorned with a pearl necklace and red floral earrings

3. World Logic and Physics
- Physical Laws: Real optical projection, facial light and shadow conforming to facial contours
- Spatial Composition: Eye-level perspective, extremely close proximity

4. Data and Information Layer
- Text Extraction: No text
- Brand and Symbols: {argument name="foreground element" default="Red paper-cut art foreground"} - including crane, butterfly, and peony patterns

5. Material and Texture
- Core Materials: Hyper-realistic skin texture, matte cardstock, warm pearls
- Tactile Details: Visible vellus hair backlit, subsurface scattering effect

6. Light and Atmosphere
- Lighting Model: Gobo projection lighting (Projected shadows) - complex cutout patterns of light and shadow cast onto the person's face
- Overall Atmosphere: Warm golden hour side backlight, high-saturation festive red tones, dreamy yet clear

7. Technical Parameters
- Lens and Rendering: 85mm-100mm Macro lens, shallow depth of field, foreground bokeh
- Composition Instruction: Framed composition, --ar 3:4
```

## High-Angle Fashion Editorial on Skyscraper Rooftop Ledge

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "aspect_ratio": "4:5",
    "quality": "ultra_photorealistic",
    "resolution": "8k",
    "camera": "DSLR camera",
    "lens": "24mm wide-angle",
    "style": "high-end editorial fashion photography, cinematic urban realism, natural daylight"
  },
  "scene": {
    "location": "skyscraper rooftop ledge",
    "environment": [
      "concrete building ledge with expansion joints",
      "glass facade of adjacent skyscraper reflecting city",
      "dizzying vertical drop to city street below",
      "traffic and cars visible on multi-lane road",
      "dense urban landscape with various buildings",
      "clear daylight sky"
    ],
    "time": "day",
    "atmosphere": "daring, stylish, vertiginous, high-altitude urban energy"
  },
  "lighting": {
    "type": "natural daylight",
    "key_light": "bright sun from upper left",
    "fill_light": "ambient light reflecting off buildings",
    "contrast": "high contrast between bright ledge and deep shadows of the street below",
    "effect": "sharp shadows, realistic highlights on leather and wool textures"
  },
  "camera_perspective": {
    "pov": "high-angle shot, looking down",
    "angle": "steep downward tilt",
    "framing": "full body of subject on ledge, expansive view of street below",
    "distance": "medium distance",
    "focus": "sharp focus on subject, deep depth of field showing city details"
  },
  "subject": {
    "gender": "female",
    "age": "late 20s / early 30s",
    "ethnicity": "mixed race / Black",
    "body": {
      "pose": "lying on back on narrow concrete ledge, head tilted back, one leg straight, one slightly bent",
      "posture": "relaxed yet controlled, confident",
      "expression": "calm, confident gaze upwards, protected by sunglasses"
    },
    "hair": {
      "color": "dark brown / black",
      "style": "voluminous curly high bun (pineapple updo)",
      "texture": "natural curls"
    },
    "face": {
      "accessories": {
        "sunglasses": "oversized tortoiseshell cat-eye sunglasses",
        "earrings": "small gold hoop earrings"
      }
    },
    "outfit": {
      "coat": {
        "type": "long oversized wool coat",
        "color": "{argument name="coat color" default="brown / taupe"}",
        "texture": "heavy wool fabric, realistic folds and drape"
      },
      "dress": {
        "type": "strapless midi dress",
        "color": "beige / nude",
        "material": "soft leather or faux leather",
        "fit": "fitted",
        "details": "visible seam lines, slight creases"
      },
      "gloves": {
        "type": "short leather gloves",
        "color": "black",
        "material": "smooth leather"
      },
      "boots": {
        "type": "heeled ankle boots",
        "color": "black",
        "material": "leather",
        "style": "pointed toe"
      },
      "bag": {
        "type": "quilted leather shoulder bag with chain strap (Chanel style)",
        "color": "black",
        "placement": "resting "
      }
    }
  }
}
```

## Rustic Luxury Fashion Shot with YSL Handbag

> Fotogerçekçi, sinematik logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_generation_prompt": {
    "subject": {
      "description": "Elegant young woman sitting relaxed in a wicker chair",
      "hair": "Long wavy honey blonde hair with highlights",
      "attire": "Black halter-neck bodysuit with keyhole cutout, floor-length flowing {argument name="skirt color" default="white"} satin skirt, black strappy high heels",
      "accessories": "Gold hoop earrings, rings"
    },
    "props": {
      "main_item": "Black quilted Saint Laurent (YSL) handbag with gold logo placed on the stone floor"
    },
    "environment": {
      "setting": "Rustic Mediterranean stone courtyard",
      "background": "Textured stone wall, wooden beam, potted lush green plants with purple flowers",
      "flooring": "Natural stone pavement"
    },
    "lighting": {
      "type": "Golden hour, warm natural sunlight",
      "shadows": "Soft sun-drenched shadows"
    },
    "technical_specs": {
      "resolution": "Ultra-high resolution, 12K image",
      "quality_tags": "Highly detailed, realistic, photorealistic, sharp focus, 8k textures",
      "file_type": "PNG format",
      "camera_style": "Editorial fashion photography, cinematic composition, depth of field"
    }
  }
}
```

## Sadie Sink Macro-Portrait in Snow JSON Prompt

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_manifest": {
    "version": "4.0_Atomic",
    "global_config": {
      "aspect_ratio": "3:4",
      "compositional_style": "Macro-Portrait / Editorial",
      "output_fidelity": "Unprocessed RAW Photography"
    },
    "data_modules": {
      "subject_biometrics": {
        "identity_reference": "Sadie Sink ",
        "fidelity_rules": [
          "Preserve 1:1 facial geometry",
          "Maintain natural body mass index",
          "Strict identity consistency"
        ],
        "surface_anatomy": {
          "texture": "Non-idealized skin grain",
          "details": ["Pores", "Micro-veins", "Natural skin variations"],
          "post_processing": "Zero-smoothing / Zero-filter"
        },
        "kinesics": {
          "expression": "Genuine peak-joy smile",
          "eye_contact": "Direct to lens",
          "pose": "Recumbent snow-angel spread"
        }
      },
      "apparel_stack": {
        "base_layer": {
          "item": "Ribbed knit jumpsuit",
          "color": "Bright Red ",
          "physics": "Elastic tension following body contours"
        },
        "outer_shell": {
          "item": "Open Bright Red  fur coat",
          "features": ["Voluminous collar", "Fur cuffs"],
          "state": "Lightly dusted with snow"
        },
        "accessories": {
          "neck": "Fringed light scarf (spread on snow surface)",
          "lower_leg": "White scrunched knitted warmers",
          "feet": "Textured brown fur Ugg-style boots"
        }
      },
      "physics_engine": {
        "environment": "Deep, high-density fresh powder snow",
        "lighting_model": {
          "source": "Natural outdoor overcast/winter sun",
          "properties": ["Soft shadows", "High dynamic range", "Authentic cold-tone"]
        },
        "material_rendering": {
          "fabrics": "Defined weave patterns",
          "hair_fur": "Individual strand separation",
          "snow": "Crystalline structure with subsurface scattering"
        }
      },
      "optical_constraints": {
        "camera": {
          "focal_length": "85mm Prime",
          "aperture": "f/1.8 (Shallow Depth of Field)",
          "focus": "Pin-sharp on subject's irises"
        },
        "framing": {
          "type": "Close-up",
          "view": "Full-face visibility",
          "perspective": "Direct overhead look-down"
        }
      }
    },
    "exclusion_array": {
      "forbidden_styles": ["CGI", "Airbrushed", "Digital Painting", "Stylized Anime", "Exaggerated Beauty"],
      "forbidden_artifacts": ["Plastic skin", "Anatomical distortion", "Fabric blurring"]
    }
  }
}
```

## Fitness Product Showcase Card Grid Prompt

> Minimal, lüks portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Fitness product showcase, SNS feed, 4:5 ratio, 
LAYOUT: Card-based design, uniform cards (3x2 grid) with image and text.
CARD STRUCTURE:
- TOP (70%): Model image, fitness product in use.
- BOTTOM (30%): Product name, brief description, call to action button ("Shop Now").
PRODUCT & MODEL:
- Eastern European woman, early 20s, fit and toned, displaying a range of fitness products across 6 cards.
- Each card showcases a different product: resistance bands, yoga mat, protein shaker, wireless headphones, smart watch, athletic shoes.
- Model poses: dynamic, engaging, reflecting different workout activities.
BACKGROUND:
- Each card features a minimalist background, showcasing the product: clean studio, blurred gym setting, natural outdoor environment.
COLOR PALETTE:
- Dominant: #F8F8F8 (off-white), #20262E (dark teal)
- Accent: #74C69D (light cyan), #B0DAFF (light blue)

COMPOSITION & TONE:
- Consistent product focus across all cards.
- Dynamic angles, emphasizing the fitness lifestyle.
- Modern, bold, athletic glamour.

CAMERA: Canon EOS R5, 35mm f/1.4, shallow depth of field, soft studio lighting, beauty retouching.

STYLE: Fitness glamour, athletic sensuality, empowering confidence, viral-worthy allure. Each card has a stylish handwritten signature "Willy" elegantly placed in small letters at the bottom right corner.

Keywords: card grid, fitness product, athletic wear, athletic glamour, tonal color palette, portrait photography.. A stylish handwritten signature Willy is elegantly and small letters placed at the Bottom Right corner
```

## Paparazzi Flash Photography Portrait with Masquerade Mask

> Fotogerçekçi mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_structure": {
    "subject_description": {
      "demographics": "Young woman, approximately early 20s, Caucasian.",
      "hair": "Long, voluminous dark brown hair, loose blowout style with a deep side part, cascading over the left shoulder.",
      "face": "Symmetrical features, soft glamour makeup, defined eyebrows, mascara, rosy cheeks, glossy nude-pink lips, calm and confident expression.",
      "pose": "Standing three-quarter view, leaning slightly against a stone railing, right hand raised holding a mask near the face, left arm relaxed by her side."
    },
    "attire_and_accessories": {
      "outfit": "Form-fitting {argument name="dress material" default="silver sequin"} midi dress, spaghetti straps, glittering texture reflecting light.",
      "accessories": [
        "Holding a silver and black filigree Venetian masquerade mask in right hand.",
        "Thin silver diamond tennis necklace.",
        "Thin silver bangle bracelet on left wrist."
      ]
    },
    "environment_and_atmosphere": {
      "setting": "Outdoor balcony or terrace at night, stone railing visible in foreground.",
      "background": "Dark night sky, vague architectural silhouettes in the distance, low-light urban ambience.",
      "lighting": "Direct camera flash photography, hard lighting on the subject, strong contrast with the dark background, realistic shadow cast behind the subject."
    },
    "technical_specifications": {
      "image_quality": "4k, 8k, UHD, photorealistic, hyper-detailed, raw photo.",
      "camera_style": "Shot on 35mm film, Fujifilm styling, paparazzi aesthetic, flash photography.",
      "focus": "Sharp focus on the face and eyes, slight depth of field blurring the dark background.",
      "texture": "High fidelity textures on the sequins, skin pores visible, realistic hair strands."
    }
  }
}
```

## Surreal Skincare Before/After Editorial with Miniature Figures

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Before and after comparison, side-by-side split layout, surreal editorial fashion.

LAYOUT: Side-by-side split (50/50) showcasing skincare transformation.

LEFT PANEL (Before): Extreme close-up of a woman's face, light warm beige skin tone, natural pores visible, slight imperfections, relaxed gaze. Muted rose lips, soft brown hair framing the face. Miniature figures in white lab coats with pink gloves are "working" on her skin: one figure with a magnifying glass inspecting pores, another with a small brush applying product.

RIGHT PANEL (After): Same woman, same pose, skin now flawlessly smooth, radiant with a healthy glow. Imperfections vanished, makeup perfectly applied by the miniature figures, who now pose proudly with miniature awards. Eyes are more captivating, lips glossier.

COLOR PALETTE:

*   Skin Tones: Light warm beige, enhanced luminosity in "After" panel.
*   Accents: Soft pink gloves, light blue surgical masks (both panels), miniature gold awards in the "After" panel.
*   Background: Neutral beige, slightly brighter in the "After" panel.

STYLE: High-fashion beauty editorial with conceptual surrealism, before-and-after skincare transformation, ultra-realistic, photorealistic, cinematic lighting, 8K resolution, hyper-detailed texture, sharp focus, sensual and seductive.

Keywords: skincare editorial, before and after, surreal beauty, miniature figures, flawless skin, radiant glow, light warm beige, soft pink, comparison layout.. A stylish handwritten signature {argument name="signature name" default="Willy"} is elegantly and small letters placed at the Bottom Right corner
```

## Animal Texture Product Marketing Shot Generator

> Fotogerçekçi, minimal logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A high-quality studio photograph of a {argument name="brand name" default="[BRAND]"} fully covered in ultra-realistic {argument name="animal texture" default="[ANIMAL]"} texture (e.g., fur, feathers, skin, or scales), placed against a soft neutral background. The object’s original shape, key design elements, and brand identity remain clearly visible beneath the animal’s organic surface. Integrate the official logo of the brand prominently into the composition. Automatically generate a compelling and brand-appropriate slogan that draws symbolic inspiration from the animal’s qualities and matches the tone of a premium advertising campaign. The image must feature clean composition, soft shadows, minimalist styling, professional lighting, and highly detailed textures—each hair, scale, or wrinkle should be visible in sharp detail. Format 1:1.
```

## Luxury 3D Chocolate Diorama Advertisement

> Lüks, stüdyo ışıklı yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Exquisite chocolatier presenting a luxurious 3D miniature chocolate diorama display, wearing a velvet gown and gemstone jewelry. Her radiant smile catches studio lighting as she unveils a vertical chocolate visualization featuring seven miniature scenes - cocoa bean plantations under sunny skies, chocolate waterfalls, decadent truffle assortments, chocolate sculpting studios, and molten lava cake explosions. Each diorama level displays cocoa percentage readings in elegant typography, tasting notes designed like delicate jewelry pieces, and origin indicators. The backdrop features ambient LED lighting creating a gourmet, high-tech studio atmosphere. Shot with Canon EOS R5, 85mm f/1.2, shallow depth of field creating creamy bokeh. The composition includes chocolate pairing suggestions floating as holographic elements - {argument name="pairing 1" default="red wine for dark chocolate"}, {argument name="pairing 2" default="hazelnut liqueur for milk chocolate"}. Color palette transitions from warm golden browns for caramel scenes to rich dark hues for dark chocolate. The entire setup resembles a luxury food tech display, perfect for social media sharing, combining culinary precision with sensual sophistication and cutting-edge aesthetic appeal. Color palette: (Section 10) - Warm golden browns (#A67B5B, #8B5A2B, #654321) to rich dark hues (#3D2B1F, #2A1A0A, #100804). Style keywords: gourmet advertising, chocolate photography, food tech display, sensual dessert, culinary artistry.. A stylish handwritten signature {argument name="signature name" default="Willy"} is elegantly and small letters placed at the Bottom Right corner
```

## Paparazzi Aesthetic Night Portrait with Flash

> Fotogerçekçi mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
"subject_description": {
      "demographics": "Young woman, approximately early 20s, Caucasian.",
      "hair": "Long, voluminous dark brown hair, loose blowout style with a deep side part, cascading over the left shoulder.",
      "face": "Symmetrical features, soft glamour makeup, defined eyebrows, mascara, rosy cheeks, glossy nude-pink lips, calm and confident expression.",
      "pose": "Standing three-quarter view, leaning slightly against a stone railing, right hand raised holding a {argument name=\"mask type\" default=\"Venetian masquerade mask\"} near the face, left arm relaxed by her side."
    },
    "attire_and_accessories": {
      "outfit": "Form-fitting {argument name=\"dress color\" default=\"silver\"} sequin midi dress, spaghetti straps, glittering texture reflecting light.",
      "accessories": [
        "Holding a silver and black filigree Venetian masquerade mask in right hand.",
        "Thin silver diamond tennis necklace.",
        "Thin silver bangle bracelet on left wrist."
      ]
    },
    "environment_and_atmosphere": {
      "setting": "Outdoor balcony or terrace at night, stone railing visible in foreground.",
      "background": "Dark night sky, vague architectural silhouettes in the distance, low-light urban ambience.",
      "lighting": "Direct camera flash photography, hard lighting on the subject, strong contrast with the dark background, realistic shadow cast behind the subject."
    },
    "technical_specifications": {
      "image_quality": "4k, 8k, UHD, photorealistic, hyper-detailed, raw photo.",
      "camera_style": "Shot on 35mm film, Fujifilm styling, paparazzi aesthetic, flash photography.",
      "focus": "Sharp focus on the face and eyes, slight depth of field blurring the dark background.",
      "texture": "High fidelity textures on the sequins, skin pores visible, realistic hair strands."
    }
  }
```

## Avant-garde Conceptual Photography: Bio-Digital Kintsugi Portrait

> Lüks mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"technical_parameters": {
"aspect_ratio": "4:5",
"camera": "Phase One XF, 80mm prime lens, ultra-sharp detail, analog film grain.",
"style": "Avant-garde conceptual photography. High-end editorial, NO kitsch."
},
"artistic_vision": {
"concept": "The Stillness of the Void. A sovereign woman becoming one with bio-digital architecture.",
"palette": "Midnight indigo, slate grey, oxidised silver, and deep charcoal. The ONLY warmth is the 24k gold leaf.",
"mood": "Silent, monumental, intensely meaningful. A soul-portrait of survival."
},
"the_subject": {
"presence": "An exceptionally beautiful woman (early 30s) with sharp, aristocratic features. No generic model face.",
"pose": "PROFILE SHOT. She is looking away, chin slightly raised, gaze fixed on the infinite. This eliminates the 'staring at camera' effect.",
"kintsugi": "Physical, jagged fissures in the skin filled with real, crusty gold leaf. It looks like a repaired ancient statue coming to life."
},
"the_integrated_architecture": {
"iris_van_herpen_lattice": "Complex 3D bio-digital mesh in translucent indigo and slate. It flows around her body like frozen dark energy.",
"mechanical_baroque": "Subtle, dark-silver filigree. Fine mechanical lace that follows the curve of the jaw and spine. Zero steampunk gears—only high-jewelry baroque elegance."
},
"lighting_chiaroscuro": {
"execution": "Extreme contrast. Hard light from a single side. The gold cracks do NOT glow like lamps; they only catch the external light with a rich, metallic shimmer."
},
"negative_prompt": "smiling, bald, looking at camera, neon glow, plastic textures, steampunk gears, cheap fantasy, purple bucket-fill, blurry, generic, cow-like stare."
}
```

## Modern Luxury Lifestyle Portrait of a Man in a Garden

> Lüks portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Concept & Mood
Modern luxury lifestyle portrait with calm masculine confidence. The atmosphere feels refined, relaxed, and affluent, capturing a peaceful moment of leisure in a private villa garden. The mood is composed, confident, and aspirational — elegant without being flashy.
Subject
Adult man (late 20s to mid-30s) with a well-groomed masculine appearance. He has thick, styled {argument name="hair color" default="dark brown"} hair swept back with natural volume, and a neatly trimmed {argument name="beard type" default="full beard"}.
```

## Dynamic Hyper-Realistic Biryani Hero Shot (JSON)

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "food_photography_series": {
    "subject":  (biryani)",
    "technical_specs": {
      "style": "Hyper-realistic hero shot",
      "aspect_ratio": "3:4",
      "lighting": "Cinematic / Studio"
    },
    "variations": [
      {
        "theme": "Spicy chicken biryani",
        "sauce": "Spicy green chili and curd  ",
        "accents": ["chili threads", "Sichuan pepper flakes"],
        "background": "Dark smoky red",
        "prompt": "Hyper-realistic hero shot of spicy fusion chicken leg peice hovering mid-air, with biryani rice erupting in dynamic splashes around firm chicken peice  dry fruits and greens are enveloped in fiery motion, accented by chili threads and Sichuan pepper flakes. Dramatic high-contrast lighting and a dark smoky red background create a bold, modern, high-impact biryani commercial visual"
      }
    ]
  }
}
```

## Tropical Beach Editorial Portrait in Floral Bikini

> Minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene_overview": {
    "setting": "Tropical beach during daytime",
    "environment": "White sandy shoreline with turquoise ocean water and gentle waves",
    "background_elements": [
      "Clear blue sky with no visible clouds",
      "Two small rocky islands visible on the horizon",
      "Several beachgoers walking and swimming in the distance"
    ],
    "atmosphere": "Relaxed, summery, vacation-like, serene"
  },
  "primary_subject": {
    "type": "Human",
    "gender_presentation": "Female",
    "age_range": "Young adult",
    "pose": "Seated on the sand with legs bent to the side, one hand resting behind for support, the other touching the neck",
    "expression": "Calm, neutral, slightly contemplative",
    "gaze_direction": "Looking slightly off-camera toward the horizon"
  },
  "appearance_details": {
    "skin_tone": "Light, sun-kissed",
    "body_type": "Slim, athletic, toned",
    "hair": {
      "color": "Blonde",
      "length": "Long",
      "style": "Loose, natural, slightly windswept",
      "accessory": "White tropical flower tucked behind one ear"
    },
    "facial_features": {
      "makeup": "Minimal or natural",
      "expression_details": "Relaxed facial muscles, soft eyes"
    }
  },
  "clothing_and_accessories": {
    "outfit": {
      "type": "Bikini",
      "style": "Triangle top with tie-side bottoms",
      "pattern": "{argument name="bikini pattern" default="Floral"}",
      "colors": ["Blue", "Yellow", "White"],
      "material_appearance": "Smooth, lightweight swim fabric"
    },
    "jewelry": "None visible",
    "footwear": "Barefoot"
  },
  "lighting_and_color": {
    "lighting_type": "Natural sunlight",
    "light_direction": "Overhead and slightly angled, casting soft shadows",
    "color_palette": [
      "Bright blue",
      "Turquoise",
      "White",
      "Warm sand beige",
      "Yellow accents"
    ],
    "contrast": "High clarity with vibrant, saturated colors"
  },
  "camera_and_composition": {
    "camera_angle": "Slightly low to eye-level",
    "framing": "Medium-full body shot",
    "depth_of_field": "Moderate; subject in sharp focus, background slightly softened",
    "orientation": "Vertical",
    "composition_style": "Rule of thirds with subject placed prominently in the foreground"
  },
  "mood_and_aesthetic": {
    "mood": "Peaceful, confident, carefree",
    "aesthetic_style": "Travel photography, lifestyle, tropical editorial",
    "emotion_evoked": "Freedom, relaxation, summer joy"
  },
  "image_quality": {
    "sharpness": "High",
    "resolution_appearance": "Clear and detailed",
    "noise": "Minimal to none",
    "overall_quality": "Professional, social-media-ready"
  },
  "usage_prompt_tags": [
    "tropical beach",
    "summer lifestyle",
    "natural light photography",
    "floral bikini",
    "travel aesthetic",
    "relaxed pose",
    "coastal scenery"
  ]
}
```

## Stylish Man on European Cobblestone Street Prompt

> Sinematik, minimal mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A stylish handsome man sitting on a vintage bench on a European cobblestone street during evening, wearing a brown tailored coat over a navy blue high-neck sweater, brown trousers, and clean white sneakers. Warm street lamps glowing, soft bokeh lights in the background, people walking casually behind him, elegant old European architecture, shallow depth of field, cinematic lighting, realistic photography, sharp focus on subject, aesthetic urban mood, 35mm lens, ultra-detailed, natural skin tones.
```

## Luxury Mediterranean Balcony Lifestyle Photo

> Fotogerçekçi, lüks mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_generation_prompt",
  "output_settings": {
    "resolution": "8K resolution",
    "quality": "ultra-high resolution",
    "detail_level": "highly detailed, realistic",
    "format": "PNG format (if supported)"
  },
  "style": "photorealistic luxury lifestyle photography",
  "subject": {
    "gender": "female",
    "age_range": "mid-20s to early-30s",
    "pose": "standing relaxed, weight on one leg",
    "expression": "soft natural smile",
    "gaze": "looking toward camera",
    "hair": {
      "color": "warm blonde",
      "length": "long",
      "style": "loose waves, center-parted"
    },
    "skin_tone": "light to lightly tanned, even complexion",
    "clothing": {
      "dress": {
        "color": "ivory / off-white",
        "type": "form-fitting midi dress",
        "details": [
          "structured bodice",
          "wide straps",
          "corset-inspired seams",
          "thigh-high slit on one side"
        ]
      },
      "shoes": {
        "type": "high-heeled sandals",
        "color": "bright {argument name="shoe color" default="orange"}",
        "heel": "stiletto"
      },
      "accessories": [
        "champagne flute with rosé wine"
      ]
    }
  },
  "environment": {
    "location_type": "luxury terrace or balcony",
    "setting": "coastal Mediterranean city",
    "background_elements": [
      "marina filled with yachts",
      "turquoise-blue sea",
      "hillside city with pastel buildings",
      "green mountains in the distance"
    ],
    "foreground_elements": [
      "modern beige outdoor sofa",
      "glass balcony railing",
      "wooden deck flooring"
    ]
  },
  "lighting": {
    "type": "natural daylight",
    "time_of-day": "late morning or early afternoon",
    "quality": "bright, soft, evenly diffused",
    "shadows": "minimal, natural"
  },
  "camera": {
    "shot_type": "full-body portrait",
    "angle": "eye-level",
    "lens": "35mm–50mm equivalent",
    "depth_of_field": "moderate, subject sharp with softly detailed background",
    "capture_quality": [
      "8K resolution",
      "ultra-high resolution",
      "high dynamic range"
    ]
  },
  "color_palette": {
    "primary_colors": [
      "ivory white",
      "soft beige",
      "Mediterranean blue"
    ],
    "accent_colors": [
      "coral orange",
      "rosé pink",
      "terracotta rooftops"
    ]
  },
  "mood": [
    "elegant",
    "luxurious",
    "relaxed",
    "vacation lifestyle"
  ],
  "quality_tags": [
    "8K resolution",
    "ultra-high resolution",
    "highly detailed",
    "ultra realistic",
    "sharp focus",
    "professional photography",
    "editorial fashion style"
  ],
  "negative_prompt": [
    "cartoon",
    "illustration",
    "anime",
    "low resolution",
    "pixelated",
    "blurry",
    "overexposed",
    "distorted anatomy",
    "extra limbs",
    "unnatural skin texture",
    "harsh shadows"
  ]
}
```

## Luxury Boat Alpine Lake Editorial Photo Prompt

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a hyper-realistic editorial photo using my uploaded image for the man's face, hair, and appearance. An elegant man relaxing on a luxury wooden boat on a calm alpine lake, surrounded by mountains, European lakeside villages, and lush greenery. Golden afternoon sunlight, warm tones reflecting on crystal-clear blue water. He wears a light beige suit with an open shirt (no tie), dark sunglasses, and a luxury watch, confident and sophisticated. High-fashion magazine style, natural lighting, cinematic realism, premium photography quality.
```

## Realistic Macro Photograph of an Ear with Earring

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A realistic macro photograph of a woman’s ear wearing a circular metallic earring. Captured with a 90 mm macro lens at f/4, 1:2 magnification, in soft diffused daylight from a nearby window. The earring’s reflective surface shows natural specular highlights and faint fingerprints. Skin texture, fine pores, and peach fuzz are visible on the earlobe, with shallow depth of field causing smooth bokeh in background hair. Lighting from top-left creates natural highlight rolloff, with subtle shadow under the ring and neutral daylight color balance around 5400 K.
```

## Streetwear Photography in Urban Alleyway

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A full-body shot of a stylish young Asian man standing in a colorful urban alleyway. He is wearing an oversized {argument name="hoodie color" default="lavender"} zip-up hoodie over a light grey t-shirt, paired with bright mustard yellow cargo jogger pants and clean white sneakers. He has wavy black hair, wearing dark round sunglasses, and posing with hands in his pockets. The background features vibrant multi-colored walls in shades of orange, blue, and yellow. High-resolution streetwear photography, cinematic lighting, 8k, sharp focus
```

## Candid Parisian Café Portrait with Silver Hair

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A candid lifestyle portrait of a young woman with short {argument name="hair color" default="silver-gray"} hair sitting at a classic Parisian café by a large window. She is wearing a soft {argument name="blouse color" default="cream"} blouse with a delicate bow-tie neckline and high-waisted beige trousers, with a light trench coat draped casually over the back of her chair. She holds a white ceramic coffee cup with both hands, gazing thoughtfully out the window with a calm, elegant expression.
The setting features a cobblestone Paris street outside, Haussmann-style buildings with wrought-iron balconies, and subtle city details softly blurred in the background. Natural daylight streams through the window, creating gentle highlights and soft shadows on her face. Warm neutral color palette, minimalist composition, cozy European café atmosphere, shallow depth of field, realistic skin tones and fabric textures, cinematic lifestyle photography, editorial aesthetic, 50mm lens look, ultra-high resolution, photorealistic.
```

## Black and White Male Editorial Portrait Collage JSON Prompt

> Minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"image_type": "studio portrait collage",
"layout": {
"structure": "3x3 grid",
"aspect ratio": "2:3",
"orientation": "vertical",
"spacing": "even margins between frames",
"consistency": "same subject and styling across all frames"
},
"subject": {
"count": 1,
"gender_presentation": "male",
"age_range": "late 20s to early 30s",
"ethnicity": "unclear / ambiguous",
"build": "athletic, lean",
"hair": {
"color": "dark brown",
"style": "short sides with voluminous swept-back top",
"texture": "smooth with natural wave"
},
"facial_hair": {
"type": "light stubble",
"density": "low to medium"
},
"wardrobe": {
"top": "long-sleeve knit sweater",
"color": "black",
"fit": "slim fit",
"texture": "fine ribbed or waffle knit"
}
},
"expressions_and_poses": [
"smirking with hand on chin",
"pulling sweater collar to mouth",
"thoughtful side gaze with hand near lips",
"animated mid-gesture with expressive hands",
"boxing/fist-forward dynamic pose",
"finger-to-lips 'shh' gesture",
"direct gaze with pointing finger",
"mock pain or exaggerated discomfort expression",
"head resting on hand, fatigued or bored"
],
"composition": {
"framing": "medium close-up to medium shot",
"camera_angle": "eye-level",
"cropping": "consistent head-and-torso framing",
"negative_space": "minimal, subject-centered"
},
"lighting": {
"style": "studio",
"setup": "single key light with soft fill",
"direction": "front-left dominant",
"contrast": "medium to high",
"shadow_quality": "soft-edged shadows with sculpted facial definition"
},
"color_and_tone": {
"palette": "monochrome",
"treatment": "black and white",
"contrast": "high contrast",
"midtones": "well-preserved skin detail",
"highlights": "controlled, non-blown"
},
"background": {
"type": "seamless studio backdrop",
"color": "dark gray to near-black",
"texture": "smooth, matte",
"distractions": "none"
},
"technical_details": {
"lens_equivalent": "50mm–85mm portrait range",
"depth_of_field": "moderate, subject fully in focus",
"sharpness": "high",
"grain": "minimal to none",
"resolution": "high-resolution editorial quality"
},
"artistic_style": {
"genre": "fashion/editorial portraiture",
"mood": "confident, playful, expressive",
"influences": "modern menswear editorial, actor portfolio photography",
"storytelling": "personality exploration through varied expressions"
},
"post_processing": {
"skin_retouching": "natural, minimal",
"contrast_curve": "strong S-curve",
"clarity": "moderate",
"vignette": "subtle or none"
},
"typography": {
"present": false
},
"overall_aesthetic": "clean, masculine, contemporary studio portrait series optimized for branding, modeling, or editorial use"
}
```

## Cinematic Portrait in Rainy Paris

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A hyper-realistic, cinematic full-body portrait of a person, 100% using the uploaded reference image for face, identity, and facial features (do not alter facial structure or expression). Captured with an 85mm lens at f/2.0 for shallow depth of field. The scene takes place on a moody, overcast day in Paris. The subject stands casually, leaning against a massive vertical riveted grey steel industrial column positioned on the right side of the frame. Hands tucked into pockets, one leg crossed over the other in a relaxed, confident stance. The subject wears a sophisticated monochromatic all-black outfit: a long structured wool overcoat, fitted black turtleneck, belted black trousers, and sturdy black leather boots. Lighting is soft, diffused, and shadowless, typical of a rainy afternoon, creating a somber, elegant atmosphere. In the background, the Eiffel Tower appears softly in the distance with heavy bokeh and atmospheric mist, partially obscured by a horizontal metal railing and blurred autumn trees. The ground is wet slick asphalt with high-fidelity reflective surfaces, showing subtle reflections of the subject and sky. The steel column displays detailed weathering, rivets, and texture. Desaturated cinematic color palette with muted greys, browns, and deep blacks. Ultra-detailed textures, professional photography realism, 8K resolution, cinematic quality.
```

## Miniature Construction Site Product Ad

> Fotogerçekçi 3B sahne üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A miniature construction crew assembling {argument name="product name" default="[PRODUCT]"} like a skyscraper. Cranes, scaffolding, sparks flying. Playful but hyper-real, brand-campaign ready.
```

## Luxury Korean Skincare Advertisement Prompt

> Lüks görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Luxury Korean skincare advertisement, SNS feed, 4:5 ratio.

LAYOUT: Centered (main product as hero) + Orbital (supporting elements surrounding)
DIRECTION: Radial arrangement - complementary products orbiting the hero product at varying distances

BACKGROUND: Dark marble surface with veining, black lacquer tray, traditional Korean silk fabric accent, subtle silver leaf scattered

PRODUCT:
- Overhead shot
- Sleek glass containers
- Silver applicator

DYNAMIC: Vapor rising from the main product (subtle), silver sparkle accents
TONE: Luxury dark - black/charcoal base with cool silver and traditional white porcelain contrast
STYLE: Luxury + Modern hybrid, traditional Korean beauty

TEXTURE DETAILS:
- Visible marble veins
- Smooth lacquer patina
- Glass reflection variations
- Woven silk texture

TYPOGRAPHY: Brand name in elegant calligraphy style, silver foil effect, Korean + English

CAMERA: Hasselblad X2D, 90mm Macro f/3.5, overhead shot, cool tungsten + soft fill lighting

SIGNATURE: A stylish handwritten signature "{argument name="signature name" default="Willy"}" elegantly placed at bottom right corner (small letters)

Style keywords: Korean beauty, serum arrangement, traditional luxury, heritage skincare.
A stylish handwritten signature Willy is elegantly and small letters placed at the Bottom Right corner.
```

## Jil Sander Aesthetic Fashion Editorial: Man and Horse

> Minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
High angle shot looking down at the male model and brown horse from above, revealing the full scene composition near the Icelandic river. The model stands relaxed in baggy cream trousers, white sweater, and brown leather boots, positioned thoughtfully relative to the horse drinking water. The riverbank, stones, and moss create a natural pattern beneath them. Clean, minimalistic fashion editorial framing with balanced negative space, air-brushed soft rendering, muted contrast, natural skin texture preserved, slightly enhanced green tones in landscape, soft natural overcast light. Hasselblad 85mm overhead perspective, vertical 9:16, Jil Sander serene outdoor aesthetic.
```

## Mediterranean Sunbathing Scene with Red Bikini and NY Cap

> Fotogerçekçi, minimal logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": "Sunny outdoor garden setting with a Mediterranean aesthetic, featuring a woman relaxing on a lounge chair in a calm, sun-drenched environment.",
  "subject": {
    "character": "Young woman with a sun-kissed complexion and a fit, athletic build.",
    "face": {
      "structure": "Oval face with a defined jawline and soft, balanced features.",
      "skin": "Naturally tanned skin with realistic texture visible under direct sunlight.",
      "eyes": {
        "shape": "Almond-shaped",
        "color": "Light brown",
        "expression": "Focused, confident gaze directed toward the camera with a composed, calm expression."
      },
      "mouth": {
        "lips": "Full lips with a natural shape, gently closed in a neutral expression."
      },
      "makeup": "Minimal, natural makeup look with warm-toned eyeshadow, softly groomed eyebrows, and matte nude lipstick."
    },
    "hair": {
      "color": "Light brown with sun-bleached golden blonde highlights.",
      "length": "Long hair reaching mid-back.",
      "texture": "Naturally wavy with visible flyaways and slight frizz from outdoor humidity.",
      "style": "Loose and unstyled, flowing naturally.",
      "visible": "Falling over the left shoulder and cascading down the back."
    },
    "accessories": {
      "hat": {
        "type": "Baseball cap",
        "color": "Cream crown with a navy blue brim.",
        "detail": "Red embroidered '{argument name=\"cap logo\" default=\"NY\"}' logo on the front.",
        "fit": "Standard fit, worn low over the forehead."
      }
    }
  },
  "pose": {
    "overall": "Prone position on a lounge chair, body angled away from the camera while the head is turned back.",
    "position": {
      "base": "Lying on the stomach on a wooden deck lounge chair.",
      "orientation": "Profile view of the body with the head turned three-quarters toward the camera."
    },
    "torso": {
      "direction": "Facing downward and away from the camera.",
      "position": "Slightly supported by the arms, creating a natural arch in the back."
    },
    "hips": {
      "position": "Elevated and subtly angled toward the camera.",
      "emphasis": "Natural emphasis on posture and body lines created by the pose."
    },
    "legs": {
      "position": "Extended straight along the length of the lounge chair.",
      "visible": "Upper thighs and partial lower legs visible before leaving the frame."
    },
    "arms": {
      "position": "Right arm folded beneath the upper torso; left arm extended forward, resting along the chair frame."
    },
    "head": {
      "turn": "Turned clearly over the left shoulder.",
      "expression": "Calm, steady expression with direct eye contact."
    }
  },
  "outfit": {
    "swimwear": {
      "type": "Two-piece string bikini",
      "color": "Vibrant {argument name=\"bikini color\" default=\"red\"}",
      "top": {
        "style": "Triangle bikini top",
        "ties": "Thin straps tied around the neck and back.",
        "coverage": "Tasteful, fashion-forward coverage."
      },
```

## Hyper-Detailed Mediterranean Bikini Portrait (Mismatched Swimwear)

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "type": "photorealistic_image_generation",
    "style": "8k raw photo, hyper-detailed, masterpiece"
  },
  "subject": {
    "appearance": "Fit young woman, natural fair skin, wet hair slicked back.",
    "pose": "Standing on wooden boat edge, arms raised with hands behind head adjusting hair. Looking downward, subtle pout. One leg straight, other bent at knee on gunwale.",
    "focus": "Full body shot, defined abdominal muscles, hourglass figure."
  },
  "attire": {
    "garment": "Mismatched bikini swimwear.",
    "details": "Top: Left cup red/white checkerboard; Right cup pink/white/black abstract geometric. Bottoms: Matching pink/white/black geometric pattern with side ties.",
    "accessories": "Black, thick-rimmed oval sunglasses."
  },
  "environment": {
    "location": "Mediterranean coastal scene, daytime.",
    "background": "Towering textured limestone cliffs, sparse green shrubbery. Deep blue, rippled ocean.",
    "elements": "Distant small white tourist boats anchored near cliff base. Wooden boat railing in foreground."
  },
  "lighting": {
    "source": "Natural daylight.",
    "quality": "Soft, diffused sunlight creating gentle torso shadows; highlights skin texture and water wetness."
  },
  "camera_specs": {
    "gear": "Sony A7R IV, 35mm lens.",
    "settings": "f/2.8 aperture for background bokeh, fast shutter speed.",
    "textures": "High fidelity skin, realistic water droplets, detailed rock formations."
  }
}
```

## 2x2 Lifestyle Fashion Collage (Sadie Sink)

> Minimal yemek görseli üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use my attached reference image for face reference 
{
  "type": "image_set",
  "style": "lifestyle fashion photography, clean and aesthetic",
  "layout": {
    "format": "2x2 grid collage",
    "orientation": "portrait images combined"
  },
  "scene": {
    "setting": "outdoor café walkway",
    "environment": {
      "architecture": "white modern building with pergola",
      "surroundings": "lush green plants and vines",
      "ground": "stone tile flooring",
      "lighting": "natural daylight with soft shadows"
    }
  },
  "subject": {
    "count": 1,
    "appearance": {
      "hair": {
        "color": "blonde",
        "style": "long, loose"
      },
      "expression_range": [
        "relaxed",
        "confident",
        "smiling",
        "neutral"
      ]
    },
    "clothing": {
      "outfit": "{argument name="outfit color" default="Black"}  athletic set",
      "top": "cropped sports bra",
      "bottom": "high-waisted shorts",
      "footwear": "Black  sneakers with Black socks",
      "accessories": [
        "black shoulder bag",
        "minimal jewelry"
      ]
    },
    "activity": {
      "action": "holding and drinking a green beverage",
      "drink": "{argument name="drink type" default="green iced drink in clear cup with straw"}"
    },
    "poses": [
      "standing casually",
      "leaning against planter",
      "smiling while standing",
      "crouching with drink"
    ],
    "composition": {
      "focus": "subject centered in each frame",
      "depth": "clear subject separation from background",
      "balance": "consistent framing across all four images"
    },
    "color_palette": {
      "dominant_colors": ["white", "green", "beige"],
      "accent_colors": ["black", "natural skin tones"]
    },
    "overall_tone": "fresh, healthy, stylish, summer lifestyle"
    }
  }
```

## 2x2 Grid Lifestyle Fashion Collage

> Minimal yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_set",
  "style": "lifestyle fashion photography, clean and aesthetic",
  "layout": {
    "format": "2x2 grid collage",
    "orientation": "portrait images combined"
  },
  "scene": {
    "setting": "outdoor café walkway",
    "environment": {
      "architecture": "white modern building with pergola",
      "surroundings": "lush green plants and vines",
      "ground": "stone tile flooring",
      "lighting": "natural daylight with soft shadows"
    }
  },
  "subject": {
    "count": 1,
    "appearance": {
      "hair": {
        "color": "blonde",
        "style": "long, loose"
      },
      "expression_range": [
        "relaxed",
        "confident",
        "smiling",
        "neutral"
      ]
    },
    "clothing": {
      "outfit": "white athletic set",
      "top": "cropped sports bra",
      "bottom": "high-waisted shorts",
      "footwear": "white sneakers with crew socks",
      "accessories": [
        "black shoulder bag",
        "minimal jewelry"
      ]
    }
  },
  "activity": {
    "action": "holding and drinking a green beverage",
    "drink": "green iced drink in clear cup with straw"
  },
  "poses": [
    "standing casually",
    "leaning against planter",
    "smiling while standing",
    "crouching with drink"
  ],
  "composition": {
    "focus": "subject centered in each frame",
    "depth": "clear subject separation from background",
    "balance": "consistent framing across all four images"
  },
  "color_palette": {
    "dominant_colors": ["white", "green", "beige"],
    "accent_colors": ["black", "natural skin tones"]
  },
  "overall_tone": "fresh, healthy, stylish, summer lifestyle"
}
```

## Explosion Food Poster for Marketing

> Lüks, stüdyo ışıklı afiş üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a high-resolution square (1:1) food poster of ({argument name="your meal" default="YOUR MEAL"}). Capture the dish in a dynamic, explosion-like composition bursting toward the viewer. Present it with realistic, mouthwatering textures and vibrant colors. Place it against a deep black backdrop with dramatic professional studio lighting, rich depth of field, and high contrast. Emphasize the premium, luxurious, and visually impactful feel. Exclude any hands, people, text, logos, or distracting tableware.
```

## Knolling Flatlay of City Landmark Magnets

> Fotogerçekçi, minimal 3B sahne üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"prompt": "Present a clear, directly top-down photograph of {argument name="city name" default="[CITY]"} landmarks represented as detailed 3D fridge magnets, neatly arranged in a grid-like knolling layout. The layout must be clean and organized, with objects aligned in straight lines and right angles. At the top-center, place a city name magnet as the title. Beside it, include a yellow handwritten sticky note displaying {argument name="weather conditions" default="[TODAY'S TEMPERATURE + WEATHER CONDITIONS]"} (for example: \"23°C, Light Rain\"). Scatter realistic, weather-appropriate accessories throughout the scene (such as sunglasses, gloves, an umbrella, or an iced drink) to reflect the local climate. Ensure every object is unique with no duplicates. The scene should be brightly lit, evenly exposed, high-resolution, photorealistic, and styled as a clean flatlay suitable for social media or magazine print.",
"style": "photorealistic flatlay",
"camera": {
"angle": "top-down",
"composition": "grid-based knolling layout"
},
"lighting": {
"type": "bright and even",
"exposure": "well-balanced"
},
"elements": {
"main_objects": "3D fridge magnets of [CITY] landmarks",
"title": "city name magnet at top-center",
"weather_note": "yellow handwritten sticky note with temperature and weather",
"accessories": "weather-appropriate props matching climate"
},
"constraints": {
"no_duplicates": true,
"alignment": "straight lines and right angles",
"resolution": "high"
},
"intended_use": "social media and magazine print"
}
```

## High-Fashion Winter Editorial Portrait in Alpine Setting

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "objective": "Generate a high-fashion winter editorial portrait with a cinematic luxury aesthetic in an alpine environment.",
  "subject": {
    "type": "human",
    "description": "Young woman",
    "pose": {
      "body_position": "Sitting on a sculpted block of ice",
      "legs": "Apart",
      "hand_position": "One gloved hand resting gently against her cheek",
      "expression": "Relaxed yet powerful"
    },
    "wardrobe": {
      "outerwear": "{argument name="outerwear" default="Black oversized puffer jacket"}",
      "pants": "White wide-leg snow pants",
      "footwear": "White luxury winter boots with red laces",
      "accessories": "Plush white fur hat covering ears",
      "gloves": "Winter gloves"
    }
  },
  "environment": {
    "location": "Vast snowy alpine landscape",
    "foreground": "Smooth rolling snowdrifts",
    "background": "Dramatic snow-covered alpine mountains",
    "surface": "Sculpted block of ice",
    "sky": "Overcast winter sky"
  },
  "lighting": {
    "type": "Natural light",
    "quality": "Soft, diffused",
    "source": "Overcast sky"
  },
  "camera": {
    "lens": "85mm",
    "depth_of_field": "Shallow",
    "focus": "Sharp subject focus",
    "style": "Editorial photography look"
  },
  "composition": {
    "layout": "Minimal",
    "subject_position": "Centered",
    "framing": "Cinematic",
    "aesthetic": "Ultra-clean luxury editorial"
  },
  "color_palette": [
    "Cool blue",
    "White",
    "Soft gray",
    "Deep black"
  ],
  "mood": "Cinematic, premium, serene, powerful",
  "style": "High-fashion editorial photography",
  "textures": {
    "fabric": "Realistic fabric detail",
    "ice": "Highly detailed realistic ice texture"
  },
  "quality": {
    "resolution": "Ultra-high resolution",
    "realism": "Photorealistic",
    "detail_level": "Sharp focus, fine texture clarity"
  }
}
```

## Ultra-Realistic Futuristic Studio Photoshoot

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "Ultra-realistic futuristic studio photoshoot of a man (same face and proportions as reference). Minimal cinematic lighting, spotlight subtly centered on him, with smooth falloff and soft shadows. Background is deep dark blue, clean and modern. The man is smiling confidently, natural expression, relaxed posture. He wears futuristic casual clothing layered with a sleek black leather jacket, refined textures, hidden seams, subtle tech-inspired details. High-end photography style, crisp focus on subject, shallow depth of field, premium fashion editorial vibe, sharp details, 4k, professional color grading.",
  
  "negative_prompt": "overexposed, harsh flash, cartoon, low resolution, grainy, distorted face, incorrect anatomy, messy background, busy elements, duplicate person, unrealistic proportions, bad smile, extreme HDR, plastic skin",
  
  "camera": {
    "shot": "mid-shot portrait",
    "lens": "85mm",
    "aperture": "f1.8",
    "lighting": "single key light + soft rim light"
  },
  
  "style": {
    "mood": "confident and warm",
    "look": "fashion editorial, cinematic, clean"
  }
}
```

## 90s Fashion Editorial: Boxing Pose

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "aspect_ratio": "3:4",
    "quality": "ultra_photorealistic",
    "resolution": "8k",
    "camera": "Professional DSLR with wide-angle lens",
    "lens": "16mm fisheye or wide-angle",
    "style": "90s fashion editorial, flash photography, high-energy pop culture aesthetic, crisp studio lighting"
  },

  "scene": {
    "location": "studio photography set",
    "environment": [
      "pure white infinity background",
      "minimalist high-key setting",
      "no distractions"
    ],
    "time": "studio time",
    "atmosphere": "playful, rebellious, cool-girl energy, retro-modern fusion"
  },

  "lighting": {
    "type": "direct studio flash",
    "key_light": "strong frontal flash causing high contrast",
    "fill_light": "neutral bright fill",
    "shadows": "minimal sharp shadows under feet only",
    "effect": "glossy highlights on leather, vibrant color saturation, sharp definition"
  },

  "camera_perspective": {
    "pov": "extreme high angle (bird's-eye view)",
    "angle": "top-down looking directly at subject",
    "framing": "full body distorted by perspective",
    "distortion": "head and gloves appear larger than feet (forced perspective)",
    "focus": "sharp focus on face and gloves"
  },

  "subject": {
    "gender": "female",
    "age": "young adult (approx 20s)",
    "ethnicity": "White / Caucasian",
    
    "hair": {
      "color": "platinum blonde",
      "style": "messy textured waves",
      "details": "visible strands sticking out from under cap, casual unkempt look"
    },

    "face": {
      "expression": "playful, sticking tongue out centrally",
      "eyes": "hidden behind dark sunglasses",
      "eyebrows": "bushy, natural, visible above glasses rim",
      "skin": "natural texture, freckles or light skin grain visible, not plastic",
      "mouth": "tongue fully extended, natural pink color, slightly wet texture"
    },

    "accessories": {
      "eyewear": {
        "type": "rectangular sunglasses",
        "frame": "thick tortoise shell pattern",
        "lenses": "dark black tint"
      },
      "hat": {
        "type": "baseball cap",
        "material": "red corduroy (visible ribbed texture)",
        "text": "white embroidered text '{argument name="hat text" default="Marlboro"}' on front panel"
      }
    },

    "pose": {
      "position": "standing with knees slightly bent or leaning forward",
      "head": "tilted up towards camera lens",
      "hands": "raised near face in boxing guard position",
      "body_shape": "tapered downwards due to lens distortion"
    },

    "outfit": {
      "jacket": {
        "type": "leather shirt-jacket / blazer",
        "color": "deep red",
        "material": "crocodile/alligator embossed leather",
        "finish": "semi-glossy",
        "fit": "boxy, oversized shoulders"
      },
      "gloves": {
        "type": "boxing gloves",
        "color": "{argument name="glove color" default="bright cherry red"}",
        "material": "smooth leather",
        "size": "oversized"
```

## Cinematic HDR Night Photograph on a Rainy Rooftop

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_generation_request": {
    "technical_specifications": {
      "medium": "Photograph",
      "style": "Ultra-realistic, Cinematic HDR",
      "aspect_ratio": "9:16",
      "camera_angle": "Eye-level, Wide angle",
      "framing": "Full-body shot",
      "visual_fidelity": "8k resolution, Sharp focus, Luminous textures, Natural depth of field"
    },
    "subject_attributes": {
      "physique": {
        "height": "Approximately 156–165 cm",
        "body_type": "Graceful hourglass figure",
        "skin": "Soft, smooth, healthy glow"
      },
      "hair": {
        "style": "Long layered hair",
        "movement": "Lightly windswept"
      },
      "makeup": {
        "style": "Soft natural glam",
        "eyes": "Subtle eyeliner, luminous highlight",
        "cheeks": "Warm natural blush",
        "lips": "Glossy rose-nude",
        "complexion": "Fresh and dewy"
      },
      "hands": {
        "nails": "Elegant long white manicure"
      }
    },
    "wardrobe": {
      "headwear": "None",
      "upper_body": "Black fitted cropped jacket",
      "lower_body": "Flowing high-waisted black midi skirt",
      "footwear": "Minimalist black heels",
      "jewelry": "Thin silver bracelet and delicate silver earrings"
    },
    "environment": {
      "setting": "Nighttime rooftop in the city after rain",
      "foreground": {
        "structure": "Wet reflective rooftop surface",
        "details": "Small puddles catching neon reflections"
      },
      "background": {
        "cityscape": "Glowing skyline with neon lights and distant windows",
        "atmosphere": "Soft rain mist and light traffic bokeh"
      }
    },
    "lighting_and_atmosphere": {
      "lighting": "Cinematic cool-blue ambient light, soft fill on face, warm rim-light edge glow",
      "effect": "Water reflections shimmering across the ground",
      "weather": "Light drizzle, faint wind"
    },
    "pose_and_action": {
      "posture": "Standing confidently, relaxed shoulders",
      "head_position": "Looking directly at the camera",
      "expression": "Calm, confident, cinematic presence",
      "interaction": "Holding a closed umbrella loosely at her side"
    },
    "compiled_linear_prompt": "Ultra-realistic cinematic HDR night photograph of a woman standing on a rain-kissed rooftop. Elegant hourglass figure, glowing skin, long hair blowing softly. Wearing a fitted black cropped jacket and flowing high-waisted skirt, minimalist black heels, silver jewelry. City skyline glowing behind her, neon reflections on wet rooftop. Cool blue ambient light with warm rim-light glow. Holding an umbrella, calm confident gaze at the camera. Atmospheric, moody, detailed. 4k, sharp focus, realistic textures. --ar 9:16"
  }
}
```

## 3x3 Grid Makeup Product Advertisement

> Lüks portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_composition": {
    "type": "Collage",
    "layout": "3x3 Grid",
    "total_panels": 9
  },
  "visual_elements": {
    "subject": {
      "demographics": "Young woman with light skin tone",
      "features": {
        "hair": "natural",
        "eyes": "Blue",
        "eyebrows": "Groomed, natural arch"
      },
      "attire": {
        "clothing": "Black sleeveless top (possibly silk or satin)",
        "jewelry": "Gold chain necklace with a small oval pendant"
      },
      "makeup_look": "Fresh, glowy base with prominent pink blush, defined lashes, and neutral glossy lips"
    },
    "product": {
      "brand": "{argument name="brand name" default="NYX Professional Makeup"}",
      "name": "{argument name="product name" default="Buttermelt Blush"}",
      "packaging": {
        "color": "Matte bubblegum pink",
        "shape": "Rectangular compact with rounded corners"
      },
      "texture_design": "Embossed geometric pattern resembling a woven or wavy checkerboard",
      "shade": "Soft rosy pink"
    },
    "environment": {
      "setting": "Luxury bathroom or hotel room",
      "surfaces": "White marble countertops with grey veining",
      "background": "Large mirrors, window with night view of city lights"
    }
  },
  "panel_breakdown": {
    "top_row": [
      {
        "position": "Top-Left",
        "description": "Model holding the open blush compact up to the camera with one hand, smiling softly."
      },
      {
        "position": "Top-Center",
        "description": "Still life of the product on a marble counter. One compact is standing closed (showing white logo text), another is lying open. Gold jewelry and a brush are in the background."
      },
      {
        "position": "Top-Right",
        "description": "Model viewed through a mirror reflection, applying the blush to her cheekbone using a makeup brush."
      }
    ],
    "middle_row": [
      {
        "position": "Middle-Left",
        "description": "Close-up of a fluffy makeup brush sweeping across the surface of the blush powder, picking up pigment."
      },
      {
        "position": "Middle-Center",
        "description": "Extreme macro shot of the blush pan texture, highlighting the raised, woven geometric pattern in detail."
      },
      {
        "position": "Middle-Right",
        "description": "Portrait of the model looking directly at the camera, showcasing the finished makeup look with flushed cheeks."
      }
    ],
    "bottom_row": [
      {
        "position": "Bottom-Left",
        "description": "Extreme close-up (macro) of the model's face (eye and cheek area), showing skin texture, freckles, and the luminous finish of the blush."
      },
      {
        "position": "Bottom-Center",
        "description": "Model looking into the bathroom mirror, laughing/smiling widely with teeth visible."
      },
      {
        "position": "Bottom-Right",
        "description": "Product display on marble counter. Closed compact on left, open compact on right "
      }
    ]
  }
}
```

## High-Fashion Winter Editorial on Ice

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
High-fashion winter editorial portrait of a young woman sitting on a sculpted block of ice in a vast snowy alpine landscape. She is wearing a black oversized puffer jacket, white wide-leg snow pants, white luxury winter boots with red laces, and a plush white fur hat covering her ears. Her pose is relaxed yet powerful, legs apart, with one gloved hand resting gently against her cheek. The environment features dramatic snow-covered alpine mountains in the distance, smooth rolling snowdrifts in the foreground, and an overcast sky providing soft, diffused natural light. Cool blue and white color palette, ultra-clean minimal composition, cinematic mood, premium luxury fashion editorial aesthetic, sharp focus, realistic fabric and ice textures, editorial photography style, 85mm lens look, shallow depth of field, ultra-high resolution, photorealistic.",
  "style": "fashion editorial photography",
  "lighting": "soft diffused natural light, overcast winter sky",
  "camera": {
    "lens": "85mm",
    "depth_of_field": "shallow",
    "focus": "sharp subject focus"
  },
  "color_palette": [
    "cool blue",
    "white",
    "soft gray",
    "deep black"
  ],
  "quality": "ultra-high resolution",
  "realism": "photorealistic",
  "composition": "minimal, centered subject, cinematic framing.
```

## Candid Hookah Lounge Lifestyle Photo

> Lüks görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "person": "Young woman with long, wavy platinum blonde hair",
    "expression": "Relaxed, eyes closed, head tilted back in enjoyment",
    "action": "Exhaling a thick, dense cloud of white smoke from a hookah",
    "clothing": [
      "Black graphic t-shirt with white distressed print",
      "Black lace choker necklace",
      "Silver heart-shaped pendant necklace"
    ],
    "accessories": [
      "Luxury silver watch with a fluted bezel and jubilee bracelet",
      "Multiple chunky silver rings on several fingers",
      "Silver chain bracelet"
    ]
  },
  "objects": {
    "hookah_hose": "Clear glass mouthpiece attached to a black ribbed hose",
    "smoke": "Voluminous, textured white smoke swirling upward"
  },
  "setting": {
    "environment": "Outdoor lounge or patio",
    "background": "Lush green tropical plants and foliage in soft focus",
    "seating": "Comfortable grey textured outdoor sofa cushions"
  },
  "lighting_and_composition": {
    "lighting": "{argument name="lighting type" default="Bright, direct natural sunlight"} creating high contrast and warm skin tones",
    "angle": "Medium close-up, slightly low angle to emphasize the smoke and relaxed posture",
    "style": "Candid lifestyle photography, high resolution, sharp detail on jewelry and hair textures"
  },
  "color_palette": {
    "primary": ["Black", "Platinum Blonde", "Silver"],
    "secondary": ["Deep Green", "Neutral Grey", "Warm Skin Tones"]
  }
}
```

## Photorealistic Parisian Café Editorial Portrait

> Fotogerçekçi, lüks yemek görseli üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_generation_prompt",
  "aspect_ratio": "9:16",
  "style": "realistic lifestyle portrait, European café editorial",
  "quality": {
    "resolution": "high-resolution, large format",
    "realism": "photorealistic",
    "detail_level": "sharp, ultra-detailed"
  },
  "identity_preservation": {
    "use_reference_image": true,
    "strict_identity_lock": true,
    "alter_face": false,
 },
  "subject": {
    "gender": "female",
    "ethnicity_style": "European",
    "body_type": "slim figure",
    "pose": {
      "position": "sitting at an outdoor café table",
      "angle": "slightly angled toward the camera",
      "hands": "holding a white cup naturally"
    },
    "expression": "calm, stylish, confident",
    "appearance": {
      "hair": "natural styling as in reference image",
      "accessories": [
        "white cat-eye sunglasses resting on top of her head",
        "gold wristwatch on left wrist"
      ]
    },
    "wardrobe": {
      "outerwear": "white tweed blazer",
      "details": [
        "gold buttons on the front",
        "gold buttons on the sleeves"
      ],
      "style": "elegant, classic Parisian chic"
    }
  },
  "props": {
    "table_items": [
      "white coffee cup",
      "silver teapot",
      "glass of water",
      "croissant",
      "dessert cup topped with a large swirl of whipped cream"
    ]
  },
  "environment": {
    "location": "outdoor café patio",
    "cafe_name": "CARETTE",
    "background": {
      "scene": "busy café terrace with patrons seated at tables",
      "architecture": "classic Parisian buildings"
    },
    "atmosphere": "lively yet elegant European café setting"
  },
  "lighting": {
    "type": "natural daylight",
    "quality": "soft, flattering, realistic",
    "effect": "enhances skin texture and fabric detail without harsh shadows"
  },
  "camera": {
    "shot_type": "portrait",
    "framing": "medium portrait",
    "angle": "eye-level",
    "depth_of_field": "moderate with softly blurred background"
  },
  "constraints": [
    "Do not change or retouch the face",
    "No artificial filters or glam effects",
    "No distorted anatomy",
    "No text overlays or watermarks"
  ],
  "output_goal": "Create a realistic, high-resolution 9:16 portrait of a stylish European woman sitting at an outdoor Parisian café table, using the user’s face with 100% accuracy, featuring elegant fashion, café details, and a lively yet refined CARETTE café atmosphere."
}
```

## Mixed-Media Portrait with CGI Mascot in Candy Store

> Fotogerçekçi, sinematik logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
**[Style & Medium]:**
Cinematic mixed-media photography, blending photorealistic live-action with high-end 3D CGI animation (Pixar/Disney style). Commercial advertising aesthetic, 8k resolution, octane render, highly detailed.

**[Subject & IP]:**
A beautiful young Asian woman with long dark wavy hair (resembling {argument name="person reference" default="Liu Yifei"}) wearing a tailored crisp white blazer. She is shown in profile, smiling warmly and gently offering her hand. Interacting with her is a cute, small, spherical, furry beige monster character with large expressive eyes, a wide toothy smile, and tiny arms/legs.

**[Spatial & Physics]:**
Close-up side angle. The furry character appears to be floating or standing near the woman's hand, holding a large, glossy, spherical swirl lollipop. The composition focuses on the emotional connection between the human and the mascot.

**[Branding & Text]:**
The creature wears a blue and white baseball cap with a logo reading "Waeys". The background features crowded retail shelves with colorful candy packaging. Visible text on bags includes "HARIBO", "Nerds", and generic brands like "Keizs" and "Sandia".

**[Material & Texture]:**
Realistic human skin texture and fabric details on the blazer contrasted with the soft, fluff-shaded fur of the 3D character. Glossy plastic candy wrappers, glass jars, and the hard sugary sheen of the lollipop.

**[Lighting & Atmosphere]:**
Vibrant, magical candy store atmosphere. Soft, flattering warm key lighting on the faces mixed with cool purple and pink neon backlighting from the shelves, creating a dreamy and commercial mood.

**[Tech Specs]:**
Depth of field to blur the background shelves, crisp focus on subjects, --ar 1:1 --stylize 250
```

## Dynamic Perspective Close-Up Transformation

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Transform the original photo into a dramatic, photorealistic, ultra-detailed set of 4 different styles, each a mid close up wide-angle shot with an extreme, dynamic camera angle (including more grid views from directly below or above), where one or more body parts are positioned right next to the lens and appear huge, the rest of the body recedes strongly in perspective, and the same person strikes a stylish, complex, powerful pose in a consistent, expanded version of the original environment, with cinematic lighting, high contrast, crisp textures, and precise color grading.
```

## Avant-Garde Athleticism: Frozen Gymnast in Mid-Air

> Minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_meta": {
    "version": "2.0",
    "prompt_designer": "Gemini Visual Director",
    "target_platform": "Commercial Editorial / High-Performance Social Media"
  },
  "visual_parameters": {
    "image_type": "High-speed action photography / Kinetic editorial",
    "style": "Avant-garde Athleticism / Brutalist Minimalist",
    "composition": {
      "framing": "Dynamic full-body mid-air suspension",
      "angle": "Dramatic low-angle 'worm's eye' perspective to exaggerate height and scale",
      "depth_of_field": "Deep focus on the subject with a motion-blurred peripheral background"
    },
    "subject": {
      "description": "Elite gymnast in a state of extreme physical exertion and flexibility",
      "pose": "Frozen mid-air during a gravity-defying back-tucked split; spine arched, limbs extended with geometric precision",
      "attire": "High-tech matte black compression bodysuit with metallic charcoal accents; sleek, aerodynamic texture"
    },
    "facial_details": {
      "expression": "Intense focus; 'the zone'; jaw slightly clenched, eyes sharp and directed toward the landing point",
      "skin_texture": "Visible sheen of perspiration, fine salt crystals, hyper-detailed muscle definition and vascularity",
      "hair": "Tightly slicked back into a high-performance bun, several loose strands whipped by the velocity"
    },
    "lighting": {
      "primary_source": "High-contrast 'Rim Lighting' to define the muscular silhouette",
      "secondary_source": "Cool-toned strobe flash (1/8000s) to freeze motion perfectly",
      "quality": "Dramatic chiaroscuro effect; harsh shadows and brilliant highlights"
    },
    "color_palette": {
      "primary": ["Carbon Black", "Industrial Grey", "Cold Steel"],
      "accents": ["Electric Cyan", "Crisp White"],
      "grading": "High-contrast, desaturated, cinematic 'bleach bypass' aesthetic"
    },
    "background": {
      "setting": "Minimalist concrete industrial warehouse or 'void' studio",
      "elements": ["Subtle dust particles suspended in light beams", "Minimalist chalk dust clouds exploding from hands", "Geometric shadow patterns"]
    },
    "technical_details": {
      "camera_sim": "Nikon Z9, 24-70mm f/2.8 S-Line",
      "shutter_speed": "1/8000s to eliminate motion blur on the subject",
      "resolution": "12k Phase One XF rendering quality"
    },
    "artistic_elements": {
      "texture": "Aerosolized chalk dust capturing the air currents; tactile fabric weave of the compression suit",
      "physics": "Strong sense of tension, weightlessness, and kinetic energy"
    },
    "overall_mood": "Powerful, breathtaking, disciplined, and hyper-modern",
    "intended_use": "Viral fitness campaign / Editorial cover / Luxury sportswear advertisement"
  }
}
```

## High-Fashion Sci-Fi Realism in Water

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "model": "Nano Banana Pro",
  "scene": "Dark atmospheric space with shallow reflective water surface",
  "subject": {
    "type": "Woman",
    "pose": "Standing confidently in shallow water, body facing forward, head slightly turned",
    "expression": "Calm, composed, quietly powerful",
    "gaze": "Looking into the distance, not directly at the camera",
    "emotion": "Poise, transcendence, control"
  },
  "appearance": {
    "hair": {
      "style": "Slicked back, wet look",
      "color": "Dark brown"
    },
    "skin": "Natural tone softly illuminated by cool light"
  },
  "attire": {
    "dress": "Translucent futuristic gown made of glowing fiber-optic strands",
    "design": "Form-fitting bodice with flowing light filaments extending downward",
    "material": "Iridescent, semi-transparent, light-emitting fabric",
    "effect": "Bioluminescent glow with subtle motion in strands"
  },
  "environment": {
    "setting": "Minimalist, abstract space",
    "floor": "Thin layer of water creating mirror-like reflections",
    "atmosphere": "Cool mist and light fog surrounding the subject"
  },
  "lighting": {
    "primary": "Cool blue-white backlight creating a halo effect",
    "secondary": "Soft ambient fill lighting",
    "effects": "Volumetric light rays, glow diffusion, reflections on water"
  },
  "camera": {
    "angle": "Eye-level full-body shot",
    "lens": "Cinematic portrait lens (50mm)",
    "depth_of_field": "Moderate, subject sharply in focus with soft background",
    "framing": "Vertical composition emphasizing symmetry and presence"
  },
  "color_palette": {
    "dominant": ["cool blue", "silver white"],
    "accents": ["soft violet", "cyan highlights"]
  },
  "mood": "Futuristic, elegant, ethereal, powerful",
  "style": {
    "aesthetic": "High-fashion sci-fi realism",
    "inspiration": "Tech couture, futuristic runway, cinematic sci-fi",
    "texture": "Smooth skin contrast with luminous filament detail",
    "post_processing": "Clean highlights, cool color grading, subtle glow bloom"
  },
  "themes": [
    "Technology and humanity",
    "Light as form",
    "Future elegance",
    "Controlled power"
  ],
  "quality": "Ultra-detailed, photorealistic, high dynamic range, cinematic lighting"
}
```

## Ultra-Realistic Bar Lounge Editorial Portrait

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "request_type": "Image Generation Prompt",
  "reference_priority": {
    "source_image": "uploaded:20260103_074644.jpg",
    "strict_requirements": [
      "Exact facial features and identity",
      "Exact hair color, texture, and style",
      "100% likeness retention"
    ]
  },
  "technical_specifications": {
    "format": "Ultra-realistic 8K UHD DSLR photograph",
    "camera_settings": {
      "lens": "35mm or 50mm prime",
      "aperture": "f/4",
      "iso": "200-400",
      "shutter_speed": "1/125s",
      "white_balance": "Warm indoor"
    },
    "composition": "Vertical framing, eye-level angle, lifestyle editorial"
  },
  "subject_details": {
    "identity": "Beautiful woman from reference image",
    "expression": {
      "mouth": "Soft closed-lip smile",
      "eyes": "Calm, thoughtful gaze looking slightly away from camera",
      "mood": "Confident and relaxed"
    },
    "hair_and_makeup": {
      "hair": "Long dark brown, loose, smooth, naturally straight, soft volume, slightly off-center part",
      "makeup": "Minimal evening style, natural glow, neutral tones, pink/nude satin-gloss lips"
    },
    "pose": {
      "position": "Seated on cushioned bar chair, 3/4 body orientation",
      "legs": "One leg crossed over the other",
      "hands": "Gently holding a tall clear glass with a straw"
    }
  },
  "styling": {
    "outfit": "{argument name="outfit type" default="Black sleeveless mini dress"}, thin spaghetti straps, fitted silhouette",
    "fabric": "Smooth matte",
    "accessories": [
      "Delicate necklace at collarbone",
      "Minimal bracelets"
    ]
  },
  "environment": {
    "location": "Modern evening bar/lounge",
    "background_elements": [
      "Wooden bar counter with under-lighting",
      "Botanical/Asian-inspired wall art",
      "Visible bottles and bar tools"
    ],
    "lighting": {
      "type": "Warm indoor ambient",
      "source": "Overhead and side bar fixtures",
      "quality": "Soft with gentle contrast"
    }
  },
  "quality_control": {
    "prohibitions": [
      "CGI",
      "Illustration",
      "Beauty filters",
      "Over-smoothing"
    ],
    "negative_prompts": [
      "Dark underarms",
      "Uneven skin tone",
      "Hyperpigmentation",
      "Blurry background"
    ]
  }
}
```

## High-Fashion Aviator Sunglasses Portrait with NYC Reflection

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
An extreme close-up, high-fashion editorial portrait of a chic city dweller cropped to focus on the eyes and nose. The subject is wearing oversized black Aviator sunglasses that dominate the frame. The lenses feature a crystal-clear, photorealistic reflection of the New York City skyline and yellow taxis, serving as the visual focal point. The subject is styled in a cashmere scarf in camel beige, emphasizing the texture. The skin is rendered with natural, soft matte makeup. The brand name "Ray-Ban" is printed in small, minimalist Script on the top corner of the lens. The lighting is diffused city shade, creating a sophisticated, metropolitan atmosphere.
```

## Multi-Shot Cinematic Fashion Collage in Winter

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "style": "cinematic, realistic, high resolution, multi-shot collage, 5-panel grid",
  "subject": "young man in his mid 20s, natural features, confident and relaxed expression",
  "scene": "snowy outdoor walkway, winter landscape, soft falling snow, cold weather atmosphere",
  "outfit": "stylish winter coat, wool scarf, gloves, fitted winter trousers, winter boots, cozy beanie",
  "action": "walking casually, holding a warm drink, adjusting coat, looking around naturally",
  "composition": "five panels showing varied angles: front portrait, side profile, close-up face, walking action shot, over-the-shoulder view",
  "lighting": "soft natural daylight, subject gently highlighted, subtle rim light, realistic shadows",
  "camera": "mix of 35mm and 85mm lenses, shallow depth of field, professional photography style",
  "mood": "calm, cinematic, lifestyle fashion photoshoot",
  "quality": "8k ultra detailed, sharp focus, clean background, photorealistic, minimal noise"
}
```

## 2x2 Luxury Ski Influencer Collage (Ana De Armas)

> Lüks, stüdyo ışıklı manzara üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
      "id": 1,
      "title": "2x2 Collage: Luxury Ski Trip",
      "prompt_text": "2x2 photo collage, luxury ski influencer lifestyle. Strict face reference lock. Location: high-end ski chalet balcony (Aspen/Alps), blurred snowy mountains behind. Outfit: fitted white thermal bodysuit, white faux-fur headband, oversized Moon Boots. Natural skin texture, fresh cold girl makeup. Style: iPhone 16 Pro photo, harsh bright high-altitude winter sun, sharp shadows, strong contrast, slight lens flare, blown snow highlights. Panels: 1) Leaning on rustic wooden railing, smiling. 2) Close-up adjusting large mirrored ski goggles. 3) Sitting relaxed on snow-covered bench. 4) Rear view looking at peaks.",
      "negative_prompt": "cinema, studio light, soft diffused, DSLR, film grain, 3D, CGI, smooth skin, warm lighting, low contrast, blurry, distorted, artificial AI look",
      "aspect_ratio": "4:5"
    },
    {
      "id": 2,
      "title": "Solo: Leaning on Balcony",
      "prompt_text": "Lifestyle photo, luxury ski influencer on chalet balcony. Strict face reference lock. Leaning on wooden railing, smiling naturally. Outfit: white thermal bodysuit, white fur headband, Moon Boots. Natural skin texture, cold makeup. Background: blurred snowy mountains. Style: iPhone 16 Pro photo, harsh high-altitude winter sun, sharp shadows, high contrast, \"plandid\".",
      "negative_prompt": "cinema, studio light, soft diffused, DSLR, film grain, 3D, CGI, smooth skin, warm lighting, low contrast, blurry, distorted, artificial AI look",
      "aspect_ratio": "4:5"
    },
    {
      "id": 3,
      "title": "Close-up: Adjusting Goggles",
      "prompt_text": "Close-up portrait, luxury ski influencer on balcony. Strict face reference lock. Adjusting large mirrored ski goggles with both hands, elbows up, dynamic fashion pose. White outfit details visible. Style: iPhone 16 Pro photo, harsh winter sun, crisp highlights on goggles, high contrast.",
      "negative_prompt": "cinema, studio light, soft diffused, DSLR, film grain, 3D, CGI, smooth skin, warm lighting, low contrast, blurry, distorted, artificial AI look",
      "aspect_ratio": "4:5"
    },
    {
      "id": 4,
      "title": "Full Body: Sitting",
      "prompt_text": "Full-body photo, luxury ski influencer sitting on snow-covered bench on chalet balcony. Strict face reference lock. Relaxed posture, looking off-camera candidly. White outfit, Moon Boots visible. Style: iPhone 16 Pro photo, direct winter sun causing sharp shadows, bright snow glare.",
      "negative_prompt": "cinema, studio light, soft diffused, DSLR, film grain, 3D, CGI, smooth skin, warm lighting, low contrast, blurry, distorted, artificial AI look",
      "aspect_ratio": "9:16"
    }
  ]
```

## Hot Pink Photo Collage Prompt for Nano Banana Pro

> Minimal, stüdyo ışıklı moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "identity": "Young woman with wavy brunette hair and fair skin",
    "features": "Heart-shaped face, soft facial structure, light brown eyes",
    "attire": "Hot pink chunky cable-knit sweater with ribbed crew neck",
    "accessories": "Thin gold-rimmed round sunglasses with vibrant pink tinted lenses"
  },
  "layout": {
    "type": "2x2 photo collage",
    "total_panels": 4,
    "panels": [
      {
        "panel_id": 1,
        "expression": "Wide joyful smile, teeth showing",
        "pose": "Hands framing the face, palms facing forward"
      },
      {
        "panel_id": 2,
        "expression": "Thinking or playful pouting expression",
        "pose": "One finger resting against the lip"
      },
      {
        "panel_id": 3,
        "expression": "Playful wide-eyed surprise, slight smirk",
        "pose": "Fists tucked under the chin"
      },
      {
        "panel_id": 4,
        "expression": "Silly, one eye winking with tongue sticking out",
        "pose": "Hand making a peace sign over one eye"
      }
    ]
  },
  "environment": {
    "background": "Solid teal or muted turquoise studio wall",
    "lighting": "Soft, even studio lighting with minimal shadows"
  },
  "aesthetic": {
    "style": "High-fashion editorial portrait, vibrant color blocking",
    "color_palette": ["Hot Pink", "Teal", "Gold"],
    "mood": "Playful, energetic, youthful"
  }
}
```

## Professional Portrait Photo Shoot with Props and Palace Background

> Moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
The model from the reference image is standing in the reference image location, with a dignified smile and happy expression, as natural light brightly illuminates the interior. The fashion worn is from the reference image, and the model is holding the prop from the reference image. The composition perfectly suits the woman, highlighting her figure like a professional photograph. Atmospheric, professional lighting.
```

## Ethereal C-Drama Aesthetic Portrait

> Sinematik, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create an ethereal, atmospheric portrait of a young Asian woman (age 20-25) in a dreamlike, melancholic, C-drama/Douyin aesthetic. She has porcelain-smooth skin, soft focus, and a romanticized, otherworldly presence, styled in a {argument name="clothing item" default="black corset top"}. The lighting is dramatic yet soft, with a strong cool-white light hitting her from the front and side, creating high contrast against a pure deep black background. Add a faint glow around her hair and shoulders for an angelic halo effect, softened with a misty, hazy highlight. Her makeup is soft-glam minimalist. Pose 1: head tilted upward and slightly to the side, one hand resting gently on her collarbone or neck, fingers relaxed, eyes looking away, wind-swept hair partially covering her face, lips slightly parted, conveying introspection and vulnerability. Pose 2: back-to-camera turn, looking over her shoulder, head slightly tilted down, eyes large and expressive, emphasizing jawline and shoulder curve, maintaining the wind-swept hair effect. The overall composition is intimate, cinematic, and moody, capturing delicate vulnerability, soft tactile elegance, and a frozen moment of reflective thought.
```

## Luxury Ski Influencer Collage and Portraits (iPhone 16 Pro Style)

> Lüks, stüdyo ışıklı manzara üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
      "id": 1,
      "title": "2x2 Collage: Luxury Ski Trip",
      "prompt_text": "2x2 photo collage, luxury ski influencer lifestyle. Strict face reference lock. Location: high-end ski chalet balcony (Aspen/Alps), blurred snowy mountains behind. Outfit: fitted white thermal bodysuit, white faux-fur headband, oversized Moon Boots. Natural skin texture, fresh cold girl makeup. Style: iPhone 16 Pro photo, harsh bright high-altitude winter sun, sharp shadows, strong contrast, slight lens flare, blown snow highlights. Panels: 1) Leaning on rustic wooden railing, smiling. 2) Close-up adjusting large mirrored ski goggles. 3) Sitting relaxed on snow-covered bench. 4) Rear view looking at peaks.",
      "negative_prompt": "cinema, studio light, soft diffused, DSLR, film grain, 3D, CGI, smooth skin, warm lighting, low contrast, blurry, distorted, artificial AI look",
      "aspect_ratio": "4:5"
    },
    {
      "id": 2,
      "title": "Solo: Leaning on Balcony",
      "prompt_text": "Lifestyle photo, luxury ski influencer on chalet balcony. Strict face reference lock. Leaning on wooden railing, smiling naturally. Outfit: white thermal bodysuit, white fur headband, Moon Boots. Natural skin texture, cold makeup. Background: blurred snowy mountains. Style: iPhone 16 Pro photo, harsh high-altitude winter sun, sharp shadows, high contrast, \"plandid\" look.",
      "negative_prompt": "cinema, studio light, soft diffused, DSLR, film grain, 3D, CGI, smooth skin, warm lighting, low contrast, blurry, distorted, artificial AI look",
      "aspect_ratio": "4:5"
    },
    {
      "id": 3,
      "title": "Close-up: Adjusting Goggles",
      "prompt_text": "Close-up portrait, luxury ski influencer on balcony. Strict face reference lock. Adjusting large mirrored ski goggles with both hands, elbows up, dynamic fashion pose. White outfit details visible. Style: iPhone 16 Pro photo, harsh winter sun, crisp highlights on goggles, high contrast.",
      "negative_prompt": "cinema, studio light, soft diffused, DSLR, film grain, 3D, CGI, smooth skin, warm lighting, low contrast, blurry, distorted, artificial AI look",
      "aspect_ratio": "4:5"
    },
    {
      "id": 4,
      "title": "Full Body: Sitting",
      "prompt_text": "Full-body photo, luxury ski influencer sitting on snow-covered bench on chalet balcony. Strict face reference lock. Relaxed posture, looking off-camera candidly. White outfit, Moon Boots visible. Style: iPhone 16 Pro photo, direct winter sun causing sharp shadows, bright snow glare.",
      "negative_prompt": "cinema, studio light, soft diffused, DSLR, film grain, 3D, CGI, smooth skin, warm lighting, low contrast, blurry, distorted, artificial AI look",
      "aspect_ratio": "9:16"
    }
```

## Professional Studio Headshot: Woman Eating Pizza

> Moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
An upper body photo of a woman standing in a white background studio, humorously smiling (happy expression) while eating melted cheese pizza. The face and fashion use the reference fashion. Skin texture is upscaled to high resolution, clearly showing skin quality. The light is flat but professional lighting. Shot using a 100mm f8.0 lens.
```

## Ultra-Realistic Street-Fashion Portrait with Motion Blur

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic editorial street-fashion portrait at an outdoor café. A poised young woman sits centered in frame on a chrome café chair, facing camera with calm direct eye contact. She has sleek glossy black hair with a precise center part pulled into a tight low bun, minimal flyaways, small earrings, layered pearl-and-chain necklaces. Outfit: structured luxury charcoal/dark-brown tweed jacket with subtle texture and boxy shoulders, partially open, featuring small gold buttons; black low-neck top underneath; long dark charcoal/black draped skirt covering crossed legs. Footwear: metallic silver pointed-toe stilettos with reflective highlights. Pose: legs crossed toward camera-left, upper body upright and relaxed, hands resting naturally (one near lap/armrest), composed expression.

Scene: sidewalk café terrace with a round table on the right side of the frame; table has a light top and reflective chrome pedestal base. On the tabletop: a white espresso cup on a saucer with a small plate/saucer stack. A black {argument name="brand name" default="GUCCI"} bag sits on the right side of the table, soft pouch silhouette with a gold chain strap draped across it, the word ‘GUCCI’ visible on the bag. Background: a passing train behind the subject rendered as strong horizontal motion blur streaks (off-white body, teal-blue banding and darker gray stripes), creating a fast-moving blurred backdrop while the subject remains sharp. Ground is light pavement/stone with faint lines; overall clean luxury street aesthetic.

Camera: portrait orientation, medium-full seated fashion shot, eye-level slightly above knees, subject sharp with shallow depth of field; background motion blur from train; gentle film grain; subtle vignette; high-end editorial realism, perfect skin texture, natural pores, realistic fabric weave, accurate reflections on chrome and shoes. Color grade: muted luxury neutrals with soft warm skin tones and cool teal/blue background streak, cinematic contrast, no oversaturation.”

CAMERA / OPTICS (lock-in)

•85mm look (or 70–105mm range), f/2.0–f/2.8 shallow DOF

•Fast shutter feel for subject sharpness, but background motion blur (train) preserved

•Natural perspective compression, no wide-angle distortion

LIGHTING (lock-in)

•Soft diffused daylight, gentle key from front-left, minimal harsh shadows

•Subtle specular highlights on shoes and chrome table base

TEXTURE / REALISM (lock-in)

•Visible tweed weave, accurate button sheen, realistic jewelry reflections

•Skin: natural pores, soft highlight on cheekbones, no plastic smoothing

NEGATIVE PROMPT (do not allow)

“no extra people, no additional bags, no brand changes, no missing GUCCI text, no hat, no open hair, no smile, no heavy makeup, no harsh flash, no dramatic colored lighting, no bokeh balls, no rain, no snow, no indoor setting, no different table, no different cup color, no sneakers, no boots, no swapped outfit colors, no exaggerated shoulders, no cartoon/anime, no painterly look, no over-sharpening,
```

## Hyper-Realistic Studio Photo of a Woman in Bavarian Dirndl

> Fotogerçekçi görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "high-resolution professional studio photo of a natural-looking woman wearing a traditional Bavarian dirndl dress matching the reference image — deep navy bodice with silver embroidery, light grey-blue apron with floral lace trim, and white puff-sleeve blouse. the model should appear authentic, not AI-generated, with natural skin texture, light makeup, and soft blonde hair styled loosely. she should be standing naturally, with gentle daylight-like lighting from one side to create soft realistic shadows and bring out the satin and lace texture of the fabric. background should be plain, softly lit in neutral tone (light beige or pastel grey), smooth and consistent like a studio wall. ensure the focus is sharp on the dirndl fabric details, bow, and lace edges, while keeping a realistic human tone and genuine expression.",
  "negative_prompt": "no artificial skin smoothing, no overexposure, no harsh contrast, no fake reflections, no AI artifacts, no floating objects, no background gradients, no flat or plastic texture, no unrealistic symmetry.",
  "aspect_ratio": "4:5",
  "style": "hyper-realistic studio photography",
  "quality": "ultra",
  "lighting": "soft daylight studio",
  "image_config": {
    "output_format": "png",
    "resolution": "4k",
    "color_space": "sRGB"
  }
}
```

## Rooftop Pool Flash Photography Prompt for Gemini Nano Banana Pro

> Minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_type": "flash_photography_snapshot",
  "aspect_ratio": "3:4",

  "subject_anchor": {
    "demographics": "Young adult female",
    "hair_state": "Blonde hair, long loose waves, slightly damp at the ends, natural flyaways",
    "makeup": "Glam makeup with glossy lips, contoured nose, subtle highlight on cheekbones and nose tip, defined brows"
  },

  "clothing_and_accessories": {
    "garment": "{argument name="Bikini Color" default="Neutral-toned"} string bikini appropriate for swimming",
    "fit": "Minimal swimwear with adjustable ties, natural fit",
    "jewelry": "Thin gold waist chain, stacked gold bangles on left wrist, small stud nose piercing",
    "nails": "Long white square-tip acrylics"
  },

  "pose_geometry_and_mechanics": {
    "body_orientation": {
      "orientation": "Standing at the edge of a rooftop pool, body angled away and turned partially back toward the camera",
      "posture": "Relaxed, confident stance with a subtle lower-back arch",
      "upper_body_rotation": "Torso gently twisted to face the lens"
    },
    "limb_placement": {
      "left_arm": "Elbow bent with hand lightly near chin or collarbone",
      "right_arm": "Relaxed at side or resting on pool edge",
      "head_neck": "Head turned back toward camera, chin slightly lowered, eyes meeting the lens"
    },
    "weight_distribution": "Weight naturally shifted onto one leg, casual rooftop posture"
  },

  "anatomy_and_skin_fidelity": {
    "texture": "Real skin texture with visible pores",
    "imperfections": "Natural skin variation and faint stretch marks preserved",
    "lighting_response": "Skin reacts naturally to hard flash with visible highlights and shadow falloff"
  },

  "environment_context": {
    "setting": "Hotel rooftop pool at night",
    "surfaces": [
      "Infinity-style pool edge",
      "Stone or concrete deck",
      "Glass railing"
    ],
    "background_elements": [
      "City skyline lights in the distance",
      "Hotel architectural lighting",
      "Reflections shimmering on the pool surface"
    ],
    "spatial_depth": "Subject close to pool edge, skyline softly blurred behind"
  },
{
  "image_type": "flash_photography_snapshot",
  "aspect_ratio": "3:4",

  "subject_anchor": {
    "demographics": "Young adult female, tan skin tone",
    "hair_state": "Blonde hair, long, loose waves, falling over back and right shoulder, slight frizz and flyaways",
    "makeup": "Glam makeup with glossy lips, contoured nose, highlighter on cheekbones and nose tip, defined eyebrows"
  },

  "clothing_and_accessories": {
    "garment": "Neutral-toned string bikini suitable for swimming",
    "fit": "Minimal swimwear with adjustable ties at the hips and neck",
    "jewelry": "Thin gold waist chain resting loosely above hips, stacked gold bangles on left wrist, small stud nose piercing",
    "nails": "Long, white, square-tip acrylics"
  },

  "pose_geometry
```

## Refractive High Fashion Editorial Portrait

> Lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
"Refractive photography",
    "Fine art portrait"
  ],
  "photography_style": {
    "genre": "High-end fashion editorial portrait with experimental optical effects",
    "technique": "Shooting through prismatic glass and crystal elements for artistic refraction",
    "era": "Contemporary 2020s luxury fashion photography",
    "influences": "Paolo Roversi soft focus, Tim Walker whimsical elegance, Sofia Coppola period opulence"
  },
  "critical_elements_summary": {
    "must_include": [
      "Large crystal prism creating rainbow dispersion on entire left side of frame",
      "Subject visible through transparent glass table in center creating layered effect",
      "Flower arrangement right side with chromatic aberration on petals",
      "Multiple crystal chandeliers with warm candlelight creating bokeh in background",
      "Deep black background with selective lighting on subject",
      "Elaborate diamond necklace and earrings catching light",
      "Soft dreamy focus quality throughout",
      "Strong rainbow spectrum colors from prismatic refraction - full red through violet",
      "Transparent layered glass effects creating ghosting and doubling",
      "Warm amber candlelight bokeh circles scattered in background",
      "Low-key dramatic lighting with subject emerging from darkness",
      "Opulent formal ballroom atmosphere"
    ]
  }
}
```

## High-Contrast Geisha Irezumi Portrait Prompt

> Minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "generate",
  "scene": {
    "effect_type": "high-contrast studio portrait with editorial precision",
    "camera": {
      "position": "medium full shot at subject chest height",
      "direction": "straight-on with subject facing three-quarter toward camera",
      "lens_mm": "85-105mm",
      "aperture": "f/8",
      "angle": "eye-level straight classical portrait",
      "psychological_intent": "classical portrait authority — clean, confident, respectful documentation allowing full tattoo coverage and geisha presentation to read with clarity and intention"
    }
  },
  "subject": {
    "description": "Japanese woman, mid 20s, traditional geisha presentation — face covered in flawless white oshiroi makeup with immaculate application, eyebrows shaved and redrawn higher in soft charcoal smudges, eyes lined precisely with crimson and black in traditional style with subtle wing, lips painted red only on inner portion creating classic smaller mouth illusion, elaborate shimada updo lacquered jet black with multiple kanzashi hairpins including tortoiseshell comb, silver floral pins, and dangling bira-bira ornaments — full traditional Japanese irezumi bodysuit in sharp focus: both arm sleeves in continuous coverage from wrists to shoulders featuring {argument name="right arm tattoo" default="koi fish swimming upstream through crashing waves"} on right arm with water spray detailing, {argument name="left arm tattoo" default="coiling dragon wrapped in wind bars and peonies"} on left arm with individual scales visible, massive chest piece spanning from collarbone to sternum depicting battling phoenixes rising through chrysanthemum blooms with feather detail in crimson and gold, stomach piece showing upper portion of hannya mask emerging from flames with gradient horns, back piece of roaring tiger descending through bamboo and maple leaves wrapping around ribcage and creeping up onto nape behind ears, bold tebori-style outlines throughout with masterful bokashi gradient shading in blacks, grays, crimson, gold and jade green",
    "action": "static posed",
    "body_position": "standing with weight on one hip creating subtle S-curve, arms relaxed at sides with hands slightly forward to display hand tattoos, shoulders back and chest open to present full front coverage, head tilted slightly with chin raised",
    "clothing": "black silk kimono slipped off both shoulders and pooled dramatically at waist, held by wide burgundy obi sash tied below ribs, traditional white sarashi chest wrap binding bust in clean horizontal bands leaving shoulders, sternum, stomach, and full arms exposed",
    "accessories": "multiple kanzashi hairpins including tortoiseshell comb, silver floral pins, dangling bira-bira ornaments catching light, delicate jade drop earrings",
    "movement": "none, composed stillness",
    "expression": "commanding serenity — direct gaze into lens with quiet confidence, painted lips in subtle closed-mouth suggestion of smile, the calm power of someone who knows exactly what they are"
  }
}
```

## Golden Hour Winter Portrait Prompt for Gemini Nano Banana 3.0

> Fotogerçekçi, sinematik manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_prompt": {
    "subject": {
      "description": "A man in his late 20s with a contemplative expression, looking off into the distance",
      "features": ["Short dark hair", "Fair complexion", "Subtle stubble"],
      "attire": [
        "Heavy olive green winter parka with a large fur-lined hood",
        "Chunky knit brown wool scarf",
        "Black thermal gloves",
        "Hand tucked into pocket"
      ],
      "action": "Holding a steaming silver thermos, leaning against a bridge railing"
    },
    "environment": {
      "setting": "Overlooking a frozen river valley in a mountainous or high-altitude region",
      "background": "Distant cityscape silhouette with modern skyscrapers during golden hour",
      "elements": [
        "Snow-covered pine trees with heavy frost",
        "Mist rising from the icy water",
        "Wrought iron bridge railing with accumulated snow"
      ],
      "atmosphere": "Deep winter, freezing temperatures, quiet morning, serene and hopeful"
    },
    "technical_specs": {
      "lighting": "Golden hour sunrise, soft orange and yellow glow, cinematic backlighting",
      "composition": "Medium side-profile shot, rule of thirds, shallow depth of field (bokeh background)",
      "camera_settings": "Shot on 85mm lens, f/1.8, crisp focus on the subject's face",
      "style": "Hyper-realistic, photorealistic, 8k resolution, cinematic color grading"
    },
    "negative_prompt": "oversaturated, blurry face, distorted hands, cartoonish, low resolution, messy hair"
  }
}
```

## New Year Photo-Booth Strip Prompt with Face Consistency Lock (Firefly)

> Fotogerçekçi, lüks arayüz tasarımı üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Prompt Studio: Nano Banana Pro Photo-Booth Print Strip, in Firefly

Ultra-photorealistic single-frame photograph.
The person in ALL four frames must be 100% identical to the uploaded reference image. Preserve exact facial features: same face shape, same eyes, same nose structure, same lips, same skin texture. Zero deviation from reference. Do not generate a different person.
A single oversized photo-booth print strip dominates the composition, centered and filling 75-85% of the frame, held naturally by one hand with fingers partially visible for scale. The hand is adorned with delicate gold rings.
The strip contains exactly 4 frames arranged vertically (1 column × 4 rows). Each frame shows the SAME person from the reference image in glamorous New Year celebration moments:
- Frame 1: wearing a tiara, sultry gaze
- Frame 2: holding a sparkler, smiling seductively
- Frame 3: holding a coupe glass of champagne, laughing, dewy makeup
- Frame 4: blowing a kiss, enchanting expression
Background: luxury hotel ballroom, distant and softly blurred with bokeh lights and crystal chandeliers.
White border text at bottom reads exactly: "{argument name="New Year Text" default="Happy New Year 2026"}"
Photography style: Shot on Canon EOS R5, 85mm lens, f/1.2, dramatic rim lighting, sharp focus on the print strip, shallow depth of field.
STRICT RULES:
- No other people visible
- No logos, watermarks, or UI elements
- No numbers outside the print strip
- Person appears ONLY inside the printed photos
Face Consistency Lock: The facial structure, eye spacing, nose bridge, jawline, and all identifying features must match the reference with 100% accuracy across all 4 frames. @AdobeFirefly. A stylish handwritten signature Willy is elegantly and small letters placed at the Bottom Right corner
```

## Avant-garde Fashion Portrait Prompt for Nano Banana Pro

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "type": "stunning_east_asian_woman_with_Japanese_gravure_idol_aesthetic",
    "framing": "medium_shot_waist_up_portrait",
    "age_vibe": "youthful_innocent_early_20s_with_a_pure_and_healing_atmosphere",
    "features": {
      "face_structure": "small_oval_shaped_face_with_soft_youthful_contours_and_refined_chin",
      "eyes": "large_and_round_misty_dark_brown_eyes_with_a_soft_innocent_and_sparkling_gaze",
      "nose": "high_prominent_and_straight_nose_bridge_with_a_refined_delicate_tip",
      "hair": "chic_high_ponytail_in_pale_blonde_silky_and_straight_texture_with_light_airy_see-through_bangs",
      "expression": "pure_and_healing_expression_with_a_soft_dewy_half-smile_radiating_warmth_and_gentle_allure"
    },
    "skin_texture": {
      "description": "ultra-smooth_spotless_translucent_skin_with_a_moist_clear_texture_free_of_moles",
      "details": [
        "zero_blemish_perfectly_clear_and_smooth_surface",
        "no_moles_or_freckles",
        "soft_natural_skin_pores",
        "delicate_natural_pinkish_undertones"
      ],
      "makeup": "natural_translucent_makeup_wet-look_nude_pink_lip_gloss_and_soft_natural_eyebrows"
    },
    "pose_structural_lock": {
      "overall": "confident_yet_gentle_static_stand-still_pose_facing_camera_directly",
      "arms": "one_arm_slightly_bent_holding_a_structured_clutch",
      "hands": "delicate_fingers_showcasing_unique_rings_soft_grip_on_bag",
      "shoulders": "relaxed_posture_emphasizing_the_garments_architectural_shoulders"
    }
  },
  "apparel_specification": {
    "runway_outfit_main_piece": {
      "description": "Avant-garde_deconstructed_trench_coat_reimagined_as_a_dress",
      "material": "mix_of_structured_beige_gabardine_contrasted_with_panels_of_iridescent_PVC",
      "silhouette": "oversized_asymmetrical_cut_with_exaggerated_shoulders_and_cinched_waist",
      "details": "exposed_zippers_large_cargo_pockets_and_flowing_straps"
    },
    "accessories": {
      "neck": "chunky_industrial_style_silver_chain_choker",
      "bag": "small_geometric_sculptural_clutch_in_metallic_silver",
      "jewelry_detail": "bold_architectural_rings_on_multiple_fingers"
    }
  },
  "environment": {
    "setting": "bustling_metropolitan_street_in_Tokyo_or_Seoul",
    "lighting": "late_afternoon_golden_hour_warm_sunlight",
    "background": "dynamic_street_scene_with_extreme_motion_blur_surrounding_pedestrians_appear_as_rapid_long_exposure_streaks_of_light_and_movement",
    "atmosphere": "visual_contrast_between_the_soft_pure_subject_and_the_frenetic_blurred_city_motion"
  },
  "realism_and_rendering": {
    "style": "cinematic_street_fashion_photography_documentary_vibe_with_soft_glossy_finish",
    "camera": "Tilt-shift_photography_combined_with_slow_shutter_speed_effec"
```

## Ultra-Photorealistic Winter Beauty Ad Product Replacement

> Fotogerçekçi, minimal görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photoreal_beauty_product_reference_edit",
      "version": "v1.3_WINTER_BEAUTY_BAGEL_LABS_VISIBLE_TEXT",
      "priority": "highest"
    },
    "references": {
      "reference_image_1": {
        "source": "UPLOAD_IMAGE (REQUIRED)",
        "purpose": "COMPOSITION + IDENTITY + LIGHTING + ENVIRONMENT",
        "strict_lock": true,
        "lock_strength": "max",
        "no_layout_drift": true,
        "no_pose_drift": true,
        "preserve_framing": true,
        "preserve_expression": true,
        "preserve_eye_direction": true,
        "preserve_lighting_mood": true,
        "preserve_color_tone": true,
        "preserve_skin_details": true,
        "preserve_background": true,
        "preserve_hand_position": true,
        "preserve_wardrobe": true
      }
    },
    "output_settings": {
      "aspect_ratio": "match_reference",
      "orientation": "match_reference",
      "resolution": "ultra_high_res",
      "render_style": "ultra_photoreal_beauty_advertising",
      "sharpness": "crisp_but_natural",
      "film_grain": "none_or_minimal",
      "color_grade": "clean_true_to_life_cool_winter",
      "retouch_level": "editorial_minimal_keep_texture",
      "noise_reduction": "low"
    },
    "hard_constraints": [
      "ONE female subject only.",
      "Maintain the existing pose, framing, lighting, snowy alpine background, and falling snow.",
      "Modify only the cosmetic product in her hand.",
      "The brand name 'Bagel Labs' must be clearly readable on the product.",
      "Natural skin texture must remain visible.",
      "No watermark."
    ],
    "creative_prompt": {
      "scene_summary": "Create a luxury winter beauty advertising image in a bright snowy alpine environment with falling snow and a clear blue sky. The model wears a white fluffy fur hat and a white knitted sweater. She laughs joyfully with her head slightly tilted back, eyes looking upward. Her long wavy brunette hair frames her face, with visible natural freckles, radiant winter skin, glossy lips, and bold white graphic eyeliner accents.\
\
Product feature:\
- Replace the cosmetic item in her hand with a premium Bagel Labs lipstick.\
- Packaging: translucent pink body filled with fine shimmering micro-glitter.\
- Accents: sleek brushed silver metallic cap with clean reflections.\
- Branding: the text 'Bagel Labs' is printed clearly and sharply on the tube in a modern sans-serif font, high contrast and easy to read.\
\
Product realism:\
- Correct scale relative to fingers.\
- Realistic contact shadows between the product and hand.\
- Specular highlights consistent with snowy daylight.\
\
Overall aesthetic:\
- Ultra-photorealistic, high-end beauty advertising.\
- Crisp focus, editorial lighting, premium modern luxury mood."
    },
    "negative_prompt": [
      "unreadable brand text",
      "misspelled logo"
    ]
  }
}
```

## High-Fashion Editorial Couple in Museum Prompt

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photorealistic_couple_high_fashion_editorial",
      "version": "v1.3_MUSEUM_INTIMATE_EDITORIAL_LOCK",
      "priority": "highest"
    },
    "references": {
      "reference_image_1": "UPLOAD_REFERENCE_IMAGE (POSE + COMPOSITION + STORY LOCK)"
    },
    "output_settings": {
      "aspect_ratio": "2:3",
      "orientation": "portrait",
      "resolution": "ultra_high_res",
      "render_style": "ultra_photoreal_high_fashion_editorial",
      "sharpness": "crisp_but_natural",
      "film_grain": "none_or_minimal",
      "color_grade": "soft_museum_cinematic_luxury"
    },
    "hard_constraints": [
      "EXACTLY 2 people only (one woman, one man).",
      "Perfect identity match if reference faces are provided (no face or body changes).",
      "Pose and interaction must match the reference exactly: seated on a museum bench, the man gently fastening the woman’s shoe while she looks at him.",
      "No readable text, no logos, no watermarks.",
      "Perfect anatomy: hands, fingers, legs, feet, and posture fully correct.",
      "Photoreal skin texture; no plastic or over-smoothed skin.",
      "No extra people, reflections, or background faces."
    ],
    "creative_prompt": {
      "scene_summary": "Ultra-photoreal high-fashion editorial set inside a classical art museum gallery. A couple sits on a minimalist stone or wooden bench in front of monumental marble sculptures. The woman wears a sculptural white satin mini dress with exaggerated volume and off-shoulder structure; black high-heel sandals; hair styled in a sleek low bun; minimal refined jewelry. She sits elegantly with one leg slightly extended, looking softly toward the man.\
\
The man wears an all-black tailored suit with a minimalist shirt, no tie, polished leather shoes. He leans forward, carefully fastening the strap of the woman’s shoe—an intimate, quiet gesture. His posture is focused and gentle, creating a strong emotional narrative.\
\
Lighting: soft museum gallery lighting with subtle directional highlights, low contrast, natural shadows, calm cinematic atmosphere. Background: muted green-gray museum walls, large classical marble statues on plinths, discreet signage blurred and unreadable. Color palette: ivory, stone, charcoal, soft sage, warm skin tones. Mood: intimate, elegant, intellectual, timeless, quietly romantic.\
\
Camera: 85mm editorial lens look, medium depth of field; subjects sharply in focus while sculptures fall off gently. Overall feel: luxury fashion house campaign, modern romance, art-meets-couture storytelling."
    },
    "negative_prompt": [
      "any readable text",
      "logos, branding, watermarks",
      "extra people or reflections",
      "distorted legs, hands, or feet",
      "identity drift",
      "cartoon, anime, CGI look",
      "plastic or over-smoothed skin",
      "harsh flash lighting",
      "busy or cluttered"
    ]
  }
}
```

## Ultra-Realistic Pikachu Swimsuit Fashion Shot

> Fotogerçekçi, stüdyo ışıklı moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_request": {
    "metadata": {
      "style": "Ultra-realistic fashion photography",
      "resolution": "High-resolution",
      "orientation": "Portrait",
      "shot_type": "Full-body studio portrait"
    },
    "subject": {
      "ethnicity": "Latina",
      "age_group": "Young adult",
      "physique": {
        "build": "Curvy, voluptuous",
        "proportions": "Balanced",
        "posture": "Confident, arms behind head"
      },
      "features": {
        "face": "Consistent with reference image",
        "skin_tone": "Light-to-white",
        "eye_contact": "Direct to camera",
        "expression": "Neutral-to-seductive, calm"
      },
      "hair": {
        "color": "Dark brown to jet-black (consistent with reference)",
        "style": "Long, straight, flowing over shoulders"
      }
    },
    "attire": {
      "item": "One-piece swimsuit",
      "color": "{argument name="swimsuit color" default="Bright yellow"}",
      "fit": "Snug, high-cut leg, low softly curved neckline",
      "details": {
        "straps": "Thin shoulder straps",
        "graphic": {
          "character": "Pikachu (cartoon face)",
          "elements": [
            "Oversized black-and-white eyes",
            "Wide open smiling mouth with tongue",
            "Vibrant red circular cheeks"
          ],
          "placement": "Centered on torso"
        }
      }
    },
    "environment": {
      "background": "Smooth, plain, light gray to off-white seamless",
      "lighting": {
        "type": "Soft professional studio lighting",
        "effect": "Smooth highlights, subtle shadows, natural skin texture"
      }
    },
    "technical_attributes": {
      "focus": "Sharp",
      "composition": "Clean and elegant",
      "aesthetic": "Premium fashion, photorealistic"
    }
  }
}
```

## Futuristic Techwear Portrait Transformation Prompt

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "Ultra-detailed futuristic portrait of a man (same proportions and facial structure as the reference), standing confidently in a modern studio. The scene feels cinematic and minimal, with a dark background that gently fades into shadow so all attention stays on him. He is wearing cyber-inspired streetwear: a sleek tech-fabric jacket with subtle neon seams, modular panels, lightweight hood, and discreet utility pockets — paired with fitted techwear pants and minimal sneakers. The outfit feels stylish, futuristic, and urban, clearly different from the original wardrobe. His posture is relaxed but confident, natural expression, charismatic presence. Camera framing: waist-up to full-body, shallow depth of field, subject in sharp focus with softly blurred background. Lighting: soft key light plus faint rim light, cinematic contrast, no harsh reflections. Color palette: cool futuristic tones, slightly desaturated, high-detail textures in fabrics and skin. Visual style: editorial fashion studio portrait, photorealistic, high resolution, 50–85mm lens feel, f/2.0 depth, clean balanced composition, film-quality grade.",
  "negative_prompt": "same outfit as reference, leather jacket, casual layered jacket, clutter, props, busy background, distortion, cartoon style, extra people, glossy reflections, plastic-looking textures, unrealistic lighting, oversaturated colors",
  "settings": {
    "aspect_ratio": "2:3",
    "quality": "high",
    "version": "5",
    "style": "cinematic",
    "focus": "subject",
    "depth_of_field": "shallow"
  }
}
```

## Ultra-Realistic Commercial Food Photography Prompt (Biscuits)

> Fotogerçekçi, sinematik yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic {argument name="biscuit name" default="[BISCUIT NAME]"} biscuits stacked dynamically in mid-air, slightly broken to reveal rich texture, creamy filling / buttery layers visible, dramatic milk splash forming artistic curves around the biscuits, soft biscuit crumbs suspended in air, glossy milk droplets frozen in motion, dark studio gradient background, cinematic professional lighting, macro food photography, ultra-sharp focus, high contrast, premium luxury commercial advertisement style, dramatic splash effect, hyper-detailed textures, photorealistic, 8K ultra-high resolution
Aspect ratio 3:4
```

## Minimalist Color-Blocked High-Fashion Portrait

> Minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "render_goal": "High-fashion minimal portrait",
  "subject": {
    "pose": "female standing between contrasting panels",
    "expression": "subtle smile, strong presence"
  },
  "wardrobe": "{argument name="wardrobe colors" default="clean color-blocked outfit in two bold tones"}",
  "environment": {
    "location": "graphic studio setup",
    "props": "flat color walls, even lighting"
  }
}
```

## Cinematic Urban Night Fashion Editorial

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"Objective": "Create an ultra-realistic cinematic full-body fashion editorial portrait with a luxury lifestyle mood set in a modern urban night environment.",

"Subject": "Stylish young adult woman with an elegant, athletic build",

"Hair": "Long, sleek jet-black hair, perfectly straight and glossy, tucked behind her ears",
"Makeup": "High-fashion aesthetic, sharp winged eyeliner, {argument name="lipstick color" default="bold red matte lipstick"}",
"Expression": "Stoic, confident, looking directly at the camera with a piercing gaze",
"Eyewear": "Black-tinted oversized designer sunglasses resting on the bridge of her nose"
},
"Pose_and_Body_Language": {
"Position": "Leaning elegantly against the polished side of a luxury sports car",
"Hand_Action": "One hand lightly touching the car's roof, the other holding a designer clutch bag",
"Posture": "Relaxed but commanding presence, one leg slightly crossed over the other"
}
},
"Environment_and_Lighting": {
"Setting": "A high-end metropolitan street at night with wet pavement reflecting city lights",
"Lighting": "Cinematic teal and orange mood lighting, soft bokeh from distant neon signs, sharp rim lighting highlighting her silhouette"
}
```

## High-Contrast Sports Editorial Portrait with Grillz and Oakley

> Fotogerçekçi, stüdyo ışıklı portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "aspect_ratio": "4:5",
    "quality": "raw_photorealistic",
    "resolution": "8k",
    "camera": "Hasselblad H6D-100c",
    "lens": "Macro 80mm f/2.8",
    "style": "high-contrast sports editorial, detailed texture realism, backstage aesthetic, raw flash photography"
  },

  "scene": {
    "location": "athlete locker room",
    "environment": [
      "dark grey metal lockers with ventilation slats",
      "industrial background",
      "shallow depth of field but identifiable structure"
    ],
    "lighting": {
      "type": "direct flash with softbox",
      "direction": "front-top-right bias",
      "intensity": "high",
      "highlights": "strong specular highlights on forehead, nose tip, and cheekbones mimicking sweat/oil",
      "shadows": "deep contrast under the chin and nose",
      "reflections": "sharp studio light reflection in sunglasses lenses"
    }
  },

  "subject": {
    "identity_features": {
      "gender": "male",
      "ethnicity": "African American",
      "skin_texture": "hyper-realistic pore visibility, uneven skin tone, visible sebum shine (not plastic matte), razor bumps on neck, mole texture",
      "facial_structure": "strong jawline, high cheekbones, muscular neck"
    },

    "hair_and_grooming": {
      "hair_style": "tightly braided cornrows",
      "hair_texture": "visible scalp lines, natural frizz at hairline",
      "facial_hair": "groomed goatee and mustache, realistic coarse hair texture, distinct stubble on jaw"
    },

    "expression_and_pose": {
      "action": "pulling down lower lip with right index finger",
      "mouth": "teeth gritted/exposed to show {argument name="jewelry type" default="jewelry"}",
      "mood": "aggressive flex, confident, hype",
      "gaze": "eyes hidden behind glasses, face turned slightly to viewer's right"
    },

    "accessories_detailed": {
      "sunglasses": {
        "brand": "{argument name="sunglasses brand" default="Oakley"}",
        "model_type": "futuristic wrap-around shield / visor style",
        "frame_material": "matte silver / magnesium finish",
        "lens_color": "deep fiery orange to red gradient",
        "branding": "distinct 'OAKLEY' logo embossed on the brow bar",
        "details": "small 'BE INSPIRED' text visible on lower lens corner"
      },
      "grillz": {
        "type": "bonded tooth gems / individual diamond studs",
        "placement": "embedded on lower front teeth (incisors and canines)",
        "material": "round cut clear diamonds",
        "look": "sparkling, wet look from saliva (realistic, not metallic block)"
      },
      "earring": {
        "type": "diamond cross stud",
        "location": "right earlobe",
        "material": "silver setting with pave diamonds"
      },
      "necklace": {
        "type": "single row tennis chain",
        "material": "diamonds",
        "visibility": "peeking out from t-shirt collar"
      }
    },

    "outfit": {
      "outerwear": {
        "type": "track jacket / bomber",
        "color": ""
      }
    }
  }
}
```

## Editorial Portrait of Woman Reading on White Bed

> Fotogerçekçi, sinematik logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "A highly realistic editorial-style photograph of a young adult woman with fair porcelain skin and silver-grey hair tied in a loose high ponytail. She is lying on her stomach on a white bed, legs bent upward, calmly reading a small hardcover book. She wears a delicate cream-colored lace slip dress with thin straps. Her makeup is refined and cinematic, featuring soft smoky brown eyeshadow, defined eyebrows, and muted rose lipstick. Her expression is thoughtful and serene, eyes focused downward on the book. The setting is a minimalist bedroom with white bedding and a clean white background. Soft natural daylight, high-key lighting, smooth skin texture, sharp facial details, shallow depth of field, editorial fashion photography, ultra-realistic, 4K quality.",
  "negative_prompt": "low resolution, blurry, harsh shadows, exaggerated anatomy, cartoon, illustration, overexposed, underexposed, extra limbs, distorted face, plastic skin, watermark, text, logo",
  "style": "photorealistic",
  "camera": {
    "type": "DSLR",
    "lens": "85mm",
    "aperture": "f/1.8",
    "iso": 100,
    "shutter_speed": "1/200"
  },
  "lighting": "soft natural daylight, diffused, high-key",
  "composition": "horizontal, medium close-up, subject centered",
  "quality": "ultra high",
  "detail_level": "extreme realism"
}
```

## Luxury Korean Hanjeongsik Food Advertisement Prompt

> Retro, lüks yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Luxury Korean Hanjeongsik (full course meal) advertisement, SNS feed, 4:5 ratio.

LAYOUT: Centered (main dish as hero) + Orbital (banchan surrounding)
DIRECTION: Radial arrangement - side dishes orbiting main course at varying distances
BACKGROUND: Dark wood table with vintage texture, black lacquer tray, traditional Korean bojagi fabric accent, subtle gold leaf scattered

PRODUCT:
- Overhead shot
- Traditional ceramic vessels (onggi, baekja porcelain)
- Brass chopsticks and spoon

DYNAMIC: Steam rising from main dish (subtle), golden sparkle accents
TONE: Luxury dark - black/charcoal base with warm gold and traditional white porcelain contrast
STYLE: Luxury + Vintage hybrid, traditional Korean fine dining

TEXTURE DETAILS:
- Visible wood grain
- Aged lacquer patina
- Ceramic glaze variations
- Woven fabric texture

TYPOGRAPHY: Brand name in traditional calligraphy style, gold foil effect, Korean + English

CAMERA: Hasselblad X2D, 50mm f/3.5, overhead shot, warm tungsten + soft fill lighting

SIGNATURE: A stylish handwritten signature "Willy" elegantly placed at bottom right corner (small letters)

Style keywords: hanjeongsik, Korean full course, banchan arrangement, traditional luxury, heritage dining. A stylish handwritten signature Willy is elegantly and small letters placed at the Bottom Right corner
```

## High-Fashion Editorial with Newspaper Dress

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic 8K high-fashion editorial photograph of a young woman with fair skin and long wavy chestnut-brown hair, softly parted with a loose strand falling near her face. She has an oval face, gentle jawline, subtle closed-mouth smile, natural pink lips, minimal editorial makeup, and calm expressive eyes.

She is standing in a relaxed pose with her head slightly tilted, shoulders soft, both arms lowered, and hands gently clasped together in front of her thighs. The posture is elegant, composed, and fashion-editorial in nature.

She is wearing a strapless mini dress constructed entirely from layered newspaper pages. The dress features origami-style folds, overlapping pleats, diagonal wrap construction across the torso, and visible printed headlines and grayscale imagery. All newspaper edges are artistically burnt, with dark charred borders and subtle glowing orange embers along the torn paper edges.

Accessories include a delicate gold chain necklace with a small circular pendant and a thin gold bracelet. Jewelry is minimal and understated.

The setting is an indoor studio or upscale interior with dark wall panels, subtle ornate detailing, and a partially visible deep burgundy upholstered chair behind her. Background is softly blurred.

Lighting is soft and diffused with warm-neutral tones, gently highlighting facial features, skin texture, and the burnt paper edges. Shot at eye level with a medium-full body framing. Ultra-sharp focus on subject, cinematic depth of field, hyper-realistic textures, editorial fashion photography style.
```

## Cinematic Winter Beach Photoshoot

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic cinematic photoshoot of a girl (same look as reference), standing on a cold winter beach. Soft golden winter light, lightly overcast sky, natural tones. She is wearing an attractive but not-too-heavy outfit — {argument name="outfit type" default="stylish coat or knit sweater"}, layered yet elegant, flowing hair. Subject is sharply in focus, eyes clear and expressive. Background is beach waves and horizon but fully blurred with shallow depth of field (bokeh). Composition centered, portrait framing, soft wind effect, subtle motion, professional lens, high detail skin, natural color grading, no harsh shadows, premium magazine style. 

Camera: 85mm, f/1.8, ISO 200, shallow DOF  
Lighting: soft diffused key light, gentle rim light  
Quality: 8k, high-detail, photorealistic, cinematic, crisp focus  
Mood: calm, cold, serene, confident pose  
No distortion, no busy background, no heavy clothing, no artifacts, no oversharpening
```

## Editorial Fashion Portrait in Indoor Garden

> Moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "render_goal": "Editorial fashion portrait",
  "subject": {
    "pose": "female standing confidently",
    "expression": "gentle confident smile"
  },
  "wardrobe": "{argument name="wardrobe style" default="tailored outfit integrated with leaf or branch-inspired elements"}",
  "environment": {
    "location": "indoor garden",
    "props": "natural light, soft greenery shadows"
  }
}
```

## Smart Prompt for High-End Editorial Fashion Triptych Campaign

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A high-end, hyper-realistic editorial fashion photography triptych campaign for brand: {argument name="brand name" default="[BRAND NAME]"}.

THE TASK:

Act as a world-class fashion photographer (e.g., Steven Meisel, Paolo Roversi, or Harley Weir) shooting a defining image campaign for {argument name="brand name" default="[BRAND NAME]"}. You must create a cohesive 3-panel editorial layout, stacked horizontally (top, middle, bottom panels). The focus is intensely on cinematic close-ups and textural details.

THE MUSE (AI AUTONOMY):

Analyze the deepest archetype, aesthetic, philosophy, and target audience lifestyle of {argument name="brand name" default="[BRAND NAME]"}. Based only on this analysis, autonomously generate the ultimate human muse for the brand. You determine their gender, age, unique ethnicity, striking features, and charismatic attitude. This person is not a model posing; they are the living embodiment of the brand's spirit.

THE TRIPTYCH NARRATIVE & COMPOSITION (HORIZONTAL STACK - CLOSE-UP FOCUS):

The three stacked panels must form a unified, intimate visual essay about the brand's essence, prioritizing tight framing.

Top Panel (The Intense Portrait): A cinematic, tight headshot focusing on the eyes and face. Intense, communicative gaze. Highlighting skin texture and emotion.

Middle Panel (The Gesture/Action): A tight crop focusing on a specific body part in motion or repose—hands clutching something, the curve of a neck, a mouth smoking a cigarette, posture. It conveys the character's attitude without showing the whole body.

Bottom Panel (The Ultimate Texture/Symbol): An extreme macro close-up. A detail of a unique garment fabric, a piece of jewelry, a symbolic prop relevant to the brand's lifestyle, or an abstract texture from their environment.

STYLING & BOLD CHOICES (CRITICAL):

Push boundaries. The styling must be avant-garde high fashion. Incorporate unexpected elements to create an "art-house" feel: weird accessories, juxtaposed garments, props, or even a touch of deliberate absurdity if it fits the brand's vibe. The image must feel raw, expensive, and tactile.

TECHNICAL AESTHETICS:

Hyper-realism: Strong film grain, highly detailed textures (pores, fabric weave), realistic depth of field.

Lighting: Bold, cinematic, and dramatic. Use chiaroscuro, colored gels, harsh sunlight, or moody shadows depending on the brand's DNA.

Color: A sophisticated, editorial color grading palette that is perfectly harmonious and relevant to {argument name="brand name" default="[BRAND NAME]"}.
```

## Editorial Urban Fashion Portrait Prompt

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": "Young adult woman, mid-20s, natural beauty with symmetrical facial features, smooth realistic skin texture, subtle freckles, expressive eyes, healthy complexion, well-groomed eyebrows, natural lips, realistic proportions, confident yet soft presence",
  "clothing": "Modern minimalist outfit consisting of a fitted neutral-tone knit top and high-waisted tailored trousers, premium fabric with visible weave texture, clean seams, realistic fabric drape, contemporary fashion styling suitable for editorial photography",
  "pose_and_action": "Standing in a relaxed three-quarter pose, weight shifted slightly to one leg, shoulders relaxed, head gently tilted, one hand resting casually at her side while the other lightly touches her hair, calm and confident body language",
  "environment": "Urban outdoor setting with a clean architectural background, soft concrete and glass elements, subtle depth in the background, uncluttered composition, modern city aesthetic without visible branding or signage",
  "lighting": "Soft natural daylight with diffused sunlight, gentle highlights on cheekbones and hair, balanced exposure, realistic skin tones, subtle rim light separating subject from background, no harsh shadows",
  "styling_and_mood": "Editorial, modern, confident, elegant, natural and authentic mood, understated sophistication, lifestyle fashion photography feel",
  "camera_specifications": "Full-frame DSLR camera, {argument name="lens focal length" default="85mm"} prime lens, aperture f/1.8 for shallow depth of field, ISO 100, shutter speed 1/200s, sharp focus on eyes with smooth background bokeh",
  "technical_modifiers": "8k resolution, ultra photorealistic, Nano Banana Pro Optimized, raw photo, masterpiece quality, high dynamic range, realistic skin detail, accurate color science, cinematic depth, professional photography",
  "negative_prompt": "anime, cartoon, illustration, fantasy, stylized, CGI, doll-like skin, over-smoothing, exaggerated features, distorted anatomy, extra limbs, blurry face, low resolution, harsh lighting, overexposed, underexposed, watermark, logo, text, noise artifacts",
  "generation_parameters": {
    "width": 1024,
    "height": 1536,
    "steps": 40,
    "cfg_scale": 7.5,
    "sampler_name": "DPM++ 2M",
    "scheduler": "karras",
    "denoising_strength": 0.35,
    "sd_model_checkpoint": "nano_banana_pro_photorealistic_v1"
  }
}
```

## Photorealistic Winter Portrait with Animated Character Interaction

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create an ultra-photorealistic winter outdoor portrait of a young brunette woman with straight dark hair, front bangs, and wearing stylish black rectangular glasses. She is with a soft heart-shaped face, warm skin tone, natural makeup with subtle blush and nude lips, and a friendly, gentle smile. The woman is dressed in a thick, cozy royal-blue winter coat made of plush or faux-fur material, with a large collar and long sleeves. She wears a knitted white beanie with a pom-pom on top. Her hands are raised and gently pressed against a glass surface, as if interacting with a small animated character on the other side. The character is a playful, cartoonish blue creature similar in style to {argument name="animated character reference" default="Stitch"}, wearing a tiny knitted sweater. It is standing on its hind legs, front paws pressed against the glass mirroring the woman's hands, looking at her with large expressive eyes and an adorable joyful expression. Background: softly blurred winter cityscape or storefront window, warm lights behind the glass, gentle snow falling all around, faint snowflakes on the glass, cozy and festive atmosphere. Reflections of warm light in the glass and subtle bokeh from distant lights enhance depth. Lighting: soft, diffused natural winter daylight, slightly warm backlight from behind the glass, subtle rim light on the woman's face and hair, creating a cozy, inviting mood. Composition: medium shot, from mid-thigh up, eye-level perspective, focus sharp on the woman's face and glasses, slight depth of field blur on background and animated character's surroundings.
```

## Glamorous Photo Prompt for Gemini Nano Banana Creation

> Sinematik, retro moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A glamorous, high-fashion portrait of a {argument name="subject" default="woman"} wearing a shimmering gown, dramatic lighting, deep shadows, cinematic color grading, shot on a vintage film camera, ultra-detailed, studio setting.
```

## Glamorous Makeup Mirror Reflection Editorial Shot Prompt

> Fotogerçekçi, lüks arayüz tasarımı üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-photoreal candid editorial shot of a makeup mirror reflecting a woman applying lipstick. The makeup mirror fills most of the frame, with realistic glass reflections, slight smudges, and mirror glare. Reflected in the mirror is a young woman with a glamorous look. She poses with a confident, seductive expression.

Environment: luxury hotel room with warm ambient lighting and subtle bokeh highlights. Composition: makeup mirror and makeup brushes are visible. Lighting: warm tungsten with soft fill; face tack sharp; background softly blurred. Camera feel: authentic candid shot, premium realism. The woman wears a silk robe and jewelry.

EXACTLY 1 person only (one woman). Perfect anatomy: hands/fingers, makeup brush grip, facial alignment correct; no extra limbs. Photoreal skin texture; no plastic smoothing. No extra people or faces in reflections.

Negative prompt: any readable text, brand names, logos, watermark, accurate real makeup mirror UI with readable labels, extra people or faces in reflections, identity drift, deformed hands, extra fingers, warped mirror geometry, cartoon, anime, CGI look, plastic or over-smoothed skin, low resolution, heavy noise, harsh blown highlights. A stylish handwritten signature Willy is elegantly and small letters placed at the Bottom Right corner
```

## Romantic Rose Dream Editorial Photograph

> Fotogerçekçi, lüks görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "project_title": "Romantic Rose Dream",
  "editorial_style": "Ultra-Realistic Luxury",
  "subject": {
    "reference_source": "user_uploaded_photo",
    "ethnicity": "Latina",
    "facial_features": {
      "preservation_status": "exact_match",
      "elements": ["eyes", "nose", "lips", "face_shape", "expression"],
      "alterations_allowed": false
    },
    "body_type": {
      "description": "Hourglass",
      "attributes": ["accentuated curves", "wide rounded hips", "thick thighs", "thin waist"]
    },
    "hair": {
      "color": "{argument name="hair color" default="Blonde"}",
      "length": "Very long",
      "texture": "Voluminous, slightly wavy"
    },
    "attire": {
      "garment": "Black dress",
      "material_fidelity": "High"
    },
    "pose": "Elegant, subtly seductive, kneeling on bed"
  },
  "environment": {
    "setting": "Dark, sophisticated room",
    "furniture": "Large white bed",
    "lighting": "Soft ambient lighting, natural shadows",
    "props": [
      {
        "item": "Large rose-material teddy bear",
        "color": "White",
        "detail": "Small red heart nose"
      },
      {
        "item": "Large round floral arrangement",
        "base_flower": "Deep dark red roses",
        "customization": {
          "text": "{argument name="floral text" default="javeriya"}",
          "text_material": "small white roses"
        }
      },
      {
        "item": "Floating metallic balloons",
        "color": "Red",
        "shape": ["Heart", "Round"]
      }
    ]
  },
  "technical_specifications": {
    "image_type": "High-end editorial photograph",
    "texture_detail": ["Visible skin pores", "Realistic fabrics"],
    "physics": ["Natural light physics", "True depth of field"],
    "quality_constraints": {
      "no_cgi": true,
      "no_illustration": true,
      "no_deformed_anatomy": true,
      "no_artificial_skin": true
    }
  }
}
```

## Gym Fitness Editorial Portrait

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "description": "Fit young woman posing in a gym",
    "pose": "Standing profile view, leaning forward with arms resting on the console of a treadmill. She is arching her back slightly to emphasize her physique, looking directly at the camera with a soft, serious expression.",
    "physique": "Curvy, athletic build, fair skin",
    "hair": {
      "color": "{argument name="hair color" default="Light brown with blonde highlights"}",
      "style": "Messy low bun with loose strands framing the face"
    },
    "details": "AirPods in ears"
  },
  "clothing": {
    "top": "White ribbed sports bra with thin straps and a cutout back design",
    "bottom": "Dark grey high-waisted gym leggings featuring a distinctive distressed/ripped ladder pattern running down the side of the thigh and glutes",
    "footwear": "White sneakers (Nike style)"
  },
  "environment": {
    "location": "Commercial gym cardio section",
    "background_details": [
      "Rows of grey treadmills and elliptical machines",
      "Industrial ceiling with white metal beams",
      "Other gym equipment visible in the blurred background"
    ]
  },
  "lighting": {
    "source": "Overhead gym lighting",
    "quality": "Bright, even, and diffuse, typical of a fitness center",
    "mood": "Casual, workout routine"
  },
  "camera": {
    "type": "Smartphone or Digital Camera",
    "angle": "Eye-level side profile shot",
    "focus": "Sharp focus on the subject"
  },
  "meta_tokens_for_photorealism": [
    "gym photoshoot",
    "fitness model",
    "distressed leggings",
    "treadmill pose",
    "workout aesthetic",
    "curvy fit",
    "gym interior",
    "lifestyle photography",
    "social media style"
  ],
  "style": {
    "aesthetic": "Fitness, Social Media, Baddie, Gymshark style",
    "vibe": "Focused, trendy, fit"
  }
}
```

## Dramatic Studio Portrait of Woman in Sequin Dress

> Fotogerçekçi, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
[Project Settings]
Title=Studio_Portrait_Sequin_Dress
Resolution_Width=1200
Resolution_Height=1200
AspectRatio=1:1

[Subject]
Description=Voluptuous Eurasian woman, half Korean half Italian
Body_Type=Curvaceous hourglass figure with ample proportions
Pose=Standing, subtly leaning against a wall, fingers interlaced behind her head, slight hip pop
Expression=Sultry, self-assured
Hair=Long, sleek raven black hair with subtle waves, cascading over one shoulder
[Facial Features]
Eyes=Seductive, smoky violet eyeshadow, upturned almond-shaped dark eyes
Lips=Glossy, full, berry-stained
Skin=Warm ivory tone, hyperrealistic pore detail

[Outfit]
Dress_Style=Deep-V halter dress
Material=Glistening {argument name="dress color" default="ruby red"} sequins
Fit=Tight and form-fitting
[Environment and Lighting]
Location=Dark studio
Lighting_Style=Dramatic, cool-toned
Highlights=Softly highlighted skin
Atmosphere=Sensual, intimate
[Rendering Quality]
Style=Fashion editorial photography, shot by {argument name="photographer style" default="Helmut Newton"}
Quality_Tags=Photorealistic lighting, 8K realism, hyperdetailed rendering
CAMERA: Hasselblad H6D, 85mm f/1.2, Rembrandt lighting. A stylish handwritten signature Willy is elegantly and small letters placed at the Bottom Right corner. A stylish handwritten signature Willy is elegantly and small letters placed at the Bottom Right corner
```

## Cinematic Street Style Identity Preservation Prompt

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_generation_prompt",
  "aspect_ratio": "9:16",
  "resolution": "1080x1920",
  "style": "cinematic, minimalistic, modern, classy street-style",
  "identity_preservation": {
    "use_reference_image": true,
    "strict_identity_lock": true,
    "alter_face": false,
    "notes": "The face must remain 100% identical to the uploaded reference image, with no changes to facial structure, proportions, expression, skin texture, or identity."
  },
  "subject": {
    "gender": "female",
    "pose": {
      "action": "walking forward confidently",
      "legs": "right leg stepping ahead, left leg slightly behind in a natural walking motion",
      "arms": {
        "left_hand": "swinging loosely by her side",
        "right_hand": "bent, lightly touching the edge of her pants pocket"
      },
      "head": "slightly tilted to the left",
      "gaze": "eyes softly directed downward"
    },
    "expression": "calm, confident, self-assured",
    "outfit": {
      "coat": "{argument name="coat color" default="pastel blue"} long coat with a structured, elegant fit",
      "top": "fitted pastel blue turtleneck",
      "trousers": "slim-cut, slightly cropped pastel blue trousers",
      "shoes": "clean white sneakers"
    }
  },
  "environment": {
    "location": "dark stone pavement",
    "mood": "refined, modern, confident",
    "style": "urban, minimal, elegant"
  },
  "lighting": {
    "type": "soft, warm lighting",
    "purpose": "enhance depth and texture of clothing and stone pavement",
    "effects": [
      "realistic shadows",
      "natural highlights",
      "cinematic depth"
    ]
  },
  "camera": {
    "angle": "eye-level",
    "position": "directly in front of the subject",
    "lens_simulation": "85mm portrait lens",
    "depth_of_field": "realistic with subtle foreground blur and bokeh",
    "compression": "cinematic"
  },
  "quality": {
    "realism": "ultra-photorealistic",
    "detail": "high detail in fabric texture, pavement, and skin",
    "artifacts": "none"
  },
  "constraints": [
    "No facial alteration",
    "No beautification or retouching",
    "No distortion or stylization",
    "Preserve natural proportions and realism"
  ],
  "output_goal": "Create a vertical, cinematic full-body portrait of a confident woman walking forward on dark stone pavement, wearing a pastel blue minimalist outfit, with soft warm lighting and an elegant, modern street-style aesthetic, while preserving her face with 100% accuracy from the reference image."
}
```

## Cinematic Urban Apocalypse Portrait Prompt

> Fotogerçekçi, sinematik ürün maketi (mockup) üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Cinematic, photorealistic portrait of a young man in dark streetwear, seated confidently in the center of a chaotic urban scene. The central figure wears a blank mockup dark puffer jacket (no logos or branding), with highly detailed fabric textures, stitching, and visible fibers. His rebellious expression engages directly with the camera, surrounded by a crowd of figures in the background. The scene depicts a fiery urban apocalypse, with meteors falling from the sky, creating a sense of impending doom. Soft backlighting highlights the central figure's face and shoulders, with deep shadows on the others. The background is dark with fiery explosions and blue undertones, while the crowd remains blurred to emphasize depth and focus on the subject. The lighting is high contrast with a gritty, dramatic effect. His skin texture is hyper-detailed, showcasing slight imperfections. The clothing (puffer jacket, gloves, rings) is detailed with natural fabric folds, realistic stitching, and thread patterns. Shot with a {argument name="lens focal length" default="50mm"} lens, shallow depth of field, cinematic lighting, RAW photo, 8k resolution, high contrast lighting, unprocessed, no logos, no text, realistic proportions, no Al deformations or glitches. Clothing: Ensure the puffer jacket and streetwear are designed as a blank mockup (without logos or branding), focusing on realistic fabric texture and stitching detail. Lighting & Mood: Soft backlighting with high contrast, emphasizing shadows and depth, creating a gritty urban vibe. Surrounding Elements: The chaotic, fiery urban apocalypse is part of the surreal fantasy, with the subject's figure in sharp focus and the crowd and background blurred for depth. Camera Details: Shot with a 50mm lens, shallow depth of field, ensuring sharp focus on the subject with a cinematic feel. Quality Settings: RAW photo, 8k resolution, high contrast, ensuring hyper-realism. Parameters:
```

## Aqua Green Elegance Fashion Image Prompt

> Moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_description": {
    "subject": {
      "gender": "female",
      "ethnicity": "caucasian",
      "hair": {
        "style": "long, voluminous, wavy, center-parted",
        "texture": "silky with soft curls at the ends"
      },
      "face": {
        "eyes": "hazel / light brown",
        "eyebrows": "well-defined, arched",
        "lips": "full, soft coral-pink matte lipstick",
        "cheeks": "subtle peach blush",
        "skin": "fair, smooth texture"
      },
      "pose": "standing, front-facing, direct eye contact, neutral-to-soft expression",
      "body_type": "curvy, hourglass figure"
    },
    "apparel": {
      "outerwear": {
        "item": "oversized blazer",
        "color": "{argument name="blazer color" default="mint green / pastel pistachio"}",
        "style": "draped over shoulders (caped), notch lapel"
      },
      "top": {
        "item": "corset bustier",
        "color": "{argument name="corset color" default="sage green"}",
        "pattern": "delicate white floral embroidery",
        "features": "structured boning, sweetheart neckline, pointed hem"
      },
      "bottom": {
        "item": "high-waisted jeans",
        "color": "light wash denim",
        "details": "slight distressing on the thigh, classic five-pocket styling"
      }
    },
    "setting": {
      "location": "modern urban interior/exterior transition",
      "background": {
        "elements": [
          "large glass windows",
          "city lights at night blurred in bokeh",
          "sleek architectural lines",
          "reflection on glass surfaces"
        ],
        "lighting": "soft indoor ambient light mixed with cool night-time outdoor lighting"
      }
    },
    "compositional_details": {
      "camera_angle": "eye-level, medium shot (waist-up)",
      "lighting_style": "glamour lighting, soft shadows, highlights on hair and shoulders",
      "color_palette": {
        "dominant_colors": ["pistachio green", "sage green", "denim blue"],
        "accent_colors": ["strawberry blonde", "warm peach", "cool city lights"]
      },
      "overall_vibe": "chic, modern, fashionable, sophisticated"
    }
  }
}
```

## Photorealistic Surreal Fashion Concept Portrait with Identity Lock

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photorealistic_surreal_fashion_concept_portrait",
      "version": "v3.2_MAGAZINE_FLIP_HAIR_ILLUSION_EDITORIAL_IDENTITY_LOCK",
      "priority": "highest"
    },
    "references": {
      "reference_image_1": {
        "source": "UPLOAD_REFERENCE_IMAGE (REQUIRED)",
        "purpose": "COMPOSITION_AND_PROP_CONCEPT_LOCK + IDENTITY_LOCK",
        "strict_identity_lock": true,
        "face_match_strength": "max",
        "no_identity_drift": true,
        "preserve_unique_features": true,
        "preserve_skin_tone": true,
        "preserve_skin_texture": true
      }
    },
    "output_settings": {
      "aspect_ratio": "4:5",
      "orientation": "portrait",
      "resolution": "ultra_high_res",
      "render_style": "ultra_photoreal_high_fashion_editorial",
      "sharpness": "crisp_but_natural",
      "film_grain": "none_or_minimal",
      "color_grade": "clean_editorial_neutral_luxury"
    },
    "creative_prompt": {
      "scene_summary": "ULTRA-PHOTOREAL HIGH-FASHION CONCEPT PORTRAIT — MUST MATCH THE UPLOADED REFERENCE IMAGE 100%.\
\
Recreate the exact same concept, pose, framing, and composition as the reference: a person stands indoors holding an open fashion magazine vertically in front of their face. The alignment is perfect so the printed model’s face in the magazine becomes the person’s face (illusion must be seamless). The printed hair continues upward into the top page as a long, clean, straight vertical hair strip, forming a surreal 'hair extension' column.\
\
IDENTITY REQUIREMENTS:\
- The person must be an exact, perfect match to the uploaded reference (no changes to facial structure, eyes, nose, lips, brows, proportions, ethnicity, age, skin tone).\
- Preserve all unique facial details and natural skin texture (pores, tiny imperfections). No beautification that changes identity.\
\
KEY ILLUSION DETAILS (MATCH REFERENCE):\
- Magazine open and held high with one hand above the head, pages extended vertically.\
- Printed beauty portrait shows pastel/lilac eye makeup and a neutral expression.\
- Hair strip: long vertical section with subtle gradient (darker near scalp, lighter at tips), clean and graphic.\
- Clothing: oversized textured knit sweater in warm autumn tones (rust/orange with subtle pattern), long cozy sleeves.\
- Paper realism: visible thickness, page curl, sharp edges, realistic print texture.\
\
ENVIRONMENT (MATCH REFERENCE):\
Minimal indoor background with soft daylight, neutral walls, subtle architectural/window lines. Clean, uncluttered.\
\
LIGHTING & REALISM:\
Soft natural daylight, realistic shadows from magazine onto sweater and background. Knit fabric and paper texture must be crisp. Must look like a real photograph, not CGI. Editorial, clever, art-school fashion concept."
    },
    "hard_constraints": [
      "Single person only (exact identity match to reference).",
      "Exact same"
    ]
  }
```

## Cinematic Tropical Travel Portrait with Identity Lock

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_data": {
    "title": "Cinematic Tropical Travel Portrait",
    "identity_instruction": {
      "mode": "STRICT IDENTITY LOCK",
      "directives": [
        "Preserve the face exactly as in the reference image.",
        "Do not change facial structure, proportions, expression, gaze, skin tone, or skin texture.",
        "No beautification, reshaping, or stylization of the face."
      ]
    },
    "subject_details": {
      "pose": "Standing in shallow water, looking back over shoulder toward camera. Elegant, balanced posture conveying ease.",
      "gesture": "Hands rest naturally near the tie sides of the bikini bottoms in a casual, graceful gesture.",
      "eyes_color": "light green",
      "expression": "Calm, confident, relaxed.",
      "hair": "jet black naturally down back, mostly straight with soft flowing waves toward ends, moving gently with sea breeze, douyin bangs",
      "accessories": "Slim, black rectangular glasses placed on top of head, catching subtle sunlight highlights.",
      "attire": "Minimalist {argument name="bikini color" default="pink"} string bikini with thin spaghetti straps and tie-side detailing. Realistic fabric texture."
    },
    "environment": {
      "setting": "Secluded tropical hidden cove.",
      "foreground": "Crystal-clear turquoise water with gentle ripples reflecting sunlight.",
      "background": "Dark coastal rocks and lush, overhanging jungle foliage with vibrant green vines."
    },
    "technical_specs": {
      "lighting": "Natural, bright daylight with soft sun-kissed highlights on skin and hair.",
      "camera": "35mm lens, medium-full shot, slightly low angle.",
      "aspect_ratio": "9:16"
      "focus": "Sharp focus on subject, subtle depth of field (softened background).",
      "style": "Cinematic realism, ultra-detailed textures, authentic travel photography, DSLR quality (not AI-polished)."
    },
    "negative_prompt": "Altered face, beautified features, exaggerated body proportions, sexualized posing, plastic or waxy skin, CGI, cartoon style, oversaturation, harsh HDR, distorted anatomy, extra limbs, watermark, text."
  }
}
```

## High-End Luxury Winter Fashion Campaign Prompt

> Fotogerçekçi, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "aspect_ratio": "2:3",
    "quality": "ultra_photorealistic",
    "resolution": "8k",
    "camera": "Hasselblad H6D-100c",
    "lens": "80mm prime",
    "style": "high-end luxury fashion campaign, Tony Kelly aesthetic, vibrant saturated colors, glossy magazine editorial, sharp focus"
  },

  "scene": {
    "location": "Alpine mountain summit",
    "environment": [
      "pristine snow-covered slopes",
      "jagged mountain peaks in background",
      "deep blue cloudless sky",
      "bright daylight"
    ],
    "time": "mid-day",
    "atmosphere": "exclusive, affluent, crisp winter air, energetic luxury"
  },

  "lighting": {
    "type": "direct hard sunlight",
    "key_light": "strong sun from upper right",
    "fill_light": "blue ambient reflection from snow",
    "contrast": "high contrast",
    "shadows": "sharp shadows on the horse's neck and subject's face",
    "effect": "glossy highlights on the horse's coat and subject's hair"
  },

  "camera_perspective": {
    "pov": "eye-level relative to rider",
    "framing": "medium shot, waist-up of rider, head and chest of horse",
    "focus": "sharp focus on subject face and horse head, background mountains slightly compressed",
    "angle": "straight on, capturing the height of the rider"
  },

  "subjects": {
    "rider": {
      "gender": "male",
      "age": "30s",
      "ethnicity": "Southern European / Italian",
      "appearance": {
        "skin": "deep tan, natural texture, visible pores, light stubble",
        "face": "chiseled jawline, confident stoic expression, looking slightly upward and away",
        "hair": "dark brown, medium length, wind-swept but styled, gelled back"
      },
      "pose": {
        "body": "sitting upright on horse",
        "hands": {
          "left_hand": "gloved, balancing skis on shoulder",
          "right_hand": "gloved, holding leather reins"
        },
        "head": "tilted slightly up, chin lifted"
      },
      "outfit": {
        "style": "apres-ski luxury",
        "coat": {
          "type": "double-breasted {argument name="coat color" default="white"} wool jacket",
          "details": "chunky ribbed knit collar, red inner lining visible at neck, black buttons",
          "texture": "heavy premium wool felt and knit"
        },
        "pants": "matching {argument name="pants color" default="white"} ski trousers",
        "gloves": "white leather driving gloves",
        "accessories": "red and black performance skis resting on left shoulder"
      }
    },
    "animal": {
      "type": "Horse",
      "breed": "Thoroughbred / Warmblood",
      "coat": "{argument name="horse coat color" default="Chestnut brown"}",
      "texture": "short shiny hair, realistic muscle definition, visible veins on nose",
      "tack": {
        "bridle": "brown leather with silver hardware",
        "details": "red decorative tassels/accents on the bridle",
        "reins": "braided leather"
      },
      "pose": "head facing forward, ears perked up, calm demeanor"
    }
  },

  "details": {
    "textures": [
```

## Photorealistic portrait of a stylish woman in a snowy landscape

> Fotogerçekçi, sinematik manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Photorealistic full-body portrait of a young stylish woman standing in a snowy winter landscape. She is wearing a monochromatic all-black outfit consisting of a premium ribbed knit sweater, fitted black trousers, and a long black cashmere scarf draped elegantly around her neck. She is wearing dark, oversized square-frame designer sunglasses and has long, dark hair blowing slightly in the wind. She is standing with a confident, relaxed posture with hands in her pockets. The background features a soft-focus, shallow depth of field (bokeh) view of a frozen lake and tall pine trees heavily covered in white snow. Soft, diffuse, cool winter lighting. High definition, 8k resolution, cinematic photography style.
```

## Hyper-realistic Floating Burger Commercial Shots

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "food_photography_series": {
    "subject": "Hot Burger",
    "technical_specs": {
      "style": "Hyper-realistic hero shot",
      "aspect_ratio": "3:4",
      "lighting": "Cinematic / Studio"
    },
    "variations": [
      {
        "theme": "Tartar Refresh",
        "sauce": "Thick tartar sauce",
        "accents": ["capers", "dill", "chopped pickles"],
        "background": "Bright lemon-yellow",
        "prompt": "Hyper-realistic hero shot of a hot burger in midair with thick tartar sauce bursting around it, flecks of capers, dill, and chopped pickles frozen in motion. The sauce flows like creamy waves, dancing around the juicy burger layers. Bright lemon-yellow background with moody studio backlight creates a gourmet, refreshing tone ultra-detailed commercial look, --ar 3:4"
      },
      {
        "theme": "White Truffle Luxury",
        "sauce": "Creamy white truffle sauce",
        "accents": ["shaved mushrooms", "fine porcini powder"],
        "background": "Warm yellow-beige with soft haze",
        "prompt": "Hyper-realistic hero shot of a luxurious hot burger floating in the center, surrounded by a splash of creamy white truffle sauce, with shaved mushrooms and fine powder of porcini dusting the motion. The toasted bun and juicy patty shine under cinematic key light, background in warm yellow-beige hues with soft haze premium gourmet commercial, --ar 3:4"
      },
      {
        "theme": "Smoked Cheese Indulgence",
        "sauce": "Molten smoked cheese fondue",
        "accents": ["golden crouton crumble"],
        "background": "Creamy yellow with taupe haze",
        "prompt": "Hyper-realistic hero shot of a hot burger surrounded by a molten splash of smoked cheese fondue mid-air, with bits of golden crouton crumble suspended in orbit. Deep lighting creates dimensional drama on the glossy bun and melted cheese layers. The backdrop blends creamy yellow with taupe haze indulgent cheese-forward visual, --ar 3:4"
      },
      {
        "theme": "Miso Umami",
        "sauce": "Miso butter glaze and umami cream",
        "accents": ["toasted seaweed powder", "sesame seeds"],
        "background": "Muted beige",
        "prompt": "Hyper-realistic hero shot of a rich hot burger hovering mid-air, glazed with miso butter and surrounded by a dynamic splash of umami cream, flecked with toasted seaweed powder and sesame seeds. Dramatic soft shadows sculpt the juicy patty and bun texture. Muted beige background, clean and warm umami-focused food ad, --ar 3:4"
      }
    ]
  }
}
```

## Ultra-Realistic Futuristic Cinematic Portrait

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic futuristic cinematic portrait of a man (same face and body as reference), standing confidently in a studio. 
Minimal, moody lighting with soft shadows, background dark and clean so all focus is on him. 
He wears a casual but futuristic outfit — {argument name="outfit description" default="sleek layered jacket, subtle tech-textures, modern fabrics, hidden seams, minimal accessories"}. 
The man is posing confidently, relaxed posture, natural expression, charismatic presence. 
Camera perspective: mid-shot to full-body, shallow depth of field, sharp focus on subject, background slightly blurred.
Lighting style: soft rim light + key light, cinematic contrast, no harsh reflections. 
Color tone: cool futuristic mood, slightly desaturated, high detail skin and fabric textures. 
Style: cinematic, photo-realistic, high resolution, studio photography, editorial fashion shoot, 85mm lens, f/1.8, HDR, film-grade color grading, clean composition.
--no clutter, no props, no busy background, no distortion, no cartoon look, no extra people
--ar 2:3 --v 5
```

## Ultra-Photoreal Volleyball Action Shot

> Fotogerçekçi görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "request_metadata": {
    "tool": "Nano Banana Pro",
    "task_type": "ultra_photoreal_sports_action_scene",
    "quality_preset": "ultra",
    "aspect_ratio": "2:3"
  },
  "references": {
    "main_reference_image": {
      "slot": 1,
      "purpose": "MAIN_SUBJECT_IDENTITY_AND_POSE_LOCK",
      "strict_identity_lock": true
    }
  },
  "hard_constraints": [
    "Single female athlete as the main subject.",
    "Indoor professional volleyball arena.",
    "Peak jump moment captured mid-air.",
    "No added text, no logos, no watermarks.",
    "Photorealistic sports photography only."
  ],
  "camera": {
    "camera_style": "professional sports photography",
    "lens": "85mm telephoto",
    "shutter_speed": "1/2000",
    "aperture": "f/2.8",
    "iso": "800",
    "focus": "tack sharp on athlete, background softly blurred"
  },
  "lighting": {
    "key_light": "bright indoor stadium lights",
    "fill_light": "even court illumination",
    "rim_light": "subtle edge highlights on arms and legs",
    "shadow_style": "natural high-contrast sports lighting"
  },
  "prompt": {
    "scene_summary": "A high-intensity women's volleyball match captured at the exact peak of an airborne play.",
    "main_subject": {
      "pose": "fully airborne with one arm extended upward toward the ball, opposite arm balanced for control",
      "expression": "focused, confident, competitive",
      "hair": "high ponytail flowing naturally due to motion",
      "outfit": "solid {argument name="jersey color" default="red"} sleeveless volleyball jersey and shorts, white knee pads, white athletic shoes",
      "body_language": "explosive jump, strong core engagement, extended legs"
    },
    "ball_interaction": {
      "object": "professional volleyball",
      "position": "floating above the athlete at the moment before contact",
      "motion": "perfectly frozen mid-air"
    },
    "environment": {
      "location": "indoor volleyball arena",
      "background": "crowded spectator stands with shallow depth of field",
      "court": "professional volleyball court with clean lines and referee stand visible",
      "atmosphere": "high-energy championship-level match"
    },
    "visual_style": {
      "realism": "ultra photorealistic",
      "detail_level": "visible muscle tension, fabric stretch, subtle sweat highlights",
      "color_grading": "natural broadcast sports tones with crisp contrast"
    },
    "composition": {
      "framing": "vertical action frame",
      "timing": "peak jump apex",
      "motion_effect": "sharp subject, minimal motion blur only in background crowd"
    }
  },
  "negative_prompt": [
    "cartoon",
    "anime",
    "cgi",
    "illustration",
    "plastic skin",
    "over-smoothing",
    "extra limbs",
    "distorted anatomy",
    "text overlays",
    "logos",
    "watermarks",
    "blurred subject"
  ]
}
```

## Ultra-Closeup Wet Reflection Couture Beauty Portrait

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "project_name": "Wet Reflection Couture Beauty",
  "identity_parameters": {
    "reference_source": "user_provided_image",
    "fidelity_level": "100% absolute identity preservation",
    "locked_features": [
      "face shape",
      "facial proportions",
      "skin tone",
      "eye shape",
      "nose structure",
      "lip contours",
      "expression"
    ]
  },
  "composition": {
    "shot_type": "Ultra-closeup",
    "framing": "Hyper-realistic beauty portrait",
    "pose": "Face tilted sideways, resting gently on water surface, lips softly touching the water",
    "interaction": "Intense direct eye contact with the viewer"
  },
  "styling_and_makeup": {
    "hair": "Wet blonde strands, falling loosely and naturally across the face",
    "eyes": "Metallic pink smoky eyeshadow, thick voluminous eyelashes, perfectly shaped brows",
    "lips": "Vivid high-shine glossy red",
    "skin_finish": "Ultra-realistic moisture sheen, visible water droplets, glowing complexion"
  },
  "technical_details": {
    "lighting": "Dramatic, cinematic, strong highlights, deep shadows",
    "visual_effects": "Glossy mirror-like water reflection",
    "texture_quality": "Razor-sharp focus, detailed pores, high-fashion editorial aesthetic",
    "mood": "Sensual, luxurious, high-impact"
  }
}
```

## Minimalist Urban Fashion Editorial Side Profile

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "Objective": "Create an ultra-realistic fashion editorial portrait with a minimalist urban aesthetic, emphasizing confidence, clean styling, and photorealistic detail.",
  "Persona_Details": {
    "Subject": "Stylish young adult woman",
    "View": "Side profile portrait",
    "Expression_and_Emotion": {
      "Expression": "Calm, confident",
      "Mood": "Composed, modern, self-assured"
    },
    "Appearance": {
      "Hair": "{argument name="hair style" default="Short, sleek bob haircut with clean lines"}",
      "Skin": "Natural, realistic skin texture with visible pores",
      "Makeup": "Minimal, editorial-appropriate"
    },
    "Gesture": {
      "Action": "Adjusting tortoiseshell sunglasses with one hand",
      "Body_Language": "Relaxed, intentional, fashion-forward"
    }
  },
  "Wardrobe_and_Accessories": {
    "Outerwear": "Black tailored blazer with sharp structure",
    "Top": "Beige turtleneck sweater",
    "Accessories": {
      "Eyewear": "Tortoiseshell sunglasses"
    },
    "Style": "Modern minimalist fashion"
  },
  "Scene_and_Environment": {
    "Location": "City street",
    "Background": {
      "Treatment": "Softly blurred urban environment",
      "Tones": "Neutral city colors with subtle texture",
      "Distraction_Level": "Minimal"
    },
    "Aesthetic": "Clean, contemporary, editorial"
  },
  "Lighting_and_Mood": {
    "Lighting": "Natural daylight",
    "Quality": "Soft, diffused with gentle shadows",
    "Contrast": "High contrast blacks balanced with soft highlights",
    "Mood": "Refined, understated, confident"
  },
  "Photography_Style": {
  }
}
```

## Ultra-Detailed Pose-Locked Beach Portrait

> Retro portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "target_aspect_ratio": "3:4",
    "mode": "strict_visual_replication",
    "version": "V3_ULTRA_POSE_LOCK",
    "fidelity_priority": "absolute"
  },
  "subject_description": {
    "demographics": "Female, tan skin complexion, dark brunette hair.",
    "hair_state": "Wet, stringy texture, loose waves, clinging to neck and shoulders, unstyled, parting visible.",
    "apparel": {
      "item": "Black string bikini set.",
      "top_detail": "Triangle cups, gold ring hardware connecting cups in center chest.",
      "bottom_detail": "Side-tie bottoms, shell bead ornaments on string ends, low rise.",
      "accessories": "Navel piercing (silver stud)."
    }
  },
  "pose_geometry": {
    "head_neck_complex": {
      "cervical_flexion": "High, head tilted significantly downward (~30 degrees).",
      "rotation": "Slight rotation to subject's right.",
      "chin_position": "Tucked close to clavicle, compressing neck skin.",
      "gaze": "Directed downwards towards chest/ground, eyelids lowered/closed."
    },
    "upper_appendages": {
      "shoulder_girdle": "Protracted (rolled forward), relaxed slope.",
      "humerus_position": "Extended backward (retro-flexed) behind the plane of the torso.",
      "elbow_flexion": "Bent, hidden behind torso/waist.",
      "forearm_wrist_hand": "Occluded behind back/buttocks.",
      "negative_space": "Triangular gaps visible between upper lateral ribs and inner upper arms."
    },
    "spine_pelvis_state": {
      "thoracic_curvature": "Slight kyphotic rounding (slouch) due to shoulder protraction.",
      "lumbar_curvature": "Natural lordosis, not hyperextended.",
      "pelvic_tilt": "Neutral to slight anterior tilt.",
      "torso_orientation": "Frontal to camera, slight distinct twist to subject's right."
    },
    "lower_appendages": {
      "femur_alignment": "Vertical, thighs slightly separated (thigh gap visible).",
      "weight_distribution": "Visually centered but relaxed, creating soft hip crease lines."
    }
  },
  "body_compression_and_surface_details": {
    "soft_tissue_behavior": "Breasts compressed naturally by gravity and swimwear tension. Stomach relaxed (not sucked in), soft definition around navel.",
    "skin_texture": "Wet skin sheen (specular highlights) on chest, shoulders, and forehead. Slight unevenness in tan. Natural skin folding at armpits.",
    "facial_expression": "Broad, genuine smile showing upper teeth. Cheeks lifted, nasolabial folds visible."
  },
  "environment_spatial_context": {
    "setting": "Tropical beach shoreline.",
    "ground_plane": "White sand, uneven surface, scattered organic debris (twigs, dried leaves), shallow footprints.",
    "background_elements": {
      "left_quadrant": "Large Casuarina/Pine tree trunk with needle-like foliage, partial shade.",
      "right_quadrant": "Wooden beach cabin on stilts, grey weathered wood, porch railing, dark "
    }
  }
```

## Ultra-photorealistic fashion editorial prompt for urban setting

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "overall_description": {
    "style": "Ultra-photorealistic fashion editorial",
    "mood": "Moody, cinematic, sensual, confident, urban elegance",
    "setting": "Urban city street with shallow depth of field and blurred traffic lights",
    "time_of_day": "Overcast late afternoon / early evening",
    "color_grading": "Muted earth tones, warm highlights, soft contrast, occasional black-and-white conversion",
    "visual_consistency_rule": "All frames depict the same subject, outfit, hairstyle, environment, pose variations, lighting conditions, and camera characteristics with no deviation"
  },
  "subject": {
    "gender": "Female",
    "age_range": "Mid 20s to early 30s",
    "skin_tone": "Light / fair with warm undertones",
    "face": {
      "features": "Defined cheekbones, full lips, sharp jawline, straight nose",
      "expression": "Calm, confident, slightly intense gaze",
      "makeup": "Natural glam makeup, subtle contour, nude lips, softly defined eyes"
    },
    "hair": {
      "color": "Dark brown",
      "length": "Long",
      "texture": "Voluminous, wavy, slightly tousled",
      "styling": "Loose, windswept, partially covering face in some frames"
    },
    "accessories": {
      "earrings": "Long dangling metallic earrings",
      "other": "No visible necklace or eyewear"
    }
  },
  "outfit": {
    "type": "One-piece jumpsuit or fitted dress",
    "color": "{argument name="outfit color" default="Matte black"}",
    "fit": "Tailored, form-fitting with structured waist",
    "details": {
      "neckline": "Deep V-neck",
      "sleeves": "Long sleeves",
      "belt": "Wide black belt with metal buckle"
    },
    "fabric": "Soft matte fabric with subtle texture"
  },
  "environment": {
    "location": "City street / sidewalk",
    "background_elements": [
      "Out-of-focus buildings",
      "Streetlights and traffic bokeh",
      "Orange traffic cones",
      "Wet or textured pavement"
    ],
    "depth_of_field": "Very shallow, strong background blur",
    "atmosphere": "Urban, slightly gritty yet elegant"
  },
  "lighting": {
    "type": "Natural ambient light",
    "direction": "Soft frontal and side lighting",
    "quality": "Diffused, cinematic",
    "highlights": "Soft highlights on cheekbones and hair",
    "shadows": "Gentle shadows adding facial depth"
  },
  "camera": {
    "camera_type": "Full-frame DSLR or mirrorless",
    "lens": "{argument name="lens" default="85mm prime lens"}",
    "aperture": "{argument name="aperture" default="f/1.8"}",
    "iso": "Low to medium ISO",
    "shutter_speed": "Fast enough to freeze motion",
    "focus": "Sharp focus on subject, background heavily blurred",
    "aspect_ratio": "Vertical portrait (2:3)"
  },
  "poses_and_frames": {
    "frame_1": {
      "composition": "Close-up portrait",
      "angle": "Slightly above eye level",
      "pose": "Hand raised into hair, head slightly tilted",
      "expression": "Direct gaze, relaxed lips",
      "color_mode": "Black and white"
    },
    "frame_2": {
      "composition": "Mid-lengt"
```

## High-Fashion Cinematic Shot: Suit vs. Farmwear

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "Objective": "A high-fashion, cinematic shot of a stylish young man and a female farmer harvesting potatoes in a field.",
  "Subject": {
    "Gender": "Male and Female",
    "Age_Group": "Young Adults (25-30)",
    "Appearance": {
      "Eyes": "Bright, focused, and expressive",
      "Skin": {
        "Texture": "Smooth on the man, sun-kissed and slightly dusty on the woman",
        "Details": "Fine sweat beads, natural skin pores, realistic earth smudges on the female's cheeks",
        "Makeup": "Minimal and natural for the woman; clean-shaven and groomed for the man"
      },
      "Hair": {
        "Style": "Modern side-part for the man; messy ponytail under a hat for the woman",
        "Details": "Glossy finish for the man; stray strands blowing in the wind for the woman"
      },
      "Expression": "Joyful and collaborative, focused on the harvest"
    }
  },
  "Wardrobe": {
    "Clothing": "Man: {argument name="man's clothing" default="Tailored charcoal grey three-piece suit, silk tie, and leather boots"}. Woman: {argument name="woman's clothing" default="Denim overalls over a plaid shirt and a straw hat"}.",
    "Style": "High-fashion contrast between formal luxury and rustic workwear"
  },
  "Lighting": {
    "Type": "Golden Hour / Natural Sunlight",
    "Quality": [
      "Soft, warm glow hitting the subjects from the side",
      "Long shadows and high-contrast highlights on the soil"
    ]
  },
  "Camera_and_Technical": {
    "Camera_Style": "Professional DSLR Photography",
    "Lens": "35mm Wide Angle",
    "Aperture": "f/2.8",
    "Focus": "Sharp focus on the subjects and the potatoes in their hands",
    "Depth_of_Field": "Shallow, with a beautiful blurred green field in the background"
  },
  "Visual_Style": {
    "Aesthetic": "Cinematic Editorial / Vogue Farming",
    "Resolution": "8K Ultra-HD",
    "Color_Grading": {
      "Palette": [
        "Rich Earthy Browns",
        "Vibrant Greens",
        "Warm Golden Tones"
      ],
      "Style": "Vivid, high-saturation, and sharp texture"
    }
  }
}
```

## F1 Racing Portrait Prompt for Nano Banana Pro

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
      "edit_instructions": {
        "prompt": "A photorealistic cinematic portrait of a professional Formula 1 racer standing confidently beside a {argument name="car brand" default="Ferrari"} Formula 1 car. The subject is a young adult racer wearing an authentic red {argument name="suit color" default="Ferrari"} F1 racing suit with detailed sponsor patches, fitted gloves, and racing boots. Arms relaxed or lightly crossed, confident posture, calm focused expression. The {argument name="car brand" default="Ferrari"} F1 car is positioned slightly behind or beside the racer, angled for visual impact, with visible aerodynamic details, glossy red paint, and subtle reflections. Background set at a modern F1 paddock or pit lane environment with soft depth of field. Dramatic yet natural lighting with soft highlights and controlled shadows, high-end sports editorial photography style, sharp focus, ultra-realistic textures, detailed fabric stitching, carbon fiber surfaces, cinematic color grading, 8k resolution, professional motorsport portrait look.",
        "negative_prompt": "cartoon, illustration, anime, low resolution, blurry, distorted anatomy, exaggerated proportions, fake logos, incorrect branding, fantasy elements, oversaturated colors, plastic skin, artifacts"
      },
      "settings": {
        "strength": 0.7,
        "guidance_scale": 7.5,
        "preserve_character_consistency": true
      }
    }
```

## Stunning Glamour Photo Prompt for Gemini Nano Banana

> Sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Stunning glamour photo of a {argument name="subject" default="woman"} with {argument name="hair color" default="long black hair"}, wearing a {argument name="outfit" default="red evening gown"}, cinematic lighting, dramatic shadows, high detail, 8k, deep crimson and gold color palette, shot on a Hasselblad X1D II 50C
```

## Cinematic Winter Portrait Photoshoot Prompt

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
cinematic photoshoot of a girl, same as reference, standing in front of a tall forest tree on a warm winter day, natural soft golden light, shallow depth of field, background softly blurred, full focus on her face and outfit, she is posing candidly and confidently, wearing a very attractive elegant outfit that matches the forest scene, subtle movement in hair, realistic skin tones, warm color grading, high detail, DSLR look, 85mm lens, f1.8, professional fashion editorial style, ultra-realistic, high resolution, cinematic composition, minimal distractions, natural environment, mood warm and serene
```

## Editorial Ballet Flight Master Prompt

> Sinematik, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"project": "Master Prompt – Editorial Ballet Flight",
"version": "1.4",

"meta": {
"creative_role": "Generative AI Art Director + Cinematographer + Fine-Art Photographer",
"intent": "Create a high-end editorial image of a professional ballerina captured mid-air in a powerful, elegant flying movement, combining athletic grace with sculptural beauty",
"mood": [
"elevation",
"freedom",
"strength",
"elegance",
"timeless poise"
],
"aesthetic": [
"high-fashion editorial",
"classical ballet realism",
"cinematic fine art",
"museum-grade performance photography"
]
},

"frame": {
"aspect_ratio": "3:4",
"shot_type": "full body mid-air capture",
"camera_angle": "slightly low angle",
"composition": {
"subject_position": "centered, suspended in air",
"negative_space": "ample space around the figure",
"motion_freeze": "peak of jump, weightless moment",
"visual_focus": "body line and facial expression"
},
"depth_of_field": "moderate, softly blurring the background"
},

"subject": {
"identity": {
"gender": "woman",
"age": 25,
"profession": "professional ballerina"
},
"body_type": {
"description": "beautiful, strong, feminine physique",
"note": "athletic and elegant, not overly thin, realistic ballet strength"
},
"pose": {
"movement_type": "grand jeté–inspired flying leap",
"legs": "extended with refined turnout and control",
"arms": "open and expressive, sculptural lines",
"torso": "lifted, powerful, elongated"
},
"expression": {
"facial_emotion": "confident, radiant calm",
"gaze": "directed toward the camera",
"mouth": "subtle, controlled smile"
}
},

"appearance": {
"skin": {
"tone": "natural, luminous",
"texture": "realistic with subtle highlights from stage lighting"
},
"hair": {
"style": "classical ballet bun",
"finish": "clean, disciplined, performance-perfect"
}
},

"wardrobe": {
"outfit": {
"type": "professional short ballet costume",
"design": "stage-authentic, elegant, and functional",
"bodice": "structured and supportive",
"skirt": "short classical tutu or short flowing ballet skirt",
"fabric": [
"tulle",
"satin"
],
"color": "deep black",
"movement_behavior": "fabric lifting and fanning naturally during the jump"
},
"tights": {
"type": "professional ballet tights",
"color": "off-white",
"fit": "flawless, seamless"
},
"footwear": {
"type": "pointe shoes",
"color": "off-white satin",
"details": "ribbons wrapped cleanly around ankles"
},
"accessories": {
"tiara": {
"design": "elegant stage tiara",
"materials": [
"crystal",
"ruby-styled gemstones"
],
"light_interaction": "subtle sparkle under stage lights"
}
}
},

"environment": {
"location": "real theater ballet stage",
"stage_design": {
"tones": "light, warm theater tones",
"surface": "wide, glossy, subtly reflective wooden stage",
"scale": "expansive professional theater stage",
"reflection_behavior": "soft reflections beneath the ballerina"
},
"background": {
"description": "authentic theater interior",
"focus": "gently blurred",
"details": [
"light-colo
```

## Miniature Tennis Court on Smartphone Screen

> Fotogerçekçi, sinematik 3B sahne üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_generation",
  "style": "ultra_realistic_cinematic",
  "aspect_ratio": "3:4",
  "resolution": "8K",
  "camera": {
    "model": "DSLR",
    "lens": "50mm",
    "angle": "dynamic slight tilt, courtside perspective",
    "depth_of_field": "shallow",
    "focus": "sharp on phone and players, soft background blur"
  },
  "scene": {
    "subject": "smartphone lying on a wooden table",
    "concept": "phone screen transformed into a professional tennis court",
    "court_surface": "pristine blue hardcourt with fine scratches and chalk marks",
    "players": "miniature tennis players serving, volleying, diving for shots",
    "scale": "realistic miniature proportions"
  },
  "lighting": {
    "type": "dramatic directional lighting",
    "source": "stadium-style lights from the side",
    "effect": "strong highlights and long shadows",
    "reflection": "soft reflection of floodlights on phone glass"
  },
  "details": {
    "phone_surface": [
      "visible fingerprints",
      "subtle smudges",
      "micro scratches on edges"
    ],
    "atmosphere": [
      "floating dust particles",
      "light haze for depth"
    ],
    "textures": "hyper-detailed court surface, realistic materials"
  },
  "environment": {
    "table": "natural wood with grain texture",
    "background": "softly blurred, cinematic indoor setting"
  },
  "color_grading": {
    "palette": "vibrant yet natural",
    "contrast": "high but balanced",
    "tone": "cinematic realism"
  },
  "aesthetic": {
    "mood": "dynamic, energetic, premium sports visual",
    "style": "high-end sports advertisement"
  },
  "render_quality": {
    "sharpness": "ultra-crisp",
    "detail_level": "extreme",
    "photorealism": "DSLR-grade realism"
  }
}
```

## 8-Photo Cinematic Storytelling Collage: Home to Gym Journey

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic 8-photo storytelling collage featuring the same girl throughout the journey. Frame 1: Early morning at home — the girl steps out of her house holding her bicycle, calm and motivated. Frame 2: She cycles through quiet streets, soft morning light, motion blur on wheels. Frame 3: Arrival at the gym — she parks the cycle outside the gym entrance, focused expression. Frame 4: Inside the gym — light warm-up stretches, gym equipment visible in background. Frame 5: Intense workout moment — lifting weights or using machines, sweat and effort visible. Frame 6: Post-workout relief — she drinks a protein shake, relaxed and satisfied. Frame 7: Leaving the gym — gym bag on shoulder, confident walk out. Frame 8: Cycling back home during golden hour, peaceful and accomplished mood. Consistent outfit progression (Gemini casual cycling wear to gym wear), realistic body movement, cinematic lighting, shallow depth of field, natural colors, lifestyle fitness photography style, editorial storytelling layout, ultra-realistic detail, 1:1 aspect ratio.
```

## Hyper-realistic close-up of a woman's face being 'maintained' by miniature aesthetic doctors

> Fotogerçekçi, minimal 3B sahne üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the same face from the reference image without changing facial features 
{
  "action": "generate_image",
  "parameters": {
    "subject": "A hyper-realistic close-up portrait of a beautiful woman's face being 'maintained' by three miniature female aesthetic doctors.",
    "composition": {
      "framing": "Extreme close-up, focusing on the eye, eyebrow, and cheek area.",
      "miniature_details": [
        "One miniature doctor stands on a silver step-ladder, carefully grooming the large woman's eyebrow with a tiny silver tool.",
        "Another miniature doctor stands below, pointing a precision tool toward the woman's cheek.",
        "The miniature figures are wearing white lab coats, pink surgical gloves, and have long dark hair."
      ],
      "main_subject_features": "Flawless skin texture, detailed green eye with sharp winged eyeliner, groomed eyebrows, and soft pink lipstick."
    },
    "style": {
      "aesthetic": "Surrealism meets high-end commercial beauty photography.",
      "lighting": "Soft, diffused studio lighting with a gentle glow on the skin and a catchlight in the eye.",
      "color_palette": "Clean whites, soft skin tones, vibrant pink accents from the gloves, and deep blacks in the hair and eyeliner."
    },
    "technical_specs": {
      "resolution": "8k",
      "depth_of_field": "Shallow, with the main face in sharp focus and a soft blurred background.",
      "texture_quality": "Hyper-detailed skin pores, individual eyebrow hairs, and fabric texture on the lab coats."
    }
  }
}
```

## Cinematic Biker Portrait with Edgy Street Style

> Sinematik, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Cinematic full-body portrait male biker confidently sitting on a black cruiser motorcycle, leaning forward with clasped hands. Attire: {argument name="attire details" default="dark sleeveless top, loose wide-leg denim pants, patterned white sneakers, minimal jewelry"}, edgy street style aesthetic. Urban cafe background visible through glass window with faint typography, city view slightly blurred. Moody teal-gray color grading, gritty textures, soft natural light, high-contrast shadows, rebellious attitude, 35mm film photography
```

## Moody Cinematic Portrait on Snowy Mountain Ridge

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "person": "A handsome young man with dark, styled hair and light stubble",
    "expression": "Serious and calm expression",
    "clothing": [
      "Black hooded puffer jacket",
      "Black crew-neck shirt",
      "Black slim-fit trousers",
      "Clean white leather sneakers"
    ],
    "pose": "Standing full-body, facing the camera, holding a small traditional wicker basket with both hands at waist level"
  },
  "setting": {
    "location": "High-altitude snowy mountain ridge",
    "background": "Layered misty mountains, pine forests visible through fog, rocky terrain",
    "foreground": "Patchy snow and dark earth on a cliff edge"
  },
  "atmosphere": {
    "weather": "Cold, foggy, overcast",
    "lighting": "Soft, diffused natural daylight with low contrast",
    "color_palette": "Monochromatic tones of black, white, and grey with a subtle pop of color from the basket"
  },
  "technical_details": {
    "composition": "Centered full-body portrait, eye-level angle",
    "camera_specs": "Shot on 35mm lens, f/2.8 for slight background blur (bokeh)",
    "style": "Cinematic photography, realistic, high detail, moody adventure aesthetic"
  },
  "objects": {
    "basket": "Small hand-woven wicker basket containing {argument name="basket contents" default="dark berries or coals"}, emitting a faint wisp of smoke or steam"
  }
}
```

## Cinematic Pink Blossom Couture Portrait

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "project": "Cinematic Pink Blossom Couture Portrait",
  "subject": {
    "identity": "Young woman",
    "features": {
      "skin_tone": "Fair",
      "hair": {
        "color": "Blonde",
        "style": "Long, softly wavy",
        "adornments": "Bright pink flowers"
      },
      "makeup": {
        "eyes": "Dramatic cat-eye eyeliner",
        "brows": "Well-defined"
      }
    }
  },
  "wardrobe": {
    "item": "Off-the-shoulder dress",
    "color": "{argument name="Dress Color" default="Vibrant pink"}",
    "material": "High-quality fabric with visible texture and natural folds"
  },
  "environment": {
    "lighting": {
      "type": "Natural sunlight",
      "effects": "Soft natural shadows, refined interplay of light and shadow"
    },
    "background": {
      "description": "Warm and neutral",
      "elements": ["Softly blurred curtain", "wall"]
    }
  },
  "technical_specifications": {
    "composition": {
      "framing": "Ultra-realistic glamorous close-up portrait",
      "depth_of_field": "Shallow (sharp focus on face, blurred background)",
      "aesthetic": "High-fashion editorial / Cinematic"
    },
    "rendering": {
      "resolution": "8K HDR ultra-detail",
      "fidelity_checks": [
        "Precise anatomy",
        "Visible skin pores and fibers",
        "Realistic glitter physics",
        "True lens depth"
      ],
      "negative_constraints": [
        "No illustration",
        "No CGI",
        "No plastic skin",
        "No AI smoothing",
        "No deformed hands",
        "No melted fabric"
      ]
    },
    "equipment_profile": "Photoreal DSLR"
  }
}
```

## Ultra-Photorealistic Fashion Editorial Prompt for Nano Banana Pro

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A high-end fashion editorial photograph captured in an ultra-photorealistic style using a Sony A7R V with a 50mm f/1.8 GM lens, characterized by sharp focus and tactile textures. The scene is set in a minimalist photo studio featuring a sterile, pure white cyclorama infinity wall background with no distractions. The subject is a slim but curvy female in her mid-20s with mixed heritage and light olive skin, slouching comfortably in a vintage, oversized deep black leather armchair that features a chunky club style, worn leather creases, and a natural oily sheen. Her pose is dynamic and flexible: her torso is reclined deep into the chair and angled slightly right, her left leg is bent at the knee resting casually on the seat, while her right leg is extended vertically straight up in the air at 90 degrees with pointed toes. Her right hand rests relaxed on her stomach, while her left hand is raised to her mouth where she is provocatively biting the side of her thumb with her mouth slightly open. She displays a seductive, bored-chic expression with intense direct eye contact. She wears retro-chic square glasses with dark tortoiseshell top rims and gold wire bottoms showing slight studio light reflections. Her hair is long, sleek, straight brunette with honey balayage highlights, tucked behind her ears with realistic silky strands. Her outfit is a monochromatic textural brown suit featuring an oversized, structured chocolate brown blazer made of a rough wool weave, worn loose and unbuttoned over a crisp pale icy blue button-up shirt that is unbuttoned low revealing her décolletage with cuffs peeking out. She wears matching skin-tight chocolate brown wool tights that resemble thick textured hosiery, paired with deep burgundy patent leather stiletto pumps with a very high heel and a glossy finish. The lighting is professional studio quality with a large high front-right softbox and white reflector fill, creating diffused, flattering illumination that highlights the coarse fuzz of the wool fabric and the smooth sheen of the leather chair, casting soft natural shadows underneath. The skin texture is highly realistic with visible natural pores and a slight shine on the forehead, strictly avoiding any airbrushed or plastic appearance.
```

## High-Contrast Documentary Photo Under a Brutalist Overpass

> Mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
High-contrast black-and-white documentary photograph, scanned from an analog film print/book at high resolution, with subtle film grain, faint dust specks, and slight print texture. A wide-angle or fisheye lens creates visible curvature in the elevated roadways as THE_SUBJECT from the uploaded reference photo stands centered in the lower-middle foreground beneath a massive brutalist concrete highway interchange in the United States. THE_SUBJECT’s appearance must match the reference image exactly with zero deviation—no changes to face, hair, clothing, accessories, body type, or expression. The camera is eye-level with deep focus, keeping THE_SUBJECT and distant background elements sharp. Towering reinforced-concrete piers and curving interstate overpasses dominate the upper frame, forming a strong V-shaped architectural canopy above THE_SUBJECT, emphasizing human scale against infrastructure. Overcast daytime skylight provides soft, diffused overhead lighting, while gritty high-contrast processing delivers rich blacks and controlled highlights. Rectangular U.S. speed-limit signs reading “{argument name="speed limit" default="SPEED LIMIT 55"}” are visible on the elevated roadways. The environment includes worn asphalt and concrete pavement with a slight damp sheen in the foreground, leafless trees in the distance, parked box trucks and utility vans, and older urban residential buildings in the far background. The overall mood is cold, industrial, and somber, with a stark, archival street-photography feel.
```

## Photorealistic Polaroid Couple Selfie with Christmas Bokeh

> Fotogerçekçi, retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "text_to_image_photoreal_polaroid_in_hand_christmas_bokeh",
      "version": "v1.0",
      "priority": "high"
    },
    "output_settings": {
      "aspect_ratio": "9:16",
      "orientation": "portrait",
      "resolution": "ultra_high_res",
      "render_style": "raw_photographic_realism",
      "sharpness": "foreground_sharp_background_soft",
      "film_grain": "subtle",
      "flash": "on"
    },
    "creative_prompt": {
      "scene_summary": "A realistic handheld flash photo in a cozy living room at night: a hand with glossy red French-tip nails holds a white instant-film Polaroid photo close to the camera. In the background, a decorated Christmas tree is heavily out of focus with warm golden fairy-light bokeh and red ornaments, creating a dreamy holiday glow. The Polaroid print itself is in focus and shows a cute couple selfie wearing matching red-and-white Christmas knit sweaters; their faces are softly lit like an instant camera flash, slightly imperfect and authentic (true instant-film look). The overall vibe is warm, nostalgic, and cozy.",
      "composition": {
        "framing": "close foreground focus on the Polaroid frame, hand visible at bottom-left holding it",
        "depth_of_field": "very shallow DOF; tree becomes large soft bokeh circles",
        "focus_priority": "Polaroid print + its white border tack-sharp; background strongly blurred"
      },
      "foreground_details": {
        "hand": "one hand holding the Polaroid by the bottom edge, glossy nude base nails with crisp red French tips",
        "polaroid": "classic white instant photo border, slight glare from flash, subtle paper texture, tiny imperfections like real instant film"
      },
      "polaroid_photo_content": {
        "subjects": "two young adults close together in a selfie pose, wearing red-and-white Nordic Christmas sweaters",
        "expressions": "natural casual selfie expressions, warm and slightly playful",
        "lighting": "direct on-camera flash look inside the Polaroid image, a bit softer and slightly lower resolution than the outer photo"
      },
      "background": {
        "christmas_tree": "large tree filling the background, warm white string lights, red ornaments and ribbons, heavy bokeh",
        "environment": "cozy indoor night ambience, soft warm tones"
      },
      "camera_notes": {
        "capture_style": "smartphone flash photo (iPhone vibe)",
        "lens_feel": "26mm equivalent, close focus",
        "exposure": "foreground properly exposed by flash; background darker but glowing bokeh"
      },
      "quality_rules": [
        "photorealistic",
        "natural skin texture (no plastic smoothing)",
        "realistic flash reflections and glare",
        "no watermark",
        "no extra text"
      ]
    },
    "negative_prompt": [
      "watermark",
      "lo"
    ]
  }
}
```

## Ultra-Photorealistic Volleyball Action Shot (Identity Lock)

> Fotogerçekçi görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "request_metadata": {
    "tool": "Nano Banana Pro",
    "task_type": "ultra_photoreal_sports_action_scene",
    "quality_preset": "ultra",
    "aspect_ratio": "2:3"
  },
  "references": {
    "main_reference_image": {
      "slot": 1,
      "purpose": "MAIN_SUBJECT_IDENTITY_AND_POSE_LOCK",
      "strict_identity_lock": true
    }
  },
  "hard_constraints": [
    "Single female athlete as the main subject.",
    "Indoor professional volleyball arena.",
    "Peak jump moment captured mid-air.",
    "No added text, no logos, no watermarks.",
    "Photorealistic sports photography only."
  ],
  "camera": {
    "camera_style": "professional sports photography",
    "lens": "85mm telephoto",
    "shutter_speed": "1/2000",
    "aperture": "f/2.8",
    "iso": "800",
    "focus": "tack sharp on athlete, background softly blurred"
  },
  "lighting": {
    "key_light": "bright indoor stadium lights",
    "fill_light": "even court illumination",
    "rim_light": "subtle edge highlights on arms and legs",
    "shadow_style": "natural high-contrast sports lighting"
  },
  "prompt": {
    "scene_summary": "A high-intensity women's volleyball match captured at the exact peak of an airborne play.",
    "main_subject": {
      "pose": "fully airborne with one arm extended upward toward the ball, opposite arm balanced for control",
      "expression": "focused, confident, competitive",
      "hair": "high ponytail flowing naturally due to motion",
      "outfit": "solid {argument name="jersey color" default="red"} sleeveless volleyball jersey and shorts, white knee pads, white athletic shoes",
      "body_language": "explosive jump, strong core engagement, extended legs"
    },
    "ball_interaction": {
      "object": "professional volleyball",
      "position": "floating above the athlete at the moment before contact",
      "motion": "perfectly frozen mid-air"
    },
    "environment": {
      "location": "indoor volleyball arena",
      "background": "crowded spectator stands with shallow depth of field",
      "court": "professional volleyball court with clean lines and referee stand visible",
      "atmosphere": "high-energy championship-level match"
    },
    "visual_style": {
      "realism": "ultra photorealistic",
      "detail_level": "visible muscle tension, fabric stretch, subtle sweat highlights",
      "color_grading": "natural broadcast sports tones with crisp contrast"
    },
    "composition": {
      "framing": "vertical action frame",
      "timing": "peak jump apex",
      "motion_effect": "sharp subject, minimal motion blur only in background crowd"
    }
  },
  "negative_prompt": [
    "cartoon",
    "anime",
    "cgi",
    "illustration",
    "plastic skin",
    "over-smoothing",
    "extra limbs",
    "distorted anatomy",
    "text overlays",
    "logos",
    "watermarks",
    "blurred subject"
  ]
}
```

## Ultra-photorealistic black and white fashion portrait prompt

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "aspect_ratio": "4:5",
    "quality": "ultra_photorealistic_editorial",
    "resolution": "8k",
    "camera": "Hasselblad H6D-100c",
    "lens": "85mm f/1.8 portrait lens",
    "style": "high-end black and white fashion photography, vogue aesthetic, authentic emotion, studio portrait"
  },
  "scene": {
    "location": "professional photography studio",
    "background": "pure high-key white seamless backdrop",
    "environment": [
      "minimalist studio setting",
      "no distractions",
      "clean negative space around head and hand"
    ],
    "atmosphere": "playful, charismatic, warm connection, chic"
  },
  "lighting": {
    "type": "studio beauty lighting",
    "setup": "large butterfly lighting (paramount) with reflector below, angled to catch hand gesture",
    "quality": "soft but contrasty black and white conversion",
    "highlights": "bright catchlights in eyes, soft sheen on forehead and cheeks, highlights on hand and fingers",
    "shadows": "deep rich blacks in clothing and hair, subtle sculpting under jawline and around fingers",
    "contrast": "high dynamic range monochrome"
  },
  "camera_perspective": {
    "framing": "close-up head and shoulder shot, including hand gesture",
    "angle": "eye-level, directly facing camera",
    "focus": "razor sharp focus on eyes, lips, and hand",
    "depth_of_field": "shallow, ears and neck slightly softer focus",
    "crop": "tight framing cutting off top of head slightly, magazine cover composition"
  },
  "subject": {
    "gender": "{argument name="gender" default="female"}",
    "age": "early 20s",
    "ethnicity": "Latina / mixed heritage appearance",
    "face": {
      "shape": "sculpted, heart-shaped with defined jawline",
      "skin": "ultra-realistic texture, NOT smooth or plastic, visible pores, prominent natural freckles scattered across nose and upper cheeks",
      "eyes": "large, dark, expressive, directly engaging the camera with a warm gaze, crinkled slightly with the action",
      "eyebrows": "natural, dark, well-groomed arch",
      "mouth": "pursed forward in a clear 'kissing' or 'duck face' expression",
      "expression": "playful, sending a kiss to the viewer"
    },
    "hair": {
      "color": "very dark brown / black",
      "style": "slicked back tight bun (not visible), severe pull-back",
      "texture": "sleek, wet-look styling, no flyaways, emphasizing facial structure"
    },
    "outfit": {
      "clothing_type": "high-neck turtleneck sweater",
      "color": "solid black",
      "material": "matte fabric (cotton or cashmere blend)",
      "fit": "snug around neck",
      "visibility": "only neck and shoulders visible"
    },
    "action": {
      "hand_gesture": "right hand brought up near the mouth",
      "hand_pose": "fingers casually curled, palm facing slightly forward, as if having just blown a kiss towards the camera",
      "fingernails": "visible, natural shape, clear or natural polish"
    },
    "makeup": {
```

## High-Fashion ELLE Magazine Cover Shot Prompt

> Retro, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{   "subject": {  "description": "A high-fashion magazine cover shot of a stunning blonde woman sitting on the hood of a vintage car.",     "mirror_rules": null,    "expression": {  "eyes": {  "look": "piercing, direct eye contact",   "energy": "confident, enigmatic, intense",  "direction": "looking straight at camera" },  "mouth": { "position": "slightly parted, relaxed",  "energy": "neutral yet alluring"       },    "overall": "sophisticated, bold, effortlessly chic"     },     "face": {  "preserve_original": true,  "makeup": "natural glam, sculpted cheekbones, subtle eyeliner, matte nude lip"     },   "hair": { "color":  natural,  "style": "sleek low side ponytail, deep side part, smooth texture",  "effect": "neatly styled"     },     "body": { "frame": "slender, high-fashion model physique",   "waist": "obscured by jacket",  "chest": "visible collarbones, skin exposure from bralette",  "legs": "crossed, bare, smooth skin texture, prominent placement",   "skin": {  "visible_areas": "face, neck, chest, legs",   "tone": "fair/pale", "texture": "high-resolution, realistic skin pores",  "lighting_effect": "sun-kissed, bright highlights"       }     },  "pose": {  "position": "sitting on a car hood",       "base": "legs crossed, one foot resting on car, one leg bent underneath",  "overall": "hand resting elegantly on chin/jawline, leaning slightly forward, commanding presence"     },     "clothing": {   "top": {  "type": "oversized blazer over a black bralette",   "color": "heather grey with black abstract/floral appliqué patches",   "details": "textured wool blend, structured shoulders, open front",   "effect": "tailored yet relaxed"       },       "bottom": {  "type": "no pants visible (pantless look)",         "color": "skin tone",   "details": "bare legs focus"   }     }   },   "accessories": { "jewelry": {   "type": "minimal or none visible",       "details": "focus on structure rather than bling"     },     "prop": {    "type": "vintage car",  "details": "gold or metallic bronze hood, shiny finish, classic muscle car aesthetic"     },     "footwear": {   "type": "strappy high heels",  "color": "black",       "details": "glossy finish, ankle straps"     }   },   "photography": {     "camera_style": "high-end editorial fashion photography, magazine cover style",     "angle": "eye-level or slightly low angle",     "shot_type": "full body medium shot, center weighted",     "aspect_ratio": "2:3",     "texture": "sharp focus on subject, glossy magazine print quality",     "lighting": "bright natural sunlight, hard daylight, strong contrast, distinct shadows",     "depth_of_field": "shallow, bokeh background"   },   "background": {  "setting": "outdoor driveway or garden",  "wall_color": "natural greens",     "elements": [  "blurred green trees",  "bright sky hints",  "vintage car hood surface"     ],  "atmosphere": "luxurious, sunny spring day",     "lighting": "dappled sunlight in background, direct sun on subje
```

## Nano Banana Pro Prompt for 3D Mascot and Fashion Model Interaction

> Moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "creation_intent": "{argument name="creation intent" default="Entertainment or Joke"}",
  "generation_logic": "Rule, structure, system driven",
  "subject_kit": {
    "primary_subject": "{argument name="subject" default="Fashion Model & 3D Mascot"}",
    "secondary_elements": [
      "Interactive pose",
      "Matching accessories",
      "Mascot props"
    ]
  },
"stage_context": "Retail shelf close-up",
  "lighting_rule": "Colored filter spotlight",
  "imaging_assumption": "Mixed commercial composite",
  "deliverable_type": "{argument name="deliverable type" default="Advertising main visual"}"
}
```

## Whimsical hyper-realistic cake illustration prompt

> Fotogerçekçi, minimal logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_prompt_structure": {
    "parameters": {
      "target_object": "{argument name="logo name" default="[LOGO]"}"
    },
    "subject": {
      "description": "Hyper-realistic digital illustration of a cake meticulously stylized to resemble a {argument name="logo name" default="[LOGO]"}",
      "placement": "Resting on a pristine white table",
      "state": "Partially bitten to reveal multiple delicious layers (sponge, frosting, crumbs)",
      "effect": "Shatter the illusion, capturing the moment of surprise"
    },
    "visual_details": {
      "interior": "Vibrant, playful palette for the cake layers",
      "exterior": "Object-mimicking realistic shell",
      "bite_mark": "Intricate details showing texture"
    },
    "composition": {
      "angle": "Slightly overhead to emphasize contrast between shell and interior",
      "lighting": "Soft, diffused lighting to enhance textures and cast subtle shadows",
      "background": "Minimal and bright"
    },
    "artistic_style": {
      "render_type": "Photorealistic",
      "mood": "Whimsical undertones",
      "aesthetic": "Visually convincing and appetizing"
    }

}
```

## Conceptual Frame: Absurd Specimen Jar Study

> Minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"creation_intent": "Entertainment or joke",
"generation_logic": "Instant narrative",
"subject_kit": {
"primary_subject": "{argument name="主要对象" default="Specimen jar"}",
"secondary_elements": [
"Cork seal",
"Turbid liquid",
"Handwritten label"
]
},
"core_tension": "Character vs. Archetype",
"twist_mechanisms": [
"Fragment mosaic",
"Clothing decomposition",
"Time fracture"
],
"stage_context": "Museum restoration workshop",
"composition_rule": "Typological sequence layout",
"lighting_rule": "Overcast soft light",
"imaging_assumption": "Minimalist object study",
"deliverable_type": "Concept frame",
"creative_directive": "Apply excessive formality to absurd things",
"oblique_strategy": "Minimalist constraint: Use only 3 elements"
}
```

## Stunning Glamorous Photo Prompt for Gemini Nano Banana

> Sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Stunning glamorous photo of a {argument name="subject" default="beautiful young woman"}, full body, wearing a {argument name="clothing" default="sparkling silver dress"}, standing in a {argument name="setting" default="luxurious art deco ballroom"}, dramatic lighting, high contrast, cinematic, professional photography, 8k, ultra detailed, shot on a {argument name="camera" default="Canon EOS R5"}
```

## Ultra-Photorealistic Group Portrait: New Year's Eve Party

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "Ultra Photorealistic Group Portrait",
  "subject_details": {
    "main_subjects": "Group of four young women celebrating",
    "subject_1_left": "Young woman with long dark wavy hair, wearing a beige/gold sleeveless sequin gown, smiling softly at the camera, silver drop earrings",
    "subject_2_center_left": "Young woman with brown hair tied back, wearing a bright {argument name="dress color" default="red"} lace dress with halter neck, one arm raised high in excitement, laughing with head tilted back, large gold hoop earrings",
    "subject_3_center_right": "Young woman with dark hair, close to the group, eyes closed in a happy expression, leaning affectionately onto the woman in red",
    "subject_4_right": "Young woman with long platinum blonde wavy hair, wearing a gold sequin backless dress, looking back over her shoulder at the camera with a sultry expression, small tattoo visible on her mid-back",
    "skin_texture": "High fidelity skin texture, visible pores, realistic makeup finish, slight sheen from flash"
  },
  "fashion_and_styling": {
    "clothing_style": "Glamorous nightlife attire, New Year's Eve party style, sequins, lace, backless cuts",
    "accessories": "Hoop earrings, gold bangles, minimalist jewelry",
    "makeup": "Evening glam, highlighted cheekbones, glossy lips, defined brows"
  },
  "environment_and_background": {
    "setting": "Outdoor rooftop terrace at night overlooking a city",
    "background_elements": "Dark night sky illuminated by bright red fireworks exploding in the distance, blurred city lights (bokeh) on the horizon",
    "atmosphere": "Festive, energetic, exclusive party vibe"
  },
  "lighting_and_atmosphere": {
    "lighting_style": "Direct on-camera flash photography (paparazzi style)",
    "ambient_light": "Red glow from fireworks casting a subtle tint on the sky",
    "contrast": "High contrast between the brightly lit subjects and the dark background",
    "shadows": "Sharp, realistic shadows created by the flash"
  },
  "camera_specifications": {
    "camera_model": "Sony A7R V or Phase One XF IQ4",
    "lens": "35mm wide-angle prime lens",
    "aperture": "f/2.8",
    "shutter_speed": "1/125s",
    "iso": "800",
    "focus": "Sharp focus on the faces, creamy bokeh in the background"
  },
  "technical_quality": {
    "resolution": "8k",
    "details": "Hyper-realistic, insane detail, volumetric lighting, ray tracing, unreal engine 5 render style features",
    "aspect_ratio": "3:4"
  }
}
```

## Photorealistic High-Fashion Portrait of a Woman on a Luxury Staircase

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_analysis": {
    "type": "Photorealistic Portrait",
    "style": "High-fashion, Elegant, Luxury aesthetic"
  },
  "subject": {
    "demographics": "Young woman, estimated early 20s",
    "physique": "Slim, fit figure with fair skinned tone",
    "hair": "Long, dark brown, sleek and straight with a center part, draping behind shoulders",
    "face": "Soft glam makeup, defined eyebrows, neutral to soft expression, looking slightly off-camera to the left"
  },
  "attire": {
    "garment": "{argument name="dress color" default="White"} off-the-shoulder mini dress",
    "material": "Satin or silk finish with a sheen",
    "design_details": [
      "Sweetheart neckline with a prominent bow tied at the center bust",
      "Ruched/corset-style fitted bodice",
      "Puffed, bubble-hem skirt (voluminous and short)",
      "Draped short sleeves resting on upper arms"
    ],
    "footwear": "Clear (transparent) strap high-heeled sandals showing white pedicure",
    "accessories": "Minimalist silver stud earrings, simple rings"
  },
  "pose": {
    "stance": "Standing on a staircase, weight shifted to the back leg, front leg stepped down and slightly forward",
    "arms": "Relaxed at sides, fingers gently grazing the hem of the bubble skirt",
    "angle": "Full-body shot, slightly low angle to accentuate leg length"
  },
  "environment": {
    "location": "Grand interior staircase within a luxury building or mansion",
    "architecture": [
      "Beige/Cream marble steps",
      "Ornate black wrought-iron railing with a polished wooden handrail on the left",
      "Classic white wall paneling and molding",
      "Black and white checkered marble flooring at the base"
    ],
    "decor": [
      "Framed oil painting hanging on the upper wall",
      "White plaster relief sculpture (draped fabric style) mounted on the wall directly behind the subject",
      "Red upholstered chair visible in the upper background"
    ]
  },
  "lighting_and_atmosphere": {
    "lighting": "Warm, soft indoor ambient lighting",
    "shadows": "Subtle shadows cast against the wall and stairs, highlighting the texture of the dress",
    "mood": "Sophisticated, chic, opulent"
  },
  "technical_specifications": {
    "quality": "4K Ultra HD, Photorealistic, Masterpiece",
    "resolution": "High definition, sharp focus",
    "texture_detail": "High fidelity fabric textures, skin texture, and marble reflections",
    "camera_settings": "DSLR, portrait focal length (e.g., 85mm), shallow depth of field background"
  }
}
```

## Campy High-Fashion Editorial at a Gas Station

> Lüks logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_description": {
    "subject_details": {
      "gender": "Female",
        "color": "Platinum blonde",
        "style": "Messy high ponytail or updo",
      "expression": "Model-like pout, looking directly at the camera",
     "skin_features": "light skin tone with freckles",
      "pose": "Standing profile-forward, leaning slightly towards the vehicle, holding a gas nozzle"
    },
    "outfit": {
      "dress": "Strapless, voluminous baby {argument name="dress color" default="pink"} gown entirely covered in feathers (ostrich style), high-low hemline (mini in front, floor-length train in back)",
      "legwear": "White, sheer floral lace patterned tights/stockings",
      "footwear": "Metallic silver pointed-toe stiletto heels",
      "accessories": "Large diamond drop earrings, delicate bracelets on both wrists"
    },
    "action": {
      "primary_activity": "Refueling a vehicle",
      "interaction": "Hand gripping the black handle of a gas pump nozzle inserted into the fuel tank"
    },
    "setting": {
      "location": "Gas station under a canopy",
      "time_of_day": "Night",
      "vehicle": "Black luxury SUV (resembling a Mercedes-Benz G-Wagon), glossy paint, chrome running boards/exhaust tips",
      "equipment": "Gas pump with blue and white branding (Chevron logo visible), digital price displays, green and black nozzle handles",
      "background": "Convenience store with illuminated interior visible through glass windows in the distance, dark night sky"
    },
    "aesthetic": {
      "style": "High-fashion editorial, glamorous, campy",
      "lighting": "Bright, cool-toned overhead artificial lights from the gas station canopy, creating highlights on the car and subject",
      "atmosphere": "Juxtaposition of high-end luxury fashion with a mundane everyday activity"
    }
  }
}
```

## Photorealistic Influencer Portrait Prompt

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_structure": {
    "type": "photorealistic_portrait",
    "style": "high_definition_influencer_photography",
    "aspect_ratio": "4:5",
    "lighting": "soft_natural_daylight_overcast"
  },
  "subjects": [
    {
      "id": "subject_1_seated",
      "position": "left_foreground_seated",
      "demographics": {
        "gender": "female",
        "age_appearance": "early_20s",
        "skin_tone": "medium_tan_warm_undertone",
        "skin_texture": "smooth_skin_slight_sheen"
      },
      "facial_features": {
        "face_shape": "soft_oval",
        "eyes": {
          "color": "{argument name="eye color 1" default="hazel_brown"}",
          "shape": "almond",
          "makeup": "winged_black_eyeliner"
        },
        "brows": "arched_groomed_brunette",
        "nose": "straight_bridge_soft_tip",
        "cheeks": "soft_contoured_rosy_blush",
        "lips": {
          "shape": "full",
          "color": "matte_rose_pink",
          "expression": "soft_closed_mouth_smile"
        }
      },
      "hair": {
        "color": "dark_brunette",
        "style": "long_straight_center_part"
      },
      "body_details": {
        "tattoos": [
          "large_rose_tattoo_left_outer_thigh",
          "small_script_tattoo_left_wrist",
          "small_script_tattoo_right_wrist"
        ],
        "manicure": "red_short_nails"
      },
      "attire": {
        "type": "bikini",
        "top": "black_strapless_bandeau",
        "bottom": "black_high_cut_metal_ring"
      },
      "pose": {
        "action": "sitting_in_captain_chair",
        "left_hand": "touching_hair",
        "right_hand": "on_steering_wheel",
        "posture": "relaxed_lean_back"
      }
    },
    {
      "id": "subject_2_standing",
      "position": "right_midground_standing",
      "demographics": {
        "gender": "female",
        "age_appearance": "early_20s",
        "skin_tone": "medium_tan_warm_undertone",
        "skin_texture": "smooth_matte_finish"
      },
      "facial_features": {
        "face_shape": "heart_shape_sharp_jawline",
        "eyes": {
          "color": "dark_brown",
          "shape": "large_upturned",
          "makeup": "natural_mascara"
        },
        "brows": "thin_arched_light_brown",
        "nose": "button_nose",
        "cheeks": "high_bronzed_cheekbones",
        "lips": {
          "shape": "pouty_plump",
          "color": "glossy_nude_pink",
          "expression": "serious_sultry_gaze"
        }
      },
      "hair": {
        "color": "light_brown_blonde_highlights",
        "style": "updo_bun_loose_tendrils"
      },
      "body_details": {
        "tattoos": [
          "small_triangle_tattoo_sternum"
        ],
        "piercings": "belly_button_ring"
      },
      "attire": {
        "type": "bikini",
        "fabric_texture": "ribbed",
        "color": "{argument name="bikini color 2" default="hot_pink_magenta"}",
        "top": "triangle_string",
        "bottom": "string_bottoms_high_hips"
      },
      "pose": {
        "action": "standing_leaning_seat_b"
      }
    }
  ]
}
```

## Scott Schuman Style Street Photography Portrait

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A Scott Schuman–style editorial portrait capturing a woman paused mid-walk on a city sidewalk, slight head turn, natural expression, fashion observed not staged, urban café background softly blurred, daylight realism, Vogue street minimalism. Ratio 3:4. Lens: 135mm f/2.8 zoom LUT: Portra Neutral Fade Harmony: charcoal, espresso, beige sRef: The Sartorialist Milan Tokens: authentic moment, non-performative fashion. Hidden Tokens: ultra-realistic, cinematic depth, editorial street photography, authentic fashion moment, professional color grading, subtle film grain, natural skin texture, timeless wardrobe, observational realism, zolo meta-realism optimized.
```

## Luxury Streetwear Instagram Feed Composite

> Lüks arayüz tasarımı üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Stunning Eurasian (Chinese/French) model, Instagram feed, 4:5 ratio.

LAYOUT: Irregular Grid (main image 60% of space, details filling remaining) + Layered (images overlapping for depth).

DIRECTION: Diagonal flow guiding eye from top left to bottom right.

BACKGROUND: Urban rooftop at sunset with blurred city lights, graffiti art accents, high-fashion editorial vibe.

PRODUCT: Worn shot – model showcasing silver high-top sneakers with pink accents, close-up detail shots of sneaker texture and design layered over main image.

DYNAMIC: Gold dust particles swirling around sneakers and model, fabric of dress floating dramatically, light rays catching the gold dust.

TONE: Color contrast – cool silver sneakers against warm sunset backdrop, pink accents popping against the urban gray.

STYLE: Luxury + Streetwear fusion. Model in {argument name="dress type" default="silk slip dress with lace trim"}, diamond jewelry, and messy high ponytail. Raw urban setting juxtaposed with high-end fashion elements.

UI ELEMENTS: None.

CAMERA: Hasselblad H6D, 85mm f/1.2, dramatic rim lighting with soft fill, composite shot.

Style keywords: streetwear meets luxury, unexpected elegance, golden hour glow, urban fairytale.. A stylish handwritten signature Willy is elegantly and small letters placed at the Bottom Right corner
```

## Surreal Macro Advertising Concept: Mascara Cleanup

> Fotogerçekçi, minimal 3B sahne üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "text_to_image_surreal_photoreal_concept_ad",
      "version": "v3.0_MASCARA_CLEANUP_CLIMBER_CONCEPT",
      "priority": "highest"
    },
    "output_settings": {
      "aspect_ratio": "2:3",
      "orientation": "portrait",
      "resolution": "ultra_high_res",
      "render_style": "ultra_photoreal_surreal_advertising",
      "sharpness": "macro_crisp_skin_texture",
      "film_grain": "none_or_minimal",
      "color_grade": "clean_editorial_true_to_life"
    },
    "creative_prompt": {
      "scene_summary": "Ultra-photoreal surreal concept advertising image: extreme macro close-up of a woman's face with eyes closed, showing a dramatic smudged black mascara/eyeshadow streak running down her cheek like a stain. A tiny rope-access window cleaner / climber is scaling her cheek as if it were a giant wall, actively scraping and cleaning the mascara stain with a small squeegee and brush.\
\
The mini climber is fully detailed and realistic: safety harness, ropes, carabiners, helmet ({argument name="climber helmet color" default="red"}), gloves, tool belt, and a small red bucket hanging from the harness. The ropes run vertically across the face, anchored out of frame, with believable tension and shadows. The climber’s scale is believable (miniature), with correct perspective and contact shadows on skin.\
\
Skin texture is hyper-realistic: pores, fine vellus hairs, subtle peach fuzz, natural highlights, and realistic makeup texture. The mascara smear has wet-to-dry texture variation with tiny flakes and glossy patches. The cleaner area shows a subtle 'wiped' path with different sheen, as if the stain is being removed.\
\
Lighting: soft daylight from one side, creating gentle shadows that reveal skin texture and the climber’s depth; no harsh flash. Background is out of frame; only the face fills the composition. Mood: clever, premium, modern beauty ad concept, minimal yet striking."
    },
    "composition": {
      "layout": "single frame macro close-up, face fills frame, climber placed on cheek near the smear",
      "framing": "eye, cheek, and partial lips visible; strong negative space avoided",
      "focus": "eyelashes, mascara smear, and climber tack sharp; slight falloff toward edges"
    },
    "lighting_and_camera": {
      "lighting": "soft directional daylight + gentle fill",
      "lens": "100mm macro look",
      "aperture": "f/8 (macro sharpness)",
      "iso": "100",
      "shutter": "1/160"
    },
    "hard_constraints": [
      "ONE face only (female), eyes closed",
      "photoreal macro skin texture (pores, fine hairs)",
      "dramatic smudged mascara streak on cheek",
      "ONE miniature rope-access climber cleaning the smear",
      "visible ropes, harness, carabiners, tools, red bucket",
      "correct perspective and contact shadows",
      "no text, no logos, no watermark",
      "no extra people"
    ],
    "negative_prompt": [
      "t"
    ]
  }
}
```

## Hyper-Realistic Urban Soccer Bicycle Kick Action Shot

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Subject and Action:
A hyper-realistic, high-shutter-speed action shot capturing a young male athlete frozen in mid-air executing a spectacular overhead bicycle kick. The subject is suspended horizontally, roughly 10 meters away from the goal, with his back turned to the net. His body is fully extended parallel to the concrete ground: his right leg is kicked high and straight to strike the ball, while his left leg is bent underneath for balance. His arms are thrown outwards dynamically. His expression is one of pure, intense focus, mouth slightly open, eyes tracking the ball.

Attire and Physical Details:
The player has a dark skin tone, glistening with realistic sweat beads under the harsh sunlight, and short, buzzed dark hair. He is wearing a loose-fitting, vintage-style bright {argument name="jersey color" default="yellow"} soccer jersey with distinctive green and red geometric patterns on the sleeves. He wears loose black athletic shorts and dark navy crew socks. A key detail is a dirty white medical bandage taped around his left knee. In the foreground, the sole of his left sneaker is highly visible, revealing a worn gum-colored tread pattern, while the right shoe is black with white accents.

Environment and Atmosphere:
The scene is set on a gritty, sun-drenched urban concrete soccer court. In the background, about 10 meters behind the player, stands a weathered, rusted red metal goal frame with torn white netting. Behind the goal is a textured brick wall covered in layers of faded urban graffiti and a tall chain-link fence revealing dense residential apartment buildings in the distance. A battered, peeling vintage leather soccer ball is suspended high in the top-left frame, frozen just before impact. The lighting is harsh midday sun, casting sharp, high-contrast dark shadows on the rough gray pavement beneath the floating player. The image has a raw, cinematic advertising aesthetic with sharp focus on the athlete and slight depth-of-field blur on the background.
```

## High-Contrast Japanese Beauty Portrait with Katana Pose

> Minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Composition & Spatial Design
•Vertical composition with the subject occupying approximately 60–70% of the frame height.
•Generous empty wall space on both left and right sides to create visual breathing room.
•Clean, minimal background to strongly emphasize facial features and eye contact.

Lighting & Shadow Style
•Strong natural sunlight with a side-backlighting bias, cool-toned, creating high-contrast light and shadow.
•Dense, hard-edged leaf shadows cast across both the wall and the subject, with extremely sharp edges and minimal penumbra.
•Large areas of overexposed highlights in the background while retaining faint texture, producing a glowing, radiant spatial feeling.

Subject – Facial & Physical Features (Japanese Beauty Reference)
•Young Japanese woman in her 20s.
•Porcelain-toned Japanese skin with a cool undertone.
•High-contrast K-pop idol–inspired makeup, glossy gradient lips.
•Sharp jawline with a refined V-shape face, high visual impact.
•Large, sharp fox-eyes with confident, cool, slightly teasing eye contact directed straight at the camera.
•Clean makeup with emphasized aegyosal.
•Long, straight black hair reaching the waist, with neat, straight Japanese bangs.

Clothing
•Short pure-white bandeau-style crop top exposing the waist.
•Form-fitting but not tight, clean and restrained.

Color System
•Base colors: cool white and neutral gray.
•Deep black used as a visual anchor.
•Almost no high-saturation accent colors; visual tension is created through contrast and material differences.
•Overall restrained, cool, and crisp color temperature.

Camera & Image Quality
•Camera positioned slightly below eye level, subtle low-angle view.
•Camera pulled back to allow a wider framing, keeping full arms and the sword clearly visible without touching frame edges.
•Background remains mostly in focus.
•Realistic rendering with moderate sharpness.
•Strong sense of frozen motion, no visible motion blur at the edges.
•Metal surfaces feature bright, crisp specular highlights and clear reflections, reinforcing a cold, sharp atmosphere.

Atmosphere & Narrative Tone
•Emotional tone: calm, detached, with a subtle sense of danger and ritualistic tension.
•A fleeting moment under intense afternoon sunlight, like a fragment carved by light.
•Realistic portrait photography combined with dramatic, stylized posture.
•Bright background presses inward while the subject is sculpted between shadow and highlight.
•Increased global contrast with lifted highlights.

Action & Katana Pose (RESTORED – DO NOT ALTER)
•Both arms raised and crossed above the head.
•Hands grip the katana handle lightly; fingers long and slightly extended.
•The katana is angled diagonally, starting near the head and extending down toward the lower right.
•The blade must NOT extend beyond the top edge of the frame.
•Head slightly tilted upward, chin subtly tucked.
•Eyes stare directly into the camera with a restrained, cold expre
```

## 8K UHD cinematic portrait prompt for a young European woman in Venice

> Sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "metadata": {
    "task": "image_analysis_to_generation_prompt",
    "resolution": "8K UHD",
    "orientation": "vertical portrait",
    "overall_mood": "warm cinematic natural realism"
  },
  "subject": {
    "identity": {"gender": "female", "age_appearance": "young European", "ethnicity_profile": "fair skin"},
    "anatomy_and_face": {
      "face_shape": "oval",
      "eyes": {"shape": "almond", "color": "green", "gaze": "direct"},
      "lips": {"fullness": "full", "color": "nude-pink", "expression": "slightly parted calm intense"},
      "makeup": "natural subtle"
    },
    "hair": {"color": "black", "length": "long straight", "style": "center-parted loose over shoulders"},
    "pose": {"body_position": "seated leaning forward", "head_position": "subtle tilt"}
  },
  "attire": {
    "outfit": "{argument name=\"outfit\" default=\"white form-fitting textured knit dress\"}",
    "cut": {"neckline": "deep V with central opening", "sleeves": "long"}
  },
  "scene_setup": {
    "lighting": {"source": "golden hour natural", "quality": "soft warm side-lit"},
    "environment": {"location": "{argument name=\"location\" default=\"Venice Italy\"}", "elements": ["canals", "gondolas", "fireworks", "new year"]}
  },
  "technical_specs": {
    "camera": {"framing": "medium close-up", "angle": "eye-level", "focus": "sharp on eyes/face"}, "optics": {"depth_of_field": "shallow creamy bokeh"}, "post_processing": {"color_grading": "warm golden", "finish": "preserved skin texture"}  
} 
}
```

## Japanese Shrine Omikuji Fortune Slip Vending Machine Snapshot

> Afiş üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Character Name:

A realistic snapshot of a person's hand lifting a single Omikuji (fortune slip) that has emerged from an "Omikuji Vending Machine" installed on the grounds of a Japanese shrine.

Composition:
・A natural snapshot composition, slightly from an elevated angle.
・The Omikuji is prominently displayed in the foreground, with the Omikuji machine itself visible in the background.
・The Omikuji machine has a poster displaying the character from the reference image.
・The background features a shrine atmosphere suitable for Hatsumode (first shrine visit of the New Year) (Torii gate, wood, Shimenawa rope, New Year's decorations), slightly arranged to match the world view of the reference image. People dressed for the New Year are also visible.
The character used for the Omikuji machine poster and the illustrations on the Omikuji slip must perfectly mimic the reference image.

◆ Character Name
・If not specified, automatically generate a Japanese-style character name with intense humor, based on the appearance, atmosphere, color scheme, and personality read from the reference image.

◆ Omikuji Paper (Texture)
・Has a fibrous texture like Washi paper, with clear creases from being folded.
・Slightly wrinkled, giving it an authentic texture.
・Each area is separated by a modern Japanese and stylish frame that reflects the characteristics of the reference character.
・Natural shadows cast by the fingers holding the paper, with a clear direction of the light source.

◆ Omikuji Title (Generated from reference image)
・Generate the title based on the personality, color, and world view of the reference image character.
・Printed largely at the top of the paper.
・The font is a Japanese logo style, but the color matches the tone of the reference image.

・Place small illustrations or icons of the reference image character in 2-3 locations on the Omikuji paper.

◆ Omikuji Content (Standard format)
・This year's fortune (must be randomly selected from Daikichi (Great Blessing) to Daikyo (Great Curse)) + 5-6 items printed in Japanese, heavily arranged to match the atmosphere of the reference image.
・Each item includes a fortune rating and a short comment of about 30 characters.
・The text should be in the style of a real Omikuji, humorously exaggerating the characteristics of the reference character.
・Item names should be freely arranged based on the reference character's personality.
・Insert illustrations of appropriate scenes for the reference character into a few distinctive items.

◆ Omikuji Machine (Background)
A large image is displayed. The image includes:
・The reference image character arranged in New Year's attire.
・The Omikuji name displayed prominently.
・Catchphrases, etc., freely extrapolated from the characteristics read from the reference image.
Display abundant text and characters. The font design should match the atmosphere of the reference image.
```

## Cozy New Year 2026 Winter Portrait

> Fotogerçekçi, minimal manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_generation_prompt",
  "output_goal": "Create an image closely matching the reference: a cute young woman lying on large snow-carved numbers '2026' in a snowy mountain environment, with clear facial visibility and natural charm.",
  "composition": {
    "shot_type": "medium-wide portrait",
    "camera": {
      "lens": "50mm",
      "aperture": "f/2.2",
      "focus": "sharp focus on the girl’s face and upper body",
      "depth_of_field": "moderate background blur"
    }
  },
  "subject": {
    "gender": "female",
    "appearance": {
      "face": "cute, soft facial features, natural proportions, expressive eyes, gentle blush, realistic skin texture, clearly visible and well-lit",
      "expression": "calm, relaxed, slightly playful"
    },
    "pose": {
      "position": "lying casually across the top of the snow number {argument name="year" default="2026"}",
      "details": "one arm supporting her head, legs stretched and slightly bent, relaxed body language"
    }
  },
  "wardrobe": {
    "outerwear": "white fluffy winter coat",
    "innerwear": "light grey or beige knit sweater",
    "bottom": "white fitted pants",
    "footwear": "black winter boots"
  },
  "environment": {
    "foreground": "large sculpted snow numbers reading {argument name="year" default="2026"} with smooth realistic snow texture",
    "background": "snow-covered mountain range with atmospheric depth",
    "ground": "clean untouched snow surface"
  },
  "lighting": {
    "time": "golden hour",
    "style": "soft warm sunlight illuminating the face and clothing",
    "shadows": "gentle natural shadows with snow reflections"
  },
  "style": {
    "look": "realistic winter photography",
    "color_tone": "cool whites balanced with warm sunrise hues",
    "mood": "cute, cozy, calm, aesthetically pleasing"
  },
  "quality": {
    "resolution": "ultra-high",
    "details": "sharp textures, natural colors, no over-smoothing, no exaggeration"
  }
}
```

## Hyper-realistic Extreme Close-up Portrait of a Young Woman

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_description": {
    "subject": "Extreme close-up portrait of a young woman with wet hair and intense blue eyes, as seen in the reference image.",
    "skin_texture": "Hyper-realistic, pale skin with visible pores, imperfections, and a dewy, moist sheen. The texture of the skin is highly detailed.",
    "eyes": "Piercing blue irises with detailed pupils and eyelashes. A clear catchlight is visible. The gaze is direct and captivating.",
    "hair": "Wet, tousled strands of light brown hair cling to her forehead, cheeks, and frame her face, creating a raw, natural look.",
    "lips": "Natural pink lips, slightly parted, with a soft, moist texture.",
    "expression": "Intense, slightly provocative, with a neutral yet alluring expression.",
  },
  "artistic_style": {
    "lighting": "Soft, diffused cinematic lighting, casting gentle shadows that define facial structures. The overall tone is cool and slightly muted.",
    "aesthetic": "Photorealistic, Raw photo quality, Cinematic, Masterpiece, 8k resolution, highly detailed texture rendering."
  },
  "camera_settings": {
    "lens": "85mm portrait lens",
    "shot_type": "Macro / Extreme Close-up",
    "aperture": "f/1.8 (shallow depth of field, focus sharp on the eyes and central face, blurring the hair and edges)",
    "focus": "Sharp focus on the eyes and skin texture around them."
  },
  "output_parameters": {
    "aspect_ratio": "9:16 (Vertical)",
    "quality": "High-fidelity, photorealistic rendering with meticulous attention to detail."
  }
}
```

## Hyper-Realistic Cinematic Football Stadium on a Smartphone Screen

> Fotogerçekçi, sinematik 3B sahne üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_generation",
  "style": "hyper_realistic",
  "quality": "8K DSLR",
  "aspect_ratio": "4:5",
  "camera": {
    "angle": "slightly tilted cinematic perspective",
    "lens": "50mm DSLR",
    "depth_of_field": "shallow",
    "focus": "smartphone and football action"
  },
  "scene": {
    "setting": "smartphone placed on a wooden table",
    "concept": "phone screen transformed into a miniature football stadium",
    "environment": "indoor, soft daylight coming from the side",
    "atmosphere": "cinematic, immersive, realistic"
  },
  "details": {
    "screen": "weathered green football pitch with visible wear, dirt patches, and grass texture",
    "players": "miniature football players actively playing a match with dynamic poses",
    "lighting": "soft diffused daylight with subtle lens flares and realistic reflections",
    "realism_effects": [
      "fingerprints on screen",
      "light scratches on phone body",
      "natural smudges",
      "micro dust particles"
    ]
  },
  "materials": {
    "phone": "metallic frame with realistic reflections",
    "table": "textured wooden surface with warm tones"
  },
  "mood": "high-end cinematic, dramatic, premium advertising look",
  "rendering": {
    "sharpness": "ultra sharp",
    "texture_detail": "extreme",
    "lighting_quality": "studio grade",
    "photorealism": true
  }
}
```

## 2026 Vision Board Collage: Feminine Empowerment and Luxury

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A captivating 2026 vision board collage, embodying feminine empowerment and financial independence, rendered in photorealistic style. The composition features a medley of alluring scenes, subtly integrating empowering affirmations written in elegant English script.

A central figure, a woman of Eurasian descent with a sultry gaze, appears throughout the collage, her identity consistently preserved with natural, flawless skin texture.

The vision board embodies themes of ambition, luxury travel, and self-assured success:

- A portrait: The woman in soft, golden-hour lighting, exuding calm confidence.
- A high-rise cityscape: A panoramic view of a modern metropolis at dusk, bathed in a warm, cinematic glow.
- An investment scene: A stylish office space with stock charts and financial documents, projecting an atmosphere of focused intensity.
- A luxury travel scene: Exotic locales – a private jet interior, a pristine beach – evoking a sense of freedom and indulgence.
- A wealth & abundance scene: Close-ups of luxury details – designer handbags, sparkling jewelry, elegant timepieces – showcasing refined taste.
- A gratitude & intention scene: A journal with handwritten affirmations in English ("{argument name="affirmation 1" default="I am a money magnet"}," "{argument name="affirmation 2" default="Limitless abundance"}," "I create my reality").

Visual Style:

- Soft, editorial lighting, diffused and flattering
- Warm, neutral color palette (beige, cream, champagne, soft gold)
- Film grain, gentle contrast
- Organic layout, artful arrangement of elements

Text Placement:

- English affirmations delicately layered onto photographs
- Modern sans-serif fonts, handwritten-style scripts
- Unconventional alignment, emotional and evocative
- Emphasis on clarity, confidence, and self-belief

Technical:

- Hyperrealistic detail, flawless skin texture
- No AI artifacts
- Vertical aspect ratio (16:9)
- Shot on Hasselblad H6D, 85mm f/1.4, shallow depth of field

Style keywords: quiet luxury, money manifestation, editorial, lifestyle, success, travel. A stylish handwritten signature Willy is elegantly and small letters placed at the Bottom Right corner
```

## Ultra-Realistic Golden Hour City Street Portrait (Face Lock)

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "Ultra-realistic cinematic portrait of the same young man from the reference image with 100% face accuracy. Standing outdoors on a city street during golden hour, warm sunlight illuminating from behind creating a soft rim light on hair and shoulders. Natural realistic masculine facial structure, thick textured hair brushed back with volume, short well-groomed beard and mustache. Wearing a dark {argument name="jacket color" default="forest-green"} leather biker jacket with silver zippers and metal buttons, plain black t-shirt inside, black fitted cargo pants. Dark rectangular sunglasses, confident posture with both hands casually in pockets. Background: shallow depth of field city street with warm bokeh, evening glow, modern urban feel. Ultra-sharp details, photorealistic skin texture, realistic leather material, fashion editorial look, 85mm lens depth, DSLR quality, 8K vertical composition."
}
```

## Cinematic low-key urban portrait prompt

> Sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{ "composition": { "framing": "medium close-up portrait", "camera_angle": "eye-level with slight upward emphasis from subject stance", "pose": "standing, one hand gripping coat lapel, shoulders squared", "cropping": "head to mid-torso with strong vertical orientation", "depth_of_field": "shallow; subject isolated against heavily blurred foreground and background", "balance": "subject centered with asymmetrical foreground occlusion", "leading_elements": "foreground blur creates visual funnel toward subject’s face" }, "color_palette": { "dominant_colors": ["deep black", "charcoal gray", "warm skin tones"], "accent_colors": ["soft amber highlights"], "color_temperature": "neutral to slightly warm", "saturation": "low to moderate, subdued cinematic palette", "contrast": "medium-high with strong separation between subject and background" }, "lighting": { "type": "low-key artificial lighting", "direction": "soft frontal light with slight side bias", "quality": "diffused, cinematic", "shadows": "pronounced but controlled shadows along jawline and coat folds", "highlights": "subtle highlights on forehead, cheekbones, and beard" }, "subject": { "count": 1, "gender_presentation": "{argument name="gender presentation" default="masculine-presenting"}", "age_range": "young adult to early middle-aged", "facial_features": "strong jawline, full trimmed beard, straight nose", "expression": "serious, contemplative, focused", "hair": { "style": "short, neatly groomed", "color": "dark brown" }, "eyes": "focused forward, intense gaze", "clothing": { "outerwear": "dark heavy coat with high collar", "inner_layer": "dark shirt or sweater", "style_notes": "minimalist, functional, urban winterwear" } }, "environment": { "setting": "urban nighttime exterior or dimly lit transitional space", "background_elements": ["soft light orbs", "indistinct architectural surfaces"], "foreground_elements": ["blurred silhouette partially obscuring frame"], "ambience": "moody, quiet, introspective" }, "technical_traits": { "camera_type": "digital camera or high-end smartphone", "focal_length_equivalent": "short telephoto portrait range", "aperture_effect": "strong subject-background separation with creamy bokeh", "sharpness": "high facial sharpness with intentional softness elsewhere", "noise_grain": "slight grain consistent with low-light conditions", "aspect_ratio": "portrait orientation, approximately 2:3" }, "artistic_elements": { "style": "cinematic portrait photography", "mood": "introspective, dramatic, restrained", "aesthetic": "modern noir, understated masculinity", "influences": ["cinema stills", "editorial fashion portrait", "urban night photography"] }, "typography": { "presence": "none", "notes": "no readable text present" }, "background": { "focus_level": "very soft focus with heavy blur", "color_tones": "dark grays and blacks with faint warm highlights", "function": "adds depth and emotional tone without competing for attention" } }
```

## Macro Realism: Miniature Taj Mahal on a Vintage Indian Coin

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_request": {
    "subject": {
      "base": "Vintage copper Indian Paisa coin",
      "orientation": "Reverse side",
      "main_structure": "Taj Mahal",
      "structure_style": "Extruded 3D miniature architecture, ivory-white detail"
    },
    "environment_details": {
      "micro_elements": [
        "Tiny scale-model tourists",
        "Miniature gardens",
        "Microscopic cypress trees",
        "Reflecting pools following the coin rim"
      ],
      "scale_reference": "Massive human fingertip pressing against the edge of the coin"
    },
    "technical_specs": {
      "lighting": "Soft sunrise lighting, warm glow on copper patina",
      "photography_style": "Macro photorealism, tilt-shift photography",
      "background": "Studio blurred background (bokeh)",
      "quality": "Cinematic miniature realism, ultra-fine textures, 8k resolution"
    }
  }
}
```

## Cinematic Fashion Portrait with Flowing Fabric

> Sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "render_goal": "Cinematic fashion portrait",
  "subject": {
    "pose": "female walking forward as fabric moves naturally",
    "expression": "soft confident smile"
  },
  "wardrobe": "lightweight layered outfit with flowing panels",
  "environment": {
    "location": "open architectural space",
    "props": "wind motion, cinematic light"
  }
}
```

## Editorial Fashion Shot: Woman in Newspaper Dress

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the same face from the reference image without changing facial features 
{
  "subject": {
    "description": "Young woman with soft, youthful features and long, wavy honey-blonde hair.",
    "pose": "Frontal view, hands raised to the sides of her head running through her hair, looking directly at the camera with a neutral expression.",
    "clothing": "A strapless, form-fitting dress constructed entirely from overlapping strips of newspaper with visible black text and headlines."
  },
  "environment": {
    "background": "A wall completely covered in layers of old newspaper pages, creating a monochromatic, text-heavy backdrop.",
    "atmosphere": "Studio-style fashion photography, editorial aesthetic."
  },
  "lighting_and_color": {
    "lighting": "Soft, diffused front lighting; even illumination with minimal harsh shadows, highlighting the texture of the paper and the smoothness of the skin.",
    "color_palette": "Muted and monochromatic tones of beige, cream, and grey from the newsprint, contrasted with warm, natural skin tones and blonde hair."
  },
  "technical_details": {
    "camera_settings": "Shot on 85mm lens, f/2.8, sharp focus on the eyes, shallow depth of field slightly softening the background texture.",
    "quality": "High resolution, 8k, photorealistic, cinematic texture, detailed paper grain."
  }
}
```

## Cinematic Winter Fashion Photoshoot Prompt for Nano Banana Pro

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "style": "cinematic, realistic, high resolution, multi-shot collage, 9-panel grid",
  "subject": "{argument name="subject description" default="young woman in her mid 20s, natural beauty, confident expression"}",
  "scene": "{argument name="scene description" default="snowy outdoor walkway, winter landscape, soft falling snow, cold weather atmosphere"}",
  "outfit": "stylish winter coat, wool scarf, gloves, fitted winter leggings, snow-boots, cozy hat",
  "action": "walking casually, holding a warm drink, adjusting coat, looking around, candid moments",
  "composition": "each panel shows different angles: front shot, side profile, back view, close-up face, mid-shot, walking action, hand details, over-the-shoulder view",
  "lighting": "soft natural daylight, lighting gently focused on her, subtle rim light, realistic shadows",
  "camera": "mix of 35mm and 85mm lenses, shallow depth of field, professional photography style",
  "mood": "calm, cinematic, lifestyle fashion photoshoot",
  "quality": "8k ultra detailed, sharp focus, clean background, photorealistic, minimal noise"
}
```

## Hyperrealistic Fashion Editorial with Animated Characters

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene_1_woody_buzz": {
    "prompt": "A hyperrealistic, editorial fashion photograph in a studio setting. A real human model with a natural, confident expression and a preserved face stands between giant, photorealistic 3D animated characters, Woody and Buzz Lightyear. The human wears a chunky knitted sweater in warm yellow and blue tones, high-waisted dark blue jeans, and clean white minimalist sneakers. Buzz Lightyear, rendered with incredible detail in his space ranger suit showing realistic plastic and scuff textures, poses heroically with hands on hips. Woody, slightly to the side, has a relaxed stance, tipping his hat with highly detailed fabric and leather textures on his cowboy attire. The background is a clean, split studio backdrop of sky blue and warm brown. Soft, professional studio lighting creates smooth shadows and highlights the contrasting textures of the knitwear, denim, plastic, and cloth, preserving their animated identity without distortion. 3/4 body framing, magazine-cover quality."
  },
  "scene_2_charizard": {
    "prompt": "A hyperrealistic, premium fashion photograph in a studio setting. A real human model with a confident, defiant expression and a preserved face stands next to a massive, imposing 3D animated Charizard, rendered in photorealistic quality. The human wears a dark charcoal knitted sweater, dark black jeans, and white sneakers, with their body slightly turned towards the camera in a strong pose. Charizard looms powerfully, with highly realistic leathery orange skin texture, formidable claws, and a detailed flame burning at the tip of its tail. The massive wings are partially folded. The background is a dark slate grey studio backdrop with subtle, warm orange light accents. Soft but contrast-rich studio lighting defines the massive forms and textures. 3/4 body framing, editorial aesthetic."
  },
  "scene_3_goku_vegeta": {
    "prompt": "A modern, urban, premium fashion photograph in a studio setting. A real human model with a cool, composed expression and a preserved face stands between near-human scale photorealistic 3D animated renders of Goku and Vegeta (base forms). The human wears a knitted sweater with distinct orange and deep blue accents, high-waisted dark jeans, and clean white sneakers. Goku stands casually with a confident, friendly smirk, showing realistic fabric textures on his Gi and defined musculature. Vegeta stands upright on the other side with arms crossed, a dominant silhouette, showing realistic armor plating texture and a stern expression. The background is a deep concrete grey studio backdrop with subtle golden-orange light accents. Soft studio lighting with defined rim light separates all figures. 3/4 framing, strong visual balance, modern editorial look."
  },
  "scene_4_puss_in_boots": {
    "prompt": "A relaxed, premium fashion portrait in a studio setting. A real human model with a confident, charming smile and a preserved face"
```

## High-Fashion Crimson Mini Dress Portrait in Museum Interior

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{Use the face without any change.
  "image_generation_prompt": {
    "subject": {
      "type": "Young woman",
      "hair": "Long, dark brunette, loose waves, parted in the middle",
      "pose": "Standing full-body, leaning backwards against a stone balustrade, one hand resting on the railing, legs crossed at the ankles, looking down/away candidly",
      "expression": "{argument name="expression" default="Neutral, elegant, contemplative"}"
    },
    "attire": {
      "dress": "{argument name="dress color" default="Deep crimson red"} satin mini dress, fit-and-flare silhouette, plunging V-neckline, spaghetti straps, tiered ruffled skirt",
      "shoes": "Dark plum or black pointed-toe high heels",
      "accessories": "Simple drop earrings"
    },
    "environment": {
      "setting": "Grand museum interior (Victorian/Classical architecture)",
      "foreground": "White stone balcony with a decorative balustrade (railing) featuring classic balusters",
      "background": "Large white architectural arches with detailed molding, an ornate Gothic Revival metal and gold choir screen visible in the distance",
      "flooring": "Parquet wood flooring"
    },
    "technical_specs": {
      "lighting": "Soft natural indoor light, diffuse and even, daylight ambience",
      "camera_angle": "Eye-level, full shot",
      "style": "High-fashion lifestyle photography, photorealistic, cinematic composition, crisp focus"
    }
  }
}
```

## Professional Food Poster Prompt for NanoBananaPro

> Fotogerçekçi, sinematik afiş üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A professional food poster, featuring a single {argument name="food item" default="banana"}, minimalist, clean, hyperdetailed, 8k, photorealistic, cinematic lighting, dark background, texture, soft shadows, high contrast, studio shot, {argument name="style" default="commercial photography"}
```

## Ultra-Professional Portrait with 'Praying Hands' Motif

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "positive_prompt": "Ultra-professional medium format studio portrait photograph, first person POV close-up upper body portrait, very petite short 18-year-old white girl standing directly in front of viewer, looking up with big sparkling light blue eyes pleading and begging desperately, praying hands / prayer hands with fingers tightly interlocked and crossed, clasped into fists, ten fingers visibly crossed and gripping each other firmly in front of chest, hands slightly raised partially covering chin and mouth, NO flat palms pressed together, playful shy coy smile with adorable giggling expression, praying hands / prayer hands with fingers interlocked and fists clasped position partially covering mouth, flawless smooth perfect youthful fair skin with microscopic natural pores and delicate warm subtle glow, cute delicate sweet face with soft rounded features, bright sparkling eyes, small straight nose, full soft lips, innocent charming aura, shimmering platinum-blonde hair in symmetrical high twin buns hairstyle (space buns, two high vertical neat buns pointing upward), large oversized round transparent pink-gradient tinted acetate glasses with soft pink sheen frame, hourglass figure with dramatically exaggerated voluptuous wide hips and above-average full bust, very short stature appearing tiny in frame, wearing inner white shirt with light gray vertical stripes (collar featuring small cute cartoon patterns), outer pink round-neck fine vertical stripe wool sweater (stripes are vertical), tight-fitting clothes hugging and accentuating exaggerated curves, soft natural diffused studio lighting with gentle highlights on skin hair glasses and fabric, perfect symmetrical centered composition, dreamy Wes Anderson inspired flat aesthetic, low saturation soft pastel color palette dominant pinks blues yellows, vintage analog sweet nostalgic mood, captured with Hasselblad H6D-400c multi-shot 400MP or Phase One XF IQ4 150MP medium format camera, extreme razor-sharp resolution, cinematic depth of field, 16-bit color depth, incredible dynamic range, hyper-detailed skin fabric hair and especially hand texture, masterpiece, ultra high quality, 8k",
  "negative_prompt": "blurry, lowres, noise, grain, artifacts, deformed anatomy, bad proportions, extra limbs, mutated hands, poorly drawn face, fused fingers, missing fingers, extra fingers, watermark, text, signature, overexposed, underexposed, harsh shadows, harsh lighting, heavy makeup, wrinkles, aged skin, freckles too many, jet black hair, dark hair, any hair color except platinum-blonde, low twin buns, low ponytails, down hairstyle, loose hair, different glasses, no glasses, asymmetrical buns, tilted buns, different hair color, hands flat together palms pressed without interlocked fingers, palms only pressed together, palms merged or joined flat, simple palm合十,"
}
```

## Luxurious New Year 2026 Portrait on a Snowy Mountain

> Fotogerçekçi, sinematik logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "A beautiful young woman with long, straight brown hair, fair skin, and subtle natural makeup, lying relaxed and elegantly atop massive snow-sculpted numbers spelling '{argument name="year" default="2026"}' on a high-altitude snowy mountain ridge during golden hour sunset. She is wearing a luxurious oversized white fluffy shearling coat with a thick fur collar, a soft gray cashmere turtleneck sweater, fitted white winter pants, and black leather ankle boots. Her pose is graceful, with one arm bent behind her head and the other resting gently on her stomach. She has a gentle, serene smile, and her eyes are softly gazing upward. In the background, a majestic panoramic view of snow-capped alpine mountains stretches into the distance. The sky is clear, transitioning from deep blue to a warm orange-pink sunset glow. Soft golden light illuminates the fresh, sparkling powder snow, creating a crisp cold winter atmosphere with a subtle lens flare. The overall mood is festive yet peaceful, celebrating the New Year. Ultra-photorealistic, intricate details, sharp focus, cinematic composition, professional photography, 8k resolution.",
  "negative_prompt": "blurry, low resolution, cartoon, illustration, painting, CGI, unrealistic anatomy, extra limbs, distorted face, overexposed, underexposed, harsh shadows, noisy image, watermark, logo, text artifacts, jpeg artifacts",
  "width": 1024,
  "height": 1024,
  "samples": 1,
  "style": "photorealistic",
  "quality": "high",
  "lighting": "golden hour cinematic lighting",
  "camera": "professional DSLR, shallow depth of field"
}
```

## High-Fashion Lifestyle Shot in a Grand Museum Interior

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_generation_prompt": {
    "subject": {
      "type": "Young woman",
      "hair": "Long, dark brunette, loose waves, parted in the middle",
      "pose": "Standing full-body, leaning backwards against a stone balustrade, one hand resting on the railing, legs crossed at the ankles, looking down/away candidly",
      "expression": "Neutral, elegant, contemplative"
    },
    "attire": {
      "dress": "Deep {argument name="dress color" default="crimson red"} satin mini dress, fit-and-flare silhouette, plunging V-neckline, spaghetti straps, tiered ruffled skirt",
      "shoes": "Dark plum or black pointed-toe high heels",
      "accessories": "Simple drop earrings"
    },
    "environment": {
      "setting": "Grand museum interior (Victorian/Classical architecture)",
      "foreground": "golden  stone king palace  with a decorative balustrade (railing) featuring classic balusters",
      "background": "Large marble architectural arches with detailed molding, an ornate Gothic Revival metal and gold choir screen visible in the distance",
      "flooring": "Parquet wood flooring"
    },
    "technical_specs": {
      "lighting": "Soft natural indoor light, diffuse and even, daylight ambience",
      "camera_angle": "Eye-level, full shot",
      "style": "High-fashion lifestyle photography, photorealistic, cinematic composition, crisp focus"
    }
  }
}
```

## Luxury Holiday Couple Editorial Portrait

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photorealistic_couple_holiday_editorial",
      "version": "v1.0_COUPLE_NYE_TREE_KISS_EDITORIAL",
      "priority": "highest"
    },
    "references": {
      "female_character_reference_image": "UPLOAD_FEMALE_REFERENCE (OPTIONAL: for identity lock)",
      "male_character_reference_image": "UPLOAD_MALE_REFERENCE (OPTIONAL: for identity lock)",
      "pose_reference_image": "UPLOAD_POSE_REFERENCE (OPTIONAL: use this image for same pose/framing)"
    },
    "output_settings": {
      "aspect_ratio": "2:3",
      "orientation": "portrait",
      "resolution": "ultra_high_res",
      "render_style": "ultra_photoreal_high_fashion_holiday_editorial",
      "sharpness": "crisp_but_natural",
      "film_grain": "none_or_minimal",
      "color_grade": "warm_luxury_true_to_life"
    },
    "hard_constraints": [
      "EXACTLY 2 people only: one woman and one man.",
      "If reference images are provided: perfect identity match (no face/body changes).",
      "Match the pose and framing: the couple hugging; the man kissing the woman’s cheek; the woman’s arms around his neck; close, intimate stance.",
      "No text, no logos, no watermarks.",
      "Perfect anatomy: hands/fingers/teeth correct; no extra limbs.",
      "Photoreal skin texture (no plastic smoothing).",
      "Luxury holiday vibe; no cheap party props; no neon club lighting."
    ],
    "creative_prompt": {
      "scene_summary": "Ultra-photoreal luxury holiday editorial portrait. A couple stands in front of a decorated Christmas tree with warm fairy lights and red ornaments. The woman wears a fitted elegant {argument name="woman's dress color" default="red"} dress (sleek, sophisticated; floor-length or fitted midi with a long red ribbon/scarf detail trailing down), glamorous makeup with classic red lipstick, soft bronzy blush, and defined brows; long glossy dark-to-warm brunette waves with volume. Her nails are painted red. She smiles subtly toward camera while the man kisses her cheek. The man wears a black suit with a white shirt and a red pocket square; groomed dark hair and a neat beard; one hand at her waist. Lighting: high-end editorial strobe + soft fill, warm ambient bokeh from tree lights, controlled shadows, cinematic but clean. Background: upscale indoor setting with a neutral wall, the Christmas tree positioned to the left, tasteful decorations, premium warm atmosphere. Camera: 85mm portrait look, shallow depth of field for creamy bokeh while keeping faces sharp."
    },
    "negative_prompt": [
      "any text, logo, watermark",
      "extra people",
      "blurred faces",
      "identity drift",
      "deformed hands, extra fingers, warped anatomy",
      "cartoon, anime, CGI look",
      "plastic skin, heavy smoothing, beauty blur",
      "overexposed highlights, harsh blown-out flash",
      "neon lighting, nightclub look",
      "messy background clutter",
      "duplicate limbs, double heads"
    ]
  }
}
```

## Ultra-Photoreal NYE Editorial with Identity Lock

> Fotogerçekçi, lüks moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photorealistic_single_image",
      "version": "v1.1_RED_SEQUIN_NYE_EDITORIAL_FEMALE_REF",
      "priority": "highest"
    },
    "references": {
      "female_character_reference_image": "UPLOAD_FEMALE_REFERENCE (REQUIRED)"
    },
    "output_settings": {
      "aspect_ratio": "2:3",
      "resolution": "ultra_high_res",
      "render_style": "ultra_photoreal_high_fashion_holiday_editorial"
    },
    "hard_constraints": [
      "ONE subject only, perfect identity match to the uploaded female reference (no face/body changes).",
      "No text, no logos, no watermarks.",
      "Perfect anatomy (hands/fingers/teeth), no extra limbs.",
      "Photoreal skin texture (no plastic smoothing).",
      "No extra people in background reflections or bokeh.",
      "Keep the pose and overall composition aligned with the reference: one hand holding a wine glass toward camera, confident festive stance."
    ],
    "creative_prompt": {
      "scene_summary": "Ultra-photoreal luxury NYE party editorial featuring the SAME woman as the uploaded reference. She wears a {argument name="dress color and material" default="red glitter sequin mini dress"} (thin straps, fitted silhouette) and a plush brown fur coat draped over her shoulders. She holds a glass of red wine toward the camera (foreground perspective), with a warm confident smile. Hair: dark, long, glossy waves worn down with soft volume; a large champagne/ivory bow hair accessory. Accessories: elegant sparkly drop earrings (or refined hoops), minimal high-end jewelry. Background: luxury holiday party atmosphere with a decorated Christmas tree and warm golden fairy-light bokeh, cozy upscale indoor setting. Lighting: high-end editorial flash + soft fill, crisp but flattering, realistic shadows, tack-sharp face and dress texture, cinematic festive warmth. Color grade: warm, premium, true-to-life."
    },
    "negative_prompt": [
      "any text, logo, watermark",
      "misshapen wine glass",
      "deformed hands, extra fingers, broken anatomy",
      "identity drift, different face, different body proportions",
      "cartoon, anime, CGI look",
      "plastic skin, over-smoothed skin, heavy beauty blur",
      "low resolution, motion blur, soft focus",
      "background people, faces in reflections, extra subjects",
      "cheap-looking props, neon club lighting",
      "dress not red sequins (avoid velvet/flat fabric)"
    ]
  }
}
```

## High-Fashion Editorial: Golden Hour Luxury

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "project_title": "High-Fashion Editorial: Golden Hour Luxury",
  "composition_settings": {
    "camera_angle": "Low-angle",
    "shot_type": "Waist-up / Tight framing",
    "composition_style": "Powerful, no negative space, full-frame immersion"
  },
  "subject_details": {
    "model_identity": {
      "preservation_rules": [
        "Maintain reference facial features",
        "Maintain reference hair color",
        "Maintain reference eye color"
      ],
      "complexion": "Ultra-polished skin texture, flawless finish"
    },
    "posing_and_attitude": {
      "posture": "Seated elegantly, calm yet dominant, effortless grace",
      "hand_position": "Single hand raised softly near the face, controlled editorial gesture",
      "vibe": "Refined sensuality, fashion-film attitude"
    },
    "styling": {
      "wardrobe": {
        "garment": "{argument name="garment type" default="slip dress"}",
        "material": "Luxurious fabric with visible couture tension",
        "silhouette": "Sculpted, high-precision tailoring"
      },
      "hair_design": {
        "style": "Long, voluminous, deliberately loose",
        "detail": "Soft strands falling across the face for intimacy"
      },
      "makeup": {
        "lashes": "Voluminous, dramatic, editorial-grade",
        "overall": "High-end studio polish"
      }
    }
  },
  "environment_and_props": {
    "location": "Minimalist high-end studio",
    "furniture": "Sculptural {argument name="furniture style" default="white teddy-style armchair"}",
    "background": "Unified minimalist backdrop integrated with lighting"
  },
  "lighting_and_aesthetics": {
    "primary_source": "Golden hour studio lighting",
    "lighting_style": "Cinematic Tom Ford-inspired",
    "tonality": {
      "palette": "Warm sunlit tones, rich highlights",
      "shadows": "Gentle, soft-focus transitions",
      "atmosphere": "Soft glow, expensive and timeless mood"
    },
    "post_processing": {
      "texture": "Subtle film grain",
      "clarity": "Ultra-sharp focal points on subject"
    }
  }
}
```

