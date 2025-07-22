//Funcion que convierte strings a caracteres aceptados por url
export function slugify(text) {
  return text
    .toString()                      // Convert to string
    .normalize('NFD')                // Normalize accented characters
    .replace(/[\u0300-\u036f]/g, '') // Remove accents
    .toLowerCase()
    .trim()
    .replace(/[^a-z0-9\s-]/g, '')    // Remove invalid chars
    .replace(/\s+/g, '-')            // Replace spaces with -
    .replace(/-+/g, '-');            // Remove duplicate -
}
