<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Quotes | Archon</title>
    <!-- Content Security Policy to allow Tailwind CDN (unsafe-eval) -->
    <meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-eval' https://cdn.tailwindcss.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com;">
    <!-- Tailwind CSS for rapid premium styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #0f1115; color: #e2e8f0; }
        .glass-panel {
            background: rgba(30, 33, 40, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3);
        }
        .text-gradient {
            background: linear-gradient(135deg, #CB9F53, #e8b96a);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        /* Animations */
        @keyframes fadeSlideUp {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        
        .animate-fade-slide-up {
            animation: fadeSlideUp 0.6s ease-out forwards;
            opacity: 0; /* starts hidden */
        }
        
        /* Staggered delays for children */
        .stagger-1 { animation-delay: 0.1s; }
        .stagger-2 { animation-delay: 0.2s; }
        .stagger-3 { animation-delay: 0.3s; }
        
        /* Stagger for table rows */
        tbody tr {
            animation: fadeSlideUp 0.5s ease-out forwards;
            opacity: 0;
        }
        tbody tr:nth-child(1) { animation-delay: 0.1s; }
        tbody tr:nth-child(2) { animation-delay: 0.15s; }
        tbody tr:nth-child(3) { animation-delay: 0.2s; }
        tbody tr:nth-child(4) { animation-delay: 0.25s; }
        tbody tr:nth-child(5) { animation-delay: 0.3s; }
        tbody tr:nth-child(n+6) { animation-delay: 0.35s; }
    </style>
</head>
<body class="min-h-screen p-8">

    <div class="max-w-7xl mx-auto">
        
        <!-- Header -->
        <div class="flex justify-between items-center mb-10 animate-fade-slide-up stagger-1">
            <div>
                <h1 class="text-3xl font-bold text-white mb-2">Quote <span class="text-gradient">Requests</span></h1>
                <p class="text-gray-400 text-sm">Manage all incoming quotation requests from the website.</p>
            </div>
            <div>
                <a href="{{ route('home') }}" class="px-5 py-2.5 bg-gray-800 hover:bg-gray-700 text-sm font-medium rounded-lg border border-gray-700 transition-colors">
                    ← Back to Website
                </a>
            </div>
        </div>

        <!-- Table -->
        <div class="glass-panel rounded-2xl overflow-hidden animate-fade-slide-up stagger-2">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-900/50 border-b border-gray-800">
                            <th class="px-6 py-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Date</th>
                            <th class="px-6 py-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Contact Info</th>
                            <th class="px-6 py-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Product Interest</th>
                            <th class="px-6 py-4 text-xs font-semibold text-gray-400 uppercase tracking-wider">Message</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-800/50">
                        @forelse ($quotes as $quote)
                            <tr class="hover:bg-gray-800/30 transition-colors">
                                <td class="px-6 py-5 whitespace-nowrap text-sm text-gray-400">
                                    {{ $quote->created_at->format('M d, Y') }}
                                    <div class="text-xs text-gray-500 mt-1">{{ $quote->created_at->format('h:i A') }}</div>
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <div class="font-medium text-white">{{ $quote->full_name }}</div>
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap">
                                    <div class="text-sm text-blue-400 hover:text-blue-300"><a href="mailto:{{ $quote->email }}">{{ $quote->email }}</a></div>
                                    <div class="text-xs text-gray-400 mt-1">{{ $quote->phone ?? 'No phone provided' }}</div>
                                </td>
                                <td class="px-6 py-5 whitespace-nowrap">
                                    @if($quote->product)
                                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-amber-900/40 text-amber-300 border border-amber-800/50">
                                            {{ ucwords(str_replace('-', ' ', $quote->product)) }}
                                        </span>
                                    @else
                                        <span class="text-gray-500 text-sm italic">Not specified</span>
                                    @endif
                                </td>
                                <td class="px-6 py-5 text-sm text-gray-300 max-w-xs">
                                    @if($quote->message)
                                        <div class="truncate" title="{{ $quote->message }}">
                                            {{ $quote->message }}
                                        </div>
                                    @else
                                        <span class="text-gray-500 italic">No message</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-12 text-center text-gray-500">
                                    <svg class="mx-auto h-12 w-12 text-gray-600 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                    </svg>
                                    <p class="text-base font-medium text-gray-400">No quotes received yet</p>
                                    <p class="text-sm mt-1">When someone submits a quote from the website, it will appear here.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            @if($quotes->count() > 0)
            <div class="px-6 py-4 bg-gray-900/30 border-t border-gray-800 text-xs text-gray-500 flex justify-between items-center">
                <span>Showing all {{ $quotes->count() }} quotes</span>
            </div>
            @endif
        </div>

    </div>

</body>
</html>
