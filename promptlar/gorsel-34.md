# Görsel — 34/38

`400 prompt`  ·  [← tüm kategoriler](../README.md#kategoriler)

---

## Close-up Portrait Prompt with Downward Gaze

> Minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
In a vertical composition defined by a 9:16 aspect ratio, the perspective gazes downward upon a scene of intimate proximity and striking visual harmony. The subject is a breathtaking, stunning young woman, appearing in the dewy freshness of her early twenties, supermodel face, whose upward gaze anchors the frame with mesmerizing elegance. Her skin radiates a porcelain fairness, smooth and luminous, contrasting starkly with the blonde, long spaghetti waves of hair that frame her face and the fringe that rests lightly upon her brow. Her features possess a flawless symmetry akin to high-fashion portraiture, characterized by high cheekbones and a delicate jawline. Her eyes are a piercing, translucent blue, profound in depth and accentuated by sharp, winged eyeliner and long lashes, while her big natural lips are full, red-hued, and relaxed in a soft pout.
One of her hand adorned with a simple diamond ring on the ring finger and red nails, gently cups her chin and jaw, tilting her face upward to meet the lens. She appears slender and lithe, her physique draped in a {argument name="dress color" default="white"} minidress that exposes her shoulders, arms and deep necklace. The background is a muted, out-of-focus surface of speckled grey concrete, ensuring that the viewer's attention remains fixed solely on the ethereal beauty and captivating expression of the subject. Super close up.
```

## High-Angle Editorial Street-Style Photo

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "title": "High-Angle Street-Style Portrait",
  "description": "Realistic high-angle photo of a stylish man on sunlit asphalt, shot from a balcony viewpoint in warm afternoon light.",
  "camera": {
    "angle": "high-angle from balcony",
    "lens": "35mm",
    "aperture": "f/4",
    "iso": 100,
    "shutter_speed": "1/500s",
    "lighting": "natural late-afternoon sunlight from upper left"
  },
  "composition": {
    "subject_position": "center-left, full body visible, negative space around",
    "extra_element": "cropped glossy black SUV with round headlight and chrome grille on right edge",
    "ground_details": "rough grey asphalt, faint tire marks, diagonal cobblestones, soft tree shadows"
  },
  "subject": {
    "gender": "male",
    "age": "young adult",
    "expression": "relaxed confident, looking up at camera",
    "clothing": {
      "cap": "brown baseball cap with white embroidered letters",
      "glasses": "black round sunglasses",
      "outerwear": "{argument name="jacket type" default="oversized brown leather jacket"} with tan stitching",
      "shirt": "white open-collar shirt",
      "vest": "black knit V-neck buttoned vest",
      "pants": "wide grey pleated trousers",
      "shoes": "white sneakers with dark toe detail"
    },
    "pose": {
      "left_hand": "holding a small white takeaway coffee cup",
      "right_hand": "touching the side of cap/sunglasses"
    }
  },
  "color_profile": {
    "tones": "warm cinematic browns and greys",
    "grade": "slightly desaturated with subtle film grain",
    "contrast": "moderate, crisp highlights and soft shadows"
  },
  "output": {
    "style": "ultra-realistic street photography",
    "resolution": "3:2 aspect ratio",
    "people": "single subject only",
    "text": "none"
  },
  "generation_prompt": "High-angle editorial street-style photograph of a stylish man standing on sunlit asphalt, seen from a balcony. Warm afternoon light, cinematic browns and greys, realistic textures, soft shadows, no extra people."
}
```

## Venetian Mask Portrait Prompt (Text Only)

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
What secrets are hidden behind the silver filigree of this mask, illuminated by dramatic Chiaroscuro lighting in a forgotten Venetian boudoir?
```

## Coffee Pouring Cinematic Artwork (Dual Monitor)

> Fotogerçekçi, sinematik illüstrasyon üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Hyper-realistic 8K cinematic artwork with two vertically stacked computer monitors (one on top of the other) on a wooden table. On the top monitor, a character (gender-flexible, face exactly as uploaded photo, same headpiece) wearing a casual navy blue outfit (gender-flexible style) pours steaming hot coffee from a French press without holding the cup. On the bottom monitor, the same character (gender-flexible, face exactly as uploaded photo, same headpiece) - now wearing a white shirt with a black jacket (gender-flexible style) - tilts his cup upward with a surprised expression as the coffee streams perfectly into it. Coffee steam visually rises across both monitors, uniting the two scenes. Warm cafe-style lighting and soft wood textures create a cozy atmosphere." Negative prompt: "blurry face, distorted proportions, duplicate body parts, mismatched accessories, mismatched gender traits, extra limbs, extra fingers, distorted anatomy, poor lighting, watermark, text, low resolution, unrealistic clothing folds, inconsistent head shape, character in top monitor holding a cup, wrong face, wrong hair, wrong head accessory." 3:4 ratio
```

## Photorealistic Portrait of a Woman with Tattoos and Striped Shorts

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "gender": "female",
    "hair": {
      "color": "light brown with blonde highlights",
      "style": "long, straight, center part",
      "length": "extending past shoulders"
    },
    "skin": {
      "tone": "fair",
      "texture": "smooth"
    },
    "eyes": {
      "makeup": "eyeliner, mascara",
      "gaze": "looking to the side, away from camera"
    },
    "pose": {
      "position": "reclining/sitting on a sofa",
      "body_orientation": "angled slightly",
      "hands": {
        "left_hand": "holding strap/top of bra",
        "right_hand": "holding strap/top of bra",
        "tattoos": {
          "right_hand_back": "small text/numbers including '{argument name="tattoo text" default="666"}' and stars",
          "right_wrist": "small symbol",
          "left_wrist": "small heart outline"
        }
      }
    },
    "accessories": {
      "jewelry": [
        "thin gold necklace",
        "gold ring on right ring finger",
        "navel piercing with barbell jewelry"
      ]
    }
  },
  "clothing": {
    "top": {
      "type": "bralette/crop top",
      "color": "{argument name="top color" default="white"}",
      "material": "cotton or jersey blend with lace",
      "details": "lace trim on bottom hem, ruched center bust, spaghetti straps"
    },
    "bottom": {
      "type": "shorts/boy shorts",
      "color": "red and white",
      "pattern": "horizontal stripes",
      "details": "small white bow at center waist, elastic waistband"
    }
  },
  "setting": {
    "location": "indoor",
    "furniture": "large beige/tan sofa or couch",
    "background_elements": [
      "coffee table books in upper right corner",
      "dark/black area behind sofa"
    ]
  },
  "lighting": {
    "type": "soft indoor lighting",
    "shadows": "soft shadows suggesting diffuse light source"
  }
}
```

## Gen Z Selfie in Purple LED Lighting

> Fotogerçekçi afiş üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_structure": {
    "subject_details": {
      "demographics": "Young female, fair skin tone, natural appearance with distinct freckles across nose and cheeks",
      "facial_features": "Soft facial structure, neutral to soft expression, gaze directed down at phone",
      "hair": "Long, dark brown, loose wavy texture, center part, draping over shoulders",
      "clothing": {
        "top": "Red crewneck holiday sweater featuring a large cartoon reindeer face",
        "bottom": "Plaid pajama shorts (only small section visible at upper thigh)"
      },
      "pose": "Sitting upright on a bed, body angled slightly to viewer's left. Both legs are bent sharply at the knees and drawn up tightly against the torso. The shins are prominent, and feet are tucked near the buttocks. Right hand holds a smartphone with a black case up in front of the body to take a selfie."
    },
    "environment_context": {
      "setting": "Gen Z bedroom / dorm room context",
      "background_elements": [
        "White floating shelves packed with diverse colorful books",
        "Anime posters on white walls ({argument name="anime poster" default="My Hero Academia"} clearly visible)",
        "LED strip lights running vertically along the wall corner",
        "Messy unmade bed with white textured duvet or blanket",
        "Crumpled red fleece throw blanket in background on bed"
      ]
    },
    "lighting_atmosphere": {
      "primary_source": "Dominant Purple/Violet LED ambient lighting originating from corner strip",
      "quality": "Dim, soft, moody, atmospheric, strong colored purple cast on skin, clothing, and surroundings",
      "shadows": "Soft, diffused shadows created by the ambient colored light"
    },
    "camera_technical": {
      "style": "Casual Smartphone Selfie, Candid shot",
      "simulation": "Smartphone Main Sensor Simulation",
      "angle": "Slightly low angle, looking slightly up at the subject",
      "focal_length": "Approx 24-28mm wide angle (phone lens equivalent)",
      "aperture": "f/1.7 wide open",
      "iso": "High ISO (approx 800-1600) resulting in visible fine digital noise/grain",
      "focus": "Sharp focus on subject's face and knees, slight depth of field blur on background bookshelf"
    },
    "quality_modifiers": {
      "engine": "Nano Banana Pro",
      "details": "Ultra Photorealistic, 8k resolution, raw photo style, realistic skin texture with highly visible pores and freckles underneath purple light, tangible fabric texture details on sweater and blanket, authentic low-light smartphone digital noise grain."
    },
    "negative_prompt": "cartoon, illustration, anime, painting, 3D render, drawing, sketch, abstract, low quality, blurry, pixelated, unnatural skin, doll-like, oversaturated, flat lighting, stylized, idealized, unrealistic, smooth skin, denoised"
  }
}
```

## Intense Ink Sketch Portrait with Face Likeness

> Elle çizilmiş portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "reference_image": "uploaded_photo",
  "face_likeness": {
    "accuracy": "high",
    "preserve_features": [
      "exact facial structure",
      "natural skin tone",
      "beard shape",
      "nose form",
      "eye shape",
      "original expression"
    ],
    "usage": "primary face reference for proportions and likeness"
  },
  "portrait_style": {
    "composition": "dramatic side-profile portrait",
    "mood": "intense, chaotic, emotionally charged",
    "art_direction": "expressive ink sketch with mixed-media illustration"
  },
  "subject_details": {
    "pose": "side profile",
    "presence": "bold and rebellious",
    "wardrobe": {
      "type": "dark abstract jacket",
      "treatment": "heavy textures, angular strokes, rough ink detailing"
    }
  },
  "visual_elements": {
    "overlays": [
      "{argument name="overlay element 1" default="cryptic handwritten notes"}",
      "symbols and abstract glyphs",
      "fragmented text wrapping around facial contours"
    ],
    "meaning": "suggesting inner conflict, hidden thoughts, and psychological depth"
  },
  "art_technique": {
    "linework": "sharp pen details with aggressive brushwork",
    "effects": [
      "ink splashes",
      "controlled chaos",
      "layered textures"
    ],
    "style_blend": "editorial illustration meets conceptual art"
  },
  "background": {
    "texture": "aged parchment paper",
    "tone": "pale, grainy, desaturated",
    "details": [
      "faded manuscript feel",
      "subtle stains",
      "delicate line artifacts"
    ]
  },
  "overall_aesthetic": {
    "contrast": "high",
    "finish": "bold, experimental, precise yet raw",
    "emotion": "powerful, intense, thought-provoking"
  }
}
```

## Ultra-Realistic Romantic Boudoir Portrait Prompt with Identity Lock

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{ "image\_generation\_request": { "technical\_configuration": { "aspect\_ratio": "3:4", "resolution": "8K Ultra HD", "rendering\_engine": "Photorealistic / Ray-traced", "camera\_settings": { "shot\_type": "Medium Shot (Mid-shot)", "focal\_length": "85mm (Portrait Lens)", "aperture": "f/2.8", "focus\_point": "Sharp focus on eyes and facial features", "depth\_of\_field": "Soft bokeh background" } }, "subject\_details": { "identity": { "reference": "A woman in the reference image", "fidelity": "Strict face preservation (100% likeness)", "demographics": "Adult female" }, "physical\_attributes": { "hair": { "color": "same color in the reference image", "length": "Long", "style": "Loose, flowing waves", "interaction": "Hand running through strands" }, "expression": { "mouth": "Soft, inviting smile", "eyes": "Warm and engaging", "mood": "Romantic, relaxed, sensual" } }, "pose\_composition": { "left\_hand": "Raised, gently running fingers through hair", "right\_hand": "Resting comfortably on the natural waistline", "posture": "Relaxed but elegant standing pose", "orientation": "Slightly angled towards the camera" } }, "wardrobe\_specifications": { "layer\_1\_nightgown": { "garment": "Slip dress / Nightgown", "color": "{argument name="nightgown color" default="Dark pink / Magenta"}", "fabric\_finish": "Metallic sheen", "texture": "Smooth satin blend", "details": "Intricate lace detailing along the neckline and hem" }, "layer\_2\_robe": { "garment": "Matching robe", "material": "Pure silk", "color": "Dark pink (matching tone)", "drape": "Loose and flowing over shoulders", "surface\_reaction": "High reflectivity to light" } }, "environmental\_context": { "setting": "Indoor / Boudoir", "background\_elements": { "wall\_color": "Deep Teal", "textiles": "Dark, heavy curtain (velvet texture)", "atmosphere": "Intimate and cozy" } }, "lighting\_and\_atmosphere": { "style": "Soft Romantic Indoor Lighting", "key\_light": "Diffused softbox from the side", "highlights": "Emphasis on the metallic sheen of the nig
```

## Ultra-Photorealistic Yoga Cow Pose Smartphone Selfie Prompt

> Fotogerçekçi portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{

  `"prompt_type": "ultra_photorealistic_vertical_smartphone_yoga_selfie",`

  `"meta": {`

`"aspect_ratio": "4:5",`

`"camera": "tripod-mounted smartphone",`

`"lens": "realistic smartphone wide-angle",`

`"capture_method": "phone timer or remote trigger",`

`"style": "natural daylight, raw realistic smartphone look, no beauty filters"`

  `},`

  `"subject": {`

`"character": "same as reference image",`

`"identity_lock": "face, hair color, eye color, skin tone, and overall facial features must exactly match the reference image",`

`"pose": {`

`"name": "cow pose",`

`"position": "on a high-quality yoga mat",`

`"knees": "knees stacked under hips",`

`"hands": "hands planted under shoulders",`

`"spine": "gently arched",`

`"chest": "open",`

`"gaze": "slightly forward and down",`

`"expression": "calm, focused"`

`},`

`"body": {`

`"proportions": "natural proportions, no exaggerated anatomy",`

`"skin_texture": "real skin texture with visible pores, slight sheen from light exercise"`

`},`

`"hands_and_feet": {`

`"hands": "fingers spread naturally with correct anatomy",`

`"feet": "barefoot, toes flexed against the mat"`

`}`

  `},`

  `"outfit": {`

`"set": "coordinated {argument name="outfit color" default="purple"} tones",`

`"top": {`

`"type": "supportive seamless sports bra",`

`"color": "purple",`

`"details": "subtle fabric texture and realistic stretch"`

`},`

`"bottom": {`

`"type": "high-waisted form-fitting leggings",`

`"color": "purple",`

`"details": "subtle fabric texture and realistic stretch"`

`}`

  `},`

  `"scene": {`

`"location": "serene modern yoga studio",`

`"windows": "large floor-to-ceiling windows showing a soft overcast morning outside with a hint of minimalist Scandinavian-style city architecture and distant bright sky haze",`

`"interior_design": [`

`"light wood floors",`

`"white and soft grey walls",`

`"a few potted green plants",`

`"neatly stacked yoga blocks and rolled mats in the background",`

`"simple linen-covered bolster off to the side"`

`],`

`"mirror_rule": "no mirrors directly facing the camera",`

`"mood": "calm, healthy, aspirational, mid-flow wellness routine"`

  `},`

  `"lighting": {`

`"source": "natural daylight from windows to one side",`

`"quality": "diffused and soft, gentle shadows, no harsh contrast",`

`"color_temperature": "slightly cool but balanced"`

  `},`

  `"camera_perspective": {`

`"height": "about chest height in front of subject",`

`"angle": "slightly angled downward",`

`"framing": "full-body shot with subject centered on the mat, some headroom and floor space visible",`

`"phone_visibility_rule": "no hands visible holding a phone, no visible phone in hand"`

  `},`

  `"color_palette": {`

`"environment": "neutral whites, soft greys, light wood tones, green plant accents",`

`"subject": "purple outfit stands out against neutral studio"`

  `},`

  `"negative_prompt": [`

`"low resolution",`

`"CGI",`

`"cartoon",`

`"anime",`

`"over-smoothed "
```

## Prone Beach Selfie Portrait Prompt

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"subject": {
"demographics": "Young adult female, tan skin tone, fit and curvy physique",
"hair": "Wavy dirty blonde to light brown hair with sun-bleached highlights, damp beach texture, pushed back by sunglasses, dark roots visible",
"face": "Oval face shape, prominent freckles across nose and cheeks, full lips with a neutral to slight pout expression, dark brown eyes looking directly at camera, groomed eyebrows",
"upper_body": "Full, natural bust volume clearly visible in deep cleavage due to prone position, compression from arms creates fullness, vivid {argument name="bikini color" default="royal blue"} string bikini top with triangle cups",
"lower_body": "Curvy hips and buttocks visible in background due to foreshortening, wearing matching royal blue bikini bottoms (thong or cheeky cut), legs bent at knees",
"limbs": "Bare arms, smooth skin texture, feet raised in the air with soles visible and crossed at ankles",
"accessories": "Chunky royal blue hoop earrings matching the swimwear, thin silver chain necklace, silver ring on right ring finger, black rectangular sunglasses resting on top of head"
},
"pose": {
"type": "Prone (lying on stomach), propped up on elbows",
"head_and_neck": "Head facing forward, chin resting heavily on the right fist/hand, gaze locked on viewer",
"arms": "Elbows resting on the white towel, right hand curled under chin for support, left forearm flat on towel",
"torso": "Arching slightly to lift upper chest, chest pressed inward by arms creating deep cleavage",
"legs": "Bent upwards at the knees at a sharp angle, lower legs perpendicular to the ground, feet crossed at the ankles",
"orientation": "Front-facing perspective looking down the length of the body"
},
"environment": {
"location": "Wooden pier or dock extending over water",
"foreground": "White textured terry-cloth towel spread over weathered grey wood planks",
"midground": "White painted wooden railings of the pier, calm dark green-blue ocean water",
"background": "Distant mountains, hazy overcast sky, soft horizon line",
"atmosphere": "Overcast beach day, cool and breezy seaside ambiance"
},
"camera": {
"shot_type": "Medium-full shot, eye-level with the subject (low angle relative to standing height)",
"perspective": "Foreshortened perspective emphasizing the face and upper body while showing the lifted legs in the background",
"focal_length": "50mm to 85mm portrait lens",
"depth_of_field": "Subject sharply in focus, background slightly softened but distinct",
"framing": "Centered subject, head near top third, towel filling bottom foreground"
},
"lighting": {
"source": "Natural diffuse daylight",
"condition": "Overcast/cloudy sky causing soft, shadowless illumination",
"quality": "Even lighting on face, soft subsurface scattering on skin, no harsh highlights or deep shadows",
"shadows": "Subtle contact shadows under the arms and torso on the towel"
},
"mood_and_expression": {
"emotion": "Relaxed, confident, slightly sultry, direct engagement",
"eye_co
```

## Coastal Photoshoot in a Sea Cave

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "A sunlit coastal photoshoot of a woman standing on a boat inside a natural sea cave with turquoise water. She wears a {argument name="bikini pattern" default="green butterfly-pattern bikini"} with tie-side bottoms. Her wet blonde hair is slicked back as she poses with one arm raised, highlighting a toned, athletic figure. Golden sunlight filters through the cave opening, illuminating textured rock walls and sparkling water. The mood is sensual yet natural, tropical, and adventurous, with a luxury travel editorial aesthetic.",
  "style": [
    "photorealistic",
    "luxury travel editorial",
    "natural light",
    "summer aesthetic"
  ],
  "camera": {
    "angle": "side profile",
    "lens": "50mm",
    "aperture": "f/2.0",
    "depth_of_field": "moderate"
  },
  "lighting": {
    "type": "natural sunlight",
    "direction": "backlit through cave opening",
    "mood": "warm, glowing, cinematic"
  },
  "environment": "rocky sea cave with clear turquoise water and small boat",
  "mood": "confident, sensual, free-spirited",
  "quality": "ultra high detail, sharp focus, 4k realism"
}
```

## Y2K Retro Glamour Photoshoot

> Fotogerçekçi, retro moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "A retro-inspired nighttime photoshoot of a red-haired woman leaning into a pink vintage convertible. She wears a {argument name="top" default="leopard-print off-shoulder top"} and white denim shorts, accessorized with a red necklace. Her long wavy hair cascades over one shoulder. The scene is lit with flash photography against a dark blue night sky and tree silhouettes, creating a bold contrast. Playful yet sultry mood, early 2000s aesthetic, glossy magazine editorial style.",
  "style": [
    "photorealistic",
    "Y2K aesthetic",
    "retro glamour",
    "editorial fashion"
  ],
  "camera": {
    "angle": "eye-level",
    "lens": "35mm",
    "lighting": "direct flash",
    "depth_of_field": "moderate"
  },
  "environment": "outdoor roadside setting at night with vintage car",
  "mood": "flirty, confident, nostalgic",
  "quality": "high detail, sharp focus, magazine-quality"
}
```

## Photoreal Istanbul Romance with Identity Lock

> Fotogerçekçi görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photoreal_modern_romance",
      "version": "v1.0_ISTANBUL_2026_FINAL",
      "priority": "highest"
    },
    "references": {
      "reference_image_female": { "source": "UPLOAD_REFERENCE_IMAGE", "purpose": "FACE_IDENTITY_LOCK_FEMALE", "strict_lock": true },
      "reference_image_male": { "source": "UPLOAD_REFERENCE_IMAGE", "purpose": "FACE_IDENTITY_LOCK_MALE", "strict_lock": true }
    },
    "creative_prompt": {
      "scene_summary": "Modern {argument name="city" default="Istanbul"}. Love that survived all eras.",
      "pose_and_micro_action": "Their hands brush while walking. This time, they interlock fingers.",
      "mood": "complete, eternal"
    }
  }
}
```

## Cinematic Beach Portrait (Golden Hour)

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_specification": {
    "metadata": {
      "aspect_ratio": "9:16",
      "style_preset": "Cinematic Realism",
      "quality_level": "Ultra-High Definition",
      "render_engine": "Hyperrealistic Path-Tracing"
    },
    "subject_details": {
      "identity": {
        "ethnicity": "American",
        "aesthetic": "Sun-kissed, athletic young woman",
        "reference_matching": "Maintain strict facial consistency with uploaded reference image"
      },
      "physical_traits": {
        "skin": "Deep golden tan, visible micro-textures, subtle glow from saltwater and sun",
        "hair": "{argument name="hair color" default="Redhead"}, beach-wave texture, wind-swept, voluminous, salt-textured strands",
        "physique": "Toned, athletic build, defined core"
      },
      "attire": {
        "garment": "{argument name="bikini color" default="Green Lime"} strappy bikini",
        "details": "High-quality fabric sheen, intricate strap detailing, precise stitching textures",
        "fit": "Form-fitting, summer lifestyle aesthetic"
      },
      "performance": {
        "pose": "Leaning forward toward the camera, playful and engaging stance",
        "expression": "Flirty smirk, confident gaze, direct eye contact",
        "mood": "Energetic, alluring, warm"
      }
    },
    "environment_and_setting": {
      "location": "Tropical beach cabana",
      "background_elements": [
        "Weathered exotic wood textures",
        "Soft-focus palm fronds",
        "Distanced turquoise ocean horizon",
        "White sand bokeh"
      ],
      "atmosphere": "Tropical warmth, hazy coastal air"
    },
    "lighting_and_color": {
      "primary_source": "Golden hour sunlight",
      "lighting_physics": "Warm rim lighting on hair and shoulders, soft diffused shadows, natural skin highlights",
      "color_palette": "Teal and Orange contrast, warm ambers, vibrant turquoise"
    },
    "camera_technical_specs": {
      "hardware": "85mm Prime Portrait Lens",
      "settings": {
        "aperture": "f/1.8 for creamy bokeh",
        "depth_of_field": "Shallow depth of field, sharp focus on eyes, soft background blur",
        "composition": "Close-up portrait, vertical orientation"
      }
    },
    "constraints": {
      "negative_prompt": [
        "nudity",
        "explicit content",
        "childlike proportions",
        "male features",
        "anatomical distortion",
        "extra limbs",
        "low resolution",
        "watermark",
        "unrealistic skin smoothing"
      ]
    }
  }
}
```

## Y2K Surveillance Footage Style Portrait

> Fotogerçekçi mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_generation_prompt": {
    "subject": {
      "demographics": "Young woman, light complexion, long wavy dark blonde/light brown hair",
      "styling": {
        "hair": "Center-parted, beach waves, textured, slightly messy",
        "clothing": "Olive green sleeveless fitted tank top",
        "accessories": "Oversized black rectangular sunglasses, small silver hoop earrings, thin gold chain necklace"
      },
      "pose": "Leaning forward over a glass counter, hands placed on hips with elbows jutting out, tongue playfully sticking out, direct engagement with the camera lens",
      "expression": "Sassy, playful, rebellious, confident"
    },
    "environment": {
      "location": "Cluttered convenience store or souvenir shop interior",
      "background": "Shelves densely packed with merchandise (mugs, plates, souvenirs, boxes), overhead fluorescent tube light",
      "foreground": "Glass display counter, scattered receipts and papers, white shopping bag with red rope handles",
      "atmosphere": "Chaotic, busy, urban retail setting"
    },
    "camera_and_technical": {
      "camera_type": "Digital camcorder or CCTV security camera emulation",
      "lens": "15mm Fisheye wide-angle lens",
      "perspective": "High-angle, distorted barrel distortion effect",
      "lighting": "Harsh overhead fluorescent lighting, cool color temperature, mixed with flash reflection on glass",
      "aesthetic": "Y2K visuals, surveillance footage style, lo-fi digital texture",
      "post_processing": {
        "effects": "VHS glitch lines overlay, chromatic aberration, film grain, digital datestamp '{argument name="date stamp" default="DEC 29 2025 11:31:33"}' in bottom right corner",
        "quality": "Ultra photorealistic textures but with intentional stylistic degradation (noise, artifacts)"
      }
    },
    "mood": {
      "vibe": "Edgy, candid, paparazzi-style, raw, energetic",
      "keywords": [
        "Urban exploration",
        "Late night shopping",
        "Indie sleaze",
        "Retro-modern"
      ]
    }
  }
}
```

## Ink-Wash Style Illustration Prompt

> Elle çizilmiş illüstrasyon üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Generate a dramatic and impactful mixed media illustration of {argument name="Subject Name" default="[Subject]"}, using the uploaded image as a strict reference for facial structure, skin tone, and expression without any change. The artwork features an expressive ink sketch style with heavy textured brushstrokes, sharp angular lines, and vivid ink splatters. Superimpose layers of mysterious handwritten text, cryptic symbols, and abstract glyphs over the {argument name="Subject Name" default="[Subject]"}'s face and upper body, partially contouring the features to suggest inner turmoil and hidden meanings. The attire should be abstract and dark with raw visual energy. The background is light, yellowed parchment with grainy, faded paper texture, subtle lines, and stains, resembling an ancient manuscript or forgotten work. High contrast, editorial art style, raw and rebellious aesthetic.
```

## AI Boyfriend Relationship Visualization

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Please create an image of how I have treated you so far.
```

## Overhead Winking Bikini Portrait Prompt

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "aspect_ratio": "2:3",
  "subject": {
    "type": "Woman",
    "age": 19,
    "position": "Lying on back, overhead view"
  },
  "expression": {
    "action": "Winking right eye, sticking out tongue",
    "smile": "Broad, showing teeth",
    "nose": "Wrinkled"
  },
  "features": {
    "skin_tone": "Fair with visible freckles on cheeks and nose",
    "cheeks": "Flushed pink",
    "lips": "Natural pink, tongue extended",
    "eyes": "Left brown eye open, right winking",
    "hair": "Blonde, wavy, spread out above head"
  },
  "attire": {
    "bikini_top": "{argument name="bikini color" default="White"} halter-neck with black embroidered zig-zag trim along edges"
  },
  "accessories": {
    "earrings": "Small gold hoop earrings",
    "necklace": "Delicate gold chain with a small, dark charm"
  },
  "environment": {
    "background": "Light blue textured fabric pillow and blanket",
    "lighting": "Soft, natural indoor light"
  }
}
```

## Nostalgic Film Point-and-Shoot Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "model": "gemini-nano-banana-pro",
  "task": "image_generation",
  "style": "cinematic_realism",
  "scene": {
    "setting": "small bedroom with an intimate, lived-in feel",
    "background": "wall covered with polaroid photos, handwritten notes, sketches, and taped memories arranged like a personal collage",
    "time_of_day": "night",
    "mood": "nostalgic, quiet, emotionally warm, slightly messy in a real way"
  },
  "subject": {
    "type": "young woman",
    "pose": "slight lean forward with relaxed shoulders, casual slouch, hands loosely folded near the lap",
    "expression": "soft half-smile, tired but comfortable, natural and unforced",
    "hair": "messy dark hair loosely tied back with strands falling around the face",
    "wardrobe": "oversized {argument name="sweatshirt style" default="pastel tie-dye sweatshirt"}, relaxed and cozy fit"
  },
  "composition": {
    "framing": "medium close-up portrait",
    "camera_angle": "eye-level",
    "focus": "sharp focus on face with subtle falloff into background",
    "background_detail_level": "visible but gently softened",
    "rule_of_thirds": true,
    "depth_of_field": "shallow depth of field"
  },
  "lighting": {
    "primary_light": "direct on-camera flash",
    "flash_style": "film point-and-shoot look with slightly harsh highlights and realistic shadows",
    "ambient_light": "dim warm room lighting",
    "contrast": "moderate contrast with soft midtones",
    "skin_tone": "natural with slight texture, no smoothing"
  },
  "camera": {
    "camera_type": "35mm film point-and-shoot",
    "lens": "35mm",
    "aperture": "f/2.8",
    "shutter_speed": "1/60",
    "iso": 800,
    "film_stock_emulation": "Kodak Portra 400",
    "grain": "fine-to-medium natural film grain",
    "vignette": "subtle"
  },
  "color_grading": {
    "palette": "muted pastels, warm beige walls, soft neutral shadows",
    "tone": "slightly desaturated, nostalgic",
    "highlights": "slightly warm",
    "shadows": "cool-neutral"
  },
  "texture_and_realism": {
    "skin_detail": "real pores, slight redness, tiny imperfections preserved",
    "fabric_detail": "visible sweatshirt texture and natural wrinkles",
    "wall_texture": "paper edges, tape marks, slight wall grain"
  },
  "post_processing": {
    "sharpness": "natural",
    "clarity": "medium-low",
    "bloom": "none",
    "hdr": "off",
    "retouching": "none"
  },
  "negative_prompt": [
    "plastic skin",
    "over-smooth face",
    "ai beauty filter",
    "oversaturated colors",
    "studio lighting",
    "perfect symmetrical face",
    "hyper sharp digital look",
    "anime style",
    "cartoon style",
    "overly glossy lips",
    "fake pores texture"
  ],
  "output": {
    "aspect_ratio": "9:16",
    "resolution": "high",
    "quality": "photorealistic",
    "export_look": "raw film scan aesthetic"
  }
}
```

## Motu Patlu Tea Shop Scene with Custom Face

> Fotogerçekçi illüstrasyon üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Generate an ultra-realistic 4K photo of me sitting at "Furfurinagar Tea Shop" with Motu, Patlu, and their friends, Dr. Jhatka and Ghasitaram. Everyone should be enjoying tea and samosas, with tea cups in everyone's hands and samosas in Motu's hand. (The face in the generated photo must match the provided photo exactly, with no changes whatsoever.)
```

## High-End Street Photography Transformation

> Sinematik, lüks portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
transform the photo a reference image into a high-end street-photography portrait of a traveler/photographer leaning casually on a lamp post in front of a historic tower. Keep the original pose and composition: standing with left leg bent and foot on the lamp base, right leg relaxed, left hand in jacket pocket, right hand holding a camera down by the thigh, shoulders slightly turned to camera, chin up and gaze off-frame. Preserve the camera, and textured jacket but enhance and stylize as follows:

Wardrobe & accessories: keep the dark parka/jacket but enrich fabric texture (subtle waxed canvas look), change inner hoodie to a soft charcoal knit, keep blue jeans but slightly deepened to rich indigo with natural creasing. Emphasize the high-top sneakers boost contrast on black-and-white panels and add faint scuff details for

realism. Add a small messenger bag strap across the chest and a compact leather wrist strap on the camera. Lighting & color: cinematic cool-tone grade (soft blue shadows) with warm golden rim light hitting the left side of the face and shoulder (suggest late-afternoon sun). Slightly boost contrast and midtones to create punch without losing skin detail. Add subtle film grain and gentle vignette to focus on the subject.

Camera & optics: emulate 35mm-50mm prime look, shallow DOF (f/1.8-2.8) so the tower and crowd become painterly bokeh while the subject remains razor-sharp. Slight perspective correction to emphasize the tower peek. behind his shoulder. Enhance catchlight/reflection in the eyes (or sunglasses reflection if present) and sharpen

camera details.

Background & atmosphere: keep the busy pedestrian scene but soften and desaturate it so the subject pops; raise clarity and texture on the stone tower so it reads as a strong architectural anchor. Add a few falling autumn leaves and a faint wet-pavement sheen to suggest recent rain (subtle reflections under shoes).. Final touches: natural skin retouching (preserve stubble and pores), boost micro-contrast on jacket and jeans,

accentuate lens/glass reflections on the camera. Export as photorealistic, vertical 4K editorial crop with high

detail.

Position (short): standing, left foot on lamp base, leaning against lamppost, camera in right hand, left hand in pocket, gaze off-frame.
```

## Photorealistic Selfie with Celebrity in Background

> Fotogerçekçi logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_prompt": {
    "subject": {
      "description": "Young woman , Fair skin tone, long straight light blonde hair with some strands blowing in the wind, {argument name="celebrity in background" default="dua lipa"} in bikini very near behind her smiling. ",
      "pose": "Selfie angle, slightly tilted head, sticking tongue out playfully, looking the camera.",
      "visible_body": "Shoulders, chest, and partial upper torso visible."
    },
    "attire": {
      "top": "White and yellow bikini top with lace trim detailing on the edges and thin straps.",
      "jewelry": [
        "Gold layered necklace.",
        "Gold cross pendant with small embedded ruby crystals.",
        "Gold 'KEOR' logo charms integrated into the chain (Louis Vuitton style)."
      ]
    },
    "environment": {
      "location": "Maldive beach setting.",
      "background": {
        "ocean": "Choppy ocean waves with white foam, water houses, blue-grey water.",
        "sky": "Overcast sky with bright patches, sunset colored clouds.",
        "close_details": "A beautiful {argument name="celebrity in background" default="dua lipa"} in tiny red bikini in the water just behind her."
      }
    },
    "lighting_and_atmosphere": {
      "type": "Natural daylight, slightly backlit causing soft shadows on the face.",
      "mood": "Playful, casual, summer vibe, beach day.",
      "color_palette": "Natural tones, cool ocean blues, warm skin tones, sunset sky."
    },
    "technical_specs": {
      "quality": "4k, HD, Ultra-realistic, high resolution.",
      "style": "Photorealistic selfie, candid shot.",
      "focus": "Sharp focus on the face, slightly softer background depth of field."
    }
  }
}
```

## Red Carpet Fashion Photography

> Fotogerçekçi, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_prompt_structure": {
    "subject": {
      "demographics": " female celebrity 
      "hair": "Shoulder-length textured bob, dark black roots to honey blonde waves, tousled style",
      "face": "Symmetrical features, blue eyes with winged eyeliner, groomed brows, fair skin with visible texture and pores, nude glossy lips, soft rosy blush",
      "pose": "Standing front-facing, head slightly turned to the left, direct eye contact, arms relaxed by sides",
      "expression": "Poised, confident, soft glare, elegant"
    },
    "fashion": {
      "garment": "Pale {argument name="dress color" default="ice-blue"} custom satin gown open on a toned leg with fishnets",
      "design_details": [
        "Deep cowl neckline with crystal-embellished trim",
        "Thin spaghetti straps",
        "Off-the-shoulder crystal-encrusted arm bands/cuffs",
        "Fitted bodice",
        "High-sheen silk satin fabric",
        "Draped silhouette"
      ],
      "jewelry": [
        "Delicate diamond tennis necklace",
        "Large diamond stud earrings"
      ]
    },
    "environment": {
      "location": "Red carpet event, step-and-repeat media wall",
      "background": "Dark navy or black press wall with white repeated logos (partially visible text like 'KeorUnreal'), shallow depth of field (bokeh) to isolate subject"
    },
    "lighting": {
      "type": "Professional event flash photography",
      "qualities": "Bright frontal lighting, high contrast, specular highlights on the satin fabric and crystals, distinct catchlights in eyes, minimal shadows"
    },
    "technical_specifications": {
      "camera_gear": "Sony A7R V with 85mm f/1.4 GM lens",
      "settings": "f/2.8 aperture, ISO 100, shutter speed 1/200",
      "style_modifiers": [
        "Ultra photorealistic",
        "Hyper-detailed",
        "8k resolution",
        "Raw photo",
        "Subsurface scattering",
        "Fashion photography",
        "Cinematic lighting",
        "Masterpiece" Ratio 3.4 change the girl to Megan Fox and the dress color should be red
      ]
    }
  }
```

## Candid Poolside Lifestyle Photography

> Fotogerçekçi, retro mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": {
    "subject": {
      "appearance": {
        "hair": "Long, dark blonde, wet, slicked back, straight texture, reaching mid-back",
        "skin": "Tanned, smooth, sun-kissed complexion",
        "physique": "Curvaceous, fit, hourglass figure",
        "nails": "Red polish on fingernails and toenails"
      },
      "clothing": {
        "outfit_1": {
          "top": "Red lace triangle bikini top, halter neck",
          "bottom": "Red lace high-waisted bikini bottoms, retro cut"
        },
        "outfit_2": {
          "top": "Yellow sleeveless tank top, cropped, semi-sheer/wet material worn over bikini",
          "bottom": "Light green high-waisted bikini bottoms"
        },
        "accessories": "Delicate silver chain necklace with pendant stone"
      },
      "poses": [
        "Walking forward confidently, arms naturally at sides",
        "Kneeling on a white lounge chair, side profile view",
        "Standing in profile looking down at phone",
        "Exiting pool, leaning forward on pool edge, rear view"
      ]
    },
    "environment": {
      "location": "Luxury desert resort poolside or beach villa terrace in {argument name="location" default="dubai"}",
      "elements": [
        "Thick wooden architectural pillars",
        "Orange cushioned lounge chairs with towels",
        "Blue tiled swimming pool edge",
        "Glass sliding doors",
        "Tropical greenery oasis in background"
      ],
      "lighting": "Natural sunset light, diffuse outdoor lighting, soft shadows",
      "mood": "Candid, relaxed, vacation atmosphere, unposed"
    },
    "camera_details": {
      "style": "Paparazzi style, candid lifestyle photography",
      "quality": "Ultra Photorealistic, 8k resolution, high definition, sharp focus",
      "lens": "Telephoto lens (approx 85mm-200mm) for subject isolation",
      "depth_of_field": "Slightly shallow depth of field blurring the background elements" The girl should be Ana de Armas  
    }
```

## Chinese Casino Glamour Scene Prompt

> Sinematik, lüks görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
An elegant and extremely charming young Asian woman is sitting inside a luxurious casino. She has long black hair tied into a low ponytail, a delicate face, and is wearing a black tight mini-dress with thin rhinestone straps.

She is elegantly seated on a red leather-backed swivel chair, her long legs crossed, wearing black thin-strap high-heeled sandals.

To her left is a huge slot machine, its screen displaying the colorful pattern of ‘{argument name="Slot Machine Text" default="TRIPLE JACKPOT GEMS"}’ and emitting a blue-purple glow. The background is a spacious casino hall with a gorgeous carpet featuring blue and yellow spiral textures, and distant lights show a soft bokeh effect.

 The entire image is filled with a modern urban luxury atmosphere and cinematic texture, rich in detail and realism.
```

## Bishop Transformation with Healing Light and Glasses

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Tried converting to a religious figure (Bishop) using AI. Add healing light... A Saintess with glasses descends!
```

## Luxury Resort Bikini Portrait Prompt

> Fotogerçekçi, minimal mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"subject": {
"description": "Young woman with a fit, curvaceous physique and tanned skin, seated indoors.",
"hair": "Shoulder-length, wavy dirty blonde to light brown hair, parted in the center, loose and framing the face.",
"face": "Oval face shape, neutral to soft expression, full lips, defined eyebrows, minimal natural makeup, direct eye contact.",
"body": "Athletic yet soft figure, prominent bust visually matching reference volume, toned abdomen, defined waistline, soft skin texture with natural tan.",
"clothing": "{argument name="bikini color" default="White"} textured 'smocked' or 'crinkle' fabric bikini set. Top is a straight bandeau style with detached off-the-shoulder short puff sleeves. Bottoms are matching textured fabric with side ties, sitting low on the hips.",
"accessories": "Small gold hoop earrings, a delicate gold pendant necklace."
},
"pose": {
"posture": "Seated on a white sofa, body slightly angled to the viewer's right, face turned forward.",
"arms": "Right arm extended straight down with palm resting on the sofa cushion. Left arm relaxed, hand resting gently on the upper left thigh.",
"legs": "Legs are bent at the knees and angled together towards the viewer's right, creating a diagonal line across the lower frame.",
"head": "Upright, facing the camera directly with a calm gaze."
},
"environment": {
"setting": "Bright, upscale interior living space, likely a tropical resort villa.",
"foreground": "White upholstered sofa with plush cushions, textured woven rug on the floor.",
"background": "Large floor-to-ceiling wooden-framed glass sliding doors leading to an outdoor patio. Visible through the glass are lush green palm trees and white resort-style buildings with brown tiled roofs.",
"ceiling": "White ceiling with prominent dark wood exposed beams.",
"decor": "Minimalist luxury, white curtains bunched at the sides of the glass doors."
},
"camera": {
"shot_type": "Medium shot, captured from knees up.",
"angle": "Eye-level, straight on.",
"focal_length": "50mm equivalent, standard perspective with minimal distortion.",
"depth_of_field": "Subject in sharp focus, background slightly softened but distinct enough to identify architectural details.",
"framing": "Centered subject, balanced composition with headroom below the ceiling beams."
},
"lighting": {
"source": "Natural daylight entering from the large glass doors behind and to the side of the subject.",
"quality": "Soft, diffuse, high-key lighting.",
"shadows": "Gentle, natural shadows on the right side of the subject's face and body (viewer's left), indicating light source dominance from the background/right.",
"skin_rendering": "Realistic subsurface scattering, capturing the glow of tanned skin without artificial gloss."
},
"mood_and_expression": {
"emotion": "Calm, confident, relaxed, sultry.",
"atmosphere": "Serene, vacation vibe, luxurious, bright.",
"gaze": "Direct, engaging, unsmiling but pleasant."
},
"style_}
```

## Mixed-Media Digital Collage (Monochrome and Neon)

> Fütüristik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A vertical mixed-media digital collage composition featuring a triptych of the same male subject, separated by realistic torn pieces of paper with rough edges that create a layered effect. The central horizontal strip is rendered in vibrant full color, capturing the subject with the face from the uploaded reference photo, in a three-quarter angle view facing right, illuminated by bright natural sunlight that casts sharp shadows on the asphalt road. He wears a teal crewneck sweatshirt with the word "{argument name="text on shirt" default="DHINOV"}" written in a distorted font, accented by an illustration-style neon orange squiggle that follows the lines of his back and hair, accompanied by a cartoonish yellow lightning bolt element floating in a bold line.

The top and bottom are rendered in high-contrast black-and-white monochrome.

The top shows the subject standing facing forward in front of an ornamental iron gate and fence, framed by a glowing white doodle outline with jagged shapes.

The bottom section shows the subject looking down with a slight smile, standing near a parked motorbike and a building facade, also outlined in white scribbles.

The overall aesthetic blends urban streetwear photography with scrapbook-style editing, featuring high-resolution fabric textures and paper edges, 8K quality, and a modern, trendy social media editing feel.
```

## Candid Autumnal Park Portrait with Bouquet

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{ "composition": { "framing": "medium portrait seated, from knees to head", "orientation": "vertical", "subject_placement": "center-left within frame, seated inside wooden structure", "pose": "relaxed seated pose, legs together, arms wrapped around bouquet", "camera_angle": "eye-level", "negative_space": "open grassy park background providing depth" }, "subject": { "gender_presentation": "female", "age_appearance": "young adult", "skin_tone": "light to medium warm undertone", "facial_expression": "gentle smile, friendly and approachable", "gaze": "direct eye contact with camera", "facial_features": { "cheeks": "softly contoured with visible dimples", "eyes": "large, expressive, emphasized by makeup", "brows": "defined, softly arched" }, "hair": { "color": "dark brown", "length": "long", "texture": "straight with slight natural wave", "styling": "center-parted, tucked behind ears", "accessories": "single white daisy tucked behind left ear" }, "makeup": { "style": "polished soft glam", "complexion": "even, matte-satin finish", "blush": "warm peach", "highlight": "subtle on cheekbones", "eyes": "dark eyeliner, mascara, neutral brown eyeshadow", "lips": "soft pink satin finish" } }, "wardrobe": { "outerwear": { "type": "jacket", "material": "suede or suede-like fabric", "color": "warm brown", "fit": "relaxed" }, "bottoms": { "type": "jeans", "style": "straight-leg", "color": "medium blue denim" }, "overall_style": "casual autumn aesthetic" }, "props": { "primary_object": "mixed flower bouquet", "flowers": [ "{argument name="flower 1" default="sunflowers"}", "red and pink blossoms", "orange gladiolus-like flowers", "green foliage" ], "color_palette": ["yellow", "deep red", "pink", "green"], "stem_visibility": "long stems extending downward across lap", "symbolic_tone": "cheerful, seasonal, heartfelt" }, "lighting": { "type": "natural daylight", "source_direction": "diffused overhead and frontal outdoor light", "quality": "soft and even", "shadow_style": "minimal harsh shadows", "mood": "natural, warm, candid" }, "color_grading": { "temperature": "slightly warm", "contrast": "moderate", "saturation": "balanced with vibrant yellows emphasized", "overall_palette": ["green grass", "sunflower yellow", "warm brown", "denim blue"] }, "background": { "setting": "outdoor park or garden", "elements": [ "green grass", "trees with early autumn foliage", "wooden gazebo or bench structure", "distant people and fencing" ], "depth": "background softly blurred but still readable", "environmental_context": "casual public outdoor space" }, "technical_traits": { "depth_of_field": "moderate, subject in sharp focus with mild background blur", "focus": "sharp on face and bouquet", "noise": "low", "lens_feel": "standard portrait lens (approx. 35–50mm equivalent)", "image_style": "candid lifestyle photography" }, "artistic_elements": { "aesthetic": "cozy, autumnal, wholesome", "emotional_tone": "warm, joyful, intimate", "styl" } }
```

## Modernized Dorothy Gale Costume Portrait Prompt

> Fotogerçekçi mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_structure": {
    "subject": {
      "demographics": "Young female adult with a slender, fit physique",
      "hair": "Long dark brown hair styled in two playful braids (pigtails) resting on shoulders",
      "face": "Soft, attractive features with a slight smile, gazing upwards to the right, wearing bright red lipstick and subtle eye makeup"
    },
    "outfit": {
      "costume_theme": "Modernized Dorothy Gale from Wizard of Oz aesthetic",
      "dress": "{argument name="dress pattern" default="Blue and white gingham check"} mini dress featuring a corset-style bodice with vertical boning, sweetheart neckline, and white lace ruffle trim at the hem and neckline",
      "legwear": "Opaque white knee-high stockings featuring large light blue satin bows at the top cuffs",
      "footwear": "Sparkling ruby red glitter pumps (heels) with ankle straps (Mary Jane style)"
    },
    "accessories": {
      "hair": "Red satin ribbons tied into bows at the base of each braid",
      "handheld": "Holding a beige woven straw tote bag/basket in the right hand"
    },
    "pose_and_action": {
      "stance": "Full-body standing pose, legs crossed at the ankles in a playful manner",
      "arms": "Right arm extended down holding the bag, left arm slightly bent and extended back as if balancing or leaning",
      "expression": "Charming, confident, and whimsical mood"
    },
    "environment": {
      "setting": "Semi-outdoor patio or courtyard entrance at night",
      "architecture": "Large wooden double doors with glass panels in the background, white stucco walls, dark wooden support pillar in the foreground",
      "details": "Terracotta tiled flooring, faint glimpse of a railing and indoor plants in the background, a large mirror frame visible on the far left edge"
    },
    "lighting": {
      "style": "Direct on-camera flash photography",
      "characteristics": "Hard lighting creating a distinct shadow of the subject on the wall behind, high contrast between the illuminated subject and the dimmer background, capturing the sparkle of the shoes and sheen of the fabric"
    },
    "camera_technical": {
      "perspective": "Eye-level to slightly low angle full shot",
      "focal_length": "35mm for a lifestyle snapshot feel",
      "quality": "Ultra photorealistic, 8K resolution, sharp focus on subject",
      "textures": "Detailed fabric weave on the gingham, realistic glitter texture on shoes, skin texture visibility"
    }
  }
}
```

## Ana de Armas Red Carpet Portrait Prompts (Yellow and Red Dress)

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_prompt": {
    "subject": {
      "name": "{argument name="celebrity name" default="Ana de Armas"}",
      "description": "young woman with shoulder-length layered blonde ponytail hair, soft waves, blue eyes, soft natural makeup with nude pink lipstick, glowing skin complexion, pearl necklace",
      "pose": "looking directly at camera, slight smile, confident red carpet stance, head and shoulders portrait",
    },
    "outfit": {
      "item": "{argument name="outfit color" default="Yellow"} dress",
      "details": "black beaded geometric web pattern over nude sheer illusion fabric, sweetheart neckline, intricate black sequin embroidery, sleeveless, structured fit",
      "style": "glamorous, high fashion, couture"
    },
    "environment": {
      "setting": "movie premiere red carpet event",
      "background": "dark blurred media wall with unrecognizable white and red logos, professional event backdrop",
      "atmosphere": "exclusive, cinematic, celebrity sighting"
    },
    "technical_specs": {
      "lighting": "soft professional flash photography, rim lighting on hair, even facial illumination, no harsh shadows",
      "camera": "85mm lens, f/1.8 aperture, sharp focus on eyes, bokeh background",
      "quality": "8k resolution, ultra-realistic, highly detailed texture, raw photo, photorealism, masterpiece",
      "aspect_ratio": "9:16"
    }
  },
  "negative_prompt": "cartoon, illustration, painting, drawing, bad anatomy, blurry, low quality, distorted eyes, text, watermark, logo, oversaturated, messy hair, wrong face",
  "parameters": {
    "size": "highest_resolution",
    "orientation": "vertical",
    "style_preset": "photographic" Ratio 3.4
  }

{
  "image_prompt": {
    "subject": {
      "name": "Ana de Armas",
      "description": "young woman with shoulder-length layered long black, soft waves, blue eyes, soft natural makeup with nude pink lipstick, glowing skin complexion, pearl necklace",
      "pose": "looking directly at camera, slight smile, confident red carpet stance, full body",
    },
    "outfit": {
      "item": "Red minidress",
      "details": "black beaded geometric web pattern over nude sheer illusion fabric, sweetheart neckline, intricate black sequin embroidery, sleeveless, structured fit, red high heels sandals",
      "style": "glamorous, high fashion, couture"
    },
    "environment": {
      "setting": "movie premiere red carpet event",
      "background": "cremisi blurred media wall with unrecognizable white and red logos, professional event backdrop",
      "atmosphere": "exclusive, cinematic, celebrity sighting"
    },
    "technical_specs": {
      "lighting": "soft professional flash photography, rim lighting on hair, even facial illumination, no harsh shadows",
      "camera": "85mm lens, f/1.8 aperture, sharp focus on eyes, bokeh background",
      "quality": "8k resolution, ultra-realistic, highly detailed texture, raw photo, photorealism, masterpiece",
      "aspect_ratio": "9:16"
```

## Cinematic Portrait Prompt for Alpine Environment

> Sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "project_metadata": {
    "output_format": "RAW_Photography",
    "version": "3.0_High_Fidelity",
    "aspect_ratio": "3:4",
    "style_preset": "Cinematic_Portrait"
  },
  "subject_definition": {
    "identity": {
      "biometrics": {
        "gender": "Female",
        "apparent_age": "20-25",
        "ethnicity_profile": "Northern European"
      },
      "face_mapping": {
        "eyes": { "iris_color": "Crystal Blue", "expression": "Intense, direct" },
        "skin": { 
          "texture_type": "Hyper-detailed dermis",
          "imperfections": ["Freckles", "Cold-induced flushing"],
          "moisture_level": "Slightly damp from snow"
        },
        "hair": {
          "base_color": "Blonde",
          "state": "Messy/Wind-swept",
          "interaction": "Tucked under goggle strap with wisps framing face"
        }
      }
    },
    "styling_layers": {
      "layer_0_skin": "Natural pink lips, unadorned",
      "layer_1_base": {
        "item": "Knit Turtleneck",
        "color": "{argument name="turtleneck color" default="Tan"}",
        "texture": "Vertical ribbing"
      },
      "layer_2_outer": {
        "item": "Parka/Coat",
        "accent": "Brown faux fur collar",
        "interaction": "Snow-dusted"
      },
      "accessories": {
        "item": "Ski Goggles",
        "frame": "Tan Matte",
        "lens": "Brown Mirror Finish",
        "placement": "Forehead"
      }
    }
  },
  "environment_simulation": {
    "geography": {
      "primary_location": "Alpine mountain slope",
      "background_elements": ["Snow-capped peaks", "Basalt rock outcrops"],
      "depth_mapping": "Extreme bokeh/background blur"
    },
    "particle_effects": {
      "type": "Fresh powder snow",
      "placement": ["Fur collar fibers", "Hair strands", "Goggle edges"]
    },
    "lighting_engine": {
      "source": "Overcast daylight",
      "diffusion": "High (soft shadows)",
      "color_temp": "6500k (Cool winter tones)",
      "highlights": "Reflective glints on snow crystals and goggles"
    }
  },
  "optical_parameters": {
    "camera_specs": {
      "lens_type": "85mm Prime",
      "aperture": "f/1.8",
      "shot_distance": "Close-up (CU)",
      "focus_priority": "Iris of the eyes"
    },
    "render_passes": [
      "Subsurface scattering (skin)",
      "Micro-displacement (knit texture)",
      "Volumetric cold air haze",
      "Individual follicle rendering"
    ],
    "mood_profile": ["Serene", "Arctic", "Exploration", "High-Contrast"]
  }
}
```

## Mustard Sweater Aesthetic Portrait Prompt

> Sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_title": "Mustard Sweater Aesthetic Portrait",
  "subject": {
    "description": "Young woman",
    "hair": "Long black hair",
    "pose": "Resting face on hand",
    "expression": "Neutral, relaxed"
  },
  "styling": {
    "eyewear": "Round transparent glasses",
    "makeup": "Soft natural makeup, glossy lips, defined eyelashes",
    "vibe": "Instagram aesthetic, fashion editorial"
  },
  "apparel": {
    "outerwear": "{argument name="sweater color" default="Mustard yellow"} knitted sweater",
    "layering": "Black mesh top underneath",
    "texture": "Knitted, mesh"
  },
  "environment": {
    "setting": "Indoor",
    "background": "Rough concrete wall",
    "atmosphere": "Cozy, moody"
  },
  "photography_technical": {
    "angle": "Shot from slightly above",
    "lighting": "Soft flash lighting, cinematic shadows, warm color tones",
    "camera_style": "35mm lens look, realistic photography",
    "focus": "Shallow depth of field, ultra sharp focus",
    "details": "High detail skin texture, HD quality",
    "aspect_ratio": "9:13"
  }
}
```

## Cozy Winter Portrait with White Hare

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cozy, intimate winter portrait. A girl from photo with a warm smile and rosy cheeks from the cold cradles a calm white hare in her arms. She is wearing a soft, chunky-knit {argument name="sweater color" default="cream colored"} sweater dress. Her hair is styled in loose messy braids. The makeup is natural and fresh, emphasizing the frost-kissed glow of her skin. The setting, is a quiet, sheltered spot near a rustic wooden fence, with a soft blanket of snow everywhere. A soft, warm backlight from the low winter sun filters through the trees, creating a gentle glow around them and highlighting, the delicate detajleot the hare's fur. The mood is heartwarming, peaceful, and full of quiet joy.
```

## Candid Editorial Conference Portrait Prompt with Identity Lock

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_generation_prompt",
  "aspect_ratio": "4:5",
  "resolution": "4K",
  "style": "authentic candid editorial photography, premium conference portrait",
  "identity_preservation": {
    "use_reference_image": true,
    "strict_identity_lock": true,
    "alter_face": false,
    "alter_body_structure": false,
    "notes": "The woman’s facial features, proportions, and overall identity must exactly match the provided reference image (image_0.png)."
  },
  "subject": {
    "gender": "female",
    "pose": {
      "position": "sitting",
      "seat": "textured white bouclé armchair",
      "hands": "hands clasped together",
      "head_direction": "looking thoughtfully to the upper right",
      "expression": "calm, reflective, slight natural smile"
    },
    "appearance": {
      "skin": {
        "quality": "flawlessly smooth, healthy, clean",
        "realism": "highly realistic texture and natural tone under stage lighting",
        "constraints": "no acne, no blemishes, no artificial plastic look"
      },
      "accessories": [
        "watch on left wrist",
        "ring"
      ],
      "glasses": "none"
    }
  },
  "wardrobe": {
    "outfit": {
      "jacket": "oversized grey suit jacket",
      "trousers": "oversized grey suit trousers"
    },
    "footwear": "classic polished black leather loafers",
    "aesthetic": "old money, sophisticated, understated luxury"
  },
  "environment": {
    "location": "professional conference stage",
    "furniture": {
      "side_table": {
        "items": [
          "clear plastic water bottle",
          "{argument name="placard text" default="FAST COMPANY placard"}"
        ]
      }
    },
    "background": {
      "design": "large colorful geometric shapes",
      "colors": ["yellow", "blue", "red"],
      "branding": "{argument name="branding logo" default="FAST COMPANY"} logo prominently displayed above"
    }
  },
  "lighting": {
    "type": "professional studio stage lighting",
    "effects": [
      "realistic shadows",
      "clear highlights on face, clothing, and chair textures"
    ]
  },
  "camera": {
    "clarity": "excellent",
    "iso": "balanced",
    "look": "high-end editorial, candid conference photography"
  },
  "quality": {
    "realism": "ultra-realistic",
    "detail_level": "high detail on fabric, skin, and furniture textures",
    "finish": "premium, expensive editorial photograph feel"
  },
  "constraints": [
    "Do not change facial identity",
    "Do not add or remove accessories except as specified",
    "No stylization, illustration, or CGI look",
    "No text overlays other than FAST COMPANY branding",
    "No watermarks"
  ],
  "output_goal": "Create a high-resolution, candid editorial photograph of a woman seated on a professional conference stage, perfectly matching the reference identity, with refined styling, realistic lighting, and a premium FAST COMPANY event atmosphere."
}
```

## 80s City Pop Illustration of Drama Characters

> Retro illüstrasyon üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Used a custom Nano Banana Pro prompt to turn scenes featuring Park Sumi (played by Sara Minami), Miruku Yaguchi (played by Harumi Deguchi), and Mako Iwakuma (played by Mitsuki Yoshida) from the drama 'All Greens' into an 80s City Pop style illustration.
```

## Curvy Woman on Luxury Yacht Prompt

> Fotogerçekçi, minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{ "scene": "A young woman sitting at the helm of a luxury yacht on the open ocean under a bright, partly cloudy sky.",

"subject": { "character": "Young woman with a curvy physique and tanned complexion, posing while steering a boat.",

"face": {
  "structure": "Soft oval face with rounded cheeks and a defined jawline.",
  "skin": "Sun-kissed tanned skin with a natural glow and subtle texture.",
  "eyes": {
    "shape": "Almond-shaped",
    "color": "Dark brown",
    "expression": "Alluring, direct gaze over the shoulder toward the lens."
  },
  "mouth": {
    "lips": "Full, naturally pigmented lips with a slight pouty, neutral expression."
  },
  "makeup": "Minimal, natural 'no-makeup' look with groomed eyebrows and a hint of lip balm."
},

"hair": {
  "color": "Deep espresso brown, appearing almost black in shadows.",
  "length": "Medium length, approximately shoulder-blade level when down.",
  "texture": "Type 3C curly texture; dense, coiled, and naturally voluminous.",
  "style": "High messy bun updo with loose tendrils and natural flyaways around the hairline.",
  "visible": "Secured on top of the head, revealing the neck and back."
},

"accessories": {
  "hat": {
    "type": "none",
    "color": "n/a",
    "detail": "n/a",
    "fit": "n/a"
  }
}
},

"pose": { "overall": "Seated, twisting torso back toward the camera in a dynamic, over-the-shoulder pose.",

"position": {
  "base": "Seated on a blue cushioned bench at the boat's helm.",
  "orientation": "Body angled toward the steering wheel, head turned 90 degrees back."
},

"torso": {
  "direction": "Facing the helm station.",
  "position": "Twisted rightward to face the viewer, arching the back slightly."
},

"hips": {
  "position": "Seated firmly on the cushion.",
  "emphasis": "Highly emphasized curvature, angled to showcase the profile."
},

"legs": {
  "position": "Left leg bent at the hip and knee, foot resting on the deck; right leg tucked.",
  "visible": "Lower left thigh and knee visible in the foreground."
},

"arms": {
  "position": "Left arm extended forward with the hand gripping the steering wheel; right arm tucked close to the side."
},

"head": {
  "turn": "Sharp turn over the left shoulder.",
  "expression": "Sultry and confident."
}
},

"outfit": { "swimwear": { "type": "Two-piece bikini", "color": "Brown and white gingham (checkered) pattern.",

  "top": {
    "style": "Halter-neck triangle top with white ruffled lace trim.",
    "ties": "Thin brown string ties at the neck and back.",
    "coverage": "Minimal to moderate."
  },

  "bottom": {
    "style": "High-cut, cheeky thong-style bottoms with matching white ruffle edges.",
    "cut": "High-leg/Y-cut over the hips.",
    "ties": "Side-tie strings visible on the right hip.",
    "coverage": "Minimal, cheeky coverage."
  }
}
},

"body": { "type": "Curvy, athletic 'slim-thick' build.", "skin": "Even tan with natural skin variations; slight visible stretch marks on the outer hip and glute area.", "back": "
```

## Baroque Candlelight Oil Painting Fusion (Image-to-Image)

> Sinematik, elle çizilmiş mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "Use the uploaded reference image to **preserve 100% of the facial features, identity, age, skin tone, and expression** of the person. Do not alter facial structure or proportions. Create a **Baroque candlelight portrait with an oil-painting and watercolor hybrid style**. The face remains soft, realistic, and clearly recognizable from the reference, rendered with rich painterly brush strokes and subtle watercolor translucency. Hair follows the exact reference style, catching warm rim light from flickering candles. Clothing: classic dark-toned attire (velvet, brocade, or textured fabric) with painterly highlights and deep shadows. Background: dim antique interior with ornate drapery, aged walls, and multiple glowing candles creating pools of golden light. Dramatic chiaroscuro lighting with deep shadows, glowing highlights on skin, and subtle smoky atmosphere. Fine sketch lines visible beneath paint layers, textured canvas look, rich warm palette ({argument name=\"color palette\" default=\"amber, umber, burnt sienna, deep crimson\"}), cinematic depth, museum-quality fine art finish.",
  "negative_prompt": "blurry, low quality, deformed, extra limbs, bad anatomy, watermark, text overlay, anime, cartoon, overexposed, flat lighting, plastic skin, harsh outlines, digital neon, modern setting, face altered, identity changed",
  "parameters": {
    "steps": 50,
    "cfg_scale": 7.2,
    "sampler": "Euler a or DPM++ 2M Karras",
    "strength": 0.53,
    "noise": 0.28,
    "width": 832,
    "height": 1216,
    "aspect_ratio": "2:3"
  },
  "usage_instructions": "Upload your image in img2img or reference mode. Keep strength around 0.5–0.55 to maintain **100% face match**, while transforming the scene into a dramatic Baroque candlelit painting with watercolor undertones."
}
```

## Surreal Moth-Winged Female Portrait

> Fotogerçekçi, retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Surreal portrait photography, eye level, pale humanoid female with large moth wings on head and red circular eye makeup, red textured jacket with black buttons and white collar, standing motionless with intense gaze, red vintage floral wallpaper wall with empty ornate gold frame, vibrant {argument name="color palette" default="red and black"} palette, soft diffuse studio lighting and eerie atmosphere, hyper realistic textures and symmetry, Kodak Ektar 100 + 85mm Short Telephoto lens.
```

## Candid Dressing Room Portrait JSON Prompt

> 3B sahne üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{   "prompt": "A realistic, candid full-body photo of a woman standing in a cluttered dressing room trailer. She is wearing a fitted black latex corset top with a front zipper, a matching black latex mini skirt with dangling garter straps, and black thigh-high boots. She stands with a relaxed posture, arms by her sides, looking away to her left. The background features a full-length mirror, a black leather couch, and hanging garment bags. Flash photography style, raw and unpolished aesthetic. sfw",   "negative_prompt": "illustration, 3d render, painting, cartoon, drawing, deformed, ugly, distorted",   "aspect_ratio": "3:4",   "notes": "Face and hair descriptions have been omitted to allow for reference image usage." }
```

## Candid Smartphone Group Photo on a Boat

> Fotogerçekçi görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "aspect_ratio": "4:5",
  "scene_type": "outdoor summer lifestyle group photo on a boat",
  "camera": {
    "device": "smartphone rear camera",
    "angle": "slightly low, behind subjects",
    "framing": "full body, rear-facing",
    "focus": "sharp subjects, clear background",
    "style": "casual candid snapshot"
  },
  "subjects": [
    {
      "position": "far left",
      "gender": "female",
      "age": "adult",
      "hair": "light blonde, medium length, loose, wind-tousled",
      "face": "partial side profile, head turned slightly right, gaze downward, neutral expression",
      "posture": "standing on cushioned seat, weight on right leg, hips shifted right, slight forward lean",
      "arms": "left arm raised holding frame, right arm relaxed",
      "hands": "loose secure grip",
      "feet": "barefoot, left foot flat, right heel lifted",
      "clothing": "white oversized sweatshirt, black bikini bottoms"
    },
    {
      "position": "second from left",
      "gender": "female",
      "age": "adult",
      "hair": "dark brown, long, loosely tied with flyaways",
      "face": "fully visible, head turned over right shoulder, looking at camera, wide smile",
      "posture": "upright stance on seat, even weight, hips centered, slight back arch",
      "arms": "both arms raised gripping frame",
      "hands": "firm grip",
      "feet": "barefoot, both feet flat",
      "clothing": "maroon sweatshirt, white patterned bikini bottoms"
    },
    {
      "position": "second from right",
      "gender": "female",
      "age": "adult",
      "hair": "light blonde, long, loose waves",
      "face": "partially visible, head turned back slightly, side glance, neutral to mild pout",
      "posture": "standing relaxed, weight on left leg, hips angled left, slight torso twist",
      "arms": "right arm raised holding frame, left arm relaxed",
      "hands": "light grip",
      "feet": "barefoot, left foot flat, right foot slightly behind",
      "clothing": "muted teal sweatshirt, pink bikini bottoms"
    },
    {
      "position": "far right",
      "gender": "female",
      "age": "adult",
      "hair": "dark brown, long, loose under cap",
      "face": "mostly obscured, head angled downward, gaze toward floor or water",
      "posture": "standing with slight forward lean, weight on right leg, hips angled outward",
      "arms": "left arm raised holding frame, right arm relaxed",
      "hands": "firm grip",
      "feet": "barefoot, feet close together",
      "clothing": "dark gray hoodie, dark bikini bottoms, blue baseball cap with white/red text"
    }
  ],
  "objects": {
    "boat": "motorboat with light gray padded vinyl seats and black overhead canopy frame with branding"
  },
  "environment": {
    "location": "river or lake",
    "background": "calm rippling water, dense green trees, clear blue sky"
  },
  "lighting": {
    "type": "natural daylight",
    "time": "late morning or early afternoon",
    "dire"
}
```

## Candid Sauna Portrait JSON Prompt

> Minimal mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": "Interior of a wooden sauna",
  "subject": {
    "character": "Young woman",
    "face": {
      "structure": "Round to oval",
      "skin": "Light, dewy, flushed from heat",
      "eyes": {
        "shape": "Almond",
        "color": "Dark brown",
        "expression": "Playful, looking back at camera"
      },
      "mouth": {
        "lips": "Natural pink, closed slight smile"
      },
      "makeup": "Minimal, natural look"
    },
    "hair": {
      "color": "Dark brown to black",
      "length": "Shoulder-length",
      "texture": "Straight with slight texture from humidity",
      "style": "Loose with full bangs",
      "shine": "Matte to slight sheen"
    },
    "accessories": {
      "anklet": "Gold chain on left ankle"
    }
  },
  "pose": {
    "overall": "Squatting/crouching on a bench",
    "position": {
      "base": "Feet flat on the wooden bench",
      "orientation": "Back turned towards the viewer"
    },
    "torso": {
      "direction": "Angled away from camera",
      "posture": "Leaning slightly forward, back arched"
    },
    "arms": {
      "position": "Right hand resting on the bench edge, left arm extended down",
      "other": "Relaxed"
    },
    "legs": {
      "position": "Deep knee bend (squat)",
      "visible": "Full legs visible"
    },
    "head": {
      "turn": "Turned over left shoulder",
      "expression": "Engaging directly with the camera"
    }
  },
  "outfit": {
    "swimwear": {
      "type": "Bikini",
      "color": "Black",
      "style": "Classic two-piece",
      "details": {
        "top": "Spaghetti straps, hook closure at back",
        "cutouts": "None",
        "design": "Solid color, simple",
        "coverage": "Standard bikini bottom"
      }
    }
  },
  "body": {
    "type": "Fit, curvy",
    "skin": "Light tone, glistening with sweat/moisture",
    "midriff": "Visible",
    "moles": "None prominent"
  },
  "environment": {
    "location": "Sauna interior",
    "sauna_structure": {
      "walls": "Vertical wooden paneling",
      "benches": "Horizontal wooden slats",
      "material": "Light-medium wood"
    },
    "props": {
      "towels": "Stack of white folded towels on the bench behind subject"
    }
  },
  "lighting": {
    "type": "Diffused ambient",
    "quality": {
      "intensity": "Soft",
      "direction": "Overhead"
    },
    "on_subject": {
      "skin": "Highlights from moisture/sweat on shoulders and back",
      "hair": "Soft lighting",
      "water": "Steam effect in air"
    }
  },
  "photography": {
    "angle": "Eye-level with the squatting subject",
    "framing": "Full body, slightly cropped at feet",
    "focus": "Sharp on subject, slightly soft background",
    "style": "Candid, lifestyle"
  },
  "color_palette": {
    "subject": {
      "hair": "Black",
      "skin": "Fair with pink undertones",
      "swimsuit": "Black",
      "jewelry": "Gold"
    },
    "environment": {
      "wood": "Warm cedar"
```

## Mirror Selfie with Cat Ears and Gingham Skirt Prompt

> Mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": {
    "subject": {
      "description": "A young woman with long blonde hair and fair skin, wearing white fluffy cat ears headband.",
      "attire": {
        "top": "Pink brocade corset with front lacing and trim.",
        "bottom": "Pink gingham ruffled mini skirt with white lace trim.",
        "accessories": "Pink collar choker with a small silver bell, white thigh socks with pink stripes at the top.",
        "jewelry": "Small stud earrings, delicate gold bracelet."
      },
      "expression": "Playful, looking up and to the left with tongue sticking out, slight smile, light eye makeup with winged liner, pink lip color, rosy cheeks, defined nose.",
      "action": "Taking a mirror selfie with a white iPhone held in her right hand, showing her reflection."
    },
    "background": {
      "setting": "Modern apartment interior.",
      "elements": "Large floor-to-ceiling windows showing a bright daytime cityscape and sky.",
      "flooring": "Grey wood plank flooring.",
      "objects": {
        "left_side": "Large brown teddy bear leaning against a grey tiled wall section.",
        "right_side": "White upholstered armchair, wooden side table, green artificial ivy plant hanging in the foreground, clear glass vase on a shelf.",
        "reflection": "The mirror itself shows the reflection of the subject and the room.",
        "text": "White text '{argument name=\"text overlay\" default=\"HIII\"}' overlaying the background near the chair."
      },
      "lighting": "Bright natural daylight from the windows."
    },
    "style": "Mirror selfie photograph.",
    "aspect_ratio": "2:3"
  }
}
```

## Instagram Style Waist-Up Portrait with Direct Flash

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_style": {
    "type": "photorealistic",
    "aesthetic": "Instagram shot",
    "effects": [
      "film grain",
      "direct flash"
    ]
  },
  "composition": {
    "framing": "waist-up photograph",
    "aspect_ratio": "9:16"
  },
  "subject": {
    "description": "young woman",
    "constraint_note": "do not alter the sensitivity of the face and features",
    "pose": {
      "orientation": "facing the camera directly",
      "head": "tilted slightly to the side",
      "eyes": "closed",
      "action": "covering her face with her hand, pulling her elbow away and lifting it to the side",
      "mood": [
        "elegant",
        "pensive",
        "playful"
      ]
    },
    "appearance": {
      "attire": [
        "black velvet corset",
        "expensive black cape"
      ],
      "hair": "loose",
      "makeup": {
        "style": "nude",
        "lipstick": "matte nude"
      },
      "details": [
        "décolletage highlighted",
        "long, square black nails"
      ]
    }
  },
  "setting": {
    "background": "white wall",
    "foreground_elements": "art object placed in front of the wall"
  }
}
```

## Rosé Casino Flash Photography Portrait

> Retro, fütüristik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_prompt_data": {
    "subject": {
      "appearance": "{argument name="Celebrity Name" default="Rosé from Blackpink"}, with long, flowing blonde hair. Radiant complexion.",
      "expression": "Neutral to slightly serious, confident gaze, looking directly down at the camera lens.",
      "pose": "Sitting on a red leather bar stool, body angled slightly to the left, legs crossed at the knees, hands resting gently on her thighs."
    },
    "apparel": {
      "clothing": "Fitted white mini dress (slip dress style) with thin, sparkling rhinestone or silver chain spaghetti straps.",
      "footwear": "White satin platform sandals with high block heels and buckle ankle straps.",
      "accessories": "Large silver hoop earrings, delicate silver rings on fingers."
    },
    "environment": {
      "setting": "Casino interior, dimly lit background.",
      "objects": "Large slot machine to the left with illuminated neon signage reading 'TRIPLE JACKPOT GEMS'.",
      "furniture": "Red cushioned swivel bar stool with a metallic bronze base.",
      "flooring": "Retro-patterned casino carpet featuring swirling designs in teal, blue, and orange.",
      "background_details": "Blurred casino lights, wooden paneling, slight reflection on the slot machine glass."
    },
    "technical_specs": {
      "camera_angle": "Low angle shot (worm's-eye view), looking up at the subject to emphasize the legs and shoes.",
      "lighting": "Direct on-camera flash photography. Hard lighting with distinct shadows behind the subject and high contrast.",
      "aesthetic": "Y2K vintage digital camera vibe, paparazzi style, candid celebrity snapshot, slight film grain, high saturation."
    }
  },
  "full_prompt_string": "Low angle flash photography of Rosé from Blackpink sitting on a red casino stool. She is wearing a fitted white mini dress with rhinestone straps and white platform block heels. She is next to a slot machine that says 'TRIPLE JACKPOT GEMS'. Retro casino carpet floor. Direct flash, harsh shadows, 2000s digicam aesthetic, glamorous but gritty."
}
3:4
```

## Candid Medium Shot in Minimalist Studio

> Minimal, stüdyo ışıklı görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a candid, high-resolution medium shot of a young woman with dark hair and bangs, sitting at a light wood table. She is wearing a simple black scoop-neck tank top and a delicate silver necklace with a small dark pendant. She has a subtle nose ring and is captured mid-expression with her mouth slightly open, looking to the side. In front of her lies an open notebook with red-edged pages. The background is a clean, solid off-white wall, creating a bright, minimalist, and contemporary atmosphere. Soft, even studio lighting with minimal shadows.
```

## Photorealistic Japanese Schoolgirl Portrait at Golden Hour

> Fotogerçekçi, elle çizilmiş portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_generation_prompts": {
    "natural_language_prompt": "A photorealistic portrait of a young woman with long, wavy platinum blonde hair standing outdoors on a sunny street. She has her eyes closed in a serene expression and is smiling softly while tilting her head. She is making a 'rock on' hand sign (index and pinky finger raised) with her right hand near her face. She is wearing a white short-sleeved school uniform shirt with grey cuffs and a distinctive cluster of three pastel ribbons (pink and lavender) pinned to the chest. She wears a grey pleated skirt and is holding a pink cardigan in her left hand. The background features a concrete wall, green bushes, and a glimpse of a sign with Japanese text, all bathed in warm, golden-hour sunlight with distinct shadows.",
    "tag_based_prompt": "1girl, solo, cosplay, photorealistic, realistic, 8k uhd, dslr, soft lighting, golden hour, long wavy hair, platinum blonde hair, closed eyes, smile, head tilt, hand up, rock on gesture, sign of the horns, white shirt, short sleeves, grey cuffs, school uniform, three bows on chest, pink bow, purple bow, pleated skirt, holding pink cardigan, outdoors, street, concrete wall, foliage, trees, japanese sign, depth of field, blurred background",
    "negative_prompt": "open eyes, blue eyes, angry, sad, low quality, jpeg artifacts, blurry, bad anatomy, bad hands, missing fingers, extra fingers, text, watermark, signature, cartoon, 2d, sketch, illustration, dark, night, rain"
  },
  "parameters": {
    "aspect_ratio": "3:4",
    "model_style": "Photorealistic / Cinematic",
    "lighting": "Natural Sunlight / Golden Hour",
    "camera_angle": "Eye level, medium shot"
  }
}
```

## Ultra-Realistic Red Carpet Portrait Prompt

> Fotogerçekçi, sinematik logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_prompt": {
    "subject": {
      "name": "{argument name="subject name" default="Ana de Armas"}",
      "description": "young woman with shoulder-length layered Black hair, soft waves, blue eyes, soft natural makeup with nude pink lipstick, glowing skin complexion",
      "pose": "looking directly at camera, slight smile, confident red carpet stance, head and shoulders portrait"
    },
    "outfit": {
      "item": "{argument name="outfit item" default="Red dress"}",
      "details": "black beaded geometric web pattern over nude sheer illusion fabric, sweetheart neckline, intricate black sequin embroidery, sleeveless, structured fit",
      "style": "glamorous, high fashion, couture"
    },
    "environment": {
      "setting": "movie premiere red carpet event",
      "background": "dark blurred media wall with unrecognizable white and red logos, professional event backdrop",
      "atmosphere": "exclusive, cinematic, celebrity sighting"
    },
    "technical_specs": {
      "lighting": "soft professional flash photography, rim lighting on hair, even facial illumination, no harsh shadows",
      "camera": "85mm lens, f/1.8 aperture, sharp focus on eyes, bokeh background",
      "quality": "8k resolution, ultra-realistic, highly detailed texture, raw photo, photorealism, masterpiece",
      "aspect_ratio": "9:16"
    }
  },
  "negative_prompt": "cartoon, illustration, painting, drawing, bad anatomy, blurry, low quality, distorted eyes, text, watermark, logo, oversaturated, messy hair, wrong face",
  "parameters": {
    "size": "highest_resolution",
    "orientation": "vertical",
    "style_preset": "photographic" Ratio 3.4
  }
```

## Monochrome Fine Art Couple Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
[
style = fine art studio portrait, ultra-realistic, high-resolution
color = black and white
aspect_ratio = 2:3
mood = moody, emotional, intimate, cinematic

[SUBJECTS]
female = {argument name="female subject" default="Hollywood actress"}, long wavy dark hair, soft serious expression, elegant presence
male = seated man, use my face, fair skin, short hair, trimmed beard and mustache, wearing glasses

[POSE & INTERACTION]
positioning = woman standing behind the seated man
interaction = woman wraps arms around his shoulders
hands = man's hands resting over hers, symbolizing intimacy and unity
body_language = calm, connected, emotionally close

[CLOTHING]
female_outfit = dark, form-fitting top, minimal styling
male_outfit = buttoned black shirt, clean and classic

[LIGHTING]
type = soft dramatic studio lighting
contrast = gentle highlights with deep shadows
focus = facial features and hands

[BACKGROUND]
setting = neutral studio backdrop
distractions = none, clean and minimal

[CAMERA]
shot_type = medium portrait
lens_style = professional studio photography
depth_of_field = shallow, subject-focused

[QUALITY]
detail = hyper-detailed skin texture, natural hair flow
realism = ultra-realistic
art_style = fine art portrait photography
```

## Realistic Amateur Photo of Woman in Lace Bodysuit

> Fotogerçekçi, elle çizilmiş 3B sahne üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "model_target": "Nano Banana Pro / SDXL Realistic",
  "prompt_data": {
    "positive_prompt": "score_9, score_8_up, score_7_up, score_9_up, source_anime, (masterpiece, best quality, ultra-realistic, raw photo, 8k uhd, photorealistic:1.4), 1girl, solo, asian, short black hair, bob cut, messy hair, sitting on floor, kneeling, twisted torso, looking away, looking down, profile view, from side, (barefoot:1.3), (soles:1.2), toes, foot focus, arched back, curvy body, detailed skin texture, skin pores, moles, soft lighting, warm lighting, indoor, living room, night, (mauve lace bodysuit:1.2), lingerie, off-shoulder, textured fabric, sheer, backless, high-cut leg, clothing slipping, beige carpet, messy room, cluttered floor, electrical wires, cables on floor, power strip, (white leather sofa:1.1), red metal rolling cart, marshall speaker on cart, candle light, plastic bags, small round table, large window, night city view, reflection in window, depth of field, amateur photography, phone camera style, grainy, noise, harsh shadows, candid, intimate, cozy atmosphere, unmade room, lifestyle photography.",
    "negative_prompt": "score_6, score_5, score_4, (worst quality, low quality, normal quality:1.4), (cleft, cropped, artifacts, signature, watermark, username, artist name:1.4), sketch, cartoon, drawing, anime, 3d, render, illustration, painting, airbrushed, plastic skin, smooth skin, bad anatomy, bad hands, missing fingers, extra fingers, malformed limbs, floating limbs, disconnected limbs, mutated, ugly, disgusting, amputation, makeup, bright lights, studio lighting, tidy room, clean floor, grayscale, monochrome.",
    "parameters": {
      "cfg_scale": 5.5,
      "steps": 30,
      "sampler": "DPM++ 2M Karras",
      "clip_skip": 2,
      "aspect_ratio": "3:4"
    }
  }
}
```

## Photorealistic Polaroid Still Life on Red Roses Prompt

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "task_type": "photoreal_polaroid_on_roses_couple_cheek_kiss",
      "version": "v1.0_RED_ROSES_POLAROID_COUPLE_CHEEK_KISS_NO_TEXT_EN",
      "priority": "highest",
      "language": "en"
    },
    "output_settings": {
      "aspect_ratio": "4:5",
      "orientation": "portrait",
      "resolution_target": "ultra_high_res",
      "render_style": "ultra_photoreal_analog_polaroid_editorial",
      "sharpness": "slightly_soft_analog",
      "film_grain": "medium_analog",
      "color_grade": "rich_crimson_roses_with_warm_flash",
      "dynamic_range": "natural_not_hdr",
      "skin_rendering": "real_texture_analog",
      "no_text": true,
      "no_logos": true,
      "no_watermarks": true,
      "no_ui": true
    },
    "creative_prompt": {
      "scene_summary": "Ultra-photorealistic romantic still life: a single instant-film Polaroid photo lying diagonally on a bed of lush red roses. Inside the Polaroid image, a young woman holds a bouquet of red roses while her boyfriend leans in and kisses her on the cheek. Warm on-camera flash look with subtle bokeh lights in the background. Realistic Polaroid border texture, slight glare, minor film imperfections. No text anywhere.",
      "composition": {
        "top_down": true,
        "surface": "dense bed of red roses filling the entire frame",
        "polaroid": {
          "position": "diagonal, slightly tilted",
          "border": "classic white instant-film border with thicker bottom margin",
          "paper_texture": "subtle fiber texture, slight corner lift, gentle shadow on roses",
          "no_writing": true
        }
      },
      "inside_polaroid_scene": {
        "setting": "nighttime with warm bokeh lights, intimate romantic mood",
        "lighting": "direct on-camera flash, warm highlights, soft shadow falloff",
        "subjects": {
          "female_adult": {
            "look": "long dark hair, elegant makeup, warm natural skin texture",
            "wardrobe": "simple evening dress or top in dark neutral tone",
            "prop": "large bouquet of red roses wrapped in white paper",
            "pose": "facing camera, holding bouquet at chest level, soft smile"
          },
          "male_adult": {
            "look": "short dark hair, clean grooming",
            "wardrobe": "dark jacket or shirt (neutral)",
            "pose": "leaning in from the side, kissing her cheek gently, one hand lightly around her shoulder or waist"
          }
        }
      },
      "realism_requirements": {
        "polaroid_authenticity": [
          "slight vignette",
          "subtle grain",
          "minor color shift typical of instant film",
          "tiny dust specks",
          "gentle flash glare on skin and bouquet wrap"
        ],
        "roses_detail": "high-detail rose petals with natural folds, deep crimson tones, soft shadows between blooms"
      },
      "anatomy_constraints": {
        "priority":
```

## Face and Hairstyle Swap for Studio Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "Ultra-realistic studio portrait of a young woman in a three-quarter profile pose, head slightly turned toward the camera. She is wearing a black textured blazer over a dark top with minimal accessories, including a small hoop earring. Background is a solid deep red studio backdrop with a smooth gradient. Lighting is soft, diffused studio lighting with gentle shadows and even skin tones. Replace ONLY the face and hairstyle using the reference image. Keep body, pose, clothing, background, lighting, camera angle, framing, and image quality exactly the same. Ensure the new face matches the original head size, angle, and expression with seamless skin blending and natural hair integration. Photorealistic, cinematic quality, sharp focus on eyes, shallow depth of field.",
  "negative_prompt": "face distortion, wrong head size, mismatched skin tone, altered pose, changed clothing, different background, lighting mismatch, blurry face, artifacts, unrealistic hair, over-smoothing",
  "style": "photorealistic",
  "camera": {
    "shot": "close-up portrait",
    "angle": "three-quarter view",
    "depth_of_field": "shallow"
  },
  "lighting": "soft studio lighting",
  "background": "solid deep red",
  "quality": "high resolution",
  "face_swap": {
    "enabled": true,
    "change_only": ["face", "hairstyle"],
    "preserve": ["pose", "body", "clothing", "background", "lighting", "camera_angle"]
  }
}
```

## Romantic Silk Nightwear Portrait Prompt

> Fotogerçekçi, lüks portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_generation_request": {
    "technical_configuration": {
      "aspect_ratio": "3:4",
      "resolution": "8K Ultra HD",
      "rendering_engine": "Photorealistic / Ray-traced",
      "camera_settings": {
        "shot_type": "Medium Shot (Mid-shot)",
        "focal_length": "85mm (Portrait Lens)",
        "aperture": "f/2.8",
        "focus_point": "Sharp focus on eyes and facial features",
        "depth_of_field": "Soft bokeh background"
      }
    },
    "subject_details": {
      "identity": {
        "reference": "the person I uploaded",
        "fidelity": "Strict face preservation (100% likeness)",
        "demographics": "Adult female"
      },
      "physical_attributes": {
        "hair": {
          "color": "Jet black",
          "length": "Long",
          "style": "Loose, flowing waves",
          "interaction": "Hand running through strands"
        },
        "expression": {
          "mouth": "Soft, inviting smile",
          "eyes": "Warm and engaging",
          "mood": "Romantic, relaxed, sensual"
        }
      },
      "pose_composition": {
        "left_hand": "Raised, gently running fingers through hair",
        "right_hand": "Resting comfortably on the natural waistline",
        "posture": "Relaxed but elegant standing pose",
        "orientation": "Slightly angled towards the camera"
      }
    },
    "wardrobe_specifications": {
      "layer_1_nightgown": {
        "garment": "Slip dress / Nightgown",
        "color": "Dark pink / Magenta",
        "fabric_finish": "Metallic sheen",
        "texture": "Smooth satin blend",
        "details": "Intricate lace detailing along the neckline and hem"
      },
      "layer_2_robe": {
        "garment": "Matching robe",
        "material": "Pure silk",
        "color": "Dark pink (matching tone)",
        "drape": "Loose and flowing over shoulders",
        "surface_reaction": "High reflectivity to light"
      }
    },
    "environmental_context": {
      "setting": "Indoor / Boudoir",
      "background_elements": {
        "wall_color": "Deep Teal",
        "textiles": "Dark, heavy curtain (velvet texture)",
        "atmosphere": "Intimate and cozy"
      }
    },
    "lighting_and_atmosphere": {
      "style": "Soft Romantic Indoor Lighting",
      "key_light": "Diffused softbox from the side",
      "highlights": "Emphasis on the metallic sheen of the nightgown and silk robe",
      "shadows": "Gentle, flattering contouring",
      "color_grade": "Warm tones with contrasting cool background (Teal vs Pink)"
    }
  }
}
```

## Virat Kohli Nano-Style Cricket Cartoon

> Sinematik illüstrasyon üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
“{argument name="Athlete Name" default="Virat Kohli"} in Nano-style (small, cute, stylized) hitting his 54th century against {argument name="Opponent Team" default="New Zealand"} at {argument name="Stadium Name" default="Indore Stadium"}, Team India jersey, cricket bat mid-swing, dynamic motion blur, stadium lights glowing, cheering crowd in soft focus, dramatic cinematic lighting, vibrant colors, energetic and heroic pose, ultra-detailed cartoonish style.” 🏏
```

## Photorealistic Acro-Yoga Couple Portrait with Identity Lock

> Fotogerçekçi portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photoreal_romantic_candid_outdoor",
      "version": "v1.0_ACROYOGA_AIRPLANE_PICNIC_MEADOW_DAYLIGHT_NO_TEXT",
      "priority": "highest"
    },
    "references": {
      "reference_image_1": {
        "source": "UPLOAD_REFERENCE_IMAGE (REQUIRED)",
        "purpose": "FACE_IDENTITY_LOCK_FEMALE",
        "strict_lock": true,
        "face_similarity_priority": "MAX",
        "no_identity_blending": true,
        "no_beautify": true,
        "no_age_shift": true,
        "preserve_skin_texture": true,
        "preserve_facial_proportions": true
      },
      "reference_image_2": {
        "source": "UPLOAD_REFERENCE_IMAGE (REQUIRED)",
        "purpose": "POSE_COMPOSITION_LOCK_ACROYOGA_AIRPLANE",
        "strict_lock": true,
        "preserve_pose": true,
        "preserve_composition": true
      }
    },
    "output_settings": {
      "aspect_ratio": "4:5",
      "orientation": "portrait",
      "resolution_target": "ultra_high_res",
      "render_style": "candid_editorial_photoreal",
      "sharpness": "natural_crisp_faces",
      "film_grain": "subtle_35mm",
      "color_grade": "soft_daylight_natural_greens",
      "dynamic_range": "natural_not_hdr",
      "skin_rendering": "real_texture_no_filter"
    },
    "creative_prompt": {
      "scene_summary": "Ultra-photorealistic candid outdoor couple photo in a green meadow during soft daylight. A playful acro-yoga 'airplane' moment: the man lies on his back on a red picnic blanket and lifts the woman horizontally above him with both hands (supporting her torso/waist area). The woman stretches both arms wide like flying, laughing toward camera. Realistic proportions, safe stable pose, spontaneous joyful vibe.",
      "environment": {
        "location": "open grassy meadow with rolling hills",
        "background": "soft-focus hills, a few trees, cloudy sky, distant people very small",
        "lighting": "natural overcast daylight, soft shadows, no flash"
      },
      "subjects": {
        "female": {
          "identity": "MATCH_REFERENCE_FACE_EXACTLY",
          "wardrobe": "white casual set (sleeveless top + loose pants), clean and sporty",
          "expression": "big genuine laugh, eyes smiling",
          "pose": "horizontal flying pose, arms wide, legs extended, body straight",
          "hands_nails": "short_natural_nails_clear_or_nude_polish_not_acrylic",
          "no_rings": "no_engagement_ring_no_solitaire"
        },
        "male": {
          "wardrobe": "light blue hoodie + light denim jeans",
          "pose": "lying on back, arms extended upward supporting her securely, relaxed face"
        }
      },
      "props": {
        "picnic": "{argument name="picnic blanket color" default="red"} blanket, small bag and casual picnic items at edge (subtle, not branded)"
      },
      "camera_style": {
        "framing": "vertical 4:5, full scene including blanket and both bodies, slight wide-an"
      }
    }
  }
}
```

## Viral Luxury Car Interior Slideshow Pose Prompt

> Lüks mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": "luxury car interior, driver seat, looking back over shoulder",

  "subject": {
    "character": "PLATINUM BLONDE GIRL, early 20s, petite slim frame",
    
    "face": {
      "structure": "soft delicate features, rounded cheeks, doll-like",
      "skin": "porcelain pale with heavy pink-red blush on cheeks",
      "eyes": {
        "shape": "large round doe eyes",
        "color": "light green-grey",
        "expression": "looking back at camera, soft innocent gaze"
      },
      "mouth": {
        "lips": "full, natural pink, slight pout"
      },
      "makeup": "natural base with intense pink blush, subtle eye makeup"
    },
    
    "hair": {
      "color": "PLATINUM BLONDE white-silver",
      "length": "medium, past shoulders",
      "texture": "straight with slight wave, soft",
      "style": "middle part, loose and natural, tucked behind one ear",
      "shine": "healthy soft shine"
    }
  },

  "pose": {
    "overall": "sitting in car driver seat, twisted to look back over shoulder",
    
    "position": {
      "base": "seated in luxury car driver seat",
      "orientation": "body facing forward, torso twisted back toward camera"
    },
    
    "torso": {
      "direction": "twisted to look behind",
      "curve": "back slightly arched from twist",
      "exposure": "small of back visible, midriff gap showing"
    },
    
    "arms": {
      "right": "resting on center console gear area",
      "left": "resting on lap or console",
      "hands": "near gear shift and phone"
    },
    
    "legs": {
      "position": "seated, crossed or together",
      "visible": "thighs visible in short skirt"
    },
    
    "head": {
      "turn": "looking back OVER SHOULDER at camera",
      "expression": "soft, slightly surprised, innocent"
    }
  },

  "outfit": {
    "top": {
      "type": "black strapless tube top or corset top",
      "fit": "tight, form fitting",
      "neckline": "straig{argument name="top neckline" default="ht across strapless"}",
      "length": "cropped, exposing lower back and midriff"
    },
    
    "bottom": {
      "type": "black and white gingham check mini skirt",
      "pattern": "small gingham checkered pattern",
      "colors": "black and white",
      "length": "very short mini",
      "fit": "fitted, riding up while seated"
    },
    
    "legwear": {
      "type": "sheer black tights or stockings",
      "opacity": "semi-sheer, skin visible through"
    }
  },

  "body": {
    "type": "slim, petite, feminine",
    "back": "lower back exposed in gap between top and skirt",
    "skin": "pale porcelain, smooth"
  },

  "environment": {
    "location": "inside luxury car, driver seat",
    
    "car_interior": {
      "seats": "black leather sport seats with contrast stitching",
      "style": "luxury sports car, possibly BMW or Mercedes",
      "console": "modern center console with gear shift",
      "steering": "sport steering wheel visible"
    },
    
    "view_through
```

## Mixed-Reality Hot Chocolate Pour Prompt (Image-to-Image)

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{ "action": "image_generation", "action_input": "{'prompt': "A hyper-realistic mixed-reality scene. A real human hand in the foreground pours hot chocolate from a transparent glass server into a clear glass cup. The cup appears to be emerging from inside a smartphone screen standing upright on a silver stand on a wooden cafe table. Inside the phone screen, the man from the provided image with his exact facial features, curly dark hair, and beard is wearing a warm beige winter coat and scarf.He is looking at the cup with a gentle smile, holding it as if receiving the liquid. The hot chocolate flows seamlessly from the real world into the digital screen. Soft steam rises, warm cafe lighting, cinematic realism, 8K, 9:16 aspect ratio."}" }
```

## Winter Bikini Portrait with Balaclava and Freckles

> Fotogerçekçi manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"subject": {
"description": "Young woman with light skin tone and visible freckles across the nose and cheeks. She is wearing a fuzzy, {argument name="balaclava color" default="light blue"} knit balaclava or hood that frames her face, embellished with large crystal rhinestones in heart and circular shapes. A few strands of blonde hair escape the hood near the temples. She is wearing a black bikini top with white piping trim along the edges and underwire structure. The bust volume is full and distinct, showing natural cleavage and fit within the structured cups, maintaining accurate anatomical proportions and gravity.",
"attributes": [
"light blue fuzzy balaclava",
"rhinestone embellishments",
"heart shaped crystals",
"black bikini top with white piping",
"freckles",
"blonde hair wisps",
"full bust",
"natural skin texture"
]
},
"pose": {
"description": "Standing facing directly forward towards the camera. Both hands are raised to hold the sides of the balaclava's neck portion, fingers lightly gripping the knit fabric. The arms are bent at the elbows, creating a symmetrical composition. The gaze is direct and engaging. The head is level.",
"type": "frontal medium shot",
"details": "hands holding hood, elbows out, symmetrical stance, direct eye contact"
},
"environment": {
"location": "Outdoors in a snowy winter landscape",
"elements": [
"snow-covered pine trees",
"deep snow on ground",
"hazy winter mountains in background",
"forest clearing"
],
"atmosphere": "Cold, crisp, winter day"
},
"camera": {
"shot_type": "Medium shot (waist up)",
"perspective": "Eye-level",
"focus": "Sharp focus on subject, slightly softer background depth of field",
"focal_length": "50mm to 85mm portrait lens",
"framing": "Centered subject"
},
"lighting": {
"type": "Natural overcast daylight",
"quality": "Soft, diffuse, shadowless",
"direction": "Global illumination from sky",
"tone": "Cool winter light"
},
"mood_and_expression": {
"mood": "Serene, cold, confident, slightly alluring",
"expression": "Neutral lips, soft but direct gaze",
"vibe": "Winter aesthetic, contrast between cold weather and swimwear"
},
"style_and_realism": {
"style": "Photorealistic, raw photography, social media aesthetic",
"quality": "High fidelity, 8k resolution, detailed texture",
"render": "Unreal Engine 5 level realism or high-end DSLR photography"
},
"colors_and_tone": {
"palette": [
"baby blue",
"snow white",
"black",
"warm beige skin tone"
],
"contrast": "High contrast between black swimwear and white snow",
"saturation": "Natural, slightly cool tinted due to environment"
},
"quality_and_technical_details": {
"resolution": "High resolution",
"details": "Knitted wool texture, crystal refraction, skin pores, snow grain"
},
"aspect_ratio_and_output": {
"ratio": "3:4",
"orientation": "Portrait"
},
"controlnet": {
"pose_control": {
"model_type": "OpenPose",
"purpose": "Exact skeletal and pose lock",
"constraints": [
"preserve shoulder width",
"preserve hip"
]
}
}
```

## Seahawks Football Game Day Scene Prompt

> Minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Pink drink, loud crowd, Seahawks football.
```

## Y2K Paparazzi Style Casino Portrait (Charli D'Amelio)

> Retro, fütüristik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_prompt_data": {
    "subject": {
      "appearance": "Young woman with long, straight, dark brown hair parted in the middle. Tan complexion. Resembles Charli D'Amelio.",
      "expression": "Neutral to slightly serious, confident gaze, looking directly down at the camera lens.",
      "pose": "Sitting on a red leather bar stool, body angled slightly to the left, legs crossed at the knees, hands resting gently on her thighs."
    },
    "apparel": {
      "clothing": "Fitted black mini dress (slip dress style) with thin, sparkling rhinestone or silver chain spaghetti straps.",
      "footwear": "Black satin platform sandals with high block heels and buckle ankle straps.",
      "accessories": "Large silver hoop earrings, delicate silver rings on fingers."
    },
    "environment": {
      "setting": "Casino interior, dimly lit background.",
      "objects": "Large slot machine to the left with illuminated neon signage reading 'TRIPLE JACKPOT GEMS'.",
      "furniture": "Red cushioned swivel bar stool with a metallic bronze base.",
      "flooring": "Retro-patterned casino carpet featuring swirling designs in teal, blue, and orange.",
      "background_details": "Blurred casino lights, wooden paneling, slight reflection on the slot machine glass."
    },
    "technical_specs": {
      "camera_angle": "Low angle shot (worm's-eye view), looking up at the subject to emphasize the legs and shoes.",
      "lighting": "Direct on-camera flash photography. Hard lighting with distinct shadows behind the subject and high contrast.",
      "aesthetic": "Y2K vintage digital camera vibe, paparazzi style, candid celebrity snapshot, slight film grain, high saturation."
    }
  },
  "full_prompt_string": "Low angle flash photography of a young woman resembling Charli D'Amelio sitting on a red casino stool. She is wearing a black mini dress with rhinestone straps and black platform block heels. She is next to a slot machine that says 'TRIPLE JACKPOT GEMS'. Retro casino carpet floor. Direct flash, harsh shadows, 2000s digicam aesthetic, glamorous but gritty."
```

## Cinematic Portrait of Couple in Intimate Embrace

> Sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": {
    "subject_1": {
      "gender": "{argument name="female celebrity" default="Hania Amir"}",
      "appearance": "dark hair styled in a loose updo with stray tendrils framing her face, fair skin",
      "attire": "sleeveless crimson red satin V-neck gown with a wrap-style bodice",
      "accessories": "small gold hoop earring in her left ear",
      "pose": "body angled slightly towards the man, looking up at him with a gentle, affectionate smile, her left hand holding his right hand",
      "emotion": "affectionate, adoring"
    },
    "subject_2": {
      "gender": "{argument name="male celebrity" default="Bilal Abbas"}",
      "appearance": "dark brown hair, short well-groomed full beard and mustache, tan skin",
      "attire": "black suit jacket, unbuttoned white dress shirt with the collar open, no tie",
      "pose": "standing close to the woman, looking down at her with a tender, warm expression, his right hand gently holding her left hand",
      "emotion": "tender, loving"
    },
    "interaction": "The couple is in an intimate, close embrace, holding hands and looking into each other's eyes with deep affection. The moment is romantic and private.",
    "setting": "Dimly lit indoor space, possibly an old building or hall",
    "background": "Blurred, warm-toned, textured wall, likely stone or concrete, with soft, out-of-focus light sources creating bokeh",
    "lighting": "Warm, cinematic lighting, likely golden hour or indoor tungsten light, creating soft shadows and highlighting the texture of the red dress and the couple's faces",
    "style": "Cinematic portrait photograph, shallow depth of field, warm color grading, soft focus"
  }
}
```

## Nighttime Rainy Street Selfie Photo Edit Prompt

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "task": "photo_edit",
  "rules": {
    "face_change": false,
    "keep_identity": true
  },
  "subject": {
    "gender": "female",
    "expression": "looking straight into the camera with tongue slightly sticking out to the side of lips",
    "hair": {
      "condition": "wet",
      "style": "slightly falling out from raincoat"
    },
    "outfit": {
      "type": "transparent clear white plastic raincoat",
      "details": "rain droplets visible, glossy texture"
    },
    "pose": {
      "hands": "both hands holding an iPhone",
      "camera_angle": "upper front"
    }
  },
  "phone": {
    "brand": "iPhone",
    "case_color": "pink",
    "screen": {
      "status": "on",
      "time_displayed": "21:00",
      "wallpaper": "same uploaded photo of the woman"
    }
  },
  "environment": {
    "time": "night",
    "weather": "after rain",
    "location": "street roadside",
    "road": {
      "condition": "wet",
      "surface": "shiny due to rain"
    },
    "sidewalk": {
      "material": "concrete",
      "curbs": "black and white painted"
    },
    "background": {
      "trees": "lush dark green leaves",
      "coverage": "partially covering background"
    },
    "lighting": {
      "street_lights": true,
      "focus": "bright lighting on face",
      "mood": "humid, calm nighttime atmosphere"
    }
  },
  "visual_style": {
    "realism": "high",
    "details": "clear reflections, sharp facial details, transparent raincoat highlights"
  }
}
```

## Playful Mirror Selfie in a Messy Kitchen

> Fotogerçekçi portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "descriptive_portrait",
  "subject_details": {
    "demographics": "Young female, sun-kissed skin, fit and athletic build, strictly matching the reference photo.",
    "facial_features": {
      "expression": "Laughing with mouth open, a smudge of white flour on her nose and cheek, playful and messy yet attractive, facial expression matching the reference photo.",
      "eyes": "Bright green eyes, aligned with the reference photo angle.",
      "hair": "Slightly messy short-to-medium hair, casually styled, exactly following the reference photo hairstyle."
    },
    "apparel": {
      "dress": "Plain black t-shirt fitting exactly like the reference photo pose, paired with tiny pajama shorts.",
      "accessories": "None.",
      "footwear": "Barefoot."
    }
  },
  "pose_and_action": {
    "body_position": "Leaning over the kitchen island counter, elbows resting on the surface, body position strictly following the reference photo.",
    "hands": "Hands lightly dusted with flour. One hand holds the phone, the other is near her face, matching the reference photo hand positions exactly.",
    "camera_angle": "Eye-level mirror selfie captured in a reflective kitchen cabinet or window, camera angle matching the reference photo precisely."
  },
  "background_environment": {
    "location": "Messy kitchen.",
    "lighting_source": "Bright overhead kitchen lights.",
    "objects": {
      "details": "Bowl of dough, scattered flour on the counter, cracked eggshells."
    }
  },
  "technical_specs": {
    "style": "Playful, domestic, ultra-realistic, high detail on natural skin texture and flour dust, strict adherence to the reference photo for realism.",
    "aspect_ratio": "4:5"
  },
  "constraints": [
    "Preserve facial identity exactly as in the reference image",
    "No facial reshaping or beautification",
    "No artificial filters or stylization",
    "Maintain natural proportions and lighting"
  ],
  "output_goal": "Create a playful, ultra-realistic mirror selfie portrait of a young woman in a messy kitchen, laughing naturally with flour on her face, perfectly matching the reference photo in pose, expression, and identity."
}
```

## Image Conversion to Berserker Style

> Görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A red flash speeding across the battlefield! ⚡️
That axe cuts through everything...!
```

## Wide-Angle Foreshortening Portrait on Sofa

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject_description": {
    "demographics": "Young adult female, tan skin tone, light freckles on face.",
    "hair": "Long, wavy, dark blonde with lighter highlights, center-parted, falling behind shoulders and over right shoulder, slightly messy texture.",
    "face": "Direct gaze, neutral to slight pout expression, lips closed, natural makeup look, soft facial features.",
    "body_type": "Fit build, visibly compressed due to seated posture."
  },
  "attire_and_accessories": {
    "outfit": "Matching navy blue two-piece set (or jumpsuit) with large beige and white floral print.",
    "top": "Spaghetti strap style, fitted at chest.",
    "bottoms": "Loose-fitting pants, fabric bunching heavily around the hips, crotch, and knees due to the crouched pose.",
    "jewelry": "Thin red string bracelet on left wrist.",
    "footwear": "Barefoot."
  },
  "pose_geometry_and_physics": {
    "type": "Seated crouch / Knees-to-chest reclined pose.",
    "perspective_distortion": "Extreme foreshortening. The soles of the feet are the largest visual elements in the frame, positioned in the immediate foreground, obscuring part of the lower legs.",
    "leg_position": "Legs elevated and extended toward the camera lens. Knees bent and splayed slightly outward. Right foot sole fully visible, toes relaxed. Left foot sole fully visible, closer to lens, toes slightly curled.",
    "arm_position": "Arms wrapped around the outside of the shins/knees. Hands clasped or resting near the ankles, pulling the legs slightly toward the body.",
    "torso_state": "Leaning back into the sofa cushions, compressed abdominal area, shoulders slightly rounded forward.",
    "head_position": "Centered, tilted very slightly to the subject's right, chin level."
  },
  "camera_and_perspective": {
    "angle": "Eye-level relative to the feet, looking slightly upward at the face due to leg elevation.",
    "focal_length": "Wide angle (approx {argument name=\"focal length\" default=\"24mm-28mm\"}) creating significant depth distortion between feet (foreground) and head (mid-ground).",
    "framing": "Vertical 3:4 aspect ratio. Feet dominate the bottom right quadrant. Head centered in the upper third.",
    "depth_of_field": "Deep depth of field; face and feet are both relatively sharp, background slightly softer but distinct."
  },
  "lighting_and_atmosphere": {
    "primary_source": "Natural daylight entering from large window on image-right.",
    "secondary_source": "Backlight/screen glow from the television directly behind the subject.",
    "quality": "Soft, diffuse mixed lighting. Shadows are soft and fall to the image-left.",
    "reflections": "Slight sheen on the skin of the face and shins.",
    "contrast": "Moderate contrast, slightly backlit appearance due to the bright TV screen."
  },
  "environment_and_props": {
    "location": "Modern living room apartment.",
    "seating": "Beige/light grey sofa with a large, shaggy grey faux-fur pillow on the left.",
    "background_props": {
 "
```

## Romantic Top-Down Portrait in a Wildflower Meadow

> Sinematik, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a serene, top-down portrait of a young man lying peacefully in a lush meadow filled with wildflowers. He rests on his back among tall green grass, white daisies, and scattered pink blossoms, completely immersed in nature. One arm is bent behind his head in a relaxed pose, while the other gently holds a small bouquet of freshly picked daisies against his chest. He has soft, natural facial features, light stubble, and slightly tousled dark hair. His eyes are closed with a faint, content smile, conveying calmness, tenderness, and quiet joy. His expression feels intimate and emotionally warm, as if caught in a private moment of rest and reflection. He wears a textured {argument name="sweater color" default="mauve or dusty-rose"} knit sweater paired with clean white trousers, creating a gentle contrast against the vibrant greens and florals. The outfit feels cozy, romantic, and timeless. The scene is bathed in warm, natural daylight, soft afternoon, sunlight filtering through leaves and petals. Highlights gently kiss the skin and flowers, while shadows remain soft and organic. Foreground leaves and flowers partially frame the subject, adding depth and a dreamy, cinematic feel. Colors are rich yet natural: lush greens, creamy whites, soft yellows, and muted pinks, with a harmonious, film-like color grade. Use aspect ratio 4:5.
```

## Y2K Digicam Casino Portrait Prompt

> Retro, fütüristik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_prompt_data": {
    "subject": {
      "appearance": "Young woman with long, straight, dark brown hair parted in the middle. Tan complexion. Resembles {argument name="subject name" default="Charli D'Amelio"}.",
      "expression": "Neutral to slightly serious, confident gaze, looking directly down at the camera lens.",
      "pose": "Sitting on a red leather bar stool, body angled slightly to the left, legs crossed at the knees, hands resting gently on her thighs."
    },
    "apparel": {
      "clothing": "Fitted black mini dress (slip dress style) with thin, sparkling rhinestone or silver chain spaghetti straps.",
      "footwear": "Black satin platform sandals with high block heels and buckle ankle straps.",
      "accessories": "Large silver hoop earrings, delicate silver rings on fingers."
    },
    "environment": {
      "setting": "Casino interior, dimly lit background.",
      "objects": "Large slot machine to the left with illuminated neon signage reading 'TRIPLE JACKPOT GEMS'.",
      "furniture": "Red cushioned swivel bar stool with a metallic bronze base.",
      "flooring": "Retro-patterned casino carpet featuring swirling designs in teal, blue, and orange.",
      "background_details": "Blurred casino lights, wooden paneling, slight reflection on the slot machine glass."
    },
    "technical_specs": {
      "camera_angle": "Low angle shot (worm's-eye view), looking up at the subject to emphasize the legs and shoes.",
      "lighting": "Direct on-camera flash photography. Hard lighting with distinct shadows behind the subject and high contrast.",
      "aesthetic": "Y2K vintage digital camera vibe, paparazzi style, candid celebrity snapshot, slight film grain, high saturation."
    }
  },
  "full_prompt_string": "Low angle flash photography of a young woman resembling Charli D'Amelio sitting on a red casino stool. She is wearing a black mini dress with rhinestone straps and black platform block heels. She is next to a slot machine that says 'TRIPLE JACKPOT GEMS'. Retro casino carpet floor. Direct flash, harsh shadows, 2000s digicam aesthetic, glamorous but gritty."
```

## Cozy Cinematic Indoor Scene with Warm Lighting

> Sinematik, minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "A cozy human intro scene with a side pose. A person wearing loose, comfortable clothing, standing or sitting casually. Warm lamp light softly illuminates the scene, creating a calm and intimate atmosphere. Cozy lifestyle aesthetic with gentle shadows and a relaxed, homely feel.",
  "style": "cozy, cinematic, realistic",
  "lighting": "warm lamp light, soft shadows",
  "mood": "calm, intimate, comfortable",
  "camera": "side pose, candid angle",
  "environment": "indoor cozy room",
  "quality": "high detail, natural textures"
}
```

## Simple Portrait Prompt (Implied)

> Minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
super close-up, vertical 9:16.
```

## Josephine Langford Gen Z Mirror Selfie

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta_data": {
    "prompt_version": "2.0",
    "use_case": "Photorealistic Image Generation",
    "main_subject_count": 1
  },
  "subject_layer": {
    "anatomy": {
      "demographics": {
        "gender": "Female",
        "age_group": "Young adult",
        "ethnicity": "Caucasian",
        "skin_tone": "Light with warm peach undertones",
        "build": "Slim, petite"
      },
      "face_detail": {
        "eyes": {
          "color": "Blue/Grey",
          "makeup": "Sharp black winged eyeliner, defined lashes"
        },
        "nose": "Small, button shape",
        "mouth": {
          "shape": "Open 'O' shape (pouty/surprised)",
          "teeth_visibility": "Upper teeth visible",
          "tongue_visibility": "Slightly visible behind teeth",
          "lip_color": "Soft pink, natural"
        },
        "complexion_accents": "Heavy rosy pink blush across cheeks and nose bridge (sun-kissed look)"
      },
      "hair": {
        "color": "Dark blonde to light brown",
        "style_core": "Two messy high space buns",
        "framing": "Long loose tendrils framing the face",
        "interaction": "Subject is pulling one long strand sideways with left hand"
      }
    },
    "attire_layer": {
      "garment_main": {
        "item": "Tube dress",
        "length": "Mini",
        "fit": "Tight/Bodycon",
        "color": "Light green",
        "texture": "Ruched fabric, natural horizontal folds"
      },
      "accessories": {
        "neck": "Chunky turquoise/teal beaded choker"
      },
      "footwear": {
        "type": "High-top sneaker",
        "visibility": "One shoe visible on raised foot",
        "color_way": "White base with navy blue and grey panels"
      }
    },
    "pose_dynamics": {
      "posture": "Kneeling on floor, knees spread, slight lower back arch",
      "orientation": "Front-facing towards mirror",
      "limb_placement": {
        "right_arm": "Raised holding phone near face",
        "left_arm": "Extended to side holding hair strand",
        "legs": "Kneeling, one foot raised slightly behind"
      }
    }
  },
  "environment_layer": {
    "setting_type": "Domestic hallway/landing",
    "spatial_layout": {
      "floor": "Plush light grey wall-to-wall carpeting",
      "walls": "Pale blue-grey paint, white baseboards",
      "background_left": "White interior paneled door with silver knob, white light switch",
      "background_right": "Staircase with white banisters and grey carpeted steps"
    }
  },
  "composition_and_tech": {
    "framing": {
      "type": "Mirror Selfie",
      "angle": "Eye-level",
      "prop_device": "White smartphone, pearlescent/rainbow case, rear cameras visible"
    },
    "lighting": {
      "source": "Diffused indoor natural light",
      "direction": "Front/Right",
      "shadows": "Soft, natural shadows on rear wall"
    },
    "aesthetic_style": {
      "visual_core": "Photorealism",
      "vibe": "Gen Z Influe"
    }
  }
}
```

## Cinematic Noir Transit Photography Portrait

> Sinematik, fütüristik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_prompt": {
    "meta": {
      "aspect_ratio": "9:16",
      "orientation": "vertical",
      "style": "Cinematic noir transit photography"
    },
    "subject": {
      "description": "24-year-old woman with a sophisticated, mysterious aura",
      "face": "Visible through the rain-streaked car window, face close to the glass, eyes looking out at the city lights",
      "skin": "Bathed in a deep red glow from the car's tail lights, appearing soft and dewy",
      "hair": "Loose waves, slightly damp at the tips from the rain",
      "pose": "Curled up on the leather back seat of a taxi, forehead resting against the glass, one hand touching her neck",
      "outfit": "Sheer black lace top, oversized fur coat draped loosely around her"
    },
    "environment": {
      "location": "The back seat of a moving car during a night-time rainstorm",
      "background_elements": [
        "Raindrops of various sizes on the window glass blurring the city bokeh",
        "Dark, expensive leather interior with red stitching",
        "The reflection of the red neon 'TAXI' sign on the glass"
      ]
    },
    "lighting": {
      "type": "Red exterior tail lights + Dim blue streetlights",
      "characteristics": [
        "Moody, monochromatic red glow on one side of the face",
        "Dramatic light refraction through water droplets",
        "Deep shadows emphasizing her profile"
      ]
    },
    "photography_style": {
      "style": "Moody film-still aesthetic",
      "camera_look": "Fast prime lens (85mm), shallow depth of field",
      "imperfections": "Condensation on the window, chromatic aberration on the raindrops, authentic film grain",
      "mood": "Intimate, seductive, melancholic, nocturnal"
    },
    "render_quality": {
      "realism": "Light refraction through water and glass",
      "detail_level": "Focus on the sharp raindrops on the pane vs the soft-focus face behind it"
    }
  }
```

## Beach Selfie Portrait with Freckles and Jewelry

> Fotogerçekçi manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_generation_prompt": {
    "subject": {
      "demographics": "Young adult female, tanned skin, fit physique.",
      "hair": "Long, straight dark brown hair with lighter sun-bleached highlights, windblown texture with strands crossing the face, backlit by the sun.",
      "face": "Natural appearance, sun-kissed complexion with visible freckles on nose and cheeks, dark brown eyes looking directly at the lens.",
      "accessories": {
        "jewelry": "Silver lip ring on the bottom left lip, small gold hoop earring in the left ear, thin rosary-style necklace with black and silver beads."
      },
      "clothing": "Black string bikini top."
    },
    "pose": {
      "type": "Selfie perspective / Close-up portrait.",
      "action": "Lying prone (on stomach) on a beach towel, propping head up with the left hand resting against the cheek/temple.",
      "expression": "Relaxed, confident, slight closed-mouth smile."
    },
    "environment": {
      "location": "Bright, sunny beach day.",
      "foreground": "Blue and white patterned beach towel (mandala/geometric print) underneath the subject.",
      "background": "Vibrant turquoise ocean water meeting a clear blue sky on the horizon, faint white airplane contrail in the sky to the right, rocky cliff/mountain terrain visible in the far left distance."
    },
    "lighting": {
      "source": "Harsh, direct natural sunlight (high noon).",
      "characteristics": "High contrast shadows, specular highlights on skin and hair, slight lens flare near the top of the head."
    },
    "technical_quality": {
      "resolution": "4K Ultra HD.",
      "style": "Photorealistic, candid lifestyle photography.",
      "details": "High-definition skin texture (pores and freckles visible), sharp focus on the eyes and face, slight depth of field blurring the ocean background."
    }
  }
}
```

## Neo-Noir Phone Booth Scene in the Rain

> Sinematik, minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_name": "Neon Rain Phone Booth Noir",
  "type": "photo_realistic",
  "aspect_ratio": "4:5",
  "scene": {
    "location": "rainy city street at night",
    "setting_detail": "a glass phone booth at the sidewalk edge, wet pavement reflecting neon signage",
    "weather": "steady rain, raindrops streaking on glass, puddles and reflections",
    "background": "soft bokeh city lights, blurry car tail lights, distant neon diner sign glowing red and blue",
    "mood": "neo-noir, lonely, cinematic tension, quiet sadness"
  },
  "subject": {
    "description": "a young woman standing inside the phone booth, leaning slightly against the glass panel",
    "expression": "tired and distant, hollow gaze, subtle melancholy",
    "pose": "one shoulder forward, head tilted slightly down, looking toward the camera through the rain-streaked glass",
    "hands": "one hand raised holding a cigarette near her face",
    "wardrobe": {
      "outerwear": "oversized {argument name="coat color" default="beige"} trench coat, slightly worn texture, damp edges from rain",
      "innerwear": "dark top barely visible under the coat",
      "styling_notes": "minimal, grounded, realistic street styling"
    },
    "hair": "messy wet hair clinging slightly to forehead and cheeks, natural volume",
    "skin_detail": "natural pores, soft under-eye shadows, no heavy makeup",
    "smoke": "thin cigarette smoke drifting upward, subtle and realistic"
  },
  "composition": {
    "framing": "medium portrait, waist-up",
    "camera_angle": "eye level",
    "subject_position": "right side of frame, using the phone booth frame as strong vertical leading line",
    "foreground_elements": "glass reflections, raindrops in focus on some parts of the window",
    "depth_of_field": "shallow depth, subject sharp, background neon heavily blurred",
    "negative_space": "left side filled with rainy street, neon sign bokeh, cinematic breathing room"
  },
  "camera_and_lens": {
    "camera_type": "cinematic full-frame digital",
    "lens": "50mm prime",
    "aperture": "f/1.8",
    "shutter_speed": "1/200",
    "iso": "2000",
    "focus": "sharp on subject eye and face, controlled softness through glass"
  },
  "lighting_and_color": {
    "lighting_style": "neon practical lighting mixed with streetlight spill",
    "key_light": "soft cool-blue light from outside reflections",
    "fill_light": "faint warm-red neon bounce on cheek and coat edge",
    "color_palette": "deep blues, magenta/red neon accents, muted skin tones, dark shadows",
    "contrast": "medium-high contrast with smooth highlight rolloff",
    "reflections": "wet ground reflections, neon glow reflected on glass panels"
  },
  "realism_and_texture": {
    "texture_priority": [
      "raindrops on glass",
      "wet fabric trench coat texture",
      "skin pores and natural imperfections",
      "soft cigarette smoke trail"
    ],
    "grain": "subtle film grain for realism",
    "bokeh": "large c"
  }
```

## Bohemian Chic Portrait with Cowboy Boot Prop

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_details": {
    "subject": {
      "type": "Young woman",
      "appearance": {
        "hair": "Long, dark chestnut brown, loose waves, falling over face, messy aesthetic",
        "skin": "Fair complexion, smooth texture, natural finish",
        "face": "Looking downward, face partially obscured by hair, introspective expression",
        "body_type": "Slender, fit"
      },
      "pose": {
        "stance": "Leaning against a stone wall, body slightly angled",
        "hands": "Right hand resting gently on chest/neck with fingers splayed, left hand holding a green object (boot) down by her side",
        "gaze": "Downward, avoiding eye contact"
      }
    },
    "clothing": {
      "dress": {
        "style": "Off-the-shoulder mini dress, cottagecore/boho style",
        "fabric": "Lightweight cotton or linen blend",
        "color": "Cream/off-white base",
        "pattern": "Small, delicate floral print with purple and yellow wildflowers",
        "details": ["Ruffled tiered skirt", "Puffed short sleeves", "Sweetheart neckline", "Corset-style bodice structure"]
      },
      "accessories": [
        "Thin black choker necklace",
        "Multiple silver rings on fingers",
        "Red beaded bracelet on left wrist",
        "Holding a dark green, crocodile-texture cowboy boot"
      ]
    },
    "environment": {
      "background": "Textured stone masonry wall",
      "details": "Large, irregular grey and beige stone blocks, rough texture, natural architectural backdrop",
      "setting": "Outdoor or semi-outdoor daylight setting"
    },
    "lighting": {
      "type": "Soft natural daylight",
      "quality": "Diffused, even illumination, soft shadows",
      "direction": "Front-lit but soft"
    },
    "styling": {
      "aesthetic": "Bohemian, chic, feminine, soft grunge undertones",
      "mood": "Casual, candid, slightly moody, artistic"
    },
    "camera_details": {
      "shot_type": "Medium shot (thigh-up)",
      "angle": "Eye-level",
      "lens": "85mm prime lens for flattering portrait compression",
      "aperture": "f/2.8 for slight depth of field separation from the wall",
      "focus": "Sharp focus on the subject and dress texture"
    },
    "technical_specifications": {
      "quality": "Ultra Photorealistic, 8k resolution, highly detailed",
      "texture_quality": "High fidelity fabric textures, realistic skin pores, detailed stone masonry",
      "engine": "Unreal Engine 5 render style or high-end photography"
    }
  }
}
```

## Image Conversion to Berry Tart Dress Style

> Görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
The taste of sweet and sour love? 💕
The dress full of strawberries is gorgeous! ✨
```

## Cinematic Lingerie Portrait in Vintage Study

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "aspect_ratio": "3:4",
    "camera": "Sony A7R IV",
    "lens": "50mm f/1.2 GM",
    "quality": "ultra photorealistic, 8k resolution, masterpiece, highly detailed textures",
    "style": "cinematic portrait, creamy bokeh, Kodak Portra 400 film grain, high-end editorial aesthetic, deep color grading"
  },

  "scene": {
    "location": "cozy vintage study room",
    "visibility_rule": "direct portrait, subject facing camera",
    "environment_details": [
      "dark wood bookshelf filled with antique books in background",
      "classic warm table lamp with a soft glow on the left",
      "luxurious brown velvet armchair",
      "rich textures in indoor interior"
    ],
    "time": "evening",
    "atmosphere": "intimate, elegant, quiet, sophisticated, moody"
  },

  "lighting": {
    "type": "Soft Chiaroscuro lighting with gentle contrast",
    "source": "diffused warm ambient lamp light from the side, subtle soft cool rim light from back",
    "color_temperature": "warm golden hour against deep cool shadows",
    "effect": "diffused highlights on skin, smooth shadow transitions defining body contours, subtle volumetric glow around the lamp"
  },

  "camera_perspective": {
    "pov": "front view",
    "angle": "eye-level",
    "framing": "medium shot, upper body and thighs visible",
    "real_world_visibility": "subject is centered in the armchair",
    "phone_visibility": "none"
  },

  "subject": {
    "gender": "female",
    "age_vibe": "young adult",
    "ethnicity": "K-pop idol",

    "hair": {
      "color": "black with subtle purple and violet highlights",
      "style": "high ponytail with straight bangs",
      "behavior": "smooth, flowing over shoulders, catching soft rim light"
    },

    "outfit": {
      "lingerie": {
        "type": "black floral lace bra and matching panties",
        "color": "deep black",
        "material": "intricate sheer lace, high-definition embroidery, tactile mesh texture",
        "fit": "delicate, form-fitting"
      },
      "outerwear": {
        "type": "silk satin robe",
        "color": "deep midnight blue",
        "style": "off-the-shoulder, draped loosely around arms",
        "material": "liquid-like silk, heavy drape, soft anisotropic highlights"
      }
    },

    "pose": {
      "position": "leaning back comfortably in the plush armchair, reclined posture",
      "legs": {
        "stance": "one leg elegantly crossed prominently over the other knee",
        "detail": "soft skin texture visible on legs, relaxed muscles"
      },
      "hips": {
        "action": "relaxed, reclined deep into the seat cushions"
      },
      "arms": {
        "left_arm": "resting casually on the armchair armrest",
        "right_arm": "resting near the lap or comfortably on the chair structure"
      },
      "vibe": "relaxed, alluring, "
}
```

## Hard Flash Photography Snapshot with Defiant Pose

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_type": "flash_photography_snapshot",
  "aspect_ratio": "3:4",
  "subject": {
    "demographics": "Young female, tan complexion, fit physique",
    "hair": "Long, loose, wavy dirty blonde with lighter highlights, falling over shoulders and pillow",
    "expression": "Direct eye contact, neutral to slightly defiant gaze, lips relaxed",
    "makeup": "Defined eyebrows, eyeliner, neutral lip gloss, slight sheen on face"
  },
  "attire": {
    "top": "Yellow triangle bikini top, black text 'Trapstar' printed across cups, string ties",
    "bottom": "Royal blue sweatpants, thick waistband with drawstrings, yellow script text 'World' visible on left thigh",
    "fit": "Casual, relaxed fit on pants, fitted bikini top"
  },
  "accessories": {
    "jewelry": [
      "Large gold wristwatch on left wrist",
      "Gold screw-head bangle bracelet on left wrist",
      "Two layered gold necklaces with cross pendants (one small, one large/ornate)",
      "Large thin gold hoop earrings"
    ],
    "nails": "Long, square-shaped acrylics with classic white French tips"
  },
  "pose": {
    "body_position": "Lying supine on a bed, angled slightly towards the right",
    "left_arm": "Raised, elbow bent, hand resting loosely on forehead/hairline, palm facing outward",
    "right_arm": "Extended forward towards camera lens, hand displaying {argument name="hand gesture" default="middle finger gesture clearly"}",
    "torso": "Relaxed, slight natural skin folding at neck and armpit, gravity affecting chest tissue"
  },
  "environment": {
    "location": "Bedroom",
    "surface": "White satin or silk bed sheets, highly wrinkled and reflective, messy texture",
    "background": "Grey velvet tufted headboard, vertical paneling detail, soft texture"
  },
  "lighting_and_atmosphere": {
    "type": "Direct on-camera flash / Hard artificial light",
    "quality": "High contrast, harsh shadows behind subject and arm, specular highlights on skin and satin fabric",
    "shadows": "Sharp, distinct drop shadow on headboard from raised arm",
    "color_palette": "Cool white (sheets), warm tan (skin), vibrant yellow, cobalt blue, muted grey"
  },
  "camera_technical": {
    "framing": "Medium shot, captured from slightly above looking down",
    "focus": "Sharp focus on face and torso, slight depth of field falloff towards legs",
    "aesthetic": "Snapshot aesthetic, social media style, candid, unpolished composition"
  }
}
```

## Candid Art-School Aesthetic Portrait Prompt

> Minimal, elle çizilmiş portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "A soft, understated art-school style photograph of a young woman sitting cross-legged on a studio floor. She wears a beige hoodie, beige trousers, white socks, and black low-top sneakers. Her pose feels relaxed and slightly awkward, hands loosely clasped over her shoes. She has shoulder-length wavy brown hair, subtle makeup, and clear-framed glasses. A small star tattoo is visible on her wrist. The setting is a quiet artist’s studio with an easel, unfinished sketches taped to the wall, jars of paintbrushes, and stacked books in the background. Natural window light creates gentle shadows, muted tones, and a warm, intimate atmosphere. The image feels youthful, candid, and casually artistic rather than polished or commercial.",
  "style": "soft natural photography, art-school aesthetic, minimalism, candid portrait",
  "lighting": "diffused natural daylight, soft shadows",
  "color_palette": "muted neutrals, beige, warm off-whites, subtle earth tones",
  "composition": "centered subject, eye-level angle, intimate framing",
  "mood": "quiet, intimate, youthful, calm",
  "camera": "35mm lens, shallow depth of field, natural grain",
  "quality": "high-resolution, realistic, unretouched"
}
```

## Cheerful Theme Park Lifestyle Portrait with Mascots

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "Objective": "Create a cheerful lifestyle portrait set in a magical theme park with joyful mascot characters",
  "PersonaDetails": {
    "PrimarySubject": {
      "Type": "Young woman",
      "Pose": "Standing relaxed, holding a takeaway coffee cup with both hands",
      "Expression": "Warm smile, cheerful and relaxed",
      "Style": "Casual lifestyle look"
    },
    "MascotCharacters": [
      {
        "Type": "Tall grey rabbit mascot",
        "Interaction": "Hugging the woman from behind",
        "Emotion": "Joyful, playful"
      },
      {
        "Type": "Grey cat mascot",
        "Position": "Standing at her side",
        "Emotion": "Friendly, happy"
      },
      {
        "Type": "Black duck mascot",
        "Position": "Standing on the opposite side",
        "Emotion": "Playful and welcoming"
      },
      {
        "Type": "Small brown mouse mascot",
        "Position": "Playfully posing above the group",
        "Emotion": "Energetic and mischievous"
      }
    ]
  },
  "SceneDescription": {
    "Location": "Famous theme park",
    "Background": {
      "Landmark": "{argument name="background landmark" default="Fairytale castle"}",
      "Treatment": "Softly blurred for depth"
    },
    "Environment": "Open plaza with a lively, family-friendly atmosphere"
  },
  "Composition": {
    "Framing": "Medium lifestyle portrait",
    "Grouping": "Centered subject surrounded by characters",
    "DepthOfField": "Shallow depth of field",
    "Focus": "Sharp focus on faces with softly blurred background"
  },
  "LightingAndColor": {
    "Lighting": "Bright natural daylight",
    "ColorPalette": "Vibrant, saturated yet balanced colors",
    "Highlights": "Soft, clean highlights enhancing cheerful mood"
  },
  "ArtDirection": {
    "Style": "High realism blended with animated character charm",
    "Aesthetic": "Playful, magical, family-friendly",
    "DetailLevel": "Ultra-detailed textures on clothing and mascot costumes"
  },
  "PhotographyStyle": {
    "Genre": "Theme park lifestyle photography",
    "CompositionStyle": "Cinematic yet candid",
    "ImageQuality": "High resolution, crisp detail"
  },
  "Mood": {
    "Tone": "Happy, welcoming, whimsical",
    "Energy": "Lighthearted, joyful, magical"
  },
  "NegativePrompt": [
    "dark mood",
    "empty background",
    "scary characters",
    "low resolution",
    "blurry faces",
    "harsh shadows",
    "desaturated colors"
  ],
  "ResponseFormat": {
    "Type": "Single image",
    "Orientation": "Portrait",
    "AspectRatio": "2:3"
  }
}
```

## Y2K Bathroom Mirror Selfie Prompt (Image-to-Image)

> Fotogerçekçi portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "age": 20,
    "gender": "female",
    "ethnicity": "western",
    "appearance": {
      "face": "same as reference image, do not change facial features",
      "features": "delicate",
      "eyes": "big, expressive",
      "makeup": "natural",
      "expression": "slight pout, looking at camera",
      "hair": {
        "color": "blonde",
        "style": "messy high voluminous bun",
        "texture": "wavy"
      }
    }
  },
  "clothing": {
    "top": {
      "type": "cropped baby-t-shirt",
      "color": "dark brown",
      "text": "{argument name=\"shirt text\" default=\"EVERYTHING'S BIGGER IN TEXAS\"}",
      "fit": "tight"
    },
    "bottom": {
      "type": "jeans",
      "color": "blue",
      "style": "very low rise, loose"
    },
    "underwear": {
      "type": "micro thong",
      "color": "bright pink",
      "visibility": "visible high on hips"
    }
  },
  "accessories": {
    "tattoos": [
      {"location": "hand", "design": "small star"},
      {"location": "lower stomach", "design": "small heart"}
    ],
    "nails": "colorful butterfly"
  },
  "pose": "bathroom mirror selfie",
  "lighting": "warm indoor",
  "vibe": "casual sexy",
  "style": "realistic, photorealistic",
  "details": {
    "skin": "detailed texture",
    "resolution": "8k"
  }
}
```

## Mirror Selfie Lingerie Pose Prompt with Foreshortening

> Minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "reference_source": "Use uploaded image for face, hair, body, and expression",
  "subject": {
    "demographics": "adult woman, mid-20s",
    "wardrobe": {
      "garments": "matching black matte lingerie set (structured bra, panties), clean edges, no logos, non-explicit",
      "shoes": "black strappy high-heel sandals, open-toe, visible white pedicure",
      "tattoos": [
        "Greek-key geometric band on upper thigh",
        "Greek-key geometric band on ankle"
      ],
      "jewelry": "minimal rings on phone hand"
    }
  },
  "pose": {
    "type": "mirror selfie, seated deep in gray upholstered chair, torso upright, slight back arch",
    "legs": {
      "left": "fully extended toward camera (extreme foreshortening), foot dominates lower-left foreground, ankle tattoo visible",
      "right": "bent and raised on chair, knee high near center, heel visible near chair edge",
      "constraint": "reflection must match exactly (no swapped feet)"
    },
    "hands": {
      "left": "holding phone near head, face fully visible (not blocked)",
      "right": "index finger near lips in teasing gesture"
    }
  },
  "environment": {
    "location": "modern hotel room with large wall mirror (white edge visible)",
    "background_elements": [
      "large bed, white bedding, beige accents",
      "dark curtains with thin vertical daylight slit",
      "wall-mounted TV, desk/minibar with scattered items",
      "slim black tripod, recessed shelf, track lighting",
      "light wood floor"
    ]
  },
  "technical": {
    "aesthetic": "iPhone 16 Pro, unretouched, low HDR, subtle grain, warm-neutral indoor light (3800K) + daylight spill",
    "framing": "vertical 9:16, full seated body, face and foreground foot in sharp focus",
    "constraints": "physically correct reflection, straight lines (no fish-eye), no text/logos/watermarks, no extra limbs"
  }
}
```

## 1970s Retro Cinematic Portrait in Burgundy Slip Dress

> Sinematik, retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "metadata": {
    "version": "1.1",
    "project": "Retro Cinematic Portrait",
    "style_preset": "1970s_vibe"
  },
  "canvas_settings": {
    "dimensions": {
      "width": 1200,
      "height": 1200,
      "unit": "px"
    },
    "format": {
      "aspect_ratio": "1:1",
      "orientation": "square"
    }
  },
  "environment": {
    "location": {
      "setting": "vintage indoor living room",
      "era": "1970s retro",
      "atmosphere": "warm, intimate, cinematic, calm"
    },
    "lighting": {
      "primary_source": {
        "type": "vintage floor lamp",
        "position": "left side",
        "style": "scalloped edge with fringe trim",
        "temperature": "warm tungsten",
        "behavior": "soft ambient with natural falloff"
      },
      "global_contrast": "medium"
    },
    "background_elements": {
      "walls": {
        "material": "aged matte wood paneling",
        "color": "warm brown",
        "pattern": "vertical panels"
      },
      "foliage": {
        "type": "leafy indoor plant",
        "vessel": "earthy ceramic pot",
        "placement": "background left"
      }
    }
  },
  "furniture_and_props": {
    "seating": {
      "type": "upholstered retro couch",
      "material": "woven patterned textile",
      "palette": ["beige", "brown", "muted green", "rust"],
      "design": "geometric pattern"
    },
    "accents": [
      {
        "item": "pillow",
        "material": "deep red velvet",
        "texture": "plush"
      },
      {
        "item": "pillow",
        "material": "off-white faux fur",
        "texture": "fluffy"
      }
    ]
  },
  "character_model": {
    "identity": {
      "gender": "female",
      "age": "early to mid 20s",
      "ethnicity": "light skin tone"
    },
    "anatomy_details": {
      "skin": "natural realistic texture, visible pores, subtle freckles",
      "hair": {
        "color": "dark brown",
        "style": "long, loose natural waves",
        "parting": "center"
      }
    },
    "performance": {
      "pose": "reclining on sofa, relaxed and confident, one arm on backrest",
      "expression": "soft sultry, direct gaze, slightly parted lips"
    },
    "wardrobe": {
      "item": "satin slip dress",
      "color": "{argument name="dress color" default="deep burgundy wine red"}",
      "features": ["low-cut V neckline", "thin spaghetti straps", "loose draped fit"],
      "finish": "silky sheen"
    }
  },
  "cinematography": {
    "camera": {
      "angle": "eye-level",
      "framing": "medium portrait",
      "focus": "subject face and upper torso"
    },
    "optics": {
      "depth_of_field": "moderate",
      "background_blur": "slightly soft",
      "balance": "asymmetrical (subject right, lamp left)"
    },
    "color_profile": {
      "dominant": ["warm brown", "burgundy", "beige"],
      "accents": ["deep red", "off-white"],
      "grading": "warm cinematic, lifted blacks, soft highlights"
    }
  },
  "render_quality": {
    "positive_attributes": [
      "high
```

## Luxury Bedroom Mirror Selfie

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_request": {
    "subject": {
      "description": "Elegant woman with a fair complexion and long, wavy black hair.",
      "features": {
        "makeup": "Bold red lipstick, subtle smoky eye shadow, defined eyebrows.",
        "expression": "Confident and sophisticated gaze towards a mirror.",
        "pose": "Mirror selfie pose, holding a modern smartphone."
      },
      "attire": {
        "dress": "Luxury floor-length satin gown in deep ruby red with a plunging V-neckline.",
        "jewelry": "Delicate golden necklace and a matching gold bracelet on the wrist."
      }
    },
    "environment": {
      "setting": "Opulent high-end master bedroom.",
      "furniture": [
        "Ornate wooden vanity with vintage circular mirrors.",
        "Large king-sized bed with plush beige quilted bedding and decorative pillows.",
        "Classic wooden wardrobe in the background."
      ],
      "view": "Large window showing a blurred evening cityscape with glowing lights."
    },
    "technical_details": {
      "lighting": "Warm indoor ambient lighting from a chandelier, soft rim lighting on the hair.",
      "composition": "Medium shot, eye-level, mirror reflection style.",
      "quality": "8k resolution, photorealistic, cinematic texture, high contrast.",
      "details": "High-fidelity skin texture, silk fabric reflections, clear image on the phone case back."
    }
  }
}
```

## Cinematic Concert Crowd Photo Prompt

> Sinematik, minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_name": "Festival Euphoria Crowd Shot",
  "type": "photo_realistic",
  "aspect_ratio": "4:5",
  "scene": {
    "location": "outdoor music festival crowd",
    "time_of_day": "night",
    "environment": "dense audience near the stage, hands raised, wristbands visible, glowing lights in the distance",
    "atmosphere": "high energy, chaotic, euphoric",
    "background": "heavy bokeh of stage lights and silhouettes, no readable signage"
  },
  "subject": {
    "description": "a young woman in the front-middle of the crowd filming the show on her phone",
    "expression": "pure excitement, mouth open cheering, eyes wide and joyful",
    "pose": "phone held up close to face, one arm raised, body leaning forward into the moment",
    "details": {
      "skin": "natural sweaty concert glow, visible pores, light glitter on cheekbone",
      "hair": "slightly messy, damp from dancing",
      "accessories": "festival wristbands, minimal earrings",
      "phone": "smartphone held vertically with bright flash reflection"
    }
  },
  "composition": {
    "framing": "medium close-up",
    "camera_angle": "crowd-level, slightly low angle",
    "subject_position": "foreground dominant, slightly right of center",
    "depth_of_field": "shallow depth with strong background blur",
    "foreground_elements": "partial silhouettes of nearby arms and hands for depth",
    "crowd_density": "tight and immersive"
  },
  "camera_and_lens": {
    "camera_type": "full-frame DSLR look",
    "lens": "35mm",
    "aperture": "f/1.8",
    "shutter_speed": "1/250",
    "iso": "3200",
    "focus": "tack sharp on the subject’s face and phone edge"
  },
  "lighting_and_color": {
    "lighting_style": "concert stage lighting with mixed neon tones",
    "key_light": "blue and magenta wash from stage",
    "highlights": "specular highlights from phone screen/flash reflection",
    "color_palette": "neon blues, pinks, purples with deep shadows",
    "contrast": "high contrast, cinematic"
  },
  "motion_and_texture": {
    "motion_feel": "slight motion blur in background hands, subject face crisp",
    "texture_detail": "sweat sheen, glitter particles, fabric texture visible",
    "grain": "subtle high-ISO film grain for realism"
  },
  "realism_notes": {
    "keep": [
      "natural skin texture and sweat",
      "authentic crowd depth and messy energy",
      "realistic lens bokeh",
      "hands and fingers anatomically correct"
    ],
    "avoid": [
      "plastic skin",
      "oversharpened noise reduction",
      "fake looking neon glow halos",
      "text/logos on stages",
      "perfectly clean hair or makeup"
    ]
  },
  "post_processing": {
    "style": "cinematic documentary concert photo",
    "film_emulation": "modern digital + subtle film grain",
    "saturation": "moderate, neon controlled",
    "clarity": "low-medium to keep softness in highlights",
    "vignette": "soft natural vignette"
  },
  "outpu
```

## Casual Sexy Car Trunk Pose Prompt (Image-to-Image)

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "type": "human",
    "age": "young adult",
    "ethnicity": "western",
    "gender": "female",
    "face_reference": "use_exact_face_from_reference_image",
    "facial_features": {
      "eye_color": "blue",
      "hair": {
        "color": "blonde",
        "length": "long",
        "style": "wavy"
      },
      "makeup": "natural",
      "expression": "seductive"
    }
  },
  "pose": {
    "position": "sitting",
    "location": "on trunk of car",
    "attitude": "casual sexy"
  },
  "clothing": {
    "top": {
      "type": "cropped ribbed",
      "color": "white",
      "fit": "tight",
      "show_midriff": true
    },
    "bottom": {
      "type": "leggings",
      "color": "white",
      "fit": "tight"
    },
    "footwear": {
      "type": "platform boots",
      "material": "fluffy fur",
      "color": "white",
      "size": "huge"
    },
    "accessory": {
      "type": "fur coat",
      "material": "fluffy",
      "color": "brown",
      "holding_style": "hand"
    }
  },
  "environment": {
    "scene_type": "urban parking lot",
    "background": {
      "elements": ["blue and white striped wall"]
    },
    "lighting": {
      "condition": "overcast daylight",
      "mood": "soft moody"
    },
    "props": [
      {
        "type": "car",
        "model": "{argument name=\"car model\" default=\"Dodge Charger\"}",
        "color": "dark green",
        "accent_lines": "red"
      }
    ]
  },
  "visual_style": {
    "cinematic_color_grading": true,
    "photorealistic": true,
    "resolution": "8k",
    "skin_detail": "high",
    "atmosphere": "soft moody"
  }
}
```

## Nostalgic Film Photo of Boy by Coca-Cola Vending Machine

> Retro görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "image_quality": "Medium",
    "image_type": "Photo",
    "resolution_estimation": "Likely scanned from film, approx 1000x1500 effective detail",
    "file_characteristics": {
      "compression_artifacts": "Low",
      "noise_level": "Medium (Film grain present)",
      "lens_type_estimation": "Standard focal length (35mm or 50mm equivalent)"
    }
  },
  "global_context": {
    "scene_description": "A vertical, nostalgic photograph capturing a young boy leaning against a vintage Coca-Cola vending machine while drinking from a glass bottle. To the left is a dark, wooden cylindrical object (likely a barrel or trash receptacle). The scene is bathed in bright, harsh sunlight, creating strong shadows and high contrast. The setting appears to be an exterior alcove or storefront with visible conduits on the wall.",
    "environment_type": "Outdoor/Semi-outdoor storefront",
    "time_of_day": "Day (likely mid-day given the steep shadow angles)",
    "weather_atmosphere": "Clear, Sunny, Hot, Summer",
    "lighting": {
      "source": "Sunlight",
      "direction": "Top-left",
      "quality": "Hard, direct",
      "color_temperature": "Warm/Neutral"
    },
    "color_palette": {
      "dominant_hex_estimates": [
        "#D12E2E",
        "#EAEAEA",
        "#2A1A15",
        "#D6C6AA",
        "#4A3B32"
      ],
      "accent_colors": [
        "#008080",
        "#F4C430"
      ],
      "contrast_level": "High"
    }
  },
  "composition": {
    "camera_angle": "Eye-level with subject",
    "framing": "Full shot (knees up)",
    "depth_of_field": "Medium (background wall slightly soft but legible)",
    "focal_point": "Boy drinking soda",
    "symmetry_type": "None",
    "rule_of_thirds_alignment": "Boy aligns with left vertical third line; Machine aligns with right two-thirds"
  },
  "objects": [
    {
      "id": "obj_001",
      "label": "Young Boy",
      "category": "Person",
      "location": {
        "relative_position": "Center-left",
        "bounding_box_percentage": {
          "x": 0.25,
          "y": 0.38,
          "width": 0.35,
          "height": 0.58
        }
      },
      "dimensions_relative": "Medium",
      "distance_from_camera": "Mid",
      "pose_orientation": "Standing, leaning back, head tilted up drinking, legs crossed (left over right)",
      "material": "Organic/Textile",
      "surface_properties": {
        "texture": "Skin smooth, Fabric ribbed/wrinkled",
        "reflectivity": "Low",
        "micro_details": "Sunlit hair tips (halo effect), relaxed facial expression",
        "wear_state": "N/A"
      },
      "color_details": {
        "base_color_hex": "#F0D9C5",
        "secondary_colors": [
          "#FFFFFF",
          "#E8E8E8"
        ],
        "gradient_or_pattern": "Solid white clothing"
      },
      "interaction_with_light": {
        "shadow_casting": "Casts a sharp shadow onto the red vending machine behind him",
        "highlight_zo"
      }
    }
  ]
}
```

## Mirror Selfie Lingerie Pose Prompt with Foreshortening (Duplicate)

> Minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "reference_source": "Use uploaded image for face, hair, body, and expression",
  "subject": {
    "demographics": "adult woman, mid-20s",
    "wardrobe": {
      "garments": "matching black matte lingerie set (structured bra, panties), clean edges, no logos, non-explicit",
      "shoes": "black strappy high-heel sandals, open-toe, visible white pedicure",
      "tattoos": [
        "Greek-key geometric band on upper thigh",
        "Greek-key geometric band on ankle"
      ],
      "jewelry": "minimal rings on phone hand"
    }
  },
  "pose": {
    "type": "mirror selfie, seated deep in gray upholstered chair, torso upright, slight back arch",
    "legs": {
      "left": "fully extended toward camera (extreme foreshortening), foot dominates lower-left foreground, ankle tattoo visible",
      "right": "bent and raised on chair, knee high near center, heel visible near chair edge",
      "constraint": "reflection must match exactly (no swapped feet)"
    },
    "hands": {
      "left": "holding phone near head, face fully visible (not blocked)",
      "right": "index finger near lips in teasing gesture"
    }
  },
  "environment": {
    "location": "modern hotel room with large wall mirror (white edge visible)",
    "background_elements": [
      "large bed, white bedding, beige accents",
      "dark curtains with thin vertical daylight slit",
      "wall-mounted TV, desk/minibar with scattered items",
      "slim black tripod, recessed shelf, track lighting",
      "light wood floor"
    ]
  },
  "technical": {
    "aesthetic": "iPhone 16 Pro, unretouched, low HDR, subtle grain, warm-neutral indoor light (3800K) + daylight spill",
    "framing": "vertical 9:16, full seated body, face and foreground foot in sharp focus",
    "constraints": "physically correct reflection, straight lines (no fish-eye), no text/logos/watermarks, no extra limbs"
  }
}
```

## Cozy Nostalgic Couple Portrait by Fireplace

> Retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{ "scene_type": "intimate lifestyle portrait", "composition": { "framing": "medium close-up", "orientation": "horizontal", "subjects_position": "centered, tightly framed", "camera_angle": "eye-level", "crop": "waist-up", "visual_balance": "subjects dominate foreground with symmetrical warmth from background fireplace", "depth": "shallow depth of field with softly blurred background elements" }, "subjects": [ { "gender_expression": "female-presenting", "age_range": "young adult", "pose": "facing camera, arms wrapped around partner", "facial_expression": "broad genuine smile, relaxed eyes", "gaze": "directly at camera", "hair": { "color": "dark brown", "style": "long, straight, natural part" }, "clothing": { "type": "knit sweater", "color": "soft pastel blue", "texture": "fuzzy, wool-like" }, "accessories": ["silver hoop earrings"], "emotion": "joyful, affectionate" }, { "gender_expression": "male-presenting", "age_range": "young adult", "pose": "turned toward partner, leaning in", "facial_expression": "soft smile, affectionate", "gaze": "toward partner", "hair": { "color": "dark brown", "style": "short, wavy, slightly tousled" }, "clothing": { "type": "knit sweater", "pattern": "argyle-style blocks", "colors": ["orange", "green", "pink", "black"], "texture": "soft, thick knit" }, "emotion": "tender, affectionate" } ], "interaction": "embrace with cheek kiss, close physical proximity conveying warmth and intimacy", "environment": { "location_type": "indoor residential living space", "background_elements": [ "brick fireplace", "wood-burning stove with visible flame", "stacked firewood", "woven basket", "shelving" ], "setting_mood": "cozy, rustic, intimate" }, "lighting": { "primary_source": "warm ambient firelight", "secondary_source": "soft indoor lighting", "quality": "diffused and gentle", "color_temperature": "warm", "shadows": "soft, minimal harsh contrast" }, "color_palette": { "dominant_colors": ["warm orange", "brick red", "soft blue"], "accent_colors": ["green", "pink", "black"], "overall_tone": "warm, nostalgic" }, "technical_characteristics": { "camera_type": "digital or film-style capture", "lens_look": "standard focal length", "focus": "sharp on subjects, slightly soft background", "grain": "visible fine grain", "noise": "moderate, intentional for aesthetic" }, "artistic_style": { "genre": "lifestyle photography", "aesthetic": "candid, cozy, nostalgic", "influences": ["film photography", "indie lifestyle editorial"], "post_processing": { "contrast": "low to moderate", "saturation": "slightly muted", "highlights": "soft roll-off", "color_grading": "warm bias with earthy tones" } }, "background": { "texture": "brick and wood", "lighting_effect": "flickering fire glow", "blur_level": "moderate" }, "overall_mood": "warm, affectionate, intimate, nostalgic" }
```

## Cozy Candid Back Angle Scene Prompt

> Sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "A cozy human intro scene captured from the back angle. A person walking away naturally, with slightly messy hair. The framing is imperfect and slightly cropped, giving an authentic, candid feel. Warm, cozy atmosphere with soft natural light. Lifestyle photography style, emotional and calm mood.",
  "style": "{argument name="Style" default="cozy, cinematic, realistic"}",
  "lighting": "soft natural daylight",
  "mood": "{argument name="Mood" default="calm, intimate, authentic"}",
  "camera": "back angle, walking away, candid shot",
  "composition": "imperfect crop, off-center framing",
  "quality": "high detail, natural textures"
}
```

## Photorealistic Portrait of Ana de Armas in Cottagecore Style

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_details": {
    "subject": {
      "type": "Young woman Ana de Armas ",
      "appearance": {
        "hair": "Long, dark chestnut brown, loose waves, falling over face, messy aesthetic",
        "skin": "Fair complexion, smooth texture, natural finish",
        "face": "Looking downward, face partially obscured by hair, introspective expression",
        "body_type": "Slender, fit"
      },
      "pose": {
        "stance": "Leaning against a stone wall, body slightly angled",
        "hands": "Right hand resting gently on chest/neck with fingers splayed, left hand holding a green object (boot) down by her side",
        "gaze": "Downward, avoiding eye contact"
      }
    },
    "clothing": {
      "dress": {
        "style": "Off-the-shoulder mini dress, cottagecore/boho style",
        "fabric": "Lightweight cotton or linen blend",
        "color": "{argument name=\"dress color\" default=\"Red/off-Red\"} base",
        "pattern": "Small, delicate floral print with purple and yellow wildflowers",
        "details": ["Ruffled tiered skirt", "Puffed short sleeves", "Sweetheart neckline", "Corset-style bodice structure"]
      },
      "accessories": [
        "Thin black choker necklace",
        "Multiple silver rings on fingers",
        "Red beaded bracelet on left wrist",
        "Holding a dark green, crocodile-texture cowboy boot"
      ]
    },
    "environment": {
      "background": "Textured stone masonry wall",
      "details": "Large, irregular grey and beige stone blocks, rough texture, natural architectural backdrop",
      "setting": "Outdoor or semi-outdoor daylight setting"
    },
    "lighting": {
      "type": "Soft natural daylight",
      "quality": "Diffused, even illumination, soft shadows",
      "direction": "Front-lit but soft"
    },
    "styling": {
      "aesthetic": "Bohemian, chic, feminine, soft grunge undertones",
      "mood": "Casual, candid, slightly moody, artistic"
    },
    "camera_details": {
      "shot_type": "Medium shot (thigh-up)",
      "angle": "Eye-level",
      "lens": "85mm prime lens for flattering portrait compression",
      "aperture": "f/2.8 for slight depth of field separation from the wall",
      "focus": "Sharp focus on the subject and dress texture"
    },
    "technical_specifications": {
      "quality": "Ultra Photorealistic, 8k resolution, highly detailed",
      "texture_quality": "High fidelity fabric textures, realistic skin pores, detailed stone masonry",
      "engine": "Unreal Engine 5 render style or high-end photography" Ratio 3.4
    }
  }
```

## Cinematic Pure Joy Splashing Prompt

> Sinematik görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Cinematic Frames, Pure Joy
{argument name="subject" default="[SUBJECT]"} splashing in {argument name="water type" default="[water]"}, sunset backlight, droplets frozen mid-air, pure joy.

Chinese version of the prompt is the same:

Cinematic image, pure joy
[The subject in the reference image (facial features and clothing characteristics remain unchanged)] splashing under the sunset light, water splashing, droplets frozen mid-air, pure happiness.
```

## Moody Fitness Influencer Gym Portrait

> Logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{ "scene_type": "indoor gym lifestyle portrait", "composition": { "framing": "vertical portrait", "camera_angle": "slightly below eye level, straight-on", "subject_position": "centered foreground", "cropping": "upper thigh to head", "pose": "seated on dumbbell rack with legs apart, torso upright, head tilted slightly", "visual_balance": "subject centered with symmetrical dumbbell stacks and mirrored background" }, "subject": { "gender_presentation": "female", "age_range": "young adult", "body_type": "curvy, athletic", "skin_tone": "light", "facial_expression": "soft smile, relaxed and confident", "gaze_direction": "directed toward camera", "hair": { "color": "dark brown", "style": "messy high bun with loose face-framing strands", "texture": "fine, slightly tousled" }, "accessories": [ "over-ear headphones", "fitness wrist straps", "smartwatch" ] }, "clothing": { "top": { "type": "athletic t-shirt", "color": "olive green", "fit": "relaxed, slightly oversized", "fabric": "lightweight performance cotton blend", "branding": "subtle chest logo text" }, "bottom": { "type": "tight pant", "color": "black", "fit": "tight, stretch fit", "length": "upper thigh" }, "footwear": { "type": "training sneakers", "color": "light neutral tones", "visibility": "partially visible" } }, "objects": { "headphones": { "type": "over-ear", "color": "black", "finish": "matte" }, "gym_equipment": [ "dumbbell rack", "free weights", "strength machines" ] }, "environment": { "location_type": "professional fitness gym", "flooring": "rubberized gym flooring", "walls": "dark neutral tones", "mirrors": "large wall mirror behind subject", "spatial_depth": "shallow to medium with blurred background equipment" }, "lighting": { "type": "low-key indoor gym lighting", "source": "overhead artificial lights", "contrast": "medium", "shadows": "soft but present, enhancing body contours", "skin_lighting": "warm, flattering with gentle highlights" }, "color_palette": { "dominant_colors": [ "olive green", "black", "charcoal gray", "warm skin tones" ], "overall_tone": "moody, warm, fitness-oriented" }, "focus_and_depth": { "focus": "sharp on subject", "depth_of_field": "shallow, background softly blurred" }, "image_quality": { "resolution": "high", "noise": "minimal", "sharpness": "high facial and clothing detail", "compression": "light social-media compression" }, "style_and_aesthetic": { "genre": "fitness influencer portrait", "mood": "confident, approachable, relaxed", "social_media_ready": true, "authenticity": "posed yet natural gym moment", "branding_potential": "high for fitness apparel and gym lifestyle content" }, "technical_characteristics": { "lens_effect": "standard to slight portrait lens look", "distortion": "minimal", "white_balance": "warm-neutral", "exposure": "balanced with slight emphasis on subject highlights" }, "background_elements": { "equipment_alignment": "horizontal dumbbell rows", "structural_lines": "repeating cylindrical weight shape
```

## Ultra-Realistic Portrait of an Artist Painting a Self-Mural

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "Ultra-realistic vertical 8K photographic portrait. The person from the reference image is standing inside a cozy cafe painting a large wall mural. The mural on the textured cafe wall is a highly detailed, realistic artistic version of his own face, perfectly matching his real facial features, expression, skin tone, nose shape, eyes, lips, jawline, and hair exactly as in the original photo — as if he is painting a perfect mirror reflection of himself. The wall has a natural rough plaster texture with subtle imperfections, cracks, and artistic brush strokes visible. Surrounding the mural are decorative white ceramic flower pots placed on wooden shelves and hanging hooks, filled with vibrant roses in red, pink, yellow, white, and orange. Green vines and climbing plants are creeping along the wall and around the mural frame, blending naturally into the environment. The subject is holding a paintbrush in one hand and a palette in the other, wearing casual artist clothing with slight paint stains for realism. Soft natural daylight enters through a cafe window from the side, creating gentle shadows, warm highlights, and cinematic depth without harsh lighting. Ambient cafe background with wooden tables, chairs, subtle bokeh lights, and artistic decor elements. Hyper-detailed skin texture, realistic pores, natural skin shine, photorealistic depth of field, high dynamic range, professional DSLR look, vertical composition, cinematic framing, lifelike color grading, true-to-life proportions, perfect perspective, masterpiece quality.",
  
  "negative_prompt": "cartoon, anime, illustration, painting style of the person, distorted face, altered facial features, plastic skin, oversharpening, harsh flash, neon lighting, low resolution, blurry, flat lighting, unrealistic colors, AI artifacts, deformed hands, extra fingers, bad anatomy, messy background, cluttered composition, overexposed, underexposed"
}
```

## Faceless Emo Selfies with Atmosphere

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Now you can create [Faceless Emo Selfies] with Nano Banana Pro 🍌

✅ This texture without showing the face
✅ Directing a casual moment of everyday life
✅ An ennui atmosphere
```

## Pencil Sketch of Sydney Sweeney and Ana de Armas Selfie

> Minimal, elle çizilmiş manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_metadata": {
    "title": "Celebrity Pencil Art Illustration",
    "subjects": ["Sydney Sweeney", "Ana de Armas"],
    "art_style": "Pencil Sketch / Digital Line Art",
    "theme": "Winter Selfie"
  },
  "visual_elements": {
    "characters": [
      {
        "name": "Sydney Sweeney",
        "position": "Left",
        "features": {
          "hair": "Blonde, slicked back into a ponytail",
          "eyes": "Blue, detailed lashes",
          "outfit": "Intricate beaded V-neck dress",
          "expression": "Wide joyful smile"
        }
      },
      {
        "name": "Ana de Armas",
        "position": "Right",
        "features": {
          "hair": "Dark brown, styled in a high bun",
          "eyes": "Light brown/Hazel",
          "outfit": "Elegant dress with white feather shoulder details",
          "expression": "Warm, gentle smile"
        }
      }
    ],
    "objects": {
      "device": "Modern smartphone with triple camera lenses",
      "action": "Taking a close-up selfie"
    },
    "background": {
      "location": "Snowy outdoor resort",
      "structures": ["Wooden mountain chalet", "Ice skating rink"],
      "nature": "Snow-covered pine trees"
    }
  },
  "technical_details": {
    "color_palette": ["Soft Pink", "Cream", "Blue", "Brown"],
    "shading_style": "Smooth gradients with clean outlines",
    "aspect_ratio": "Portrait"
  }
}
```

## Nighttime Flash Portrait in Car Backseat (iPhone Style)

> Fotogerçekçi portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"subject": {
"character": "uploaded_photo",
"face_consistency": "true",
"body_consistency": "true",
"gender": "female",
"age_appearance": "young adult, early 20s",
"ethnicity": "Northern European",
"emotion": "composed, soft confidence, direct gaze, late-night editorial",

"hair": {
"color": "icy platinum blonde",
"length": "shoulder-length",
"style": "voluminous waves with a side part",
"texture": "silky, fine, high-shine under artificial light",
"placement": "cascading over shoulders, one hand lightly touching the hair near the temple"
},

"face": {
"visibility": "fully visible, centered",
"profile_visibility": "full frontal",
"skin_tone": "fair, porcelain, luminous",
"expression": "neutral, relaxed lips, intense but soft eye contact"
}
},

"meta": {
"aspect_ratio": "1:1",
"camera": "iPhone 15 Pro Max, Rear Main Camera",
"lens": "24mm f/1.78 aperture equivalent",
"focal_character": "sharp subject focus, natural depth of field, high dynamic range",
"quality": "ultra photorealistic, 8k resolution, raw mobile photography",
"style": "nighttime flash photography, raw iPhone realism, natural skin texture, subtle digital noise in shadows"
},

"visibility_rules": {
"mirror_only": false,
"no_direct_subject_visibility": false,
"no_body_parts_outside_frame": false
},

"camera_angle": {
"vertical_position": "eye level with the subject",
"horizontal_alignment": "centered directly in front of the subject",
"tilt": "0 degree, straight-on shot",
"yaw": "facing directly toward the subject",
"roll": "perfectly level",
"distance_to_subject_meters": 0.8,
"handheld_behavior": "stable, intentional framing"
},

"body_angle": {
"global_orientation": "seated and reclined in a car backseat",
"torso_rotation_degrees": 10,
"shoulder_alignment": "relaxed, leaning back against leather upholstery",
"hip_rotation_degrees": 45,
"weight_distribution": "seated comfortably, reclining into the seat corner",
"posture": "relaxed, effortless lounge"
},

"head_angle": {
"rotation_degrees": 5,
"tilt": "slight upward tilt",
"chin_position": "slightly lifted",
"neck_tension": "relaxed"
},

"pose": {
"legs": {
"stance": "crossed at the thighs",
"front_leg": "draped over the other, extending toward the camera",
"back_leg": "tucked underneath"
},
"hips": {
"action": "settled into the seat cushion"
},
"arms": {
"right_arm": "elbow resting on the seat, hand gently lifting hair",
"left_arm": "extended downward, hand resting naturally on the seat cushion"
}
},

"clothing": {
"outfit_type": "two-piece set",
"color": "solid matte black",
"top": "strapless bandeau/tube top",
"bottom": "matching high-waisted mini skirt",
"material": "stretch fabric, body-con",
"fit": "tight, form-fitting",
"coverage": "midriff-baring, revealing legs",
"style": "minimalist chic, evening wear"
},

"accessories": {
"shoes": "black thin-strap high-heeled sandals, wrap-around ankle straps",
"nails": "natural medium length, soft neutral polish"
},

"environment": {
"lo"
}
}
```

## Photorealistic Portrait of Woman Holding a Pomeranian (iPhone Style)

> Fotogerçekçi portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "character": "uploaded_photo",
    "face_consistency": true,
    "body_consistency": true,
    "gender": "female",
    "age_appearance": "young adult, early 20s",
    "ethnicity": "Northern European",
    "emotion": "warm, relaxed confidence, friendly intimacy, casual elegance",

    "hair": {
      "color": "light platinum blonde",
      "length": "long, reaching below shoulders",
      "style": "straight with very slight natural wave",
      "texture": "fine, soft, light-reflective",
      "placement": "center-parted, falling evenly over both shoulders"
    },

    "face": {
      "visibility": "fully visible",
      "profile_visibility": "frontal with slight three-quarter turn",
      "skin_tone": "very fair, porcelain",
      "expression": "gentle closed-mouth smile, relaxed cheeks, soft eyes"
    }
  },

  "meta": {
    "aspect_ratio": "3:4",
    "camera": "iPhone 15 Pro rear camera",
    "lens": "24mm smartphone equivalent",
    "aperture": "f/1.78",
    "focal_character": "natural perspective, slight wide-field presence without distortion",
    "quality": "ultra photorealistic",
    "style": "Instagram night portrait, casual lifestyle realism, soft flash illumination, subtle grain"
  },

  "camera_angle": {
    "vertical_position": "camera positioned approximately 10 degrees above subject eye level",
    "horizontal_alignment": "camera centered on subject torso",
    "tilt": "-5 degrees downward",
    "yaw": "camera facing subject directly",
    "roll": "0 degrees, level horizon",
    "distance_to_subject_meters": 2.2,
    "handheld_behavior": "stable handheld with minimal micro-movement"
  },

  "body_angle": {
    "global_orientation": "subject seated sideways on outdoor sofa",
    "torso_rotation_degrees": 18,
    "shoulder_alignment": "slightly angled toward camera",
    "hip_rotation_degrees": 20,
    "weight_distribution": "weight resting evenly on sofa cushion",
    "posture": "upright torso with relaxed shoulders"
  },

  "head_angle": {
    "rotation_degrees": 10,
    "tilt": "slight tilt toward camera-right",
    "chin_position": "neutral",
    "neck_tension": "relaxed"
  },

  "pose": {
    "legs": {
      "position": "both legs bent at knees, angled diagonally toward camera-right",
      "knee_angle_degrees": 95,
      "feet_position": "feet flat on ground, parallel, toes forward"
    },
    "arms": {
      "right_arm": "bent at elbow, supporting dog from underneath",
      "left_arm": "bent at elbow, gently holding dog against torso",
      "elbow_angle_degrees": 80
    },
    "hands": {
      "grip": "gentle, supportive hold on dog",
      "finger_tension": "relaxed"
    }
  },

  "secondary_subject": {
    "type": "dog",
    "breed": "Pomeranian",
    "size": "small",
    "fur_color": "golden tan",
    "fur_texture": "very fluffy, dense, well-groomed",
    "position": "sitting upright on subject’s lap",
    "orientation": "facing camera",
    ""
  }
}
```

## Gorillaz-Styled Illustration Prompt

> Minimal illüstrasyon üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
2000's Gorillaz-styled illustrations
```

## Bohemian Forest Portrait (Analog Film Style)

> Fotogerçekçi, retro manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_structure": {
    "subject": {
      "core": "Young bohemian woman sitting straddled backward on a rustic wooden chair.",
      "details": "Late 20s, tousled braided hair with woven wildflowers, natural freckles, contemplative posture looking over shoulder.",
      "emotion": "Pensive eyes, slight melancholic smile, introspective mood."
    },
    "apparel_and_texture": {
      "outfit": "Oversized hand-knit cream wool sweater, worn distressed corduroy trousers, vintage leather hiking boots.",
      "materials": "Coarse raw wool fibers, thick moss clinging to the ancient wooden chair, damp bark textures, dewy skin.",
      "tactile_details": "Visible stitching on clothing, mud splatters on boots, water droplets on ferns."
    },
    "scene_composition": {
      "framing": "Vertical portrait (social media story format), Rule of Thirds aligning her gaze.",
      "camera_angle": "Eye-level to establish intimacy and connection.",
      "depth": "Shallow depth of field (bokeh), sharp focus on the subject and chair, blurring the deep forest into magical shapes."
    },
    "location_and_atmosphere": {
      "place": "Ancient old-growth forest resembling {argument name="forest location" default="Wistman's Wood, Dartmoor"}; gnarled dwarf oak trees covered in thick epiphytic moss and lichen.",
      "historical_elements": "Druidic stone formations half-buried in the background, twisted roots forming natural archways.",
      "weather_and_particles": "Heavy mystical ground fog, floating bioluminescent spores, cinematic dust motes dancing in light shafts.",
      "time_of_day": "Golden Hour light filtering through dense canopy creating volumetric god rays."
    },
    "cinematography_and_tech": {
      "camera_gear": "Analog film photography, medium format, Pentax 67 + 105mm f/2.4 lens for compression and rendering.",
      "lighting_setup": "Volumetric sun rays piercing the mist, soft diffused natural light creating a painterly glow.",
      "color_grading": "{argument name="film stock" default="Kodak Portra 800"} film stock emulation, warm tones, deep forest greens, desaturated shadows, organic film grain.",
      "resolution": "8k, enchanting photorealistic, cinematic still."
    },
    "midjourney_parameters": {
      "ar": "--ar 9:16",
      "stylize": "--stylize 600",
      "chaos": "--chaos 10",
      "style": "raw"
    }
  }
}
```

## Generating a 'Zero-Gravity Maid' Image

> Minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Zero-gravity maid
#maid #flying
```

## Dual Portrait in Striped Bikinis and Thigh-High Stockings

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Two young women standing side-by-side outdoors in a garden, full body shot, eye-level slightly high angle, 4:5 aspect ratio, high-resolution realistic lifestyle photography.

Left subject: petite young woman with fair/light tan skin, dirty blonde hair in high pigtails, heavy winged eyeliner, almond brown eyes, arched brows, small straight nose, full mauve-pink glossy lips, smiling broadly with visible braces, rosy cheeks. Wearing a pink and white horizontal striped micro string bikini with matching thigh-high stockings, layered necklaces (beaded choker, gold chain with cross pendant, thin gold chain), small gold hoop earrings, pink scrunchie on right wrist, belly button piercing. Standing with weight on one leg, holding bikini bottom side ties, looking directly at camera.

Right subject: athletic young woman with sun-kissed fair/light tan skin, blonde hair in high pigtails secured with blue ties, soft natural makeup, almond dark hazel eyes, heart-shaped face, slender slightly upturned nose, soft pink glossy lips, subtle smile. Wearing a cyan-blue and white horizontal striped micro string bikini with matching thigh-high stockings, blue scrunchie on right wrist, small tattoo on upper left thigh. Slightly angled stance, holding bikini bottom side ties, gazing at camera.

Environment: backyard garden with natural daylight and dappled sunlight, soft shadows. Background includes a mossy tree trunk wrapped in string lights, green foliage and bushes, concrete patio ground, and wrought iron patio table and chairs.
```

## Cinematic Rain Dance Romance Film Still

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photoreal_cinematic_rain_romance",
      "version": "v1.0_RAIN_DANCE_DIP_ROAD_JUNGLE_FILM_LOOK_NO_TEXT",
      "priority": "highest"
    },
    "references": {
      "reference_image_1": {
        "source": "UPLOAD_REFERENCE_IMAGE (REQUIRED)",
        "purpose": "FACE_IDENTITY_LOCK_FEMALE",
        "strict_lock": true,
        "face_similarity_priority": "MAX",
        "no_identity_blending": true,
        "no_beautify": true,
        "no_age_shift": true,
        "preserve_skin_texture": true,
        "preserve_facial_proportions": true
      },
      "reference_image_2": {
        "source": "UPLOAD_REFERENCE_IMAGE (OPTIONAL)",
        "purpose": "POSE_COMPOSITION_ANCHOR_RAIN_DIP",
        "strict_lock": true,
        "preserve_pose": true,
        "preserve_composition": true
      }
    },
    "output_settings": {
      "aspect_ratio": "9:16",
      "orientation": "portrait",
      "resolution_target": "ultra_high_res",
      "render_style": "cinematic_photoreal_film_still",
      "sharpness": "crisp_subject_soft_background",
      "film_grain": "subtle_35mm",
      "color_grade": "moody_warm_rain_cinematic",
      "dynamic_range": "natural_not_hdr",
      "skin_rendering": "real_texture_wet_skin_natural"
    },
    "creative_prompt": {
      "scene_summary": "Ultra-photorealistic cinematic romance in heavy rain on a jungle road. A couple is mid-dance dip: the man supports the woman in a dramatic lean-back pose while they laugh and lock eyes. Everything is soaked—wet hair, wet fabric clinging naturally, rain streaks visible, road surface glossy with puddles. The mood is passionate, playful, and movie-like.",
      "environment": {
        "location": "tropical forest / jungle roadside",
        "background": "dense green foliage, soft bokeh, misty rain haze",
        "ground": "wet asphalt with reflective puddles, faint yellow road line visible",
        "weather": "heavy rain with visible streaks and splashes",
        "lighting": "overcast soft key light + subtle warm bounce, cinematic contrast"
      },
      "subjects": {
        "female": {
          "identity": "MATCH_REFERENCE_FACE_EXACTLY",
          "wardrobe": {
            "top": "wet light-colored summer top (tasteful coverage), realistic fabric cling and wrinkles",
            "skirt": "wet light skirt with subtle ruffles, natural water weight and folds",
            "no_underwear_focus": true,
            "modesty": "no nudity, no explicit lingerie, no see-through exposure beyond realistic wet fabric"
          },
          "hair": "long dark hair fully wet, heavy strands, realistic clumping and drip",
          "pose": "deep dip/lean-back supported in his arms, one arm around his neck, chest lifted, head tilted back laughing",
          "expression": "joyful laugh, romantic energy",
          "hands_nails_constraints": {
            "no_rings": "no_en"
          }
        }
      }
    }
  }
}
```

## Cinematic Vintage Bicycle Romance Film Still

> Fotogerçekçi, sinematik manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photoreal_cinematic_romantic_motion_film_still",
      "version": "v1.0_VINTAGE_BICYCLE_FOREST_ROMANCE_FILM",
      "priority": "highest"
    },

    "output_settings": {
      "aspect_ratio": "3:4",
      "orientation": "portrait",
      "resolution_target": "ultra_high_res",
      "render_style": "cinematic_film_still",
      "sharpness": "natural_motion_soft",
      "film_grain": "subtle_35mm",
      "color_grade": "warm_sepia_green_analog",
      "dynamic_range": "natural_not_hdr",
      "skin_rendering": "real_texture_no_retouch"
    },

    "creative_prompt": {
      "scene_summary": "A cinematic, vintage-style moment of a young couple riding a classic bicycle together on a quiet forest road. The woman sits in front wearing a light floral dress, arms stretched out wide in joy, while the man rides behind her, holding her gently. The scene captures motion, laughter, and freedom, like a fleeting memory from an old film.",

      "environment": {
        "location": "tree-lined forest path",
        "season": "late summer or early autumn",
        "background": "dense green trees softly blurred by motion",
        "ground": "light paved road with subtle cracks and texture",
        "atmosphere": "calm, nostalgic, breezy"
      },

      "subjects": {
        "female": {
          "wardrobe": "light floral vintage dress, knee-high light boots",
          "pose": "sitting on the bicycle frame, arms open wide",
          "expression": "laughing, joyful, carefree",
          "hair": "dark hair flowing naturally with movement"
        },
        "male": {
          "wardrobe": "earth-tone shirt, light trousers, leather shoes",
          "pose": "riding the bicycle from behind, arms wrapped protectively",
          "expression": "focused yet smiling, calm confidence"
        }
      },

      "props": {
        "bicycle": "vintage cream-colored bicycle with thin tires and simple frame",
        "details": "slightly worn paint, classic design"
      },

      "camera_style": {
        "pov": "side tracking shot",
        "lens_feel": "cinema lens, shallow depth of field",
        "motion": "intentional motion blur on wheels and background, subjects mostly sharp",
        "framing": "subjects centered slightly right, leading space in front of movement"
      },

      "aesthetic": {
        "era": "timeless, 1970s–1990s indie romance",
        "vibe": "freedom, young love, poetic realism"
      },

      "negative_prompt": "modern bikes, helmets, sporty cycling gear, HDR, sharp digital look, studio lighting, glossy skin, beauty filters, exaggerated blur, frozen motion, text overlays, watermarks, AI artifacts, extra limbs, deformed hands"
    }
  }
}
```

## Candid Locker Room Post-Swim Selfie

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{ "scene": "Indoor locker room setting with two young women post-swim",

"subject": { "character": "Two young women with athletic builds and damp skin",

"face": {
  "structure": "Soft oval face shapes, natural features",
  "skin": "Damp, glistening with moisture/sweat, natural texture with minor imperfections and pores visible",
  "eyes": {
    "shape": "Almond-shaped",
    "color": "Dark brown",
    "expression": "Candid, slightly surprised or neutral, direct gaze for the subject on the right, over-the-shoulder gaze for the subject on the left"
  },
  "mouth": {
    "lips": "Natural pink tone, slightly parted, no visible smile"
  },
  "makeup": "Minimal to none, natural appearance with possible slight mascara"
},

"hair": {
  "color": "Medium-dark brown",
  "length": "Shoulder to mid-back length when loose",
  "texture": "Wet, damp, and clumped strands; natural frizz and flyaways present",
  "style": "Messy updos; Subject on left has hair pulled back in a low bun/ponytail with loose strands; Subject on right has damp hair swept back with strands falling over the forehead",
  "visible": "Fully visible, including roots and stray fibers"
},

"accessories": {
  "hat": {
    "type": "none",
    "color": "n/a",
    "detail": "n/a",
    "fit": "n/a"
  }
}
},

"pose": { "overall": "Candid, close-up interaction in a confined space",

"position": {
  "base": "Standing",
  "orientation": "Subject on left is turned away (3/4 back view); Subject on right is facing forward, leaning toward the camera"
},

"torso": {
  "direction": "Left subject: facing away/back; Right subject: facing front, slightly hunched",
  "position": "Close proximity to each other"
},

"hips": {
  "position": "Left subject: angled toward the background; Right subject: angled toward the camera",
  "emphasis": "High-cut swimsuit emphasizes the hip line and upper thigh"
},

"legs": {
  "position": "Parallel standing",
  "visible": "Upper thighs visible"
},

"arms": {
  "position": "Left subject's right arm is bent, holding a towel; Right subject's right arm is extended toward the camera (holding the phone)"
},

"head": {
  "turn": "Left subject: turned 90 degrees over left shoulder; Right subject: tilted slightly forward and centered",
  "expression": "Neutral, slightly breathless or candid"
}
},

"outfit": { "swimwear": { "type": "One-piece athletic swimsuit", "color": "Navy blue",

  "top": {
    "style": "Racerback / Scoop neck",
    "ties": "None",
    "coverage": "Full athletic coverage"
  },

  "bottom": {
    "style": "High-leg cut",
    "cut": "Cheeky to moderate",
    "ties": "None",
    "coverage": "Moderate"
  }
}
},

"body": { "type": "Athletic, slim", "skin": "Light-medium tone, wet/sweaty sheen", "back": "Exposed back on left subject due to racerback/keyhole design", "curves": "Natural, emphasized by the tight fit of the swimwear" },

"environment": { "location": "Locker room",

"pool": {
  "water": "n/a",
  "edge": "n/a"
},

"surroundings": {
  "wall": "Off
```

## Cinematic Editorial Portrait in a Cafe with Window Shadows

> Sinematik, minimal mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Cinematic editorial portrait, ultra-detailed.
A young man sits cross-legged on a simple wooden chair, relaxed yet introspective, wearing white over-ear headphones, a black knit sweater, and brown trousers. His face is turned toward the incoming light, eyes calm and reflective.

Interior setting: an intimate creative workspace with warm, textured off-white walls. The background features a corkboard filled with pinned sketches, handwritten notes, and clipped photographs, arranged organically rather than neatly. A tall wooden side shelf on the right holds stacked books, a small indoor plant, and a vintage globe, adding depth and visual balance.

Lighting: rich golden-hour sunlight entering from the left, passing through a window and casting crisp, rectangular window-grid shadows across the subject and the back wall. Strong directional light with warm highlights and soft falloff.

Visual elements: oversized vertical typography reading “{argument name="background text" default="THINK"}” subtly embedded into the background, semi-transparent, softly faded, blending into the wall texture.

Mood & texture: warm, nostalgic, cinematic tone, quiet and contemplative atmosphere, subtle film grain, slight vignette, natural color palette, realistic skin tones, shallow depth of field, high-end photography aesthetic.
```

## Ultra-Realistic Ana De Armas Studio Portrait Prompt (JSON format)

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "style": "ultra-realistic studio portrait",
  "subject": {
    "gender": "female {argument name="subject name" default="Ana De Armas"} ",
    "age": "young adult",
    "pose": "leaning slightly forward toward the camera",
    "expression": "playful, flirty",
    "facial_details": {
      "wink": true,
      "tongue_out": true,
      "freckles": "natural across fair skin",
      "makeup": {
        "blush": "soft pink",
        "lips": "glossy"
      }
    },
    "hair": {
      "color": "blonde",
      "length": "long",
      "part": "side-parted",
      "style": "falling naturally over shoulders"
    },
    "outfit": {
      "dress": "off-shoulder fitted {argument name="dress color" default="Red"} dress",
      "jewelry": {
        "earrings": "long dangling gold earrings",
        "necklaces": "layered gold necklaces with small heart pendant"
      }
    }
  },
  "environment": {
    "setting": "studio",
    "background": "clean minimal light neutral tones"
  },
  "lighting": {
    "type": "soft diffused studio lighting",
    "shadows": "smooth natural shadows"
  },
  "camera": {
    "lens": "50mm",
    "aperture": "f/1.8",
    "depth_of_field": "shallow"
  },
  "quality": {
    "resolution": "high resolution",
    "detail": "ultra-detailed",
    "skin_texture": "photorealistic",
    "focus": "sharp focus",
    "photography_style": "high fashion lifestyle photography" 
  }
}
```

## Cinematic Portrait of Woman in Pop-Art Sleepwear

> Fotogerçekçi, sinematik çizgi roman karesi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_structure": {
    "subject": {
      "demographics": "Young adult female, approx 20-25 years old.",
      "appearance": "Fair porcelain skin tone, soft and smooth texture. Long, dark black hair styled in loose, voluminous waves cascading down the back and over the left shoulder. High cheekbones, full lips, and a straight nose.",
      "distinctive_marks": "Small, delicate script tattoo located on the upper left chest/collarbone area.",
      "gaze": "Looking away from the camera, gazing intently out of a window to the left."
    },
    "attire": {
      "item": "Two-piece sleepwear/lounge set (spaghetti strap camisole top and matching shorts).",
      "design": "All-over retro pop-art comic book print. The pattern features comic strip panels, speech bubbles with text, and illustrative character faces.",
      "colors": "White base fabric with vibrant graphic prints in red, cyan blue, yellow, and black outlines.",
      "fit": "Comfortable, semi-fitted, showing natural fabric folds around the waist and bust."
    },
    "pose_and_gesture": {
      "stance": "Standing upright in a three-quarter profile view facing left.",
      "arms": "Protective/contemplative posture; right arm hangs loosely while the left hand crosses the torso to hold the right arm/elbow.",
      "reflection": "The subject's back and hair are clearly reflected in the glass window pane to her left."
    },
    "environment": {
      "location": "Modern interior, likely a bedroom or living area.",
      "key_elements": "Large floor-to-ceiling glass window or sliding door with a thick, matte black frame.",
      "background": "A plain, neutral off-white or light gray wall behind the subject. The interior is minimal and uncluttered."
    },
    "lighting": {
      "source": "Natural daylight diffused through the window.",
      "direction": "Side lighting coming from the left.",
      "quality": "Soft and flattering, highlighting the facial features and the curve of the body while casting gentle, natural shadows on the right side (away from the window)."
    },
    "mood_and_atmosphere": {
      "vibe": "Introspective, serene, quiet, slightly melancholic, morning calm.",
      "emotional_tone": "Pensive and dreamy."
    },
    "camera_and_technical": {
      "style": "Ultra-photorealistic, cinematic portrait photography.",
      "lens": "85mm portrait lens.",
      "aperture": "f/2.8 for a shallow depth of field, keeping the subject sharp while softly blurring the background wall.",
      "resolution": "8k, high definition.",
      "details": "Hyper-realistic skin texture (pores, peach fuzz), accurate fabric physics, realistic light refraction in the window glass, ray-traced reflections."
    }
  }
}
```

## Long-Exposure Cinematic Street Photography Portrait

> Fotogerçekçi, sinematik manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene_composition": {
    "primary_subjects": {
      "woman": {
        "description": "Young woman with short, wind-tossed blonde hair and a thoughtful, distant expression",
        "gaze": "Looking slightly upward and away from the lens",
        "clothing": "Earthy brown velvet dress paired with a heavy, textured olive green tweed coat"
      },
      "companion": "A calm, still ginger cat sitting closely beside her on the bench"
    },
    "environment": {
      "setting": "Crowded metropolitan city square at dusk",
      "dynamic_elements": "Pedestrians captured as abstract, painterly motion-blurred streaks rushing in both directions",
      "contrast": "Perfect stillness of the subjects vs. the chaotic blur of the surrounding crowd"
    }
  },
  "technical_aesthetic": {
    "photography_style": "Long-exposure cinematic street photography, heavy subject isolation",
    "lighting": "Soft natural overcast light with warm amber street-glow accents",
    "color_palette": ["Muted forest greens", "Warm ochre", "Deep velvet brown", "Desaturated urban grays"],
    "lens_effects": "Shallow depth of field, sharp focus on subject textures, soft-focus background",
    "image_quality": ["8k resolution", "Ultra-realistic", "Fine-art editorial grain", "Tactile fabric textures"]
  },
  "mood": "Quietly emotional, introspective, melancholic, and timeless"
}
```

## Hyper-Realistic Macro Portrait of Sydney Sweeney (Wet Look)

> Fotogerçekçi portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "request_metadata": {
    "version": "2.0",
    "priority_focus": "Hyper-realistic skin textures and identity fidelity",
    "aspect_ratio": "3:4"
  },
  "subject_configuration": {
    "identity": {
      "name": "Sydney Sweeney",
      "reference_mode": "strict_identity_matching",
      "source_reference": "uploaded_files",
      "preservation_weight": 1.0,
      "angle": "Extreme profile view"
    },
    "facial_attributes": {
      "eyes": {
        "primary_color": "Natural Green",
        "secondary_color": "Hazel",
        "reflection_type": "Realistic catchlights",
        "aesthetic_constraint": "Avoid synthetic gloss or excessive shine"
      },
      "lips": {
        "state": "Parted / Moist",
        "surface_texture": "Soft natural ridges",
        "finish": "Glossy sheen without distortion"
      },
      "hair": {
        "color": "Dark Brunette",
        "state": "Saturated / Wet",
        "styling": "Clumping in natural strands, adhered to temples and neck"
      }
    }
  },
  "environmental_rendering": {
    "moisture_fx": {
      "sweat_layer": "Fine glistening mist across the bridge of nose and forehead",
      "water_droplets": "Micro-droplets scattered on cheekbones and jawline",
      "surface_tension": "Realistic liquid adhesion to skin"
    },
    "lighting_and_color": {
      "lighting_style": "Soft-box diffusion",
      "temperature": "Cool tones",
      "color_palette": ["Steel Blue", "Soft Cyan", "Natural Skin Tones"],
      "background": {
        "description": "Minimalist bokeh",
        "colors": ["Light Grey", "Pure White"],
        "depth_of_field": "Shallow"
      }
    }
  },
  "technical_execution": {
    "rendering_engine": "CGI Photorealistic",
    "focal_length": "85mm macro",
    "texture_detail": "Pore-level resolution",
    "post_processing": "Raw photography style, no airbrushing"
  }
}
```

## SpongeBob Taco Beach Resort Diorama Prompt

> Fotogerçekçi yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Micro diorama food photography: A taco beach resort with SPONGEBOB characters. SpongeBob builds a sandcastle from crushed tortilla chips. Patrick sunbathes on a lettuce leaf beach towel near the guacamole pool. Squidward reluctantly lifeguards from a sour cream tower. Mr. Krabs counts corn kernel "gold coins" at a cheese shred cabana. Sandy surfs a lime wedge on the salsa ocean. Plankton tries to steal the "secret taco recipe" from a tiny restaurant. Gary leaves a slime trail on the taco shell. Bright tropical sunset, Mexican fiesta colors, Bikini Bottom beach vacation energy, 8K hyperrealistic

A stylish handwritten signature "Willy" at Bottom Right corner.
```

## Nighttime Rain Selfie with iPhone Reflection

> Portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "task": "photo_edit",
  "rules": {
    "face_change": false,
    "keep_identity": true
  },
  "subject": {
    "gender": "female",
    "expression": "looking straight into the camera with tongue slightly sticking out to the side of lips",
    "hair": {
      "condition": "wet",
      "style": "slightly falling out from raincoat"
    },
    "outfit": {
      "type": "transparent clear white plastic raincoat",
      "details": "rain droplets visible, glossy texture"
    },
    "pose": {
      "hands": "both hands holding an iPhone",
      "camera_angle": "upper front"
    }
  },
  "phone": {
    "brand": "iPhone",
    "case_color": "pink",
    "screen": {
      "status": "on",
      "time_displayed": "21:00",
      "wallpaper": "same uploaded photo of the woman"
    }
  },
  "environment": {
    "time": "night",
    "weather": "after rain",
    "location": "street roadside",
    "road": {
      "condition": "wet",
      "surface": "shiny due to rain"
    },
    "sidewalk": {
      "material": "concrete",
      "curbs": "black and white painted"
    },
    "background": {
      "trees": "lush dark green leaves",
      "coverage": "partially covering background"
    },
    "lighting": {
      "street_lights": true,
      "focus": "bright lighting on face",
      "mood": "humid, calm nighttime atmosphere"
    }
  },
  "visual_style": {
    "realism": "high",
    "details": "clear reflections, sharp facial details, transparent raincoat highlights"
  }
}
```

## AI Conversion to Bard (Minstrel) Character

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
🎶💃 Tried converting it into a Bard (Minstrel) using AI

Recharge energy with song and dance! 🎤
The birth of a battlefield idol ✨
```

## Ethereal Submerged Portrait in Icy Water

> Fotogerçekçi, sinematik manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": {
    "subject": {
      "type": "Human",
      "gender": "Female",
      "appearance": {
        "hair": {
          "color": "Blonde",
          "texture": "Wet, slightly wavy",
          "length": "Short to medium",
          "style": "Slicked back, interacting with water"
        },
        "skin": {
          "tone": "Pale, cool undertones",
          "texture": "Hyper-realistic, wet, visible water droplets on face",
          "features": "Closed eyes, relaxed expression, high cheekbones, defined jawline, slightly parted lips"
        },
        "pose": {
          "position": "Submerged up to neck/ears in water",
          "head_orientation": "Tilted back fully, face parallel to sky",
          "reflection": "Clear, symmetrical reflection of the profile visible in the dark water below"
        }
      },
      "clothing": "None visible (focus is on head and neck)"
    },
    "environment": {
      "setting": "Frozen lake or icy body of water",
      "background": {
        "elements": "Blurred dark forest line, distant snowy mountains",
        "weather": "Overcast, moody, winter atmosphere"
      },
      "foreground": {
        "elements": "Chunks of broken ice floating around subject",
        "water": "Dark, glassy, icy texture"
      }
    },
    "lighting": {
      "type": "Natural, soft, diffuse",
      "source": "Overcast sky (global illumination)",
      "contrast": "Medium contrast with deep blacks in the water/background and soft highlights on the face",
      "mood": "Ethereal, melancholic, serene, cold, cinematic"
    },
    "styling": {
      "makeup": "Minimal, natural, wet look",
      "aesthetic": "Fine art photography, cinematic stills, dark nature"
    },
    "camera_details": {
      "angle": "Low angle, surface-level view (water level)",
      "shot_type": "Close-up / Portrait",
      "focus": "Sharp focus on the subject's face, shallow depth of field (bokeh background)",
      "lens_characteristics": "Likely 85mm or 50mm prime lens"
    },
    "photorealism": {
      "quality": "8k resolution, ultra-detailed",
      "texture_details": "Realistic ice opacity, water surface tension, skin pores, hair strands",
      "style": "Photorealistic, cinematic color grading (desaturated cool tones, cyans, and greys)"
    }
  }
}
```

## Cozy Cinematic Human Intro Scene

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "A cozy, content human intro scene. A person sitting casually near a coffee window, soft natural daylight coming in. Warm, calm atmosphere. The person looks relaxed and peaceful, not looking directly at the camera, gaze slightly turned away. Cozy lifestyle vibe, natural light photography, candid moment.",
  "style": "{argument name="style" default="cozy, realistic, cinematic"}",
  "lighting": "soft natural daylight",
  "mood": "calm, warm, peaceful",
  "camera": "off-camera gaze, candid angle",
  "environment": "coffee window, indoor with natural light",
  "quality": "high detail, realistic textures"
}
```

## Aged Paper Illusion Promotional Design

> Fotogerçekçi görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Nano Banana Pro || 8K Ultra-Realistic Promotional
Design a hyper-realistic close-up image of a folded sheet of aged paper. Within the paper’s creases and surfaces, depict a {argument name="scene or memory" default="[SCENE OR MEMORY]"} emerging naturally from the folds, like sculpted origami.
The environment and figures (if present) appear embossed or printed directly into the paper, using wrinkles, grain, and ink textures to build the illusion. Include subtle shadows, curled edges, torn corners, and ink fading to enhance realism.
Set the paper on a neutral tabletop with soft directional light from one side, casting gentle shadows and enhancing dimensional depth.
Photorealistic, emotional storytelling, handcrafted visual illusion, 8K ultra-detail, and image size 4 5.
```

## Candid 3 AM Fridge Light Portrait

> Sinematik, retro mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_prompt": {
    "meta": {
      "aspect_ratio": "9:16",
      "orientation": "vertical",
      "style": "Cinematic low-light realism"
    },
    "subject": {
      "description": "21-year-old woman with a natural, unpolished beauty",
      "face": "Looking directly into the open fridge, face bathed in cool white light, sleepy eyes, slightly messy lips",
      "skin": "Fresh-faced, no makeup, soft blue-ish highlights on the cheekbones from the fridge light",
      "hair": "Extremely messy 'bed-head' bun, loose strands falling on her neck",
      "pose": "Sitting on the kitchen counter next to the open fridge, one leg pulled up to her chest, holding a bunch of {argument name="item held" default="grapes"}",
      "outfit": "Oversized men's vintage t-shirt (washed out grey), worn as a dress, bare legs"
    },
    "environment": {
      "location": "A realistic, slightly cluttered modern kitchen at 3 AM",
      "background_elements": [
        "Open refrigerator glowing in the dark",
        "Blurred counter with a half-empty wine glass",
        "Shadows of the kitchen cabinets stretching across the floor"
      ]
    },
    "lighting": {
      "type": "Cold light from the refrigerator interior",
      "characteristics": [
        "High contrast between the lit face and the pitch-black room",
        "Deep, moody shadows",
        "Soft light spill on the marble countertop"
      ]
    },
    "photography_style": {
      "style": "Raw, candid smartphone snap",
      "camera_look": "High-ISO digital grain, slightly soft focus",
      "imperfections": "Digital noise in the dark areas, messy background details, natural skin texture",
      "mood": "Intimate, quiet, alluring, domestic"
    },
    "render_quality": {
      "realism": "Subsurface scattering under cold light",
      "detail_level": "Focus on the grapes' translucency and the fabric texture of the worn t-shirt"
    }
  }
}
```

## Photorealistic Portrait Prompt (Young Woman)

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "person": "Young woman with a calm, introspective expression, gazing softly off-camera",
    "features": ["softly tousled auburn hair", "delicate round gold wire-frame glasses", "subtle blush", "fine natural freckles", "realistic skin texture"],
    "attire": "Minimal beige knit sweater featuring a crisp white Peter Pan collar"
  },
  "environment": {
    "setting": "Outdoor dusk portrait",
    "background": "Smooth sky gradient with lavender, peach, and soft pink hues",
    "lighting": "Gentle golden hour natural light, soft wrap-around illumination"
  },
  "technical_specifications": {
    "camera_settings": "Shallow depth of field, f/1.8 aperture, soft-focus edges",
    "film_style": "Vintage film aesthetic, cinematic editorial photography, fine grain",
    "color_palette": "Muted pastel tones, desaturated warmth",
    "resolution": ["8k ultra-high definition", "photorealistic", "highly detailed textures"]
  },
  "mood": "Dreamy, serene, poetic, and nostalgic"
}
```

## Detailed Cinematic Portrait of Sydney Sweeney on a Boat

> Sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_analysis": {
    "subject": {
      "name": "Sydney Sweeney",
      "action": "Ek motorboat chala rahi hain (Driving a boat)",
      "appearance": {
        "hair": "Long blonde hair, wind-blown effect",
        "eyewear": "Transparent stylish sunglasses",
        "headwear": "Woven straw sun hat with dark trim",
        "expression": "Cheerful and confident smile"
      },
      "attire": {
        "outfit_type": "One-piece swimsuit / Monokini",
        "color": "Navy blue / Dark blue",
        "features": "Side cut-outs with a pink floral embellishment on the hip"
      }
    },
    "environment": {
      "setting": "Outdoor lake / River",
      "background": {
        "scenery": "Lush green hills with dense pine trees",
        "water_state": "Calm water with ripples from the boat's movement",
        "sky": "Clear bright blue sky"
      },
      "location_context": "Summer vacation / Leisure activity"
    },
    "cinematography": {
      "composition": "Split-frame style (Close-up and Medium shot)",
      "lighting": {
        "source": "Natural direct sunlight",
        "quality": "Bright, high-contrast daylight",
        "shadows": "Hard shadows consistent with midday sun"
      },
      "angles": {
        "left_panel": "Extreme close-up focusing on facial features and hat texture",
        "right_panel": "Side profile medium shot showing the boat's interior and scenery"
      },
      "color_palette": {
        "dominant_colors": ["Sky Blue", "Forest Green", "Navy Blue", "Golden Tan"],
        "vibe": "Vibrant, sun-drenched, and adventurous"
      },
      "technical_metadata": {
        "aspect_ratio": "Landscape (Composite)",
        "focus": "Sharp focus on the subject with natural background blur (depth of field)",
        "image_style": "Candid celebrity lifestyle photography"
      }
    }
  }
}
```

## Cinematic Diptych with Identity Lock and Blue Tones

> Sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_generation_prompt",
  "format": "diptych",
  "aspect_ratio": "vertical, two stacked frames",
  "style": "cinematic, moody, high-contrast, blue-toned film aesthetic",
  "identity_preservation": {
    "use_reference_image": true,
    "strict_identity_lock": true,
    "alter_face": false,
    "alter_clothing": false,
    "notes": "Maintain 100% identical facial identity, proportions, skin texture, moles, hairstyle, and original clothing from the reference image. No facial or structural changes allowed."
  },
  "subject": {
    "gender": "female",
    "consistency": "same woman appears in both frames",
    "expression": "introspective, pensive, emotionally restrained"
  },
  "diptych_composition": {
    "top_frame": {
      "description": "Low-angle silhouette portrait of the woman against an overexposed sky. The sun appears as a bright white orb on the right side of the frame, creating intense backlighting. The woman is seen mostly in shadow, gazing toward the light. Her hair is windswept, strands lifting upward, forming a glowing halo around her head.",
      "camera": {
        "lens": "wide-angle",
        "focus": "soft focus",
        "grain": "visible film grain"
      },
      "lighting": {
        "source": "direct sunlight",
        "effect": [
          "strong silhouette",
          "halo glow around hair",
          "ethereal backlight"
        ]
      },
      "mood": "dreamlike, abstract, contemplative",
      "color_palette": "electric blue sky with white highlights"
    },
    "bottom_frame": {
      "description": "High-angle selfie of the same woman taken outdoors on asphalt. The camera looks down toward her face and extended hands, which partially obscure the frame. Her hair falls across her face naturally. She looks directly into the lens with a calm yet pensive expression.",
      "camera": {
        "lens": "wide-angle selfie perspective",
        "focus": "sharp focus on face and hands",
        "grain": "subtle film grain"
      },
      "lighting": {
        "source": "harsh direct sunlight from above-left",
        "effect": [
          "deep shadows",
          "bright highlights",
          "strong contrast emphasizing skin and fabric texture"
        ]
      },
      "environment": {
        "ground": "dark asphalt with white markings visible"
      },
      "mood": "intimate, grounded, direct",
      "color_palette": "cool blue tones with high contrast"
    }
  },
  "art_direction": {
    "theme": "duality",
    "narrative": "top frame represents abstraction and introspection; bottom frame represents intimacy and realism",
    "cohesion": "both frames unified by blue color cast, film grain, and dramatic lighting"
  },
  "quality": {
    "realism": "photorealistic",
    "detail_level": "high",
    "texture": "natural skin, hair, and fabric textures preserved"
  },
  "constraints": [
    "No facial alteration",
    "No identity change",
    "No beautification or stylizat"
  ]
}
```

## Ultra-Photorealistic Romantic Film Still (Uskudar Sunset)

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photoreal_modern_romance",
      "version": "v1.0_2026_USKUDAR_SUNSET_TEA_FINAL_EN",
      "priority": "highest",
      "language": "en"
    },
    "references": {
      "reference_image_female": {
        "source": "UPLOAD_REFERENCE_IMAGE (REQUIRED)",
        "purpose": "FACE_IDENTITY_LOCK_FEMALE",
        "strict_lock": true,
        "face_similarity_priority": "MAX",
        "no_identity_blending": true,
        "no_beautify": true,
        "no_age_shift": true,
        "preserve_skin_texture": true,
        "preserve_facial_proportions": true
      },
      "reference_image_male": {
        "source": "UPLOAD_REFERENCE_IMAGE (REQUIRED)",
        "purpose": "FACE_IDENTITY_LOCK_MALE",
        "strict_lock": true,
        "face_similarity_priority": "MAX",
        "no_identity_blending": true,
        "no_beautify": true,
        "no_age_shift": true,
        "preserve_skin_texture": true,
        "preserve_facial_proportions": true
      }
    },
    "global_constraints": {
      "rating": "PG-13",
      "no_explicit_sexual_content": true,
      "no_text": true,
      "no_logos": true,
      "no_watermark": true
    },
    "output_settings": {
      "aspect_ratio": "16:9",
      "resolution_target": "ultra_high_res",
      "render_style": "ultra_photoreal_candid_cinema_film_still",
      "sharpness": "crisp_but_natural",
      "film_grain": "subtle_modern_cinema",
      "color_grade": "golden_hour_istanbul_soft",
      "dynamic_range": "natural_not_hdr",
      "skin_rendering": "real_texture_no_retouch"
    },
    "global_rules": {
      "camera_language": "50mm, eye-level, intimate candid, focus on eyes, hands, and steam from tea",
      "lighting_language": "golden hour sunset + sky fill only, realistic reflections on water",
      "authenticity_markers": "no AI glow, no HDR, natural Istanbul atmosphere"
    },
    "creative_prompt": {
      "scene_summary": "2026, Uskudar seaside. Maiden’s Tower in the background. The couple is sitting side by side on a bench; hands intertwined; shoulder to shoulder; tea from a thermos, traditional Turkish tea glasses, a light blanket. Final feeling: peace and lasting love.",
      "subjects": {
        "count": 2,
        "description": "same woman and man, realistic, warm",
        "expression": "peaceful smile, soft gaze",
        "skin_and_face": "natural texture, no retouch"
      },
      "pose_and_micro_action": "The woman rests her head on the man’s shoulder; the man gently leans his head toward hers; hands intertwined; visible steam from the tea; brief eye contact followed by a smile.",
      "wardrobe_and_style": {
        "female": "timeless elegant coat/shawl, long skirt, light scarf; minimal makeup",
        "male": "simple jacket and trousers, scarf; timeless style",
        "no_logos": "no logos of any kind"
      },
      "jewelry_nails": {
        "fema
```

## Ultra-Realistic Studio Portrait of Sydney Sweeney

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "style": "ultra-realistic studio portrait",
  "subject": {
    "gender": "female Sydney Sweeney ",
    "age": "young adult",
    "pose": "leaning slightly forward toward the camera",
    "expression": "playful, flirty",
    "facial_details": {
      "wink": true,
      "tongue_out": true,
      "freckles": "natural across fair skin",
      "makeup": {
        "blush": "soft pink",
        "lips": "glossy"
      }
    },
    "hair": {
      "color": "blonde",
      "length": "long",
      "part": "side-parted",
      "style": "falling naturally over shoulders"
    },
    "outfit": {
      "dress": "off-shoulder fitted Red dress",
      "jewelry": {
        "earrings": "long dangling gold earrings",
        "necklaces": "layered gold necklaces with small heart pendant"
      }
    }
  },
  "environment": {
    "setting": "studio",
    "background": "clean minimal light neutral tones"
  },
  "lighting": {
    "type": "soft diffused studio lighting",
    "shadows": "smooth natural shadows"
  },
  "camera": {
    "lens": "50mm",
    "aperture": "f/1.8",
    "depth_of_field": "shallow"
  },
  "quality": {
    "resolution": "high resolution",
    "detail": "ultra-detailed",
    "skin_texture": "photorealistic",
    "focus": "sharp focus",
    "photography_style": "high fashion lifestyle photography" 
  }
}
```

## Photorealistic Winter Twilight Portrait in Structured JSON Format

> Fotogerçekçi manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "description": "Young female subject with long, dark, wavy brunette hair parted in the middle.",
    "physique": "Slender but curvaceous build, prominent bust volume maintained as per reference, natural soft tissue displacement.",
    "skin": "Tan complexion with significant cool blue undertone from ambient lighting, smooth texture, visible collarbones.",
    "clothing": {
      "top": "Navy blue spaghetti-strap crop top, tight fit, low scooped neckline.",
      "bottom": "Matching navy blue fitted shorts.",
      "footwear": "White ribbed crew socks, pulled up to mid-calf.",
      "accessories": "Delicate silver necklace with an 'evil eye' pendant, bright red nail polish on fingernails."
    }
  },
  "pose": {
    "type": "Seated, relaxed, asymmetrical.",
    "body_orientation": "Front-facing, torso slightly angled to camera right.",
    "limbs": {
      "legs": "Legs crossed; right leg resting over left knee, right shin parallel to chair front, left leg vertically grounded.",
      "arms": "Right arm extended resting hand on chair armrest, left arm relaxed with hand resting on the seat cushion near hip.",
      "head": "Facing directly forward, chin level, direct eye contact."
    }
  },
  "environment": {
    "foreground": "Beige upholstered armchair with textured fabric, situated on a dark wooden deck.",
    "midground": "Glass balcony railing with black metal posts and handrail.",
    "background": "Snow-covered winter landscape, residential valley with houses, distant mountain range, twilight atmosphere.",
    "weather": "Cold, snowy, clear evening."
    
  },
  "camera": {
    "perspective": "Eye-level, straight-on shot.",
    "focal_length": "35mm to 50mm equivalent (standard wide).",
    "depth_of_field": "Deep focus; subject is sharp, background is visible and recognizable, no bokeh or blur.",
    "framing": "Medium-full shot, cutting off at the shins."
  },
  "lighting": {
    "type": "Ambient twilight (blue hour).",
    "direction": "Diffuse, omnidirectional outdoor light.",
    "quality": "Soft, flat, low-contrast.",
    "shadows": "Minimal, soft ambient occlusion under the chair and limbs, no harsh cast shadows."
  },
  "mood_and_expression": {
    "facial_expression": "Neutral, calm, slightly alluring, lips relaxed and slightly pouty.",
    "mood": "Serene, cold, upscale, quiet."
  },
  "style_and_realism": {
    "type": "Raw smartphone photography, high-fidelity replication.",
    "finish": "Unprocessed, naturalistic.",
    "aesthetic": "Influencer lifestyle snapshot, winter vacation."
  },
  "colors_and_tone": {
    "white_balance": "Cool, blue-biased white balance (uncorrected).",
    "palette": [
      "Navy blue",
      "Snow white",
      "Cool beige",
      "Dark wood tone",
      "Atmospheric blue"
    ],
    "saturation": "Moderate, naturally muted by cool light.",
    "contrast": "Medium-low, preserving shadow detail."
  },
  "quality_and_technical_d
```

## Photorealistic Portrait of Sydney Sweeney with a Kitten

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_type": "photorealistic_portrait",
  "subject_details": { 
"identity": {
"name": "{argument name=\"celebrity name\" default=\"Sydney Sweeney\"}",
"reference_fidelity": 1.0
},
    "demographics": "Young woman with light skin tone",
    "hair": "Long, straight, light brown hair with blonde highlights, falling over shoulders",
    "attire": "Black ribbed sleeveless crop top, black pants/shorts (waistband visible)",
    "body_modifications": "Silver belly button piercing (navel ring), small nose piercing",
    "pose": "Sitting on a bed, holding a kitten up to her face, nuzzling/kissing the kitten's side, profile view of the woman's face"
  },
  "animal_details": {
    "species": "Cat",
    "age": "Kitten (very young)",
    "color": "Ginger / Orange Tabby with white chest",
    "eye_color": "Blue",
    "pose": "Held in hands, paws suspended in air, looking slightly upward and away"
  },
  "environment": {
    "setting": "Bedroom",
    "background": "Large, plush, diamond-tufted velvet headboard in champagne/silver color with crystal buttons",
    "foreground": "White bed sheets and bedding"
  },
  "lighting_and_atmosphere": {
    "lighting_style": "Soft indoor lighting, slight studio flash feel",
    "shadows": "Soft shadows, even illumination on face",
    "mood": "Tender, affectionate, cute, cozy"
  },
  "technical_parameters": {
    "aspect_ratio": "3:4",
    "resolution": "8k",
    "focus": "Sharp focus on the kitten and woman's face",
    "texture_quality": "High detail on hair strands, kitten fur, and velvet fabric texture"
  }
}
```

## Conceptual Image: World Without InfoFi Projects on X

> Minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Imagine a world where there are no InfoFi projects on social network X.
```

## Candid Gen Z Street Style Photo with Hidden Cat

> Logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_analysis": {
    "subject": {
      "description": "Young woman with long, straight blonde hair featuring dark roots and a center part. She has a heart-shaped face, high cheekbones, and a sharp jawline. Her makeup is glamorous with heavy winged eyeliner, long voluminous lashes, and full, pouty pink lips.",
      "expression": "Soft, confident smile, looking directly at camera",
      "pose": "Standing on stairs, performing the 'shy' gesture (touching index fingers together)",
      "clothing": {
        "top": "White oversized zip-up hoodie with faux fur trim hood",
        "bottoms": "Black loose lounge pants with small white repeated logo pattern",
        "accessories": "Pink backpack with character face design"
      }
    },
    "background": {
      "setting": "Outdoor concrete staircase",
      "time_of_day": "Night",
      "key_element": "Tabby cat sitting on the stairs behind the subject, yawning with mouth wide open"
    },
    "technical_style": {
      "lighting": "Direct camera flash, hard shadows, high contrast, realistic texture",
      "aesthetic": "Candid, Gen Z street style, funny background detail, viral meme aesthetic"
    }
  }
}
```

## Cinematic Ultra-Realistic Billiards Shot

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Cinematic ultra-realistic close-up of a man taking a billiards shot, captured in a tense, mid-focus moment as he leans low toward the cue ball. His eyes are locked sharply on the aim, expression steady and confident, while his supporting hand rests firmly on the green felt, guiding the cue with precision. He wears a crisp white shirt with rolled sleeves and slightly open buttons, giving a relaxed yet intensely focused vibe. His hair is neatly tied back, and his clear-framed glasses catch warm reflections from overhead lights. The background is softly blurred, filled with atmospheric golden highlights, adding depth, drama, and a competitive mood to the scene.

use face reference exactly
```

## Nano Banana Pro Prompt for X Article Header Image Generation

> Görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Please create a visually appealing header image for a blog post by arranging the reference images well.
However, use each image only once.
Do not duplicate.
Ensure the elements in the reference images do not blend together.
There should be a slight margin above and below the image.
Be creative with the background.
The title may be overlaid on the image.
5:2 4K quality
Title: {argument name="title" default="[Enter article title]"}
```

## Surreal Fine-Art Portrait Emerging from Ancient Map

> Minimal, retro yemek görseli üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a surreal, fine-art portrait where a young woman seamlessly emerges from an ancient parchment map, filling the entire frame edge to edge.
Reference Face (Important):
Use the exact same face from the reference image. Do not alter facial structure, proportions, or identity. Preserve her likeness faithfully.
Subject & Expression:
A young woman with fair, porcelain-like skin and delicate East Asian features. Her expression is calm, introspective, and slightly melancholic. Soft, gentle eyes look straight toward the viewer, creating a quiet, timeless connection. Her lips have a natural reddish tone. Makeup is extremely minimal and traditional—enhancing her eyes subtly without any modern or heavy appearance.
Hair:
Long, deep dark brown hair worn loose in an organic, slightly untamed manner. Strands fall naturally around her face and shoulders, gradually blending and dissolving into the surrounding parchment texture, as if becoming part of the surface itself.
Pose & Hands:
She faces forward in a relaxed, upright posture. Her hands are gently clasped at the solar plexus, fingers softly intertwined, conveying stillness, contemplation, and restrained emotion.
Clothing:
She wears a flowing, Hanfu-inspired robe with a fantasy interpretation. The fabric drapes loosely and naturally, colored in aged parchment hues—ochre, mustard yellow, faded browns. Subtle decorative patterns flow across the garment, resembling topographic contour lines, wind paths, or water currents commonly found on antique maps.
Surreal Map Integration:
Her upper body remains fully formed and realistic, while her lower body gradually transitions into an ancient map texture. The transformation is smooth and organic, as if she is born from the map itself rather than placed on top of it.
Background & Texture (Full Frame):
The entire image is filled with an antique parchment map—no borders, no blank space, no white edges.
Features include:
Heavily distressed parchment with cracks, peeling layers, and rough canvas grain
Faint topographic contour lines and subtle map divisions embedded into the surface
Tiny, illegible handwritten markings resembling ancient scripts or coordinates
Muted green landmasses blended naturally into the parchment
Weathered, irregular edges that dissolve naturally into the frame with no visible outlines
Lighting & Atmosphere:
Warm sepia and earth-tone color palette. Soft, cinematic lighting with gentle shadows and low contrast. The mood feels nostalgic, timeless, and quietly haunting—evoking forgotten history and silent mystery.
Art Style:
Surreal realism, painterly textures, fine-art portraiture, ultra-detailed, cinematic softness, ancient manuscript aesthetic, museum-quality artwork.
Additional Constraint:
No white borders, no empty canvas, no modern elements.
The image must appear as a complete, full-sheet ancient map.
```

## Emoji Aesthetic Prompts (Dark vs. Pastel)

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
⚔️🕸️🏴🗡️                           👛🌷🐥🌸                                               
🖤⛓️💀🐦‍⬛                           🍥🎀🤍🩰                         🧷🔪🕷️🎱                           🫧🍬👚💗                   
💣♟️♠️🗝️                           🌸🩷🍡💝
```

## Flash Photography Portrait of Ana de Armas

> Moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_parameters": {
    "topic": "Portrait Photography",
    "aspect_ratio": "3:4",
    "style_preset": "Flash Photography"
  },
  "subject_details": {
    "identity": {
      "name": "Ana de Armas",
      "type": "Woman"
    },
    "appearance": {
      "hair": {
        "color": "Dark",
        "length": "Long",
        "texture": "Straight"
      },
      "face": {
        "expression": "Soft"
      },
      "body": {
        "build_notes": "Large breasts"
      }
    },
    "pose_and_action": {
      "orientation": "Looking over shoulder",
      "framing": "Full-body",
      "stance": "Standing"
    }
  },
  "fashion_and_attire": {
    "clothing": {
      "item": "Bodycon mini-dress",
      "color": "Beige",
      "fit": "Tight",
      "design_elements": [
        "Backless"
      ]
    },
    "accessories": {
      "jewelry": {
        "item": "Back-drop necklace",
        "material": "Gold",
        "style": "Delicate"
      },
      "carry_items": {
        "item": "Shoulder bag",
        "material": "Leather",
        "color": "Black",
        "size": "Small"
      }
    }
  },
  "scene_composition": {
    "environment": {
      "location_type": "Urban/Studio",
      "background_elements": {
        "object": "Wall",
        "material": "Concrete block",
        "color": "Grey"
      }
    },
    "lighting_setup": {
      "technique": "Flash photography",
      "qualities": [
        "High-quality",
        "Direct"
      ],
      "effects": {
        "skin_interaction": "Soft glow",
        "shadows": "Slight shadow cast against background"
      }
    }
  }
}
```

## High-Angle Cozy Reading Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{

"dominant": "beige, black"
},
"composition": {
"layout": "High-angle shot looking down at a person reclining on a sofa.",
"perspective": "Top-down, intimate.",
"focal_point": "The person's upper body and the open book."
},
"lighting": {
"source": "Warm, soft ambient light, possibly from a nearby lamp.",
"mood": "Cozy, relaxed, intimate."
},
"typography": {
"text_present": "Yes, on the blue book.",
"style": "Small, white sans-serif font."
},
"effects": {
"textures": "Fabric sofa, smooth skin, paper pages, plaid shirt.",
"filters": "Warm color cast, soft focus."
},
"colors": {
"palette": [
"#1a1a1a",
"#b5a895",
"#2d427a",
"#e0e0e0",
"#d9c9b9"
],
"master_prompt": "A high-angle photograph of a woman with long dark hair reclining on a beige fabric sofa, wearing a black tank top and dark pants. She is holding an open book above her face, reading. A plaid shirt is tied around her waist. Another blue book rests on the back of the sofa near a lamp. Warm, soft lighting creates a cozy atmosphere."
}
```

## Bohemian Sydney Sweeney Portrait Prompt (JSON format)

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_details": {
    "subject": {
      "type": "Young woman {argument name="subject name" default="Sydney Sweeney"} ",
      "appearance": {
        "hair": "Long, dark chestnut brown, loose waves, falling over face, messy aesthetic",
        "skin": "Fair complexion, smooth texture, natural finish",
        "face": "Looking downward, face partially obscured by hair, introspective expression",
        "body_type": "Slender, fit"
      },
      "pose": {
        "stance": "Leaning against a stone wall, body slightly angled",
        "hands": "Right hand resting gently on chest/neck with fingers splayed, left hand holding a green object (boot) down by her side",
        "gaze": "Downward, avoiding eye contact"
      }
    },
    "clothing": {
      "dress": {
        "style": "Off-the-shoulder mini dress, cottagecore/boho style",
        "fabric": "Lightweight cotton or linen blend",
        "color": "{argument name="dress color" default="Red/off-Red"} base",
        "pattern": "Small, delicate floral print with purple and yellow wildflowers",
        "details": ["Ruffled tiered skirt", "Puffed short sleeves", "Sweetheart neckline", "Corset-style bodice structure"]
      },
      "accessories": [
        "Thin black choker necklace",
        "Multiple silver rings on fingers",
        "Red beaded bracelet on left wrist",
        "Holding a dark green, crocodile-texture cowboy boot"
      ]
    },
    "environment": {
      "background": "Textured stone masonry wall",
      "details": "Large, irregular grey and beige stone blocks, rough texture, natural architectural backdrop",
      "setting": "Outdoor or semi-outdoor daylight setting"
    },
    "lighting": {
      "type": "Soft natural daylight",
      "quality": "Diffused, even illumination, soft shadows",
      "direction": "Front-lit but soft"
    },
    "styling": {
      "aesthetic": "Bohemian, chic, feminine, soft grunge undertones",
      "mood": "Casual, candid, slightly moody, artistic"
    },
    "camera_details": {
      "shot_type": "Medium shot (thigh-up)",
      "angle": "Eye-level",
      "lens": "85mm prime lens for flattering portrait compression",
      "aperture": "f/2.8 for slight depth of field separation from the wall",
      "focus": "Sharp focus on the subject and dress texture"
    },
    "technical_specifications": {
      "quality": "Ultra Photorealistic, 8k resolution, highly detailed",
      "texture_quality": "High fidelity fabric textures, realistic skin pores, detailed stone masonry",
      "engine": "Unreal Engine 5 render style or high-end photography" Ratio 3.4
    }
  }
```

## Photorealistic Shower Scene in Emerald Bikini

> Fotogerçekçi görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "description": "A woman in her mid-30s with tanned skin and wet, wavy brunette to blonde ombre hair, standing in a shower.",
    "apparel": {
      "top": "Emerald green triangle bikini top, matte fabric, string ties, fitting tightly against the chest.",
      "bottom": "Matching emerald green bikini bottoms, low rise, sitting on hips."
    },
    "anatomical_features": {
      "physique": "Fit and voluptuous hourglass physique with full natural curves, heavy bust volume that is clearly above average, natural gravity affecting breast shape, distinct cleavage line.",
      "skin_details": "Wet skin texture with visible water droplets, light natural makeup look, natural skin tone variation, clavicle visible, soft abdominal definition.",
      "hair": "Wet, slightly messy ombre strands clinging to shoulders and neck, slicked back from forehead but falling loosely."
    }
  },
  "pose": {
    "body_orientation": "Standing facing forward, body angled slightly to the right.",
    "head_position": "Head tilted slightly to the right, chin slightly down but looking up towards the camera.",
    "arms": {
      "right_arm": "Extended downwards by the side, relaxed.",
      "left_arm": "Bent at the elbow, hand raised to chest level, fingers lightly touching the left side of the bikini top/chest area."
    },
    "gaze": "Direct eye contact with the camera, calm and intense."
  },
  "environment": {
    "setting": "Inside a modern shower enclosure.",
    "surfaces": "Large charcoal slate tiles with subtle natural texturing on walls and floor.",
    "fixtures": "Chrome finish shower fixtures including a vertical rail, a handheld showerhead attached to a hose, and a circular mixer handle on the left wall.",
    "elements": "Falling water droplets visible, wet surfaces reflecting light."
  },
  "camera": {
    "perspective": "High angle shot (looking down at the subject), emphasizing the upper body and depth.",
    "shot_type": "Medium-close up, framing from the top of the head to the upper thighs.",
    "focal_length": "35mm equivalent, creating distinct foreground-background separation without architecture or excessive distortion.",
    "depth_of_field": "Deep focus, subject and background tiles are relatively sharp."
  },
  "lighting": {
    "type": "Natural ambient lighting mixed with indoor bathroom light.",
    "quality": "Diffused and soft, creating specular highlights on the wet skin and chrome fixtures.",
    "shadows": "Soft shadows under the chin, breasts, and arms, grounding the subject in the space."
  },
  "mood_and_expression": {
    "expression": "Neutral to slightly sultry, lips relaxed and slightly parted, calm demeanor.",
    "vibe": "Intimate, candid, raw, unposed feel."
  },
  "style_and_realism": {
    "aesthetic": "Photorealistic, snapshot style, high fidelity texture rendering.",
    "rendering": "Unprocessed look, preserving skin texture and realistic water physics."
}
```

## Winter Editorial Low-Angle Squat Pose Prompt (iPhone Style)

> Fotogerçekçi moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "character": "uploaded_photo",
    "face_consistency": "true",
    "body_consistency": "true",
    "gender": "female",
    "age_appearance": "young adult, early 20s",
    "ethnicity": "Northern European",
    "emotion": "cold confidence, composed, stoic, high-fashion detachment",

    "hair": {
      "color": "icy platinum blonde",
      "length": "shoulder-length",
      "style": "loose waves peeking out from under a hat",
      "texture": "soft, slightly tousled by winter air",
      "placement": "framing the face and falling over the shoulders"
    },

    "face": {
      "visibility": "partially visible",
      "profile_visibility": "front-facing",
      "skin_tone": "porcelain, pale",
      "expression": "neutral, relaxed mouth, editorial gaze behind glasses"
    }
  },

  "meta": {
    "aspect_ratio": "1:1",
    "camera": "iPhone 16 Pro Max rear main camera",
    "lens": "24mm f/1.78 smartphone wide lens",
    "focal_character": "sharp focus on subject, natural depth of field",
    "quality": "ultra-realistic, high-resolution photography",
    "style": "outdoor winter editorial, raw smartphone realism, authentic skin texture, sharp details"
  },

  "visibility_rules": {
    "mirror_only": false,
    "no_direct_subject_visibility": false,
    "no_body_parts_outside_mirror": false
  },

  "camera_angle": {
    "vertical_position": "low angle, camera positioned at subject knee height looking slightly up",
    "horizontal_alignment": "centered on subject",
    "tilt": "slight upward tilt to capture the crouched pose",
    "yaw": "camera facing directly at the subject",
    "roll": "0 degrees, perfectly level horizon",
    "distance_to_mirror_meters": 0,
    "handheld_behavior": "stable handheld shot"
  },

  "body_angle": {
    "global_orientation": "front-facing, crouched",
    "torso_rotation_degrees": 0,
    "shoulder_alignment": "square to camera",
    "hip_rotation_degrees": 0,
    "weight_distribution": "evenly distributed in a deep squat",
    "posture": "crouched low to the ground, balanced"
  },

  "head_angle": {
    "rotation_degrees": 0,
    "tilt": "perfectly level",
    "chin_position": "neutral",
    "neck_tension": "relaxed"
  },

  "phone_angle": {
    "phone_model": "none",
    "height_relative_to_face": "n/a",
    "distance_from_face_cm": 0,
    "angle": "n/a",
    "coverage": "none"
  },

  "pose": {
    "legs": {
      "stance": "crouched/squatting",
      "front_leg": "knees bent outward",
      "back_leg": "knees bent outward"
    },
    "hips": {
      "action": "lowered to heels"
    },
    "arms": {
      "right_hand": "hand raised to temple, fingers lightly touching the frame of the sunglasses",
      "left_hand": "arm extended downward, hand reaching toward the snow surface, fingers spread"
    }
  },

  "clothing": {
    "outfit_type": "long-sleeve bodysuit",
    "color": "dark charcoal grey",
    "material": "ribbed cotton or technica"
  }
}
```

## Golden Hour School Uniform 'Rock On' Portrait

> Fotogerçekçi, elle çizilmiş portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_generation_prompts": {
    "natural_language_prompt": "A photorealistic portrait of a young woman with long, wavy platinum blonde hair standing outdoors on a sunny street. She has her eyes closed in a serene expression and is smiling softly while tilting her head. She is making a 'rock on' hand sign (index and pinky finger raised) with her right hand near her face. She is wearing a white short-sleeved school uniform shirt with grey cuffs and a distinctive cluster of three pastel ribbons (pink and lavender) pinned to the chest. She wears a grey pleated skirt and is holding a pink cardigan in her left hand. The background features a concrete wall, green bushes, and a glimpse of a sign with Japanese text, all bathed in warm, golden-hour sunlight with distinct shadows.",
    "tag_based_prompt": "1girl, solo, cosplay, photorealistic, realistic, 8k uhd, dslr, soft lighting, golden hour, long wavy hair, platinum blonde hair, closed eyes, smile, head tilt, hand up, rock on gesture, sign of the horns, white shirt, short sleeves, grey cuffs, school uniform, three bows on chest, pink bow, purple bow, pleated skirt, holding pink cardigan, outdoors, street, concrete wall, foliage, trees, japanese sign, depth of field, blurred background",
    "negative_prompt": "open eyes, blue eyes, angry, sad, low quality, jpeg artifacts, blurry, bad anatomy, bad hands, missing fingers, extra fingers, text, watermark, signature, cartoon, 2d, sketch, illustration, dark, night, rain"
  },
  "parameters": {
    "aspect_ratio": "3:4",
    "model_style": "Photorealistic / Cinematic",
    "lighting": "Natural Sunlight / Golden Hour",
    "camera_angle": "Eye level, medium shot"
  }
}
```

## Controlling Lighting in Image Generation

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Nano banana pro generates beautiful images even when left to its own devices, but if you specify detailed lighting, it generates images that match. You can also specify composition and subject matter, and since it seems to have learned a lot, it has high versatility.
Left: {argument name="lighting specification" default="None"}
Right: {argument name="lighting specification" default="Specified"}
```

## Self-Portrait Mural Painting Prompt

> Portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Don't change my facial features Create a realistic vertical portrait 8K The person in the uploaded photo is painting a large mural on the wall of a Cafe, and the mural features a realistic artistic version of his own face, with the same expression and features, as if painting a reflection of himself. The wall has a natural texture surrounded by decorative White pots with various colors of roses, there are vines and climbing plants. The lighting is soft natural light not too warm.
```

## Photorealistic Sydney Sweeney Portrait Prompt (JSON format)

> Fotogerçekçi, lüks portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_style": {
    "type": "photorealistic",
    "aesthetic": "Instagram shot",
    "effects": [
      "film grain",
      "direct flash"
    ]
  },
  "composition": {
    "framing": "waist-up photograph",
    "aspect_ratio": "9:16"
  },
  "subject": {
    "description": " woman {argument name="subject name" default="Sydney Sweeney"}",
    "constraint_note": "do not alter the sensitivity of the face and features",
    "pose": {
      "orientation": "facing the camera directly",
      "head": "tilted slightly to the side",
      "eyes": "closed",
      "action": "covering her face with her hand, pulling her elbow away and lifting it to the side",
      "mood": [
        "elegant",
        "pensive",
        "playful"
      ]
    },
    "appearance": {
      "attire": [
        "black velvet corset",
        "expensive black cape"
      ],
      "hair": "loose",
      "makeup": {
        "style": "nude",
        "lipstick": "matte nude"
      },
      "details": [
        "décolletage highlighted",
        "long, square black nails"
      ]
    }
  },
  "setting": {
    "background": "white wall",
    "foreground_elements": "art object placed in front of the wall"
}
 }
```

## Meme: Shoveling Snow with/without Coffee

> Görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
(Meme:
Top: How I feel tackling my tasks...
Left: Without coffee
Right: With coffee
Action Left: {argument name="character name" default="nordicjos3"} shoveling his driveway with a tiny shoveling.
Action Right: nordicjos3 clearing his driveway of snow with a flamethrower.) Note: nordicjos3 is a character I trained in Freepik
```

## Paparazzi Flash Portrait of Ana de Armas in a Car

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
use the exact facial features from the uploaded reference photo, do not alter face shape, eyes,

nose, lips, skin tone or proportions in any way, 0% face modification, identity lock, strict face

preservation hyper-realistic photography, looks like a real paparazzi fashion photo, natural skin

texture with visible pores, fine lines and subtle imperfections, realistic skin sheen, no plastic skin,

high-resolution fashion photograph, sharp focus, ultra-detailed direct

on-camera flash, paparazzi

flash photography, hard frontal flash, harsh shadows, strong highlights, high contrast lighting, flash

overpowering ambient light, slight overexposure on skin highlights, realistic flash falloff shot on fullframe DSLR, 35mm lens, slightly wide perspective, shallow depth of field, handheld camera feeling, candid framing nighttime interior car setting, luxury car back seat, black leather seats,

dark surroundings outside the windows, cinematic night mood, editorial paparazzi aesthetic model

wearing a tailored black pinstripe suit, oversized blazer with structured shoulders, white crisp shirt,

black slim tie, black tailored trousers, silver jewelry: small hoop earrings, subtle bracelet, watch,

makeup: glossy lips, defined eyes, soft contour, natural glow, hair styled in a messy elegant updo

with loose strands framing the face, close-up portrait, candid moment, model laughing softly, eyes

half-closed, head tilted back slightly, natural spontaneous emotion, not posed, direct flash freezing

motion, hair strands caught mid-movement, editorial paparazzi feel
```

## Cricketer Composite Portrait and Stats Graphic

> Logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A dynamic composite portrait of Indian cricketer {argument name="cricketer name" default="you neme"} in his Royal Challengers Bangalore jersey, set against a bold red background with a stylized golden lion emblem. The composition features a large, close-up portrait of Iyer in the foreground, looking directly at the viewer with a serious expression, short dark hair, and a trimmed beard. Behind him, a smaller, action-oriented image shows him mid-celebration, mouth open in triumph, wearing the same red jersey with "DREAM11" and "KINGS" logos. A third, smaller inset depicts him batting in full gear, mid-swing. He wears a red long-sleeved jersey with gold accents, blue pants, and cricket pads. The lighting is dramatic and studio-like, highlighting his features and the vibrant red of his uniform. The background is a deep red with a glowing golden lion logo, evoking team identity. Text elements on the left display his IPL 2025 stats: {argument name="innings" default="13"} innings, {argument name="runs" default="604"} runs, 50.33 average, 175.07 strike rate, and 6 fifties. The overall style is a high-impact sports graphic, combining realistic photography with bold typography and graphic design elements.
```

## Reflected Relic: Surreal Artisan Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "vibe_title_en": "Reflected Relic",
  "master_prompt": "A hyper-realistic cinematic shot of The Artisan, captured exclusively through the reflection of a jagged, antique mirror shard resting on a cluttered workbench. The setting is a dense, chaotic Relic Restoration Atelier, overflowing with stacks of ancient texts, jars of pigment, plaster limbs, and peeling gold leaf, creating a texture-heavy, busy atmosphere. The composition utilizes a shallow depth of field (f/1.4), rendering the actual subject in the background as a soft, restless blur with messy hair and rolled-up sleeves, intensely focused on a task. The sharp reflection in the mirror reveals a surreal transformation: the subject's face appears as a 'living relic,' with skin texture resembling cracked porcelain held together by kintsugi gold repairs, and makeup that looks like weathered paint. The lighting is ceremonial and dramatic, striking the mirror shard like an altar illumination while leaving the surrounding clutter in deep, warm shadows. Shot on Hasselblad H6D-100c with an 80mm lens, utilizing Fujifilm Pro 400H film stock for pastel shifts and organic grain. No neon, no digital gloss.",
  "meta": {
    "intent": "Visualizing the internal state of a creator merging with their creation.",
    "priorities": "Texture, Depth of Field, Surreal Reflection, Atmospheric Clutter.",
    "device_profile": "High-End Medium Format Photography"
  },
  "frame": {
    "aspect": "4:5",
    "composition": "Frame within a frame; focus locked on a reflective surface in the foreground.",
    "layout": "Foreground dominated by the mirror shard and workbench clutter; background is a blurred silhouette.",
    "camera_angle": "High-angle looking down at the workbench surface.",
    "tilt_roll_degrees": "0"
  },
  "subject": {
    "gender": "Female",
    "identity": "The Artisan / The Restless Creator",
    "demographics": "Universal, age-neutral adult.",
    "face": "Seen clearly only in reflection; Surreal texture, cracked porcelain effect, kintsugi gold lines.",
    "hair": "Slightly messy, loose waves, vibrant {argument name="hair color" default="red"} tones (matching input reference) but soft in the blur.",
    "body": "Blurred in background, posture suggests intense focus, leaning forward.",
    "expression": "Stoic, graceful, inherited nobility (in reflection); Intense concentration (in blur).",
    "pose": "Hands busy working on the mirror/artifact, body hunched in creative labor."
  },
  "wardrobe_accessories": {
    "garments": [
      {
        "item": "Ceremonial Robe",
        "material": "Heavy Silk and Rough Linen mix",
        "color": "Faded Ivory and Deep Ochre",
        "fit": "Flowing yet constraining, layered"
      }
    ],
    "accessories": [
      {
        "item": "Antique Rings",
        "color": "Tarnished Silver",
        "material": "Metal",
        "brand_style": "Historical/Relic"
      }
    ]
  },
  "environment": {
    "setting": "Relic Restoration Ate
```

## 4-Panel High-Fashion Saree Collage

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A 2x2 collage of four distinct, high-fashion glamour photographs featuring the subject in the images in her signature vibrant {argument name="saree color" default="yellow"} satin saree. The aesthetic is ultra-realistic, shot on a Sony A7R V with an 85mm f/1.2 lens to create a creamy, blurred urban background behind the balcony railing.
• Top Left Frame: A mid-shot of her sitting in the dark green velvet armchair. She has both arms raised high, hands gracefully tucked behind her head to accentuate her toned armpits and smooth skin texture. The saree is draped low on her waist, highlighting her navel and midriff. Her expression is sultry with heavy-lidded eyes and a slight pout.
• Top Right Frame: A close-up, dynamic angle from a slightly lower perspective. She is leaning back, her back arched against the chair's cushion. The high-shine fabric of the yellow blouse and saree catch the warm, golden-hour sunlight, creating sharp highlights and deep shadows that define her curves.
• Bottom Left Frame: A full-body shot where she is reclining further, one leg slightly elevated to show the flow of the silk fabric. The pallu of the saree is draped loosely, revealing her waistline and navel. The lighting is cinematic rim lighting, separating her silhouette from the dark balcony.
• Bottom Right Frame: A candid-style glamour shot. She is looking directly into the lens with an intense, provocative gaze. Her hair is wind-swept, and the skin rendering is hyper-detailed, showing realistic pores, subtle sweat, and a dewy makeup finish.
The lighting across all four frames is consistent: a powerful key light from the side mimicking sunset, soft fill lighting to maintain detail in the shadows, and high-contrast color grading that makes the yellow saree pop against the moody, dark green and grey tones of the environment. The overall atmosphere is intimate, sensual, and sophisticated.
```

## Ultra-Photorealistic Candid Film Still of Night Camping and Stargazing

> Fotogerçekçi, sinematik manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photoreal_candid_romance_night_camping",
      "version": "v1.0_NIGHT_CAMP_TELESCOPE_STARGAZING_EN",
      "priority": "highest"
    },

    "output_settings": {
      "aspect_ratio": "4:5",
      "orientation": "portrait",
      "resolution_target": "ultra_high_res",
      "render_style": "ultra_photoreal_candid_film_still",
      "sharpness": "crisp_but_natural",
      "film_grain": "subtle_35mm",
      "color_grade": "restrained_night_realism",
      "dynamic_range": "natural_not_hdr",
      "skin_rendering": "real_texture_no_retouch"
    },

    "global_rules": {
      "camera_language": "35mm lens equivalent, eye-level, handheld documentary feel, imperfect framing, focus on faces/eyes when visible",
      "lighting_language": "motivated night light only (campfire + warm lantern + moonlight/sky glow), no flash, deep but detailed shadows",
      "authenticity_markers": "subtle halation on fire/lantern highlights, realistic low-light noise, tiny film gate weave, no HDR, no AI glow"
    },

    "creative_prompt": {
      "scene_summary": "Night camping near {argument name="location" default="Istanbul outskirts / forest clearing"}. A young couple in their early 20s sets up a small camp and looks at the sky through a travel-style Celestron telescope. A quiet, intimate, documentary film-still moment—warm human light against cold night sky.",

      "subjects": {
        "count": 2,
        "description": "the same young man and woman (early 20s), ordinary and real, not model-like",
        "expression": "soft excitement and calm focus, micro-expressions only",
        "skin_and_face": "natural skin texture, no beauty retouch, no plastic skin"
      },

      "wardrobe_and_props": {
        "clothing": "simple warm outdoor layers (hoodie, jacket, beanie optional), neutral tones, slightly wrinkled fabric, no logos",
        "camp_setup": "small tent nearby, sleeping bags partially visible, a warm lantern on the ground, a small campfire with controlled flames",
        "telescope": "compact travel Celestron-style telescope on a small tripod (recognizable silhouette), positioned realistically, no readable brand text"
      },

      "micro_action": "one person looks through the telescope eyepiece while the other points at a star cluster; their shoulders touch; breath faintly visible in cold air; they exchange a small smile",

      "environment_details": {
        "location": "forest clearing / hilltop near Istanbul, away from strong city lights",
        "sky": "clear night sky with visible stars (realistic density), faint Milky Way hint if plausible, no exaggerated sci-fi nebulae",
        "ground_details": "dirt and leaves, small rocks, realistic camp clutter (mug, backpack) minimal and believable"
      },

      "lighting": "warm orange from campfire and lantern on faces, cool moonlight/sky fill on edges, deep but detailed shadows, subtle halati
```

## Golden Hour Bedroom Mirror Selfie

> Minimal mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"scene": "Bedroom interior selfie, golden hour lighting, intimate and casual atmosphere",
"subject": {
"character": "Young woman",
"face": {
"structure": "Soft contours, high cheekbones, visible dimples",
"skin": "Tan, glowing warm tone",
"eyes": {
"shape": "Almond, looking down",
"expression": "Happy, shy smile"
},
"mouth": {
"lips": "Natural pink, wide smile showing teeth"
},
"makeup": "Natural, glowing skin, subtle mascara"
},
"hair": {
"color": "Dark brown / Black",
"length": "Shoulder length (lob)",
"texture": "Straight with slight curve",
"style": "Loose with full bangs covering forehead",
"shine": "High sheen from sunlight"
},
"accessories": {
"necklace": "Thin delicate chain",
"earrings": "Gold hoop earrings",
"anklet": "Thin gold chain on left ankle"
}
},
"pose": {
"overall": "Seated on floor, compacted crouch/squat position",
"position": {
"base": "Sitting on floor",
"orientation": "Facing forward/slightly angled to mirror"
},
"torso": {
"direction": "Leaning slightly forward",
"posture": "Relaxed but curled"
},
"arms": {
"position": "Right arm extended taking the photo, left arm tucked between legs/knees",
"hands": "Relaxed"
},
"legs": {
"position": "Knees pulled up to chest, feet flat on floor",
"visible": "Legs fully visible from thighs down",
"feet": "Bare feet, toes visible with dark {argument name="nail polish color" default="red"} nail polish"
},
"head": {
"turn": "Tilted slightly down and to the side",
"expression": "Joyful, candid"
}
},
"outfit": {
"bodysuit": {
"type": "Black bodysuit or lingerie",
"color": "{argument name="bodysuit color" default="Black"}",
"style": "Minimalist, snug fit",
"details": {
"cut": "High leg cut"
}
}
},
"body": {
"type": "Slim, fit",
"skin": "Smooth, warm undertone",
"legs": "Smooth, sunlit"
},
"environment": {
"location": "Bedroom",
"flooring": {
"material": "Light wood laminate",
"style": "Plank pattern"
},
"furniture": {
"bed": "White bedding, white bed frame visible in background"
},
"decor": {
"rug": "White fluffy faux fur rug on the left"
}
},
"lighting": {
"type": "Natural sunlight (Golden Hour)",
"quality": {
"intensity": "Strong, warm, directional",
"direction": "Side lighting from window"
},
"on_subject": {
"skin": "Strong warm highlights on knees, feet, and face side",
"hair": "Backlit glow on hair strands"
}
},
"photography": {
"angle": "High angle (looking down)",
"framing": "Vertical selfie, cropped at shoulder on left",
"focus": "Sharp focus on subject",
"style": "Mirror selfie, casual, aesthetic"
},
"color_palette": {
"subject": {
"hair": "Black",
"skin": "Warm tan/bronze",
"outfit": "Black",
"nails": "Dark red/Burgundy"
},
"environment": {
"floor": "Beige/Light Oak",
"bedding": "White",
"rug": "Off-white"
}
},
"vibe": {
"energy": "Warm, sunny, happy",
"mood": "Relaxed, playful, cozy",
"aesthetic": "Clean girl, golden hour, minimalistic"
},
"critical_requirements": {
"HAIR": "Shoulder-length dark hair with bangs",
"POSE": "Sitting on floor, knees pulled to chest",
"FACE": "Smiling, looking down, dimples",
"OUTFIT": "Bl
```

## 2x2 Grid Storytelling with Extreme Angles and Doodle Elements

> Elle çizilmiş portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a 2x2 grid image. In each frame include a medium shot, closeup shot, high angle looking down and extreme low angle view looking up from the sneakers. Utilize a fish eye lens perspective in each frame as well as an aesthetic pose with foreshortening. The character is wearing a dark red bomber jacket, blue jeans and white nike high top sneakers and posing with a different wacky facial expression in each frame. Include white doodle hand drawn elements around them in each frame. Studio photography against a dark blue background. Ensure the background encompasses the entire background, no circular framing.
```

## Extreme Closeup of Sophie Turner as Lara Croft

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Extreme closeup portrait of {argument name="subject" default="Sophie Turner"} as {argument name="character" default="Lara Croft"}, framed in a 9:16 vertical aspect ratio, focusing intensely on her face, jawline, and neck. She is captured in a moment of pause, one hand raised to her face as she delicately holds the frame of her signature round, red-tinted sunglasses. Her skin is rendered with hyper-realistic detail, featuring visible pores and a fine sheen of perspiration; large, glistening beads of sweat trickle down her forehead and the length of her neck. Smudges of dark, gritty mud and dried dirt are artfully smeared across her cheekbones and collarbone.
The lighting is high-contrast and cinematic, with a sharp key light hitting the side of her face to emphasize the moisture on her skin and the sharp contours of her facial structure, while a subtle rim light separates her from the dark, atmospheric background. Her eyes are sharp and focused, looking directly past the lens with a fierce, weathered expression. The textures are visceral: the polished metal and red glass of the spectacles, the damp strands of her dark hair pulled back, and the rugged, ribbed fabric of her teal tank top visible at the bottom of the frame alongside the distressed brown leather of her tactical shoulder harness. Shot with an 85mm macro lens, f/2.8, creating a shallow depth of field that keeps the focus razor-sharp on her facial features and the grit of the dirt while softly blurring the background.
```

## Bohemian Ana de Armas with Cowboy Boot

> Fotogerçekçi görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_details": {
    "subject": {
      "type": "Young woman {argument name="subject name" default="Ana de Armas"} ",
      "appearance": {
        "hair": "Long, dark chestnut brown, loose waves, falling over face, messy aesthetic",
        "skin": "Fair complexion, smooth texture, natural finish",
        "face": "Looking downward, face partially obscured by hair, introspective expression",
        "body_type": "Slender, fit"
      },
      "pose": {
        "stance": "Leaning against a stone wall, body slightly angled",
        "hands": "Right hand resting gently on chest/neck with fingers splayed, left hand holding a green object (boot) down by her side",
        "gaze": "Downward, avoiding eye contact"
      }
    },
    "clothing": {
      "dress": {
        "style": "Off-the-shoulder mini dress, cottagecore/boho style",
        "fabric": "Lightweight cotton or linen blend",
        "color": "Red/off-Red base",
        "pattern": "Small, delicate floral print with purple and yellow wildflowers",
        "details": ["Ruffled tiered skirt", "Puffed short sleeves", "Sweetheart neckline", "Corset-style bodice structure"]
      },
      "accessories": [
        "Thin black choker necklace",
        "Multiple silver rings on fingers",
        "Red beaded bracelet on left wrist",
        "Holding a dark green, crocodile-texture cowboy boot"
      ]
    },
    "environment": {
      "background": "Textured stone masonry wall",
      "details": "Large, irregular grey and beige stone blocks, rough texture, natural architectural backdrop",
      "setting": "Outdoor or semi-outdoor daylight setting"
    },
    "lighting": {
      "type": "Soft natural daylight",
      "quality": "Diffused, even illumination, soft shadows",
      "direction": "Front-lit but soft"
    },
    "styling": {
      "aesthetic": "Bohemian, chic, feminine, soft grunge undertones",
      "mood": "Casual, candid, slightly moody, artistic"
    },
    "camera_details": {
      "shot_type": "Medium shot (thigh-up)",
      "angle": "Eye-level",
      "lens": "85mm prime lens for flattering portrait compression",
      "aperture": "f/2.8 for slight depth of field separation from the wall",
      "focus": "Sharp focus on the subject and dress texture"
    },
    "technical_specifications": {
      "quality": "Ultra Photorealistic, 8k resolution, highly detailed",
      "texture_quality": "High fidelity fabric textures, realistic skin pores, detailed stone masonry",
      "engine": "Unreal Engine 5 render style or high-end photography" Ratio 3.4
    }
  }
```

## Tropical Beach Vacation Photo Collage

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
"type": "2x2 Photo Collage (4-Panel Grid).",
      "theme": "Tropical Beach Vacation Photoshoot.",
      "layout": "Four different shots of the same subject on a white sand beach.",
      "consistency": "Same subject, outfit, and location across all panels."
    },
    "subject_details": {
      "demographics": "Young Asian woman, fair skin tone.",
      "hair": "Long black hair styled in two loose braids (pigtails).",
      "outfit": {
        "swimwear": "{argument name="swimsuit color" default="Black"} one-piece swimsuit (monokini) with a center cutout and plunging neckline.",
        "bottoms": "White micro-mini skirt or sarong wrapped around the waist.",
        "accessories": "Wide-brimmed straw sun hat, long pearl necklace chain attached to the hat or glasses, gold bracelet cuff, large yellow flower tucked behind the ear."
      }
    },
    "environment": {
      "location": "Sunny tropical beach.",
      "elements": "White sand, turquoise blue ocean water, distant green islands/hills, blue sky with white clouds.",
      "props": "Red and white striped tote bag/beach towel."
    },
    "panel_breakdown_poses": {
      "panel_1_top_left": {
        "framing": "Low Angle, Full Body.",
        "pose": "Standing, leaning back slightly, looking up towards the sun. Holding the striped bag.",
        "background": "Palm tree fronds visible at the top, blue sky."
      },
      "panel_2_top_right": {
        "framing": "High Angle / Top Down.",
        "pose": "Lying on back on the sand, legs extended (one knee bent up), head turned to the side facing the camera. Red striped towel underneath.",
        "background": "Sand texture and a red boat on the water edge."
      },
      "panel_3_bottom_left": {
        "framing": "Selfie Angle / Close-up.",
        "pose": "Subject holding the camera (arm extended), looking directly into the lens. Head tilted, showcasing the hat and flower.",
        "background": "Blue sky dominant."
      },
      "panel_4_bottom_right": {
        "framing": "Medium Shot, Seated.",
        "pose": "Sitting on the sand, adjusting the straps of the swimsuit or necklace. Looking down or to the side candidly.",
        "background": "Ocean horizon line and distant mountains."
      }
    },
    "camera_technical_values": {
      "lens": "Wide Angle (16mm - 24mm) for the selfie and low angle shots to accentuate height and background scenery.",
      "aperture": "f/8.0 (Deep depth of field, keeping the bright sunny background sharp).",
      "shutter_speed": "1/500s (Bright daylight).",
      "iso": "ISO 100.",
      "lighting": "Hard Natural Sunlight. High contrast, distinct shadows, vibrant colors."
    }
```

## Photorealistic Human and Felt Fox Hybrid

> Fotogerçekçi, sinematik 3B sahne üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
 "A photorealistic human man/woman walking forward mid-step, full body visible, realistic skin texture, natural facial proportions, subtle smile, short well-groomed hair, trimmed beard, wearing modern casual clothing: dark jacket, grey t-shirt, dark trousers, brown shoes. He/she is walking alongside a small handcrafted felt fox character. The fox remains fully animated and woolen, with soft felt texture, stitched details, button-like black eyes, fluffy tail, and warm orange-and-white fur. Scene is a whimsical outdoor environment with grassy ground and miniature-scale depth. Background features softly blurred toy-like rockets and pastel clouds, creating a contrast between real human realism and stop-motion animated animal. Macro photography look, shallow depth of field, soft natural daylight, cinematic composition, ultra-detailed textures, cozy yet surreal mood, high quality, vertical framing.",
  
  "style": "photorealistic human + stop-motion felt animation hybrid",
  "camera": "macro lens, shallow depth of field, eye-level tracking shot",
  "lighting": "soft natural daylight, evenly diffused",
  "quality": "ultra-high detail, realistic skin, visible fabric fibers",
  "aspect_ratio": "9:16",
  "negative_prompt": "cartoon human, doll human, plastic skin, exaggerated facial features, low detail, blurry subject, extra limbs, distorted anatomy"
}
```

## South Asian Woman Portrait with Saree and Sheer Curtains

> Fotogerçekçi mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
close-up portrait of a young South Asian woman with a gentle, contemplative expression, viewed through sheer white curtains. She has dark, neatly styled hair pulled back, with a small {argument name="bindi color" default="red"} bindi on her forehead. Her features are soft and symmetrical, with defined dark eyebrows, long eyelashes, and subtle makeup highlighting her eyes and lips. She wears a traditional {argument name="saree color" default="blue"} saree with a rich red and gold patterned border, draped over a white blouse. A delicate black beaded necklace and small earrings complete her look. Her pose is slightly angled, gazing directly at the viewer with a serene smile. The lighting is soft and natural, coming from a window, creating a warm glow on her face and highlighting the translucency of the sheer fabric. The background is softly blurred, showing hints of warm interior tones and natural light, suggesting a peaceful indoor setting. The image is captured with a shallow depth of field, emphasizing the subject's face and the intricate details of her saree, rendered in a realistic, high-resolution photographic style with a focus on natural beauty and cultural elegance.
```

## Candid Beach Kiss Framed by Sand Heart

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photoreal_candid_romance_phone_photo",
      "version": "v1.0_HEART_SAND_FRAME_BEACH_KISS",
      "priority": "highest"
    },

    "output_settings": {
      "aspect_ratio": "3:4",
      "orientation": "portrait",
      "resolution_target": "ultra_high_res",
      "render_style": "photoreal_candid_phone_photo",
      "sharpness": "crisp_but_natural",
      "dynamic_range": "natural_not_hdr",
      "film_grain": "subtle",
      "color_grade": "true_to_life_warm"
    },

    "creative_prompt": {
      "scene_summary": "A vertical smartphone photo shot through a heart-shaped hole carved in beach sand, framing a young couple very close to the camera. The woman kisses the man on the cheek while he smiles softly with eyes closed. Bright blue sky fills the background. The moment feels spontaneous, intimate, and real.",
      "composition": {
        "foreground_frame": "large heart-shaped sand cutout forming a natural vignette around the couple",
        "perspective": "camera placed inside/behind the sand heart, looking outward",
        "crop": "tight close-up, faces centered inside the heart",
        "depth_of_field": "sand edges slightly soft, faces sharp"
      },
      "subjects": {
        "male": {
          "age_group": "young_adult",
          "pose": "face turned slightly toward camera, eyes closed, gentle smile",
          "wardrobe": "beach casual, bare shoulders or simple swimwear look",
          "skin_rendering": "natural texture, no retouch"
        },
        "female": {
          "age_group": "young_adult",
          "pose": "leaning in, kissing his cheek",
          "hair": "dark hair blown by wind, natural flyaways",
          "wardrobe": "light summer/beach top or swimwear straps visible",
          "skin_rendering": "natural texture, minimal makeup"
        }
      },
      "environment": {
        "location": "beach sand",
        "background": "clear blue sky, no buildings, no clutter",
        "lighting": "bright natural daylight, soft shadows, no flash"
      },
      "camera_style": {
        "device_feel": "phone camera realism",
        "lens_feel": "slight wide-angle perspective, natural distortion",
        "mood": "playful, tender, summery"
      },
      "negative_prompt": "text overlay, captions, watermarks, logos, HDR, artificial shine, heavy retouching, plastic skin, exaggerated bokeh, distorted faces, extra fingers, deformed hands, incorrect sand texture, unrealistic sky gradients"
    }
  }
}
```

## Master Model Maker Concept Template

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Do this for {argument name="structure name" default="Eiffel Tower"}: 

Input Variable: [INSERT STRUCTURE] 
System Instruction:
Act as a Cinematic Director. Create a hyper-realistic portrait of a Master Model Maker putting the final touches on a scale replica of the Input Structure.
1. Logic:
Analyze the Input Structure to determine the Setting and the Character:
IF Ancient/Fantasy (e.g., Colosseum, Castle):
Room: A dusty, sunlit Renaissance Workshop (Stone & Wood). also showcasing "Previous Projects" (other models in the same genre).
Character: An elderly Artisan in a leather apron.
Materials: Plaster, Clay, Balsam Wood.
IF Sci-Fi/Industrial (e.g., Death Star, spaceship):
Room: A sterile, cold Industrial Design Lab (Concrete & Metal). also showcasing "Previous Projects" (other models in the same genre).
Character: A younger Prop Master in a workshop jumpsuit or lab coat.
Materials: Grey Resin (Kitbash), Styrene, Fiber Optics.
IF Modern Architecture (e.g., Skyscraper):
Room: A clean, white Architectural Firm (Glass & White Walls). also showcasing "Previous Projects" (other models in the same genre).
Character: A minimalist Architect in a black turtleneck.
Materials: White Foamcore, Acrylic, 3D Printed Plastic.
2. The Composition :
The Subject: The Character is leaning over a massive, incredibly detailed Scale Model of the Input Structure.
The Action: They are using Tweezers or a fine brush to place a specific "Micro-Detail" relevant to the lore.
Death Star: Placing a tiny Turbo-Laser Turret.
Colosseum: Dusting sand onto the arena floor.
City: Gluing a tiny streetlamp.
The Scale: Extreme scale contrast. The human hands look giant next to the tiny windows/bricks of the model.
3. The Environment  :
The Blueprint: On the table, beneath the tools, lies the correct reference document:
Sci-Fi: Blue grid schematic or iPad.
Fantasy: Yellowed parchment map.
Modern: White vector floorplan.
The Clutter: The tools scattered around must match the medium (e.g., Clay tools vs. Soldering Iron vs. X-Acto knives).
4. Lighting & Atmosphere:
Lighting Match: The lighting must match the inferred room.
Workshop: Warm God Rays (Dusty).
Lab: Cool Fluorescent Tubes (Clean/Hazy).
Focus: Shallow depth of field. Sharp focus on the tweezers and the contact point.
Output: ONE image, 16:9 Aspect Ratio, Cinematic Photography, 8k Resolution.
```

## Candid, Imperfect Nighttime Smartphone Photo in Tokyo

> Fotogerçekçi mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic candid smartphone photograph, 9:16 vertical.
Use the attached image only as a strong visual inspiration for general facial proportions and vibe,
while ensuring the generated subject remains fully original, non-identifiable, and not a face copy.
Scene
Nighttime on a quiet Tokyo city sidewalk beside a building with white ceramic tile walls.
The subject is walking past the camera, partially side-on, captured mid-step in a rushed, accidental moment.
Poses & Gestures (combined naturally)
The subject reacts instinctively to being photographed:
turning her head back mid-walk as if surprised,
raising one hand close to the lens to partially block the camera,
shy, restrained smile forming as she suppresses laughter,
body angled in half-profile while continuing to walk forward,
motion carries her slightly out of frame, imperfect framing.
Expressions are subtle and spontaneous — embarrassed, playful, fleeting — never posed.
Camera & Motion
Shot on a modern smartphone, handheld, rushed capture. Strong uncontrolled camera shake. Heavy directional motion blur across the raised hand, hair, and face. Facial features appear smeared and streaked by movement, faintly recognizable but distorted. Partial ghosting around the body. Imperfect framing, subject nearly leaving the frame.
Lighting
Flash-only lighting fired mid-motion. Harsh flash highlights on skin and hand. Deep surrounding darkness. Uneven exposure, blown highlights, hard shadows typical of hurried night phone photography.
Background
White ceramic tile wall stretches into streaked light bands due to motion blur. Street surroundings fade into darkness with minimal readable detail.
Mood
Candid, shy, slightly playful. Feels intrusive, raw, imperfect, and authentic — like a fleeting memory accidentally captured and never meant to be perfect.
Image Quality
Extremely noisy. Heavily blurred. Raw smartphone look. Not cinematic. Not editorial. Not polished.
Negative Prompt
anime, illustration, painting, stylized,
studio lighting, beauty lighting, soft portrait,
sharp focus, clean face, perfect anatomy, smooth skin,
fashion editorial, posed portrait, cinematic grading, film still,
tripod shot, professional photography,
identity match, face copy, real person replication
```

## Cinematic Royal Portrait of Billie Eilish in Powder-Blue Gown

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_metadata": {
    "title": "Cinematic Royal Portrait: Ana de Armas",
    "version": "2.0",
    "generation_type": "Photorealistic Cinematic",
    "aspect_ratio": "3:4",
    "quality_preset": "Ultra-High-Resolution / 8K / RAW",
    "aesthetic_style": "Fairytale Royal / Ethereal Elegance"
  },
  "subject": {
    "identity": {
      "name": "{argument name="subject name" default="Billie Eilish"}",
      "likeness_fidelity": "100% accurate facial features",
      "ethnicity_match": "Authentic skin tone and bone structure"
    },
    "physical_features": {
      "eyes": {
        "color": "Deep brown",
        "details": "Luminous catch-lights, sharp focus on iris texture"
      },
      "complexion": {
        "texture": "Visible skin pores, natural imperfections, luminous warm glow",
        "finish": "Soft-focus dewiness"
      },
      "hair": {
        "style": "Intricate blonde updo",
        "texture": "Soft, loose ringlet curls framing the face",
        "detail": "Fine individual strands visible, silk-like sheen"
      },
      "makeup": {
        "style": "Natural / Minimalist",
        "details": "Soft peach blush, nude glossy lips, light mascara"
      }
    },
    "pose": {
      "composition": "Close-up portrait",
      "stance": "Graceful and poised, slight tilt of the head",
      "expression": "Serene, regal, and enigmatic"
    }
  },
  "wardrobe": {
    "garment": "Grand {argument name="gown color" default="Powder-Blue"} Ball Gown",
    "bodice_details": {
      "type": "Structured corset",
      "neckline": "Off-shoulder ruffled sleeves",
      "embellishments": "Hand-stitched 3D floral appliqués"
    },
    "skirt_details": {
      "material": "Layered silk tulle",
      "volume": "Voluminous and airy",
      "translucency": "Subtle light-filtering through fabric layers"
    }
  },
  "environment": {
    "location": "Grand Palace Interior",
    "architecture": {
      "primary_element": "Wide marble staircase",
      "material": "Polished white Calacatta marble with gold veining",
      "backdrop": "Ornate balustrades, distant vaulted ceilings"
    },
    "atmosphere": {
      "vibe": "Dreamy, luxurious, and timeless",
      "depth": "Extreme shallow depth of field (bokeh background)"
    }
  },
  "lighting_and_color": {
    "lighting_scheme": {
      "primary_source": "Cinematic soft-box simulation",
      "secondary_source": "Warm ambient glow from palace chandeliers",
      "effects": "Subtle bloom, ethereal light rays, volumetric golden hour glow"
    },
    "color_palette": {
      "dominants": ["Powder blue", "Creamy white", "Soft gold"],
      "accents": ["Warm skin tones", "Deep amber highlights"]
    }
  },
  "technical_rendering": {
    "camera_settings": {
      "lens": "85mm prime lens simulation",
      "aperture": "f/1.2 for creamy bokeh",
      "sensor": "Full-frame digital cinema camera"
    },
    "image_fidelity": {
      "texture_mapping": "High-fidelity fabric weave and marble grain",
      "post_processing"
```

## Winter Noir Cinematic Portrait of Man in Snowy Street

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra realistic cinematic portrait of a young man with sharp masculine features and light stubble, snow dusted hair slightly longer and pushed back, calm but intense eyes looking slightly away from the camera, wearing a charcoal hooded winter jacket layered over a black turtleneck, standing in a deserted snowy street at night, heavy snowfall swirling around him, snowflakes catching light mid air, cold breath visible, dim ambient street lighting with a single overhead lamp casting soft shadows, background filled with snow covered buildings and faint fog, low key lighting with cool blue tones, subtle rim light separating the subject from the background, medium close up framing, 50mm lens look, shallow depth of field, cinematic contrast, realistic skin texture, film grain, moody atmosphere, loneliness, quiet strength, winter noir aesthetic, professional photography realism.
```

## Cinematic Roadside Realism at a Gas Station

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  
    "genre": "cinematic roadside realism",
    "mood": ["melancholic", "quiet", "nostalgic", "late-night solitude"],
    "theme": "a fleeting moment of reflection at a gas station, caught between movement and pause"
  },
  "subject": {
    "description": "young woman standing alone at a roadside gas station",
    "face": {
      "expression": "thoughtful, distant gaze, slightly guarded",
      "skin": "natural texture, visible pores, soft imperfections, no retouching",
      "emotion": "subtle introspection, calm with underlying tension"
    },
    "hair": {
      "style": "loose, shoulder-length hair",
      "motion": "slightly wind-blown strands crossing the face",
      "detail": "natural texture, not styled or glossy"
    },
    "pose": {
      "body_language": "relaxed but inward, weight slightly shifted",
      "hands": "one hand holding a takeaway {argument name="drink type" default="coffee"} cup, other adjusting hair",
      "gesture": "casual, unposed, caught mid-moment"
    }
  },
  "wardrobe": {
    "outerwear": "long dark trench coat, structured but worn-in",
    "accessories": "simple scarf wrapped close to the neck",
    "styling_notes": "timeless, understated, no visible logos or fashion trends"
  },
  "environment": {
    "location": "{argument name="gas station brand" default="Texaco"} gas station at dusk",
    "weather": "cold evening with light mist in the air",
    "ground": "wet asphalt reflecting streetlights and neon signage",
    "background_elements": [
      "vintage cars parked nearby",
      "soft silhouettes of distant people",
      "gas pumps glowing under canopy lights"
    ],
    "atmosphere": "quiet roadside stop, faint urban noise, cinematic stillness"
  },
  "cinematography": {
    "shot_type": "medium-full portrait",
    "framing": "subject slightly off-center for narrative tension",
    "camera_angle": "eye-level",
    "lens": {
      "focal_length": "35mm",
      "look": "cinematic environmental portrait",
      "distortion_control": "natural perspective, straight verticals"
    },
    "depth_of_field": {
      "aperture": "f/2.8",
      "focus": "sharp on subject’s face",
      "background": "softly blurred lights and figures, readable context"
    }
  },
  "lighting": {
    "primary_source": "warm gas station canopy lights",
    "secondary_source": "cool ambient dusk sky",
    "contrast": "balanced warm-cool interplay",
    "highlights": "soft glow on hair and coat edges",
    "shadows": "gentle shadow falloff, no crushed blacks",
    "notes": "lighting should feel practical and naturally motivated"
  },
  "color_grade": {
    "style": "cinematic dusk grade",
    "palette": "warm amber highlights against cool blue-gray sky",
    "saturation": "restrained, film-like",
    "contrast": "medium, natural roll-off",
    "black_levels": "slightly lifted for softness"
  },
  "texture_details": {
    "skin": "realistic micro-texture",
    "fabric": "coat weave visible, soft folds",
    "environment": "wet asphalt reflections, subt
```

## Playful Studio Portrait of Dua Lipa/Sydney Sweeney

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "style": "ultra-realistic studio portrait",
  "subject": {
    "gender": "female {argument name="subject name" default="Sydney Sweeney"} ",
    "age": "young adult",
    "pose": "leaning slightly forward toward the camera",
    "expression": "playful, flirty",
    "facial_details": {
      "wink": true,
      "tongue_out": true,
      "freckles": "natural across fair skin",
      "makeup": {
        "blush": "soft pink",
        "lips": "glossy"
      }
    },
    "hair": {
      "color": "blonde",
      "length": "long",
      "part": "side-parted",
      "style": "falling naturally over shoulders"
    },
    "outfit": {
      "dress": "off-shoulder fitted {argument name="dress color" default="Red"} dress",
      "jewelry": {
        "earrings": "long dangling gold earrings",
        "necklaces": "layered gold necklaces with small heart pendant"
      }
    }
  },
  "environment": {
    "setting": "studio",
    "background": "clean minimal light neutral tones"
  },
  "lighting": {
    "type": "soft diffused studio lighting",
    "shadows": "smooth natural shadows"
  },
  "camera": {
    "lens": "50mm",
    "aperture": "f/1.8",
    "depth_of_field": "shallow"
  },
  "quality": {
    "resolution": "high resolution",
    "detail": "ultra-detailed",
    "skin_texture": "photorealistic",
    "focus": "sharp focus",
    "photography_style": "high fashion lifestyle photography" 
  }
}
```

## Alpine Selfie with Prominent Anatomy Focus

> Manzara üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"subject": {
"description": "A young woman with an hourglass figure and striking features. She has an olive skin tone with visible natural texture, fine pores, and subtle beauty marks. Her hair is dark brown, nearly black, styled into two long, tight pigtail braids that drape over her shoulders. She has large, almond-shaped hazel eyes with thick lashes, well-defined dark eyebrows, and full, voluminous lips with a natural matte finish. She is wearing a form-fitting, matte black long-sleeved bodysuit with a deep, wide scoop neckline that emphasizes a full, heavy, and naturally projected bust. Her lower attire consists of high-waisted beige ski trousers featuring gold button details at the waistband.",
"anatomical_fidelity": "Reference-locked proportions. The subject's bust volume is prominent and clearly above average, matching the reference exactly with a full, heavy mass affected by natural gravity. Bust depth is visibly greater than the ribcage depth, with clear forward and outward projection. The waist is narrow, creating a sharp contrast with the chest and hips. Shoulders are soft and slightly hunched forward due to the pose. Hands show realistic skin folding and knuckle detail.",
"clothing_details": "The black bodysuit has a high-quality ribbed or matte fabric texture, fitting tightly against the skin. The beige trousers are made of a heavy, technical ski-wear material with visible seams and belt loops."
},
"pose": {
"description": "The subject is captured in a high-angle mid-shot, leaning slightly forward toward the camera. Her right hand is raised to chest level, delicately holding the end of her right braid between her thumb and fingers. Her left arm is extended downward and slightly out of frame, suggesting a selfie-style perspective without showing a device. Her head is tilted slightly to her right, and she is looking directly into the camera lens with a calm, steady gaze.",
"weight_distribution": "Weight is centered but leaning forward, creating a sense of intimacy and depth. The spine has a natural slight curve corresponding to the seated or forward-leaning posture."
},
"environment": {
"location": "Alpine ski slope during winter.",
"foreground": "A pristine, slightly textured snow-covered slope showing subtle tracks.",
"midground": "A pair of skis and poles are visible on the snow to the right. A dense forest of snow-laden evergreen pine trees fills the middle distance.",
"background": "Majestic, jagged mountain peaks covered in thick snow under a heavy, overcast grey sky. The atmosphere is cold and crisp with high visibility."
},
"camera": {
"shot_type": "Mid-shot",
"angle": "Slightly high angle looking down at the subject",
"focal_length": "Approximately {argument name="focal length" default="35mm"} to mimic a high-end smartphone or wide-angle portrait lens without distortion",
"perspective": "Deep three-dimensional space with clear separation between the subject and the distant mountains",
"focus": "Sharp f
```

## Mixed Media Y2K Street Style with Cartoon Companion

> Fotogerçekçi moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Transform this image [UPLOAD YOUR IMAGE into a 64K DSLR shot resolution of A fashionable young man (same face as the uploaded image) walking confidently across an urban street in daylight, captured in a candid street-style photography moment. The setting is a lively city environment with cafés, outdoor seating, storefront signage, and subtle street art in the background, creating a modern European city vibe. The road markings and pavement add realism and depth to the scene. he is dressed in bold Y2K-inspired streetwear: a cropped {argument name="jacket color" default="yellow"} Adidas track jacket with black stripes on the sleeves, slightly zipped. he pairs it with oversized, ultra-baggy patchwork denim jeans featuring bold graphic panels in green, red, yellow, and white, including large text reading "CHICAGO" the number "6" and a "7" on different pant legs. The jeans sit low on the waist and flow dramatically with movement. he wears chunky tan sneakers, His hair is stylish and voluminous. His expression is focused and confident, eyes looking slightly to the side, embodying effortless cool. Natural daylight highlights his features, with realistic skin texture and soft shadows enhancing depth and authenticity Beside him is a stylized cartoon illustration (same face as the uploaded image) version of himself, matching the exact outfit, colors, and pose. The illustrated character has exaggerated facial features, bold outlines, smooth flat shading, and a playful, animated style, creating a striking mixed-media contrast between realism and illustration. The cartoon character appears integrated into the real-world street scene, standing at his side as a creative visual companion. The overall composition blends high-fashion street photography with playful digital art. Sharp focus, high resolution, realistic textures, dynamic motion, and vibrant color contrast. The mood is confident, edgy, youthful, and fashion-forward. Style keywords: street photography, Y2K fashion, oversized denim, urban lifestyle, mixed media art, photo + cartoon illustration, editorial street style, high detail, realistic lighting, trendy, bold colors, fashion aesthetic. Octane render & Unreal Engine 5.
```

## Playful Studio Portrait of Megan Fox/Dua Lipa

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "style": "ultra-realistic studio portrait",
  "subject": {
    "gender": "female",
    "age": "young adult",
    "pose": "leaning slightly forward toward the camera",
    "expression": "playful, flirty",
    "facial_details": {
      "wink": true,
      "tongue_out": true,
      "freckles": "natural across fair skin",
      "makeup": {
        "blush": "soft pink",
        "lips": "glossy"
      }
    },
    "hair": {
      "color": "brunette",
      "length": "long",
      "part": "side-parted",
      "style": "falling naturally over shoulders"
    },
    "outfit": {
      "dress": "off-shoulder fitted {argument name="dress color" default="black"} dress",
      "jewelry": {
        "earrings": "long dangling gold earrings",
        "necklaces": "layered gold necklaces with small heart pendant"
      }
    }
  },
  "environment": {
    "setting": "studio",
    "background": "clean minimal light neutral tones"
  },
  "lighting": {
    "type": "soft diffused studio lighting",
    "shadows": "smooth natural shadows"
  },
  "camera": {
    "lens": "50mm",
    "aperture": "f/1.8",
    "depth_of_field": "shallow"
  },
  "quality": {
    "resolution": "high resolution",
    "detail": "ultra-detailed",
    "skin_texture": "photorealistic",
    "focus": "sharp focus",
    "photography_style": "high fashion lifestyle photography"
  }
}
```

## Nano Banana Pro Hyper-Realistic Midnight Snack Portrait Prompt

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "hyper_realistic_portrait",
  "subject_details": {
    "demographics": "Young woman, same identity as reference photo, fair skin, wearing comfortable, slightly oversized silk or cotton pajamas.",
    "facial_features": {
    “features”:"Facial features should match the reference image."
      "expression": "{argument name="expression" default="Playfully defensive pout (lips pursed in a cute, angry way)"}, looking directly at the camera as if interrupted. A visible smudge of rich dark chocolate frosting on the corner of her mouth and the tip of her nose.",
      "eyes": "Wide open, slightly defiant but guilty ('caught in the act' look), reflecting the kitchen lights.",
      "hair": "Messy 'bed head' style, maybe a sleep mask pushed up onto her forehead."
    },
    "apparel": {
      "outfit": "Cozy, lived-in pajamas (maybe a cute print or plain pastel color), rumpled texture.",
      "accessories": "A sleep mask resting on the forehead (adds to the 'woke up to eat' narrative)."
    }
  },
  "pose_and_action": {
    "body_position": "Leaning protectively over the kitchen counter or standing in front of an open refrigerator.",
    "hands": "One hand holding a fork with a half-eaten piece of chocolate cake, the other hand perhaps shielding the cake plate or resting on hips in a sassy stance."
  },
  "background_environment": {
    "location": "Dimly lit home kitchen at night.",
    "lighting_source": "Cinematic 'midnight snack' lighting: mix of cool light from the open refrigerator (rim light) and warm under-cabinet mood lighting on her face.",
    "objects": {
      "details": "A half-eaten chocolate cake with rich frosting on a plate, a glass of milk, maybe a few crumbs on the counter."
    }
  },
  "technical_specs": {
    "style": "Ultra-realistic photography, cinematic daily life snapshot, high contrast texture between the glossy chocolate and soft skin.",
    "camera": "35mm lens for an intimate, environmental portrait feel. Shallow depth of field to focus on the face and the cake.",
    "visual_fidelity": "Extremely high detail on the sticky texture of the chocolate and the natural imperfections of the skin.",
    "aspect_ratio": "4:5"
  },
  "constraints": [
    "Keep the facial features and identity strictly matching the reference",
    "Ensure the chocolate looks appetizing and realistic (shiny, thick), not like paint or mud",
    "Maintain the 'angry/pouting' expression but in a comedic/cute context"
  ],
  "output_goal": "Create a humorous and ultra-realistic photo of a young woman caught eating chocolate cake late at night, pouting angrily at the camera with chocolate on her face."
}
```

## Celebrity Pairing Split-Screen Collage Prompt

> Fotogerçekçi, lüks mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_metadata": {
    "format": "Collage",
    "layout": "Two-panel split-screen",
    "total_characters": 4,
    "theme": "Celebrity pairings in scenic locations"
  },
  "left_panel": {
    "primary_subject_female": {
      "name": "{argument name="female celebrity 1" default="Sydney Sweeney"}",
      "hair": "Long blonde, wavy texture",
      "expression": "Wide, authentic smile showing teeth",
      "clothing": "Classic blue denim jacket over a light-colored top",
      "pose": "Leaning inward toward her partner"
    },
    "primary_subject_male": {
      "name": "{argument name="male celebrity 1" default="Cristiano Ronaldo (Lookalike)"}",
      "facial_features": "Tanned complexion, groomed hairstyle, smiling",
      "clothing": "Tan suede bomber jacket, beige crew-neck sweater, dark navy trousers",
      "accessories": "Luxury wristwatch on the left wrist"
    },
    "environment": {
      "location": "European city rooftop or balcony",
      "background_elements": ["Cobblestone streets", "Historical architecture", "Outdoor cafe seating", "Round tables with white linens"],
      "lighting": "Golden hour sunset creating a warm glow"
    }
  },
  "right_panel": {
    "primary_subject_male": {
      "name": "{argument name="male celebrity 2" default="Elon Musk (Lookalike)"}",
      "expression": "Focused, looking down at a mobile device",
      "clothing": "Formal black business suit, crisp white dress shirt",
      "action": "Holding and interacting with a smartphone"
    },
    "primary_subject_female": {
      "name": "{argument name="female celebrity 2" default="Ana de Armas"}",
      "hair": "Dark brown, shoulder-length",
      "expression": "Soft smile, curious gaze toward the phone",
      "clothing": "Black V-neck dress with a red and white floral print",
      "accessories": "Thin gold bracelet on the left wrist"
    }
  },
  "environment": {
    "location": "High-end modern skyscraper interior",
    "background_elements": ["Floor-to-ceiling glass windows", "City skyline with skyscrapers", "Dusk/Evening atmosphere", "Modern office furniture"],
      "lighting": "Cool blue ambient twilight light contrasted with warm indoor lamp lighting"
    }
  },
  "technical_details": {
    "image_style": "High-fidelity photorealistic AI generation",
    "color_palette": "Warm oranges and browns on the left; Cool blues and blacks on the right"
  }
}
```

## Chiaroscuro Portrait of an Exhausted Artist

> Portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
• Concept: Artistic lifestyle, face preserved, tactile-provocative realism.

• Story: A moment of frustration/exhaustion in a messy painting studio.

• Clothing: Paint-stained oversized button-down shirt, rolled-up sleeves.

• Accessories: Charcoal smudges on the cheek, brushes tucked behind the ear.

• Pose: Slumped in a worn wooden chair, head buried in one hand, looking tiredly at the camera.

• Lighting: Single softbox light from the side, dramatic shadows (Chiaroscuro).

• Background: Canvases leaning against walls, paint splatters on the floor.

• Camera: 35mm Leica, sharp focus on facial imperfections.

• Style: Creative burnout, raw human texture, unfiltered artistic life.
```

## 4-Panel Bikini Mirror Selfie Collage

> Fotogerçekçi portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type":"img_prompt",
  "ref_lock":"strict",
  "layout":{
    "format":"4-panel 2x2 collage",
    "aspect_ratio":"1:1",
    "style":"mirror selfie"
  },
  "subject":{
    "skin":"light–medium warm tan, smooth, slight sheen",
    "face":{
      "shape":"soft oval",
      "cheeks":"naturally full",
      "nose":"straight bridge, rounded tip",
      "lips":"full with cupid bow, playful pout variations",
      "eyes":"almond, winged liner, long lashes, warm shadow",
      "brows":"arched, medium-full"
    },
    "hair":{
      "color":"medium brown",
      "style":"two braided pigtails",
      "bangs":"straight fringe",
      "accessory":"black sunglasses on head"
    }
  },
  "outfit":{
    "bikini":{
      "style":"triangle top + low-rise bottom",
      "pattern":"{argument name="bikini pattern" default="blue with white floral print"}",
      "trim":"yellow edging and ties"
    },
    "footwear":"yellow open-toe sandals with ankle strap",
    "jewelry":"large gold hoop earrings"
  },
  "accessories":{
    "phone":"light pink case, square dual-camera bump",
    "sunglasses":"held near lips in one panel"
  },
  "poses":{
    "p1":"deep squat, chin on fist, pout",
    "p2":"low sit, sunglasses near mouth",
    "p3":"one leg raised to mirror, holding braid",
    "p4":"leaning forward, knees bent, soft pout"
  },
  "environment":{
    "room":"indoor dressing/bedroom",
    "background":"white louvered closet doors",
    "floor":"beige carpet",
    "mirror":"full-length, thin gold frame"
  },
  "lighting":"soft indoor, neutral-warm, minimal shadows",
  "quality":"photorealistic, sharp, natural colors",
  "constraints":{
    "no_face_or_body_change":true,
    "match_reference_exactly":true
  }
}
```

## Cinematic Portrait with Window Shadows and Typography Overlay

> Sinematik, minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic portrait of a young man in the uploaded image sitting cross-legged on a simple wooden chair, wearing white over-ear headphones and gazing thoughtfully toward the light. He is wearing black sweater and brown trousers. He is in a cozy study room; the background features a beige wall cluttered with taped papers and sticky notes, with a wooden bookshelf and a globe visible on the right. Warm, golden-hour sunlight streams in from the left, casting distinct, sharp grid-like window shadows across the subject and the back wall. A large, semi-transparent, faded typography overlay of the word "THINK" blends vertically into the scene behind him. The atmosphere is moody, nostalgic, and warm, with a soft film grain texture.
```

## Bohemian Cottagecore Portrait with Dark Grunge Undertones

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_details": {
    "subject": {
      "type": "Young woman",
      "appearance": {
        "hair": "Long, dark chestnut brown, loose waves, falling over face, messy aesthetic",
        "skin": "Fair complexion, smooth texture, natural finish",
        "face": "Looking downward, face partially obscured by hair, introspective expression",
        "body_type": "Slender, fit"
      },
      "pose": {
        "stance": "Leaning against a stone wall, body slightly angled",
        "hands": "Right hand resting gently on chest/neck with fingers splayed, left hand holding a green object (boot) down by her side",
        "gaze": "Downward, avoiding eye contact"
      }
    },
    "clothing": {
      "dress": {
        "style": "Off-the-shoulder mini dress, cottagecore/boho style",
        "fabric": "Lightweight cotton or linen blend",
        "color": "Cream/off-white base",
        "pattern": "Small, delicate floral print with {argument name="floral color 1" default="purple"} and {argument name="floral color 2" default="yellow"} wildflowers",
        "details": ["Ruffled tiered skirt", "Puffed short sleeves", "Sweetheart neckline", "Corset-style bodice structure"]
      },
      "accessories": [
        "Thin black choker necklace",
        "Multiple silver rings on fingers",
        "Red beaded bracelet on left wrist",
        "Holding a dark green, crocodile-texture cowboy boot"
      ]
    },
    "environment": {
      "background": "Textured stone masonry wall",
      "details": "Large, irregular grey and beige stone blocks, rough texture, natural architectural backdrop",
      "setting": "Outdoor or semi-outdoor daylight setting"
    },
    "lighting": {
      "type": "Soft natural daylight",
      "quality": "Diffused, even illumination, soft shadows",
      "direction": "Front-lit but soft"
    },
    "styling": {
      "aesthetic": "Bohemian, chic, feminine, soft grunge undertones",
      "mood": "Casual, candid, slightly moody, artistic"
    },
    "camera_details": {
      "shot_type": "Medium shot (thigh-up)",
      "angle": "Eye-level",
      "lens": "85mm prime lens for flattering portrait compression",
      "aperture": "f/2.8 for slight depth of field separation from the wall",
      "focus": "Sharp focus on the subject and dress texture"
    },
    "technical_specifications": {
      "quality": "Ultra Photorealistic, 8k resolution, highly detailed",
      "texture_quality": "High fidelity fabric textures, realistic skin pores, detailed stone masonry",
      "engine": "Unreal Engine 5 render style or high-end photography"
    }
  }
}
```

## Cinematic Urban Realism in an Elevator

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
    "genre": "cinematic urban realism",
    "mood": ["tense", "cold", "isolated", "quiet intensity"],
    "theme": "a man caught in a moment of silence inside a sterile industrial elevator"
  },
  "subject": {
    "description": "young man with calm intense expression",
    "face": {
      "skin": "natural pores, realistic texture, slight under-eye shadow, no retouching",
      "beard": "short trimmed beard, natural density",
      "expression": "neutral but intimidating, relaxed jaw, eyes locked on camera"
    },
    "hair": {
      "style": "messy short crop",
      "detail": "slight volume on top, natural uneven strands, not styled too clean"
    },
    "pose": {
      "body_language": "still and grounded, subtle confidence",
      "hands": "one arm folded across torso, other arm relaxed downward",
      "stance": "centered, shoulders slightly forward, minimal movement"
    }
  },
  "wardrobe": {
    "top": "oversized {argument name="hoodie color" default="black"} hoodie, heavy fabric, matte texture",
    "layering": "dark graphic tee slightly visible below the hoodie hem",
    "bottom": "dark cargo pants with stitched pockets",
    "styling_notes": "streetwear minimal, clean silhouette, no bright branding"
  },
  "environment": {
    "location": "metal elevator interior",
    "materials": ["brushed stainless steel walls", "reflective panels", "subtle fingerprints and smudges"],
    "lighting_elements": "overhead fluorescent light panels",
    "atmosphere": "thin mist/smoke floating around subject, faint haze near corners",
    "background": "no extra people, no clutter, clean symmetrical elevator geometry"
  },
  "cinematography": {
    "shot_type": "medium-full portrait",
    "framing": "perfect symmetrical centered composition",
    "camera_angle": "slightly low angle for dominance and tension",
    "lens": {
      "focal_length": "35mm",
      "look": "cinematic wide portrait with depth",
      "distortion_control": "minimal distortion, straight vertical elevator lines"
    },
    "depth_of_field": {
      "aperture": "f/2.8",
      "focus": "sharp focus on eyes and face",
      "falloff": "soft background blur but still readable environment"
    }
  },
  "lighting": {
    "type": "overhead harsh fluorescent top-light",
    "contrast": "medium-high with deep shadows under jaw and hoodie folds",
    "highlights": "soft bloom on metallic walls, controlled, not blown out",
    "fill": "very subtle ambient bounce to keep facial details visible",
    "notes": "keep lighting realistic and slightly underexposed for cinematic tension"
  },
  "color_grade": {
    "style": "dark cinematic teal-green industrial grade",
    "shadows": "cool teal tint",
    "highlights": "neutral to slightly cold",
    "saturation": "muted low saturation",
    "contrast": "clean but gritty",
    "black_levels": "slightly crushed blacks, not fully clipped"
  },
  "texture_details": {
    "skin": "realistic pores and micro texture",
    "fabric": "h
```

## Playful Studio Portrait of Sydney Sweeney

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "style": "ultra-realistic studio portrait",
  "subject": {
    "gender": "female {argument name="subject name" default="Sydney Sweeney"} ",
    "age": "young adult",
    "pose": "leaning slightly forward toward the camera",
    "expression": "playful, flirty",
    "facial_details": {
      "wink": true,
      "tongue_out": true,
      "freckles": "natural across fair skin",
      "makeup": {
        "blush": "soft pink",
        "lips": "glossy"
      }
    },
    "hair": {
      "color": "blonde",
      "length": "long",
      "part": "side-parted",
      "style": "falling naturally over shoulders"
    },
    "outfit": {
      "dress": "off-shoulder fitted {argument name="dress color" default="Red"} dress",
      "jewelry": {
        "earrings": "long dangling gold earrings",
        "necklaces": "layered gold necklaces with small heart pendant"
      }
    }
  },
  "environment": {
    "setting": "studio",
    "background": "clean minimal light neutral tones"
  },
  "lighting": {
    "type": "soft diffused studio lighting",
    "shadows": "smooth natural shadows"
  },
  "camera": {
    "lens": "50mm",
    "aperture": "f/1.8",
    "depth_of_field": "shallow"
  },
  "quality": {
    "resolution": "high resolution",
    "detail": "ultra-detailed",
    "skin_texture": "photorealistic",
    "focus": "sharp focus",
    "photography_style": "high fashion lifestyle photography" 
  }
}
```

## Nano Banana Pro 3x3 Photo Collage Prompt

> Retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "model": "Nano Banana Pro (Gemini)",
  "prompt": {
    "layout": {
      "type": "3x3 Photo Collage / Nine-Grid",
      "description": "9 vertical portrait photos arranged in a square grid",
      "consistency": "The 9 frames feature the same person, same clothing, and same lighting conditions"
    },
    "aesthetic_style": {
      "theme": "{argument name="theme" default="Z Generation Home Party / Girly Boudoir Photoshoot"}",
      "lighting_technique": "Direct on-camera flash (hard light)",
      "visuals": "High contrast, sharp shadows, chaotic and fun atmosphere, vibrant colors, white background"
    },
    "subject_details": {
      "appearance": "Young Asian female, fair skin, dark long curly hair, voluminous hair",
      "outfit": "White floral camisole top, blue denim shorts",
      "makeup": "Heavy pink blush (Igari drunk blush style), red lip makeup, glitter on cheeks"
    },
    "environment_and_props": {
      "background": "White wall with photos attached, white bed sheets",
      "decor": [
        "Silver disco balls (various sizes)",
        "Scattered colorful metallic glitter paper",
        "Brown teddy bear",
        "Pink vintage corded telephone"
      ]
    },
    "panel_pose_breakdown": {
      "1_top_left": "Lying prone, chin resting on crossed arms, looking at the camera, glitter in hair",
      "2_top_center": "Supine from a top-down view, winking one eye, making a V sign, hair spread out",
      "3_top_right": "Sitting sideways, knees bent, candid shot of big laugh, throwing glitter into the air",
      "4_middle_left": "Upper body leaning against a large silver disco ball, intense gaze directly at the camera",
      "5_middle_center": "Close-up, hands pressed against cheeks, surprised or shy expression, glitter stuck on face",
      "6_middle_right": "Lying between disco balls, one hand reaching up toward the ceiling or camera",
      "7_bottom_left": "Inverted perspective (head at the bottom of the frame), playful expression, hair naturally hanging down",
      "8_bottom_center": "Cross-legged sitting pose, tightly hugging the brown teddy bear, slight pout",
      "9_bottom_right": "Sitting upright, holding the pink vintage phone receiver to the ear, profile view as if listening to gossip"
    },
    "camera_technical_values": {
      "focal_length": "35mm",
      "aperture": "f/5.6"
    }
  }
}
```

## Historic Meeting: Machado and Trump with Nobel Medal

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
“Cinematic, ultra-realistic scene depicting Venezuelan opposition leader {argument name="leader name" default="María Corina Machado"} presenting her Nobel Peace Prize medal to {argument name="recipient name" default="Donald Trump"}. Machado stands with a calm yet determined expression, holding the Nobel medal as a symbol of hope and democracy. Trump receives it thoughtfully, set against a dignified indoor setting. In the background, subtle symbolism appears: softly blurred US and Venezuelan flags, a faint glow of light symbolizing freedom, and a distant crowd suggesting democratic aspirations. Mood is serious, historic, and hopeful. Professional lighting, shallow depth of field, high detail, photo-journalistic realism.”
```

## Cinematic Night Street Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic night street portrait of a young woman standing in an urban alley, looking back over her shoulder toward the camera. Soft, natural facial expression, slightly tousled dark hair framing her face. Neon city lights and colorful bokeh in the background, warm red and yellow tones mixed with cool ambient light. Shallow depth of field, realistic skin texture, moody atmosphere, cinematic lighting, street photography style, 35mm lens, f/1.8, ultra-realistic, high detail.
```

## Hyper-Realistic Family Portrait with Identical Faces

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the provided photo of one base person as the sole reference. Do not change the facial features, contours, part placement, expression, atmosphere, or identity of this person.

All family members generated must share the face of the exact same person, and even if age, gender, or position differ, the facial characteristics must be completely identical. Maintain 100% fidelity to the face.

Regardless of the number of people, compose all subjects into a single cohesive scene, finishing it as a professional, photorealistic family group photo.

Express natural distance and positioning between family members, showing smooth group interaction. Adjust body size and height difference according to their respective settings, but ensure the faces remain completely identical.

Use a unified color palette and style for everyone, and have them wear coordinated matching outfits. Express the body types of each person within a realistic range, without unnatural exaggeration.

The background should be a dark, clean, professional studio background. Do not include unnecessary decorations.

Lighting should be soft, studio-quality lighting. Emphasize realistic shadows, uniform and natural skin tones, and balanced contrast.

Do not stylize, beautify, exaggerate, or reinterpret the face in any way. Maintain a strictly photorealistic, high-end portrait expression.
```

## Melancholic Portrait with Rosy Cheeks

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "description": "Young woman, approximately late teens or early 20s",
    "pose": "Looking back over her shoulder at the viewer, body turned slightly away",
    "expression": "Calm, neutral, slightly melancholic, direct eye contact"
  },
  "face": {
    "skin": "Fair complexion, natural texture, distinct rosy cheeks and nose (cold flush)",
    "eyes": "Large, clear hazel-green eyes, sharp focus, long lashes 3:4"
```

## Hyper-Realistic Portrait of a Pouting Oil Painting Artist

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "hyper_realistic_portrait",
  "subject_details": {
    "demographics": "Young female artist, fair skin with natural texture, wearing paint-splattered denim overalls and a simple white tank top.",
    "facial_features": {“features”:"Facial features should match the reference image."
      "expression": "Playfully frustrated pout (resembling the reference photo's charm), a smudge of vibrant {argument name="paint color" default="blue"} oil paint accidentally wiped on her {argument name="stain location" default="nose and cheek"}.",
      "eyes": "Bright, looking directly at the camera with a 'help me' look.",
      "hair": "Messy bun held up with a paintbrush, loose strands framing the face."
    },
    "apparel": {
      "outfit": "Oversized denim dungarees covered in colorful paint spots, casual and lived-in look.",
      "accessories": "None."
    }
  },
  "pose_and_action": {
    "body_position": "Leaning against a wooden easel, relaxed slouch.",
    "hands": "Holding a wooden palette in one hand and a messy paintbrush in the other, gesturing towards a chaotic abstract canvas."
  },
  "background_environment": {
    "location": "Sun-drenched art studio loft.",
    "lighting_source": "Natural golden hour light streaming through large industrial windows, creating dust motes in the air.",
    "objects": {
      "details": "Stacks of canvases, jars of brushes, tubes of oil paint scattered on a stool, wooden floor with paint drips."
    }
  },
  "technical_specs": {
    "style": "Ultra-realistic photography, 85mm lens portrait, sharp focus on eyes and paint texture, soft bokeh background.",
    "visual_fidelity": "High resolution, capturing the sticky texture of oil paint and the natural pores of the skin.",
    "aspect_ratio": "4:5"
  },
  "constraints": [
    "Maintain the authentic, candid feel of the original reference",
    "Ensure paint texture looks realistic (wet and thick), not flat",
    "Keep lighting natural and warm"
  ],
  "output_goal": "Create a charming, ultra-realistic photo of a young artist taking a break in her messy studio, pouting playfully at her mistake, with blue paint on her nose."
}
```

## Photorealistic Cosplay of Alice: Madness Returns

> Fotogerçekçi görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_data": {
    "subject": {
      "character": "Alice Liddell",
      "source_material": "Alice: Madness Returns",
      "type": "cosplay",
      "gender": "female",
      "appearance": [
        "pale skin",
        "long wavy dark brown hair",
        "heavy eye makeup",
        "red eyeshadow",
        "lip piercing",
        "ear gauges"
      ]
    },
    "outfit": {
      "dress": "blue puffed-sleeve dress",
      "apron": {
        "color": "white",
        "details": [
          "blood splatters",
          "blood stains",
          "pocket with omega symbol",
          "pocket with astronomical symbol"
        ]
      },
      "legwear": "black and grey striped thigh-high stockings",
      "accessories": "black o-ring choker"
    },
    "pose_and_action": {
      "pose": "standing",
      "action": [
        "holding a knife",
        "holding skirt",
        "lifting hem of dress",
        "looking at viewer"
      ]
    },
    "environment": {
      "location": "modern bedroom",
      "background_elements": [
        "grey wardrobe",
        "bed with plushies",
        "stuffed animals",
        "pink gaming chair",
        "mirror",
        "wooden floor"
      ]
    },
    "style": {
      "medium": "photograph",
      "lighting": "soft indoor lighting",
      "quality": [
        "high resolution",
        "photorealistic",
        "8k",
        "detailed texture"
      ],
      "camera_angle": "medium shot"
    },
    "full_prompt_string": "photorealistic cosplay of {argument name="character name" default="Alice Liddell"} from Alice Madness Returns, beautiful young woman with long wavy dark hair and pale skin, wearing a blue dress and a white apron with blood splatters and a symbol on the pocket, black and grey striped thigh-high stockings, black choker, holding a kitchen knife, lifting skirt slightly, standing in a modern bedroom, bed with plushies in background, pink gaming chair, grey closet doors, soft natural lighting, high quality, 8k, detailed makeup."
  }
}
```

## Dual Gym Mirror Selfie with Identity Lock Prompt

> Fotogerçekçi logo üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "quality": "ultra photorealistic",
    "resolution": "8k",
    "aspect_ratio": "16:9",
    "style": "modern gym mirror selfie realism",
    "constraints": "strict identity preservation, do not alter facial features or hair from reference"
  },
  "shot": {
    "composition": "mirror selfie, dual full-body shot, both subjects side by side with backs to camera, full reflection visible",
    "lens": "slight wide-angle smartphone lens",
    "camera": "handheld phone, mirror reflection",
    "motion": "static still photo",
    "grain": "subtle realistic digital grain"
  },
  "subjects": {
    "left_model": {
      "identity_lock": true,
      "build": "fit, curvy athletic physique with toned legs and glutes",
      "hair": "natural color and style preserved from reference",
      "outfit": "bright pink long-sleeve cropped workout top with thumb holes, matching high-waisted seamless pink gym shorts with subtle waistband logo, white athletic socks",
      "pose": "hand on hip, relaxed confident stance, slight arch, calm expression visible in mirror"
    },
    "right_model": {
      "identity_lock": true,
      "build": "fit, curvy athletic physique with toned legs and glutes",
      "hair": "natural color and style preserved from reference",
      "outfit": "light yellow halter-style sports bra with thin straps, matching high-waisted seamless pink gym shorts, white athletic socks",
      "pose": "hand on hip, playful confident stance, subtle expression visible in mirror"
    }
  },
  "environment": {
    "location": "modern gym",
    "foreground": "dark rubber gym flooring",
    "midground": "large wall mirror reflecting both models clearly",
    "background": "professional fitness equipment softly blurred, exposed ceiling details"
  },
  "lighting": {
    "type": "dim indoor gym lighting",
    "color": "cool blue and purple ambient tones",
    "effect": "soft highlights on skin and fabric, strong contrast between outfits and background"
  },
  "visual_style": {
    "vibe": "confident, energetic fitness editorial",
    "detail_level": "high realism, accurate reflections, natural skin texture, realistic fabric stretch"
  },
  "negative_prompt": "blurry, distorted mirror, altered faces, changed hair color, extra limbs, harsh flash, cartoon, anime, watermark, text overlay, extra people"
```

## Realistic Car Interior Portrait with Streetwear Aesthetic

> Fotogerçekçi moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"subject": {
"demographics": "Young female adult, approximate age 20-25, light olive to tan skin tone",
"hair": "Long, dark brown hair, loose wavy texture, layered, parting in the middle, falling over shoulders and back",
"face": "Oval face shape, defined jawline, straight nose, full lips with neutral rosy tint, dark groomed eyebrows, brown eyes looking directly at camera",
"upper_body_outfit": "White short-sleeved ribbed crop top, tight fit, crew neck, hemline ending just below the bust exposing midriff",
"lower_body_outfit": "Olive green pants (likely cargo or denim style), fitted at hips and thighs, black leather belt with silver buckle, cargo pocket visible on thigh",
"footwear": "Black canvas high-top sneakers with white laces, white toe caps, and white rubber soles (Converse All-Star style)",
"accessories": "Small black shoulder bag tucked under left arm, silver ring on left hand ring finger, small hoop earrings",
"anatomy_and_physique": "Slender but curvy build, visible waistline, natural bust volume clearly projected in profile view, prominent arch in lower back due to kneeling pose"
},
"pose": {
"body_position": "Kneeling on the back seat of a car, body angled away from camera towards the driver side",
"torso_rotation": "Upper torso twisted significantly to the right to face the camera",
"head_orientation": "Head turned over right shoulder, chin slightly tucked, direct eye contact with the viewer",
"arms": "Right arm raised and resting comfortably on top of the front seat headrest, left arm bent at elbow holding the black bag against the waist",
"legs": "Knees bent on the seat cushion, shins tucking back, feet visible in the lower foreground",
"spine_curvature": "Pronounced lumbar curve due to the kneeling and twisting posture"
},
"environment": {
"location": "Interior of a modern sedan car, back row",
"interior_details": "Black leather seats with perforated texture on the center panels, smooth leather side bolsters, grey car ceiling lining, black headrest",
"background_view": "Through the car windows, a suburban residential street is visible with green lawns, a driveway, a beige house, and trees",
"roof": "Car sunroof is open, showing visible sky and tree branches overhead"
},
"camera": {
"perspective": "Medium shot, eye-level relative to the kneeling subject, capturing full body from knees up",
"framing": "Subject centered horizontally, framing captures the car interior context including the sunroof and window view",
"depth_of_field": "Sharp focus on the subject's face and eyes, slightly softer focus on the background outside the window",
"lens_characteristics": "Standard focal length (approx 35mm-50mm), minimal distortion, natural perspective"
},
"lighting": {
"source": "Natural daylight entering through the open sunroof and side windows",
"quality": "Soft, diffuse, overcast lighting, no harsh shadows on the face",
"direction": "Top-down ambient light from "}
```

## Flirty Studio Portrait Prompt with Wink and Tongue Out

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "style": "ultra-realistic studio portrait",
  "subject": {
    "gender": "female",
    "age": "young adult",
    "pose": "leaning slightly forward toward the camera",
    "expression": "playful, flirty",
    "facial_details": {
      "wink": true,
      "tongue_out": true,
      "freckles": "natural across fair skin",
      "makeup": {
        "blush": "soft pink",
        "lips": "glossy"
      }
    },
    "hair": {
      "color": "blonde",
      "length": "long",
      "part": "side-parted",
      "style": "falling naturally over shoulders"
    },
    "outfit": {
      "dress": "off-shoulder fitted black dress",
      "jewelry": {
        "earrings": "long dangling gold earrings",
        "necklaces": "layered gold necklaces with small heart pendant"
      }
    }
  },
  "environment": {
    "setting": "studio",
    "background": "clean minimal light neutral tones"
  },
  "lighting": {
    "type": "soft diffused studio lighting",
    "shadows": "smooth natural shadows"
  },
  "camera": {
    "lens": "50mm",
    "aperture": "f/1.8",
    "depth_of_field": "shallow"
  },
  "quality": {
    "resolution": "high resolution",
    "detail": "ultra-detailed",
    "skin_texture": "photorealistic",
    "focus": "sharp focus",
    "photography_style": "high fashion lifestyle photography"
  }
}
```

## Anime Egirl Illustration Prompt Shootout

> Minimal, elle çizilmiş illüstrasyon üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A high-quality anime illustration of a young woman with long, messy vibrant {argument name="hair color" default="salmon-colored"} hair and a slightly smug expression. She has unique solid black eyes with no pupils and subtle pink eyeshadow. She is wearing a tight, black cropped t-shirt with the text "{argument name="t-shirt text" default="DANGER: HIGHLY ADDICTIVE"}" printed in white across the chest. The art style is a clean digital sketch with thin, expressive line art and a flat, soft color palette. Minimalist white background, focus on the upper body and midriff, soft cel-shading, trendy "egirl" aesthetic, high resolution, 2D vector-influenced.
```

## Hard Flash City Glow Portrait Prompt

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "photorealistic image generation",
  "subject": {
    "gender": "female",
    "age": 20,
    "ethnicity_appearance": "light-skinned Caucasian appearance",
    "body_type": "fit, slim hourglass figure, toned midsection",
    "pose": "standing leaning back against a dark window frame, one arm raised resting high on the frame, the other hand delicately holding a single red rose near her face",
    "facial_expression": "soft, captivating gaze directly at the camera, lips slightly parted, relaxed and confident"
  },

  "face_details": {
    "face_shape": "sculpted oval with defined jawline",
    "skin_tone": "fair with warm undertones, illuminated by flash",
    "skin_texture": "smooth, realistic grain, slight shine from flash photography",
    "cheeks": {
      "shape": "high cheekbones",
      "color": "soft peachy blush"
    },
    "nose": {
      "shape": "straight",
      "size": "small to medium",
      "tip": "refined"
    },
    "lips": {
      "shape": "full and plump",
      "color": "natural mauve-pink",
      "finish": "satin matte"
    },
    "eyes": {
      "color": "piercing light blue-green",
      "shape": "almond",
      "expression": "alluring and focused",
      "eyelashes": "natural but defined"
    },
    "eyebrows": {
      "shape": "arched",
      "thickness": "medium",
      "color": "dark blonde"
    }
  },

  "hair": {
    "color": "platinum blonde",
    "style": "long single thick braid hanging over one shoulder",
    "length": "long",
    "texture": "smooth, sleek with some loose strands illuminated by flash"
  },

  "clothing": {
    "top": {
      "type": "hoodie",
      "color": "hot pink",
      "details": "cropped length revealing midriff, long sleeves, drawstring hood"
    },
    "bottom": {
      "type": "denim shorts",
      "color": "light blue wash",
      "details": "high-waisted, distressed/ripped texture, frayed hem"
    },
    "outerwear": {
      "type": "none",
      "color": "none",
      "wearing_style": "none"
    }
  },

  "accessories": {
    "bag": "none",
    "jewelry": "small stud earrings",
    "props": "a single red rose held in the right hand"
  },

  "background": {
    "setting": "indoor night scene near a window",
    "objects": [
      "dark window glass",
      "window frame",
      "distant city lights bokeh outside (very faint)"
    ],
    "depth_of_field": "background dark and out of focus"
  },
  "lighting": {
    "type": "direct on-camera flash",
    "direction": "frontal",
    "effect": "hard flash lighting, casting a shadow behind the subject on the window frame, high contrast, vibrant colors"
  },
  "camera": {
    "shot_type": "three-quarter shot (thighs up)",
    "angle": "slightly low angle",
    "focus": "sharp focus on face and rose"
  },
  "image_quality": {
    "style": "flash photography, candid aesthetic, raw DSLR look",
    "detail_level": "high detail on denim texture and skin",
    "noise": "visibl"
  }
```

## Vintage 2016 Bohemian Bedroom Portrait

> Fotogerçekçi, retro mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "main_prompt": "vintage 2016 bohemian bedroom portrait, young woman in her late teens to early 20s with olive/tanned Mediterranean skin, long dark brown hair in messy high bun with loose strands framing face, subtle natural makeup with dark eyeliner and nude lips, melancholic dreamy expression with half-lidded eyes gazing off-camera, slight pout, sitting on wooden chair leaning against wall with head resting on shoulder, one leg extended straight out resting on vintage colorful patterned suitcase, other leg bent casually, wearing sheer light {argument name="dress color" default="turquoise/teal"} lace long-sleeve mini dress with delicate floral embroidery and semi-transparent bodice revealing skin underneath, fluffy light blue faux-fur coat draped over shoulders and arms like a blanket, bare feet with natural toenails visible, ankle strap sandals loosely on one foot near suitcase, cozy eclectic bedroom interior: warm wooden floor, beige/yellow beaded curtain in window filtering soft golden afternoon light, hanging macramé plant holders with trailing green plants, round wooden mirror with plants reflection, potted plants, vintage suitcase with floral/retro pattern open nearby, soft warm sunlight streaming through curtains creating god rays and lens flare, film photography aesthetic from 2016 era, slight grain and vignette, muted pastel color palette with teal accents, photorealistic, ultra-detailed skin texture with natural pores and subtle imperfections, realistic lace transparency and fur fluffiness, dreamy nostalgic intimate vibe, shot on Canon AE-1 with 50mm f/1.4 film lens or Fujifilm Superia 400, shallow depth of field, soft bokeh on background elements, high detail on fabric textures and hair strands",
  "negative_prompt": "blurry, lowres, deformed hands, extra fingers, fused fingers, bad anatomy, poorly drawn face, bad proportions, extra limbs, mutated hands, ugly, disfigured, tiling, out of frame, jpeg artifacts, signature, watermark, text, error, cropped, worst quality, low quality, cartoon, 3d render, plastic skin, doll-like, airbrushed skin, overexposed, underexposed, flat lighting, harsh shadows, pale skin, heavy makeup, glamorous look, modern smartphone filter, instagram face, duck lips, obese, elderly, child, male, urban modern room, clean minimalist interior, bright daylight, cold blue tones, desaturated, synthetic fabrics, visible logos, crowded scene, smiling happy expression, group shot, futuristic elements",
  "style_tags": [
    "photorealistic",
    "2016 bohemian aesthetic",
    "vintage film photography",
    "dreamy nostalgic portrait",
    "indie bedroom vibe",
    "soft golden hour light",
    "macramé boho decor",
    "film grain and vignette",
    "intimate relaxed pose",
    "retro suitcase prop",
    "eclectic cozy room"
  ],
  "technical": {
    "aspect_ratio": "4:5 (vertical portrait, Instagram / Tumblr 2016 style)",
    "lighting": "soft warm golden afternoon sunlight filtering through beaded curtains from window right, god rays a"
  }
```

## Ultra-Realistic Y2K Disposable Camera Snapshot Prompt

> Fotogerçekçi, retro görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "advanced_image_generation_prompt": {
    "metadata": {
      "target_aspect_ratio": "9:16",
      "style_goal": "Ultra-Realistic Candid Analog Film Photography",
      "era_esthetic": "Late 90s / Early 2000s Y2K Disposable Camera vibe"
    },
    "master_prompt_string": "A raw, authentic, high-resolution candid analog film photograph captured with a direct on-camera flash from a low angle, looking up at two young women indoors. The aesthetic is that of a 1990s disposable camera snapshot with heavy film grain and vibrant, slightly desaturated colors. HARSH LIGHTING: The direct flash creates hard-edged shadows against the plain off-white wall behind them, causing specular highlights on their skin and leather jackets. SUBJECT 1 (LEFT): A young woman with long, tousled blonde hair, caught mid-action, winking her right eye playfully and sticking her tongue out. She wears a black leather biker jacket over a dark top, with a delicate gold chain necklace featuring a small rectangular pendant visible. SUBJECT 2 (RIGHT): Her best friend, a young woman with a brunette bob haircut and distinct straight bangs (fringe). She is making a goofy, scrunched-face expression with eyes tightly shut and mouth wide open in a grimacing laugh, showing teeth. She wears a slightly oversized, vintage-style black leather jacket (bomber style) unzipped over a crisp white crew-neck t-shirt. Small silver hoop earrings are visible. COMPOSITION & ENVIRONMENT: Shot from below their eye level. The background is a simple apartment corner; a single recessed ceiling light is visible near the top frame, overpowered by the flash. To the far right, neutral-toned fabric curtains hang. To the far left, the edge of a framed picture is implied. TEXTURES & DETAILS: Extremely detailed skin texture showing natural pores, slight imperfections, and oily shine from the flash. The grain of the worn leather jackets is palpable. The cotton texture of the white t-shirt is clear. The entire image is overlaid with significant, authentic Kodak Portra 400 film grain.",
    "negative_prompt_string": "CG, 3D render, digital art, illustration, painting, photoshop, airbrushed, smooth skin, perfect complexions, studio lighting, soft diffused light, professional portrait, blurred faces, deformed appendages, extra fingers, bad anatomy, cartoonish, highly stylized, vivid neon colors, clean modern digital look, HDR, watermark, text, signature, cropped heads.",
    "technical_parameters_guides": {
      "camera_type": "35mm Point and Shoot / Disposable Camera",
      "lens_type": "Wide angle lens (approx 28mm)",
      "lighting_source": "Hard Direct Flash",
      "film_stock_emulation": "Kodak Portra 400 (pushed)",
      "perspective": "Worm's-eye view / Low Angle"
    }
  }
```

## Golden Hour Cabin Portrait with Puppies Prompt

> Minimal mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "format": "text2im",
  "aspect_ratio": "4:5",
  "style_tags": [
    "editorial realism",
    "natural light",
    "film look",
    "Kodak Portra 800 feel",
    "soft grain",
    "warm golden hour"
  ],
  "prompt": "A cozy wooden cabin interior with an open balcony door at sunset. Warm golden-hour sunlight pours in, creating soft highlights and gentle shadows on a wooden floor. A young woman with copper/ginger hair tied back in a low ponytail with a scrunchie is squatting near the doorway, smiling softly and petting two small fluffy companion dogs (Shih Tzu / Maltese-like). She wears a fitted white short-sleeve crop top, pastel pink shorts, and matching pink socks. One dog is being held gently in her hands while the other stands facing her. Background shows a wooden balcony railing and distant mountains under a soft cloudy sky. Intimate candid lifestyle moment, calm and tender mood. High-detail fur texture, realistic skin tones, clean composition, shallow depth of field, soft bokeh, natural colors, no overprocessing.",
  "camera": {
    "framing": "full body / 3-4 body, portrait orientation",
    "lens": "35mm",
    "aperture": "f/2.2",
    "focus": "woman and dogs, background softly blurred",
    "lighting": "backlit sunset through open door, warm rim light"
  },
  "quality": {
    "detail": "high",
    "sharpness": "natural",
    "grain": "subtle film grain",
    "dynamic_range": "soft highlights, preserved shadows"
  },
  "negative_prompt": "cartoon, anime, illustration, CGI, 3D render, plastic skin, over-smoothed face, over-sharpening, HDR, harsh contrast, neon colors, color banding, low-res, blurry, motion blur, noise artifacts, bad anatomy, extra limbs, extra fingers, deformed hands, distorted face, duplicate subject, floating objects, warped door frames, crooked horizon, text, watermark, logo, signature, oversaturated, harsh flash lighting, studio look"
}
```

## Alpine Ski Portrait with Anatomical Specifications

> Fotogerçekçi, lüks portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "protocol_manifest": {
    "aspect_ratio": "3:4",
    "resolution": "8K RAW",
    "rendering_engine": "Nano Banana High-Fidelity"
  },
  "subject_logic": {
    "identity_anchor": "100% accurate match of the woman in the reference photo. Exact facial structure, eye shape, and bone density preserved. No beautification.",
    "anatomical_specifications": {
      "face": "Natural skin texture, visible pores, flushed cheeks from the cold, subtle wind-chill redness around the nose, moisture on the lips.",
      "body_silhouette": "Top-heavy body type as per canonical reference. Heavy, visibly large and dominant bust volume that defines the silhouette under the ski jacket. Natural gravity pull and mass consistency.",
      "pose": "Full body or three-quarter shot. She is standing on a snowy slope, posing naturally for a friend. She is holding a {argument name="equipment type" default="snowboard"} vertically under her left arm, pressing it against her side. Her right hand is tucked into her jacket pocket or hanging naturally. Head tilted slightly, looking at the camera with a spontaneous, natural smile."
    }
  },
  "wardrobe_logic": {
    "outerwear": "White quilted premium ski jacket with a contrasting black collar and metallic snaps. The fabric shows tension and realistic folds over the chest area due to the heavy bust volume.",
    "headwear": "Beige cable-knit beanie; professional black ski goggles resting on the forehead.",
    "equipment": "A sleek, branded snowboard held under the left arm, showing glossy texture and snow dust."
  },
  "environment_logic": {
    "setting": "Sun-drenched Alpine ski resort. Jagged snow-capped peaks in the background, a blurry ski lift (funicular) rising behind her. Crisp, groomed corduroy snow on the ground.",
    "illumination": "Bright, direct mountain sunlight. High-contrast natural light. Cool-toned blue shadows in the snow, warm golden highlights on the subject's face.",
    "atmosphere": "Crisp winter air, slight snow haze in the distance, crystal clear sky."
  },
  "technical_logic": {
    "optical": "Handheld iPhone shot, 35mm equivalent focal length. Taken by a second person at chest level.",
    "pipeline": "Photorealistic, slight organic motion blur from handheld movement, no AI smoothing, authentic smartphone sensor grain.",
    "depth_of_field": "f/2.8 medium depth; the subject is sharp, the mountain peaks have a soft, natural bokeh."
  },
  "negative_prompt": {
    "forbidden": "holding phone, selfie, plastic skin, airbrushed, cartoon, anime, 3d render, distorted snowboard, low resolution, makeup filter."
  }
}
```

## Neon Cyberpunk Watercolor Fusion Illustration Prompt

> Sinematik, elle çizilmiş illüstrasyon üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "Use the uploaded reference image to **preserve 100% of the facial features, identity, age, skin tone, and expression** of the person. Do not change facial proportions. Create a **neon cyberpunk watercolor fusion illustration**: face painted softly in watercolor while surrounded by glowing neon light effects. Hair follows the exact reference style with subtle luminous highlights. Clothing: futuristic urban attire (sleek jacket, metallic or holographic fabric accents) rendered with painterly strokes. Background: dark night city with glowing neon signs, holograms, light streaks, digital rain, and watercolor splashes blending into a cyberpunk skyline. Cool color palette of electric blue, magenta, violet, and teal. Dramatic rim lighting around the silhouette, soft glow on skin, fine sketch lines mixed with watercolor bleeds. High-detail, cinematic, artistic, futuristic masterpiece quality.",
  "negative_prompt": "blurry, low quality, deformed, extra limbs, bad anatomy, watermark, text overlay, anime, cartoon, overexposed, underexposed, ugly face, bad hands, face altered, identity changed, flat colors, plastic skin, harsh outlines",
  "parameters": {
    "steps": 50,
    "cfg_scale": 7.2,
    "sampler": "Euler a or DPM++ 2M Karras",
    "strength": 0.53,
    "noise": 0.28,
    "width": 832,
    "height": 1216,
    "aspect_ratio": "2:3"
  },
  "usage_instructions": "Upload your image in img2img or reference mode. Keep strength around 0.5–0.55 for **perfect face matching** while transforming the scene into a neon cyberpunk watercolor world."
}
```

## Ancient Restoration Atelier Editorial Portrait

> Fotogerçekçi, lüks mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "vibe_title_en": "Ancient Restoration Atelier",
  "master_prompt": "A hyper-realistic, medium-format portrait of The Protagonist centered in a chaotic, sun-drenched Gold Leaf Restoration Atelier. The subject stands with perfect symmetry, wearing a structured high-neck {argument name="garment color" default="crimson"} garment and heavy, archaic gold neck ornamentation that gleams under studio lights. Behind the subject is an elaborate physical set design: massive, textured wings made of hammered brass and weathered sandstone pyramids, appearing as a high-budget practical effect rather than a drawing. The foreground and background are densely packed with the tools of creation: shelves overflowing with jars of gold pigment, chisels, scattered architectural blueprints, and clay fragments. The atmosphere is thick with volumetric haze and floating dust motes caught in a beam of warm, directional light. Shot on a Hasselblad H6D-100c with an 80mm f/2.8 lens to capture the microscopic texture of skin pores and the tactile roughness of the sandstone props. Film stock emulation: Kodak Portra 400 for rich ochres and burnt siennas.",
  "meta": {
    "intent": "Editorial Portrait",
    "priorities": "Texture, Lighting, Set Design",
    "device_profile": "High-End Desktop / Retina Display"
  },
  "frame": {
    "aspect": "4:5",
    "composition": "Central Symmetrical",
    "layout": "Portrait Close-Up",
    "camera_angle": "Eye Level",
    "tilt_roll_degrees": "0"
  },
  "subject": {
    "gender": "Female",
    "identity": "The Modern Deity",
    "demographics": "Universal Adult",
    "face": "Neutral, intense gaze, hyper-detailed skin texture",
    "hair": "Styled to match the symmetry of the environment",
    "body": "Shoulders squared to camera",
    "expression": "Regal, piercing, calm authority",
    "pose": "Static, commanding, front-facing"
  },
  "wardrobe_accessories": {
    "garments": [
      {
        "item": "High-neck tunic",
        "material": "Crimson Velvet or Raw Silk",
        "color": "Deep Red / Burnt Orange",
        "fit": "Structured / Tailored"
      }
    ],
    "accessories": [
      {
        "item": "Choker / Collar",
        "color": "Aged Gold",
        "material": "Hammered Metal",
        "brand_style": "Archaic / Museum Grade"
      },
      {
        "item": "Earrings",
        "color": "Gold",
        "material": "Brass",
        "brand_style": "Sculptural"
      }
    ]
  },
  "environment": {
    "setting": "Gold Leaf Restoration Atelier / Prop Workshop",
    "surfaces": "Hammered brass, sandstone, rough wood tables, paper blueprints",
    "depth": "Shallow depth of field but cluttered background visible",
    "atmosphere": "Dusty, warm, golden hour haze, smelling of turpentine and clay",
    "lens_interaction": "Sharp focus on eyes, creamy bokeh on background props"
  },
  "lighting": {
    "key": "Rembrandt style directional sunlight",
    "fill": "Warm gold reflector bounce",
    "rim": "Subtle highlight on hair and brass win"
  }
```

## Photorealistic Dual Gym Mirror Selfie Prompt

> Fotogerçekçi logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "photorealistic gym mirror selfie",
  "main_composition": "mirror selfie of two athletic young women standing side by side with backs to the camera in a dimly lit modern gym, confidently posing with hands on hips and slight arch to emphasize curves, full reflections visible in large mirror showing their front sides and subtle expressions, vibrant colorful workout outfits contrasting moody blue/purple ambient lighting, professional fitness studio with equipment blurred in background",
  "subject_1_left": {
    "description": "beautiful young woman in her early 20s, fit curvy athletic build with toned glutes and legs, long wavy light brown or blonde pigtails hair styled in high ponytail with loose strands, fair tanned smooth skin with healthy glow",
    "clothing": "bright pink long-sleeve crop top with thumb holes and subtle sheen, matching high-waisted seamless short scrunch-butt pink leggings with 'DFYNE' logo on waistband, white athletic socks",
    "details": "confident pose with hand on hip and slight smile visible in mirror reflection, hair naturally tousled, relaxed athletic stance"
  },
  "subject_2_right": {
    "description": "beautiful young woman in her early 20s, fit curvy athletic build with toned glutes and legs, long wavy darker brown hair in loose ponytail or braids, fair tanned smooth skin with healthy glow",
    "clothing": "light yellow halter-style sports bra with thin straps, matching high-waisted seamless short scrunch-butt pink leggings, white athletic socks",
    "details": "playful confident pose with hand on hip and subtle expression in mirror reflection, hair with natural volume"
  },
  "environment": {
    "foreground": "dark rubberized gym floor with subtle texture",
    "midground": "large wall mirror reflecting both women fully and gym interior",
    "background": "modern gym with dim blue/purple ambient lighting, blurred cardio machines and weight equipment, exposed ceiling ducts and pipes, clean spacious professional fitness center atmosphere"
  },
  "lighting_and_atmosphere": "dim moody indoor gym lighting with cool blue/purple neon accents and overhead spots, subtle highlights on skin, hair, and shiny leggings fabric creating vibrant color pops, energetic confident workout vibe with high contrast between bright outfits and dark surroundings, photorealistic detail",
  "technical_quality": "highly detailed, sharp focus on subjects with realistic seamless fabric textures (scrunch-butt shine, crop top stretch), skin glow, hair movement, and mirror reflections, 8k resolution, professional mirror selfie photography style with slight wide-angle lens effect and natural depth of field softly blurring background equipment",
  "negative_prompt_suggestions": "blurry, deformed, extra limbs, phone screen visible, mirror distortion or misalignment, overexposed neon lights, underexposed faces, low quality, cartoon, anime, text watermark, extra pe"
```

## Hyper-Realistic Mirror Selfie Prompt with iPhone Aesthetic

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "type": "yound adult woman",
    "age": " mid-30s",
    "face": {
      "structure": "Softly defined jawline, light natural makeup",
      "expression": "Focused, partially obscured by smartphone",
      "skin_texture": "Visible pores, fine texture, moist sheen from humidity or pool water",
      "features": "Sun-kissed complexion, sunglasses pushed back onto the crown of her head"
    },
    "hair": {
      "color": "Brunette-to-blonde ombre transition",
      "style": "Wavy, damp, messy summer hair",
      "texture": "Strands clumping slightly due to moisture, salt-air texture"
    },
    "body": {
      "build": "Fit yet voluptuous hourglass physique with natural full curves",
      "anatomy_behavior": "Realistic weight distribution; slight hip tilt; abdominal wall shows natural movement rather than static flatness; subtle skin-fold where the hip meets the torso",
      "skin_finish": "Sweaty sheen, wet highlights, glistening specular reflections, realistic skin bumps and micro-textures"
    }
  },
  "wardrobe": {
    "outfit": "Minimalist {argument name="bikini color" default="black"} string bikini with thin spaghetti straps",
    "fit_details": "Straps create slight, realistic indentations on the skin; white polish on fingernails and toenails",
    "material_behavior": "Thin fabric, slightly damp, delicate gold anklet on the left ankle"
  },
  "pose": {
    "body_orientation": "Facing the mirror directly from a distance, full body reflection",
    "limb_positions": "One hand pressed flat against the wall for balance, the other holding an iPhone 15 Pro; one leg stepped slightly in front of the other to accentuate the curve",
    "spine_and_weight": "Weight shifted onto the back leg, creating a natural s-curve in the spine"
  },
  "environment": {
    "location": "Bright summer villa or upscale beach house",
    "foreground_elements": [
      "Edge of a large, wall-mounted mirror frame"
    ],
    "background_elements": [
      "White and cream-colored minimalist walls",
      "Woven jute or straw rug on the floor",
      "Spacious, airy room with summer aesthetic"
    ],
    "spatial_rules": "Extreme distance between the subject and the mirror; the subject appears small in the frame to capture the surrounding interior architecture"
  },
  "camera": {
    "device_vibe": "iPhone 15 Pro mirror selfie, non-professional snapshot aesthetic",
    "lens_feel": "24mm wide-angle perspective, subtle barrel distortion common in smartphone sensors",
    "angle": "Eye-level with the reflection",
    "distance": "Wide shot (long shot) capturing the whole room and the mirror",
    "framing": "The mirror acts as a frame within a frame; the subject is centered within the mirror's reflection",
"composition": "Extreme wide shot, wide-angle interior perspective, subject centered in a large arched floor mirror",
    "distortion_rules": "Natural smartphone chromatic aberration at the edges; slight noise in shadows"
  },
  "ligh
```

## Fine-Art Studio Portrait with Red Ribbons

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "Fine-art studio portrait of a young woman with long flowing {argument name="hair color" default="auburn"} hair, seated on a white floor against a soft white backdrop. She wears an elegant white satin dress with a voluminous skirt. Long {argument name="ribbon color" default="red"} silk ribbons tied in a bow in her hair trail dramatically around her body and across the floor, creating fluid, organic lines. Calm, introspective expression, porcelain skin, soft natural makeup. Ethereal, romantic, high-fashion editorial photography, minimalist composition, dreamy atmosphere, diffused soft lighting, cinematic, ultra-detailed.",
  "negative_prompt": "low quality, blurry, harsh lighting, cluttered background, extra limbs, distorted anatomy, overexposed, underexposed, watermark, text",
  "style": "fine art photography",
  "lighting": "soft diffused studio light",
  "camera": "85mm lens, shallow depth of field",
  "quality": "ultra high resolution"
}
```

## Bohemian Chic Portrait with Cowboy Boot Prop Prompt

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_details": {
    "subject": {
      "type": "Young woman",
      "appearance": {
        "hair": "Long, dark chestnut brown, loose waves, falling over face, messy aesthetic",
        "skin": "Fair complexion, smooth texture, natural finish",
        "face": "Looking downward, face partially obscured by hair, introspective expression",
        "body_type": "Slender, fit"
      },
      "pose": {
        "stance": "Leaning against a stone wall, body slightly angled",
        "hands": "Right hand resting gently on chest/neck with fingers splayed, left hand holding a green object (boot) down by her side",
        "gaze": "Downward, avoiding eye contact"
      }
    },
    "clothing": {
      "dress": {
        "style": "Off-the-shoulder mini dress, cottagecore/boho style",
        "fabric": "Lightweight cotton or linen blend",
        "color": "Cream/off-white base",
        "pattern": "Small, delicate floral print with purple and yellow wildflowers",
        "details": ["Ruffled tiered skirt", "Puffed short sleeves", "Sweetheart neckline", "Corset-style bodice structure"]
      },
      "accessories": [
        "Thin black choker necklace",
        "Multiple silver rings on fingers",
        "Red beaded bracelet on left wrist",
        "Holding a dark green, crocodile-texture cowboy boot"
      ]
    },
    "environment": {
      "background": "Textured stone masonry wall",
      "details": "Large, irregular grey and beige stone blocks, rough texture, natural architectural backdrop",
      "setting": "Outdoor or semi-outdoor daylight setting"
    },
    "lighting": {
      "type": "Soft natural daylight",
      "quality": "Diffused, even illumination, soft shadows",
      "direction": "Front-lit but soft"
    },
    "styling": {
      "aesthetic": "Bohemian, chic, feminine, soft grunge undertones",
      "mood": "Casual, candid, slightly moody, artistic"
    },
    "camera_details": {
      "shot_type": "Medium shot (thigh-up)",
      "angle": "Eye-level",
      "lens": "85mm prime lens for flattering portrait compression",
      "aperture": "f/2.8 for slight depth of field separation from the wall",
      "focus": "Sharp focus on the subject and dress texture"
    },
    "technical_specifications": {
      "quality": "Ultra Photorealistic, 8k resolution, highly detailed",
      "texture_quality": "High fidelity fabric textures, realistic skin pores, detailed stone masonry",
      "engine": "Unreal Engine 5 render style or high-end photography"
    }
  }
}
```

## High-Glamour Portrait of Nusrat Jahan with Detailed Technical Specs

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{ "output_schema": { "metadata": { "camera_simulation": { "brand_model": "Sony A7R IV style", "type": "mirrorless", "focal_length_mm": "50", "aperture_f": "1.8", "shutter_speed": "1/100", "ISO": "640", "distance_estimate": "2.5 m" }, "lighting_summary": { "direction": "Soft warm key light from upper right, ambient fill from behind", "color_temperature_k": 3400, "white_balance_k": 3200, "image_LUT": "Warm gold-hour cinematic grade", "light_quality": "mixed ambient with soft rim light", "shadow_quality": "soft, partially filled", "dust_particles": "low on lens", "lens_flare": "none", "highlight_rolloff": "smooth", "specular_highlights": "pinpoint specular highlights on gold jewelry and skin sheen" } }, "composition": { "aspect_ratio": "9:16", "camera_height": "eye-level", "camera_tilt": "level", "camera_orientation": "portrait", "subject_position_in_frame": "centered", "background_description": "Softly blurred warm interior, bokeh lights from vanity mirrors, greenery to the left", "pose_description": "Standing front-facing, weight distributed evenly but with a subtle hip shift, right arm raised with hand tucked behind the head, left arm slightly away from the body, spine with a gentle S-curve, head tilted slightly to the right, direct gaze toward camera, neutral micro-expression with slightly parted lips, fingers of right hand partially obscured by hair, feet shoulder-width apart." }, "background/foreground": { "details_background": "Dressing room setting, warm light globes, blurred green foliage", "background_blur": "high, round bokeh", "halos": "no", "foreground_present": "yes", "foreground_details": "Out-of-focus green leaves in lower left corner", "foreground_focus": "blurry" }, "celebrity_reference": { "celebrity_name": "{argument name="celebrity name" default="Nusrat Jahan"}", "identity_criteria": { "match_confidence": "high", "non_biometric_visual_cues": [ "Bengali film industry aesthetic, 2020s era styling, heavy kohl-rimmed eyes, mauve-nude lipstick, sleek high ponytail, traditional Indian bridal-guest attire (Lehenga)", "Petite yet curvaceous frame, distinctive navel piercing area, slender midriff" ], "allowed_reference_style": "Styling and vibe cues modeled after Nusrat Jahan's red carpet and traditional photoshoots.", "source_of_truth": "User mention" } }, "subject_description": { "age_estimate": "Early 30s", "extremely_attractive_face": "yes, symmetrical features with high-glamour makeup", "goon_fetish_level": "instagram thirst trap", "suggestive_nature_of_image": "medium", "Wardrobe_tightness": "chest: highly fitted; waist: tight; skirt: high-waisted and snug at top", "sexiness": "high", "Face_detail": "visible skin texture, flawless blending, individual lash detail", "armpit_detail": "smooth texture, skin-on-skin contact at the crease", "Glutes_size": "medium", "Thirst_trap_aesthetic": "high", "ethnicity_photographic_terms": "Warm olive undertone, golden-tan skin tone", "accessories_jewelry_detail": "Intricate gol
```

## Cinematic HIMYM Yellow Umbrella Matchshot Prompt

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photoreal_cinematic_tv_still",
      "version": "v1.1_HIMYM_YELLOW_UMBRELLA_MATCHSHOT",
      "priority": "highest"
    },
    "output_settings": {
      "aspect_ratio": "3:4",
      "orientation": "portrait",
      "resolution_target": "ultra_high_res",
      "render_style": "photoreal_cinematic_film_still",
      "sharpness": "crisp_but_natural",
      "film_grain": "subtle_35mm",
      "color_grade": "warm_yellow_umbrella_key_with_cool_rain_shadows",
      "dynamic_range": "natural_not_hdr",
      "skin_rendering": "real_texture_no_retouch"
    },
    "creative_prompt": {
      "matchshot_priority": "MAX",
      "scene_summary": "Match the exact composition of the reference: a nighttime heavy-rain romantic moment under a bright yellow umbrella. Two adults stand close, facing each other, full-body portrait in a vertical frame. The umbrella dominates the top third of the image and glows strongly, casting warm yellow light onto their faces while the environment stays cooler and darker.",
      "composition_lock": {
        "framing": "full-body / 3-4 body portrait, both subjects fully visible, centered under the umbrella",
        "umbrella_position": "bright {argument name="umbrella color" default="yellow"} umbrella centered at the very top, canopy spanning nearly the full width of the frame, umbrella shaft vertical near the middle",
        "subject_placement": "man on the left, woman on the right, standing close with intimate eye contact, faces unobstructed",
        "background_depth": "soft bokeh and wet greenery behind them, rain visible as streaks"
      },
      "subjects": [
        {
          "role": "male",
          "position": "left",
          "wardrobe": "dark suit with long dark overcoat, white shirt, subtle boutonniere detail on lapel",
          "pose": "holding the umbrella handle with both hands near chest height, shoulders angled toward the woman",
          "expression": "surprised and tender, focused gaze at the woman"
        },
        {
          "role": "female",
          "position": "right",
          "wardrobe": "beige trench coat over a long dark dress, small brown crossbody/shoulder bag at hip",
          "pose": "standing close, body slightly angled toward the man, arms relaxed near torso, looking up at him",
          "expression": "soft, attentive, emotionally present gaze"
        }
      ],
      "environment": {
        "location": "outdoor garden walkway / entrance area at night",
        "weather": "very heavy rain with strong visible streaks, wet coats and wet hair details, droplets along umbrella rim",
        "background": "lush green bushes/foliage, dim ambient city/garden lights, glossy wet surfaces"
      },
      "lighting": {
        "key_light": "umbrella glow is the primary key: warm yellow light on faces and upper bodies",
        "fill_light": "minimal cool ambient fill from rainy nigh"
      }
    }
  }
}
```

## Dynamic Panettone Food Photography Prompt

> Yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Dynamic food photography of a sliced Panettone with flying ingredients and warm golden lighting.
```

## Ana de Armas High-Fashion Penthouse Portrait

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ana de Armas in a luxury glass penthouse at night, wearing a deep-cut satin evening gown with a thigh-high slit, standing in a seductive over-the-shoulder pose, intense captivating eyes looking directly into the camera. Ultra-detailed 8K, cinematic shallow depth of field, high-fashion glamour realism, soft rim lighting highlighting curves, reflective marble floor, photorealistic, vertical 9:16, ultra-sharp skin and fabric textures.",
    "image_quality": {
      "resolution": "8K ultra-detailed",
      "focus": "ultra-sharp",
      "depth_of_field": "shallow",
      "texture_detail": "high, realistic skin, hair, fabric"
    },
    "lighting": {
      "type": "cinematic rim lighting",
      "shadows": "soft and dramatic",
      "contrast": "high-fashion"
    },
    "color_grading": {
      "skin_tone": "warm glowing",
      "hair": "glossy shine",
      "background": "dark luxury interior",
      "overall_tone": "sensual cinematic glamour"
    },
    "parameters": {
      "aspect_ratio": "9:16",
      "steps": 50,
      "cfg_scale": 9.5,
      "style": "Photorealistic"
    }
  }
```

## Monochrome Street Photographer Portrait

> Sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic black-and-white street portrait of a young woman photographer standing in a city street, holding a mirrorless camera with both hands. She has soft natural makeup, sharp expressive eyes, and loosely tied dark hair with wisps framing her face. She wears a {argument name="clothing item" default="black turtleneck sweater"} and a camera strap around her neck. The background is an urban street with blurred pedestrians and lights creating creamy bokeh. Shallow depth of field, 85mm lens look, natural soft light, high contrast monochrome tones, realistic skin texture, candid moment, moody documentary photography style, ultra-detailed, film grain, timeless aesthetic.
```

## Greek Island Crochet Fashion Editorial Prompt

> Fotogerçekçi, sinematik logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "main_prompt": "gorgeous young woman in her early-mid 20s, athletic toned body with sun-kissed golden tan, long voluminous blonde hair in high ponytail blowing dramatically in the wind, windswept hair strands across face, seductive relaxed expression with closed eyes and slight parted lips, posing dynamically on rocky coastal cliff ledge, leaning back on one arm while arching body, one leg extended straight along the rock, other leg bent, wearing sheer long-sleeve crochet lace crop top in {argument name="top color" default="beige/neutral tone"} with intricate open knit pattern revealing skin underneath, matching high-waisted crochet mini skirt set in same textured lace fabric, dark purple/black sports bra peeking underneath, white Hermès-style 'H' logo platform sandals with thick straps, barefoot vibe but with sandals on, dramatic golden hour sunset lighting from behind, deep blue Aegean/Mediterranean sea in background with calm waves, distant Greek islands on horizon, rocky cliff edge covered in dry Mediterranean shrubs and grass, clear deep blue sky with soft gradient to orange near horizon, strong backlit rim light creating halo around hair and body, golden glow on skin, lens flare subtle, cinematic color grading with warm golden highlights and cool blue shadows, photorealistic, ultra-detailed skin texture with natural pores, sun-kissed glow, realistic hair movement and fabric texture, high fashion editorial pose, shot on Canon EOS R5 with 85mm f/1.2 lens, shallow depth of field, dreamy luxurious Greek island vacation aesthetic, sensual and empowering vibe",
  "negative_prompt": "blurry, lowres, deformed hands, extra fingers, fused fingers, bad anatomy, poorly drawn face, bad proportions, extra limbs, mutated hands, ugly, disfigured, tiling, out of frame, jpeg artifacts, signature, watermark, text, error, cropped, worst quality, low quality, cartoon, 3d render, plastic skin, doll-like, airbrushed skin, overexposed, underexposed, flat lighting, harsh shadows, pale skin, no tan, winter clothing, indoor setting, urban background, cityscape, smiling happy expression, heavy makeup, clown makeup, exaggerated filters, instagram face, duck lips, visible stretch marks unless natural, obese, elderly, child, male, group shot, cluttered foreground, cloudy overcast sky, night time, cold blue tones, desaturated colors, cheap fabric, synthetic look, visible logos except subtle H on sandal, modern buildings in background",
  "style_tags": [
    "photorealistic",
    "high fashion editorial",
    "Greek islands luxury",
    "golden hour glamour",
    "windswept dramatic pose",
    "Mediterranean coastal aesthetic",
    "sun-drenched vacation vibe",
    "cinematic portrait",
    "film grain subtle",
    "Vogue / Elle style",
    "empowering sensual"
  ],
  "technical": {
    "aspect_ratio": "3:4 (vertical portrait, Instagram / fashion editorial style)",
    "lighting": "strong golden hour backlight from low sun behind subject, rim light halo on hair and shoulders, warm 300"
  }
```

## Casual Collegiate Lifestyle Portrait with Iced Drink

> Minimal yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "image_quality": "High",
    "image_type": "Photo",
    "aspect_ratio": "4:5",
    "orientation": "Vertical"
  },
  "subject": {
    "description": "A blonde woman seated on grass outdoors holding a green iced drink",
    "pose": "Seated casually on a lawn, torso upright, hands holding a clear plastic cup with a straw",
    "expression": "Relaxed and friendly, winking with a soft smile",
    "gaze": "Directed toward the camera",
    "hair": {
      "color": "Light blonde",
      "style": "Long, loose waves, center-parted"
    }
  },
  "outfit": {
    "top": {
      "type": "Ribbed tank top",
      "color": "Pink",
      "fit": "Fitted"
    },
    "bottom": {
      "type": "Jeans",
      "color": "Black",
      "fit": "High-waisted"
    },
    "accessories": [
      {
        "type": "Jewelry",
        "details": "Layered necklaces, hoop earrings, rings"
      }
    ]
  },
  "props": {
    "drink": {
      "type": "Iced beverage",
      "color": "Green",
      "container": "Clear plastic cup with lid and straw"
    }
  },
  "environment": {
    "location": "Outdoor campus lawn",
    "background_elements": [
      "Brick academic building",
      "Windows",
      "Walkway",
      "Pedestrians in the distance"
    ],
    "lighting": {
      "type": "Natural daylight",
      "source": "Direct sunlight",
      "mood": "Bright and fresh"
    }
  },
  "camera": {
    "framing": "Medium portrait",
    "angle": "Eye-level",
    "distance": "Medium shot",
    "lens_style": "Natural perspective"
  },
  "aesthetic": {
    "vibe": "Casual, lifestyle, collegiate",
    "tone": "Warm, relaxed, approachable",
    "color_palette": [
      "Green",
      "Blue",
      "White",
      "Warm skin tones"
    ]
  },
  "post_processing": {
    "style": "Natural and clean",
    "edits": [
      "Balanced exposure",
      "Soft contrast",
      "Natural skin tones"
    ]
  }
}
```

## Comical Portrait of Woman with Winking Cat

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subjects": {
    "human": {
      "clothing": {
        "fit": "High neck, snug collar",
        "item": "Sleeveless turtleneck sweater (Dickey or Vest)",
        "color": "{argument name="sweater color" default="Vibrant coral pink / Hot pink"}",
        "texture": "High-relief knitting pattern, thick yarn, fuzzy texture visible",
        "material": "Chunky cable knit wool"
      },
      "appearance": {
        "hair": {
          "color": "Dark brown / Black",
          "style": "High, voluminous messy bun",
          "details": "Wispy bangs framing the forehead and temples, loose strands suggesting a casual vibe",
          "accessory": {
            "item": "Ribbon bow",
            "color": "Bright cherry red",
            "position": "Base of the bun, top of head"
          }
        },
        "skin": {
          "tone": "Fair, porcelain",
          "makeup": "Natural 'no-makeup' look, soft peach blush on cheeks, sheer glossy pink lips",
          "texture": "Smooth, flawless"
        },
        "expression": {
          "eyes": "Completely covered by the cat's paws",
          "mouth": "Closed-mouth gentle smile",
          "emotion": "Joyful, serene, amused"
        }
      },
      "demographics": {
        "age": "Young adult",
        "gender": "Female",
        "ethnicity": "Asian"
      }
    },
    "animal": {
      "coat": {
        "color": "Solid Blue-Gray",
        "pattern": "Uniform",
        "texture": "Plush, dense, velvet-like"
      },
      "breed": "Scottish Fold / British Shorthair mix",
      "species": "Cat",
      "positioning": {
        "limbs": "Both front paws extended horizontally across the woman's eyes",
        "posture": "Upright, leaning in towards the human's face",
        "location": "Perched on the woman's right shoulder (viewer's left)"
      },
      "facial_features": {
        "ears": "Folded forward and down (distinctive of Scottish Fold)",
        "eyes": {
          "left_eye": "Wide open, amber/gold iris, dilated pupil",
          "right_eye": "Closed in a tight wink",
          "expression": "Mischievous, comical"
        },
        "paws": {
          "color": "Gray matching body",
          "texture": "Soft, fluffy",
          "placement": "Gently pressing over the woman's eye sockets like a blindfold"
        },
        "mouth": {
          "action": "Tongue sticking out ('Blep')",
          "whiskers": "Long, white, fanning out horizontally",
          "tongue_color": "Bright pink"
        }
      }
     }
  },
  "composition": {
    "type": "close-up portrait",
    "angle": "Eye-level",
    "framing": "Centered vertical alignment",
    "background": {
      "type": "Solid studio backdrop",
      "color": "{argument name="background color" default="Soft mint green / Sage"}",
      "texture": "Smooth, matte finish",
      "lighting_interaction": "Evenly lit with no harsh gradients"
    }
  },
  "interaction": {
    "concept": "Peek-a-boo / 'Guess who'",
    "dynamic": ""}
```

## Ultra-Photorealistic Banana Print Bikini Portrait Prompt

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "aspect_ratio": "3:4",
    "quality": "ultra_photorealistic, raw, unedited photograph",
    "resolution": "8k",
    "camera": "Mirrorless camera (e.g., Canon EOS R5)",
    "lens": "50mm f/1.2 portrait lens",
    "style": "Soft natural light portrait, vibrant colors, relaxed atmosphere",
    "composition": "Medium shot of a woman reclining on an outdoor wooden sofa, looking directly at the camera with a smile."
  },
  "scene": {
    "location": "Outdoor garden patio or lounge area",
    "environment": [
      "Wooden/rattan outdoor sofa with textured yellow cushions",
      "Lush green foliage and trees in the background",
      "Softly blurred garden setting"
    ],
    "time": "Daytime, soft diffused sunlight",
    "atmosphere": "Relaxed, tropical, cheerful, cozy"
  },
  "lighting": {
    "type": "Soft, diffused natural daylight",
    "source": "Natural light (possibly shaded)",
    "effect": "Even lighting on the face and body, soft shadows, warm tones emphasizing the skin and the yellow accents."
  },
  "subject": {
    "identity": "A woman with long platinum blonde hair, smiling warmly at the camera.",
    "body": {
      "pose": "Reclining back against yellow cushions. Her right hand is raised touching a flower behind her ear, her left hand is resting on her thigh/bikini bottom.",
      "physique": "Fit, curvy build with fair to lightly tanned skin."
    },
    "outfit": {
      "clothing": "White strapless (bandeau) bikini with a pattern of yellow bananas. High-cut string bikini bottom.",
      "accessories": "A white and yellow Plumeria (Frangipani) flower tucked behind her right ear. A thin gold bracelet on her right wrist."
    }
  },
  "realism_focus": {
    "textures": "Fabric texture of the banana print bikini, texture of the yellow sofa cushions, realistic skin texture, details of the flower petals, strands of blonde hair.",
    "imperfections": "Fair skinned tone folds from the sitting pose, realistic lighting reflections in eyes, natural smile lines."
  }
}
```

## Hyper-Realistic Portrait of Sydney Sweeney in Water Splash

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image": {
    "general": {
      "style": "Masterpiece",
      "quality": "Best",
      "photorealism": 1.4,
      "resolution": "8k",
      "aspect_ratio": "3:4"
    },
    "lighting": {
      "type": "Caustic",
      "intensity": "Bright sunlight",
      "contrast": "High",
      "atmosphere": "Refreshing",
      "glistening_water": true
    },
    "photography": {
      "type": "High-speed",
      "focus": "Sharp",
      "details": {
        "water_splash": true,
        "water_drops_freezing_in_air": true,
        "dynamic_splash": true
      }
    },
    "water_effect": {
      "splash": {
        "intensity": 1.3,
        "dynamic": true,
        "droplets": {
          "freezing_in_air": true
        }
      }
    },
    "background": {
      "color": "{argument name="background color" default="Turquoise blue"}",
      "type": "Blurred",
      "style": "Bokeh",
      "vibes": "Summer"
    }
  },
  "subject": {
    "person": {
      "name": "{argument name="person's name" default="Sydney Sweeney"}",
      "pose": "Close-up portrait",
      "expression": "Serene",
      "eyes": {
        "status": "Open",
        "color": "Blue"
      },
      "hair": {
        "color": "Blonde",
        "style": "Slicked back",
        "wet": true
      },
      "skin": {
        "texture": "Natural",
        "freckles": true,
        "wet": true,
        "detailed_features": {
          "pores": true
        }
      },
      "lips": {
        "status": "Wet"
      },
      "body": {
        "shoulders": "Bare",
        "skin": "Wet"
      }
    }
  }
}
```

## Cinematic Fine Art Couple Portrait with Reference Image Locking

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photoreal_cinematic_romantic_fine_art_editorial",
      "version": "v1.1_GALLERY_FRAME_COUPLE_LIFT_EMBRACE_YELLOW_HALTER_SATIN",
      "priority": "highest"
    },

    "references": {
      "reference_image_1": {
        "source": "UPLOAD_REFERENCE_IMAGE",
        "purpose": "POSE_COMPOSITION_LIGHTING_REFERENCE",
        "strict_lock": true,
        "match_reference_priority": "MAX",
        "preserve_pose_geometry": true,
        "preserve_framing_and_cropping": true,
        "preserve_background_structure": true,
        "preserve_mood_and_lighting": true,
        "no_style_drift": true
      },
      "reference_image_2": {
        "source": "UPLOAD_FACE_REFERENCE (OPTIONAL)",
        "purpose": "FACE_IDENTITY_LOCK_FEMALE",
        "strict_lock": true,
        "face_similarity_priority": "MAX",
        "no_identity_blending": true,
        "no_beautify": true,
        "no_age_shift": true,
        "preserve_skin_texture": true,
        "preserve_facial_proportions": true
      },
      "reference_image_3": {
        "source": "UPLOAD_FACE_REFERENCE (OPTIONAL)",
        "purpose": "FACE_IDENTITY_LOCK_MALE",
        "strict_lock": true,
        "face_similarity_priority": "MAX",
        "no_identity_blending": true,
        "no_beautify": true,
        "no_age_shift": true,
        "preserve_skin_texture": true,
        "preserve_facial_proportions": true
      }
    },

    "creative_direction": {
      "concept": "A cinematic, museum-gallery romance scene: a couple in an intimate lift embrace, posed in front of a large ornate framed classical landscape painting. High-end editorial, dramatic but elegant. The woman wears a striking {argument name="dress color" default="yellow"} satin halter-neck gown tied at the back of the neck, with matching yellow high heels.",
      "mood": "intimate, luxurious, timeless, fine-art cinematic",
      "style_keywords": "old-master atmosphere, museum lighting, romantic tension, film still"
    },

    "scene": {
      "location": "museum/gallery interior",
      "background": {
        "hero_object": "a large ornate gold frame containing a classical landscape painting",
        "wall": "warm brown gallery wall",
        "lower_wall": "white wainscoting / panel molding",
        "floor": "dark warm wood"
      },
      "composition": "full-body vertical frame, couple centered, painting fills most of the background"
    },

    "subjects": {
      "male": {
        "wardrobe": "black suit, black trousers, black shoes",
        "pose": "standing, lifting the woman at her waist/thigh, stable posture, looking up at her face"
      },
      "female": {
        "wardrobe": {
          "dress": "yellow silk satin halter-neck gown, neck-tie strap (tied behind the neck), fitted bodice, elegant drape, subtle sheen, high-fashion finish",
          "fabric_notes": "realistic satin highlights, soft folds, premium couture construction"
    }
```

## Cinematic Pottery Studio Couple Embrace Prompt

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photoreal_cinematic_romantic_art_studio_editorial",
      "version": "v1.0_POTTERY_STUDIO_EMBRACE_WARM_FILM",
      "priority": "highest"
    },

    "references": {
      "reference_image_1": {
        "source": "UPLOAD_REFERENCE_IMAGE",
        "purpose": "POSE_COMPOSITION_LIGHTING_ENVIRONMENT_REFERENCE",
        "strict_lock": true,
        "match_reference_priority": "MAX",
        "preserve_subject_overlap": true,
        "preserve_worktable_and_tools_layout": true,
        "preserve_dark_studio_depth": true,
        "preserve_warm_light_direction": true,
        "no_style_drift": true
      },
      "reference_image_2": {
        "source": "UPLOAD_FACE_REFERENCE (OPTIONAL)",
        "purpose": "FACE_IDENTITY_LOCK_FEMALE",
        "strict_lock": true,
        "face_similarity_priority": "MAX",
        "no_identity_blending": true,
        "no_beautify": true,
        "no_age_shift": true,
        "preserve_skin_texture": true,
        "preserve_facial_proportions": true
      },
      "reference_image_3": {
        "source": "UPLOAD_FACE_REFERENCE (OPTIONAL)",
        "purpose": "FACE_IDENTITY_LOCK_MALE",
        "strict_lock": true,
        "face_similarity_priority": "MAX",
        "no_identity_blending": true,
        "no_beautify": true,
        "no_age_shift": true,
        "preserve_skin_texture": true,
        "preserve_facial_proportions": true
      }
    },

    "creative_direction": {
      "concept": "A deeply intimate, warm moment inside a pottery studio: a couple covered in clay embraces closely beside a worktable, captured like a cinematic art-film still.",
      "mood": "sensual warmth, creative intimacy, earthy romance",
      "style_keywords": "artisan studio, tactile realism, cinematic darkness, lived-in art space"
    },

    "scene": {
      "location": "pottery / ceramics studio",
      "background": {
        "walls": "dark studio walls with hanging artworks and tools",
        "details": "ceramic sculptures, jars, brushes, rolling pins, clay blocks",
        "atmosphere": "moody, cozy, artistically cluttered"
      },
      "time": "late afternoon / early evening",
      "lighting": "soft warm practical light + subtle window spill, low-key shadows"
    },

    "subjects": {
      "female": {
        "wardrobe": "light sleeveless top with clay stains, dusty pink apron",
        "hair": "loose dark hair, slightly messy",
        "pose": "sitting or leaning on the worktable, arms around partner’s neck",
        "expression": "eyes closed or soft smile, relaxed and affectionate",
        "details": "clay-covered hands and forearms"
      },
      "male": {
        "wardrobe": "white t-shirt, neutral apron, light trousers",
        "pose": "standing close between her legs or leaning in, one arm around waist",
        "expression": "gentle smile, forehead touching or cheek close",
        "detai"
      }
    }
  }
```

## Instagram Style Velvet Corset Portrait Prompt

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_style": {
    "type": "photorealistic",
    "aesthetic": "Instagram shot",
    "effects": [
      "film grain",
      "direct flash"
    ]
  },
  "composition": {
    "framing": "waist-up photograph",
    "aspect_ratio": "9:16"
  },
  "subject": {
    "description": "young woman",
    "constraint_note": "do not alter the sensitivity of the face and features",
    "pose": {
      "orientation": "facing the camera directly",
      "head": "tilted slightly to the side",
      "eyes": "closed",
      "action": "covering her face with her hand, pulling her elbow away and lifting it to the side",
      "mood": [
        "elegant",
        "pensive",
        "playful"
      ]
    },
    "appearance": {
      "attire": [
        "{argument name="clothing item 1" default="black velvet corset"}",
        "{argument name="clothing item 2" default="expensive black cape"}"
      ],
      "hair": "loose",
      "makeup": {
        "style": "nude",
        "lipstick": "matte nude"
      },
      "details": [
        "décolletage highlighted",
        "long, square black nails"
      ]
    }
  },
  "setting": {
    "background": "white wall",
    "foreground_elements": "art object placed in front of the wall"
  }
}
```

## Hyper-Realistic Paparazzi Flash Portrait Prompt

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
use the exact facial features from the uploaded reference photo, do not alter face shape, eyes,

nose, lips, skin tone or proportions in any way, 0% face modification, identity lock, strict face

preservation hyper-realistic photography, looks like a real paparazzi fashion photo, natural skin

texture with visible pores, fine lines and subtle imperfections, realistic skin sheen, no plastic skin,

high-resolution fashion photograph, sharp focus, ultra-detailed direct

on-camera flash, paparazzi

flash photography, hard frontal flash, harsh shadows, strong highlights, high contrast lighting, flash

overpowering ambient light, slight overexposure on skin highlights, realistic flash falloff shot on fullframe DSLR, 35mm lens, slightly wide perspective, shallow depth of field, handheld camera feeling, candid framing nighttime interior car setting, luxury car back seat, black leather seats,

dark surroundings outside the windows, cinematic night mood, editorial paparazzi aesthetic model

wearing a tailored black pinstripe suit, oversized blazer with structured shoulders, white crisp shirt,

black slim tie, black tailored trousers, silver jewelry: small hoop earrings, subtle bracelet, watch,

makeup: glossy lips, defined eyes, soft contour, natural glow, hair styled in a messy elegant updo

with loose strands framing the face, close-up portrait, candid moment, model laughing softly, eyes

half-closed, head tilted back slightly, natural spontaneous emotion, not posed, direct flash freezing

motion, hair strands caught mid-movement, editorial paparazzi feel
```

## Hyper-Realistic Fashion Portrait Prompt

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_structure": {
    "subject": {
      "description": "Young woman in her 20s, with sun-kissed skin and long, wavy blonde hair blowing gently in the wind",
     "skin": "Fair skin tone",
      "facial_features": "Symmetrical face, soft makeup, glowing highlighter, glossy nude lips, defined eyebrows, piercing gaze looking directly at camera",
      "body": "Fit physique, collarbones visible"
    },
    "clothing": {
      "item": "{argument name="clothing item" default="White mini corset dress"}",
      "details": [
        "Ruffled shoulder straps",
        "Ruched bustier bodice",
        "Bubble hem skirt",
        "Voluminous gathered fabric",
        "Tight waistline"
      ],
      "accessories": "Delicate pearl choker necklace, small stud earrings, thin bracelet on left wrist"
    },
    "pose_and_action": {
      "pose": "Leaning back casually against a stone balustrade, hands resting on the stone railing behind her",
      "posture": "One leg slightly lifted/bent at the knee, relaxed but confident stance",
      "expression": "Sultry, confident, serene"
    },
    "environment": {
      "setting": "Outdoor garden or estate terrace",
      "background": "Lush green trees and foliage, slightly blurred (bokeh)",
      "foreground": "Weathered stone balustrade/railing with classic architectural details"
    },
    "lighting": {
      "type": "Bright natural sunlight (Golden Hour or Mid-day)",
      "characteristics": "High contrast, hard shadows casting definition on the dress folds, strong rim lighting on hair, sun-drenched atmosphere"
    },
    "technical_specifications": {
      "camera_type": "DSLR",
      "lens": "85mm portrait lens",
      "aperture": "f/1.8",
      "focus": "Sharp focus on subject, depth of field blurring the background trees",
      "resolution": "8k, ultra-detailed",
      "film_stock": "Kodak Portra 400 aesthetic"
    },
    "style_modifiers": [
      "Ultra photorealistic",
      "Hyper-realistic skin texture",
      "Subsurface scattering",
      "Ray traced lighting",
      "Masterpiece",
      "Raw photo",
      "Fashion photography",
      "Cinematic lighting"
    ]
  }
}
```

## Forced-Perspective Giant Sneaker Street Scene

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic forced-perspective street photography scene where a giant worn-out sneaker appears enormous in the foreground, towering over a casually dressed young man leaning against it. The man wears a brown leather jacket, loose blue jeans, sneakers, and a beige cap, standing confidently with hands in pockets. Autumn atmosphere with yellow and orange leaves scattered on the road, talltrees with fall foliage in the background, parked car slightly blurred. Ultra-realistic textures on the shoe sole, visible dirt and fabric wear. Shot from a very low angle to exaggerate scale, shallow depth of field, natural daylight, soft cinematic color grading, realistic shadows, high detail, 8K resolution, professional photography, surreal yet believable forced perspective illusion.
```

## Raw High-Contrast Coastal Night Snapshot

> Portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
(Vertical 9:16 smartphone aspect ratio). A raw, high-contrast {argument name="setting" default="Coastal Night Snapshot"} taken with an iPhone 17 Pro. DIRECT HARD OPTICAL FLASH. NO ARTIFICIAL BOKEH. Everything is SHARP and in focus from her eyelashes to the grains of sand in the background.
Subject & Identity Locking (CRITICAL):
•Identity: Strictly preserve the exact heart-shaped facial structure, eye shape, and unique features of the woman in Image 1 (Selfie).
•Bio-Fidelity: Render high-fidelity "TrueLens" skin physics: visible micro-pores, natural "satin-finish" night hydration (mixed with sea-mist), and fine vellus hair catching the light ONLY along the jawline. Her legs feature a healthy, radiant oil sheen under the direct flash.
•Expression: Looking directly into the lens with a magnetic, "Pinterest-style" sultry gaze and a soft smirk. Her voluminous chestnut hair is messy and wind-blown, with individual strands catching the optical flash.
•Silhouette Calibration (MAXIMUM UFF-FACTOR): Amplify the dominant structural bust volume and the substantial, thick-toned leg presence. Focus on the aggressive hourglass structural tapering at the waist.
Outfit & Material Realism:
•Clothing: A skin-tight, {argument name="clothing color" default="White Ribbed-Knit Triangle Bikini Set"} layered under an open, oversized white linen shirt that is blowing naturally in the breeze.
•Tension: The ribbed fabric shows extreme mechanical tension and a vacuum-tight fit, creating realistic textural expansion and "tension lines" where the straps contour to her fit silhouette.
•Physics: Realistic skin-to-surface compression (thigh squish) is visible where her form leans against a weathered wooden pier pillar.
Pose & Composition (NOT A SELFIE):
•Pose: She is standing on the beach, leaning her back against a large wooden pillar. She is performing an aggressive 3/4 side-profile twist toward the photographer, arching her back significantly to maximize the high-impact S-curve silhouette.
•Action: Captured by a third person using the 0.5x wide-angle lens to elongate her fit physique and highlight her substantial lower-body volume. Her hands are free, one gracefully touching the collar of the linen shirt.
Environment & Lighting:
•Lighting: Hard Direct Smartphone Flash. The light creates brilliant white specular highlights on the white fabric and her hydrated skin, casting a sharp, pitch-black shadow of her form onto the wooden pillar behind her.
•Background (SHARP): A detailed night beach setting. The textured grain of the wooden pillar, dark damp sand, and the white foam of a breaking wave in the distance are all perfectly IN FOCUS. No artificial depth-of-field.
Quality: Raw unedited social-media "vacation dump" aesthetic, high dynamic range, visible digital grain in the deep shadows (ISO 1600 style), 8k resolution. Single frame.
```

## Raw High-Contrast Night Documentation Portrait

> Mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
(Vertical 9:16 smartphone aspect ratio). A raw, high-contrast {argument name="setting" default="Urban/Coastal Night Documentation"} captured with an iPhone 17 Pro. DIRECT HARD PHOTON FLASH. NO ARTIFICIAL BOKEH. Everything remains SHARP and in focus from the subject's eyelashes to the textured ground.
Subject & Identity Locking:
•Identity: Strictly preserve the exact face and unique features of the person in Image 1.
•Bio-Fidelity: Render high-fidelity "TrueLens" biological rendering: visible micro-pores, natural "satin-finish" night hydration, and a healthy cold-induced chromatic flush on the cheeks. Fine vellus hair catching the light ONLY along the jawline.
•Hair Reality: Strands of voluminous hair are captured in a dynamic mid-motion state, partially veiling the facial features naturally due to air current.
•Silhouette Calibration: Prioritize a dominant structural upper-torso volume and substantial hip-width anatomical depth. Focus on an aggressive architectural tapering at the midsection to maximize the S-curve geometry.
Outfit & Matter Physics:
•Clothing: A high-density {argument name="clothing color and pattern" default="Orange and White Floral-Patterned Underwire Bodice Top"} paired with unfastened, low-slung denim lower-apparel.
•Tension: The technical fabric exhibits extreme mechanical tension and a vacuum-tight fit, creating realistic textural expansion and skin-to-textile indentations where the material contours to her fit form.
•Physics: Realistic anatomical interaction where the structured bodice defines the fit, symmetrical volume of the upper physique.
Pose & Composition:
•Pose: Captured in an aggressive S-curve alignment. She is standing with bilateral hand-to-hip positioning, arching her spine to maximize the structural prominence of her silhouette.
•Action: Captured by a third person at a medium distance. Her hands are positioned to emphasize the high-impact proportions of her form.
Environment & Social Realism:
•Lighting: Hard Direct Optical Flash. The light creates brilliant high-key specular highlights on her skin and the floral textile, casting sharp, pitch-black shadows that define her 3D volume.
•Background (SHARP): A dark, unilluminated coastal setting. The sharp texture of the granular ground at her feet is perfectly IN FOCUS. No artificial blur.
Quality: Raw unedited social-media dump aesthetic, high dynamic range, visible digital grain in the deep shadows (ISO 1600 style), 8k resolution. Everything is sharp, detailed, and physically real.
```

## Ultra-realistic Indian Couple Cooking Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "descriptive_portrait",
  "subject_details": {
    "demographics": "Young Indian couple (male and female), warm natural skin tones, fit and healthy builds.",
    "facial_features": {
      "expression": "Laughing naturally together, candid and joyful moment, smudges of white wheat flour (atta) on their cheeks and noses.",
      "eyes": "Bright and expressive, looking at each other or at the dough.",
      "hair": "Woman: Messy bun or loose hair, casual home style. Man: Short, neat casual hair."
    },
    "apparel": {
      "dress": "Woman: Casual cotton Kurti or comfortable home t-shirt. Man: Plain casual t-shirt and track pants or shorts.",
      "accessories": "Minimal (e.g., simple earrings on the woman).",
      "footwear": "Barefoot or home slippers."
    }
  },
  "pose_and_action": {
    "body_position": "Standing together at the kitchen counter. One person is using a rolling pin (belan) to roll out a roti, while the other leans in closely, helping or playful teasing.",
    "hands": "Hands dusted with dry wheat flour, actively engaging with the dough."
  },
  "background_environment": {
    "location": "Modern Indian kitchen.",
    "lighting_source": "Warm, bright overhead kitchen lighting.",
    "objects": {
      "details": "Wooden rolling board (chakla), rolling pin (belan), stainless steel container (dabba) of wheat flour, flat tawa skillet on the gas stove in the background, small bowl of ghee."
    }
  },
  "technical_specs": {
    "style": "Candid, domestic, ultra-realistic, high detail on flour texture and skin pores, cinematic lighting.",
    "aspect_ratio": "4:5"
  },
  "constraints": [
    "Maintain natural Indian features",
    "No facial reshaping or artificial filters",
    "Realistic representation of roti making process",
    "Natural domestic atmosphere"
  ],
  "output_goal": "Create a heartwarming, ultra-realistic portrait of a young Indian couple cooking together, capturing a candid moment of laughter while making rotis in a messy but cozy kitchen."
}
```

## Cinematic Neon Night Street Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic nighttime street portrait of a handsome man standing alone on a rain-soaked city street, surrounded by glowing neon signs and blurred traffic lights. He wears a dark wool coat, hair neatly styled, light stubble beard, and gazes intensely at the camera with a calm, confident expression. Wet pavement reflects colorful neon lights in blues, reds, and yellows. Moody urban atmosphere, soft rain falling, dramatic low-key lighting, strong contrast between warm neon and cool shadows. Shallow depth of field, creamy bokeh background, realistic skin texture, cinematic color grading, 50mm lens look, ultra-realistic photography, film-still aesthetic, 8k detail.
```

## Japanese 'Girlfriend' Aesthetic Portrait Prompt

> Fotogerçekçi, retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"prompt_configuration": {
"art_style": "Japanese 'Girlfriend' aesthetic (Kanojo-kan), high-quality lifestyle photography, soft-focus airy realism, slice-of-life snapshot, cozy autumn atmosphere",
"aspect_ratio": "--ar 2:3",
"stylization": "--stylize 400",
"mood_and_tone": "Serene, heartwarming, sweet, nostalgic, intimate, soft and relaxing, gentle sunlight"
},
"visual_elements": {
"subject_description": {
"appearance": "Charming young woman with a youthful and innocent visage, soft porcelain skin, shoulder-length chestnut brown bob hair with airy 'see-through' bangs framing the face",
"expression": "Gentle, shy yet affectionate eye contact, looking back over the shoulder with a soft, welcoming smile"
},
"apparel_and_accessories": {
"upper_body": "Oversized {argument name="sweater color" default="cream-colored"} cable-knit sweater, chunky wool texture, voluminous balloon sleeves bunching softly at the wrists, exuding comfort and warmth",
"lower_body": "Short burgundy A-line mini skirt made of textured wool or corduroy, creating a rich autumnal color contrast",
"legwear": "Sheer black pantyhose (approx. 20 denier), translucent and smooth texture, adding a touch of elegant maturity to the cozy outfit"
},
"pose_and_composition": {
"pose": "Standing with back turned towards the camera but twisting upper torso to glance backward (looking over shoulder), dynamic yet natural posture",
"framing": "Medium shot (thigh-up), focusing on the interaction between her gaze and the viewer"
},
"environment_context": {
"setting": "Quiet corner of a rustic cafe or a peaceful school break room",
"background_elements": "Large window with a white grid frame, lush green foliage visible outside but heavily blurred (bokeh), a wooden table in the foreground holding a ceramic mug with steam and an open notebook"
}
},
"technical_details": {
"lighting_setup": "Diffused natural window light coming from the background (backlighting/rim light), creating a halo effect on the hair, soft fill light on the face to eliminate harsh shadows",
"camera_settings": "Shot on Sony A7III, 85mm f/1.4 portrait lens, shallow depth of field to isolate the subject from the background",
"image_quality": "8k resolution, photorealistic, fine fabric textures, soft film grain simulation, high dynamic range"
}
}
```

## Contrasting Winter Bikini Portrait Prompt

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "description": "Young woman with deep tan skin and visible freckles standing outdoors in winter. She has medium-length dirty blonde hair with honey highlights, center-parted and styled in loose, textured waves. Her physique is hourglass-shaped, fit, and toned with visible abdominal definition and a narrow waist.",
    "attire": "A mint green strapless bandeau bikini top with gathered ruching in the center, and matching high-cut bikini bottoms with thin side straps. She is wearing white ribbed knit arm warmers that cover her forearms and palms, leaving fingers exposed.",
    "anatomical_details": "Bust volume is full and heavy, visually matching the reference with clear forward projection and natural gravity. Chest depth is significantly greater than ribcage depth. Shoulders are smooth and tanned with a slight sheen suggesting moisturizer or oil. Skin texture includes high-resolution pores, moles, and freckles, specifically across the nose and cheeks."
  },
  "pose": {
    "orientation": "Standing fully frontal facing the camera.",
    "posture": "Spine is straight, shoulders are relaxed and level. Weight is evenly distributed but slightly settled into the hips.",
    "limbs": "Right arm hangs naturally by the side, straight down. Left arm is bent at the elbow with the left hand resting on the upper left hip/thigh area. Fingers are relaxed.",
    "head_and_gaze": "Head is upright, facing forward. Eyes look directly into the lens with a calm, neutral expression. Lips are soft and slightly parted."
  },
  "environment": {
    "setting": "Residential backyard in winter.",
    "ground": "Covered in a layer of fresh white snow.",
    "structures": "A dark stained wooden pergola or trellis structure stands directly above and behind the subject, with snow resting on its top slats. A wooden privacy fence runs horizontally in the background.",
    "foliage": "Leafless deciduous trees visible in the background behind the fence, indicating winter season."
  },
  "camera": {
    "shot_type": "Medium shot, framing from the mid-thighs up to the top of the head.",
    "perspective": "Eye-level angle.",
    "focal_length": "50mm to 85mm portrait lens.",
    "depth_of_field": "Subject is in sharp focus; background (fence and trees) is slightly softened but distinct enough to identify details."
  },
  "lighting": {
    "type": "Natural overcast daylight.",
    "quality": "Soft, diffuse, and shadowless. No harsh directional sunlight.",
    "direction": "Global illumination from the sky.",
    "skin_interaction": "Light reflects softly off the tanned skin, creating subtle specular highlights on the upper chest, shoulders, and forehead. Subsurface scattering is natural."
  },
  "mood_and_expression": {
    "emotion": "Confident, calm, and composed.",
    "vibe": "Contrast between the cold snowy environment and the revealing swimwear.",
    "gaze": "Direct, engaging, and "
  }
```

## Triptych Portrait with Strict Identity Lock

> Portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_generation_prompt",
  "format": "triptych",
  "aspect_ratio": "vertical, three stacked panels",
  "identity_preservation": {
    "use_original_image_reference": true,
    "strict_identity_lock": true,
    "face_changes_allowed": false,
    "clothing_changes_allowed": false,
    "notes": "Maintain 100% original facial structure, proportions, moles, eyes, nose, mouth, skin texture, hairstyle, and original clothing exactly as in the reference image."
  },
  "subject": {
    "gender": "female",
    "appearance": {
      "hair": {
        "style": "dark, tousled hair",
        "details": "natural movement with a few strands lifted by breeze"
      },
      "expression_style": "natural, candid, introspective"
    }
  },
  "composition": {
    "layout": "three vertically stacked photographs (triptych)",
    "background": "bright, clear blue sky",
    "setting": "outdoor, rooftop-like environment"
  },
  "panels": {
    "top_panel": {
      "camera_angle": "low angle",
      "pose"
```

## Hyper-Realistic Cinematic Gym Portrait Prompt (Fictional Model)

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "task": "image_generation",
  "style": {
    "resolution": "8K",
    "look": "hyper-realistic, cinematic",
    "photorealism": true
  },
  "subject": {
    "identity": "fictional fitness model",
    "inspiration": "celebrity-inspired (non-identical, no face matching)",
    "gender": "female",
    "skin_tone": "fair",
    "pose": {
      "view": "3/4 rear",
      "posture": "arched back",
      "head_direction": "looking over shoulder"
    },
    "expression": "serious",
    "makeup": {
      "eyeliner": "winged",
      "finish": "natural cinematic"
    },
    "hair": {
      "color": "honey-brown",
      "style": "bun",
      "accessory": "hair clip"
    }
  },
  "wardrobe": {
    "top": {
      "type": "sports bra",
      "color": "grey",
      "design": "multi-strap"
    },
    "bottom": {
      "type": "shorts",
      "fit": "tight, high-waist",
      "texture": "ribbed",
      "color": "brown"
    },
    "socks": {
      "type": "thigh-high",
      "color": "black",
      "details": "red stripes"
    }
  },
  "environment": {
    "location": "gym",
    "background_elements": [
      "red metal rack"
    ],
    "atmosphere": "cinematic, moody"
  },
  "camera": {
    "lens": "85mm",
    "depth_of_field": "shallow",
    "focus": "sharp on subject"
  },
  "lighting": {
    "type": "cinematic",
    "key": "soft directional",
    "contrast": "high",
    "highlights": "controlled"
  },
  "detail": {
    "skin": "ultra-detailed, realistic texture",
    "fabric": "high micro-detail"
  },
  "composition": {
    "aspect_ratio": "3:4",
    "framing": "portrait"
  },
  "constraints": {
    "no_real_person_identity": true,
    "no_face_matching": true
  }
}
```

## Couple Photo Transformation Prompts (Wedding/Pre-Wedding)

> Sinematik, minimal mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Prompt 1:
"A couple (use faces from the photo i uploaded) embracing passionately, bride in an off-the-shoulder white dress and groom in a black tuxedo, intimate moment captured in a moody, dimly lit interior, soft warm candlelight illuminating their faces, seen through a slightly smudged or dusty window pane, reflections and foreground blur from the glass, dark shadows Selective focus, cinematic, candid wedding photography, classic film grain, low light, warm tones, high contrast, golden hour interior."

Prompt 2:
"Without changing the face and keeping it 100% identical to the original, create a photo according to the following description. The image is a vertical three-panel collage (a vertical triptych) showing a bride and groom in a casual pre-wedding concept on a Japanese or East Asian street. In the top panel, the man is carrying the woman on his back in a piggyback ride. The man turns toward the camera with a playful duck-face expression, while the woman rests on his shoulder and pouts cutely. The woman holds a bouquet of white daisies in her left hand. The man wears a casual white shirt, and the woman wears a simple white dress with a short veil. In the middle panel, there is an extreme close-up of both of their faces pressed tightly together so that their cheeks are squished. The man squints his eyes and makes a funny grimacing expression, while the woman looks sideways with wide eyes. Skin pores and facial texture are clearly visible and look very natural, with no heavy filters. In the bottom panel, the scene takes place at a bus stop or roadside area with lush green trees in the background. The woman leans her body forward playfully with her hands behind her back next to a bus stop pole, while the man stands casually beside her, looking toward the woman or ahead. The overall mood is very candid, like an ordinary date moment, but with both of them wearing wedding outfits."

Prompt 3:
"A three-panel vertical photo collage of a romantic pre-wedding couple in an outdoor 1990s vintage style. Each panel presents a different cinematic pose. The setting is a lush garden and an old European-style park filled with trees and flowers, lit by warm sunlight. The couple wears elegant 1990s vintage outfits. The man wears a {argument name="suit color" default="beige or brown"} classic suit with a relaxed fit, a loose white shirt slightly open at the collar, a thin soft vintage tie, polished leather shoes, and a natural classic hairstyle. The woman wears a 1990s vintage bridal dress made of lace and satin, in soft pastel, cream, or ivory tones, with puff sleeves, a corset-style fitted waist, and a long flowing skirt. She accessorizes with a pearl necklace and earrings, a delicate veil or hair ribbon, and natural makeup with rosy cheeks, glossy lips, and softly glowing skin.
The overall visual style features warm nostal
```

## Hyperrealistic Portrait with Monochrome Profile Background

> Fotogerçekçi, lüks moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Using the provided photos, create a highly detailed, professional, hyperrealistic art portrait, keeping the face intact. The woman sits elegantly on the floor, wearing a modern black top, soft, loose gray jeans, and chunky, fashionable gray sneakers. She has long, wavy, waist-length hair, half of which is braided. She has a laughing expression, and her gaze is directed upward.

The background should be an artistic monochrome composition (black and white) depicting a soft close-up from the side of the same face in profile
```

## Structured Minimalist Winter Portrait Prompt

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "project_name": "Winter Minimalist Portrait",
    "model_type": "ultra-realistic-photography",
    "aspect_ratio": "2:3"
  },
  "prompt_structure": {
    "subject_details": {
      "demographics": "young woman",
      "hair": "{argument name="hair color" default="platinum blonde"}, long, straight",
      "skin": "fair porcelain skin, soft natural freckles, high detail skin texture",
      "eyes": "expressive light-colored eyes, looking directly into the camera",
      "makeup": "light pink blush, glossy lips",
      "pose": "standing, slightly leaning forward"
    },
    "apparel": {
      "style_genre": "minimalist winter fashion",
      "body": "fitted black long-sleeve bodysuit",
      "accessories": "white furry leg warmers",
      "footwear": "white boots"
    },
    "environment": {
      "location": "outdoors, snowy forest",
      "background": "pine trees",
      "ground": "snow-covered",
      "atmosphere": "crisp winter atmosphere"
    },
    "technical_settings": {
      "lighting": "bright natural daylight, soft shadows",
      "camera_gear": "35mm lens",
      "aperture": "f/2.2",
      "focus": "shallow depth of field, sharp focus on eyes",
      "style_tags": [
        "photorealistic",
        "lifestyle fashion photography",
        "ultra-detailed",
        "8k resolution"
      ]
    }
  },
  "negative_prompt": [
    "low quality",
    "blur",
    "cartoon",
    "anime",
    "CGI",
    "plastic skin",
    "over-smooth face",
    "distorted body",
    "extra limbs",
    "bad hands",
    "watermark",
    "text",
    "logo"
  ],
  "assembled_prompt": "Ultra-realistic winter portrait of a young woman, platinum blonde long straight hair, fair porcelain skin, soft natural freckles, high detail skin texture, light pink blush, glossy lips, expressive light-colored eyes looking directly into the camera, standing, slightly leaning forward, fitted black long-sleeve bodysuit, white furry leg warmers, white boots, minimalist winter fashion, outdoors, snowy forest, pine trees, snow-covered ground, bright natural daylight, soft shadows, crisp winter atmosphere, 35mm lens, f/2.2, shallow depth of field, photorealistic, lifestyle fashion photography, ultra-detailed, sharp focus, 8k resolution"
}
```

## Hyper-Detailed Saree Portrait with Anatomical Realism Prompt

> Fotogerçekçi mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{ "output_schema": { "metadata": { "camera_simulation": { "brand_model": "iPhone 16 Pro Max (ProRAW)", "lens_characteristics": "Sharp central optics with slight field curvature and edge softness; subtle chromatic aberration in high-contrast embroidery edges", "focal_length_mm": "35mm (documentary/natural perspective)", "aperture_f": "f/1.8 (creamy bokeh with sharp subject focus)", "shutter_speed": "1/200 (frozen posture with natural skin softness)", "ISO_and_Grain": "ISO 400 with fine Luminance noise and digital sensor banding in deep blacks", "distance_estimate": "Close-up portrait (approx. 1 meter)" }, "lighting_physics": { "primary_source": "Softbox with warm 3200K temperature, side-angled to create depth", "subsurface_scattering": "High; light passing through ears and fingertips creating a red-orange internal glow", "global_illumination": "Warm bounce light from the gold embroidery reflecting onto the chin and jawline", "light_modifiers": "Diffusion silk to soften highlights on the forehead and nose", "color_temperature_k": "3200K (Warm interior glow)", "volumetric_lighting": "Subtle Bloom around the earring highlights", "specular_highlights": "Oil sheen on the T-zone and moisture glint in the axilla and midriff" } }, "composition_and_framing": { "aspect_ratio": "9:16 (Social/Mobile)", "camera_angles": "Chest-level, slightly low-angle to emphasize the powerful physique", "framing_technique": "Intimate close-up; hands behind head framing the face", "subject_geometry": "Central symmetry with leading curves of the raised arms", "background_depth": "Layered focus: sharp subject, soft-blurred warm architectural background" }, "subject_physiometry": { "demographics_and_build": { "age_estimate": "29-30 years old", "ethnicity_specifics": "South Indian (Malayali), warm olive skin undertones, thick dark hair, recognizable facial geometry of Nivetha Thomas", "body_type_category": "Soft-curvy, fuller/meaty build (2024 era)", "anthropometric_ratios": "Strong biacromial width; soft waist-to-hip ratio with natural padding" }, "skeletal_and_muscular_detail": { "skeletal_prominence": "Visible clavicles and subtle scapula protrusion as arms are raised", "muscle_engagement": "Tensed biceps and flexed serratus anterior under the arms", "postural_dynamics": "Arms raised above head, causing the skin at the waist to stretch and the rib-cage to become slightly visible" }, "micro_epidermal_texture": { "skin_state": "Visible pores, vellus hair on forearms, goosebumps on the neck", "imperfections": "Small moles on the neck, pressure marks from the saree blouse, skin-on-skin redness in the axilla", "hydration_level": "Dewy; fine sweat beads on the forehead and midriff", "subcutaneous_detail": "Subtle blue veins visible on the inner wrists and temple" }, "axilla_and_localized_detail": { "armpit_aesthetics": "Deep axillary fossa, realistic skin-fold layering, razor-smooth with a moist sheen", "sweat_physics": "V" } }
```

## East Asian Woman Beach Portrait at Sunset

> Fotogerçekçi moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A stunning young East Asian woman, with deep brown wavy hair that reaches her chest and flutters in the wind. Her skin is fair and shiny, with a sexy and fresh makeup look. She is wearing a loose white linen shirt that is completely open (sleeves rolled up), paired with a black bikini top and black high waisted bikini underwear. During prime time sunset by the sea, she holds her head up high to stroke her hair, lazily and confidently looking straight at the camera. The background is calm sea and distant mountains, with a soft orange pink sunset sky and clouds, creating a romantic and dreamy atmosphere with high highlights on the edges of her hair and body. Her shirt is wrinkled, her skin is glossy, and the sea reflects extreme details. Her photography level realistic fashion portrait is {argument name="resolution" default="8K"}.
```

## Edgy Asian Couple Portrait with Mismatched Boots and Flash Lighting

> Moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
"Young Asian couple, cool/edgy fashion models.",
      "female_hair": "Long, black, naturally little wavy hair (soft waves, not crimped), smooth texture with flyaways.",
      "male_hair": "Short, black, textured messy cut.",
      "outfits": {
        "female": "Grey crop top, black shorts, bare legs.",
        "male": "Blue denim jacket, black t-shirt, silver chain, blue jeans (one leg rolled up), mismatched boots ({argument name="left boot style" default="black combat boot"} on left, {argument name="right boot style" default="tan work boot"} on right)."
      }
    },
    "exact_pose_anatomical": {
      "male_pose": {
        "position": "Seated on the floor, facing forward.",
        "legs": "Left leg bent at knee, foot planted flat. Right leg bent inwards (cross-legged style) resting on the floor.",
        "arms": "Right arm resting casually on his own right knee. Left arm reaching up and back to hold the female's thigh securely.",
        "posture": "Leaning slightly forward, relaxed spine."
      },
      "female_pose": {
        "position": "Perched/Kneeling directly behind the male subject.",
        "legs": "Straddling the male subject's left shoulder. Her left thigh is draped over his shoulder, shin hanging down in front of his chest. Her right leg is tucked behind him (kneeling on the floor).",
        "arms": "Right hand resting on top of the male's right shoulder for balance. Left arm obscured.",
        "posture": "Torso upright, looming over the male figure.",
        "head": "Tilted slightly to the left, chin up."
      }
    },
    "camera_technical_values": {
      "perspective": "Low Angle / Eye-level with seated subjects.",
      "focal_length": "35mm (Capturing the full interaction and wall context).",
      "lighting": "Direct On-Camera Flash. Hard shadows cast directly behind the subjects on the wall.",
      "environment": "White wall with taped B&W photos and vintage book pages ('de PARIS'). Wooden floor."
```

## Tropical Resort Bikini Editorial Prompt

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "main_prompt": "stunning young woman in her mid-20s, luxurious tropical resort poolside, sitting cross-legged on a light beige linen towel on the edge of an infinity pool, drinking fresh coconut water through a straw directly from a real green coconut with mint leaf garnish, playful seductive expression with slight pout and direct eye contact with camera, full natural lips, glossy nude-pink lipstick, long voluminous beachy blonde wavy hair with golden highlights cascading over shoulders, sun-kissed tanned olive skin with natural glow, wearing skimpy metallic {argument name="bikini color" default="bronze/gold shimmer"} triangle bikini top and matching side-tie bottoms, high-cut Brazilian style, subtle cleavage and toned abs visible, multiple silver rings on fingers, black glossy nail polish, statement silver bracelet with large green gemstone (emerald or malachite), thin silver anklet, luxury watch with green face visible on wrist, blue ribbon tied somewhere on outfit, luxury resort background: large modern white and beige buildings with glass railings, multiple tall palm trees, thatched umbrellas, wooden deck loungers with beige cushions, clay pots with plants, people lounging in background blurred, bright sunny day, turquoise clear pool water with gentle ripples, golden hour warm sunlight, strong rim light and soft fill light, lens flare subtle, cinematic color grading with warm golden tones and cool blue water contrast, photorealistic, ultra-detailed skin texture with visible pores and sun-kissed freckles, realistic wet skin sheen from pool water, film grain, shot on Sony A1 with 85mm f/1.4 lens, shallow depth of field, sharp focus on face and coconut, dreamy vacation luxury vibe, high fashion editorial style",
  "negative_prompt": "blurry, lowres, deformed hands, extra fingers, bad anatomy, fused fingers, poorly drawn face, bad proportions, extra limbs, mutated hands, ugly, disfigured, tiling, out of frame, jpeg artifacts, signature, watermark, text, error, cropped, worst quality, low quality, cartoon, 3d render, plastic skin, doll-like, airbrushed, overexposed, underexposed, flat lighting, harsh midday shadows, pale skin, no tan, winter clothing, indoor setting, messy room, cigarettes, alcohol bottles, heavy makeup, clown makeup, exaggerated filters, instagram face, duck lips, visible stretch marks unless natural, obese, elderly, child, male, group shot focus, cluttered foreground, ugly resort, cheap plastic furniture, cloudy day, night time, cold color palette, desaturated, monochrome",
  "style_tags": [
    "photorealistic",
    "luxury fashion photography",
    "tropical resort editorial",
    "high-end vacation vibe",
    "golden hour glamour",
    "beach luxury aesthetic",
    "sun-drenched",
    "cinematic portrait",
    "film photography look",
    "35mm film grain",
    "Vogue / Harper's Bazaar style"
  ],
  "technical": {
    "aspect_ratio": "4:5 (vertical portrait, Instagram / mobile photo style)",
    "lighting": "bright golden hour sunlight from"
  }
```

## Nano Banana Pro Manga Generation - Christmas Present Theme

> Çizgi roman karesi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Today's theme is {argument name="theme" default="Christmas present"}
```

## Film Aesthetic Triptych Portrait with Identity Lock

> Portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_generation_prompt",
  "format": "triptych",
  "aspect_ratio": "vertical, three stacked panels",
  "identity_preservation": {
    "use_original_image_reference": true,
    "strict_identity_lock": true,
    "face_changes_allowed": false,
    "clothing_changes_allowed": false,
    "notes": "Maintain 100% original facial structure, proportions, moles, eyes, nose, mouth, skin texture, hairstyle, and original clothing exactly as in the reference image."
  },
  "subject": {
    "gender": "female",
    "appearance": {
      "hair": {
        "style": "dark, tousled hair",
        "details": "natural movement with a few strands lifted by breeze"
      },
      "expression_style": "natural, candid, introspective"
    }
  },
  "composition": {
    "layout": "three vertically stacked photographs (triptych)",
    "background": "bright, clear blue sky",
    "setting": "outdoor, rooftop-like environment"
  },
  "panels": {
    "top_panel": {
      "camera_angle": "low angle",
      "pose": "looking down toward the camera",
      "expression": "direct, slightly pensive gaze",
      "lighting": "bright sunlight illuminating one side of face and shoulder with soft shadows"
    },
    "middle_panel": {
      "camera_angle": "eye-level to slightly low",
      "pose": "head turned away, gazing to the right",
      "expression": "thoughtful, distant",
      "environment_detail": "small portion of brown columned roof visible in lower left",
      "composition_note": "subject slightly off-center emphasizing open sky"
    },
    "bottom_panel": {
      "camera_angle": "close-up profile",
      "pose": "eyes closed, head slightly tilted back",
      "expression": "calm, reflective",
      "lighting": "sunlight accentuating facial and neck contours"
    }
  },
  "camera": {
    "type": "35mm film camera aesthetic",
    "lens_aperture": "f/1.8–f/2.8",
    "focus": "sharp focus on face with shallow depth of field",
    "grain": "visible natural film grain"
  },
  "lighting": {
    "source": "natural daylight",
    "time_of_day": "afternoon",
    "quality": "soft, diffused sunlight",
    "direction": "front and side lighting",
    "artificial_light": "none"
  },
  "color_and_style": {
    "palette": [
      "vivid blue sky",
      "warm natural skin tones"
    ],
    "style": "editorial portrait with analog film aesthetic",
    "atmosphere": "calm, airy, serene, nostalgic",
    "contrast": "subtle",
    "saturation": "natural with slight enhancement"
  },
  "quality": {
    "realism": "high",
    "detail": "natural skin texture, realistic lighting",
    "imperfections": "preserved"
  },
  "constraints": [
    "No facial alterations",
    "No clothing changes",
    "No artificial lighting",
    "No digital beauty filters",
    "No CGI or illustration",
    "No text or watermarks"
  ],
  "output_goal": "Create a serene, film-like triptych portrait of the same woman against a clear blue sky, preserving her exact identity, clothing, and natura"
}
```

## Candid Coquette Summer Portrait on Italian Terrace

> Fotogerçekçi, retro moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "Ultra Photorealistic Image Generation",
  "subject": {
    "description": "Young woman with long, straight dark brown hair cascading down her back",
    "skin_tone": "Sun-kissed, glowing complexion",
    "features": "Side profile visible, smiling/laughing expression, hands raised covering eyes/face playfully",
    "details": "Red manicured fingernails, subtle jewelry including a ring on the left hand and a thin bracelet"
  },
  "fashion_and_styling": {
    "outfit": "White, vintage-inspired corset-style mini dress with Swiss dot texture",
    "garment_details": "Sweetheart neckline, ruffled cap sleeves, front lace-up ribbon detailing, fitted bodice, ruffled hem, slightly sheer fabric",
    "aesthetic": "Coquette, cottagecore, soft feminine luxury, summer vacation style"
  },
  "pose_and_action": {
    "pose": "Seated elegantly on a chair, body angled slightly away from the camera",
    "gesture": "Both hands raised to shield eyes from the sun or in a candid moment of laughter, head tilted back slightly",
    "interaction": "Relaxed posture sitting at a cafe table"
  },
  "environment": {
    "setting": "Outdoor luxury hotel terrace or cafe balcony overlooking a scenic landscape",
    "background_elements": "Historic yellow building with '{argument name="hotel name" default="HOTEL FLORENCE"}' signage, lush green mountains in the distance, cloudy blue sky, vintage globe street lamps",
    "foreground_elements": "Round glass-top table, black wrought-iron garden chairs",
    "props": "Two white ceramic coffee cups on saucers, a paperback book lying on the table"
  },
  "lighting": {
    "type": "Natural bright daylight, afternoon sun",
    "quality": "High contrast, casting sharp shadows on the table, backlighting on hair creating a halo effect, sun-drenched atmosphere",
    "direction": "Side/Front lighting illuminating the subject"
  },
  "mood_and_atmosphere": {
    "vibe": "Joyful, candid, luxurious, carefree, Italian summer holiday",
    "emotion": "Happiness, relaxation, playfulness"
  },
  "technical_camera_details": {
    "quality": "8k resolution, RAW photo, hyper-realistic, highly detailed texture",
    "camera_simulation": "DSLR, 85mm portrait lens",
    "aperture": "f/2.8 (shallow depth of field to blur the background mountains and hotel)",
    "shutter_speed": "1/500s (to freeze the candid movement)",
    "iso": "100 (clean, noise-free image)",
    "color_grading": "Vibrant, natural colors with slightly warm tones, clear whites"
  }
}
```

## Dreamy Autumnal Portrait of a Young Woman

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "type": "Young woman",
    "appearance": {
      "skin_tone": "Very fair, pale complexion",
      "expression": "Peaceful, eyes opened little bit, soft smile, relaxed",
      "hair": {
        "style": "Long, wavy, messy but aesthetic",
        "color": "Split-dyed or two-tone; vibrant pumpkin orange on the top layer and platinum blonde underneath",
        "arrangement": "Spread out around her head like a halo"
      }
    },
    "pose": "Lying supine on the ground, one hand gently raised near her face holding a small dried leaf by the stem"
  },
  "clothing": {
    "top": "Brown chunky knit sweater or cardigan",
    "texture": "Woolen, soft, cozy"
  },
  "environment": {
    "setting": "Outdoor ground covered in dry autumn leaves",
    "elements": "Fallen brown and orange maple leaves, rustic texture"
  },
  "technical_details": {
    "camera_angle": "Top-down view (flat lay), close-up portrait",
    "aspect_ratio":"5:6",
    "lighting": "Soft natural daylight, diffused, warm autumnal tones",
    "style": "Dreamy, ethereal, photorealistic, high resolution, cozy autumn aesthetic"
  }
}
```

## Food Action Photography Series Prompt (Cheese Pull, Syrup Drip)

> Sinematik yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "aspect_ratio": "3:4",
  "render_mode": "raw",
  "series": [
    {
      "index": "1/5",
      "prompt": "two hands pulling apart a hot freshly baked pizza slice, long elastic mozzarella cheese stretch between the slice and the pie, blistered crust edges, steam rising, crumbs falling mid-air, warm cinematic light, ultra high-detail food action photography",
      "category": "cheese pull",
      "lighting": "warm cinematic oven light",
      "detail_level": "ultra-detailed"
    },
    {
      "index": "2/5",
      "prompt": "two hands pulling apart a syrup-soaked baklava piece, thin crispy phyllo layers cracking, rich pistachio filling visible, thick honey syrup stretching and dripping mid-air, golden warm light, cinematic dessert action photography",
      "category": "syrup & crunch",
      "lighting": "golden warm light",
      "detail_level": "ultra-detailed"
    },
    {
      "index": "3/5",
      "prompt": "two hands breaking a molten chocolate lava cake in half, glossy dark chocolate flowing out from the center, steam rising gently, crumbs suspended mid-air, soft warm spotlight, cinematic dessert action photography",
      "category": "molten chocolate",
      "lighting": "soft warm spotlight",
      "detail_level": "ultra-detailed"
    },
    {
      "index": "4/5",
      "prompt": "two hands tearing a glazed cinnamon roll apart, sticky cinnamon sugar filling stretching in glossy strands, icing dripping slowly, fluffy dough texture visible, cozy warm bakery light, high-detail cinematic food photography",
      "category": "sticky pull",
      "lighting": "warm bakery light",
      "detail_level": "ultra-detailed"
    },
    {
      "index": "5/5",
      "prompt": "two hands splitting a classic New York-style cheesecake slice, ultra-creamy interior slowly separating, crumbly biscuit base breaking apart, subtle cream stretch, soft studio warm light, cinematic high-detail dessert photography",
      "category": "creamy separation",
      "lighting": "soft warm studio light",
      "detail_level": "ultra-detailed"
    }
  ]
}
```

## Candid Retro-Chic Car Selfie Prompt

> Fotogerçekçi, retro mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_generation_prompt": {
    "version": "1.0",
    "aspect_ratio": "9:16",
    "subject_analysis": {
      "characters": [
        {
          "description": "A young brunette woman on the left with long wavy hair.",
          "expression": "Playful 'kiss face' or pouty lips.",
          "accessories": [
            "Retro black rectangular sunglasses with dark lenses.",
            "A silk headscarf (babushka style) tied under the chin, featuring a watercolor floral pattern in shades of pink, purple, and muted green."
          ]
        },
        {
          "description": "A young blonde woman on the right.",
          "expression": "High energy, mouth wide open in a 'yell' or 'scream' pose, tongue visible, looking slightly upward.",
          "accessories": [
            "Vintage-style gold-rimmed cat-eye sunglasses with dark tinted lenses.",
            "A vibrant silk headscarf with a geometric floral pattern in bright blue, yellow, and lime green, tied under the chin.",
            "A classic multi-strand pearl necklace."
          ]
        }
      ],
      "composition": "Close-up candid selfie, low-angle shot taken from inside a vehicle, heads tilted together in a friendly, energetic pose."
    },
    "environment_and_setting": {
      "location": "Interior of a modern car, looking up toward the ceiling.",
      "background_details": [
        "A glass sunroof visible above the subjects.",
        "Clear raindrops scattered across the glass sunroof.",
        "Soft, overcast natural daylight filtering through the clouds and the car windows."
      ]
    },
    "style_and_technical_specifications": {
      "aesthetic": "Modern aesthetic, 'it-girl' vibe, retro-chic, playful and candid photography.",
      "camera_details": "Shot on a high-end smartphone camera (iPhone style), 24mm wide-lens, sharp focus on faces, slight motion blur to enhance the candid feel.",
      "lighting": "Natural, soft diffused light from a rainy day, realistic highlights on the skin and lips, subtle reflections on the sunglasses.",
      "quality_tags": "Photorealistic, ultra-detailed skin texture, 8k resolution, highly detailed fabric textures, cinematic color grading, high fidelity.",
      "negative_prompt": "Blurry, distorted faces, extra fingers, cartoonish, low resolution, bad anatomy, flat lighting, unrealistic skin."
    }
  }
```

## Grunge Bedroom Bass Player Portrait

> Fotogerçekçi, sinematik afiş üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "main_prompt": "intimate bedroom scene, young woman in her early 20s with long wavy ash-brown hair, subtle smokey eye makeup, bold dark red lipstick, sitting cross-legged on a messy bed playing an electric bass guitar, silver metallic sparkle bass guitar with visible pickups and ★ star inlay on fretboard, wearing black spaghetti strap camisole top showing cleavage, loose oversized light-washed blue jeans, multiple silver rings on fingers including statement rings, black nail polish, thin black choker necklace with small pendant, layered delicate necklaces, bracelet on wrist, cigarette dangling from her lips with light smoke trail, relaxed seductive expression with half-closed eyes looking down at the guitar, dimly lit cozy teenage/young adult bedroom, low angled shot from slightly below eye level, walls and ceiling completely covered in layered posters and magazine cutouts: sunflowers, wolves, anime characters, Jujutsu Kaisen characters (Sukuna visible), horror and rock posters, 'BLACK STONES' poster visible, psychedelic and grunge aesthetic collage, tapestries with leaves and flowers hanging from ceiling, warm tungsten + cool window light mix, golden hour rim light on hair, cinematic color grading, film grain, soft bokeh background, highly detailed skin texture, realistic pores and subtle imperfections, photorealistic, ultra-detailed, 8k, sharp focus, shot on Canon EOS R5 with 50mm f/1.4 lens, shallow depth of field",
  "negative_prompt": "blurry, low resolution, deformed hands, extra fingers, fused fingers, bad anatomy, missing limbs, poorly drawn face, bad proportions, extra limbs, cloned face, disfigured, gross proportions, malformed limbs, missing arms, missing legs, extra arms, extra legs, mutated hands, long neck, ugly, tiling, poorly drawn hands, poorly drawn feet, out of frame, mutation, deformed, jpeg artifacts, signature, watermark, username, text, error, cropped, worst quality, low quality, normal quality, cartoon, anime style, 3d render, cgi, plastic skin, overexposed, underexposed, flat lighting, harsh shadows, day time bright window, clean minimal room, adult professional bedroom, office setting, smiling happy expression, heavily made-up glamorous look, perfect symmetrical face, airbrushed skin, doll-like, barbie, instagram filter, oversaturated colors",
  "style_tags": [
    "photorealistic",
    "cinematic",
    "grunge aesthetic",
    "indie bedroom photography",
    "film photography vibe",
    "35mm film grain",
    "moody lighting",
    "intimate portrait",
    "raw emotional",
    "alt girl aesthetic",
    "y2k meets 90s grunge"
  ],
  "technical": {
    "aspect_ratio": "4:5 (portrait / vertical phone photo style)",
    "lighting": "mixed warm tungsten bulb light from side + cool natural window light from behind/right, strong rim light on hair and shoulder, soft shadows on face, cigarette ember glow",
    "color_palette": "muted desaturated tones, earthy browns, faded blues, deep reds (lips), silver"
  }
```

## Cinematic Night Car Interior Portrait

> Sinematik, minimal mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": "cinematic night car interior portrait, passenger seat view, warm city lights outside the windshield",
  "subject": {
    "gender": "female",
    "age_range": "early to mid 20s",
    "expression": "quiet, thoughtful, slightly distant",
    "pose": "seated in the front passenger seat, body angled forward, head turned slightly toward the side window",
    "gaze": "looking outward, not at camera",
    "emotion": "reflective, calm, introspective"
  },
  "wardrobe": {
    "outerwear": "textured wool coat or tweed jacket in muted {argument name="coat color" default="brown/grey"} pattern",
    "styling_notes": "simple, practical, lived-in, no glam"
  },
  "hair_and_makeup": {
    "hair": "natural loose waves, slightly messy, soft volume",
    "makeup": "minimal, realistic skin texture, no glossy finish"
  },
  "environment": {
    "location": "inside an older sedan at night",
    "details": "leather seats, dashboard glow, windshield reflections, distant storefront lights and street lamps",
    "outside_world": "blurred city traffic, bokeh light clusters, soft motion streaks"
  },
  "lighting": {
    "key_light": "warm sodium streetlights spilling through windshield and side windows",
    "fill": "dim dashboard illumination",
    "contrast": "medium contrast with deep shadows in car interior",
    "notes": "natural practical lighting only, no studio look"
  },
  "camera": {
    "shot_type": "over-the-shoulder backseat candid portrait",
    "angle": "slightly behind and to the right of subject",
    "lens": "35mm full-frame look",
    "depth_of-field": "shallow, subject face in focus, background bokeh outside car",
    "motion": "subtle handheld feeling, documentary intimacy"
  },
  "color_and_texture": {
    "color_palette": "warm amber highlights, deep brown shadows, soft neon accents outside",
    "grading": "film-like, slightly underexposed, gentle halation on lights",
    "texture": "visible film grain, natural softness, realistic leather and fabric detail"
  },
  "composition": {
    "framing": "subject placed mid-right, headrest foreground adds depth, windshield leads to city bokeh",
    "focus_story": "private moment inside moving city life",
    "mood": "late-night ride home, quiet tension, unspoken thoughts"
  },
  "negative_prompts": [
    "plastic skin",
    "AI beauty face",
    "over-sharpened",
    "hyper clean details",
    "perfect symmetry",
    "over-saturated neon",
    "fake cinematic fog",
    "studio lighting",
    "glossy makeup",
    "extra fingers",
    "deformed hands"
  ],
  "quality_tags": [
    "cinematic realism",
    "night interior",
    "streetlight glow",
    "35mm film still",
    "soft bokeh",
    "subtle grain",
    "documentary mood"
  ]
}
```

## Minimalist Winter Fashion Portrait Prompt

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "project_name": "Winter Minimalist Portrait",
    "model_type": "ultra-realistic-photography",
    "aspect_ratio": "2:3"
  },
  "prompt_structure": {
    "subject_details": {
      "demographics": "young woman",
      "hair": "platinum blonde, long, straight",
      "skin": "fair porcelain skin, soft natural freckles, high detail skin texture",
      "eyes": "expressive light-colored eyes, looking directly into the camera",
      "makeup": "light pink blush, glossy lips",
      "pose": "standing, slightly leaning forward"
    },
    "apparel": {
      "style_genre": "minimalist winter fashion",
      "body": "fitted black long-sleeve bodysuit",
      "accessories": "white furry leg warmers",
      "footwear": "white boots"
    },
    "environment": {
      "location": "outdoors, snowy forest",
      "background": "pine trees",
      "ground": "snow-covered",
      "atmosphere": "crisp winter atmosphere"
    },
    "technical_settings": {
      "lighting": "bright natural daylight, soft shadows",
      "camera_gear": "35mm lens",
      "aperture": "f/2.2",
      "focus": "shallow depth of field, sharp focus on eyes",
      "style_tags": [
        "photorealistic",
        "lifestyle fashion photography",
        "ultra-detailed",
        "8k resolution"
      ]
    }
  },
  "negative_prompt": [
    "low quality",
    "blur",
    "cartoon",
    "anime",
    "CGI",
    "plastic skin",
    "over-smooth face",
    "distorted body",
    "extra limbs",
    "bad hands",
    "watermark",
    "text",
    "logo"
  ],
  "assembled_prompt": "Ultra-realistic winter portrait of a young woman, platinum blonde long straight hair, fair porcelain skin, soft natural freckles, high detail skin texture, light pink blush, glossy lips, expressive light-colored eyes looking directly into the camera, standing, slightly leaning forward, fitted black long-sleeve bodysuit, white furry leg warmers, white boots, minimalist winter fashion, outdoors, snowy forest, pine trees, snow-covered ground, bright natural daylight, soft shadows, crisp winter atmosphere, 35mm lens, f/2.2, shallow depth of field, photorealistic, lifestyle fashion photography, ultra-detailed, sharp focus, 8k resolution"
```

## Photorealistic Bikini Portrait on Mediterranean Terrace

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "detailed_photorealistic_portrait",
  "subject": {
    "demographics": "Young female, approx 20-25 years old",
    "skin": {
      "tone": "Golden tan, warm sun-kissed undertones",
      "texture": "Smooth, flawless, slight sheen on shoulders and thighs",
      "complexion": "Radiant and healthy"
    },
    "hair": {
      "color": "Honey blonde with darker 'shadow root' (balayage)",
      "style": "Long, extending past shoulders, loose soft waves, middle part",
      "texture": "Silky, voluminous, catching the sunlight"
    },
    "face_details": {
      "shape": "Oval with a softly defined jawline",
      "eyes": {
        "color": "Light greenish-blue (hazel-teal)",
        "shape": "Almond, slightly upturned",
        "makeup": "Minimal, defined lashes (mascara), subtle tight-lining",
        "gaze": "Direct eye contact, soft and alluring intensity"
      },
      "eyebrows": "Natural arch, medium thickness, soft brown",
      "nose": "Straight bridge, small button tip, refined structure",
      "lips": {
        "shape": "Full and plump, well-defined cupid's bow",
        "color": "Natural rosy-nude",
        "finish": "Soft matte with slight hydration/gloss",
        "expression": "Relaxed, lips slightly parted, neutral to soft pout"
      },
      "cheeks": "Softly contoured with a hint of peach/bronze blush"
    },
    "body": {
      "physique": "Slim, fit, hourglass silhouette",
      "pose": "Standing 3/4 turn to camera, weight shifted to one hip, hands resting on/adjusting the side straps of bikini bottoms",
      "hands": "Relaxed fingers, manicured nails"
    }
  },
  "fashion": {
    "garment": "{argument name="bikini color" default="White"} two-piece bikini set",
    "top_details": "Ruched bandeau style with thin spaghetti straps, center front tie-knot with dangling strings, keyhole cutout detail",
    "bottom_details": "Matching white bottoms, high-cut leg, gathered fabric",
    "accessories": [
      "Dainty silver/gold chain necklace with small pendant",
      "Stack of beaded bracelets on right wrist (white pearls and colorful beads)",
      "Single beaded bracelet on left wrist",
      "Gold rings on fingers"
    ]
  },
  "environment": {
    "location": "Mediterranean-style outdoor beach club or terrace",
    "structure": {
      "overhead": "Wooden pergola beams with bamboo/reed slat roofing",
      "flooring": "Light gray concrete or stone patio",
      "walls": "Rough-textured white stucco/stone wall on left"
    },
    "props": [
      "Large black planter pots",
      "Tall, dried/brown palm fronds framing the subject on left and right"
    ],
    "background_scenery": {
      "elements": "Steep rocky cliff face with green scrub vegetation, glimpses of blue sea",
      "objects": "Beige patio umbrellas/parasols in the mid-distance, lounge chairs",
      "sky": "Vibrant, clear azure blue sky"
    }
  },
  "lighting_and_camera": {
    "lighting_type": "Bright natural daylight (noon sun)",
    "shadows": "High con"
  }
}
```

## Identity-Locked Golden Hour Beach Portrait

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Beautiful young woman with long ponytail, soft natural makeup, rosy blush, warm sunset beach, off-shoulder cozy {argument name="sweater color" default="cream"} sweater, golden hour, dreamy ocean background, gentle breeze, cinematic lighting, highly detailed face, realistic, 8k.

Use my uploaded face image as the ONLY facial and identity reference. No other faces, models, datasets, or references are allowed.

🔐Absolute Identity locked—non-negotiable.
```

## Kawaii Doll Magical Realism Character Portrait Prompt

> Fotogerçekçi, stüdyo ışıklı portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "Objective": "Create a highly detailed kawaii doll-like character portrait with a cozy, whimsical, magical realism aesthetic",
  "PersonaDetails": {
    "Subject": {
      "Type": "Doll-like young girl character",
      "Hair": {
        "Color": "Vibrant red–orange",
        "Style": "Soft pigtails with fluffy bangs",
        "Texture": "Silky strands with gentle volume"
      },
      "Face": {
        "Eyes": "Oversized glossy anime-style eyes",
        "Skin": "Porcelain-smooth with soft rosy cheeks",
        "Expression": "Gentle, innocent smile"
      },
      "Pose": {
        "Position": "Sitting with knees pulled close",
        "Hands": "Tucked under chin",
        "BodyLanguage": "Shy, cozy, endearing"
      }
    }
  },
  "WardrobeAndAccessories": {
    "Clothing": {
      "Top": "Oversized knitted sweater with colorful patterns",
      "Legwear": "Striped tights"
    },
    "Accessories": {
      "Style": "Handmade-looking, whimsical details",
      "MaterialFeel": "Yarn, fabric, soft craft elements"
    }
  },
  "SceneDescription": {
    "Environment": "Studio-style setup",
    "Background": "Neutral, softly blurred",
    "Atmosphere": "Quiet, warm, intimate"
  },
  "Composition": {
    "Framing": "Close-up to mid-shot character portrait",
    "DepthOfField": "Shallow depth of field",
    "Focus": "Ultra-sharp focus on face and fabric textures"
  },
  "LightingAndColor": {
    "Lighting": "Soft studio lighting with gentle falloff",
    "Highlights": "Subtle highlights enhancing doll-like skin",
    "ColorPalette": {
      "Primary": "Soft pastels",
      "Secondary": "Warm autumn tones"
    }
  },
  "ArtDirection": {
    "Style": "Photorealistic doll aesthetic",
    "Aesthetic": "Kawaii, cozy, magical realism",
    "TextureEmphasis": [
      "Visible yarn fibers",
      "Knitted fabric detail",
      "Smooth porcelain skin finish"
    ],
    "DetailLevel": "Extremely high detail, handcrafted feel"
  },
  "PhotographyStyle": {
    "Genre": "Character portrait / collectible doll photography",
    "RealismLevel": "Stylized photorealism",
    "Resolution": "8K ultra-high detail"
  },
  "Mood": {
    "Tone": "Whimsical, cute, comforting",
    "EmotionalFeel": "Innocence, warmth, gentle charm"
  },
  "NegativePrompt": [
    "realistic human proportions",
    "harsh lighting",
    "dark horror tone",
    "rough textures",
    "plastic toy look",
    "flat shading",
    "low detail"
  ],
  "ResponseFormat": {
    "Type": "Single character portrait",
    "Orientation": "Portrait",
    "AspectRatio": "2:3"
  }
}
```

## Raw Beach Bikini Portrait with Stretch Marks

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"subject": {
"description": "Young woman with tan, sun-kissed skin and wet, wavy dirty-blonde hair reaching mid-back.",
"physique": "Fit and curvy figure. Prominent glutes showing visible, natural stretch marks (striae). Defined lower back muscles and spine indentation. Bust visible in side/three-quarter profile showing natural volume, heavy mass, and realistic gravity without artificial lift.",
"apparel": "{argument name="bikini pattern" default="Snake-skin pattern"} string bikini in blue, white, and silver scales. Triangle top with thin black strings. High-cut thong-style bottoms with side ties.",
"skin_details": "Highly detailed skin texture including pores, stretch marks on the buttocks, wet/oily sheen reflecting ambient light, and slight natural skin folding at the waist turn."
},
"pose": {
"type": "Standing back view with torso twist.",
"specifics": "Subject is standing with back to camera, twisting torso to her left. Head is turned over the left shoulder, looking directly at the lens. Both hands are holding the side strings of the bikini bottoms at the hip bone, slightly pulling them. Shoulders are relaxed but pulled back.",
"gaze": "Direct, sultry eye contact with slightly parted lips."
},
"environment": {
"location": "Tropical beach at twilight/dusk.",
"elements": "White sand in the immediate foreground. Calm turquoise ocean water in the mid-ground. Old wooden pier pilings visible on the left side in the water. Overcast sky with grey-blue clouds and a hint of yellow sunset light on the horizon.",
"atmosphere": "Humid, calm, slightly moody beach evening."
},
"camera": {
"shot_type": "Medium shot (knees up to head).",
"angle": "Eye-level relative to the subject's standing position.",
"focus": "Sharp focus on the subject, specifically the face and back, with a shallow depth of field slightly blurring the pier and horizon.",
"perspective": "Neutral focal length (approx 50mm-85mm) to flatten features slightly without wide-angle distortion."
},
"lighting": {
"type": "Soft, diffused natural light (overcast sunset).",
"quality": "Even illumination with soft shadows. No harsh sunlight. The light source is ambient, coming from the sky, creating a wet sheen on the subject's skin.",
"shadows": "Subtle, soft shadowing on the right side of the back and under the glutes."
},
"mood_and_expression": {
"mood": "Alluring, confident, raw, natural.",
"expression": "Seductive gaze, relaxed facial muscles, mouth slightly open."
},
"style_and_realism": {
"style": "Raw photorealism, unedited aesthetic.",
"fidelity": "High-fidelity texture rendering. Preservation of skin imperfections like stretch marks and uneven tone. No plastic smoothing."
},
"colors_and_tone": {
"palette": "Cool blues and greys of the sky and water, contrasted with the warm tan of the skin and the cool metallic tones of the swimsuit.",
"grading": "Natural, slightly desaturated background with rich skin tones. Low contrast consistent with overcast lighting."
}
```

## Ultra-Realistic Winter Fashion Portrait Prompt

> Fotogerçekçi, minimal logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "model": "ultra-realistic-photography",
  "prompt": "Ultra-realistic winter portrait of a young woman standing outdoors in a snowy forest, Brown blonde long straight hair, fair porcelain skin, soft natural freckles, light pink blush and glossy lips, expressive light-colored eyes looking directly into the camera, slightly leaning forward pose, wearing a fitted black sexy hot long-sleeve bodysuit, white furry leg warmers and boots, minimalist winter fashion, snow-covered ground, pine trees in the background, bright natural daylight, crisp winter atmosphere, shallow depth of field, soft shadows, high detail skin texture, photorealistic, lifestyle fashion photography, 35mm lens, f/2.2, ultra-detailed, sharp focus, high resolution",
  "negative_prompt": "low quality, blur, cartoon, anime, CGI, plastic skin, over-smooth face, distorted body, extra limbs, bad hands, watermark, text, logo",
  "camera": {
    "lens": "{argument name="camera lens" default="35mm"}",
    "aperture": "f/2.2",
    "focus": "shallow depth of field",
    "lighting": "bright natural daylight, soft shadows"
  },
  "style": {
    "genre": "lifestyle fashion photography",
    "mood": "crisp winter atmosphere",
    "detail_level": "ultra-detailed, photorealistic"
  },
  "quality": {
    "resolution": "high",
    "sharpness": "sharp focus",
    "skin_texture": "high detail"
  }
}
```

## Cinematic Gym Portrait with Identity Constraint

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "task": "image_generation",
  "style": {
    "resolution": "8K",
    "look": "hyper-realistic, cinematic",
    "photorealism": true
  },
  "subject": {
    "identity": "fictional fitness model",
    "inspiration": "celebrity-inspired (non-identical, no face matching)",
    "gender": "female",
    "skin_tone": "fair",
    "pose": {
      "view": "3/4 rear",
      "posture": "arched back",
      "head_direction": "looking over shoulder"
    },
    "expression": "serious",
    "makeup": {
      "eyeliner": "winged",
      "finish": "natural cinematic"
    },
    "hair": {
      "color": "honey-brown",
      "style": "bun",
      "accessory": "hair clip"
    }
  },
  "wardrobe": {
    "top": {
      "type": "sports bra",
      "color": "grey",
      "design": "multi-strap"
    },
    "bottom": {
      "type": "shorts",
      "fit": "tight, high-waist",
      "texture": "ribbed",
      "color": "brown"
    },
    "socks": {
      "type": "thigh-high",
      "color": "black",
      "details": "red stripes"
    }
  },
  "environment": {
    "location": "gym",
    "background_elements": [
      "red metal rack"
    ],
    "atmosphere": "cinematic, moody"
  },
  "camera": {
    "lens": "85mm",
    "depth_of_field": "shallow",
    "focus": "sharp on subject"
  },
  "lighting": {
    "type": "cinematic",
    "key": "soft directional",
    "contrast": "high",
    "highlights": "controlled"
  },
  "detail": {
    "skin": "ultra-detailed, realistic texture",
    "fabric": "high micro-detail"
  },
  "composition": {
    "aspect_ratio": "3:4",
    "framing": "portrait"
  },
  "constraints": {
    "no_real_person_identity": true,
    "no_face_matching": true
  }
}
```

## Nano Banana Pro Manga Generation - New Year's Mochi Pounding

> Çizgi roman karesi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Today's theme is {argument name="theme" default="New Year's Mochi Pounding"}
```

## Lifestyle Portrait at Bosphorus Restaurant with Identity Lock

> Minimal, lüks portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"subject": {
"description": "The exact woman from the reference photo, maintaining her specific facial identity and unique features, sitting at a luxury Bosphorus restaurant, crossing her legs while turning her face toward the camera.",
"mirror_rules": "N/A - direct photo",
"age": "Matches reference photo",
"expression": "Slightly smiling, looking directly into the lens, maintaining the original eye shape and gaze from the reference",
"hair": {
"color": "Exact color from reference photo",
"style": "Exact length and texture from reference photo, styled naturally for an evening out"
},
"clothing": {
"top": {
"type": "micro mini dress",
"color": "{argument name="dress color" default="crimson red"}",
"details": "sexy bodycon fit, thin straps, premium fabric"
},
"bottom": {
"type": "patterned hosiery",
"color": "black",
"details": "sheer black tights with delicate lace patterns"
}
},
"face": {
"preserve_original": true,
"features_to_keep": "Maintain all specific facial marks, moles, scars, eye color, and bone structure from the attached reference photo exactly",
"makeup": "Natural evening makeup that enhances the original features without masking them"
}
},
"accessories": {
"footwear": {
"type": "long leather boots",
"color": "burgundy",
"details": "knee-high polished leather, elegant slim heel"
},
"jewelry": {
"earrings": "minimalist studs",
"necklace": "none",
"wrist": "none",
"rings": "none"
}
},
"photography": {
"camera_style": "smartphone photography, high-end lifestyle aesthetic",
"angle": "eye-level, 3/4 body shot focusing on the leg cross",
"shot_type": "sitting position at a restaurant table",
"aspect_ratio": "4:5",
"texture": "realistic skin texture, keeping the unique skin details from the reference photo"
},
"background": {
"setting": "high-end restaurant with a view of the Bosphorus, Istanbul",
"wall_color": "N/A",
"elements": [
"large window showing the Bosphorus bridge and sea at night",
"city lights reflecting on the water",
"elegant dinner table with white cloth",
"blurred restaurant interior"
],
"atmosphere": "sophisticated, authentic, expensive",
"lighting": "warm indoor ambient light, soft glow on the face"
}
}
```

## Disposable Camera Aesthetic Portrait with Intimate Pose

> Minimal, retro mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Edit this photo without changing the face. Portrait aspect ratio 2:3. Disposable camera aesthetic with a candid, warm, and slightly natural blur. The image should feel like a spontaneous moment captured on a single-use film camera, full of nostalgia, intimacy, and a cozy homey vibe.
A young woman is leaning affectionately on her partner’s shoulder. Her face is turned toward the camera with her head slightly tilted. One hand presses her cheek, creating a cute pose. Innocent expression, big open eyes, with a soft smile or neutral lips. The partner is only partially visible (shoulder and neck only), creating a private, intimate moment.
She is wearing a {argument name="sweater color" default="white or cream"} knit sweater with a simple design and small blue or black accents. Long black hair with natural bangs, slightly messy and not styled neatly. A few loose strands fall across the face for a raw, real film-photo look.
Makeup is very minimal and fresh. Natural skin texture (not flawless or overly smooth). Thin, natural eyebrows. Soft pink blush. Natural pink lips with a slight gloss. Wearing brown contact lenses.
Background is a home interior with plain walls. Warm indoor lighting, slightly uneven, with soft shadows and natural light noise typical of film. No professional lighting setup.
Shot on a disposable camera (Kodak / Fujifilm style). Fixed wide lens around 30mm. Aperture f/8 (fixed disposable lens). ISO 400–800. Shutter speed 1/60. White balance set to warm / tungsten. Direct flash ON.
High-angle selfie taken from above, close-up framing of face and shoulders. Slightly tilted, off-center composition to enhance the spontaneous, unplanned feel.
Disposable camera color grading: warm yellow tones, slight green tint, low contrast, muted colors, heavy film grain, slight blur and vignette, with highlight bloom caused by the flash.
```

## Photorealistic Street Portrait with Bokeh Background

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A photorealistic street portrait of a young woman with a short, messy brunette bob haircut, strands of hair blowing slightly across her face. She is looking directly at the camera with a soft, subtle smile. She wears an oversized beige suede jacket and a white wireless earbud in her left ear. She is clutching a paperback book with a yellow and black spine containing Cyrillic text and a pastel blue smartphone against her chest. The lighting is soft and diffused daylight. The background is a heavily blurred urban street (bokeh) with hints of blue and white tones. Shot on 85mm lens, f/1.8, high definition, authentic skin texture. 3:4
```

## Cinematic Urban Rain Scene Prompt (Neo-Noir)

> Sinematik, fütüristik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "project_type": "cinematic_image",
  "title": "Rain Doesn’t Pause the City",
  "creative_direction": {
    "genre": "cinematic urban realism",
    "influences": [
      "modern street photography",
      "neo-noir cinema",
      "documentary realism",
      "architectural urban mood"
    ],
    "emotion": [
      "quiet loneliness",
      "introspection",
      "urban solitude",
      "calm under pressure"
    ]
  },
  "scene": {
    "environment": "dense city street",
    "architecture": "mid-rise commercial buildings with neon signage",
    "time_of_day": "early evening, blue hour",
    "weather": {
      "type": "heavy rain",
      "details": "visible raindrops, wet surfaces, rain streaks in the air"
    },
    "ground": "wet asphalt with reflective puddles"
  },
  "subject": {
    "type": "single human subject",
    "description": "young woman standing alone on the sidewalk",
    "pose": "stationary, body angled slightly away from the camera, head turned toward lens",
    "expression": "neutral, distant, introspective",
    "wardrobe": {
      "outerwear": "dark hooded rain jacket",
      "accessories": ["backpack"],
      "condition": "rain-soaked fabric, visible droplets"
    },
    "physical_details": {
      "hair": "wet, slightly messy, framing the face",
      "skin": "natural texture, no heavy retouching"
    }
  },
  "background": {
    "elements": [
      "yellow taxi with headlights on",
      "blurred moving traffic",
      "pedestrians holding umbrellas",
      "neon shop signs in multiple languages"
    ],
    "depth": "deep urban perspective with layered visual elements",
    "motion_effect": "subtle motion blur on vehicles and pedestrians"
  },
  "cinematography": {
    "camera_type": "full-frame digital cinema camera",
    "lens": "35mm prime",
    "aperture": "wide open for shallow depth of field",
    "focus": "sharp focus on subject, background softly defocused",
    "camera_position": "eye-level, street perspective",
    "movement": "static frame, background motion creates contrast"
  },
  "lighting": {
    "primary_source": "ambient city lighting",
    "secondary_sources": [
      "vehicle headlights",
      "neon signs",
      "storefront lights"
    ],
    "lighting_style": "soft, diffused, natural",
    "contrast": "moderate, cinematic"
  },
  "color_grading": {
    "palette": ["cool blues", "teal shadows", "warm amber highlights"],
    "saturation": "controlled, muted",
    "black_levels": "slightly lifted for filmic look",
    "highlights": "soft roll-off"
  },
  "post_processing": {
    "film_grain": "subtle, cinematic",
    "sharpness": "subject emphasized, background softened",
    "noise": "minimal, natural",
    "vignette": "very subtle"
  },
  "visual_style": {
    "realism": "high",
    "aesthetic": "moody, atmospheric, modern",
    "inspiration_keywords": [
      "cinematic rain",
      "urban isolation",
      "street realism",
      "arch"
    ]
  }
}
```

## Ultra-Realistic Candid Nighttime Smartphone Photo Prompt

> Fotogerçekçi mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic candid smartphone photograph, 9:16 vertical.
Use the attached image only as a strong visual inspiration for general facial proportions and vibe,
while ensuring the generated subject remains fully original, non-identifiable, and not a face copy.
Scene
Nighttime on a quiet Tokyo city sidewalk beside a building with white ceramic tile walls.
The subject is walking past the camera, partially side-on, captured mid-step in a rushed, accidental moment.
Poses & Gestures (combined naturally)
The subject reacts instinctively to being photographed:
turning her head back mid-walk as if surprised,
raising one hand close to the lens to partially block the camera,
shy, restrained smile forming as she suppresses laughter,
body angled in half-profile while continuing to walk forward,
motion carries her slightly out of frame, imperfect framing.
Expressions are subtle and spontaneous — embarrassed, playful, fleeting — never posed.
Camera & Motion
Shot on a modern smartphone, handheld, rushed capture. Strong uncontrolled camera shake. Heavy directional motion blur across the raised hand, hair, and face. Facial features appear smeared and streaked by movement, faintly recognizable but distorted. Partial ghosting around the body. Imperfect framing, subject nearly leaving the frame.
Lighting
Flash-only lighting fired mid-motion. Harsh flash highlights on skin and hand. Deep surrounding darkness. Uneven exposure, blown highlights, hard shadows typical of hurried night phone photography.
Background
White ceramic tile wall stretches into streaked light bands due to motion blur. Street surroundings fade into darkness with minimal readable detail.
Mood
Candid, shy, slightly playful. Feels intrusive, raw, imperfect, and authentic — like a fleeting memory accidentally captured and never meant to be perfect.
Image Quality
Extremely noisy. Heavily blurred. Raw smartphone look. Not cinematic. Not editorial. Not polished.
Negative Prompt
anime, illustration, painting, stylized,
studio lighting, beauty lighting, soft portrait,
sharp focus, clean face, perfect anatomy, smooth skin,
fashion editorial, posed portrait, cinematic grading, film still,
tripod shot, professional photography,
identity match, face copy, real person replication
```

## Photorealistic Split-Screen Collage Prompt

> Fotogerçekçi mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A photorealistic split-screen collage featuring two poses of a young woman with long, straight brown hair and tan skin in a domestic interior. On the left panel, she is seated facing forward on a {argument name="sofa color" default="teal velvet sofa"}, wearing a tight black halter-neck bodysuit or dress with extremely high leg slits revealing a thigh tattoo, one hand raised to her head, framed by dark wooden bookshelves. On the right panel, she is captured in a side-rear view kneeling on the same teal couch, looking back over her shoulder at the camera, highlighting the open back of the black garment. The background features the wooden shelving unit and a window letting in bright natural daylight, creating a mix of soft indoor lighting and natural backlighting. The style is casual, high-resolution social media photography.
```

## Photorealistic Parisian Café Portrait with Identity Lock

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
      "outerwear": "{argument name="outerwear type" default="white tweed blazer"}",
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
    "cafe_name": "{argument name="cafe name" default="CARETTE"}",
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

## Candid Bikini Photo Prompt (JSON)

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{"subject": "Woman", "pose": "Back view, standing", "attire": {"type": "Bikini", "style": "String", "color": "{argument name="bikini color" default="Teal"}", "accessories": "Pink wristband"}, "physical_traits": {"hair": "Long, dark, wet", "skin": "Tan, wet"}, "environment": {"location": "Outdoor swimming pool", "water": "Blue, rippling", "features": ["Artificial waterfall", "Wooden pergola structure"]}, "background": ["People swimming", "People sitting", "Overcast sky"], "lighting": "Soft, diffuse, natural, cloudy day", "style": "Candid photograph, Realistic, Smartphone camera style"}
```

## Madlyen Cline Rooftop Poolside Selfie Prompt

> Fotogerçekçi, sinematik logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
"title": "LA Rooftop Poolside Selfie",
    "style_attributes": [
      "Ultra-realistic cinematic lifestyle photography",
      "8K resolution",
      "Hyper-detailed",
      "Photorealistic",
      "iPhone-style casual shot",
      "Cinematic photographic quality"
    ],
    "subject": {
      "demographics": "{argument name="subject name" default="Madlyen cline"} , 20 years old, Slavic appearance",
      "facial_features": {
        "structure": "Naturally beautiful, well-balanced face, realistic proportions",
        "eyes": "Large expressive green-hazel, calm confident gaze",
        "lips": "Naturally full, soft, unexaggerated",
        "makeup": "Light natural daytime, not heavy"
      },
      "skin_texture": {
        "quality": "Sun-kissed, highly realistic, visible pores, subtle micro-imperfections",
        "effects": "Wet skin, water and oil droplets catching sunlight, no plastic texture"
      },
      "hair": "Long, wet, slightly messy, strands sticking naturally to cheek and forehead",
      "body": {
        "pose": "Lying on stomach, legs gently bent at knees and lifted, feet together, arm extended for selfie",
        "physique": "Slim waist, natural back line, realistic anatomy without exaggeration"
      },
      "clothing": "Small classic black bikini top with thin straps and deep plunge"
    },
    "props": [
      "Fresh coconut with straw and subtle ADORE logo",
      "Bright blue-and-white striped beach towel",
      "Smartphone (partial visibility)"
    ],
    "environment": {
      "location": "Luxurious rooftop pool, high-rise building, Los Angeles",
      "background": "Modern downtown LA skyscrapers, slight atmospheric haze, white sun loungers and umbrellas",
      "elements": "Turquoise pool water, lush tropical greenery (banana palms, monstera plants)",
      "weather": "Bright sunny day, clear blue sky, no clouds"
    },
    "technical_specs": {
      "lighting": "Harsh midday sunlight, strong contrast, deep natural shadows, bright specular highlights",
      "camera_settings": "50–85mm lens look, shallow depth of field, high dynamic range (HDR)",
      "color_grading": "Realistic, true-to-life skin tones"
    },
    "full_prompt_string": "Ultra-realistic cinematic lifestyle photography, 8K, hyper-detailed, photorealistic, An attractive woman aged 20, Slavic appearance. A naturally beautiful, well-balanced face with realistic proportions, no artificial perfection. Large expressive green-hazel eyes, calm confident gaze toward the camera. Naturally full lips, soft and unexaggerated. Light, natural daytime makeup emphasizing her features without looking heavy. Her skin is sun-kissed and wet, highly realistic with visible pores, subtle micro-imperfections, fine highlights, and water and oil droplets catching the sunlight. No plastic or overly smooth texture. Long wet hair, slightly messy after swimming, with a few strands sticking naturally to her cheek and forehead. She is lying on her stomach on a bright blue-a"
```

## Vintage 90s Fashion Editorial Portrait of Ana de Armas

> Retro moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_generation_prompt",
  "subject": {
    "identity": "{argument name="celebrity name" default="Ana de Armas"}",
    "likeness": "highly realistic, facial features closely matching Ana de Armas",
    "expression": "subtle smile",
    "pose": "glancing over shoulder toward camera",
    "body_emphasis": "upper and lower body appear fuller and statuesque while remaining natural"
  },
  "era_and_style": {
    "inspiration": ["late 1990s", "early 2000s"],
    "aesthetic": "vintage fashion editorial",
    "mood": "soft glamour, candid yet polished"
  },
  "appearance": {
    "skin": "smooth, radiant, naturally glowing under flash",
    "makeup": {
      "eyes": "light smoky eyes",
      "eyeliner": "thin and subtle",
      "lips": "glossy, natural tone",
      "overall": "soft, natural glamour"
    },
  "hair": {
      "length": "long",
      "style": "loose and sleek",
      "authenticity": "original natural hair"
    },
    "nails": "short, sharp, shiny"
  },
  "wardrobe": {
    "dress": {
      "material": "{argument name="dress material" default="leopard-print spandex"}",
      "fit": "form-fitting, body-clinging",
      "design": "long sleeves, backless, deeply open down to the waist",
      "focus": "emphasizes lower back and curves"
    },
    "accessories": {
      "necklace": "long gold necklace cascading down the back",
      "bracelets": "multiple gold bracelets",
      "bag": "small black leather shoulder bag"
    }
  },
  "environment": {
    "background": "neutral-colored stone wall with architectural structure",
    "lighting_effect_on_background": "slightly dull and dark due to flash"
  },
  "photography": {
    "camera_style": "fashion editorial photography",
    "lens": "85mm portrait lens",
    "lighting": "direct on-camera flash",
    "composition": "over-the-shoulder framing, emphasizing curves and silhouette"
  },
  "technical_specs": {
    "resolution": "16K",
    "quality": "UHD, ultra-detailed, realistic textures",
    "aspect_ratio": "3:4"
  },
  "style_keywords": [
    "realistic",
    "vintage 90s",
    "early 2000s",
    "editorial fashion",
    "soft glamour"
  ],
  "negative_prompt": [
    "cartoon",
    "illustration",
    "CGI",
    "over-retouched skin",
    "harsh makeup",
    "anatomical distortion",
    "blur",
    "noise",
    "watermark",
    "text",
    "logo"
  ]
}
```

## Hyper-Realistic Street Photography with Popmart Figures

> Fotogerçekçi moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_style": {
    "realism_level": "hyper-realistic",
    "source_format": "iPhone RAW photo",
    "aspect_ratio": "9:16 vertical",
    "photography_style": "candid street photography",
    "color_treatment": "true-to-life color balance",
    "post_processing": "none",
    "aesthetic": "artsy Pinterest-style realism"
  },
  "camera_composition": {
    "angle": "slightly elevated wide-angle viewpoint looking downward",
    "reference_match": "camera perspective, height, tilt, and framing must precisely align with the reference image",
    "scene_framing": "wide full-body shot",
    "perspective": "street-level overhead view capturing the entire zebra crossing horizontally",
    "stability": "handheld feel with subtle natural imperfections",
    "depth_of_field": "realistic, keeping both subject and surrounding elements sharp",
    "crop": "no portrait or close-up crop"
  },
  "subject": {
    "type": "young adult male",
    "physique": "athletic, naturally fit build",
    "action": "walking forward mid-step on the crosswalk",
    "pose_accuracy": "body orientation, stride, and walking direction must mirror the reference",
    "expression": "neutral, relaxed, unposed candid look",
    "skin_detail": "realistic human skin with visible pores, natural highlights, and minor imperfections"
  },
  "wardrobe": {
    "style": "modern casual streetwear",
    "silhouette": "relaxed and effortless",
    "outerwear": "oversized jacket in muted earthy tones such as olive, charcoal, or brown",
    "innerwear": "minimal plain shirt",
    "bottoms": "loose straight-fit trousers",
    "footwear": "clean minimalist sneakers"
  },
  "environment": {
    "location": "empty urban street",
    "ground": "zebra crossing with authentic asphalt texture and subtle wear",
    "traffic": "none",
    "bystanders": "none",
    "layout": "street structure and spatial depth identical to the reference image"
  },
  "props_characters": {
    "type": "Popmart Skullpanda figures",
    "appearance": "soft plush-like textures with rounded proportions",
    "costumes": "fluffy outfits in varied colors",
    "placement": "arranged around the subject in the exact formation, spacing, and alignment as the reference",
    "interaction": "appearing to casually walk alongside the human subject"
  },
  "lighting": {
    "source": "natural daylight from above",
    "shadows": "soft, diffused shadows cast naturally on the ground",
    "exposure": "balanced with no blown highlights or crushed blacks",
    "contrast": "natural and understated"
  },
  "constraints": {
    "must_match": [
      "camera angle",
      "perspective geometry",
      "crosswalk scale",
      "subject placement",
      "character spacing"
    ]
  },
  "negative_prompt": [
    "different camera angle",
    "eye-level or low-angle view",
    "close-up portrait",
    "cinematic or dramatic lighting",
    "HDR look",
    "over-sharpened de"
  ]
}
```

## Cinematic Street Portrait with Whimsical Illustrated Avatar

> Fotogerçekçi, sinematik profil görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "Objective": "Create a cinematic lifestyle street portrait that blends realism with a whimsical illustrated character for modern visual storytelling",
  "PersonaDetails": {
    "PrimarySubject": {
      "Type": "Young woman",
      "Pose": "Sitting on stone steps, resting chin on hand",
      "Expression": "Thoughtful, calm, introspective",
      "Gaze": "Looking slightly away from the camera",
      "Accessories": [
        "Glasses",
        "Beige baseball cap"
      ],
      "Wardrobe": {
        "Top": "{argument name="sweater color" default="Maroon"} knit sweater",
        "Bottom": "Blue jeans",
        "Footwear": "Brown leather boots"
      }
    },
    "SecondarySubject": {
      "Type": "Stylized cartoon avatar version of the woman",
      "Scale": "Small, seated beside the woman",
      "Style": "Illustrated / cartoon character",
      "Pose": "Mirroring the same thoughtful pose",
      "Wardrobe": "Matching outfit to the real subject",
      "Expression": "Playful yet reflective"
    }
  },
  "SceneDescription": {
    "Location": "Narrow urban alleyway",
    "Foreground": "Stone steps with realistic texture",
    "Background": {
      "Elements": "Brick walls and alley details",
      "Treatment": "Softly blurred for depth"
    },
    "Atmosphere": "Quiet urban moment, intimate and lived-in"
  },
  "Composition": {
    "Framing": "Medium lifestyle portrait",
    "CinematicStyle": "Balanced framing emphasizing interaction",
    "DepthOfField": "Shallow depth of field",
    "Focus": "Sharp focus on both the woman and the avatar"
  },
  "LightingAndColor": {
    "Lighting": "Natural soft daylight",
    "ShadowQuality": "Gentle, realistic shadows",
    "ColorPalette": "Warm urban neutrals with maroon and beige accents"
  },
  "ArtDirection": {
    "StyleFusion": [
      "Photorealistic street photography",
      "Stylized illustrated character design"
    ],
    "Aesthetic": "Whimsical yet grounded",
    "ScaleContrast": "Clear size difference enhancing playful storytelling",
    "TextureDetail": [
      "Clothing knit and denim texture",
      "Stone pavement and brick surfaces"
    ]
  },
  "PhotographyStyle": {
    "Genre": "Cinematic lifestyle street photography",
    "LensLook": "50mm lens perspective",
    "DetailLevel": "High detail with natural softness"
  },
  "Mood": {
    "Tone": "Thoughtful, playful, modern",
    "NarrativeFeel": "Personal reflection with imaginative contrast"
  },
  "NegativePrompt": [
    "harsh lighting",
    "studio environment",
    "oversaturated colors",
    "uncanny avatar",
    "low-detail illustration",
    "blurry subject",
    "cartoon-only style"
  ],
  "ResponseFormat": {
    "Type": "Single image",
    "Orientation": "Portrait",
    "AspectRatio": "2:3"
  }
}
```

## Nano Banana Pro Character Generation - Spikified Shonai-san

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
One {argument name="character name" default="Shonai-san"} who has been Spikified
```

## Glitchy Neo-Tokyo Street Style Photo with Red Neon

> Fütüristik görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A raw, candid street-style shot of reference running through a rain-soaked Neo-Tokyo alleyway, glancing over her shoulder. She is wearing an oversized "Crimson Red" distressed denim jacket with safety pins and patches, the [{argument name="branding text" default="YOUR TEXT"}] branding is embroidered in white on the back. Underneath, a torn band tee. Raindrops on the camera lens create natural distortion. The background is blurred red neon signs reflecting on wet asphalt. The image is heavily processed with "Critical Error" red text overlays and glitch artifacts. Style: Flash photography, high contrast, adrenaline rush.
```

## Nano Banana Pro 4-panel comic: Hina Matsuri

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Today's theme is {argument name="theme" default="Hina Matsuri"}
```

## Nano Banana Pro Chalk Art Generation

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{argument name="art type" default="Chalk art"} that students in their youth would do
```

## Cozy-Sweet Editorial Portrait with Cotton Candy

> Portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
• Concept: Cozy-sweet editorial, face preserved, playful-soft realism.

• Story: Blowing bubbles or eating a giant pastel {argument name="cotton candy color" default="pastel"} cotton candy at a fair.

• Clothing: Oversized pastel knit sweater, pleated baggy.

• Accessories: Glitter on the cheekbones, colorful hair clips.

• Pose: Peering through the cotton candy, eyes wide and bright, slight playful pout.

• Lighting: Bright, soft "candy" colors, high-key lighting with no harsh shadows.

• Background: Blurred carnival lights, pastel-colored booths.

• Camera: 35mm, vibrant saturation, soft focus on the edges.

• Style: Whimsical, youthful, soft-focused skin and bright eyes.
```

## Hyper-Realistic Nightclub Portrait Prompt

> Fotogerçekçi, lüks portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "type": "Woman",
    "age": "Mid-30s",
    "face": {
      "structure": "Softly defined jawline, genuine joyful expression",
      "expression": "Spontaneous sweet smile, squinted eyes from laughter (Duchenne smile), authentic joy",
      "skin_texture": "Visible skin pores, fine lines around the eyes from smiling, slight sheen from the warm club atmosphere, no airbrushing",
      "features": "Light natural makeup, earthy eyeshadow, soft lip gloss, high cheekbones accentuated by the smile"
    },
    "hair": {
      "color": "Brunette to honey-blonde ombre",
      "style": "Voluminous beach waves, messy-chic center part",
      "texture": "Individual hair strands visible, slight frizz from humidity, reflective shine under club lights"
    },
    "body": {
      "build": "Fit and voluptuous hourglass physique, toned athletic frame with full natural curves",
      "anatomy_behavior": "Realistic weight distribution, soft compression of the waist, natural curvature of the spine while leaning slightly, anatomical accuracy of the hip-to-waist ratio",
      "skin_finish": "Natural skin texture on legs through mesh, soft specular highlights on shoulders"
    }
  },
  "wardrobe": {
    "outfit": "Attractively fitted black silk bodysuit, black fishnet stockings, and knee-high leather stiletto boots",
    "fit_details": "Fabric tension at the seams, realistic mesh grid of the fishnets pressing slightly into the skin, leather boots showing natural creases at the ankles",
    "material_behavior": "Reflective leather surface, matte silk texture, translucent mesh"
  },
  "pose": {
    "body_orientation": "Full body standing pose, slightly angled towards the camera",
    "limb_positions": "Holding a crystal cocktail glass with a garnishment, one hand relaxed, legs slightly crossed to emphasize silhouette",
    "spine_and_weight": "Weight shifted onto one hip, dynamic and candid posture, spine showing natural movement"
  },
  "environment": {
    "location": "High-end luxury nightclub bar",
    "foreground_elements": [
      "Crystal cocktail glass with condensation",
      "Slightly out-of-focus bar edge"
    ],
    "background_elements": [
      "Large expansive bar with glowing {argument name="bar backlight color" default="red"} backlight",
      "Rows of expensive liquor bottles with red glass reflections",
      "Blurred silhouettes of patrons and a bartender in motion",
      "Dark moody lounge interior"
    ],
    "spatial_rules": "Shallow depth of field, background is creamy bokeh but recognizable as a crowded fancy club"
  },
  "camera": {
    "device_vibe": "High-end smartphone candid shot, social media style but professional quality",
    "lens_feel": "35mm focal length, realistic wide-angle distortion at the edges",
    "angle": "Eye-level, straight-on full body shot",
    "distance": "Medium-long shot",
    "framing": "Full-body framing including the boots",
    "distortion_rules": "Subtle chromatic aberrat"
  }
}
```

## Cinematic Fashion Portrait with Red Curly Hair

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Young beauty, cinematic realism, ultra-detailed, photorealistic fashion photography
A young  woman with vibrant {argument name="hair color" default="red"} curly hair, styled naturally with soft volume, wearing a black flower barrette tucked elegantly into her curls. She stands confidently beside a dark wooden table with a glossy polished finish, exuding poise and editorial elegance.
She is dressed in a stylish {argument name="swimwear color" default="blue"} bandeau-style swim top paired with matching high-waisted blue bottoms, tastefully designed and fashion-forward. A delicate gold necklace rests naturally around her neck, catching subtle highlights.
Her pose is confident and refined:
Left hand gently leaning on the table
Right hand resting on her hip
Relaxed posture, natural proportions, graceful stance
On the table:
A clear glass of red wine reflecting soft ambient light
Two blue cylindrical candles placed neatly to the right
The background features a textured, worn gray wall, slightly distressed, adding visual contrast and depth.
Lighting is soft cinematic studio lighting with subtle shadows, natural skin tones, sharp focus, and shallow depth of field.
Captured with a professional DSLR, 85mm lens, high dynamic range, realistic skin texture, editorial fashion composition, 8K quality.
🔻 Negative Prompt (Safe)
low quality, blurry, cartoon, anime, CGI, plastic skin, over-smoothed skin, exaggerated anatomy, distorted proportions, extra limbs, poorly drawn hands, harsh flash, flat lighting, watermark, logo, text, cropped head, overexposed, underexposed
```

## Intimate Candid Lifestyle Photo of Two Women on White Sheets

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
An intimate, candid lifestyle photograph of two sensual attractive young women lying together on white bed sheets in a softly lit bedroom. One woman wit hblond hair , white top with deep neckline rests her head gently on the other’s shoulder, wearing over-ear headphones connected by a thin cable, her expression calm and introspective. She wears a sheer white short-sleeve top, with natural skin texture and subtle makeup visible.
The second woman lies beside her, slightly propped up, wearing a fitted white long-sleeve top and simple patterned underwear. She looks down at a smartphone in her hands with a relaxed, absorbed expression. Her short, softly curled dark hair frames her face, and minimal jewelry adds a casual personal touch.
The composition feels spontaneous and personal, like a late-night moment captured on film. The lighting is soft and direct, reminiscent of on-camera flash photography, creating gentle highlights on skin and fabric while preserving natural imperfections. White bedding fills most of the frame, keeping the focus on the subjects and their quiet connection. The mood is warm, intimate, and authentic—more emotional than posed.

Style & Quality Cues
Photorealistic, candid lifestyle photography, film-camera aesthetic, subtle grain, natural skin texture, raw and intimate mood

Lighting
Soft direct flash, low ambient light, gentle shadows, realistic contrast

Camera
Close-range portrait shot, eye-level angle, shallow depth of field, 35mm film look

Aspect Ratio
3:4

Negative Prompt
, exaggerated anatomy, glamour lighting, studio setup, over-smoothed skin, cartoon style, AI artifacts, harsh color grading
```

## 90s Grunge Candid Photo with Lighter and French Fry

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "project_metadata": {
    "aspect_ratio": "9:16",
    "target_output": "Photorealistic, cinematic analog film photography, high-detail capture of a low-light candid moment."
  },
  "main_subject_detailed": {
    "demographics": "A young woman in her early 20s with a natural, slightly edgy look.",
    "hair": "Shoulder-length dirty blonde hair, textured, slightly messy strands falling naturally around her face and shoulders, catching the warm light.",
    "face_and_expression": {
      "gaze": "Looking downwards and slightly to the side, away from the camera, eyes half-closed in a relaxed manner.",
      "expression": "Calm, introspective, nonchalant.",
      "skin": "Natural skin texture visible, illuminated by warm light, showing realistic pores and slight shine on cheekbones."
    },
    "pose_and_action": "Medium vertical shot. She is holding a lit lighter in her right hand near her face. A single french fry is held casually between her lips. Her left hand holds a fast-food fry container against her torso."
  },
  "wardrobe_and_styling": {
    "top": "Simple black spaghetti strap camisole top, form-fitting.",
    "outerwear": "An oversized black garment (cardigan or jacket) slid down completely off her shoulders, visible only on her upper arms and the lower frame.",
    "jewelry": "A simple, thin silver ring on the ring finger of her right hand. A tiny stud earring in her left ear."
  },
  "props_and_objects": {
    "lighter": "A standard red disposable lighter (like a Bic), held actively with a visible, flickering warm flame issuing from the top.",
    "food": "A classic red cardboard french fry sleeve (recognizable McDonald's style silhouette), filled with golden french fries. The fry in her mouth is partially eaten."
  },
  "cinematography_and_lighting": {
    "primary_light_source": "Dramatic, warm orange chiaroscuro lighting originating solely from the lighter flame. This light intensely illuminates her lower face, lips, nose, right hand, and the chest area.",
    "secondary_light_effect (crucial)": "A harsh, direct flash effect is present, creating sharp, defined, dark shadows of the subject against the background wall. This creates a high-contrast, 'snapshot' aesthetic.",
    "shadows": "Deep, hard shadows cast directly behind her on the wall.",
    "color_palette": "Dominated by warm oranges and deep blacks, muted neutrals in the background. Low saturation except for the flame and the red objects."
  },
  "environment_and_atmosphere": {
    "setting": "An indeterminate indoor space, likely a dim room or hallway late at night.",
    "background_texture": "A plain, textured matte wall painted in a neutral beige/grey tone. The wall shows slight imperfections and grain under the harsh lighting.",
    "mood": "Edgy, candid, nocturnal, intimate, moody, nostalgic, 90s grunge revival vibe."
  },
  "artistic_style_modifiers": {
    "film_emulation": "Analog film photography aesthetic, evident grain structur"
  }
```

## High-End Influencer Mirror Selfie in Hot Pink Set

> Fotogerçekçi, lüks mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "specification_metadata": {
    "version": "16.0_modular_atomic",
    "rendering_engine": "8K Photorealistic Hyper-Definition",
    "aspect_ratio": "9:16",
    "style_intent": "High-End Influencer Lifestyle Photography"
  },
  "subject_schema": {
    "biometrics": {
      "identity": " woman Ana de Armas with good body",
      "physique": "Athletic / Toned build",
      "facial_profile": {
        "complexion": "Clear / Flawless",
        "features": "Refined / Sharp",
        "skin_shader": "Luminous / Natural texture"
      }
    },
    "capillary_logic": {
      "color": "Long, sleek blonde",
      "style": "Straightened / High-sheen",
      "fringe_logic": "Messy bangs spread naturally across the forehead",
      "physics": "Silky texture / Individual strand rendering"
    },
    "performance_kinematics": {
      "pose_archetype": "Crouching low mirror selfie",
      "spatial_orientation": "Full-body reflection",
      "gesture": "Holding device with both hands at a slight downward tilt"
    }
  },
  "wardrobe_schema": {
    "apparel_system": {
      "type": "Avant-Garde Two-Piece Set",
      "fabric_logic": {
        "texture": "Shimmery / Glittery / Reflective",
        "material": "High-luster metallic weave"
      },
      "chroma_profile": {
        "primary": "{argument name="outfit color" default="Vibrant Hot Pink"}",
        "accent": "Light Yellow"
      },
      "garment_architecture": {
        "upper": "Strapless bandeau / Diagonal midriff cutout",
        "lower": "High-waisted maxi skirt / Dramatic thigh-high slit / Hip-knot detailing"
      }
    },
    "accessory_system": {
      "material": "Polished Silver",
      "items": [
        { "type": "Necklace", "detail": "Layered silver chains" },
        { "type": "Earrings", "detail": "Ornate silver chandeliers" },
        { "type": "Bracelets", "detail": "Multiple thin silver bands" }
      ]
    }
  },
  "hardware_node": {
    "device_spec": {
      "model": "iPhone 16 Pro Max",
      "finish": "Silver / Gray Titanium",
      "
    }
  },
  "environmental_rig": {
    "scenography": {
      "interior_style": "Modern Minimalist",
      "surfaces": {
        "floor": "Light wood planks",
        "rug": "Light grey shag / High-pile texture",
        "walls": "Neutral matte white"
      },
      "props": {
        "mirror": "Large floor-length mirror with an ornate gold frame"
      }
    },
    "illumination_architecture": {
      "source_type": "Natural soft indoor daylight",
      "distribution": "Even / Diffused",
      "shadow_logic": "Soft-ambient / Zero harsh contrast"
    }
  },
  "technical_logic_node": {
    "optical_parameters": {
      "shot_type": "Wide-angle mirror reflection",
      "perspective": "Eye-level / Slightly tilted downward",
      "focus_mapping": "Sharp focus on subject and garment textures"
    },
    "color_theory": {
      "base_palette": ["Monochromatic grays", "Metallic silver"],
      "con"
    }
  }
```

## Cinematic Couple Embrace in Lake Water

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
          "wardrobe": "white button-up shirt, soaked and semi-transparent in places, fabric clinging naturally, no logos",
          "pose": "submerged to chest level, arms supporting the woman at her waist/hips, smiling up at her",
          "wetness_detail": "wet hair, droplets on face, wet shirt creases, waterline marks on fabric"
        },
        "female_subject": {
          "wardrobe": "{argument name="female attire" default="cream/ivory satin or soft fabric dress"}, fully wet, heavier drape, clinging folds, realistic translucency (non-explicit), no modern lingerie look",
          "pose": "sitting/leaning on the man's thigh/hip support, torso forward, face close to his, intimate gaze",
          "wetness_detail": "wet hair strands, water droplets on shoulders/arms, dress hem submerged with floating folds"
        }
      }
    },
    "physics_realism": {
      "water_interaction": "realistic ripples radiating from bodies, small splashes at contact points, meniscus around fabric and skin, buoyancy consistent with pose",
      "fabric_behavior": "wet fabric weight visible, realistic fold tension, no stiff cloth",
      "skin_and_hair": "wet sheen on skin, natural pores, stray wet hair stran"
    }
  }
}
```

## Candid Kiss in Pera Museum Film Still

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photoreal_candid_romance_interior_film_still",
      "version": "v1.0_PERA_MUSEUM_PAINTING_KISS_EN",
      "priority": "highest"
    },

    "output_settings": {
      "aspect_ratio": "4:5",
      "orientation": "portrait",
      "resolution_target": "ultra_high_res",
      "render_style": "ultra_photoreal_candid_film_still",
      "sharpness": "crisp_but_natural",
      "film_grain": "subtle_35mm",
      "color_grade": "restrained_true_to_life_museum_tones",
      "dynamic_range": "natural_not_hdr",
      "skin_rendering": "real_texture_no_retouch"
    },

    "global_rules": {
      "camera_language": "35mm lens equivalent, eye-level, imperfect framing, candid documentary feel, focus on eyes when people are present",
      "lighting_language": "motivated interior light only (museum track lights + ambient bounce), deep but detailed shadows, no flash",
      "authenticity_markers": "subtle halation on highlights, tiny film gate weave, real museum reflections, no studio look"
    },

    "creative_prompt": {
      "scene_summary": "Inside {argument name="museum name" default="Pera Museum, Istanbul"}. A young couple in their early 20s shares a quiet kiss in front of Osman Hamdi Bey’s famous painting '{argument name="painting name" default="The Tortoise Trainer"}'. It feels like a real, observed moment—an art-film still, not posed.",
      "subjects": {
        "count": 2,
        "description": "the same young man and woman (early 20s), ordinary and real, not model-like; faces visible and eyes sharp when visible",
        "expression": "gentle, restrained intimacy; no exaggerated romance; natural micro-expressions",
        "skin_and_face": "natural skin texture, slight imperfections preserved, no beauty retouch, no plastic skin"
      },
      "wardrobe": "simple student outfits in neutral tones (beige, grey, navy), slightly wrinkled, no logos; minimal natural makeup",
      "action": "a soft, brief kiss—foreheads close, hands lightly touching; respectful and discreet in a public museum setting",
      "environment_details": {
        "location": "Pera Museum gallery interior",
        "background": "the painting 'The Tortoise Trainer' visible behind them (recognizable composition), framed on the wall, museum-grade lighting",
        "museum_realism": "gallery walls, subtle floor reflections, quiet visitors far in background softly out of focus (optional, not prominent), no readable signage"
      },
      "lighting": "museum track lighting creates soft highlights on the frame and faces; gentle falloff; no harsh shadows; no flash",
      "composition": "eye-level medium shot, slightly off-center framing; couple in foreground, painting framed clearly behind; background softly receding; not symmetrical, not staged",
      "mood": "quiet, human, intimate—love against the weight of art and history"
    },

    "hard_constraints": [
      "photoreal only",
      "no explicit content (just a gentle "
    ]
  }
}
```

## Candid Flash Photo of Woman Laughing on a Yacht at Sunset

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Sloane was taking video of the sunset over the Mediterranean, leaning back against the yacht railing, when her friend showed her a ridiculous meme on their phone. Caught off-guard, she throws her head back in a genuine, messy laugh. The friend instinctively snaps the picture using direct flash despite the strong natural light, resulting in a chaotic, high-contrast image. Her hair is wet from a recent swim, and the black swimsuit catches the light intensely, highlighting the water droplets on her skin.
```

## Sunkissed Pink Bikini Lifestyle Photo (Top-Down Angle)

> Fotogerçekçi, minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"subject": {
"demographics": "Young adult fictional woman, clearly 21–24",
"hair": {
"color": "platinum blonde",
"style": "waterfall layers falling naturally",
"length": "mid-back"
},
"face": {
"shape": "soft oval",
"eyes": "blue",
"expression": "soft relaxed smile with eyes gently closed",
"skin": "very fair porcelain skin with light natural freckles"
},
"body": {
"build": "soft feminine realistic proportions",
"bust": "full natural chest with realistic weight and shape",
"posture": "upright seated, shoulders relaxed"
}
},

"pose_and_camera": {
"pose": "she is seated on an outdoor lounge chair with her hands placed behind her on the seat for support",
"torso": "upper body slightly leaning forward in a natural relaxed way",
"head": "tilted slightly downward",
"camera_angle": "clearly top-down, taken from slightly above her eye level",
"framing": "upper body and hips fully visible",
"visual_emphasis": "due to the top-down angle, the chest area appears naturally prominent and clearly visible, similar to a bikini lifestyle photo"
},

"wardrobe": {
"outfit_type": "two-piece bikini",
"color": "{argument name="bikini color" default="bright pink"}",
"style": "minimal classic bikini with thin straps and metal ring details",
"fit": "realistic natural fabric tension"
},

"environment": {
"setting": "sunlit outdoor patio area",
"floor": "light stone tiles",
"furniture": "neutral toned lounge chair",
"background": "soft greenery and bushes",
"lighting": "bright warm natural sunlight with soft shadows",
"mood": "calm relaxed summer atmosphere"
},

"aesthetic": {
"style": "realistic natural photography",
"tone": "warm sunlit lifestyle feeling",
"color_palette": "pink swimwear contrasting with pale skin and natural tones"
},

"negative_prompt": {
"avoid": [
"cartoon or anime style",
"unrealistic proportions",
"studio background",
"flat front-facing camera angle",
"blurred background",
"harsh lighting",
"airbrushed plastic skin"
]
}
}
```

## Candid Analog Film Snapshot of Friends in a Bar

> Retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": {
    "overall_scene": "A candid, direct-flash analog film photograph of two young women enjoying a night out, seated closely on a leather banquette in a dimly lit, vintage-styled bar. The aesthetic is lo-fi, grainy, with warm colors and hard flash shadows.",
    "aspect_ratio": "9:16",
    "photography_style": {
      "type": "Analog film snapshot",
      "lighting": "Direct on-camera flash, creating harsh highlights and deep shadows",
      "texture": "Heavy film grain, slightly desaturated but warm color palette, vintage vibe",
      "composition": "Vertical portrait, candid moment capture"
    },
    "subjects": {
      "count": 2,
      "relationship": "Friends, close physical contact, energetic and playful interaction"
    },
    "subject_1_left": {
      "description": "Woman with sun-kissed skin and long, wavy, balayage blonde hair.",
      "action": "Leaning into her friend while actively sipping from a clear rocks glass filled with ice and a drink.",
      "attire": {
        "top": "{argument name="top style 1" default="Black structured corset-style bodice top with defined bust cups and straps"}.",
        "bottoms": "Grey tailored wide-leg trousers.",
        "accessories": "Distinctive white puka shell choker necklace, multiple stacked gold rings on her left hand holding the glass."
      },
      "expression": "Engaged in the action of drinking, looking slightly upwards and to the side."
    },
    "subject_2_right": {
      "description": "Woman with long, dark brunette hair, leaning slightly against the back of the booth.",
      "action": "Playful pose with right arm raised straight up in the air enthusiastically.",
      "attire": {
        "top": "White strapless tube top featuring a red and black graphic newspaper/magazine print (visible text fragments include 'SENSATION', 'PROPAGANDA').",
        "bottoms": "Light-wash blue denim jeans.",
        "accessories": "Layered gold chain bracelets on the raised right wrist, gold rings."
      },
      "expression": "Eyes scrunched closed in joy, tongue sticking out playfully."
    },
    "environment": {
      "seating": "Ribbed, worn brown leather banquette couch with visible texture and stitching.",
      "background_wall": "Dark wood wainscoting on the lower half. The upper half features a large, aged, sepia-toned mural or wallpaper depicting historical European architecture with repetitive arches and facades.",
      "details": "A modern smartphone is resting face-up on the leather seat cushion near the right woman's hip. The general atmosphere is dark and moody outside of the flash radius."
    }
  }
```

## Emily Blunt Red Carpet Portrait with Extreme Technical Detail

> Minimal mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{ "output_schema": { "metadata": { "camera_simulation": { "brand_model": "Sony A7R IV (61MP Exmor R CMOS Sensor)", "lens_characteristics": "Sony FE 85mm f/1.4 GM, razor-sharp optical clarity with organic rendering, subtle chromatic aberration at frame edges", "focal_length_mm": "85mm (telephoto portrait compression)", "aperture_f": "f/1.8 (creamy bokeh, sharp focus on facial features while ears and background melt)", "shutter_speed": "1/200s (perfectly frozen movement with natural skin softness)", "ISO_and_Grain": "ISO 400, clean digital shadows with fine, high-frequency luminance noise for realism", "distance_estimate": "1.5 meters (Medium Close-Up)" }, "lighting_physics": { "primary_source": "High-intensity event flash with bounce-diffuser, creating sharp catchlights in eyes", "subsurface_scattering": "High; warm red glow through the cartilage of the ears and edges of the nostrils", "global_illumination": "Warm ambient floor-bounce from red carpet, filling neck shadows with subtle crimson tones", "light_modifiers": "Direct flash-induced specular highlights on skin oils and lip gloss", "color_temperature_k": "5500K (Daylight balanced flash) against warm interior background", "volumetric_lighting": "Subtle dust motes visible in the flash-path, slight atmospheric haze from event floor", "specular_highlights": "Moisture-glint on the philtrum, sweat-sheen on the collarbones, micro-reflections in dilated pupils" } }, "composition_and_framing": { "aspect_ratio": "4:5 (Portrait)", "camera_angles": "Slight low-angle, chest-level perspective to emphasize the pose", "framing_technique": "Candid 'paparazzi' style, aggressive framing focusing on torso and head, slight 'dirty frame' with out-of-focus background figure", "subject_geometry": "Symmetrical arm placement framing the face, strong vertical line of the spine", "background_depth": "Layered Z-axis; subject sharp, background premiere-poster blurred into abstract shapes" }, "subject_physiometry": { "demographics_and_build": { "age_estimate": "38-42", "ethnicity_specifics": "English-Irish ancestry, fair skin with cool pink undertones and subtle sun-kissed tan lines", "body_type_category": "Athletic-lean, toned upper body with feminine curves", "anthropometric_ratios": "Strong biacromial width, elegant long neck" }, "skeletal_and_muscular_detail": { "skeletal_prominence": "Sharp, prominent clavicles; visible manubrium; slight protrusion of the acromion process in the shoulders", "muscle_engagement": "Tensed deltoids and triceps from the overhead arm-pull, visible sternocleidomastoid tendons in the neck", "postural_dynamics": "Arms raised behind head, chest expanded, slight arch in the upper thoracic spine" }, "micro_epidermal_texture": { "skin_state": "Visible skin pores on cheeks and nose, fine vellus hair on the forearms, localized goosebumps on the upper arms", "imperfections": "Small mole near the collarbone, slight redness on the chest from h
```

## Meme Generation Prompt for Caffeine and Exhaustion

> Minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Meme: "{argument name="meme quote" default="I've achieved the perfect balance of caffeine and exhaustion"}"
```

## Candid Festival Portrait at Sunset

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "A candid, cinematic photo of a young woman with long red hair smiling at an outdoor music festival at sunset. She is wearing a {argument name="top color and style" default="light blue denim corset-style top"} and blue jeans, holding a clear plastic cup of beer in one hand while brushing her hair back with the other. Warm stage lights glow behind her, with a large concert stage, LED screens, and crowd barriers softly blurred in the background. The mood is joyful and carefree, with natural skin texture, soft freckles, and realistic lighting. Shallow depth of field, vibrant yet natural colors, documentary-style festival photography.",
  "style": "photorealistic",
  "lighting": "golden hour, warm concert lighting, soft highlights",
  "camera": {
    "lens": "50mm",
    "aperture": "f/1.8",
    "focus": "sharp subject, blurred background"
  },
  "composition": "mid-shot portrait, subject centered, candid pose",
  "mood": "joyful, relaxed, summery",
  "quality": "high detail, natural textures, professional photography"
}
```

## Miniature Diorama in a Glass Bottle

> 3B sahne üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A diorama of a tiny [{argument name="character" default="Doraemon"}] trapped inside an old glass medicine bottle. Isometric view, macro photograph. Inside the bottle, [{argument name="element inside bottle" default="flying Doraemon"}] is visible. Natural light, extremely detailed, miniature feel.
```

## Alraune (Mandragora) Transformation Prompt

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A plant spirit integrated with a giant flower!
A floral dress that is fantastical and cute 🌸
```

## Luxury Cinematic Balcony Sunset Portrait

> Sinematik, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "render_goal": "Luxury cinematic sunlight portrait",
  "subject": {
    "pose": "female leaning slightly on balcony railing",
    "expression": "content, reflective smile"
  },
  "wardrobe": "{argument name="dress material and color" default="silk slip dress in warm champagne color"}",
  "environment": {
    "location": "high-rise balcony at sunset",
    "props": "soft sky gradient, distant cityscape glow"
  }
}
```

## Hyper-Realistic Cinematic Scene of Ronaldo Losing a Video Game to Subject

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A hyper-realistic, ultra-detailed 8K cinematic photograph captured with a 35mm lens, medium-wide shot, set inside a realistic, modern apartment living room with a natural, lived-in home atmosphere.

Scene logic & composition:
The TV is positioned directly in front of the players and remains outside the camera frame.
A large decorative mirror on the wall subtly reflects the TV screen, clearly showing the final match result.

In the mirror reflection, the football video game result screen displays a crushing score: {argument name="winning score" default="10"} – {argument name="losing score" default="0"}, clearly in favor of the main subject.
The numbers are bold, bright, and unmistakable against a green pitch and stadium crowd background.

In the foreground, the main subject (uploaded 100% face as reference, identity fully locked and preserved) is seated on a comfortable couch, body oriented straight toward the unseen TV. He is wearing a relaxed home tracksuit , calm and confident, with a controlled victorious expression after the dominant win.

Seated next to him on the couch is {argument name="frustrated player" default="Cristiano Ronaldo"}, holding a PlayStation controller tightly.
His body language shows clear frustration and anger: tense jaw, furrowed brows, clenched fists, shoulders tight, leaning forward aggressively.
His expression communicates competitive rage and disbelief after losing so badly.

Standing slightly behind and to the side of the couch is {argument name="amused player" default="Lionel Messi"}, relaxed and casual, eating food from a plate while watching the scene.
He is smiling subtly, enjoying the moment, completely calm and unbothered, creating a strong contrast with Ronaldo’s anger and adding humor and human warmth to the scene.

A realistic coffee table sits between the couch and the TV, filled with casual home snacks and drinks: pizza slices, chips, sandwiches, and soft drinks, slightly messy to enhance realism.

Lighting is soft, cinematic, and natural, combining ambient room light with the reflected TV glow from the mirror, which subtly illuminates faces and hands.
Depth of field keeps the faces and mirror reflection sharp while softly blurring background elements.

Ultra-realistic skin texture, natural fabric wrinkles, realistic controller reflections, subtle dust particles in the air.
Photorealistic, candid, unstaged moment.
A perfect balance of tension, humor, and realism
```

## Photorealistic Cinematic Street Romance in Istanbul Snow

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photoreal_candid_street_romance",
      "version": "v1.3_ISTANBUL_SNOW_SNOWMAN_LOVE_EN",
      "priority": "highest"
    },

    "output_settings": {
      "aspect_ratio": "4:5",
      "orientation": "portrait",
      "resolution_target": "ultra_high_res",
      "render_style": "ultra_photoreal_candid_street_film_still",
      "sharpness": "crisp_but_natural",
      "film_grain": "subtle_35mm",
      "color_grade": "true_to_life_winter_natural",
      "dynamic_range": "natural_not_hdr",
      "skin_rendering": "real_texture_no_retouch"
    },

    "global_rules": {
      "camera_language": "35mm lens equivalent, eye-level, imperfect framing, candid documentary feel, focus on eyes when people are present",
      "authenticity_markers": "subtle halation on snow highlights, tiny film gate weave, slight background motion blur only, real winter street texture, no studio look",
      "lighting_language": "motivated natural light only (overcast snowy daylight), deep but detailed shadows"
    },

    "creative_prompt": {
      "scene_summary": "{argument name="scene summary" default="Istanbul during a snowy day. A young couple in their early 20s builds a snowman together while snow continues to fall. A quiet, candid moment of shared joy—love without performance."}",

      "subjects": {
        "count": 2,
        "description": "the same young man and woman (early 20s), university students, ordinary and real, not model-like; faces visible and eyes sharp",
        "expression": "soft laughter, concentration, shy happiness; restrained and natural",
        "skin_and_face": "natural skin texture, slightly reddened cheeks from cold, no beauty retouch, no plastic skin"
      },

      "wardrobe_and_props": {
        "female": "simple winter coat in neutral tone, scarf loosely wrapped, gloves slightly wet from snow, long hair partially tucked into coat",
        "male": "dark winter jacket, knit sweater underneath, simple jeans, gloves in hand or worn",
        "props": "partially built snowman between them, snow clinging to sleeves and hair"
      },

      "micro_action": "they roll snow together, hands brushing accidentally; one adjusts the snowman’s head while the other laughs; snowflakes collect on shoulders and eyelashes",

      "environment_details": {
        "location": "Istanbul neighborhood street or park ({argument name="location vibe" default="Moda / Kuzguncuk / university surroundings vibe"})",
        "background": "old apartment facades dusted with snow, parked cars lightly covered, bare tree branches, a few distant passersby softly blurred",
        "ground_details": "fresh snow underfoot, uneven footprints, slushy edges near the pavement"
      },

      "lighting": "soft overcast winter daylight, diffused by snowfall; gentle contrast; subtle halation on bright snow surfaces",

      "composition": "eye-level medium shot, slightly off-center framing, imperfect crop like real street ph"
    }
  }
}
```

## Photorealistic Convenience Store Clerk Cinematic Shot

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create A high-resolution, photorealistic eye-level shot of a friendly male convenience store clerk standing behind a counter. He is wearing a {argument name="uniform color" default="blue and red"} polo shirt uniform. Behind him are refrigerated glass-door coolers filled with colorful bottled drinks. In front of him is a checkout counter with a display of snacks, chips, and a glass warmer containing hot dogs and donuts. Bright fluorescent convenience store lighting, cinematic indomaret aesthetic, shallow depth of field, 8k resolution
```

## Alice in Wonderland Transformation Prompt

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Welcome to Wonderland!
A bewildered face surrounded by giant mushrooms and a cat 🍄🐈
```

## Bikini Snowboarding Influencer Snapshot Prompt

> Fotogerçekçi manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"subject": {
"description": "Young woman with long platinum blonde hair styled in a high ponytail with distinct long braids and loose strands framing the face.",
"body_type": "Slender and fit physique with a prominent, visually dominant bust volume showing natural gravity and fullness. Narrow waist, toned abdomen, and curvy hips. Skin is fair with realistic texture.",
"outfit": {
"upper_body": "Black triangle bikini top with a small silver clasp in the center, accentuating the chest.",
"lower_body": "Black bikini bottoms with thin straps pulled high on the hips. Black snowboard pants are unzipped and pulled down around the shins and calves, exposing the thighs and hips.",
"accessories": "Black winter gloves, thin black choker necklace.",
"footwear": "Chunky black snowboard boots with red accents."
},
"equipment": "Black snowboard attached to feet, positioned diagonally across the frame."
},
"pose": {
"action": "Dynamic snowboarding stance, carving on a snowy slope.",
"posture": "Knees bent in a crouch, leaning forward slightly. Torso twisted slightly towards the camera. Left arm extended outward to the side for balance, right arm tucked closer to the body near the legs.",
"head_position": "Head turned slightly to her right, looking off-camera.",
"weight_distribution": "Balanced on the snowboard edge, conveying motion and stability."
},
"environment": {
"setting": "Alpine ski resort slope.",
"background_elements": [
"Snow-covered mountains in the distance.",
"Ski lift cables and chairs visible in the mid-ground.",
"Expansive white snow ground texture.",
"Overcast, cloudy sky."
],
"atmosphere": "Cold, winter atmosphere."
},
"camera": {
"angle": "Low angle shot, looking up at the subject to emphasize height and movement.",
"lens": "Wide-angle lens, slightly distorting the perspective to enhance the dynamic feel (fisheye influence).",
"framing": "Full body shot capturing the snowboard and surroundings.",
"depth_of_field": "Subject in sharp focus, background slightly softer but visible."
},
"lighting": {
"type": "Natural overcast daylight.",
"quality": "Soft, diffuse lighting with no harsh shadows.",
"tone": "Cool, blue-tinted ambient light typical of snowy environments.",
"shadows": "Subtle shading on the skin and snow, defining form without high contrast."
},
"mood_and_expression": {
"expression": "Wide, genuine smile with visible teeth, conveying joy and excitement.",
"mood": "Playful, energetic, adventurous, and confident."
},
"style_and_realism": {
"style": "Photorealistic influencer snapshot.",
"aesthetic": "High-fidelity social media aesthetic with slight chromatic aberration effects on the edges (motion blur feel).",
"rendering": "Unreal Engine 5 level detail on skin texture and snow particles."
},
"colors_and_tone": {
"palette": "Dominant cool whites and blues from the snow and sky, contrasted with the stark black "
}
```

## Hanna-Barbera Style Political Figures Cartoon Portrait

> Minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A full-body cartoon portrait of {argument name="character name" default="CHARACTER"} , illustrated in a 1960s Hanna-Barbera mid-century modern style with bold, simplified shapes and clean black outlines. The character has exaggerated features (such as a large nose or chin) and a minimal color palette. The outfit reflects the character’s typical style or personality and is rendered in flat colors with no shading or texture effects. Hands are behind the back, and the posture is upright and slightly leaning back for a pompous or dignified expression. No smudging. No shading. Vector friendly. No paper textures or grain effects. Bold and crisp vector lines. Keep the illustration vector-friendly and clean. Square aspect ratio
```

## Pixar-Quality 3D Chibi Character with Mini Jeep

> Minimal, lüks 3B sahne üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use uploaded photos, Create A cute 3D chibi-style character leaning against a parked mini chibi Jeep, wearing a clean monochrome outfit: plain t-shirt, straight-fit pants, and minimalist sneakers. Holding a takeaway coffee cup, relaxed confident smile. Big head, expressive eyes, modern fade haircut. Cozy café courtyard with wooden chairs, warm sunlight, soft depth of field, Pixar-quality 3D render, playful yet premium aesthetic, square aspect rat
```

## Paparazzi-Style Candid Photo Prompt

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Paparazzi-style extreme close-up photo of a woman with striking facial features, caught off-guard while turning toward the camera. Face and shoulders only, shot from a low angle. Strong harsh on-camera flash, grainy high-ISO, raw candid street-photography feel. Background shows a crowded scene with motion blur ({argument name="background setting" default="Paris Fashion Week atmosphere"}). Intense, spontaneous energy, imperfect and real. She is wearing a {argument name="clothing item" default="school uniform"}. Ultra-realistic, cinematic realism, high detail skin texture, slight lens distortion.

Camera style: “35mm paparazzi lens, f/2.8, flash blown highlights”
Look: “2000s tabloid photo aesthetic”
Quality: “sharp focus on face, background heavily blurred and streaked”
```

## Golden Hour Seaside Portrait with Identity Preservation

> Sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create an image using the exact same face as the reference image (100% identical, no facial changes at all).
A close-up profile shot of a beautiful, cute young woman, standing slightly sideways and gently turning her face toward the camera with a soft, subtle smile.
Makeup:
Natural makeup with a dewy, glowing skin finish. Emphasis on healthy, luminous skin texture. Soft light pink blush applied on the cheeks and lightly across the tip of the nose. Glossy gradient pink lips, giving a juicy, hydrated look. Overall fresh, natural, and radiant (Dewy look).
Skin:
Very fair, bright, smooth, and flawless skin.
Hair:
Long brown hair loosely tied in a low ponytail at the back. Strong seaside wind causes the hair to flow freely and messily. Several loose strands blow across her face and eyes, creating natural movement and an effortless, cinematic feel.
Clothing:
Wearing a soft, fluffy {argument name="sweater color" default="cream-beige"} knit sweater with a wide neckline that subtly reveals the collarbones and upper chest area. Fabric looks warm, cozy, and textured.
Scene & Atmosphere:
Set by the seaside during sunset (Golden Hour). A vast ocean stretches into the background. The horizon meets a sky filled with soft orange and pink tones fading into light purple hues.
The sun appears as a small glowing circle, about to dip below the horizon on the left side. A small boat floats far away in the distance.
Lighting:
Warm golden sunlight creates a delicate golden rim light around her hair, highlighting individual strands. Soft, natural light with gentle shadows.
Mood & Style:
Romantic, quiet, slightly lonely, melancholic yet beautiful. Dreamy, cinematic, emotional, and poetic atmosphere. Shallow depth of field, soft background blur, high realism, ultra-detailed, natural photography style.
```

## Character on a High Mountain Peak with Text in Clouds

> Manzara üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "reference_priority": {
    "character_face": "STRICT_REFER_TO_IMAGE",
    "outfit_and_hair_logic": "FORCE_EXACT_REPLICA_FROM_REFERENCE",
    "footwear_logic": "FORCE_EXACT_REPLICA_FROM_REFERENCE",
    "consistency_weight": "MAXIMUM"
  },
  "subject": {
    "type": "woman_identity_perfectly_matched_to_reference_image",
    "framing": "extreme_high-angle_bird's-eye_view_full-body_shot",
    "identity_lock": "maintaining_identical_facial_features_from_reference",
    "features": {
      "eyes": "looking_up_at_camera_with_a_bright_friendly_gaze",
      "hair": "EXACT_REPLICATE_HAIRSTYLE_FROM_REFERENCE: length, color, texture, and style must be identical, no headwear",
      "expression": "cheerful_and_cute_expression_with_a_playful_smile"
    },
    "pose_structural_lock": {
      "overall": "standing_confidently_at_the_highest_point_of_a_rugged_mountain_peak",
      "arms": "right_hand_raised_near_the_eye_making_a_peace_sign_V-sign_YA_gesture",
      "hands": "fingers_clearly_formed_into_a_peace_sign_near_the_face",
      "shoulders": "slightly_slouched_creating_a_top-down_foreshortening_effect",
      "perspective": "heavy_wide-angle_distortion_making_the_head_look_larger_than_feet"
    }
  },
  "apparel_specification": {
    "logic": "CLOTHING_AND_FOOTWEAR_MUST_BE_AN_EXACT_CLONE_OF_REFERENCE_IMAGE",
    "outfit_main_piece": {
      "top": "Identical_inner_layer_as_seen_in_reference",
      "bottom": "Identical_pants_from_reference_image",
      "footwear": "EXACT_REPLICATE_FOOTWEAR_FROM_REFERENCE: replicate the specific shoes, colors, and design from the reference image exactly"
    }
  },
  "environment": {
    "setting": "the_summit_of_a_high_mountain_with_jagged_rocks_and_a_cliff_edge",
    "lighting": "bright_natural_daylight_with_soft_clouds_b"
  },
  "text_in_clouds": "{argument name="cloud text" default="YOUR TEXT HERE"}"
}
```

## Golden Hour Bedroom Portrait with Lace Foot Jewelry

> Fotogerçekçi, lüks portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "Elegant portrait of a young woman in a sunlit bedroom, sitting gracefully on a chair near a window. She has long dark braided hair. Wearing a pink-white floral off-shoulder top and comfortable white shorts. Detailed focus on her feet adorned with intricate white lace floral jewelry and silver glitter nail polish. Soft natural daylight, warm golden hour glow, blurred bedroom background with vanity and mirror. Photorealistic, 50mm lens, sharp focus on lace details and skin texture, 8k resolution, serene expression.",
  "negative_prompt": "cartoon, painting, illustration, (lingerie, underwear:1.4), provocative, distorted, blurry, lowres, extra limbs, shoes, boots, socks, dark shadows, heavy makeup.",
  "reference_image": {
    "enabled": true,
    "strength": 0.85, 
    "description": "Young woman sitting on a chair, cross-legged pose, floral top, white lace foot jewelry, long braids, natural window light."
  },
  "style": "Photorealistic lifestyle photography, soft airy aesthetic",
  "aspect_ratio": "3:4",
  "lighting": "Golden hour window light, soft specular highlights"
}
```

## Whimsical Portrait Blending Realism with Tiny Pixar Character

> Fotogerçekçi 3B sahne üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "Objective": "Create a heartwarming, whimsical portrait blending photorealistic realism with a tiny Pixar-style animated character",
  "PersonaDetails": {
    "PrimarySubject": {
      "Type": "Young girl",
      "Expression": "Bright, joyful smile",
      "Hair": {
        "Style": "Long light-brown hair",
        "Accessories": "Cute ribbon bows"
      },
      "Wardrobe": {
        "Outerwear": "Casual denim jacket",
        "Top": "Soft neutral-colored shirt"
      }
    },
    "SecondarySubject": {
      "Type": "Tiny 3D cartoon version of the girl",
      "Scale": "Miniature, held delicately between fingers",
      "Style": "Pixar-style 3D character",
      "Proportions": "Oversized expressive eyes, rounded features",
      "Hair": "Pigtails matching the real girl",
      "Wardrobe": "Denim outfit matching the real subject",
      "Pose": "Arms raised joyfully"
    }
  },
  "Composition": {
    "Framing": "Close-up to medium portrait",
    "Interaction": "Clear playful interaction between girl and miniature character",
    "DepthOfField": "Shallow depth of field",
    "Focus": "Ultra-sharp focus on both faces"
  },
  "LightingAndBackground": {
    "Lighting": "Warm natural daylight",
    "Background": {
      "Style": "Soft golden bokeh",
      "Mood": "Dreamy, magical"
    }
  },
  "ArtDirection": {
    "StyleFusion": [
      "Photorealistic child portrait photography",
      "Pixar-style 3D animated character"
    ],
    "Aesthetic": "Magical realism with playful scale contrast",
    "TextureDetail": "Ultra-detailed skin, fabric, and 3D materials"
  },
  "MoodAndTone": {
    "Mood": "Heartwarming, joyful, whimsical",
    "EmotionalFeel": "Wonder, innocence, playful imagination"
  },
  "PhotographyStyle": {
    "Genre": "Cinematic lifestyle portrait photography",
    "LensFeel": "Portrait lens with creamy bokeh",
    "ImageQuality": "8K ultra-high realism"
  },
  "NegativePrompt": [
    "uncanny valley",
    "scary doll",
    "low-quality 3D",
    "harsh lighting",
    "oversaturated colors",
    "blurry focus",
    "flat expression"
  ],
  "ResponseFormat": {
    "Type": "Single image",
    "Orientation": "Portrait",
    "AspectRatio": "2:3"
  }
}
```

## Atmospheric Portrait with Flowers and Warm Lighting

> Portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the uploaded image as a reference for the character. Create a sweet, cute, youthful-looking girl with a relaxed, languid posture and expressive emotions.
She is holding a large bouquet of flowers wrapped in {argument name="wrapping material" default="kraft paper"}, She is surrounded by many green plants. The image should feel tactile, immersive, and atmospheric, with a sense of surreal sophistication and subtle motion blur. The girl has soft dark brown hair styled naturally, with an asymmetrical composition, glancing left and right,and her hairstyle should enhance the mood. Her makeup is sweet and natural, facial features delicate and realistic.
Lighting should be soft, warm and a lamp orange bulb behind her creates softly orange, with nuanced shadows, creating a warm light on her hair, head and on her face, comforting atmosphere. Clothing should feel casual and realistic, and her pose should be natural and coordinated, conveying a relaxed, comfortable lifestyle. She wears silver hoop earrings.
```

## Candid Sunset Bedroom Portrait in Bikini

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"image_prompt_data": {
"subject": {
"demographics": "Young caucasian adult woman",
"hair": "Long, ash blonde, loose and voluminous, slightly tousled from being held up, falling over shoulders",
"skin": "fair complexion, porcelain like skin",
"eyes": "light green, direct eye contact with camera, soft expression",
"makeup": "Natural, subtle makeup, slightly glossy lips",
"body_art": "Small dark koi fish tattoo visible on the left hip bone"
},
"apparel": {
"swimwear": "{argument name="swimwear color" default="brown"} ruched bikini set, string top with center tie, matching string bottoms",
"outerwear": "Off-white textured linen button-down shirt, open, sleeves slightly rolled, draped loosely over shoulders and arms"
},
"pose_and_action": {
"body_position": "Kneeling on a white bed, facing forward",
"arms": "Left arm raised with hand resting behind head/neck, right arm extended down onto the bed for support",
"head_tilt": "Slight tilt, looking directly at camera",
"framing": "Medium shot, waist up"
},
"environment": {
"location": "Indoor bedroom with large floor-to-ceiling window",
"background": "{argument name="background sky" default="orange sunset"} sky with scattered clouds, sun positioned to the right, city skyline visible in the distance, warm golden light filling the room",
"foreground_details": "Rumpled white bedding and duvet"
},
"technical_style": {
"ar": "3:4",
"lighting": "Backlit by intense warm sunset light, creating a silhouette effect on the hair and warm highlights on skin and clothing, lens flare from the sun",
"aesthetic": "Candid smartphone photo, raw, unfiltered, warm golden hour glow, natural film grain",
"angle": "Eye-level shot",
"focus": "Sharp focus on subject's face and upper body"
}
}
}
```

## Cozy Bed Mirror Selfie in Loungewear

> Minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": "Woman taking a mirror selfie while lying in bed.",
  "subject": {
    "character": "Young woman",
    "face": {
      "structure": "Soft features",
      "skin": "Fair, clear",
      "eyes": {
        "shape": "Almond",
        "color": "Dark brown",
        "expression": "Gazing into mirror"
      },
      "mouth": {
        "lips": "Natural, neutral expression"
      },
      "makeup": "Natural/Minimal"
    },
    "hair": {
      "color": "Dark brown",
      "length": "Medium",
      "texture": "Casual, slightly messy",
      "style": "Lying back against pillows",
      "shine": "Natural"
    },
    "held_object": {
      "item": "Smartphone",
      "details": "Used for mirror selfie, case visible"
    }
  },
  "pose": {
    "overall": "Lying down mirror selfie",
    "position": {
      "base": "Lying in bed on back/side",
      "orientation": "Angled towards the mirror"
    },
    "torso": {
      "direction": "Facing upward and slightly right",
      "posture": "Reclined against pillows"
    },
    "arms": {
      "right_arm": "Raised holding phone",
      "left_arm": "Resting down on bed"
    },
    "legs": {
      "position": "Bent, partially covered",
      "visible": "Thighs visible in shorts"
    },
    "head": {
      "turn": "Slightly turned towards mirror",
      "expression": "Calm gaze"
    }
  },
  "outfit": {
    "loungewear": {
      "top": {
        "item": "Tank top",
        "color": "Grey",
        "material": "Ribbed cotton",
        "style": "Scoop neck, sleeveless"
      },
      "bottoms": {
        "type": "Shorts",
        "pattern": "Grey and white paisley/floral",
        "details": "Drawstring waist"
      }
    }
  },
  "body": {
    "type": "Slender",
    "skin": "Fair",
    "cleavage": "Visible due to top cut and pose"
    }
  },
  "environment": {
    "location": "Bedroom",
    "bedding": {
      "material": "Linen",
      "color": "Beige/Natural",
      "items": "Duvet, pillows"
    },
    "fixtures": {
      "window": "Visible on the left with white trim",
      "mirror_frame": "White frame visible around image perimeter"
    },
    "background": {
      "wall": "Plain, neutral color"
    }
  },
  "lighting": {
    "type": "Natural daylight",
    "quality": {
      "intensity": "Soft",
      "direction": "From the left (window)"
    },
    "on_subject": {
      "skin": "Illuminates left side and chest",
      "hair": "Soft highlights"
    }
  },
  "photography": {
    "angle": "Mirror selfie view",
    "framing": "Framed by the mirror itself",
    "focus": "Sharp on subject and phone",
    "style": "Casual, candid",
    "device": "Smartphone captured in reflection"
  },
  "color_palette": {
    "subject": {
      "hair": "Dark brown",
      "skin": "Fair",
      "outfit": "Grey, white"
    },
    "environment": {
      "bedding": "Beige linen",
      "walls": "Light neutral"
    }
  },
  "vibe": {
    "energy": "Relaxed",
    "mood": "Cozy, intimate",
  }
```

## Photorealistic Inverted Yoga Portrait

> Fotogerçekçi logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "photorealistic yoga/gym flexibility portrait",
  "main_composition": "dynamic inverted full-body view of a single young woman performing a controlled handstand or forearm stand variation in a modern dance/yoga studio, body fully extended vertically with legs together and pointed toes, arms straight supporting weight on hands, long hair hanging down toward floor, mirrored walls reflecting pose from multiple angles and also clearly her face, warm indoor lighting with wooden elements",
  "subject": {
    "description": "beautiful young woman in her early 20s, attractive feminine features with light natural makeup, long wavy dark blonde hair cascading downward in inverted pose, fair to tanned smooth skin with athletic toned physique and strong core/arms",
    "clothing": "fitted light {argument name="clothing color" default="teal or mint blue"} long-sleeve crop top with thumb holes and small white logo on sleeve, matching high-waisted seamless leggings with subtle branding ('KEOR' on waistband), white knit ribbed leg warmers scrunched at calves/ankles, white thong-style underwear visible underneath leggings",
    "details": "advanced flexibility pose with straight vertical alignment and pointed toes, visible tattoos including script text on lower back ('never give up' or similar) and small design on upper arm, manicured neutral nails, hair slightly tousled from movement, confident focused expression partially visible upside down"
  },
  "environment": {
    "foreground": "smooth light wooden studio floor with subtle grain and reflections",
    "midground": "woman centered in inverted pose, large floor-to-ceiling mirrors on walls reflecting full body and room",
    "background": "modern dance/yoga studio with exposed red brick upper walls, vertical wooden slat paneling on lower walls, acoustic ceiling panels, clean professional fitness space with no clutter"
  },
  "lighting_and_atmosphere": "warm even indoor studio lighting from overhead sources, soft natural glow with subtle highlights on skin, hair, and glossy leggings fabric, gentle shadows enhancing muscle definition and pose depth, energetic athletic vibe with high contrast between teal outfit and wooden tones, photorealistic detail",
  "technical_quality": "highly detailed, sharp focus on subject with realistic fabric textures (seamless leggings shine, knit leg warmers ribbing), hair movement, skin glow, tattoo ink, and mirror reflections, 8k resolution, professional fitness/yoga photography style with dynamic inverted composition and accurate pose anatomy",
  "negative_prompt_suggestions": "blurry, deformed, extra limbs, unnatural proportions or balance issues, overexposed skin, underexposed shadows, low quality, cartoon, anime, text watermark, extra people, cluttered background, visible face distortion from inversion"
}
```

## Nighttime Sportbike Rider Portrait

> Fotogerçekçi mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
"subject_details": {
      "demographics": "Female motorcyclist.",
      "hair": "Dark hair styled in a single braid visible hanging down from the helmet.",
      "outfit": {
        "headwear": "White full-face motorcycle helmet with black visor and intricate graphic decals.",
        "top": "White long-sleeve cropped racing jersey/rash guard with black and red text logos.",
        "bottom": "Dark grey denim shorts with a black studded belt.",
        "footwear": "White armored motorcycle racing boots with blue accents.",
        "accessories": "Black and white racing gloves."
      }
    },
    "vehicle_details": {
      "type": "Modern Sportbike / Supersport Motorcycle (CFMOTO 450SR style).",
      "color": "Pearl white fairings with black accents and blue details.",
      "features": "Exposed engine casing, blue LED accent light/underglow near the engine, black wheels with blue rim tape."
    },
    "exact_pose_anatomical": {
      "stance": "Leaning/Sitting against the left side of the bike (not straddling).",
      "torso": "Leaning the left hip against the rider's seat/tank junction.",
      "arms": "Crossed confidently over the chest.",
      "head": "Turned 90 degrees to the subject's right (profile view), looking away from the camera towards the front of the bike.",
      "legs": "Left leg planted straight on the ground. Right leg bent at the knee, foot resting on the bike's foot peg.",
      "vibe": "Cool, mysterious, waiting."
    },
    "environment_and_background": {
      "setting": "Urban street or large plaza at night.",
      "background_architecture": "A massive modern stadium or convention center with a curved roof structure illuminated by a grid of white lights.",
      "ground": "Paved stone sidewalk or tarmac.",
      "sky": "Dark, overcast night sky (deep blue/black)."
    },
    "camera_technical_values": {
      "perspective": "Eye-level / Slightly low angle.",
      "focal_length": "28mm (Wide angle to capture the full bike and the large architectural background).",
      "aperture": "f/2.8 (Bright enough for night shooting, moderate depth of field).",
      "shutter_speed": "1/60s.",
      "iso": "ISO 1600 (Nighttime grain/noise).",
      "color_grading": "Cool tones, dominant blues, whites, and greys."
    },
    "lighting_setup": {
      "ambient": "Street lamps visible in the background providing backlighting.",
      "key_light": "Soft, cool-white artificial street light hitting the subject from the front-left.",
      "accents": "Blue glow from the motorcycle engine bay."
```

## Sydney Sweeney Casual Floor Hang Mirror Selfie

> Fotogerçekçi, lüks mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "aspect_ratio": "3:4",
    "quality": "ultra_photorealistic, raw, unedited photograph",
    "resolution": "8k",
    "camera": "Smartphone camera (high-end model)",
    "lens": "Wide-angle smartphone lens",
    "style": "Mirror selfie, warm atmosphere, candid moment",
    "composition": "A mirror selfie photograph taken by the woman on the left, capturing two blonde women kneeling and embracing on a wooden floor in a studio setting."
  },
  "scene": {
    "location": "Indoor luxury yoga studio or spa lounge",
    "environment": [
      "Light wood plank flooring",
      "Large wall-to-wall mirror reflecting the subjects and large potted palm plants",
      "Textured beige walls with a warm backlit architectural alcove in the background",
      "Wooden stool and yoga mat visible in the background"
    ],
    "time": "Indeterminate time, warm indoor lighting",
    "atmosphere": "Warm, intimate, friendly, serene, luxurious"
  },
  "lighting": {
    "type": "Soft, warm ambient artificial light",
    "source": "Recessed ceiling lights and prominently from the warm backlit feature in the background",
    "effect": "A soft, golden glow enveloping the scene, creating warm tones on skin and clothing and gentle shadows."
  },
  "subject": {
    "identity": "Two blonde women kneeling together. The woman on the left is a platinum blonde. The woman on the right is actress Sydney Sweeney.",
    "body": {
      "pose": "Both women are kneeling on the floor, barefoot, embracing snugly side-by-side. The platinum blonde woman on the left holds up a black smartphone to take the photo in the mirror, looking at the screen. Sydney Sweeney on the right is smiling broadly, looking towards the mirror, her arms wrapped around the other woman.",
      "physique": "Both women have fit physiques and long wavy blonde hair."
    },
    "outfit": {
      "clothing_left": "A tight-fitting, black, long-sleeved, open-back bodysuit.",
      "clothing_right (Sydney Sweeney)": "A tight-fitting, bright yellow, long-sleeved, open-back bodysuit."
    }
  },
  "realism_focus": {
    "textures": "Fabric texture of the stretch bodysuits (black and yellow), grain of the wooden floor planks, realistic skin texture, individual strands of wavy blonde hair, clear reflections in the large mirror.",
    "imperfections": "Natural folds and creases in the bodysuits from the pose, realistic details of bare feet (soles, toes), slight smudges on the mirror surface."
  }
}
```

## Ultra-Wide Mirror Selfie with Identity Lock and Tan Lines

> Minimal afiş üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
(Vertical 9:16 smartphone aspect ratio). A raw, high-contrast mirror selfie captured with an iPhone 17 Pro using the 0.5x ultra-wide-angle lens. NO ARTIFICIAL BOKEH. Everything is SHARP and in focus from their eyelashes to the posters on the background wall.
Subject & Identity Locking (CRITICAL):
•Identity 1 ({argument name="identity 1 name" default="Sydney Sweeney"}): Strictly preserve her exact heart-shaped facial structure, hooded blue eyes, and voluminous blonde hair. Focus on a dominant structural bust volume and substantial, thick-toned leg presence.
•Identity 2 ({argument name="identity 2 name" default="Billie Eilish"}): Strictly preserve her unique facial structure, sleepy/heavy-lidded eyes, and dark, sleek hair. Focus on her fit, curvy physique and symmetrical structural volume.
•Bio-Fidelity: Render high-fidelity "TrueLens" skin physics: visible micro-pores, natural "satin-finish" glow, and fine peach fuzz catching the lamp light ONLY along the jawlines.
•The Tan Line Factor: Both women feature sharp, high-contrast aesthetic tan lines across their chests and hips, contrasting golden-tanned skin with pale white skin beneath the bikini lines, exactly like the reference.
•Expression: Both are looking into the mirror with a neutral, confident, and slightly indifferent "bedroom eyes" gaze.
Outfit & Physicality:
•Clothing: Both wear matching minimalist {argument name="bikini color" default="Cream/Sand-colored"} Triangle Bikini Sets.
•Tension: The ultra-thin strings show extreme elastic tension and a vacuum-tight fit, creating realistic physical interaction and "tension lines" where the fabric contours to their fit silhouettes.
•Physics: Realistic skin-to-skin interaction where they stand close together, and skin-to-surface compressionwhere their forms overlap.
Pose & Composition:
•Pose: A classic "fit-check" mirror selfie. Sydney (on the left) and Billie (on the right) are standing side-by-side. They are slightly popping their hips and arching their backs to maximize the high-impact S-curve silhouettes and aggressive hourglass structural tapering at the waist.
•Action: One of them holds a gold-colored iPhone 17 Pro to capture the full-body reflection.
Environment & Social Realism:
•Lighting: Warm, naturalistic indoor lighting from a bedside lamp. The light creates high-contrast highlights on their shoulders and defining shadows that amplify the 3D anatomical depth of their forms.
•Background (SHARP): A detailed, messy "lived-in" bedroom. An unmade bed with grey linens, walls covered in mismatched posters and photos, and a white-framed doorway are all perfectly IN FOCUS. No artificial depth-of-field.
Quality: Raw unedited social-media dump aesthetic, high dynamic range, visible digital grain in the deep shadows, 8k resolution. Single frame.
```

## Authentic Morning Selfie with Christmas Bedding

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "aspect_ratio": "9:16",
    "quality": "raw_photorealism, 8k",
    "camera": "iPhone 15 Pro Max",
    "lens": "Ultra-wide 13mm (0.5x mode)",
    "style": "no flash selfie, authentic morning vibe, soft daylight, cozy holiday aesthetic",
    "film_grain": "natural ISO 200"
  },

  "scene": {
    "location": "Bedroom",
    "environment": [
      "messy bed with rumpled sheets",
      "Christmas themed bedding: Red flannel duvet with white Nordic patterns (snowflakes)",
      "sunlight streaming onto the bed"
    ],
    "time": "bright early morning",
    "atmosphere": "lazy, intimate, festive but calm"
  },

  "lighting": {
    "type": "Natural Morning Daylight",
    "source": "Large window (side lighting)",
    "flash": "OFF (natural soft shadows only)",
    "highlights": "sunlight catching dust particles in air and blonde hair strands",
    "shadows": "soft, not harsh, defining the collarbones and sheets"
  },

  "camera_perspective": {
    "pov": "Hand-held wide angle selfie (0.5x)",
    "framing": "Upper body and part of legs",
    "angle": "High angle or side-lying",
    "focus": "Sharp on face, foreground arm slightly distorted by wide lens",
    "composition": "Dynamic angle, arm holding phone visible extending from corner"
  },

  "subject": {
    "demographics": {
      "gender": "female",
      "age": "21 years old",
      "ethnicity": "Caucasian",
      "body_type": "slim with soft curves"
    },

    "face": {
      "expression": "Mildly surprised/confused 'just woke up' face (eyes wide, mouth slightly open in a cute 'O')",
      "features": {
        "cheeks": "soft, slightly flushed from sleep",
        "lips": "full, natural, unpainted but rosy",
        "eyes": "bright blue/grey, groggy but cute"
      },
      "skin_texture": "Morning realism: texture of skin without makeup, slight pillow marks or redness"
    },

    "hair": {
      "color": "Blonde with lighter highlights",
      "style": "Messy morning bun or loose tangles",
      "texture": "Sunlit halo effect, messy strands falling over face"
    },

    "body_details": {
      "tattoo": {
        "location": "Inner forearm (visible on the arm holding the phone or resting on sheets)",
        "design": "Delicate fine-line floral or script tattoo",
        "color": "black ink"
      }
    },

    "outfit": {
      "top": {
        "item": "Tight ribbed tank top / camisole",
        "details": "Thin spaghetti straps, slight lace trim on neckline",
        "color": "White or cream",
        "fit": "Fitted to body"
      },
      "bottom": {
        "visibility": "legs partially covered by red Christmas duvet"
      }
    }
  },

  "details": {
    "realism_focus": [
      "Texture of the ribbed cotton tank top",
      "Ink texture of the tattoo on skin",
      "Fuzzy flannel texture of red bedding",
      "No artificial flash reflections on skin, only soft daylight glow"
    ]
  }
}
```

## Nano Banana Pro prompt for sports stadium visualization

> Minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Try it with your favorite sport stadium⤵️
```

## Inspired Prompt from LudovicCreator

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A beautiful, hyper-realistic, cinematic, full-body portrait of a young woman with long, dark, wavy hair, wearing a flowing, sheer white dress, standing on a rocky beach at sunset. The light is golden and dramatic, casting long shadows. The waves are crashing gently behind her. Shot on a 50mm lens, f/1.4, 8K resolution, high detail, film grain.
```

## Extreme Foreshortening Portrait with Feet in Foreground

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject_description": {
    "demographics": "Young adult female, tan skin tone, light freckles on face.",
    "hair": "Long, wavy, dark blonde with lighter highlights, center-parted, falling behind shoulders and over right shoulder, slightly messy texture.",
    "face": "Direct gaze, neutral to slight pout expression, lips closed, natural makeup look, soft facial features.",
    "body_type": "Fit build, visibly compressed due to seated posture."
  },
  "attire_and_accessories": {
    "outfit": "Matching navy blue two-piece set (or jumpsuit) with large beige and white floral print.",
    "top": "Spaghetti strap style, fitted at chest.",
    "bottoms": "Loose-fitting pants, fabric bunching heavily around the hips, crotch, and knees due to the crouched pose.",
    "jewelry": "Thin red string bracelet on left wrist.",
    "footwear": "Barefoot."
  },
  "pose_geometry_and_physics": {
    "type": "Seated crouch / Knees-to-chest reclined pose.",
    "perspective_distortion": "Extreme foreshortening. The soles of the feet are the largest visual elements in the frame, positioned in the immediate foreground, obscuring part of the lower legs.",
    "leg_position": "Legs elevated and extended toward the camera lens. Knees bent and splayed slightly outward. Right foot sole fully visible, toes relaxed. Left foot sole fully visible, closer to lens, toes slightly curled.",
    "arm_position": "Arms wrapped around the outside of the shins/knees. Hands clasped or resting near the ankles, pulling the legs slightly toward the body.",
    "torso_state": "Leaning back into the sofa cushions, compressed abdominal area, shoulders slightly rounded forward.",
    "head_position": "Centered, tilted very slightly to the subject's right, chin level."
  },
  "camera_and_perspective": {
    "angle": "Eye-level relative to the feet, looking slightly upward at the face due to leg elevation.",
    "focal_length": "Wide angle (approx 24mm-28mm) creating significant depth distortion between feet (foreground) and head (mid-ground).",
    "framing": "Vertical 3:4 aspect ratio. Feet dominate the bottom right quadrant. Head centered in the upper third.",
    "depth_of_field": "Deep depth of field; face and feet are both relatively sharp, background slightly softer but distinct."
  },
  "lighting_and_atmosphere": {
    "primary_source": "Natural daylight entering from large window on image-right.",
    "secondary_source": "Backlight/screen glow from the television directly behind the subject.",
    "quality": "Soft, diffuse mixed lighting. Shadows are soft and fall to the image-left.",
    "reflections": "Slight sheen on the skin of the face and shins.",
    "contrast": "Moderate contrast, slightly backlit appearance due to the bright TV screen."
  },
  "environment_and_props": {
    "location": "Modern living room apartment.",
    "seating": "Beige/light grey sofa with a large, shaggy grey faux-fur pill
```

## Intimate Golden Hour Romantic Film Still Prompt for Nano Banana Pro

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photoreal_cinematic_romantic_closeup",
      "version": "v1.0_GOLDEN_HOUR_FLOWER_TUCK_INTIMATE_FILM_STILL",
      "priority": "highest"
    },

    "references": {
      "reference_image_1": {
        "source": "UPLOAD_REFERENCE_IMAGE",
        "purpose": "POSE_INTIMACY_LIGHTING_TEXTURE_REFERENCE",
        "strict_lock": true,
        "match_reference_priority": "MAX",
        "preserve_hand_to_face_gesture": true,
        "preserve_distance_and_eye_lines": true,
        "preserve_shallow_dof_and_grain": true,
        "preserve_color_mood": true,
        "no_style_drift": true
      },
      "reference_image_2": {
        "source": "UPLOAD_FACE_REFERENCE (OPTIONAL)",
        "purpose": "FACE_IDENTITY_LOCK_FEMALE",
        "strict_lock": true,
        "face_similarity_priority": "MAX",
        "no_identity_blending": true,
        "no_beautify": true,
        "no_age_shift": true,
        "preserve_skin_texture": true,
        "preserve_facial_proportions": true,
        "preserve_expression": true
      },
      "reference_image_3": {
        "source": "UPLOAD_FACE_REFERENCE (OPTIONAL)",
        "purpose": "FACE_IDENTITY_LOCK_MALE",
        "strict_lock": true,
        "face_similarity_priority": "MAX",
        "no_identity_blending": true,
        "no_age_shift": true,
        "preserve_skin_texture": true,
        "preserve_facial_proportions": true,
        "preserve_expression": true
      }
    },

    "creative_direction": {
      "concept": "An intimate romantic close-up in a lush green meadow: the man gently tucks a pink flower near the woman's hairline while they hold eye contact. Shot like a dreamy 35mm film still with visible grain and soft bokeh.",
      "mood": "tender, nostalgic, sensual but wholesome, poetic",
      "style_keywords": "35mm film grain, soft natural light, close intimacy, organic realism"
    },

    "scene": {
      "location": "wildflower meadow / countryside greenery",
      "background": "soft blurred green foliage and grass, natural bokeh, no buildings",
      "time": "late afternoon / golden hour",
      "weather": "calm, warm, gentle breeze"
    },

    "subjects": {
      "female": {
        "wardrobe": "simple white cotton dress or top with delicate straps/sleeves",
        "hair": "long brunette hair, natural texture, parted and falling softly",
        "expression": "soft gaze, calm, slightly smiling with warmth",
        "pose": "still, leaning slightly toward him, relaxed shoulders"
      },
      "male": {
        "wardrobe": "white sleeveless top / tank, casual",
        "hair": "dark wavy hair, slightly messy, natural",
        "facial_hair": "light stubble or short beard",
        "gesture": "hand gently holding a pink cosmos-like flower at her temple, fingers natural and careful",
        "accessory": "simple wristwatch (subtle, rea"
      }
    }
  }
```

## Woman Interacting with Bengal Tiger in Sanctuary

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
"Young woman, tanned skin tone, very long dark wavy hair.",
        "apparel": "White long-sleeve blouse tucked into a matching white ruffled mini skirt.",
        "expression": "Smiling warmly, looking down at the tiger with affection.",
        "pose": "Standing next to a wooden platform, leaning slightly over it."
      },
      "animal": {
        "species": "Adult Bengal Tiger.",
        "appearance": "Orange fur with distinct black stripes, massive paws.",
        "pose": "Lying comfortably on a wooden platform (table). Head lowered, eyes partially closed.",
        "action": "Gently licking the palm of the woman's hand."
      },
    "interaction": {
      "contact": "The woman is extending her right hand palm-up under the tiger's chin. The tiger's tongue is extended, making contact with her hand/fingers. Her left hand is resting gently on the tiger's neck/shoulder.",
      "mood": "Trusting, peaceful, gentle."
    },
    "environment": {
      "setting": "Outdoor wildlife sanctuary enclosure / shelter.",
      "structures": "Wooden roof overhead with visible slat beams, wire mesh fencing in the background.",
      "lighting_conditions": "Bright daylight filtering through the roof slats and wire mesh, creating dappled light and shadows.",
      "background_elements": "Rocks and a small waterfall feature visible through the mesh fence on the left."
    },
    "camera_technical_values": {
      "perspective": "Eye-level with the standing subject.",
      "focal_length": "35mm (Standard wide angle, capturing the context of the enclosure).",
      "aperture": "f/4.0 or f/5.6 (Keeps both the woman and the tiger's head in focus, background slightly softened).",
      "shutter_speed": "1/250s (Freezing the motion of the tiger's tongue).",
      "iso": "ISO 200 (Daylight).",
      "framing": "Medium shot, capturing from the waist up of the woman and the full body of the lying tiger."
    },
    "lighting_quality": {
      "type": "Natural Ambient Daylight.",
      "direction": "Overhead/Backlit from the open sides of the shelter.",
      "shadows": "Soft shadows on the subjects' faces, brighter highlights on the wooden platform."
    }
```

## Futuristic Laboratory Text Accuracy Test Prompt

> Sinematik, fütüristik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A high-resolution cinematic shot of a futuristic laboratory desk. On the desk, there is a glowing holographic screen displaying the word "{argument name="holographic text" default="SYNTHESIZE"}" in uppercase bold sans-serif font. Next to it, a handwritten sticky note reads '{argument name="sticky note text" default="Batch #7: Error 404!"}'. In the background, a neon sign on the wall is shaped like a circle with the Chinese characters "{argument name="neon sign text" default="Core Technology"}" curved along the top edge. The entire scene is reflected on a polished metallic surface where the text appears mirrored but legible.
```

## Hyper-Realistic Ana de Armas Profile Macro Shot

> Fotogerçekçi görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "request_metadata": {
    "version": "2.0",
    "priority_focus": "Hyper-realistic skin textures and identity fidelity",
    "aspect_ratio": "3:4"
  },
  "subject_configuration": {
    "identity": {
      "name": "{argument name="celebrity name" default="Ana de Armas"}",
      "reference_mode": "strict_identity_matching",
      "source_reference": "uploaded_files",
      "preservation_weight": 1.0,
      "angle": "Extreme profile view"
    },
    "facial_attributes": {
      "eyes": {
        "primary_color": "Natural Green",
        "secondary_color": "Hazel",
        "reflection_type": "Realistic catchlights",
        "aesthetic_constraint": "Avoid synthetic gloss or excessive shine"
      },
      "lips": {
        "state": "Parted / Moist",
        "surface_texture": "Soft natural ridges",
        "finish": "Glossy sheen without distortion"
      },
      "hair": {
        "color": "Dark Brunette",
        "state": "Saturated / Wet",
        "styling": "Clumping in natural strands, adhered to temples and neck"
      }
    }
  },
  "environmental_rendering": {
    "moisture_fx": {
      "sweat_layer": "Fine glistening mist across the bridge of nose and forehead",
      "water_droplets": "Micro-droplets scattered on cheekbones and jawline",
      "surface_tension": "Realistic liquid adhesion to skin"
    },
    "lighting_and_color": {
      "lighting_style": "Soft-box diffusion",
      "temperature": "Cool tones",
      "color_palette": ["Steel Blue", "Soft Cyan", "Natural Skin Tones"],
      "background": {
        "description": "Minimalist bokeh",
        "colors": ["Light Grey", "Pure White"],
        "depth_of_field": "Shallow"
      }
    }
  },
  "technical_execution": {
    "rendering_engine": "CGI Photorealistic",
    "focal_length": "85mm macro",
    "texture_detail": "Pore-level resolution",
    "post_processing": "Raw photography style, no airbrushing"
  }
}
```

## Ana de Armas Winter Ski Selfie Prompt for Nano Banana Pro

> Logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
An extremely detailed, high-resolution smartphone selfie photograph of actress Ana de Armas during a sunny winter ski vacation. She is smiling warmly while looking directly into the camera. Her face shows realistic natural skin texture with visible pores, soft freckles, and rosy cheeks flushed from the cold mountain air. Her distinctive blue-green eyes appear bright, sharp, and reflective in the sunlight. She is wearing a thick, textured oatmeal-colored ribbed knit beanie pulled low over her forehead, with large glossy black ski goggles resting on top of her head. She has on a pristine white quilted puffer jacket featuring a contrasting black fleece-lined high collar and a row of black snap buttons down the front. Her long blonde hair falls naturally in soft waves, framing her face and resting on her shoulders. The background shows a breathtaking alpine landscape beneath a clear blue sky, with sun-lit snow-covered mountain peaks. To the right behind her, a ski lift structure with visible chairs and cables can be seen, along with a pair of white alpine skis planted upright in the snow, displaying a black HEAD logo. Bright high-altitude sunlight creates crisp shadows and highlights the textures of the snow, clothing, and facial features.
```

## Ultra-Realistic Black and White Portrait with Identity Lock

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic 8K cinematic black-and-white portrait photograph, portrait aspect ratio 1664*2080. An 18-year young handsome man with a slim skinny body, lean physique, narrow shoulders and waist, youthful proportions, captured in a COMPLETELY NEW attitude-heavy pose with a NEW background position. He is standing this time (not seated), slightly off-center in the frame, body angled three-quarters away from the camera, one shoulder closer to lens, head tilted downward with chin tucked, strong swag-filled stance. One hand casually gripping the horse lead near his thigh, the other hand lifted near chest level with relaxed fingers to clearly show, rings. Keep my face exactly the same as in thel uploaded photo - do not change or edit my face. 100% face accuracy. Facial expression is cold, detached, controlled 12.1K dominance; gaze downward and sideways, partially hidden behind dark sunglasses, creating a- mysterious authority vibe. Natural facial structur with light stubble, real skin pores
```

## Close-up Portrait with Persian Cat

> Minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Close-up portrait of a young man {argument name="man's name" default="Noor"} with long  messy, voluminous dark hair, holding a fluffy white Persian cat in front of his face. The cat has bright golden eyes and a soft pink nose, looking confidently into the distance. The background is minimal, with soft indoor lighting and neutral wall tones. The man's intense gaze is partially visible over the cat's head, creating a calm yet intriguing composition. Cozy and natural atmosphere.
```

## Viral Lifestyle Bed Pose Portrait Prompt

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{

  "content_goal": "viral lifestyle / casual bed pose post",

  "image_type": "ultra-photorealistic indoor portrait",
  "visual_style": {
    "aesthetic": "editorial, cozy, intimate, cinematic",
    "vibe": "relaxed, approachable, soft",
    "realism": "high-end, professional realism"
  },
  "composition": {
    "framing": "mid-to-full body",
    "camera_angle": "eye-level or slightly above",
    "subject_position": "seated or reclined on bed",
    "perspective": "natural, mirror-style or direct view"
  },
  "subject": {
    "description": "young adult, casual, relaxed body posture",
    "pose": "legs bent or stretched, hands naturally placed",
    "body_language": "calm, intimate, soft",
    "expression": "gentle, contemplative, approachable",
    "gaze": "toward camera or slightly aside"
  },
  "facial_details": {
    "emotion": "soft, natural, serene",
    "micro_details": "realistic skin texture, subtle highlights"
  },
  "wardrobe": {
    "clothing": "soft lounge wear or sleepwear",
    "textures": "cotton, linen, or semi-sheer fabric",
    "color_tones": "neutral, pastel, or soft whites"
  },
  "environment": {
    "location": "bright bedroom with minimal decor",
    "background": "white or soft-colored bedding, subtle floral or potted plants",
    "atmosphere": "cozy, airy, intimate"
  },
  "lighting": {
    "type": "soft natural daylight",
    "quality": "diffused, gentle, flattering",
    "direction": "side or front from window",
    "shadow_style": "minimal, soft shadows to enhance contours"
  },
  "color_palette": {
    "primary_colors": ["soft whites", "creams", "light neutrals"],
    "mood": "warm, calm, intimate"
  },
  "camera_details": {
    "camera_type": "smartphone or DSLR simulation",
    "lens": "wide-angle (24–28mm)",
    "focus": "sharp on subject with natural depth",
    "depth_of_field": "soft background blur",
    "realism": "ultra-photorealistic"
  },
  "quality_control": {
    "skin_realism": "natural texture, subtle highlights",
    "fabric_realism": "soft, realistic drape and folds",
    "ai_artifacts": "none",
    "professional_finish": "editorial-grade"
  },
  "overall_mood": "cozy, intimate, soft, serene",
  "intended_use": {
    "primary": "viral lifestyle or bedroom content post on X",
    "secondary": "personal branding, editorial photography reference"
  }
}
```

## Playful Beach Selfie of Josephine Langford

> Fotogerçekçi logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_prompt": {
    "subject": {
      "description": "Young woman , Fair skin tone, long straight light brown hair with some strands blowing in the wind.",
      "pose": "Selfie angle, slightly tilted head, sticking tongue out playfully, looking off-camera to the side.",
      "visible_body": "Shoulders, chest, and partial upper torso visible."
    },
    "attire": {
      "top": "{argument name="bikini color" default="Black"} bikini top with lace trim detailing on the edges and thin straps.",
      "jewelry": [
        "Gold layered necklace.",
        "Gold cross pendant with small embedded crystals.",
        "Gold 'CD' logo charms integrated into the chain (Dior style)."
      ]
    },
    "environment": {
      "location": "Beach setting.",
      "background": {
        "ocean": "Choppy ocean waves with white foam, blue-grey water.",
        "sky": "Overcast sky with bright patches, white and grey clouds.",
        "distant_details": "Silhouette of a distant pier or structure and small figures in the water."
      }
    },
    "lighting_and_atmosphere": {
      "type": "Natural daylight, slightly backlit causing soft shadows on the face.",
      "mood": "Playful, casual, summer vibe, beach day.",
      "color_palette": "Natural tones, cool ocean blues, warm skin tones, bright sky."
    },
    "technical_specs": {
      "quality": "4k, HD, Ultra-realistic, high resolution.",
      "style": "Photorealistic selfie, candid shot.",
      "focus": "Sharp focus on the face, slightly softer background depth of field."
    }
  }
}
```

## Ancient Zombie (Kyonsi) in a Bamboo Forest

> Manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ancient sealed yokai...🌙
Don't get lost in the bamboo forest 🎋
```

## Photorealistic Spanish Beauty Portrait in Urban Tropical Setting

> Fotogerçekçi, retro logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_configuration": {
    "aspect_ratio": "9:16",
    "quality_settings": {
      "resolution": "4k",
      "definition": "Ultra HD",
      "style": "Photorealistic",
      "lighting": "Natural daylight, soft shadows",
      "camera_focus": "Sharp focus on subject, shallow depth of field"
    }
  },
  "subject": {
    "description": "Young Woman  standing outdoors",
    "appearance": {
      "hair": "Shoulder-length wavy auburn/brown hair, styled in a half-up look with two small pigtails/buns on top",
      "skin": "Light skin tone, natural makeup",
      "expression": "Calm, neutral expression, direct eye contact",
      "pose": "Standing comfortably, one arm relaxed, one hand near skirt"
    }
  },
  "attire": {
    "top": "Red off-the-shoulder crop top with puffy short sleeves and sweetheart neckline",
    "bottom": "Blue denim-like tiered maxi skirt with ruffles",
    "accessories": [
      "Large beige macramé/crochet tote bag on right shoulder",
      "Large floral dangle earrings",
      "Delicate silver necklace",
      "Gold chain bracelet on left wrist"
    ]
  },
  "environment": {
    "setting": "Urban tropical street scene",
    "background_elements": [
      "White building facade with black barred windows",
      "Large tropical palm fronds and green foliage",
      "Street sign reading 'NO PARKING' / 'NO ESTACIONAR' with 'San Juan' logo"
    ],
    "props": [
      "Dark green vintage Toyota sedan parked on the side",
      "Tabby cat sitting on the trunk of the car"
    ]
  },
  "technical_modifiers": [
    "4k",
    "8k",
    "HDR",
    "highly detailed",
    "cinematic photography",
    "vibrant colors",
    "lifestyle portrait",
    "masterpiece"
  ]
}
```

## Hogwarts-Style Photoshoot Portrait

> Portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
USE UPLOADED PHOTO AS REFERENCE.HOGWARTS-STYLEPHOTOSHOOT. THE GIRL IS POSING, IN A BLACK ROBE, THE UNDERSIDE OF THE ROBE IS RED, A WHITE COLLAR AND A TIED TIE OF GRYFFINDOR COLOR ARE VISIBLE. HER HAIR IS LOOSE, A DILAPIDATED, OLD BOOK IS PRESSED TO HER BODY IN HER HANDS. HE HOLDS A MAGIC WAND IN ONE HAND. A WHITE OWL SITS ON THE SHOULDER, THE BACKGROUND IS AN OLD STONE WALL, THE BACKGROUND IS SLAY. THEMATIC PHOTO SESSION. DETAILING, HIGH QUALITY.PORTRAIT.
```

## Gothic Elegance Fine-Art Editorial Portrait

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "Objective": "Create a cinematic fine-art portrait with gothic elegance and high-fashion editorial refinement",
  "PersonaDetails": {
    "Subject": {
      "Type": "Young woman",
      "Skin": {
        "Tone": "Pale",
        "Details": "Subtle freckles, natural skin texture preserved"
      },
      "Eyes": "Deep grey-green eyes with an emotionless, haunting gaze",
      "Hair": {
        "Style": "Long dark hair",
        "Movement": "Softly windswept across the face with natural texture"
      },
      "Expression": "Calm, detached, mysterious"
    }
  },
  "Wardrobe": {
    "Dress": {
      "Type": "Elegant black high-neck dress",
      "Details": "Sculpted black roses adorning the chest",
      "Style": "High-fashion, gothic couture"
    }
  },
  "SceneDescription": {
    "Environment": "Minimalist studio setting",
    "Background": {
      "Color": "Charcoal grey",
      "Mood": "Dark, understated, atmospheric"
    }
  },
  "Composition": {
    "Framing": "Mid-length to close-up portrait",
    "Balance": "Centered, poised, editorial composition",
    "DepthOfField": "Shallow depth of field isolating the subject"
  },
  "LightingAndMood": {
    "LightingStyle": "Soft directional studio lighting",
    "ShadowQuality": "Gentle, sculpting shadows",
    "Contrast": "Controlled, cinematic contrast",
    "Mood": "Moody, refined, haunting"
  },
  "ArtDirection": {
    "Style": "High-fashion editorial photography",
    "Aesthetic": "Gothic elegance, dark romanticism",
    "ColorPalette": "Muted monochrome tones (black, charcoal, soft greys)",
    "TextureEmphasis": [
      "Natural skin texture",
      "Fabric structure",
      "Sculpted floral elements"
    ]
  },
  "PhotographyStyle": {
    "Genre": "Fine-art studio portrait photography",
    "RealismLevel": "Ultra-realistic",
    "DetailLevel": "8K-quality detail with cinematic softness"
  },
  "Mood": {
    "Tone": "Cold, mysterious, emotionally distant",
    "EmotionalImpact": "Haunting stillness and quiet power"
  },
  "NegativePrompt": [
    "bright colors",
    "romantic smile",
    "glamour makeup",
    "busy background",
    "plastic skin",
    "cartoon",
    "anime",
    "low contrast"
  ],
  "ResponseFormat": {
    "Type": "Single image",
    "Orientation": "Portrait",
    "AspectRatio": "2:3"
  }
}
```

## Ultra-Photoreal Candid Street Romance Film Still

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photoreal_candid_street_romance",
      "version": "v1.0_ISTANBUL_UNIVERSITY_FIRST_MEET_LOVE_EN",
      "priority": "highest"
    },

    "output_settings": {
      "aspect_ratio": "4:5",
      "orientation": "portrait",
      "resolution_target": "ultra_high_res",
      "render_style": "ultra_photoreal_candid_street_film_still",
      "sharpness": "crisp_but_natural",
      "film_grain": "subtle_35mm",
      "color_grade": "true_to_life_natural",
      "dynamic_range": "natural_not_hdr",
      "skin_rendering": "real_texture_no_retouch"
    },

    "global_rules": {
      "camera_language": "35mm lens equivalent, eye-level, imperfect framing, candid documentary feel, focus on eyes when people are present",
      "lighting_language": "motivated natural light only (overcast daylight or soft morning sun), deep but detailed shadows",
      "authenticity_markers": "no studio look, no HDR, no AI glow, natural colors, real street atmosphere"
    },

    "creative_prompt": {
      "scene_summary": "A quiet love story begins in {argument name="city" default="Istanbul"}. Two university students meet for the first time at the main gate of {argument name="university name" default="Istanbul University"}. A candid, unposed moment — as if caught accidentally by a street photographer.",

      "subjects": {
        "count": 2,
        "description": "a young man and woman in their early 20s, university students, ordinary and real, not model-like",
        "expression": "subtle curiosity, shy eye contact, a small uncertain smile — restrained, natural",
        "skin_and_face": "natural skin texture, no beauty retouch, slight under-eye shadows, real imperfections"
      },

      "wardrobe_and_style": {
        "makeup": "very minimal, natural makeup only",
        "clothing": "simple everyday student clothing in neutral tones (beige, grey, navy, soft brown), slightly wrinkled fabric",
        "accessories": "backpacks or tote bags, books held naturally in arms — no logos"
      },

      "micro_action": "they pause briefly while passing each other; their eyes meet; one adjusts the books in their arms; a half-smile forms before words",

      "environment_details": {
        "location": "Istanbul University main entrance gate",
        "background": "historic stone gate, worn pavement, passing students softly out of focus, trees and campus walls",
        "street_elements": "subtle movement of people in the background, light breeze, everyday campus life"
      },

      "lighting": "soft natural daylight, slightly diffused, no dramatic contrast, realistic skin tones",

      "composition": "eye-level medium shot, slightly off-center framing, faces clearly visible and sharp, background gently receding, no symmetry",

      "mood": "quiet, human, intimate, observational — love as a small moment, not a performance"
    },

    "negative_prompt": [
      "studio lighting",
      "beauty retouch",
      "
```

## Chiaroscuro Portrait with Identity Swap

> Sinematik, minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{   "meta": {     "image_dna": {       "type": "Photo",       "orientation_lock": "LOCKED: Orientation preserved 9:16",       "sensor_emulation": "Sony Alpha / 35mm Film Grain Emulation"     }   },   "spatial_orientation_engine": {     "subject_facing_direction": "CRITICAL: Head turned to LEFT (Viewer's Left) and Tilted UP",     "body_rotation": "Torso angled slightly to Viewer's Right, Left Shoulder forward",     "camera_position_relative": "Camera is at eye-level relative to torso, slightly below eye-level relative to face tilt"   },   "camera_optics_and_geometry": {     "lens_profile": {       "focal_length": "85mm (Portrait Telephoto)",       "aperture": "f/2.8 (Shallow Depth of Field, focus on eyes/lips)",       "lens_character": "Cinematic Softness with High Micro-Contrast"     },     "optical_flaws": [       "Film Grain (ISO 800)",       "Soft Focus Falloff on Shoulder",       "Slight Bloom on Highlights"     ]   },   "environment_and_physics": {     "lighting_engine": {       "primary_source": "Hard Spotlight / Slit Light from Top-Left (10 o'clock high)",       "radiosity_color_bleed": "Warm skin tones reflecting onto inner collar of garment",       "shadow_structure": "Chiaroscuro: Deep, crushed blacks on the right side of the face/background",       "volumetrics": "Clean air, minimal atmospheric haze"     },     "surface_physics": {       "weather_impact": "None (Studio Environment)",       "material_response": "High specular reflectivity on skin (shoulder/nose/cheeks) indicating moisture/oil"     }   },   "scene_text_ocr": {     "detected": false,     "content": []   },   "objects_and_actors": [     {       "id": "MAIN_SUBJECT",       "role": "Identity Swap Target",       "pose_engineering": {         "skeletal_rig": "Cervical spine extended and rotated left. Left shoulder elevated. Chin lifted.",         "gaze_vector": "Eyes looking Up and to the Left (following the light source).",         "interaction_physics": "Garment draped loosely, gravity pulling fabric down off shoulders."       },       "physiological_state": {         "body_temp_visuals": "Radiant warmth, slight flush on cheeks.",         "skin_light_interaction": "Strong specular highlights on the shoulder and bridge of nose. Subsurface scattering visible on illuminated skin boundaries."       },       "clothing_simulation": {         "garment_stack": "{argument name="garment type" default="Camel/Brown Terry Cloth Robe"} or Textured Knit Cardigan",         "fabric_mechanics": "Heavy fabric weight, low tension, slipping off shoulders to reveal décolletage.",         "texture_and_wear": "High-friction terry loop texture, soft uneven surface."       },       "identity_placeholders": {         "skin_tone": "[[USE_REFERENCE_SKIN]]",         "face_structure": "[[USE_REFERENCE_FACE]]",         "hair_style": "[[USE_REFERENCE_HAIR]]"       }     }   ],   "off_screen_context": {     "reflections": "Catchlights in upper iris from the directional light source",     "implied_e
```

## Traditional Attire Portrait with Strict Face Preservation Prompt

> Portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create an image of my face exactly as in the attached file, 100% without any changes. A high-resolution 8k image selfie, high angle of a beautiful young woman with her hair styled in a large, loose braid cascading over one shoulder to the front, adorned with a cream-colored ribbon. Her hair appears healthy, dark brown, and waist-length, with a few strands of hair blowing across her face and some small wisps fluttering in the wind.

Facial features: Large, almond-shaped light brown eyes with long, naturally curled eyelashes. She has a dewy makeup style with soft pink blush on her cheeks and the tip of her nose. Her lips are coated with a gradient pink lip gloss, giving a full and moisturized look. Her skin is radiant and dewy, with light reflecting off her face and body, creating a luminous effect.
She has an ideal hourglass figure and full bust.

Pose: She is standing, a traditional black bag hanging from her belt, with a sweet smile and looking at the camera as if taking a selfie herself.

Clothing: She is wearing traditionally inspired clothing: a cream-colored dress with a delicate texture, paired with a black embroidered vest adorned with floral metal embellishments, and a wide gold belt with circular details. She is also wearing gold jewelry, including a necklace and earrings that softly reflect the sunlight.

Atmosphere: Natural outdoor environment
Stone pathway in the foreground
Green grass and trees in the background
Open sky with soft clouds
Realistic environment with clear depth and detail
No artificial blur or bokeh.

Color palette: Warm neutral colors, soft greens, gold accents
Tone: Natural and warm sunlight
Contrast: Balanced, realistic
Highlights: Soft sunlight lighting on the face, especially the eyes and jewelry from front.
Mood: Elegant, serene, natural
Image size 2:3, camera angle: Full body shot, high angle.
Do not alter her face from the image 100%.
```

## High-Fashion Editorial of Woman on Grand Staircase

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_details": {
    "subject": {
      "description": "elegant young woman descending a grand staircase",
      "appearance": "long wavy brunette hair falling over shoulders, looking down with a soft and graceful expression, fair skin tone",
      "pose": "walking down steps, one hand extending back to hold the railing, dynamic but poised body language"
    },
    "attire": {
      "outfit": "strapless midnight navy blue or black couture gown, sweetheart neckline, textured fabric, high-low hemline design with short front revealing legs and long flowing back train",
      "accessories": "minimal jewelry, strappy black high heel sandals"
    },
    "environment": {
      "setting": "luxurious interior with white horizontal wood paneling walls",
      "architecture": "white staircase with intricate ornate gold metal railing",
      "decor": "railing decorated with festive lush greenery garland and clusters of bright red berries"
    },
    "technical_specs": {
      "style": "ultra realistic, high fashion editorial photography, cinematic",
      "lighting": "soft warm ambient lighting, professional studio illumination, soft shadows",
      "quality": "8k resolution, incredibly detailed, sharp focus, masterpiece",
      "aspect_ratio": "9:16",
      "format": "vertical long shot"
    }
  }
}
```

## Candid Beach Lifestyle Photo

> Fotogerçekçi, minimal mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "A candid lifestyle beach photograph of a young woman sitting on a sandy beach, smiling and laughing while holding a glass bottle of water. She wears a minimal {argument name="bikini color" default="sage-green"} bikini with tie straps, her long wavy blonde hair sunlit and slightly tousled by the ocean breeze. She sits relaxed on a bright {argument name="towel color" default="yellow"} beach towel, turned slightly over her shoulder toward the camera. The background shows a sunny coastline with turquoise water, soft waves, distant beachgoers, and hillside buildings under a clear blue sky. The mood is carefree, warm, and authentic, capturing a spontaneous summer moment.",
  "style": [
    "lifestyle photography",
    "natural beach aesthetic",
    "candid portrait",
    "summer vibe"
  ],
  "lighting": [
    "natural sunlight",
    "soft midday light",
    "warm tones"
  ],
  "camera": {
    "shot_type": "three-quarter body candid",
    "angle": "slightly behind and to the side",
    "lens": "35mm",
    "depth_of_field": "moderate",
    "focus": "sharp subject with softly blurred background"
  },
  "environment": {
    "location": "sandy beach",
    "background_elements": [
      "ocean waves",
      "blue sky",
      "coastal buildings",
      "people relaxing on the beach"
    ],
    "atmosphere": "bright, relaxed, summery"
  },
  "quality": [
    "high resolution",
    "photorealistic",
    "natural skin tones",
    "fine detail"
  ],
  "mood": [
    "carefree",
    "joyful",
    "relaxed",
    "sunny"
  ]
}
```

## 90s Nostalgic Flash Photo Prompt for Nano Banana Pro

> Minimal, retro görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_generation_prompt": {
    "subject": {
      "description": "A stylish young woman with long, wavy vibrant ginger-auburn hair and straight-across full bangs.",
      "features": "Pale skin with subtle freckles, wearing bright red lipstick, nonchalant and moody facial expression, looking slightly downward.",
      "pose": "Sitting inside a white porcelain bathtub, knees tucked towards the chest, relaxed but edgy 90s-inspired posture.",
      "clothing": [
        "Light blue or mint green sleeveless tank top",
        "Chunky white knit socks with unique black and red graphic patterns (flame and heart motifs)"
      ],
      "accessory": "An unlit cigarette held casually in her mouth."
    },
    "environment": {
      "setting": "A vintage or retro-style bathroom from the 1990s.",
      "background_details": [
        "Light blue square ceramic wall tiles",
        "Industrial metal soap or tissue dispenser on the wall",
        "Edge of the white bathtub visible",
        "Minimalist items on the tub edge: a green lighter, a pack of red cigarettes, and a small black cosmetic bottle."
      ]
    },
    "technical_style": {
      "photography_type": "35mm film photography, nostalgic aesthetic",
      "lighting": "Hard flash photography, slightly overexposed, creating sharp shadows and high contrast.",
      "texture": "Visible film grain, raw and authentic analog texture, lo-fi aesthetic.",
      "color_palette": "Dominant cool blue tones from the tiles and top, contrasted with warm red from the hair and lipstick."
    },
    "composition": {
      "aspect_ratio": "9:16",
      "shot_type": "Medium shot, eye-level angle",
      "framing": "Vertical portrait orientation"
    },
    "negative_prompt": "modern bathroom, digital look, high gloss, smooth skin, 3d render, cartoon, deformed hands, bright studio lighting, extra fingers, blurry, low resolution"
  }
```

## Photorealistic Nightclub Selfie of Ana de Armas and Gemma Atkinson

> Fotogerçekçi, lüks portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "photorealistic nightclub portrait",
  "main_composition": "close-up frontal selfie-style shot of two young women posing together in a luxurious festive bar or nightclub during holiday season, sitting close on a plush seat or booth, playful intimate expressions with one making a duck-face pout and the other smiling subtly, warm red ambient lighting with Christmas decorations overhead and blurred patrons in background, glamorous party vibe",
  "subject_1_left": {
    "description": "beautiful young Ana de Armas in her early 20s, attractive feminine features with glamorous makeup (defined eyeliner, long lashes, contoured cheeks, glossy nude lips), long straight jet-black hair falling past shoulders, fair to medium smooth skin with healthy glow, curvy athletic figure",
    "clothing": "elegant white satin halter-neck mini dress with deep plunging V-neckline, long sleeves with draped fabric, feather or fur trim at short hem, fitted revealing style",
    "details": "playful duck-face pout looking at camera, relaxed seated pose with legs visible, subtle manicured nails, confident teasing expression"
  },
  "subject_2_right": {
    "description": "beautiful young Gemma Atkinson in her early 20s, attractive feminine features with glamorous makeup (defined brows, long lashes, subtle contour, neutral lips), long wavy dark brown hair cascading over shoulders, fair to tanned smooth skin with healthy glow, curvy hourglass figure",
    "clothing": "sparkling deep {argument name="dress color" default="red"} sequin or crystal-beaded halter mini dress with thin straps and square neckline, fitted bodycon style ending mid-thigh, white fluffy fur stole or coat draped over shoulders and arm",
    "details": "subtle soft smile looking slightly to the side, one arm raised resting behind head or on seat, legs crossed elegantly, long dangling crystal earrings visible"
  },
  "environment": {
    "foreground": "plush light-colored seat or booth with white fur accents, women's legs and dresses in sharp focus",
    "midground": "two women centered close together",
    "background": "dimly lit upscale bar or nightclub with warm red neon lighting, festive Christmas decorations including hanging red ornaments, garlands, icicle lights, and greenery overhead, blurred bar counter with bottles and patrons in background, partial signage visible (possibly 'OMA' or similar)"
  },
  "lighting_and_atmosphere": "warm dim ambient red and pink neon lighting with overhead spotlights creating intimate glow, subtle highlights on skin, sequins, and satin fabric with sparkling reflections, festive holiday party vibe with high contrast between dark background and bright decorations, luxurious sensual nightlife aesthetic, photorealistic detail",
  "technical_quality": "highly detailed, sharp focus on faces, fabric textures (sequins sparkle, satin sheen, fur fluff), hair strands, and jewelry reflections, 8k resolution, realistic skin g
```

## Black and White Futuristic House from Airplane Window

> Fütüristik manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
a window looking out an airplane and you can see a 4k image of a futuistic, very modern house on top of a mountain with snow, nothing is surrounding the house expect clouds, and snow the angle in which the photo is taken is. slightly from above, the picture is black and white and looks like it was shot on camera, the photo is taken straight out of the window not from the side.
```

## Edit Prompt: Woman in Bavarian Dirndl (Strict Background Preservation)

> Fotogerçekçi, lüks görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "task_configuration": {
    "type": "EDIT",
    "edit_scope": "foreground_subject_only",
    "background_handling": "STRICT_PRESERVATION_LOCK",
    "render_engine": "photorealistic_amateur"
  },
  "subject_definition": {
    "identity": "Woman",
    "pose": {
      "posture": "standing straight, slight contrapposto",
      "legs": "one knee slightly bent",
      "arms": "relaxed naturally at sides",
      "head_orientation": "facing camera"
    },
    "expression": {
      "mood": "calm, confident, warm",
      "mouth": "relaxed",
      "eyes": "direct engagement"
    },
    "attire": {
      "outfit_name": "Premium Bavarian Dirndl",
      "bodice": {
        "color": "navy-blue",
        "material": "structured fabric",
        "ornamentation": "silver lace details",
        "construction": "visible seams, fitted"
      },
      "blouse": {
        "color": "white",
        "style": "puff-sleeve",
        "material": "cotton"
      },
      "apron": {
        "color": "soft light-blue",
        "material": "smooth matte fabric",
        "closure": "satin bow tied at waist"
      }
    }
  },
  "environment_definition": {
    "context": "indoor creator setup",
    "background_rule": "maintain exact reference background pixels",
    "modification_permission": "NONE for background"
  },
  "composition_and_layout": {
    "camera_sensor": "smartphone_or_basic_digital",
    "framing": "full_body_vertical",
    "perspective": "eye_level",
    "aesthetic": "casual_snapshot"
  },
  "lighting_and_optics": {
    "source": "indoor_daylight_window",
    "quality": "diffused, soft, warm",
    "shadows": "soft_natural_falloff",
    "intensity": "moderate_amateur_level"
  },
  "material_and_texture": {
    "fabric_surface": "smooth, matte, premium",
    "prohibited_textures": [
      "fuzzy",
      "terry_towel",
      "high_gloss",
      "metallic_sheen",
      "synthetic_plastic_look"
    ],
    "skin_texture": "natural, unretouched_feeling"
  },
  "constraints_and_prohibitions": {
    "visual_style_bans": [
      "studio_lighting",
      "cinematic_grading",
      "AI_stylization",
      "fisheye_distortion",
      "ghosting",
      "fake_bokeh_blur"
    ],
    "content_bans": [
      "outdoor_scenery",
      "fantasy_elements"
    ]
  }
}
```

## Cinematic Portrait of Indian Astronaut in ISRO Spacesuit

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create an ultra-realistic 8K cinematic portrait of an astronaut inside an Indian spacecraft, looking out of the circular window at the Earth below, with the Indian subcontinent clearly visible. wearing a modern white and saffron ISRO spacesuit with the Indian flag emblem on the shoulder.
Expression is one of awe and quiet pride. The soft blue light from the Earth illuminates the face, while the complex buttons and screens of the cockpit glow faintly in the background. The mood is patriotic, futuristic, and deeply inspiring.Keep face and features exactly the same.
```

## Athletic Portrait in Public Restroom Stall

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "gender": "female",
    "skin_tone": "fair with warm undertones",
    "hair": {
      "color": "dirty blonde / light brown with visible roots",
      "style": "high ponytail",
      "texture": "straight with slight flyaways",
      "accessory": "wide, pale cream or white fabric headband"
    },
    "facial_features": {
      "eyes": {
        "color": "dark brown",
        "makeup": "heavy black winged eyeliner, defined lashes, groomed arched eyebrows",
        "gaze": "direct eye contact with the viewer, looking back over the left shoulder"
      },
      "nose": "straight bridge, button tip",
      "lips": {
        "color": "natural mauve/pink matte lipstick",
        "shape": "full, cupid's bow defined",
        "expression": "slightly parted, serious/sultry"
      },
      "cheeks": "smooth complexion with contouring on cheekbones",
      "ears": "visible left ear with small gold hoop earrings (lobe and cartilage)"
    },
    "hand_gesture": {
      "right_hand": {
        "action": "holding index finger vertically against lips in a 'shush' or 'quiet' gesture",
        "nails": "long, pointed almond shape, dark brown or black polish",
        "tattoo": "faint line-art tattoo visible on the inner forearm"
      },
      "left_hand": {
        "action": "palm resting flat against the tiled wall to the right",
        "nails": "matching dark polish"
      }
    },
    "apparel": {
      "top": "light sage green sports bra, thin straps, ribbed texture",
      "bottom": "darker forest green athletic shorts, tight fit, high-waisted",
      "accessories": "white wireless earbud in the left ear"
    },
    "pose": "standing, body turned away from the camera showing the back, head turned sharply to the left to face the camera"
  },
  "environment": {
    "location": "public restroom or locker room stall",
    "walls": {
      "right_side": "beige ceramic tiles with a horizontal brown accent stripe",
      "left_side": "dark gray or metallic stall partition door"
    },
    "details": {
      "signage": "partially visible white sign on the left door with red border and black text ('I'VE NEVER...', 'A GAME', 'I JUST RAN OUT', 'OF TIME')",
      "hardware": "silver metal stall latch/lock mechanism visible on the door frame",
      "ceiling": "drop ceiling tiles visible at the very top"
    }
  },
  "technical_details": {
    "aspect_ratio": "9:16 (vertical portrait)",
    "lighting": "overhead fluorescent indoor lighting, creating soft shadows and highlights on the skin and hair",
    "shot_angle": "eye-level, taken from behind the subject"
  }
}
```

## Ultra-Realistic Dual Celebrity Portrait in Couture Gowns

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "parameters": {
    "prompt": "High resolution, 8k, masterpiece, best quality, ultra-realistic, full body vertical shot, Ana de Armas and Sydney Sweeney standing side by side laughing joyfully, heads touching, embracing, Ana de Armas wearing a strapless sparkling silver-blue corset gown with tiered ruffles and a high thigh slit, Sydney Sweeney wearing a strapless sparkling rose gold corset gown with tiered ruffles and a high thigh slit, highly detailed sparkling fabric texture, silver high heels, luxury outdoor cafe patio background, glass windows, potted plants, sunlight, cinematic lighting, depth of field, fashion photography",
    "negative_prompt": "deformed, bad anatomy, disfigured, poorly drawn face, mutation, mutated, extra limb, ugly, disgusting, poorly drawn hands, missing limb, floating limbs, disconnected limbs, malformed hands, blurry, mutated hands, fingers, bad quality, grainy, low resolution, watermark, text, signature, crop, painting, drawing, illustration",
    "steps": 30,
    "cfg_scale": 7.0,
    "sampler_name": "DPM++ 2M Karras",
    "width": 1024,
    "height": 1820,
    "seed": -1,
    "model_suggestion": "SDXL or Juggernaut XL"
  }
}
```

## Playful Celebrity Selfie Prompt for Nano Banana Pro

> Fotogerçekçi logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_prompt": {
    "subject": {
      "description": "Young woman , Fair skin tone, long straight light blonde hair with some strands blowing in the wind, dua lipa in bikini very near behind her smiling. ",
      "pose": "Selfie angle, slightly tilted head, sticking tongue out playfully, looking the camera.",
      "visible_body": "Shoulders, chest, and partial upper torso visible."
    },
    "attire": {
      "top": "White and yellow bikini top with lace trim detailing on the edges and thin straps.",
      "jewelry": [
        "Gold layered necklace.",
        "Gold cross pendant with small embedded ruby crystals.",
        "Gold 'KEOR' logo charms integrated into the chain (Louis Vuitton style)."
      ]
    },
    "environment": {
      "location": "Maldive beach setting.",
      "background": {
        "ocean": "Choppy ocean waves with white foam, water houses, blue-grey water.",
        "sky": "Overcast sky with bright patches, sunset colored clouds.",
        "close_details": "A beautiful dua lipa in tiny red bikini in the water just behind her."
      }
    },
    "lighting_and_atmosphere": {
      "type": "Natural daylight, slightly backlit causing soft shadows on the face.",
      "mood": "Playful, casual, summer vibe, beach day.",
      "color_palette": "Natural tones, cool ocean blues, warm skin tones, sunset sky."
    },
    "technical_specs": {
      "quality": "4k, HD, Ultra-realistic, high resolution.",
      "style": "Photorealistic selfie, candid shot.",
      "focus": "Sharp focus on the face, slightly softer background depth of field."
    }
  }
```

## Minimalist Black and White Portrait Photography

> Minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Black and white portrait photography style, using a close-up of the uploaded person, presenting a half-profile pose, with naturally messy hair details; using strong chiaroscuro lighting, facing left, highlighting facial contours and skin texture, with a pure dark background; the subject wears simple black solid-color crew-neck clothing, the overall texture is delicate, the atmosphere is quiet and introverted, emphasizing emotional depth and film-level light and shadow layers.
```

## Red Carpet Fashion Photography Portrait

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_prompt_structure": {
    "subject": {
      "demographics": " female celebrity 
      "hair": "Shoulder-length textured bob, dark blonde roots fading to honey blonde waves, tousled style",
      "face": "Symmetrical features, blue eyes with winged eyeliner, groomed brows, fair skin with visible texture and pores, nude glossy lips, soft rosy blush",
      "pose": "Standing front-facing, head slightly turned to the left, direct eye contact, arms relaxed by sides",
      "expression": "Poised, confident, soft glare, elegant"
    },
    "fashion": {
      "garment": "Pale ice-blue custom satin gown",
      "design_details": [
        "Deep cowl neckline with crystal-embellished trim",
        "Thin spaghetti straps",
        "Off-the-shoulder crystal-encrusted arm bands/cuffs",
        "Fitted bodice",
        "High-sheen silk satin fabric",
        "Draped silhouette"
      ],
      "jewelry": [
        "Delicate diamond tennis necklace",
        "Large diamond stud earrings"
      ]
    },
    "environment": {
      "location": "Red carpet event, step-and-repeat media wall",
      "background": "Dark navy or black press wall with white repeated logos (partially visible text like 'glaad'), shallow depth of field (bokeh) to isolate subject"
    },
    "lighting": {
      "type": "Professional event flash photography",
      "qualities": "Bright frontal lighting, high contrast, specular highlights on the satin fabric and crystals, distinct catchlights in eyes, minimal shadows"
    },
    "technical_specifications": {
      "camera_gear": "Sony A7R V with 85mm f/1.4 GM lens",
      "settings": "f/2.8 aperture, ISO 100, shutter speed 1/200",
      "style_modifiers": [
        "Ultra photorealistic",
        "Hyper-detailed",
        "8k resolution",
        "Raw photo",
        "Subsurface scattering",
        "Fashion photography",
        "Cinematic lighting, 
      ]
    }
  }
}
```

## High-Fidelity Summer Bikini Portrait Selfie

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"subject": {
"description": "Young woman with deep tan and dark, long, wavy brown hair lying on a sun lounger.",
"body_details": {
"skin_texture": "High-fidelity skin texture with significant oil or sweat sheen, creating strong specular highlights on the chest, stomach, and face. Visible pores and natural skin imperfections.",
"physique": "Fit and toned physique with a flat stomach and defined waist. Bust volume is prominent, full, and heavy, exhibiting natural gravity behavior consistent with lying on the back (slight lateral displacement). Bust depth is visibly greater than ribcage depth. Clavicles are accentuated by the lighting.",
"face": "Oval face shape, groomed eyebrows, full lips slightly parted, neutral to sultry expression, gazing directly into the lens. Makeup appears natural with a glow."
},
"attire": {
"garment": "{argument name="bikini color" default="White"} string bikini set with a small, delicate floral print featuring yellow and purple flowers with green leaves.",
"fit": "Triangle top providing minimal coverage, string ties. Matching bikini bottoms visible at the hips."
},
"accessories": "Manicured nails with light yellow or lime tips."
},
"pose": {
"type": "Reclining / Lying down (Supine)",
"orientation": "Body angled slightly diagonally across the frame.",
"limbs": "Right arm bent with hand resting gently on the midriff/stomach. Left arm extended upward and out of frame, indicative of a selfie angle or high-angle handheld shot. Head tilted slightly to the right.",
"spine_and_torso": "Back flat against the white cushion, chest projected upward due to the reclining position."
},
"environment": {
"setting": "Outdoor poolside or patio terrace.",
"elements": [
"White cushioned lounge chair with a wooden frame.",
"Grey tiled flooring in the background.",
"Metal pole (likely an umbrella stand) visible in the upper left background."
],
"context": "Sunny day, leisure setting."
},
"camera": {
"angle": "High-angle / Top-down perspective (Selfie-style perspective).",
"framing": "Close-up to medium shot, capturing from the thighs up to the top of the head.",
"focus": "Sharp focus on the face and torso, slight depth of field blurring the background tiles.",
"lens_characteristics": "Standard mobile or wide lens characteristic of a handheld self-portrait."
},
"lighting": {
"type": "Direct, harsh natural sunlight.",
"direction": "Overhead and slightly from the front.",
"characteristics": "High contrast with sharp, defined shadows (e.g., shadow of the nose, shadow of the chin on the neck).",
"highlights": "Intense specular highlights on the oiled skin of the forehead, chest, shoulders, and stomach."
},
"mood_and_expression": {
"mood": "Relaxed, confident, sun-drenched, sultry.",
"expression": "Direct eye contact, calm and alluring demeanor."
},
"style_and_realism": {
"style": "Photorealistic, candid social media aesthetic.",
"fidelity": "Raw, unfiltered capture of texture and light. 8k resolution, ultra-detailed."
},
"colors_and
```

## Cinematic Black and White Biker Portrait

> Sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic black and white portrait of a handsome young man standing in an open field. He is wearing a classic leather biker jacket and dark Wayfarer-style sunglasses. He has a styled pompadour haircut and light stubble. The man is turned away from the camera, looking back over his left shoulder directly at the viewer. The background consists of a blurred field of tall grass and distant trees, creating a strong depth of field (bokeh) effect. The lighting is soft and natural, emphasizing the texture of the leather and the contours of his face. High-contrast fashion photography style.
```

## Cinematic Winter Portrait of Childlike Wonder Prompt

> Sinematik, retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "Objective": "Create a cinematic winter portrait capturing childlike wonder and joy during gentle snowfall",
  "PersonaDetails": {
    "Subject": {
      "Type": "Young girl",
      "Pose": "Reaching upward with an open palm toward falling snow",
      "Expression": "Joyful, curious, eyes sparkling with wonder",
      "Gaze": "Looking up at snowflakes as they land and melt on her skin",
      "Wardrobe": {
        "Top": "Knitted winter sweater",
        "Style": "Cozy, rustic, winter-appropriate"
      }
    }
  },
  "SceneDescription": {
    "Environment": "Rustic outdoor winter setting",
    "BackgroundElements": [
      "Clothes hanging on a line, gently swaying in the breeze"
    ],
    "Weather": {
      "Condition": "Gentle snowfall",
      "Details": "Snowflakes visible throughout the frame, some melting on skin"
    }
  },
  "MotionAndCinematography": {
    "CameraMovement": "Subtle orbiting camera movement around the subject",
    "MotionFeel": "Soft, natural motion in snow and background elements",
    "CinematicEffect": "Story-driven, immersive perspective"
  },
  "Composition": {
    "Framing": "Medium portrait with environmental context",
    "Focus": "Sharp focus on the girl's face and hand",
    "DepthOfField": "Shallow depth of field with soft background blur"
  },
  "LightingAndMood": {
    "Lighting": "Soft natural winter daylight",
    "ShadowQuality": "Gentle, diffused shadows",
    "ColorPalette": "Muted winter neutrals with warm skin tones",
    "Mood": "Warm, joyful, nostalgic, intimate"
  },
  "ArtDirection": {
    "Style": "Cinematic realism",
    "Aesthetic": "Wholesome, poetic winter storytelling",
    "TextureEmphasis": [
      "Knitted fabric",
      "Snowflakes",
      "Natural skin texture"
    ]
  },
  "PhotographyStyle": {
    "Genre": "Cinematic lifestyle / narrative photography",
    "RealismLevel": "High realism with emotional softness",
    "DetailLevel": "High detail without harsh sharpness"
  },
  "Theme": {
    "Concept": "Childhood wonder and connection with nature",
    "Season": "Winter"
  },
  "NegativePrompt": [
    "harsh lighting",
    "posed expression",
    "oversaturated colors",
    "studio environment",
    "cartoon",
    "anime",
    "blurry subject"
  ],
  "ResponseFormat": {
    "Type": "Single cinematic image or short animated-style frame",
    "Orientation": "Portrait",
    "AspectRatio": "2:3"
  }
}
```

## Mirror Selfie Athleisure Look with Detailed Anatomy

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"subject": {
"description": "Young woman with long, wavy, dirty blonde hair featuring honey highlights, falling loosely over the shoulders. She has fair skin with visible natural freckles on her nose and cheeks. She is wearing a matching grey two-piece athleisure set consisting of a ribbed, sleeveless cropped tank top and tight-fitting grey shorts with distinct cargo-style pockets on the glutes. She is wearing black ankle socks with a white Nike swoosh visible on the side.",
"anatomy_and_proportions": "Physique is fit and toned with a focus on lower body curvature. The glutes are prominent and shaped, emphasized by the tight shorts and the kneeling pose. The waist is tapered, leading to a wider hip ratio. The side profile of the chest is visible, showing natural volume and projection consistent with a fit body type, supported by the ribbed fabric. Shoulders are relaxed.",
"clothing_details": "The grey tank top has a ribbed texture and a racerback-style cut. The shorts are high-waisted, compression-style fabric with flap pockets situated squarely on the back of each leg. The socks are standard black athletic quarter-length."
},
"pose": {
"stance": "Kneeling on the floor, body angled roughly 45 degrees away from the mirror plane (quarter-turn back view). The torso is twisted slightly towards the mirror.",
"limbs": "Legs are folded underneath, shins flat against the carpet, sitting back towards the heels. The left arm hangs naturally by the side. The right arm is raised, elbow bent, holding a smartphone to capture the reflection.",
"head_and_gaze": "Head is turned to face the mirror directly. Eyes are looking at the phone screen/reflection. Chin is slightly tucked."
},
"environment": {
"setting": "Indoor bedroom interior.",
"background_elements": "A white paneled interior door with a silver handle is directly behind the subject. To the right, a black Marshall guitar amplifier sits on the floor against the wall. The floor is covered in plush grey wall-to-wall carpeting. White baseboards line the walls.",
"foreground_elements": "The edge of a black-framed full-length mirror is visible on the left side of the frame."
},
"camera": {
"perspective": "Mirror selfie perspective. The image is a reflection seen in a large standing mirror.",
"shot_type": "Medium-full shot, capturing the subject from the knees up to the top of the head.",
"focal_length": "24mm to 28mm equivalent (smartphone main camera).",
"depth_of_field": "Deep depth of field; both the subject and the immediate background (door, amp) are in focus."
},
"lighting": {
"type": "Natural diffuse daylight.",
"source": "Light source coming from the right side of the room (off-screen window), illuminating the subject's face and side profile.",
"quality": "Soft and even, creating gentle shadows on the left side of the body and behind the subject on the door.",
"shadows": "Natural contact shadows where the leg
```

## Long Exposure Light Trace Art Photography Portrait

> Minimal, retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
art photography, motion blur with strong long exposure light trace, light painting lines over his eyes, shot in a middle of the motionA photograph of young korean man, whit motion blur and pastel colors, captured in the style of Richard Avedon's photography. The composition does not include any other person, adding to the dynamic feel of movement. Shot with a retro color filter, the scene captures a lively atmosphere filled with color. Shot from a low angle using Kodak Portra film stock, in the style of Peter Lindbergh-chaos 10--ar 3:4--profile d45vod4 of a man in a white hoodie, soft pastel lighting, translucent white shirt, minimal background in yellow and light blue tones, dreamy and atmospheric mood, ultra-soft focus with diffused light and subtle glow edges-chaos 10 --ar 3:4
```

## Cinematic Lifestyle Portrait on Urban Promenade

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": {
    "environment": "modern urban riverside promenade",
    "ground_texture": "smooth stone pavement with subtle reflections",
    "background_elements": [
      "metal railing along river",
      "soft-focus city buildings",
      "overcast sky with diffused daylight"
    ],
    "depth_of_field": "shallow, cinematic background blur"
  },

  "subject": {
    "identity": "male_same_as_reference",
    "age_range": "mid_20s",
    "body_type": "slim_to_average",
    "facial_features": "same as reference",
    "expression": "calm, thoughtful, slightly distant gaze",
    "eye_direction": "looking slightly off-camera"
  },

  "pose": {
    "position": "seated on a low concrete ledge",
    "legs": "one knee bent up, other leg relaxed downward",
    "hand_pose": "elbow resting on knee, fingers lightly touching temple",
    "body_language": "introspective and relaxed"
  },

  "outfit": {
    "headwear": "plain neutral baseball cap without text",
    "top": "structured dark olive jacket over a light beige t-shirt",
    "bottom": "tailored charcoal chinos",
    "footwear": "minimal leather sneakers in off-white",
    "accessories": [
      "thin chain necklace",
      "simple ring on one finger",
      "round eyeglasses with thin metal frame"
    ]
  },

  "lighting": {
    "type": "natural soft daylight",
    "direction": "side-lit for gentle facial shadows",
    "mood": "moody but clean, editorial look"
  },

  "camera": {
    "lens": "50mm prime",
    "aperture": "f/2.8",
    "angle": "eye-level, slightly angled from the side",
    "framing": "full-body portrait with environmental context"
  },

  "style": {
    "photography_type": "cinematic lifestyle portrait",
    "color_grading": "muted earthy tones with soft contrast",
    "sharpness": "high subject clarity, smooth background"
  },

  "quality_tags": [
    "ultra-realistic",
    "high detail",
    "natural skin texture",
    "professional photography",
    "editorial aesthetic"
  ]
}
```

## Mixed-Media Crossover Portrait (Real and Cartoon)

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{ "Prompt": "Analyze the uploaded reference image and create a 64K DSLR resolution urban street portrait.   Use the same face from the reference image without changing facial features, maintain the same eye gaze, expression, makeup and texture details, maintain the same hair style from the reference image.   Recreate this person in a relaxed slouch pose (leaning against the curb with elbows resting on knees, chin propped in one hand) on a concrete curb in a quiet city street, maintaining their natural expression.   Next to them, place a smaller hand-drawn cartoon version of the same person with identical facial features, expression, and the edgy streetwear outfit (oversized vintage band tee tied at the waist, high-waisted distressed denim shorts, chunky white platform sneakers, and a cropped black leather jacket), drawn in a soft animation style with clean outlines and warm muted colors matching the nostalgic retro golden-hour vibe.   Background: textured cobblestone pavement with subtle moss spots, weathered building facade with muted terracotta and gray tones, faded street sign in the distance, soft natural golden-hour daylight.   Mixed-media composition blending hyper-realistic street photography with whimsical illustration, evoking themes of identity and self-reflection.   Cinematic realism, Octane render quality, sharp focus on subject's face and cartoon figure, shallow depth of field blurring background slightly, fine texture details on clothing fabric and pavement.", "text_elements": "@seven_cuz at the bottom", "aspect_ratio": "4:3" }
```

## Photorealistic Romantic Couple Portrait with Identity Preservation

> Fotogerçekçi portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "reference_faces": {
    "female": {
      "use_reference_image": true,
      "face_consistency": "high",
      "preserve_identity": true,
      "notes": "same facial structure, eyes, nose, lips, skin tone, and overall likeness as provided reference"
    },
    "male": {
      "use_reference_image": true,
      "face_consistency": "high",
      "preserve_identity": true,
      "notes": "same facial structure, beard pattern, jawline, smile, and skin tone as provided reference"
    }
  },

  "subjects": {
    "female": {
      "age": "young adult",
      "expression": "natural happy smile",
      "hair": {
        "color": "dark brown",
        "style": "loose or softly styled"
      },
      "pose": "relaxed, leaning slightly toward partner",
      "vibe": "warm, affectionate, candid"
    },
    "male": {
      "age": "young adult",
      "expression": "genuine smile",
      "hair": {
        "color": "dark brown",
        "style": "short, natural"
      },
      "facial_hair": "light beard or stubble",
      "pose": "arm around partner or standing close",
      "vibe": "protective, relaxed, affectionate"
    }
  },

  "interaction": {
    "relationship": "romantic couple",
    "body_language": "close, comfortable, natural intimacy",
    "hands": "holding hands or light embrace",
    "head_position": "slightly leaning toward each other"
  },

  "scene": {
    "location": "romantic outdoor or indoor setting",
    "examples": [
      "hotel room mirror selfie",
      "evening lights outdoors",
      "travel destination",
      "cozy city night"
    ],
    "background_style": "softly blurred, aesthetic",
    "time_of_day": "evening or golden hour"
  },

  "lighting": {
    "type": "soft natural light",
    "temperature": "warm",
    "effect": "smooth skin tones, romantic glow"
  },

  "camera": {
    "shot_type": "medium shot",
    "angle": "eye level",
    "focus": "faces sharp, background slightly blurred",
    "style": "lifestyle photography"
  },

  "photography_style": {
    "mood": "romantic, candid, intimate",
    "quality": "high-resolution, realistic",
    "color_grading": "soft warm tones"
  },

  "constraints": {
    "no_face_changes": true,
    "no_identity_mix": true,
    "no_cartoon_style": true,
    "no_exaggeration": true
  },

  "output": {
    "realism": "photorealistic",
    "detail_level": "high",
    "aspect_ratio": "4:5"
  }
}
```

## Ultra-Photorealistic Portrait Prompt for Nano Banana Pro

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a 4:5 ultra-photorealistic portrait of a young woman in her mid-20s with long, voluminous dark-brunette hair, wavy and slightly messy, swept back by her raised right hand in a candid, intimate moment. Preserve natural fair skin with visible pores, peach fuzz, and scattered freckles across the nose and cheeks, with a dewy hydrated finish. She has defined high cheekbones, a sharp jawline, brushed-up brows, captivating dark brown eyes, and full glossy lips in a neutral rose tone. Her nails are painted dark cherry red. She wears a white ribbed cotton tank top and a delicate gold chain necklace with a small crystal pendant, styled with effortless night-out “it-girl” glamour. The pose is a close-up with direct eye contact, head slightly tilted, lips softly parted, conveying an alluring yet confident expression. The background is a pitch-black void suggesting a nighttime street or club entrance. Lighting is harsh direct on-camera flash in paparazzi style, creating high contrast, bright facial highlights, and rapid fall-off into darkness. Shot on a 35mm prime lens with a Canon EOS 1V or Contax T2 look, Kodak Portra 800 or Fujifilm Superia 400 film emulation, f/2.8, 1/60, ISO 800, flash on. Sharp focus on the eyes, slight chromatic aberration, organic film grain, raw photo feel, 8K resolution, seductive, candid nightlife energy.
```

## Cinematic Blue Hour Street Portrait Prompt for Nano Banana Pro

> Sinematik logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": "blue-hour city street crossing with motion blur and glowing bokeh traffic lights",
  "subject": {
    "gender": "female",
    "age_range": "early 20s",
    "expression": "soft confident smile, calm and unbothered",
    "pose": "mid-stride walking across the street, body slightly turned back toward camera",
    "gaze": "looking at camera while walking",
    "vibe": "casual, grounded, real street moment"
  },
  "wardrobe": {
    "headwear": "dark beanie with small front logo patch",
    "outerwear": "oversized blue denim jacket",
    "bottom": "baggy cargo pants in muted olive/khaki tone",
    "footwear": "black sneakers",
    "styling_notes": "streetwear casual, comfortable fit, no over-styling"
  },
  "environment": {
    "location": "busy downtown street with storefronts and pedestrians",
    "background": "traffic cars with light trails, blurred people on sidewalks, city buildings fading into distance",
    "time_of_day": "evening blue hour, just after sunset",
    "weather": "cool dry evening, slightly hazy atmosphere"
  },
  "lighting": {
    "key_light": "natural blue-hour ambient light",
    "practicals": "warm street lamps and shop lights creating contrast",
    "look": "soft cinematic contrast",
    "realistic exposure",
    "no harsh highlights"
  },
  "camera": {
    "shot_type": "full-body street portrait in motion",
    "angle": "eye-level perspective",
    "lens": "35mm full-frame look",
    "aperture_style": "wide aperture for background separation and bokeh",
    "shutter_effect": "slight motion blur on legs and traffic, subject face still readable",
    "focus": "subject in focus with soft background blur"
  },
  "color_and_texture": {
    "color_palette": "cool blues and greys with warm orange/yellow city lights",
    "grading": "film-like, muted saturation, natural skin tones",
    "texture": "subtle film grain, realistic fabric texture, no smoothing"
  },
  "composition": {
    "framing": "subject centered slightly left, strong leading lines from road and buildings",
    "depth": "deep city perspective with layered lights",
    "energy": "movement in background, calm subject contrast"
  },
  "negative_prompts": [
    "plastic skin",
    "overly sharpened",
    "AI beauty face",
    "perfect symmetry",
    "hyper-saturated colors",
    "cinematic fog overload",
    "cartoon look",
    "studio lighting",
    "unrealistic glow",
    "extra limbs",
    "deformed hands"
  ],
  "quality_tags": [
    "cinematic realism",
    "street photography",
    "blue hour",
    "natural motion blur",
    "35mm film look",
    "authentic texture",
    "subtle bokeh"
  ]
}
```

## Cinematic Voyeuristic Portrait through Rain-Streaked Window

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_prompt": {
    "meta": {
      "aspect_ratio": "9:16",
      "orientation": "vertical",
      "quality": "ultra_photorealistic",
      "style": "Cinematic voyeuristic portrait"
    },
    "subject": {
      "description": "21-year-old woman with natural, alluring beauty",
      "face": "Visible through a rain-streaked window glass, pensive expression, face close to the pane, breathing on the glass creating a tiny fog patch",
      "skin": "Pale, cool-toned skin, appearing soft and diffused through the wet glass",
      "hair": "Loose, messy hair damp at the tips",
      "pose": "Standing behind the glass, one hand resting on the pane near her face, looking out into the night",
      "outfit": "Just an oversized men's white dress shirt, half-unbuttoned, slipping off one shoulder"
    },
    "environment": {
      "location": "A high-rise apartment window during a heavy rainstorm",
      "background_elements": [
        "Raindrops of various sizes on the glass",
        "Blurred bokeh of blue and orange city lights outside",
        "Reflections of the room's interior on the moist glass"
      ]
    },
    "lighting": {
      "type": "Warm interior lamp from behind + Cool blue street light from outside",
      "characteristics": [
        "Soft warm rim light on the hair",
        "Cool blue highlights on the raindrops",
        "Diffused light through the fog on the glass"
      ]
    },
    "photography_style": {
      "style": "Moody cinematic film still",
      "camera_look": "35mm lens with shallow depth of field",
      "imperfections": "Refractions and distortions caused by water droplets, chromatic aberration on the glass edges, authentic film grain",
      "mood": "Melancholic, intimate, alluring, quiet"
    },
    "render_quality": {
      "realism": "Refraction of light through water on glass",
      "detail_level": "Focus on the sharp raindrops on the glass surface vs the soft-focus face behind it"
    }
  }
}
```

## Ultra-realistic Portrait with Miniature Cartoon Self

> Fotogerçekçi, sinematik 3B sahne üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra realistic portrait of a smiling young man with black hair wearing a blue shirt, holding a tiny 3D cartoon version of himself between his fingers. The miniature character is jumping with both hands raised and wearing a blue shirt and white pants. Warm golden bokeh lights in the background. Soft cinematic studio lighting. Shallow depth of field. High detail skin texture. Natural facial expression. Playful and magical mood. Professional photography. 8k. Sharp focus. Creative concept. Pixar style mini character blended into real photo.
```

## Ana de Armas Identity Preservation Fusion Prompt

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

## Cinematic Winter Postcard Scene Prompt for Nano Banana Pro

> Fotogerçekçi, sinematik illüstrasyon üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create an ultra-realistic winter scene of a woman identical to the uploaded face reference (strictly preserve her face 1:1 no stylization or beautification). Scene & Composition Soviet blue street mailbox bolted to a brick entryway or plastered wall; dusk with soft falling snow. Vertical 4:5 from waist to head. The woman stands side-on, gently tucks a handwritten New Year postcard into the slot (stamp visible); a wisp of vapor breath. Background: courtyard garlands and a nearby fir with sparse silver tinsel; warm doorway bulb; faint bokeh from distant windows. Natural, candid, cinematic moment. Outfit Camel/tan double-faced sheepskin coat with plush cream fleece on collar & turn-back cuffs; cream rib-knit turtleneck + matching wide-leg trousers: white wool ushanka; knitted mittens; dark-brown shearling ankle boots. Natural nude makeup with real skin micro-texture. Look & Light Teal & orange tone: warm sodium doorway lamp as key; cool blue ambient fill from snow; soft rim on ushanka/fleece; gentle halation on bulbs; shallow DoF with fine 35mm grain (Canon AE-1/Fujifilm X100V "Classic Chrome" vibe). Color & Texture Frost on mailbox metal, paper fiber of postcard, knit and shearling detail. True-to-skin tones; no smoothing. Technical Tags 50-85 mm look, f/2-f/2.8, ISO 800-1250, 1/125 s, WB 3600-4200 K. mild vignette, high resolution. Negative Prompt wrong face/identity drift, smartphone in hand, modern LED signage, neon HDR, harsh flash, plastic skin, overexposed snow, cartoon/anime, logos/watermarks.
```

## Cozy Candid Snapshot with Giant Teddy Bear Prompt

> Fotogerçekçi görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_generation_prompt",
  "style_preset": "photographic_snapshot",
  "subject": {
    "demographics": "Young woman, light skin tone with visible freckles, petite fit physique",
    "hair": "Long straight platinum white-blonde hair, loose and falling over shoulders",
    "face": "Bright happy smile showing teeth, natural makeup, fresh-faced look"
  },
  "attire": {
    "top": "Tight dark olive green ribbed tank top/camisole, cropped fit",
    "bottom": "Cream/white pajama shorts with a pattern of small brown teddy bears",
    "accessories": "Small text tattoo on inner right forearm, barefoot"
  },
  "pose": {
    "action": "Sitting with knees bent on a grey sofa, hugging a giant beige plush teddy bear, hands gently holding the bear's snout/nose area",
    "body_language": "Affectionate, cozy, cheerful, relaxed"
  },
  "environment": {
    "background": "Indoor bedroom setting, large grey sectional sofa, beige tufted velvet headboard visible behind, vanity mirror with hollywood-style light bulbs in background",
    "lighting": "Soft natural indoor lighting, even illumination"
  },
  "technical_parameters": {
    "quality": "Raw photo, realistic skin texture, 4k, high resolution, candid social media style",
    "camera_angle": "Eye level, medium full shot"
  },
  "positive_prompt_string": "A photorealistic candid snapshot of a smiling young woman with platinum blonde hair and freckles sitting on a grey sofa hugging a giant beige teddy bear. She is holding the bear's snout with both hands. She wears an olive green ribbed crop top and cream shorts with a teddy bear print. In the background, a beige tufted headboard and a vanity mirror with lights are visible. Cozy bedroom atmosphere, 8k, highly detailed.",
  "negative_prompt_string": "cartoon, anime, 3d render, painting, drawing, bad anatomy, deformed hands, missing fingers, extra limbs, blur, noise, low quality, watermark, text, shoes, heavy makeup, dark lighting"
}
```

## Modern Moe Anime Illustration of a Teenage Girl's Eyes

> Elle çizilmiş illüstrasyon üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{ "action": "generate_image", "action_input": "modern moe style anime illustration, close-up of a teenage female character's eyes, cute round eye shape, numerous fine eyelashes with a soft and faint appearance, dense but airy and light-weight lashes drawn with a fine brush without clumps, long eyelashes slightly overlapping and covering the eyes, downcast look, vibrant irises filled with glittering particles and heart-shaped highlights, lovely expression, (framing bangs overlapping the eyes are left {argument name="left bang color" default="black"} and right {argument name="right bang color" default="ash-grey"}), polished finish with soft focus background bokeh, 4k, ultra high resolution, --ar 3:2 --no realistic, --no horror, --no low quality, --no sketch, --no blurry" }
```

## Cinematic Portrait with Miniature Chibi Figurine

> Fotogerçekçi, sinematik 3B sahne üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_description": "A cinematic, ultra-detailed portrait of a young elegant woman with soft blonde hair styled in loose waves, smiling gently while holding a miniature 3D cartoon figurine of herself on her palm. She is dressed in a pastel beige long coat layered over a cream knit sweater. The figurine mirrors her look precisely — same hairstyle, outfit, and colors — but designed in an adorable Pixar-inspired chibi style with oversized sparkling eyes, rounded features, and a joyful pose. The background features a warm studio setup with creamy bokeh lights, creating a cozy and premium atmosphere. Skin textures appear natural and realistic, while the figurine has a smooth, slightly matte toy-like finish.",
  "composition": {
    "shot_type": "Medium close-up",
    "angle": "Eye-level, slight tilt",
    "focus": "Sharp focus on woman’s face and figurine, soft blur background"
  },
  "style": {
    "overall": "Photorealistic portrait blended with stylized 3D character art",
    "lighting": "Soft diffused key light with warm rim glow",
    "colors": "Warm beige, cream, soft gold, muted pastels"
  },
  "technical_details": {
    "camera": "Canon EOS R5, 85mm lens, f/1.8",
    "features": "Ultra-high resolution 8k, cinematic depth, refined textures"
  }
}
```

## Moody Emo/Goth Portrait in Autumn Woodland with Identity Preservation

> Sinematik manzara üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the same face from the reference image without changing facial features 

{
  "prompt": "young western woman with pale skin and long dyed dark blonde hair, emo/goth style, sitting on forest ground in autumn woodland, moody dark atmosphere, dim blueish twilight lighting, soft shadows, cinematic low key lighting, slight fog in background",
  "subject": {
    "description": "20-25 year old female, delicate features, tired/introspective expression, eyes looking down, slightly parted lips, natural makeup with dark lipstick",
    "hair": "long straight blonde hair falling over shoulders and chest",
    "clothing": {
      "top": "tight white lace-trimmed camisole tank top, thin spaghetti straps, slightly sheer fabric, black bra straps visible underneath",
      "bottom": "baggy low-rise medium-wash blue jeans, intentionally worn and slightly dirty look, dark brown belt loosely visible",
      "accessories": [
        "black velvet choker with small silver pendant",
        "black beaded bracelet on right wrist",
        "black hair scrunchie on left wrist",
        "silver ring with dark stone on left hand ring finger",
        "small subtle tattoo on inner left forearm"
      ]
    },
  "pose": "sitting on forest floor, knees bent, leaning slightly forward, hands resting on/opening the top button of jeans, casual intimate moment, looking down at own hands/clothes",
  "environment": "dense autumn forest, fallen leaves, mossy ground, tree trunks, dim natural light filtering through trees, cold tones, slightly bluish cast, moody melancholic atmosphere",
  "style": "realistic photography, film grain, cinematic, soft bokeh background, shallow depth of field, 35mm lens feel, natural imperfections, raw emotional portrait, dark romantic aesthetic",
  "lighting": "low key, cool color temperature 4500-5500K, soft diffused light, deep shadows on face and body, subtle rim light on hair",
  "quality_tags": "highly detailed, sharp focus on face and upper body, realistic skin texture, detailed fabric texture, natural lighting, masterpiece, best quality, ultra realistic",
  "negative": "blurry, overexposed, bright daylight, warm tones, smiling, happy expression, heavy makeup, plastic skin, cartoon, anime, extra limbs, deformed hands, bad anatomy"
}
```

## Candid Urban Portrait with Identity Preservation

> Minimal, lüks mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A young woman is sitting casually on a white wooden bench, positioned slightly off-center, with her legs crossed and her posture relaxed yet confident. She is leaning back comfortably, resting her left arm behind her head, creating an effortless, candid pose that feels natural and unforced. Her face is softly angled upward and slightly to the side, with a calm, thoughtful expression and a gentle, almost dreamy gaze. She has medium-length, dark black hair styled in loose, natural waves that frame her face, parted casually and falling around her shoulders. Her skin tone is warm and medium, with smooth, natural texture and minimal makeup, giving a fresh, authentic look. She is wearing a black graphic varsity-style jacket with white sleeves, featuring bold pink and white patches and text designs across the chest and arms, layered over a black top. She pairs this with relaxed-fit dark blue denim jeans, slightly faded, adding to the laid-back street-style aesthetic. Subtle accessories like rings on her fingers add personality without overpowering the look. The background features an elegant white lattice wall with geometric cut-out patterns, creating a textured, architectural backdrop that contrasts softly with her darker outfit. The setting appears outdoors or semi-outdoors, with natural daylight illuminating the scene evenly, producing soft shadows and a clean, neutral color palette dominated by whites, blacks, and muted tones. The lighting is diffused and natural, likely overcast or shaded, enhancing skin tones and preserving fine details without harsh highlights. The overall mood is relaxed, stylish, and introspective, with a modern urban-meets-classic architectural vibe. Use this uploaded photo as the only and exact face reference. The generated image must use this same face exactly as shown, without any changes to identity, facial structure, or expression.
```

## Comic Art Style Prompt

> Minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
#ComicArt @RealCandaceO  #PodcastLife
```

## Reference Character Painting Self-Portrait in Oil Style

> Elle çizilmiş portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
【Input Image】
Image 1: Reference Character (Do not change the appearance of this character under any circumstances)

【Top Priority Rule: Identity Lock】
- Match 100% of the reference image character's "face," "hairstyle," "hair color," "eye shape/color," "skin color," "body proportion," "clothing," "accessories," "patterns," and "color scheme."
- Maintain the expression exactly as in Image 1 (even if a change is necessary, make it "very slight").
- Do not arbitrarily add new small items, clothes, or decorations. Prohibit modifications such as lengthening/shortening hair. Do not change age, gender, physique, or sense of race.
- Changes are only allowed for "pose," "background (location)," "lighting," "camera angle," and "art supplies (brushes/palettes/easels, etc.)."

【Scene to Generate】
Character from Image 1 standing in a painting studio in front of an easel, painting a "self-portrait" in oil.
- Brush in the right hand, palette in the other hand.
- On the desk: tubes of oil paint, solvent oil, brush washing jar, cloth, dirty palette, and a few scattered paint marks on the floor.
- The canvas has an "unfinished self-portrait" that is instantly recognizable as the "same character" as Image 1 (same face, same hair, same clothes, same color scheme). A slightly rough brushstroke is acceptable since it is unfinished.

【Art Style (Overall Expression)】
- Depict the entire work as a classic oil painting. Show the canvas texture, impasto brushstrokes, buildup of paint, and depth of glazing.
- However, the character design (lines/shape/color/features) must absolutely not deviate from Image 1. The oil texture should be applied as an "overlay."

【Composition/Camera】
- 3/4 angle medium wide shot (upper body to knees). Character + easel + canvas visible simultaneously.
- Warm afternoon oblique light enters from the window, hitting the face and canvas. The background is slightly dark to make the subject stand out.

【Output Specification】
- 1 image. Vertical 2:3 aspect ratio.
- Do not include text in the image.
```

## 7/11 Instagram Style Image Generation Prompt

> Görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
7/11 instagram style using subject image reference - Nano Banana Pro
```

## Realistic Instagram Photo of Burj Al Arab

> Görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Realistic Burj Al Arab instagram like photo using subject image as reference in the shot - Nano Banana Pro
```

## Photorealistic Gym Mirror Selfie of Two Subjects

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "photorealistic close-up gym mirror selfie",
  "main_composition": "mirror selfie of two young women standing side by side in a modern gym, backs to the camera with full reflection visible, playfully posing with arched backs and legs positioned to emphasize curves, one holding phone for selfie while the other touches hair, confident teasing vibe, bright indoor gym lighting with rows of cardio machines in background",
  "subject_1_left": {
    "description": "attractive {argument name="subject 1 name" default="Sydney Sweeney"} in her early 20s, fit curvy athletic build with toned glutes and legs, long wavy blonde hair falling down back, tanned smooth skin",
    "clothing": "matching lavender/pastel purple sports bra with halter neck and high-waisted seamless short scrunch-butt leggings with ruched detail, white athletic sneakers",
    "details": "sunglasses perched on head, gold bracelet on wrist, holding iPhone with decorative case for selfie, playful pose with one leg bent and hand on hip"
  },
  "subject_2_right": {
    "description": "attractive {argument name="subject 2 name" default="Kylie Jenner"} in her early 20s, fit curvy athletic build with toned glutes and legs, long straight black hair falling down back, tanned smooth skin",
    "clothing": "bright orange sports bra with white crisscross back straps and matching high-waisted seamless short scrunch-butt leggings with ruched detail, white Nike athletic sneakers",
    "details": "one hand raised touching hair, confident pose with legs slightly apart and hip thrust, subtle smile visible in profile"
  },
  "environment": {
    "foreground": "rubberized gym floor with subtle texture, women's legs and sneakers in sharp focus",
    "midground": "large gym mirror reflecting full scene, women centered",
    "background": "modern spacious gym with rows of black cardio machines (ellipticals, treadmills) on both sides, large windows on left allowing natural light, high ceiling with exposed ducts and bright overhead lights, clean professional fitness center atmosphere"
  },
  "lighting_and_atmosphere": "bright even indoor gym lighting with mix of natural window light and overhead fluorescents, soft highlights on skin and colorful fabric, subtle sheen on leggings, vibrant energetic workout vibe with high detail photorealistic, playful confident fitness aesthetic",
  "technical_quality": "highly detailed, sharp focus on subjects with realistic fabric textures (seamless scrunch leggings, sports bra straps), skin glow, hair strands, and sneaker details, 8k resolution, professional mirror selfie photography style with visible phone and slight wide-angle lens effect",
  "negative_prompt_suggestions": "blurry, deformed, extra limbs, phone screen visible, mirror distortion, overexposed lighting, underexposed shadows, low quality, cartoon, anime, text watermark, extra people in focus, cluttered equipment"
}
```

## Face Preservation Selfie Prompt for Nano Banana Pro

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
This same face in this photo will be in a different setting. 
Setting: At home, the midday sun shining on her face, taking a selfie, 8 ultra realistic 9:16
```

## Photoreal Candid Street Romance Film Still Prompt (Büyükada)

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photoreal_candid_street_romance",
      "version": "v1.0_BUYUKADA_BICYCLE_RIDE_LOVE_EN",
      "priority": "highest"
    },

    "output_settings": {
      "aspect_ratio": "4:5",
      "orientation": "portrait",
      "resolution_target": "ultra_high_res",
      "render_style": "ultra_photoreal_candid_street_film_still",
      "sharpness": "crisp_but_natural",
      "film_grain": "subtle_35mm",
      "color_grade": "true_to_life_island_daylight",
      "dynamic_range": "natural_not_hdr",
      "skin_rendering": "real_texture_no_retouch"
    },

    "global_rules": {
      "camera_language": "35mm lens equivalent, eye-level, imperfect framing, candid documentary feel, focus on eyes when people are present",
      "authenticity_markers": "subtle halation on sunlit highlights, tiny film gate weave, slight background motion blur only, real street clutter, no studio look",
      "lighting_language": "motivated natural light only (soft sunny daylight + sky fill), deep but detailed shadows"
    },

    "creative_prompt": {
      "scene_summary": "Büyükada, Istanbul. A young couple in their early 20s rides bicycles along a quiet island street. A candid, unposed film-still moment—light, real, and ordinary in the best way.",
      "subjects": {
        "count": 2,
        "description": "the same young man and woman (early 20s), university students, ordinary and real, not model-like; faces visible and eyes sharp when visible",
        "expression": "easy smiles, wind in hair, relaxed closeness; micro-expressions only",
        "skin_and_face": "natural skin texture, no beauty retouch, no plastic skin"
      },
      "wardrobe_and_props": {
        "female": "simple casual outfit in natural tones (light top, cardigan or denim jacket), minimal makeup, long wavy hair moving with the wind",
        "male": "jeans or chinos with a plain t-shirt, neutral overshirt, no logos",
        "props": "two bicycles (classic island style), small backpacks or tote bags"
      },
      "micro_action": "they ride side by side; one looks over and laughs; the other steadies a bag on the handlebar; a brief glance that lingers while they keep moving",
      "environment_details": {
        "location": "Büyükada island street",
        "background": "historic wooden mansions with pastel paint and weathered details, bougainvillea, tree shadows on the road, a glimpse of sea light at the end of the street, a few distant pedestrians softly out of focus",
        "ground_details": "sunlit asphalt with small cracks, scattered leaves, realistic island street texture"
      },
      "lighting": "soft sunny daylight with sky fill; controlled highlights; deep but detailed shadows under bikes and faces; subtle halation on sunlit edges",
      "composition": "eye-level moving candid shot, slightly imperfect framing like a real street photographer pa"
    }
  }
}
```

## Candid Domestic Lifestyle Photography Prompt

> Fotogerçekçi, minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_generation_prompt",
  "style": "photorealistic, lifestyle photography",
  "sexualization": "none",
  "description": {
    "subject": "A young woman standing casually in a home kitchen, seen in side profile",
    "pose": "Relaxed posture, one hand resting on her hip while the other holds a small drink carton with a straw",
    "expression": "Neutral, thoughtful, slightly distant gaze looking forward",
    "appearance": {
      "hair": "Dark hair tied in a loose low bun with natural strands framing the face",
      "clothing": "Oversized white t-shirt worn casually, simple underwear partially visible due to the relaxed fit of the shirt",
      "tattoos": "Small, minimal black-ink tattoos on the forearm, subtle and understated"
    }
  },
  "environment": {
    "location": "A modest, lived-in home kitchen",
    "details": "Wooden cabinets, countertop appliances, a refrigerator covered with colorful magnets and souvenirs",
    "lighting": "Soft natural daylight coming from a window, warm and slightly muted",
    "atmosphere": "Quiet, everyday domestic moment"
  },
  "camera": {
    "angle": "Side profile view",
    "framing": "Medium shot capturing the subject from mid-thigh to head",
    "lens": "35mm lifestyle lens",
    "depth_of_field": "Moderate, background softly in focus to preserve environmental context"
  },
  "image_quality": {
    "realism": "High",
    "texture_detail": "Natural fabric folds, skin texture, and kitchen surface details visible",
    "grain": "Light natural film grain for an authentic look"
  },
  "mood": "Calm, intimate, documentary-style",
  "constraints": [
    "Non-sexualized, everyday realism",
    "Focus on natural lifestyle and atmosphere",
    "No exaggerated poses or expressions",
    "Candid, slice-of-life aesthetic"
  ]
}
```

## Curvy Influencer Aesthetic Back-View Portrait

> Fotogerçekçi, lüks mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"subject": {
"description": "Young woman with a fit, curvy physique standing indoors, viewed from the back and side.",
"hair": "Long, wavy, dirty blonde hair with brighter balayage highlights, falling loosely down the back.",
"face": "Looking back over the left shoulder directly at the viewer, lips slightly parted, neutral to soft expression.",
"skin": "Light olive/tan complexion, realistic texture with natural sheen, no airbrushing.",
"body_type": "Curvy silhouette with defined waist and rounded hips. Bust volume is significant and visible in side profile, showing natural weight and gravity (not defying physics).",
"outfit": {
"top": "Silver rhinestone chainmail halter top, backless design, draped to reveal side torso and back skin.",
"bottom": "Light blue high-waisted denim jeans, tight fit, emphasizing gluteal shape and waist-to-hip ratio.",
"accessories": "Subtle silver necklace visible."
}
},
"pose": {
"orientation": "Standing, body angled 3/4 away from the camera.",
"head_tilt": "Turned sharply over the left shoulder to face the lens.",
"arms": "Relaxed, hands resting naturally on the upper thighs/hips.",
"spine": "Natural curve, upright posture."
},
"environment": {
"location": "Luxury hallway or walk-in closet area.",
"architecture": "White floor-to-ceiling cabinetry/wardrobes with molding details on both sides.",
"flooring": "Dark herringbone wood floor.",
"ceiling": "Crystal chandelier visible at the top center."
},
"camera": {
"shot_type": "Medium shot, captured from mid-thigh up.",
"angle": "Eye-level or slightly lower, creating a flattering perspective of the stature.",
"depth_of_field": "Subject in sharp focus, background slightly softened but distinguishable."
},
"lighting": {
"source": "Soft indoor ambient lighting, likely from the chandelier and recessed lights.",
"direction": "Overhead and diffuse.",
"effect": "Creates natural highlights on the metallic top and skin, soft shadows on the floor."
},
"mood_and_expression": {
"tone": "Confident, allure, 'influencer' aesthetic.",
"expression": "Calm, engaging eye contact."
},
"style_and_realism": {
"style": "Photorealistic, high-fidelity.",
"texture": "Visible denim weave, metallic sparkle of the top, individual hair strands.",
"authenticity": "Raw photo aesthetic, avoiding plastic or 3D-model look."
},
"colors_and_tone": {
"palette": "Cool silver, denim blue, warm skin tones, neutral white background.",
"contrast": "Natural contrast, preserving details in shadows and highlights."
},
"quality_and_technical_details": {
"resolution": "8k",
"sharpness": "High",
"noise": "Subtle, realistic ISO noise."
},
"aspect_ratio_and_output": {
"ratio": "3:4",
"framing": "Vertical composition."
},
"controlnet": {
"pose_control": "OpenPose or DW_Pose for accurate head-turn and arm placement.",
"depth_control": "Depth_Midas to maintain the hallway perspective and body volume."
}
}
```

## Photorealistic Seductive Bunny Cosplay Portrait

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "Seductive playful cosplay portrait of a young woman standing in cozy bedroom, full-body view with confident pose, arms raised and bent at elbows in cute bunny gesture, very fair porcelain skin with soft natural glow and subtle freckles, long voluminous platinum blonde straight wig with full fringe bangs framing face, large striking light blue eyes with heavy black winged eyeliner and long lashes, full glossy pink-red lips in subtle pout, wearing ultra-feminine pink floral corset mini dress with sweetheart neckline, boned corset bodice cinching waist, ruffled multi-layer tulle skirt with rose print, sheer pink overskirt and lace trim, high-cut sides emphasizing hips and thighs, large fluffy white bunny ears headband with pink inner fur, white fluffy tail visible at back, silver bracelet and necklace accessories, bedroom background with beige walls white door and soft warm lamp light from side creating golden rim light on hair skin corset and tulle layers, shallow depth of field, strong cinematic bokeh, photorealistic high-fashion bunny cosplay photography, high detail corset boning lace floral print tulle transparency hair volume skin pores and natural imperfections, shot on high-end mirrorless camera, 50mm lens at f/1.8, ultra detailed, 8k resolution",
  "negative_prompt": "cartoon, anime, illustration, painting, deformed, blurry, lowres, plastic skin, doll-like, heavy makeup overload, thick contour, false lashes overload, filters, beauty filter, airbrushed skin, extra limbs, distorted proportions, asymmetrical face, harsh flash, cold lighting, day time, casual clothing, short hair, dark hair, standing straight without pose, crowded room, text watermark, logo, ugly, bad anatomy, overexposed, underexposed, no bunny ears, no corset, aggressive expression",
  "reference_image": {
    "enabled": true,
    "strength": 0.92,
    "description": "Extremely strong reference for exact composition and details: young woman in pink floral corset mini dress with ruffled tulle layers, long platinum blonde hair with bangs, large fluffy white bunny ears headband, arms raised in bunny pose, light blue eyes with heavy eyeliner, glossy pink lips, seductive confident expression, warm bedroom light, full-body view with high-cut dress emphasizing curves"
  },
  "style": "photorealistic seductive bunny cosplay portrait, feminine pink aesthetic, warm golden indoor lighting",
  "aspect_ratio": "3:4",
  "lighting": "soft warm golden lamp light from side, gentle rim light on hair skin corset tulle and bunny ears, subtle highlights on floral print and lace, cozy ambient glow",
  "camera": "Sony A7R IV or Canon R5, 50mm f/1.8 prime lens, natural indoor warm light, slight vignette for intimacy",
  "additional_details": [
    "hair: platinum blonde wig, long straight with soft shine, full straight bangs covering forehead, loose at ends",
    "outfit: pink satin corset top with floral rose print, sweetheart neckline, boned waist cincher, ruffl
```

## Identity-Locked Surreal Minimalist Editorial Portrait

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a surreal minimalist editorial portrait with the attached face as the main subject. Preserve the attached face exactly — same proportions, expression, and hyper-detailed photorealism.

The character lies sideways on a smooth floor in a vast empty space with a soft gradient sky background shifting from pale blue to gentle cyan. A single bright linear light streak runs across the floor directly beneath the face, illuminating the eyes and nose with a dramatic glow.

Lighting: highly stylized, soft yet directional — a cinematic beam creates contrast on the face while the environment remains clean and minimalist. Shadows are subtle and diffused.

Pose: head resting on the floor, body fading into shadow, eyes open and looking directly toward camera.

Style: Nano Banana editorial surrealism — ultra-clean composition, precise lighting, minimal color palette, soft gradients, sharp facial detail, and elevated artistic mood.

Maintain the full composition: low camera angle, centered glowing line, face illuminated from below, spacious empty background, and smooth floor reflections.

Preserve the attached face perfectly — hyper-detailed, photorealistic, and unaltered.
```

## Coquette Aesthetic Fashion Portrait on Stone Steps

> Fotogerçekçi, lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_structure": {
    "subject": {
      "description": "A young woman with a slender, curvy figure and light tan skin.",
      "hair": "Long, dark brunette hair styled in a half-up, half-down look, secured with a soft pink ribbon bow at the back. Loose waves fall over her shoulders.",
      "face": "Profile view, looking away to the left. Soft glam makeup with defined eyebrows, contoured cheeks, and glossy lips."
    },
    "attire": {
      "dress": "A pale pink, corset-style mini dress. Features a structured bodice with visible boning, spaghetti straps, lace trim detailing at the neckline and hem, and a flared, pleated skirt.",
      "footwear": "Barefoot on the stone steps. She is holding a pair of white, pointed-toe kitten heels in her right hand by the heel strap.",
      "jewelry": "A pearl necklace featuring a delicate bow charm in the center. Small drop earrings."
    },
    "props": {
      "right_hand": "Holding one white high-heeled shoe.",
      "left_hand": "Holding a single pale pink rose with a long stem."
    },
    "pose_and_action": {
      "stance": "Standing elegantly on outdoor stone steps. Right leg slightly bent at the knee, weight on the left leg. Body angled slightly towards the camera but face turned in profile.",
      "expression": "Serene, distant, and elegant."
    },
    "setting": {
      "location": "Grand outdoor stone staircase leading up to a beige stone building.",
      "background_elements": "A large, multi-paned window with white curtains visible in the background. A stone urn/planter on a pedestal to the left. Green manicured grass at the bottom of the steps.",
      "architecture": "Classic, historic limestone or sandstone masonry."
    },
    "lighting_and_atmosphere": {
      "lighting": "Bright natural daylight. Strong, sharp shadows cast on the steps indicating direct sunlight from the upper left.",
      "mood": "Romantic, feminine, coquette aesthetic, elegant, dreamy."
    },
    "technical_specifications": {
      "quality": "4K Ultra HD, photorealistic, high resolution.",
      "style": "Fashion photography, lifestyle portrait.",
      "focus": "Sharp focus on the subject with detailed texture rendering of the fabric and stone.",
      "color_palette": "Soft pastels, beige, pink, white, and natural greens."
    }
  }
}
```

## Candid Snapshot of Woman Hugging Teddy Bear

> Fotogerçekçi görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_generation_prompt",
  "style_preset": "photographic_snapshot",
  "subject": {
    "demographics": "Young woman, light skin tone with visible freckles, petite fit physique",
    "hair": "Long straight platinum white-blonde hair, loose and falling over shoulders",
    "face": "Bright happy smile showing teeth, natural makeup, fresh-faced look"
  },
  "attire": {
    "top": "Tight dark olive green ribbed tank top/camisole, cropped fit",
    "bottom": "Cream/white pajama shorts with a pattern of small brown teddy bears",
    "accessories": "Small text tattoo on inner right forearm, barefoot"
  },
  "pose": {
    "action": "Sitting with knees bent on a grey sofa, hugging a giant beige plush teddy bear, hands gently holding the bear's snout/nose area",
    "body_language": "Affectionate, cozy, cheerful, relaxed"
  },
  "environment": {
    "background": "Indoor bedroom setting, large grey sectional sofa, beige tufted velvet headboard visible behind, vanity mirror with hollywood-style light bulbs in background",
    "lighting": "Soft natural indoor lighting, even illumination"
  },
  "technical_parameters": {
    "quality": "Raw photo, realistic skin texture, 4k, high resolution, candid social media style",
    "camera_angle": "Eye level, medium full shot"
  },
  "positive_prompt_string": "A photorealistic candid snapshot of a smiling young woman with platinum blonde hair and freckles sitting on a grey sofa hugging a giant beige teddy bear. She is holding the bear's snout with both hands. She wears an olive green ribbed crop top and cream shorts with a teddy bear print. In the background, a beige tufted headboard and a vanity mirror with lights are visible. Cozy bedroom atmosphere, 8k, highly detailed.",
  "negative_prompt_string": "cartoon, anime, 3d render, painting, drawing, bad anatomy, deformed hands, missing fingers, extra limbs, blur, noise, low quality, watermark, text, shoes, heavy makeup, dark lighting"
}
```

## Photorealistic Bathroom Mirror Selfie with Money Piece Highlights

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "meta": {
    "description": "Ultra-detailed reproduction prompt for a specific mirror selfie scenario.",
    "target_quality": "Photorealistic, 8K, Highly Textured, Candid Style",
    "aspect_ratio": "9:16"
  },
  "prompts": {
    "positive_prompt": "A candid, high-resolution mirror selfie photograph taken inside a brightly lit modern bathroom. The subject is a young woman in her early 20s with a curvy, fit physique, sitting sideways on a polished white quartz vanity countertop. Her most distinctive feature is her long, wavy dark brown hair which has prominent, thick blonde 'money piece' highlights framing her face. She has a warm, peachy skin tone, sharp black winged eyeliner, well-defined eyebrows, and a small silver stud nose piercing in her right nostril. She is smiling softly at her reflection holding up a silver iPhone 14/15 Pro with her right hand, showing long, light baby blue coffin-shaped acrylic nails. She is wearing an oversized, slouchy dark charcoal grey off-the-shoulder sweatshirt that falls off her left shoulder, revealing strap, and tight, grey marled cotton athletic jersey shorts. The pose emphasizes her curved hip and thigh. The mirror reflection behind her is detailed, showing a large glass-enclosed shower with white marble subway tiling, chrome fixtures, a ceiling fan, and a glimpse of a bathtub area. In the background (not in reflection), there is a white paneled door and a hand towel with a green pine tree pattern hanging on a rack. The lighting is warm and diffused indoor bathroom lighting, creating soft shadows. The image should have natural film grain, extremely detailed textures on skin pores, hair strands, fabric folds, and stone surfaces. 8k resolution, incredibly detailed, sharp focus on the subject.",
    "negative_prompt": "cartoon, painting, 3d render, anime, blurry, low resolution, grainy, distorted, unattractive, bad anatomy, extra fingers, deformed hands, missing limbs, bad eyes, crossed eyes, overly filtered skin, airbrushed, unnatural lighting, oversaturated colors, ugly, deformed face, noisy, low contrast, watermark, text, signature."
  },
  "parameters": {
    "aspect_ratio": "9:16",
    "cfg_scale": 7.5,
    "steps": 30,
    "sampler": "DPM++ 2M Karras",
    "seed": -1,
    "style_preset": "photographic"
  },
  "breakdown_analysis": {
    "subject": {
      "age": "Early 20s woman",
      "hair": "Long, wavy, dark brown base with distinct thick blonde face-framing highlights",
      "face": "Smiling softly, winged eyeliner, nose stud piercing",
      "body": "Curvy figure, sitting pose on counter"
    },
    "attire": {
      "top": "Oversized charcoal grey off-the-shoulder sweatshirt",
      "bottom": "Grey marled cotton athletic shorts",
      "nails": "Long, light blue acrylics"
    },
    "environment": {
      "location": "Modern bathroom",
      "surface": "White quartz countertop",
      "background_elements": "Large mirror reflection, marble shower, white door, tree-pa"
    }
  }
}
```

## Accidental Smartphone Photograph Contact Sheet (Anti-Aesthetic)

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic accidental smartphone photograph — quad-frame contact sheet.
Single image with four vertical 9:16 frames in a 2×2 grid, captured in a rushed handheld phone burst.
Subject: completely fictional adult woman, non-identifiable.
Reference image used ONLY for general age range and neutral demeanor — no resemblance, no face copying.
Facial details partially unreadable in every frame due to motion blur, flash overexposure, autofocus failure, and rolling-shutter ghosting.
Scene: nighttime Tokyo sidewalk beside a plain white ceramic tile building during a fireworks event.
Fireworks appear only as distant, cropped, smeared light streaks or blown-out blobs — never centered, never celebratory.
Camera failure: modern smartphone, rushed handheld capture.
Unpredictable flash dominates. Missed autofocus. Extreme camera shake. Heavy directional blur, ghosting, double edges, harsh clipped highlights, uneven exposure, strong noise. Nothing clean or sharp.
Frame sequence:
Walking past side-on, unaware.
Sudden head turn, surprised, face smeared by motion.
Hand reflexively blocking the lens, shy restrained smile, strong ghosting.
Almost out of frame, faint embarrassed smile, extreme blur.
Mood: intrusive, awkward, fleeting — images never meant to exist.
Negative: anime, illustration, cinematic fireworks, festival mood, neon, studio or beauty lighting, sharp focus, posed photography, professional camera, face copy, identity match, beauty filters, perfect symmetry.
```

## Raw Night Street Photography with Flash Prompt (Identity Lock)

> Minimal görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Raw night street photography with flash, early-2000s aesthetic; man (KEEP ORIGINAL FACE FROM UPLOADED PHOTO EXACTLY, do not alter facial features in any way, no face changes even 1%) sitting on concrete stairs near a metal railing; outfit: black t-shirt slightly damp with sweat, loose light pants, minimal accessories; action: he runs his hand through his hair while looking off to the side, as if reacting to something outside the frame; emotion: tired, reflective, emotionally open; lighting: direct flash hitting face and chest, background falling into darkness, harsh contrast; textures: realistic skin with visible pores, light sheen of sweat, rough concrete steps; composition: medium shot, asymmetrical framing, night documentary feel; grain, noise, imperfect flash balance, unpolished realism.
```

## Dua Lipa Cozy Portrait with Maltese Dog Prompt

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "photograph": {
    "style": "ultra-realistic portrait",
    "camera": "full-frame DSLR",
    "lens": "85mm prime",
    "resolution": "high",
    "lighting": {
      "type": "soft natural window light",
      "direction": "from the side",
      "quality": "smooth shadow transitions, subtle highlights"
    },
    "focus": {
      "depth_of_field": "shallow",
      "focal_point": "woman's eyes and dog's face"
    },
    "composition": "candid, relaxed, looking at camera",
    "mood": "calm, warm, gentle"
  },
  "subject": {
    "description": "young beautiful woman",
    "features": {
      "eyes": "green",
      "skin": "fair, realistic tone with visible pores and subtle natural texture",
      "makeup": "minimal refined, emphasizing lips and eyes"
    },
    "hair": "long naturally wavy, brown",
    "clothing": {
      "item": "fitted white ribbed long-sleeve sweater",
      "details": "delicate scalloped edges along neckline and cuffs, realistic knit structure, soft stretch"
    },
    "expression": "calm, warm, gentle"
  },
  "interaction": {
    "action": "tenderly hugging a small fluffy white Maltese or Bichon Frise dog close to chest",
    "dog": {
      "breed": "Maltese or Bichon Frise",
      "fur": "soft, slightly uneven and natural white",
      "position": "head resting gently on her shoulder",
      "expression": "calm, looking at camera"
    }
  },
  "setting": {
    "environment": "cozy indoor",
    "background": "plain light beige wall, no decorative distractions",
    "furniture": {
      "item": "black leather couch",
      "details": "visible leather grain and gentle creases"
    }
  }
}
```

## Political Defiance Photojournalism Prompt

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "An evocative, photorealistic image of a western woman of 20 age on a snowy city street in daylight, using a burning photograph of {argument name="political figure" default="Benjamin Netanyahu"} to light a cigarette in a powerful act of defiance.",
  "composition": {
    "shot_type": "Medium shot",
    "angle": "Eye-level",
    "focus": "Sharp focus on the woman and the burning photograph, with the city background softly blurred."
  },
  "subject": {
    "description": "A young western woman with a determined expression, looking down at the flame.",
    "hair": {
      "color": "blonde",
      "style": "Shoulder-length, slightly messy from the weather."
    },
    "attire": {
      "jacket": "A light gray or off-white puffer jacket.",
      "pants": "Dark blue jeans.",
      "footwear": "Black boots."
    },
    "actions_and_objects": [
      {
        "action": "Lighting a cigarette",
        "object": "A white cigarette held to her lips."
      },
      {
        "action": "Holding a burning photograph",
        "object": "A portrait-style photograph of {argument name="burning photo subject" default="Ayatollah Ali Khamenei"}.",
        "state": "The top edge of the photograph is actively on fire, with visible orange flames and dark, charred edges."
      }
    ]
  },
  "setting": {
    "location": "A sidewalk on a city street at night.",
    "environment": "The ground and street are covered in snow.",
    "time_of_day": "day",
    "background_elements": [
      "Modern high-rise buildings with lit windows.",
      "Streetlights casting a cool glow.",
      "Out-of-focus car headlights and taillights in the distance, indicating traffic."
    ]
  },
  "lighting": {
    "key_light": "The bright, warm orange flame from the burning photograph, illuminating her face and hands.",
    "ambient_light": "Cool, blue-toned ambient light from the streetlights and surrounding city.",
    "effect": "A strong contrast between the warm, intense light of the fire and the cold, dark urban environment.",
    "details": "Smoke is visible rising from both the cigarette and the burning photo."
  },
  "style_and_mood": {
    "style": "Candid photojournalism, photorealistic.",
    "mood": "Defiant, rebellious, politically charged, intense.",
    "color_palette": "Dominated by cool blues, whites, and grays, with a powerful accent of fiery orange and yellow."
  }
}
```

## Ultra-Realistic Divine Goddess Fantasy Portrait

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic fantasy portrait of a divine woman inspired by a goddess, photorealistic human, realistic skin texture, natural facial proportions, symmetrical face, sharp eyes, calm and powerful expression

Long black wavy hair flowing naturally, realistic hair strands, subtle flyaway hairs, soft highlights

Wearing an elaborate golden ceremonial crown inspired by ancient mythological royalty, detailed handcrafted metal textures, embedded gemstones, aged gold finish

Luxury fantasy costume: layered flowing turquoise silk dress, semi-transparent fabric, realistic cloth physics, soft folds, natural draping, embroidered gold patterns, realistic fabric reflections

Highly detailed gold jewelry: layered necklaces, arm cuffs, waist belt, gemstone ornaments, realistic metal shine, natural wear and micro scratches

Pose: seated in a meditative divine posture, balanced body anatomy, relaxed shoulders, graceful hands, natural proportions

Background: fantasy divine environment but realistic, warm golden light behind the subject like a glowing halo, floating dust particles, soft mist, autumn leaves and floral elements subtly blended, cinematic depth

Lighting: cinematic studio lighting mixed with natural warm backlight, soft rim light around hair and crown, realistic shadows, volumetric light rays

Camera: Canon EOS R5, 85mm lens, f/1.8, shallow depth of field, face in perfect focus, background softly blurred

Color grading: cinematic warm tones, teal and gold harmony, realistic skin color, no oversaturation

Ultra-high resolution, hyper-realistic, photographic quality, fashion editorial style, fantasy realism, looks like a real human photoshoot in a fantasy setting, 9:16 aspect ratio
```

## Sydney Sweeney Ski Vacation Selfie Portrait

> Fotogerçekçi logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "An extremely detailed, high-resolution smartphone selfie photograph of actress Sydney Sweeney during a sunny winter ski vacation. She is smiling warmly while looking directly into the camera. Her face shows realistic natural skin texture with visible pores, soft freckles, and rosy cheeks flushed from the cold mountain air. Her distinctive blue-green eyes appear bright, sharp, and reflective in the sunlight. She is wearing a thick, textured oatmeal-colored ribbed knit beanie pulled low over her forehead, with large glossy black ski goggles resting on top of her head. She has on a pristine white quilted puffer jacket featuring a contrasting black fleece-lined high collar and a row of black snap buttons down the front. Her long blonde hair falls naturally in soft waves, framing her face and resting on her shoulders. The background shows a breathtaking alpine landscape beneath a clear blue sky, with sun-lit snow-covered mountain peaks. To the right behind her, a ski lift structure with visible chairs and cables can be seen, along with a pair of white alpine skis planted upright in the snow, displaying a black HEAD logo. Bright high-altitude sunlight creates crisp shadows and highlights the textures of the snow, clothing, and facial features."
}
```

## 16K Ultra-Realistic Identity-Locked Luxury Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_generation_prompt",
  "resolution": "16K Ultra HD",
  "aspect_ratio": "3:4",
  "style": "ultra-realistic cinematic lifestyle portrait",
  "identity_preservation": {
    "use_reference_image": true,
    "strict_identity_lock": true,
    "alter_face": false,
    "alter_hair": false,
    "notes": "The woman’s face and hairstyle must be exactly identical to the uploaded reference image. No changes to facial structure, proportions, skin texture, or hair styling."
  },
  "subject": {
    "gender": "female",
    "appearance": {
      "face": "identical to reference image",
      "hair": "same haircut and neatly styled as reference"
    },
    "pose": {
      "description": "leaning slightly with one shoulder against a sleek glass railing",
      "hands": "both hands in pockets",
      "legs": "one leg crossed slightly in front of the other",
      "head": "fully facing the camera"
    },
    "expression": "confident, relaxed, subtle smirk"
  },
  "wardrobe": {
    "top": "white knitted crewneck sweater",
    "bottom": "light-wash denim jeans",
    "footwear": "simple white sneakers",
    "style": "casual, modern, stylish"
  },
  "environment": {
    "location": "modern luxury poolside",
    "elements": [
      "sleek glass railing",
      "modern swimming pool",
      "lush tropical plants"
    ],
    "time_of_day": "bright sunny day",
    "mood": "stylish, relaxed, casual luxury lifestyle"
  },
  "lighting": {
    "type": "soft natural daylight",
    "effects": [
      "reflections on pool water",
      "reflections on glass railing",
      "gentle highlights on face and clothing"
    ]
  },
  "camera": {
    "shot_type": "cinematic portrait",
    "angle": "eye-level",
    "focus": "sharp focus on the woman",
    "depth_of_field": "shallow, softly blurred background",
    "look": "DSLR / cinematic crisp tones"
  },
  "quality": {
    "realism": "ultra-photorealistic",
    "detail_level": "extreme detail in skin, fabric, glass, and water reflections"
  },
  "constraints": [
    "Do not alter face or hairstyle",
    "No stylization or AI-art look",
    "No body distortion",
    "No text, logos, or watermarks"
  ],
  "output_goal": "Create a 16K ultra-realistic cinematic portrait of a stylish young woman leaning against a glass railing by a luxury poolside, preserving her exact facial identity and hairstyle, with a bright, relaxed, modern lifestyle atmosphere."
}
```

## Gym Mirror Selfie with Identity Lock and Dynamic Pose

> Fotogerçekçi, minimal logo üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the uploaded reference image as a strict identity anchor and preserve the person’s face, facial proportions, skin texture, and hair 100% exactly with no alteration, beautification, or reinterpretation. Ultra-photorealistic gym mirror/selfie style image showing a rear three-quarter back view of the same woman in a modern gym. She is dynamically posing with one leg raised high backward in a natural flexibility stretch or playful kick, looking back over her right shoulder with a subtle, confident smile. One hand casually holds black fingerless weightlifting gloves, posture relaxed and athletic, emphasizing a toned, fit physique without exaggeration. She wears a black fitted long-sleeve crop top with thumb holes and a small white heart logo on the sleeve, high-waisted short gray seamless athletic shorts with a small white activewear logo centered on the back waistband, and white athletic sneakers with black accents. Hair is pulled into a high ponytail with a few loose strands, skin realistic with natural highlights. Environment is a clean modern gym with rubberized flooring, dim cool overhead fluorescent lighting, red plyometric boxes, a black punching bag, and gym equipment softly visible in the background. Lighting is moody and realistic, creating soft shadows and subtle highlights on skin and fabric. Smartphone-realistic candid fitness photography, sharp focus on the subject, natural motion feel, high detail textures. Negative prompt: face or hair changes, frontal view, extra limbs, distortion, beauty filters, plastic skin, cartoon/anime, blur, text, watermark, extra people, cluttered focus.
```

## Detailed Gym Selfie Portrait with Shushing Pose

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"subject": {
"description": "Young woman with an athletic, curvy physique, standing in a 3/4 rear view. She has tan, olive-toned skin and dirty blonde hair with lighter highlights pulled back into a messy, casual low bun. A white wireless earbud (AirPod style) is visible in her right ear.",
"apparel": {
"outfit": "Matching sage green ribbed seamless activewear set.",
"top": "Cropped tank-style sports bra with thick straps and a scoop back, fitting tightly against the torso.",
"bottom": "High-waisted compression gym shorts, color-matched sage green, highlighting the glute curvature and thigh musculature.",
"fit": "Skin-tight, showing the texture of the ribbed fabric stretching over the body curves."
},
"anatomy_constraints": {
"body_type": "Fit and curvy with significant glute development and defined waist.",
"bust_profile": "Visible side profile of chest showing natural fullness and projection consistent with the reference; gravity-affected natural shape, not flattened.",
"glutes": "Prominent, rounded glute shape emphasized by the rear-facing pose and tight fabric.",
"skin_texture": "Natural skin texture, slight shine on the shoulder and face, realistic moles and skin tone variations."
}
},
"pose": {
"orientation": "3/4 rear angle, body facing slightly right, head turned sharp left over the shoulder to face the camera directly.",
"arms": {
"left_arm": "Raised, elbow bent, with the left index finger pressed vertically against the lips in a 'shushing' gesture (silence sign).",
"right_arm": "Extended to the right, palm placed flat against the tiled wall for support."
},
"torso": "Twisted slightly to allow the face to look back; distinct arch in the lower back accentuating the hips.",
"legs": "Standing straight, weight distributed evenly."
},
"environment": {
"setting": "Public restroom or gym locker room.",
"walls": "Cream/beige square ceramic tiles with a decorative horizontal strip of small brown mosaic tiles at shoulder height.",
"stall": "Grey laminate restroom stall partition and door visible to the left.",
"decor": "A framed white sign on the grey stall door with black text reading: 'I'VE NEVER LOST A GAME I JUST RAN OUT OF TIME'.",
"flooring": "Beige/tan square floor tiles with dark grout.",
"ceiling": "Partial view of a recessed fluorescent light fixture."
},
"camera": {
"shot_type": "Medium shot, capturing from mid-thigh to above the head.",
"angle": "Eye-level relative to the subject, slightly angled from the back left.",
"perspective": "Neutral focal length (approx 35mm-50mm), minimizing distortion while maintaining depth.",
"focus": "Sharp focus on the subject's face and upper body, slight depth of field falloff in the background."
},
"lighting": {
"source": "Overhead fluorescent artificial lighting typical of a commercial bathroom.",
"quality": "Bright but slightly diffused, creating soft shadows under the jawline and defining "
}
```

## Hyper-realistic Portrait with Chibi Figurine Prompt

> Fotogerçekçi, sinematik 3B sahne üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_description": "A high-quality, cinematic portrait of a beautiful young woman with long {argument name="hair color" default="blonde"} hair, styled in a half-updo, smiling warmly while holding a small, stylized 3D cartoon figurine of herself. The woman is wearing a {argument name="coat color" default="light pink"} woolen coat over a white turtleneck sweater. The figurine mimics her appearance exactly, including the blonde hair, pink coat, white top, and blue jeans, but is rendered in a cute, large-eyed 'chibi' or Pixar-inspired animation style with arms raised in joy. The lighting is soft and golden, creating a professional studio bokeh background with warm, circular light orbs. The focus is sharp on the woman's face and the figurine, highlighting the realistic skin textures and the smooth, matte finish of the toy.",
  "composition": {
    "shot_type": "Close-up",
    "angle": "Eye-level",
    "focus": "Macro focus on figurine and facial expression"
  },
  "style": {
    "overall": "Hyper-realistic photography blended with 3D character design",
    "lighting": "Soft rim lighting, golden hour aesthetic, warm tones",
    "colors": "Pastel pink, cream white, golden yellow, soft beige"
  },
  "technical_details": {
    "camera": "85mm lens, f/1.8",
    "features": "Deep depth of field, sharp textures, high resolution 8k"
  }
}
```

## High-Fashion Winter Editorial in Snow

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": {
    "environment": "snowy_outdoor_setting",
    "weather": "light_falling_snow",
    "season": "winter",
    "atmosphere": "soft_cinematic_cold",
    "ground": "snow_covered_with_subtle_footprints"
  },

  "camera": {
    "shot_type": "full_body_three_quarter",
    "angle": "eye_level",
    "lens": "85mm",
    "aperture": "f/2.8",
    "depth_of_field": "shallow_background_blur",
    "focus": "sharp_on_subject"
  },

  "subject": {
    "gender": "female",
    "identity": "general_elegant_woman_not_reference",
    "pose": "graceful_weight_shift_on_one_leg",
    "body_language": "poised_relaxed_confident",
    "expression": "calm_elegant_composed",
    "gaze": "slightly_off_camera_or_soft_direct"
  },

  "outfit": {
    "outerwear": "long_tailored_winter_coat",
    "coat_fit": "structured_and_flowing",
    "footwear": "long_leather_boots_below_knee",
    "leg_visibility": "lower_legs_visible_below_coat_hem",
    "color_palette": "neutral_winter_tones_beige_gray_black"
  },

  "styling": {
    "hair": "long_or_mid_length_gently_moving_with_breeze",
    "makeup": "natural_winter_soft_glow",
    "accessories": "minimal_no_distracting_elements"
  },

  "lighting": {
    "type": "soft_diffused_natural_light",
    "direction": "overcast_sky_even_lighting",
    "highlights": "subtle_cold_highlights_on_coat_and_hair"
  },

  "aesthetic": {
    "style": "high_fashion_editorial",
    "mood": "elegant_serene_timeless",
    "color_grading": "cool_whites_soft_blues_muted_contrast",
    "realism": "photorealistic"
  },

  "quality": {
    "resolution": "ultra_high",
    "details": "fabric_texture_visible_snow_particles_crisp",
    "noise": "none",
    "artifacts": "none"
  }
}
```

## Photoreal Candid Street Romance Film Still Prompt (Moda Seaside)

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photoreal_candid_street_romance",
      "version": "v1.2_MODA_SEASIDE_SIMIT_SUNNY_CHERRY_DRESS_EN",
      "priority": "highest"
    },

    "output_settings": {
      "aspect_ratio": "4:5",
      "orientation": "portrait",
      "resolution_target": "ultra_high_res",
      "render_style": "ultra_photoreal_candid_street_film_still",
      "sharpness": "crisp_but_natural",
      "film_grain": "subtle_35mm",
      "color_grade": "true_to_life_sunny_natural",
      "dynamic_range": "natural_not_hdr",
      "skin_rendering": "real_texture_no_retouch"
    },

    "global_rules": {
      "camera_language": "35mm lens equivalent, eye-level, imperfect framing, candid documentary feel, focus on eyes when people are present",
      "authenticity_markers": "subtle halation on highlights, tiny film gate weave, real street clutter, slight background motion blur only, no studio look",
      "lighting_language": "motivated natural light only (sunlight + sky fill), deep but detailed shadows"
    },

    "creative_prompt": {
      "scene_summary": "Moda seaside in Istanbul on a sunny day. A young couple in their early 20s sits near the shore eating simit. A candid, unposed film-still moment—quiet love inside everyday life.",

      "subjects": {
        "count": 2,
        "description": "the same young man and woman (early 20s), ordinary and real, not model-like; faces visible and eyes sharp",
        "expression": "small genuine smiles, relaxed presence, natural micro-expressions",
        "skin_and_face": "natural skin texture, no beauty retouch, no plastic skin, slight imperfections preserved"
      },

      "wardrobe_and_props": {
        "female": "pink dress with colorful cherry pattern, simple fit, slightly moving in sea breeze, natural minimal makeup, long wavy hair",
        "male": "blue denim jeans and a plain white t-shirt, slightly wrinkled, no logos",
        "props": "two simits in their hands, a simple tote/backpack nearby, no branding"
      },

      "micro_action": "they break pieces of simit, share a bite, laugh softly; the wind lifts the dress hem slightly; crumbs fall naturally onto their hands",

      "environment_details": {
        "location": "Moda coast, Istanbul",
        "background": "sea horizon, gentle waves, a few distant people walking softly out of focus, seagulls in the sky, sunlit railing and rocks",
        "ground_details": "worn stone or concrete edge, small everyday clutter (a bottle cap or leaf), but clean and believable, no staged props"
      },

      "lighting": "bright sunny daylight with soft sky fill; controlled highlights; subtle halation on sunlit edges; deep but detailed shadows under chins and clothing folds",

      "composition": "eye-level medium shot, slightly off-center, imperfect framing like real street photography; faces sharp; background gently receding; no per"
    }
  }
}
```

## Hyper-Realistic Underwater Snorkeling Portrait

> Fotogerçekçi portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Subject: Person in the image

Create a hyper-realistic underwater close-range portrait captured with a wide-angle action camera in a waterproof housing. The camera is very close to the Subject (≈0.5–1 m), positioned slightly below face level and angled upward, with wide-angle distortion emphasizing depth while keeping the Subject dominant.

Mid-shot to ¾ body framing. The Subject fills most of the frame, with face and upper body clearly visible. Schools of tropical fish swim closely around, some passing near the lens to create layered depth, with mild motion blur on fish closest to the camera.

Natural sunlight enters from above, producing bright caustic patterns on the Subject and surrounding water, strong highlights near the surface, and soft blue gradients below. Floating water particles are visible between the camera and Subject, with slight refraction distortion around mask edges and hands.

The Subject appears calm and relaxed, floating effortlessly with subtle body movement suggesting buoyancy and breathing through the snorkel.

A shallow coral reef is visible below, slightly softened by depth, while nearby fish remain sharper. The water surface shimmers above with gentle ripples.

Color behavior reflects natural underwater absorption: dominant blues and aquas, vibrant yellow and black fish patterns retained, and skin tones realistic with a slightly cool cast.

The image should feel like a real close-distance snorkeling travel photo intimate, immersive, and authentic.

Do not alter facial structure or identity. The Subject must remain 1000% identical to the reference image.
```

## Tropical Water Park Portrait with Thai Architecture

> Fotogerçekçi, sinematik logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A young, beautiful woman stands confidently in the shallow turquoise water of a massive tropical water park wave pool, water gently rippling around her feet, merging with wet sand at the beach zone. Behind her, elaborate ancient Thai/Asian-inspired stone architecture rises, featuring tall intricately carved columns, elegant thatched-roof pavilions, and a large amphitheater stage with professional lighting rigs in the distance. Lush green forested hills and distant misty mountains frame the scene under an overcast cloudy sky, soft diffused natural light illuminating the environment. She wears a light blue long-sleeve athletic rash guard top with a subtle white logo, a black sports skirt layered over black leggings, and a white baseball cap adorned with sparkling crystal/jewel embellishments. Her hair is slightly damp, her skin naturally glowing in the misty humid atmosphere, and she smiles subtly, looking directly at the camera. Photorealistic textures: detailed skin pores, wet fabric, water reflections, sand grains, carved stone surfaces, and foliage. Cinematic composition with shallow depth of field, volumetric mist, soft natural lighting, subtle lens flare, high contrast, ultra-realistic reflections and refractions, dramatic but natural color grading, 8k, hyper-detailed, ultra-photorealistic, cinematic style, immersive tropical environment.
```

## AI Manga: Cat Doesn't Want to Sleep

> Çizgi roman karesi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
I don't want to sleep yet, but if you pet me, I'll fall asleep nya 💤
```

## 13 Snow Globe Prompts for Nano Banana Pro

> Sinematik, fütüristik manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A dreamy snow globe with a miniature fantasy world inside, glowing softly. 
Inside the dome: surreal landscape, floating islands, glowing trees, 
shimmering stars, pastel colors, soft light, cinematic and ethereal.

① Basic Form (All-rounder)

A dreamy snow globe with a glowing fantasy world inside, pastel colors, soft light, cinematic and ethereal.

② Fantasy/Healing Type

A magical snow globe, floating islands, glowing trees, shimmering stars, inside soft pastel world, dreamy and calm.

③ Cinematic/Grand Scale

An epic snow globe with a miniature cinematic world, dramatic lighting, glowing castle, vast landscapes, majestic atmosphere.

④ Kawaii/Dreamy Cute Type

A kawaii snow globe filled with pastel clouds, cute animals, glowing stars, pink and blue tones, dreamy and adorable.

⑤ Starry Sky Type

A snow globe with a night sky inside, glowing constellations, shooting stars, dreamy atmosphere, cosmic fantasy world.

⑥ Fantasy RPG Style

A fantasy snow globe with a tiny castle, floating islands, glowing magic circles, epic RPG atmosphere.

⑦ Cyberpunk/Near Future

A futuristic snow globe with neon lights, cyberpunk city, glowing holograms, surreal sci-fi atmosphere.

⑧ Japanese Emo Style

A snow globe with cherry blossoms, glowing torii gate, traditional Japanese garden, dreamy spring night.

⑨ Underwater World

A snow globe with an underwater world inside, glowing jellyfish, coral reefs, dreamy blue light.

⑩ Starry Sky Cafe

A cozy snow globe with a tiny glowing café, surrounded by stars, warm light, dreamy night atmosphere.

⑪ Fairytale Style

A snow globe with a fairytale village, glowing cottages, forest with lights, dreamy and nostalgic.

⑫ Dark Fantasy

A mysterious snow globe with dark forests, glowing moon, gothic castle, ethereal and eerie.

⑬ Christmas Style

A festive snow globe with glowing Christmas tree, tiny snowy village, warm lights, dreamy holiday atmosphere.
```

## Raw, Motion-Blurred Nighttime Smartphone Flash Portrait

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic candid smartphone photograph,
9:16 vertical.

Use the attached image only as a strong visual inspiration for general facial proportions and vibe,
while ensuring the generated subject remains fully original, non-identifiable, and not a face copy.

Scene
Nighttime on a quiet Tokyo city sidewalk beside a building with white ceramic tile walls.
The subject is walking past the camera, partially side-on, captured mid-step in a rushed, accidental moment.

Poses & Gestures (combined naturally)
The subject reacts instinctively to being photographed:
turning her head back mid-walk as if surprised,
raising one hand close to the lens to partially block the camera,
shy, restrained smile forming as she suppresses laughter,
body angled in half-profile while continuing to walk forward,
motion carries her slightly out of frame, imperfect framing.
Expressions are subtle and spontaneous — embarrassed, playful, fleeting — never posed.

Camera & Motion
Shot on a modern smartphone, handheld, rushed capture. Strong uncontrolled camera shake. Heavy directional motion blur across the raised hand, hair, and face. Facial features appear smeared and streaked by movement, faintly recognizable but distorted. Partial ghosting around the body. Imperfect framing, subject nearly leaving the frame.

Lighting
Flash-only lighting fired mid-motion. Harsh flash highlights on skin and hand. Deep surrounding darkness. Uneven exposure, blown highlights, hard shadows typical of hurried night phone photography.

Background
White ceramic tile wall stretches into streaked light bands due to motion blur. Street surroundings fade into darkness with minimal readable detail.

Mood
Candid, shy, slightly playful. Feels intrusive, raw, imperfect, and authentic — like a fleeting memory accidentally captured and never meant to be perfect.

Image Quality
Extremely noisy. Heavily blurred. Raw smartphone look. Not cinematic. Not editorial. Not polished.

Negative Prompt
anime, illustration, painting, stylized,
studio lighting, beauty lighting, soft portrait,
sharp focus, clean face, perfect anatomy, smooth skin,
fashion editorial, posed portrait, cinematic grading, film still,
tripod shot, professional photography,
identity match, face copy, real person replication.

– no anime, illustration, cartoon, or doll-like features
– no beauty filters, no airbrushed skin
– no face reshaping or eye enlargement
– no exaggerated body curves
– no extra or missing fingers
– no distorted arms, shoulders, or neck
– no studio or cinematic lighting
– no fashion posing
```

## Meme-to-Toy Box Conversion Template

> Retro, lüks 3B sahne üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
<instruction>
Input A is an internet viral moment or meme origin ({argument name="meme name" default="meme name"}, video screenshot, or cultural phenomenon).
Analyze the original context, why it resonated, cultural impact, and spread pattern.
Optional Input B is a style reference (pop culture museum / internet archive). If missing, choose Gen Z nostalgia meets contemporary art aesthetic.
Goal: Ironic-but-premium display containing the exact viral moment in miniature form, with figurines, props, and screens showing spread metrics. Exact pose, position, and reaction of the characters should be replicated. 
Rules:
- Recreate the exact scene with 2-8 figurines
- Include miniature phone/camera capturing the moment
- Show tiny screens with share counts, platforms, timeline
- Add "before viral" vs "after viral" comparison elements
- Mix irony with genuine appreciation for internet culture
- Label with moment/meme name, origin date, platform, shares/views
Output: ONE image, 1:1 social media optimized format
</instruction>
```

## Playful Beach Selfie with Bikini and Jewelry

> Fotogerçekçi logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_prompt": {
    "subject": {
      "description": "Young woman , Fair skin tone, long straight light brown hair with some strands blowing in the wind.",
      "pose": "Selfie angle, slightly tilted head, sticking tongue out playfully, looking off-camera to the side.",
      "visible_body": "Shoulders, chest, and partial upper torso visible."
    },
    "attire": {
      "top": "Black bikini top with lace trim detailing on the edges and thin straps.",
      "jewelry": [
        "Gold layered necklace.",
        "Gold cross pendant with small embedded crystals.",
        "Gold 'CD' logo charms integrated into the chain (Dior style)."
      ]
    },
    "environment": {
      "location": "Beach setting.",
      "background": {
        "ocean": "Choppy ocean waves with white foam, blue-grey water.",
        "sky": "Overcast sky with bright patches, white and grey clouds.",
        "distant_details": "Silhouette of a distant pier or structure and small figures in the water."
      }
    },
    "lighting_and_atmosphere": {
      "type": "Natural daylight, slightly backlit causing soft shadows on the face.",
      "mood": "Playful, casual, summer vibe, beach day.",
      "color_palette": "Natural tones, cool ocean blues, warm skin tones, bright sky."
    },
    "technical_specs": {
      "quality": "4k, HD, Ultra-realistic, high resolution.",
      "style": "Photorealistic selfie, candid shot.",
      "focus": "Sharp focus on the face, slightly softer background depth of field."
    }
  }
}
```

## Low-Angle Cinematic Portrait with Identity Lock

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the uploaded image strictly as the identity and face reference.
Preserve 100% exact face, facial structure, skin tone, hair texture, age, and overall identity. Do not change her look in any way.
Create a photorealistic cinematic portrait of the same young South Asian woman sitting on a concrete surface against a partly cloudy sky.
She is wearing a light gray t-shirt under a denim jacket, paired with wide-leg denim jeans.
Her long dark hair is naturally flowing. She is wearing multiple rings and a bracelet on her left wrist.
She is smiling gently with closed lips and pointing directly toward the camera with her right index finger, creating a friendly, inviting connection with the viewer.
Camera angle: low-angle shot, looking slightly upward at her.
Lighting: warm golden-hour light (late afternoon / early evening), soft cinematic glow on her face and hair.
Mood: casual, confident, warm, engaging.
Composition: centered subject, clear focus on her face and hand gesture.
Background: open sky with soft clouds, minimal distractions.
Style: ultra-realistic, DSLR quality, shallow depth of field, sharp facial details, natural skin texture, cinematic color grading, 8K clarity.
```

## Sensual Bedroom Selfie with Black Satin Slip Dress and Floating Hearts

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "Seductive bedroom selfie portrait of a young woman lying on bed propped on elbows, upper body leaning forward toward camera, very fair porcelain skin with soft natural glow and subtle texture, long voluminous platinum blonde wavy hair with loose curls cascading over shoulders and framing face, strands slightly messy, large striking light green-hazel eyes with heavy black winged eyeliner and long lashes, intense direct gaze at camera, full glossy deep pink-red lips in subtle pout, wearing glossy black satin slip dress with thin spaghetti straps, deep plunging neckline and high-cut sides emphasizing curves, silver chain necklace visible, pink heart emojis floating above head in playful digital overlay, bedroom background with beige walls, white bed sheets, black clothing rack with hangers, soft warm golden lamp light from side creating rim glow on hair skin and satin sheen, subtle highlights on curls lips and collarbone, shallow depth of field, strong cinematic bokeh on background, photorealistic sensual intimate selfie photography, high detail hair volume curls skin pores eyeliner sharpness satin texture and natural imperfections, shot on smartphone close-up style with slight wide-angle, ultra detailed, 8k resolution",
  "negative_prompt": "cartoon, anime, illustration, painting, deformed, blurry, lowres, plastic skin, doll-like, heavy contour makeup, thick false lashes, filters, beauty filter, airbrushed skin, extra limbs, distorted proportions, asymmetrical face, harsh flash, cold lighting, day time, fully clothed, short hair, dark hair, standing pose, crowded room, text watermark except floating hearts, logo, ugly, bad anatomy, eyes closed, no hearts, aggressive expression",
  "reference_image": {
    "enabled": true,
    "strength": 0.92,
    "description": "Extremely strong reference for exact composition: young woman with long platinum blonde wavy hair, lying on bed propped on elbows, black satin slip dress with thin straps, deep neckline, intense gaze direct at camera, pink floating heart emojis above head, warm bedroom light, black clothing rack in background, seductive intimate selfie vibe"
  },
  "style": "photorealistic sensual bedroom selfie, intimate glossy aesthetic, warm golden indoor lighting with playful digital hearts",
  "aspect_ratio": "3:4",
  "lighting": "soft warm golden lamp light from side, gentle rim light on hair curls skin and satin fabric, subtle highlights on eyes lips and collarbone, cozy ambient glow",
  "camera": "smartphone selfie (iPhone style), close-up angle slightly from above, natural indoor warm light, minor grain for realism",
  "additional_details": [
    "hair: platinum blonde, long voluminous loose waves and curls, soft shine with strands framing face",
    "outfit: glossy black satin slip dress, thin spaghetti straps, deep plunging neckline, high-cut sides, silky sheen catching light",
    "pose: lying on stomach/elbows propped, upper body leaning toward camera, relaxed "
}
```

## Two-Part Cinematic Portrait with Identity Lock

> Sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Two-part photo Don't alter facial features Create a photo of a woman(me 100% same face as uploaded) lying down, her face illuminated by soft sunlight, highlighting every detail of her face. Her skin appears smooth with a natural flush. The top part of the photo focuses on her eyes with long lashes, her hand resting on her hair, and the angle is from above and to the side. The bottom part is an extreme close-up of her lips, her hand running over them, and only the lips are in the frame. The hair is thick and shiny, with bright highlights that emphasize its texture and volume. The surroundings are dark, with sunlight on the woman's face. High-quality 8K image quality with detailed texture. The hair in both frames is long and straight. The lips have a subtle, soft pink sheen. Each frame features a cinematic effect with added grain.
```

## High-Angle Supine Poolside Portrait Prompt

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"subject": {
"description": "A young woman lying supine on a stone pool edge, viewed from above with her head closest to the camera (inverted orientation). She has a deep golden tan, sun-kissed skin with visible sheen and oil texture. Her face is heavily freckled, particularly across the nose and cheeks. She has dark eyebrows and full lips. Her hair is dark blonde to light brown with blonde highlights, wavy and spread out on the stone surface beneath her head. She is wearing a black crochet bikini; the top is a triangle style with visible knit texture and varying knot patterns, the bottoms have side ties. Her body is lean but soft, with visible ribcage definition and a flat stomach. The chest volume is full, exhibiting natural gravity-affected displacement due to the supine position (spreading slightly to the sides while retaining fullness).",
"anatomy_constraints": "Preserve exact body proportions; chest mass must appear natural for a supine pose (gravity pulling tissue slightly sideways but maintaining volume in the cups); visible skin texture including pores, freckles, and fine hairs; knees and shins are visible in the background due to foreshortening.",
"clothing": "Black crochet bikini, triangle top with intricate knit pattern, matching bottoms with side ties."
},
"pose": {
"orientation": "Supine (lying on back), head in immediate foreground, body receding into background.",
"limbs": "Legs are bent at the knees, knees pointing upwards; arms are relaxed at her sides on the stone edge.",
"head_and_gaze": "Head is tilted back slightly against the ground, chin up, eyes looking directly into the camera lens; face is oriented upside-down relative to the body's recession.",
"alignment": "Spine is straight along the pool edge."
},
"environment": {
"location": "Tropical poolside, outdoor setting.",
"foreground": "Light beige/white travertine or limestone pool coping/edge where the subject is lying.",
"background": "Turquoise swimming pool water on the right; lush green tropical plants and palm fronds in the upper background behind the pool; a textured wall is partially visible behind the plants.",
"context": "Sunny vacation atmosphere."
},
"camera": {
"shot_type": "High-angle close-up / Overhead shot.",
"perspective": "Inverted top-down perspective; the camera is positioned above the subject's head, looking down the length of her body. Strong foreshortening effect.",
"focal_point": "Sharp focus on the face and eyes; knees and feet fall slightly out of focus (shallow depth of field).",
"framing": "Head and shoulders occupy the lower foreground, torso in mid-ground, legs in background."
},
"lighting": {
"type": "Natural hard sunlight.",
"direction": "Overhead/Top-down sun.",
"quality": "Bright, high-contrast lighting creating distinct shadows.",
"highlights": "Strong specular highlights on the forehead, nose, chest, and knees due to skin oil/sweat.",
}
```

## Monk Delivering Life Advice Video Still Prompt

> Mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene_type": "spiritual_teaching_courtyard",
  "setting": {
    "location": "outdoor Buddhist temple courtyard",
    "background": {
      "architecture": "traditional East Asian temple with intricate wood carvings, red pillars, and curved roof tiles",
      "nature": "lush green trees to the left",
      "ground": "grey stone pavement",
      "weather": "overcast to soft natural daylight"
    }
  },
  "subject": {
    "type": "elderly_monk",
    "position": "seated cross-legged on the ground",
    "pose": "sitting behind a low table, speaking directly to camera",
    "expression": "earnest, wise, and instructional",
    "appearance": {
      "hair": {
        "style": "shaved/bald",
        "color": "none"
      },
      "skin_features": "aged skin with deep wrinkles",
      "eye_color": "dark"
    },
    "clothing": {
      "top": "light grey inner robe with saffron yellow outer robe draped over shoulder",
      "bottom": "saffron yellow robe fabric covering legs"
    },
    "accessories": []
  },
  "objects": [
    {
      "type": "furniture",
      "name": "low wooden table",
      "material": "light wood",
      "position": "foreground in front of monk"
    },
    {
      "type": "book",
      "name": "large open scripture",
      "state": "open with visible text columns",
      "position": "on wooden table"
    },
    {
      "type": "light_source",
      "name": "candle",
      "color": "white wax",
      "state": "lit with small yellow flame",
      "position": "on table next to book"
    }
  ],
  "camera": {
    "device": "iPhone 17 Pro",
    "angle": "eye-level",
    "framing": "medium shot",
    "orientation": "portrait vertical 9:16",
    "quality": "4k video still, high definition, sharp focus"
  },
  "mood": "serene, philosophical, didactic",
  "lighting": "soft, diffuse natural daylight",
  "image_style": "viral social media video, realistic",
  "activity": "monk delivering life advice"
}
```

## Pixar-Style Miniature Interaction Studio Portrait

> Fotogerçekçi, sinematik 3B sahne üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "Objective": "Create a studio portrait blending a real human with a tiny Pixar-style 3D cartoon version of themselves in a playful, whimsical interaction",
  "PersonaDetails": {
    "PrimarySubject": {
      "Type": "Real human",
      "Wardrobe": "Casual grey sweater or t-shirt",
      "Expression": "Surprised and delighted",
      "Pose": "Holding a tiny character in one hand and pointing at it with the other",
      "Skin": "Photorealistic skin texture with natural detail"
    },
    "SecondarySubject": {
      "Type": "Tiny 3D cartoon version of the human",
      "Scale": "Miniature, resting in the human’s hand",
      "Style": "Pixar-style 3D character",
      "Proportions": "Exaggerated cute proportions with rounded features",
      "FacialFeatures": {
        "Eyes": "Large, expressive",
        "Expression": "Friendly, playful"
      },
      "Consistency": "Matching hairstyle and outfit of the real human"
    }
  },
  "Composition": {
    "Framing": "Medium close-up studio portrait",
    "InteractionFocus": "Clear visual relationship between human and miniature character",
    "DepthOfField": "Shallow depth of field",
    "Focus": "Ultra-sharp focus on both faces"
  },
  "LightingAndBackground": {
    "LightingStyle": "Soft cinematic studio lighting",
    "LightQuality": "Smooth highlights with gentle shadow falloff",
    "Background": "Dark blue gradient studio backdrop",
    "Separation": "Subtle rim light for subject-background separation"
  },
  "ArtDirection": {
    "StyleFusion": [
      "Photorealistic human portrait photography",
      "High-quality Pixar-style 3D character rendering"
    ],
    "Integration": "Seamless blending between real and 3D elements",
    "DetailLevel": "Ultra-detailed textures on skin, fabric, and 3D materials"
  },
  "MoodAndTone": {
    "Mood": "Whimsical, fun, lighthearted",
    "Energy": "Playful surprise and delight"
  },
  "PhotographyStyle": {
    "Genre": "Professional studio portrait photography",
    "CameraLook": "High-end cinematic realism",
    "ImageQuality": "High resolution, clean and sharp"
  },
  "NegativePrompt": [
    "uncanny valley",
    "cartoon human",
    "low-quality 3D",
    "harsh lighting",
    "oversaturated colors",
    "blurry focus",
    "flat composition"
  ],
  "ResponseFormat": {
    "Type": "Single image",
    "Orientation": "Portrait",
    "AspectRatio": "2:3"
  }
}
```

## Paparazzi Style Glamour Portrait with Hard Flash

> Minimal mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_details": {
    "subject_appearance": {
      "demographics": "Young woman, fair  complexion",
      "hair": "Voluminous, dark brunette, messy textured waves, deep side part, tousled look, high shine",
      "makeup": "Full glam, heavy bronze and copper smokey eyeshadow, winged eyeliner, thick false lashes, defined eyebrows, heavy contour, matte mauve-nude lipstick, luminous high-gloss skin finish"
    },
    "apparel_and_styling": {
      "clothing": "White long-sleeved ribbed knit top, button-down henley style, plunging V-neckline, form-fitting",
      "accessories": "Delicate gold chain necklace with a small geometric pendant",
      "styling_aesthetic": "Early 2000s glam, Instagram model aesthetic, casual chic"
    },
    "pose_and_expression": {
      "body_language": "Right hand running through hair lifting roots, head slightly tilted back and to the side",
      "facial_expression": "Sultry, confident, direct eye contact, parting lips slightly",
      "angle": "Medium close-up shot, front-facing"
    },
    "environment": {
      "setting": "Indoor studio or interior wall",
      "background": "Plain white wall, minimal texture",
      "spatial_relation": "Subject standing close to the wall creating a visible cast shadow"
    },
    "lighting": {
      "type": "Direct on-camera flash (hard flash)",
      "characteristics": "High contrast, harsh drop shadow behind the subject on the wall, specular highlights on forehead and cheeks, sharp fall-off",
      "vibe": "Paparazzi style, Terry Richardson aesthetic"
    },
    "camera_technical": {
      "lens": "35mm or 50mm prime lens",
      "aperture": "f/8 (to capture sharp flash details)",
      "film_stock": "Kodak Portra 400 simulation",
      "focus": "Sharp focus on eyes and lips"
    },
    "photorealism_and_mood": {
      "quality_tags": "Photorealistic, 8k resolution, highly detailed skin texture, pores visible, realistic hair strands",
      "mood": "Seductive, bold, intense, glamorous, raw",
      "color_grading": "Slightly warm undertones, high contrast"
    }
  }
}
```

## Realistic Mirror Selfie in Bandeau Top and Sweatpants

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_analysis": {
    "type": "Mirror Selfie / Lifestyle Portrait",
    "aspect_ratio": "4:5 (Vertical)"
  },
  "subject_details": {
    "demographics": "Young adult Caucasian female.",
    "skin_tone": "Fair to light complexion with warm/golden undertones, smooth texture, natural highlights on shoulder and hip.",
    "hair": "Blonde, shoulder-length, slightly messy/tousled with deep side part and visible darker roots.",
    "facial_features": {
      "eyes": "Looking downward at the phone screen.",
      "nose": "Mostly obscured by the smartphone.",
      "lips": "Neutral, relaxed expression with natural pink tone, partially hidden by phone.",
      "cheeks": "Soft natural contour, left cheek partially covered.",
      "expression": "Focused, casual selfie expression."
    },
    "physique": "Athletic, toned build with visible abdominal definition, hourglass silhouette, prominent hip curve.",
    "distinctive_marks": "Small text tattoo on inner right forearm/wrist."
  },
  "attire_and_accessories": {
    "top": "Black strapless bandeau tube top, tight and cropped above the navel.",
    "bottoms": "Heather grey sweatpants, loose and baggy with elastic waistband.",
    "jewelry": "Small stud earring in left ear, thin gold bangle bracelet.",
    "tech_wearables": "Smartwatch resembling Apple Watch with light pink/sand sport band on right wrist.",
    "phone": "{argument name="phone color" default="Green"} smartphone resembling iPhone 11/12 Pro, held vertically with visible camera lenses."
  },
  "pose_and_action": {
    "stance": "Standing three-quarter/profile pose facing the mirror.",
    "hands": {
      "right_hand": "Holding phone at face level for the selfie.",
      "left_hand": "Thumb hooked into waistband, pulling it down slightly to accentuate waist and hip bone."
    }
  },
  "environment_and_background": {
    "setting": "Bedroom interior.",
    "flooring": "Thick silver/grey shag rug.",
    "furniture_left": "Tall white dresser with dark round knobs, ring light and jar candle on top.",
    "furniture_right": "White bed frame with dark brown/plum comforter, gold/yellow textured pillow, and white furry pillow.",
    "wall_decor": {
      "shelves": "Two dark wood floating shelves holding books.",
      "corkboard": "Cork bulletin board with pinned envelopes.",
      "mirror": "Large floor mirror with silver frame visible at the edge."
    },
    "wall_color": "Medium grey."
  },
  "technical_qualities": {
    "lighting": "Soft, diffused natural daylight from the left, gentle highlights and soft shadows.",
    "composition": "Eye-level mirror reflection shot.",
    "color_palette": "Neutral greys, white furniture, black top, natural skin tones, green phone accent."
  },
  "master_prompt_string": "Realistic mirror selfie of a fit young blonde woman in a bedroom, 4:5 aspect ratio. Wearing a black strapless tube top and loose heather grey sweatpants. Three-quarter profile pose, holding a {argument name="phone color" default="green"} iPhone vertically in front of her face with the rig"
}
```

## Coquette Aesthetic Bedroom Pose (Legs Raised)

> Minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": "indoor bedroom, lying on back pose, legs raised, looking at camera",
  "subject": {
    "character": "YOUNG WOMAN, blonde hair, slender frame",
 
    "face": {
      "structure": "soft delicate features, youthful",
      "skin": "fair porcelain, natural clear",
      "eyes": {
        "shape": "large",
        "color": "blue/green",
        "expression": "direct gaze at camera, soft neutral expression"
      },
      "mouth": {
        "lips": "full, natural pink, relaxed"
      },
      "makeup": "minimal natural, barely there"
    },
    
    "hair": {
      "color": "BLONDE",
      "length": "long",
      "texture": "soft waves, voluminous",
      "style": "loose, resting on pillow",
      "shine": "healthy shine, silky",
      "visible": "fully visible"
    },
    
    "accessories": {
      "hat": null,
      "bag": null
    }
  },

  "pose": {
    "overall": "lying on back on bed, legs raised vertically",
    
    "position": {
      "base": "lying flat on white linen bed",
      "orientation": "face up, body aligned vertically"
    },
    
    "legs": {
      "position": "raised straight up into the air",
      "thighs": "vertical",
      "feet": "pointed towards the ceiling"
    },
    
    "hips": {
      "position": "flat on the bed",
      "emphasis": "neutral"
    },
    
    "torso": {
      "direction": "facing up",
      "back": "on the mattress",
      "twist": "none"
    },
    
    "arms": {
      "position": "resting on chest, holding a {argument name="item held" default="white rose"}"
    },
    
    "head": {
      "turn": "facing straight up at camera",
      "expression": "soft, calm, direct gaze"
    }
  },

  "outfit": {
    "top": {
      "type": "white ribbed crop top",
      "style": "short sleeve, fitted",
      "color": "white",
      "back": "covered"
    },
    
    "bottom": {
      "type": "white fishnet tights",
      "wash": null,
      "fit": "tight",
      "details": "cutouts along the side of legs held by small pastel pink ribbon bows",
      "style": "coquette aesthetic"
    },
    
    "shoes": {
      "type": "none",
      "style": null,
      "color": null
    }
  },

  "body": {
    "type": "slender",
    "back": "on bed",
    "skin": "fair"
  },

  "environment": {
    "location": "indoor, modern bedroom",
    
    "background": {
     "wall": "dark grey concrete finish",
     "headboard": "textured grey upholstered"
    },
    
    "ground": {
      "surface": "bed with white linen bedding",
    }
  },

  "lighting": {
    "type": "soft natural daylight",
    
    "quality": {
      "intensity": "soft, diffused, even",
      "mood": "gentle, intimate"
    },
    
    "on_subject": {
      "skin": "soft even lighting from the left",
      "hair": "illuminated from the side"
    }
  },

  "photography": {
    "angle": "medium shot, vertical orientation, looking down slightly",
    "framing": "full body on bed"
  }
}
```

## Intimate Low-Light Bedroom Selfie Portrait

> Fotogerçekçi, sinematik logo üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "Intimate low-light bedroom selfie portrait of a young woman, very fair porcelain skin with subtle natural glow and light freckles, large captivating light blue eyes with soft natural lashes and slight winged liner, direct melancholic gaze at camera, full glossy nude-pink lips in subtle pout with finger gently touching lower lip, long voluminous platinum blonde wavy hair with loose curls cascading over shoulders and framing face, wearing oversized soft pink-white striped ribbed knit sweater with frayed cuffs, high neck, cozy and slightly oversized fit, sitting or leaning in dimly lit bedroom, warm golden lamp light from side creating gentle rim light on hair curls skin and sweater texture, subtle highlights on freckles and eyes, blurred background with neutral walls and soft curtains, shallow depth of field, strong cinematic bokeh, photorealistic intimate fashion selfie photography, high detail hair volume curls skin pores freckles knit texture fabric fuzz and natural imperfections, shot on smartphone close-up style with slight wide-angle, ultra detailed, 8k resolution",
  "negative_prompt": "cartoon, anime, illustration, painting, deformed, blurry, lowres, plastic skin, doll-like, heavy makeup overload, thick eyeliner, false lashes, filters, beauty filter, airbrushed skin, extra limbs, distorted proportions, asymmetrical face, harsh flash, cold lighting, day time overexposure, formal clothing, short hair, dark hair, crowded room, text watermark, logo, ugly, bad anatomy, eyes closed, no freckles, aggressive expression",
  "reference_image": {
    "enabled": true,
    "strength": 0.92,
    "description": "Strong primary reference for exact composition and vibe: young woman with long platinum blonde wavy hair, fair freckled skin, light blue eyes direct melancholic gaze, finger touching lower lip, pink-white striped oversized knit sweater, warm dim bedroom light, intimate close-up selfie style"
  },
  "style": "photorealistic intimate cozy bedroom selfie, soft melancholic aesthetic, warm golden indoor lighting",
  "aspect_ratio": "3:4",
  "lighting": "soft warm golden lamp light from side, gentle rim light on hair curls skin and sweater, subtle highlights on freckles eyes and lip gloss, cozy ambient glow with soft shadows",
  "camera": "smartphone selfie (iPhone style), close-up angle slightly from below, natural indoor warm light, minor grain for realism",
  "additional_details": [
    "hair: platinum blonde, long voluminous loose waves and curls, soft shine with strands falling over face and shoulders",
    "outfit: oversized pink-white horizontal striped ribbed knit sweater, high neck, frayed cuffs, cozy slightly baggy fit",
    "pose: sitting or leaning forward slightly, one hand with finger touching lower lip thoughtfully, relaxed intimate posture",
    "skin: very fair porcelain with light natural freckles across nose cheeks and forehead, realistic pores and dewy glow",
    "eyes: large light blue with detailed"
  ]
}
```

## Colored Pencil Illustration Style Prompt

> Minimal, elle çizilmiş illüstrasyon üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Illustration style: {argument name="illustration medium" default="hand-drawn colored pencil illustration"}, clean line art with slightly rough pencil outlines, soft pastel coloring with increased brightness, lighter and more vivid color tones, enhanced saturation while staying natural, visible pencil strokes and gentle shading texture, warm and friendly tone, semi-cartoon realistic proportions, simple facial features with dot eyes and small smiles, flat yet detailed coloring, minimal shadows, soft highlights, storybook illustration feel, cozy and cheerful atmosphere, vibrant yet soft color palette, children-book / lifestyle sketch style, high clarity, no realism, no photo texture.
```

## Documentary Realism Boxing Portrait

> Portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Medium close-up portrait of a female boxer resting in the corner of a ring between rounds, cropped from the chest up. Hyper-detailed skin texture showing sweat mixed with a little blood from a nosebleed, a slight swelling over one eye, and her braided hair slightly messy. She is breathing heavily, looking straight ahead with a determined, weary expression. Wearing a mouthguard and boxing gloves, with a towel draped over her shoulder. The background shows the ropes and blurry corner staff. harsh indoor ring lighting. Neutral color science, no crushed blacks, no artificial smoothing. Shot on smartphone portrait lens, shallow depth of field. Documentary photographic realism, Shot in a realistic smartphone photography style.
```

## Hyper-Realistic Macro Fine Art Portrait Prompt

> Fotogerçekçi portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Utilize exclusively and obligatorily the uploaded reference photos as the primary and authoritative source for the model’s face, facial structure, proportions, skin tone, real skin texture, and the exact natural characteristics of her hair.
Do not idealize, beautify, alter, rejuvenate, slim the face, smooth the skin, or modify any real features.
Do not remove or change freckles, pores, fine lines, or natural imperfections.The appearance must match the reference images exactly, with absolute fidelity.
Create a hyper-realistic, ethereal macro Fine Art portrait photograph, captured with a {argument name=\"camera lens\" default=\"Leica APO-Macro-Elmarit-R 100mm f/2.8\"}, full-frame.
An extreme close-up of a young woman’s face with pale skin, fully respecting the real physiognomy of the model as shown in the reference photos.
Skin texture is ultra-detailed and completely natural, with clearly visible pores and no artificial smoothing.
One crystal-clear, melancholic eye is in perfect critical focus, displaying natural micro-contrast characteristic of Leica optics.
Long, natural eyelashes.
Lips slightly parted, in a natural pale pink tone, with no excessive or artificial makeup.
Delicate wildflowers in {argument name=\"flower color\" default=\"soft lilac and muted purple\"} tones rest gently on the cheek and intertwine with loose, naturally imperfect hair strands, exactly following the real hair pattern seen in the reference images.
Some flowers appear softly out of focus in the foreground, creating organic depth and layered composition.
Soft, cool, diffused natural light, as on an overcast day.
No harsh shadows, no artificial lighting.
A serene, fragile, poetic, and subtly melancholic atmosphere.
Macro photography with an extremely shallow depth of field, edges and background melting into a creamy, smooth bokeh.
Absolute critical focus on the iris and the true skin texture.
Desaturated color palette, cool pastel tones — soft gray, beige, and lilac.
Fine Art aesthetic, authentic Leica optical fidelity, true photographic appearance.
Ultra-high resolution 8K, with no AI-generated look.
```

## Reference-Based Photo Editing for Candid Night Scene

> Görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "task": "photo_editing",
  "instruction": "Replicate the exact appearance of the person from the reference image—including their face, hair, and the specific clothing they are wearing. Place this person into the pose and setting described below. The subject should be performing the actions (sitting, using phone, holding drink) while maintaining their visual identity and attire from the reference photo.",
  "photo_style": {
    "type": "candid_smartphone_photo",
    "aspect_ratio": "3:4",
    "time": "night",
    "device": "low-end Android phone",
    "shooting_style": "handheld, rushed, imperfect",
    "quality": "realistic, unpolished"
  },
  "subject": {
    "appearance_reference": "EXACT match of the person's face, features, and hair from reference image",
    "vibe": [
      "girl-next-door",
      "young",
      "fresh",
      "everyday",
      "not model-like",
      "not glamorous",
      "not influencer",
      "not styled"
    ]
  },
  "pose_and_action": {
    "seating": "sitting casually at a café table",
    "moment": "unplanned, unposed",
    "hands": {
      "one_hand": "holding a glass of drink",
      "other_hand": "using phone"
    },
    "attention": "focused on her phone, unaware of camera (candid)"
  },
  "clothing_and_appearance": {
    "attire": {
      "requirement": "MUST be an exact replica of the clothing (style, color, material) worn in the reference image",
      "fit": "retained from reference but adapted to the sitting pose"
    },
    "hair": {
      "style": "matches reference image",
      "detail": "flowing naturally in the night breeze"
    },
    "skin": {
      "look": "matches reference image",
      "restrictions": [
        "no beauty filter",
        "no retouching",
        "no AI-polished skin"
      ]
    }
  },
  "camera_angle_and_framing": {
    "angle": "slightly from the side and slightly behind",
    "perspective": "authentic candid",
    "framing": "medium-wide",
    "visibility": "upper body and part of table visible"
  },
  "lighting": {
    "type": "harsh and imperfect",
    "sources": [
      "rooftop café lights",
      "city street lights"
    ],
    "effects": [
      "uneven exposure",
      "blown highlights",
      "deep shadows",
      "imperfect white balance"
    ]
  },
  "focus_and_quality": {
    "focus": "slightly more on subject",
    "background_blur": "soft blur due to low light and camera limitations",
    "artifacts": [
      "visible digital noise",
      "grain",
      "slight motion blur",
      "imperfect focus accuracy"
    ]
  },
  "background":
```

## Intimate Portrait with Messy Blonde Hair and Natural Light

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": {
    "subject": {
      "description": "A woman {argument name="subject name" default="Ana de Armas"} with messy, shoulder-length blonde hair with dark roots.",
      "eyes": "Piercing blue eyes, looking directly at the camera with a relaxed gaze.",
      "face": "Natural, dewy skin, rosy cheeks, slightly parted lips.",
      "pose": "Head tilted back slightly, shoulders and upper chest bare, looking up towards the lens.",
      "clothing": "A magenta suede or velvet top with a low, square neckline and dark floral pattern trim."
    },
    "environment": {
      "background": "A textured, warm beige plaster wall."
    },
    "lighting": {
      "type": "Soft, warm, diffused natural light from the front.",
      "highlights": "Gentle sheen on her skin and collarbones."
    },
    "styling": {
      "hair": "Tousled, textured blonde bob with natural waves and visible roots.",
      "makeup": "Natural, minimal makeup emphasizing glowing skin."
    },
    "mood": "Intimate, natural, raw, and slightly provocative."
  },
  "camera": {
    "type": "Portrait photography, medium close-up.",
    "lens": "85mm lens.",
    "aperture": "f/2.8",
    "focus": "Sharp focus on her eyes and face, shallow depth of field.",
    "details": "Ultra photorealistic, fine film grain, warm color grading." Ratio 9:16 
  }
}
```

## Photorealistic Woman Hugging Giant Spoon in Kitchen Prompt

> Fotogerçekçi görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_generation_prompt",
  "language": "en",
  "style": "photorealistic lifestyle photography",
  "aspect_ratio": "3:4",
  "identity_preservation": {
    "use_reference_image": true,
    "strict_identity_lock": true,
    "alter_face": false,
    "alter_features": false,
    "notes": "Preserve the subject’s facial features, proportions, skin texture, hair, age, and gender exactly as in the reference image."
  },
  "environment": {
    "location": "the subject’s own kitchen",
    "background": [
      "visible kitchen cabinets",
      "countertops",
      "everyday kitchen details"
    ],
    "lighting": {
      "type": "natural daylight",
      "source": "window light",
      "effect": "soft, realistic illumination across the scene"
    }
  },
  "subject": {
    "gender": "female",
    "pose": {
      "position": "standing",
      "body_language": "relaxed and natural",
      "hands": "both hands wrapped around a giant metal spoon held in front of the body"
    },
    "expression": "smiling naturally while looking directly at the camera",
    "wardrobe": {
      "top": "brown knitted sweater",
      "bottom": "blue denim jeans"
    },
    "prop": {
      "object": "giant metal cooking spoon",
      "scale": "almost as tall as the subject",
      "material": "shiny polished metal",
      "interaction": "the subject hugs the spoon with both arms"
    }
  },
  "camera": {
    "shot_type": "full or medium-full body shot",
    "angle": "eye-level",
    "focus": "sharp focus on the subject and spoon",
    "depth_of_field": "natural depth with background slightly softened"
  },
  "quality": {
    "realism": "highly realistic, natural photo look",
    "details": "clear textures of clothing, metal spoon, and kitchen elements"
  },
  "constraints": [
    "No artificial lighting effects",
    "No stylization or fantasy elements",
    "No distortion of proportions",
    "No text, logos, or watermarks"
  ],
  "output_goal": "Create a natural, photorealistic photo of a woman standing in her own kitchen, smiling at the camera while holding an oversized shiny metal spoon, illuminated by soft daylight coming through a window."
}
```

## Shocked Expression Candid Photo Prompt

> Görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the same face from the reference image without changing facial features 
{
  "image_description": {
    "subject": {
      "person": "Young woman with {argument name="hair color" default="blonde"} hair and fair skin",
      "expression": "Extremely shocked and surprised, mouth wide open in a gasp, eyes rolled slightly upward, dramatic facial expression",
      "pose": "Reclining or lying down, captured from a low-angle perspective looking up"
    },
    "clothing_and_style": {
      "top": "{argument name="top color" default="Purple"} sheer or mesh top with a solid chest panel featuring a large, colorful butterfly print (yellow, orange, and red wings)",
      "details": "Small iridescent sequins or rhinestones on the fabric, dark nail polish on visible hand"
    },
    "environment": {
      "background": "A patterned pillow with a floral or leaf motif in shades of burgundy and beige, plain off-white wall behind it",
      "lighting": "Soft, indoor ambient lighting, slightly shadowed"
    },
    "technical_attributes": {
      "camera_angle": "Close-up, extreme low angle (worm's eye view)",
      "image_quality": "Slightly grainy, candid smartphone photography style, soft focus",
      "color_palette": "Deep purples, vibrant yellows from the butterfly print, and muted earth tones in the background"
    }
  }
}
```

## Soft-Glow Night Portrait with On-Camera Flash

> Retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{ "composition": { "framing": "vertical portrait orientation", "shot_type": "medium shot from waist to head", "camera_angle": "eye-level with slight rightward angle", "subject_position": "center-right of frame", "pose": "three-quarter profile facing left with head turned toward camera", "negative_space": "large dark sky occupying upper half of frame", "depth_of_field": "shallow to moderate, subject sharply in focus, background softly blurred" }, "subject": { "type": "human female-presenting subject", "age_appearance": "young adult", "expression": "soft, calm, slightly inquisitive", "gaze": "direct eye contact with camera", "skin_tone": "fair with warm undertones", "facial_features": { "eyes": "large, dark brown appearance, enhanced contrast", "cheeks": "pronounced rosy blush", "lips": "soft red-pink, matte finish", "nose": "natural shape with subtle highlight" }, "hair": { "color": "dark brown", "style": "messy updo with loose face-framing strands", "texture": "smooth with slight flyaways" } }, "wardrobe": { "outfit_type": "dress with layered blouse", "dress": { "pattern": "plaid", "colors": ["muted pink", "beige", "gray"], "fit": "fitted bodice" }, "blouse": { "color": "off-white", "fabric": "lightweight, semi-sheer", "sleeves": "short puff sleeves with soft ruffled hems" }, "style_influence": "soft vintage / cottagecore aesthetic" }, "lighting": { "primary_light": "on-camera flash", "light_quality": "hard frontal light", "direction": "front-facing, slightly above eye level", "effect_on_subject": "brightly illuminated face and torso with crisp edges", "background_lighting": "ambient city lights and house lights", "shadow_behavior": "minimal facial shadows, slight falloff behind subject" }, "color_palette": { "dominant_colors": ["black", "soft pink", "cream", "warm beige"], "accent_colors": ["warm yellow lights", "cool blue window light"], "overall_tone": "warm subject against cool-dark background" }, "background": { "environment": "outdoor residential area at night", "elements": [ "balcony railing in foreground", "houses and buildings", "windows with warm interior lighting", "dark night sky" ], "setting_mood": "quiet, intimate nighttime atmosphere" }, "artistic_style": { "aesthetic": "soft-glow night portrait", "mood": "romantic, gentle, slightly dreamy", "influences": ["social media portrait photography", "modern cottagecore"], "retouching_style": "beauty-focused with emphasis on skin smoothness and blush" }, "technical_details": { "camera_type_assumption": "smartphone camera", "lens_equivalent": "wide to standard (24–35mm equivalent)", "flash_usage": "enabled", "iso_appearance": "low to moderate with minimal noise", "sharpness": "high on subject, reduced in background", "contrast": "moderate with lifted highlights" }, "post_processing": { "skin_smoothing": "moderate", "color_grading": "warm highlights, neutral shadows", "blush_enhancement": "strong", "eye_enhancement": "subtle brightness and contrast increase"}
```

## Refining Image Generation for Natural Expression

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
I want a slightly more stylish room, cuter loungewear, and the girl to look a bit more coquettish.
```

## Custom Character Latte Art Generation Prompt

> Fotogerçekçi yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
[Character Settings Section]
*Please rewrite the content within 【 】 below

【Character Appearance Features】:
(Example: An anime-style girl with bright brown long hair, winking and smiling)
{argument name="character appearance features" default="Brown hair, short twin tails, red eyes, slightly pointed teeth (giza teeth)."}

【Character Name】:
(Example: Latte Chan)
{argument name="character name" default="Tsuno-chan"}

[Fixed Section]

A photo of latte art placed on a wooden table, taken directly from above. Vertical aspect ratio.

Subject:
Cafe latte in a white ceramic coffee cup.
A white saucer is beneath the cup, and a silver spoon is placed beside it.
The table has a textured wood grain.

Latte Art Details:
On the fine milk foam surface of the cup, an illustration of "{argument name="character appearance features" default="Brown hair, short twin tails, red eyes, slightly pointed teeth (giza teeth)."}" is delicately and artistically drawn using the shades of chocolate sauce and espresso.
The lines are drawn with smooth brown syrup, reproducing an anime-style drawing.

Accessory Details:
A small white memo pad (or card) is placed right next to the cup.
The text "{argument name="character name" default="Tsuno-chan"}" is clearly written on the memo in an easy-to-read, handwritten style font.

Quality/Style:
Photorealistic, high resolution, warm cafe lighting, appetizing texture, food photography.
```

## Photorealistic image generation prompt for a woman in a gym, high-angle shot

> Fotogerçekçi, retro görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt_type": "descriptive_image_generation",
  "subject": {
    "description": "A young woman resembling {argument name="subject description" default="Sydney Sweeney standing in a gym."}",
    "hair": "Long, straight dirty blonde hair with lighter highlights and visible roots, parted in the middle.",
    "eyes": "Blue eyes, looking directly up at the camera lens.",
    "expression": "Neutral, slightly pouty, serious gaze.",
    "pose": "Standing straight, arms at sides, looking up. The perspective is distorted due to the camera angle (head appears larger, body tapers down)."
  },
  "attire": {
    "outfit_style": "Matching athletic wear.",
    "top": "White sports bra with a small keyhole cutout at the chest.",
    "bottom": "White high-waisted tight compression shorts.",
    "footwear": "Red, white, and burgundy retro-style athletic sneakers.",
    "accessories": [
      "Yellow crew socks with text",
      "Pink matte water bottle held in left hand",
      "Visible tattoo on the left forearm"
    ]
  },
  "environment": {
    "location": "Modern commercial gym.",
    "flooring": "Light wood laminate flooring.",
    "background_elements": [
      "Large floor-to-ceiling mirror on the left wall reflecting dumbbell racks and weights",
      "Row of black cardio machines (ellipticals/treadmills) on the right",
      "Teal/turquoise accent walls in the deep background",
      "Dumbbell rack in the center background"
    ]
  },
  "technical_details": {
    "camera_angle": "Extreme high-angle, overhead shot (bird's-eye view).",
    "lens_style": "Wide-angle, slightly distorted perspective similar to a phone's 0.5x zoom mode.",
    "lighting": "Bright, cool-toned artificial gym lighting, even illumination.",
    "aesthetic": "Candid, social media influencer style, high definition, photorealistic, sharp focus on the face."
  }
}
```

## Structured JSON Prompt for Luxury Couple Editorial Campaign

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "generation_request": {
    "meta_data": {
      "tool": "NanoBanana Pro",
      "task_type": "photorealistic_couple_editorial_campaign",
      "version": "v1.2_MUSEUM_LUXURY_COUPLE_EDITORIAL",
      "priority": "highest"
    },
    "references": {
      "reference_image_1": "UPLOAD_REFERENCE_IMAGE (POSE + COMPOSITION + MOOD LOCK)"
    },
    "output_settings": {
      "aspect_ratio": "2:3",
      "orientation": "portrait",
      "resolution": "ultra_high_res",
      "render_style": "ultra_photoreal_high_fashion_editorial",
      "sharpness": "crisp_but_natural",
      "film_grain": "none_or_minimal",
      "color_grade": "warm_museum_luxury_true_to_life"
    },
    "hard_constraints": [
      "EXACTLY 2 people only (one woman, one man).",
      "Perfect identity match if faces are provided (no face or body changes).",
      "Pose and framing must match the reference: seated side-by-side on a gallery bench, relaxed crossed-leg posture.",
      "No readable text, no logos, no watermarks (newspapers must be blank or abstract).",
      "Perfect anatomy: hands, fingers, legs, feet, and posture fully correct.",
      "Photoreal skin texture; no plastic smoothing.",
      "No extra people, reflections, or background faces."
    ],
    "creative_prompt": {
      "scene_summary": "Ultra-photoreal luxury fashion editorial set inside a high-end art museum or gallery. A stylish couple sits casually on a wooden gallery bench beneath a large framed classical landscape painting. The woman wears a strapless white mini dress with a sculpted silhouette, white high heels, and elegant sunglasses; hair pulled back in a refined updo; minimal gold jewelry. The man wears a tailored black suit with a white shirt and dark sunglasses; polished shoes; relaxed but confident posture.\
\
Both are reading newspapers in a playful, ironic editorial moment; all newspaper pages are visually abstract with NO readable text or headlines. Composition mirrors the reference: balanced symmetry, legs crossed, effortless elegance. Lighting is soft museum gallery lighting—warm, diffused, shadow-controlled—creating a refined cinematic atmosphere. Color palette: warm neutrals, ivory walls, golden frame accents, natural wood tones. Mood: chic, intellectual, modern luxury, quietly confident, fashion-house campaign quality.\
\
Camera: 85mm editorial portrait look, medium depth of field, subjects tack sharp, background painting slightly softened but recognizable. Overall feel: Vogue / luxury brand campaign, timeless and sophisticated."
    },
    "negative_prompt": [
      "any readable text",
      "logos, branding, watermarks",
      "extra people or reflections",
      "distorted legs, hands, feet",
      "identity drift",
      "cartoon, anime, CGI look",
      "plastic or over-smoothed skin",
      "harsh flash or blown highlights",
      "busy or cluttered background",
      "cheap fashion styling"
    ]
  }
}
```

## Photorealistic Pilates Outfit Lifestyle Photo

> Fotogerçekçi portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A photorealistic lifestyle photo of a woman sitting on a stone bench attached to a wall. The woman is seated sideways on the bench, hips fully resting on the stone surface. One leg is bent inward and tucked on the bench, while the other leg is bent and folded forward with the foot resting flat on the bench. She is wearing a black sports bra and black high-waisted leggings, white crew socks, and white sneakers. Her torso is upright and facing the camera directly. Her right arm is raised, holding a clear plastic cup of iced coffee. A straw is touching her lips as she is sipping the drink, creating a subtle pout expression. Her left arm is relaxed and resting naturally, holding a pair of sunglasses in her hand. A black structured handbag is placed on the bench to her left side, very close to her body, clearly visible in the frame. The environment is a café exterior seating area. On the left side of the image there is a plain light concrete wall; on the right side there is a light wall with rounded stone texture. Behind her, a café service window is visible with menu boards inside, and a ceiling fan can be seen through the window. Lighting is natural daylight with soft, realistic shadows. The camera is positioned at eye level, vertical portrait framing, medium-to-full body composition. The face must use the identity from the provided face reference image, blended naturally and realistically, while keeping the exact pose, body proportions, outfit, environment, object placement, and camera angle unchanged. Ultra-realistic photography, natural skin texture, no stylization.
```

## Y2K K-Pop Digital Scrapbook Collage

> Retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
"art_style_description": {
      "type": "Digital Scrapbook / Fan-Edit Collage.",
      "aesthetic": "Y2K, Coquette, K-pop Idol Fan Art.",
      "visual_structure": "Multiple photographic cutouts of the same subject arranged in a chaotic but cohesive layout on top of a vintage textured background. Each cutout has a thick white stroke/outline to resemble a sticker."
    },
    "subject_details": {
      "demographics": "Young Asian woman (K-pop idol aesthetic), fair skin, delicate features.",
      "hair": "Long, voluminous, dark wavy hair with air bangs. In one panel, she wears a small white ribbon clip.",
      "outfit": "Black sequined/embellished crop top (bralette style), dark denim jeans.",
      "makeup": "Peach-toned blush, glossy lips, soft eyeliner."
    },
    "pose_breakdown_panels": {
      "panel_1_top_center": "Portrait shot. Subject looking straight ahead/slightly down with hand in hair, elbows raised. Background shows a blurred cityscape.",
      "panel_2_bottom_right": "Seated/Reclining pose. Subject leaning back, one arm supporting weight, looking coolly at the camera. Wearing jeans.",
      "panel_3_middle_right": "Over-the-shoulder shot. Subject looking back at the camera with a soft gaze, arm raised touching head.",
      "panel_4_bottom_left": "Close-up portrait. Subject looking to the side, wearing a white bow hair clip.",
      "panel_5_top_left": "Bust-up shot. Subject gazing off-camera with a dreamy expression."
    },
    "graphic_elements_and_overlays": {
      "background_texture": "Vintage newspaper print text (sepia/beige toned).",
      "stickers": {
        "text": "Ransom-note style text blocks reading '{argument name="text block 1" default="iqrasaifiii"}', '{argument name="text block 2" default="i swear she's an angel"}', and '{argument name="text block 3" default="beyoutiful"}'.",
        "objects": "A brown plush teddy bear sticker in the bottom left corner.",
        "decor": "White daisy flower graphics, jagged torn paper edges."
      }
    },
    "camera_technical_values": {
      "source_photo_style": "High-end fashion editorial photography.",
      "lens": "85mm (Portrait telephoto).",
      "lighting": "Natural Window Light (Soft, directional sunlight coming from the side).",
      "color_grading": "Slightly desaturated source photos contrasted against the warm beige newspaper background.",
      "resolution": "High fidelity cutouts."
    },
    "composition": "Overlapping layers. The center and right photos are larger, while smaller details fill the corners."
```

## Flash Photography Influencer Candid in Upscale Restaurant

> Mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"meta": {
"aesthetic": "Flash Photography/Influencer Candid",
"imperfections": [
"Direct Flash",
"Hard Shadows",
"High Contrast",
"Digital Noise"
]
},
"global_context": {
"scene_description": "Nighttime indoor dining scene captured with direct flash.",
"lighting": {
"source": "Hard Direct On-Camera Flash",
"shadows": "Sharp/Distinct on wall behind subject"
}
},
"subject_analysis": {
"pose": "Sitting upright on a dining chair, legs crossed at the knee, one hand resting on the thigh, the other hand gently touching the cheek/jawline with elbow raised.",
"expression": "Poised, confident, soft smile directed at camera",
"clothing": "Oversized cream graphic t-shirt with dark gothic/dog print, sheer brown thigh-high stockings, white biker shorts visible underneath",
"accessories": "Shoulder bag with thick strap, small hoop earrings, delicate necklace, wrist tattoo visible",
"identity_protection": {
"face_command": "USE_REFERENCE_FACE",
"hair_command": "USE_REFERENCE_HAIR",
"skin_command": "USE_REFERENCE_SKIN"
}
},
"environment": {
"location": "Upscale restaurant interior",
"background_details": "White wainscoting/paneled walls, tables with white tablecloths and candles, large mirror reflecting dried floral arrangements, silver ice bucket stand"
},
"generative_prompt_string": "A raw, candid photo of a person, sitting upright on a dining chair, legs crossed at the knee, one hand resting on the thigh, the other hand gently touching the cheek/jawline with elbow raised, poised, confident, soft smile directed at camera. USE_REFERENCE_FACE, USE_REFERENCE_HAIR, USE_REFERENCE_SKIN. Wearing Oversized cream graphic t-shirt with dark gothic/dog print, sheer brown thigh-high stockings, white biker shorts visible underneath. Hard Direct On-Camera Flash, Direct Flash, Hard Shadows, High Contrast, Digital Noise. Background is Upscale restaurant interior with White wainscoting/paneled walls, tables with white tablecloths and candles, large mirror reflecting dried floral arrangements, silver ice bucket stand. iPhone aesthetic, unedited, authentic."
```

## Flash Photography Portrait in Satin Corset Set

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"subject": {
"description": "Young woman with a bronzed, tanned complexion and glowing skin.",
"hair": "Long, wavy, dirty blonde to light brown hair, parted in the center, falling loosely over shoulders and back, with loose strands framing the face.",
"outfit": "A cream or off-white satin two-piece set. The top is a structured corset with boning, a dipped hemline, and draped off-the-shoulder sleeves. The corset fits tightly, emphasizing a full, heavy bust with significant upward projection and deep cleavage. The bottom is a matching satin maxi skirt with a high slit on the left thigh, revealing the leg.",
"physique": "Curvaceous and fit figure. Bust volume is full and heavy, visibly projecting forward and outward, sitting high due to the corset support but maintaining natural soft tissue weight and gravity. Distinct cleavage is visible. Toned legs and defined collarbones.",
"skin_details": "High-gloss skin finish, likely from oil or lotion, creating strong specular highlights on the shoulders, chest, and thigh. Natural skin texture visible under flash lighting.",
"makeup": "Glamorous makeup with defined eyebrows, highlighter on the nose and cheeks, and glossy mauve-nude lips."
},
"pose": {
"orientation": "Standing, body angled roughly 30 degrees to the left.",
"head": "Head turned almost in profile to the left, chin slightly elevated, gaze directed away from the camera toward the left.",
"arms": "Right arm extended downwards naturally by the side. Left arm bent slightly, with the left hand gripping the edge of the skirt slit near the upper thigh.",
"legs": "Left leg stepping forward slightly through the skirt slit, creating a dynamic line. Weight distributed on the back right leg.",
"spine": "Upright posture with a slight arch in the lower back, accentuating the hip curve."
},
"environment": {
"setting": "Outdoor courtyard or patio at twilight.",
"elements": "Stucco walls in neutral tones, tall cactus plants (saguaro style) silhouetted against the sky, paved stone ground.",
"background_details": "A warm, yellow artificial light emanating from a doorway or window in the background, contrasting with the cool ambient light."
},
"camera": {
"shot_type": "Medium shot, framing from mid-thigh/knees up to the top of the head.",
"angle": "Slightly low angle to eye-level, emphasizing the subject's stature.",
"focal_length": "Portrait focal length, approximately 50mm to 85mm.",
"perspective": "Preserves strong three-dimensional depth between the subject and the background walls."
},
"lighting": {
"type": "Mixed lighting: Flash photography combined with ambient twilight.",
"key_light": "Direct, hard on-camera flash or strobe from the front-right, creating sharp shadows behind the subject and strong specular highlights on the satin fabric and oily skin.",
"ambient_light": "Cool, deep blue skylight from the evening sky (blue hour).",
"accent_light": "Warm tungsten glow from the background stru"
}
}
```

