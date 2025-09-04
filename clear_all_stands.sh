#!/bin/bash

# Script to delete all stands from exclusive photo and info
# This will remove all gallery entries and associated images

# Configuration
EXCLUSIVE_STANDS_FILE="/home/ivan/gravPr/gravExpo/user/pages/03.uslugi/01.razrabotka-stendov/03.ekskluziv/blog.ru.md"
EXCLUSIVE_STANDS_FOLDER="/home/ivan/gravPr/gravExpo/user/pages/03.uslugi/01.razrabotka-stendov/03.ekskluziv"

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

echo -e "${GREEN}Starting to delete all stands from exclusive photo and info...${NC}"

# Check if exclusive stands file exists
if [ ! -f "$EXCLUSIVE_STANDS_FILE" ]; then
    echo -e "${RED}Error: Exclusive stands file not found: $EXCLUSIVE_STANDS_FILE${NC}"
    exit 1
fi

# Create a backup of the original file
cp "$EXCLUSIVE_STANDS_FILE" "${EXCLUSIVE_STANDS_FILE}.backup.$(date +%Y%m%d_%H%M%S)"
echo -e "${GREEN}Created backup: ${EXCLUSIVE_STANDS_FILE}.backup.$(date +%Y%m%d_%H%M%S)${NC}"

# Count images before deletion
image_count=$(find "$EXCLUSIVE_STANDS_FOLDER" -name "*.jpg" -o -name "*.jpeg" -o -name "*.png" -o -name "*.gif" -o -name "*.webp" | grep -v "nagr2.jpg" | wc -l)
echo -e "${YELLOW}Found $image_count stand images to delete${NC}"

# Delete all stand images (except nagr2.jpg which is the main page image)
echo -e "${YELLOW}Deleting stand images...${NC}"
find "$EXCLUSIVE_STANDS_FOLDER" -name "*.jpg" -o -name "*.jpeg" -o -name "*.png" -o -name "*.gif" -o -name "*.webp" | grep -v "nagr2.jpg" | while read -r image_file; do
    if [ -f "$image_file" ]; then
        rm "$image_file"
        echo -e "  Deleted: $(basename "$image_file")"
    fi
done

# Create new content with empty gallery
NEW_CONTENT="---"$'\n'
NEW_CONTENT+="title: 'Эксклюзивные стенды'"$'\n'
NEW_CONTENT+="media_order: nagr2.jpg"$'\n'
NEW_CONTENT+="menu: 'Эксклюзивные стенды'"$'\n'
NEW_CONTENT+="visible: true"$'\n'
NEW_CONTENT+="template: stand-page"$'\n'
NEW_CONTENT+="gallery: []"$'\n'
NEW_CONTENT+="---"$'\n'
NEW_CONTENT+=""$'\n'
NEW_CONTENT+="# Эксклюзивные стенды"$'\n'
NEW_CONTENT+=""$'\n'
NEW_CONTENT+="Использование **эксклюзивных стендов** — это реальный шанс заявить о себе, продемонстрировать преимущества своей продукции и надолго запомниться посетителям выставки."$'\n'
NEW_CONTENT+=""$'\n'
NEW_CONTENT+="## Наши возможности"$'\n'
NEW_CONTENT+=""$'\n'
NEW_CONTENT+="- Индивидуальное проектирование"$'\n'
NEW_CONTENT+="- Уникальный дизайн"$'\n'
NEW_CONTENT+="- Качественные материалы"$'\n'
NEW_CONTENT+="- Профессиональная сборка"$'\n'
NEW_CONTENT+=""$'\n'
NEW_CONTENT+="Свяжитесь с нами для обсуждения вашего проекта!"$'\n'

# Write the new content to the file
echo "$NEW_CONTENT" > "$EXCLUSIVE_STANDS_FILE"

if [ $? -eq 0 ]; then
    echo -e "\n${GREEN}Completed! All stands have been deleted from the exclusive stands section.${NC}"
    echo -e "${GREEN}The gallery is now empty and ready for new content.${NC}"
    echo -e "\n${YELLOW}Next steps:${NC}"
    echo -e "1. Clear Grav cache: bin/grav clear-cache"
    echo -e "2. Check the admin panel - gallery should be empty"
    echo -e "3. Add new stands as needed"
else
    echo -e "\n${RED}Error: Failed to update the exclusive stands file${NC}"
    echo -e "${YELLOW}Restoring backup...${NC}"
    cp "${EXCLUSIVE_STANDS_FILE}.backup.$(date +%Y%m%d_%H%M%S)" "$EXCLUSIVE_STANDS_FILE"
fi
