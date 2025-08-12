



<?php include 'leftasidde.php'; ?>

<!-- Container: Sidebar (Left) + Main Content (Right) -->
    <div class="flex min-h-screen">
        
        <!-- LEFT SIDE (Sidebar from include) -->
        <div class="w-64 bg-white shadow-md">
            
        </div>

        <!-- RIGHT SIDE (Main Content) -->
        <div class="flex-1 p-6 overflow-y-auto">

            <!-- Dashboard Section -->
            <div x-show="activePage === 'dashboard'" class="space-y-8">

                <!-- KPI Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white p-6 rounded-2xl shadow-md flex items-center justify-between hover:shadow-lg transition">
                        <div>
                            <p class="text-sm text-gray-500">Total Applicants</p>
                            <p class="text-3xl font-bold mt-1">456</p>
                        </div>
                        <div class="w-16 h-16 rounded-full bg-gradient-to-r from-indigo-500 to-purple-500 flex items-center justify-center text-white">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h-4a2 2 0 01-2-2v-2a2 2 0 012-2h4a2 2 0 012 2v2a2 2 0 01-2 2zM12 18V8m-4 12v-4m8 4v-4"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-md flex items-center justify-between hover:shadow-lg transition">
                        <div>
                            <p class="text-sm text-gray-500">Active Job Posts</p>
                            <p class="text-3xl font-bold mt-1">24</p>
                        </div>
                        <div class="w-16 h-16 rounded-full bg-gradient-to-r from-green-500 to-teal-500 flex items-center justify-center text-white">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-2xl shadow-md flex items-center justify-between hover:shadow-lg transition">
                        <div>
                            <p class="text-sm text-gray-500">Interviews Scheduled</p>
                            <p class="text-3xl font-bold mt-1">15</p>
                        </div>
                        <div class="w-16 h-16 rounded-full bg-gradient-to-r from-pink-500 to-red-500 flex items-center justify-center text-white">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h.01M12 11h.01M15 11h.01"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Activity + Table -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                    <!-- Recent Activity -->
                    <div class="lg:col-span-1 bg-white p-6 rounded-2xl shadow-md">
                        <h2 class="text-xl font-bold mb-4">Recent Activity</h2>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <div class="p-2 rounded-full bg-gradient-to-r from-indigo-500 to-purple-500 mr-3">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.56 0 4.96.84 6.879 2.204"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium">New applicant for <span class="font-bold">Senior Engineer</span> role.</p>
                                    <p class="text-xs text-gray-500 mt-1">2 hours ago</p>
                                </div>
                            </li>
                            <li class="flex items-start">
                                <div class="p-2 rounded-full bg-gradient-to-r from-green-500 to-teal-500 mr-3">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium">Interview with John Smith scheduled.</p>
                                    <p class="text-xs text-gray-500 mt-1">5 hours ago</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Job Table -->
                    <div class="lg:col-span-2 bg-white p-6 rounded-2xl shadow-md">
                        <h2 class="text-xl font-bold mb-4">Open Job Posts</h2>
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-sm divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-4 py-2 text-left text-gray-500">Position</th>
                                        <th class="px-4 py-2 text-left text-gray-500">Department</th>
                                        <th class="px-4 py-2 text-left text-gray-500">Applicants</th>
                                        <th class="px-4 py-2 text-left text-gray-500">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-2 font-medium">Senior Software Engineer</td>
                                        <td class="px-4 py-2 text-gray-500">Technology</td>
                                        <td class="px-4 py-2">87</td>
                                        <td class="px-4 py-2">
                                            <span class="px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Active</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-2 font-medium">Product Manager</td>
                                        <td class="px-4 py-2 text-gray-500">Product</td>
                                        <td class="px-4 py-2">23</td>
                                        <td class="px-4 py-2">
                                            <span class="px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Active</span>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-2 font-medium">Marketing Specialist</td>
                                        <td class="px-4 py-2 text-gray-500">Marketing</td>
                                        <td class="px-4 py-2">51</td>
                                        <td class="px-4 py-2">
                                            <span class="px-2 py-1 text-xs font-semibold text-green-700 bg-green-100 rounded-full">Active</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</body>
</html>
