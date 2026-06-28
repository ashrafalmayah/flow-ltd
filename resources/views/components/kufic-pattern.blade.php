@props(['opacity' => 0.05])
<div class="absolute inset-0 overflow-hidden pointer-events-none animate-[pulse_10s_ease-in-out_infinite]"
     style="opacity: {{ $opacity }}; mask-image: linear-gradient(to bottom, transparent, black 15%, black 85%, transparent); -webkit-mask-image: linear-gradient(to bottom, transparent, black 15%, black 85%, transparent);">
    <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <pattern id="kufic-tile" x="0" y="0" width="120" height="120" patternUnits="userSpaceOnUse">
                <!-- Glowing diamond grids -->
                <rect x="10" y="10" width="100" height="100" fill="none" stroke="#38bdf8" stroke-opacity="0.3" stroke-width="1.25" class="kufic-flow-rect" transform="rotate(45 60 60)" />
                <rect x="25" y="25" width="70" height="70" fill="none" stroke="#0ea5e9" stroke-opacity="0.25" stroke-width="1" class="kufic-flow-rect" style="animation-delay: -5s;" transform="rotate(45 60 60)" />
                <rect x="40" y="40" width="40" height="40" fill="none" stroke="#00f0ff" stroke-opacity="0.4" stroke-width="0.75" class="kufic-flow-rect" style="animation-delay: -10s;" transform="rotate(45 60 60)" />
                
                <!-- Main intersecting data channels -->
                <line x1="60" y1="0" x2="60" y2="120" stroke="#00f0ff" stroke-opacity="0.4" stroke-width="0.75" class="kufic-flow-line" />
                <line x1="0" y1="60" x2="120" y2="60" stroke="#38bdf8" stroke-opacity="0.3" stroke-width="0.75" class="kufic-flow-line-rev" />
            </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#kufic-tile)" />
    </svg>
</div>

