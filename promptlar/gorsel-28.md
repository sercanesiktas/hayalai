# Görsel — 28/38

`400 prompt`  ·  [← tüm kategoriler](../README.md#kategoriler)

---

## Low-angle stylized portrait of a young woman in a dim room

> Logo üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_generation_request": {
    "constraints": {
      "preservation_instruction": "Without changing {argument name="my face" default="my facial features and face"}",
      "strictness": "High"
    },
    "technical_specifications": {
      "medium": "Photograph",
      "resolution": "High-definition",
      "camera_angle": "Low-angle perspective"
    },
    "subject_details": {
      "demographics": "Young woman",
      "physical_appearance": {
        "hair": {
          "style": "Messy updo",
          "details": "Loose strands"
        }
      },
      "pose_and_action": {
        "stance": "Standing",
        "positioning": "Positioned",
        "gesture": "Touching the collar",
        "vibe": "Looking stylish"
      },
      "attire": {
        "upper_body": {
          "item": "Cropped t-shirt",
          "color": {argument name="shirt color" default="Dark blue"},
          "texture": "Ribbed",
          "details": [
            "White trim",
            "White logo"
          ]
        },
        "lower_body": {
          "item": "Pajama pants",
          "pattern": "Striped",
          "color": "White"
        }
      }
    },
    "scene_environment": {
      "setting_type": "Room",
      "lighting": {
        "intensity": "Dimly lit",
        "temperature": "Warm",
        "color_tone": "Enhanced purple-toned",
        "sources": [
          "Ceiling fixture",
          "Hidden cove lights"
        ]
      }
    }
  }
}
```

## Ultra-realistic 16K selfie edit of a daydreaming girl on a blanket

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Edit the photo in ultra-realistic 16K resolution. A {argument name="subject age" default="young"} girl is taking a selfie inside a room. Her hair is long, layered {argument name="hair color" default="ash brown"}, slightly messy at the top, falling forward naturally. She is wearing a {argument name="dress description" default="black curly-strapped floral dress"}. Pose: she is lying face down on a blanket, with her right hand touching her lips, head tilted sideways, looking forward, appearing to be daydreaming. Her makeup is flawless, Korean-inspired with a modern touch: neatly shaped eyebrows, soft peach eyeshadow, thin eyeliner emphasizing her eyes, and soft gray contact lenses giving a captivating gaze. Her cheeks have a natural peach blush, and her lips are glossy, with a nude base lip color ombre'd into red, creating a soft yet striking contrast. The background is a {argument name="background material and color" default="cream marble wall"}. The photo is taken up-close at eye level. Lighting: cinematic and editorial, dim and dark to make the selfie look realistic, with retro purple contrast enhancing skin glow. The photo is captured with an {argument name="camera model" default="iPhone 17 Pro Max"}. Do not alter her face in any way.
```

## System JSON prompt template for ultra-realistic iPhone-style AI influencers

> Fotogerçekçi, retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
<role>
You are specialized in computational photography, specifically the optical characteristics of the {argument name="phone model" default="iPhone 16/17 Pro Max"} sensor system. You translate human concepts into mathematically precise image generation prompts.
</role>

<cognitive_framework>
<principle name="Context Hunger">
If the user provides a vague concept (for example, "{argument name="example vague concept" default="girl at a cafe"}"), you must explicitly invent the missing environmental, lighting, and styling details to ensure a complete image.
</principle>
<principle name="The iPhone Aesthetic">
All outputs must strictly simulate high-end mobile photography.
- Focal Lengths: {argument name="main focal length" default="24mm"} (Main), {argument name="ultra wide focal length" default="13mm"} (Ultra Wide), or {argument name="telephoto focal length" default="77mm"} (Telephoto).
- Characteristics: "Apple ProRAW" color science, sharp details (Deep Fusion), computational bokeh (Portrait Mode), and Smart HDR dynamic range.
- Avoid: anamorphic lens flares, exaggerated "cinema" bokeh, or vintage film grain (unless specified as a filter).
</principle>
<principle name="Imperfection is Realism">
To achieve "ultra-realism," you must inject terms describing unpolished reality: digital noise (not film grain), skin texture, slightly blown-out highlights (common in mobile), and natural "snapshot" framing.
</principle>
<principle name="JSON Precision">
Your output is a strict JSON object designed for programmatic use.
</principle>
</cognitive_framework>

<visual_analysis_reference>
The "Influencer Aesthetic" is defined by:
- Vibe: "Plandid" (planned candid), effortlessness, aspirational lifestyle.
- Lighting: natural window light, golden hour, or "flash photography" (hard flash) for night shots.
- Framing: vertical (9:16) native mobile aspect ratio, often selfies or point-of-view (POV).
</visual_analysis_reference>

<instructions>
1. Analyze the user's request for subject and mood.
2. Enrich the request using "iPhone Photography" constraints.
3. Format the output strictly as a JSON object with the following schema.
</instructions>

<json_schema>
{
  "meta_data": {
    "style": "iPhone Pro Max Photography",
    "aspect_ratio": "9:16"
  },
  "prompt_components": {
    "subject": "Detailed description of person, styling, pose (mirror selfie, 0.5x angle, etc.)",
    "environment": "Detailed background, location, social setting",
    "lighting": "Smart HDR lighting, natural source, or direct flash",
    "camera_gear": "iPhone 16 Pro Max, Main Camera 24mm f/1.78, or Ultra Wide 13mm",
    "processing": "Apple ProRAW, Deep Fusion, Shot on iPhone",
    "imperfections": "Digital noise, motion blur, authentic skin texture, screen reflection (if mirror)"
  },
  "full_prompt_string": "The combined, comma-separated string optimized for realistic mobile generation",
  "negative_prompt": "Standard negatives + 'professional camera, DSLR, bokeh balls, anamorphic, cinema lighting, studio lighting'"
}
</json_schema>

<task>
Await the user's description of the scene. Generate the JSON output immediately.
</task>
```

## JSON-style Nano Banana Pro prompt for realistic faces

> Minimal mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"intent": "Generate a hyper-idealized, Douyin-style night portrait of the same girl shown in the reference image using direct flash photography, creating a sharp, high-contrast glow.",
"frame": {
"aspect_ratio": "16:9",
"composition": "Extreme close-up selfie framing focused tightly on the eyes and lips, forehead slightly cropped, gaze centered.",
"style_mode": "Flash photography, digital influencer aesthetic, soft-focus realism"
},
"subject": {
"identity": "the same girl from the reference image, with soft youthful features and understated elegance.",
"skin": "with a smooth, luminous finish reflecting the flash, creating a glassy glow with minimal texture.",
"hair": "loose, naturally wavy, catching specular highlights from the flash.",
"wardrobe": "Minimal visibility of a simple, understated top suited for a city night."
},
"environment": {
"location": "Nighttime {argument name="city type in English" default="Indian city"}.",
"weather": "Clear, calm night sky.",
"background": "Dark urban backdrop with blurred bokeh lights from buildings."
},
"lighting": {
"type": "Direct frontal phone flash or high-intensity screen light",
"quality": "Hard, flat lighting that eliminates deep shadows and creates a smooth two-dimensional glow",
"contrast": "Strong separation between the illuminated face and the dark city background",
"catchlight": "Small flash reflection in the center of the pupils"
},
"camera": {
"sensor_format": "Smartphone main camera simulation",
"lens": "24mm wide-angle lens that slightly exaggerates eye size and softens facial proportions",
"aperture_depth_of_field": "f/1.8–f/2.2, sharp on the eyes and lips, instant blur on the background and edges of the hair",
"focus": "Critical focus on the iris texture and eyelashes"
},
"negative": {
"content": "No wet hair, no snow, no rain, no masculine features, no visible pores, no heavy contour makeup, no sunglasses, no hands in frame.",
"style": "No dramatic shadows, no vintage tones, no painterly effects, no warm film look."
}
}
```

## Selfie with movie character using reference face in Nano Banana Pro

> Sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
I’m taking a selfie with {argument name="movie character" default="[movie character]"} on the set of {argument name="movie name" default="[movie name]"}.

Keep the person exactly as shown in the reference image with 100% identical facial features, bone structure, skin tone, facial expression, pose, and appearance. 1:1 aspect ratio, 4K detail.
```

## Historical celebrity selfie scene prompt (Michael Jackson and George W. Bush)

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A casual selfie of {argument name="first person in English" default="Michael Jackson"} with {argument name="second person in English" default="George W. Bush"} in {argument name="time" default="July 2001"}, standing in {argument name="place" default="New Jersey"}. In the background you can see the New York City skyline, including the Twin Towers.
```

## 9-grid Instagram portrait variation prompt for Nano Banana Pro

> Portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Based on {argument name="original woman photo description" default="a single photo of this woman"}, generate a total of {argument name="number of images" default="9"} images to be arranged in a 3×3 grid. {argument name="generation limit instruction" default="Do not generate more than 9 images."}

All images must be bust-up or closer compositions (bust-up, close-up, or portrait framing). Do not generate wide shots, full-body shots, long shots, or compositions where a wide distant view is visible.

{argument name="appearance consistency instruction" default="Keep the woman’s appearance, facial features, hairstyle, and overall vibe consistent across all 9 images."} However, as long as you stay within the bust-up framing, you may change the location, mood of the lighting, angle, and composition.

Output only {argument name="final number of outputs" default="9"} images needed for the 3×3 grid. Do not generate any additional images, previews, or variation drafts of any kind.
```

## JSON selfie-on-bed prompt for Nano Banana Pro

> Minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "type": "young woman",
    "pose": "lying on her back, taking a selfie with her right arm extended upward",
    "expression": "soft smile, relaxed and natural",
    "gaze": "looking toward the camera",
    "skin_details": {
      "complexion": "smooth, warm, sunlit glow",
      "freckles": "visible on nose and cheeks"
    },
    "hair": {
      "color": "{argument name=\"hair color\" default=\"medium brown\"}",
      "length": "long",
      "style": "loose, spread out on the pillow around her head"
    },
    "eyes": {
      "color": "{argument name=\"eye color\" default=\"light blue or green\"}",
      "makeup": "subtle eyeliner"
    }
  },
  "clothing": {
    "top": {
      "type": "ribbed tank top",
      "color": "white",
      "fit": "form-fitting",
      "neckline": "scoop neck"
    },
    "bottoms": {
      "type": "jeans",
      "color": "light blue",
      "visibility": "partially visible"
    },
    "accessories": {
      "earrings": "small studs",
      "necklace": "thin, minimal chain"
    }
  },
  "environment": {
    "location": "bed or soft resting surface",
    "bedding": {
      "pillow": "white",
      "sheets": "white"
    },
    "background": "neutral wall and edge of headboard or furniture barely visible"
  },
  "lighting": {
    "type": "natural sunlight",
    "direction": "coming from upper left of frame",
    "effect": "creates warm highlights and soft shadows on face and torso"
  },
  "composition": {
    "camera_angle": "top-down selfie angle",
    "framing": "close-up of face, upper torso, and part of jeans",
    "focus": "sharp on face and upper body",
    "colors": "warm skin tones, white bedding, brown hair, neutral background"
  },
  "mood": "warm, relaxed, comfortable, natural"
}
```

## Seasonal forest collage character prompt for Nano Banana Pro

> Manzara üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Recreate a character as a collage using photos of {argument name="types of plants" default="plants and foliage"}. The background should be forest photos for each season, arranged from the top right to the bottom left as spring, summer, autumn, and winter. The flower crown should be reinterpreted and replaced using flowers from all four seasons. Do not keep any outline of the character; every part of the character must be expressed entirely using plants and foliage.
```

## Direct flash gamer girl Nano Banana Pro JSON tag prompt

> Retro görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "label": "{argument name="label" default="direct-flash-gamer-girl"}",
  "tags": [
    "{argument name="lighting style" default="direct flash"}",
    "{argument name="room theme" default="retro gamer room"}",
    "{argument name="era photography" default="1990s photography"}",
    "{argument name="image aesthetic" default="film aesthetic"}",
    "{argument name="subject type" default="gamer girl"}",
    "{argument name="background detail" default="collectibles shelf"}",
    "{argument name="camera angle" default="low angle"}",
    "{argument name="pose" default="sitting pose"}"
  ]
}
```

## Two‑step Nano Banana Pro image refinement prompt

> Minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
First: create an image of a person, adding the instruction: "{argument name="skin detail" default="Their skin has pores and details"}."

Second: then apply the following prompt to the generated result: "{argument name="zoom into face" default="Zoom into the face in close-up."}".
```

## Candid bedroom portrait prompt structure

> Sinematik, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A high-resolution candid photograph in a softly lit bedroom, captured in a near-square format. The central subject—a glamorous young woman with lightly tanned skin, subtle freckles, full lips, and a relaxed, natural expression—sits or reclines comfortably on a bed with slightly rumpled white sheets. Soft, warm light spills in from a nearby window, casting gentle shadows and creating a cozy, intimate atmosphere. The background includes minimal but tasteful decor—perhaps a bedside table, a lamp with a warm glow, and a few personal objects that hint at her personality without drawing attention away from her. The overall mood is calm, inviting, and cinematic, with shallow depth of field and a focus on capturing authentic, unposed beauty.
```

## Professional profile photo prompt for Nano Banana Pro

> Sinematik, minimal profil görseli üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A high‑resolution, professional profile photo that preserves the exact facial structure, identity, and key features of the person in the input image. The subject is framed from the chest up with ample headroom. The person looks directly at the camera. Dress them in a luxurious smart‑casual blazer in a subtle charcoal gray color, styled like a professional photo studio shoot. The background is a solid neutral studio color of "{argument name="background color" default="#562226"}". Shoot from a high angle, using bright, well‑ventilated soft diffused studio lighting that gently illuminates the face and creates subtle catchlights in the eyes to convey clarity. Use an 85mm f/1.8 lens with shallow depth of field, with perfect focus on the eyes and beautiful, soft bokeh. Capture sharp detail in the blazer’s fabric texture, each strand of hair, and natural, realistic skin texture. The mood should radiate confidence, professionalism, and approachability. Apply clean, bright cinematic color grading with a subtle warmth and balanced tones to ensure a refined, modern look.
```

## Reference-matched woman portrait JSON prompt

> Portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_description": {
    "identity": {
      "preserve_face": true,
      "reference_match": true,
      "description": "Recreate the woman exactly as shown in the reference image with 100% identical facial features, bone structure."
    }
  }
}
```

## Luxury seaside hotel terrace portrait prompt

> Fotogerçekçi, lüks moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "project": "Ultra-Realistic Portrait",
  "reference_settings": {
    "use_reference_image": true,
    "fidelity_strength": "{argument name="reference fidelity" default="100%"}",
    "instruction": "Face and outfit must match reference photo 100% with absolutely no alterations."
  },
  "subject": {
    "demographics": "{argument name="subject gender" default="Woman"}",
    "focus_features": ["Eyes", "Nose", "Lips"],
    "expression": "Smiling, cute, fresh, dreamy, slightly sensual",
    "pose": "Sitting at a white table, resting chin on both hands, turning slightly",
    "hair": {
      "style": "Straight, large top bun",
      "accessory": "Bow matching the outfit",
      "texture": "Soft layered, loose strands falling naturally across face",
      "movement": "Slightly blown by wind"
    },
    "makeup": {
      "cheeks": "Natural blush on cheeks and nose",
      "lips": "Full lips, soft pink-peach tone"
    }
  },
  "fashion_and_accessories": {
    "outfit": "Exact match to reference image",
    "shoes": "High-heel shoes (matching reference)",
    "bag": "Same bag as reference photo",
    "jewelry": {
      "necklace": "Thin gold with alternating charms (heart, crescent moon, Gucci pendant)",
      "bracelet": "Delicate Gucci bracelet with charms",
      "rings": "Gold rings",
      "watch": "Steel-band Patek Philippe",
      "earrings": "Small gold Gucci earrings"
    }
  },
  "environment": {
    "location": "Luxury hotel terrace / Seaside",
    "time_of_day_options": [
      "Option A: Deep blue evening sky, stars, shooting star, moonlight",
      "Option B: Early sunrise, orange-yellow sky tones"
    ],
    "background_elements": [
      "Warm reflections from luxury hotel",
      "Calm seascape"
    ]
  },
  "props": {
    "table_setting": "White table",
    "items": [
      "Glass with a single white rose",
      "Wine glass",
      "Wine bottle",
      "Plate set with knife and fork",
      "Large T-bone steak in center",
      "Candle glass (adding warm highlight)"
    ]
  },
  "photography_style": {
    "aesthetic": "2000s digital-camera flash style",
    "lighting": "Realistic flash brightness, warm tone, slight shine on skin",
    "mood": "Relaxing, warm, nostalgic, stylish, elegant, slightly sexy",
    "shot_type": "Close-up portrait"
  },
  "technical_parameters": {
    "aspect_ratio": "{argument name="aspect ratio" default="3:4"}",
    "detail_level": "{argument name="detail level" default="8k"}",
    "style_tags": ["photo", "realistic", "flash photography"]
  }
}
```

## Old photo restoration to modern digital portrait

> Minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Transform the input into a modern, high-quality digital portrait with vibrant updated colors, smooth and realistic skin textures, and natural lighting. Upgrade the outfit and background into a clean, modern aesthetic while preserving the authenticity of the original pose and expression.

Convert it into a modern high-quality digital portrait with vivid colors, delicate and realistic skin textures, and natural lighting. The clothing and background should be upgraded to a simple, modern style while preserving the authenticity of the pose and expression from the original photo.
```

## Low-quality disposable camera high school snapshot prompt

> Retro görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A single everyday photo taken with a low-quality disposable camera. A poorly shot picture taken by a Japanese high school student.
```

## Gym selfie portrait of woman on yoga mat for Nano Banana Pro

> Minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "description": "A young woman sitting on yoga mat, wiping sweat with towel, holding water bottle",
    "mirror_rules": "N/A - direct gym photo",
    "age": "late 20s",
    "expression": "accomplished, slight breathlessness, confident smile",
    "hair": {
      "color": "blonde with highlights",
      "style": "high ponytail, slightly messy with flyaways from workout"
    },
    "clothing": {
      "top": {
        "type": "sports bra",
        "color": "dusty rose pink",
        "details": "medium support, strappy back detail, moisture visible from sweat"
      },
      "bottom": {
        "type": "high-waisted leggings",
        "color": "black with mesh panels",
        "details": "ankle length, mesh cutouts on calves, compression fit"
      }
    },
    "face": {
      "preserve_original": true,
      "makeup": "minimal, dewy from workout, natural flushed cheeks, no eye makeup"
    }
  },
  "accessories": {
    "headwear": {
      "type": "none",
      "details": "hair pulled back in scrunchie"
    },
    "jewelry": {
      "earrings": "small diamond studs",
      "necklace": "none",
      "wrist": "rose gold fitness tracker, black hair ties on wrist",
      "rings": "none"
    },
    "device": {
      "type": "smartphone",
      "details": "propped against dumbbell, recording workout selfie"
    },
    "prop": {
      "type": "insulated water bottle",
      "details": "matte black 32oz bottle with motivational quote sticker, condensation visible"
    }
  },
  "photography": {
    "camera_style": "gym selfie aesthetic, smartphone front camera",
    "angle": "slightly above eye level, sitting position",
    "shot_type": "full upper body and crossed legs, centered composition",
    "aspect_ratio": "9:16 vertical",
    "texture": "crisp detail, bright gym lighting, energetic feel"
  },
  "background": {
    "setting": "modern gym studio",
    "wall_color": "light gray with motivational mural",
    "elements": [
      "purple yoga mat laid out",
      "set of dumbbells scattered nearby",
      "white towel draped over shoulder",
      "blurred gym equipment in background",
      "large mirror reflecting back wall",
      "resistance bands coiled on floor"
    ],
    "atmosphere": "energetic, accomplished, health-focused",
    "lighting": "bright overhead LED gym lighting, even coverage"
  }
}
```

## ID photo generation prompt for Nano Banana Pro

> Minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Crop the head of the person in the image and turn it into a 2-inch ID photo with the following requirements:
1. {argument name="background color" default="blue background"}
2. Professional formal attire
3. Face directly towards the camera
4. Slight smile
```

## F1 VIP fan hyper-realistic selfie edit

> Fotogerçekçi, lüks logo üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a hyper-realistic 8K image that keeps my real face, features, skin color, eyes, and hair exactly as in the reference image.
I am the {argument name="subject_gender_role_en" default="woman"} in the photo; preserve my confident, charming, and elegant expression, with a slight smile and relaxed posture.
Place me at an outdoor automotive event, in a grandstand or VIP box, with a wide view of the track and the crowd in the background. The weather is sunny, with an intense blue sky and natural sunlight that enhances the colors and creates a vibrant racing atmosphere.
Use a medium-shot framing, capturing the upper body and the busy background with a slight depth-of-field blur.
The outfit is sporty yet sophisticated, consisting of:
 * A {argument name="cap_brand_en" default="Red Ferrari"} cap, with the yellow prancing horse (cavallino rampante) logo on the front and the number "{argument name="driver_number_en" default="16"}" in white on the brim;
 * A strapless structured denim top, tight with visible stitching, emphasizing the neckline and silhouette;
 * {argument name="sunglasses_brand_en" default="Miu Miu"} sunglasses with brown gradient lenses and a rectangular metallic frame, partially covering the eyes;
 * A double necklace – one with large golden links and another with delicate diamonds close to the neck;
 * Geometric gold earrings;
 * A silver bracelet on the right wrist;
 * A discreet red bag hanging on the shoulder, partially visible beside the arm.
Hair is natural and loose.
Makeup is impeccable and glamorous, with glowy skin, defined eyes, pink lipstick, and warm blush.
Nails are long and decorated with nail art in shades of pink and red with white details, visible while holding the glass.
The pose should convey attitude and sophistication:
 * Right hand holding the brim of the cap, adjusting it slightly;
 * Left hand holding a glass of {argument name="drink_type_en" default="white wine"}, with the arm relaxed;
 * Body slightly leaned, face turned toward the camera.
Lighting is natural and intense, with subtle sun reflections on the face and hair.
Use a vibrant color palette – shades of red, denim blue, gold, and caramel, contrasted with the sunny background.
The overall atmosphere is modern, luxurious, and relaxed, expressing the lifestyle of someone who enjoys exclusive experiences, with elegance and a strong presence at a premium automotive event.
Quality: 8K hyper-realistic photo, sharp focus on the face and outfit, background slightly blurred with a colorful crowd and the track in the sun.
Important:
 * Keep my face, hair, and skin color original.
 * Preserve the authentic p
```

## LINE-style Q-version emoji portrait grid

> Elle çizilmiş portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a set of colorful, hand-drawn LINE-style half-body chibi emoji portraits based on the {argument name="reference_characters_en" default="characters shown in the reference image"}, making sure their head accessories are depicted accurately.

Arrange the portraits in a {argument name="grid_layout_en" default="4x6"} grid, featuring common chat phrases or relevant humorous memes.
Use handwritten-style fonts for the text.
The output must be original—do not directly copy the reference image.
The final image should be 4K resolution with a {argument name="aspect_ratio_en" default="16:9"} aspect ratio.
```

## Cinematic black-and-white portrait of a woman

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A realistic black-and-white photograph of a young woman with long, dark hair, closely matching the facial features, structure, and expression of the subject in the reference image. She has an imposing or serious expression, looking directly at the camera. She is wearing a black suit jacket, a white collared shirt, and a slim black tie. The lighting is dramatic, and the background is dark and uniform. Style: photorealistic, cinematic, high-contrast, black and white. Subject: female, in a black suit, white shirt, slim black tie, with an imposing, serious, confident expression, framed as a medium close-up, straight-on.
```

## Swiss alpine winter portrait of a young man

> Fotogerçekçi, sinematik manzara üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Hyper-realistic, ultra-detailed DSLR cinematic portrait of a young man (same facial identity as the reference) standing outdoors in a {argument name="location_en" default="Swiss alpine village"} during a winter evening. Soft snow is falling, with visible frosty breath in the cold air. His hands are in his pockets in a relaxed, natural stance.

He wears a thick wool winter coat, a textured knit sweater, and a loosely wrapped scarf, with a subtle accessory: a silver ring.

Background: snow-covered rooftops, blurred alpine mountains, glowing chalet windows, and warm village street lamps, with soft golden bokeh reflecting on the fresh snow.

Lighting: cinematic winter lighting that blends cool blue shadows with warm golden highlights. Rosy winter skin tones, sharp facial detail, shallow depth of field, and a touch of atmospheric haze.

Camera: 8K, full-frame DSLR, 85mm lens, f/1.8, ISO 100, 1/200s.
Style: editorial travel portrait, hyper-realism, high dynamic range, crisp focus, and natural skin texture.
```

## High-contrast rim-lit black and white conceptual side-profile portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A powerful, high-contrast black-and-white side-profile portrait of a person (attached photo), with distinctly human yet timeless features — emerging from complete darkness. The composition is minimalist and sculptural, where form, light, and shadow define the subject rather than color or texture.
The subject’s profile is clean and strong, contemplative expression, as if caught between thought and transcendence. They wear a dark, form-fitting turtleneck sweater that merges seamlessly into the black void, erasing all detail except for the glowing edge of their silhouette.

A single, narrow rim light, bright, sharp, and directional, carves out the shape of the head, neck, and shoulder, tracing the contours with precision. The light originates from directly behind and slightly above the subject, creating a thin, luminous halo along the jawline and the curve of the skull, while the rest dissolves into pure black.

The background is absolute darkness, a void without texture or depth, emphasizing the luminous boundary between shadow and light. There are no midtones, only the purest black and a deliberate contrast with the brightest whites that heightens drama and abstraction.

Mood & Aesthetic: Minimalist, conceptual, and deeply introspective. The image evokes solitude, contemplation, and timeless elegance. It feels cinematic yet intimate, an exploration of identity through light.

Technical details:

Shot with a telephoto lens for compressed perspective.

Aperture wide open (f/1.8-2.8) to create a glowing contour with shallow depth of field.

Optical realism: rendered with ultra-realistic 8K cinematic quality, incorporating true lens physics, depth of field, and subtle film grain, front face good lighting. (Use my picture for reference)

Inspired by @ShreyaYadav___
```

## Edit moon position and change painting style

> Elle çizilmiş illüstrasyon üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Move the moon that is painted in the background of the woman to the left side from the viewer’s perspective. Change the painting style to transparent watercolor.
```

## Cute handwritten notes over a photo

> Görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Write as many cute handwritten notes and highlights as possible on the photo!
```

## Ultra-realistic Roronoa Zoro portrait

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic Roronoa Zoro portrait.
```

## Levi’s shopping mirror selfie edit

> Portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Make it look like I am shopping at Levi’s holding bags, taking a picture in the store mirror, covering my face with my phone. Make the phone a {argument name="phone_model_en" default="Samsung S25 Plus"}.
```

## Age progression of a woman into an old lady

> Görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Generate an image of the adult woman from the first picture as an old lady. Make it a close-up. Make her clothing look like that of an older woman, and set the background as a house.
```

## Goth makeover variant of existing photo

> Görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Redo this as though this person was into goth music at the time.
```

## Swimsuit to bikini pose-edit prompt (reply)

> Görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Change the one-piece swimsuit to a bikini and add high heels while keeping the same style and background.
```

## Lego-style self portrait

> Minimal profil görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Turn me into a {argument name="subject_en" default="Lego"} character.
```

## Kimetsu no Yaiba-style anime transformation with brush calligraphy

> Illüstrasyon üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Transform the user-uploaded image (photo or illustration) into a dramatic Japanese-inspired anime artwork. Always extract and use only the subject (the person) from the source image, and completely ignore or remove the original background. If the source is an illustration, repaint it in a refined anime style with beautiful Japanese-inspired three-dimensional shading, adding depth, gradients, and luminous highlights for a polished finish. If the source is a photo, reinterpret it as a realistic anime illustration, preserving natural skin, hair, and material textures, but applying painterly anime shading with strong depth. In all cases, redraw the subject in a powerful, dynamic, and energetic pose with a vivid and lively expression.

Foreground calligraphy: Add large Japanese brush-style calligraphy at the very front, layered above both the character and the background. Use exactly the Japanese characters provided by the user (kanji, katakana, or hiragana). Render the characters faithfully, without altering, breaking, or stylizing them incorrectly. Do not translate or replace them. The calligraphy should be bold black ink with a glowing, blurred white outline, surrounded by sumi ink splashes and scattered brush marks to convey motion and impact. The text content will be “{argument name="foreground_text1_en" default="Flame Hashira"}” and “{argument name="foreground_text2_en" default="Kyojuro Rengoku"}”.

Attribute effect: Add the specified attribute effect ({argument name="attribute_en" default="fire"}) flowing dynamically with the character’s movement, drawn in a modern Ukiyo-e-inspired anime style with dramatic shapes, glowing highlights, particles, and energy trails.

Background: Do not include the original photo background under any circumstances. Instead, fill the entire background with stylized Japanese patterns (Seigaiha waves, Asanoha hemp leaf, Kikkō tortoise shell, stylized clouds, etc.) combined with glowing elemental effects. Use deep navy, gold, and contrasting tones to create a luxurious Japanese atmosphere. Keep the background dark and patterned so the character, calligraphy, and attribute effects remain the primary focus.

Overall: Always preserve the subject’s essential traits (hairstyle, outfit, facial features, body type) while enhancing impact, movement, and Japanese aesthetics through dynamic shading, expressive brush calligraphy, dramatic attribute effects, and traditional motifs.
```

## Depth of field shift to focus on man’s face

> Portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Focus on man's face, blur his hand
```

## Selfie with random Brazilian celebrities

> Ürün maketi (mockup) üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a selfie with {argument name="number_of_celebrities" default="5"} random Brazilian celebrities.
```

## Selfie of multiple random female celebrities

> Minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
a selfie of 10 random female celebrities
```

## Surreal upside-down face portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Portrait photography of a man standing with his face upside down, the mouth at the top, the nose inverted, and the eyes at the bottom.
```

## South Asian Man in Field

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic cinematic portrait of a stylish young South Asian man sitting cross-legged in a grassy field, wearing a black and Grey plaid button-up shirt with rolled sleeves, faded gray jeans, black smartwatch, trendy black sunglasses, messy voluminous black hair, light beard and mustache, confident smile, one hand touching the neck, looking slightly side, dramatic orange and black color grading, selective color effect with vibrant orange flowers and foliage while the rest remains monochrome.
```

## Raw Style Portrait Prompt for Millie Bobby Brown Look-alike

> Minimal mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"image_prompt": {
"subject": "Millie Bobby Brown look-alike",
"description": "An ultra-sharp, raw-style photograph with deep focus, showing the subject in full detail. The pose and expression from the original are retained.",
"key_features": [
"Perfect, pin-sharp focus across the entire scene, from the subject to the background city.",
"High-definition skin texture, pores, and fine facial hair are clearly visible.",
"The fabric wrap is visible on the chest without embroidery.",
"The framed pop-art print of the two women on the left wall is in sharp focus, showing fine detail.",
"The entire Parisian Haussmann building facade visible through the French windows is sharply defined, including balcony railings, window frames, and roof details.",
"Textures of the bed linens, duvet, wainscoting, and building materials are rendered with extreme clarity.",
"Natural daylighting.",
"Minimal post-processing, authentic camera-direct appearance with subtle fine noise."
],
"composition": "Medium-close-up on the bed, identical to the reference image framing, with the subject looking at the camera. The crop at the bottom has been corrected."
}
}
```

## Street Barber Documentary Photo

> Fotogerçekçi görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Photorealistic 4K street photograph of a young barber cutting a customer's hair at a tiny roadside barbershop, both men naturally interacting and smiling, old mirror reflecting the street outside, scissors and combs scattered realistically across the counter, dusty walls, electric fan, passing motorcycles softly blurred outside, realistic skin pores, facial hair and hair strands, imperfect lighting, authentic South Asian street atmosphere, candid documentary photography, 35mm lens, no posing, no artificial smoothness.
```

## Candid Street Photo Prompt

> Fotogerçekçi görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A candid street photo of a young South Asian man in a cozy brown knitted sweater, drinking coffee from a paper cup on a bustling city sidewalk. Natural morning lighting, soft depth of field with a blurred urban background, captured on a 35mm lens, hyper-realistic skin texture, subtle stray hairs, raw photograph, no filter, 8k resolution
```

## Mother Waiting Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Extremely realistic emotional photograph of an elderly mother sitting beside an open window in a modest home during late afternoon, quietly waiting for her son to return, hands resting naturally in her lap, realistic wrinkles and skin texture, slightly faded traditional clothing, sunlight illuminating one side of her face, old photographs and everyday household objects visible behind her, curtains gently moving in the breeze, subtle melancholy, genuine human expression, documentary photography, 85mm lens, natural light, realistic imperfections, deeply human and understated.
```

## Sunday Morning Family Photo

> Fotogerçekçi, minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic candid photograph of a middle-class South Asian family having a peaceful Sunday morning in their small countryside home, father watering plants in the garden, mother preparing breakfast near an open window, two children playing barefoot nearby, simple clothing and authentic expressions, slightly imperfect old walls, hanging laundry, sunlight filtering through trees, realistic household objects everywhere, natural skin textures, genuine family interaction, warm morning atmosphere, documentary photography, 35mm lens, realistic depth, no staged posing, no artificial perfection.
```

## Noir Pinup Photoshoot

> Fotogerçekçi görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Imagine a black and white photoshoot from the 1950s. Brunette, Pinup model style, photorealistic. Theme is a film noir detective’s office.
```

## Snowy Winter Forest Portrait

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A young woman standing outdoors in a snowy winter landscape near a calm lake surrounded by dense snow-covered forest, light snowfall visible in the air, cold muted atmosphere. Pose: standing with arms crossed tightly over the chest, shoulders slightly raised from the cold, body facing camera, head slightly tilted down, direct confident gaze into the lens, posture closed and grounded. Hairstyle: long voluminous loose curls with defined texture, hair fully visible under a thick winter hat, natural flow and weight, no change to hairstyle structure. Outfit: black textured winter hat with dense fluffy surface, fitted dark ribbed turtleneck sweater with long sleeves, high-waisted loose-fit denim cargo-style jeans with middle seams and pockets, winter-appropriate thickness, no changes to clothing design, proportions or layering. Accessories: minimal, no jewelry emphasis. Environment details: frozen lake edge, snow on tree branches, overcast sky, soft falling snowflakes captured mid-air, natural winter depth. Lighting: soft diffused daylight, cold neutral tones, no harsh shadows, realistic winter contrast. Color grading: muted cool palette, natural skin tones preserved, slight cinematic softness, subtle film grain. Camera: eye-level framing, shallow depth of field but background still readable, sharp focus on face and outfit. Style: cinematic winter fashion portrait, realistic editorial photography, calm, cold, composed mood, zero stylization drift, zero pose reinterpretation, zero outfit replacement.
```

## Dark Academia Male Portrait

> Lüks portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A focused {argument name="subject" default="young adult male"} sits leaning forward at a counter, wearing a {argument name="clothing" default="fitted dark grey-black knit long-sleeve shirt and thick-rimmed black glasses"}. His short-to-medium brown hair reaches the top of his ears in a classic slicked-back style, featuring a natural straight to slightly wavy texture with visible separation, subtle flyaways, and uneven sections on the sides, styled with moderate hold product for a glossy wet look, brushed straight back with moderate volume at the front quiff. His expression is genuinely serious and calm as he looks down at an open dark grey aluminum laptop. His slightly hunched, relaxed shoulders lead down to his elbows resting on the counter, supporting his weight as his hands are loosely clasped together in front of his lower face and chin, fingers organically interlaced in deep thought. He is positioned centrally at a dark grey stone counter characterized by subtle white veining, where a smartphone in a dark case rests flat beside the laptop. The deep, luxurious background reveals a {argument name="setting" default="high-end hotel lobby or lounge"}, featuring a pristine high-gloss black grand piano with its lid down and a large leafy green Ficus plant near a window in the left midground, balanced by plush, curved mustard yellow armchairs and a glowing conical table lamp on the right. The walls are a smooth, matte warm beige and taupe, accented by tactile vertical ribbed dark brown wood paneling and softly illuminated framed artwork over dark brown solid wood plank floors. The moody, sophisticated atmosphere is bathed in warm golden artificial lighting from multiple overhead recessed spotlights and practical background lamps, creating a cinematic medium contrast. Soft, gradual gray shadows pool under his chin, beneath his arms, and below the laptop on the counter, while preserved highlights gently illuminate his forehead, cheekbones, glasses frames, and glossy hair. The analogous warm palette blends dark charcoal, dark brown, taupe, and striking mustard yellow accents. Captured with digital photography styling a realistic dark academia aesthetic using a 50mm lens at f/2.8, 1/60s, and ISO 800 with a warm white balance, the image boasts a medium depth of field that keeps the subject in sharp focus while rendering the rich background in a soft, smooth bokeh with subtle digital noise in the shadows, finished with warm color grading, lifted blacks, and a soft vignette, all beautifully framed in a 4:5 aspect ratio.
```

## Confident Urban Street Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A stunning woman with {argument name="hair style" default="long, wavy black hair"} and {argument name="eye color" default="piercing blue"} eyes sits confidently on a {argument name="setting" default="wet urban street"}.
```

## Neon Bokeh Romantic Night Portrait

> Fütüristik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the uploaded image as the only facial reference and preserve 100% facial identity, hairstyle, beard, skin tone, and natural skin texture.
A medium shot of a {argument name="subjects" default="young South Asian couple"} posing together, leaning against a silver metal railing at night. On the left, a man with a neatly groomed beard, dark hair, and a lean build wears a dark maroon button-up shirt and a wristwatch, resting his chin on his right hand. Beside him, a young woman with a slender build, soft facial features, and long dark hair, wears a beige floral-patterned traditional tunic, also resting her chin on her hands. Both are looking directly at the viewer with gentle smiles. They are centered in the frame against a blurred background of vibrant green foliage illuminated by {argument name="background lighting" default="colorful, bokeh-style neon lights in pink, blue, and yellow hues"}. The {argument name="lighting atmosphere" default="lighting is soft and warm"}, highlighting their faces and creating a romantic, inviting atmosphere. The composition is well-balanced, utilizing the railing as a foreground element to create depth. The style is that of a professional portrait, characterized by clear focus on the subjects and a creamy, out-of-focus background.
```

## Double Exposure Motorcycle Sunset Portrait

> Fotogerçekçi, sinematik 3B sahne üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A realistic photorealistic 3D image of a stylish young man posing next to a modern Yamaha MT-15 motorcycle on a wet reflective ground. He is wearing a blue and orange red mints green white sweater with the name "{argument name="name" default="Humraaz"}" written on it and white pants. In the dramatic sunset sky background, there is a large, translucent double-exposure portrait of a beautiful woman wearing a blue veil, surrounded by soft wisps of smoke. Cinematic lighting, highly detailed.
```

## Full Body Red Fitted Dress Portrait

> Minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create image A 20-year-old fit Russian woman stands confidently in a stylish red fitted v-cut dress. Urban background, soft natural lighting, over-the-knee-high boots, minimalistic jewelry, and leather handbag complete her look. standing at full height, full-body shot, head-to-toe view, entire outfit visible
```

## iPhone Street Style Autumn Hoodie Portrait

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a **photorealistic autumn street-style photograph** captured from an extremely low, ground-level angle, looking upward toward the girl. She is standing naturally and facing the camera, with her face turned directly toward the lens. Her expression is calm and effortless, with a subtle genuine smile.

She is wearing an **oversized black hoodie**, with the loose hood naturally pulled over her head. Her long hair flows freely from beneath the hood, falling naturally across her chest and shoulders on both sides. Individual strands move slightly in a gentle autumn breeze.

In one hand, she holds a **Starbucks coffee cup extremely close to her face at eye level**, creating a natural foreground element. The cup partially covers one eye, while her other eye remains completely visible and looks directly into the camera. Keep the cup realistic in size, texture, lighting, and perspective.

Position her slightly toward the **right third of the composition**, leaving more visual space toward the left side. Her body should feel naturally close to the camera, with parts of her figure subtly extending beyond the frame for an immersive, candid composition.

Directly overhead is a **large mature tree covered in rich autumn foliage**, featuring deep red, orange, amber, and warm golden leaves. Sunlight streams naturally through gaps in the branches and leaves, creating bright scattered highlights and realistic patches of light across the scene. Small fragments of clear blue sky are visible between the branches.

Maintain **maximum depth of field**. The girl, face, visible eye, coffee cup, hoodie, hood, individual strands of hair, tree trunk, branches, leaves, and distant surroundings must all remain **perfectly sharp and highly detailed from foreground to infinity**. Absolutely **no bokeh, no portrait blur, no artificial background separation, and no shallow depth of field**.

The perspective should feel like a real photograph captured on an **iPhone 16 Pro**, using a 24mm equivalent wide-angle lens, f/8, 1/500s, ISO 50. Vertical 9:16 composition, extreme low-angle perspective, realistic wide-angle geometry, natural skin texture, accurate proportions, realistic sunlight, authentic shadows, subtle lens characteristics, natural color science, crisp micro-details, and documentary-style realism.

**Style:** authentic iPhone photography, cinematic but completely natural, realistic autumn atmosphere, high dynamic range, true-to-life colors, physically accurate lighting, realistic textures, no artificial beauty retouching, no plastic skin, no CGI appearance, no illustration, no painting, **absolute photorealism**.
```

## London Skyline Background Edit

> Görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Replace the far background city lights into {argument name="city" default="London's skyline"} with several iconic {argument name="details" default="landmarks"}
```

## Absurd Sans Serif Meme

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
absurd meme with the caption: {argument name="caption" default="sans serif"}
```

## Futuristic Car in Rainy City

> Sinematik, fütüristik manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a futuristic {argument name="vehicle" default="car"} at night near {argument name="landmark" default="Tel Aviv’s Azrieli Towers"} on a {argument name="weather" default="rainy evening"}, with soft light from the surrounding signs. Describe the atmosphere precisely.
```

## Mystical Woman by Cascading Waterfall

> Fotogerçekçi, sinematik manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic portrait of a beautiful {argument name="ethnicity" default="Asian"} woman standing waist-deep in a clear misty river in front of a majestic cascading waterfall surrounded by dense green forest foliage. She wears an {argument name="attire" default="elegant white satin traditional robe"} with cross-over lapels and a tied sash paired with intricate gold arm cuffs and an ornate gold necklace Her long straight black hair sways dramatically as if caught in a mystical breeze. With an intense, focused expression, she holds her hands open as dynamic splashes and swirls of water magically curve upward around her, {argument name="lighting" default="hyper-realistic volumetric sunbeams"} piercing through the forest canopy, highly detailed water droplets dramatic lighting, fantasy realism, 8k resolution.
```

## Golden Hour Slatted Shadow Portrait

> Sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A close-up cinematic portrait of a young woman with natural beauty, {argument name="eye color" default="hazel"} eyes, and slightly parted lips. Her wavy, {argument name="hair color" default="warm-brown"} hair is loosely tied back with soft, messy tendrils framing her face. She is wearing a {argument name="clothing" default="fitted black ribbed knit mock-neck top"}. Golden hour sunlight streams through a window, casting sharp, dramatic slatted shadow patterns diagonally across her face and neck. High-contrast chiaroscuro lighting, warm golden tones with deep shadows, visible skin texture and subtle freckles, shot on 85mm f/1.4 lens, shallow depth of field, soft muted background, moody editorial photography.
```

## Old-Money Tuxedo Night Portrait

> Retro mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A young adult male stands in a deliberately posed 45-degree turn with relaxed shoulders, wearing a {argument name="outfit" default="classic deep black tuxedo, bow tie, stark white shirt collar, and crisp pocket square"}. His handsome, serious face is captured in profile as he looks away, featuring a closed, neutral mouth and relaxed eyebrows. His thick, medium-short hair is brushed behind the ears and swept straight back in a low-volume, classic taper without a prominent side part, heavily styled with a firm-hold pomade that creates a wet, glossy finish with visible comb lines, while a slight separation of strands near the crown and back reveals natural texture despite the heavy product. His left hand is thrust casually into his left trouser pocket, exposing a pristine white French cuff and a metallic dress watch on his wrist. He stands on deep shadow-black grass beside a {argument name="vehicle" default="pristine vintage automobile"} dominating the bottom right foreground, featuring glossy stark white paint, a chrome circular side mirror, and a visible interior dashboard in warm brown tones. The deep spatial background reveals faint, blurred white vehicle headlights glowing distantly on the mid-left horizon line, while the weathered, intricate branch networks of bare deciduous trees are silhouetted against the top right sky. A {argument name="lighting" default="harsh, highly directional artificial flash"} from the front-left pierces the sophisticated, mysterious atmosphere of wealthy detachment, casting deep black, harsh-edged shadows heavily across the right side of his face, neck, and dark suit. Bright specular highlights catch sharply on his illuminated cheekbone, jawline, nose bridge, and the curved chrome and paint of the vintage car. The cool, high-contrast, desaturated complementary color palette is dominated by deep foreground blacks that contrast fiercely with the stark white car and accents, set against a twilight blue sky that fades into a warm amber horizon gradient reflecting softly on his skin tones. Shot straight-on as a realistic, tack-sharp digital photograph blending paparazzi-style night portraits with an elegant old-money cinematic aesthetic, utilizing a 35mm to 50mm lens at f/4 to f/5.6, a 1/100s shutter speed, and ISO 800 to 1600. The deep depth of field editorial image is finalized with crushed blacks, lifted midtone contrast, a slightly cooled ambient white balance, and atmospheric digital film noise, framed in a 3:4 vertical aspect ratio.
```

## Playful Hijab Portrait

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
ar 9:16 4K

A close-up portrait of a {argument name="subject" default="young East Asian woman with fair, smooth porcelain skin"}, wearing a {argument name="clothing" default="soft light periwinkle-blue hijab"} that fully covers her hair and drapes elegantly around her neck and shoulders. The fabric has a fine, slightly textured weave with natural soft folds and gentle wrinkles catching the light.

She rests her right hand gently against the side of her face, fingers lightly curled near her cheek and jawline in a relaxed, feminine pose. Her expression is {argument name="expression" default="playful and cute: one eye softly squinted in a gentle wink"}, the other eye partially open with a warm, inviting gaze directed at the camera. Soft rosy pink blush colors her cheeks, long dark eyelashes (natural-looking with slight length), neatly shaped dark eyebrows, a small refined nose, and full lips tinted in a soft natural pink with a subtle glossy finish.

Soft, diffused natural lighting from the front and slightly above creates a gentle glow on her skin, with smooth highlights and minimal shadows. The background is a plain, out-of-focus light beige or warm off-white wall. Shallow depth of field keeps the focus sharply on her face and the fabric near her hand. High-resolution, photorealistic style with natural skin texture, realistic fabric detail, and a soft, intimate, slightly dreamy atmosphere. Vertical portrait orientation, tightly framed from the upper chest to the top of the hijab.

Shorter / refined version (for tools with length limits):
Close-up portrait of a young fair-skinned East Asian woman in a soft light blue hijab, hand gently touching her cheek, playful half-wink expression, soft pink blush and lips, long lashes, natural soft lighting, plain light background, photorealistic, intimate and cute mood.
Additional prompt variations you can mix in:

“soft cinematic lighting, delicate skin texture, ultra-detailed fabric weave”

“gentle smile with slightly pursed lips, coquettish expression”
“hijab in muted dusty periwinkle blue, matte soft cotton texture”
“high detail face, realistic pores and skin glow, 8k”
```

## Korean Fashion Sunset Collage

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra realistic lifestyle fashion collage of a beautiful young woman in a {argument name="setting" default="wide open green park during golden hour sunset"}, soft warm sunlight, cinematic natural lighting, aesthetic Korean fashion vibe, wearing a {argument name="outfit" default="deep burgundy oversized button-up shirt, light blue wide-leg denim jeans, white sneakers"}, carrying a dark brown leather shoulder bag. Multi-frame collage layout with 5 candid moments.
```

## Feather Silk Dress Mirror Selfie

> Lüks moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "core_content": {
    "main_description": "A stylish young woman takes a mirror selfie in a luxury bathroom, wearing an {argument name="outfit" default="elegant white silk slip dress with feather trim"}, accessorized with gold bangles and a blue handbag."
  },
  "subjects": [
    {
      "identity": "Young woman",
      "spatial_position": {
        "placement": "Center frame",
        "scale": "Medium shot"
      },
      "pose": {
        "body_narrative": "Standing upright with a slight tilt, one hand raised to her chin in a thoughtful, poised gesture, while the other hand holds a smartphone to capture the reflection.",
        "hand_gesture": "Right hand touching chin, left hand holding a smartphone."
      },
      "eye_gaze": {
        "direction": "Towards the mirror reflection",
        "contact": "Direct",
        "focus": "Sharp"
      },
      "appearance": {
        "features": "Long brown hair styled in a high ponytail, youthful complexion, natural makeup",
        "expression": "Serene and neutral"
      },
      "attire": {
        "outer_layer": "White satin slip dress with cowl neckline and dramatic feather-trimmed high side-slit",
        "accessories": "Multiple layered gold bangles on right wrist, gold ring on left hand, vibrant cobalt blue leather shoulder bag"
      }
    }
  ],
  "environment": {
    "scene": "Luxury hotel bathroom",
    "background_elements": [
      {
        "object": "Walls",
        "description": "{argument name="wall material" default="Deep forest green marble with white veining"}"
      },
      {
        "object": "Mirror",
        "description": "Large circular mirror with a thin gold frame"
      }
    ]
  },
  "aesthetics": {
    "art_style": "High-fashion social media photography, clean aesthetic",
    "lighting": {
      "key_light": "Warm indoor vanity lighting, soft and diffuse",
      "shadows": "Minimal, soft shadows"
    },
    "camera": {
      "angle": "Eye level",
      "lens": "Smartphone portrait lens"
    }
  }
}
```

## Artistic White Lace Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create an image side-profile artistic portrait of a woman looking away from the camera toward a light source. ​Her {argument name="hair style" default="voluminous dark brown hair is styled in loose waves"}, catching soft highlights. ​She wears a delicate {argument name="clothing" default="off-the-shoulder white lace garment"} featuring intricate floral lace patterns. ​Sheer, puffy organza sleeves add a soft, romantic, and dreamy quality to her attire. ​Soft daylight filters through sheer curtains in the background, creating a gentle backlight.
```

## Mixed Media Urban Collage Portrait

> Retro, elle çizilmiş mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A close-up mixed-media portrait of a beautiful young woman with {argument name="hair color" default="vibrant electric-blue"} hair and {argument name="eye color" default="striking cyan"} eyes. She has scattered freckles across her nose and cheeks, glowing luminous skin, and glossy cherry-red lips slightly parted. The artwork is created in a contemporary urban collage and decollage street-art style, featuring layered textures over a {argument name="surface" default="distressed wooden surface"}. Overlaid elements include torn vintage ephemera, faded postage stamps, delicate architectural line sketches, scribbled pencil marks, white paint splatters, and subtle cracked textures across the canvas. High contrast, intricate details, textured mixed-media painting, fine art gallery quality.
```

## Cinematic Coastal Cliff Sunset Portrait

> Fotogerçekçi, sinematik manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Captured from behind, a {argument name="subject" default="lone, young barefoot woman"} stands poised on the rugged, wind-worn edge of a towering coastal cliff at dramatic sunset. She wears a {argument name="clothing" default="long, flowing white cotton dress"} that billows and dances around her, swept upward by the ocean breeze. Her long, dark-brown hair is also caught in the strong wind, blowing away from her face, complementing the fluid movement of her dress. Her arms are fully stretched wide, encompassing the endless, vast ocean horizon that glows with a stunning golden and orange hue. A rich tapestry of large, textured, and colorful dramatic clouds fill the upper sky, painted in deep purples, fiery oranges, and golden lights, reflecting the sun's last warm rays. The steep, rocky cliffs and wind-swept golden grasses in the foreground add to the sense of isolation and raw nature. The composition is a breathtaking cinematic landscape portrait, evoking a profound, deep, emotional feeling of freedom, liberation, and spiritual healing. The image has natural golden lighting, photorealistic details, and a dreamy atmosphere. The texture of the rugged rocks, the soft lens bloom on the light, and the realistic movement in the fabric and hair are intricate.
```

## Cinematic Summer Tropical Pier Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic cinematic summer portrait of a young woman sitting on a rustic wooden pier above crystal-clear tropical water, vertical 4:5 composition. She wears a {argument name="clothing" default="flowing turquoise-blue cotton maxi dress"} with thin straps, a fitted waist, subtle textured fabric, and a long flowing skirt. She wears shell jewelry, small earrings, and delicate bracelets. Her short brown hair is naturally windblown by the ocean breeze. She smiles brightly toward the camera.
```

## Cinematic Sunset Fashion Portrait

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Cinematic fashion portrait of a young woman standing beneath an intensely dramatic {argument name="sky color" default="sunset"} sky, centered slightly below the middle of the frame, facing the camera with a subtle three-quarter turn, direct gaze, clearly recognizable face, distinctive natural features, softly asymmetrical face, strong brows, slightly hooded almond-shaped eyes, defined nose, full natural lips, realistic skin texture, {argument name="hair length" default="dark shoulder-length"} hair moving freely in the wind, simple oversized black T-shirt. Vast sky dominating the composition, luminous pale yellow at the top shifting into warm amber, burnt orange, saturated coral and deep crimson near the horizon, soft smoky cloud bands suspended across the red sky, atmospheric haze, glowing backlight outlining her hair and shoulders, low-key exposure on the clothing, warm reflected light shaping the face, moody editorial photography, authentic 35mm film scan, visible grain, subtle halation, rich contrast, cinematic color depth, no text, no logos, no watermark --chaos 4 --ar 4:5 --raw --profile f7ca75c --stylize 140 --weird 5 --hd --preview
```

## Night City Rooftop Cinematic Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "image_generation_prompt": {
    "subject": "{argument name="subject" default="A young woman sitting alone on a city rooftop ledge, wearing an oversized hoodie, holding a cup of coffee, looking out at the skyline."}",
    "setting": "{argument name="setting" default="A city rooftop at 2 AM, late-night vibe, endless stretching city lights and glowing skyline in the background."}",
    "atmosphere": "{argument name="atmosphere" default="Moody blue-hour atmosphere, urban loneliness, emotional storytelling, authentic late-night mood."}",
    "lighting": "Subtle neon reflections, dreamy city bokeh, realistic night photography lighting.",
    "details": "Wind softly moving her hair, ultra-detailed skin texture.",
    "quality_modifiers": "Masterpiece, photorealistic, cinematic night portrait."
  }
}
```

## Dapper Dog Restaurant Photograph

> Retro görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A {argument name="style" default="black and white, vintage and grainy"} medium shot photograph shows a {argument name="subject" default="great dane"} wearing {argument name="outfit" default="sunglasses, a pinstripe suit, a white shirt, and a tie"}. The great dane is seated at a table in a restaurant, holding a cigar in its right hand and a glass of red wine in its left. In front of the great dane is a plate of spaghetti and a bottle of wine. The restaurant appears to be a trattoria, with a sign that reads "Tortellini Twisters" in the background. The overall mood of the image is sophisticated and humorous.
```

## Hyper-Realistic Desert Portrait with Planet

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic portrait, HD, 8K, high definition, rich in professional photographic detail and hyper-realistic textures. Photograph of a {argument name="subject" default="slender, fair-skinned woman"} with long dark hair, wearing an {argument name="clothing" default="oversized white sweater"}, barefoot, beautiful feet, 5 toes for feet, walk in a desert with a big planet in the sky
```

## Mediterranean Riviera Editorial

> Retro görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A ruggedly handsome man sits casually facing the camera in the bottom left quadrant, exuding a candid, serious expression with neutral lips and his gaze directed off-camera to the left, hidden behind {argument name="accessory" default="classic dark wayfarer sunglasses"}. He is dressed in a crisp yet slightly rumpled {argument name="clothing" default="white linen suit"}, unbuttoned at the top to reveal warm, realistic skin textures, completely barefoot with his legs crossed. His relaxed shoulders center his weight as his left hand drapes naturally over his raised right shin, while his right forearm rests comfortably on the armrest of his chair, fingers pointing down and softly obscured by shadow. He is seated in a weathered, thick branch-like rustic wooden armchair featuring a white cushion and distinct orange rope bindings on the front leg, resting on large pale grey square floor tiles separated by prominent dark grout lines. To his immediate left in the midground, a vintage, tall dark metal lantern with intricate cutouts sits atop a square table edged in dark iron with a black, white, and grey geometric tile top, all positioned in front of a dominant, thriving wall of rough, matte stone entirely consumed by deeply shadowed, lush dark green ivy. To the right, the deep spatial depth opens up to a pristine background where steep rocky cliffs drop into a sweeping expanse of calm, dark blue-grey ocean waters beneath a slightly hazy sky, creating an asymmetrical balance that draws the eye from the man across to the sea. The scene is illuminated by a single, highly directional source of bright, warm golden natural sunlight from the front, producing a dramatic, dappled effect that casts harsh, defined, deep black shadows under the subject and against the foliage. This hard light generates a split-complementary color palette of moderate saturation, striking high contrast by intentionally blowing out the highlights on the linen white clothing without any ambient fill, perfectly capturing a sophisticated, luxurious {argument name="setting" default="Mediterranean summer afternoon"} of effortless Old Money elegance. Captured as a tack-sharp, grain-free digital editorial photograph shot straight on with a 50mm lens at f/8, 1/500s, and ISO 100 to maintain a deep depth of field from the structured foreground to the distant cliffs, the image channels Classic Hollywood Riviera styling, enhanced in post-processing with deepened shadows, pushed highlights on the linen to emphasize the harsh sunlight, and a slight desaturation of the oceanic blues for a vintage cinematic feel, all perfectly framed in a 2:3 aspect ratio.
```

## Voluminous Ginger Hair Forest Portrait

> Fotogerçekçi manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A photorealistic vertical portrait photograph of a young woman with {argument name="skin type" default="pale, freckled skin"} and long, voluminous, wavy {argument name="hair color" default="ginger"} hair standing in a sunlit forest clearing. She is positioned with her back mostly to the viewer, turning her head to look over her left shoulder with a soft, direct gaze. Her eyes are a {argument name="eye color" default="pale blue-grey"}, her face is dusted with freckles across the nose and cheeks, and her lips are slightly parted in a neutral, ethereal expression.
```

## Golden Hour Lifestyle Fashion Collage

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra realistic lifestyle fashion collage of a {argument name="subject" default="beautiful young woman"} in a {argument name="setting" default="wide open green park"} during golden hour sunset, soft warm sunlight, cinematic natural lighting, aesthetic Korean fashion vibe, wearing a {argument name="outfit" default="deep burgundy oversized button-up shirt"}, light blue wide-leg denim jeans, white sneakers, carrying a dark brown leather shoulder bag. Multi-frame collage layout with 5 candid moments.
```

## Elegant Traditional Garden Portrait

> Sinematik, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A young woman with fair skin and soft natural features, {argument name="hair style" default="warm blonde hair styled in a loose ponytail"} with a few strands framing her face, calm expression with a gentle confident gaze toward the camera, relaxed outdoor pose with one hand near her face and the other resting gracefully across her outfit. She wears an elegant {argument name="outfit color" default="peach-orange"} traditional-inspired outfit with a flowing draped fabric, delicate layered bangles on both wrists, and a subtle minimalist necklace. The fabric has a soft lightweight texture that moves naturally, creating a graceful and refined appearance. The scene takes place in a {argument name="setting" default="peaceful garden courtyard"} with lush green plants, stone steps, and natural outdoor surroundings. Bright daytime sunlight filters through trees, creating soft shadows and warm highlights on the subject and background. The atmosphere feels serene, fresh, and elegant with a natural lifestyle photography aesthetic. Shot on an 85mm lens, shallow depth of field, soft natural sunlight, realistic skin texture, cinematic color grading, high detail, professional portrait photography, balanced composition, natural colors, crisp focus on the subject, gentle background blur, realistic photography style.
```

## Misty Mountain Hiking Portrait

> Fotogerçekçi, sinematik manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
photorealistic vertical outdoor hiking portrait of a {argument name="subject" default="young woman"} walking along a narrow mountain trail surrounded by tall lush green grass in a {argument name="weather" default="misty, fog-covered landscape"}. She wears a navy-blue baseball cap with the word “ADVENTURE” embroidered on the front, a {argument name="outfit" default="simple dusty-pink short-sleeve T-shirt, black hiking shorts"}, a black jacket tied casually around her waist, and a black backpack. She gently holds the brim of her cap with one hand while walking toward the camera, eyes softly closed and smiling naturally. Another hiker follows slightly behind her, partially obscured by the mist and tall grass. The background fades into dense white fog, creating a peaceful mountain atmosphere. Soft overcast natural lighting, muted earthy tones, realistic skin texture, detailed grass and fabric, subtle atmospheric haze, shallow depth of field, candid travel photography, natural proportions, cinematic composition, highly photorealistic, vertical.
```

## Nostalgic Rainy Window Portrait

> Fotogerçekçi, retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Photorealistic close-up of a {argument name="subject" default="young woman"} sitting beside a rainy window, her {argument name="hair style" default="long dark hair"} falling over one side of her face and partially hiding one eye. Wearing an {argument name="clothing" default="oversized cream sweater"}, chin resting on her folded arms, dreamy emotional gaze. Rainy reflections, warm indoor light, soft focus, VHS grain, nostalgic 2000s camcorder aesthetic, vertical 9:16.
```

## Nostalgic Cafe Film Portrait

> Sinematik, retro mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create {argument name="mood" default="moody golden hour"} cafe portrait of a young woman sitting inside a {argument name="location" default="dim restaurant booth"}, turning her head over her shoulder toward the camera, soft serious expression, face partially lit by warm window glow, dark interior shadows, blurred figures in the background, glowing red and amber bokeh lights, large bright window behind her, cinematic low-light atmosphere, nostalgic 35mm film photography, heavy grain, soft focus, muted green shadows, warm orange highlights, intimate candid framing, emotional quiet moment, slightly underexposed vintage editorial look --ar {argument name="aspect ratio" default="4:5"} --raw --profile f7ca75c --stylize 120 --weird 3 --hd --preview
```

## European Cafe Street Photography

> Fotogerçekçi moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
An ultra realistic candid street photo during golden hour. A beautiful young blonde woman with long messy wavy hair walks outside a {argument name="location" default="European café"} while casually eating gelato from a small paper cup using a tiny spoon. She wears a {argument name="outfit" default="fitted baby blue ribbed camisole, low-rise grey plaid trousers"}, a black studded leather belt, and a black quilted shoulder bag. She looks away naturally instead of looking at the camera, with a calm, thoughtful expression. The background shows outdoor café seating, people chatting, city sidewalks, warm summer sunshine, and a relaxed European atmosphere. Nothing feels posed. Captured like paparazzi photography with a medium telephoto lens. Warm golden sunlight, soft shadows, realistic skin texture, subtle film grain, {argument name="style" default="early 2000s Y2K fashion, McBling, indie sleaze aesthetic"}, authentic street photography, editorial realism, masterpiece, ultra detailed, 8K.
```

## Monochrome Silver Halide Photography

> Görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
The image is {argument name="style" default="high-contrast monochrome photography"} with {argument name="grain type" default="silver halide grain"} and {argument name="saturation" default="zero color saturation"}.
```

## Mushroom Still Life Composition

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A still life composition features {argument name="subject" default="a cluster of blue-capped mushrooms"} with delicate white gills, interspersed with {argument name="flowers" default="dried wildflowers and small purple blossoms"}. The mushrooms are the central focus, with their caps fanned out and stems reaching upwards. The background is a dark, textured gradient, creating a moody and atmospheric effect. A broken piece of a mushroom cap lies on the surface in the lower left corner.
```

## Male Winter Portrait at Ice Rink

> Sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A realistic, high-contrast portrait of a {argument name="subject" default="handsome young adult male"} positioned in the center and has messy hair with subtle natural imperfections. He projects a genuine, happy demeanor with a warm closed smile and relaxed eyes, standing naturally with relaxed shoulders and his hands tucked warmly inside the pockets of his {argument name="coat color" default="heavy, deep navy-black overcoat"} layered over a crisp white t-shirt. Directly in front of him in the foreground is a weathered, ornate dark metal railing featuring intricate circular patterns, its surface slightly frosted and wet with small patches of piled snow resting just behind it. Beyond the railing, the deep midground opens up to a massive, {argument name="location" default="brightly illuminated outdoor ice skating rink"}, its icy blue-white surface heavily scratched and scored from skate blades, highly reflective and dotted with small distant figures skating. The deep background reveals a historic, aged stone castle building on the left, featuring rough stone masonry, large arched windows, and a pointed tower roof entirely washed in warm amber-gold architectural uplighting. A tall stadium light pole with fiercely bright, blown-out white LED floodlights stands on the left edge, alongside bare, weathered deciduous trees against a dark cloudy night sky reflecting the ambient cloudy night gray city glow. The crisp, energetic winter atmosphere is sculpted by hard, highly directional mixed artificial lighting, producing harsh, deep black shadows under the chin, within the heavy folds of the coat, and cast behind the subject, while specular highlights gently illuminate his forehead and nose. Shot straight on with a 35mm lens at f/2.8 and 1/125s to keep the subject tack sharp against a slightly soft but readable background, the image is rendered with a split-complementary color palette, enhanced contrast, and an ISO of 1600 that introduces organic digital noise and grain into the sky, framed in a 3:4 aspect ratio.
```

## Urban Café Candid Snapshot

> Minimal yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A straight on medium shot captures a woman lounging indoors at what appears to be a café or restaurant setting. She is wearing large headphones over her hair and sports dark sunglasses. Her attire includes an oversized {argument name="sweatshirt color" default="navy blue"} sweatshirt and she pairs it with white socks and {argument name="sneaker style" default="green and white Nike"} sneakers. She casually sips an iced beverage, suggesting a relaxed mood. The background features a combination of a {argument name="wall tile color" default="deep green"} tiled lower wall and a neutral, beige upper wall, adding a geometric texture to the scene. The lighting is soft and diffused, likely from natural ambient sources, casting minimal shadows and creating a neutral color palette dominated by green, navy, and beige tones. Likely captured on a smartphone, the image is a candid, urban snapshot with a casual, laid back atmosphere.
```

## Minimalist Indoor Lifestyle Portrait

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic full-body portrait of {argument name="subject" default="him"} sitting casually on the floor indoors, leaning back against a {argument name="background" default="plain off-white minimalist wall"} with sunlight casting a soft, natural shadow. No headphones. Outfit: {argument name="outfit" default="a plain white t-shirt, paired with slightly loose light blue ripped jeans and classic black-and-white Converse sneakers"}. Accessories include a simple leather bracelet and a casual watch. A notebook and pencil are placed casually beside him on the floor. His pose is relaxed and effortless, with a clean, modern, minimalist aesthetic and natural lifestyle photography style
```

## Miniature Inuit Fishing on Cracked Phone

> Fotogerçekçi 3B sahne üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "{argument name="subject" default="Miniature, cracked smartphone with two inuits fishing"}, ultra realistic, ultra detailed",
  "parameters": {
    "version": 7,
    "stylize": 50
  }
}
```

## Stylish Man with Weimaraner in Modern Elevator

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic full-body fashion portrait of a {argument name="subject" default="stylish bearded man"} wearing {argument name="jacket" default="black bomber jacket"}, {argument name="shirt" default="beige turtleneck"}, black trousers, sunglasses and white sneakers, standing confidently with a Weimaraner dog inside a luxurious modern elevator, warm cinematic lighting, reflective metallic walls, DSLR photography, 8K, sharp details.
```

## Bohemian Crochet Fashion Studio Portrait

> Fotogerçekçi moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create HD quality editorial fashion photos using uploaded reference images.Don't change your face.Keep the young woman's face 100% identical to the reference create an intimate, warm close-up portrait, her makeup (soft blush on cheeks and nose, pink lips, soft, natural eyebrows) must be identical to the reference photo.Her long black hair was cut in layers, with loose strands blowing in the wind. Close-up portrait of a young woman with flowing brown hair wearing a {argument name="clothing" default="crocheted oversized cardigan"} (cream, teal, and magenta yellow) and a {argument name="accessory" default="brightly colored crochet headscarf"} (cream, teal, lime green, and magenta yellow) tied under her chin.She wore large, square, oversized sunglasses with thick tortoiseshell frames and amber lenses.The sun shines brightly from behind, illuminating her and creating a bright, high-contrast, dreamy summer aesthetic.Her dark bangs peeked out from under her scarf and her makeup was subtle.A {argument name="animal" default="fluffy orange cat"} relaxes on her shoulder.The background is a clear bright blue sky.Realistic, colorful, fashionable photography style., pet, photorealistic, high detail
```

## South Asian Couple Skardu Travel Photo

> Fotogerçekçi, sinematik manzara üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use my pic face Create an ultra-realistic full-body photograph of a {argument name="subject" default="young South Asian Couple"} (use uploaded reference face exactly) enjoying a trip in {argument name="location" default="Skardu, Pakistan"}. The image should look like a genuine tourist photo captured on a modern smartphone. Style: Natural smartphone camera photography, ultra realistic, real travel photo, NOT cinematic, NOT studio lighting, NOT AI-looking. SKARDU ADVENTURE (ULTRA REALISTIC, FULL BODY, 8K
 CAMERA
• Full body visible
• Natural handheld phone camera shot
• Slight perspective imperfections
• Realistic depth of field
• Ultra HD 8K quality
• Sharp facial details
• Natural color tones
• No filters
MALE
• Use uploaded reference face exactly
• Same hairstyle as reference image
• Light beard
• Wearing traditional white Korton Kurta pajama with stylish shoes.
FEMALE
• Elegant traditional purple traditional Pakistani dress.
• Natural makeup
• Realistic facial features
• Warm smile
• Natural hair movement
 POSE
• Man Catch the selfie Own girlfriend.
• Genuine candid travel moment
• Happy and relaxed expressions
• Authentic tourist vibes
LOCATION — SKARDU
• Beautiful Skardu Valley
• Massive mountains in background
• Crystal-clear lake nearby
• Green meadows
• Rocky landscapes
• Famous Skardu scenery
• Natural tourism atmosphere
CROWD
• Tourists visible in background
• Families taking photos
• People enjoying the scenery
• Natural crowd blur
 LIGHTING
• Bright natural daylight
• Soft mountain sunlight
• Realistic shadows
• Natural exposure
• No flash
 REALISM
• Hyper-realistic photography
• Natural skin pores
• Real fabric textures
• Authentic human anatomy
• Smartphone camera quality
• Travel photography realism
• Ultra HD 8K
NEGATIVE PROMPT:
cartoon, anime, CGI, 3D render, fake skin, AI face, plastic face, blurry image, low quality, watermark, text, logo, bad anatomy, extra fingers, unrealistic eyes, HDR glow, cinematic grading, studio lighting, oversaturated colors ratio size 9 16.
```

## 1980s Retro Salon Portrait

> Retro, lüks portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": "{argument name="subject description" default="Woman in her late twenties, auburn-chestnut hair cut short and swept up and back off the face with sculpted 1980s volume at the crown and sides, finished with a black grosgrain bow pinned at the back. Fair skin with a warm peachy tone. Period makeup: soft bronze-mauve shadow blended to the brow bone, strong arched brows, sculpted blusher high on the cheekbone, glossy brick-red lip. Slender build, elegant long neck. Chin lifted, gaze angled off toward the light, composed and aloof."}",
  "outfit": {
    "dress": "{argument name="dress style" default="Cobalt-blue metallic brocade cocktail dress with an allover shifting lamé sheen, strongly padded shoulders tapering to a narrow waist, gathered blouson bodice with a rounded yoke, long full sleeves, slim knee-length skirt"}",
    "hosiery": "Sheer smoke-grey tights with a soft period sheen",
    "shoes": "Black suede pointed-toe pumps with a slim stiletto heel and a small bow at the vamp",
    "jewellery": "Stacked wide gold bangles on both wrists, gold drop earrings",
    "props": "A slim crystal champagne flute held loosely in one hand"
  },
  "pose": "Seated in a clear lucite armchair, torso upright and turned three-quarters to the camera. Legs crossed high at the knee and extended long toward the floor, toes pointed, feet angled together. One arm resting along the chair arm holding the champagne flute out at chest height; the other hand relaxed on the thigh. Shoulders squared back, spine straight, head tilted slightly away.",
  "setting": "{argument name="interior style" default="A pale 1980s salon interior. A transparent lucite armchair with a woven cream cushion, a matching lucite side table, and a low cream boucle sofa behind. Soft beige-grey walls, a sheer curtained window casting a broad wash of light, warm oak flooring beneath."} Sparse and elegant — nothing else in frame. Absolutely no text, lettering or signage anywhere.",
  "camera": "35mm crisp direct flash. Hard frontal light throwing a defined shadow behind the chair, fierce specular blowout across the metallic brocade so the dress ignites, hot glints on the gold bangles and champagne glass. Warm saturated period grade, cobalt pushed rich against neutral cream. Lifted blacks, medium-high contrast, fine 35mm grain, gentle halation, corner vignette.",
  "framing": "Vertical 2:3. ANGLE — low view from the subject's left, lens near seat height and tilted up. The crossed legs foreshorten toward the camera and read longer, the lucite chair reads at a three-quarter turn with its transparent frame catching flash, and more wall and ceiling opens above her head."
}
```

## Spring Street Portrait with Tulips

> Fotogerçekçi mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A woman stands on a city street, her body slightly turned three-quarters, shoulders relaxed, holding a {argument name="flowers" default="large bouquet of tulips"} to her chest with one hand and touching her neck with the other. Her head is slightly tilted, looking directly at the camera. A medium-shot portrait, chest-length, eye-level perspective. The composition is centered with a soft background blur and a distinct separation of the figure from the background. Skin with an even undertone, cool-pink eyeshadow, softly blended eyeshadow, a thin line of eyeliner along the lash line, elongated lashes, a subtle shimmer in the center of the lid, and lips with a creamy pink lipstick with a moderate sheen. Hair is styled in loose, voluminous waves with pronounced texture and a natural, diffused shine, strands softly framing the face and falling onto the shoulders. She is wearing a {argument name="accessory" default="rich raspberry-colored wool beret"}, a straight-cut coat of thick, matte blue fabric with defined shoulders, a knitted raspberry turtleneck, and a long, soft scarf matching the beret. She holds a dense bouquet of fresh tulips with closed, deep pink buds and dense green leaves, the stems gathered at the bottom and tied. The background is a {argument name="location" default="Russian city street"} with light-colored stone architecture. The building facades are blurred by the depth of field, the wall surface has a distinct texture, and the background fades gently into bokeh without sharp details. It's spring, wet asphalt with a small amount of nearly melted snow. The lighting is natural street lighting, diffused daylight from the front and side. Shot with an 85mm portrait lens. Shallow depth of field with sharp focus on the eyes and face.
```

## Candid Couple Gaming Lifestyle

> Fotogerçekçi görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{\
  "generation_request": {\
    "meta_data": {\
      "tool": "Nano Banana 2",\
      "task_type": "{argument name=\"task type\" default=\"gaming_couple_home_realistic\"}",\
      "version": "LOVE_Game"\
    },\
    "input": {\
      "mode": "text_to_image",\
      "notes": "Ultra photoreal candid moment of a couple playing video games together at home. Must feel natural, playful, relaxed, and real, like a spontaneous everyday moment, not staged. The screen must not be visible or readable."\
    },\
    "scene": {\
      "location": "home living room",\
      "time": "evening or night",\
      "environment": "{argument name=\"scene\" default=\"cozy living room, couch, soft ambient lighting, subtle TV glow from outside the frame, casual lived-in home setting\"}"\
    },\
    "subjects": {\
      "interaction": "{argument name=\"interaction\" default=\"they sit side by side on the couch holding game controllers, focused on the game, while the man briefly turns his head to look at her with a soft natural smile instead of the screen\"}",\
      "emotion": "playfulness, comfort, connection, relaxed happiness, soft romantic undertone",\
      "micro_expression": "natural focused expressions with subtle smiles, relaxed eyes, genuine small reactions, no exaggerated emotion",\
      "body_language": "relaxed sitting posture, slight forward lean, natural shoulder closeness, casual and unposed positioning"\
    },\
    "styling": {\
      "woman": "soft pink crop pajama top with matching shorts, comfortable homewear, same established hair color, slightly messy natural hair, no ring",\
      "man": "casual homewear such as a black or neutral t-shirt with sweatpants, relaxed fit, natural fabric folds"\
    },\
    "camera": {\
      "lens": "35mm lifestyle lens",\
      "aperture": "f2",\
      "depth_of_field": "moderate shallow with environment still visible",\
      "framing": "medium shot capturing both subjects seated on the couch, screen not visible",\
      "angle": "slightly side angle or over-the-shoulder perspective from inside the room",\
      "motion": "still with subtle candid realism"\
    },\
    "lighting": {\
      "type": "soft ambient room light with subtle off-frame TV glow",\
      "behavior": "gentle mixed lighting, soft cool tones from unseen screen and warm ambient light balancing the scene",\
      "skin_response": "natural skin texture, subtle light interaction, no smoothing, no plastic finish"\
    },\
    "color": {\
      "palette": "soft warm neutrals with subtle cool highlights, natural skin tones, muted home colors",\
      "grade": "cinematic but natural, balanced contrast, no HDR, no oversaturation"\
    },\
    "realism": {\
      "faces": "fully natural human faces, no AI smoothness, realistic expressions",\
      "skin": "visible pores, slight imperfections, believable mixed lighting",\
      "hair": "natural strands, slightly messy realistic home texture",\
      "hands": "correct controller grip, accurate finger placement, no distortion, no extra fingers, no fused fingers",\
      "controllers": "realistic generic controllers, no branding, natural scale",\
      "screen": "not vi
```

## PSG Jersey Teddy Jacket Selfie

> Fotogerçekçi logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A close-up selfie-style portrait of {argument name="subject" default="a young East Asian woman looking downward with a soft, slightly shy expression, her gaze directed toward the lower left"}. She has straight black hair styled in a high, messy half-up bun with loose strands and wispy bangs framing her face. She wears clear transparent-framed round glasses and matte red lipstick. Her long, natural-looking light beige acrylic nails are visible as one hand gently touches the side of her head near the hair.\
\
She is wearing {argument name="clothing" default="a navy blue Paris Saint-Germain (PSG) football jersey featuring the white Jordan Jumpman logo on the right chest, the circular Paris Saint-Germain crest on the left chest, and large white “QATAR AIRWAYS” lettering across the front"}. The jersey has thin white horizontal stripes on the sleeves. Over the jersey she wears {argument name="jacket" default="an open, fluffy light beige teddy-bear style jacket or cardigan with soft textured fabric"}.\
\
Soft natural sunlight illuminates the right side of her face and hair, creating gentle highlights and slight lens flare. Background shows a red-and-white checkered flag hanging in the upper right and blurred indoor elements including partial signage. Shallow depth of field, realistic skin texture, detailed fabric folds, high-resolution photorealistic style, warm golden-hour lighting, casual fan aesthetic.
```

## Tropical Beach Swimsuit Lifestyle

> Fotogerçekçi görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{\
  "image_prompt": {\
    "subject": {\
      "appearance": "Young woman with a sharp bob haircut with bangs (dark brown hair), prominent freckles, and natural skin texture",\
      "reference_celebrity": "{argument name=\"celebrity\" default=\"Jenna Ortega\"}",\
      "expression": "Soft, pleasant smile, looking directly at the camera",\
      "physical_details": "Clear eye details, realistic skin texture"\
    },\
    "attire": {\
      "garment": "{argument name=\"attire\" default=\"Teal-green one-piece swimsuit with midriff cutout\"}",\
      "styling": "Single central cutout panel"\
    },\
    "pose": {\
      "stance": "Standing facing forward, eye-level angle",\
      "arms": {\
        "left_arm": "Bent, hand resting naturally on the hip",\
        "right_arm": "Bent, hand raised touching the top/side of the hair"\
      }\
    },\
    "props": {\
      "item": "Large, round, woven straw sun hat",\
      "placement": "Hanging lower down on the side of her right thigh, with straps visible"\
    },\
    "setting": {\
      "environment": "{argument name=\"setting\" default=\"Tropical resort beach\"}",\
      "background_details": [\
        "Calm, clear turquoise lagoon water",\
        "Dense grove of palm trees (blurred depth of field)",\
        "Soft white sand"\
      ]\
    },\
    "photography_style": {\
      "aesthetic": "Candid, lifestyle travel photography, high-fidelity photorealism, natural beauty focus",\
      "lighting": "Natural golden hour (late afternoon) sunlight, soft and diffused but bright, coming from the upper-left, creating gentle light on the face",\
      "composition": "Full-body shot from head to ankles, centered subject, sharp focus on Jenna Ortega, softly blurred background (creamy bokeh) with depth",\
      "film_grain": "Subtle, natural film grain for a candid, editorial look"\
    }\
  }\
}
```

## Elegant Dresses Lounge Companionship

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a photorealistic evening portrait of {argument name="subjects" default="two young women seated closely together on a dark upholstered lounge sofa in an elegant, intimate restaurant or private lounge"}. The woman on the left has long dark brown hair styled in soft loose waves with face-framing bangs, fair skin, softly defined features, natural makeup, and a composed expression while looking directly toward the camera. The woman on the right has long dark brown hair styled in loose waves with a softly gathered half-up appearance, warm fair skin, refined facial features, subtle makeup, and a gentle confident expression while also looking toward the camera. Both women have relaxed, natural postures and sit comfortably side by side, with their shoulders slightly angled toward one another and their body language conveying friendly companionship.\
\
The woman on the left wears {argument name="clothing left" default="an elegant deep-blue evening dress with delicate silver embroidered detailing across the bodice, subtle shimmering accents throughout the fabric"}, thin straps, and a flowing floor-length skirt. The woman on the right wears {argument name="clothing right" default="a sophisticated bronze-gold evening gown with intricate decorative detailing on the bodice, fine metallic shimmer, a fitted waist"}, and a long flowing skirt with natural folds. Add delicate minimalist necklaces and understated jewelry that complement each outfit without distracting from the overall composition.\
\
The setting features warm vertical wood-panel walls, a large round decorative mirror behind the subjects, dark upholstered seating, and subtle contemporary lounge décor. Warm table lighting and soft ambient illumination create a sophisticated evening atmosphere, with gentle highlights reflecting from the metallic details of the dresses and natural shadows adding depth to the room. Keep the background slightly softened while retaining enough environmental detail to establish the upscale lounge setting.\
\
Shot on an 85mm portrait lens, eye-level perspective, medium-full composition, shallow depth of field, realistic perspective, soft warm ambient lighting, cinematic color grading, balanced exposure, high dynamic range, detailed skin texture, realistic hair strands, accurate hands and facial features, natural fabric folds, refined metallic reflections, subtle photographic grain, professional editorial lifestyle photography, photorealistic detail, natural proportions.
```

## Candid Airport Lounge Portrait

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
ar 9:16 High

A realistic photograph of a young East Asian woman in her {argument name="age range" default="late teens or early 20s"} sitting in a modern airport or public waiting lounge. She has fair, smooth skin, soft natural makeup, slightly parted lips, and a gentle, calm, slightly contemplative expression while looking off to the left of the camera. Her black hair is cut in a {argument name="hair style" default="neat, slightly messy bob"} with soft bangs framing her face and a small black hair bow or clip at the back.

She is wearing a {argument name="top clothing" default="white cable-knit cardigan"} with three-quarter sleeves, two visible white buttons, and a soft textured knit pattern, worn open over a white camisole or tank top with a small black bow detail at the center of the neckline. Around her neck is a delicate silver necklace with a small pendant. On her left wrist she wears a thin silver chain bracelet. She is seated with her legs drawn up, arms crossed loosely over her knees, holding a soft light-pink or pale rose-colored pillow or plush object with a black ribbon or stripe. She wears matching light pink wide-leg pants or a soft skirt that drapes over her legs.

The setting is a bright, modern indoor public space with large blue and black modern lounge chairs, a round metallic planter with greenery in the background, polished concrete or stone flooring, and soft natural daylight mixed with indoor lighting. The composition is a medium close-up, slightly low angle, shallow depth of field with the background softly blurred. Photorealistic style, natural skin texture, high detail on clothing fabric and jewelry, soft natural lighting, candid and elegant atmosphere.
```

## Classic Man at Azadi Square

> Retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
a man stand {argument name="location" default="azadi square tehran"} in {argument name="era" default="70s"} like a {argument name="style" default="real and classic man"}
```

## Koshien Baseball Broadcast Screen

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A screenshot of the 2026 Koshien high school baseball finals broadcast. High school baseball broadcast, with the score "{argument name="score" default="Bottom of the 8th, Chiben Wakayama 2-2 Kenadai Takasaki"}" in the corner, 2 outs, bases loaded, and inning display. Features the transparent overlays characteristic of NHK terrestrial broadcasting.
```

## Summer Cottage Cherry Garden Portrait

> Sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic, grainy close-up portrait of a {argument name="subject" default="young woman"}.

She is standing in a summer cottage garden near trees laden with large red cherries. She holds a large enamel basin filled with red cherries against her hip with one hand, while the other hand holds a cherry-laden branch up to her mouth.

She is wearing a {argument name="outfit" default="form-fitting pink romper with thin straps and a small cherry print"}.

She wears a {argument name="accessory" default="white lace headscarf"}.

Her very long, wavy hair is worn loose, with a few strands framing her face.

Daylight with a moody, shadowed quality.
```

## Stylized Donkey Face Painting

> Illüstrasyon üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A close-up, stylized painting of a donkey's face. The donkey is {argument name="donkey color" default="gray"} with large, expressive ears and dark, round eyes. Its snout is prominent and painted in shades of white and gray, with black nostrils. A single, stylized {argument name="flower color" default="white"} flower with a dark red center is held delicately in the donkey's mouth, its stem extending to the lower right. The overall style is whimsical and painterly, with visible brushstrokes.
```

## Solar Eclipse Romantic Silhouette

> Manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A {argument name="subject" default="romantic digital art scene featuring a couple in silhouette"} standing close together on a {argument name="location" default="rocky shoreline at twilight"}, their bodies forming a heart-shaped space between them that glows with a bright, warm light. In the background, a small, cozy cabin with glowing windows sits atop a rocky island surrounded by dark, reflective water. Above the island, a massive, golden {argument name="event" default="solar eclipse"} dominates the night sky, casting a radiant, ethereal ring of light and shimmering golden reflections across the calm lake surface. The atmosphere is serene, magical, and deeply intimate, with a rich color palette of deep blues, warm ambers, and glowing golden highlights.
```

## Mountain Viewpoint Athletic Portrait

> Sinematik, minimal manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A {argument name="subject" default="young woman with fair skin and naturally soft facial features"}, standing on a scenic elevated viewing platform surrounded by lush mountain vegetation. She has long blonde hair styled in a relaxed low ponytail, with a few loose strands framing her face and gently catching the outdoor breeze. She is turned slightly away from the camera while looking back over her shoulder with a warm, natural smile and a calm, cheerful expression. Her posture is relaxed, with both forearms resting comfortably on the wooden railing as she takes in the panoramic landscape. She is wearing a {argument name="outfit" default="coordinated deep burgundy athletic-style outfit"} consisting of a fitted sleeveless crop top with thin shoulder straps and subtle horizontal strap detailing across the upper back, paired with matching high-waisted fitted shorts. The clothing has a clean sporty aesthetic with realistic stretch fabric, fine texture, natural folds, and subtle highlights. Keep accessories minimal and understated, with no distracting jewelry. The setting is a wooden observation deck overlooking a vast mountainous landscape covered with layers of green forest and drifting clouds. A dark metal and wooden safety railing runs across the viewpoint, while a green informational sign is positioned toward the left side of the frame. Tall trees surround the platform, creating a natural foreground and framing the distant scenery. The background contains {argument name="landscape details" default="layered blue-green mountains partially covered by soft white clouds"} beneath an expansive overcast sky. Use soft diffused outdoor daylight filtered through the cloud cover, producing gentle shadows, realistic skin tones, subtle highlights in the blonde hair, and atmospheric depth across the distant mountains. Capture the peaceful feeling of a cool mountain morning with natural colors and a slightly cinematic atmosphere. Shot on an 85mm lens, natural outdoor daylight, moderate shallow depth of field, realistic perspective, cinematic color grading, soft atmospheric contrast, high dynamic range, detailed skin and hair texture, realistic fabric texture, natural environmental detail, photorealistic travel photography, documentary-inspired composition, balanced framing, crisp subject detail, softly layered mountain background, high resolution, authentic candid lifestyle photography aesthetic.
```

## Whimsical Ferret Ball Pit Illustration

> Illüstrasyon üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
a {argument name="animal" default="curious ferret"} joyfully playing in a {argument name="object" default="colorful plastic ballpit"}, dozens of bright red, blue, yellow, and green balls surrounding it, low angle view, soft even lighting, sharp focus on the ferret’s face, vibrant playful atmosphere, high detail, {argument name="style" default="whimsical illustration style"}
```

## Summer Beach Pizza Party

> Fotogerçekçi, lüks görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Hyper-realistic close-up vertical amateur iPhone shot of a {argument name="subject" default="thin young woman around 21 years old"} happily eating a big slice of pizza napoletana and smiling. Athletic and toned physique, natural proportions. She is with a few girlfriends chilling in the shade of a fancy beach restaurant close to the sea, laughing together. Elegant summer style, midday light, subtle blurry background. {argument name="swimsuit" default="Modern yellow summer swimsuit"}. {argument name="eye color" default="Cyan eyes"}.
```

## Rural Countryside Lifestyle Portrait

> Minimal mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A {argument name="subject" default="young woman with fair skin and natural facial features"}, standing outdoors beside a {argument name="fence type" default="rustic wooden fence"} in a peaceful rural setting. She has blonde hair pulled back into a neat ponytail, with a few natural strands around her face. She looks calmly toward the camera with a composed, slightly thoughtful expression. Her body is positioned at a gentle three-quarter angle, with both forearms resting comfortably on the horizontal fence rail and one leg slightly bent, creating a relaxed candid outdoor portrait. She is wearing a {argument name="dress" default="soft pink sleeveless dress"} with thin shoulder straps and a practical side opening that allows comfortable movement. The dress has subtle vertical ribbing, natural fabric folds, and a simple casual design. Keep the styling minimal and authentic, with no prominent jewelry or distracting accessories. The background features an expansive green grassy field, a weathered wooden fence with diagonal supports and wire strands, mature leafy trees, and several simple rural buildings painted in muted turquoise and pale colors. The architecture should feel authentic and slightly weathered, creating a quiet countryside atmosphere. The sky is filled with soft layered clouds, producing bright but diffused daylight across the scene. Use gentle natural illumination, soft shadows, realistic atmospheric depth, and subtle reflections of daylight on the subject and surrounding landscape. Shot on an 85mm lens, natural outdoor daylight, moderate shallow depth of field, realistic perspective, cinematic color grading, soft atmospheric contrast, detailed skin texture, realistic hair strands, highly detailed ribbed fabric, natural environmental textures, photorealistic lifestyle photography, documentary-inspired composition, balanced framing, authentic rural atmosphere, high resolution, crisp subject detail with a softly separated background.
```

## Instagram Fashion Grid Layout

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
2×2 Instagram fashion grid, single square image, 1:1 aspect ratio. Korean female fashion influencer, adult {argument name="age" default="21+"}, tall slim elegant hourglass figure, extremely beautiful with symmetrical features, radiant smooth skin, long silky dark brown hair softly styled, K-beauty soft glam makeup with dewy glass skin, subtle blush, gradient pink lips.

{argument name="outfit ensemble" default="outfit-ensemble"} styled as {argument name="fashion style" default="fashion-style"}, same outfit across all four frames, emphasizing waistline and flattering silhouette, cute chic youthful Instagram-viral aesthetic.

Four equal square frames arranged 2×2:
• Top left: full-body standing pose against aesthetic café wall, soft cute smile
• Top right: mirror selfie pose indoors, playful wink or subtle pout
• Bottom left: close-up portrait with soft portrait mode blur, chic confident gaze, emphasizing dewy makeup
• Bottom right: seated pose on stairs, candid laugh looking away

Premium smartphone camera aesthetic (iPhone-style, ~26mm wide lens), natural daylight or soft café lighting, soft warm pastel color grading, slightly brightened exposure, cohesive tone across all frames. High-quality authentic influencer photo with ultra-realistic skin texture and fabric details. Subtle white borders between frames, clean trendy feed appearance.

Avoid: blurry image, over-smoothed skin, distorted anatomy, inconsistent outfit between frames, harsh flash lighting, low resolution.
```

## Countryside Mountain Bike Ride

> Fotogerçekçi, minimal manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Photorealistic vertical outdoor lifestyle photograph of an adult woman riding a mountain bike through a {argument name="setting" default="sunny countryside meadow"}. She is seated naturally on the bicycle with a little sticker 'Keor' on it somewhere, wearing a {argument name="outfit" default="fitted red sleeveless top, a lightweight white pleated very short skirt, and clean red glossy high heels"}. Very long straight auburn-brown hair flows naturally down her back. She turns her head over her shoulder toward the camera with a relaxed, confident expression while continuing to hold the handlebars. Golden-green grass, scattered trees, clear pale-blue sky, warm afternoon sunlight, realistic shadows, subtle lens softness, {argument name="style" default="authentic amateur smartphone photography"}, natural skin texture, candid travel-adventure atmosphere, slightly imperfect framing, 9:16 vertical composition.
```

## Modern Staircase Group Portrait

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a photorealistic, high-detail lifestyle photograph of three young women posing together on a modern wooden staircase inside a stylish contemporary home. Do not reference or resemble any real celebrity or public figure.\
\
1. Subjects, hair, skin, expressions & poses:\
\
Woman on the left: young woman with fair skin, light blonde hair styled in a neat high ponytail with a few soft strands framing her face. She has natural facial features, subtle makeup, and a relaxed, friendly expression. She sits comfortably on a wooden stair with one arm raised casually toward her hair, looking toward the camera with a confident but natural smile.\
\
Woman in the center: young woman with fair skin and blonde hair pulled into a sleek ponytail. She has softly defined eyebrows, natural makeup, and a calm, composed expression while looking slightly toward the side. She stands or sits one step higher than the others, creating a layered composition.\
\
Woman on the right: young woman with fair skin and long copper-red hair gathered into a ponytail, with a few loose strands around her face. She has subtle freckles, natural makeup, and a relaxed expression. She sits sideways on a lower stair with one hand resting naturally on the step while looking toward the camera.\
\
Keep all three women anatomically natural and proportionate, with realistic hands, facial symmetry, hair strands, and natural posture.\
\
Their interaction should feel like a casual group photograph between friends.\
\
2. Clothing & accessories:\
\
Left woman wears a green-and-black horizontally striped sleeveless summer dress with a simple elegant design, paired with a delicate gold necklace and small earrings.\
\
Center woman wears a navy-and-blue striped sleeveless dress with a clean contemporary design and minimal jewelry.\
\
Right woman wears a burgundy-and-black striped sleeveless dress, with subtle jewelry and visible decorative tattoo artwork on her upper arm.\
\
Use realistic fabric texture, stitching, folds, and natural draping.\
\
Keep the styling fashionable but tasteful and suitable for a casual lifestyle photograph.\
\
3. Environment & lighting:\
\
Set the scene inside a bright, {argument name="setting" default="modern multi-level home with a distinctive wooden staircase"}, white structural beams, thin metal cable railings, and warm wooden steps.\
\
Include contemporary architectural details, glass panels, neutral walls, minimalist furniture, and subtle decorative elements in the background.\
\
Large windows allow soft daylight to enter the room.\
\
Use warm ambient interior illumination combined with natural daylight for a welcoming atmosphere.\
\
Create realistic shadows and gentle highlights across the subjects and staircase without excessive contrast.
```

## Urban Giant Mystery

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create an extraordinarily photorealistic cinematic photograph of a {argument name="setting" default="normal modern city at blue hour"}, captured from street level with a professional full-frame camera and a 35mm lens. At first glance, everything looks completely normal: realistic pedestrians walking, taxis and cars moving through traffic, storefronts, streetlights reflecting on slightly wet asphalt, office windows glowing naturally, subtle atmospheric haze. But hidden between the skyscrapers is something absolutely impossible: A {argument name="subject" default="colossal HUMAN-LIKE FIGURE"}, hundreds of meters tall, is partially visible behind the buildings. The figure must look almost completely human rather than monstrous — realistic human skin, subtle pores, tiny imperfections, faint veins, natural facial structure, realistic eyes, slightly messy hair, believable anatomy. Only portions of the enormous person are visible between the buildings, making it initially difficult to understand what the viewer is seeing. One enormous {argument name="interaction" default="hand is resting naturally against the side of a skyscraper"}, with individual fingerprints, wrinkles and skin texture visible. The enormous face is partially obscured by clouds and buildings in the far background, looking calmly down toward the city. CRITICAL: Make the giant blend naturally into the environment. The lighting on the giant must perfectly match the city's lighting, atmospheric perspective, haze, reflections and color temperature. Buildings in front of the figure should partially occlude it. Some atmospheric fog should pass between the giant and the camera. People on the street should NOT be dramatically reacting. Most pedestrians should appear completely unaware, creating an eerie sense that the viewer has discovered something impossible that everyone else somehow missed. Extreme photorealism, physically accurate lighting, realistic global illumination, natural shadows, realistic reflections, atmospheric depth, subtle lens imperfections, realistic skin microtexture, high dynamic range, cinematic depth of field, documentary photography aesthetic, believable scale, extremely detailed architecture. Composition should create an immediate visual mystery: the viewer should need a second look to realize that the shape between the skyscrapers is actually an enormous human being. No fantasy illustration aesthetic, no cartoon appearance, no CGI look, no exaggerated monster features, no glowing eyes, no text, no logos, no watermark. Make it look like an accidentally captured photograph from a real camera — so convincing that it could initially be mistaken for a genuine photograph. 8K-level detail, ultra-high resolution, natural colors, realistic photographic grain, masterpiece-level realism.
```

## Ironic Always Working Ocean Meme

> Fotogerçekçi logo üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Realistic candid photo of [person from uploaded photo] standing chest-deep in {argument name="water type" default="rough ocean water"}, surrounded by large breaking waves and white sea foam, no hat. In one raised hand, held above the water, they hold an {argument name="laptop" default="open dark grey/space-black laptop"} with a visible Apple logo, angled toward their face as if working on it. In the other hand, raised at chest height, they hold a {argument name="beverage" default="to-go coffee cup"} with a white lid and brown sleeve. Their expression is focused and slightly tired, looking down at the laptop screen. Only the head, shoulders, and raised arms are visible above the waterline; the rest of the body is submerged. The ocean is turbulent with rolling waves and whitewater in the background, cool grey-blue-green color grading, overcast diffused daylight, slightly moody and dramatic lighting. Shot from a distance with a slight telephoto compression, as if photographed candidly from the shore. Vertical composition, photorealistic, ironic "always working" meme aesthetic, no text overlays anywhere on the image.
```

## Tactical Catsuit Action Photography

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Photorealistic professional photograph of two beautiful women with {argument name="hair color" default="long brunette hair"}. Both wear {argument name="clothing" default="highly reflective red form-fitting catsuits"} with front zippers. The woman on the left holds a black tactical-style rifle across her body. The woman on the right holds a black handgun at her side and is positioned lower beside her, one hand resting near the other woman’s high heel. Both look toward the camera with confident expressions. {argument name="background" default="Dark brick wall background with a graffiti colored written 'Keor' on the wall"}, dramatic rim lighting outlining the body, face, high heels and clothing textures. Highly detailed textures, realistic skin, sharp focus, cinematic lighting, professional fashion/action photography style, 8k resolution.
```

## High Altitude Mountain Selfie

> Fotogerçekçi manzara üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the exact same face from the reference image and generate a breathtakingly realistic selfie taken at high altitude on a {argument name="mountain type" default="dramatic green mountain"} — the kind of photo that stops everyone mid-scroll. The subject holds the camera slightly above eye level at a natural selfie angle — face filling the left or center portion of the frame, body from shoulders up visible, casual and completely natural. Expression is genuinely alive — a warm natural smile or that relaxed effortlessly cool expression of someone who just hiked to the top of something beautiful and knows it. Wind very slightly moving the hair. Wearing a casual outdoor layer — a fitted fleece or light jacket, completely real and appropriate for mountain altitude. Behind and around the subject the mountain view is absolutely jaw-dropping and completely photorealistic — vast rolling green mountain ranges extending to the horizon in layer after layer of deepening atmospheric perspective, the nearest slopes a rich vivid green, middle distance mountains slightly softer and cooler, the furthest peaks dissolving into natural blue-grey atmospheric haze at the horizon. The specific lush green of high altitude mountain vegetation — dense forest on the lower slopes transitioning to alpine meadow at the higher elevations, rocky outcrops breaking through the green at the peaks. A dramatic sky above — clear blue with a few three-dimensional cumulus clouds at different heights casting natural moving shadows across the green mountain surfaces below. The selfie perspective showing genuine altitude — the ground falling away sharply below the subject, the scale of the mountain landscape making the human figure feel appropriately small against the vast green world behind them. Real mountain wind suggested by the hair movement and jacket fabric. Lighting completely natural — bright overcast or partial sun outdoor mountain light, honest and real. Shot with front camera simulation — natural slight wide angle distortion, authentic smartphone selfie rendering. 3% film grain. Vertical 9:16 format. Ultra photorealistic 8K — the selfie that makes everyone ask exactly which mountain this is.
```

## Ironic Ocean Office Meme

> Fotogerçekçi logo üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Realistic candid photo of [person from uploaded photo] standing chest-deep in rough ocean water, surrounded by large breaking waves and white sea foam, no hat. In one raised hand, held above the water, they hold an {argument name="laptop" default="open dark grey/space-black laptop with a visible Apple logo"}, angled toward their face as if working on it. In the other hand, raised at chest height, they hold a {argument name="drink" default="to-go coffee cup with a white lid and brown sleeve"}. Their expression is focused and slightly tired, looking down at the laptop screen. Only the head, shoulders, and raised arms are visible above the waterline; the rest of the body is submerged. The ocean is turbulent with rolling waves and whitewater in the background, cool grey-blue-green color grading, overcast diffused daylight, slightly moody and dramatic lighting. Shot from a distance with a slight telephoto compression, as if photographed candidly from the shore. Vertical composition, photorealistic, ironic "always working" meme aesthetic, no text overlays anywhere on the image.
```

## Primitive Stencil Dog Illustration

> Minimal, elle çizilmiş mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A stylized, primitive illustration of a {argument name="subject" default="dog"} is rendered in {argument name="subject color" default="light pink"} against a {argument name="background color" default="dark red"} background. The dog is depicted in a side profile,  with a large, angular head featuring a single, circular eye with a smaller circle in its center, and two pointed ears. Its mouth is open, revealing a row of sharp, triangular teeth and a dark, cavernous interior. A curved tail extends from its rear. The body of the dog appears to be filled with hand drawn crosshatching and symbols. Its four legs are depicted as simple, rectangular shapes. The overall aesthetic is reminiscent of a {argument name="art style" default="stencil or woodcut print"}, with a rough, textured quality.
```

## Y2K Balletcore Nighttime Portrait

> Fotogerçekçi portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic playful Y2K balletcore nighttime lifestyle portrait of a young adult woman with long {argument name="hair color" default="vivid copper-red hair"} styled into two neat thick braids falling over her chest, soft center part, loose face-framing strands, subtle flyaways, and natural silky texture. Fair warm ivory skin with clearly visible pores, realistic skin texture, delicate natural freckles across the cheeks, nose, shoulders, chest, arms, and legs, subtle facial vellus hair, natural skin variation, pronounced rosy flushed cheeks, softly luminous complexion, feathered brows, subtle champagne-pink eyeshadow, fine brown winged eyeliner, wispy separated lashes, glossy rosy-pink lips with realistic lip texture, and bright blue-gray eyes. She has a huge genuine open-mouth smile with visible natural teeth, slightly squinted happy eyes, and an energetic candid expression. Wearing a fitted white ribbed camisole with delicate lace trim, tiny feminine bow details and long ribbon ties at the neckline, layered underneath a cropped pastel-pink long-sleeve shrug cardigan. Pair it with a short white tiered ruffle mini skirt, white patterned semi-sheer tights featuring a delicate geometric knit design, and glossy pastel-pink satin platform Mary Jane heels with chunky block heels. She is crouching beside an open stainless-steel refrigerator in a modern apartment kitchen at night, balanced naturally on her heels with one knee raised, one hand resting lightly across her thigh while the other reaches toward a refrigerator shelf. The open refrigerator is brightly illuminated and stocked with realistic everyday groceries, yogurt cups, sauces, condiments, packaged snacks, fruit, leftovers, jars, and containers. Colorful candy bars, gummy candy packets, snack wrappers, cereal boxes, and small packaged treats are playfully scattered across the dark wooden floor around her, creating a chaotic late-night snack-run aesthetic. Modern apartment kitchen with glossy white cabinetry, stainless-steel refrigerator, built-in appliances, dark nighttime windows, subtle city lights, and minimal contemporary styling. Captured using an {argument name="camera model" default="iPhone 15 Pro"} with strong direct rear-camera flash, producing authentic harsh frontal illumination, bright eye catchlights, crisp shadows behind the subject, realistic reflections across the {argument name="refrigerator style" default="stainless steel refrigerator"}, glossy shoes and packaging, slight highlight clipping, natural smartphone perspective, and the imperfect candid quality of a spontaneous late-night photo. Cool refrigerator light mixes with the warmer flash and dark ambient room lighting. Y2K sleepover aesthetic, balletcore fashion, playful Pinterest nightlife photography, candid Gen-Z lifestyle image, realistic anatomy, individual hair strands, detailed fabric fibers, visible pores and freckles, realistic hands and fingers, natural teeth, RAW-like clar
```

## Cozy Home Fitness Lifestyle Portrait

> Fotogerçekçi, minimal mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a photorealistic lifestyle portrait of an young woman seated comfortably on a compact indoor exercise machine in a cozy, modern home interior.

1. Subject, hair, skin, expression, pose:
A young woman with {argument name="hair style" default="long, naturally red/auburn hair"} styled in a high ponytail, with a few soft strands framing her face. Fair skin with realistic natural texture and subtle freckles. Light-colored eyes, neatly shaped eyebrows, and understated everyday makeup. She has a calm, slightly serious expression while looking directly toward the camera. She is seated upright on the exercise equipment with both knees comfortably raised and bent, maintaining a relaxed, balanced posture. One hand gently rests near the side of her hair while the other arm rests naturally beside her. Her pose should feel candid, casual, and comfortable rather than staged.

2. Clothing and accessories:
She wears a simple {argument name="top color" default="burgundy-red"} sleeveless athletic top layered naturally over a subtle gray underlayer, paired with fitted gray textured workout leggings. Add a delicate necklace with a small pendant. Keep the outfit practical, modest, contemporary, and suitable for light indoor exercise. No unnecessary accessories.

3. Environment and lighting:
Set the scene inside a warm, tidy residential room. Behind her is a large decorative framed artwork with a botanical-inspired pattern and metallic neutral accents. Include a small side cabinet with a clear glass vase containing soft blue and lavender flowers. The room has neutral walls, understated furniture, and a clean minimalist atmosphere. Use warm ambient indoor lighting combined with soft diffused illumination from the room, creating gentle highlights on the subject while preserving natural skin tones and realistic shadows.

4. Camera / visual style:
Photorealistic editorial lifestyle photography, vertical portrait composition, approximately 50mm lens, natural perspective, eye-level camera position, shallow-to-moderate depth of field, crisp facial details, realistic fabric textures, authentic skin texture, subtle background separation, balanced exposure, soft highlights, natural shadows, cinematic but believable color grading, high dynamic range, professional photography quality, ultra-detailed, realistic proportions, candid home-photography atmosphere.

5. Overall direction:
Keep the composition faithful to a casual indoor lifestyle photograph. Prioritize natural anatomy, realistic hands and feet, accurate facial proportions, authentic clothing folds, physically believable lighting, and detailed environmental textures.
```

## Studio Portrait with Parrots

> Sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A close up, studio portrait features a fair skinned woman with {argument name="hair color" default="dark brown/black"} hair, eyes closed, tenderly holding a flock of five small {argument name="bird colors" default="teal & yellow"} parrots. the parrots are uniformly bright with orange beaks and black eyes circled in white. they are scattered across her shoulders and arms, resting gently. her attire appears to be made of a cream colored, possibly lace, fabric. the background is a smooth, {argument name="background color" default="light gray"}, providing a soft contrast to the bright yellow & teal of the birds and the light tone of the woman's skin.
```

## Dark Cinematic Window Lighting Portrait

> Sinematik mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the exact same face from the reference image and generate a dark cinematic portrait where a single window is the only light source in the world — the room in absolute darkness except for the precise column of natural light falling through the glass and striking the face with surgical beauty.

The subject positioned close to a large window — body at a natural angle, one shoulder almost touching the window frame, the face turned partially toward the glass so the window light strikes at a precise 45 to 60 degree angle across the facial planes. Not standing formally — leaning very slightly, completely natural, the specific body language of someone drawn unconsciously toward the only light in a dark room. Wearing a {argument name="clothing" default="dark fitted turtleneck"} or {argument name="alternative clothing" default="heavy dark shirt"} — the clothing dissolving completely into the surrounding darkness, only the face and the very edge of the shoulder existing in the light.

The window itself is the silent protagonist — large steel-framed industrial panes or old wooden-framed glass, the glass slightly imperfect with natural waviness creating very subtle light distortion, the exterior beyond the glass completely overcast or pre-dawn — a flat grey-white light source outside that is bright without being warm, cold natural daylight pressing through the glass into the dark interior. The window frame casting its own precise shadow geometry across the face and wall — the vertical and horizontal frame bars creating a cross-shadow pattern that falls across the cheek and forehead, the window grid shadow dividing the face into geometric light and shadow zones. The specific graphic beauty of window frame shadows on a human face — architectural geometry imposed on biological curves.

Expression is the most quietly devastating yet — eyes directed toward the window light rather than the camera, not looking out but looking at the light itself, the specific expression of someone who has been sitting in darkness for a long time and is feeling the first light touch their face. Lips slightly parted, jaw completely relaxed, every guard completely down. The most private and human expression possible — caught in a moment of solitary communion with natural light.

Skin at full forensic obsession under the specific quality of cold window light — the most honest and unforgiving light that exists, the flat grey natural light from an overcast exterior revealing every skin surface detail simultaneously from every direction without creating harsh shadows that obscure detail. Every individual pore in three-dimensional relief under the window light. Stubble hairs casting micro-shadows across the surrounding skin. The window frame shadow lines crossing the face — the skin texture equally visible in the light zones and the frame-shadow zones, the shadow not obscuring detail but simply darkening it. The specific way cold northern window light renders real skin
```

## Glamorous Marina Yacht Scene

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A glamorous scene unfolds in an exclusive marina on a bright, sunny day, radiating timeless elegance. A confident woman, exuding high-fashion cool and absolute self-assurance, perches on the glossy fender of a {argument name="car color" default="yellow"} {argument name="car model" default="Porsche cabrio sports car"} with black alloy wheels. She wears a striking {argument name="swimsuit color" default="pink"} one-piece swimsuit with white trim, paired with square-framed sunglasses, high-heeled slides, and gold jewelry. Direct midday sunlight strikes her from high from the front-right, highlighting her toned physique and creating defined shadows on the sun-baked cobblestones. The background is a crisp, clean backdrop of white luxury yachts with a written ‘Keor’ on it docked under a clear, deep cobalt blue sky. It is a stunning cinematic moment, capturing a narrative of timeless jet-set luxury and powerful, statuesque grace in a coastal paradise.
```

## Cyberpunk Rainy Night Market

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-cinematic {argument name="theme" default="cyberpunk"} night market in a dense futuristic Asian megacity during heavy rain, viewed from street level. A lone mysterious figure in a long black hooded coat walks away from the camera through a crowded neon-lit alley, carrying a dark shoulder bag. Dozens of transparent umbrellas surround them, with silhouettes of pedestrians fading into the rainy haze. Towering buildings disappear into the dark storm clouds above, covered with layers of glowing neon signs in Japanese, Korean, Chinese and Thai-inspired typography, colorful holographic advertisements, hotel signs, restaurants, street stalls and underground shops.

The wet asphalt is covered in puddles, creating perfect mirror-like reflections of electric blue, magenta, violet, cyan and warm orange neon lights. Steam rises from food stalls, rain falls visibly through the neon glow, subtle mist fills the distant streets, electrical cables stretch overhead, and atmospheric smoke creates incredible depth. A small glowing street-food sign in the foreground adds warm contrast.

Photorealistic cinematic photography, {argument name="aesthetic" default="cyberpunk noir"}, Blade Runner-inspired atmosphere, moody dystopian aesthetic, volumetric lighting, dramatic rim lighting, realistic rain droplets, wet reflective surfaces, deep shadows, rich contrast, atmospheric perspective, extremely detailed architecture, realistic human silhouettes, natural imperfections, shallow depth of field, 35mm cinematic lens, low-angle street photography, HDR, film grain, ultra-realistic textures, 4K, masterpiece, highly immersive, vertical composition, no borders, no watermark, no modern text overlays.
```

## Faux Fur Fashion DSLR Portrait

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create image of a hyper-realistic DSLR cinematic photo: focus on sharp facial features, dynamic pose and full-body, {argument name="subject" default="stylish young man in a shaggy brown/tan faux fur coat over a dark tee with a gold graphic"}. He wears {argument name="pants" default="shiny black faux leather pants, a black belt with a silver buckle, and layered silver chains/rings"}. The background is a {argument name="background" default="dense, soft, dusty pink, long-pile faux fur"}, filling the frame with textured blush color.
```

## Action Snowboarder Mountain Shot

> Sinematik manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A dynamic action shot of a {argument name="subject" default="man snowboarder"} with a nice hairstyle wearing a modest, structured {argument name="outfit color" default="blue-and-white"} patterned athletic top with extended coverage, matching leggings, and a grey backpack, carving swiftly down a steep, sunlit snowy mountain slope under a brilliant blue sky, kicking up a dramatic spray of powdery snow crystals with cinematic lighting.
```

## Garden Lifestyle Outdoor Portrait

> Fotogerçekçi, minimal manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a photorealistic, high-resolution outdoor lifestyle portrait of a fictional young woman sitting in a peaceful garden setting, capturing a bright summer atmosphere with a natural, elegant look.

Subject description, hair, skin, expression and pose:
A fictional young woman with fair skin and subtle natural freckles, featuring {argument name="hair color" default="long copper-red hair"} with soft waves flowing naturally down her back. Her hair has a slightly sunlit texture with a few loose strands around her face. She has light-colored eyes, naturally shaped eyebrows, delicate facial features, and a calm, thoughtful expression as she looks back toward the camera. She is seated comfortably on a large natural stone surface with a relaxed posture, her shoulders slightly turned and her hands resting naturally for a candid outdoor portrait. Maintain realistic anatomy, natural proportions, and an authentic relaxed mood.

Clothing and accessories:
She wears a simple, {argument name="outfit color" default="bright yellow"} one-piece summer outfit with a clean, minimal design and smooth fabric texture. Add subtle, minimal accessories such as a small bracelet or delicate necklace for a refined casual style. Keep the outfit tasteful, modern, and suitable for a sunny outdoor setting. Avoid visible logos or branding.

Environment and lighting:
Place her in a {argument name="background" default="beautifully landscaped garden with lush green hedges, palm trees, trimmed plants, and a modern outdoor area"} in the background. The subject sits on a textured natural stone surface surrounded by warm outdoor elements. Use bright natural sunlight with a clear blue sky, soft shadows from nearby trees, and gentle highlights on her hair and clothing. Create a fresh summer atmosphere with realistic colors and natural depth.

Camera / photography style:
Professional outdoor portrait photography, 85mm lens, medium-full body composition, eye-level perspective, shallow depth of field, realistic background blur, natural sunlight, cinematic color grading, high dynamic range, detailed skin texture, realistic hair strands, sharp focus on the subject, balanced exposure, warm summer tones, editorial lifestyle photography, ultra-high resolution, photorealistic quality.

Composition and realism:
Emphasize the contrast between the vibrant yellow outfit, green garden surroundings, and blue sky. Keep the image natural and realistic with accurate lighting, realistic fabric folds, detailed stone texture, and authentic facial expression.
```

## Cinematic Theater Event Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a high-resolution, photorealistic cinematic portrait of two young women seated together in an elegant theater or private event setting, capturing a candid, natural interaction between them.

Subject description: Woman 1:
{argument name="first woman" default="A young woman with fair-to-light skin and long, naturally wavy dark-brown hair styled loosely around her shoulders, with subtle face-framing strands. She has refined facial features, expressive dark eyes, natural eyebrows, and a calm but slightly skeptical expression, with her lips gently pressed together as she looks sideways toward her companion."}

Subject description: Woman 2:
{argument name="second woman" default="A young woman with fair skin, long copper-red hair flowing naturally over her shoulders and down her back, with soft waves and subtle texture. She has light-colored eyes, delicate facial features, and a warm, cheerful expression. She is turned slightly toward the first woman, smiling naturally as if sharing a lighthearted comment."}

Clothing and accessories:
Woman 1 wears an elegant contemporary evening outfit in a muted lavender-gray tone with subtle textured detailing and a sophisticated silhouette. Add delicate silver drop earrings and minimal jewelry.
Woman 2 wears a refined satin-inspired evening outfit in a muted rose-plum tone with tasteful tailoring and subtle sheen. Add a simple bracelet and understated accessories. Keep both outfits sophisticated, tasteful, and suitable for an upscale evening event.

Environment and lighting:
{argument name="environment" default="Place them in a sophisticated theater or event venue with deep burgundy curtains in the background. The environment should feel intimate and luxurious without being overly decorated. Use warm theatrical illumination mixed with subtle magenta and amber highlights, creating gentle reflections on their hair and clothing."}

Camera / photography style:
Photorealistic editorial photography, 85mm portrait lens, medium close-up composition, shallow depth of field, natural facial proportions, realistic skin texture, accurate hair strands, subtle fabric detail, soft cinematic bokeh, balanced exposure, gentle rim lighting, professional event photography, realistic color reproduction, cinematic color grading, high dynamic range, crisp facial details, natural expressions, authentic candid atmosphere, ultra-detailed, high resolution.

Composition and quality:
Frame both women from approximately the waist/chest upward, keeping both faces clearly visible.
```

## Cozy Morning Bedroom Portrait

> Minimal, lüks portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
An adult woman with {argument name="skin details" default="fair, naturally freckled skin"}, soft facial features, blue-gray eyes, and {argument name="hair" default="long wavy copper-red hair parted near the center"}. A gentle, relaxed closed-lip smile while looking directly into the camera. Seated comfortably on the edge of a bed with one leg crossed over the other, leaning slightly forward and holding a ceramic coffee mug with both hands. A {argument name="outfit" default="champagne-ivory satin robe loosely layered over a matching lace-trimmed camisole"}. Delicate floral lace panels across the shoulders, wide lace cuffs, a softly tied waist, and a fine gold pendant necklace. A cozy, elegant bedroom decorated in warm neutral shades. An unmade cream-colored bed with softly rumpled linens, a pale carved wooden headboard, and a dark wooden dresser blurred in the background. A simple handmade ceramic mug filled with a warm drink. Warm golden morning sunlight entering from the right side of the frame. Soft highlights around her copper hair, gentle illumination across her face and satin robe, warm skin tones, and natural diffused shadows. Peaceful, intimate, cozy, and slow-morning atmosphere. Vertical three-quarter seated portrait framed from above the head to the upper legs. Eye-level camera positioned directly in front of the subject. Approximately 50mm portrait lens with a moderately shallow depth of field. Sharp focus on the eyes, face, hair, lace texture, hands, and mug, with a softly blurred bedroom background. 9:16 aspect ratio, photorealistic, high detail. Natural lifestyle portrait with a polished but authentic editorial appearance. Warm cream, champagne, beige, honey gold, copper, and soft brown palette. Realistic untreated skin with visible pores, subtle freckles, fine facial texture, and natural tonal variation. Soft golden color grading, realistic satin reflections, detailed floral lace, gentle background bokeh, balanced highlights.
```

## Realistic Mountain Silhouette at Midnight

> Manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
masterpiece, realistic photo, landscape, Ground-level shot, {argument name="sky description" default="star-filled sky"}, {argument name="subject" default="mountain silhouette"}, midnight stillness, faint galactic haze
```

## Elegant Swans Heart Formation

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A pair of elegant {argument name="birds" default="white swans"} floating on a calm, {argument name="setting" default="misty lake"}, their long necks arched toward each other to form a perfect heart shape, their pristine white feathers creating soft ripples on the glassy, dark blue water which perfectly reflects their forms. The background features a serene, foggy marshland with tall reeds silhouetted against the soft pastel light of a sunrise or sunset. The sun is a pale, glowing orb visible through the haze on the horizon, casting gentle orange and pink hues across the tranquil sky and reflecting faintly on the water's surface. The composition is vertical and symmetrical, emphasizing a romantic, peaceful, and ethereal atmosphere. High-resolution nature photography, cinematic lighting, soft focus, serene mood, hyper-realistic, dreamy aesthetic, intricate textures of water and feathers, wide-angle lens, tranquil morning mist, 8k resolution
```

## Romantic Black and White Studio Portrait

> Fotogerçekçi portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a romantic black-and-white studio portrait of a real skinny, not medium weighed, couple standing in front of a wall with a {argument name="light shape" default="heart-shaped"} light projected behind them. The couple must maintain their real and original faces, preserving all authentic facial features and natural hair colors, with no changes. The man is leaning toward the woman, gently smelling her neck with a soft and loving expression, while holding her hand. The woman smiles slightly, with a romantic and affectionate look. Their outfits remain the same: the man wears a {argument name="men's outfit" default="plain fitted white t-shirt and light pants"}, while the woman wears a {argument name="women's outfit" default="sleeveless white top and dark jeans"}. The lighting is dramatic with strong contrast, highlighting the couple within the glowing heart shape. The image should be ultra-high resolution, with hyper-realistic details and a professional editorial photography style.
```

## Korean School Candid Portrait

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{argument name="subject" default="2 female high school students"} standing on a {argument name="location" default="school staircase"}, warmly hugging each other, subtle happy smiles, looking at each other instead of the camera, unaware of the camera, candid moment, authentic Korean school stairwell, soft afternoon sunlight, shot on iPhone 16 Pro, natural HDR, realistic smartphone photo, handheld, slightly imperfect framing, natural colors, everyday moment, photorealistic,
```

## Cozy Kitchen Lifestyle Portrait

> Fotogerçekçi, minimal mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A photorealistic indoor lifestyle portrait of a {argument name="subject" default="young woman in a modern, cozy apartment"}. She has {argument name="appearance" default="fair skin, long auburn-red hair gathered into a relaxed low ponytail, with a few loose strands naturally framing her face"}. Her expression is warm and friendly, with a subtle genuine smile and relaxed eyes looking toward the camera.

She is seated comfortably in a natural three-quarter pose, turned slightly toward the camera, with one hand resting naturally on her knee and the other positioned comfortably beside her. Her posture should appear relaxed and authentic rather than overly posed.

She wears a {argument name="clothing" default="soft pink floral lounge dress with delicate small flower patterns, thin straps, subtle decorative edging, and natural fabric folds"}. Add a simple understated ring and minimal accessories. Keep the styling casual, tasteful, and everyday, with no visible logos or branding.

The room has a warm contemporary interior with vertical wooden panels, light neutral walls, polished wooden flooring, and a small kitchen area in the background. A straw-colored decorative hat hangs on the wall, while a fruit arrangement containing bananas and oranges adds a natural touch to the setting. Warm interior lighting combines with soft daylight entering from the side.

Camera and style: shot on an 85mm portrait lens, natural eye-level perspective, soft diffused window light, subtle warm indoor illumination, realistic skin texture, detailed individual hair strands, authentic fabric texture, shallow depth of field, cinematic color grading, balanced exposure, natural shadows, professional lifestyle photography, high detail, photorealistic 4K quality.
```

## Celebrity Red Carpet Cinematic Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Generate a hyper-realistic, cinematic 8k image of the uploaded man with his face fully preserved. he is wearing {argument name="eyewear" default="sleek black sunglasses"} and a {argument name="outfit" default="sharp black tailored suit"}, walking confidently on a red carpet in a natural motion. his hands are in his pockets, exuding calm authority and celebrity vibes. surrounding him are excited fans and glamorous women reaching out to touch him, while journalists’ cameras flash from below the frame, adding intense energy and drama. a {argument name="car type" default="luxury lamborghini"} is parked right beside the red carpet, enhancing the high-status atmosphere. the setting should feel crowded, dense, and cinematic, with rich lighting, dramatic shadows, and the color grading of a high-end sony a7s4 camera shot
```

## Aesthetic Supermarket Lifestyle Portrait

> Sinematik, minimal logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A beautiful young slim woman wearing a {argument name="headwear" default="hijab"} is in the {argument name="aisle" default="beverage aisle"} of a {argument name="supermarket style" default="modern Asian-style"} supermarket. Vertical 9:16 photo composition, full body, candid lifestyle photography. The camera is positioned slightly lower than chest height (slightly low angle), using a 35mm lens, providing a natural perspective.
The subject stands relaxed while leaning her left shoulder against the side of the beverage refrigerator. Her head is tilted slightly downward so that her face is mostly hidden by a cap, creating a natural, shy, and candid impression. Her left leg bears her weight, while her right leg is bent backward with the tip of the shoe lifted. Her right hand holds a thin white/silver smartphone, while her left hand is tucked into her pants pocket.
Wearing a premium ivory-white pashmina hijab made of soft matte chiffon silk that drapes naturally following the shape of her head and shoulders. The hijab is neatly styled with simple folds, modestly covering her neck and chest in front, with the ends tucked into her t-shirt for a clean and minimalist look. No hair is visible.
Over the hijab, she wears a pastel pink Nike baseball cap with a white swoosh logo on the front. The cap is worn slightly low so her face remains hidden.
Wearing a vintage-style oversized white t-shirt featuring pastel cartoon illustrations and large light purple text across the chest. The loose t-shirt forms natural fabric folds, partially covering her hips.
Wearing wide-leg gingham plaid pants in pastel pink and white, made of soft cotton with realistic, natural drapes. Wearing clean, plain white sneakers with thick white soles.
To her right stands a silver metal shopping cart with gray wheels. Inside the cart are a few products packaged in pink and yellow, while most of the cart remains empty.
The background features an exceptionally clean, premium modern supermarket. Behind the subject is a display refrigerator filled with neatly arranged fruit juice bottles in yellow, white, red, and orange. White LED lights from inside the fridge cast a soft illumination on the subject. To the right, snack shelves are visible, dominated by yellow, orange, and brown packaging. A modern black ceiling with long linear LED lights adds a touch of luxury.
The overall tone is warm and soft, dominated by white, pastel pink, yellow, and orange. Korean supermarket aesthetic, Xiaohongshu lifestyle photography, cozy shopping vibes, clean minimal aesthetic, premium fashion editorial.
Ultra photorealistic, DSLR photography, RAW photo, HDR, realistic lighting, ultra-detailed fabric texture, realistic hijab folds, realistic shopping cart metal texture, detailed beverage bottles, authentic supermarket environment, cinematic lighting, natural shadows, subtle shallow depth of field, crisp focus, 8K UHD, masterpiece, best quality, highly detailed, ultra realistic, true-to-life colors, realistic proportions, premium editorial photography.
```

## Botanical Garden Lifestyle Portrait

> Sinematik, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A realistic outdoor lifestyle portrait of a {argument name="subject" default="young woman with fair skin, soft natural facial features, and a calm, confident expression"}. She has {argument name="hair style" default="blonde hair styled in a relaxed low ponytail with a few loose strands framing her face"}, creating a natural and effortless look. Her gaze is directed toward the camera with a gentle, composed expression. She is sitting comfortably on a classic wooden park bench with a relaxed posture, one leg crossed over the other and her hands resting naturally beside her.

She is wearing a {argument name="outfit" default="light blue off-shoulder casual top paired with a denim skirt"}, creating a fresh spring-inspired outfit. She carries a small brown shoulder bag with a simple floral charm detail and wears delicate gold-toned bracelets and minimal accessories that complement the outfit without overpowering the scene.

The environment is a beautiful botanical garden filled with colorful hydrangea flowers, lush green plants, and tall trees in the background. The setting feels peaceful and natural, with soft daylight filtering through the leaves. Gentle shadows, vibrant flowers, and greenery create a warm outdoor atmosphere.

Captured with an 85mm portrait lens, shallow depth of field, soft natural daylight, realistic skin texture, cinematic color grading, high-resolution photography style, detailed fabric textures, natural colors, professional lifestyle photography, balanced composition, subtle background blur, authentic outdoor atmosphere, and ultra-realistic details.
```

## Cozy Modern Indoor Lifestyle Portrait

> Sinematik, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A realistic lifestyle portrait of a {argument name="subject" default="young adult woman with fair skin, soft facial features"}, and a calm, natural expression. She has smooth medium-length hair styled neatly, with subtle texture and a relaxed appearance. Her eyes look gently toward the camera with a peaceful and confident mood, creating a warm and approachable atmosphere. She is sitting comfortably on a soft textured rug in a relaxed indoor pose, with natural body posture and hands resting casually. She is wearing a {argument name="top" default="simple fitted sleeveless top"} paired with {argument name="bottom" default="comfortable light-colored shorts"}, creating a minimal and elegant casual style. No visible logos or branding. The outfit has clean lines and a soft fabric texture, complemented by a simple, understated aesthetic. The environment is a cozy modern room with warm wooden walls, large windows, a small indoor plant, and soft decorative elements. Natural sunlight enters through the windows, creating gentle highlights and realistic shadows across the room. The atmosphere feels peaceful, warm, and inviting with a connection to nature. Captured with an 85mm portrait lens, shallow depth of field, soft natural window lighting, realistic skin texture, cinematic color grading, high-resolution photography style, ultra-detailed, professional lifestyle photography, balanced composition, warm tones, realistic proportions, subtle background blur, natural shadows, and authentic indoor atmosphere.
```

## Sunlit Park Picnic Portrait

> Sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A beautiful young {argument name="ethnicity" default="East Asian"} woman in her early 20s with fair skin, soft natural makeup, and a bright gentle smile, looking slightly to her left. She has long straight dark brown hair with soft bangs, slightly windswept. She is wearing a {argument name="headwear" default="light pink sun visor"}, a fitted {argument name="top" default="cream-white sleeveless crop top"} with delicate lace trim along the scoop neckline, and light gray athletic shorts with an elastic waistband. She is sitting cross-legged outdoors in a sunlit park, hands resting lightly on her legs. Soft golden-hour sunlight filters through green trees, creating warm bokeh highlights in the background. Natural skin texture, realistic photography style, shallow depth of field, high detail, soft cinematic lighting --ar 3:4 --stylize 250
```

## Stormy Coastal Cliff Landscape

> Manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
masterpiece, realistic photo, landscape, Bird's-eye perspective, coastal cliffs, crashing surf, gathering storm, sea spray veil
```

## Japanese Summer Veranda Scene

> Retro manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Recreate a summer Japanese landscape, under the eaves of an old folk house, sitting on the floor with an electric fan next to it. From inside the house, take a low-angle back shot of a {argument name="clothing" default="girl in a white tank top and a gray tank top"} who looks to be about high school age.
```

## First Person POV Unusual Scenes

> Minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
first person pov of {argument name="subject" default="something you don't normally see"}
```

## Identity Preserving Cartoon Mural

> Manzara üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the separately supplied face reference image ONLY to preserve the exact facial identity of the person. Keep the face 100% identical to the face reference while matching the hairstyle, facial proportions, eyes, nose, lips, smile and overall identity perfectly.

Recreate this scene as close as humanly possible with no creative changes.

A {argument name="subject description" default="young woman standing beside a colorful outdoor cartoon mural wall"}. She is wearing a {argument name="outfit" default="light blue oversized striped shirt over a white crop top, loose cream jogger pants, white sneakers and a matching blue shoulder bag"}. Her left arm is raised touching the mural exactly like the reference while her right hand rests naturally inside her pocket. Her body stance, leg position, foot placement, arm angle, shoulder position, head tilt, facial expression, eye direction and overall pose must match the reference exactly.

The {argument name="mural background" default="mural behind her is a giant cute anime/chibi illustration of the same girl sitting on a rainbow while winking"}. The cartoon character must wear the same outfit and have the exact same hairstyle. The cartoon character's pose, hand placement, body position and expression must match the reference exactly.

The wall is filled with identical colorful doodles including rainbow, clouds, flowers, stars, paper airplanes, butterflies, smiley faces, mountains, balloons and decorative illustrations arranged exactly like the reference.

Soft natural daylight, realistic outdoor lighting, vibrant pastel colors, eye-level camera, full body composition, 50mm lens, shallow depth of field, ultra detailed, photorealistic, HDR, masterpiece, premium fashion photography, 8K.

ABSOLUTE REQUIREMENTS:
- Face must match the supplied face reference exactly.
- Keep the exact same composition.
- Keep the exact same pose.
- Keep the exact same camera angle.
- Keep the exact same framing.
- Keep the exact same mural concept.
- The cartoon illustration must copy the girl's pose exactly.
- No additional objects.
- No removed objects.
- No different outfit.
- No different expression.
- No different perspective.
- No redesign.
- No artistic interpretation.
- Recreate the reference scene as faithfully as possible while replacing only the face with the supplied face reference identity.
```

## Cyberpunk Surrealism Dali Style

> Fütüristik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{argument name="style one" default="Cyberpunk"} {argument name="style two" default="Surrealism"} {argument name="artist" default="Salvador Dali"}
```

## East Asian Woman on Seawall

> Fotogerçekçi manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A realistic photograph of a {argument name="subject" default="young East Asian woman with long, straight, glossy black hair cascading over her shoulders and back"}, sitting casually on a low white concrete seawall. She is wearing a {argument name="outfit" default="plain white short-sleeve t-shirt, light gray denim mini shorts with frayed hems, and white New Balance sneakers with green accents"}, black N logos, and orange details on the soles. Her legs are bent with feet resting on the grass, body slightly turned toward the camera, head tilted, eyes softly closed in a gentle, relaxed smile.

{argument name="scenery" default="Foreground shows patchy green grass and the textured white concrete barrier. Background features a rocky shoreline with dark gray stones, gentle ocean waves under an overcast cloudy sky, distant green forested hills and mountains, and large palm fronds and leafy green trees framing the upper left."} Soft natural daylight, slightly muted tones from the cloudy weather, photorealistic style, full-body shot from a slightly low angle, high detail, natural skin texture, sharp focus on the subject.
```

## European Marketplace Painting Scene

> Sinematik illüstrasyon üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A charming young woman with long, dark wavy hair, wearing a structured {argument name="dress color" default="emerald-green"} dress with a modest neckline, stands outdoors in a {argument name="location" default="cobblestone European marketplace"}. She holds a {argument name="props" default="paint palette and brush"}, capturing the warm rustic stalls filled with cheeses and dried herbs under golden hour cinematic lighting.
```

## Stone Balcony Coffee Scene

> Sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A graceful young woman with intricately braided dark hair, wearing a {argument name="outfit" default="cozy long-sleeved red wrap dress"}, stands on an {argument name="location" default="old-world stone balcony"} overlooking a European street. She leans gently against a decorative wrought-iron railing while holding a {argument name="prop" default="warm ceramic cup"}, bathed in the soft glow of golden hour cinematic lighting.
```

## Detailed Mirror Selfie Portrait

> Fotogerçekçi, minimal mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject_appearance": {
    "description": "Young woman with fair skin, brown eyes, and dark brown hair",
    "hair_style": "Pulled up into a high, textured topknot bun with soft strands around the temples",
    "makeup": "Natural minimal makeup look, subtle lip tint, neatly polished light-pink manicured nails",
    "expression": "Direct eye contact towards the camera mirror, calm and confident expression"
  },
  "pose": {
    "body_positioning": "Kneeling on all fours (knees and forearms resting on the carpeted floor) with an arched back",
    "action": "Holding a black smartphone in her left hand, taking a full reflection mirror selfie"
  },
  "clothing_and_styling": {
    "outfit_type": "Two-piece activewear set",
    "top": "Fitted off-white short-sleeve top featuring a deep plunging scoop neckline and a high-waisted ribbed band",
    "bottom": "Matching high-waisted off-white athletic leggings",
    "style": "Modern athleisure, form-fitting aesthetic"
  },
  "environment": {
    "setting": "Indoor fitting room or dressing area",
    "floor": "Grey patterned low-pile commercial carpet",
    "background_left": "Natural light-wood grain door with a modern brushed silver lever handle",
    "background_right": "Off-white wall, navy blue upholstered ottoman bench with a dusty pink rectangular leather handbag placed on top",
    "foreground": "Mirror frame border visible at the bottom edge of the frame"
  },
  "lighting": {
    "type": "Bright overhead interior lighting",
    "quality": "Diffused and soft, minimal harsh shadows, neutral-to-warm color balance"
  },
  "mood": {
    "vibe": "Candid, casual, confident, personal social media mirror selfie"
  },
  "camera_details": {
    "shot_type": "Mirror selfie reflection",
    "perspective": "Low-to-mid angle eye-level view through a mirror",
    "focal_length": "~24mm - 28mm smartphone wide-angle lens equivalent",
    "framing": "Medium vertical shot framing the subject from knees to head",
    "depth_of_field": "Natural medium depth of field with smooth background separation"
  },
  "ultra_photorealistic_details": {
    "skin": "Realistic skin texture, fine pore detail, natural subsurface scattering, soft specular highlights",
    "fabric": "Micro-weave fabric texture on the activewear, visible seams, gentle stretch folds",
    "reflections_and_materials": "Accurate glass reflections, subtle lens reflections on phone camera bump, realistic wood grain and carpet fibers",
    "image_quality": "8K resolution, raw photograph, realistic color fidelity, sharp focus"
  }
}
```

## Woman among Pink Flowers

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A photograph of a {argument name="subject" default="woman among dense branches with pink flowers"}. The woman stands surrounded by flowering branches that fill the foreground and background. The composition is arranged so that the flowers partially overlap the edges of the frame, creating an immersive effect. The camera is positioned straight ahead, not tilted. The frame is medium-wide, with the woman shown from the upper hips upward.

The woman stands upright, her body facing the camera. Her head is slightly tilted upward. One hand is raised and gently touches her cheek, fingers positioned naturally. The pose is relaxed, without tension. The gaze is directed upward or slightly to the side, and the facial expression is soft.

Hairstyle: The hair is styled with soft volume at the roots, with individual strands neatly framing the face.

The hair reflects the light softly, without excessive shine. The skin appears natural, with soft highlights on the cheekbones and cheeks.

Eyeshadow in soft pastel shades (peach, beige, light pink) with a smooth transition to a darker tone at the outer corner of the eye. Black eyeliner with a subtle wing accentuates the shape of the eyes. Eyelashes are long and voluminous, thickly coated with black mascara. Lips are coated with a soft pink gloss with a subtle shimmer.

The skin looks perfectly smooth and matte.

The woman is wearing a {argument name="clothing" default="blue off-the-shoulder corset top"}. The material is thick and holds its shape. The sleeves are voluminous, made of a translucent fabric that softly diffuses the light. The bottom is a white miniskirt with a small side slit. The fabric of the skirt is smooth, without any pronounced texture. Embellishments are minimal or absent.

The setting is a {argument name="location" default="garden or park with flowering trees"}. The flowers are pink, dense, with green leaves. The foreground is partially blurred due to the depth of field. The background is also softened, but remains recognizable as a continuation of the floral space.

The lighting is natural, warm, and diffused, typical of sunset. The light is evenly distributed, creating soft shadows without sharp edges. The warm tones enhance the skin tone and petals.

The depth of field is shallow: the woman and nearby branches are in focus, while the background and foreground are blurred. The color palette is built on a combination of pink flowers, green foliage, a blue corset, and a white skirt.

Textures are clearly visible: smooth skin, straight hair, the dense material of the corset, translucent sleeves, delicate flower petals, and leaves.

The photorealism is high. The face is unaltered.
```

## Kazakh Woman in Retro Diner

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{argument name="subject" default="stylish young Kazakh woman"} sitting in a {argument name="setting" default="retro diner booth"}, pouring {argument name="sauce" default="maple syrup"} generously over a tall stack of pancakes, syrup dripping in motion, confident attitude, oversized sunglasses, minimal makeup, modern casual outfit, aesthetic breakfast scene, chrome napkin holder, ceramic tiles wall, warm morning light shot on iphone camera, natural dynamic range, slight sensor noise, realistic skin texture, imperfect lighting, casual candid photography, social media lifestyle photo, shallow depth of field, natural colors, high realism, detailed food texture, glossy syrup reflections, slight motion blur, exposure slightly uneven, auto white balance, handheld photo, unposed moment, documentary fashion photography, quiet and distant mood, early-2000s streetwear editorial restraint, shot on 35mm film, 50mm lens, f/2.8, ISO 800, shallow depth of field. --ar 3:4 --raw --profile p5c2z3o --profile gvijfut --profile hdhmcuu
```

## Blonde Woman with Hibiscus and Moon

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A woman with long {argument name="hair color" default="blonde"} hair adorned with {argument name="flowers" default="red hibiscus flowers"} reclines against a dark, star-filled background with floral patterns. She wears a flowing {argument name="dress color" default="white"} dress and holds a luminous full moon in her outstretched hand. Her gaze is directed towards the viewer, and her expression is serene.
```

## Ethereal Sunset Bride Portrait

> Sinematik, lüks portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic bridal portrait series capturing a graceful young woman with straight black hair and warm, expressive eyes, wearing an {argument name="dress style" default="elegant off-the-shoulder white satin and lace wedding gown"} with a structured bodice. She is adorned with a sheer, lightweight veil that catches the golden hour illumination, creating a warm, ethereal rim-lighting effect against her silhouette. The atmospheric outdoor background features a soft-focus garden filled with lush foliage and {argument name="flower color" default="delicate red blooms"}, illuminated by the {argument name="lighting" default="gentle, low-angle rays of sunset"}. The compositions alternate between intimate close-ups highlighting her expressive gaze and three-quarter seated poses, all rendered with a shallow depth of field that emphasizes a romantic and timeless aesthetic.
```

## Red-Haired European Traveler Portrait

> Retro mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A medium shot capturing a young woman with {argument name="hair color" default="vibrant red hair"} styled in a side braid, wearing a {argument name="outfit" default="rust-colored dress and a cream-colored cardigan"}, standing outdoors on a {argument name="setting" default="cobblestone street in a historic European town"}. She leans casually against an old stone wall covered in green ivy, holding a leather-bound notebook and a pen in her hands, with a vintage pocket watch necklace around her neck. The background features narrow, sunlit historic buildings with balconies decorated with potted flowers, and a few blurred pedestrians walking along the street near a small cart displaying pottery items. The scene is illuminated by soft daytime sunlight, creating a warm, nostalgic, and picturesque atmosphere.
```

## Korean Woman Library Portrait

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Photorealistic Korean-inspired young woman sitting in a cozy library, long dark brown hair with wispy curtain bangs and a {argument name="hair accessory" default="tiny teddy-bear hair clip"}. Soft natural makeup, rosy cheeks, glossy pink lips, expressive brown eyes. Wearing an {argument name="clothing" default="oversized white sweatshirt"} and delicate silver necklaces, hands resting on an open book. Warm library lighting, bookshelves softly blurred in the background, relaxed candid pose, {argument name="lens" default="85mm DSLR portrait"}, shallow depth of field, creamy bokeh, ultra-realistic, high detail, 8K.
```

## Purple Velvet Dramatic Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A vertical portrait of a woman with a distinct face and direct pose, featuring dark hair with loose strands framing her face. She is wearing a rich, deep {argument name="dress color" default="purple"} velvet high-neck dress and dark lipstick, complemented by smoky {argument name="makeup color" default="purple"} eye makeup and hoop earrings. The lighting is moody and dramatic against a textured {argument name="background color" default="dark"} background, highlighting the sleek fabric of the dress and the warm tones of her skin.
```

## Man at Outdoor Cafe Portrait

> Sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A young handsome male in his late twenties sits centered in a straight-on perspective, gazing directly at the lens with a genuine, approachable expression characterized by relaxed eyebrows and a slightly open mouth without a smile. He wears a {argument name="shirt" default="short-sleeve, off-white henley shirt"} accented by a silver chain. His hair is a modern textured scissor crop, approximately three inches on top with slightly shorter sides, featuring a messy, undefined part styled forward and to the right. The naturally wavy texture is hyper-detailed with slight imperfections, non-uniform growth along the hairline, and individual flyaways, utilizing a matte-finish product to create piecey, lived-in volume that distinctly avoids an artificially smooth appearance, complemented by a well-groomed three-to-four-day stubble. His relaxed left hand grips the bottom-left corner of a worn, stiff-covered {argument name="menu color" default="maroon"} menu in the lower left foreground, with his thumb resting on the front face and his index finger wrapping behind to reveal illegible white interior pages. His right hand rests casually on the dining table edge near white plates with red rims, the index finger slightly extended while the other fingers curl gently inwards. The deep outdoor street-side cafe environment features a right midground defined by a weathered red awning with scalloped edges casting subtle shadow gradients onto a smooth, matte warm beige plaster wall detailed with vertical architectural moldings. Behind him on the right, vintage rectangular glowing orange glass sconces on dark metal mounts illuminate black wire cafe chairs and a drinking glass. On the left side, the background deepens into a cool blue-gray solid concrete street featuring a metal bollard, dense thriving green street trees silhouetted against the sky, and a pristine, bright yellow storefront with lit windows that perfectly balances the asymmetric composition. The atmosphere evokes an intimate, moody, and relaxed blue hour evening. {argument name="lighting" default="Highly directional, 90-degree mixed side lighting"} creates a dramatic, high-contrast scene where warm golden orange practical light from the wall sconces bathes the right side, sculpting subtle specular highlights across his right cheekbone, the bridge of his nose, and the right collar of his shirt. Conversely, cool deep blue and cyan ambient twilight washes over the left, casting deep black shadows with soft, gradual edges across the left side of his face, neck, and torso. Captured as a candid realistic digital portrait using a 50mm lens at f/2.8, ISO 800, and 1/125s, the image features a medium depth of field that isolates the subject while blurring the background into softened shapes, enhanced by post-processing split toning that pushes shadows toward teal and warms highlights with gold, finishing with a slightly soft overall sharpness and moderate digital noise visible in the shadowy filmic texture, all beautifully framed in a 3:4 aspect ratio.
```

## Indian Woman Lifestyle Cafe Portrait

> Fotogerçekçi, sinematik logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": "{argument name="subject" default="A beautiful young Indian woman in her mid-20s"} with warm medium skin tone, long dark wavy hair cascading over her shoulders, soft defined eyebrows, expressive dark eyes with subtle makeup, full lips in a gentle closed-mouth smile, and natural glowing skin.",
  "body": "Curvaceous figure with elegant posture.",
  "outfit": "{argument name="outfit" default="Beige linen-style sleeveless jumpsuit"} with a deep V-neck, black decorative frog buttons down the front, and wide-leg pants, sunglasses perched on top of her head.",
  "pose": "Standing indoors in front of a café wall, holding an iced coffee cup with both hands in front of her waist, body facing the camera with a slight lean, relaxed and casual stance.",
  "expression": "Soft, warm, and friendly smile with gentle eye contact.",
  "lighting": "Bright indoor café lighting with soft even illumination and a glowing circular neon light around the logo.",
  "setting": "{argument name="setting" default="Modern café interior"} with a large circular 'ammy's COFFEE' logo on a textured white geometric wall featuring raised circular patterns.",
  "style": "Photorealistic, ultra-detailed 8k, cinematic lifestyle portrait, realistic fabric texture on the jumpsuit, sharp focus on face and outfit, high-end casual fashion photography.",
  "camera": "Shot on Sony A7R V, 50mm lens, f/2.0, natural depth of field",
  "mood": "Casual, friendly, stylish, cozy café vibe"
}
```

## Cinematic Motion Blur Portrait

> Sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-detailed cinematic portrait. Direct phone flash, RAW aesthetic, Pinterest evening editorial. {argument name="subject" default="Young woman"} standing on an open field at dusk. She suddenly turned her head sharply over her shoulder toward the camera — motion blur from the sharp head turn: hair blur sweeping across the frame, slight blur on face edges, face still recognizable, expression caught mid-movement, lips slightly parted with gloss catching the flash light, alive and unexpected. Body turned slightly away from camera, caught mid-turn. Very long loose hair falling down her back — blur from the sharp turn creates dynamic hair trails across the frame. {argument name="clothing" default="Black crop top. Black cap with worn distressed edges"}, slightly shifted from the head movement. Direct phone flash hits face and upper body — skin illuminated, highlights on cheekbones, nose, forehead, lip gloss catches the light. Background falls into darkness, strong contrast between lit figure and dark field behind. {argument name="setting" default="Dark grassy field"}, distant tree silhouettes, dramatic sunset sky transitioning from warm orange to deep blue. Flash overpowers the ambient light, background moody and cinematic. Close portrait framing, shoulders and face, sunset sky fills background. Shallow depth of field on background. High contrast, light film grain, no beauty filter, no plastic skin, no AI look. --ar 9:16 --style raw --style motion 50 Manicure — short square, milky.
```

## Vibrant European Festival Portrait

> Mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A lively and vibrant medium shot of a smiling {argument name="subject" default="young woman"} with dark wavy hair styled with braids and a {argument name="hair accessory" default="red floral hair accessory"}, holding a decorative floral folding fan with red and black accents. She is wearing a traditional red-and-white polka-dot dress trimmed with delicate white lace, accessorized with hoop earrings and layered necklaces. The background is a sunlit, bustling {argument name="setting" default="historic European street"} paved with cobblestones, flanked by traditional buildings with flower boxes on balconies and a blurred crowd of festival-goers enjoying a sunny afternoon celebration.
```

## Desert Travel Lifestyle Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A {argument name="subject" default="confident young man"} stands centered in a full-body pose, facing the camera with level shoulders and evenly distributed weight. He wears dark square sunglasses over a direct gaze and relaxed eyebrows, an unsmiling neutral mouth, a {argument name="outfit" default="crisp bright white fitted t-shirt, and loose cream linen trousers"} accessorized with a silver wristwatch. His hair is cut short above the ears in a faded crew cut, featuring a thick, straight, natural imperfect texture with minor flyaways along the crown outline; styled with low-shine pomade, it is pushed slightly forward and up with moderate front volume and no distinct part. His left hand hangs casually at his side in an organic gesture holding a dark mobile phone. He stands on terracotta orange-brown sand marked by rippled wind patterns and natural footsteps. In the bottom right foreground, a dominant seated camel frames the shot with its light beige fur and dark harness rope. To the midground left, a second seated camel rests, draped in a vibrant crimson red and black geometric patterned woven saddle blanket finished with fringe trims. This deep spatial arrangement extends past rolling {argument name="setting" default="desert dunes"} to an upper midground fence line of thin, evenly spaced dark wire posts, meeting a pale blue-gray hazy sky at the horizon. The sunny, wide-open desert expanse establishes a calm, casual atmosphere, bathed in bright, soft, natural golden light originating from a high top-front right direction. This moderately directional light creates preserved highlights on the top of the man's head, shoulders, and the folds of his white shirt, while casting short, soft-edged gray shadows to the left beneath his feet and the resting camels. The complementary color palette balances the striking bright white of the subject against the dominant desert sand background and rich crimson accents. Captured as a realistic digital photograph with a travel lifestyle aesthetic, the image utilizes a 28mm wide-angle lens from a straight-on perspective and an f/4.0 aperture for a deep depth of field, keeping the entire scene tack sharp. The organic visual style is completed by a slightly grainy texture with minimal digital noise, enhanced by post-processing that includes slight shadow lifting, warm highlight color grading, and a subtle saturation boost to the red saddle textures, ultimately framed in a 3:4 aspect ratio.
```

## East Asian Woman at Outdoor Café

> Sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A beautiful {argument name="subject" default="young East Asian woman"} with fair skin and soft makeup, long black hair styled in a side braid cascading over her left shoulder, gentle closed-mouth smile looking at the camera. She is wearing a {argument name="outfit" default="tight black off-the-shoulder mini dress"} with ruffled short sleeves, standing in a slight three-quarter pose with her left hand lightly touching her braid. Delicate thin necklace with a small pendant. Soft natural daylight. Background: {argument name="setting" default="beige textured wall, blue-framed window, wooden wall sign with a cartoon dog illustration"} and text “with best friend pet friendly zone”, hanging industrial light bulb, light wooden table with a small white handbag featuring a pink bow and pearl-beaded handle, blue metal folding chairs. Outdoor café patio setting, realistic photography, sharp details, natural skin texture, cinematic lighting.
```

## Cyberpunk Fukuoka Assembly Concept

> Fütüristik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{argument name="theme" default="Cyberpunk"} {argument name="subject" default="Fukuoka Prefectural Assembly member"}
```

## Kawaii Doodle Food Transformation

> Minimal, elle çizilmiş yemek görseli üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Transform a {argument name="subject" default="close-up food photo"} into a {argument name="style" default="whimsical kawaii doodle aesthetic"}. Add adorable hand-drawn cartoon eyes, a smiling mouth, rosy blush cheeks, tiny arms and legs, making the food look alive and expressive. Surround it with playful white doodles including sparkles, stars, hearts, arrows, swirls, speech bubbles, and cute handwritten captions in a casual marker style. Include small accessories like a tiny crown, party hat, sunglasses, or cape to give the food a fun personality. Keep the original food photo realistic while layering clean, sketchy doodles on top. Use {argument name="accent colors" default="soft pastel accent colors"} (yellow, pink, mint, light blue) sparingly for highlights, maintaining a cozy, cheerful, Instagram-worthy aesthetic. The overall look should feel like a charming hand-illustrated journal page with a playful, heartwarming vibe, while preserving the food as the main focus.
```

## Cinematic Black and White Seashore Portrait

> Sinematik, retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Black and white cinematic photography: an {argument name="subject" default="elegant girl in profile"} on the {argument name="location" default="seashore"}, leaning her elbow on a stone parapet, holding a thin cigarette between her fingers. Sleek hair, open shoulders and long neck, expressive pose, delicate finger placement. {argument name="lighting" default="Soft side light"}, high contrast with film grain, blurred background — calm sea horizon. Vertical frame, medium shot, shallow depth of field, 50mm style, f/2.8; retro styling, monochrome palette, cinematic tone, light vignette, emphasized texture of skin and stone, atmospheric nostalgia and melancholy.
```

## Photorealistic Mirror Selfie of Two Women

> Fotogerçekçi, lüks mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Photorealistic mirror selfie of two beautiful women posing playfully together. The blonde woman in a {argument name="first woman outfit" default="light green open shirt and pants"} sticks her tongue out while holding a phone, and the brunette woman in a {argument name="second woman outfit" default="pink striped outfit"} laughs with one arm raised. Add small elegant 'Keor' embroidery on the border of their outfits. {argument name="interior" default="Luxurious wooden interior with mirrors, warm lighting"}, highly detailed skin, hair, and fabric textures
```

## Crystal Water Floating Aquarium Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{argument name="subject" default="A young man"} holds a transparent glass frame filled with crystal-clear water, where {argument name="details" default="vibrant blue fish gracefully swim like a floating aquarium"}. Extreme close-up, cinematic macro shot, ultra-realistic reflections, magical atmosphere, shallow depth of field, hyper-detailed, photorealistic, 8K masterpiece.
```

## Song-Inspired Image Prompt

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{argument name="song title" default="Whistle Down the Wind (Nick Heyward)"}
```

## Cinematic Photorealistic Morning Scene

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
An extremely photorealistic and cinematic 16:9 {argument name="scene" default="intimate morning scene"}, a top-quality image that maximizes the Nano Banana style.
```

## Leopard Selfie Street Market Portrait

> Logo üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A selfie-angle shot in 3:4 aspect ratio featuring the {argument name="reference person" default="woman from the reference image"}, maintaining her exact facial features, smooth dark hair parted in the middle, and thin round wire-frame glasses. She is standing next to a {argument name="animal species" default="large, regal leopard"} holding its paw forward as if it's taking the selfie. She is wearing {argument name="brand of streetwear" default="stylish black Nike athletic streetwear"}, including a black track jacket with white piping, a Nike swoosh logo, and a matching Nike headband. The background is a vibrant, colorful outdoor city street market with bright graffiti walls and colorful flower stalls, bathed in bright daylight.
```

## Candid Balcony Chore Snapshot

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A vertical, full-body side-profile casual snapshot of {argument name="subject name" default="[NAME]"} standing on her tiptoes on a narrow apartment balcony, reaching both hands upward to hang clothes on a blue plastic sock dryer hanging high above. She has her {argument name="hairstyle" default="hair styled in a high bun"} and looks back over her shoulder with a focused expression and a natural, makeup-free appearance. She has a slender, athletic build with defined arms and legs, and is {argument name="clothing details" default="dressed in a tight white tank top and light gray cotton athletic shorts with white trim"}, completely barefoot. On the balcony floor sits a white plastic laundry basket filled with clothes, and nearby, various white tops and pastel garments are already hanging on the line. The balcony features a glass and metal railing, white exterior walls, and an outdoor air conditioning unit. The scene is illuminated by the soft, natural light of an overcast day, creating subtle, gentle shadows for a serene and candid domestic mood. Shot at eye level with an old smartphone camera aesthetic, featuring light digital noise, minor compression, soft focus, and realistic snapshot colors. --ar 9:16
```

## Lilac Bouquet Sunset Aesthetic

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Pinterest aesthetic, photorealistic iPhone 17 Pro Max look.

Low-angle shot looking up: a {argument name="pose description" default="young woman stands with her back to the camera against a vibrant pink sunset sky with cumulus clouds; she turns around to look at the lens with a gentle smile"}, cradling a {argument name="flower bouquet" default="huge bouquet of purple lilacs"}.

Very long hair styled with a Dyson and curtain bangs; slight motion blur. Natural skin with a dewy glow—no "AI look": soft contouring, fox-eye lashes, highlighter, plump glossy lips, and laminated brows.

{argument name="outfit choice" default="White crop top and white denim shorts"}, milky-colored nails, and a small diamond stud earring. Soft natural light, calm pastel atmosphere.
```

## Leopard Selfie Streetwear Portrait

> Logo üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A selfie-angle shot in 3:4 aspect ratio featuring {argument name="subject" default="the woman from the reference image"}, maintaining her exact facial features, smooth dark hair parted in the middle, and thin round wire-frame glasses. She is standing next to {argument name="animal" default="a large, regal leopard"} holding its paw forward as if it's taking the selfie. She is wearing {argument name="outfit" default="stylish black Nike athletic streetwear"}, including a black track jacket with white piping, a Nike swoosh logo, and a matching Nike headband. The background is {argument name="location" default="a vibrant, colorful outdoor city street market with bright graffiti walls and colorful flower stalls"}, bathed in bright daylight.
```

## Serene Bedroom with Anime Wall Art

> Elle çizilmiş mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A candid, sun-drenched photograph captures {argument name="subject" default="a young woman"} peacefully sleeping on her side in a wooden-framed bed with linen bedding. A soft, warm, golden morning light streams in from a window to the right, casting long, defined shadows and highlights across the room and the duvet, creating a dreamy, cozy atmosphere. On the textured, beige wall directly behind the bed, {argument name="wall art" default="a large, black-ink anime-style sketch of a joyful, laughing woman"} is drawn. This sketch shows the woman with long, flowing hair, pointing down towards the sleeping figure with a wide-mouthed grin and closed eyes, accompanied by various hand-drawn elements: the word "haha" in a bubble, stars, hearts, and stylized steam puffs floating around her. The sleeping woman, with her dark hair loose on the pillow, is wearing {argument name="clothing" default="a white lace-trimmed camisole and dark blue capri pajama bottoms"}. The wooden headboard and a matching bedside table with a mug, book, and lamp are visible. The overall mood is a blend of playful artistry and quiet, serene rest.
```

## Summer Engawa Veranda Portrait

> Portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
参照画像の人物の無修正ドキュメンタリー風写真。85mm単焦点レンズ搭載のフルサイズデジタルカメラで撮影。年齢、性別、祖先、顔、髪、肌の色と質感、体型、身長の印象、プロポーションなど、あらゆる身体的特徴を参照画像からのみ忠実に推測・保持し、決して美化、年齢操作、整形、特徴の捏造を行わないこと。これは胴体全体に適用される。胸部やバストのサイズ、形状、位置、肩幅、肋骨、ウエスト、ヒップ、四肢の太さはすべて、参照画像に表示されている通りとする。胸部を拡大、縮小、リフトアップ、丸くするなどの変更を加えず、体のどの部分も細くしたり、長くしたり、理想化したりしない。参照画像が明白に成人を描いている場合にのみ、柔らかいネックラインとフィットしたショーツを使用し、そうでない場合は、ネックラインが鎖骨の位置にあるキャミソールと、同じ色と雰囲気のストレートカットの太もも丈のショーツを使用する。いずれの場合も、ショーツは完全に不透明で、下着が見えないようにする。シーン：7月下旬の古い日本家屋の木製縁側を庭から見た様子。風化した暗い色の木柱と紙の障子が背景を埋め、開いた戸口の向こうに薄暗い部屋が見える。軒先から被写体の横、頭の高さあたりに、短冊の付いた小さなガラスの風鈴が吊るされている。右下の床には、カットされたスイカが乗った白いエナメル盆の縁が入っている。左端には夏の緑が迫っている。床板は不均一に摩耗し、本物の木目や擦り傷がある。ポーズ：被写体は一段高い縁側の端に座り、カメラに対してきれいな横向きで、体の正面は庭の方を向いている。片方の膝を立てて素足を床に乗せ、もう片方の足は縁側から下に伸ばしている。被写体は片手にスイカの一片を持ち、顔の横から口元に運び、その肘は立てた膝の近くに置かれている。もう片方の腕は後ろに伸ばし、手のひらを腰の後ろの床に平らに押し付けているため、胴体は直立して開いた状態になり、胸の前を遮るものはない。視線はカメラから離れ、庭の向こうを向いている。表情は気だるげでポーズを取っておらず、撮影のために静止しているのではなく、一口食べている途中の瞬間を捉えたものである。服装：サンドアイボリーのコットンジャージー素材の、何度も洗濯された使い古された日常的なキャミソール。ニットは柔らかく少しへたっており、縁取りされたネックラインは元の張りを失い、作られた時よりも少し低く緩んでいる。細いストラップは着用により伸びており、ピンと張るのではなく緩んでいるが、両方とも肩に正しく留まっている。色は不均一に色あせ、裾はわずかにカールし、生地には夏の間ずっと家で着ていた衣服特有の定着したシワがある。完全に不透明で、構造やパッドはなく、成形やサポートも組み込まれていないため、単に参照の身体に従っている。スレートグレーのコットンリネンショーツも同様に使い古されて柔らかく、体にフィットしたカットで裾は太ももの高い位置にあり、リラックスしたドローストリングは結ばれずに残され、座ったことによる軽いシワがある。ヒーロービジュアル：木柱、障子のレール、風鈴の吊り紐など、フレーム内のすべての垂直線は完全に静止しており、風鈴の下の短冊だけが写真の中で揺れている唯一の要素で、垂直からわずかに外れてぶら下がっている。カメラとフレーミング：庭から座った時の肩の高さあたりで撮影されたミディアムショット。傾きのない水平な位置で、被写体の横顔に対して正対している。フレームは頭のすぐ上から太ももの中間までで、顔全体、両肩、胴体全体、ウエスト、座った腰、太ももの上半分がすべてはっきりと読み取れ、フレームを満たしている。膝下でクロップし、下脚と足は写さない。カメラを被写体の後ろに配置しないこと。胴体の前面と横顔の両方が読み取れなければならない。股の間をフレームに収めないこと。ライティング：自然光のみ。曇天の明るい真夏の正午。開けた庭からの柔らかく均一な日光、被写体の後ろで深い自然な陰影になる縁側の内部、芝生からの肌への涼しげな緑の反射光、木材からのわずかな暖かい反射光。スタジオライト、リムライト、人工的なフィルライトは使用しない。写真のリアリズム：全体を通して本物の光学挙動。f/2.8前後の適度な被写界深度で、背景の障子と緑は緩やかに柔らかく、顔に焦点を合わせる。軽微なレンズ周辺減光、最も明るいハイライト部分のかすかな色収差、影になった室内の自然なセンサーノイズ、ガラスの風鈴とエナメル盆のわずかにクリップされた鏡面ハイライト。肌のスムージング、エアブラシ、いかなる種類のレタッチも行わない。生地は本物の重力の下で本物のシワを持ってドレープする。コットンジャージーは、柔らかい折り目があり、パリッとした感じがなく、硬い構造を持たない、本物の着古されたニットのように振る舞う。フォーマット：3:4 縦長。レンダリングやイラストではなく、キャンディッド・フォト（スナップ写真）。CGIのような外観、プラスチックのような肌、HDRの輝き、デジタルシャープニングのハロー、ビューティーフィルターはなし。
```

## Lively Cafe Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
This vertical portrait captures a {argument name="subject" default="charming, handsome young man with wavy dark hair"}, laughing heartily while engaged in a lively conversation at a {argument name="setting" default="rustic, cozy cafe"}. He is dressed in a casual {argument name="clothing" default="olive green linen shirt"} and is seated at a worn wooden table, where a freshly brewed cup of coffee rests beside a notebook. The warm, inviting atmosphere is enhanced by soft ambient lighting, string lights glowing in the background, and the blurred silhouettes of other patrons, creating an authentic and candid sense of a relaxed afternoon spent with a friend.
```

## Woman with Soaring White Butterflies

> Sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A magical and lively shot of a young woman in an outfit , posing in the middle of {argument name="quantity" default="1000"} soaring {argument name="color" default="white"} butterflies. Her long hair is blowing beautifully from the wind, a soft smile. Flawless makeup. Light square manicure. Two butterflies are sitting on her head. One hand is gracefully raised up, a butterfly is also sitting on the tip of her fingers, a butterfly is on her open shoulder, eyes are closed, enjoying the moment, the other hand gently touches the neck. The action takes place in a field. Soft daylight, high detail of butterfly wings and dress texture, cinematic frame, 8k. hyperrealism
```

## Musical Concept Art Prompt

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{argument name="album title" default="Gentlemen Take Polaroids (Japan)"}
```

## Nighttime Beach Fashion Candid

> Fotogerçekçi moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Photorealistic nighttime lifestyle fashion photo of a {argument name="subject" default="woman"} on a {argument name="location" default="beach by the sea"}. Vertical composition, shot on a smartphone with flash, creating the effect of a spontaneous candid photo captured in motion. The woman is standing on dark sand near the shoreline during a {argument name="lighting" default="deep crimson sunset"}. In the background, the dark ocean, waves with white foam, and an almost black sky with faint crimson sunset highlights are visible. The atmosphere evokes a nighttime walk by the ocean, with a windy beach night aesthetic and the feeling of a genuine, unposed moment. The woman is captured in motion as strong wind dramatically blows her very long hair to one side, with strands partially covering her face. One hand is raised toward her face or hair as if she is brushing the hair away. Her pose is natural, dynamic, and slightly chaotic, like a random smartphone snapshot. Her face is partially blurred and obscured by her hair, making her expression barely visible while maintaining a stylish, effortless appearance. She is wearing a long black silhouette dress with thin shoulder straps, and she has an hourglass figure.
```

## Elegant Woman in Mediterranean Courtyard

> Sinematik, lüks mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
An elegant medium shot of a {argument name="subject" default="graceful young woman with long, cascading dark waves and a serene expression"}, standing in a {argument name="location" default="sunlit Mediterranean courtyard"}. She wears a {argument name="outfit" default="vibrant, high-necked yellow halter-style midi dress with a structured bodice and a flowing skirt"}, set against a rustic stone wall framed by blooming bougainvillea flowers. The scene is illuminated by soft, dappled sunlight filtering through overhead wooden beams, casting delicate shadows across the textured cobblestone pathway and highlighting the warm, cinematic atmosphere of the architectural backdrop.
```

## Creative Character in Pink Office

> Görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the {argument name="reference photo" default="reference photo"} to create a realistic female character, soft smile, with a fun and natural expression, without changing the facial structure or features, keeping it as realistic as possible.
Hair: Same as in the reference photo, with natural movement and shine.
Outfit: {argument name="outfit" default="Modern, stylish casual clothing"}.
Scene: Set in a {argument name="location" default="cute pink office"}, showing her being creative. Around her, include mini chibi versions of herself doing funny actions (drinking coffee from a cup, pulling her hair, making silly faces, lying on her stomach on the desk drawing in a notebook). Add doodles and emojis, and include a matching phrase.
Lighting & Format: Natural light, aspect ratio 1080:1350 (4:5).
```

## Editorial Hybrid Portrait Illustration

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-detailed editorial hybrid portrait illustration blending expressive oil painting, premium European graphic novel artistry, vintage editorial portraiture, hyper-realistic cinematic realism, and refined abstract mixed-media painting. The {argument name="subject" default="human figure (100% faithfully matching the attached subject)"} is rendered with luminous semi-realistic brushwork, controlled painterly realism, and elegant abstract deconstruction. The upper body features realistic painting with smooth tonal transitions, soft atmospheric highlights, and refined painterly modeling, seamlessly layered with ultra-fine clean monoline sketches, precise contour drawings, delicate ink structure, subtle cross-hatching, engraved pen textures, and refined tonal shading. The underlying linear construction remains clearly visible across the upper form before gradually dissolving into the lower body. The lower portion transitions organically into expressive overlapping abstract brushstrokes, transparent gestural paint layers, feathered dry-brush textures, soft impasto accents, stacked mixed-media pigments, and atmospheric painterly movement. Controlled deconstruction replaces rigid structure with fluid artistic energy while avoiding fractured textures, harsh geometric grids, or chaotic distortion. The composition balances meticulous realism with poetic abstraction, creating a sophisticated editorial fine-art aesthetic. Rich tactile surfaces combine layered oil pigments, organic brush textures, canvas grain, fine film grain, aged-paper undertones, matte painterly finishes, and naturally blended color transitions. Delicate painterly imperfections preserve the handcrafted character while maintaining gallery-quality refinement. Realistic skin textures, expressive eyes, naturally flowing hair, nuanced material rendering, and luminous facial modeling receive the highest level of detail, while surrounding elements remain increasingly loose and expressive. The background merges expressive editorial brushstrokes with classical European oil painting aesthetics, featuring layered atmospheric depth, painterly abstraction, and refined negative space. Bold energy accents of solid crimson red, deep black, charcoal gray, and muted ivory interact harmoniously with timeless cinematic colors including pale blue, faded olive green, warm beige, ivory, soft peach skin tones, muted reds, cool grays, gentle sepia undertones, and subtly desaturated earth pigments. Colors appear richly hand-painted with slightly aged editorial elegance while preserving contemporary sophistication. Lighting is soft, cinematic, and atmospheric, featuring warm ambient illumination, delicate facial shadows, subtle reflected light, luminous skin rendering, and carefully balanced highlights. Smooth tonal gradients produce elegant depth and dimensionality without excessive contrast, reinforcing a calm yet emotionally powerful visual rhythm.
```

## Kitchen Scene Grating Tororo

> Minimal görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A clean kitchen with natural light, {argument name="action" default="using a mortar to smoothly grate tororo"}
```

## Luxury Limousine Backseat Relaxation

> Lüks mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create an image shows a man (uploaded photo for facial including sunglasses) reference relaxing in the luxurious backseat of a car, likely a high-end limousine. The man uploaded photo, who appears wearing sunglasses, is reclining comfortably, suggesting he is asleep or resting. He is wearing {argument name="attire" default="black thobe, jambiya dagger and shawl around his sholders with black short socks and shoes"}. He has several bracelets on his left wrist and rings on his fingers. A phone or small object is resting near his right hand on the center console. The interior of the car is richly appointed, featuring {argument name="interior" default="white leather seats and wood trim"}. The most striking feature of the interior is the "starlight" headliner, which uses many small fiber optic lights to create the illusion of a starry night sky on the ceiling. A control panel with various buttons and dials, possibly for climate control, seating adjustments, or entertainment, is visible on the center console next to the man. The overall impression is one of comfort, luxury, and private travel.
```

## Candid Golden Hour Braid Portrait

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic candid outdoor portrait of a beautiful young woman standing under a clear, vibrant blue sky during bright golden-hour sunlight. She has {argument name="hair style" default="long, silky jet-black hair styled in a loose side braid draped over one shoulder"}, soft wispy bangs framing her face, luminous fair skin with a natural sun-kissed glow, delicate rosy cheeks, naturally full pink lips, and almond-shaped dark brown eyes with a gentle, relaxed expression. She is slightly smiling while looking directly at the camera.
She raises one arm across her forehead to shield her eyes from the bright sunlight, creating soft natural shadows across her face and adding an authentic candid feel. Tiny water droplets glisten on her forearm, catching the warm sunlight.
She wears a {argument name="outfit" default="modest black long-sleeve floral midi dress decorated with small white, pink, and red blossoms, featuring elegant white lace trim along the bodice, sleeves, and cuffs"}. A delicate silver necklace and minimalist dangling earrings complete the look.
The background features a {argument name="setting" default="rustic countryside setting with dry golden grass, simple wooden fencing, corrugated metal panels, and open land stretching into the distance beneath a cloudless deep-blue sky"}. Strong natural sunlight casts crisp shadows, emphasizing the warm rural atmosphere.
Composition: vertical 3:4 portrait, waist-up framing, centered subject with generous negative space above, natural candid pose, shallow depth of field, soft background blur, realistic skin texture, authentic smartphone photography, HDR, ultra-detailed, cinematic color grading, high dynamic range, sharp focus on the face, 85mm lens look, f/2.0 aperture, 8K resolution, photorealistic, editorial lifestyle photography, clean composition, natural lighting, premium Instagram aesthetic.
```

## Golden Sunset Beach Moments

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A sun-kissed woman with long, wavy {argument name="hair color" default="blonde"} hair stands gracefully on a sandy beach during a warm golden hour sunset. She wears a classic straw hat and an {argument name="dress" default="off-the-shoulder rust-orange dress adorned with delicate blue embroidery"}. In one pose, she gently adjusts the brim of her hat while looking softly toward the camera with a serene smile. In the companion pose, she sits by the shore, holding a small colorful shell in her hands against the glowing twilight horizon. The background features a vibrant pastel sky fading into dusk, gentle ocean waves rolling onto the sand, and distant tropical palm silhouettes framing the tranquil coastal escape.
```

## Glitch Art Song Thrush

> Sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Exploding {argument name="subject" default="Song Thrush"} with regression degradation glitch distortion digital decay and broken fragmented pixels, white background, cinematic --ar 16:9 --raw --stylize 300 --hd --preview --v 8.1
```

## Candid Smartphone Café Portrait

> Fotogerçekçi, minimal mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic smartphone photo of a {argument name="subject" default="beautiful young Japanese woman"} with smooth porcelain skin, soft natural facial features, large warm brown eyes, glossy pink lips, and long silky dark brown hair worn naturally loose. She is sitting in a {argument name="location" default="cozy modern café"}, resting her chin on one hand while smiling gently at the camera. She wears a sleeveless cream knit top, a cream scrunchie, and delicate green jade bead bracelets, creating a simple yet elegant everyday look. A cold iced drink with a straw sits on the wooden table beside a smartphone, while the softly blurred café interior with warm lighting, exposed ceiling beams, and customers chatting naturally fills the background. The image is framed as a casual close-up portrait, as if a friend quickly captured the moment using a modern flagship smartphone. Realistic indoor lighting, authentic skin texture, subtle HDR, slight handheld imperfections, natural sensor noise, balanced exposure, mild computational photography, and gentle front-camera softness. No DSLR look, no studio lighting, no beauty filters, no artificial bokeh, and no AI-perfect sharpness—just a genuine candid mobile phone photo with an authentic social media aesthetic, ultra-photorealistic, 3:4 aspect ratio.
```

## Modern Bedroom Mirror Selfie Portrait

> Minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{ "type": "image_prompt", "version": "2.0", "content": { "subject": { "identity": "{argument name="identity" default="[NAME]"}", "appearance": { "hair": { "length": "Long hair", "style": "Partially tied into a messy bun on the right side, with the remaining hair left loose.", "accessories": [ "Small skull-shaped hair clip on the left side" ] }, "expression": { "facial_expression": "Calm and neutral", "gaze": "Looking toward the mirror" }, "skin": { "texture": "Naturally smooth", "finish": "Soft radiant glow with a subtle hydrated appearance" }, "accessories": { "earrings": "Long dangling turquoise star-shaped earrings" } } }, "clothing": { "top": { "type": "White cropped sweater", "fit": "Loose fit", "sleeves": "Long sleeves", "neckline": "Off-the-shoulder", "details": [ "Black ribbon tied into a bow at the center of the chest" ] }, "bottom": { "type": "Dark navy blue athletic lycra shorts", "details": [ "White trim", "White drawstring tied at the waist" ] } }, "pose": { "composition": "Standing mirror selfie", "body_position": "Facing the mirror", "right_arm": "Raised behind the head with the elbow bent upward", "left_hand": "Holding a black iPhone in front of the face while taking the photo" }, "environment": { "location": "Clean, bright bedroom", "viewpoint": "Seen through the reflection of a vertical rectangular mirror", "background": { "bed": "Neatly made bed with a white comforter", "window": "Window with turquoise-blue curtains", "furniture": [ "Wooden bedside table" ], "decor": [ "Small green potted plants" ] } }, "objects": [ "Black iPhone with a minimalist matte case", "Small skull-shaped hair clip", "Long turquoise star-shaped earrings", "Potted plants", "Vertical rectangular mirror" ], "lighting": { "type": "Bright indoor lighting", "sources": [ "Ceiling light", "Side window" ], "effect": "Soft, even illumination with gentle skin highlights and a naturally well-lit background" }, "style": { "mood": "Casual, relaxed, modern lifestyle aesthetic", "genre": "Contemporary social media photography" }, "camera": { "device": "iPhone", "shot_type": "Eye-level medium shot", "composition": "Vertical mirror reflection", "framing": "Balanced and centered", "focus": "Sharp focus", "depth_of_field": "Natural", "
```

## Coastal Wind-Blown Portrait

> Manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Aesthetic lifestyle portrait of young East Asian woman with short black bob haircut with blunt bangs, strong ocean breeze dramatically blowing all hair across face completely concealing the eyes creating a mysterious faceless aesthetic, lips and nose barely visible through wind-blown strands, wearing oversized soft cream knit cardigan over delicate white ruffle camisole top, layered gold chain necklaces of varying lengths with small pendant charms, multiple silver rings on fingers, holding woven round straw bag in front of chest, deep vivid blue ocean and clear blue sky filling background, soft warm golden-hour color grade on skin and cream tones, distant mountain or island silhouette barely visible on horizon, shallow depth of field, tight crop from waist up, vertical 4:5 composition, Xiaohongshu aesthetic coastal lifestyle photography --ar 4:5 --v 6 Lifestyle portrait cropped chest-up, woman with black bob hair blown across face, layered gold chain necklaces with small pendants clearly visible against cream ruffle camisole, multiple silver rings on fingers holding straw bag strap, soft cream cardigan, deep blue ocean background, warm golden light, shallow depth of field, vertical 4:5 --ar 4:5 --v 6 Extreme close-up lifestyle portrait, short black bob hair strands blown dramatically across the face by ocean breeze, only soft lips and tip of nose visible between the hair strands, gold chain necklace glinting at collarbone, cream fabric visible at shoulder, deep blue sky and ocean blurred in background, warm golden light catching individual hair strands, ultra shallow depth of field, vertical 4:5 --ar 4:5 --v 6
```

## Grass Tennis Court Fashion Shot

> Moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A {argument name="subject" default="young woman with long blonde hair"} stands on a {argument name="environment" default="grass tennis court"} leaning against the net while holding a racket. Subject: A fair-skinned woman with long wavy blonde hair and blue eyes wearing a white visor. Clothing: She wears a {argument name="outfit" default="pink ribbed halter crop top, a white pleated tennis skirt, a white wristband, and white high-heeled pumps"}. Action: She leans forward resting her left hand on the net tape while holding a blue and black tennis racket in her right hand near her thigh, looking directly at the camera with a neutral expression. Lighting: Bright natural sunlight casting distinct shadows on the grass, creating a high-contrast outdoor look.
```

## Candid Film Grain Portrait Collage

> Minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the exact same face from the reference image and generate a 4-grid casual portrait collage — the energy of real candid moments captured in a single room, film grain aesthetic, completely unforced and human. Same simple setting across all four frames — a warm neutral textured wall in the background, a grid of small polaroid photos pinned casually to the wall behind her, soft warm practical room lighting, the same black oversized crew neck t-shirt throughout. Everything consistent, everything real. Each grid a completely different expression and pose — all natural, none performed: **Top left** — big genuine open smile, full teeth, eyes completely alive and crinkled, head slightly forward, pure unfiltered joy radiating. **Top right** — one hand raised loosely near the chin or cheek, body at a subtle angle, expression soft and thoughtful, lips slightly parted, eyes holding a quiet calm intensity. **Bottom left** — pure side profile, face turned completely away from camera, just the profile of the nose lips and jaw visible, hair falling naturally, expression neutral and clean. **Bottom right** — both hands raised in a casual playful shrug, a scrunched nose smile, eyes half closed in laughter, the most unguarded and silly expression of the four. Film grain heavy and analog throughout all four frames — warm tones, slightly underexposed feel, the specific look of a 35mm point and shoot camera. Consistent lighting and color across all four. Polaroid grid on the wall visible and slightly out of focus in each frame. Natural hair loose and real in every shot. Color grading warm and vintage — muted tones, lifted shadows, the exact aesthetic of the reference. "{argument name="watermark" default="OzairAI"}" subtly in the lower-right corner of the full grid. Square 1:1 overall grid format. Ultra photorealistic, 8K — four moments, one person, infinite personality.
```

## Handcrafted Embroidery Textile Effect

> Fotogerçekçi, lüks illüstrasyon üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the uploaded photo as the exact reference for the composition, pose, facial expressions, framing, camera angle, and overall arrangement. Preserve the couple's identity, clothing, hairstyle, and background placement exactly, but transform the entire image into a {argument name="art style" default="luxurious handcrafted embroidery artwork"}. Every visible element—including skin, hair, clothing, smartphone, sky, clouds, trees, and background—must be recreated entirely from {argument name="material" default="thick yarn, woven fibers, dense stitches, punch-needle embroidery, tufted textile, and layered thread loops"}. Create rich {argument name="texture" default="volumetric thread textures"} with highly detailed embroidery contours, visible fabric grain, soft wool fibers, knitted surfaces, and handcrafted textile depth. Use realistic color matching while maintaining a warm, cozy, artisan aesthetic with subtle muted tones. The artwork should resemble a premium museum-quality embroidered tapestry with intricate stitch direction, raised thread relief, and tactile fabric realism. Add a small rounded-corner inset photo in the bottom-right corner showing the original reference image exactly as uploaded, creating a clear before-and-after comparison. Ultra-detailed, handcrafted textile illustration, premium embroidery art, photorealistic thread detail, highly tactile surface, masterpiece quality, 8K.
```

## Cinematic Rainy Biker Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create an ultra-realistic cinematic biker portrait with the exact composition, pose, and moody rainy street atmosphere of the reference image. A {argument name="subject" default="young South Indian boy"} leans casually against a {argument name="motorcycle" default="matte black Yamaha sport motorcycle"} parked on a wet road. He stands slightly left-center with one leg crossed naturally and one hand resting near his pocket while looking sideways. He wears {argument name="clothing" default="an oversized royall white full hand shirt with bold white, loose faded grey baggy pants, white chunky sneakers, and a smartwatch on his wrist"}. He has ginal curly voluminous black hairstyle the motoreycle has an aggressive modern design with sharp LED headlights glowing red, glossy rain droplets over the body, and striking bright red alloy wheels. Behind him is a dark stone wall with a lush Glowering tree full of green leaves and dense white blossoms hanging above, creating a dreamy nature contrast. Wet asphalt road with soft reflections and a few fallen white petals near the bike. Shallow depth of field,
```

## Cinematic Airport Runway Giantess Portrait

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic IMAX-level Netflix-style cinematic surreal airport giantess portrait, 4:5 vertical composition, use the uploaded image as the primary facial reference with maximum face consistency and exact facial identity preservation, create a beautiful {argument name="subject description" default="young adult woman"} appearing as a giant figure lying playfully across a massive airport runway and terminal apron at golden hour, captured in a dramatic wide cinematic perspective that emphasizes her enormous scale compared to the real airplanes, airport vehicles and terminal buildings around her, her body stretched comfortably across the tarmac in a relaxed pose, one arm folded beneath her and the other hand holding a small airplane model near the camera, her facial expression warm, cheerful and softly playful with bright eyes, relaxed brows and a gentle smiling face, her luminous fair porcelain milky-white skin rendered with an ultra-smooth clean texture, soft natural pink freshness and perfect even face-to-body skin tone consistency, her long dark-brown hair flowing naturally around her shoulders with soft smooth volume, wearing a stylish {argument name="clothing type" default="check-pattern shirt"} in a {argument name="outfit colors" default="red, soft blue and white"} color combination, the checks looking attractive, balanced and clearly visible, paired with fitted grey cargo-style pants and casual sneakers, background featuring a realistic international airport environment with parked commercial aircraft, taxiways, gates, service vehicles, runway markings, terminal structures, a control tower and a distant city skyline, lighting warm and cinematic with beautiful sunset glow falling across her face, hair, clothes and the airport surface, creating soft highlights, long shadows and a premium dreamy atmosphere, emphasize the surreal scale contrast between the girl and the airplanes while keeping the scene photorealistic and visually believable, ultra-rich color grading with warm amber sunset tones, cool airport greys, soft blue accents and premium cinematic depth, HDR lighting, global illumination, shallow depth of field, photorealistic detailing, masterpiece quality, 8K production detail.
```

## Golden Hour Cafe Cinematic Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic portrait of a {argument name="subject" default="young woman"} sitting in a {argument name="location" default="cozy café"} at {argument name="time" default="golden hour"}, looking back over her shoulder toward the camera. Long dark hair with soft wispy bangs gently blown across her face, natural makeup, calm and melancholic expression. Warm sunset backlighting pouring through a large window, creating a glowing halo around her hair. Dreamy nostalgic atmosphere, soft haze, creamy bokeh, shallow depth of field, warm amber and brown color grading, subtle film grain, vintage film photography, Kodak Portra 400 aesthetic, soft focus, realistic skin texture, intimate composition, 50mm lens, f/1.4, photorealistic, ultra-detailed, cinematic lighting, moody, high quality.
```

## Moody Direct Flash Club Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A {argument name="subject" default="handsome young man with subtly wavy, matte brown hair"}, light stubble, and a calm, observant gaze looks off-camera to the right. He wears a {argument name="outfit" default="tailored black blazer over a light beige knit polo"}, his posture relaxed with his right hand resting near a gold watch on his wrist. In the foreground, a glossy table holds a gold-rimmed coffee cup, leading to a midground of dark seating and warm, pleated table lamps. The background is defined by a {argument name="background" default="large classical Renaissance mural of draped figures"} and a glowing amber wall sconce. The scene features moody, low-key lighting with a direct frontal flash that casts sharp shadows behind him and bright highlights on his skin and watch, dominated by deep blacks and warm ambers for a sophisticated, exclusive club atmosphere. The image is captured with a raw 35mm direct-flash aesthetic, exhibiting high contrast, deep shadows, natural film grain, and rich saturation, framed in a 3:4 aspect ratio.
```

## Layered Iced Latte Character Art

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{argument name="name" default="Yui"} attempting to make a beautifully layered iced latte at a cafe
```

## Wicker Chair Evening Portrait

> Lüks yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A young woman with fair skin and striking blue eyes sits gracefully on a large woven wicker chair placed on a wooden deck at night. She has long, {argument name="hair color" default="vibrant reddish-orange"} hair styled in a high ponytail with loose strands framing her face. She wears a sleeveless {argument name="dress color" default="emerald green"} dress that falls modestly to mid-thigh. One of her hands rests gently on top of her head while the other hand rests lightly on her knee, and she gazes directly toward the viewer with a neutral expression. The background features lush tropical plants, palm-like foliage, and several warm glowing lanterns providing soft ambient lighting. The scene is set outdoors on a patio or deck with wooden planks visible underfoot, creating a serene evening atmosphere with natural greenery and gentle illumination.
```

## Norway-Inspired Sporty Mirror Selfie

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A stylish athletic couple taking a mirror selfie in a {argument name="setting" default="futuristic infinity mirror room with glowing icy white LED light frames"}. The woman as in image stands in front holding a smartphone with a red, white, and blue Nordic flag-themed case, wearing a {argument name="outfit woman" default="cropped Norway-inspired football jersey featuring a bold cross design, red jogger pants"}, subtle gold jewelry, long dark glossy hair, glamorous makeup, and a confident smile. The tall athletic man stands behind her with one hand around her waist, wearing a {argument name="outfit man" default="matching Norway-inspired football jersey, red athletic shorts, navy knee-high socks"}, slicked-back blond hair, and a relaxed smile. The room is surrounded by reflective mirrors creating endless geometric reflections of the LED lights. A ray of sunlight passing through gives unique best looks there. Ultra-realistic photography, luxury sportswear aesthetic, vibrant red tones, cinematic lighting, symmetrical composition, highly detailed skin, sharp focus, 8K, premium fashion editorial, photorealistic, Instagram luxury lifestyle vibe.
```

## Paparazzi Style Fashion Photography

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Paparazzi-style extreme close-up photo of a {argument name="subject" default="woman with striking facial features"}, caught off-guard while turning toward the camera. Face and shoulders only, shot from a low angle. Strong harsh on-camera flash, grainy high-ISO, raw candid street-photography feel. Background shows a {argument name="location" default="crowded scene with motion blur (Paris Fashion Week atmosphere)"}. Intense, spontaneous energy, imperfect and real. She is wearing a {argument name="clothing" default="school uniform"}. Ultra-realistic, cinematic realism, high detail skin texture, slight lens distortion.

Camera style: “35mm paparazzi lens, f/2.8, flash blown highlights”
Look: “2000s tabloid photo aesthetic”
Quality: “sharp focus on face, background heavily blurred and streaked”
```

## Mixed Reality Street Portrait

> Minimal, retro moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Transform the uploaded image into an ultra-high-resolution mixed-reality street portrait. A {argument name="subject" default="young woman"} (same face as the uploaded image) sits on {argument name="setting" default="urban steps"} beside her cartoon illustrated twin. The setting is outdoors against a textured concrete wall with a tall window reflecting trees and soft indoor light. Worn steps with chipped paint add realism.
The real woman wears relaxed {argument name="style" default="Y2K-inspired streetwear"}:an oversized cropped hoodie, baggy dark jeans, chunky sneakers, and a beanie. She sits casually with one knee raised, looking slightly away with a calm, confident expression.
Her illustrated counterpart mirrors her pose, outfit, and proportions exactly, drawn in a bold flat graphic style with thick black outlines and vibrant colors.The cartoon arm aligns with the real arm, creating a playful interaction. Natural daylight lights both figures evenly, blending realistic textures with clean cartoon shading for a cool, nostalgic, creative mixed-media look.
```

## Starbucks Tanabata Celebration

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
July 7th {argument name="event" default="Tanabata"}
At Starbucks
Ordering a Venti {argument name="drink" default="Matcha Cream Frappuccino"}
```

## 1940s Film Noir Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Seated portrait of {argument name="subject" default="a woman"} in a dim, smoke-filled room, dark hair slicked back, {argument name="accessory" default="black cat-eye sunglasses"} reflecting a sliver of window light. She rests her chin on one hand, elbow on a table, {argument name="clothing" default="black turtleneck"} visible. Venetian blind shadows cast across her face and the wall behind her. Black and white, 1940s film noir aesthetic, heavy grain, Kodak Tri-X film stock look, high contrast.
```

## Surreal Minimalist Leaf Portrait

> Fotogerçekçi, minimal 3B sahne üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Surreal minimalist digital art, extreme close-up side profile of {argument name="face color" default="porcelain-white"} female face, only nose, {argument name="lip style" default="vivid glossy red"} lips slightly parted showing teeth, and chin visible, large single {argument name="leaf color" default="deep blue"} leaf with ultra-detailed vein network texture overlapping and merging with the left half of the face covering the eye and cheek area, leaf spine aligned vertically with the facial profile, hyper-realistic macro leaf texture with intricate branching vein detail, monochrome white background, sharp contrast between vivid red lips and cool blue leaf, soft diffused studio lighting, 3D render quality, vertical 4:5 composition --ar 4:5 --v 6
```

## 2004 Digital Camera Flash Aesthetic

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A completely ordinary everyday photo taken by accident with a {argument name="camera type" default="cheap 2004 pocket digital camera"}, forced flash on. A young {argument name="subject" default="Indonesian woman"} in light blue surgical scrubs sits slumped on a worn plastic chair in a dimly lit hospital break room. She holds a steaming paper cup of cheap coffee in one hand, her other hand rubbing her tired eyes. Her surgical mask is pulled down under her chin. Her expression is one of {argument name="emotion" default="pure, exhausted relief"}—a faint, weary smile. Realistic skin: visible pores on her nose, slight dark circles under her eyes, a faint red mark on her cheek from the mask, no beauty filter. The background is a soft blur of a vending machine, a microwave covered in sticky notes, and a wilting potted plant. Harsh fluorescent overhead light casts deep, ugly shadows. Heavy grain, slight chromatic aberration, sickly greenish-yellow tint. A stray cat tail curls around the leg of the chair at the bottom left corner.
dutch angle, stray cat tail --ar 9:16
```

## Coastal Vacation Lifestyle Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{argument name="subject" default="A young adult male"} sits centered facing the camera, radiating a genuine, happy emotion with a broad open smile, relaxed eyes, and relaxed eyebrows. He has short faded hair and wears an {argument name="outfit" default="open cream-white linen shirt with natural fabric folds"}. His relaxed posture features centered weight distribution and eased shoulders, with his hands organically clasped at his waist resting on his lap, his left fingers interlaced and his right thumb hooked casually over his left hand. He sits in the foreground on a pristine, perfectly smooth, matte off-white plaster ledge above a solid white concrete floor. Behind him, the midground opens into a deep spatial expanse of dark ocean water reflecting the luminous horizon light. The {argument name="background" default="blurred background features a vibrant orange sunset breaking across a deep navy blue sky, dotted with distant city lights, pier structures, and the dark silhouettes of thriving palm trees on the right"}. The scene is bathed in a warm, cheerful, and highly saturated complementary color palette, capturing a relaxed evening coastal vacation vibe. The lighting is a dramatic mix of intense, hard direct front flash and the warm golden backlight of the setting sun, creating a high-contrast aesthetic without ambient fill. Deep black shadows with harsh, defined edges fall under his chin, beneath his hands, and behind his legs, while brilliant, preserved specular highlights accentuate his forehead, his nose, and the natural texture of his shirt. Captured straight-on as a realistic digital lifestyle travel photograph with tack sharp focus on the subject and a medium depth of field, the image features an authentic digital noise grain, simulated camera settings of f/4.0 at 1/60s and ISO 800 with direct flash fill, enhanced by a post-processing contrast boost and warm white balance, naturally framed in a 2:3 aspect ratio.
```

## Autumn Park Bench Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A photorealistic full-body portrait of a beautiful young woman sitting on a {argument name="setting" default="dark green park bench in an autumn park with trees and fallen leaves"}. She has fair skin, striking green eyes, and dark brown hair styled in a messy bun with soft strands falling around her face. She is smiling gently at the camera.

She is wearing a {argument name="outfit" default="pale yellow button-up linen shirt with sleeves rolled up to her elbows, black wide-leg trousers, and black-and-white sneakers"}. One hand is resting naturally on the bench beside her, and the other hand is placed elegantly on her lap/thigh. Her legs are crossed casually in a relaxed and stylish sitting pose.

Keep the exact same face from the reference portrait with no changes to facial features, expression, or makeup. Natural soft daylight lighting, highly detailed, cinematic composition, 9:16 vertical aspect ratio.
```

## Grocery Store Aisle Lifestyle Photography

> Minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Realistic lifestyle photography, high-angle and eye-level shots. A {argument name="character" default="character is squatting in a grocery store aisle, looking toward the camera while holding snack items"}. The character is dressed in a {argument name="outfit" default="black tank top and wide-leg denim pants"}. The {argument name="setting" default="setting is a detailed convenience store environment with bright fluorescent lighting"}, rows of colorful snack bags, instant noodle cups on shelves, and an orange shopping cart next to them. Highly detailed, clean aesthetic, candid composition.
```

## Surreal Giant Woman in Venice

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A surreal {argument name="subject" default="giant woman"} sitting gracefully in the middle of {argument name="location" default="Venice's Piazza San Marco"}, wearing an {argument name="outfit" default="elegant black outfit and sunglasses"}, smiling softly while tourists gather around taking photos with their phones. Cinematic lighting, realistic architecture, dramatic scale contrast, ultra-detailed, photorealistic, travel photography, vibrant sky, natural shadows, high realism, 8K.
```

## High-Contrast Monochrome Portrait Sketch

> Minimal, elle çizilmiş moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Medium & Style: High-contrast monochrome grayscale {argument name="medium" default="graphite sketch"} combined with a subtle realistic skin tint. Blends refined academic portraiture with dynamic fashion illustration.
Linework & Structure: Clean yet energetic hand-drawn pencil strokes with visible construction lines, loose geometric guidelines, overlapping angular sketch marks, and intentionally unfinished, raw edges. Strong line-weight variation and crisp facial features.
Shading & Texture: Soft graphite blending, delicate cross-hatching, feathered shading, and layered tonal rendering on a warm off-white drawing paper with a natural paper grain and visible graphite texture.
Color Accent: The realistic skin receives a gentle, natural {argument name="skin tint" default="peach-beige"} tint, echoing the warm, sun-kissed lighting of object. while the rest of the artwork remains strictly grayscale graphite.
Hair & Background: Hair is rendered with sculptural, faceted pencil shapes, sharp planes, and flowing sketch lines. The background is minimal, featuring faint perspective guides and an abstract geometric framework.
Lighting: High-contrast directional lighting with deep graphite shadows and bright paper highlights, replicating the dramatic shadow cutting across the face from object.
Aesthetic: Premium traditional sketchbook aesthetic, elegant, raw, artistic, highly detailed, museum-quality concept art.
A 9:16.
```

## Golden Hour Outdoor Market

> Fotogerçekçi görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{argument name="scene" default="Busy outdoor street market"} at {argument name="time of day" default="golden hour"}, dozens of vendors and colorful fabrics, complex occlusions and overlapping people, realistic shadows and reflections, high dynamic range, {argument name="aspect ratio" default="16:9"}, photorealistic
```

## Whimsical Folk Art Illustration

> Minimal illüstrasyon üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Transform the uploaded photo into a {argument name="illustration style" default="whimsical folk flat illustration"} with doodle elements. Preserve the original composition and characters, but simplify all details into clean colorful flat shapes with a handmade childlike feel. Use {argument name="color scheme" default="pastel and vibrant colors"}, rosy cheeks, playful line art, cute decorative symbols, flowers, birds, swirls, and {argument name="background details" default="cozy urban background details"}.
```

## Night Festival Lantern Street

> Manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
masterpiece, realistic photo, {argument name="subject" default="landscape"}, {argument name="scene" default="Empty festival street"}, {argument name="lighting" default="paper lanterns"}, wet pavement, night glow, wide lens
```

## Luxury Staircase Lifestyle Photography

> Lüks moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": {
    "setting": "modern indoor staircase",
    "background": "luxury staircase with glass railing and metal handrail, illuminated steps with warm embedded lighting, polished stone surfaces, dim ambient interior",
    "lighting": "warm artificial step lighting from below creating upward glow, soft shadows, slight specular highlights on skin and dress, low ambient light with focused illumination"
  },
  "subject": {
    "type": "female",
    "pose": "seated on staircase with legs extended toward camera, feet closest to lens, ankles slightly crossed, torso leaning back supported by one arm, other hand holding small handbag, body aligned along staircase with strong perspective from feet to head",
    "expression": "playful expression with one eye closed (winking) and lips slightly puckered, relaxed facial muscles",
    "face": "Use uploaded reference image, keep identity exact, natural facial proportions, slightly flushed cheeks, realistic skin texture with visible pores and subtle imperfections, soft highlight on cheekbones",
    "hair": "Use uploaded reference image, keep identity exact, long blonde wavy hair, center part, soft loose waves cascading over shoulders with natural volume and slight frizz strands",
    "eyes": "Use uploaded reference image, keep identity exact, one eye closed in wink, other eye open with natural reflection from lighting",
    "skin": "light skin tone with warm highlights from step lighting, realistic texture, subtle sheen and natural imperfections"
  },
  "clothing": {
    "outfit": "white off-shoulder bodycon mini dress, ruched fabric with stretch, fitted silhouette, soft folds and compression around waist and hips",
    "accessories": "small metallic gold handbag, gold strappy high heels, minimal gold jewelry including bracelet and necklace"
  },
  "environment_details": {
    "props": "illuminated staircase, glass railing, metal handrail, small handbag",
    "textures": "smooth stone steps, reflective glass panels, metallic surfaces, ruched fabric texture, realistic skin and hair detail"
  },
  "camera": {
    "angle": "extreme low angle close-up from feet level pointing upward toward subject",
    "framing": "close-up foreground focus on feet and heels, legs leading into mid-body and face in upper frame with strong depth perspective",
    "focus": "sharp focus on feet and heels in foreground, gradual falloff toward upper body with slight background blur",
    "lens": "smartphone camera perspective with noticeable wide-angle distortion exaggerating scale from feet to head"
  },
  "style": {
    "realism": "ultra realistic lifestyle photography",
    "color_tone": "warm golden tones from artificial lighting with neutral balance",
    "effects": "subtle depth of field, realistic lighting falloff, slight glow from step lights",
    "details": "high detail textures, natural imperfections preserved, no beautification"
  }
}
```

## Cinematic Sports Documentary Key Art

> Sinematik, lüks portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
do this for {argument name="event" default="Argentina World Cup 2026"}, void main() { string player = "{argument name="player" default="[PLAYER]"}"; string team = "{argument name="team" default="[TEAM]"}"; // --- The series (infer the arc to dramatize) --- Arc a = infer_career_drama(player); // the prodigy years / the exile / the comeback - pick the prestige angle tone(restrained, moody, character_first); // NOT loud - quiet and heavy // --- Key art composition --- portrait(infer_player_persona(player), contemplative, half_shadow); environment(symbolic_setting(a), atmospheric, shallow_focus); // empty stadium / tunnel / rain on glass grade(infer_team_colors(team), desaturated_prestige, single_accent); // --- Streaming furniture (flat overlay) --- title(invent_series_title(player), elegant_serif_or_thin_sans, centered); tagline(invent_logline(player), small, below_title); platform_mark("LIMITED SERIES", "NOW STREAMING", micro_caps, corner); laurels(invent_critic_pullquotes(), thin); render(cinematic_still, film_grain: fine, premium_negative_space); }
```

## Matrix Identity Swap Portrait

> Portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Can you convert this man to be seated in a {argument name="furniture" default="grand, ornate armchair"}, dark in color. He's dressed in a {argument name="outfit" default="dark trench coat, a crisp suit"}, and using distinctive round sunglasses, which add to an enigmatic aura. The posture should be composed and intentional, with his hands extended to offer a {argument name="pill choice" default="red and a blue pill"}. The background is dark, almost sterile room, but visually dominated by the cascading green digital code that symbolizes a simulated reality. This code flows down walls or appears as if projected, creating a sense of being within a computer program. The lighting in this scene is dramatic, casting shadows that emphasize the gravity of the choice being made. [Identity Reference: Attached Photo] Replicate the subject's exact face, hair, and skin tone with 100% accuracy. Do not stylize.
```

## Ermine in a Japanese Tea Room

> Yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
An {argument name="animal" default="ermine"} looking at the steam from {argument name="beverage" default="tea"} in a {argument name="location" default="quiet Japanese-style room"}
```

## Dreamy Woman in Wildflower Field

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A portrait of a young woman with her hair in a bun, wearing a {argument name="sweater color" default="light blue"} sweater with a {argument name="pattern" default="cloud pattern"} and light-wash jeans, sitting in a large field of {argument name="flower type" default="daisies"}. In the foreground, there is a prominent, significantly smaller white daisy with a yellow center, which is in crisp focus. In her lap, she gently holds a similarly small, clear-focus daisy in her hand. The background is a dense field of smaller yellow wildflowers. The sky is bright with prominent cumulus clouds. The lighting is soft and natural. The style is that of a photorealistic cinematic shot.
```

## Panoramic Coastal Cliff Landscape

> Manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
masterpiece, realistic photo, landscape, {argument name="subject" default="Panoramic cliffs"}, crashing {argument name="water" default="turquoise waves"}, pine silhouettes, {argument name="sky" default="stormy clouds"}, rugged coast
```

## Consistent Child Portrait Photo Grid

> Minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
create a {argument name="layout" default="2x2 photo grid"} (four photos) showing a cohesive photoshoot of the same {argument name="subject" default="child"}, using the boy's face from the attached reference photo as the identity source, so the system must take the child's appearance directly from the attached reference image and preserve the same facial features, face geometry, hairstyle, and overall look. remove all scratches or marks from the boy's face, keeping the skin clean and natural while maintaining realistic skin texture, the clothing and appearance must remain exactly the same as in the attached reference photo, with no changes to outfit, colors, or styling, the boy should have a confident, playful expression with a stylish slightly cheeky "cool kid" vibe. the photoshoot style should be {argument name="style" default="bright natural light, lifestyle portrait photography"}, shallow depth of field, soft neutral background, realistic skin tones, and a candid modern family photoshoot look, all four images must show the same boy, the same outfit from the reference photo, and the same visual style, but with different camera angles and compositions. the four shots should include a close-up portrait where the boy slightly lowers the sunglasses while looking at the camera, a medium shot with the boy standing casually and adjusting the sunglasses with one hand, a side-angle portrait where the boy looks slightly to the side with sunglasses on in a relaxed pose, and a three-quarter portrait where the boy smiles confidently toward the camera with a playful attitude. the result should be photorealistic photography with natural lighting and consistent color grading across all four images so they look like one professional photoshoot, and the output must be a single image composed as a clean 2x2 grid of four photos, with no text, no logos, and no watermarks.
```

## Dewy Lotus Sunrise Landscape

> Manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
masterpiece, realistic photo, landscape, {argument name="subject" default="Dewy lotus leaves"}, sparkling droplets, {argument name="backdrop" default="blurred pagoda"}, {argument name="color theme" default="pink hues"}, soft sunrise
```

## Whimsical Jack-O-Lantern Pumpkin

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A close-up, eye-level shot shows an {argument name="subject" default="orange pumpkin with a carved jack-o'-lantern face"}. The pumpkin is illuminated from within, casting a warm orange glow through its carved eyes and mouth. A green stem curls from the top of the pumpkin. The {argument name="setting" default="background is a corn field"} and the image is {argument name="mood" default="whimsical yet spooky"}.
```

## Cinematic Sunset Boat Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A realistic, cinematic photo of a {argument name="subject" default="young woman"} relaxing in a {argument name="setting" default="polished wooden boat"} on the sea at sunset. She has very long dark brown hair with small braids on top and loose strands around her face. She is wearing soft makeup and looks confident. She is dressed in a {argument name="outfit" default="white off-shoulder dress with puffy sleeves and a black corset-style belt"}. She is sitting comfortably on beige and blue striped cushions inside the boat, leaning back casually. One hand is touching her hair, and the other is holding a glass of red wine. The ocean is calm, and the horizon can be seen in the background. The sky is cloudy with beautiful warm orange and peach sunset colors. The lighting is soft and natural, creating a romantic and luxurious vacation feeling. The image should be highly detailed and photorealistic, with sharp focus on her face, natural skin texture, a slightly blurred background, and an eye-level camera angle. The composition is a vertical portrait with the woman slightly right of center, styled like premium travel or Instagram influencer photography. Avoid: blurry images, low quality, overexposed lighting, harsh shadows, extra fingers, distorted body parts, duplicate limbs, motion blur, noise, watermarks, logos, text, cropped face, unrealistic skin, and overly saturated colors.
```

## Taisho Romance Girl Presentation Revised

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A {argument name="character" default="Taisho-era romantic girl"} presenting the benefits of remote work remotely
```

## Taisho Era Girl Remote Work Presentation

> Illüstrasyon üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A {argument name="character" default="Taisho-era romantic girl"} presenting the benefits of remote work in a remote meeting
```

## Cartoon Skull with Gold Teeth

> Illüstrasyon üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cartoonish skull with {argument name="tooth detail" default="gold teeth"} and a cracked forehead is positioned in the foreground, tilted to the left. Behind it, a rainbow arches upwards, with a black star centered within its arc. The background is a solid {argument name="background color" default="pastel pink"}, and a wavy green line runs along the bottom edge of the image.
```

## Nighttime Marina Fashion Portrait

> Moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A confident {argument name="subject" default="young adult male"} stands facing the camera in a posed, sophisticated portrait, his weight leaning slightly to the left with level shoulders. He has a dense, dark brown-black neatly trimmed box beard and a modern haircut with tapered sides and a {argument name="hairstyle" default="two-to-three-inch textured quiff"} pushed upward and mostly swept forward. The naturally straight hair features a slightly off-center right part and is styled with a matte paste to create volume and separation without shine, distinctly showing natural imperfections like slight frizz on the extreme edges, minor flyaways, and unequal clumping. His expression is self-assured with a neutral mouth, direct gaze, and relaxed eyebrows. He wears a short-sleeve pitch-black polo shirt and charcoal grey trousers. His left hand rests lightly on a slanted, pristine polished tubular steel boat railing in the foreground, revealing a leather-strap watch. His right hand is in his pocket. This is a layered scene, leading into a deep, thriving marina midground where the pitch-black water forms fluid ripples that intensely reflect bright golden-yellow and white city lights. To the right, a massive curved high-rise building glows with warm golden interior lights across dense horizontal balconies, balancing the asymmetric composition. On the left, a brightly lit passenger boat moves across the water channel, backed by a background cluster of tall, rectangular dark glass skyscrapers exhibiting vertical lines, cooler cyan architectural accents, and rooftop construction lighting against the deep night sky. The energetic, cosmopolitan atmosphere features a highly saturated, warm, and high-contrast complementary color profile heavily emphasizing pitch black, warm gold, charcoal grey, and neon blue. A bright, soft, and continuous frontal fill light illuminates the subject, leaving soft, gradual gray shadows under his chin, behind his trouser folds, and beneath the railing, while preserved specular highlights glisten on his forehead, nose tip, arms, the metallic railing, and the water surface. Captured as realistic digital photography with a straight-on perspective, the image channels low-light smartphone portraiture aesthetics, featuring slightly soft sharpness, characteristic digital noise, a deep depth of field, and post-processing that boosts city light saturation and applies a high-contrast curve, all smoothly framed in a 3:4 aspect ratio.
```

## Photojournalistic Tropical Garden Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A candid, photo journalistic style portrait photograph of {argument name="subject" default="actress Sydney Sweeney"}, seated on rough stone steps. She is posing with her hand to her chin, making eye contact with the camera. Sweeney wears an {argument name="outfit" default="oversized blue-and-white pinstriped button-down shirt-dress"}, red socks, and red leather sandals. To her left is a {argument name="accessory" default="cream-colored Gucci Dionysus top-handle handbag"} featuring a prominent red bow and detailed floral embroidery. She is in a lush, tropical garden environment, surrounded by green foliage, tropical plants, and yellow flowering bushes. The foreground has blurred out-of-focus yellow rose blooms. The lighting is soft, natural daylight.
```

## Kawaii Pastel Pikachu Alleyway

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A hyper-realistic full-body portrait of a {argument name="subject" default="cute young woman"} crouching in a narrow urban alleyway, hugging a {argument name="plush toy" default="giant fluffy pink Pikachu-inspired plush toy"}. She is wearing an oversized {argument name="clothing" default="pastel pink hoodie dress decorated with adorable kawaii patches"}, paired with white crew socks and clean white sneakers. She is smiling warmly at the camera while holding a shiny pink heart-shaped accessory in one hand. Long soft brown hair, natural makeup, youthful appearance.

The alley is lined with red brick walls on both sides, creating cinematic depth and perspective. Multiple floating pink Pikachu-inspired creatures and other adorable pastel fantasy characters hover around her in mid-air. Colorful pink and white confetti rains throughout the scene, with playful comic-style doodles, speech bubbles, hearts, stars, sparkles, bows, exclamation marks, and question marks scattered around. Bright cheerful atmosphere, dreamy pastel pink color palette, magical fantasy feeling.

Ultra-detailed fluffy fur texture on the plush toy, realistic skin texture, soft natural daylight, shallow depth of field, creamy bokeh background, dynamic composition, centered framing, high-end DSLR photography, 85mm lens, f/1.8, cinematic lighting, HDR, vibrant colors, sharp focus, masterpiece, ultra realistic, 8K, photorealistic, cute kawaii aesthetic, joyful celebration mood, luxury fashion photography, whimsical pink wonderland vibe.

Negative Prompt:
low quality, blurry, distorted face, extra fingers, extra limbs, bad anatomy, cropped, duplicate characters, watermark, text, logo, oversaturated, noisy image, deformed hands, mutated body, out of frame, low resolution, ugly face, cartoon style, poorly drawn details, motion blur, dull colors, messy composition, flat lighting.
```

## Candid Indoor Student Life Portrait

> Fotogerçekçi, retro afiş üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic candid indoor portrait of a {argument name="subject" default="young woman"} sitting at a {argument name="setting" default="wooden study desk"} in a cozy dorm room or bedroom. She wears a fitted {argument name="clothing" default="pink-and-white striped T-shirt"} and has long dark hair loosely tied back, with a few soft strands framing her face. Resting her chin on both hands, she gazes directly into the camera with a calm, slightly bored, thoughtful expression. The desk is covered with an open spiral notebook filled with handwritten notes, scattered pens and pencils, small printed photos, books, and potted plants. A wooden bookshelf filled with books stands beside her, while blurred posters and personal decorations hang on the wall in the background. Captured with a vintage film camera aesthetic, warm ambient indoor lighting, natural skin texture, subtle grain, soft shadows, shallow depth of field, realistic colors, documentary-style photography, intimate student-life atmosphere, authentic candid moment, highly detailed, photorealistic, 35mm film look, Kodak Portra color grading, soft focus background, vertical composition, 8K resolution.
```

## Sydney Sweeney Lifestyle Portrait

> Lüks manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Portrait of {argument name="subject" default="Sydney Sweeney"} sitting cross-legged on a grassy hill, smiling softly and looking to the right. She has a messy low bun with a {argument name="hair accessory" default="daisy"} behind her ear and wears {argument name="clothing" default="a white t-shirt, an open pastel pink zip-up hoodie, and grey sweatpants"}. The background features a sweeping view of green valleys, sharp snow-capped mountains, and a bright blue sky with fluffy clouds. Natural soft daylight, high-end lifestyle photography, sharp focus, 9:16 aspect ratio.
```

## Cyberpunk Signboard Social Commentary

> Fütüristik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{argument name="style" default="Cyberpunk"} Look at the sign! {argument name="sign text" default="Vested interests = critical condition?"}
```

## Cozy Bedroom Reading Portrait

> Fotogerçekçi, sinematik yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "A photorealistic portrait of a beautiful young woman in her early 20s with shoulder-length straight reddish-brown hair parted in the middle, fair skin, subtle makeup with winged eyeliner, lying relaxed in bed propped against pillows. She is wearing a black spaghetti strap camisole top that accentuates her figure. She is holding an open white paperback book titled ' HOT STORIES ' with both hands, gently turning a page, eyes looking down at the pages with a soft, focused expression. The bed has a gray duvet with white geometric diamond pattern and white sheets. In the background there is a modern wooden headboard with warm ambient LED lighting underneath, a rust-colored velvet pillow, and small decorative figurines on a shelf. Soft cozy bedroom lighting, warm tones, intimate atmosphere, highly detailed, cinematic composition, natural skin texture, realistic fabric details, 8k resolution",
  "negative_prompt": "blurry, low quality, deformed hands, extra limbs, text artifacts, watermark, cartoon, anime, overexposed, underexposed, plastic skin, heavy makeup, distorted face",
  "parameters": {
    "style": "photorealistic",
    "lighting": "warm ambient, soft bedroom lighting",
    "aspect_ratio": "9:16",
    "quality": "high",
    "model": "grok-imagine"
  }
}
```

## Dark Grunge Emo Girl Collage

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic dark aesthetic bedroom photo collage, 2x2 grid layout featuring the same {argument name="subject" default="young woman"} in four different candid poses. Soft grunge emo-girl vibe, {argument name="hair" default="messy long black hair"} partially covering her face, round black glasses, {argument name="clothing" default="oversized black sweatshirt"}, pale skin, tired dreamy expression. Top left: lying on a white pillow in a dark room, face partially hidden behind sleeve, looking toward camera. Top right: sitting in darkness, hand covering mouth, messy hair, moody introspective pose. Bottom left: extreme close-up portrait, hair falling across face, soft lips visible, cinematic shallow depth of field. Bottom right: mirror selfie holding black smartphone, oversized black graphic t-shirt, one hand in hair, dim bedroom background. Lighting: very low light, bluish-grey tones, subtle phone flash illumination, soft shadows, grainy digital camera texture, slight motion blur, nostalgic 2000s webcam aesthetic. Style: dark academia, soft grunge, goth-inspired, melancholic mood, Tumblr aesthetic, indie bedroom photography, authentic candid moments, natural imperfections, muted colors, realistic skin texture, cinematic atmosphere. Camera: handheld smartphone photography, high ISO grain, flash photography, shallow depth of field, realistic lens imperfections. Color grading: desaturated blacks, cool blue-grey shadows, faded contrast, moody night-time atmosphere.
```

## Japanese School Girl Portrait

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Beautiful young {argument name="ethnicity" default="Japanese"} girl with long silky black hair and soft wispy bangs, large expressive dark eyes, fair glowing skin, delicate facial features, natural pink lips, subtle blush, and a calm innocent expression. Wearing a {argument name="clothing" default="fitted black t-shirt and a red backpack"} over one shoulder. Standing {argument name="setting" default="outdoors beside a warm beige wall with green leaves casting soft shadows"}. Bright midday sunlight creating natural highlights on her hair and face, gentle breeze moving loose strands of hair, casual school-day aesthetic, Korean/Japanese street photography vibe, realistic skin texture, soft natural makeup, candid portrait, photorealistic, ultra-detailed, DSLR quality, shallow depth of field, clean composition, vibrant natural colors, youthful and dreamy atmosphere, 85mm lens, high-resolution editorial portrait, 8K.
```

## Jacaranda Garden Portrait with Reference

> Minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a high-definition, High quality, highly detailed image of this person in the above image in 4:5 aspect ratio, with 8k resulation with glossy lighting, ,Use the uploaded reference image as the primary identity anchor. Preserve the exact facial structure, bone proportions, skin tone, eye shape, eyebrows, nose, lips, and overall likeness with absolute precision. Do not alter identity under any circumstances.Create a vertical portrait of a women with {argument name="hair style" default="black wavy hair"} is captured in a serene, outdoor setting surrounded by {argument name="flowers" default="vibrant purple jacaranda blossoms"}. She is smiling softly while looking towards camera. The Dress: She is wearing a {argument name="clothing" default="full sleeve floor-length maxi dress"}. The fabric is a deep, vivid purple featuring a pattern of large white polka dots. The dress has a modest round neckline and a fitted bodice that transitions into a flowing skirt.Footwear: She is wearing simple, solid-colored purple flats that match her dress. The Bench: She is seated on a wooden park bench painted in a matching shade of light purple. Pose: She is sitting in profile, turned toward the right side of the frame. Her body is angled, with her legs extended slightly forward.vibrant colours Activities: She is holding a purple mug in both hands near her chest and is positioned next to an open book that is resting on the bench seat beside her.
```

## Cozy Bedroom Selfie Portrait

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A high-quality, 2:3 aspect ratio portrait of a {argument name="subject" default="young woman with clear green eyes and light brown hair"}, leaning her cheek gently against her left hand in a casual selfie pose. She is wearing a {argument name="clothing" default="soft pink V-neck knit sweater"}, a small pink bow hair clip on the side of her hair, and a delicate thin gold chain necklace featuring a small, subtle letter "N" pendant. She has a warm, gentle smile, clear sharp facial features with zero blur, soft Douyin-style makeup featuring a prominent pink rosy blush on her cheeks, and a subtle lip gloss. The scene is illuminated by warm, golden hour sunlight streaming in from a window, casting soft shadows. The background is a {argument name="background" default="cozy, decorated bedroom with polaroid photos and green vine fairy lights hanging on a white wall to the left, a dark wooden door in the center, and a glowing neon pink heart mirror on the right"}. 90s film grain aesthetic, Kodak Portra 400 vibes, clean focus on the face, photorealistic, 8k resolution. --ar 2:3
```

## Rainy Night Cinematic Masculine Portrait

> Fotogerçekçi, sinematik yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
(Cinematic Masculine Portrait) Aspect ratio: 3:4 (vertical) A hyper-realistic candid cinematic photograph, shot on Canon EOS R5, RF 85mm f/1.2L lens, ISO 640, shallow depth of field, available-light editorial photography. Real-life photography aesthetic — NOT 3D render, NOT CGI, NOT digital illustration. A real photo of a real man. SUBJECT: A {argument name="subject" default="strikingly handsome, athletic, muscular man in his early 30s"}, Mediterranean features, strong defined jawline with light stubble, dark damp hair pushed back, intense thoughtful expression with his gaze directed off to the side (not at the camera). Captured candidly, as if caught mid-thought. WARDROBE: A {argument name="wardrobe" default="fitted white dress shirt, soaked from rain and clinging to his muscular chest"}, shoulders, and arms — sleeves rolled to the forearms, top buttons open revealing the upper centerline of his chest. Slightly disheveled in a magnetic way. SETTING: Standing under a narrow awning on a moody city street at night, rain pouring just behind him, neon signage glowing in soft bokeh — {argument name="lighting colors" default="warm amber and cool teal lights"} reflecting off the wet pavement and his damp skin. Cinematic, atmospheric, alive. LIGHTING: Dramatic low-key cinematic lighting — a warm key light carving his features and physique from the side, cool rim light from the neon behind separating him from the dark rainy backdrop, water droplets catching highlights on his skin and hair. GRADE & MOOD: Rich teal-orange blockbuster grade, deep contrast, fine film grain, shallow focus. Mood: brooding, magnetic, cinematic — like a frame pulled from a moody thriller. NEGATIVE INSTRUCTIONS: NOT 3D, NOT CGI, NOT cartoon, NOT airbrushed, NOT plastic/waxy skin, real photographic skin texture with visible pores, natural muscular anatomy (not exaggerated), no deformed hands, no extra fingers, no text, no watermark, no logos, real-life realism.
```

## World Cup Victory Portrait

> Sinematik logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A full-body photograph of a young woman standing inside a stadium and {argument name="activity" default="kissing the golden Football World Cup trophy"}. She is wearing {argument name="team jersey" default="Argentina football team's blue and white striped jersey (number 10)"} and matching trousers, with AFA logo and Adidas logo attached. Her brown hair has a high ponytail and she is holding the trophy with a smile. A huge, packed stadium is seen in the background, in which the spectators are wearing {argument name="fans clothing" default="Argentina's striped jerseys"}. The roof of the stadium is modern and brightly lit. Some empty plastic seats are placed in the front and a water bottle is lying on the floor. It is night time and the stadium is completely illuminated.
```

## Preppy Classroom Portrait Aesthetic

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
"subject": "{argument name="subject details" default="young woman, long brown hair with bangs, subtle gaze, heart drop earrings, cross charm"}",
  "outfit": "{argument name="clothing outfit" default="blush pink fitted polo top, blue plaid mini skirt, white sneakers"}",
  "setting": "{argument name="background setting" default="classroom, wood locker and whiteboard background"}",
  "mood": "preppy, soft, school-girl aesthetic"
```

## Sunny Outdoor Patio Lifestyle Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{argument name="medium" default="realistic portrait photograph"}, {argument name="weather" default="sunny day"}, a freshly painted modern home exterior patio deck, lush greenery, a {argument name="subject" default="woman smiles while holding a cup of coffee and sitting with her legs crossed on a patio chair"}, she wears a {argument name="clothing" default="white, blue, and orange floral dress"}
```

## Double-Exposure Highway Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Creative double-exposure portrait of a female subject in profile (use uploaded face as reference). She wears a dark jacket and looks thoughtful. Glowing {argument name="visual element" default="night highway light trails"} blend through her silhouette against a {argument name="background" default="pure black background"}. {argument name="color scheme" default="Cinematic teal-and-orange tones"}, surreal yet photorealistic mood, portrait style.
```

## Neon Reflections Café Portrait

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic IMAX-level Netflix-style cinematic indoor lifestyle portrait, 9:16 vertical composition, a beautiful {argument name="subject" default="young woman"} sitting beside a large café window in a {argument name="setting" default="modern moody lounge"}, her luminous fair milky skin and ultra-smooth natural texture softly illuminated by cool daylight, wearing stylish thin metal-framed glasses with vivid teal and warm orange neon reflections glowing across the lenses, her long dark brown hair tied into a clean high ponytail with natural loose baby hairs around the forehead, dressed in a fitted {argument name="outfit" default="dark ribbed knit top"} with subtle lace-up front detailing and soft fabric texture, resting her chin gently on her hand in a graceful thoughtful pose, her face showing a calm dreamy expression with a soft closed-lip smile, relaxed eyes looking slightly away from the camera and an emotion of quiet curiosity, peaceful confidence and gentle optimism, set inside a cinematic café or creative studio interior with deep teal walls, blurred window light, soft background bokeh and refined urban atmosphere, realistic reflection physics on the glasses, delicate skin highlights, natural eye catchlights, soft hand anatomy, subtle hair strand detail and shallow depth of field, captured with an 85mm cinematic portrait lens, moody soft lighting with cool cyan shadows and warm amber highlights, ultra-rich color with deep teal, charcoal black, creamy skin tones and neon glow accents creating a premium editorial aesthetic, HDR lighting, global illumination, photorealistic rendering, luxury lifestyle photography, award-winning cinematography, masterpiece quality, 8K production detail. Negative Prompt: distorted glasses, warped reflections, bad anatomy, extra fingers, blurry eyes, plastic skin, messy hair artifacts, emotionless face, cartoon, anime, CGI look, text, watermark, logo, low quality.
```

## Y2K Night Selfie Paparazzi Vibe

> Fotogerçekçi mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Preserve the exact identity from the reference photo. Do not change facial features, face shape, eyes, lips, nose, skin tone, age, body proportions, hairstyle, or natural appearance. Keep the original natural hair color exactly as in the reference photo. Do not lighten, darken, recolor, tint, highlight, bleach, or modify the hair in any way. Ultra-realistic Y2K night selfie taken from the {argument name="car element" default="sunroof of a moving bright orange sports car"}. The woman is leaning out of the roof opening, holding the phone herself with one arm fully extended toward the camera. Wind blows through her long dark hair, creating natural movement and loose strands across her face. She wears a {argument name="outfit" default="fitted bright red sleeveless crop top"}, black mini skirt, delicate gold jewelry, glossy lips, soft glam makeup, long wispy lashes, and a confident expression. One hand rests in her hair while she looks directly into the camera. Behind the car, a police vehicle follows with flashing red and blue emergency lights, reflecting across the orange paintwork and wet asphalt. Busy nighttime {argument name="setting" default="city highway"}, blurred traffic, streetlights, illuminated buildings, and light trails stretching into the distance. Strong direct smartphone flash illuminates her face and upper body, creating bright highlights, deep shadows, realistic skin texture, and authentic paparazzi-style photography. Background motion blur from speed, slight camera shake, realistic low-light noise, reflections on the car body, dynamic urban nightlife atmosphere. Aesthetic: Y2K celebrity paparazzi energy, late-night city adventure, rich-girl Instagram vibe, Tumblr 2014 nostalgia, Pinterest moodboard, candid luxury lifestyle photography. Shot on iPhone 15 Pro, ultra-wide selfie lens, flash ON, ISO 1250, 1/30s shutter speed, HDR enabled, realistic digital grain, authentic smartphone quality, no AI smoothing, no beauty filter, ultra realistic, 9:16, 8K. Negative prompt: different hair color, blonde hair, brown hair, highlights, face changes, plastic skin, CGI, cartoon, AI beauty filter, unrealistic proportions, extra fingers, text, watermark.
```

## Photorealistic Nightlife Couple Selfie

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-photorealistic romantic couple night-event selfie, real photograph, not illustration. Warm candid Instagram editorial aesthetic.

Create a single close-up lifestyle photo of a handsome young man and a beautiful young woman together at a stylish night event or upscale club. Preserve the identities from the reference images with realistic facial features, natural skin texture, believable expressions, and authentic couple chemistry. The image should feel like an intimate, fashionable memory from their relationship: stylish, playful, romantic, spontaneous, and real.

SCENE — PURPLE NIGHT EVENT SELFIE:
The couple is captured under {argument name="lighting" default="purple-blue ambient club lighting"}. Both are wearing slim sunglasses. The man has slightly messy dark hair, light beard/stubble, layered necklaces, an open dark shirt, and a confident relaxed expression. The woman has long dark wavy hair, glossy lips, an elegant cool expression, and wears a {argument name="clothing" default="black sparkly or dotted evening top"}. Close-up selfie angle, moody nightlife atmosphere, realistic purple light reflecting softly on their skin, cinematic yet candid.
STYLE:
Realistic lifestyle photography, high-resolution, natural skin texture, no plastic smoothing, no waxy faces, no artificial doll-like look. Premium Instagram memory-dump aesthetic: intimate, cool, fashionable, polished but spontaneous.

CAMERA:
Realistic smartphone selfie perspective or close lifestyle-camera framing. Natural angle, candid composition, sharp faces, realistic proportions, believable hands if visible, soft background blur, premium editorial nightlife mood.
BACKGROUND:
{argument name="location" default="Stylish indoor event or club interior"} with softly blurred people, modern decor, purple-blue ambient lights, upscale nightlife atmosphere, and subtle depth of field.

MOOD:
Cool, romantic, slightly mysterious, fashionable, intimate nightlife couple energy.
NEGATIVE PROMPT:
low quality, cartoon, illustration, 3D render, plastic skin, waxy face, generic AI face, identity drift, distorted hands, extra fingers, missing fingers, fused fingers, warped faces, uneven eyes, melted mouth, bad teeth, blurry face, overexposed highlights, messy background, text, watermark, logo, duplicate face, extra people, creepy expression, bad anatomy, unnatural pose, fake skin texture, harsh flash, oversaturated colors.
```

## Urban Street Fashion Couple Selfie

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-photorealistic top-down {argument name="subject" default="couple selfie"} taken from above, stylish street-fashion aesthetic, cool candid vibe. A fashionable young couple stands close together under a textured concrete ceiling, looking up at the camera in a playful, confident pose. The composition is slightly tilted and editorial, with a casual but trendy social-media feel.

The woman has straight dark hair with soft bangs, full lips, and a chic sultry expression. She wears narrow oval sunglasses, layered necklaces, a brown strapless or bandeau-style top, and bold statement accessories such as an arm cuff, bracelets, and rings. Her style feels boho, edgy, and effortlessly cool.

The man stands very close beside her, leaning in so their heads nearly touch. He has dark hair, stylish clear or thin metal-frame glasses, and a soft pout or playful kissy expression. He wears a modern layered outfit such as a dark jacket over a light top, with subtle jewelry or necklace details. His vibe is artsy, trendy, and urban.

Both should feel like a stylish couple with coordinated fashion energy. The mood is intimate, youthful, and aesthetic, like a candid Instagram or Pinterest street-style selfie. Neutral muted color palette, soft daylight, realistic skin texture, slightly moody tone, clean but lived-in urban feel.

Style details:
top-view selfie, urban fashion couple, trendy accessories, editorial street style, soft natural lighting, cool neutral tones, intimate framing, candid social-media aesthetic, realistic phone-camera look.

Negative prompt:
blurry face, distorted hands, extra limbs, bad anatomy, cartoon, illustration, low quality, awkward pose, messy composition, overly bright colors, plastic skin, duplicate features, unrealistic glasses, deformed accessories
```

## Night Parking Defender Car Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Keeping the same face and hairstyle of {argument name="subject" default="20 years old boy"} with dark, wearing a {argument name="clothing" default="black buffer shirt, black cargo lose jeans"}. brown-white sneakers, bracelet, chain, wristwatch, Sunglasses on eyes, sitting casually a {argument name="vehicle" default="sleek black Defender car"} side seating fayring the other on the car. The setting is an outdoor parking lot at night, illuminated by numerous streetlights. A crescent moon is visible in the dark sky, and a small tree is behind.
```

## East Asian Woman Photo Strip

> Minimal, lüks portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A vertical photo strip collage featuring four distinct, close-up portraits of a beautiful {argument name="subject" default="East Asian woman"} with long, wavy black hair, set against a {argument name="background" default="clean, minimal light grey background"}. In the first panel at the top, she is laughing joyfully with a wide, radiant smile, showing her teeth, with her hand resting gently under her chin. In the second panel, she tilts her head slightly, looking off to the side with a soft, serene expression while resting her cheek against her hand, showcasing elegant silver rings on her fingers. In the third panel, she looks directly into the camera with wide, expressive brown eyes while playfully puckering her lips. In the bottom panel, she offers a charming, knowing smile while playfully winking one eye. Throughout all the frames, she has luminous, dewy skin, natural makeup with soft coral-toned lips, and wears elegant, {argument name="jewelry" default="multi-layered silver hoop earrings"}. The lighting is bright, soft, and even, capturing a cheerful, lively, and highly photogenic mood.
```

## Douyin Style Cinematic Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic close-up portrait capturing a calm and introspective mood. {argument name="lighting" default="Soft blue-gray lighting"} highlights her glowing skin, refined facial features, and elegant {argument name="makeup style" default="Douyin-inspired makeup"}. Long ash-brown hair with natural loose strands frames her face beautifully, while the {argument name="clothing" default="navy-blue shirt and white AirPods"} add a modern, sophisticated touch. The ultra-realistic details, cool color grading, and emotional atmosphere create a timeless and visually captivating portrait.
```

## 90s Nostalgic Tokyo Street Portrait

> Sinematik, retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A full-length portrait shot of a {argument name="subject" default="beautiful young woman with long, open, wavy black hair"} smiling warmly while walking across a crosswalk on a {argument name="location" default="Tokyo street"} at dusk. She is holding a small vintage point-and-shoot film camera with both hands at waist level. She is wearing a {argument name="outfit" default="casual denim jacket over a white cropped t-shirt, a matching denim miniskirt"}, and has a small beige canvas camera bag slung over her shoulder.
Background: A vibrant, slightly blurred Japanese street scene at twilight. To the left is a brightly lit vending machine and a shop front featuring glowing red and green neon signage with Japanese kanji characters. Pedestrians are blurred walking in the background under warm streetlights.
Style & Camera Parameters: 90s film photography aesthetic with a soft, warm nostalgic glow and realistic subtle film grain. Shot on a 35mm lens, f/2.8 aperture, cinematic color grading, preserving natural facial features and skin texture. Vertical 9:16 aspect ratio.
```

## 35mm Film Aesthetic Triple-Panel Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic candid flash photography, 35mm film aesthetic, three-panel vertical collage composition. Top panel: a young woman with {argument name="hair style" default="long dark wavy hair"} and soft natural texture rests her face on one hand, fingers gently touching her cheek, subtle henna design visible on the wrist and hand, wearing a {argument name="outfit" default="dark traditional embroidered outfit"} with warm mustard and black details, relaxed thoughtful expression, direct gaze into the camera, luminous fair skin with natural blush and visible freckles, glossy lips, thick natural eyebrows, striking {argument name="eye color" default="light hazel-green eyes"}, minimal makeup, strong on-camera flash creating bright highlights and soft shadows, cozy indoor setting with blurred neutral background and a small green potted plant on the right. Middle panel: extreme close-up crop focused only on the eyes and eyebrows, emphasizing hazel-green irises, natural lashes, skin texture, freckles, and flash reflections with cinematic sharpness. Bottom panel: same woman in the same pose looking slightly to the side instead of directly at the camera, chin resting on hand, identical styling and lighting, soft film grain, nostalgic disposable camera look, shallow depth of field, intimate editorial portrait, authentic skin texture, no heavy retouching, warm indoor ambience, high detail, photorealistic, 8k.
```

## Luxury Bathroom Lifestyle Portrait

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic cinematic full-body portrait of a {argument name="subject" default="stylish young man"} exysame from reference image leaning casually against a modern luxury bathroom counter in a premium hotel suite. He has thick voluminous textured black hair, smooth warm-brown skin tone and a confident calm expression while looking directly at the camera. He is wearing an oversized {argument name="clothing" default="dark charcoal-grey graphic t-shirt"} with bold white typography, relaxed black cargo pants, clean white sneakers, and a modern black wristwatch. In one hand he is casually holding a white baseball cap while the other hand rests inside his pocket. The setting features {argument name="interior" default="elegant contemporary interior design"} with warm ambient lighting, textured stone walls, a glowing circular backlit mirror creating a halo effect behind him, luxury sink accessories, and subtle decorative plants. Relaxed crossed-leg pose, fashion editorial style, premium lifestyle photography, cinematic mood, shallow depth of field, soft shadows, warm golden-brown color grading, ultra-detailed skin texture, realistic fabric folds, professional DSLR quality, 85mm lens, f/1.8, high dynamic range, sharp focus, luxury Instagram influencer aesthetic, photorealistic, 8K resolution.
```

## Cozy Iced Latte Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A high-quality, realistic portrait of a {argument name="subject" default="smiling East Asian woman"} with long, wavy dark brown hair sitting comfortably in a mauve velvet wingback armchair. She is wearing a {argument name="outfit" default="navy blue off-the-shoulder maxi dress with a beige floral pattern"}, a white-strapped watch, and is barefoot with her legs crossed. She holds a {argument name="item" default="clear plastic cup filled with an iced latte and a white straw"}. The setting is a cozy, modern living room with a large bookshelf filled with colorful books in the background, a dark sofa, and a marble coffee table. In the foreground, an empty golden coffee table is partially visible under soft, warm indoor lighting coming from a nearby window.
```

## Nostalgic Vinyl Bedroom Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
An ultra-realistic cinematic portrait of a beautiful young girl with {argument name="hair style" default="long dark hair"}, glowing fair skin, natural glossy lips, and a dreamy closed-eye expression. She is captured in a graceful pose with one hand gently touching her face. She wears black wired earphones, a black choker necklace, an {argument name="outfit" default="oversized white floral shirt with soft blue patterns"}, a white inner t-shirt, and light pastel loose pants. The scene is illuminated by {argument name="lighting" default="warm golden-hour sunset light"}, with dramatic window-blind shadows falling across her face and clothing. The dark, moody background features vintage vinyl album covers—including Fleetwood Mac’s 'Rumours', Paul Simon’s 'Graceland', The Drums, Cigarettes After Sex, Night Tempo, and Joji—displayed on a black wall. The image features deep cinematic shadows, a cozy nostalgic vibe, ultra-detailed skin textures, realistic messy hair strands, soft orange-pink ambient glow, high-contrast photography, a dreamy atmosphere, shallow depth of field, and an emotional mood. 8K, ultra-HD, portrait.
```

## Cinematic Sunset Portrait with Vinyl Background

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
An ultra-realistic cinematic portrait of a {argument name="subject" default="beautiful young girl"} with {argument name="hair style" default="long dark hair"}, glowing fair skin, natural glossy lips, and a dreamy closed-eye expression. She is captured in a graceful pose with one hand gently touching her face. She wears black wired earphones, a black choker necklace, an {argument name="clothing" default="oversized white floral shirt"} with soft blue patterns, a white inner t-shirt, and light pastel loose pants. The scene is illuminated by warm golden-hour sunset light, with dramatic window-blind shadows falling across her face and clothing. The dark, moody background features vintage vinyl album covers—including Fleetwood Mac’s 'Rumours', Paul Simon’s 'Graceland', The Drums, Cigarettes After Sex, Night Tempo, and Joji—displayed on a black wall. The image features deep cinematic shadows, a cozy nostalgic vibe, ultra-detailed skin textures, realistic messy hair strands, soft orange-pink ambient glow, high-contrast photography, a dreamy atmosphere, shallow depth of field, and an emotional mood. 8K, ultra-HD, portrait.
```

## Alpine hiking lifestyle photography

> Manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A young woman with {argument name="hair color" default="auburn hair"} tied up in a messy bun, wearing a {argument name="hat" default="beige visor"}, stands on a mountain hiking trail and turns back over her shoulder toward the camera with a warm smile; she wears a color-block windbreaker jacket in dusty rose, sage green, and slate blue, paired with rose-pink hiking leggings, and carries a large teal and black trekking backpack with a water bottle tucked in the side mesh pocket and a black hip belt fastened around her waist; her hands grip the backpack straps near her chest; the background features a sweeping alpine landscape with layered green hills, dramatic gray mountain peaks, patches of wildflowers along the trail, and a bright blue sky filled with fluffy white clouds; natural golden daylight illuminates the scene, shot in a realistic outdoor lifestyle photography style with crisp detail, vibrant colors, shallow depth of field on the background, vertical 9:16 aspect ratio.
```

## Autumn couple photoshoot in forest

> Manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A professional photography collection of a happy young couple posing during a beautiful autumn photoshoot on a forest path. The man has short curly dark hair and wears a {argument name="mens outfit" default="textured mustard-yellow sweater"} over a plaid button-down shirt with grey jeans and brown leather boots. The woman has long wavy dark hair and wears a {argument name="womens outfit" default="teal green cable-knit sweater"} over a purple plaid shirt, paired with dark slim-fit pants and brown leather ankle boots. The imagery captures two distinct poses in a {argument name="setting" default="scenic autumn setting"}: one where they stand close together in a warm embrace smiling directly at the camera, and another where they walk hand-in-hand down a gravel trail, looking at each other and laughing naturally. Both scenes feature a beautifully blurred background filled with vibrant golden, orange, and green fall foliage, bathed in warm, soft-focus sunlight.
```

## Cinematic Tactical Sketch Portrait

> Sinematik, elle çizilmiş afiş üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
An ultra-stylistic cinematic portrait illustration that blends design, tactical aesthetics, and expressive fine art sketching. The characters are rendered 100% faithful to the objects depicted, with semi-realistic facial anatomy, strong likeness preservation, and highly detailed brushwork. A bold blend of graphic design and emotional storytelling, combining sharp geometric shapes with loose, expressive strokes. The clothing is true to life!
The dominant high-contrast color palette features intense full-field {argument name="primary color" default="dark orange"}, deep black, warm ivory, soft beige, and subtle golden yellow highlights. A dynamic interplay between the hard-edged digital painting and the impressive sketch textures. Layered brushstrokes, ink splatters, rough concept art marks, scribbled lines, and abstract paint fragments are seamlessly integrated into the composition.
Strong cinematic lighting with warm golden highlights on the skin, deep shadow modeling, and dramatic tonal separations. Rich layers of texture include paper grain, worn print effects, worn poster surfaces, and graphic design imperfections.  The bottom section appears unfinished, with impressive strokes that thin out at the bottom and blend into the background.
The face is painted with soft, realistic skin rendering, expressive eyes, natural reflections, detailed hair strands, and artistic color transitions. A sumptuous, emotionally charged, visually striking illustration, a masterpiece of modern art. 9:16 vertical. 8K.
```

## Y2K Portrait Collage from Face Reference

> Minimal, retro portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A vertical collage of three {argument name="style" default="YZK photos"}. Using the uploaded selfie as the ONLY and exclusive face reference, keep the facial features, and facial structure exactly the same as the reference image. The character poses against a neutral light background. A girl with a beautiful, voluminous hairstyle, seemingly styled with a brush, wearing foxy makeup and pronounced, angled lashes. In the first photo, she's very close to the camera, looking at it with one eye and winking. In the second photo, she's turned away, her head coquettishly turned toward the lens, her hairstyle slightly covering her face, but not too much. In the third photo, she's looking very close to the lens, her hair to the side, thus covering her left eye, pouting and looking forward. Close-up and medium shot, minimalist composition, vintage digital texture, slight blur, glamorous atmosphere. Photo taken on {argument name="device" default="iPhone 17 Pro Max"} with flash.
```

## Amateur iPhone Restaurant Shot

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Subtle blurry low quality close-up amateur iPhone shot of a stunning young {argument name="celebrity" default="Megan Fox"} eating {argument name="food" default="souvlaki and choriatiki"} at a fancy crowded restaurant in {argument name="location" default="Athens"} near parthenon wearing a total white goddess unbuttoned dress while laughing and talking watching directly in camera in a chill night.
```

## Young Woman in Sports Stadium Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
“A photorealistic portrait of a beautiful young woman with olive skin, shoulder-length wavy dark brown hair, and subtle makeup, standing confidently in a large empty {argument name="location" default="sports stadium"} under dramatic overcast skies. She wears a fitted {argument name="top" default="white ribbed tank top"}, blue denim jeans, gold hoop earrings, layered gold necklaces with heart pendants, and gold bangles. Soft natural light, cinematic composition, sharp details.”
```

## Dramatic Fire Editorial Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Dramatic wide portrait of {argument name="subject" default="IMAGE1"} sitting casually on wooden floor completely surrounded by large roaring flames and thick smoke, wearing a {argument name="top" default="sleeveless shirt"}, wearing dark baggy pants and {argument name="footwear" default="white sneakers (Nike Dunk style)"}, silver chain necklace, small earring, looking calmly and directly into camera, fire blazing on all sides in background, nighttime black sky, smoke filling frame, hyper-real editorial photography.
```

## Whimsical Bunny Ear Portrait

> Fotogerçekçi, sinematik logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic whimsical birthday portrait of a young blonde woman kneeling on a black leather sofa in a dimly lit cozy apartment. She wears a delicate ivory satin slip dress with a tiny lavender floral print and lace trim, paired with oversized plush gray bunny ears featuring soft pink inner lining. Holding a small pastel birthday cake decorated with lavender butterflies, floral frosting details, and a single lit candle. Warm candlelight illuminates her face and dress, creating a soft golden glow and a dramatic bunny-ear shadow cast on the wall behind her. Natural makeup, luminous skin, soft blonde hair with curtain bangs, dreamy expression, cottagecore-inspired aesthetic, intimate birthday celebration atmosphere, storybook mood, cinematic lighting, realistic skin texture, highly detailed fabric and fur textures, photorealistic lifestyle photography, magical and cozy evening ambiance. Negative prompt: blurry, low quality, low resolution, distorted anatomy, extra limbs, extra fingers, unrealistic proportions, plastic skin, over-retouched face, cartoon, anime, CGI, painting, watermark, text, logo, duplicate candles, malformed cake, distorted bunny ears, cluttered background, harsh shadows, overexposed highlights, noisy image. Style: photorealistic. Camera: full-frame mirrorless, 85mm portrait lens, f/1.8, iso 400, side-profile editorial portrait, shallow depth of field. Lighting: candlelight with soft ambient fill, warm side lighting, whimsical, dreamy, intimate. Composition: vertical portrait, kneeling on sofa holding birthday cake, minimal wall with dramatic bunny-ear shadow. Quality: 8k, ultra high, maximum.
```

## Whimsical Birthday Bunny Ears Portrait

> Fotogerçekçi, sinematik logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": "Ultra-realistic whimsical birthday portrait of a {argument name="subject" default="young red-haired woman"} sitting on a black leather sofa in a cozy dimly lit apartment. She wears a {argument name="outfit" default="delicate ivory floral satin slip dress"} with lavender lace trim and oversized fluffy gray bunny ears with soft pink inner lining. Holding a small {argument name="cake" default="pastel lavender birthday cake"} decorated with butterflies, piped frosting details, and two lit candles. Warm candlelight illuminates her face, creating a soft intimate glow and gentle shadows on the wall behind her. Relaxed expression, natural makeup, porcelain skin, romantic cottagecore aesthetic, dreamy birthday celebration atmosphere, cozy evening indoors, cinematic lighting, photorealistic skin texture, highly detailed fabric and fur textures, premium lifestyle photography, magical storybook mood, ultra realistic, 8k quality.",
  
  "negative_prompt": "blurry, low quality, low resolution, distorted anatomy, extra limbs, extra fingers, unrealistic proportions, plastic skin, over-retouched face, cartoon, anime, CGI, painting, watermark, text, logo, harsh shadows, overexposed highlights, noisy image, cluttered background, duplicate candles, malformed cake, distorted bunny ears",
  
  "style": "photorealistic",
  
  "camera": {
    "type": "full-frame mirrorless",
    "lens": "85mm portrait lens",
    "aperture": "f/1.8",
    "iso": 400,
    "angle": "three-quarter seated portrait",
    "depth_of_field": "shallow"
  },
  
  "lighting": {
    "type": "candlelight and warm ambient lighting",
    "direction": "soft front-side illumination",
    "mood": "cozy, whimsical, dreamy, intimate"
  },
  
  "composition": {
    "framing": "vertical portrait",
    "subject_position": "seated on sofa holding birthday cake",
    "background": "minimalist apartment interior with candles and soft shadows"
  },
  
  "quality": {
    "resolution": "8k",
    "detail": "ultra high",
    "realism": "maximum"
  }
}
```

## Cottagecore Botanical Garden Stroll

> Minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A series of aesthetic portrait photographs showcasing a cheerful {argument name="subject" default="young woman with auburn hair"} styled in a half-up bun, strolling through a lush, vibrant {argument name="setting" default="botanical garden"}. She wears a striking {argument name="clothing" default="red short-sleeved maxi dress"} adorned with a dense pattern of small blue, yellow, and white flowers, cinched at the waist with a braided brown leather belt, and paired with clean white sneakers. Shielding herself with an open, matching red-and-white floral print umbrella, she is captured from various angles: walking gracefully down a stone pathway, smiling warmly directly at the camera, and offering a playful over-the-shoulder glance. The background is softly blurred, filled with blooming pink and white flower bushes, dense green foliage, and a rustic wooden bridge in the distance, creating a bright, whimsical, and charming summer atmosphere.
```

## FIFA World Cup TV Broadcast Simulation

> Logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A live TV broadcast screenshot from a {argument name="sporting event" default="FIFA World Cup 2026"} match on FOX Sports, crowd reaction cut. Telephoto camera from across the stadium zooms in on a spectator: a {argument name="spectator description" default="gorgeous Asian woman in her 20s, long black hair, perfect features, stunning figure in a tight low-cut top"}, standing in the front row of the stands. Strong telephoto compression — the bottom edge of the frame shows a soft blurred band of green pitch and LED ad boards, heat-haze shimmer from the long lens. Around her, out-of-focus fans wave national flags. She laughs and cheers, unaware she is on camera. Authentic FOX Sports World Cup broadcast graphics: scorebug top-left with team abbreviations and match clock, {argument name="competition logo" default="FIFA World Cup 26 logo"}, small network watermark in the corner, 16:9. Shot looks exactly like a paused 1080i TV frame — broadcast color grading, slight motion blur on waving flags, MPEG compression artifacts, faint interlacing lines.
```

## Luxury Nautical Lifestyle Portrait

> Lüks manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A medium scale portrait of a {argument name="subject" default="confident young adult male"} standing straight-on, leaning slightly to his left with perfectly level shoulders. He features short dark hair with meticulously preserved natural texture and sunlit highlights, a neatly groomed light beard, relaxed eyebrows, a direct gaze, and a subtle closed-mouth smile. He is dressed in a {argument name="outfit" default="crisp bright white unbuttoned linen shirt and navy shorts"}. His deliberately posed yet relaxed left hand rests casually on a polished metal boat railing with his fingers gently draped over the cylindrical bar, while his right hand rests near his upper right thigh, the thumb and index finger lightly gripping the black frames of his sunglasses. Immediately in the foreground, the metal boat railing showcases a gleaming stainless steel top rail supported by pristine, thick white rope netting woven into symmetric diamond patterns. The midground expands into a vast, {argument name="setting" default="deep azure blue sea"} characterized by gentle ripples and an immense depth of field, with a small, slightly worn white-hulled vessel moored faintly to the distant left. The deep background rises into a dominant coastline of rugged, uneven terrain completely covered in dense forest green pine trees sloping gracefully down to meet the water. Highly directional, bright, and hard natural sunlight from directly above bathes the scene in a warm, golden, sun-drenched summer holiday aesthetic that exudes an energetic, cheerful, and luxurious mood. This intense single-source illumination creates a highly saturated, high-contrast, split-complementary color palette prominently featuring ocean blues, crisp whites, and forest greens. Harsh, defined, deep black shadows are cast tightly beneath his neck, along his jawline, deep within the folds of the white linen shirt, and directly under the boat railing, while intense specular highlights are vividly preserved across the bridge of his nose, the top shoulders of his shirt, and shimmering brilliantly across the expansive water surface. Captured straight-on as tack-sharp, grain-free realistic digital travel and lifestyle photography utilizing a full-frame mirrorless camera equipped with a 35mm to 50mm lens. The deep depth of field at f/5.6 or f/8 effortlessly maintains the clarity of the sprawling landscape, while an ISO of 100 and a rapid 1/1000s shutter speed impeccably freeze the water's surface ripples. Post-processing involves high-contrast color grading with crushed blacks for profound shadow definition, pristine sharpening on the subject and marine reflections, and intensely boosted saturation throughout the blues and greens, entirely framed in a 4:5 aspect ratio.
```

## Luxury Bus Travel Portrait

> Fotogerçekçi, sinematik manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra realistic cinematic travel portrait 9:16, a {argument name="subject" default="beautiful young woman"} sitting comfortably inside a {argument name="transport" default="luxury bus"} beside the large window, looking outside at {argument name="view" default="lush green mountains and colorful flowers"}. In the background seats, other passengers (girls) are properly seated on their bus seats, creating a natural and realistic atmosphere. Soft sunlight streaming through the window, peaceful travel mood, realistic reflections on glass, natural pose. Dreamy cinematic atmosphere, HDR, DSLR 8K. Negative: standing people, floating reflections, blur, distortion, low quality.
```

## Kodak Portra Style Korean Cafe Selfie

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A hyper-realistic Kodak Portra 400 style photograph, dreamy soft aesthetic, warm natural sunlight, {argument name="location" default="nostalgic Korean café atmosphere"}, vertical composition 9:16. A beautiful young woman crouching gracefully in front of a large round gold-framed mirror placed outdoors on a pebble-covered courtyard. She is taking a mirror selfie with her smartphone, looking at the screen with a gentle smile and relaxed expression. Subject Details: Young woman with fair glowing skin, soft natural makeup, subtle peach blush, glossy pink lips, delicate eyeliner, bright expressive eyes. Long light brown wavy hair styled with soft curtain bangs and loose romantic curls cascading over her shoulders. Feminine and youthful appearance. Outfit: Oversized {argument name="shirt color" default="pastel lavender"} T-shirt with a small daisy flower illustration and subtle Korean typography on the chest, loose comfortable fit with naturally folded sleeves. High-waisted pleated {argument name="skirt color" default="butter-yellow"} midi skirt with soft flowing fabric. White crew socks and clean white canvas sneakers. Soft pink shoulder tote bag hanging naturally by her side. Pose & Expression: Squatting comfortably with knees together, one arm resting naturally on her leg while holding a smartphone for a mirror selfie. Relaxed shoulders, soft smile, candid lifestyle photography feel, natural body language, effortless charm. Foreground: Two transparent plastic cups of iced latte with visible ice cubes and paper straws, soft condensation on the cups. Elegant pink tote bags placed casually beside the mirror. Shallow depth of field creating creamy foreground bokeh and dreamy highlights. Midground: Large circular gold-framed mirror reflecting the woman perfectly. Detailed gravel stones, warm sunlight illuminating her outfit, soft shadows, realistic reflections, cinematic depth. Potted plants surrounding the mirror creating a cozy lifestyle atmosphere. Background: Aesthetic Korean-style café exterior with cream-colored walls, large wooden-framed windows, wooden hanging signboard with Korean lettering, lush climbing ivy vines covering parts of the building, multiple potted plants and flowers, quiet pedestrian alleyway, warm afternoon sunlight filtering through trees. Soft golden-hour glow, beautiful natural shadows, dreamy bokeh foliage. Photography Style: Kodak Portra 400 film photography, dreamy soft focus, creamy highlights, warm pastel tones, cinematic lifestyle editorial, realistic skin texture, natural color grading, subtle film grain, shallow depth of field, environmental portrait, ultra-detailed, photorealistic, high dynamic range, authentic candid moment, cozy Korean café aesthetic, magazine-quality photography, 85mm lens, f/1.8, soft sunlight, atmospheric depth, elegant composition, foreground-midground-background layering, highly aesthetic and immersive scene. Negative Prompt: anime, illustration, cartoon, CGI, 3D render, painting, low resolution, blurry face, distorted hands, extra fingers, duplicate objects, overprocessed skin
```

## Spring Window Seat Cardigan Portrait

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic spring morning portrait of a {argument name="subject" default="beautiful young woman"} sitting barefoot on a {argument name="setting" default="wooden window seat"} beside a large open window, holding a small white blossom in her hand. {argument name="hair color" default="Soft wavy black"} shoulder-length hair with a delicate flower tucked behind her ear, natural glass-like skin texture, subtle makeup, realistic facial proportions, gentle dreamy expression, {argument name="outfit" default="oversized pastel pink-and-lilac knitted cardigan"} draped over a white camisole and loose cream lounge pants. Outside the window, lush cherry blossom trees in full bloom create a dreamy pink bokeh background. Warm golden sunlight streams through sheer lace curtains, casting soft natural shadows and highlights across the room. Cozy cottage-inspired interior with wooden details, small potted flowers, pastel cushions, peaceful spring atmosphere. Photorealistic, cinematic lifestyle photography, shallow depth of field, soft focus background, HDR lighting, highly detailed skin and hair strands, authentic fabric textures, natural color grading, magazine editorial quality, 85mm lens, f/1.8, 8K resolution, masterpiece, serene and elegant mood, no plastic skin, no CGI look, realistic hands and feet, natural facial features, high-detail eyes, premium photography.*
```

## Cafe Window Analog Film

> Görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
:Use uploaded reference face exactly, zero modification) FACE LOCK — ZERO MODIFICATION POLICY. Face must remain 100% identical. ASPECT RATIO • 3:4. STYLE: Analog Film Aesthetic. SCENE: {argument name="scene" default="Woman looking out of a foggy cafe window"}. OUTFIT: {argument name="outfit" default="Oversized beige knit sweater"}. ACCESSORIES: Small pearl studs. POSE: Chin resting on hand, reflection visible on the glass. LIGHTING: {argument name="lighting" default="Cool, moody blue light from outside, warm yellow light inside"}. BACKGROUND: Blurred street lights through rain. CAMERA: 35mm film style, subtle grain. IMAGE QUALITY: High detail, realistic condensation on glass.
```

## Woman Sketching in Art Studio

> Fotogerçekçi, elle çizilmiş görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A real young woman smiling, wearing {argument name="outfit" default="lavender turtleneck top, oversized navy blue corduroy jacket, wide-leg grey trousers"}, navy sneakers, cat-eye sunglasses, holding a white coffee mug, standing in front of a large detailed pencil sketch drawing of herself on a white wall, sketching tools and open notebook scattered on the floor, pencils and sharpener visible, creative art studio aesthetic, hyperrealistic photography meets pencil art concept, full body shot, bright white background, 8K --ar 2:3 --style raw --q 2
```

## Cockroach Skincare Meme

> Görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
a little cockroach with the text: {argument name="text" default="skin care will make me beautiful"}
```

## Layered Instant Print Human Figure Art

> Fotogerçekçi, sinematik 3B sahne üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Hyperrealistic 8K photograph of a {argument name="subject" default="human figure"} composed of instant photographic prints layered on a {argument name="background" default="dark, distressed, slate-textured, modern minimalist background"}. The figure, displaying the reference face, is meticulously assembled from approximately 20 separate photographs showing a {argument name="clothing" default="fucsia patterned T-shirt"}. Two hands reach out to adjust the photos; one hand pinches the corner of a print, revealing a subtle ring. Cinematic studio lighting, soft shadows, and 3D depth. Cool and warm color palette, muted and desaturated. Medium shot, eye level, natural proportions.
```

## Coastal Golden Hour Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A {argument name="subject" default="young male"} stands in the right-center foreground, featuring short messy textured hair, light facial stubble, and a genuine, approachable, subtle closed smile. He wears a {argument name="clothing" default="sage green button-down linen shirt left unbuttoned at the top"} and beige relaxed-fit trousers. His posture is organically relaxed as he leans back with tilted shoulders and shifted weight against a rough, weathered palm tree trunk, his arms casually crossed at his chest with his left hand resting lightly on his right bicep, its fingers visibly curving naturally over the green linen sleeve. He is supported by the thick, dominant palm tree trunk on the right, defined by its heavily textured bark with horizontal ridges, while standing on {argument name="ground" default="beige sand marked by uneven organic footprints and ripples"}. Stretching into the deep midground behind him, gentle ocean waves break on the shore, balanced asymmetrically on the left by three slender, weathered palm trees with tall, thin trunks leaning slightly away from the coastal breeze. Far in the deep background, a clear distant horizon line separates the water from a dusky sky filled with soft, patchy cumulus clouds. The serene scene is bathed in calm, single-source, diffused frontal lighting of moderate intensity, creating a warm golden hour glow. Subtle highlights gently kiss the subject's forehead and cheekbones, as well as the edges of the patchy clouds, while faint, medium-length shadows with soft, gradual edges pool beneath his crossed arms, along the left side of the palm tree trunk, and lightly upon the sand behind him. The environment is enveloped in an analogous, desaturated color palette of sage green, sand beige, soft sky blue, dusky pink, and tree trunk brown, generating a soft, low-contrast atmosphere. Captured with a digital photography travel blogging aesthetic using a 35mm or 50mm lens and an aperture between f/4.0 and f/5.6 to maintain a deep depth of field that keeps the ocean and distant trees relatively in focus, the image features a slightly soft sharpness enhanced by ISO 400 digital noise grain. Post-processing introduces lifted blacks for a faded film look, a warmed white balance, and muted greens, culminating in a realistic portrait framed in a 4:5 aspect ratio.
```

## Cyberpunk Streetwear Portrait in Osaka

> Sinematik, fütüristik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Young woman in uploaded image, {argument name="jacket style" default="glowing cyan streetwear oversized jacket"}, black shorts, yellow cap backwards, long dark wavy hair down, holding bubble tea, crouching playful pose facing camera, {argument name="location" default="Osaka Dotonbori night canal background"}, vivid reflections on wet pavement, cinematic lighting.
```

## Realistic Looney Tunes Selfie

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic 4:5 vertical format ultra wide angle 13mm selfie of me with {argument name="characters" default="Bugs Bunny, Daffy Duck, Porky Pig, Elmer Fudd, Yosemite Sam, Tweety, Sylvester"} in my studio. I am wearing {argument name="clothing" default="pale pink t-shirt"}. We're all making silly, exaggerated faces. High camera angle. Extreme wide lense no fish-eye distortion. Realistic, live action characters no cartoon, cinematic lighting, all realistic characters integrated with stylized realism.
```

## Cinematic Worm's-Eye View Field Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Photorealistic cinematic photo, 3:4 vertical frame, shooting from a {argument name="angle" default="very low point of grass/flowers (worm's-eye view)"} on a wide-angle lens-24-28mm. In the center of the frame, chest-deep, is a {argument name="subject" default="25-year-old young woman with fair skin and dark brown hair"}, wearing a dark blue/black sweatshirt with a small white inscription on the chest, and a thin chain around his neck. The pose is calm, the body is slightly turned to the right, the head looks straight at the viewer and is raised; the focus is on the upper body. Foreground: large blurred yellow bees, yellow flowers and green stems, strong sideways, one large warm orange glare/spot at the bottom of the frame. Middle ground: around the model there are wild plants and flowers, some of the stems are sharp, some are in a soft blur. Background/sky: a large turquoise-blue open sky with large white cumulus clouds on the left and above. There are a lot of small orange petals/seeds/leaves in the air above and around the model, as if they were picked up by the wind; they are at different distances and partially blurred (motion blur + shallow DOF), creating the effect of "floating particles". Lighting: natural daylight, the sun is high / slightly behind on the left; soft contour illumination of hair and shoulders, sun is on accents + cool sky, light teal-orange grading, moderate vignette. Parameters/style: shallow depth of field, foreground bokeh, crisp subject, cinematic, ultra realistic, high detail, natural film look, slight haze, no text overlays, no logos, no watermark. Negative promt: illustration, CGI, cartoon, plastic skin, overexposure, strong noise, dirty background, superfluous people, buildings, wires, large readable inscriptions on clothes, artifacts, deformity of arms/shoulders.
```

## Mountain Viewpoint Fashion Portrait

> Moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A beautiful young woman with the same face as the uploaded image, sitting on a {argument name="prop" default="large rock at a mountain viewpoint"}, holding a {argument name="flower" default="small red-flower branch"} near her face, wearing an {argument name="outfit" default="off-white embroidered kurti, light blue flared jeans, and cream sandals"}. Surrounded by pine trees, lush greenery, and a scenic valley with distant misty mountains.
```

## Contemporary Mixed-Media Abstract Portrait

> Elle çizilmiş mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-expressive contemporary mixed-media portrait painting that fuses {argument name="style" default="bold urban pop-expressionism"} with {argument name="art technique" default="atmospheric impressionistic fine-art realism"}. Dynamic oversized brushstrokes, gestural palette-knife textures, spontaneous paint splashes, layered translucent washes, and abstract geometric color fragments merge seamlessly with soft painterly blending and refined figurative rendering. Vibrant high-contrast color harmonies featuring {argument name="colors" default="saturated cobalt blue, turquoise, golden yellow, coral red, burnt orange, and luminous cream tones"} create dramatic visual energy while preserving natural depth and emotion. Faces and figures are rendered with semi-realistic anatomy, sculpted through expressive color blocking, chromatic shadow mapping, and painterly edge variation rather than strict realism. Backgrounds dissolve into abstract architectural shapes, fragmented memories, layered color fields, and loosely sketched structural lines, creating a dreamlike urban atmosphere. Visible brush marks, dripping pigments, accidental textures, scratched paint surfaces, watercolor blooms, and acrylic layering emphasize handcrafted authenticity. The overall aesthetic balances contemporary gallery art, emotional expressionism, modern figurative painting, abstract impressionism, and editorial portrait sophistication, resulting in a vibrant, soulful, richly textured visual language that feels both energetic and poetic. R 9:16 vertikal.
```

## Cozy Bedroom Nighttime Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic candid iPhone lifestyle photograph in vertical 9:16 aspect ratio. {argument name="subject" default="Sadie Sink"} lying prone naturally on a cozy bed inside a softly lit modern bedroom at night. Long blonde hair slightly messy with loose strands falling naturally across her face and shoulders. Calm intimate expression with direct eye contact toward the camera, relaxed late-night atmosphere.

She is wearing a {argument name="top" default="fitted pastel-blue cropped lounge top"} with delicate thin straps and {argument name="bottom" default="fitted white pajama shorts"}. Natural relaxed body posture on the bed.

Shot from a low-angle close-up selfie perspective using realistic iPhone camera rendering. Her face dominates the foreground in sharp focus while her relaxed silhouette softly extends deeper into frame naturally. Slight natural smartphone lens softness and subtle depth blur create authentic candid realism.

Environment: cozy modern bedroom with warm ambient lighting. A white vanity desk and large glowing LED arch mirror illuminate the background with warm orange and subtle cool blue tones. Neutral cream bedding with soft fabric folds and plush pillows. Framed wall artwork displaying the word 'Love'. Soft decorative LED lighting throughout the room.

Lighting: warm bedside tungsten glow mixed with cool blue LED reflections from the vanity mirror, creating cinematic orange-blue contrast across skin, hair, and bedding. Gentle shadow gradients and realistic low-light mood.

Highly detailed realistic skin texture, visible pores, natural hair strands, realistic cotton fabric texture, subtle digital grain, cinematic color grading, shallow depth of field, cozy intimate nighttime atmosphere, realistic iPhone low-light photography aesthetic, ultra realistic 8k quality.
```

## Luxury Pet and Human Editorial

> Sinematik, minimal moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a luxury editorial-style portrait using the provided human face and pet as the exact subjects. Keep both identities completely unchanged, preserving all facial features, hairstyle, skin tone, eye color, and the pet’s breed and appearance with maximum accuracy. The composition should feel elegant and timeless, with the human standing directly behind the pet and gently holding it in a secure, natural embrace. The pet should occupy the lower half of the frame while the human’s face is positioned directly above, creating a balanced and symmetrical 4:5 portrait. Both subjects should look straight into the camera with calm, confident, and serious expressions, emphasizing sophistication, trust, and a genuine emotional connection. The human wears a fitted black high-neck long-sleeve top with a clean luxury aesthetic. The pet rests comfortably in the arms, with its front paws naturally visible and relaxed. Keep the pose refined, natural, and editorial rather than playful. Use a seamless dark charcoal-gray studio backdrop with a subtle gradient, completely free of distractions, props, text, logos, or furniture. The overall mood should resemble a high-end Vogue-style portrait campaign. Lighting should be soft professional studio lighting with a large diffused key light and subtle fill light, creating smooth skin tones, realistic facial contours, detailed fur texture, soft shadows, and natural catchlights in both subjects' eyes. Maintain cinematic depth, refined contrast, and a premium fine-art portrait feel. Captured with a professional full-frame camera, 85mm portrait lens, f/2.0 aperture, eye-level perspective, ultra-high resolution, shallow depth of field while keeping both faces perfectly sharp. Focus on realistic skin texture, detailed eyes, natural hair strands, lifelike fur, subtle cinematic color grading, neutral tones, and magazine-quality composition. Style: luxury editorial photography, premium pet portraiture, cinematic realism, minimalist luxury, timeless elegance, ultra-photorealistic, hyper-detailed, 8K HDR, award-winning photography. The final image should communicate elegance, warmth, companionship, quiet confidence, and a deep bond through simple, refined composition. Negative prompts: identity changes, face distortions, face-swapping errors, anatomy issues, extra limbs, duplicated paws, morphing, hybrid features, unrealistic proportions, AI artifacts, cartoon effects, painting styles, plastic skin, beauty-filter look, blurry eyes, low resolution, cluttered backgrounds, text, logos, watermarks, or awkward posing.
```

## Wet Look Fashion Portrait JSON

> Moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "subject": {
    "identity": {
      "likeness_calibration": "{argument name="subject likeness" default="A 100% high-fidelity physical and anatomical representation of Emily Rudd, capturing her specific facial morphology and genetic markers."}",
      "features": {
        "facial_structure": "Accurate representation of Emily Rudd's oval face shape, button nose, and defined jawline.",
        "eyes": "Striking, clear blue-grey iris pattern (specific to Emily Rudd) with realistic light refraction and wet, detailed eyelashes.",
        "expression": "A serious, composed, and neutral expression. No smile, maintaining a high-fashion editorial look.",
        "hair": "Emily Rudd's signature dark brown hair (#2B1E16), presented in a heavy wet-look. The hair is slicked back, saturated with water, showing visible droplets and a high-gloss sheen, clinging to the neck and shoulders.",
        "skin": "Wet, glistening skin texture with visible water droplets and a continuous moisture film. Natural skin pores and fine details are prioritized. Skin tone is a natural fair porcelain with a subtle sun-kissed glow (HEX: #F5E1D2), darkened and saturated by moisture."
      }
    },
    "body": {
      "form": {
        "structure": "A precise anatomical representation of Emily Rudd's fit and athletic hourglass physique.",
        "definition": "Toned core and limb definition, glistening with water and reflecting dual light sources. Zero tolerance for anatomical artifacts or smoothing.",
        "constraints": {
          "zero_tolerance": [
            "no anatomical artifacts",
            "no extra limbs",
            "no beautify smoothing",
            "no distorted joints"
          ]
        }
      },
      "measurements": {
        "waist_to_hip": "Accurate physical ratio maintained in the seated, cross-legged pose."
      }
    }
  },
  "wardrobe": {
    "primary": {
      "item": "Criss-cross strap monokini with cutout design.",
      "color": "{argument name="wardrobe color" default="Vibrant Crimson Red (HEX: #B22222)"}. The fabric is dark and saturated due to water, showing realistic weight and clinging properties.",
      "details": "Central gold-tone metal ring connector (#D4AF37) at the solar plexus with high-gloss reflections."
    },
    "accessories": "None."
  },
  "pose_action": {
    "description": "Seated on the edge of a light-colored stone pool coping (#D2D2D2). Legs are crossed and extended forward. The right hand rests on the coping. The pose maintains a structured, symmetrical skeletal alignment."
  },
  "scene": {
    "description": "Luxury resort pool area at night. Foreground features wet marble with reflection integrity for the red monokini and turquoise lights.",
    "environment": {
      "midground": "Turquoise illuminated pool water (#00CED1) with surface ripples. Symmetrical rows of light gray lounge chairs and closed umbrellas.",
      "background": "Distant palm trees with warm uplighting"
    }
  }
}
```

## Confident Sunset Beach Portrait

> Sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A confident young bearded man stands anchoring the left-center of the composition, turned at a relaxed 45-degree angle with his thick, textured, wavy hair blown slightly by the coastal wind. He is dressed in a loose, unbuttoned light blue and white vertically striped shirt layered over a white tee, paired with white trousers, and accessorized with a thin silver chain resting on his chest. His left hand is relaxed and mostly out of frame, while his right hand, adorned with silver rings and a silver watch with a brown leather strap, is raised to his face. His index finger and thumb lightly grip the metallic bridge and top frame of his dark-tinted sunglasses in a deliberately posed yet natural gesture. Behind the dark lenses, his facial expression is composed and relaxed, with loosely closed lips conveying a quiet confidence. He is situated within a deep, expansive beach setting at dusk. In the immediate foreground, smooth, wet beach sand forms dark, reflective gradients from the receding water. Behind him, the midground opens up to an expansive ocean with active gentle surf, reflecting the vivid sky and leaving traces of white sea foam along the shoreline. The background sky stretches wide, accented by wispy clouds in the top left that catch the faint pink and orange light of the fading sun. A serene, moody twilight atmosphere dominates, driven by moderately directional, warm soft backlighting from the sun dipped just below the horizon, washing the sky in deep dusk purples and vibrant sunset oranges. This dramatic backlighting casts deep black, gradually edged shadows across the front of the subject that project toward the viewer, creating a high-contrast silhouette against the vibrant background. Subtle, golden highlights catch the distant horizon water, the metallic watch bezel, the rim of the sunglasses, and create a delicate rim light tracing the edges of his textured hair. Captured as realistic digital photography with a deep depth of field that separates the subject through luminous contrast rather than heavy blur, the scene embodies a minimal, lifestyle aesthetic shot straight-on. The post-processing features warm color grading, enhanced saturation on the sunset tones, slightly crushed shadows, and a slightly soft sharpness textured by atmospheric digital noise and film grain, all seamlessly framed in a 4:5 aspect ratio.
```

## Dining at LUMOS Restaurant

> Retro görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A {argument name="subject" default="beautiful young woman with flowing brown hair"} is sitting at an outdoor table of a restaurant named '{argument name="restaurant name" default="LUMOS"}', visibly eating a juicy hamburger she holds in both hands. She's smiling softly at the camera and wearing a {argument name="outfit" default="crisp white button-down shirt tucked into denim shorts"}. On the table, there's a wire basket filled with golden French fries, a metal cup of dipping sauce, a plate of crispy onion rings, and a glass with a layered chocolate milkshake and a red-and-white straw. The large, retro sign with big glowing letters reading 'LUMOS' is clearly visible above the restaurant in the background. The scene is bathed in warm, golden afternoon light, casting a cozy and inviting atmosphere. In the background, other people can be seen indistinctly, adding life to the setting.
```

## Macro Cinematic Rugged Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A macro cinematic 8K portrait of a {argument name="subject" default="rugged man"}, focusing on the {argument name="details" default="intense, sharp detail of a single eye and iris"}. His skin and thick beard are glistening with wetness, captured with extreme tactile texture. Individual wet strands of hair fall loosely across his face. Shot on a 50mm lens with a shallow depth of field. {argument name="lighting" default="Dramatic, high-contrast chiaroscuro lighting"}, where warm orange and golden hour highlights illuminate individual moisture droplets against deep, atmospheric shadows. Raw, photorealistic, and emotionally powerful.
```

## Candid iPhone Street Selfie

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Photorealism. Ultra-photorealistic vertical 9:16 candid iPhone street selfie of a {argument name="subject" default="man in his early 30s"} walking on a {argument name="location" default="European city sidewalk"}. Real Instagram snapshot, NOT cinematic, NOT golden hour. FACE: Sun-kissed warm complexion. Deep brown eyes with natural lashes. Bold natural eyebrows, slightly thick. Strong masculine nose. Full natural lips in neutral tone. Light freckles across nose bridge and cheeks. Light stubble (1-2 days growth) across jaw and upper lip. HAIR: Short to medium dark brown hair, slightly tousled and windswept, natural texture. Some strands falling forward on forehead. Natural hairline with minor recession at temples. FACIAL HAIR: Light stubble, 1-2 days growth, slightly uneven. Natural shadow on jawline and upper lip. POSE: Mid-stride walking forward toward the camera, body slightly turned three-quarter, holding the phone in his right hand extended toward camera. Left hand holding a takeaway coffee cup. Joyful natural expression, mouth slightly open in a small laugh, teeth visible. OUTFIT: {argument name="outfit" default="Oversized vintage black leather biker jacket. Plain black or grey crew-neck t-shirt visible underneath. Faded blue jeans. Black canvas messenger bag or simple black crossbody bag with adjustable strap. Black or brown leather boots (Chelsea or lace-up)."} ENVIRONMENT: Narrow European city street lined with classic 19th-century stone buildings on both sides, cream stone facades, tall windows with black wrought-iron balconies. A vintage matte black SUV parked along the curb behind him. A few blurred pedestrians in the distance. Beige paved sidewalk visible in the foreground. LIGHTING: Overcast natural afternoon daylight. Soft diffused light from evenly clouded sky. NO direct sunlight, NO golden hour, NO warm orange tones. Lighting is flat, balanced, slightly cool. Soft ambient shadows. NOT cinematic. SKIN: Hyper-realistic with visible pores, facial hair texture, light freckles, subtle redness, micro-imperfections, natural sheen. Fine lines starting around eyes (crow's feet). Slight nasolabial folds. NO smoothing, NO beauty filter. CAMERA: iPhone front camera selfie at arm's length, 9:16 vertical, slight low angle. Sharp focus on his face. Authentic phone grain, slight chromatic noise. STYLE: Real Instagram street selfie, joyful candid energy. Authentic Parisian or Milanese afternoon vibe. Zero AI artifacts, zero cinematic stylization.
```

## Prone Bedroom Mirror Selfie

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{"subject": {"identity": {"biometric_reference": "Sadie Sink", "age_representation": "Early 20s"}, "facial_features": {"craniofacial_structure": "Heart-shaped facial morphology, soft yet defined jawline, balanced facial fat distribution.", "hair": "Natural ginger-copper red pigment, wavy texture, fine follicular detail at the hairline.", "eyes": "Distinct bright sky-blue iris, intricate radial furrows, clear sclera, dense natural eyelashes.", "nose": "Refined bridge, slightly rounded tip, prominent natural freckle clusters across the nasal bridge and cheeks.", "mouth": "Natural rose-pink vermilion border, soft cupid's bow, realistic labial texture, visible natural dentition.", "skin": "Porcelain complexion with cool undertones, high-density ephelides across the mid-face and shoulders, visible translucency with subsurface scattering."}, "body": {"somatotype": "Slender and athletic build.", "morphology": "Delicate clavicle definition, lean limb structure, anatomically precise proportions for a petite frame.", "limbs": "Slender forearms, anatomically precise hand structure with realistic joint skin folds, visible plantar texture.", "skin_physics": "Ultra-high-fidelity texture mapping, realistic skin elasticity, natural dermal topography."}}, "wardrobe": {"top": {"item": "Ribbed cotton tank top", "color": "#F06292 (Deep Pink)", "material_science": "Vertical rib-knit texture, 220 GSM weight, realistic fabric tension and natural drape across the torso."}, "bottom": {"item": "Athletic dolphin shorts", "color": "#9E9E9E (Heather Gray) with #FFFFFF (Pure White) trim", "material_science": "High-cut design, ergonomic hemline, realistic fabric-to-skin tension."}}, "pose_action": {"position": "Prone position on a bed, upper body supported by elbow flexion.", "upper_body": "Left hand resting near the facial plane, right hand holding a smartphone in a mirror-selfie orientation.", "lower_body": "Knees flexed at 90 degrees, lower legs vertical, feet positioned naturally.", "interaction": "Direct gaze toward the mirror reflection, neutral facial expression.", "reflection_logic": "Physically accurate mirror reflection with coherent spatial inversion."}, "scene": {"environment": "Minimalist residential bedroom.", "bed": "White cotton linens with volumetric wrinkle detail and natural shadow depth.", "walls": "Flat-finish neutral surfaces (#E0E0E0), matte texture.", "composition": "9:16 vertical aspect ratio, mirror frame integrated as a framing device.", "reflection_integrity_rules": "All reflected elements must align with subject's physical coordinates; lighting must adhere to the law of reflection."}, "lighting": {"primary_source": "Diffused natural daylight from an adjacent window.", "characteristics": "Soft-shadow gradients, specular highlights on the iris and device screen, realistic global illumination.", "material_interaction": "Diffuse reflection on textiles, light scattering on porcelain skin tones."}, "camera": {"specifications": "9:16 format, 8k resolution, raw output.", "optics": "35mm equivalent wide-angle lens, f/2.8 aperture for soft background separation, deep focus on the subject.", "technical_meta": "High dynamic range, zero processing filters."}, "negative_constraints": ["No logos", "No text", "No watermarks", "No brand names", "No extra limbs", "No distorted fingers", "No merged anatomy", "No artificial smoothing", "No double reflections", "No floating objects"]}
```

## Realistic Zen Garden Landscape

> Manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
#masterpiece #realistic photo #landscape #{argument name="garden type" default="Zen garden gravel"} #{argument name="camera angle" default="overhead view"} #wet patterns #black stones #{argument name="environment" default="tranquil rain"}
```

## Girl Cycling City Illustration

> Illüstrasyon üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Girl cycling through a sunny city street, illustration style
```

## World Cup Goalkeeper Save

> Fotogerçekçi görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
World Cup Final penalty save, the subject as goalkeeper, strict face reference, full-stretch horizontal dive, professional FIFA-style soccer ball impacting compressed goalkeeper glove, frozen action, intense focus, visible sweat and muscle tension, {argument name="nationality" default="[NATIONALITY]"} supporters in {argument name="primary color" default="[COLOR1]"} and {argument name="secondary color" default="[COLOR2]"} filling the stadium, flying turf particles, pitch-level side angle, 400mm sports lens, 1/4000 shutter, dramatic floodlights, Getty Images sports photography, ultra-photorealistic
```

## Dopamine Decor Surreal Flower Swing

> Moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A wide-angle full-room shot of a maximalist dopamine-decor room saturated in candy pink and sunny yellow, every surface joyful and color-drenched. In the exact center hangs a flower swing: a wooden seat thick with fresh blooms, fat pink peonies and roses and bright daisies woven all along the seat and trailing in garlands. But the swing's two flower-covered ropes do not reach the ceiling: they rise up and dissolve into a single small glowing sphere of warm fire-yellow light hovering high in the center of the room, a tiny captured sun the swing hangs from, the brightest point in the frame. Around the swing, the petals she has shed are not falling: they drift slowly upward through the air, rising toward the glowing sphere in a soft reverse-gravity bloom. Seated mid-swing is a young woman in her early 20s with long glossy hair that lifts and drifts upward in the motion, partly veiling her face so only a soft smile and one cheek show, her identity half-hidden in hair and floating petals. She leans back into the swing with relaxed joy. She wears a fashion-forward Y2K look: a baby-pink cropped baby tee with a tiny glittery butterfly graphic, a low-rise pleated lemon-yellow mini skirt, white knee-high socks, chunky pink-and-white platform sneakers, small butterfly hair clips, layered beaded bracelets and a jelly choker. Around her the room is pure dopamine: glossy pink walls, a yellow gingham rug, inflatable furniture, a beaded curtain, daisy-shaped cushions, a lava lamp, shelves of colorful trinkets, potted flowers and hanging plants in every corner. Soft even daylight floods the room, bright and high-key, minimal shadows, but the fire-yellow sphere glows warmer and more saturated than anything else. Wide lens, moderate depth of field, faithful saturated colors, crisp textures. Joyful, nostalgic, playful, warmly surreal.
```

## Billie Eilish Inspired Sepia Candid Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
"subject": "{argument name="subject" default="young woman"}, dark bob, dramatic eye roll, holding food, rings",
  "outfit": "black polka dot low-cut slip dress, delicate necklace",
  "setting": "warm amber living room, Grammy on shelf, cone lamp",
  "mood": "sepia-toned, candid, humorous"
```

## Italian Riviera Vacation Portrait

> Minimal, retro moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A young adult male stands positioned in the right rule of thirds, projecting a confident and serious demeanor with a closed neutral mouth and his gaze directed off-camera to the right, hidden behind black wayfarer sunglasses. He is dressed in a dark navy-black crewneck sweater and light cream-colored trousers. His head is turned right while his body angles forty-five degrees left, his weight shifted casually onto his hips as he leans. His shoulders are relaxed, with the right shoulder sitting slightly lower than the left. His classic side-parted hair, tapered to an inch on the sides and leaving three inches on top, is combed back and to the right with a medium-hold styling product that yields a subtle sheen; the smooth, slightly wavy texture features distinct individual strands that catch the light, creating a delicate halo of natural flyaways around a clean hairline and a well-groomed short stubble beard connecting to his sideburns. His left hand rests on a railing, wearing a silver link wristwatch while holding the base of a small white ceramic espresso cup with the thumb and index finger visible. His right hand rests gently over his left wrist and the base of the cup, with relaxed fingers naturally draped in an organic gesture. In the immediate foreground, a weathered, dark green vintage wrought iron railing with decorative twisted uprights and swirling scrollwork spans the width of the frame. To the left foreground, vibrant red blooming flowers with bright green leaves thrive as they spill over a rough, unfinished matte terracotta red brick pillar marked by patchy grey mortar and weathered aging. Beyond the railing, the deep spatial depth reveals a pristine midground of deep blue-green lake water textured by subtle ripples and a distant boat wake. The expansive background rises into steep, densely forested green mountains dotted with traditional Italian villas featuring yellow and white facades beneath terracotta roofs. The scene is bathed in bright, highly directional natural sunlight striking from a forty-five-degree side and top-left angle, cultivating a warm, golden, and sophisticated Italian Riviera vacation mood. This single source of hard light creates a high-contrast environment with harsh, defined deep black shadows falling under his chin, down the right side of his torso and right leg, and casting directly onto the sweater from his arm. Brilliant preserved highlights carve a strong rim light along his left shoulder, left cheek, and left arm, accompanied by crisp specular highlights glinting off the silver watch face and the sunglasses. The complementary color palette balances the heavy navy and cream of the subject against the expansive lake teal, forest greens, and striking vibrant red floral accents. Captured as a realistic digital photograph with a straight-on perspective, the image utilizes a 35mm to 50mm full-frame lens locked onto the subject's face at f/5.6 to f/8, maintaining tack-sharp focus on the man while rendering the deep depth of field with a slightly soft yet highly recognizable background clarity. The clean, old-money luxury aesthetic is refined in post-processing with an enhanced contrast curve to deepen shadows, a slightly warm golden hour white balance, saturated blues and greens for the water and foliage, and pushed red luminance to make the flowers pop, all seamlessly framed in a 3:4 aspect ratio.
```

## Smartphone Night Motion Blur Photo

> Fotogerçekçi, fütüristik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "objective": "Generate a hyper-realistic, low-quality smartphone photo capturing a spontaneous night-out moment with strong motion blur and fluid movement.",
  "subject": {
    "description": "{argument name="subject" default="extremely beautiful woman"}",
    "features": [
      "long flowing hair",
      "slender silhouette",
      "face partially obscured due to motion blur",
      "carefree, energetic presence"
    ]
  },
  "outfit": {
    "style": "{argument name="outfit style" default="night out"}",
    "details": [
      "short black dress or skirt",
      "dark top",
      "knee-high boots",
      "small shoulder bag"
    ]
  },
  "pose": {
    "body_language": [
      "walking or spinning forward",
      "one arm raised above head",
      "hair swinging dynamically",
      "captured mid-motion"
    ],
    "expression": "not clearly visible due to motion blur, candid and unposed"
  },
  "scene": {
    "location": "{argument name="location" default="urban street at night"}",
    "details": [
      "warm streetlights casting yellow glow",
      "neon signs and shop lights above",
      "parked cars along the street",
      "narrow city sidewalk with buildings on both sides",
      "slightly gritty, real environment"
    ]
  },
  "camera_style": {
    "type": "smartphone",
    "angle": "slightly behind and off-center",
    "framing": "full-body vertical shot",
    "quality": [
      "intentionally low quality",
      "heavy motion blur",
      "slight overexposure from lights",
      "grain and noise",
      "imperfect focus"
    ]
  },
  "lighting": {
    "type": "mixed night lighting",
    "details": [
      "warm sodium streetlights",
      "cool neon highlights",
      "uneven exposure",
      "light streaking due to motion"
    ]
  },
  "mood": "carefree, spontaneous, nightlife energy, slightly chaotic but aesthetic",
  "effects": [
    "strong motion blur on subject",
    "light streaks from lamps and neon",
    "camera shake",
    "grainy texture",
    "soft focus and imperfect clarity"
  ],
  "negative_prompt": [
    "sharp focus",
    "studio lighting",
    "posed fashion shot",
    "high resolution clarity",
    "clean perfect image",
    "tripod stability",
    "overly detailed face"
  ]
}
```

## Man Reading Book Outdoors

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A young man with dark, textured hair and a beard is resting his cheek on his right hand while sitting at a brown wooden table outdoors. He is wearing a {argument name="outfit" default="red knitted sweater adorned with white heart patterns"}. In his left hand, he holds an open white book titled {argument name="book title" default="“Something I Never Told YOU”"} in pink lettering on the cover, with the text visible on the back side of the book. The setting is {argument name="background" default="blurred in the background"}, focusing attention on the person and the book.
```

## Low Angle Poolside Summer Photography

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Pool edge, {argument name="time of day" default="late afternoon"}. Model sitting on edge, legs in water, leaning back on both hands — body arching slightly. Camera at water level, shooting upward at her from pool side. Water surface in foreground slightly blurred. Sky and palm trees behind. 1/1000s catching light ripple on skin. 50mm f/1.4. Edit: poolwater {argument name="water color" default="teal"} against warm golden skin.
```

## Chopin Playing Piano (Fantasy Style)

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{argument name="person" default="Chopin"} playing the piano

{argument name="style" default="fantasy style"}
```

## Chopin Playing Piano (Cyberpunk Style)

> Fütüristik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{argument name="person" default="Chopin"} playing the piano

{argument name="style" default="cyberpunk"}
```

## Urban Motorcycle Fashion Portrait

> Sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
He leans casually against a {argument name="motorcycle" default="stell continental gt 650 chrome"} in an outdoorurban setting, wide tires perfectly customized body with a {argument name="wall color" default="dark gray"} wall with natural plant environment and patches of foliage in the background. Natural yet muted lighting creates a subdued atmosphere, where dark neutral tones contrast with the vivid {argument name="sneaker color" default="white"} of his sneakers, the scene captures an edgy, cinematic sense of nonchalance and introspection. Short line High detailed, professional photography with 8k.
```

## Cyber Renaissance Cyborg Aristocrat

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{"vibe_title_en": "Cyber Renaissance", "master_prompt": "A hyper-realistic, cinematic close-up portrait of The Protagonist depicted as a high-fashion cyborg aristocrat. The subject's face is flawlessly human with hyper-detailed skin pores and natural peach fuzz, but the cranium transitions seamlessly into complex, exposed mechanical components made of polished white ceramic, chrome, and intricate cabling. They are wearing delicate, rimless oversized glasses that catch the studio light with realistic refraction. A highly articulated, practical-effect robotic hand—crafted from white enamel and gold internal mechanisms—gently rests against the subject's jawline in a pensive, philosophical pose. The subject is dressed in a lavish, textured brocade jacket featuring heavy pink and gold floral embroidery, evoking 18th-century royal attire. The lighting is exquisite and soft, using a Rembrandt setup with a large modifier to create lustrous highlights on the metallic surfaces and dewy skin. Shot on a Hasselblad H6D-100c with a 120mm Macro lens to capture the microscopic contrast between biological skin and manufactured alloy. The aesthetic is 'Future-Vintage', utilizing Kodak Portra 160 film stock simulation for creamy tones and fine grain.", "meta": {"intent": "Editorial Fashion", "priorities": "Texture Contrast, Photorealism, Surrealism", "device_profile": "High-End Medium Format"}, "frame": {"aspect": "4:5", "composition": "Close-up portrait, three-quarter angle", "layout": "Centered subject with negative space on the right", "camera_angle": "Eye-level", "tilt_roll_degrees": "0"}, "subject": {"gender": "Female", "identity": "The Cybernetic Aristocrat", "demographics": "Ageless, ethereal", "face": "Flawless skin, glossy lips, pensive gaze", "hair": "Slicked back, transitioning into mechanical plating", "body": "Human face, robotic cranium and hand", "expression": "Contemplative, serene, slightly melancholic", "pose": "Hand resting gently on chin/jawline"}, "wardrobe_accessories": {"garments": [{"item": "Brocade Jacket", "material": "Heavy Silk/Embroidery", "color": "White/Pink/Gold", "fit": "Structured, Haute Couture"}], "accessories": [{"item": "Rimless Glasses", "color": "Transparent/Silver", "material": "Glass/Titanium", "brand_style": "Futuristic Luxury"}, {"item": "Cyborg Plating", "color": "White/Chrome", "material": "Ceramic/Metal", "brand_style": "Industrial Design"}]}, "environment": {"setting": "Studio Void", "surfaces": "Atmospheric dust, soft velvet backdrop", "depth": "Shallow depth of field", "atmosphere": "Quiet, sterile but elegant", "lens_interaction": "Sharp focus on eyes/hand, creamy bokeh falloff"}, "lighting": {"key": "Softbox (Octobank) 45-degree angle", "fill": "White bounce card for shadow detail", "rim": "Cool white edge light on mechanical parts", "shadows": "Soft, diffused", "color_temperature": "5600K (Daylight balanced)", "sensor_flare": "Minimal, controlled bloom on highlights"}, "camera": {"lens_type": "Macro Prime", "focal_length": "120mm", "aperture": "f/4.0", "focus": "Critical focus on the eye and robotic fingertip", "sensor_format": "Medium Format (53.4 x 40.0mm)", "perspective_distortion": "None (flattering compression)"}, "post_processing": {"color": "Pastel luxury, metallic neutrals, soft pinks", "tonality": "High-key but with rich contrast in textures", "texture": "Fine organic grain overlay (Kodak Portra)", "digital_sharpening": "High frequency texture enhancement", "chromatic_aberration": "Negligible"}, "negative_specifications": ["cartoonish", "3d render look", "low resolution", "neon lights", "cyberpunk cliche", "plastic skin", "illustration", "anime style"]}
```

## Cinematic Lakeside Identity Portrait

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra realistic cinematic lakeside portrait photo of {argument name="reference person" default="[REFERENCE PERSON]"}, preserve the exact facial identity, facial structure, skin texture, hairstyle, eye shape, lips, and overall likeness from the reference image with extremely high identity accuracy.

Scene composition identical to the reference scene: a beautiful woman sitting on the edge of a rustic wooden dock beside a calm lake during golden hour sunset, soft warm sunlight, natural reflections in the water, lush green reeds in the background, overhanging tree leaves at the top frame, shallow depth of field, creamy bokeh forest background.

Subject pose: seated sideways on the dock with legs extended naturally over the water, looking downward softly toward an orange ginger cat beside her, relaxed elegant posture, candid feminine mood.

Outfit: light pink floral summer dress with thin straps, flowing fabric, delicate details, natural folds, realistic texture.

Environment must remain almost identical to the original image: same wooden pier style, same lakeside atmosphere, same lighting direction, same framing, same cinematic composition, same peaceful aesthetic.

Photography style: DSLR realism, 85mm portrait lens, f/1.8 aperture, ultra detailed skin, realistic hair strands, natural body proportions, soft shadows, cinematic color grading, photorealistic, high dynamic range, editorial fashion photography.

Important: replace ONLY the woman’s identity with the exact reference person while keeping the background, pose, camera angle, lighting, dress style, cat, dock, and overall composition highly consistent with the original image. No stylization, no AI artifacts, no distorted anatomy, no extra fingers, no face asymmetry.

Identity fidelity priority: extremely high. Background consistency priority: extremely high.
```

## Redhead Duo Forest Photography

> Manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{argument name="subjects" default="Two young women"} with long, wavy, {argument name="hair color" default="vibrant red hair"} stand close together in a {argument name="environment" default="lush green forest"} during daytime, surrounded by tall trees and dense foliage under a bright sunny sky. The woman on the left has fair skin with freckles, blue eyes, and wears a fitted black sleeveless tank top paired with high-waisted beige leggings featuring a detailed dark snakeskin pattern; she stands with her body slightly turned while looking directly at the viewer with a neutral expression. The woman on the right, positioned slightly in front, has similar red hair with subtle purple-red highlights at the ends, blue eyes, and a warm smile showing her teeth; she wears a fitted bright yellow sleeveless tank top and matching beige snakeskin-patterned leggings, leaning her head affectionately against the other woman's shoulder while placing one hand near her thigh. Both have natural makeup and stand in a relaxed pose amid vibrant green grass and leaves, with soft natural lighting highlighting their hair and the outdoor environment. The image is a realistic, high-resolution photograph with sharp details and vibrant colors.
```

## Arid Landscape Lifestyle Portrait

> Fotogerçekçi manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Photorealistic portrait of a young woman with long wavy auburn-red hair and straight bangs, fair skin, calm confident expression, wearing a fitted light pink ribbed tank top with thin spaghetti straps and high-waisted cream athletic leggings, hand on waist, holding a black smartphone in other hand, standing in sunny arid landscape with dry brush and distant hills, natural daylight, shallow depth of field, sharp focus, lifestyle photography, warm color grading, 8K Ultra HD, shot on Canon EOS R5 with 85mm lens --ar 3:4 --style raw --s 200 --v 6.1 Photorealistic portrait of a young woman with long wavy auburn-red hair and bangs, fair skin, subtle freckles, looking back over left shoulder at camera, wearing light pink ribbed tank top with thin adjustable straps and cream high-waisted athletic leggings, holding dark smartphone, standing in sunlit arid setting with dry vegetation and hazy mountains, bright natural light, background bokeh, high detail, 8K Ultra HD, lifestyle photography, warm tones, professional camera --ar 3:4 --style raw --s 200 --v 6.1
```

## Melancholic Blonde Editorial Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
"subject": "{argument name="subject" default="young woman, platinum blonde bob with bangs, blue eyes, tear on cheek, arms self-wrapped"}",
  "outfit": "oversized off-shoulder cream knit sweater",
  "setting": "warm beige wooden background",
  "mood": "melancholic, ethereal, soft editorial"
```

## Autumn Cinematic Portrait Series

> Sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A series of warm, cinematic autumn portraits featuring a {argument name="subject" default="woman with wavy, shoulder-length brown hair"}, a soft smile, and a gentle expression. She is wearing a {argument name="outfit" default="vibrant, emerald-green long-sleeved knit sweater"} paired with dark blue jeans. The setting is a {argument name="location" default="serene park during golden hour"}, with the background beautifully blurred into a soft bokeh of rich orange, yellow, and brown autumn foliage. In some compositions, she interacts gracefully with large, moss-covered tree trunks—leaning against them, touching the textured bark, or resting at the base of a tree surrounded by fallen autumn leaves while holding a multi-colored leaf. Other shots include tight close-ups, focusing on her resting her chin on her hands, showcasing a subtle gold ring on her finger. The lighting is soft and directional, creating a warm glow around her hair and casting a cozy, peaceful mood throughout the entire scene.
```

## Cinematic Rainy Day Portrait Collage

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic cinematic rainy-day portrait collage of a {argument name="subject" default="young man"} on an empty wet roadway during monsoon weather. The composition features three versions of the same man blended into one dramatic scene. A giant close-up portrait dominates the cloudy sky in the background, showing the man gazing upward with a calm, hopeful smile. In the foreground, the man sits casually on the curb beside a {argument name="vehicle" default="sleek black street motorcycle"}, resting his chin on his hand in a thoughtful pose. Another full-body version of him walks confidently down the center of the rain-soaked road with one hand in his pocket. He has {argument name="features" default="short curly black hair, a neatly trimmed beard, expressive eyes"}, and wears a black oversized hoodie, light gray cargo pants, gray-and-white sneakers, and a black smartwatch. Raindrops are visible on his clothing and face. The environment features a deserted tree-lined avenue after rainfall, reflective asphalt, glowing streetlights, dramatic storm clouds, soft mist, wet road reflections, lush green foliage, and subtle bokeh lights in the distance. The motorcycle's headlight casts a warm glow onto the wet pavement. Professional photography, cinematic color grading, ultra-sharp focus, HDR, realistic skin texture, natural lighting, depth of field, volumetric atmosphere, moody monsoon aesthetic, emotional storytelling, highly detailed, 8K resolution, Photoshop-style photo manipulation, Instagram portrait edit, masterpiece quality.
```

## Detailed Graphite Pencil Sketch

> Elle çizilmiş manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A detailed graphite pencil sketch of a {argument name="subject" default="young couple sharing a tender moment in a serene nature setting"}. A man in a hoodie and ripped jeans and a woman in a cozy knit sweater and jeans are sitting closely together on a large, textured boulder by the edge of a winding river. The man has his arm around the woman, and they are both smiling warmly with their heads leaned together, holding hands. The background features a {argument name="background" default="lush forest with tall pine trees, deciduous trees, and a winding stream flowing over smooth rocks"}. The entire artwork is rendered in {argument name="style" default="classic black and white pencil shading"}, capturing fine cross-hatching, realistic textures, and a soft, heartwarming atmosphere on slightly textured paper.
```

## Ginger Hair Night Garden Portrait

> Lüks portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A beautiful young woman with long wavy ginger red hair and bright blue eyes is sitting comfortably in a large woven wicker chair on an outdoor patio at night. She has fair skin with light freckles across her cheeks and nose, and she is smiling warmly at the camera while gently touching her hair near her right ear with one hand. She is wearing an elegant sleeveless red ribbed dress with thin straps and a square neckline. The background features a wooden pergola covered with climbing plants and vines, numerous potted green plants and ferns in terracotta pots, warm string lights hanging overhead, and blue and white cushioned outdoor furniture. The atmosphere is cozy and well-lit with soft evening lighting, creating a pleasant garden restaurant or cafe setting. A beautiful young woman with long flowing wavy ginger red hair and striking blue eyes stands gracefully on an outdoor patio at night, turning her body slightly to the side while looking back over her shoulder directly at the camera with a neutral expression. She has fair skin with visible light freckles on her shoulders and arms. She is wearing a fitted sleeveless red ribbed dress with thin straps. Her left hand rests lightly on her thigh. The background shows a lush nighttime garden setting with a wooden overhead trellis structure, abundant potted plants and greenery, warm glowing string lights, and parts of white and blue outdoor seating visible. The scene has a stylish, relaxed evening ambiance with soft lighting highlighting the plants and wooden elements.
```

## Candid Graphic T-Shirt Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A beautiful young woman with {argument name=\"skin tone\" default=\"warm medium skin\"}, expressive dark eyes, and a joyful smile, looking slightly off-camera. Wearing a {argument name=\"outfit\" default=\"white oversized graphic T-shirt with bold red lettering\"} and silver hoop earrings. {argument name=\"hair style\" default=\"Dark brown hair in a loose ponytail\"} with soft face-framing strands. Modern indoor setting with creamy bokeh, shallow depth of field, and natural candid composition.
```

## Golden Hour Colosseum Travel Portrait

> Sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A {argument name="subject" default="young adult male"} sits calmly on a highly eroded, unfinished ancient stone wall, his body angled slightly to the right while his weight is comfortably centered. He wears a textured, off-white button-down shirt and deep brown trousers. His face bears a contemplative, confident expression with a neutral mouth and eyes focused distantly off to the right. His wavy brown hair features subtle, natural flyaways catching the warm light. His left hand rests naturally on his left thigh with loosely curled fingers, revealing a silver ring on the ring finger and a square-dial watch with a black leather strap, while his relaxed right hand reaches organically across his torso to gently grip and adjust the cuff of his left sleeve. He is layered over a monumental, deep background featuring the awe-inspiring architecture of the {argument name="background" default="Roman Colosseum"}, its massive, weathered travertine stone arcades and interior ruins stretching expansively into the center and top of the frame. To the top left, the thriving dark green needle clusters of a Mediterranean pine tree and leafy midground bushes organically frame the ancient structures against a clear blue sky. The foreground seating wall beneath him features a rough, matte masonry surface of warm grays and earth tones, rich with pitted textures, deep crevices, and organic debris. A bright, highly directional single light source of {argument name="lighting" default="warm golden hour sunlight"} pours in from a 45-degree front-left angle, creating a striking, high-contrast cinematic mood. This hard light preserves brilliant golden ochre highlights on the left side of his face, hair tips, left shoulder, and arm, while casting dramatic, deep black, harsh-edged shadows across the right side of his face, neck, and torso, including a distinct nose shadow cleanly defined on his right cheek. Shot as a realistic digital photograph on an 85mm lens at a wide aperture, the image maintains tack-sharp focus on the subject and the foreground stone's rugged texture, while a medium depth of field renders the architectural background slightly soft yet distinctly recognizable without any film grain. Post-processing enhances the warm golden and orange highlights, deepens the shadowy blacks for pronounced dramatic effect, and slightly lifts clarity on the fabric and masonry, perfectly encapsulating contemporary lifestyle travel portraiture framed in a 4:5 aspect ratio.
```

## Street Fashion Valley Hike Portrait

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Cinematic, ultra-realistic full-body shot of a {argument name="subject" default="stylish teenage girl"} from behind, walking away down a narrow rocky trail in a {argument name="environment" default="lush green mountain valley"}. Moody, overcast cloudy weather with dramatic low-angle lighting during sunset. Surrounded by deep green pine forests, a grass field, and a small river stream cutting through the valley. The girl has long, soft black hair flowing naturally. She is wearing a {argument name="outfit" default="dark red and black aesthetic mesh crop top with full sleeves, oversized light blue baggy cargo jeans, and a striped red tie"}, layered street-fashion accessories, and trendy white and brown sneakers. Shot on an 85mm lens, high-fidelity details, photorealistic texture, Instagram aesthetic, 8K resolution.
```

## Tabby Kitten on Rain-Wet Rooftop

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{argument name="subject" default="Tabby Kitten"} on {argument name="setting" default="Rain-Wet Rooftop"} at {argument name="time of day" default="Twilight"}
```

## Sunlit Coastal Picnic Portrait

> Portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "scene": {
    "setting": "{argument name="location" default="sunlit coastal park near a sandy beach"}",
    "background": "clear blue sky, soft sand dunes, coastal vegetation, distant beach pathway, lush green grass, overhanging tree branches creating natural shade patterns, bright summer atmosphere",
    "lighting": "natural midday sunlight filtered through tree leaves, realistic dappled shadows across skin and clothing, soft ambient bounce light from grass and sand, authentic outdoor highlights and natural contrast"
  },
  "subject": {
    "type": "female",
    "pose": "kneeling naturally on a striped picnic blanket, legs folded beneath body, hands resting gently on blanket and thigh, shoulders relaxed, facing camera directly",
    "expression": "warm genuine smile, relaxed eyes, cheerful and approachable mood, natural candid energy",
    "face": "Use uploaded reference image, keep identity exact, preserve natural facial proportions, realistic skin texture with visible pores, natural imperfections, no artificial smoothing",
    "hair": "Use uploaded reference image, keep identity exact, long naturally hair, realistic individual strands, soft volume, slight movement from coastal breeze",
    "eyes": "Use uploaded reference image, keep identity exact, natural daylight reflections, highly detailed iris texture",
    "skin": "fair natural skin tone, realistic texture, authentic complexion variation, natural sunlight highlights, realistic subsurface scattering",
    "body": "accurate anatomy with natural proportions and realistic posture"
  },
  "clothing": {
    "outfit": "{argument name="clothing" default="light red and white gingham one-piece swimsuit"} with thin shoulder straps, front bow detail, realistic fabric texture, natural stretch and folds",
    "footwear": "casual neutral-toned sandals with realistic leather texture",
    "accessories": "minimal styling, natural appearance"
  },
  "environment_details": {
    "props": "striped picnic blanket spread across green grass",
    "atmosphere": "fresh summer beach-day aesthetic, carefree outdoor lifestyle photography, bright and joyful mood",
    "details": "realistic leaf shadows, natural grass textures, authentic beach vegetation, subtle wind movement, true outdoor lighting conditions, professional lifestyle photography quality"
  },
  "camera": {
    "angle": "eye-level portrait perspective",
    "framing": "full-body vertical composition capturing subject and surrounding environment",
    "focus": "sharp focus on subject with gentle background separation",
    "lens": "50mm professional full-frame lens with realistic depth rendering and natural perspective",
    "settings": "f/2.8 aperture, ISO 100, 1/1000 shutter speed, professional mirrorless camera"
  },
  "style": {
    "realism": "ultra realistic outdoor lifestyle photography",
    "color_tone": "bright summer colors, natural greens, soft blue sky, warm skin tones"
  }
}
```

## Woman with Rabbit in Cherry Blossom Garden

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Hyper-realistic photograph of a {argument name="subject" default="beautiful young woman"} sitting beneath blooming cherry blossom trees during sunset. She wears a {argument name="outfit" default="soft pink oversized cardigan, blue denim jeans, and white shoes"}. A {argument name="companion" default="fluffy white rabbit"} sits beside her. Falling pink petals drift through the air as golden sunlight filters through the branches. Dreamy atmosphere, cinematic composition, ultra-realistic skin details, soft pastel colors, Pinterest-worthy aesthetic, masterpiece photography.
```

## Moody Rustic Window Portrait

> Sinematik, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic, moody portrait of a {argument name="subject" default="young woman with captivating light green eyes and dark, wavy shoulder-length hair"}, leaning her head gently against a {argument name="setting" default="rustic, weathered wooden window frame"}. She gazes directly into the camera with a soulful, melancholic, and serene expression. Warm, soft sunlight streams through the window, creating a beautiful play of light and shadow across her face and the folds of her simple, sleeveless linen sundress, which can be envisioned in {argument name="dress color" default="various solid colors such as warm mustard yellow, earthy sage green, muted terracotta red, or a soft off-white"}. The background is a dimly lit, textured wall inside an old, rustic room, casting the scene in a dramatic chiaroscuro style with a shallow depth of field, focusing entirely on her gentle features and evocative gaze.
```

## Cottagecore Garden Path Portrait

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A dreamy portrait of a {argument name="subject" default="Sydney sweeney"} woman sitting on a {argument name="path type" default="rustic wooden garden path"} surrounded by lush greenery and blooming pastel flowers. She wears a soft lavender floral two-piece dress with a ruched crop top, flutter sleeves, and a ruffled skirt. Long dark wavy hair cascades over her shoulders. She gently holds a bouquet of {argument name="flowers" default="pale purple hydrangeas"} while looking at the camera with a warm, serene expression.Hanging vines frame the scene overhead, with hydrangea blossoms and wildflowers scattered around. Soft golden-hour sunlight filters through the foliage, creating a romantic glow, natural shadows, and delicate highlights on her skin. Ethereal cottagecore aesthetic, enchanted garden atmosphere, shallow depth of field, creamy bokeh, ultra-realistic skin texture, high detail, cinematic composition, 85mm lens, f/1.8, pastel color palette, professional fashion photography, 8k.
```

## Paris River Bank Flash Portrait

> Sinematik, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{ "background": { "location": "{argument name="background location" default="Paris, Seine River bank"}", "landmark": "Eiffel Tower (fully illuminated in gold)", "elements": "Metal railing (foreground), dark river water with light reflections, distant city skyline", "sky": "Pitch black night sky" }, "subject": { "appearance": "{argument name="subject description" default="Young woman, blonde wavy hair, glowing skin"}", "clothing": "Oversized black blazer, gold chain necklace, minimalist rings", "pose": "Leaning casually on the railing, body angled slightly to the side", "expression": "Pensive, looking upwards/away from camera, soft lips", "framing": "Medium vertical shot (waist up)" }, "technical_specs": { "camera_vibe": "{argument name="camera style" default="High-end Smartphone (iPhone Flash style) or Point-and-Shoot"}", "focal_length": "26mm (Wide angle)", "iso": "800", "aperture": "f/1.8", "shutter_speed": "1/60s" }, "color_grading": { "palette": "Warm Gold (Tower) vs. Cool Black/Navy (Sky/Suit)", "skin_tone": "Natural with warm flash highlight", "saturation": "Rich and vibrant" }, "generation_prompt": "Vertical flash photography shot of a blonde woman in a black blazer leaning against a railing in Paris at night. She is looking up pensively. The Eiffel Tower is glowing bright gold in the background against a dark sky. The Seine river reflects the city lights. Direct flash lighting, high contrast, realistic texture, influencer travel aesthetic, shot on 35mm film." }
```

## Cinematic Platinum Blonde Winter Portrait

> Fotogerçekçi, sinematik manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Cinematic portrait of a {argument name="subject" default="pale woman with platinum blonde hair, icy blue eyes"}, wearing a {argument name="outfit" default="white fur coat"}, standing in a {argument name="setting" default="frozen snowy landscape"}, breath visible in cold air, overcast soft light, dreamy and ethereal atmosphere, shallow DOF, color grade: cold silver and white, ultra-detailed, photorealistic
```

## European Travel Photo Diary Collage

> Mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A multi-panel collage showcasing a {argument name="subject" default="cheerful young woman with curly brown hair"} in {argument name="location" default="various scenic European settings"}. The main left panel features a close-up portrait of her smiling brightly, framing her face with her hands, wearing a cozy cream-colored knit sweater inside a warm bakery filled with pastries on wooden shelves. The center panel depicts her laughing on a cobblestone street, wearing a floral patterned blouse, a rust-colored corduroy skirt, and white sneakers, holding a woven tote bag with timber-framed European buildings in the background. The top-right panel shows a playful, candid moment of her kicking her leg up with joy on a quaint, historic street lined with traditional architecture. The bottom-right panel captures her sitting cross-legged on a picnic blanket in a lush green park, wearing denim overalls and a striped t-shirt, holding an open book and pointing upwards toward the trees. The overall aesthetic is bright, joyful, and reminiscent of a travel lifestyle photo diary.
```

## Candid Tokyo Smartphone Night Photo

> Fotogerçekçi mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic candid smartphone photograph, 9:16 vertical.
Use the attached image only as a strong visual inspiration for general facial proportions and vibe,
while ensuring the generated subject remains fully original, non-identifiable, and not a face copy.
Scene
Nighttime on a {argument name="location" default="quiet Tokyo city sidewalk"} beside a building with {argument name="wall type" default="white ceramic tile walls"}.
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
Same subject, same outfit, same Tokyo sidewalk, same flash photography style.

Action:
Walking ahead, suddenly turning her head back toward the camera as if she just noticed someone calling her name. Eyes slightly widened, surprised expression, hair moving from the turn. One arm swinging naturally while walking. Strong motion blur, imperfect framing, candid accidental capture.
```

## Neo-Noir Heartbreak Cinematic Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use your {argument name="identity reference" default="uploaded face image"} as the primary identity reference. Preserve the exact facial structure, jawline, cheekbones, eye shape, eyebrow shape, nose structure, lips, beard/stubble pattern, hairstyle, hair texture, skin texture, natural South Asian masculine features, and overall recognizable appearance with extremely high identity fidelity. Maintain realistic proportions, authentic skin details, and natural facial anatomy. Do not alter my facial identity.

Create an ultra-realistic cinematic heartbreak portrait inspired by a {argument name="mood" default="moody neo-noir night scene"}. The same man is sitting alone on a wooden outdoor café bench at night after rainfall, captured in a contemplative and emotionally distant pose. One leg is bent on the bench while the other rests naturally, with his body slightly leaning forward and his head tilted down as if lost in thought. His expression is subtle, melancholic, and introspective rather than exaggerated.

Behind him, a massive double-exposure composition fills the upper half of the frame: an enormous close-up of his own eyes dominates the night sky, gazing forward with intense emotional depth. The giant eyes should be crystal clear, highly detailed, and seamlessly blended into the dark atmosphere, creating a surreal cinematic storytelling effect. The eyes must match the uploaded face exactly.

A glowing {argument name="symbol" default="neon-red broken-heart symbol"} sits on the table beside him, acting as the visual focal point and casting soft red light onto his hands, clothing, and nearby surfaces. The environment is a rainy urban night setting with glass panels covered in raindrops, reflections, and distant city lights. Strong white backlighting from behind creates a dramatic silhouette and lens flare, while blue and cyan ambient lighting balances the warm red glow from the heart.

Color palette: deep blues, cyan highlights, black shadows, subtle red neon accents. Atmosphere should feel lonely, romantic, cinematic, and emotionally powerful.

Photography style: luxury editorial portrait, cinematic storytelling, neo-noir, double exposure, emotional fine-art photography, shallow depth of field, realistic bokeh, rain reflections, volumetric lighting, rim lighting, HDR, ultra-photorealistic skin texture, high dynamic range, sharp focus on the subject, soft background blur.

Camera settings: full-frame DSLR, 85mm lens, f/1.4 aperture, ISO 400, cinematic night exposure, professional color grading, ultra-detailed facial features, 8K resolution, masterpiece quality, realistic shadows, natural skin tones, dramatic composition.
```

## Summer Balcony Relaxation Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "core_content": {
    "main_description": "{argument name="description" default="A young woman with blonde curly hair relaxes on a plush white chaise lounge on a sunny balcony, holding an iced coffee and looking off into the distance with a serene expression."}"
  },
  "subjects": [
    {
      "type": "Person",
      "identity": "Woman",
      "spatial_position": {
        "placement": "Center frame",
        "scale": "Medium shot (Upper body visible, legs spread)",
        "dynamic_framing": {
          "visual_vector": "Looking to the right, out of frame",
          "frame_interaction": "Legs extend towards the foreground and right edge, torso is cropped at the shoulders."
        }
      },
      "pose": {
        "body_narrative": "Seated with legs widely spread and bent, the subject leans back into the chaise lounge, creating a relaxed and casual posture. Her upper body is slightly twisted towards the camera.",
        "hand_gesture": "Right hand holding a glass of iced coffee, with her left hand resting on her thigh."
      },
      "eye_gaze": {
        "direction": "To the right",
        "contact": "Averted",
        "focus": "Soft, looking into the distance"
      },
      "appearance": {
        "features": "Fair skin, blonde wavy hair, light freckles",
        "expression": "Calm, contemplative"
      },
      "attire": {
        "top": "{argument name="top" default="Red long-sleeved wrap top with a deep V-neck tied with strings"}",
        "bottom": "Denim shorts (partially visible)",
        "details": "Ribbed texture on the top"
      }
    }
  ],
  "environment": {
    "scene": "Balcony cafe with a city view",
    "background_elements": [
      {
        "object": "Building awnings",
        "description": "Striped beige and white awning overhead"
      },
      {
        "object": "Plants",
        "description": "Green potted plants and lavender bushes"
      },
      {
        "object": "Wicker basket",
        "description": "Wicker basket with handles"
      },
      {
        "object": "Buildings",
        "description": "Distant city skyline with modern and traditional architecture"
      },
      {
        "object": "Table",
        "description": "White outdoor table with another iced drink"
      },
      {
        "object": "Railing",
        "description": "Balcony railing"
      }
    ]
  },
  "aesthetics": {
    "art_style": "Realistic Photography with {argument name="tones" default="warm, natural tones"}",
    "lighting": {
      "key_light": "Bright, warm sunlight from the right, creating soft shadows",
      "shadows": "Soft shadows on the subject and surroundings, indicating a sunny day."
    },
    "camera": {
      "angle": "Eye-level",
      "lens": "Likely a moderate telephoto lens, creating a slight compression and shallow depth of field."
    }
  }
}
```

## Drone Shot Sea Rail Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Make a photo without editing portrait face, realistic {argument name="subject" default="male face"}, {argument name="skin tone" default="white-pink"} skin tone, height 180+, slim nose, {argument name="hair color" default="black"} hair, head block. Arrange your hair a little. Big fold clothing: oversized black shirt, open chest, open arms. Hand on stainless steel rod, silver watch, cream casual pants. Soft smile, natural makeup, natural pink lips. Atmosphere: stainless steel rail below with deep blue sea, strong waves, strong wind hitting from front. Posture: standing on stainless steel rod, looking at the camera. Full body drone shot, aspect ratio 3:4.
```

## Song to Image: Progressive Rock

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{argument name="song name" default="Hell's Bells (Bruford)"}
```

## Meta Restaurant Photo within Phone Screen

> Fotogerçekçi logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-photorealistic vertical 4:5 candid photo, a clever meta composition shot at a {argument name="location" default="cozy Istanbul restaurant table"}. In the center stands an iPhone 17 propped upright against a wooden menu holder, and on its screen is a full-frame portrait of a young woman, as if a photo of her is displayed on the phone. On the phone screen: she wears tinted orange-lens sunglasses and a red halter-neck (tie-at-the-neck) dress, sleek hair pulled back, pearl earrings, layered necklaces, mouth open in a playful surprised expression, a warm red interior glowing behind her.
In the real foreground, on the warm wooden table: a pair of chopsticks (or a fork) lifting a piece of Turkish sarma (stuffed grape leaves) toward the phone, a small bowl of creamy white yogurt beside it, a bottle of olive oil, a glass of water, and a folded cloth napkin resting on the table. Behind the table, a softly blurred {argument name="atmosphere" default="Istanbul meyhane interior: warm wood, deep red leather banquette, soft pendant lighting, an authentic lived-in atmosphere"}.
Lighting: warm cozy indoor restaurant light, soft natural glow, gentle shadows, candid snapshot mood. Shot on a phone camera, fine grain, shallow depth of field, realistic food and fabric texture.
Negative: plastic skin, over-smoothed AI face, doll face, cartoon, 3D render, distorted hands, extra fingers, bad anatomy, mangled food, unreadable labels, watermark, random text, logo clutter.
```

## Cozy Rainy Night Indoor Portrait

> Retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A vertical portrait of a {argument name="subject" default="cute young female with a sleek bob haircut"}, sitting comfortably in a {argument name="setting" default="cozy blue armchair next to a large window at night"}. She is wrapped in a warm, patterned blanket with a book resting on her lap, holding a steaming cup of tea in both hands. She looks out the window with a gentle, serene expression. Outside, a gentle rain blurs the vibrant city night lights, creating beautiful bokeh and raindrops streaking across the glass. The indoor scene is softly illuminated by a vintage table lamp on a wooden side table, casting a warm, amber glow throughout the room and creating a perfectly {argument name="atmosphere" default="cozy, rainy-day atmosphere"}.
```

## Elegant Woman in Red Satin in Cozy Cafe

> Sinematik, lüks portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic, close-up vertical portrait of a {argument name="subject" default="beautiful woman with wavy brown hair"} smiling elegantly while sitting in a {argument name="setting" default="cozy cafe"}, wearing a {argument name="clothing" default="stylish red satin dress with a subtle cowl neckline"} and delicate gold necklaces, with a soft-focus warm red and wooden background. The image should combine elements of dramatic lighting, capturing the essence of long, dark hair caught beautifully in a warm, golden-hour backlight with a soft breeze, creating a glowing halo effect. The woman possesses a captivating, gentle gaze, soft features, and expressive eyes, wearing a richly textured red dress with intricate lace or embroidered details. The overall atmosphere is intimate and moody, enhanced by a dark, atmospheric background filled with soft, out-of-focus golden bokeh lights that cast a warm, cinematic glow on her face.
```

## 2000s Nostalgic Japanese Suburb

> Retro görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
a {argument name="location" default="Japanese suburb"} in the the {argument name="era" default="2000s"} atmosphere that like an {argument name="visual style" default="old footage"}
```

## Mountain Lake Hiking Portrait

> Fotogerçekçi manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
"A photorealistic image of a young woman with long, wavy blonde hair cascading down her back, wearing a gray knitted beanie, standing outdoors in a scenic mountain landscape. She is positioned on rocky terrain next to a calm {argument name="lake type" default="turquoise lake"}, turning her upper body to look over her shoulder directly at the camera with a gentle smile. She has fair skin, blue eyes, and natural makeup. She is wearing a {argument name="outfit" default="fitted light sage green short-sleeved crop top and light blue high-waisted athletic leggings"}, with olive green cargo-style pants visible at the waist. Her left hand rests near her side with a light gray scrunchie on her wrist. The background features majestic rocky mountains with patches of snow, dense green pine trees, lush vegetation, and an overcast sky with soft clouds. The lighting is natural daylight with reflections on the lake surface, creating a serene outdoor hiking or nature setting. High detail, realistic photography style."
```

## Cinematic Cafe Contemplation

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Bathed in the soft, diffused luminance of an overcast afternoon, this cinematic portrait captures a moment of serene contemplation. The subject, adorned with flowing golden blonde waves, gazes thoughtfully out of an expansive glass window, her delicate features gently illuminated by the cool, natural light filtering through the glass. She is dressed in a minimalist, classic white scoop-neck tee that subtly catches the ambient moisture of the atmosphere, adding a layer of tactile realism to the composition. The interplay of light and shadow across her skin creates a sublime, velvety texture, reminiscent of high-end editorial photography. The background gracefully falls away into a beautiful, creamy bokeh, hinting at a cozy cafe interior while maintaining absolute focus on her expressive eyes and relaxed posture. Every detail, from the gentle resting of her hand against her chin to the subtle glints of light in her eyes, contributes to an evocative narrative of quiet solitude. It is a visual symphony of understated elegance and atmospheric depth, perfectly blending everyday realism with a refined, artistic sensibility that commands the viewer's attention.
```json
{
  "meta": {
    "quality": "Zenith of digital artistry radiating with photorealistic fidelity and palpable atmospheric depth that transcends traditional storytelling.",
    "style": "Synthesis of editorial portraiture and cinematic mood curation, evoking introspection through meticulous light sculpting.",
    "aspect_ratio": "Classical framing harmonizing the intimate emotional weight with the architectural geometry of the environment."
  },
  "subject_aura": {
    "capture_type": "An observed candid moment of quietude, freezing a second of daydreaming elegance against a softly blurred world.",
    "outfit_vibe": "Minimalist white canvas for ambient light, featuring subtle textural nuances and a delicate interplay of fabric.",
    "pose_flow": "Relaxed bodily architecture with a chin-rest gesture guiding the eye along sweeping curves of golden hair."
  },
  "scene_aesthetics": {
    "location_feel": "A sanctuary beside a windowpane, offering a haven of quiet reflection amidst an overcast urban afternoon.",
    "lighting_mood": "Diffused daylight rolling softly across the subject, creating an ethereal gradient of velvet-like shadows.",
    "color_palette": "Refined symphony of warm ivory, luminous golden blondes, pristine whites, and muted earthy neutral undertones."
  },
  "technical_illusion": {
    "camera_style": "Emulation of medium format aesthetics delivering profound optical volume and gradual focus falloff.",
    "lens_feel": "Smooth optical rendering characterized by a dreamlike bokeh dissolving background elements into atmospheric abstraction."
  }
}
```

## 2000s Handheld Flash Snapshot

> Lüks görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
An unedited, handheld, 2000s-style photo taken outdoors with a bright phone flash. A young woman (her face is not altered in the uploaded photo) stands outdoors against a black background wearing a {argument name="outfit" default="white 2000s-style dress"} and carrying a {argument name="accessory" default="bag"}; the shot feels spontaneous and close-up, like a quick snapshot taken between movement and laughter. Her pose is relaxed, almost playful, yet completely natural. The direct flash creates sharp reflections on the tiles and a soft sheen on her skin, giving the image an authentic early 2000s glow and warmth. Jewelry sparkles in the flash—hoop earrings, chunky rings, a wristwatch—adding a slightly extravagant yet effortless air of Y2K-style luxury. The scene evokes a real moment from an after-party: bathroom lighting, casual glamour, unposed confidence. LIGHTING: DIRECT FLASH FROM CAMERA PHONE, STRONG REFLECTIONS ON BAG AND DRESS, MINOR GRAIN FROM DIGITAL NOISE.
```

## Nostalgic Dark Academia Classroom

> Sinematik, retro görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A captivating {argument name="subject" default="blonde figure"} leans gently over a wooden desk in a sunlit, nostalgic classroom. Dressed in a {argument name="aesthetic" default="chic, dark academia-inspired ensemble"} featuring a black ribbed top and a pleated mini skirt, she exudes effortless charm. Warm light streams through tall windows, illuminating her soft waves and casting a cinematic, dreamy glow that beautifully contrasts with the vintage green chalkboard behind her. The intimate, first-person perspective draws the viewer directly into this quiet study session, where a poised hand guides a pen over handwritten notes, perfectly balancing casual elegance with a vivid, evocative atmosphere.
```

## Mediterranean Twilight Terrace Portrait

> Retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A confident young adult male with an athletic build sits squarely facing the camera, leaning back slightly with level, relaxed shoulders rolled gently backward. He wears an {argument name="outfit" default="off-white, short-sleeve polo shirt and white trousers"} that drape over his form in soft fabric folds. His thick, wavy brown hair falls in a messy, textured fringe, styled with a matte sea-salt finish that gives it high volume pushed up and forward, featuring natural imperfections, frizz, irregular clumps, and prominent windswept flyaways perfectly silhouetted against the sky. His warm-toned face holds a direct, relaxed gaze with a subtle smolder, framed by relaxed eyebrows and a closed, neutral mouth. His left hand rests flat and relaxed on his upper left thigh, while his right hand rests casually on the top curve of a vintage white painted metal chair back, his fingers draped naturally over the distressed scrollwork edge. He is seated on an {argument name="setting" default="outdoor Mediterranean stone terrace"}, grounded by warm beige irregular stone paving and a raw, unfinished concrete block wall characterized by a rough, porous matte texture, patchy earthy variations, and visible mortar joints. In the immediate foreground to the bottom right, the edge of a dining table holds a soft white napkin. To his mid-left rests a weathered, unglazed terracotta clay pot overflowing with thriving, vibrant red geraniums and dark green foliage, set against a weathered dark wrought iron railing with simple vertical balusters and decorative nodes that spans the midground. Beyond the terrace, the deep, slightly blurred spatial depth reveals a sweeping view of {argument name="background" default="rolling arid hills and a distant valley town where warm city lights are just beginning to turn on through a hazy atmosphere"}. A calm, romantic evening twilight mood saturates the scene, driven by a vibrant, complementary sunset gradient of twilight purple, peach, and glowing sunset orange in the background sky. The lighting features a natural mixed setup with a glowing sunset backlight and a soft, diffused golden-peach front fill. Faint, short shadows with soft, gradual edges lightly model his cheekbones, pool gently under his chin, and cast softly across his trousers, while subtle catchlights glint in his eyes and a soft sheen rests on the bridge of his nose and forehead. Shot as a highly polished, realistic digital photograph using a full-frame mirrorless camera and an 85mm lens at f/2.8, the image maintains tack sharpness on the smooth skin and subject while rendering the midground slightly out of focus and the background into a beautifully blurred but recognizable backdrop with minimal digital noise. Post-processing includes warm color grading that emphasizes the peach and orange highlights, lifted shadows for a smooth, low-contrast finish on the subject with subtle clarity applied to the facial features and windswept hair, ending with the vignette removed, framed in a 4:5 aspect ratio.
```

## Rainy Urban Night Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use my uploaded reference image as the primary facial identity reference. Preserve the exact facial structure, jawline, hairstyle, hair texture, beard/stubble details, skin texture, eye shape, eyebrows, nose structure, lips, and overall recognizable appearance with extremely high identity fidelity. Maintain realistic masculine South Asian features, natural skin tones, and authentic facial proportions.

Create an ultra-realistic cinematic lifestyle portrait of the same man relaxing alone in a {argument name="setting" default="cozy modern apartment at night"}. He is lying comfortably on a soft fabric sofa beside a large rain-covered window overlooking a {argument name="background" default="blurred city skyline filled with glowing skyscraper lights and bokeh reflections"}. The man wears an {argument name="outfit" default="oversized knitted beige-gray sweater, loose casual lounge pants, and round black eyeglasses"}. His posture is relaxed and contemplative, leaning against the sofa armrest while gazing thoughtfully at a small illuminated glass fishbowl placed on a wooden side table.

The room is warmly lit by a vintage table lamp emitting soft golden tungsten light, creating a peaceful and intimate atmosphere. Surrounding details include indoor plants, framed artwork on the wall, books stacked beneath the side table, textured blankets draped over the sofa, soft cushions, and subtle decorative objects. Rain droplets are visible on the window glass, with city lights reflecting through them.

Composition: full-body vertical portrait, camera positioned slightly lower than eye level from across the room, creating depth through foreground elements such as a blurred ottoman and table corner. Subject placed slightly off-center using the rule of thirds.

Lighting: warm cinematic lamp light mixed with cool blue city light from the window, realistic global illumination, soft shadows, subtle rim lighting on hair and shoulders, volumetric atmosphere, natural reflections on glass surfaces.

Mood: calm, introspective, lonely yet comforting, late-night urban lifestyle, quiet reflective moment.

Photography style: luxury editorial photography, cinematic storytelling, ultra-realistic, shallow depth of field, 85mm lens, f/1.8 aperture, HDR, photorealistic skin texture, realistic fabric details, natural color grading, film-like contrast, high dynamic range, masterpiece quality, award-winning photography.

Technical quality: ultra-detailed, 8K resolution, hyperrealistic, professional color grading, realistic shadows, crisp focus on face, soft bokeh background, natural skin pores, highly detailed environment, premium magazine photoshoot quality.

Negative Prompt

female, woman, feminine features, extra fingers, extra limbs, deformed hands, distorted face, low resolution, blurry, overexposed, oversaturated, cartoon, anime, CGI, painting, unrealistic skin, duplicate objects, bad anatomy, plastic skin, warped furniture, poorly rendered eyes, watermark, text, logo, cropped face, out of frame.
```

## Candid iPhone Japan Travel Photo

> Fotogerçekçi görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the attached face reference strictly for identity only. Preserve the exact same facial structure, eye shape, nose shape, lips, jawline, skin texture, skin tone, hairstyle and natural hair color. Do not beautify, stylize or change identity.
ultra-realistic candid {argument name="device" default="iPhone"} travel photo in {argument name="location" default="Japan during blue hour evening"}, authentic convenience store parking lot atmosphere with Mount Fuji clearly visible in the background behind a glowing Lawson store, soft cold dusk sky with realistic purple-blue evening tones.

man casually walking toward camera across an empty parking lot while holding a small white convenience store plastic bag in one hand, head slightly lowered with relaxed natural expression, realistic walking motion captured mid-step like a random candid moment. Wearing {argument name="clothing" default="oversized light blue puffer jacket over gray hoodie, olive cargo pants, brown winter boots, black gloves and beige beanie under hood"}.

photo should feel like a spontaneous travel memory taken quickly by a friend on iPhone, slightly imperfect handheld framing, realistic smartphone perspective, natural low-light iPhone exposure, authentic evening street lighting and soft environmental shadows. Subject positioned slightly off-center with large visible environment around him.

realistic wet asphalt texture with parking lot lane markings visible in foreground, glowing Lawson storefront lights creating subtle reflections, authentic Japanese suburban atmosphere, natural Mount Fuji scale and perspective in background, realistic cold-weather travel aesthetic.

Ultra-realistic moments captured like genuine iPhone travel photos: natural light, authentic environments, candid human posture, true-to-life composition and scale, documentary-style vacation snapshot feeling, no cinematic grading, no studio lighting, no AI perfection, no CGI look, no glossy skin, no influencer aesthetic, no fashion campaign energy. Random real-life evening travel photo feeling.
```

## Cinematic Urban Rain Portrait

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Cinematic portrait photography of a mysterious pale young woman with {argument name="hair style" default="short messy dark-red bob hair"}, standing alone on a rain-soaked urban street during golden hour, soft wind blowing through her hair, wearing an {argument name="outfit" default="oversized textured white linen shirt with light vintage denim jeans"}, melancholic yet powerful expression, looking sideways as warm sunset light hits her face. Wet pavement reflecting city lights, motion-blurred cars in the background, dreamy bokeh, subtle neon glow, dramatic clouds, soft film grain, warm amber and teal color grading, poetic urban atmosphere, shallow depth of field, editorial fashion photography, ultra realistic, emotional storytelling, masterpiece composition, cinematic mood, 35mm lens, highly detailed.
```

## Mediterranean Doorway Painterly Portrait

> Sinematik, retro portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the reference photo for the pose, facial features, hairstyle, rustic doorway composition, and warm vintage atmosphere. Create a dreamy painterly portrait of a beautiful young woman standing in an old Mediterranean-style doorway surrounded by lush greenery and hanging orange fruits. She has long flowing wavy brown hair, radiant skin, and a joyful smile while wearing a {argument name="outfit" default="soft floral summer dress with elegant peach, cream, and sage green tones"}. Add warm golden sunlight, romantic floral details, rustic textured walls, vintage wooden doors, and a cozy countryside aesthetic. Include a {argument name="companion" default="cute fluffy dog"} sitting beside her near flower pots filled with blooming peach roses and green leaves. Oil painting-inspired digital art, cinematic lighting, soft shadows, ultra detailed textures, romantic cottagecore vibe, dreamy European summer atmosphere, elegant feminine energy, highly detailed masterpiece, 4k quality.
```

## Sunlit Greenhouse Exploration Collage

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A collage of six photos featuring a {argument name="subject" default="young man with wavy light brown hair"} exploring a beautiful, sunlit greenhouse filled with lush green plants, ferns, and colorful blooming flowers. The warm, golden hour sunlight streams through the glass panes of the conservatory, creating a bright and serene atmosphere. In the top-left image, he is sitting at a rustic metal table reading an old book while wearing a {argument name="outfit 1" default="light blue linen button-down shirt and khaki pants"}. The top-right shows him sitting on a wooden bench, smiling down at his phone while wearing a navy blue hoodie. In the middle-left, he poses thoughtfully with his hand on his chin, wearing a dark green turtleneck sweater against a backdrop of tropical palms. The middle-right captures him standing on a stone pathway, holding a map and slinging a denim jacket over his shoulder while wearing a dark grey t-shirt and olive green pants. The bottom-left shows him from behind, looking out towards the gardens while wearing a rust-colored button-up shirt over jeans. The bottom-right is a close-up selfie of him smiling directly at the camera while holding his phone, dressed in a grey patterned short-sleeve shirt with vibrant orchids and large monstera leaves blurred beautifully in the background.
```

## Vintage Graphite Pencil Portrait

> Minimal, retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a 4:5 aspect ratio, highly detailed black-and-white graphite pencil portrait of a beautiful female subject standing near the ocean, shown from the chest up in a classic vintage style. She has soft expressive eyes gazing slightly off-camera, naturally arched eyebrows, defined lips slightly parted, and a calm, emotional expression that feels thoughtful, wistful, and quietly romantic. Her {argument name="hair style" default="long wavy hair is loose and windswept, with strands flowing across her forehead and outward in the sea breeze"}. She wears small delicate drop earrings and a {argument name="outfit" default="vintage period outfit: a softly draped embroidered outer garment with decorative floral trim along the edges, layered over a fitted dress with a square neckline, lace edging"}, subtle stitched floral detailing on the bodice, and gentle fabric folds. The background shows a calm ocean horizon with gentle waves and a simple wooden railing behind her, softly sketched with horizontal pencil strokes. Use realistic graphite shading, fine cross-hatching, visible pencil texture, soft paper grain, detailed hair strokes, subtle facial shadows, natural skin shading, and hand-drawn sketch realism. Keep the composition centered, chest-up framing, timeless romantic mood, elegant seaside atmosphere, highly detailed pencil artwork, monochrome, no color, no digital painting look. Features a subtle, elegant handwritten artist signature watermark text "Kinza" in the bottom corner.
```

## Pastel Pink Coffee Shop Aesthetic

> Minimal logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A woman sitting outside a coffee shop with a soft, pink-themed aesthetic. Here is a detailed breakdown of the scene:
Subject
• The Woman: She is sitting at an outdoor table, smiling slightly as she looks down at a clear plastic cup she is holding with both hands. It appears to be an iced coffee or boba drink with a layered, creamy color.
• Attire: She is dressed in a cozy, {argument name="outfit" default="oversized pastel pink sweater, light-blue denim jeans"}, and white sneakers with grey accents.
• Accessories: A matching pinkcanvas tote bag hangs over the back of her chair.
Setting & Atmosphere
• The Table Setup: She is seated at a small, round, pink folding table. On the table, there is another stacked set of cups, a small white dish, and a tiny pink bottle. Next to her is an empty pink slatted folding chair.
• The Storefront: She is positioned in front of a coffee shop with large glass windows.
• The window features a pink cursive logo that reads "Sweet heaven Coffe Shop".
• Inside, you can see white sheer curtains framing the windows, a clean white interior, and a round mirror on the back wall.
• A pink sign on the door to the right reads "ABIERTO OPEN".
The overall mood of the image is bright, casual, and heavily coordinated around a {argument name="palette" default="pastel pink"} color palette. Image ratio 3.4
```

## Campus Park Portrait Collage

> Mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A collage of six distinct outdoor portraits featuring the same young {argument name="subject" default="East Asian woman with shoulder-length, wavy dark brown hair and a bright, cheerful smile"}. She is photographed in a sunny, green campus or park setting with historic brick buildings blurred softly in the background. Each panel showcases a different stylish outfit: in the top-left, she wears a {argument name="outfit 1" default="blue denim overall dress over a white T-shirt and white sneakers"}, flashing a peace sign; in the top-right, a close-up shows her in a yellow gingham sundress, holding a straw fedora hat; in the middle-left, she is captured in motion walking down a stone path wearing a navy and white striped T-shirt dress with a brown backpack; in the middle-right, she sits cross-legged on a park bench with her hands clasped, wearing a delicate pink floral midi dress; in the bottom-left, she poses warmly in a cozy lavender crewneck sweater tucked into dark jeans; and in the bottom-right, she twirls happily in a vibrant forest green long-sleeve A-line dress with a thin black belt and ankle boots.
```

## Lakeside Palace Travel Photography

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{"image_type":"portrait_travel_photography","prompt":"Ultra-realistic evening portrait of a woman standing beside a {argument name="foreground" default="lakeside railing"}, wearing a {argument name="outfit" default="blue-gray paisley halter crop top and flowing white maxi skirt with a delicate gold waist chain and gold arm cuff"}. Long wavy black hair, natural glamorous makeup, relaxed confident pose, one hand holding the skirt, looking at camera. Scenic illuminated {argument name="background" default="historic palace complex across a calm lake"} at blue hour, warm architectural lights reflecting on deep blue water, distant hills, twilight sky. Centered composition, full-body framing, shallow depth of field with softly detailed background, cinematic travel aesthetic, luxurious destination vibe, natural skin tones, high detail fabric texture, subtle reflections, professional photography, crisp focus on subject, soft ambient dusk lighting with gentle front fill light, balanced warm and cool color contrast, premium social media influencer style, realistic proportions, HDR, 85mm lens look, f/2.8, high dynamic range, ultra sharp, photorealistic.","composition":{"orientation":"vertical","framing":"full-body portrait","subject_position":"center","camera_angle":"eye_level","perspective":"slightly compressed telephoto look"},"lighting":{"time_of_day":"blue_hour","key_light":"soft frontal fill","ambient":"twilight natural light","background_lighting":"warm architectural illumination","contrast":"moderate"},"color_palette":{"primary":["deep blue","white","warm gold"],"secondary":["gray-blue","black"]},"environment":{"location_type":"lakeside promenade","foreground":["metal railing","stone walkway"],"midground":["water surface with ripples"],"background":["illuminated palace architecture","trees","hills","evening sky"]},"style":{"genre":"luxury travel influencer photography","mood":"elegant, serene, sophisticated","realism":"highly photorealistic"},"technical":{"lens":"85mm equivalent","aperture":"f/2.8","quality":"high resolution","detail_level":"ultra detailed"}}
```

## Genpei Line Color Contrast

> Minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Genpei Line {argument name="Heishi" default="Red Heishi"} {argument name="Genji" default="White Genji"} Mixing and blending makes peach pink, but now it's different!
```

## Traditional Genpei Colors Prompt

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Genpei Line {argument name="red" default="Red Heishi"} {argument name="white" default="White Genji"} Mixing and blending makes peach pink, but now it's different!
```

## Twilight Beach Silhouette Prompt

> Sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
In the golden embrace of twilight on a {argument name="setting" default="pristine beach"}, a mesmerizing silhouette kneels with poised elegance amidst the soft sands and scattered shells. Clad in a {argument name="swimsuit color" default="vibrant crimson"} one-piece swimsuit that clings with ribbed sophistication, her sunlit skin glows under the diffused radiance of the setting sun. Cascading waves of {argument name="hair color" default="rich auburn"} hair with playful bangs frame her enigmatic profile, accented by bold geometric sunglasses that lend an air of sophisticated intrigue. Delicate layers of gold jewelry and meaningful tattoos add layers of personal narrative to her poised form. The vast ocean stretches behind her with rolling white-capped waves under a hazy sky, creating a composition of serene power and natural beauty. This image encapsulates the poetic fusion of human form and coastal serenity, where warm light dances across the scene, evoking feelings of freedom, confidence, and timeless allure in a perfectly balanced photographic moment.
```

## Sharp Indoor Fashion Photography

> Fotogerçekçi moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
"aspect_ratio": "{argument name="aspect ratio" default="4:5"}",  
"prompt": "A 4K raw HD photograph, devoid of all background blur and exhibiting deep depth of field, captures the {argument name="subject" default="young woman"} from image_0.png crouching beside the dark teal velvet stool. She retains her long brown hair, pose, expression, {argument name="clothing" default="white halter crop top"}, blue denim pleated mini skirt, and clear platform high heels. Her body and all clothing details are rendered with extreme, tactile sharpness. The entire indoor scene, from the woman and the stool in the foreground to the potted plants, the sheered curtains, and the black metal floor sculpture in the background, is in sharp, crisp focus, showing fine textures like wood grain on the floor, individual fabric weaves, and the sculpture's intricate metallic structure. The image has the uncompressed, high dynamic range look of a raw photo file with natural grain. Lighting is even and detailed. The perspective is eye-level, capturing the whole scene clearly.",
  "subject": {
    "gender": "Female",
    "hair": "Long, straight, brown",
    "expression": "Neutral, looking at camera over shoulder",
    "pose": "Crouching sideways, looking over right shoulder, hands on stool",
    "clothing": {
      "top": "White halter crop top",
      "bottom": "Blue denim pleated mini skirt",
      "footwear": "Clear platform high heels"
    }
  },
  "environment": {
    "location": "Indoor",
    "flooring": "Light wood planks, detailed grain",
    "background": "Off-white sheer curtains, clear weave pattern",
    "props": [
      "Dark teal velvet bar stool with black and gold legs (sharp)",
      "Assorted potted green plants (sharp)",
      "Black abstract metal floor sculpture (sharp, detailed)"
    ]
  },
  "image_quality": {
    "resolution": "4K UHD",
    "format": "Raw photograph",
    "style": "Hyper-realistic",
    "attributes": [
      "Deep depth of field (infinite focus)",
      "Zero background blur (all elements sharp)",
      "Natural film grain",
      "High dynamic range",
      "Uncompressed look"
    ]
  },
  "camera_settings": {
    "camera_model": "Sony A7R IV",
    "lens": "35mm f/2.8 Prime",
    "aperture": "f/16 (for maximum sharpness and deep focus)",
    "shutter_speed": "1/250 sec",
    "iso": "400",
    "image_file_format": "RAW (.ARW)",
    "color_space": "Adobe RGB"
  }
}
```

## Sabrina Carpenter Glam Backstage Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
"subject":{argument name="subject" default="blonde woman"}, bangs, wavy hair, playful expression",
  "outfit":{argument name="outfit" default="champagne rhinestone corset, pink feather trim skirt"}",
  "setting":{argument name="setting" default="backstage hallway, SNL monitor visible"}",
  "mood":glam, candid, warm pink tones
```

## Double Exposure Paper Tear Collage

> Fotogerçekçi, sinematik logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Create a high-quality cinematic double exposure and paper-tear collage. The background features a large, ethereal close-up portrait of a young woman with long dark hair, wearing stylish {argument name="accessory" default="gold-rimmed sunglasses"} and traditional jhumka earrings, looking downwards with a soft smile. A realistic white torn-paper edge creates a horizontal divide across the center of the photo. In the foreground, the same woman is shown in a full-body shot, walking gracefully on a road covered in fallen leaves. She is wearing a {argument name="outfit" default="pink Burberry knit cotton wool sweater"} with an embroidered logo, paired with white pants. Her styling includes small gold jhumkas, a black bindi, white flat sandals with a bow, black nail polish on her hands and feet, white bangles, a gold chain necklace with a flower locket, and anklets. The scene is surrounded by a vibrant {argument name="background" default="Bombax ceiba flower tree garden"}. Professional fashion photography aesthetic, trending Instagram edit style, 16k resolution, photorealistic --ar 3:4 --stylize 750
```

## Stylish Trio City Street Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A highly detailed, ultra-realistic cinematic masterpiece photograph capturing a cool and stylish trio. In the center, a {argument name="subject" default="beautiful young East Asian woman with wet-texture long black hair"} is wearing trendy slim black sunglasses and a dark black oversized hoodie, playfully peeking out from behind a thick, dark metallic vintage street lamp in the style of photography , peeking out right beside her is an adorable {argument name="pet 1" default="orange tabby cat"}, and sitting closely next to them is a small, {argument name="pet 2" default="fluffy black-and-white Shih Tzu puppy"}; incredibly, both pets are also wearing matching cool black sunglasses and looking directly into the camera with a confident expression. The entire scene is bathed in the rich, warm, glowing light of the golden hour sunset.The background shows a soft-focus, blurry city sidewalk and street with beautiful bokeh effects, creating a professional portrait photography depth of field, 8k resolution, photorealistic, intricate details size 9:16
```

## Triple Split Portrait Triptych

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A vertical triplet portrait split horizontally into three distinct, stacked frames featuring the same young, cute {argument name="ethnicity" default="East Asian"} woman with a sleek, straight bob haircut and gentle wispy bangs. In the top frame, she smiles warmly and touches her hair, wearing a cozy {argument name="top outfit" default="yellow knit sweater"} against a weathered yellow wall background. In the middle frame, she laughs brightly while holding a ceramic coffee cup with both hands, dressed in a {argument name="middle outfit" default="deep red sweatshirt"} against a rustic red brick wall. In the bottom frame, she waves playfully at the camera, wearing a {argument name="bottom outfit" default="vibrant parrot green t-shirt"} under denim overalls, set against a lush green garden background. Each panel captures a unique, joyful pose, creating a cohesive and colorful triptych with a consistent subject across all three frames.
```

## Fashion Photography with Cartoon Companion

> Sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A high-quality fashion editorial photography of a {argument name="subject" default="young woman"} with {argument name="hair style" default="shoulder-length wavy black hair"}, expressive eyes, a warm smile, and an adorable face. She is standing confidently in a casual, stylish pose, wearing a cozy black sweater with a colorful {argument name="cartoon character" default="Tom Cat"} print, baggy blue jeans, and white Converse sneakers. Standing right beside her is a life-size anthropomorphic Tom Cat from "Tom and Jerry," featuring soft grey fur, a white belly, large green eyes, pink inner ears, and a playful grin. Tom has one arm wrapped around her shoulder in a friendly, protective pose. Natural outdoor golden hour lighting, cinematic composition, depth of field, 85mm lens.
```

## Artistic Arborpunk Urban Intersection

> Mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A busy {argument name="location" default="urban street intersection"} reimagined as artistic {argument name="style" default="arborpunk"}
```

## Cinematic Scene with Tom the Cat

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use the uploaded image as the character reference. Keep the exact same face, hairstyle, body shape, skin tone, and identity from the uploaded image. Do not change the person into another face or another gender.\
\
Create a realistic cinematic scene where the uploaded person is standing confidently wearing a {argument name="outfit" default="cozy light black oversized sweater with a colorful Tom cat print"}, baggy blue jeans, and white Converse sneakers.\
\
Beside the uploaded person stands a life-size {argument name="companion" default="anthropomorphic Tom cat from Tom and Jerry"} with soft grey fur, white belly, large green eyes, pink inner ears, and playful grin. Tom keeps one arm around the uploaded person’s shoulder in a friendly protective pose.\
\
Ultra realistic style, cinematic lighting, soft shadows, natural depth of field, realistic skin texture, detailed clothing folds, emotional atmosphere, aesthetic blurred background, 8K quality, highly detailed realistic photography.\
\
No extra people. No woman replacement. No text. No watermark.
```

## Candid Party Film Photo Portrait

> Sinematik, lüks portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A highly detailed closeup cinematic photograph of {argument name="subject" default="Woman A"} with vibrant long wavy blonde hair styled in an elegant high voluminous updo with loose curls framing her face, standing in a sophisticated indoor setting with warm ambient lighting from wall sconces. She is wearing an exquisite form-fitting floor-length evening gown in {argument name="gown color" default="soft champagne beige"} tones, intricately adorned with shimmering silver and gold sequins arranged in elegant swirling floral patterns, with additional chevron and geometric sequin embellishments running down the fitted skirt. The dress features delicate thin spaghetti straps, a deep plunging neckline, and an intricate open-back design with multiple thin crisscrossing straps laced elegantly across her bare back, tied with a soft bow at the lower back. She is posed gracefully facing the camera at a three-quarter angle, one arm raised as she adjusts her hair. Her reflection is clearly visible in a large ornate mirror with a black frame mounted on the wall in front of her, showing her front view with striking bright green eyes, subtle makeup, defined eyebrows, and a poised expression. Standing directly beside her is Woman B, facing the camera confidently, wearing a similar sequined evening gown in a complementary deep champagne tone, holding a champagne flute elegantly in one hand with a relaxed glamorous smile. On the other side of Woman A stands Woman C with blonde ombre hair loose and styled, holding a champagne flute in one hand, caught in a playful candid moment with her tongue out toward Woman A's cheek in a cheeky best-friend gesture without making contact, eyes sparkling with mischief and laughter. Shot on a {argument name="camera type" default="disposable film camera"}, candid amateur snapshot aesthetic, slight motion blur, natural film grain, harsh direct flash with blown-out highlights and warm color cast, slight lens distortion, authentic party photo feel, imperfect framing, raw and unposed energy. The background includes a light-colored textured wall, a decorative black wrought-iron mirror frame with scrollwork, and part of a brown leather chair in the bottom left corner, creating a luxurious atmosphere with soft shadows and rich tonal depth.
```

## Photorealistic Elevator Mirror Selfie

> Fotogerçekçi moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A highly detailed photorealistic mirror selfie of a {argument name="subject description" default="young, tall and slim woman"} standing with a classic fashion pose consisting of one leg straight and one leg angled away, inside a {argument name="location" default="modern stainless steel elevator"}, reflective metallic walls and doors, bright even ceiling lighting, speckled light gray floor, elevator button panel visible on the left with a red digital floor display showing "42".

Her face, identity and make-up is identical to the face provided in the attached selfie. She has shoulder-length auburn wavy voluminous hair with natural movement and soft side part. Her gaze is downwards looking at her phone screen.

She is wearing a {argument name="outfit" default="fashionable cream white chunky cable-knit sweater with intricate vertical cable patterns and crew neckline"}, long sleeves, tucked into a rich teal-blue pleated long skirt with sharp accordion-style pleats that fall just above her calves. She is wearing fitted black knee-high leather boots with long heels.

She holds a black iPhone-style smartphone in her right hand at chest height taking the selfie, left arm relaxed naturally by her side. Small gold/silver hoop earrings, a ring on her right hand. A small white structured shoulder bag hangs from her left shoulder with a pair of black sunglasses clipped onto the strap.

Perfect female anatomy, realistic fabric texture and folds on the cable knit sweater and long pleated skirt, realistic leather on the boots, natural hair flow, sharp detail, 8k photorealistic, theatrical lighting, clean elevator environment.
```

## Kedarnath Temple Introspective Portrait

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic cinematic portrait of a young South Asian man sitting alone on ancient wet stone steps beside a dark weathered Himalayan temple wall, wearing a fitted dark brown full-sleeve shirt with sleeves slightly rolled, light beige chinos, white sneakers, black wristwatch, and dark round sunglasses. He has short textured black hair, light stubble beard, sharp jawline, and a contemplative downward gaze, sitting with one knee raised and arms resting naturally, conveying a calm introspective mood. The setting is Kedarnath Temple, Uttarakhand, with the grand illuminated temple visible in the background, warm golden lights glowing at the entrance and on the temple spire, framed dramatically by towering snow-covered Himalayan mountains partially veiled in mist and snowfall. Ancient intricately carved stone architecture on the left foreground with engraved Sanskrit text visible, creating depth and historical richness. Ground is wet reflective stone pavement after snowfall, subtle puddles reflecting temple lights. Light snowflakes falling through the scene, creating atmospheric motion. Moody cold blue-gray color palette contrasted by warm amber temple lighting. Soft cinematic volumetric fog, realistic overcast mountain twilight, diffused natural low-key lighting with dramatic shadows. Shot in vertical portrait orientation, subject positioned in lower-left foreground using rule of thirds, temple centered in mid-background, mountains towering above. Shallow depth of field with crisp focus on subject, softly blurred temple and mountains. Hyper-detailed textures: wet stone reflections, fabric folds, realistic skin texture, snow particles, architectural carvings. Photography style: ultra-detailed DSLR realism, 85mm lens, f/1.8, cinematic bokeh, HDR, high contrast, moody travel editorial, National Geographic meets luxury lifestyle portrait, 8K resolution, photorealistic, dramatic composition, serene spiritual solitude, introspective pilgrimage atmosphere. Negative prompt: cartoon, low quality, blurry face, distorted anatomy, extra limbs, oversaturated colors, unrealistic temple proportions, artificial lighting, flat composition, low detail, duplicate features, exaggerated snowfall. Generate image using uploaded image as reference
```

## Realistic Summer Heat Lifestyle Portrait

> Minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A stunning 4K indoor summer lifestyle portrait of {argument name="subject" default="a young woman"}, capturing the mood of intense, suffocating summer heat and the exhausted search for cool relief. Shot in a medium shot using a 50mm prime lens at f/2.8, ISO 100, and a 1/500s shutter speed. She is kneeling on the floor in front of a pedestal {argument name="fan color" default="fan with blue blades"}, leaning forward tiredly with her arms resting loosely downwards between her legs. Her head is slightly tilted toward the airflow, her long hair blowing freely in the wind. She wears a {argument name="outfit" default="fitted white tank top and black sports shorts with white trim"}. Her expression is relaxed but shows her breathing heavily from the heat, with her lips lightly parted. Authentic, realistic drops of sweat are visible on her face, neck, and legs; her smooth, flawless skin glistens, spectacularly catching the light. The scene is set in a minimalist room during the day, near a window, with a wall-mounted split air conditioner visible in the softly blurred background (bokeh). Next to her on the floor are a whole watermelon and two juicy, freshly cut slices. Bright, harsh natural sunlight pours in from a window on the right, creating strong, sharp directional shadows to the left that dramatically highlight the specular shine of the sweat. Tack-sharp focus on the model's face and sweat droplets. --ar 9:16
```

## Cozy London Streetwear Portrait

> Fotogerçekçi, minimal moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Without changing my facial features or face. Create an Ultra-realistic cozy streetwear portrait which looks original. The model sits casually relaxed at an outdoor café in a {argument name="location" default="London city"} with elegant stone architecture and wrought-iron details. She wears an {argument name="sweatshirt" default="oversized beige " Girlish ” sweatshirt"}, {argument name="pants" default="chocolate brown cargo pant"}, and white New Balance sneakers. A beige Prada crossbody pouch adds a chic touch.Accessories: minimal jewelry, neutral manicure. Her skin glows and the sunlight adds a brightness to her flawless skin.
```

## Parisian Street Style Portrait

> Fotogerçekçi, lüks mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Amateur subtle blurry iphone shot, photorealistic portrait of a beautiful {argument name="subject" default="allison brie"} with fair skin, watching directly in camera and long straight hair in a low bun with loose strands, crouching confidently with hands on thighs in front of an {argument name="background" default="ornate red wrought-iron gate/door"} with sign 'Keor' engraved on it of a classic Parisian-style stone building. She wears a {argument name="top" default="yellow with black dots long-sleeved unbottoned collared shirt"}, a black scarf loosely tied around her neck, a short dark pleated mini mini skirt, sheer black tights, and leopard glossy high heels stilettos. She carries a black leather handbag on her right shoulder, has subtle makeup, and smiles softly while looking directly to the camera . Natural daylight, elegant European street setting, realistic photography style, sharp focus, high resolution.
```

## Candid Morning Bedroom Selfie

> Minimal portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_prompt",
  "version": "1.0",
  "description": {
    "subject": {
      "identity": "Use uploaded reference image, keep identity exact",
      "appearance": {
        "face": "Soft natural feminine features with minimal no-makeup makeup look, realistic skin texture, subtle rosy cheeks, hydrated lips, authentic under-eye softness, natural morning skin tone, detailed pores and delicate facial highlights",
        "hair": "Soft slightly messy morning hairstyle spread naturally across white pillow, silky texture, loose strands framing face, realistic volume and natural shine",
        "expression": "Sleepy playful expression with puckered lips and side-eye glance, relaxed candid morning selfie energy"
      },
      "body": {
        "type": "Slim natural feminine proportions"
      }
    },
    "clothing": {
      "outfit": {
        "details": [
          "{argument name="outfit" default="Minimal white ribbed tank top"}",
          "Soft lightweight fabric texture",
          "Thin shoulder straps",
          "Relaxed cozy sleepwear aesthetic"
        ]
      }
    },
    "pose": {
      "details": [
        "Lying comfortably on white bed sheets",
        "One arm extended naturally holding phone for selfie perspective",
        "Other hand lightly covering lips",
        "Head resting softly on pillow",
        "Relaxed upper body posture",
        "Natural candid bedroom selfie composition"
      ]
    },
    "environment": {
      "location": "{argument name="location" default="Minimal luxury bedroom"}",
      "background": [
        "Soft white pillows",
        "White cotton bedding",
        "Clean cozy bed aesthetic",
        "Bright airy morning atmosphere",
        "Minimal neutral interior tones"
      ]
    },
    "lighting": {
      "type": "Ultra realistic natural morning daylight",
      "style": "Soft luxury lifestyle photography",
      "effects": [
        "Natural diffused window light",
        "Soft realistic skin shadows",
        "Bright clean white balance",
        "Subtle facial highlights",
        "Authentic daylight reflections",
        "Soft airy bedroom mood",
        "Balanced exposure with realistic depth"
      ]
    },
    "camera": {
      "angle": "Top-down selfie angle",
      "framing": "Medium close-up vertical composition",
      "focus": "Sharp realistic focus on face with soft bedding details",
      "style": "Ultra realistic candid morning photography"
    },
    "watermark": {
      "details": [
        "Small subtle watermark text 'Glena jenner'",
        "Placed softly near lower corner edge",
        "Elegant transparent font",
        "Low-opacity luxury copyright style"
      ]
    },
    "mood": [
      "{argument name="mood" default="Soft, Cozy, Morning aesthetic"}"
    ],
    "quality": {
      "render": "Ultra photorealistic 8k",
      "details": [
        "Natural skin realism"
      ]
    }
  }
}
```

## Tropical Villa Jacuzzi Candid

> Minimal, lüks görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_prompt",
  "version": "1.0",
  "description": {
    "subjects": [
      {
        "identity": "{argument name="subject 1" default="Use uploaded reference image 1, keep identity exact"}",
        "appearance": {
          "face": "Soft youthful feminine features with minimal natural makeup, realistic wet skin texture, subtle pink cheeks, glossy natural lips, tiny skin imperfections, authentic daylight reflections on skin",
          "hair": "Wet loosely tied hairstyle with damp strands framing face, realistic water texture, natural movement and soft shine",
          "expression": "Relaxed genuine smile with closed eyes and playful candid energy"
        },
        "body": {
          "type": "Slim natural feminine proportions"
        },
        "clothing": {
          "details": [
            "White swimsuit  top",
            "Minimal clean swimwear aesthetic",
            "Wet realistic fabric texture",
            "Natural water reflections and highlights"
          ]
        },
        "pose": {
          "details": [
            "Standing inside bubbling jacuzzi beside second subject",
            "Body leaning slightly inward",
            "Shoulders relaxed naturally",
            "One arm partially underwater",
            "Casual candid best-friend pose"
          ]
        }
      },
      {
        "identity": "{argument name="subject 2" default="Use uploaded reference image 2, keep identity exact"}",
        "appearance": {
          "face": "Soft feminine facial features with realistic natural skin texture, subtle blush, glossy lips, natural wet skin glow, delicate facial details and authentic daylight skin tone",
          "hair": "Wet shoulder-length hairstyle with soft damp waves, realistic water strands, natural shine and texture",
          "expression": "Bright happy smile with relaxed cheerful expression"
        },
        "body": {
          "type": "Slim feminine body with natural proportions"
        },
        "clothing": {
          "details": [
            "Black  swimsuit ",
            "Minimal luxury swimwear styling",
            "Wet fabric realism with natural reflections"
          ]
        },
        "accessories": {
          "details": [
            "Minimal gold necklace",
            "Small delicate jewelry"
          ]
        },
        "pose": {
          "details": [
            "Standing closely beside first subject",
            "Upper body leaning softly toward camera",
            "Natural relaxed posture",
            "Friendly intimate summer pose"
          ]
        }
      }
    ],
    "environment": {
      "location": "{argument name="location" default="Luxury outdoor jacuzzi area in tropical villa backyard"}",
      "background": [
        "Foamy bubbling jacuzzi water",
        "Cream stone pool edge",
        "Palm trees and lush green bushes",
        "Luxury villa architecture with tiled roof",
        "Outdoor lounge furniture",
        "Bright natural summer atmosphere"
      ]
```

## LEGO Minifigure Couple Selfie Collage

> Fotogerçekçi portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-photorealistic 2x2 square candid couple selfie collage inside a {argument name="store type" default="colorful LEGO-style minifigure store"}, warm romantic date-memory aesthetic, real smartphone photography. The same young couple appears in all four panels while choosing and presenting their own custom LEGO-style minifigure products from organized bins full of tiny heads, hairpieces, torsos, legs, accessories, and colorful parts.

Most important rule:
The two custom minifigures must stay exactly the same in every panel. Same hair, same face, same outfit, same colors, same accessories, same scale, same product-like LEGO minifigure look. Do not redesign them between panels.

The woman’s minifigure is an {argument name="female profession" default="astronomer"}: brown wavy hair, feminine smiling face, dark navy or black celestial outfit with tiny stars or space-science details, a small telescope or star-chart accessory, cute intellectual astronomy vibe.

The man’s minifigure is a {argument name="male profession" default="computer engineer"}: dark hair, friendly face, casual tech outfit such as a hoodie or jacket, tiny laptop accessory or coding-themed printed tile, smart programmer/engineer vibe.

Panel 1 — Choosing pieces:
The couple leans over trays of LEGO-style minifigure parts, choosing their custom characters. Colorful bins filled with heads, hairpieces, outfits, laptops, telescopes, and accessories. Warm store lighting, candid cute date energy.

Panel 2 — Close-up in her hand:
Extreme close-up of the woman’s palm holding the finished two minifigures side by side. The astronomer girl and computer engineer boy figures are sharply focused, detailed, product-like, and clearly readable.

Panel 3 — Couple selfie:
The couple takes a cute selfie while holding the exact same two minifigures close to the camera. Their real faces are softly visible behind them, smiling naturally, slightly blurred. The minifigures remain the hero focus.

Panel 4 — Both hands presenting them:
Both the woman’s and man’s hands present the same two finished minifigures above colorful LEGO-style bins. The hands touch subtly, romantic and playful. The figures must match Panel 2 and Panel 3 exactly.

Overall style: ultra-realistic smartphone photo, square 2x2 collage, clean white borders, colorful toy-brick store, shallow depth of field, realistic hands, warm indoor lighting, playful romantic couple date, high detail, natural skin texture, cute nostalgic atmosphere.
```

## Lake Como Lifestyle Portrait

> Mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A high-quality lifestyle photograph of a joyful young {argument name="subject" default="blonde woman with curtain bangs"} on a {argument name="setting" default="wooden boat in Lake Como"}. She has her eyes closed, a bright smile, and her arms stretched wide in the air. She is wearing a {argument name="outfit" default="chic, colorful summer resort outfit"}: a sheer pink cropped wrap top with wide sleeves and a matching pastel blue, pink, and yellow floral sarong with a high slit. In the background, charming old European coastal buildings in shades of terracotta and yellow with green shutters line the water. Soft, natural daylight, warm film grain aesthetic, candid and carefree vibe. --ar 3:4
```

## Realistic iPhone Snapshot Stretching Woman

> Lüks portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A highly realistic casual iPhone snapshot of a {argument name="subject description" default="beautiful woman in her 20s"} standing near a tall window inside a modern apartment. She has delicate, natural beauty: deep chestnut layered hair loosely tied up with a few loose strands framing her face, defined double eyelids, a slim straight nose, soft natural lips, and realistic skin texture.
She is doing a relaxed stretching pose: her left hand holding her right wrist, both arms raised above her head with the wrists slightly overlapping. The upward stretch naturally elongates her upper body, with one hip gently tilted outward and one knee relaxed. She wears a {argument name="clothing color" default="pink"} sleeveless knit top with wide side openings and a high-waisted gray pencil skirt. As her arms lift, the side opening naturally reveals her underarm, shoulder line, and part of her side waist, creating a subtle yet eye-catching sensual detail.
The camera angle feels like a close-up spontaneous handheld shot, slightly off-center composition with authentic iPhone photo quality, including mild grain and imperfect framing. Natural window light enters softly from the side, casting gentle shadows along her body. The background includes a neutral-toned sofa, light curtains, a small table, scattered magazines, and green plants. The overall mood is realistic lifestyle photography — elegant, natural, and slightly teasing, with realistic human anatomy and no overly polished studio look.2:3ar
Same face
```

## Retro Gaming Bedroom Aesthetics

> Retro, fütüristik afiş üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cozy, vibrant bedroom filled with retro gaming and classic anime aesthetics features a young woman with {argument name="hair style" default="long, bright ginger hair"} and a cheerful smile. She has styled her hair with quirky clips, including a miniature pretzel and a retro NES controller. She is wearing a {argument name="outfit" default="pastel purple sweatshirt featuring a 'Star Guardian' Sailor Moon graphic"}, paired with blue jeans.
​Her room is a nostalgic haven, decorated with a vintage Macintosh computer running a classic pixel game, neon signs reading "EXTRA LIFE" and shaped like a crescent moon, and shelves lined with Tamagotchi devices. The walls are adorned with posters of Sailor Moon and Dragon Ball Z, alongside a corkboard packed with keychains. Scattered around the bed are various plushies, including {argument name="plushies" default="Totoro, Kirby, Cinnamoroll, Pikachu, and Gudetama"}. Across the different poses, she interacts with her colorful surroundings—holding a large waffle cone piled high with scoops of ice cream and a cherry on top, posing playfully with headphones on, and happily cuddling her Kirby and Totoro plushies.
```

## Urban Streetwear Portrait

> Fotogerçekçi, sinematik afiş üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Photorealistic portrait of a beautiful young {argument name="ethnicity" default="East Asian"} woman in her early 20s, with fair skin and delicate facial features. She has long brown hair styled in a voluminous, slightly messy high bun with soft curtain bangs and loose strands framing her face. She is wearing thin round metal-frame glasses with a subtle {argument name="tint color" default="pink"} tint. Her expression is calm and confident, with full pink lips, natural makeup, and a direct gaze at the viewer. She wears a {argument name="outerwear" default="black distressed denim jacket"} with intentional rips and frayed edges on the shoulders and chest pockets, silver buttons, and a thin silver necklace with a small round pendant. The jacket is open, revealing her collarbone. Dramatic cinematic lighting with strong side lighting coming from the right, creating soft shadows on the left side of her face. The background is a textured urban wall covered in torn, layered posters and peeling paint with graffiti elements. Moody, high-contrast atmosphere, sharp detail, realistic skin texture, fine hair strands, 8k photorealistic quality, shot on Sony A7R IV, 85mm lens, f/1.8.
```

## Serene Coastal Cliff Floral Portrait

> Sinematik, minimal manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A serene portrait of a {argument name="subject" default="woman"} resting gracefully on {argument name="location" default="rugged coastal cliffs"}, illuminated by brilliant, sun-kissed natural light. The vast, deep blue ocean stretches out endlessly behind her, creating a tranquil and cinematic backdrop that inspires inner peace. She is dressed in a {argument name="outfit" default="delicate, off-the-shoulder floral dress"} that perfectly complements the raw, earthy textures of the sun-warmed stone beneath her. Her dark, gently waved hair dances lightly in the fresh coastal breeze, elegantly secured with a minimalist hair clip. The luminous, golden glow on her skin beautifully captures the raw essence of a perfect, lazy summer afternoon. This breathtaking composition effortlessly blends soft, romantic elegance with the majestic, untamed beauty of the seaside landscape, evoking a profound sense of quiet reflection, ultimate relaxation, and timeless grace within nature's warm embrace.
```

## Fairy-Tale Park Travel Photo

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A full-body, high-quality travel photo of a stylish woman standing outdoors in a whimsical, fairy-tale themed park. She is wearing a {argument name="top" default="chic white button-down shirt tied at the waist"} and a vibrant {argument name="skirt" default="turquoise ribbed midi skirt"} with buttons down the front, paired with white chunky sneakers. She is holding a small light-colored handbag. In the background, there is a large, colorful {argument name="landmark" default="genie statue and an enchanting, lush green castle"} covered in vines under a clear sky.
```

## 90s Inspired Overhead Portrait

> Minimal, retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
an overhead, high-angle shot of a {argument name="subject" default="young woman with long, wavy blonde hair and soft curtain bangs"} sitting on a {argument name="surface" default="beige carpeted floor"}. She is wearing {argument name="accessories" default="clear-framed, round prescription glasses"} and looking directly up at the camera with a subtle, gentle smile. Her outfit consists of a simple white short-sleeved t-shirt with delicate lace trim around the neckline, loose-fitting baggy denim shorts, and knee-high dark brown leather boots. The lighting is soft and natural, creating a casual, candid, and nostalgic 90s-inspired aesthetic.
```

## Golden Hour Daisy Field Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic golden hour portrait of her standing in a {argument name="location" default="vast field full of blooming white daisies"}. She is turning back and smiling warmly at the camera, her {argument name="hair style" default="long wavy dark brown hair"} blowing in the wind. She wears a soft, {argument name="clothing style" default="vintage-style light floral dress"} that flows naturally with the breeze. The scene is captured during sunset with warm golden sunlight illuminating her face and creating soft highlights and shadows.The background shows an endless meadow of flowers with a distant tree line, slightly blurred with shallow depth of field. Dreamy, romantic atmosphere, natural light, soft film tones, cinematic color grading, ultra realistic, high detail, 85mm lens, f1.8, bokeh, professional photography, emotional storytelling, warm summer evening vibe.
```

## Freckled Mirror Selfie Portrait

> Portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A young woman with long voluminous wavy {argument name="hair color" default="black"} hair and fair skin covered in numerous freckles stands in a room with wooden flooring and beige walls with chains, posing for a photo while looking back over her shoulder toward the camera with a neutral expression. She has striking light {argument name="eye color" default="blue-green"} eyes and small stud earrings. She wears a {argument name="clothing" default="short-sleeved raglan-style crop top"} that is pink on the sleeves and collar with a yellow body, exposing her midriff, paired with bright white tight-fitting shorts. Her body is turned to show her side and back profile. In the large mirror to her left, her reflection clearly shows the back view of her outfit and long red hair. The setting includes a white door in the background with the written 'Keor' on it, and the lighting is soft indoor illumination. The overall style is a realistic casual photograph.
```

## Vintage Y2K Webcam Photo Booth Collage

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Vintage webcam-style photo booth collage of a young brunette girl sitting on a bed in a dark cozy bedroom at night, captured in three candid frames with different expressions — peace sign selfie, sleepy tired face, and natural laughing smile. Soft blue screen lighting, grainy low-light texture, nostalgic early 2000s webcam aesthetic, visible digital timestamp overlay, casual black sleeveless top, natural messy hair, minimal makeup, relaxed late-night vibe, intimate bedroom atmosphere, soft shadows, candid Gen Z mood, Tumblr and Y2K aesthetic, realistic skin texture, cinematic composition, lo-fi digital camera quality, photorealistic.
```

## Stylish Highway Fashion Portrait

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic stylish fair young woman with glowing fair skin, soft wavy brown hair, premium black sunglasses, glossy pink lips, {argument name="outfit" default="oversized grey-white striped t-shirt"}, elegant necklace, standing confidently on {argument name="location" default="empty highway road"}, cinematic mountain background, soft natural daylight, luxury fashion vibe, detailed realistic skin texture, windy hair effect, shallow depth of field, DSLR portrait photography, aesthetic modern lifestyle look, ultra-detailed 4K masterpiece.9:16
```

## Autumn Alpine Meadow Portrait

> Fotogerçekçi, sinematik manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Young woman with {argument name="hair style" default="long straight dark brown hair"}, {argument name="eye color" default="brown eyes"}, light olive skin, soft natural makeup, slight smile, looking directly at camera. Wearing a beige/camel double-breasted wool coat over a cream ribbed turtleneck sweater and black tailored trousers with hands in pockets. Standing outdoors on a {argument name="setting" default="grassy Alpine meadow in autumn"}. Background features dramatic snow-capped rocky mountains, rolling green and golden-yellow hills, tall pine and larch trees with autumn foliage, a winding road, and a small alpine village in the valley below. Overcast soft cloudy sky. Full body portrait from waist up, shot at eye level with shallow depth of field, background slightly blurred. Cinematic outdoor photography, moody autumn color palette, natural lighting, photorealistic, 85mm lens style.
```

## Melancholic Rooftop City Sunset

> Fotogerçekçi, sinematik görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic, ultra-realistic sunset scene overlooking a glowing city by a calm river. A young man with messy dark hair sits on the edge of a rooftop ledge, wearing a {argument name="clothing" default="black hoodie, dark pants, and white sneakers"}. He rests his chin on his hand in a thoughtful pose, gazing at the horizon. Beside him sits a small cat, also looking out over the city. The sky is filled with dramatic {argument name="sky colors" default="orange, red, and purple"} clouds as the sun sets, casting warm reflections on the water below. Birds fly across the sky in silhouette. A {argument name="lighting" default="single hanging Edison bulb"} glows softly above, adding a cozy aesthetic. Tree branches frame the scene from the side. The atmosphere is peaceful, introspective, and slightly melancholic. Highly detailed, soft lighting, depth of field, 4K, cinematic color grading, volumetric lighting.
```

## Candid Garden Party Couple Photo

> Fotogerçekçi, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-photorealistic romantic night party couple photo, candid flash photography, real photograph not illustration. Create an intimate night-time couple portrait outdoors at a stylish evening party or garden event. The mood is romantic, warm, playful, affectionate, and candid, like a real disposable-camera or flash Instagram memory. A handsome young man stands behind the woman, hugging her tightly around the waist with both arms. He wears a black suit jacket or black blazer over a white shirt, elegant but slightly relaxed. He has dark curly hair, warm fair-to-olive skin, clean masculine features, and a soft affectionate expression. He kisses the woman gently on the cheek with his eyes closed, creating a natural romantic moment. The woman stands in front of him, leaning back into his embrace, smiling brightly with her eyes closed. She looks joyful, loved, and slightly shy. She has long dark glossy wavy hair falling over her shoulders, warm glowing skin, natural makeup, soft glossy lips, and delicate jewelry. She wears a black sparkly evening dress with thin straps, elegant neckline, subtle sequins or beaded texture, fitted feminine silhouette, classy and romantic. The man’s hands are visible around her waist, natural and protective, with realistic finger anatomy and believable pressure on the dress fabric. The couple should look close, affectionate, and comfortable, not stiff or posed. Lighting: direct night flash photography with warm ambient background lights. Flash should illuminate their faces and outfits, with realistic highlights on skin, hair, sequins, hands, and jewelry. Background is darker with soft orange garden lights, deep green foliage, patio chairs, warm event atmosphere, and subtle film grain. Keep the flash bright but not overexposed. Camera: realistic compact camera or phone flash photo, vertical 4:5 or 3:4 framing, slight candid imperfection, sharp faces, natural skin texture, realistic motion-free detail, subtle flash shadows behind the couple. Background: dark outdoor garden party or terrace at night, soft leafy trees, warm string lights or lantern glow, patio seating slightly blurred, intimate private event feeling. Mood: romantic cheek kiss, protective hug, elegant black evening outfits, joyful couple energy, night flash aesthetic, candid celebrity afterparty photo, warm love story. Negative prompt: low quality, cartoon, illustration, 3D render, plastic skin, waxy faces, generic AI faces, distorted hands, extra fingers, missing fingers, fused fingers, bad kiss anatomy, lips misplaced, awkward hug, stiff bodies, warped faces, uneven eyes, bad teeth, blurry faces, overexposed flash, red-eye, messy background, text, watermark, logo, cheap dress, unrealistic sequins, bad anatomy, duplicate arms, extra people
```

## Nostalgic Gamer Girl Room Portrait

> Retro, fütüristik afiş üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Young woman with {argument name="hair color" default="long, vibrant ginger hair"} and a light complexion poses in a brightly colored, {argument name="theme" default="nostalgic gamer-themed room"} filled with retro collectibles. She is wearing whimsical hair accessories, including a pretzel-shaped clip, a mini NES controller, and a tiny soda bottle. In some variations, she wears a light pastel mint green or a soft purple sweatshirt featuring an anime graphic of a pink-haired "Star Guardian" character, paired with distressed denim shorts featuring hanging, water-filled clear keychains containing miniature toy fish. In other variations, she wears an oversized, ribbed knit sweater dress in either warm terracotta orange or creamy off-white, decorated with a sweet graphic of Cinnamoroll and Kirby having tea. She alternates between waving at the camera, holding up a pastel lavender Tamagotchi virtual pet, and resting her hand on her hip. The background is a vibrant haven for 90s and 2000s pop culture lovers, featuring neon moon and star lights, walls covered in classic anime posters like Sailor Moon and Dragon Ball Z, and shelves lined with vintage Final Fantasy VI game boxes and an extensive collection of colorful Tamagotchis. A classic beige retro computer monitor displays an old-school pixelated game next to an old-fashioned television set. The floor is covered in a pink and yellow checkered rug where large plushies of Cinnamoroll, Kirby, King Dedede, and My Melody sit alongside a {argument name="accessory" default="retro blue and yellow boombox"} and a transparent purple Game Boy Color.
```

## Cottagecore Wheat Field Serenity

> Minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
    "subject": {
      "gender": "Female",
      "approximate_age": "Young adult, early 20s",
      "ethnicity": "{argument name="ethnicity" default="East Asian"}",
      "facial_features": {
        "eyes": "Looking upwards and slightly to the right",
        "expression": "Serene, contemplative, and hopeful",
        "makeup": "Minimal, natural look"
      },
      "hair": {
        "color": "Dark brown / Black",
        "style": "Parted in the middle, styled into two long, neat braids (pigtails) resting over her shoulders"
      },
      "clothing": {
        "style": "Rustic, cottagecore, simple aesthetic",
        "type": "{argument name="dress type" default="A-line midi dress"}",
        "fabric": "Light beige or off-white linen/cotton",
        "features": "Wide, flowing bell sleeves and a square-cut neckline"
      },
      "pose": "Standing full-body shot, walking barefoot through a field, lightly touching the wheat stalks with her right hand, holding a basket in her left arm"
    },
    "accessories": {
      "basket": {
        "type": "Woven straw / wicker tote bag",
        "contents": [
          "{argument name="basket contents" default="Freshly baked artisanal bread loaves"}",
          "A ceramic or earthenware pitcher / jug"
        ]
      }
    },
    "environment": {
      "location": "Golden wheat field",
      "foreground_and_midground": "Dense, tall, ripe golden wheat stalks arranged in straight agricultural rows",
      "background": {
        "element": "A traditional rustic wooden windmill sitting on a distant hill",
        "sky": "Clear, bright blue, cloudless sky"
      }
    }
  }
```

## Modern Office Lifestyle Portrait

> Retro portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
"A creative lifestyle portrait photography shot of {argument name="subject name" default="[NAME]"} in a modern home office, captured from a high angle looking down. She has long, straight hair parted slightly to the side, glossy red lipstick, and sharp black winged eyeliner. Her skin has a natural, glowing, and dewy texture with fine, authentic pores visible under the ambient light. She is looking up at the camera with a warm, playful smile showing her teeth. She is wearing a tight-fitting, light blue ribbed knit long-sleeve top with a deep V-neck adorned with delicate white lace trim, paired with a white pleated mini skirt, pink tights, and black pointed-toe shoes. Standing and leaning slightly forward, she poses with a dynamic forced perspective: her right arm is extended straight towards the lens, holding black-framed glasses in the extreme foreground, while her left hand rests casually on her hip. The setting is a bright modern home office with light wood laminate flooring. To the left is a white marble-patterned desk featuring a white retro telephone with a coiled cord and a black folder. Behind her are smooth white cabinet doors and a black office chair. The lighting is bright and diffused, creating very soft and flattering shadows on her face and body, enhancing the playful, inviting, and casual mood. Technical details: Shot with a 24mm wide-angle lens, f/2.8 aperture, ISO 400, and 1/125s shutter speed. The depth of field is shallow, leaving the hand and glasses in the foreground softly blurred with a beautiful bokeh effect, while her face and eyes remain in perfectly sharp, high-resolution focus. Smooth depth of field transitions and highly realistic fabric and skin rendering. --ar 9:16"
```

## Matching Pajamas Mirror Selfie

> Fotogerçekçi, retro portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-photorealistic cozy couple mirror selfie, romantic matching pajama lifestyle photo, real photograph, not illustration. Create a full-body candid mirror selfie of a young couple standing close together in a bright, stylish, dopamine-decor bedroom inside an elegant European-style apartment. The mood is intimate, playful, soft, romantic, cozy, and natural, like a real Instagram story memory captured on a quiet morning at home. If reference images are provided, the woman and the man must match the uploaded female and male references with extremely high identity accuracy, as close to 100% facial likeness as possible. Preserve their exact facial structure, facial proportions, natural expression style, skin tone, and recognizable identity. Do not turn them into generic AI faces. The couple stands in front of a tall ornate yellow mirror with carved vintage details. The mirror should be large enough to show their full bodies clearly, from head to colorful socks, with a realistic mirror reflection and natural smartphone perspective. The framing should feel slightly imperfect and candid, like a real mirror selfie, but still beautiful and editorial. The woman stands in front of the man, petite and feminine, holding a pink smartphone in front of her face to take the selfie. The phone partially covers her face in a natural way. She has dark hair tied in a casual messy bun, soft natural skin, relaxed shy body language, and a warm cozy presence. She wears a loose pink-and-white striped pajama set with tiny red heart details on the fabric. The pajama set includes a long-sleeve button-up shirt and matching relaxed pajama pants, made from soft cotton with realistic folds, wrinkles, seams, and gentle fabric texture. She wears cute colorful socks in soft pink, red, yellow, and cream tones, matching the dopamine bedroom palette. The man stands closely behind her, tall, handsome, warm olive/tan skin, dark slightly messy hair, light stubble, broad shoulders, and a relaxed affectionate smile. He leans down toward her in a sweet protective way, hugging her gently around the waist from behind. His posture should feel romantic, natural, playful, and comfortable, not stiff or overly posed. He wears a loose blue-and-white striped pajama set with a long-sleeve button-up shirt and matching relaxed pajama pants, soft cotton texture, cozy oversized fit, and realistic fabric folds. He wears colorful cozy socks in blue, yellow, green, and cream tones, coordinated with his pajamas and the colorful bedroom decor. Both pajamas should look coordinated but not identical: the man in blue-and-white stripes, the woman in pink-and-white stripes with small red hearts. Their socks should also feel coordinated but playful: colorful, cozy, soft cotton, slightly mismatched in a charming at-home way, with realistic ribbed knit texture and natural fabric folds. The styling should feel cute, soft, romantic, and cozy, like matching sick-day pajamas at home. Setting: a colorful dopamine-style bedroom with cheerful but tasteful decor, bright bedding, playful pillows, soft blankets, warm pastel accents, colorful wall art, cozy textures, and a lived-in romantic atmosphere. The apartment has elegant European details: high ceiling, soft beige or warm cream walls, white wall molding, tall windows, patterned vintage tile floor, and refined old-apartment charm. The room should feel stylish, warm, personal, and beautiful, never messy or cheap. Lighting: soft natural morning daylight coming from the left window, gentle shadows, realistic highlights on skin and hair, soft reflections on the yellow mirror frame and pink phone. No harsh flash, no overexposed windows, no artificial studio look. Preserve realistic detail in skin texture, hair strands, pajama fabric, sock knit texture, mirror carving, vintage floor tiles, bedding, and bedroom decor. Camera: realistic smartphone mirror selfie, vertical 9:16 composition, full-body reflection, slight wide-angle phone perspective but no distortion. The phone should look realistic in size and placement. Hands and fingers must be anatomically correct. The hug should feel physically believable and natural, with correct arm placement around the woman’s waist. Mood: cozy couple love, matching pajamas, colorful socks, colorful bedroom morning, playful affection, soft romance, intimate home memory, warm Instagram story aesthetic, relaxed and tasteful. Negative prompt: low quality, cartoon, illustration, anime, painting, 3D render, CGI, plastic skin, waxy faces, generic AI faces, distorted mirror reflection, warped bodies, extra arms, extra fingers, missing fingers, bad hands, fake phone, unrealistic phone size, bad phone anatomy, stiff pose, unrealistic hug, distorted legs, bad feet, mismatched pajama texture, bad sock anatomy, ugly room, messy background, dull decor, harsh lighting, overexposed window, blurry faces, bad anatomy, bad proportions, text, watermark, logo.
```

## Luxury Pool Flamingo Float Portrait

> Minimal, lüks moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "type": "image_prompt",
  "version": "1.0",
  "description": {
    "subject": {
      "identity": "Use uploaded reference image, keep identity exact",
      "appearance": {
        "face": "Soft glamorous feminine facial features, bold red glossy lips, sculpted cheeks, subtle warm blush, sharp eyeliner, luminous skin glow, realistic pores and smooth skin texture, elegant high-fashion beauty aesthetic",
        "hair": "Elegant messy high bun with loose wispy strands, soft realistic texture, natural volume and glossy shine",
        "expression": "Confident luxurious expression with slightly intense eyes and poised feminine energy"
      },
      "body": {
        "type": "Slim feminine figure with graceful posture and realistic anatomy"
      }
    },
    "clothing": {
      "outfit": {
        "details": [
          "White swimming dress",
          "Bare feet"
        ]
      },
      "accessories": {
        "details": [
          "Small hoop earrings",
          "Luxury editorial styling",
          "Minimal elegant accessories"
        ]
      }
    },
    "pose": {
      "details": [
        "Relaxed seated pose on pink flamingo float",
        "One arm resting casually on float edge",
        "One hand touching hair softly",
        "Legs crossed elegantly",
        "Luxury playful editorial body language",
        "Confident feminine posture"
      ]
    },
    "environment": {
      "location": "Luxury resort swimming pool",
      "background": [
        "Crystal clear turquoise pool water",
        "Large pink flamingo float",
        "Bright summer atmosphere",
        "Soft water ripple reflections",
        "Clean vibrant pool aesthetic",
        "Dreamy vacation mood"
      ]
    },
    "lighting": {
      "type": "Ultra realistic bright summer lighting",
      "style": "Luxury fashion poolside editorial photography",
      "effects": [
        "Strong natural sunlight",
        "Sharp realistic water reflections",
        "Soft skin highlights",
        "Bright clean shadows",
        "Cinematic summer glow",
        "Vibrant pastel color tones",
        "Luxury vacation atmosphere",
        "Natural reflective lighting on water and fabric"
      ]
    },
    "camera": {
      "angle": "High-angle fashion portrait shot",
      "framing": "Medium full-body composition",
      "focus": "Sharp focus on subject and float with detailed reflective water textures",
      "style": "Ultra realistic luxury editorial photography"
    },
    "mood": [
      "Playful",
      "Luxury",
      "Fashionable",
      "Summer",
      "Editorial"
    ],
    "quality": {
      "render": "Ultra photorealistic 8k",
      "details": [
        "Micro skin texture realism",
        "Detailed water reflections",
        "Luxury fashion photography quality",
        "Realistic fabric rendering",
        "Natural cinemat
```

## Cinematic Beach Portrait Auburn Hair

> Sinematik, lüks portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cinematic portrait of a young woman with vivid {argument name="hair color" default="auburn"} hair, resting gracefully on a tranquil, {argument name="weather" default="overcast beach"}. She wears striking {argument name="swimwear color" default="green and yellow"} swimwear, offering a vibrant focal point against the muted tones of the ocean, wet sand, and dark coastal boulders. The soft, diffused lighting of the cloudy sky casts a natural, even glow on her skin, highlighting the gentle texture of sea sand. The composition captures a serene, contemplative mood, blending the raw, atmospheric beauty of the shoreline with an elegant and relaxed presence.
```

## Woman in Hammock Luxury Resort Pool

> Fotogerçekçi, lüks logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{"prompt": "A photorealistic portrait of a young woman with long auburn hair sitting on a white rope hammock suspended over a turquoise private villa pool in a tropical luxury resort courtyard. She is wearing a light lavender ruffled dress, floral earrings, a delicate pendant necklace, bracelets, and holding a fresh coconut drink beside her. Soft natural daylight, serene expression, shallow depth of field, high detail, luxury travel aesthetic, editorial lifestyle photography, ultra realistic.", "negative_prompt": "blurry, low resolution, distorted anatomy, extra fingers, malformed hands, bad proportions, duplicate limbs, oversaturated, cartoon, anime, CGI, watermark, text, logo", "size": "1024x1792", "style": "photorealistic", "camera": {"angle": "eye level portrait", "lens": "85mm", "aperture": "f/2.0"}, "lighting": "soft natural daylight", "composition": "centered subject, vertical portrait, luxury editorial framing"}
```

## Artist Studio Portrait Transformation

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
High-quality, ultra-realistic image transformation. Keep the original face, identity, and facial features EXACTLY the same without any modification.
​The scene shows the person standing inside a {argument name="room type" default="cozy, creative artist's studio room"}. Beside them is a large hand-drawn pencil sketch portrait of themselves placed on a wooden easel. The sketch must look highly detailed realistic graphite drawing (black and white), matching the exact pose, outfit, and expression of the real person.
​The real person should be in full color, wearing the same outfit, with natural skin tones, realistic lighting, and sharp focus. The person should be interacting with the sketch by holding or shaking hands with their drawn version.
​The background should look like a creative artist's room: wooden floor, soft warm lighting, art supplies scattered (paint brushes, palettes, canvases), paintings hanging on walls, shelves with colors, slightly messy but aesthetic studio vibe.
​Lighting should be warm, cinematic, slightly golden tone with soft shadows and depth of field. Ensure: Face is 100% preserved (no AI face change), Same hairstyle, expression, and outfit. Realistic hand interaction between real and sketch. Highly detailed pencil shading in sketch. Photorealistic quality, 4K resolution. Add a subtle, elegant text watermark "{argument name="watermark" default="Kinza 💫"}" in the bottom corner.
```

## Tranquil Afternoon Red Hair Portrait

> Sinematik, minimal portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A serene portrait capturing a tranquil afternoon. The subject, featuring {argument name="hair" default="voluminous wavy red hair"} and delicate {argument name="details" default="freckles"}, gazes with a warm smile. She rests gracefully on a textured {argument name="furniture" default="grey sofa"}, draped in a vibrant floral-patterned summer garment. Her pose is effortlessly relaxed, resting her chin on one hand with bare feet playfully elevated in the softly blurred background. Natural, diffused sunlight illuminates her features with a cinematic glow, highlighting her subtle eye tones. The composition draws the viewer into an intimate moment of weekend leisure, blending organic warmth with a minimalist, airy environment.
```

## Retro Eclectic Pigtail Fashion Portrait

> Retro, fütüristik afiş üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A cheerful {argument name="subject" default="young woman"}, with her {argument name="hair style" default="dark hair in two high pigtails"} accented by red bows and wearing round, white-framed glasses, is captured in a vibrant, eclectic, and retro-themed space. She is dressed in a {argument name="dress" default="red and white gingham checkered sleeveless dress"}, tiered and midi-length, paired with chunky white sneakers and colorful patterned socks. The background is a dense, colorful tapestry of vintage-inspired graffiti, pop art posters, string lights, and neon signs, including one that reads 'POP!' and another 'CHILL,' alongside a large 'DREAM CREATE PLAY' mural and old vinyl records. In various poses, she holds and eats from a colorful striped box of 'POPCORN', touches her pigtails with both hands, is seen standing, and is smiling directly at the camera, surrounded by cozy textiles, a ukulele, and retro decor. The overall setting is a charmingly cluttered, rustic, and playful hangout, lit by warm, ambient lights.
```

## Sadie Sink Golden Hour Rooftop

> Sinematik yemek görseli üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A young woman with fair skin, striking blue eyes, and long wavy reddish-brown hair styled with small braids stands on a {argument name="setting" default="rustic urban rooftop terrace"} during {argument name="time" default="golden hour sunset"}. She is positioned in the center-right of the frame, turning her head slightly to her right with a thoughtful, neutral facial expression. Her hair flows naturally over her shoulders. She wears a coordinated {argument name="outfit color" default="peach-orange"} outfit consisting of a sleeveless lace-textured top with a matching scarf draped around her neck, with additional fabric wrapped around her midsection, paired with loose, flowing wide-leg pants featuring a black waistband detail. Her arms are raised as she hangs a patterned garment on a clothesline strung across the scene, with a thin gold bracelet on her right wrist. The background features weathered red brick walls, potted green plants in terracotta pots, distant city buildings under a soft dusk sky, and warm, natural sunlight casting gentle golden highlights across the scene. The overall style is realistic photography with cinematic lighting and warm color tones.
```

## Romantic Cinematic Elevator Portrait

> Sinematik portre üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Create an Image of the couple from reference image,
The scene is captured in a {argument name="location" default="lift"} with Cinematic lighting {argument name="lighting mood" default="warm light golden vibe"} and the male character holds a {argument name="prop" default="flower bouquet"} in his hand and the female character looking into his eyes with love and placing her one hand on his hand that is holding the bouquet,
The scene is insanely realistic and so romantic with love emotion and beautiful face expressions.
```

## Indian Woman with Macaw in Forest

> Manzara üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Convert the uploaded image into a beautiful young {argument name="subject nationality" default="Indian"} woman standing near a blossom dried tree, surrounded by lush green trees and colorful wildflowers. She is softly smiling while feeding seeds to a vibrant {argument name="bird type" default="blue and gold macaw"} perched on the tree, with sparrows, lovebirds, and colorful parrots flying around and sitting in her hand. She wears a modern {argument name="outfit style" default="Dubai-style chic open cream abaya with high-waisted jeans"}. Her wavy brown hair is open.
```

## Cinematic Daisy Field Portrait

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Ultra-realistic cinematic portrait of a beautiful young woman standing in a blooming daisy field during soft golden daylight, wearing a {argument name="clothing" default="dark emerald green floral dress"} with a waist tie, long flowing wavy black hair moving naturally in the breeze, eyes closed with a peaceful joyful smile, arms gently stretched outward enjoying nature, dreamy romantic countryside atmosphere, shallow depth of field, foreground flowers blurred with creamy bokeh, soft natural skin tones, highly detailed fabric texture, subtle wind motion, elegant feminine vibe, realistic outdoor photography, 85mm lens look, ultra HD, soft pastel background, natural lighting, photorealistic, premium lifestyle photoshoot aesthetic, balanced composition, serene emotional mood, cinematic color grading, high detail, organic tones, fashion editorial style.
```

## Rural Countryside Fashion Portrait

> Moda çekimi üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "environment_and_background": {
    "location": "Rural countryside, farm field or ranch",
    "background_elements": [
      "A rustic, weathered wooden fence in the foreground where the character is seated",
      "Green grassy field stretching into the background",
      "Scattered tall green trees in the distance",
      "A few distant farm animals (like cattle or cows) grazing",
      "Open blue sky with soft, scattered white clouds"
    ],
    "lighting": "Warm golden hour sunlight, soft late afternoon outdoor lighting",
    "overall_vibe": "Country, rustic, western, casual outdoor farm aesthetic"
  },
  "pose_and_composition": {
    "shot_type": "Full-body shot, vertical orientation",
    "camera_angle": "Eye-level, straight-on framing",
    "pose": {
      "action": "Sitting casually on top of a rustic wooden fence gate",
      "leg_position": "Legs dangling down naturally over the fence structure, knees slightly bent",
      "hand_position": "Right hand raised up to gently touch or hold the brim of the baseball cap, left hand resting casually on the fence or lap",
      "head_position": "Facing forward towards the camera with a cheerful, smiling expression"
    }
  },
  "outfit_and_apparel": {
    "top": {
      "type": "Tuck-in short-sleeve crewneck T-shirt",
      "color": "{argument name="shirt color" default="Off-white or cream"}",
      "details": "Features a cute graphic illustration on the front (teddy bear or cartoon character with text)"
    },
    "bottom": {
      "type": "Skinny-fit distressed denim jeans",
      "color": "Dark blue wash",
      "details": "Distinct ripped/distressed cuts over both knees"
    },
    "footwear": {
      "type": "Classic western cowboy boots",
      "color": "Black",
      "material": "Leather or faux leather with subtle stitching details"
    }
  },
  "accessories": {
    "headwear": "Dark navy blue or black baseball cap with a red embroidered letter logo on the front",
    "belt": "Wide brown leather western-style belt with a prominent metal buckle and studded or patterned embellishments"
  }
}
```

## Majestic Elephant Cloud Photography

> Fotogerçekçi, sinematik manzara üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Hyper-realistic photography of massive volumetric clouds forming the shape of a majestic {argument name="animal" default="elephant"}, highly detailed and anatomically accurate cloud structure with enormous tusks and a raised trunk, soft yet dense cumulus clouds with realistic depth and texture, dramatic golden-hour lighting, sunlight rays piercing through the clouds, subtle shadows and highlights enhancing form.
Foreground: a vast {argument name="landscape" default="African savanna meadow"} with realistic dry grass, atmospheric perspective, and cinematic depth of field. Multiple {argument name="wildlife" default="zebras"} grazing naturally across the field. Mid-air: flock of birds circling around the giant elephant cloud, adding scale and motion.
Environment: cinematic sky with warm orange and blue gradient tones, slight haze, natural color grading, ultra-realistic lighting, global illumination, volumetric fog, physically accurate shadows.
Style: DSLR photography, 85mm lens, f/2.8 aperture, shallow depth of field, HDR, 8K resolution, razor-sharp focus, intricate details, photorealism, no CGI look.
Mood: majestic, calm, surreal yet believable, wildlife documentary realism.
```

## Edinburgh Circus Lane Street Photography

> Retro görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
high-resolution street-level photo of {argument name="location" default="Circus Lane, Edinburgh"}, on a sunny partly cloudy day. A narrow cobblestone lane curves between golden-brown stone cottages and white stucco houses covered in lush pink and yellow climbing roses. In the distance, the gothic clock tower of St. Stephen’s Church rises against the blue sky. A vintage {argument name="car color" default="dark-green"} Lada 1200 is parked beside the rose-covered wall, adding a subtle Soviet-era contrast. Wet cobblestones reflect warm light, with potted flowers, brass lanterns, a wooden barrel planter, and small pedestrians in the distance creating a quiet, intimate atmosphere. Realistic textures, soft golden-hour lighting, no text.
```

## Image-to-Image Clothing and Background Swap

> Fotogerçekçi görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
task_type: image_to_image_modification, modifications: { subject_preservation: { identity: Maintain the exact facial structure, hair length, and features of the woman in the reference photo., pose: Full-body shot, walking naturally, gently reaching out to touch flowers with her left hand. }, clothing_change: { old_outfit: Cream and gold traditional Indian Anarkali suit, new_outfit: {argument name="new outfit" default="Casual dark green hoodie sweatshirt and matching green cargo sweatpants (joggers)"} }, background_replacement: { old_background: Dubai Marina cityscape skyscrapers, balcony railing, and water canal, new_background: {argument name="new background" default="Lush green garden, vibrant flower beds (hydrangeas, roses), green grass lawn, potted plants, and warm outdoor lighting."} } }, quality_hints: [ high-definition face details, natural textures, photorealistic rendering, 8k resolution, seamless background blending ]
```

## Cinematic Neo-Noir Image Transformation

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Transform this uploaded image into a cinematic 64K ultra-HD {argument name="style" default="neo-noir street photography"} scene featuring multiple versions of the same person appearing throughout the frame in different realistic poses and positions, while perfectly preserving the uploaded face identity across every character. Scene set in a {argument name="location" default="narrow deserted urban alley"} at night under dim amber streetlights with wet reflective pavement, textured old walls, cinematic fog, and deep moody shadows. Create the feeling of loneliness, introspection, and parallel moments frozen in time. Include: •One version leaning against a wall with hands in pockets •One walking toward the camera confidently •One sitting on stairs looking down •One standing beneath a streetlight looking sideways •One blurred silhouette walking in the background •One close foreground pose partially lit by warm light. All characters must look like the exact same person from the uploaded image with realistic facial consistency, natural beard details, authentic expressions, and cinematic body language. Style: ultra-photorealistic low-light street photography, neo-noir atmosphere, DSLR 85mm lens, shallow depth of field, soft bokeh, volumetric lighting, subtle film grain, dramatic contrast between warm orange lights and cool dark shadows, luxury editorial fashion photography aesthetic, masterpiece cinematic composition, realistic reflections and textures, highly detailed urban environment.
```

## Vibrant Live Concert Photography

> Görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A vibrant series of concert photos capturing a {argument name="performer" default="male performer"} singing passionately on a massive Jumbotron screen during a live musical show. He is holding a microphone close and wearing an ornate, heavily embellished jacket featuring intricate gold and silver embroidery. In the foreground, the concert crowd is alive with an enthusiastic audience holding up {argument name="lightstick color" default="glowing pink lightsticks"} and recording the live performance on their smartphones, which mirror the singer's image across their screens.
```

## Indian Street Market Portrait

> Fotogerçekçi, sinematik portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "prompt": {
    "subject": "A woman with long dark hair, wearing a stylish {argument name="outfit color" default="emerald green"} Indian-style pant-suit set with subtle gold embroidery detailing.",
    "setting": "A bustling, vibrant Indian street market crowded with people, daytime, outdoor setting, festive atmosphere.",
    "action": "The woman is standing centrally in the frame, smiling naturally, while a diverse crowd of people is walking around her in a realistic, candid street photography style.",
    "details": "The background is filled with various market stalls, street vendors, and festive lighting strings overhead, creating a busy and authentic urban environment.",
    "technical_specifications": {
      "style": "Hyper-realistic, cinematic lighting, shallow depth of field focusing on the subject.",
      "composition": "Full-body shot, centered, eye-level perspective.",
      "lighting": "Soft natural daylight, bright but balanced."
    },
    "negative_prompt": "cartoon, illustration, blurry, distorted face, extra limbs, messy clothing, low resolution, disconnected background, bad anatomy"
  }
}
```

## Aerial Ocean Shoreline Surrealism

> Retro görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A surreal composition prompt featuring a woman on the edge of a turquoise ocean where sea foam forms butterfly-like wings around her, captured in a retro 3:4 style.
```

## Flooded Art Gallery Surrealism

> Fotogerçekçi, sinematik illüstrasyon üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A hyper-realistic art gallery with white walls and track lighting, a large ornate gold-framed painting of a {argument name="painting subject" default="stormy ocean"} hanging on the wall, but the ocean waves are physically breaking out of the frame crashing water floods the gallery floor, a {argument name="object" default="small wooden rowboat"} floating on the real gallery floor as if washed out from the painting, wet reflections on concrete floor, dramatic cinematic lighting, visitors watching in awe, OzairAI subtly engraved on the frame corner, vertical 9:13 format. Ultra photorealistic, 8K, no text overlays, cinematic color grading.
```

## 90s Coastal Roadside Street Style

> Retro görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "environment_and_background": {
    "location": "{argument name="location" default="Coastal roadside, beachside view"}",
    "background_elements": [
      "Deep blue ocean/sea extending to the horizon",
      "Clear, bright blue sunny sky",
      "A portion of a {argument name="car style" default="vintage pink Volkswagen Beetle"} car, parked on the side"
    ],
    "lighting": "Bright, direct natural sunlight, daytime outdoor lighting",
    "overall_vibe": "Summer, casual, scenic travel, 90s-inspired street style"
  },
  "pose_and_composition": {
    "shot_type": "Full-body shot, vertical orientation",
    "camera_angle": "Eye-level, slightly angled from the side",
    "pose": {
      "action": "Sitting casually on the front hood/fender of a pink vintage car",
      "leg_position": "One leg bent upwards with the foot resting on the car's headlight area, while the person leans forward to tie their shoelaces",
      "hand_position": "Both hands actively holding and tying the colorful shoelaces of the raised foot",
      "head_position": "Looking down toward the hands and shoe, face partially turned in profile"
    }
  },
  "outfit_and_apparel": {
    "top": {
      "type": "Oversized graphic T-shirt",
      "color": "Vibrant orange",
      "details": "Features 'Converse' text and a vintage sneaker graphic printed on the front"
    },
    "bottom": {
      "type": "Loose-fit distressed denim jeans",
      "color": "Light blue wash",
      "details": "Ripped detailing on the knee, relaxed 90s streetwear style"
    },
    "footwear": {
      "type": "High-top canvas sneakers",
      "color": "White",
      "brand_style": "Converse All-Star style",
      "special_features": "{argument name="details" default="Eye-catching multi-colored rainbow shoelaces"}"
    }
  },
  "accessories": {
    "headwear": "Orange baseball cap featuring an embroidered logo on the front",
    "eyewear": "Classic aviator sunglasses with gold frames and tinted lenses",
    "jewelry": [
      "Silver chain necklace with a gear-shaped or circular pendant",
      "Minimalist silver bracelet on the right wrist",
      "Small stud earrings"
    ],
    "tech": "Smartwatch with an orange strap on the left wrist, matching the overall color theme"
  }
}
```

## Wet Mediterranean Summer Editorial

> Minimal görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
{
  "core_meta": {
    "image_type": "Photograph",
    "art_medium": "Digital Photography",
    "style_modifiers": [
      "Summer Editorial",
      "Beach Lifestyle"
    ],
    "overall_mood": "Serene",
    "vibe": "Naturalistic, Sensual",
    "quality_boosters": [
      "8k resolution",
      "masterpiece",
      "high skin detail"
    ]
  },
  "subject": {
    "identity": {
      "subject_type": "Human",
      "gender": "{argument name="gender" default="Female"}",
      "age": "Mid-20s",
      "ethnicity": "{argument name="ethnicity" default="Mediterranean or Latina"}",
      "description": "A woman with sun-kissed tanned skin and dark hair."
    },
    "anatomy_and_body": {
      "build_and_proportions": "Lean and athletic",
      "height_estimation_cm": "170",
      "skin_texture": "Wet skin, glistening with seawater, visible pores, fine water droplets",
      "biological_features": {
        "vascularity_and_pigment": "Even tan, subtle freckles on shoulders",
        "subsurface_scattering": "Natural skin glow under daylight",
        "skin_micro_texture": "Highly detailed wet skin texture",
        "eye_complexity": "Dark brown irises with natural reflections"
      }
    },
    "face_and_hair": {
      "face_structure": "Oval face, defined jawline, high cheekbones",
      "eyes": "Dark brown, almond-shaped",
      "eyebrows": "Naturally full, dark",
      "lips": "Full, natural pink hue, slightly parted",
      "makeup": "Minimal, no-makeup look",
      "expression": "Calm, direct gaze",
      "hair": {
        "style": "Slicked back, wet-look",
        "color": "Dark brown",
        "interaction_and_physics": "Drenched with water, strands clumping naturally"
      }
    },
    "pose_and_action": {
      "description": "Kneeling in shallow ocean surf on a pebble beach",
      "action": "Posing for a portrait",
      "body_position": {
        "stance": "Kneeling",
        "upper_body_and_arms": "Straight posture, hands resting on the pebbles between the knees",
        "lower_body_and_legs": "Kneeling in the water, legs slightly spread",
        "hand_gestures": "Relaxed fingers touching the ground"
      },
      "gaze_direction": "Directly into the lens",
      "accuracy_constraints": [
        "Anatomically correct hands",
        "Realistic knee-water interaction"
      ]
    },
    "wardrobe_and_inventory": {
      "clothing": {
        "top": {
          "type": "{argument name="clothing" default="Oversized button-down shirt"}",
          "fabric": "Thin linen",
          "color": "White",
          "details": "Completely unbuttoned, slipping off the left shoulder, soaked and translucent in areas"
        },
        "fit_and_physics": "Wet fabric clinging to the skin, draped loosely"
      },
      "accessories": {
        "jewelry": [
          "Large gold hoop earrings",
          "Thin gold rings on fingers"
        ]
      }
    }
  },
  "environment_and_scene": {
    "location": {
      "setting_type": "Tropical Beach",
      "description": "Pebble shoreline with breaking waves and turquoise water"
```

## Character Selfie Generation Prompts

> Retro, lüks 3B sahne üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
3D render Octane style, wide-angle selfie POV, a man from the attached photo in the center foreground not smiling, surrounded by high-fidelity 3D versions of Tom, Jerry, Spike the Bulldog, and Toodles Galore, a small elegant white female cartoon cat with pink ears and green eyes, all cartoon characters smiling, man in a black t-shirt, cluttered and joyful group selfie with cartoon animals huddled around his neck and shoulders, warmly lit indoor library background with wooden bookshelves, vibrant primary colors and warm wood tones, soft ambient lighting with a fun and chaotic mood, detailed fur textures and wide-angle lens stretching, Kodak Portra 400 + 24mm Wide Angle lens photograph, wide-angle selfie POV, a man from the attached photo in the center foreground not smiling, with five Harry Potter characters including Dumbledore, Harry, Hermione, Ron, and Ginny smiling, others in Hogwarts Gryffindor school robes with red and gold striped ties, man extending his arm toward the camera, cozy indoor library with wooden bookshelves and framed pictures, warm golden tones, soft indoor lamp light with a nostalgic and friendly mood, gentle background bokeh and sharp subject focus, Kodak Portra 400 + 24mm Wide Angle lens
```

## Young Woman in Football Jersey at Stadium

> Logo üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
A {argument name="subject" default="young woman with vibrant reddish-orange hair styled in a voluminous updo"} stands in a spacious indoor stadium corridor with light-colored cinder block walls and a polished concrete floor. She is positioned at a three-quarter angle away from the camera, turning her head over her left shoulder to look directly at the viewer with a slight smile. Her right hand is raised in a peace sign gesture, displaying blue nail polish. She wears a {argument name="outfit" default="white short-sleeved football jersey featuring blue stripes on the shoulders, the name \"RICHARDSON\" and the number \"5\" in blue on the back, along with a small Nike logo"}. The jersey is paired with light blue denim shorts and white sneakers with black stripes. A detailed floral tattoo is visible on her lower left leg. In the background, the hallway opens up to reveal rows of blue stadium seating under bright lighting. The overall scene is captured in a realistic, high-resolution photographic style with natural indoor illumination.
```

## Elegant Woman with Luxury Sedan at Night

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
A stylish {argument name="subject" default="South Asian woman"} with long wavy hair, soft glam makeup, and round metal-frame glasses standing next to a {argument name="vehicle" default="black luxury sedan"} with the rear door open at night. She is leaning casually with her right hand resting on top of the open car door, left arm relaxed by her side, legs crossed at the ankle in a confident and elegant stance. Wearing a fitted beige luxury co-ord suit with a cropped blazer, wide-leg trousers, and a white inner top, paired with white high-top sneakers with soft green accents. Black smartwatch on left wrist. Urban night street scene with wet asphalt reflecting neon city lights, blurred traffic and buildings with cinematic bokeh in the background. Cool blue-teal cinematic color grading, shallow depth of field, photorealistic skin texture, soft feminine facial features, ultra-detailed, 8k, full body shot, eye-level angle, vertical composition, aspect ratio 3:4. Use uploaded reference face, preserve exact facial identity.
```

## Travel Photo of Man on Mountain Overlook

> Fotogerçekçi, sinematik moda çekimi üretmek için hazır prompt. Kendi fotoğrafını yükleyerek kullanılır: bu prompt bir REFERANS GÖRSEL ister. Prompt metni İngilizce. Hazır katalog promptu.

```
Use my uploaded image,Ultra-realistic iPhone 15 Pro wide-angle lens travel photo of a stylish young man standing casually on a wooden mountain viewpoint deck overlooking dramatic lush green tropical mountains, wearing an {argument name="clothing color" default="all-red"} {argument name="clothing item" default="drop shoulder t-shirt"} and baggy black pants with {argument name="accessories" default="black sunglasses"}, hands on wooden rest and looking left side, relaxed confident pose, nature voluminous dark hair, cinematic sunlight rays breaking through massive fluffy clouds.
```

## Tropical Resort Lifestyle Portrait

> Fotogerçekçi, lüks portre üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Photorealistic tropical resort portrait of a smiling blonde woman seated on an outdoor lounge chair beside a crystal-clear turquoise lagoon, surrounded by palm trees and luxury overwater resort landscaping. She is wearing a black halter-style top, light denim shorts, hoop earrings, layered gold jewelry, and natural glam makeup, giving a playful wink at the camera. Bright midday sunlight, vibrant tropical colors, realistic skin texture, shallow depth of field, high detail, lifestyle travel photography aesthetic.
```

## Red-Haired Woman Car Portrait

> Fotogerçekçi, sinematik mimari görsel üretmek için hazır prompt. Yazıdan doğrudan üretir, fotoğraf yüklemen gerekmez. Prompt metni İngilizce. Hazır katalog promptu.

```
Photorealistic portrait of a {argument name="subject" default="young red-haired woman"} leaning through an {argument name="setting" default="open car window"} during golden hour, warm sunlight illuminating her face and hair, soft natural makeup, wearing a fitted mauve tank top. Scenic mountain landscape and bare trees in the background, viewed from inside a modern car interior with visible door panel and side mirror. Cinematic composition, shallow depth of field, realistic skin texture, high detail, warm golden lighting.
```

